<?php 
  include("./php/Components.php");
  require_once('./operations.php');
  $settings = showSettings();
  $count = (int)$settings['g_count'];
  $time = $settings['time'];
  $time_arr = explode(",",$time);
  $purpose = $settings['purpose'];
  $purp_arr = explode(",",$purpose);
  $max_bookings = $settings['max_bookings'];
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- 	<link rel="stylesheet" type="text/css" href="../css/style0.css">
 --><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/eggplant/jquery-ui.css" />	
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../css/slick.css">
<link rel="stylesheet" type="text/css" href="../css/slick-theme.css">
<style>
	@import url('https://fonts.googleapis.com/css?family=Great+Vibes|Raleway|ZCOOL+XiaoWei&display=swap');

#logo{
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
	top:6vh;
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


html{
	  scroll-behavior: smooth;
}
body{
	margin: 0;
	padding: 0;
	background-color: black
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
	z-index: 999
}
.sec1{
	width: 100%;
	height: 100vh;
	background: #fff url(https://images.unsplash.com/photo-1533777857889-4be7c70b33f7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80);	
	background-size: cover;
	background-repeat: no-repeat;
	background-attachment: fixed;
	}
#homenav{
  width: 100%;
  position: fixed;
  z-index: 100;
  display: flex;
  height: 9%;
  flex-direction: row;
  justify-content: space-between;
  z-index: 1000;
  background-color: rgba(0,0,0,0.5);
}
@font-face {
  font-family: "alex-brush";
  src: url(../fonts/alex-brush/AlexBrush-Regular.ttf) format("truetype");
}

#homenav ul{
	display: flex;
	flex-direction: row;
	justify-content: center;
	align-items: center;
	list-style: none;
}
#homenav ul li{
	text-decoration: none;
	margin:10px 17px;
}
#homenav ul li a{
	text-decoration: none;
	font-size: 22px;
	color:white;
	font-family: 'ZCOOL XiaoWei', serif;
	text-transform: uppercase;

}
#homenav ul li a:hover{
	color:yellow;
	text-decoration: none;	
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
#title{
	color: white;
	position: absolute;
	top: 35%;
	font-size: 80px;
	width: 100%;
	text-align: center;
	font-family: 'Great Vibes', cursive;
	font-weight: 400
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
	 -webkit-transform: translateX(370%);
	 opacity: 1 
	}
}
@-webkit-keyframes slideLeft {
	from { 
		-webkit-transform:translateX(130%);
		opacity: 0
	}
	to { 
	 -webkit-transform: translateX(-250%);
	 opacity: 1 
	}
}
  #subtitle{
  	font-size: 39px;
  	width: 100%;
  	text-align: center;
  	position: absolute;
  	top: 55%;
  	color: white;
  	text-transform: uppercase;
  	font-weight: 400
  }


#pp-nav li .active span,.pp-slidenav .active span{
	background:#fff;
}
.fixed-view-menu{
	position: absolute;
	left: 0;
	transform:rotate(90deg);
}
.fixed-book-table{
	position: absolute;
	left:0;
	top:10px;
	transform:rotate(90deg);
}
#scrollTopLink{
  position: fixed;
  z-index: 100;
  bottom: 20px;
  color: white;
  right: 20px;
  border-radius: 50%;
  background-color: red;
  padding: 19px;
  cursor: pointer;
  display: none;
  outline: none;
  border:none;
}
#scrollTopLink:hover{
	opacity: 0.7
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
}

