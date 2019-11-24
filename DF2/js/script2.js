var arr = ['allchi','alldinner','alllunch','allspecs','allbevs','allkids'];

$(document).ready(function(){

		$("#nxt").click(function(){
		$(".pagin").find(".pageNumber.act").next().addClass('act');
		$(".pagin").find(".pageNumber.act").prev().removeClass('act');
	});
	$("#prv").click(function(){
		$(".pagin").find(".pageNumber.act").prev().addClass('act');
		$(".pagin").find(".pageNumber.act").next().removeClass('act');
	});

// jQuery.fn.rotate = function(degrees) {
//     $(this).css({'transform' : 'rotate('+ degrees +'deg)'});
// };


	// $(".allchi,.alllunch,.alldinner,.allbevs,.allkids,.allspecs").hide();
	$(".chi").click(function(){
		showMenu("chi");
	});
	$(".dinner").click(function(){
		showMenu("dinner");
	});
	$(".lunch").click(function(){
		showMenu("lunch");
	});
	$(".bevs").click(function(){
		showMenu("bevs");
	});
	$(".kids").click(function(){
		showMenu("kids");
	});
	$(".specs").click(function(){
		showMenu("specs");
	});

});

			var rotation = 0;
 	
		$(window).scroll(function(){

			var scroll = $(window).scrollTop();

			if(scroll>83){
				rotation +=5;
				//positioning the navbar to fixed
				//$("nav").addClass("fixed-top");
				//$("#outerdiv").css("marginTop","12%");
			    // $("img").rotate(rotation);
			}
			else if(scroll<83){
			$("nav").removeClass("fixed-top");	
				$("#outerdiv").css("marginTop","0%");
			}
		});

function showMenu(str){
	for(var i=0;i<arr.length;i++){
		if("all"+str==arr[i]){
			$("."+arr[i]).slideDown(2000);
		}
		else{
			$("."+arr[i]).hide();
		}
	}
	$(".allload").hide()
}

function ins(id){
	$.post("../files/Operations.php",{
		'inid' : id
	},function(data,status){
		$("#modalCookie1").modal('show');
	});
}

function showDetails(pid,catid){
	var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    	document.getElementById("singres").innerHTML=this.responseText;
    	//alert(this.responseText);
    }
  };
  xhttp.open("POST", "operations.php?spid="+pid+"&scid="+catid, true);
  xhttp.send();
	$("#DetailModal").modal('show');
}
function showProducts(id,cimg,ctit){
	var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    	document.getElementById("res").innerHTML=this.responseText;
    }
  };
  xhttp.open("POST", "operations.php?showid="+id+"&cimg="+cimg+"&ctit="+ctit, true);
  xhttp.send();
}