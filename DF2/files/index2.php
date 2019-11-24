<?php 
  include("./php/Components.php");
  require_once('./operations.php');
  $settings = showSettings();
  $count = (int)$settings['g_count'];
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Indifusion</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/eggplant/jquery-ui.css" />	
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.6/highlight.min.js">
		</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>

<script>
 $(document).ready(function(){

 AOS.init();

$("#proceed-btn2").click(function(){
	if($("#dvalue").val().length<1){
		alert("Please select a date");
	}
	else{
		$("#book-step2").show();
		$("#book-step3").fadeIn("2000");
		// var gcount = $("#selectGCount").val();
		// var dvalue = $("#dvalue").val();
		// $.post("operations.php",{

		// },function(data,status){

		// });
}
});



$("#datepicker").datepicker({
	minDate :0,
	maxDate : $("#range").val(),
	onSelect : function (dateText){
		$("#dvalue").datepicker("setDate",$(this).datepicker("getDate"));
	}
});

$("#dvalue").datepicker();

var controller = new ScrollMagic.Controller();

var tl = new TimelineMax();

tl.fromTo(
  "section.panel.turqoise",
  1,
  { xPercent: 100 },
  { xPercent: 0, ease: Power3.easeInOut },"-=1")


new ScrollMagic.Scene({
  triggerElement: "#pinMaster",
  triggerHook: "onLeave",
  duration: "60%"
})
  .setPin("#pinMaster")
  .setTween(tl)
  .addTo(controller);


// $("#mainbody").hide();
// $("#preloader").fadeOut(5000,function(){
// 	$("#mainbody").fadeIn(500);
// });
$("#preloader").hide();  

  });
</script>

  <style type="text/css">
body{
	margin: 0;
	padding: 0;
	width: 100%;
	height: 100%;
	background-color: black
}
.activen{
	position: absolute;
	width: 100%;
	margin-top: 10px	
}
.fix{
	color: white;
	position: fixed;
	top:0;
	width: 100%;
	z-index: 999;
	background: #A770EF;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #FDB99B, #CF8BF3, #A770EF);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #FDB99B, #CF8BF3, #A770EF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

}
nav{
position: absolute;
width: 100%;
}
nav ul{
	display: flex;
	flex-direction: row;
	justify-content: center;
	align-items: center;
	list-style: none;
}
nav ul li{
	text-decoration: none;
	margin:10px 21px;
}
nav ul li a{
	text-decoration: none;
	font-size: 24px;
	color:white;
	font-family: 'ZCOOL XiaoWei', serif;
}
#homesec{
	position: relative;
	width: 100%;
	height: 100vh;
	background-image: url(https://images.unsplash.com/photo-1533777857889-4be7c70b33f7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80);	
	background-size: cover;
	background-repeat: no-repeat;
	background-attachment: fixed;
}

@font-face {
  font-family: "alex-brush";
  src: url(../fonts/alex-brush/AlexBrush-Regular.ttf) format("truetype");
}

#subtitle{
color: white;
	position: absolute;
	top:60%;
	left: 50%;
	transform: translate(-50%,-50%);
	font-size: 30px	;
	font-weight: lighter;
	letter-spacing: 2px;
	text-transform: uppercase;
}
#scrollsec{
	color: white;
	position: absolute;
	bottom: 5%;
	left: 60%;
	transform: translate(-50%,-50%);	
}
#scrollsec img{
	width: 30%;
	height: 10%;
}
.panel{
	position: absolute;
}
.scrolltop {
	display:none;
	width:100%;
	margin:0 auto;
	position:fixed;
	bottom:20px;
	right:10px;	
}
.scroll {
	position:absolute;
	right:20px;
	bottom:20px;
	background:#b2b2b2;
	background:rgba(178,178,178,0.7);
	padding:20px;
	text-align: center;
	margin: 0 0 0 0;
	cursor:pointer;
	transition: 0.5s;
	-moz-transition: 0.5s;
	-webkit-transition: 0.5s;
	-o-transition: 0.5s; 		
}
.scroll:hover {
	background:rgba(178,178,178,1.0);
	transition: 0.5s;
	-moz-transition: 0.5s;
	-webkit-transition: 0.5s;
	-o-transition: 0.5s; 		
}
.scroll:hover .fa {
	padding-top:-10px;
}
.scroll .fa {
	font-size:60px;
	margin-top:-5px;
	margin-left:1px;
	transition: 0.5s;
	-moz-transition: 0.5s;
	-webkit-transition: 0.5s;
	-o-transition: 0.5s; 	
}
	