#mainbody{
	display: none;
}
/* section 2 about-------------- start */

	.sec2{
	background-image: url(http://www.moxhe.com.au/img/home/background-section2_2x.jpg);
	background-repeat: no-repeat;
	background-size: cover;
	background-attachment: fixed;
	width: 100%;
		}

.container{
	display: flex;
	margin: auto;
	justify-content: center;
	flex-wrap: wrap;
	flex-direction: row;
	align-items: center;
}

.imgwrapper{
width: 60%;
height:100vh;
display: flex;
}

.imgwrapper img{
	border:5px inset #fff;
}
.img1{
	height: 19em;
	width: 28em;
	margin-left: -3vh;
	margin-top: 4vh;
}

.img2{
	height: 19em;
	width: 28em;
	margin-left: -32vh;
	margin-top: 35vh;
}
.content-wrapper{
	width: 40%;
	height: 80vh;
}
.content-wrapper h1{
	
	text-align: center;
	font-size: 50px;
font-family: 'Raleway', sans-serif;
color: white
}
.content-wrapper hr{
	width: 60%;
	color: #ccc
}
.content-wrapper p{
	font-size: 1.3em;
	width: 70%;
	margin: auto;
	font-family: 'Raleway';
	text-align: center;
	color: white
}
.content-wrapper button{
	padding: 10px 20px;
	border-radius: 10px 10px 10px 10px;
	border:1px solid white;
	outline: none;
	background-color: transparent;
	font-size: 24px;
	transition: 0.6s ease all;
	color: white

}
.content-wrapper button:hover{
	background-color: #FFC300;
	border:none;
	transition: 0.6s ease all;
	cursor: pointer;
	color: black
}

/* section 2 ---------------end */


/* section 3-------------- menu */
		.sec3{
			width: 100%;
			background-image: url(http://www.saglumanist.com/lib/images/menu-bg.jpg);
			background-repeat: no-repeat;
			background-size: cover;
			margin-top: -46px;
			background-attachment: fixed;					
		}
		 .section3-header{
			color: black;
			text-align: center;
				font-family: 'Great Vibes', cursive;font-size:66px;
				font-weight: 400;
		}

		.mask{
	width: 55vh;height: 45vh;border-radius: 50px;position: absolute;background-color:transparent; ;top: 0;
}
.mask h1{
	text-align: center;
	margin-top: 35%;
	padding: 7px;
	width: 40%;
	border:1px solid black;
	font-family: 'Raleway';
	background-color: black;
	opacity: 0.7;
	color: white;
	font-weight: 400;
	border-radius: 0px 15px 15px 0px
}
.imgdiv{
	margin: 0px 10px;
	position: relative;
}
.imgdiv img{
	border-radius: 50px;width: 55vh;height: 45vh;box-shadow: 10px 10px 10px #000
}

.imgdiv img:hover{
	opacity: 0.8
}
.img-container2{
	width: 80%;margin: auto;display: flex;justify-content: center;align-items: center;margin-top:3%
}
.img-container{
	width: 100%;
	margin: auto;
	margin-top: 10%;
	display: flex;justify-content: center;align-items: center;
}
 .left-abs-image{
	position: absolute;left: -60vh;width: 40%;
}
 .right-abs-image{
	position: absolute;right: -50vh;width: 40%
}
/* section 3 ends*/

/* section 4 events */
.sec4 h1{
	color:white;
}
.serv-img1{
	width: 30%
}
.serv-img2{
	width: 30%;
}

/* event section end */

/* Left and right  */
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

#book{
position:fixed;
height: 100vh;
width:100vh;
z-index: 99999;
transform: translateX(100%);
right: 0;
background-image: url(https://images.unsplash.com/photo-1510523293781-b2cd54eaeac0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80);
background-repeat: no-repeat;
background-size: cover;
overflow: hidden;
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
.errorbox{
	color: red;width: 43%;margin: auto;padding: 2px;font-size:18px;font-weight: bold;
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
	margin-top: 2%;
	text-align: center;
	color:white;		
}
#book-step2 .label{
	font-family: 'ZCOOL XiaoWei', serif;
	letter-spacing: 2px	
}
#book-step2 .book-header{
	letter-spacing: 1px;
}
#book select{
	font-size: 18px;
	padding: 10px 20px;
	background-color:transparent;
	color:white;
}
#book option{
	background-color:black;
}

