$(document).ready(function() {
	//	$(".panel-title>a").
	arrow("a#callone", "#collapseOne");
	arrow("a#calltwo", "#collapseTwo");
	arrow("a#callthree", "#collapseThree");

	function arrow(ele, ele2) {
		$(ele2).on('show.bs.collapse', function() {
			$(ele + ">span.arrow").removeClass("arrleft");
			$(ele + ">span.arrow").addClass("arrdown");

		});
		$(ele2).on('hide.bs.collapse', function() {
			$(ele + ">span.arrow").removeClass("arrdown");
			$(ele + ">span.arrow").addClass("arrleft");

		});
	}
	var winH = $(window).height();
	
	
	
	$("#left_nav").height(winH);
	$("iframe").height(winH-30);
	
	
	
	
	
	
	
	
	
	
	

});