#logo{
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
}
#abt{
	background-image: url(http://www.moxhe.com.au/img/home/background-section2_2x.jpg);
	height: 70vh;
	background-repeat: no-repeat;
	background-size: cover;
	background-attachment: fixed;
}
.abtdesc{
	margin-left: 51%;
	color:white;
	position: absolute;
	margin-top: 10%;
	width: 30%;
	font-size: 26px;
	border-left:1px solid white;
	padding-left: 8%
}

#pinContainer {
  width: 100%;
  height: 100vh;
  overflow: hidden;
  position: relative;
}

#pinContainer section {
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 18px;
  text-transform: uppercase;
  font-weight: 700;
}
#pinContainer .panel {
  height: 100%;
  width: 100%;
  position: absolute;
}

#pinMaster {
  position: relative;
}



.dark {
	background-image: url(https://images.unsplash.com/photo-1489528792647-46ec39027556?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80);
	background-size: cover;
	background-position: bottom;
}
.turqoise {
  background-color: #38ced7; 
}
.brown {
  background-color: #a66f28;
}
.bordeaux {
  background-color: #953543;
}
.fixed-view-menu,
.fixed-book-table {
  position: fixed;
  top: 52.5%;
  min-height: 180px;
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  transform: translateY(-50%);
  width: 92px;
  z-index: 99999;
   }
  .fixed-view-menu p,
  .fixed-book-table p {
    -webkit-transition: all 0.4s ease 0s;
    -moz-transition: all 0.4s ease 0s;
    -o-transition: all 0.4s ease 0s;
    transition: all 0.4s ease 0s; }
    .fixed-view-menu p a,
    .fixed-book-table p a {
      text-transform: uppercase;
      font-size: 13px;
      color: black;
      -webkit-transition: all 0.4s ease 0s;
      -moz-transition: all 0.4s ease 0s;
      -o-transition: all 0.4s ease 0s;
      transition: all 0.4s ease 0s; }
  @media (max-width: 1114px) {
    .fixed-view-menu,
    .fixed-book-table {
      display: none; } 
  }

.fixed-view-menu {
  background: url(../images/view-menu-bg.png) no-repeat center;
  left: 0%; 
}
  .fixed-view-menu p {
    -webkit-transform: rotate(90deg) translate(60px, 16px);
    -moz-transform: rotate(90deg) translate(60px, 16px);
    -ms-transform: rotate(90deg) translate(60px, 16px);
    -o-transform: rotate(90deg) translate(60px, 16px);
    transform: rotate(90deg) translate(60px, 16px); }
    .fixed-view-menu p a {
    	font-size: 17px;
    	font-weight: bold;
    	letter-spacing: 2px;
    	text-decoration: none;
      color: green; }

.fixed-book-table {
  background: url(../images/book-table-bg.png) no-repeat center;
  left: 94%; }
  .fixed-book-table p {
    -webkit-transform: rotate(270deg) translate(-40px, 7px);
    -moz-transform: rotate(270deg) translate(-40px, 7px);
    -ms-transform: rotate(270deg) translate(-40px, 7px);
    -o-transform: rotate(270deg) translate(-40px, 7px);
    transform: rotate(270deg) translate(-40px, 7px); }
    .fixed-book-table p a {
    	font-size: 17px;
      color: white; 
      font-weight: bold;
      text-decoration: none;
      letter-spacing: 2px
  }
.openLeft {
	-webkit-animation: openLeft 3s ease both;
	animation: openLeft 3s ease both;
}

@-webkit-keyframes openLeft {
	from { -webkit-transform:translateX(-100%); }
	to {  -webkit-transform: translateX(0%); }
}

.openRight {
	-webkit-animation: openRight 3s ease both;
	animation: openRight 3s ease both;
}

@-webkit-keyframes openRight {
	from { -webkit-transform:translateX(100%); }
	to {  -webkit-transform: translateX(0%); }
}

.closeLeft{
-webkit-animation: closeLeft 3s ease both;
	animation: closeLeft 3s ease both;	
}
@-webkit-keyframes closeLeft {
	from { -webkit-transform:translateX(0%); }
	to {  -webkit-transform: translateX(-100%); }
}

.closeRight{
-webkit-animation: closeRight 3s ease both;
	animation: closeRight 3s ease both;	
}
@-webkit-keyframes closeRight {
	from { -webkit-transform:translateX(0%); }
	to {  -webkit-transform: translateX(100%); }
}

#title{
	color: white;
	position: absolute;
	top: 35%;
/*	transform: translate(-50%,-50%);
*/	font-size: 80px;
	width: 100%;
	text-align: center;
	font-family: 'ZCOOL XiaoWei', serif;
}
#title #sl1{
	position: absolute;
	left: 0;
	animation: slideRight 3s ease both;
}
#title #sl2{
	position: absolute;
	right:0;
	animation: slideLeft 3s ease both;
}