.book-btn{
	background-color:green;
	padding: 11px;
	border:none;
	outline: none;
	font-size: 22px;
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
#book-step4{
	color: white;
	text-align: center;
	text-align: center;
	color:white;
	font-family: 'ZCOOL XiaoWei', serif;
	letter-spacing: 1px	
}
.book-input{
	font-size: 22px;
	padding: 3px 9px
}
.hmenu:hover{
	opacity: 0.8;
	cursor: pointer;
}

/* LR end */
/*Services start*/

/*.serv-img1{
	width: 40%
}
*//*services end*/
.sec4{
background: #1D2B64;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #F8CDDA, #1D2B64);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #F8CDDA, #1D2B64); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */;
margin-top: -1vh
}
.sec4 h1{
	text-align: center;
			text-align: center;
			font-family: 'Great Vibes', cursive;
			font-size:66px;
			font-weight: 400;
			color: black
}
.serv-img{
	width: 70%;
	padding: 20px;
	height: 30vh
}
.serv-img:hover{
	cursor: pointer;
}
.imagediv{
	padding: 10px;
	width: 25%;
	height: 25%;
}
.imagediv h3{
	text-align: center;
	font-family: 'ZCOOL XiaoWei', sans-serif;
	font-size: 25px;
}
.slick{
	width:85%;
	margin: auto;
}
.indi-content{
	width: 100%;
    background-color: black;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    color: white;
    border-radius: 15px;
}
@import url('https://fonts.googleapis.com/css?family=Quicksand&display=swap');
.indi-content h1{
	width: 65%;
	padding: 40px 40px;
font-family: 'Quicksand', sans-serif;
	letter-spacing: 2px
}
.indi-content img{
	width: 150px;
	height: 150px;
	border-radius: 50%
}
.indi-content span{
	margin-top: -10px;

}
.indi-content h3{
	font-family: 'ZCOOL XiaoWei';
	font-size:20px;
	letter-spacing: 2px
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
.sec-news-title{
	font-family: 'Quicksand', sans-serif;
	font-weight: 100;
}
#sec-news input{
	width: 50%;font-size: 20px;padding: 10px;border:1px solid white;outline: none;background-color: transparent;cursor: auto;color:white;font-weight: 300
}
#sec-news button{
	padding: 10px 20px;
	font-size: 19px;
	text-transform: uppercase;
	letter-spacing: 2px;
	background-color: transparent;
	border:1px solid green;
	color:white;
	outline: none;
}
#sec-news button:hover{
	background-color: green;
	cursor: pointer;
}
#foo-follow{
	width: 30%;
	font-family: 'Quicksand', sans-serif;
	font-weight: 100;

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

/* Styling for menu */
#menu-wrapper{
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
	margin: 0 5px
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


/* Styling for menu end */


</style>
</head>
<body>

 <div id="preloader" style="display: none;">
			<svg id="logo" width="530" height="83" viewBox="0 0 712 83" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M40.92 4.29998C48.9867 4.29998 55.9167 6.05998 61.71 9.57998C67.5034 13.1 71.8667 17.6833 74.8 23.33C77.8067 28.9033 79.31 34.77 79.31 40.93C79.31 51.71 75.8633 60.5467 68.97 67.44C62.0767 74.26 52.9834 77.78 41.69 78H3.30001L2.64001 74.48C5.42668 72.5733 8.54335 70.85 11.99 69.31V12.11L4.18001 11.01L4.29001 5.17998C15.3633 4.59331 27.5734 4.29998 40.92 4.29998ZM39.27 67.88C45.0634 67.88 49.72 65.46 53.24 60.62C56.76 55.7067 58.52 49.4733 58.52 41.92C58.52 36.1266 57.3467 30.6267 55 25.42C52.7267 20.2133 49.6467 16.3633 45.76 13.87L31.9 15.52V66.78C34.3933 67.5133 36.85 67.88 39.27 67.88Z" stroke="white" stroke-width="4"/>
