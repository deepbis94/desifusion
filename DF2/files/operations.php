<?php 

	if(isset($_POST['inid'])){
		return insertCartdata($_POST['inid']);
	}


	// str = 1 -> Listing of chinese items
	// str = 1 -> Listing of chinese items
	// str = 1 -> Listing of chinese items
	// str = 1 -> Listing of chinese items
	// str = 1 -> Listing of chinese items

		/* Showing all items of supplied category*/
		 function showall($str){
			include 'db.php';
			$arr = [];
			$sql = "select p.name as name,p.description as description,p.price as price,p.img as img,p.id as id,c.title as cate,p.rating as rating from products as p inner join categories as c on p.cate_id = c.id where p.cate_id=$str";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				while($row = $result->fetch_array()){
					$s = [
					'name'=>$row['name'],
					'description'=>$row['description'],
					'price'=>$row['price'],
					'img'=>$row['img'],
					'cate'=>$row['cate'],
					'id'=>$row['id'],
					'rating'=>$row['rating']
					];
				array_push($arr, $s);
			}
			return $arr;

			}
		else 
			{
				return '';
			}
	$conn->close();			
	}

		/* Showing all items available in the db*/
		 function showallItems(){
			include 'db.php';
			$arr = [];
			$sql = "select p.name as name,p.description as description,p.price as price,p.img as img,p.id as id,c.title as cate,p.rating as rating from products as p inner join categories as c on p.cate_id = c.id";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				while($row = $result->fetch_array()){
					$s = [
					'name'=>$row['name'],
					'description'=>$row['description'],
					'price'=>$row['price'],
					'img'=>$row['img'],
					'cate'=>$row['cate'],
					'id'=>$row['id'],
					'rating'=>$row['rating']
					];
				array_push($arr, $s);
			}
			return $arr;

			}
		else 
			{
				return '';
			}
	$conn->close();			
	}


	function showSingle($cate,$id){
			include 'db.php';
			$arr = [];
			$sql = "select * from products where cate_id=$cate and id=$id";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				while($row = $result->fetch_array()){
					$s = [
					'name'=>$row['name'],
					'description'=>$row['description'],
					'price'=>$row['price'],
					'img'=>$row['img']
					];
				array_push($arr, $s);
			}
			return $arr;

			}
		else 
			{
				return '';
			}
	$conn->close();								
	}

		 function showall2($str,$str2){
			include 'db.php';
			$arr = [];
			$sql = "select p.name as name,p.description as description,p.price as price,p.img as img,s.name as sname,p.id as id from products as p inner join subcategories as s on p.sub_cate_id=s.id where p.sub_cate_id=$str2 and p.cate_id=$str";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				while($row = $result->fetch_array()){
					$s = [
					'name'=>$row['name'],
					'description'=>$row['description'],
					'price'=>$row['price'],
					'img'=>$row['img'],
					'sname'=>$row['sname'],
					'id' => $row['id']
					];
				array_push($arr, $s);
			}
			return $arr;

			}
		else 
			{
				return '';
			}
	$conn->close();			
	}

	function showAllCategories(){
			include 'db.php';
			$arr = [];
			$sql = "select * from categories";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				while($row = $result->fetch_array()){
					$s = [
					'title'=>$row['title'],
					'id' => $row['id']
					];
				array_push($arr, $s);
			}
			return $arr;

			}
		else 
			{
				return '';
			}
	$conn->close();			
	}

	function catArray(){
	include 'db.php';
			$arr = [];
			$sql = "select * from categories";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				while($row = $result->fetch_array()){
					$s = [
					'title'=>$row['title']
					];
				array_push($arr, $s);
			}
			return json_encode($arr);

			}
		else 
			{
				return '';
			}
	$conn->close();			

	}
	function insertCartdata($id){
		$ip = $_SERVER['REMOTE_ADDR'];
		include 'db.php';
		$stmt = $conn->prepare("insert into cart(ip,pid) values(?,?)");
		$stmt->bind_param('si',$ip,$id);
		$ip = $ip;
		$id = $id;
		$stmt->execute();
		if($stmt->affected_rows === 0) exit('No rows updated');
		else echo "inserted";

		$stmt->close();
		$conn->close();
	}

	//from menu.php add
	if(isset($_POST['aid'])){
		$aid = $_POST['aid'];
		$num = (int)$_POST['num'];

		session_start();
		foreach($_SESSION['cart'] as &$cart){
			if($cart['product_id'] == $aid){
				$cart['count'] = $num;
			}
		}
	}

	//from menu.php add
	if(isset($_POST['aid2'])){
		$aid = $_POST['aid2'];
		$num = (int)$_POST['num2'];
		session_start();
		foreach($_SESSION['cart'] as &$cart){
			if($cart['product_id'] == $aid){
				$cart['count'] = $num;
			}
		}
	}


	function calcDiscount($actual_price,$discount){
		$selling_price = $actual_price - ($actual_price * ($discount / 100));
		return $selling_price;
	}
	function showDiscounts(){
		include 'db.php';
			$dis = 0;
			$sql = "select * from discounts where name='All'";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()){
					$dis = $row['discount'];
			}
			}
			return $dis;		
	}

