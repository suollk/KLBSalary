requirejs.config({
	baseUrl: "tpl/js",
	paths: {
		jquery: "jquery-1.11.3.min",
		uikit: "uikit.min",
		cookie: "jquery.cookie",
		JQbase64: "jquery.base64",
		notice:"components/notify.min"
	},
	shim: {
		"uikit": ["jquery"],
		"cookie": ["jquery"],
		"JQbase64": ["jquery"],
		"notice":["uikit"]
	}
})

//requirejs中如果不是直接实例化的模块   模块名字最好不要与方法同名   前面加_  或者使用不加别名的加载方式

requirejs(['jquery', 'cookie', 'uikit', 'base', "JQbase64","notice"], function($) {
	//动态设定高度
	setquestionheight();
	//特殊处理题目数量只有1的情况下  只显示提交
	if(getQuestionCount()=="1"){
		$("#btnnext").addClass("uk-hidden");
	}

	$("a.uk-button").on("click", function() {
		//优先判断选中状态
		if ($(this).attr("data-check") == "true") {
			//				直接变为取消就可以
			$(this).attr("data-check", "false");

			$(this).html("投票给Ta");
			$(this).removeClass("uk-button-success");
			$(this).addClass("uk-button-primary");

		} else if ($(this).attr("data-check") == "false") {
			//后期在此判断一人多票  以及多选的最大值Todo
			//	判断多选还是单选
			if ($("#" + $(this).attr("data-questionid") + "question").attr("data-type") == "3") {
				//单选  将已经选择的选择变为非选择  然后在给这个选项加上选择
				var oldsel = $("a.uk-button[data-questionid=" + $(this).attr("data-questionid") + "][data-check='true']");
				$(oldsel).attr("data-check", "false");

				$(oldsel).html("投票给Ta");
				$(oldsel).removeClass("uk-button-success");
				$(oldsel).addClass("uk-button-primary");

			}
			$(this).attr("data-check", "true");

			$(this).html("<i class='uk-icon-check-square-o'></i>已投");
			$(this).removeClass("uk-button-primary");
			$(this).addClass("uk-button-success");
		}
	})


	$("#btnup button").on("click", function() {
		getQuestionBtnVisable(-1);
	});
	$("#btnnext button").on("click", function() {
		getQuestionBtnVisable(1);
	});

	//获取每个题目的div高度
	function setquestionheight() {
		//动态设定高度
		$(".question").innerHeight($('#buttoncontent')[0].offsetTop - 6);
		$(".questionscroll").innerHeight($(".question").innerHeight() - $("legend").innerHeight())
		$(".imgdiv").innerHeight($(".imgdiv").innerWidth());
		$(".imgdiv img").innerHeight($(".imgdiv").innerWidth() - 2);
	}
	//获取当前题目总数
	function getQuestionCount() {
		return $(".question").length;
	}
	//获取当前正在做的题目序号
	function getAnswernow() {
		return $(".question:not('.uk-hidden')").attr("data-sortnum");
	}
	//设置题目变动滑动
	function getQuestionBtnVisable(changenum) {
		var nownum = parseFloat(getAnswernow());
		var countnum = parseFloat(getQuestionCount()) - 1;
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
    //
	//$("#sure").on("click",function(){
	//	UIkit.modal.confirm('确定要提交吗?', function(){ UIkit.modal.alert('Confirmed!'); });
	//})

	$("#modalcanel").on("click",function(){
		var modal = UIkit.modal("#modasubmit");
		modal.hide();
	})

	$("#modalsubmit").on("click",function(){
		var modal = UIkit.modal("#modasubmit");
		modal.hide();
		var modalspain = UIkit.modal("#modal-spinner");
		modalspain.show();
		var backjson="";
		var inquiryid = $("#inquirecontent").attr("data-inquireid");

		//组织返回的数据
		$(".uk-form div[data-inquireid='"+inquiryid+"']").each(function(index) {
			if ($(this).attr("data-type")=="0"){
				//单选题目生成json
				backjson = backjson + '{"id":"'+guid()+'","inquireid":"'+inquiryid
				          +'","questionid":"'+$(this).attr("data-id")+'","answer":"'
				          +$("input:radio[name='" + $(this).attr("data-id") + "']:checked").val()
					      +'","date":"'+Math.round(new Date().getTime() / 1000)+'"},';
			}else if ($(this).attr("data-type")=="1"){
				//多选题目生成json
				var selval="";
				var questionid = $(this).attr("data-id");
				var arrChk = $("input[name='" + $(this).attr("data-id") + "']:checked");
				if (arrChk != null) {
					$(arrChk).each(function() {
						backjson = backjson + '{"id":"'+guid()+'","inquireid":"'+inquiryid
							+'","questionid":"'+questionid+'","answer":"'
							+this.value
							+'","date":"'+Math.round(new Date().getTime() / 1000)+'"},'; this.value;
					});
				}
			}else if ($(this).attr("data-type")=="2"){
				//问答题目生成json
				backjson = backjson + '{"id":"'+guid()+'","inquireid":"'+inquiryid
					+'","questionid":"'+$(this).attr("data-id")+'","answer":"'
					+$(this).find("textarea[data-id="+$(this).attr("data-id")+"]").val()
					+'","date":"'+Math.round(new Date().getTime() / 1000)+'"},';
			}else if ($(this).attr("data-type")=="3"){
				//图片单选题目生成json
				backjson = backjson + '{"id":"'+guid()+'","inquireid":"'+inquiryid
					+'","questionid":"'+$(this).attr("data-id")+'","answer":"'
					+$(this).find("a[data-check='true']").attr("data-optionid")
					+'","date":"'+Math.round(new Date().getTime() / 1000)+'"},';
			}else if ($(this).attr("data-type")=="4"){
				//图片多选题目生成json
				var selval="";
				var questionid = $(this).attr("data-id");
				var arrChk = $("a[data-check='true'][data-questionid='"+$(this).attr("data-id")+"']");
				if (arrChk != null) {
					$(arrChk).each(function() {
						backjson = backjson + '{"id":"'+guid()+'","inquireid":"'+inquiryid
							+'","questionid":"'+questionid+'","answer":"'
							+$(this).attr("data-optionid")
							+'","date":"'+Math.round(new Date().getTime() / 1000)+'"},';
					});
				}
			}
		});

		backjson = '{"data":[' + backjson.substring(0, backjson.length - 1) + "]}";

		$.ajax({
			type: "post",
			async: true,
			cache: false,
			url: baseurl + "?controller=inquiry&method=insertanswer&backjson=" + backjson,
			dataType: "jsonp",
			jsonp: "jsoncallback1",
			success: function(json) {
				if (json["result"] == '') {
					//返回选择问卷页面
					document.location = baseurl + "?controller=inquirylist&method=index&from=inquiry";
				} else {
					modalspain.hide();
					UIkit.notify({
						message: json["result"],
						status: 'danger',
						timeout: 6000,
						pos: 'bottom-center'
					});
				}
			},
			error: function() {
				UIkit.notify({
					message: "网络请求错误",
					status: 'danger',
					timeout: 6000,
					pos: 'bottom-center'
				});
			}
		});
	})
})