@-webkit-keyframes slideRight {
	from { 
		-webkit-transform:translateX(0%);
		opacity: 0
	}
	to { 
	 -webkit-transform: translateX(320%);
	 opacity: 1 
	}
}
@-webkit-keyframes slideLeft {
	from { 
		-webkit-transform:translateX(100%);
		opacity: 0
	}
	to { 
	 -webkit-transform: translateX(-210%);
	 opacity: 1 
	}
}
#logo{
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
}

#logo path:nth-child(1){
	stroke-dasharray: 419;
	stroke-dashoffset: 419;
	animation: line-anim 2s ease forwards;
}
#logo path:nth-child(2){
	stroke-dasharray: 436;
	stroke-dashoffset: 436;
	animation: line-anim 2s ease forwards 0.3s;
}
#logo path:nth-child(3){
	stroke-dasharray: 387;
	stroke-dashoffset: 387;
	animation: line-anim 2s ease forwards 0.6s;
}
#logo path:nth-child(4){
	stroke-dasharray: 248;
	stroke-dashoffset: 248;
	animation: line-anim 2s ease forwards 0.9s;
}
#logo path:nth-child(5){
	stroke-dasharray: 377;
	stroke-dashoffset: 377;
	animation: line-anim 2s ease forwards 0.3s;
}
#logo path:nth-child(6){
	stroke-dasharray: 427;
	stroke-dashoffset: 427;
	animation: line-anim 2s ease forwards 0.6s;
}
#logo path:nth-child(7){
	stroke-dasharray: 387;
	stroke-dashoffset: 387;
	animation: line-anim 2s ease forwards 0.9s;
}
#logo path:nth-child(8){
	stroke-dasharray: 248;
	stroke-dashoffset: 248;
	animation: line-anim 2s ease forwards 1.2s;
}
#logo path:nth-child(9){
	stroke-dasharray: 381;
	stroke-dashoffset: 381;
	animation: line-anim 2s ease forwards 1.5s;
}
#logo path:nth-child(10){
	stroke-dasharray: 506;
	stroke-dashoffset: 506;
	animation: line-anim 2s ease forwards 1.8s;
}


@keyframes line-anim{
	to{
		stroke-dashoffset:0;
	}
}

#wallet{
	border:2px inset white;
	padding: 15px;
	border-radius: 0px 14px 14px 0px;
	font-size: 16px
}
#wallet span{
	font-size: 24px;
	font-weight: bold;
}
.fa-accessible-icon:before{
	content: "\f007" !important;
	border-radius: 5px !important
}
.fa-shopping-cart:before{
	content:"\f07a" !important
}
#ccount{
	font-size: 18px !important;
	padding:3px 9px !important;
	border-radius: 50%;
	background-color: red;
	position: absolute;
	top: 11px
}

.panel h1{
	color: white;
	position: absolute;
	top: 15%
}
.panel img{
	margin-top: 20%
}

.hmenu:hover{
	opacity: 0.8;
	cursor: pointer;
}

.topnav {
  overflow: hidden;
  background-color: transparent;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (min-width: 768px){
	.topnav{
		display: none;
	}
}

@media screen and (max-width: 768px) {
	.topnav .active{
		display: none
	}
	.topnav{
		background-color:black;
	}
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
  nav{display: none;}
  #title{
  	font-size: 39px
  }
  #subtitle{
  	font-size: 29px;
  	width: 100%;
  	text-align: center;
  	margin-top: -10%
  }
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  #para{
  	font-size: 20px
  }
  #abt{
  	height: 50vh
  }
  .panel img{
  	width: 20vh
  }
}

