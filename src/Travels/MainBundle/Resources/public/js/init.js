requirejs.config({
	paths: {
		jquery:		'lib/jquery-3.0.0.min',
	},
	shim: {
		jquery: {
			exports: "$"
		},
	}
});

require(["jquery", "application"], function ($, Application) {
	$(document).ready(function() {
		var myApplication = new Application();
		myApplication.init();
	});
});	