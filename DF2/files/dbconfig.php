<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dfdb";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password,array(
    	PDO::ATTR_PERSISTENT => true
    ));
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//     $stmt = $conn->prepare("select * from products where cate_id=1");
//     $stmt->execute();
//     $num = $stmt->rowCount(); //Total number of records
//     $per_page_items = 3;

//     $ppi1 = 0;
//     $ppi2= $ppi1 + $per_page_items;
//     $ppi3 = $ppi2+ $per_page_items;

//     echo " ".$ppi1." ".$ppi2." ".$ppi3." <br>";
//     $total_pages = ceil($num/$per_page_items); //Number of pages

//     //1st page
//     $stmt1 = $conn->prepare("select * from products where cate_id=1 limit $ppi1,$per_page_items");
//     if($stmt1->execute()){
//     	while($row = $stmt1->fetch(PDO::FETCH_ASSOC)){
//     		echo $row['name'];
//     	}
//     }
// echo "<br>";
//     // 2nd page
// $stmt2 = $conn->prepare("select * from products where cate_id=1 limit $ppi2,$per_page_items");
// if($stmt2->execute()){
//     while($row = $stmt2->fetch(PDO::FETCH_ASSOC)){
//         echo $row['name'];
//     }
// }
// echo "<br/>";
//     // 2nd page
// $stmt3 = $conn->prepare("select * from products where cate_id=1 limit $ppi3,$per_page_items");
// if($stmt3->execute()){
//     while($row = $stmt3->fetch(PDO::FETCH_ASSOC)){
//         echo $row['name'];
//     }
// }

    // foreach($conn->query('SELECT * from bookings') as $row) {
    //     print_r($row);
    // }

 //    $discount = 30;
 //    $name = "Fuck";
 //    $stmt = $conn->prepare("insert into discounts(discount,name) values(:discount,:name)");
 //    $stmt->bindParam(':discount', $discount);
	// $stmt->bindParam(':name', $name);
	// $stmt->execute();
	// $count = $stmt->rowCount();
	// echo $count;

// $stmt = $conn->prepare("SELECT * FROM discounts where name = ? and id = ?");
// if ($stmt->execute(array($_GET['name'],$_GET['id']))) {
//   while ($row = $stmt->fetch()) {
//     print_r($row);
//   }
// }

    // $stmt = $conn->prepare("select p.name as name,p.description as description,p.price as price,p.img as img,p.id as id,c.title as cate,p.rating as rating,c.header_img as cimg,c.id as cid from products as p inner join categories as c on p.cate_id = c.id where p.cate_id=?");
    // $arr = [];
    // if($stmt->execute(array($_GET['id']))){
    // 	while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
				// 	$s = [
				// 	'name'=>$row['name'],
				// 	'description'=>$row['description'],
				// 	'price'=>$row['price'],
				// 	'img'=>$row['img'],
				// 	'cate'=>$row['cate'],
				// 	'id'=>$row['id'],
				// 	'rating'=>$row['rating'],
				// 	'cimg' => $row['cimg'],
				// 	'cid'=>$row['cid']
				// 	];
				// 	array_push($arr, $s);
				// }
    // }
    // var_dump($arr);
    // echo $stmt->rowCount();
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>