#book{
position:fixed;
height: 100vh;
width:100vh;
top:0px;
z-index: 99999;
transform: translateX(100%);
right: 0;
background-image: url(https://images.unsplash.com/photo-1510523293781-b2cd54eaeac0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80);
background-repeat: no-repeat;
background-size: cover;
border-left:1px solid black;
}

#book .clsbtn{
border:none;background-color: red;padding:10px 15px;font-size: 24px;cursor: pointer;
position: absolute;
left: 0
}

#book h1{
	font-family: 'Poppins';
	font-weight: lighter;
	letter-spacing: 2px;
	text-transform: uppercase;
	color: white;
	text-align: center;
}

#charity{
	position:fixed;height: 100vh;width:100vh;top:0px;z-index: 99999;background-color: white;transform: translateX(-100%)
}
#charity button{
	float: right;border:none;background-color: red;padding:10px 15px;font-size: 24px;cursor: pointer;
}
.sidemenu h1{
	text-align: center;
}
#book-step2{
	margin-top: 5%;
	text-align: center;
	color:white;
	font-family: 'ZCOOL XiaoWei', serif;
	letter-spacing: 1px	
}
#book-step2 select{
	font-size: 20px;
	padding: 10px 20px;
	background-color:transparent;
	color:white;
}
#book-step2 option{
	background-color:black;
}

#book-step2 button{
	background-color:green;
	padding: 12px;
	border:none;
	outline: none;
	font-size: 23px;
	color:white;
	cursor: pointer;
}
#choosen-date{
	border:1px solid white;
	padding: 10px;
	width: 30%;
	margin: auto;
}
#bookcontent{
	position: absolute;width: 100%;height: 100%;
}
#bookcontent .side-title{
	margin-top: 15%;
	text-align: center;
	color: white;
	font-family: sans-serif;
	font-weight: lighter;
	font-size: 26px
}
#bookcontent .opening-para{
	text-align: center;
	color: white;
	font-size: 22px
}
#bookcontent .proceed-btn1{
	margin: auto;
	padding: 10px 20px;
	background-color:transparent;
	border:1px solid white;
	outline: none;
	color: white;
	font-size: 20px;
	margin-top: 5%;
	transition: 0.7s ease all;

}
#bookcontent .proceed-btn1:hover{
	background-color:blue;
	border:none;
	transition: 0.7s ease all;
	cursor: pointer;
}
#book-step3{
	margin-top: 5%;
	text-align: center;
	color:white;
	font-family: 'ZCOOL XiaoWei', serif;
	letter-spacing: 1px	

}
 </style>
<script>

	function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

	function fun1(str){
		if(str=="char"){
			document.getElem-entById("charity").classList.remove("closeLeft");
			document.getElementById("charity").classList.add("openLeft");
		}
		if(str=="book"){
			document.getElementById("book").classList.remove("closeRight");
			document.getElementById("book").classList.add("openRight");

		}
	}

	function fun2(str){
		if(str=="char"){
			document.getElementById("charity").classList.remove("openLeft");
			document.getElementById("charity").classList.add("closeLeft");
		}
		if(str=="book"){
			document.getElementById("book").classList.remove("openRight");
			document.getElementById("book").classList.add("closeRight");
		}
	}	

	$(document).ready(function(){
		$(window).scroll(function(){
			var scroll = $(window).scrollTop();
			if(scroll>70){
				$("nav").addClass("fix");
			}
			else if(scroll<70){
				$("nav").removeClass("fix");
			}				
			});
		$("#book-step2").hide();
		$(".proceed-btn1").click(function(){
			$("#book-step2").fadeIn("1000");
			$("#book-step1").hide();
		});
		$("#book-step3").hide();
	});
</script>
<link href="https://fonts.googleapis.com/css?family=ZCOOL+XiaoWei&display=swap" rel="stylesheet">