<path d="M145.796 55.12C145.943 62.3067 145.503 69.9333 144.476 78H83.8664L83.2064 74.48C85.9931 72.5733 89.1098 70.85 92.5564 69.31V12.22L84.3064 11.01L84.4164 5.17998H145.246L145.356 7.70998C145.356 14.4566 144.66 21.02 143.266 27.4H132.266L130.286 16.18L112.466 14.97V37.19L135.456 35.32V47.2L112.466 46.21V67.77L130.946 66.34L134.906 54.24L145.796 55.12Z" 
stroke="white" stroke-width="4"/>
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
<div id="scrollbar"></div>

<div id="pagepiling">
<div id="top"></div>

<nav id="homenav">
	<ul>
		<li>
			<a class="home" style="cursor: pointer;color:white">Home</a>
			<div></div>
		</li>
		<li>
			<a class="abt" style="cursor: pointer;color:white">About</a>
			<div></div>
		</li>
		<li>
			<a href="menu.php" class="">Menu</a>
			<div></div>
		</li>		
	</ul>
<img src="../images/logo1.png" id="logo" width="5%">
	<ul>	

		<li>
			<a href="" class="">Gallery</a>
			<div></div>
		</li>		
		<li>
			<a href="" class="">Contact</a>
			<div></div>
		</li>
		<li>
			<a href=""><i class="fa fa-accessible-icon"></i></a>
		</li>	
	</ul>
</nav>
<div class="topnav" id="myTopnav">
  <a href="#home" class="active">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>


  	<div class="sec1">
<h1 id="title">
	<span id="sl1">Desi</span>
	<span id="sl2">Fusion</span>
</h1>
	<h4 id="subtitle" class="typewrite" data-period="2000" data-type='[ "One thousand flavors in one place", "I am Creative.", "I Love Design.", "I Love to Develop." ]'>
	</h4>
	<?php include 'sidemenu.php'; ?>
	</div>
	<div class="section sec2" id="about">
		<div class="container">
			<div class="imgwrapper">
				<img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80"  class="img1">
				<img src="https://images.unsplash.com/photo-1477763858572-cda7deaa9bc5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=676&q=80"  class="img2">				
			</div>
			<div class="content-wrapper">
				<h1>About Us</h1>
				<hr><br> <br> 
				<p>Roshni stands for happiness and light, contemporary designed and influenced by ancient Indian traditions, Roshni offers a sophisticated dining and takeaway experience. With its intoxicating mix of old and new setting, its effortlessly charming staff and its tantalising food will make you want to come back for more.</p>
				<br> <br> 
			</div>
		</div>
	</div>
	<div class="section sec3">
		<div class="menu-content">
			<br>
			<h1 class="section3-header">Our menu</h1>

			<div class="img-container">

				<div class="imgdiv">
				<img src="https://www.whiskaffair.com/wp-content/uploads/2018/02/Chicken-Hakka-Noodles-7.jpg" style="">
				<div class="mask">
					
						<h1>Chinese</h1>
					
				</div>	
				</div>
				<div class="imgdiv">
				<img src="https://food.fnr.sndimg.com/content/dam/images/food/fullset/2012/2/27/0/0155221_Grilled-shrimp-on-skewers_s4x3.jpg.rend.hgtvcom.966.725.suffix/1397166029692.jpeg">	
				<div class="mask">
					<h1>Starters</h1>
				</div>	
				</div>
				<div class="imgdiv">
				<img src="https://www.thespruceeats.com/thmb/SNdQ4pyM3J9jvcb2nYzqP4txsX4=/2119x1192/smart/filters:no_upscale()/indian-curry-at-an-indian-restaurant--838906722-e37fc641962a4a9fbb9d71c33b8b003c.jpg">
				<div class="mask">
					<h1>Lunch</h1>
				</div>								
				</div>
			</div>
			<div class="img-container2">
				<div class="imgdiv">
				<img src="http://us.sulekhalive.com/images/photos/thumbnailfull/photos-2014-4-30-9-6-35.jpg?v=1.1.0">	
				<div class="mask">
					<h1>Dinner</h1>
				</div>					
				</div>
				<div class="imgdiv">
				<img src="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/content/for-foodies/deluxe-all-inclusive-alcohol-beverage-soda-package-cocktails.jpg?$469x292$">
				<div class="mask">
					<h1 style="width:45% !important">Beverages</h1>
				</div>						
				</div>
				<div class="imgdiv">
				<img src="https://www.seriouseats.com/2019/05/20190520-cheesecake-vicky-wasik-34-625x469.jpg">	
				<div class="mask">
					<h1>Drinks</h1>
				</div>							
				</div>
			</div>
			<br>
		</div>
		<br>
	</div>
  
	<div class="sec4">
		<div class="">
			<br>
			<h1 class="section3-header">Our Services</h1>
			<br>
				<div style="display: flex;flex-direction: row;justify-content: center;width: 96%;
				margin: auto;">
				
				<div class="imagediv">
					<center>
						<img src="../images/serv2.png" class="serv-img2 serv-img">
					</center>
					<h3>Delicious Food</h3>
				</div>	
				<div class="imagediv">
					<center>
						<img src="../images/serv1.png" class="serv-img2 serv-img" >
					</center>
					<h3>Home Delivery</h3>
				</div>	
				<div class="imagediv">
					<center>
						<img src="../images/serv3.png" class="serv-img2 serv-img">
					</center>
					<h3>Surprising Events</h3>
				</div>
				<div class="imagediv">
					<center>
						<img src="../images/serv4.png" class="serv-img2 serv-img">
					</center>
					<h3>Donations</h3>
				</div>
			</div>
		</div>
	</div>

