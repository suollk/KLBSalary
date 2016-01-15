requirejs.config({
	baseUrl :"tpl/js",
	paths: {
		jquery: "jquery-1.11.3.min",
		uikit: "uikit.min",
		validate:"jquery.validate.min",
		cookie:"jquery.cookie",
		JQmd5:"jQuery.md5",
		JQbase64:"jquery.base64"
	},
	shim: {
		"uikit": ["jquery"],
		"cookie":["jquery"],
		"JQmd5":["jquery"],
		"JQbase64":["jquery"]
	}
})

//requirejs中如果不是直接实例化的模块   模块名字最好不要与方法同名   前面加_  或者使用不加别名的加载方式

requirejs(['jquery','cookie', 'uikit','notie','base',"JQmd5","JQbase64"], function($) {
	if (!$('#psw2').hasClass('uk-hidden')){
		notie.alert(3,"欢迎张木云编号1507702登录!请设置你的查询密码!"+$.cookie('klbweixinuserid'),1000);
	}else{
		notie.alert(1,"欢迎张木云编号1507702登录!"+$.cookie('klbweixinuserid'),1000);
	}

	$("#submit").on('click',function(){
		var notietitle;

		if($('#psw1').val().length<=6){
			notie.alert(3,"查询密码不能为空或少于六位,请填写正确!",1.5);
			return;
		}

		if($('#psw2').val().length<=6&&!$('#psw2').hasClass('uk-hidden')){
			notie.alert(3,"查询密码不能为空或少于六位,请填写正确!",1.5);
			return;
		}

		if($('#psw2').val()!=$('#psw1').val()&&!$('#psw2').hasClass('uk-hidden')){
			notie.alert(3,"两次密码填写不一致!!请填写正确!",1.5);
			return;
		}
		//userid = $.cookie('klbweixinuserid');
		//userpassword =$('#psw1').val();
		//var timestrp = $.cookie('klbweixinusersessionid');
		//userpassword = userid + userpassword;
		//userpassword = $.base64.encode(userpassword);
		//userpassword = $.base64.encode(userpassword);
		//userpassword = $.md5(userpassword);
		//userpassword = $.base64.encode(userpassword);
		//userpassword = userpassword + '||'+ timestrp;
		//userpassword = $.base64.encode(userpassword);

		eval(function(p,a,c,k,e,d){e=function(c){return(c<a?"":e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)d[e(c)]=k[c]||e(c);k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1;};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p;}('o d$=[\'\\f\\i\\b\\j\\4\\7\\l\\7\\a\\k\\6\\4\\m\\7\\9\',\'\\u\\r\\6\\j\\t\',\'\\f\\i\\b\\j\\4\\7\\l\\7\\a\\k\\6\\4\\m\\6\\4\\6\\6\\7\\8\\a\\7\\9\',\'\\n\\n\'];p=$["\\c\\8\\8\\f\\7\\4"](d$[0]);5=$(d$[1])["\\v\\e\\i"]();o q=$["\\c\\8\\8\\f\\7\\4"](d$[2]);5=p+5;5=$["\\b\\e\\6\\4\\h\\g"]["\\4\\a\\c\\8\\9\\4"](5);5=$["\\b\\e\\6\\4\\h\\g"]["\\4\\a\\c\\8\\9\\4"](5);5=$["\\w\\9\\s"](5);5=$["\\b\\e\\6\\4\\h\\g"]["\\4\\a\\c\\8\\9\\4"](5);5=5+d$[3]+q;5=$["\\b\\e\\6\\4\\h\\g"]["\\4\\a\\c\\8\\9\\4"](5);',33,33,'||||x65|userpassword|x73|x69|x6f|x64|x6e|x62|x63|_|x61|x6b|x34|x36|x6c|x77|x75|x78|x72|x7c|var|userid|userlimitad5b1|x70|x35|x31|x23|x76|x6d'.split('|'),0,{}))

		$.ajax({
			type: "post",
			async: true,
			cache: false,
			url: baseurl+"?controller=ajax&method=checklogin&hash="+userpassword,
			//data: {
			//	controller:"ajax",
			//	method:"checkuserlogin",
			//	hash: userpassword
			//},
			dataType: "jsonp",
			jsonp: "jsoncallback1",
			success: function(json) {
				//
				if(json["result"]==''){
					document.location = baseurl + "?controller=salary&method=index";
				}else{
					notie.alert(3,json["result"],1.5);
				}
			},
			error: function() {
				notie.alert(2,"网络请求错误",1.5);
			}
		});


	})
})