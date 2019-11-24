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
              echo "<script>window.location = 'cart2.php'</script>";
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
	<link rel="stylesheet" type="text/css" href="../css/style3.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript">
		
		function funalert(){
			$("#loginForm").css("opacity","1");
			$("#loginForm").css("z-index","999");
			document.getElementById("cart-body").style.filter="brightness(10%)";
		}
		function funalertcls(){
			$("#loginForm").css("opacity","0");
			$("#loginForm").css("z-index","-15");
			document.getElementById("cart-body").style.filter="brightness(100%)";
		}
		function applyScratch(){
			var price = document.getElementById("DTotal").innerHTML;
			$("#loginForm").css("opacity","0");
			$("#loginForm").css("z-index","-15");
			document.getElementById("cart-body").style.filter="brightness(100%)";	
			$.post("operations.php",{
				'scratch' : 'RequestScratch',
				pvalue : price
			},function(data,status){
				alert("Your discount has been added")
				var jObj = JSON.parse(data);
				document.getElementById("DTotal").innerHTML=Math.floor(jObj['newdisc']);
			});
		}

		function funUp(num,id){
			$('#num_'+id).html(parseInt($('#num_'+id).html())+1);
			$.ajax({
				url : "operations.php",
				type : "POST",
				data : {
					num2 : parseInt($("#num_"+id).html()),
					aid2 : id
				},
				success : function (data){
					location.reload();
				},
				error : function (error){
					alert(error);
				}
			});
		}
		function funDown(num,id) {
			$('#num_'+id).html(parseInt($('#num_'+id).html())-1)
			if(parseInt($("#num_"+id).html())<1){
				alert("cannot be less than 1");
			$('#num_'+id).html('1');
			}
			$.ajax({
				url : "operations.php",
				type : "POST",
				data : {
					num2 : parseInt($("#num_"+id).html()),
					aid2 : id
				},
				success : function (data){
					location.reload();
				},
				error : function (error){
					alert(error);
				}
			});

		}


	//Function to manipulate the dot color
	function showStep(now,dest){
		$("#c"+now).hide();
		$("#c"+dest).show();
		$(".d"+now).removeClass("focused");
		$(".d"+dest).addClass("focused");
	}

	//Function to manipulate the dot color
	function showStep2(sth1,sth2,dest){
		$("#c"+sth1+",#c"+sth2).hide();
		$("#c"+dest).show();
		$(".d"+sth1+",#d"+sth2).removeClass("focused");
		$(".d"+dest).addClass("focused");
	}


	function applyTextCoupon(price){
		var code = document.getElementById("coupon-code").value;
		var err_code = document.getElementById("err_code");
		if(code.length==6){
			err_code.style.display="none";
		$.post("operations.php",{
			'code' : code,
			'price' : price
		},function(data,status){
			if(data!='No coupon'){
				var jObj = JSON.parse(data);
				document.getElementById("coupDisc").innerHTML=jObj['disc'];
				document.getElementById("DTotal").innerHTML=Math.floor(jObj['newdisc']);
				alert("Your discount has been added")
			}
			else{
			err_code.style.display="block";
			err_code.innerHTML="Please input a valid coupon code";			
			}
		});
		}
		else{
			err_code.style.display="block";
			err_code.innerHTML="Please input a six digit coupon code";			
		}
	}

	</script>
	<style type="text/css">
		body{
			background: #c31432;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #240b36, #c31432);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #240b36, #c31432); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

		}
	</style>
</head>