<div style="width: 100%;height: 100vh;margin-top: -1vh;
"> 
<br>
<h1 class="section3-header" style="color: white">Testimonials</h1>
<div class="slick">

  <div class="indi-content" style="display: flex;">
  	<div>
<h1>" This restaurant has a great attitude and delivers delicious dishes at great prices. Thank you so much for excellent service and the best pasta in my life.”
</h1>
</div>
<div style="width: 70%;display: flex;justify-content: center;align-items: center;flex-direction: column;">
<img src="http://desifusion11.000webhostapp.com/images/man1.jpg">
<h3>Dheeraj Sahay</h3>
<span>19yrs</span>
</div>
  </div>

  <div class="indi-content" style="display: flex;">
  	<div>
<h1>“ Giardino evokes the generosity, humor and simplicity of Italian gastronomy with its unquenchable thirst for life and appreciation of exquisite flavors.”

</h1>
</div>
<div style="width: 70%;display: flex;justify-content: center;align-items: center;flex-direction: column;">
<img src="http://desifusion11.000webhostapp.com/images/o2.jpeg">
<h3>Sara Dollas</h3>
<span>19yrs</span>
</div>
  </div>

    <div class="indi-content" style="display: flex;">
  	<div>
<h1>“ I enjoy a classic pasta with quality ingredients. And this pasta is absolutely delicious. The same can be said for all the free toppings!! Thank you so much, guys.”
</h1>
</div>
<div style="width: 70%;display: flex;justify-content: center;align-items: center;flex-direction: column;">
<img src="http://desifusion11.000webhostapp.com/images/o4.jpeg">
<h3>Bradley Crawford</h3>
<span>19yrs</span>
</div>
  </div>

</div>
</div>

<br>
<!--Footer begins here-->
<?php include 'footer.php'; ?>
<!--Footer Ends-->
	</div>
	     <a id="scrollTopLink" onclick="topFunction()"><i class="fas fa-chevron-up"></i></a>
</div>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script type="text/javascript" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/gsap-latest-beta.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.6/highlight.min.js">
		</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script type="text/javascript" src="../js/slick.min.js"></script>
