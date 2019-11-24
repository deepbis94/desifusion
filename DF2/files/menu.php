
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
<link rel="stylesheet" type="text/css" href="../css/style2.css">
<script type="text/javascript" src="../js/script2.js"></script>


 <?php 
session_start();
if(isset($_SESSION['togo'])){
}
if(isset($_SESSION['hd'])){
}
 ?>



</head>
<body class="iop">
<!--Navbar-->
<nav class="navbar navbar-expand-lg" style="background-image: url(https://images.unsplash.com/photo-1566217708747-539477d16e0f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60);background-repeat: no-repeat;background-size: cover;height:80px">

  <!-- Navbar brand -->
  <a class="navbar-brand" href="#">
  	<img src="../images/finallogo25.png" style="width: 100px;height:100px;position: absolute;top:5px;left:40px"></a>

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
        <a class="nav-link" href="http://localhost:81/DF3/files/index.php">Home
        </a>
      </li>
      <li class="nav-item abt">
        <a class="nav-link" href="http://localhost:81/DF3/files/index.php#about">About</a>
      </li>
      <li class="nav-item oo">
        <a class="nav-link" href="http://localhost:81/DF3/files/createorder.php">Order online</a>
      </li>
      <li class="nav-item" id="menu">
        <a class="nav-link" href="http://localhost:81/DF3/files/menu.php">Menu</a>
      </li>
      <li class="nav-item gall">
        <a class="nav-link" href="http://localhost:81/DF3/files/gallery.php">Gallery</a>
      </li>
      <li class="nav-item log">
      	<a class="nav-link" href="http://localhost:81/DF3/files/acc.php">Login/Signup</a>
      </li>
      <li class="nav-item cart" id="cart">
      	<a class="nav-link" data-toggle="modal" data-target="#fullHeightModalRight">Cart<span class="badge badge-pill badge-info ml-2">0</span></a>
      </li>

    </ul>
  </div>
  <!-- Collapsible content -->

</nav>

<!--Modal: modalCookie-->
<!-- <div class="modal fade top" id="modalCookie1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true" data-backdrop="true">
  <div class="modal-dialog modal-frame modal-top modal-notify modal-info" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row d-flex justify-content-center align-items-center">

          <p class="pt-3 pr-2"><span id="pn"></span> Successfully Added to the cart</p>

          <a type="button" class="btn btn-primary" href="cart2.php">View Cart<i class="fas fa-book ml-1"></i></a>
          <a type="button" class="btn btn-outline-primary waves-effect" data-dismiss="modal">Ok, thanks</a>
        </div>
      </div>
    </div>
  </div>
</div>
 --><!--Modal: modalCookie-->

<!--/.Navbar-->


<!-- Modal -->
<!-- <div class="modal" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalLabel">Fusion Cart</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div style="display: flex">
        	<img src="https://i1.wp.com/vegecravings.com/wp-content/uploads/2017/03/veg-hakka-noodles-recipe-with-step-by-step-instructions.jpg?fit=750%2C609&ssl=1" style="width: 30%;margin-right: 4%" >
        	<div>
        		<h4><b>Hakka noodles</b></h4>
        		<h5>Category</h5>
        	</div>
        </div>
        <table>
        	<tr>
        		<th>Food item</th>
        		<th>Price</th>
        		<th>Action</th>
        	</tr>
        	<tr>
        		<td>Product name</td>
        		<td></td>
        	</tr>
        </table>
      </div>
    </div>
  </div>
</div> -->

<!-- Full Height Modal Right -->
<div class="modal fade right" id="fullHeightModalRight" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">

  <!-- Add class .modal-full-height and then add class .modal-right (or other classes from list above) to set a position to the modal -->
  <div class="modal-dialog modal-full-height modal-right" role="document">


    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title w-100" id="myModalLabel">Your cart</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      </div>
      <div class="modal-footer justify-content-center">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- Full Height Modal Right -->

<!--Modal: modalCookie-->
<div class="modal fade top" id="modalCookie1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true" data-backdrop="true">
  <div class="modal-dialog modal-frame modal-top modal-notify modal-info" role="document">
    <!--Content-->
    <div class="modal-content">
      <!--Body-->
      <div class="modal-body">
        <div class="row d-flex justify-content-center align-items-center">

          <p class="pt-3 pr-2"><span id="pn"></span> Successfully Added to the cart</p>

          <a type="button" class="btn btn-primary" href="cart2.php">View Cart<i class="fas fa-book ml-1"></i></a>
          <a type="button" class="btn btn-outline-primary waves-effect" data-dismiss="modal">Ok, thanks</a>
        </div>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!--Modal: modalCookie-->
	<div id="outerdiv">
		<div id="catparent" style="width:100%;height: 8vh;display: flex;flex-direction: row;align-items: center;justify-content: center;margin-top: 1%;">
			<div class=" cats chi panel" id="panchi">
				<h>Chinese</h>
			</div>
			<div class="panel cats lunch">
				<h>Starters</h>
			</div>
			<div class="panel cats dinner">
				<h>Dinner</h>
			</div>
			<div class="panel cats bevs">
				<h>Beverages</h>
			</div>
			<div class="panel cats kids">
				<h>Kids</h>
			</div>			
			<div class="panel cats specs">
				<h>Specials</h>
			</div>
			<div class="panel cats">
				<h>Favorites</h>
			</div>

		</div>
		<div class="grey allcats">
	<div class="allchi allcate">
		<br>
			<div class="row chi-itemrow" style="">
