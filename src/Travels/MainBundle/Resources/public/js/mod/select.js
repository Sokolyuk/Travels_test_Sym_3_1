define(['jquery'], function($){

	var Select = (function() {
		var module = function() {};

		module.prototype =
		{
			constructor: module,
			init: function() {
				alert('Select.init();');
			}
		};

		return module;
	})();

	return Select;
});
