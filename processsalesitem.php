<?php

session_start();
$host = '';
$db ='';

$mysqli = new mysqli('localhost','root','','registered') or die(mysqli_error($mysqli));

$id='';
$update = false;
$item_id ="";
$customer_id ="";

$quantity ="";
$price ="";
$total ="";

if(isset($_POST['save'])){
	
	$customer_id = $_POST['customer_id'];
	$quantity = $_POST['quantity'];
	$price = $_POST['price'];
	$item = $_POST['item_id'];
	$total =$quantity *$price;
	$username= $_SESSION["username"];
	$result=$mysqli->query("select id from users where username='$username'") or die($mysqli->error);
	if(@count($result)==1)
	{
		$row=$result->fetch_array();
		$userid=$row['id'];
		

	}

	$mysqli->query("INSERT INTO salesitem (userid,customer_id,quantity,price,item_id,total) VALUES ($userid,$customer_id,'$quantity','$price',$item,$total)") or
			die($mysqli->error);
	$_SESSION['message'] = "Record has been saved!";
	$_SESSION['msg_type'] = "success";
	
	
	header("location:addsalesitem.php");
}
if(isset($_GET['delete'])){
	$id =$_GET['delete'];
	$mysqli->query("DELETE FROM salesitem WHERE id=$id") or die($mysqli->error());
	
	$_SESSION['message'] = "Record has been deleted!";
	$_SESSION['msg_type'] = "danger";
	
	header("location:addsalesitem.php");
	
	
}
if(isset($_GET['edit'])){
	$id = $_GET['edit'];
	$update =true;
	$result = $mysqli->query("SELECT * FROM salesitem WHERE id=$id") or die($mysqli->error);
	if(@count($result)==1){
		$row=$result->fetch_array();
		$description = $row['description'];
		$customer_id = $row['customer_id'];
		$quantity = $row['quantity'];
		$price = $row['price'];
		$item_id = $row['item_id'];
	}
}
if(isset($_POST['update'])){
	$id = $_POST['id'];
	$description = $_POST['description'];
	$customer_id = $_POST['customer_id'];
	$quantity = $_POST['quantity'];
	$price = $_POST['price'];
	
	
	$mysqli->query("UPDATE salesitem SET customer_id='$customer_id',quantity='$quantity',price='$price' WHERE id=$id") or die($mysqli->error);
	$_SESSION['message'] = "Record has been updated!";
	$_SESSION['msg_type'] = "warning";
	
	header('location:addsalesitem.php');
}


?>