<?php 
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

    if (isset($_POST['remove'])){
  if ($_GET['act'] == 'remove'){
      foreach ($_SESSION['cart'] as $key => $value){
          if($value["product_id"] == $_GET['id']){
              unset($_SESSION['cart'][$key]);
              echo "<script>window.location = 'cart.php'</script>";
          }
      }
  }
}

  require_once("./php/Components.php");
  require_once('./operations.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
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
<style type="text/css">
  .navbar-brand {
      color: white;
  padding: 0px; /* firefox bug fix */
}
.navbar-brand>img {
  margin-top: -26px;
  height: 100px;
  width: 130px;
  position: absolute;
}
nav ul li{
  padding: 0px 0px 0px 15px;
}
nav ul li a{
  font-size: 20px;
}
nav ul li a:hover{
  opacity: 0.7;
}
.hovim:hover{
  opacity: 0.7;
  cursor: pointer;
}
.bt{
  border: none;
  font-weight: bold;
  background-color: green;
  padding: 10px;
  color: white;
}
.number-input input[type="number"] {
  -webkit-appearance: textfield;
  -moz-appearance: textfield;
  appearance: textfield;
}

.number-input input[type=number]::-webkit-inner-spin-button,
.number-input input[type=number]::-webkit-outer-spin-button {
  -webkit-appearance: none;
}

.number-input {
  margin-bottom: 3rem;
}

.number-input button {
  -webkit-appearance: none;
  background-color: transparent;
  border: none;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  margin: 0;
  position: relative;
}

.number-input button:before,
.number-input button:after {
  display: inline-block;
  position: absolute;
  content: '';
  height: 2px;
  transform: translate(-50%, -50%);
}

.number-input button.plus:after {
  transform: translate(-50%, -50%) rotate(90deg);
}

.number-input input[type=number] {
  text-align: center;

}

.number-input.number-input {
  border: 1px solid #ced4da;
  width: 10rem;
  border-radius: .25rem;
}

.number-input.number-input button {
  width: 2.6rem;
  height: .9rem;
}

.number-input.number-input button.minus {
  padding-left: 10px;

}

.number-input.number-input button:before,
.number-input.number-input button:after {
  width: .7rem;
  background-color: #495057;
}

.number-input.number-input input[type=number] {
  max-width: 4rem;
  padding: .5rem;
  border: 1px solid #ced4da;
  border-width: 0 1px;
  font-size: 1rem;
  height: 2.6rem;
  color: #495057;
}

@media not all and (min-resolution:.001dpcm) {
  @supports (-webkit-appearance: none) and (stroke-color:transparent) {

    .number-input.def-number-input.safari_only button:before,
    .number-input.def-number-input.safari_only button:after {
      margin-top: -.3rem;
    }
  }
}
</style>
<script type="text/javascript">
  function fundown(s,id){
    s.stepDown();
    var num=Number(s.value);
    if(num<1){
      alert("number cannot be less than 1. Press X to delete");
      num = 1;
    }
    $.post("operations.php",{
      num : num,
      aid : id
    },function(data,status){
      if(!data){
        location.reload();
      }

    });
  }
  function funup(s,id){
    if(s==0){
    }
    s.stepUp();
    var num=Number(s.value);
    $.post("operations.php",{
      num : num,
      aid : id
    },function(data,status){
      if(!data){
        location.reload();
      }
    });
  }
  // function fundown(s,id) {
  //   s.stepDown();
  //   var pq = Number(s.value);
  //   $.post("cartadd.php",{
  //     sid : id,
  //     q : pq
  //   },function(data,status){
  //     if(data){
  //       location.reload();
  //     }
  //   });

  // }
  function del(id) {
    $.post("cartadd.php",{
      did : id
    },function(data,status){
      if(data){
        location.reload();
      }
    });
  }
  // function funup(s,id) {
  //   s.stepUp();
  //   var pq = Number(s.value);
  //   $.post("cartadd.php",{
  //     sid : id,
  //     q : pq
  //   },function(data,status){
  //     if(data){
  //       location.reload();
  //     }
  //   });
  // }
</script>
</head>
<body>
                        <?php
                         $count = 0;
                               
                            if (isset($_SESSION['cart'])){
                                foreach($_SESSION['cart'] as $cart){
                                  $count = $count + (int)$cart['count'];
                                }
                              }
                                ?>
  <div class="row" style="width:80%;margin:auto;margin-top: 4%">
    <div class="col-lg-8">
     <div style="display: flex;justify-content: space-between;"> 
     <h3 style="padding:10px;display: inline">My Cart (<b><?php echo $count; ?> Items</b>)
    </h3> 
    <a class="btn btn-elegant" href="menu2.php">Add item</a>
    </div>


    <?php 

                $total = 0;
                    if (isset($_SESSION['cart'])){
                        $product_id = array_column($_SESSION['cart'], 'product_id');
                        $count = array_column($_SESSION['cart'],'count');

                            $data = showall(1);
                            foreach($data as $d){
                            foreach ($_SESSION['cart'] as $cart){
                                if ($d['id'] == $cart['product_id']){
                                    cartElement($d['name'],$d['price'],$d['img'],$d['id'],(int)$cart['count'],$d['cate']);
                                    $total = $total + (int)$d['price']*(int)$cart['count'];                                     
                                }
                              }
                        }

                    }
                    else{
                      ?>
  <br>
<h3 class="text-center">Cart is empty.. Please add an item</h3>

                      <?php
                    }
if(isset($_SESSION['cart'])){                    
$count  = count($_SESSION['cart']);
if($count==0){
  ?>
  <br>
<h3 class="text-center">Cart is empty.. Please add an item</h3>
  <?php
}
}
     ?>

    </div>

    <div class="col-lg-4 card">
      <h5 style="padding:10px;border-bottom:1px solid black;text-transform: uppercase;font-weight: bold;">APPLY COUPONS</h5>
      <hr>
      <h5 style="padding:10px;border-bottom:1px solid black;text-transform: uppercase;font-weight: bold;">Price details</h5>
      <div class="row">
        <div class="col-lg-8">
          <h5>Bag total</h5>
          <h5>Discount Applied</h5>
          <br>
          <h5><b>Total</b></h5>
        </div>
        <div class="col-lg-4">
          <h5>&#8377;<?php echo $total; ?></h5>
          <h5>20%</h5>
          <br/>
          <h5>&#8377;<?php echo calcDiscount($total,20); ?></h5>
        </div>
      </div>
      <a class="btn btn-primary" style="margin-top:10%" href="checkout.php">Checkout</a>
    </div>
  </div>

</body>
</html>
