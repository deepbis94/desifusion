
$(document).ready(function(){

	$("#nxt").click(function(){
		$(".pagin").find(".pageNumber.act").next().addClass('act');
		$(".pagin").find(".pageNumber.act").prev().removeClass('act');
	});
	$("#prv").click(function(){
		$(".pagin").find(".pageNumber.act").prev().addClass('act');
		$(".pagin").find(".pageNumber.act").next().removeClass('act');
	});


			$(window).scroll(function(){
			var scroll = $(window).scrollTop();
			if(scroll>70){
				$("#catdiv").css("top","0");
			}
			else if(scroll<70){
				$("#catdiv").css("top","80px");
			}				
			});

	
});
function showSearch(){
	document.getElementById("outerdiv").style.display="none";
	document.getElementById("searchDiv").style.display="block";
}