function component($productname,$productprice,$productid,$productimage,$catname,$catid,$rating){
		$element = "
		<div class=\"col-lg-3\" >
		<input type='hidden' name='pname' value='$productname'>
		<input type='hidden' name='pid' value='$productid'>

          <div id='body_$productid' class=\"itembody\" onmouseover='onn($productid);' onmouseout='off($productid)'> 
            <div id=\"mask_$productid\" class=\"imask\">
              <div class=\"maskimg\">
                <center>
                  <button id='btn_$productid' class=\"btncart\" name='cadd' onclick=\"cadd('$productname',$productid,'$catname',$catid)\">C</button>
                </center>
             </div>

            </div>
            <img src=\"$productimage\">
            <h5 class=\"itit\">$productname</h5>
            <h5 style=\"text-align: center;color: white\"><small><strike>&#8377;250</strike></small> &nbsp;&nbsp;<b>&#8377;$productprice</b>
            </h5>
          </div>



  
        </div>

";
echo $element;
}

	if(isset($_GET['id'])){

          $data = showall($_GET['id']);

       echo 
       "<div class='col-lg-12' style='height:10vh;width:100%;background-image:url(https://images.unsplash.com/photo-1568438350562-2cae6d394ad0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80);background-repeat:no-repeat;background-size:cover;display:flex;flex-direction:column;align-items:center'>
		<div style='width:20%;background-color:black;margin:auto;text-align:center;opacity:0.5;height:50px;position:relative'>
			<h1 style='position:absolute;'>Chinese</h1>
		</div>
       </div>
       "
       ;

          foreach($data as $d){
       component($d['name'],$d['price'],$d['id'],$d['img'],$_GET['name'],$_GET['id'],$d['rating']); 
       }
       echo 
       "<div class='col-lg-12 pagin' style='color:white;display:flex;justify-content:center;align-items:center'>
			<ul>
			  <li><a id='prv'>Prev</a></li>
			  <li class='pageNumber act'><a href='#'>1</a></li>
			  <li class='pageNumber'><a href='#'>2</a></li>
			  <li class='pageNumber'><a href='#'>3</a></li>
			  <li class='pageNumber'><a href='#'>4</a></li>
			  <li><a id='nxt'>Next</a></li>
			</ul>
       </div>
       "
       ;
	}


	//Adding products to the cart
	if(isset($_POST['cid'])){
		 addToCart($_POST['cid'],$_POST['cname']);
	}


