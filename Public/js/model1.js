$(document).ready(function() {
	//	module1
	$(".pic2").mouseover(function() {

		$(".pic1 div").css("display", "block");
		$(".pic2 div").stop(true).animate({
			left: -8
		});
		$(".pic2 img").stop(true).animate({
			left: -8
		});
		$(".pic2").mouseout(function() {

			$(".pic1 div").css("display", "none");
			$(".pic2 div").stop(true).animate({
				left: 0
			});
			$(".pic2 img").stop(true).animate({
				left: 0
			});

		});

	});
	$(".pic1").mouseover(function() {

		$(".pic2 div").css("display", "block");
		$(".pic1 div").stop(true).animate({
			left: -8
		});
		$(".pic1 img").stop(true).animate({
			left: -8
		});
		$(".pic1").mouseout(function() {

			$(".pic2 div").css("display", "none");
			$(".pic1 div").stop(true).animate({
				left: 0
			});
			$(".pic1 img").stop(true).animate({
				left: 0
			});

		});

	});
	//	module2
	movefun(".mod-piclist-c3-1");
	movefun(".mod-piclist-c3-2");
	movefun(".mod-piclist-c3-3");
	movefun(".mod-piclist-c3-4");

	function movefun(a) {
		$(a + " .i1").mouseover(function() {

			$(a + " .i2 div").css("display", "block");
			$(a + " .i3 div").css("display", "block");
			$(a + " .i1 img").stop(true).animate({
				left: -10
			});
			$(a + " .i1 div").stop(true).animate({
				left: -10
			});
			$(a + " .i1").mouseout(function() {

				$(a + " .i2 div").css("display", "none");
				$(a + " .i3 div").css("display", "none");

				$(a + " .i1 img").stop(true).animate({
					left: 0
				});
				$(a + " .i1 div").stop(true).animate({
					left: 0
				});

			});
		});
		////////////////////////////
		$(a + " .i2").mouseover(function() {

			$(a + " .i1 div").css("display", "block");
			$(a + " .i3 div").css("display", "block");
			$(a + " .i2 img").stop(true).animate({
				left: -10
			});
			$(a + " .i2 div").stop(true).animate({
				left: -10
			});

			$(a + " .i2").mouseout(function() {

				$(a + " .i1 div").css("display", "none");
				$(a + " .i3 div").css("display", "none");
				$(a + " .i2 img").stop(true).animate({
					left: 0
				});
				$(a + " .i2 div").stop(true).animate({
					left: 0
				});

			});

		});
		/////////////////////////////
		$(a + " .i3").mouseover(function() {

			$(a + " .i2 div").css("display", "block");
			$(a + " .i1 div").css("display", "block");
			$(a + " .i3 img").stop(true).animate({
				left: -10
			});
			$(a + " .i3 div").stop(true).animate({
				left: -10
			});

			$(a + " .i3").mouseout(function() {

				$(a + " .i2 div").css("display", "none");
				$(a + " .i1 div").css("display", "none");

				$(a + " .i3 img").stop(true).animate({
					left: 0
				});
				$(a + " .i3 div").stop(true).animate({
					left: 0
				});

			});

		});

	}
	//	$(".mod-piclist-c3-1 .i1").mouseover(function() {
	//
	//		$(".mod-piclist-c3-1 .i2 div").css("display", "block");
	//		$(".mod-piclist-c3-1 .i3 div").css("display", "block");
	//		$(".mod-piclist-c3-1 .i1 img").stop(true).animate({
	//			left: -10
	//		});
	//		$(".mod-piclist-c3-1 .i1 div").stop(true).animate({
	//			left: -10
	//		});
	//		$(".mod-piclist-c3-1 .i1").mouseout(function() {
	//
	//			$(".mod-piclist-c3-1 .i2 div").css("display", "none");
	//			$(".mod-piclist-c3-1 .i3 div").css("display", "none");
	//
	//			$(".mod-piclist-c3-1 .i1 img").stop(true).animate({
	//				left: 0
	//			});
	//			$(".mod-piclist-c3-1 .i1 div").stop(true).animate({
	//				left: 0
	//			});
	//
	//		});
	//	});

	//2
	//	$(".mod-piclist-c3-1 .i2").mouseover(function() {
	//
	//		$(".mod-piclist-c3-1 .i1 div").css("display", "block");
	//		$(".mod-piclist-c3-1 .i3 div").css("display", "block");
	//		$(".mod-piclist-c3-1 .i2 img").stop(true).animate({
	//			left: -10
	//		});
	//		$(".mod-piclist-c3-1 .i2 div").stop(true).animate({
	//			left: -10
	//		});
	//
	//		$(".mod-piclist-c3-1 .i2").mouseout(function() {
	//
	//			$(".mod-piclist-c3-1 .i1 div").css("display", "none");
	//			$(".mod-piclist-c3-1 .i3 div").css("display", "none");
	//			$(".mod-piclist-c3-1 .i2 img").stop(true).animate({
	//				left: 0
	//			});
	//			$(".mod-piclist-c3-1 .i2 div").stop(true).animate({
	//				left: 0
	//			});
	//
	//		});
	//
	//	});
	//3
	//	$(".mod-piclist-c3-1 .i3").mouseover(function() {
	//
	//		$(".mod-piclist-c3-1 .i2 div").css("display", "block");
	//		$(".mod-piclist-c3-1 .i1 div").css("display", "block");
	//		$(".mod-piclist-c3-1 .i3 img").stop(true).animate({
	//			left: -10
	//		});
	//		$(".mod-piclist-c3-1 .i3 div").stop(true).animate({
	//			left: -10
	//		});
	//
	//		$(".mod-piclist-c3-1 .i3").mouseout(function() {
	//
	//			$(".mod-piclist-c3-1 .i2 div").css("display", "none");
	//			$(".mod-piclist-c3-1 .i1 div").css("display", "none");
	//
	//			$(".mod-piclist-c3-1 .i3 img").stop(true).animate({
	//				left: 0
	//			});
	//			$(".mod-piclist-c3-1 .i3 div").stop(true).animate({
	//				left: 0
	//			});
	//
	//		});
	//
	//	});
	//hover
	$(".col-42 li").mouseover(function() {
		$(this).children(".prod-name").css({
			"height": 41,
			"bottom": 44,
			"background": "black",
			"opacity": 0.6,
			"line-height": "19px",
			"padding-top": 5

		});
		$(this).find(".cowhite").css({

			"color": "white"

		});
		$(".col-42 li").mouseout(function() {
			$(this).children(".prod-name").css({
				"height": 30,
				"bottom": 42,
				"background": "#fff",
				"opacity": 0.8,
				"line-height": "30px"

			});
			$(this).find(".cowhite").css({

				"color": "#666"

			});

		});
	});
	//mod-prodlist-c41 li .prod-name{height:56px;bottom:46px;background:rgba(0, 0, 0, 0.6);}
	$(".mod-prodlist-c41 li").mouseover(function() {
		$(this).children(".prod-name").css({
			"height": 41,
			"bottom": 26,
			"background": "black",
			"opacity": 0.6,
			"line-height": "19px",
			"padding-top": 5

		});
		$(this).find(".cowhite").css({

			"color": "white"

		});
		$(".mod-prodlist-c41 li").mouseout(function() {
			$(this).children(".prod-name").css({
				"height": 30,
				"bottom": 26,
				"background": "#fff",
				"opacity": 0.8,
				"line-height": "30px"

			});
			$(this).find(".cowhite").css({

				"color": "#666"

			});

		});
	});
	//mod-brandlist
	$(".mod-brandlist li").mouseover(function() {

		$(this).find("span").css("display", "block");
	});
	$(".mod-brandlist li").mouseout(function() {
		$(this).find("span").css("display", "none");
	});
	
	lunbo( ".slid-ul1",".slide-index-1");
	lunbo( ".slid-ul2",".slide-index-2");
	function lunbo( a,b){
		var oLiwidth=240;
	var oLilength=$(a+" li").length;

	$(a).innerWidth(oLiwidth*oLilength);
	$(b+" a").mouseover(function(){
		$(b+" i").css("display","none");
		$(this).children("i").css("display","block");
		var that=$(this).index();
		$(a).stop(true).animate({
					left: -that*oLiwidth
				});
	});
	
	}
	
	
	
	
	
	
//	//模块中的轮播图，美妆洗护
//	var oLiwidth=240;
//	var oLilength=$(".slid-ul1 li").length;
//	//alert(oLilength);
//	$(".slid-ul1").innerWidth(oLiwidth*oLilength);
//	$(".slide-index-1 a").mouseover(function(){
//		$(".slide-index-1 i").css("display","none");
//		$(this).children("i").css("display","block");
//		//alert($(this).index());
//		var that=$(this).index();
////		$(".slid-ul1").css("margin-left",-that*oLiwidth);
//		
//		$(".slid-ul1").stop(true).animate({
//					left: -that*oLiwidth
//				});
//	});
//	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

});