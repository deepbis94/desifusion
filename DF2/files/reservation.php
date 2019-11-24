<!DOCTYPE html>
<html>
<head>
	<title></title>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script> 
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <script type="text/javascript">
    $(document).ready(function(){
      $(".hamburger").click(function(){
        $(".hamburger").toggleClass('open');
        if($(".hamburger").hasClass('open')){
          $("#menu").fadeIn(1000);
        }
        else{
          $("#menu").fadeOut(1000);          
        }
      });

    });
  </script>
</head>
<body data-aos="zoom-in" data-aos-duration="4000">
	<style type="text/css">

		body{
			margin: 0;
			padding: 0
		}
		  .line {
    width: 22px;
    height: 2px;
    background: white;
    margin: 5px;
      -webkit-transform: rotate(0deg);
  -moz-transform: rotate(0deg);
  -o-transform: rotate(0deg);
  transform: rotate(0deg);
  -webkit-transition: .25s ease-in-out;
  -moz-transition: .25s ease-in-out;
  -o-transition: .25s ease-in-out;
  transition: .25s ease-in-out;
  }
  .hamburger{
  	position: fixed;
  	left:25px;
    top: 25px;
  -webkit-transform: rotate(0deg);
  -moz-transform: rotate(0deg);
  -o-transform: rotate(0deg);
  transform: rotate(0deg);
  -webkit-transition: .5s ease-in-out;
  -moz-transition: .5s ease-in-out;
  -o-transition: .5s ease-in-out;
  transition: .5s ease-in-out;
  cursor: pointer;
  border-radius: 50px;
  background-color:blue;
  padding: 19px;
z-index: 102;
  }
  .hamburger.open .l1{
      -webkit-transform: rotate(135deg);
  -moz-transform: rotate(135deg);
  -o-transform: rotate(135deg);
  transform: rotate(135deg);
  }
  .hamburger.open .l2{
    opacity: 0
  }
  .hamburger.open .l3{
      -webkit-transform: rotate(-135deg);
  -moz-transform: rotate(-135deg);
  -o-transform: rotate(-135deg);
  transform: rotate(-135deg);
  }
  #menu li{
    list-style: none;
    padding: 14px 0px;
  }
  #menu li a{
    text-decoration: none;
    color: white;
    font-size: 28px;
    font-weight: bold;
  }
  #menu li a:hover{
    color:grey;
  }
  @media only screen and (max-width: 768px){
    #vid{
      width: 100%;
      height: 50vh !important;
    } 
    #logo{
      width: 88px !important;
      height: 120px !important;
    }
  }
  #logo{
    width: 155px;height: 165px;top: 0;z-index: 99;position: absolute;left: 44%
  }
  #vid{
    top: 0;bottom: 0;left: 0;right: 0;height: 100vh;object-fit: cover;overflow: hidden;z-index: 0;width: 100%
  }
  #wrapper{
    position: relative;
  }
  #menu{
    position: fixed;width: 100%;background-color: black;height: 100vh;display: none;top:0;z-index: 101;color: white
  }
  #menuwrap{
    padding: 40px 20%
  }
	</style>
   
    <div>
    <div id="wrapper">
      <img src="https://stmed.net/sites/default/files/restaurant-wallpapers-28840-9685042.jpg" style="height: 100vh;width: 100%">

              <img src="../images/finallogo25.png" id="logo">
         <div class="hamburger">
        <div class="line l1"></div>
        <div class="line l2"></div>
        <div class="line l3"></div>
      </div> 
          <div id="menu"> 
          <div id="menuwrap">
          <li><a href="">HOME</a></li>
          <li><a href="">ABOUT US</a></li>
          <li><a href="">GET IN TOUCH  </a></li>
          <li><a href="">MENU</a></li>  
          <li><a href="">GALLERY</a></li>
          <li><a href="createorder.php">ORDER ONLINE</a></li>   
          <li><a href="">BOOK A TABLE</a></li>               
          <li><a href="">DONATIONS</a></li>
          <li><a href="">EVENTS</a></li>
          </div>
          </div>

      </div>

         
</div>
<div style="margin: -2% 0%;display: flex;justify-content: flex-start;background-image: url(http://www.collab2.co.za/wp-content/uploads/2017/06/contact-us-background.jpg);background-repeat: no-repeat;background-size: cover;background-attachment: fixed;height: 70vh;padding: 2% 4%">
  <div style="display: flex;justify-content: space-around;">
    <img src="https://restorepublichouse.com/sites/default/files/styles/original_size/public/2019-06/plate.png?itok=IUTyQn9l" style="width: 50%;height: 80%;right: 10px">
    <h1>About section</h1>
  </div>
</div>   

  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
              
</body>


</html>