function addToCart($id,$name){
	session_start();
    /// print_r($_POST['product_id']);
    //If cart variable is present in session
    if(isset($_SESSION['cart'])){


//stores values of single column (product_id) of cart session into array item_array_id 
        $item_array_id = array_column($_SESSION['cart'], "product_id");


//in_array searches item_array_id inside
        if(in_array($id, $item_array_id)){
            echo "Product is already added in the cart..!";
        }
        else
        {
            $count = count($_SESSION['cart']);
            $item_array = array(
                'product_id' => $id,
                'count'=>1
            );

            $_SESSION['cart'][$count] = $item_array;
            echo "Added";
        }

    }
    else{
        $item_array = array(
                'product_id' => $id,
                'count'=>1
        );
        // Create new session variable
        $_SESSION['cart'][0] = $item_array;
      }
  }
function showSettings(){
			include 'dbconfig.php';
			$stmt = $conn->prepare("select g_count,date_range,time,Purpose,max_table_bookings from reservation_settings");
    $arr = [];
    if($stmt->execute()){
    	while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
					$arr = [
						'g_count' => $row['g_count'],
						'date_range' => $row['date_range'],
						'time' => $row['time'],
						'purpose'=>$row['Purpose'],
						'max_bookings'=>$row['max_table_bookings']
					];
				}
    		}
			return $arr;
	}

	if(isset($_GET['update'])){
		session_start();
    if (isset($_SESSION['cart'])){
      $count = 0;
      foreach($_SESSION['cart'] as $cart){
      $count = $count + (int)$cart['count'];
     }
	}
     echo $count;
}

if(isset($_POST['ctime'])){
			include 'dbconfig.php';
			$time = $_POST['ctime'];
			$date = $_POST['cdvalue'];

			$stmt = $conn->prepare("select * from bookings where date = ? and time = ?");
			if($stmt->execute(array($_POST['cdvalue'],$_POST['ctime']))){

				if($stmt->rowCount()>0){
					$count = $stmt->rowCount();
				$stmt2 = $conn->prepare("select max_table_bookings from reservation_settings");
				if($stmt2->execute()){
					while($row = $stmt2->fetch(PDO::FETCH_ASSOC)){
						if($row['max_table_bookings']==$count){
							echo "booked";
						}
						else{
							echo $row['max_table_bookings']-$count;
						}
					}
				}
				}
			}

}
if(isset($_POST['action'])){
	include 'dbconfig.php';
	$time = $_POST['time'];
	$date = $_POST['date'];
	$adult = $_POST['adult'];
	$child = $_POST['child'];
	$bc = $_POST['bchild'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$purpose = $_POST['purpose'];
	$passarr = [$_POST['adult'],$_POST['child'],$_POST['bchild'],$_POST['date'],$_POST['time'],$_POST['name'],$_POST['email'],$_POST['phone'],$_POST['purpose']];
	$stmt = $conn->prepare("insert into bookings(adult_count, child_count, bc_count, date, time, name, email, phone, purpose) VALUES (?,?,?,?,?,?,?,?,?)");
	if($stmt->execute($passarr)){
		if($stmt->rowCount()==1){
			echo "booked";
		}
	}
}

function getCats(){
	include 'db.php';
			$arr = [];
			$sql = "select * from categories";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				while($row = $result->fetch_array()){
					$s = [
					'title'=>$row['title'],
					'id'=>$row['id'],
					'header_img'=>$row['header_img']
					];
				array_push($arr, $s);
			}
			return $arr;

			}
		else 
			{
				return '';
			}
	$conn->close();			

}

function getProducts($id){
	include 'db.php';
			$arr = [];
			$sql = "";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				while($row = $result->fetch_array()){
					$s = [
					'name'=>$row['name']					];
				array_push($arr, $s);
			}
			return $arr;

			}
		else 
			{
				return '';
			}
	$conn->close();			

}