</head> 
<body>



	
	<div id="preloader">
		<svg id="logo" width="530" height="83" viewBox="0 0 712 83" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M40.92 4.29998C48.9867 4.29998 55.9167 6.05998 61.71 9.57998C67.5034 13.1 71.8667 17.6833 74.8 23.33C77.8067 28.9033 79.31 34.77 79.31 40.93C79.31 51.71 75.8633 60.5467 68.97 67.44C62.0767 74.26 52.9834 77.78 41.69 78H3.30001L2.64001 74.48C5.42668 72.5733 8.54335 70.85 11.99 69.31V12.11L4.18001 11.01L4.29001 5.17998C15.3633 4.59331 27.5734 4.29998 40.92 4.29998ZM39.27 67.88C45.0634 67.88 49.72 65.46 53.24 60.62C56.76 55.7067 58.52 49.4733 58.52 41.92C58.52 36.1266 57.3467 30.6267 55 25.42C52.7267 20.2133 49.6467 16.3633 45.76 13.87L31.9 15.52V66.78C34.3933 67.5133 36.85 67.88 39.27 67.88Z" stroke="white" stroke-width="4"/>
<path d="M145.796 55.12C145.943 62.3067 145.503 69.9333 144.476 78H83.8664L83.2064 74.48C85.9931 72.5733 89.1098 70.85 92.5564 69.31V12.22L84.3064 11.01L84.4164 5.17998H145.246L145.356 7.70998C145.356 14.4566 144.66 21.02 143.266 27.4H132.266L130.286 16.18L112.466 14.97V37.19L135.456 35.32V47.2L112.466 46.21V67.77L130.946 66.34L134.906 54.24L145.796 55.12Z" stroke="white" stroke-width="4"/>
<path d="M213.29 57.54C213.29 64.2867 210.613 69.75 205.26 73.93C199.98 78.0367 193.087 80.09 184.58 80.09C180.107 80.09 175.267 79.5033 170.06 78.33C164.927 77.1567 160.563 75.5066 156.97 73.38L157.08 73.16L156.97 69.86C156.97 62.9667 157.63 57.0633 158.95 52.15H167.86L175.01 68.1C179.19 69.5667 183.443 70.3733 187.77 70.52C191.73 68.6866 193.71 65.9366 193.71 62.27C193.71 58.6033 191.217 55.45 186.23 52.81L172.81 46.32L168.52 43.9C160.747 39.2067 156.86 33.0833 156.86 25.53C156.86 18.8567 159.61 13.43 165.11 9.24998C170.61 5.06998 177.723 2.97998 186.45 2.97998C194.663 2.97998 202.51 4.37332 209.99 7.15998C209.697 16.0333 208.927 23.0367 207.68 28.17H197.56L193.27 14.75C189.603 13.2833 185.35 12.4766 180.51 12.33C177.21 14.31 175.56 17.06 175.56 20.58C175.56 23 176.697 25.0533 178.97 26.74C181.317 28.3533 185.093 30.3333 190.3 32.68C195.58 34.9533 199.76 37.1166 202.84 39.17C205.993 41.2233 208.523 43.7533 210.43 46.76C212.337 49.6933 213.29 53.2867 213.29 57.54Z" stroke="white" stroke-width="4"/>
<path d="M259.117 72.17L259.007 78H220.507L219.847 74.48C222.634 72.5733 225.75 70.85 229.197 69.31V12.33L220.727 11.01L220.837 5.17998H257.797L258.457 8.69998C255.817 10.6066 252.7 12.33 249.107 13.87V70.52L259.117 72.17Z" stroke="white" stroke-width="4"/>
<path d="M355.028 5.50998L355.138 8.14998C355.138 15.2633 354.442 21.9 353.048 28.06H342.048L339.958 16.07L322.248 14.86V39.39L346.668 37.52V50.06L322.248 48.96V70.08L335.668 72.17L335.558 78H294.308L293.648 74.48C296.508 72.5733 299.405 70.96 302.338 69.64V12.22L294.198 11.01L294.308 5.17998H355.138L355.028 5.50998Z" stroke="white" stroke-width="4"/>
<path d="M439.565 8.69998C436.925 10.6066 433.808 12.33 430.215 13.87V46.54C430.142 58.42 427.392 67 421.965 72.28C416.612 77.56 409.498 80.2 400.625 80.2C390.285 80.2 382.072 77.23 375.985 71.29C369.972 65.2767 366.818 57.0267 366.525 46.54V12.33L358.055 11.01L358.165 5.17998H395.125L395.785 8.69998C393.145 10.6066 390.028 12.33 386.435 13.87V49.29C386.435 55.9633 387.902 60.95 390.835 64.25C393.768 67.55 397.692 69.2 402.605 69.2C406.198 69.2 409.242 68.2833 411.735 66.45C414.815 63.0766 416.392 56.5133 416.465 46.76V12.44L407.335 11.01L407.445 5.17998H438.905L439.565 8.69998Z" stroke="white" stroke-width="4"/>
<path d="M502.362 57.54C502.362 64.2867 499.686 69.75 494.332 73.93C489.052 78.0367 482.159 80.09 473.652 80.09C469.179 80.09 464.339 79.5033 459.132 78.33C453.999 77.1567 449.636 75.5066 446.042 73.38L446.152 73.16L446.042 69.86C446.042 62.9667 446.702 57.0633 448.022 52.15H456.932L464.082 68.1C468.262 69.5667 472.516 70.3733 476.842 70.52C480.802 68.6866 482.782 65.9366 482.782 62.27C482.782 58.6033 480.289 55.45 475.302 52.81L461.882 46.32L457.592 43.9C449.819 39.2067 445.932 33.0833 445.932 25.53C445.932 18.8567 448.682 13.43 454.182 9.24998C459.682 5.06998 466.796 2.97998 475.522 2.97998C483.736 2.97998 491.582 4.37332 499.062 7.15998C498.769 16.0333 497.999 23.0367 496.752 28.17H486.632L482.342 14.75C478.676 13.2833 474.422 12.4766 469.582 12.33C466.282 14.31 464.632 17.06 464.632 20.58C464.632 23 465.769 25.0533 468.042 26.74C470.389 28.3533 474.166 30.3333 479.372 32.68C484.652 34.9533 488.832 37.1166 491.912 39.17C495.066 41.2233 497.596 43.7533 499.502 46.76C501.409 49.6933 502.362 53.2867 502.362 57.54Z" stroke="white" stroke-width="4"/>
<path d="M548.189 72.17L548.079 78H509.579L508.919 74.48C511.706 72.5733 514.823 70.85 518.269 69.31V12.33L509.799 11.01L509.909 5.17998H546.869L547.529 8.69998C544.889 10.6066 541.773 12.33 538.179 13.87V70.52L548.189 72.17Z" stroke="white" stroke-width="4"/>
<path d="M587.188 2.97998C597.894 2.97998 606.694 6.68331 613.588 14.09C620.554 21.4233 624.038 30.92 624.038 42.58C624.038 53.9466 620.701 63.0767 614.028 69.97C607.354 76.79 598.664 80.2 587.958 80.2C577.104 80.2 568.194 76.7167 561.228 69.75C554.334 62.71 550.888 53.5067 550.888 42.14C550.888 30.6267 554.298 21.24 561.118 13.98C567.938 6.64665 576.628 2.97998 587.188 2.97998ZM578.938 15.08C576.811 16.9867 575.088 20.1767 573.768 24.65C572.448 29.05 571.788 34.1466 571.788 39.94C571.788 48.8866 573.364 56.0733 576.518 61.5C579.744 66.8533 584.218 69.53 589.938 69.53C591.771 69.53 593.494 69.2367 595.108 68.65C597.528 66.3767 599.471 62.93 600.938 58.31C602.404 53.69 603.138 48.5566 603.138 42.91C603.138 34.2566 601.561 27.2166 598.408 21.79C595.254 16.3633 591.038 13.65 585.758 13.65C583.558 13.65 581.284 14.1266 578.938 15.08Z" stroke="white" stroke-width="4"/>
<path d="M709.235 8.69998C706.595 10.5333 703.662 12.1466 700.435 13.54L699.885 78L682.285 79.43L649.395 30.04L650.935 43.35V70.63L660.615 72.17L660.505 78H628.495L627.835 74.48C630.622 72.5733 633.739 70.85 637.185 69.31V12.44L629.155 11.01L629.265 5.17998H656.215L656.105 5.28998L688.335 54.79L686.795 41.04V12.77L675.905 11.01L676.015 5.17998H708.575L709.235 8.69998Z" stroke="white" stroke-width="4"/>
</svg>
	</div>


	<div id="mainbody">
	<div id="top"></div>
	<section id="homesec">
		
		<?php include 'navs/normal.php';?>
		<div id="otherpart">
	<h1 id="title"><span id="sl1">Desi</span>&nbsp;<span id="sl2">Fusion</span></h1>
	<h4 id="subtitle">One thousand flavors in one place</h4>
		</div>
	
	</section>
	<div id="otherbody">
	<section id="abt">
		<div class="abtdesc">
			<p data-aos='fade-left'  data-aos-duration="2000" id="para">Desi fusion is a restaurant with descriptionDesi fusion is a restaurant with descriptionDesi fusion is a restaurant with descriptionDesi fusion is a restaurant with description</p>
		</div>
	</section>	
