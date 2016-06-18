define(['jquery'], function($){
	"use strict";
	var Select = (function() {
		var self = null;
		var module = function() {
			self = this;
		};
		var keyupTimer = undefined;
		var id = "departure_airportselector_input";
		var inpElem = undefined;

		module.prototype =
		{
			constructor: module,
			init: function() {

				inpElem = $("#" + id);
				if (!inpElem.length) {
					console.error('Element by id=' + id + ' not found');
					inpElem = undefined;
					return;
				}
/*				inpElem.focusout(function(){
					$(".content-bg-pall").animate({backgroundColor:'rgba(0,0,0,0.0)'}, 2000);
				});
				inpElem.focusin(function(){
					$(".content-bg-pall").animate({backgroundColor:'rgba(0,0,0,0.3)'}, 2000);
					console.log('in');
				});
				*/
				inpElem.keyup(function(){
					var s = inpElem.val();
					if (typeof s !== 'string' || s.length < 3) {
						self.hide();
						self.clearSelectedData();
						return;
					}

					if (typeof self.keyupTimer !== 'undefined' ) {
						clearInterval(self.keyupTimer);
					}
					
					self.keyupTimer = setInterval(function(){
						clearInterval(self.keyupTimer);
						self.keyupTimer = undefined;
						self.xhr(s);
					}, 600);
				});
			},
			xhr: function(s) {
				self.clearSelectedData();
				var url = "/ajax/airport/" + s;
				$.getJSON(url, function(data) {
					self.renderData(data, s);
				}).fail(function(jqxhr, textStatus, error){
					try{
						var responseJson = jQuery.parseJSON(jqxhr.responseText);
						if (typeof responseJson !== 'object' || typeof responseJson.errormessage !== 'string') {
							throw new Error();
						}
						self.renderError(responseJson.errormessage);
					}catch(e){
						console.error('xhr: code=' + jqxhr.status + ", textStatus=" + textStatus + ", error=" + error);
						self.renderError('Service temporarily unavailable');
					}
				});
			},
			hide: function() {
				$("#airportselector_dialog").find(".closeBtn").trigger( "click" );
			},
			clearSelectedData: function() {
				inpElem.data("data", undefined);
			},
			renderData: function(data, s) {
				try{
					var s_reg = "^" + s;
					var dlg = $('#airportselector_dialog');
					dlg.css('opacity', '0.0');

					var items = $("#airportselector_items");
					items.empty();

					var splitSelected = function(ss, city){
						var city_m = city.match(new RegExp(ss, 'i'));
						if (city_m !== null) {
							return '<span class="airportselector-item-text-match">' + city_m + '</span>' + city.replace(new RegExp(ss, 'i'), '');
						} else {
							return city;
						}
					}
					
					var init_events = function(elm) {
						$(elm).click(function() {
							inpElem.data("data", $(this).data().data); // <<< HERE set selected data to input (<input id="departure_airportselector_input"..)
							inpElem.val($(this).data().data.title);
							self.hide();
							//Result of task:
							console.log("Result: " + inpElem.data("data").iata + " / " + inpElem.data("data").title + " / " + inpElem.data("data").type);
						});
					}

					$.each(data, function(index, item) {
						if (index === 3) return false;

						var html_title = (typeof item.relatedLocations === "object" && (item.relatedLocations !== null) && (item.relatedLocations.length > 0) ? ' - Alle Flughäfen' : '');

						var newEl = $('<li class="airportselector-item">' +
								'	<div class="airportselector-item-icon">' +
								'		<span>¿</span>' +
								'	</div>' +
								'	<div class="airportselector-item-text">' +
								'		' + splitSelected(s_reg, item.city) + '<span class="airportselector-item-text-italic">' + html_title + '</span>' +
								'		<div class="airportselector-item-region">' + item.country + '</div>' +
								'	</div>' +
								'	<div class="airportselector-item-iata-wrapper">' +
								'		<span class="airportselector-item-iata">' + item.iata + '</span>' +
								'	</div>' +
								'</li>')

						items.append(newEl);
						init_events(newEl);
						newEl.data("data", {type: item.type, title: item.city + html_title, iata: item.iata});

						$.each(item.relatedLocations, function(subindex, subitem) {
							if (subindex === 5) return false;

							var newSubEl = $(
								'<li class="airportselector-subitems">' +
								'	<ul>' +
								'		<li class="airportselector-subitem-wrapper">' +
								'			<div class="airportselector-subitem">' +
								'				<div class="airportselector-item-icon">' +
								'					<span> ( </span>' +
								'				</div>' +
								'				<div class="airportselector-item-text">' + splitSelected(s_reg, subitem.name) + '<span class="airportselector-item-text-rel">&nbsp;-&nbsp;' + splitSelected(s_reg, subitem.city) + '</span>' +
								'					<div class="airportselector-item-region">' + subitem.distance + ' ' + subitem.distanceUnit + ' bis ' + subitem.city + '</div>' +
								'				</div>' +
								'				<div class="airportselector-item-iata-wrapper">' +
								'					<span class="airportselector-item-iata">' + subitem.iata + '</span>' +
								'				</div>' +
								'			</div>' +
								'		</li>' +
								'	</ul>' +
								'</li>');
							items.append(newSubEl);
							init_events(newSubEl);
							newSubEl.data("data", {type: subitem.type, title: subitem.name, iata: subitem.iata});
						});
					});
					dlg.fadeTo('fast', 1.0);
				}catch(e){
					console.error(e);
					self.renderError('Service temporarily unavailable');
				}
			},
			renderError: function(errorMessage) {
				console.error(errorMessage);
				self.clearSelectedData();
				var dlg = $('#airportselector_dialog');
				dlg.css('opacity', '0.0');
				var items = $("#airportselector_items");
				items.empty();

				var newEl = $('<div class="airportselector-error"><span>' + errorMessage + '</span></div>');

				items.append(newEl);

				dlg.fadeTo('fast', 1.0);
			}
		};

		return module;
	})();

	return Select;
});
