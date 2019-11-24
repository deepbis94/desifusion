<?php
session_start();

//Requesting from createorder.php 
if(isset($_POST['togo'])){
	$_SESSION['togo'] = "1";
	echo "session set";
}
//Requesting from createorder.php 
if(isset($_POST['hd'])){
	$_SESSION['hd'] = "1";
	echo "session set";
}
 ?>

