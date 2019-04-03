<?php

session_start();
$host = '';
$db ='';

$mysqli = new mysqli('localhost','root','','registered') or die(mysqli_error($mysqli));

$customer_id='';
$update = false;
$userid ="";
$lastname="";
$firstname="";
$middlename="";
$contactno="";
$address="";



if(isset($_POST['save'])){
	
	$lastname = $_POST['lastname'];
	$firstname = $_POST['firstname'];
	$middlename = $_POST['middlename'];
	$contactno = $_POST['contactno'];
	$address = $_POST['address'];
	$username= $_SESSION["username"];
	$result=$mysqli->query("select id from users where username='$username'") or die($mysqli->error);
	if(@count($result)==1)
	{
		$row=$result->fetch_array();
		$userid=$row['id'];

	}

	$mysqli->query("INSERT INTO customer (userid,lastname,firstname,middlename,contactno,address) VALUES ('$userid','$lastname','$firstname','$middlename','$contactno','$address')") or
			die($mysqli->error);
	$_SESSION['message'] = "Record has been saved!";
	$_SESSION['msg_type'] = "success";
	
	
	header("location:addcustomer.php");
}
if(isset($_GET['delete'])){
	$customer_id =$_GET['delete'];
	$mysqli->query("DELETE FROM customer WHERE customer_id=$customer_id") or die($mysqli->error());
	
	$_SESSION['message'] = "Record has been deleted!";
	$_SESSION['msg_type'] = "danger";
	
	header("location:addcustomer.php");
	
	
}
if(isset($_GET['edit'])){
	$customer_id = $_GET['edit'];
	$update =true;
	$result = $mysqli->query("SELECT * FROM customer WHERE customer_id=$customer_id") or die($mysqli->error);
	if(@count($result)==1){
		$row=$result->fetch_array();
		$lastname = $row['lastname'];
		$firstname = $row['firstname'];
		$middlename = $row['middlename'];
		$contactno = $row['contactno'];
		$address = $row['address'];
	}
}
if(isset($_POST['update'])){
	$customer_id = $_POST['customer_id'];
	$lastname = $_POST['lastname'];
	$firstname = $_POST['firstname'];
	$middlename = $_POST['middlename'];
	$contactno = $_POST['contactno'];
	$address = $_POST['address'];
	
	
	$mysqli->query("UPDATE customer SET userid='$userid',lastname='$lastname',firstname='$firstname',middlename='$middlename',contactno='$contactno',address='$address' WHERE customer_id=$customer_id") or die($mysqli->error);
	$_SESSION['message'] = "Record has been updated!";
	$_SESSION['msg_type'] = "warning";
	
	header('location:addcustomer.php');
}


?>