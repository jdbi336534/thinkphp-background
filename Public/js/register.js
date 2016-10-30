$(document).ready(function() {
	var checknum = true;
	var flagphone = false;
	var flagpwd1 = false;
	var flagpwd2 = false;
	var flagcode = false;
	//手机号码正则判断
	checkphone("#userMobile", ".tip", "请输入正确的手机号码，方便接受订单通知，找回密码。", "输入的号码有误！", /^[1-3]\d{10}$/, "num");
	//验证码判断
	//check("#mobileCode",".tip","","验证码错误！");
	checkpwd("#password", ".tip", "必须包含大小写字母和数字的组合，不能使用特殊字符，长度在6-20之间", "密码格式错误！", /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/, "str");
	//两次密码是否相等判断
	key();
	//验证码判断
	checkcode();
	//点击更换验证码
	fleshVerify()
	agree();

	function checkcode() {
		$("#mobileCode").focus(function() {
			if(checknum) {
				$(".reg-imgCode").find(".tip").removeClass("error").html("");
				$(".reg-imgCode").find(".tip").removeClass("ok").html("");
				$(".reg-imgCode").find(".tip").addClass("warning").html("验证码不区分大小写,验证一次后便失效，若看不清，请点击更换图片验证码！");
			}
		});
		$("#mobileCode").blur(function() {

			var Code = $(this).val();
			if(checknum) {
				$(".reg-imgCode").find(".tip").removeClass("warning").html("");
				checknum = false;
				$.get("/thinkphp3.2.3/index.php/Home/Index/tocheckcode/", {
					verify: Code
				}, function(data) {
					if(data == 1) {
						flagphone = true;
						$(".reg-imgCode").find(".tip").removeClass("error").html("");
						$(".reg-imgCode").find(".tip").addClass("ok").html("");
					} else {
						flagphone = false;
						$(".reg-imgCode").find(".tip").removeClass("ok").html("");
						$(".reg-imgCode").find(".tip").addClass("error").html("验证码错误！");
					}
				});
			}

		});
	}
	//点击更换验证码
	function fleshVerify() {
		//重载验证码
		$("#verifyImg").on("click", function() {
			$(".reg-imgCode").find(".tip").removeClass("error").html("");
			$(".reg-imgCode").find(".tip").removeClass("ok").html("");
			checknum = true;
			var time = new Date().getTime();
			$(this).attr("src", "/thinkphp3.2.3/index.php/Home/Index/verify_c/" + time);
		});
	}
	//点击agree
	function agree() {
		$("#agreei").click(function() {
console.log(1111);
			// if(flagphone) {
			// 	if(flagcode) {
			// 		if(flagpwd1) {
			// 			if(flagpwd2) {
							// if($("#agreei").hasClass("focusin")) {
							// 	$("#agreei").removeClass("focusin");
							// 	$(".reg-btn a.regMobBtn").css("background-position", "0 -141px");
							// 	$(".reg-btn a.regMobBtn").off("click");
							// } else {
								$("#agreei").addClass("focusin");
								$(".reg-btn a.regMobBtn").css("background-position", "0 -196px");
								$(".reg-btn a.regMobBtn").on("click", function() {
									var use = $("#userMobile").val();
									var pwd = $("#repeatpasswd").val();
									$.post("/background/index.php/Home/Index/insert/", {
										username: 123,
										password: 456
									}, function(data) {
										if(data == 1) {
											$("form").html("<div style=\"margin:200px auto;width:260px;text-align:center;font-size:20px;\">注册成功，点击返回<a href='/thinkphp3.2.3/index.php/Home/Index/openlogin' style=\"color:blue;\">登录</a>！</div>");
										} else {
											$("form").html("<div style=\"margin:200px auto;width:260px;text-align:center;font-size:20px;\">注册失败，点击<a href='/thinkphp3.2.3/index.php/Home/Index/openurl' style=\"color:blue;\">重试</a>！</div>");
										}
									});

								});

							// }
			// 			}
			// 		}
			// 	}
			// }
		});
	}

	//第二次输入密码验证
	function key() {
		$("#repeatpasswd").focus(function() {
			$(this).parent().parent().find(".tip").addClass("warning").html("再次输入密码,必须包含大小写字母和数字的组合，不能使用特殊字符，长度在6-20之间");
		});
		$("#repeatpasswd").blur(function() {
			var reg = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
			var data = $(this).val();
			var result = reg.test(data);
			$(this).parent().parent().find(".tip").removeClass("warning");
			if(result) {
				var psd1 = $("#password").val();
				var psd2 = $("#repeatpasswd").val();
				//console.log(psd1+"-"+psd2);
				if(psd1 == psd2) {
					flagpwd2 = true;
					$(this).parent().parent().find(".tip").removeClass("error");
					$(this).parent().parent().find(".tip").addClass("ok").html("");
					//console.log(psd1+"-"+psd2);
				} else {
					flagpwd2 = false;
					$(this).parent().parent().find(".tip").removeClass("ok");
					$(this).parent().parent().find(".tip").addClass("error").html("两次密码不一致！");
					//console.log("shit");
				}

			} else {
				$(this).parent().parent().find(".tip").removeClass("ok");
				$(this).parent().parent().find(".tip").addClass("error").html("输入的密码有误！");
			}
		});

	}

	function checkphone(ele, find, warning, error, reg, type) {
		$(ele).focus(function() {
			$(this).parent().parent().find(find).addClass("warning").html(warning);

		});
		$(ele).blur(function() {
			$(this).parent().parent().find(find).removeClass("warning").html("");
			if(type == "num") {
				var data = parseInt($(this).val());
			} else {
				var data = $(this).val();
			}

			if(reg) {
				var result = reg.test(data);
				if(result) {
					flag = true;
					//当通过正则表达式后，请求ajax验证，采用post
					$.post("/thinkphp3.2.3/index.php/Home/Index/phonecheck/", {
						phone: data
					}, function(data1) {

						if(data1 == 1) {
							flagcode = false;
							$(ele).parent().parent().find(find).removeClass("ok");
							$(ele).parent().parent().find(find).addClass("error").html("此号码已经被注册！");
						} else {
							flagcode = true;
							$(ele).parent().parent().find(find).removeClass("error");
							$(ele).parent().parent().find(find).addClass("ok").html("");
						}
					});

				} else {
					flag = false;
					$(this).parent().parent().find(find).removeClass("ok");
					$(this).parent().parent().find(find).addClass("error").html(error);
				}

			} else {

			}
			//正则验证之后执行比较函数

		});

	}

	function checkpwd(ele, find, warning, error, reg, type) {
		$(ele).focus(function() {
			$(this).parent().parent().find(find).addClass("warning").html(warning);

		});
		$(ele).blur(function() {
			$(this).parent().parent().find(find).removeClass("warning");
			if(type == "num") {
				var data = parseInt($(this).val());
			} else {
				var data = $(this).val();
			}

			if(reg) {
				var result = reg.test(data);
				if(result) {
					flagpwd1 = true;

					$(this).parent().parent().find(find).removeClass("error");
					$(this).parent().parent().find(find).addClass("ok").html("");

				} else {
					flagpwd1 = false;
					$(this).parent().parent().find(find).removeClass("ok");
					$(this).parent().parent().find(find).addClass("error").html(error);
				}

			} else {

			}
			//正则验证之后执行比较函数

		});

	}

});
