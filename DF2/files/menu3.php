<?php 
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

  include("./php/Components.php");
  require_once('./operations.php');
  $cats =  getCats();

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
		<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.9/css/mdb.min.css" rel="stylesheet">
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=ZCOOL+XiaoWei&display=swap" rel="stylesheet">
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.9/js/mdb.min.js"></script>
<link rel="stylesheet" type="text/css" href="../css/menustyle.css">
<script type="text/javascript" src="../js/script2.js"></script>
<style type="text/css">
	.cart-add-btn{
	float: right;margin-right: 5px
}
.cart-add-btn i{
	padding: 10px;
	border-radius: 50%;
	background-color: #FFFFFF;
	color:white;
}
.fv:before{content:"\f217"}
.indicol{
	display: flex;flex-direction: column;align-items: center;justify-content: center;
}
body{
	margin: 0;
	padding: 0;
	background-color: #ccc
}
/* for total width outer div */
#outerdiv{
	height:100vh;
	width: 99%;
	margin: auto;
}
/* For Holding the categories data */
#catparent{
	padding: 0;
	background-color: #F9AFAF
}
/* Category panel heading */

.cats{
	background-color: white;
	margin: 0;
}
.cate_title{
	 border-bottom: 1px solid black;padding: 10px 0px;cursor: pointer;
	margin-top: -9px
}
.fil h4{
 text-align: center;
}
.custom-checkbox{
	width: 76%;
	margin: auto;
	font-weight: bold;
}
.cate_title:hover{
	cursor: pointer;
	background-color: #E29F0E
}
.cats:hover{
	background-color: orange;
	cursor: pointer;
	transition: 0.5s ease-in all
}
#catparent h4{
	text-align: center;
}

.allcats{
	width: 100%;height: 100vh;
}
.chi-head-text{
background-size: cover;background-repeat: no-repeat;color:white
}
.chi-head-text span{
	background-color:black;padding: 30px;opacity: 0.6
}
.chi-itemrow{
	margin: auto;margin-top: -13px;
	width: 88%
}
.item-container{
	padding: 12px;
	margin: 10px !important;
}
.item-container:hover{
	cursor: pointer;
}
.item{
	width: 98%;margin: auto;
}
.item img{
	width: 100%;height: 200px;padding: 5px
}
.item-title{
	font-weight: bold;padding: 5px
}
.item-price{
	padding-left: 5px
}
#menuNav ul li{
	margin: 0px 7px !important;
}
#menuNav ul li a{
	font-size: 22px !important;
	color:white;
	font-family: 'ZCOOL XiaoWei', serif;
	text-transform: capitalize;
}
#menuNav ul li a:hover{
	color:yellow;
}
.pagin ul{
	position: relative; 
	display: flex;
	padding: 10px 20px;
	border-radius: 50px;
	background-color: #fff;
	box-shadow: 0px 5px 15px rgba(0,0,0,.2);
	margin-top: 10px
}
.pagin ul li{
	list-style: none;
	line-height: 50px;
	margin: 0 5px;
}

.pagin ul li.pageNumber{
	width: 50px;
	height: 50px;
	line-height: 50px;
	text-align: center;
}
.pagin ul li a,
#prv,
#nxt{
	display: block;
	text-decoration: none;
	color: #777;
	font-weight: 600;
	border-radius: 50%
}



.pagin ul li.pageNumber:hover a,
.pagin ul li.pageNumber.act a{
	background-color: #333 !important;
	color: #fff !important;
}

.pagin .prv{
	font-weight: 700;
	font-size:20px
}
.pagin ul li:last-child{
	font-weight: 700;
	font-size:20px
}

.focused{
	background-color: yellow !important;
}

::-webkit-scrollbar{
	width: 0;
}
#scrollbar{
	position: fixed;
	top: 0;
	right:0;
	width: 15px;
	border-radius: 10px;
	background: linear-gradient(to top, #fcb045, #fd1d1d, #833ab4);
}

#footer-wrapper{
	width: 100%;height: 60vh;margin: auto;background-image:url(../images/blog.jpg);background-attachment: fixed;background-size: cover;background-repeat: no-repeat;overflow: hidden;position: relative;
}
#footer-divider{
	position: absolute;top: 0
}
#flex-footer{
	display: flex;color: white;padding: 8% 10%
}
#sec-news{
	width: 50%
}
#sec-news-title{
	font-family: 'Quicksand', sans-serif
}
#sec-news input{
	width: 50%;font-size: 20px;padding: 10px;border:1px solid white;outline: none;background-color: transparent;cursor: auto;color:white;font-weight: 300
}
#sec-news button{
	padding: 10px 20px;font-size: 19px;text-transform: uppercase;letter-spacing: 2px;background-color: transparent;border:1px solid green;color:white;outline: none;
}
#foo-follow{
	width: 30%
}