<?php 
	include 'Operations.php';
	$data = showall(1);
	foreach($data as $row){
 ?>				
				<div class="col-lg-3">
					<div class="singlecol">	
						<img src="<?php echo $row['img'] ?>" data-toggle="modal" data-target="#p<?php echo $row['id'] ?>">
						<h5 class="shead"><?php echo $row['name'] ?></h5>
						<h5 style="text-align: center;">
							<strike>&#8377;<?php echo $row['price'] ?></strike> 
							&nbsp;&nbsp;
							<b>&#8377;190</b>
								<button class="btn btn-sm btn-primary" onclick="ins(<?php echo $row['id'] ?>)">
									<i class="fas fa-cart-plus"></i>
								</button>
						</h5>
					</div>
				</div>

    <!-- Central Modal Small -->
<div class="modal fade  pmod" id="p<?php echo $row['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">

  <!-- Change class .modal-sm to change the size of the modal -->
  <div class="modal-dialog modal-lg" role="document">


    <div class="modal-content">
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-7">
            <img src="<?php echo $row['img'] ?>" style="width:100%">
          </div>
          <div class="col-lg-5">
            <h4 style="text-transform:uppercase;font-weight:bold" class="text-center"><?php echo $row['name']; ?></h4>
            <h5 class="text-center card-text"><b>Price : <?php echo $row['price']; ?></b></h5>
            <hr>
            <p><?php echo $row['description'] ?></p>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-elegant btn-md" >Add to cart!</button>
        <button type="button" class="btn btn-danger btn-md" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Central Modal Small -->
			<?php } ?>
			</div>
			</div>
			<div class="alllunch allcate">
			<div class="row lunch-item-row" style="margin: auto;margin-top: -33px">
				<?php 
	$data2 = showall2(2,1);
	foreach($data2 as $row){
				 ?>
				<div class="col-lg-3">
					<div class="singlecol">	
						<img src="<?php echo $row['img'] ?>">
						<h5 class="shead"><?php echo $row['name']; ?></h5>
						<center><span><?php echo $row['sname'] ?></span></center>
						<h5 style="padding-left: 5px;text-align: center;"><strike>&#8377;<?php echo $row['price'] ?></strike> &nbsp;&nbsp;<b>&#8377;190</b>
							<span style="float: right;margin-right: 5px"><button>C</button></span>
						</h5>
					</div>
				</div>
			<?php } ?>
			</div>
			</div>
			<div class="alldinner">
			<h1 class="jumbotron text-center " style="background-image: url(https://images.unsplash.com/photo-1536392706976-e486e2ba97af?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80);background-size: cover;background-repeat: no-repeat;color:white;background-position: center;">
				<span style="background-color:black;padding: 30px;opacity: 0.6">				
				<i class="fas fa-utensils"></i>&nbsp;&nbsp;&nbsp;Dinner
			</span>
			</h1>
			<div class="row dinner-item-row" style="margin: auto;margin-top: -33px">
				<div class="col-lg-4 grey" style="padding: 12px">
					<div style="width: 98%;margin: auto;" class="card">	
						<h1>Imge</h1>
					</div>
				</div>
				<div class="col-lg-4 grey" style="padding: 12px">
					<div style="width: 98%;margin: auto;" class="card">	
						<h1>Imge</h1>
					</div>
				</div>
				<div class="col-lg-4 grey" style="padding: 12px">
					<div style="width: 98%;margin: auto;" class="card">	
						<h1>Imge</h1>
					</div>
				</div>
				<div class="col-lg-4 grey" style="padding: 12px">
					<div style="width: 98%;margin: auto;" class="card">	
						<h1>Imge</h1>
					</div>
				</div>
				<div class="col-lg-4 grey" style="padding: 12px">
					<div style="width: 98%;margin: auto;" class="card">	
						<h1>Imge</h1>
					</div>
				</div>
				<div class="col-lg-4 grey" style="padding: 12px">
					<div style="width: 98%;margin: auto;" class="card">	
						<h1>Imge</h1>
					</div>
				</div>
			</div>	
			</div>
			<div class="allbevs">		
			<h1 class="jumbotron text-center white-text" style="background-image: url(https://images.unsplash.com/photo-1551024709-8f23befc6f87?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=825&q=80);background-size: cover;background-repeat: no-repeat;color:black;background-position: center;" ><br>
				<span style="background-color:black;padding: 30px;opacity: 0.6">				
				<i class="fas fa-utensils"></i>&nbsp;&nbsp;&nbsp;Beverages
			</span>
			</h1>
			<div class="row bev-item-row" style="margin: auto;margin-top: -33px">
				<div class="col-lg-4 grey" style="padding: 12px">
					<div style="width: 98%;margin: auto;" class="card">	
						<h1>Imge</h1>
					</div>
				</div>
				<div class="col-lg-4 grey" style="padding: 12px">
					<div style="width: 98%;margin: auto;" class="card">	
						<h1>Imge</h1>
					</div>
				</div>
				<div class="col-lg-4 grey" style="padding: 12px">
					<div style="width: 98%;margin: auto;" class="card">	
						<h1>Imge</h1>
					</div>
				</div>
				<div class="col-lg-4 grey" style="padding: 12px">
					<div style="width: 98%;margin: auto;" class="card">	
						<h1>Imge</h1>
					</div>
				</div>
				<div class="col-lg-4 grey" style="padding: 12px">
					<div style="width: 98%;margin: auto;" class="card">	
						<h1>Imge</h1>
					</div>
				</div>
				<div class="col-lg-4 grey" style="padding: 12px">
					<div style="width: 98%;margin: auto;" class="card">	
						<h1>Imge</h1>
					</div>
				</div>
			</div>			
		</div>
		<div class="allkids">
			<h1 class="jumbotron text-center white-text" style="background-image: url(https://images.unsplash.com/photo-1455815323463-b27bb4f82953?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80);background-size: cover;background-repeat: no-repeat;color:black;background-position: center;" ><br>
				<span style="background-color:black;padding: 30px;opacity: 0.6">				
				<i class="fas fa-utensils"></i>&nbsp;&nbsp;&nbsp;Kids
			</span>
			</h1>
			<div class="row kid-item-row" style="margin: auto;margin-top: -33px">
				<div class="col-lg-4 grey" style="padding: 12px">
					<div style="width: 98%;margin: auto;" class="card">	
						<h1>Imge</h1>
					</div>
				</div>
				<div class="col-lg-4 grey" style="padding: 12px">
					<div style="width: 98%;margin: auto;" class="card">	
						<h1>Imge</h1>
					</div>
				</div>
				<div class="col-lg-4 grey" style="padding: 12px">
					<div style="width: 98%;margin: auto;" class="card">	
						<h1>Imge</h1>
					</div>
				</div>
				<div class="col-lg-4 grey" style="padding: 12px">
					<div style="width: 98%;margin: auto;" class="card">	
						<h1>Imge</h1>
					</div>
				</div>
				<div class="col-lg-4 grey" style="padding: 12px">
					<div style="width: 98%;margin: auto;" class="card">	
						<h1>Imge</h1>
					</div>
				</div>
				<div class="col-lg-4 grey" style="padding: 12px">
					<div style="width: 98%;margin: auto;" class="card">	
						<h1>Imge</h1>
					</div>
				</div>
			</div>		
			</div>	
			<div class="allspecs">
			<h1 class="jumbotron text-center white-text" style="background-image: url(https://images.unsplash.com/photo-1552914343-05ccdaf123d6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80);background-size: cover;background-repeat: no-repeat;color:black;background-position: center;" ><br>
				<span style="background-color:black;padding: 30px;opacity: 0.6">
				<i class="fas fa-utensils"></i>&nbsp;&nbsp;&nbsp;Specials
				</span>
			</h1>
			<div class="row special-item-row" style="margin: auto;margin-top: -33px">
				<div class="col-lg-4 grey" style="padding: 12px">
					<div style="width: 98%;margin: auto;" class="card">	
						<h1>Imge</h1>
					</div>
				</div>
				<div class="col-lg-4 grey" style="padding: 12px">
					<div style="width: 98%;margin: auto;" class="card">	
						<h1>Imge</h1>
					</div>
				</div>
				<div class="col-lg-4 grey" style="padding: 12px">
					<div style="width: 98%;margin: auto;" class="card">	
						<h1>Imge</h1>
					</div>
				</div>
				<div class="col-lg-4 grey" style="padding: 12px">
					<div style="width: 98%;margin: auto;" class="card">	
						<h1>Imge</h1>
					</div>
				</div>
				<div class="col-lg-4 grey" style="padding: 12px">
					<div style="width: 98%;margin: auto;" class="card">	
						<h1>Imge</h1>
					</div>
				</div>
				<div class="col-lg-4 grey" style="padding: 12px">
					<div style="width: 98%;margin: auto;" class="card">	
						<h1>Imge</h1>
					</div>
				</div>
			</div>			
		</div>
		<div>
			<div class="allload">
			</div>
		</div>
		</div>
 	</div>
 	<div style="width: 100%;height:60vh">
 		
 	</div>
</body>
</html>