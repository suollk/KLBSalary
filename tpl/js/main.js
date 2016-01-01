requirejs.config({
	paths: {
		jquery: "jquery-1.11.3.min",
		uikit: "uikit.min"
	},
	shim: {
		"uikit": {
			deps: ["jquery"],
			exports: "uikit.error"
		}
	}
})

requirejs(['jquery', 'uikit'], function($, uikit) {

})