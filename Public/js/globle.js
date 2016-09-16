$(document).ready(function() {
	$(".liphone").mouseover(function() {
		$(".phonetips").css("display", "block");
		$(".liphone").mouseout(function() {
			$(".phonetips").css("display", "none");
		});
	});

	$(".all").mouseover(function() {
		$(this).css({
			"background": "white"
		});
		$("#allCategory").css("display", "block");
		$("#allCategory").mouseover(function() {
			$(this).css("display", "block");
			$(".all").css("background", "white");
		});
		$(".all").mouseout(function() {
			$(this).css({
				"background": "#f7f7f7"
			});
			$("#allCategory").css("display", "none");
		});
		$("#allCategory").mouseout(function() {
			$(this).css("display", "none");
			$(".all").css("background", "#f7f7f7");
		});

	});
	$(".topline3 a").mouseover(function() {
		$(this).stop(true).animate({
			top: -8
		});
		$(".topline3 a").mouseout(function() {
			$(this).stop(true).animate({
				top: 0
			});

		});

	});

	$(".mod-ulelife .slide-index h4").click(function() {
		var which = $(this).index();
		$(".mod-ulelife .slide-index h4").removeClass("active");
		$(this).addClass("active");
		$(".mod-ulelife .slide-items").stop(true).animate({
			top: -180 * which
		});

	});
	//左边菜单
	$(".cate-menu a").hover(function(){
		$(this).parent().css("background","url(img/headmenu/sprite_category.png) no-repeat 0 -16px");
	},function(){
		$(this).parent().css("background","url(img/headmenu/btn-cate-normal.png) no-repeat 0 0");
	});
	//菜单li划过旋转效果
	$(".mod-category dt").rotate({ 
   bind: 
     { 
        mouseover : function() { 
            $(this).addClass("hover").find("i").rotate({animateTo:360});
            $(this).next().css("display","block");
        },
        mouseout : function() { 
            $(this).removeClass("hover").find("i").rotate({animateTo:0});
             $(this).next().css("display","none");
        }
     } 
   
});

$(".mod-category dd").hover(function(){
	$(this).prev().addClass("hover");
	$(this).css("display","block");
	
},function(){
	$(this).prev().removeClass("hover");
	$(this).css("display","none");
});
	var ddlength=$(".mod-category dl.cate-bd dd").length;
//	alert(ddlength);
	$(".mod-category dl.cate-bd dd").eq(ddlength-1).css("margin-top","510px");
	$(".mod-category dl.cate-bd dd").eq(ddlength-2).css("margin-top","136px");
	$(".mod-category dl.cate-bd dd").eq(ddlength-3).css("margin-top","347px");
	$(".mod-category dl.cate-bd dd").eq(ddlength-4).css("margin-top","153px");
	$(".mod-category dl.cate-bd dd").eq(ddlength-6).css("margin-top","10px");
	
	
	
	//这里有点问题
	$(".mod-jiaofei .dl-citys h5").click(function() {
		$(".mod-jiaofei .dl-citys p").css("display", "block");
	});
	//大轮播图
	var index = 1;
	var timer = null;
	//颜色表
	var colortab = ["rgb(66, 54, 114)", "rgb(255, 221, 36)", "rgb(255, 215, 0)", "rgb(248, 246, 226)", "rgb(37, 124, 123)", "rgb(95, 101, 152)", "rgb(86, 71, 149)", "rgb(40, 168, 234)"];
	showimg(index, colortab);
	$(".imgnum span").hover(function() {
		clearTimeout(timer);
		var icon = $(this).text();

		$(".imgnum span").removeClass("active").eq(icon - 1).addClass("active");
		$(".banner_img li").hide().stop(true, true).eq(icon - 1).fadeIn("slow");
	}, function() {
		index = $(this).text() > 8 ? 1 : parseInt($(this).text()) + 1;
		timer = setTimeout(function() {
			showimg(index, colortab)
		}, 3000);
	});

	function showimg(num, arr) {

		$(".imgnum span").removeClass("active").eq(index - 1).addClass("active");
		$(".banner_img li").hide().stop(true, true).eq(index - 1).css("background", arr[index - 1]).fadeIn();
		index = index + 1 > 8 ? 1 : index + 1;
		//alert(index);
		timer = setTimeout(function() {
			showimg(index, colortab)
		}, 3000);
	}

	///////////////////////////////
	$(".mod-comlist .slide-index h4").mouseover(function() {
		var which = $(this).index();
		//	alert(which);
		$(".mod-comlist .slide-index h4").removeClass("active");
		$(this).addClass("active");
		$(".mod-comlist .slide-items ").stop(true).animate({
			top: -240 * which
		});
	});

	$(".mod-comlist .slide-items .mod-cheaplist li").mouseover(function() {
		$(this).find(".prod-discount>a").css("display", "block");
		$(this).find(".prod-discount>span").css("display", "none");
		$(this).find(".prod-price>del").css("display", "none");
		$(this).find(".prod-name>a").css("color", "black");

		$(".mod-comlist .slide-items .mod-cheaplist li").mouseout(function() {
			$(this).find(".prod-discount>a").css("display", "none");
			$(this).find(".prod-discount>span").css("display", "block");
			$(this).find(".prod-price>del").css("display", "block");
			$(this).find(".prod-name>a").css("color", "#999");
		});
	});

	$(".mod-comlist .slide-items .mod-freshlist li").mouseover(function() {
		$(this).find(".prod-name>a").css("color", "black");
		$(".mod-comlist .slide-items .mod-freshlist li").mouseout(function() {
			$(this).find(".prod-name>a").css("color", "#999");
		});
	});
	//小轮播图
	function rightfocus() {
		var fightfocwid = 220;
		var sum = $(".mod-rightfocus .slide-items").html() + $(".mod-rightfocus .slide-items").html();
		$(".mod-rightfocus .slide-items").html(sum);
		//$(".mod-rightfocus .slide-items")get(0).innerHTML+=$(".mod-rightfocus .slide-items")get(0).innerHTML;
		var num = $(".mod-rightfocus .slide-items li").length;
		var iNow = 0;
		var flag = true;
		$(".mod-rightfocus .slide-items").innerWidth(fightfocwid * num);
		setInterval(function() {
			if(flag) {
				if(iNow == 5) {
					iNow = 1;
					$(".mod-rightfocus .slide-items").css("left", 0);
				}
				$(".mod-rightfocus .slide-index span").removeClass("active");
				if(iNow == 4) {
					$(".mod-rightfocus .slide-index span").eq(0).addClass("active");
				} else {
					$(".mod-rightfocus .slide-index span").eq(iNow).addClass("active");
				}
				$(".mod-rightfocus .slide-items").stop(true).animate({
					left: -iNow * fightfocwid
				});
				iNow++;
			}

		}, 2000);

		$(".mod-rightfocus .slide-index span").mouseover(function() {
			flag = false;

			$(".mod-rightfocus .slide-index").css("display", "block");
			$(".mod-rightfocus .slide-index span").removeClass("active");
			$(this).addClass("active");
		});
		$(".mod-rightfocus .slide-items").mouseover(function() {
			flag = false;
			$(".mod-rightfocus .slide-index").css("display", "block");
			//$(".mod-rightfocus .slide-button").css("display","block");
			//$(".mod-rightfocus .slide-index").fadeIn();
		});
		$(".mod-rightfocus .slide-items").mouseout(function() {
			flag = true;
			$(".mod-rightfocus .slide-index").css("display", "none");
			//$(".mod-rightfocus .slide-button").css("display","none");
			//$(".mod-rightfocus .slide-index").fadeOut();
		});
		$(".mod-rightfocus .slide-button a").mouseover(function() {
			flag = false;

		});

		$(".mod-rightfocus .slide-button .btn-prev").click(function() {
			iNow--;
			if(iNow < 0) {
				iNow = 3;
			}
			console.log(iNow);
			$(".mod-rightfocus .slide-items").stop(true).animate({
				left: -iNow * fightfocwid
			});
		});
		$(".mod-rightfocus .slide-button .btn-next").click(function() {
			iNow++;
			if(iNow > 3) {
				iNow = 0;
			}
			console.log(iNow);
			$(".mod-rightfocus .slide-items").stop(true).animate({
				left: -iNow * fightfocwid
			});
		});

	}

rightfocus();
//	floor
//开始执行一次，根据条件显示或者隐藏楼层
scrollfun();
$(window).scroll(scrollfun);
//当鼠标划过
$("#floatTool>a").hover(function(){
	$(this).children("span").css("display","none");
	$(this).children("label").css("display","block");
},function(){
	if($(this).hasClass("on")){
		
	}else{
	$(this).children("span").css("display","block");
	$(this).children("label").css("display","none");
	}
	
});
function scrollfun(){
	var winH = $(window).height();//可视窗口高度
				 var iTop = $(window).scrollTop();//鼠标滚动的距离
				 var ttttop=$('.header').height()+$(".firstscreen .mod-topslide").height();
				 iTop>=ttttop?$("#floatTool").fadeIn():$("#floatTool").fadeOut();
				 $(".louceng").each(function(i){
				 	if(winH+iTop - $(".louceng").eq(i).offset().top>winH/2){
				 	$("#floatTool a").removeClass("on");
					$("#floatTool a label").css("display","none");
					$("#floatTool a span").css("display","block");
					$("#floatTool a label").eq(i).css("display","block");
					$("#floatTool a span").eq(i).css("display","none");
					$("#floatTool a").eq(i).addClass("on");
				 	}
				});
}






































});