<!-- 	<div id="spacer"></div>
<div id="pinMaster">
  <div id="pinContainer">
    <section class="panel dark">
		<h1>services</h1>
		<img src="http://le-mugs.com/wp-content/themes/mugs/images/1a.png" id="img1" data-aos='fade-right' data-aos-duration="1000" data-aos-offset="200">
		<img src="http://le-mugs.com/wp-content/themes/mugs/images/1a.png" id="img2" data-aos='fade-right' data-aos-duration="1000" data-aos-offset="230">
		<img src="http://le-mugs.com/wp-content/themes/mugs/images/1a.png" id="img3" data-aos='fade-right' data-aos-duration="1000" data-aos-offset="250">
		<img src="http://le-mugs.com/wp-content/themes/mugs/images/1a.png" id="img4" data-aos='fade-right' data-aos-duration="1000" data-aos-offset="270">
    </section>
    <section class="panel turqoise">
		<h1 style="color:black">services</h1>    	
		<img src="http://le-mugs.com/wp-content/themes/mugs/images/1a.png" id="img5" data-aos='fade-up' data-aos-duration="1000" data-aos-offset="600">
		<img src="http://le-mugs.com/wp-content/themes/mugs/images/1a.png" id="img6" data-aos='fade-up' data-aos-duration="1000" data-aos-offset="640">
		<img src="http://le-mugs.com/wp-content/themes/mugs/images/1a.png" id="img7" data-aos='fade-up' data-aos-duration="1000" data-aos-offset="680">
		<img src="http://le-mugs.com/wp-content/themes/mugs/images/1a.png" id="img8" data-aos='fade-up' data-aos-duration="1000" data-aos-offset="720">
    </section>
  </div> -->
  <section class="spacer"></section>
  <div class='scrolltop'>
    <div class='scroll icon fa'><i class="fas fa-chevron-circle-up"></i></div>
