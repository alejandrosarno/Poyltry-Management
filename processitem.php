<?php

session_start();
$host = '';
$db ='';

$mysqli = new mysqli('localhost','root','','registered') or die(mysqli_error($mysqli));

$item_id='';
$update = false;
$description ="";
$unit="";
$price="";



if(isset($_POST['save'])){
	$description = $_POST['description'];
	$unit = $_POST['unit'];
	$price = $_POST['price'];
	$username= $_SESSION["username"];
	$result=$mysqli->query("select id from users where username='$username'") or die($mysqli->error);
	if(@count($result)==1)
	{
		$row=$result->fetch_array();
		$userid=$row['id'];

	}

	$mysqli->query("INSERT INTO item (userid,description,unit,price) VALUES ('$userid','$description','$unit','$price')") or
			die($mysqli->error);
	$_SESSION['message'] = "Record has been saved!";
	$_SESSION['msg_type'] = "success";
	
	
	header("location:additem.php");
}
if(isset($_GET['delete'])){
	$item_id =$_GET['delete'];
	$mysqli->query("DELETE FROM item WHERE item_id=$item_id") or die($mysqli->error());
	
	$_SESSION['message'] = "Record has been deleted!";
	$_SESSION['msg_type'] = "danger";
	
	header("location:additem.php");
	
	
}
if(isset($_GET['edit'])){
	$item_id = $_GET['edit'];
	$update =true;
	$result = $mysqli->query("SELECT * FROM item WHERE item_id=$item_id") or die($mysqli->error);
	if(@count($result)==1){
		$row=$result->fetch_array();
		$description = $row['description'];
		$unit = $row['unit'];
		$price = $row['price'];
		
	}
}
if(isset($_POST['update'])){
	$item_id = $_POST['item_id'];
	$description = $_POST['description'];
	$unit = $_POST['unit'];
	$price = $_POST['price'];
	
	$mysqli->query("UPDATE item SET description='$description',unit='$unit',price='$price' WHERE item_id=$item_id") or die($mysqli->error);
	$_SESSION['message'] = "Record has been updated!";
	$_SESSION['msg_type'] = "warning";
	
	header('location:additem.php');
}


?>