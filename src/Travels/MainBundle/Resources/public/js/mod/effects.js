define(['jquery'], function($){
	"use strict";
	var Effects = (function() {
		var module = function() {};

		module.prototype =
		{
			constructor: module,
			init: function() {
				$(".closeBtn").click(function(){
					var el = $(this).parents(".airportselector-dialog");
					el.fadeTo('fast', 0.0, function(){el.hide();});
				});
			}
		};

		return module;
	})();

	return Effects;
});


