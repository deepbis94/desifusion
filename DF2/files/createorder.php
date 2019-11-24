<?php session_start(); ?>

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
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.9/js/mdb.min.js"></script>
<link rel="stylesheet" type="text/css" href="../css/style2.css">
<link href="https://fonts.googleapis.com/css?family=ZCOOL+XiaoWei&display=swap" rel="stylesheet">
<style type="text/css">
	.card:hover{
		opacity: 0.7;
		cursor: pointer;
	}
</style>
<script type="text/javascript">
	$(document).ready(function(){
		$("#tg-order").click(function(){
			$.post("../operations/sessionops.php",{
				togo : "todo request"
			},function(data,status){
				window.location.href='menu2.php';
			});
		});
		$("#hd-order").click(function(){
			$.post("../operations/sessionops.php",{
				hd : "hd request"
			},function(data,status){
				window.location.href='menu2.php';
			});			
		});
	});
</script>
</head>
<body>
	
	<?php 
	//This will start an order afresh
	session_unset();
	session_destroy();
	 ?>

<?php include 'navs/bootnav.php'; ?>
	<div style="height: 100vh;width: 100%;background-color: grey" class="container-fluid">		
		<div style="display: flex;flex-direction: row;padding-top:20px" class="container">
			<img src="https://images.unsplash.com/photo-1506079334139-58105ce48c5b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80" style="height: 620px;margin-right: -80px">
			<img src="https://images.unsplash.com/photo-1570526427067-b456f83a4de4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80" style="width: 60%;margin-left: 20px">
			<div style="width: 100%">
				<br>
				<h1 style="text-align: center;color: white;font-family: sans-serif;">ORDER ONLINE</h1>
				<br>
				<br>
				<div class="card" style="margin-left: 14px;padding: 0px;;border-radius: 0px 0px 40px 0px" id="tg-order">
					<h1 style="background-color: red;padding: 20px;font-weight: bold;">TO-GO Order</h1>
					<p style="padding: 20px">Order food while present in restaurant</p>
				</div>
				<br>
				<div class="card" style="margin-left: 14px;padding: 0px;border-radius: 0px 0px 40px 0px" id="hd-order">
					<h1 style="background-color: green;padding: 20px;font-weight: bold;">Home delivery order</h1>
					<p style="padding: 20px">Order food from anywhere</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>