define(['jquery'], function($){
	"use strict";
	var Select = (function() {
		var self = null;
		var module = function() {
			self = this;
		};
		var m_keyupTimer = undefined;
		var m_inpElem = undefined;
		var m_items = undefined;
		var m_dlg = undefined; 

		module.prototype =
		{
			constructor: module,
			init: function() {

				m_inpElem = $("#departure_airportselector_input");
				m_dlg = $('#airportselector_dialog');
				m_items = $("#airportselector_items");

				m_inpElem.focusout(function(){
					$(".content-bg-pall").css({ 'background-color': 'rgba(0, 0, 0, 0.0)' });
					self.hide();
				});
				m_inpElem.focusin(function(){
					$(".content-bg-pall").css({ 'background-color': 'rgba(0, 0, 0, 0.3)' });
					var dt = m_inpElem.data("data");
					if (typeof dt !== 'undefined') {
						self.xhr(dt.iata);
					} else {
						if (m_inpElem.val().length > 2) self.show();
					}
				});
				
				m_inpElem.keyup(function(e){
					if (typeof m_keyupTimer !== 'undefined' ) {
						clearInterval(m_keyupTimer);
					}

					var s = m_inpElem.val();
					if (typeof s !== 'string' || s.length < 3) {
						self.hideAndClearData();
						return;
					}

					if (e.which === 13) {
						m_items.children("li:first-child").trigger("click");
					} else if (e.which === 27) {
						self.hide();
					} else {
						m_keyupTimer = setInterval(function(){
							clearInterval(m_keyupTimer);
							m_keyupTimer = undefined;
							self.xhr(s);
						}, 600);
					}
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
			hideAndClearData: function() {
				self.hide();
				self.clearSelectedData();
			},
			show: function() {
				m_dlg.css('opacity', '0.0');
				m_dlg.fadeTo('fast', 1.0);
			},
			clearSelectedData: function() {
				m_inpElem.data("data", undefined);
			},
			renderData: function(data, s) {
				try{
					var s_reg = "^" + s;
					m_dlg.css('opacity', '0.0');

					m_items.empty();

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
							m_inpElem.data("data", $(this).data().data); // <<< HERE set selected data to input (<input id="departure_airportselector_input"..)
							m_inpElem.val($(this).data().data.title);
							self.hide();
							//Result of task:
							console.log("Result: " + m_inpElem.data("data").iata + " / " + m_inpElem.data("data").title + " / " + m_inpElem.data("data").type);
						});
					}

					if (typeof data === "string") {
						data = jQuery.parseJSON(data);
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

						m_items.append(newEl);
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
							m_items.append(newSubEl);
							init_events(newSubEl);
							newSubEl.data("data", {type: subitem.type, title: subitem.name, iata: subitem.iata});
						});
					});
					m_dlg.fadeTo('fast', 1.0);
				}catch(e){
					console.error(e);
					self.renderError('Service temporarily unavailable');
				}
			},
			renderError: function(errorMessage) {
				console.error(errorMessage);
				self.clearSelectedData();
				m_dlg.css('opacity', '0.0');
				m_items.empty();
				var newEl = $('<div class="airportselector-error"><span>' + errorMessage + '</span></div>');
				m_items.append(newEl);
				m_dlg.fadeTo('fast', 1.0);
			}
		};

		return module;
	})();

	return Select;
});