// Function to show all Products related to the category ID provided====menu3.php
		 function showProduct($id){
			include 'dbconfig.php';
			 $stmt = $conn->prepare("select p.name as name,p.description as description,p.price as price,p.img as img,p.id as id,c.title as cate,p.rating as rating,c.header_img as cimg,c.id as cid from products as p inner join categories as c on p.cate_id = c.id where p.cate_id=? limit 0,6");
    $arr = [];
    if($stmt->execute(array($id))){
    	while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
					$s = [
					'name'=>$row['name'],
					'description'=>$row['description'],
					'price'=>$row['price'],
					'img'=>$row['img'],
					'cate'=>$row['cate'],
					'id'=>$row['id'],
					'rating'=>$row['rating'],
					'cimg' => $row['cimg'],
					'cid'=>$row['cid']
					];
					array_push($arr, $s);
				}
				return $arr;
    		}
    else{
    	return '';
    }			
	}


if(isset($_POST['Paction'])){
	include 'php/Components.php';
	if($_POST['index']<3){
	$data = Paginate($_POST['index'],$_POST['Paction'],$_POST['id']);
	foreach($data as $d){
		echo ProductTemplate($_POST['ctit'],$_POST['cimg'],$d['name'],$d['img'],$d['price'],$d['id'],$_POST['id']);
	}
		echo "
	<div class='col-lg-12 pagin' style='color:white;display:flex;justify-content:center;align-items:center'>
			<ul>
			  <li><a id='prv' onclick=\"prvclick()\">Prev</a>
			  </li>
			  <li class='pageNumber act'><a>1</a></li>
			  <li class='pageNumber'><a>2</a></li>
			  <li class='pageNumber'><a>3</a></li>
			  <li class='pageNumber'><a>4</a></li>
			  <li><a id='nxt' onclick=\"nxtclick()\">Next</a></li>
			</ul>
       </div>
       ";
}
else{
	echo "No data";
}
}

/*Pagination code*/
function Paginate($current,$action,$cat){
	include 'dbconfig.php';

	$stmt = $conn->prepare("select * from products where cate_id=?");
    $stmt->execute(array($cat));
    $num = $stmt->rowCount(); //Total number of records
    $stmt2 = $conn->prepare("select * from web_settings");
    if($stmt2->execute()){
    	while($row = $stmt2->fetch(PDO::FETCH_ASSOC)){
    		$offset = $row['show_limit'];
    	}
    }

$start=0;
	if($action=="Next"){
		$position = ($current * $offset) - $offset;
	}

	if($action=="Prev"){
		$position = ($current * $offset) - $offset;
	}

 if($current!=3){
 $stmt3 = $conn->prepare("select p.name as name,p.description as description,p.price as price,p.img as img,p.id as id,c.title as cate,p.rating as rating,c.header_img as cimg,c.id as cid from products as p inner join categories as c on p.cate_id = c.id where p.cate_id=? limit $position,$offset");
     $arr = [];
    if($stmt3->execute(array($cat))){
    	while($row=$stmt3->fetch(PDO::FETCH_ASSOC)){
					$s = [
					'name'=>$row['name'],
					'description'=>$row['description'],
					'price'=>$row['price'],
					'img'=>$row['img'],
					'cate'=>$row['cate'],
					'id'=>$row['id'],
					'rating'=>$row['rating'],
					'cimg' => $row['cimg'],
					'cid'=>$row['cid']
					];
					array_push($arr, $s);
				}
				return $arr;
    		}
    		else{
    			return '';
    		}
    	}
    else{
    	return '';
    }			

}

/*Pagination code end*/

