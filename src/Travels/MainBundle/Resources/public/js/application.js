define(['jquery', 'mod/carousel', 'mod/select', 'mod/effects'], function($, Carousel, Select, Effects){
	"use strict";
	var Application = (function() {

		var carousel;
		var select;
		var effects;

		var self = null;
		var module = function() {
			self = this;
		};

		module.prototype =
		{
			constructor: module,
			init: function() {
				self.initCarousel();
				self.initSelect();
				self.initEffects();
				console.log('Wellcome!');
				console.log('Dmitry Sokolyuk 2016');
				console.log('Test Task: Departure Airport Control');
			},
			initCarousel: function() {
				carousel = new Carousel();
				carousel.init();
			},
			initSelect: function() {
				select = new Select();
				select.init();
			},
			initEffects: function() {
				effects = new Effects();
				effects.init();
			}
		};

		return module;
	})();

	return Application;
});
