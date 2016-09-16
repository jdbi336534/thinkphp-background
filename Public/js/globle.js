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
$(".topline3 a").mouseover(function(){
	$(this).stop(true).animate({
		top:-8
	});
	$(".topline3 a").mouseout(function(){
	$(this).stop(true).animate({
		top:0
	});
	
	
});
	
});

$(".mod-ulelife .slide-index h4").click(function(){
	var which=$(this).index();
	$(".mod-ulelife .slide-index h4").removeClass("active");
	$(this).addClass("active");
	$(".mod-ulelife .slide-items").stop(true).animate({
		top:-180*which
	});
	
});
//这里有点问题
$(".mod-jiaofei .dl-citys h5").click(function(){
	$(".mod-jiaofei .dl-citys p").css("display","block");
});






///////////////////////////////
$(".mod-comlist .slide-index h4").mouseover(function(){
	var which=$(this).index();
//	alert(which);
	$(".mod-comlist .slide-index h4").removeClass("active");
	$(this).addClass("active");
	$(".mod-comlist .slide-items ").stop(true).animate({
		top:-240*which
	});
});

$(".mod-comlist .slide-items .mod-cheaplist li").mouseover(function(){
	$(this).find(".prod-discount>a").css("display","block");
	$(this).find(".prod-discount>span").css("display","none");
	$(this).find(".prod-price>del").css("display","none");
	$(this).find(".prod-name>a").css("color","black");
	
	$(".mod-comlist .slide-items .mod-cheaplist li").mouseout(function(){
	$(this).find(".prod-discount>a").css("display","none");
	$(this).find(".prod-discount>span").css("display","block");
	$(this).find(".prod-price>del").css("display","block");
	$(this).find(".prod-name>a").css("color","#999");
});
});

$(".mod-comlist .slide-items .mod-freshlist li").mouseover(function(){
	$(this).find(".prod-name>a").css("color","black");
	$(".mod-comlist .slide-items .mod-freshlist li").mouseout(function(){
	$(this).find(".prod-name>a").css("color","#999");
});
});
//小轮播图
function rightfocus(){
	var fightfocwid=220;
	var sum=$(".mod-rightfocus .slide-items").html()+$(".mod-rightfocus .slide-items").html();
	$(".mod-rightfocus .slide-items").html(sum);
//$(".mod-rightfocus .slide-items")get(0).innerHTML+=$(".mod-rightfocus .slide-items")get(0).innerHTML;
var num=$(".mod-rightfocus .slide-items li").length;
var iNow=0;
var flag=true;
$(".mod-rightfocus .slide-items").innerWidth(fightfocwid*num);
setInterval(function(){
	if(flag){
		if(iNow==5){
		iNow=1;
		$(".mod-rightfocus .slide-items").css("left",0);
	}
	$(".mod-rightfocus .slide-index span").removeClass("active");
	if(iNow==4){
		$(".mod-rightfocus .slide-index span").eq(0).addClass("active");
	}else{
		$(".mod-rightfocus .slide-index span").eq(iNow).addClass("active");
	}
	$(".mod-rightfocus .slide-items").stop(true).animate({
		left:-iNow*fightfocwid
	});
	iNow++;
	}
	
},2000);










$(".mod-rightfocus .slide-index span").mouseover(function(){
	flag=false;
	
$(".mod-rightfocus .slide-index").css("display","block");
	$(".mod-rightfocus .slide-index span").removeClass("active");
	$(this).addClass("active");
});
$(".mod-rightfocus .slide-items").mouseover(function(){
	flag=false;
	$(".mod-rightfocus .slide-index").css("display","block");
	//$(".mod-rightfocus .slide-button").css("display","block");
	//$(".mod-rightfocus .slide-index").fadeIn();
});
$(".mod-rightfocus .slide-items").mouseout(function(){
	flag=true;
	$(".mod-rightfocus .slide-index").css("display","none");
	//$(".mod-rightfocus .slide-button").css("display","none");
	//$(".mod-rightfocus .slide-index").fadeOut();
});
$(".mod-rightfocus .slide-button a").mouseover(function(){
	flag=false;
	
});










$(".mod-rightfocus .slide-button .btn-prev").click(function(){
	iNow--;
	if(iNow<0){
		iNow=3;
	}
	console.log(iNow);
	$(".mod-rightfocus .slide-items").stop(true).animate({
		left:-iNow*fightfocwid
	});
});
$(".mod-rightfocus .slide-button .btn-next").click(function(){
	iNow++;
	if(iNow>3){
		iNow=0;
	}
	console.log(iNow);
	$(".mod-rightfocus .slide-items").stop(true).animate({
		left:-iNow*fightfocwid
	});
});







}

rightfocus();





















































});