</div>

</div>
</div>
	<div class="fixed-view-menu hmenu" onclick="fun1('char')">
		<p>
			<a>Donate</a>
		</p>
	</div>
	<div class="fixed-book-table hmenu" onclick="fun1('book')">
		<p>
			<a >Book table</a>
		</p>
	</div>
	<div id="charity" class="sidemenu">
		<button style="" onclick="fun2('char')">X</button>
	<h1>Donation area</h1>
	<hr>
	</div>

<div id="book" class="sidemenu">
<div style="position: absolute;background-color:black;width: 100%;height: 100%;opacity: 0.8">
</div>
	<div style="" id="bookcontent">	
		<button class="clsbtn" onclick="fun2('book')">X</button>	
		<h1>Book a Table</h1>
		
		<div id="book-step1">
		<h2 class="side-title">Opening times</h2>
		<p class="opening-para">
			Final food service is at 10pm (9pm Sundays and Bank Holidays)<br><br/>
Monday: Closed<br/>
Tuesday - Friday: 5pm-11pm<br/>
Saturday: 12pm-11pm<br/>
Sunday: 12pm-10pm<br/>
All Bank Holidays: 5pm-10pm
		</p>
		<center>
			<button class="proceed-btn1">Click here to make booking</button>
		</center>
		</div>

		<div id="book-step2" style="display: none;">
			<h2 class="label">Number of Guests</h2>
			<select id="selectGCount">
				<?php 
				for($i=1;$i<$count;$i++){
				 ?>
					<option value="<?php echo $i; ?>"><?php echo $i; ?> Guests</option>		
				<?php
				}
				?>
			</select>
			<h2>Choose date</h2>
			<center>
			<div id="datepicker"></div>
			<input type="hidden" name="" id="dvalue">
			<input type="hidden" id="range" value="+<?php echo $settings['date_range']; ?>">
			</center>
			<br><br>
			<button id="proceed-btn2">Check availability</button>
		</div>
		<div id="book-step3">
			<h2>Select Time</h2>
		</div>
	</div>
	</div>
</div>


</body>
</html>