if(isset($_GET['showid'])){
	include 'php/Components.php';
	$product_array = showProduct($_GET['showid']);
	$cid = $_GET['showid'];
	$cimg = $_GET['cimg'];
	$ctit = $_GET['ctit'];
	echo "
    <div class=\"allchi\">
      <h1 class=\"jumbotron text-center chi-head-text\" style=\" background-image: url($cimg); \">
        <span>        
        <i class=\"fas fa-utensils\"></i>&nbsp;&nbsp;&nbsp;$ctit
      </span>
      </h1>
      <div class=\"row chi-itemrow\">

	";
	foreach($product_array as $product){
		echo ProductTemplate($product['cate'],$product['cimg'],$product['name'],$product['img'],$product['price'],$product['id'],$product['cid']);
	}
	echo "
	<div class='col-lg-12 pagin' style='color:white;display:flex;justify-content:center;align-items:center'>
			<ul>
			  <li><a id='prv' onclick=\"prvclick('$cid','$cimg','$ctit')\">Prev</a>
			  </li>
			  <li class='pageNumber act'><a>1</a></li>
			  <li class='pageNumber'><a>2</a></li>
			  <li class='pageNumber'><a>3</a></li>
			  <li class='pageNumber'><a>4</a></li>
			  <li><a id='nxt' onclick=\"nxtclick('$cid','$cimg','$ctit')\">Next</a></li>
			</ul>
       </div>
      </div>
  </div>

	";
}

	function showSingleItem($cate,$id){
			include 'dbconfig.php';
			$arr = [];
			$stmt = $conn->prepare("select * from products where cate_id=? and id=?");
    		if($stmt->execute(array($cate,$id))){
    			while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
					$s = [
					'name'=>$row['name'],
					'description'=>$row['description'],
					'price'=>$row['price'],
					'img'=>$row['img']
					];
				array_push($arr, $s);
			}
			return $arr;

			}
		else 
			{
				return '';
			}
	}

	if(isset($_GET['spid'])){
		include 'php/Components.php';
		$pro_id = $_GET['spid'];
		$cat_id = $_GET['scid'];
		$it_arr = showSingleItem($cat_id,$pro_id);
		$img = '';
		$tit = '';
		$price = '';
		$description = '';
		foreach($it_arr as $i){
			$img = $i['img'];
			$tit = $i['name'];
			$price = $i['price'];
			$description = $i['description'];
		}
		echo SingleProductTemplate($img,$tit,$price,$description);
	}

if(isset($_POST['updateCart'])){
	/*function to update the cart icon value from menu page*/
	   session_start();
	   if (isset($_SESSION['cart'])){
       $count = 0;
     
       foreach($_SESSION['cart'] as $cart){
         $count = $count + (int)$cart['count'];
       }

       echo $count;
}
else{
	echo "0";
}
}

if(isset($_POST['code'])){
	$code = $_POST['code'];
	$price = $_POST['price'];
	$disc = 0;
			include 'db.php';
			$arr = [];
			$sql = "select * from coupons where title='$code'";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()){
					$disc = $row['discount'];
					$newdisc = calcDiscount($price,$disc);
					$arrData = [
						'disc' => $disc,
						'newdisc' => $newdisc
					];
					echo json_encode($arrData);
				}
			}
		else 
			{
				echo "No coupon";
			}
	$conn->close();								

}

if(isset($_POST['scratch'])){
			include 'db.php';
			$pvalue = $_POST['pvalue'];
			$arr = [];
			$sql = "select discount from coupons where type='scratch'";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()){
					$disc = $row['discount'];
					$newdisc = calcDiscount($pvalue,$disc);
					$arrData = [
						'disc' => $disc,
						'newdisc' => $newdisc
					];
					echo json_encode($arrData);
				}
			}
		else 
			{
				echo "No coupon";
			}
	$conn->close();								

}

if(isset($_POST['txt'])){
	$str = "%".$_POST['txt']."%";
			include 'dbconfig.php';
		include 'php/Components.php';
			$arr = [];
			$stmt = $conn->prepare("select p.name as name,p.price as price,p.img as img,p.id as id,c.title as cate from products as p inner join categories as c on p.cate_id = c.id where p.name like ?");
    		if($stmt->execute(array($str))){
    			while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
					$s = [
					'name'=>$row['name'],
					'price'=>$row['price'],
					'img'=>$row['img'],
					'catname'=>$row['cate'],
					'pid'=>$row['id']
					];
				array_push($arr, $s);
			}
			foreach($arr as $r){
	SearchElement($r['img'],$r['name'],$r['catname'],$r['price'],$r['pid']);
			}
			}
}

	?>





