	 	<!DOCTYPE html>
	 	<html>
	 	<head>
	 		<title></title>
	 		<!--==============================navbar link================================-->
<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/css/mdb.min.css" rel="stylesheet">
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/js/mdb.min.js"></script>
	<style type="text/css">
		body{
			background-color: grey;
		}
		.co{
			width: 97%;
			margin: auto;
			background-color: white;
			margin-top: 1%;
		}
		table tr td{
			padding: 10px;
			font-size: 20px;
		}
		table{
			margin-right: 8%;
		}
	</style>
	 	</head>
	 	<body>
	 		<div class="co card">
	 			<img src="../images/finallogo25.png" style="width:14%;margin-top:2%;margin-left:2%;position:absolute;float:left">
	 		<h1 class="jumbotron text-center" style="background-image:url(photos/r4.jpg)">Your Billing details</h1>
	 		<div style="padding-left:2%;padding-right:2%">
	 		<h2>Your order has been placed successfully!<button class="btn btn-primary" style="float:right">Back to home</button><button style="float:right" class="btn btn-success" onclick="window.print()">Print Invoice</button>
</h2>	
	 		<table class="table table-bordered">
  <thead class="black white-text">
    <tr>
      <th scope="col">Sl no</th>
      <th scope="col">Item description</th>
      <th>Category</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th scope="col">Total</th>

    </tr>
  </thead>
  <tbody>

<?php 
	session_start();
	  require_once('./operations.php');

                $total = 0;
                $sl = 0;
                    if (isset($_SESSION['cart'])){
                        $product_id = array_column($_SESSION['cart'], 'product_id');
                        $count = array_column($_SESSION['cart'],'count');

                            $data = showall(1);
                            foreach($data as $d){
                            foreach ($_SESSION['cart'] as $cart){
                                if ($d['id'] == $cart['product_id']){
                                    // echo($d['name'] . " " .$d['price']. " " .$d['img']. " ".$d['id'] ." " . (int)$cart['count']);
                                	?>
    <tr>
      <td style="font-size:20px"><?php echo ++$sl; ?></td>
      <td style="font-size:20px"><?php echo $d['name']; ?></td>
      <td style="font-size:20px"><?php echo $d['cate']; ?></td>
      <td style="font-size:20px"><?php echo (int)$cart['count']; ?></td>
      <td style="font-size:20px"><?php echo $d['price']; ?></td>
      <td style="font-size:20px"><?php echo (int)$d['price'] * (int)$cart['count']; ?></td>
    </tr>

                                	<?php
                                    $total = $total + (int)$d['price']*(int)$cart['count'];                                     
                                }
                              }
                        }

                    }

?>
  </tbody>
</table>

<div style="float:left">
	<h2><b>Invoice to : </b></h2>
	<p>

	</p>

</div>
<table style="float:right;">
	<tr>
		<td>Sub Total : </td>
		<td style="float:right">Rs <?php echo $total; ?></td>
	</tr>
	<tr>
		<td>Tax</td>
		<td style="float:right">Rs 102</td>
	</tr>
	<tr style="border-top:1px solid black">
		<td><b>Grand total : </b></td>
		<td style="float:right"><b>Rs </b></td>
	</tr>

</table>
</div>
	 		</div>
	 	</body>
	 	</html>
