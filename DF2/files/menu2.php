<?php 
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
  include("./php/Components.php");
  require_once('./operations.php');


?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
    <!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" /><!-- Bootstrap core CSS -->
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
<link rel="stylesheet" type="text/css" href="../css/style3.css">
<script type="text/javascript" src="../js/script3.js"></script>

<?php 
if(isset($_SESSION['togo'])){

}
if(isset($_SESSION['hd'])){

}
 ?>
<script type="text/javascript">

    function onn(str){
       document.getElementById("mask_"+str).style.display="block";
  }
  function off(str){
      document.getElementById("mask_"+str).style.display="none";
  }


  function showPros(id,str){
       var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
               document.getElementById("resp").innerHTML=this.responseText;
               var c = document.getElementsByClassName("cats");
                var i;
                var cid = id-1;
                for (i = 0; i < c.length; i++) {
                  if(i==cid){
                    c[cid].style.backgroundColor = "red";
                  }
                  else{
                    c[i].style.backgroundColor = "transparent";
                  }
                }

              }
        };
        xmlhttp.open("GET", "operations.php?id="+id+"&name="+str, true);
        xmlhttp.send();
  }
  function slidecat(){
    $("#catsall").slideToggle("slow");
  }

  addEventListener("load",showPros(1,"Chinese"));

  function cadd(name,id,catname,catid){
       $.post("operations.php",{
        cid: id,
        cname : name
       },function(data,status){
          if(data=="Product is already added in the cart..!"){
            alert("Product already added");
            window.location.href='cart2.php';
          }
          else{
          alert("Added to cart");
          location.reload();

          }
       });
   
   function populate(){
       var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              //alert(this.responseText);
              document.getElementById("countC").innerHTML=this.responseText;
            }
        };
        xmlhttp.open("GET", "operations.php?update=2", true);
        xmlhttp.send();    
   }

  }
</script>


</head>
<body style="background-color:black">
  <div id="scrollbar"></div>
<?php include 'navs/nav.php'; ?>
  <div id="outerdiv" style="height: 100% !important;">
    <div id="catdiv">

<img src="../images/finallogo25.png" style="width: 100px;height:100px;position: absolute;left:40px;top: -90px;display: none;" id="catlogo">
      <h4 id="catrig" onclick="slidecat()"><b>CATEGORIES<b></h4>
        
        <div id="catsall">
        <?php 
        $arr = showAllCategories();
        foreach($arr as $c){
          category($c['id'],$c['title']);
        }
        ?>
</div>
      <h4 id="filter"><b>Filters<b></h4>

    </div>
    <div class="allcats" style="margin-left:200px;width: 85%;">
  
  <div class="all">
       <div class='row chi-itemrow' id="resp">
      </div>
      </div>
    <div>
    </div>
    </div>


    <div style="margin-left:200px;width: 85.3%;height: 80vh;padding: 20px;display: none;">
      <div style="display: flex;justify-content: normal">
        
      <img src="https://craftlog.com/m/i/3129837=s1280=h960" style="width:50%;height: 60vh">
      <div style="margin-left: 3%;width: 100%">
        <h4 style="font-weight: bold;">Item name</h4>
      <h5>Category</h5>
      <hr>
      <div style="display: flex;justify-content: all;">
      <h3 style="font-weight: bold;display: inline;">rs 1000</h3>
      <h4 class="ml-3" style="display: inline;"><s>rs 1000</s></h4>
      <h3  class="ml-3" style="font-weight: bold;display: inline;">(30% off)</h3>
      </div>
      <p style="font-weight: normal;">Additional charges applied at checkout</p>
      <button class="btn btn-lg orange">Add to cart</button>
      <br>
      <hr>
      <h5 style="font-weight: bold;text-transform: uppercase;">best Offers</h5>
        <div style="display: flex;justify-content: space-between;">
          <div style="width:49%;padding: 2%;background-color:yellow" class="card">
            <h4 >Offer on first purchase</h4>
            <p>Get 10% off on every food item purchase</p>
            <button class=" btn btn-sm btn-primary">Apply now</button>
          </div>
          <div style="width:49%;padding: 2%;background-color:yellow" class="card">
            <h4 >Offer on first purchase</h4>
            <p>Get 10% off on every food item purchase</p>
            <button class=" btn btn-sm btn-primary">Apply now</button>
          </div>

        </div>
      <hr>
      <h5 style="font-weight: bold;">FOOD ITEM DESCRIPTION</h5>
      <p style="font-weight: normal;">Ex amet sit occaecat ut ut laborum pariatur minim esse sint ut ea do laboris nulla exercitation sed. Commodo dolor elit in minim veniam do nulla amet tempor qui.</p>
      </div>        
      </div>
    </div>

  </div>
  <div id="searchDiv"></div>



<!--Modal: modalCookie-->
<div class="modal fade top" id="modProdAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true" data-backdrop="true">
  <div class="modal-dialog modal-frame modal-top modal-notify modal-info" role="document">
    <!--Content-->
    <div class="modal-content">
      <!--Body-->
      <div class="modal-body">
        <div class="row d-flex justify-content-center align-items-center">

          <p class="pt-3 pr-2">We use cookies to improve your website experience</p>

          <a type="button" class="btn btn-primary">Learn more <i class="fas fa-book ml-1"></i></a>
          <a type="button" class="btn btn-outline-primary waves-effect" data-dismiss="modal">Ok, thanks</a>
        </div>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!--Modal: modalCookie-->
<script type="text/javascript">
    $(window).scroll(function(){
    var scroll = $(window).scrollTop();
    dh = $(document).height();
    wh = $(window).height();
    scrollPercent = (scroll / (dh-wh))*100;
    $("#scrollbar").css('height',scrollPercent + '%');
  });

</script>
</body>
</html>