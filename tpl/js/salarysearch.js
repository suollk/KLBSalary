requirejs.config({
	baseUrl :"tpl/js",
	paths: {
		jquery: "jquery-1.11.3.min",
		uikit: "uikit.min"
	},
	shim: {
		"uikit": ["jquery"]
	}
})

//requirejs中如果不是直接实例化的模块   模块名字最好不要与方法同名   前面加_  或者使用不加别名的加载方式

requirejs(['jquery', 'uikit','notie','base'], function($) {
	$("#selectlist li a").on("click",function(){
		document.location = baseurl + "?controller=salary&method=index&mouth="+$(this).attr("data-mouth");
	})
})