<!-- <script type="text/javascript" src="../js/script0.js"></script> -->
<script type="text/javascript">
	$(document).ready(function(){
  $('.slick').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,  });
});
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


	$(document).ready(function() {
 AOS.init();

    var time,dvalue,BC,C,ad;

	$("#mainbody").show();
    $("#preloader").hide();
// $("#preloader").fadeOut(5000,function(){
// 	$("#mainbody").fadeIn(500);
// });

        $(".proceed-btn1").click(function(){
            $("#book-step2").fadeIn("2000");
            $("#book-step1").hide();
        });
        $("#book-success").show();
        $("#book-step2,#book-step4,#book-step3,#book-step1").hide();
$("#datepicker").datepicker({
    minDate :0,
    maxDate : $("#range").val(),
    onSelect : function (dateText){
        $("#dvalue").datepicker("setDate",$(this).datepicker("getDate"));
    }
});

$("#dvalue").datepicker();

$("#proceed-btn2").click(function(){
    if($("#dvalue").val().length<1){
        alert("Please select a date");
    }
    else{
         time = $("#selectTime").val();
         dvalue = $("#dvalue").val();

        $.post("operations.php",{
            ctime : time,
            cdvalue : dvalue
        },function(data,status){

            if(data.search("booked")!=-1){
            	alert("No table slots available..Please try another time or day");
            }
            else{
            	alert("Tables available..Please proceed")
		        $("#book-step2").hide();
		        $("#book-step3").fadeIn("2000");                
            }
        });

}
});
$("#proceed-btn3").click(function(){
    BC = $("#selectBCCount").val();
    C = $("#selectCCount").val();
    ad = $("#selectACount").val();
    $("#book-step3").hide();
    $("#book-step4").fadeIn("3000");
});

$("#book-form").submit(function(e){
  e.preventDefault();
  var nm = document.getElementById("c_name").value;
  var em = document.getElementById("c_email").value;
  var ph = document.getElementById("c_phone").value;
  var purpose = $("#purpose").val();
  if(validatePhone(ph)=="ok"){
    if(validateEmail(em)=="ok"){
  $.post("operations.php",
    {
        action : "booking",
        time : time,
        date : dvalue,
        adult : ad,
        child : C,
        bchild : BC,
        name : nm,
        email : em,
        phone : ph,
        purpose : purpose
    },
    function(data,status){
    	if(data){

    	}
    });

    }
    else{
        alert(validateEmail(em));
    }
  }
  else{
    alert(validatePhone(ph));
  }


});



});

function booksubmit(){

}

function validateEmail(e) {
    var str = '';
    var l = e.length;
    if(e.slice(l-3,l)=='com' || e.slice(l-2,l)=='in'){
        if(e.charAt(l-4)=='.' || e.charAt(l-3)=='.'){
            if(e.search("gmail") || e.search("yahoo") || e.search("yahoo")){
                str = "ok";
            }
            else{
                str = "Error in domain";
            }            
        }
        else{
            str = "Must contain dot";
        }
    }
    else{
        str = "Error in com,in";
    }
    return str;
}

function validatePhone(phone){
    var str = '';
    var fl = phone.charAt(0);
    var length = phone.length;
    if(!Number.isNaN(phone)){
    if(fl=='7' || fl=='8' || fl=='9'){
        if(length==10){
            str = "ok";
        }
        else{
            str = "length not match";
        }
    }
    else{
        str = "start error";
    }
}
else{
    str = "Input a number only";
}
    return str;

}

	var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) { delta /= 2; }

        if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
        }

        setTimeout(function() {
        that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
              new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08px solid #fff}";
        document.body.appendChild(css);
    };


    $(window).scroll(function(){
		var scroll = $(window).scrollTop();
        var stp = document.getElementById("scrollTopLink");
        if(scroll>70){
            $("nav").css("background-color","red");
            stp.style.display="block";
        }
        if(scroll<70){
            $("nav").css("background-color","rgba(0,0,0,0.5)");
            stp.style.display="none";
        }

    var scroll = $(window).scrollTop();
    dh = $(document).height();
    wh = $(window).height();
    scrollPercent = (scroll / (dh-wh))*100;
    $("#scrollbar").css('height',scrollPercent + '%');
	});

	function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}	

function sendMail(){
	var email = document.getElementById("News-email").value;
	$.post("MailSender.php",{
		semail : email
	},function(data,status){
		if(data=="send"){
			
		}
	});
}			
</script>
</body>
</html>