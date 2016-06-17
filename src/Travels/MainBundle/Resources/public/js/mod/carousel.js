define(['jquery'], function($){

	var Carousel = (function() {
		var module = function() {};

		module.prototype =
		{
			constructor: module,
			init: function() {
				alert('Carousel.init();');
			}
		};

		return module;
	})();

	return Carousel;
});