#foo-follow i{
	font-size: 25px;
	margin: 0px 5px;
}
#contact p{
font-size: 19px;
font-family: 'Raleway';
text-transform: uppercase;
}
#foo-quicks{
	font-family: 'Raleway';
	text-transform: uppercase;
	font-size: 14px;
	width: 20%
}

</style>
<script type="text/javascript">

//function to add products to the cart
  function cadd(name,id,catname,catid){
       $.post("operations.php",{
        cid: id,
        cname : name
       },function(data,status){
       	var stat = data.search("Product is already added in the cart..!");
       	if(stat!=-1){
            alert("Product already added");
            window.location.href='cart2.php';
       	}
       	else{
		  $("#CartAddModal").modal('show');	
          $.post("operations.php",
          {
          	"updateCart" : "RequestUpdate"
          },
          function(data,status){
          	document.getElementById("CCbtn").innerHTML=data;
          });

       	}
       });
}

$(document).ready(function(){
          $.post("operations.php",
          {
          	"updateCart" : "RequestUpdate"
          },
          function(data,status){
          	document.getElementById("CCbtn").innerHTML=data;
          });


});

function nxtclick(id,cimg,ctit){
		$(".pagin").find(".pageNumber.act").next().addClass('act');
		$(".pagin").find(".pageNumber.act").prev().removeClass('act');
		var index = $(".pagin").find(".pageNumber.act").index();
		$.post("operations.php",{
			id : id,
			cimg : cimg,
			ctit : ctit,
			index : index,
			'Paction' : 'Next'
		},function(data,status){
			$(".chi-itemrow").html(data);
		});
}
function prvclick(id,cimg,ctit){
		$(".pagin").find(".pageNumber.act").prev().addClass('act');
		$(".pagin").find(".pageNumber.act").next().removeClass('act');	
var index = $(".pagin").find(".pageNumber.act").index();
		$.post("operations.php",{
			id : id,
			cimg : cimg,
			ctit : ctit,
			index : index,
			'Paction' : 'Prev'
		},function(data,status){
			$(".chi-itemrow").html(data);
		});
}
			var rotation = 0;
 	
		$(window).scroll(function(){

			var scroll = $(window).scrollTop();

			if(scroll>83){
				rotation +=5;
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
function fsearch(txt){
	if(txt.length>2){
	$.post("operations.php",{
		txt : txt
	},function(data,status){
		document.getElementById("search-result").innerHTML=data;
	});
	}
	else if(txt.length<2){
		var str = "<h4 class='text-center'>No Items here</h4>";
		document.getElementById("search-result").innerHTML=str;
	}
}
</script>

</head>
<body>
	<div id="menu-wrapper">
<!--Navbar-->
<nav id="menuNav" class="navbar navbar-expand-lg" style="background-image: url(https://images.unsplash.com/photo-1566217708747-539477d16e0f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60);background-repeat: no-repeat;background-size: cover;height:100px">

  <!-- Navbar brand -->
  <a class="navbar-brand" href="#">
  	<img src="../images/logo1.png" style="width: 80px;height:80px;position: absolute;top:10px;left:40px"></a>

  <!-- Collapse button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Collapsible content -->
  <div class="collapse navbar-collapse" id="basicExampleNav">

    <!-- Links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item home">
        <a class="nav-link" href="">Home
        </a>
      </li>
      <li class="nav-item abt">
        <a class="nav-link" href="">About</a>
      </li>
      <li class="nav-item" id="menu" style="color:orange">
        <a class="nav-link" href="">Menu</a>
      </li>
      <li class="nav-item gall">
        <a class="nav-link" href="">Gallery</a>
      </li>
      <li class="nav-item log">
      	<a class="nav-link" href="">Login/Signup</a>
      </li>
      <li class="nav-item log">
      	<a class="nav-link" data-toggle="modal" data-target="#SearchModal">
      		<i class="fas fa-search"></i>
      	</a>
      </li>

      <li class="nav-item cart" id="cart">  
        <a class="nav-link" href="cart2.php">
          <i class="fas fa-shopping-basket" style="color: white;position: relative;margin-right: 11px"></i>
          <span class="badge badge-pill badge-primary" id="CCbtn" style="position: absolute;right:0;top: 0"></span></a>
      </li>

    </ul>
  </div>
  <!-- Collapsible content -->
</nav>


	<div id="" class="row container-fluid" style="margin: auto;">
		<div id="catparent" class="col-lg-2" style="border:1px solid black">
			<h4 class="cat-heading" style="text-align: center;font-weight: bold;margin-top: 2px;text-transform: uppercase;padding: 10px;background-image: url(https://nhancefranchise.com/wp-content/uploads/2019/06/hero-img-mobile.jpg);color: white">
				Categories
			</h4>
			<?php 
			foreach($cats as $c){
				?> 
				<h4 class="cate_title" onclick="showProducts('<?php echo $c['id'] ?>','<?php echo $c['header_img'] ?>','<?php echo $c['title'] ?>')">
					<?php echo $c['title']; ?>
				</h4>
				<?php
			}
			?>
				<h4 class="cat-heading" style="text-align: center;font-weight: bold;text-transform: uppercase;background-color: green;padding: 10px;	background-image: url(https://nhancefranchise.com/wp-content/uploads/2019/06/hero-img-mobile.jpg);color: white">Filters</h4>	
				<div class="fil">
					<h4><b>Price</b></h4>
					<hr>
				<!-- Default unchecked -->
				<div class="custom-control custom-checkbox">
				    <input type="checkbox" class="custom-control-input" id="pri_fil_1">
				    <label class="custom-control-label" for="pri_fil_1">Rs 100 - Rs 150</label>
				</div>
				<div class="custom-control custom-checkbox">
				    <input type="checkbox" class="custom-control-input" id="pri_fil_2">
				    <label class="custom-control-label" for="pri_fil_2">Rs 150 - Rs 200</label>
				</div>
				<div class="custom-control custom-checkbox">
				    <input type="checkbox" class="custom-control-input" id="pri_fil_3">
				    <label class="custom-control-label" for="pri_fil_3">Rs 200 - Rs 300</label>
				</div>
				<div class="custom-control custom-checkbox">
				    <input type="checkbox" class="custom-control-input" id="pri_fil_4">
				    <label class="custom-control-label" for="pri_fil_4">Rs 300 - Rs 500</label>
				</div>
					<hr>
					<h4><b>Food Type</b></h4>
					<hr>

				<!-- Default unchecked -->
				<div class="custom-control custom-checkbox">
				    <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
				    <label class="custom-control-label" for="defaultUnchecked">Vegetarian</label>
				</div>
				<div class="custom-control custom-checkbox">
				    <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
				    <label class="custom-control-label" for="defaultUnchecked">Non Veg</label>
				</div>
				<div class="custom-control custom-checkbox">
				    <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
				    <label class="custom-control-label" for="defaultUnchecked">Eggitarian</label>
				</div>
				<div class="custom-control custom-checkbox">
				    <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
				    <label class="custom-control-label" for="defaultUnchecked">Rs 300 - Rs 500</label>
				</div>

				</div>	
					
		</div>
		<div class="grey col-lg-10" style="width: 100% !important;">
		<div id="res">
			<!--Default content-->
			<h1 class="jumbotron text-center">Welcome to Menu</h1>

			<h2 class="text-center white" style="margin-top: -19px">Available Categories</h2>
			<div class="row">
				<div class="col-lg-3">
					Starters
				</div>
				<div class="col-lg-3">hey</div>
				<div class="col-lg-3">hey</div>
				<div class="col-lg-3">hey</div>
			</div>
		</div>
			
		</div> <!--col-lg-10 end-->
		</div> <!--Row end-->
		<?php include 'footer.php'; ?>
 	</div> <!--menu-wrapper-->


<!-- Central Modal Small -->
<div class="modal fade" id="SearchModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">

  <!-- Change class .modal-sm to change the size of the modal -->
  <div class="modal-dialog modal-lg" role="document">


    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title w-100" id="myModalLabel">Search Food Item</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<center>
			<!-- Material input -->
			<div class="md-form" style="width: 60%">
			  <input type="text" id="fsearch" class="form-control" style="font-size: 20px;color:black" onkeyup="fsearch(this.value)">
			  <label for="fsearch">Type in text here</label>
			</div>
        </center>
        <hr>
        <div id="search-result">
			<h4 class="text-center">No Items here</h4>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Central Modal Small -->

<div class="modal fade" id="DetailModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">

  <!-- Change class .modal-sm to change the size of the modal -->
  <div class="modal-dialog modal-lg" role="document">


    <div class="modal-content">
      <div class="modal-body">
		<div id="singres"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-elegant btn-md" onclick="insert('1')">Add to cart!</button>
        <button type="button" class="btn btn-danger btn-md" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>

</div>

 	<!--Modal: modalCookie-->
<div class="modal fade top" id="CartAddModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true" data-backdrop="true">
  <div class="modal-dialog modal-frame modal-top modal-notify modal-info" role="document">
    <!--Content-->
    <div class="modal-content">
      <!--Body-->
      <div class="modal-body">
        <div class="row d-flex justify-content-center align-items-center">

          <p class="pt-3 pr-2">Product successfully added to the cart!</p>

          <a type="button" class="btn btn-primary" href="cart2.php">View Cart <i class="fas fa-shopping-cart ml-1"></i></a>
          <a type="button" class="btn btn-outline-primary waves-effect" data-dismiss="modal">Ok, thanks</a>
        </div>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!--Modal: modalCookie-->


</body>
</html>