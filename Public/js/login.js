$(document).ready(function() {
	$("div.weixin").click(function() {
		if($(this).hasClass("toggleimg")) {
			$(this).removeClass("toggleimg");

		} else {
			$(this).addClass("toggleimg");
		}
		$("div.weixinpanel").toggle();
	});

	$("div.weixin").mouseover(function() {
		if($(this).hasClass("toggleimg")) {
			$(this).css("background-position", "-90px -100px");
		} else {
			$(this).css("background-position", "0px -100px");
		}

		$("div.weixin").mouseout(function() {
			if($(this).hasClass("toggleimg")) {
				$(this).css("background-position", "-90px 0px");
			} else {
				$(this).css("background-position", "0px 0px");
			}

		});

	});

	//账号异步后台验证

	$(".email-wrap .account").blur(function() {
		$("span.mail-error-tips").css("display", "none");
		var use = $(this).val();
		if(use != "") {
			//$("span.mail-error-tips").css("display", "none");
			$.post("/thinkphp3.2.3/index.php/Home/Index/phonecheck/", {
				phone: use
			}, function(data) {

				if(data == 1) {

				} else {
					$("span.mail-error-tips").css("display", "block");
				}
			});
		}

	});

	//登录界面轮播图设置
	var times = 0;
	//	$("#wrapper .lunbo .wrapper-box").eq(0).css("background","url(img/login/1.jpg) no-repeat center center");
	//	$("#wrapper .lunbo .wrapper-box").eq(2).css("background","url(img/login/3.jpg) no-repeat center center");
	//	$("#wrapper .lunbo .wrapper-box").eq(1).css("background","url(img/login/2.jpg) no-repeat center center");
	$("#wrapper .lunbo .wrapper-box").eq(0).fadeIn(1000);
	setInterval(function() {
		times++;
		//console.log(times);
		switch(times) {
			case 1:
				$("#wrapper .lunbo .wrapper-box").eq(1).fadeIn(1000);
				$("#wrapper .lunbo .wrapper-box").eq(0).fadeOut(1000);

				break;
			case 2:
				$("#wrapper .lunbo .wrapper-box").eq(2).fadeIn(1000);
				$("#wrapper .lunbo .wrapper-box").eq(1).fadeOut(1000);

				break;
			case 3:
				$("#wrapper .lunbo .wrapper-box").eq(0).fadeIn(1000);
				$("#wrapper .lunbo .wrapper-box").eq(2).fadeOut(1000);

				times = 0
				break;

		}

	}, 4000);

});