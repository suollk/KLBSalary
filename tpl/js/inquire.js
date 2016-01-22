requirejs.config({
	baseUrl: "tpl/js",
	paths: {
		jquery: "jquery-1.11.3.min",
		uikit: "uikit.min",
		cookie: "jquery.cookie",
		JQbase64: "jquery.base64"
	},
	shim: {
		"uikit": ["jquery"],
		"cookie": ["jquery"],
		"JQbase64": ["jquery"]
	}
})

//requirejs中如果不是直接实例化的模块   模块名字最好不要与方法同名   前面加_  或者使用不加别名的加载方式

requirejs(['jquery', 'cookie', 'uikit','base', "JQbase64"], function($) {
	$("#btnup button").on("click", function() {
		getQuestionBtnVisable(-1);
	});
	$("#btnnext button").on("click", function() {
		getQuestionBtnVisable(1);
	});
	setquestionheight();
	//获取每个题目的div高度
	function setquestionheight() {
		//动态设定高度
		$(".question").innerHeight($('#buttoncontent')[0].offsetTop - 6);
		$(".questionscroll").innerHeight($(".question").innerHeight() - $("legend").innerHeight())
	}
	//获取当前题目总数
	function getQuestionCount() {
		console.log($(".question").length);
		return $(".question").length;
	}
	//获取当前正在做的题目序号
	function getAnswernow() {
		console.log($(".question:not('.uk-hidden')").attr("data-sortnum"));
		return $(".question:not('.uk-hidden')").attr("data-sortnum");
	}
	//设置题目变动滑动
	function getQuestionBtnVisable(changenum) {
		var nownum = parseFloat(getAnswernow());
		var countnum = parseFloat(getQuestionCount())-1;
		changenum = parseFloat(changenum);
		changenum = changenum + nownum;
		$(".question").filter(function() {
			$(this).addClass("uk-hidden");
			if ($(this).attr("data-sortnum") == changenum) {
				$(this).removeClass("uk-hidden")
			}
		})
		nownum = parseFloat(getAnswernow());
		if (nownum == 0) {
			$("#btnup").addClass("uk-invisible");
			if (countnum = 1) {
				$("#btnnext").removeClass("uk-hidden");
				$("#btnsubmit").addClass("uk-hidden");
			} else {
				$("#btnnext").addClass("uk-hidden");
				$("#btnsubmit").removeClass("uk-hidden");
			}
		} else if (nownum == countnum) {
			$("#btnup").removeClass("uk-invisible");
			$("#btnnext").addClass("uk-hidden");
			$("#btnsubmit ").removeClass("uk-hidden");
		} else {
			$("#btnup").removeClass("uk-invisible");
			$("#btnnext").removeClass("uk-hidden");
			$("#btnsubmit").addClass("uk-hidden");
		}
	}
})