<body>
 <div id="cart-body">
	<div id="cart-wrapper">
		<div id="cart-content">
			<div id="banner">
			<img src="../images/logo1.png" id="cart-logo">
			<h1>Your shopping cart</h1>
			<button id="addbtn" onclick="window.location.href='menu3.php'">Back to shop</button>
			</div>
			<div id="cart-item-wrapper">
    <?php 

                $total = 0;
                $totalsp = 0;
                $totalcp = 0;
                $sp=0;
                    if (isset($_SESSION['cart'])){

                    	$dis = showDiscounts();

                        $product_id = array_column($_SESSION['cart'], 'product_id');
                        $count = array_column($_SESSION['cart'],'count');

                            $data = showallItems();
                            foreach($data as $d){
                            foreach ($_SESSION['cart'] as $cart){
                                if ($d['id'] == $cart['product_id']){

                                	$sp = calcDiscount($d['price'],$dis);

                                    cartElement2($d['name'],$d['price'],$d['img'],$d['id'],(int)$cart['count'],$d['cate'],$sp);
                                    $total = $total + (int)$d['price']*(int)$cart['count'];                                     
                                $totalsp = (int)$totalsp + calcDiscount($d['price'],$dis);
                                }
                              }
                        }

                    }
                    ?>

			</div>
		</div>
		<div id="cart-nav">
			<span class="dots d1 focused" onclick="showStep2('2','3','1')"></span>
			<span class="dots d2"  onclick="showStep2('1','3','2')"></span>
			<span class="dots d3" onclick="showStep2('1','2','3')"></span>

		</div>
		<div id="cart-checkout">
            <div id="c1">
                        <?php
                            if (isset($_SESSION['cart'])){
                                $count = 0;
                                foreach($_SESSION['cart'] as $cart){
                                  $count = $count + (int)$cart['count'];
                                }
                                ?>
			<div>
			<h2 class="cart-title">cart details</h2>
			<br>
		<div id="price-panel">
			
			<div id="price-panel-labels">
				<h3>Total Items</h3>
				<h3>Total</h3>
				<h3>Discount</h3>
				<h3>Total savings</h3>
				<h4>Coupon Disc.</h4>
				<h3>Subtotal</h3>

			</div>
			<div id="price-panel-values">
				<h3><?php echo $count;?></h3>
				<h3>&#8377; <?php echo $total; ?></h3>
				<h3><?php echo $dis; ?> %</h3>
				<h3>&#8377; <?php echo $total - calcDiscount($total,$dis); ?></h3>
				<h4>None</h4>
				<h3>&#8377; <?php echo calcDiscount($total,$dis); ?></h3>
			</div>
		</div>



				</div>
				<div>
				<h2 class="checkouth hlink" onclick="showStep('1','2')">Proceed</h2>
				</div>
			
		<?php } ?>
	</div>
		<div id="c2"  style="display: none;">
			<h2 class="cart-title">Apply coupon</h2>
			
			<h4>Enter coupon code here</h4>
			<input type="text" maxlength="6" name="" placeholder="ABCDEFG" class="cart-coupon" id="coupon-code">
			<span style="color:red;font-weight: bold;display: none" id="err_code">Invalid code</span>
			<br>
			<button style="" id="apply-coupon-code" onclick="applyTextCoupon('<?php echo calcDiscount($total,$dis); ?>')">Apply</button>
			<br>
			<button onclick="funalert()">Scratch coupon here</button>
			<br>
			<br>
					<div id="coupon-panel">
			          <div id="coupon-panel-labels">
			            <h3>Cart Total</h3>		
			            <h4>Coupon disc.</h4>
			            <hr>
			            <h3>Total</h3>	        	
			          </div>
			          <div id="coupon-panel-values">
			            <h3>&#8377; <?php echo calcDiscount($total,$dis); ?></h3>
			            <h4 id="coupDisc">0</h4>
			            <hr>
			            <h3>&#8377; <span id="DTotal"><?php echo calcDiscount($total,$dis); ?></span></h3>
			          </div>
					
					</div>
			<br>
			<button style="width: 100%;background-color: red;border:none" onclick="showStep('2','3')">Checkout</button>
		</div>
		<!-- End of step 2 -->
		<!-- Step 3 Starts -->
		<div id="c3" style="text-align: center;display:none">
			<h2 class="cart-title">Your details</h2>
			<hr>
			<h3>Provide details to checkout</h3>
			<div class="btn-holder">
				<button>Login</button>
				<button>Register</button>
			</div><br><br>
			<h4>Fast Checkout</h4>
			<button id="fc">Click here</button>
		</div>
		<!-- Step 3 Ends -->

	</div>
		</div>
</div>
	<!-- the form to be viewed as dialog-->
<div id="loginForm">
		<h1 style="text-align: center;background-color: grey;font-family: 'Montserrat'">Scratch Code here</h1>
		<div id="scratch">
		</div>
		<div style="display: flex;justify-content: center;align-items: center;background-color: grey;padding: 7px 0px">
		<button id="scratch-confirm" onclick="applyScratch()">Confirm</button>
		<button id="close-mdl" onclick="funalertcls()">Close</button>
		</div>
</div>

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

<script src="../js/wScratchPad.min.js"></script>	

<script type="text/javascript">
$('#scratch').wScratchPad({
  size        : 70,       
  bg          : '#cacaca',
  realtime : false,  
  fg          : '../images/scratch.jpg',  
  scratchUp : function(e,percent){
  	if(percent>50){
  		$('#scratch').wScratchPad('clear');
  	}
  },
  scratchDown:function(e,percent){
  	if(percent>50){
  		$('#scratch').wScratchPad('clear');
  	}
  },
  scratchMove : function(e,percent){
  	if(percent>50){
  		$('#scratch').wScratchPad('clear');
  	}
  }

});
</script>
</body>
</html>
