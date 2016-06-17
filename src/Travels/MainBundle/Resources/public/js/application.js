define(['jquery', 'mod/carousel', 'mod/select'], function($, Carousel, Select){

	var Application = (function() {

		var carousel;
		var select;

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
			},
			initCarousel: function() {
				carousel = new Carousel();
				carousel.init();
			},
			initSelect: function() {
				select = new Select();
				select.init();
			}
		};

		return module;
	})();

	return Application;
});
