<?php

session_start();
$host = '';
$db ='';

$mysqli = new mysqli('localhost','root','','registered') or die(mysqli_error($mysqli));

$id='';
$update = false;
$type="";
$time="";
$amout ="";


if(isset($_POST['save'])){
	$type = $_POST['type'];
	
	$amount = $_POST['amount'];
	$breed = $_POST['breed'];
	$username= $_SESSION["username"];
	$flocks = $_POST['flocksid'];
	$result=$mysqli->query("select id from users where username='$username'") or die($mysqli->error);
	if(@count($result)==1)
	{
		$row=$result->fetch_array();
		$userid=$row['id'];

	}

	$mysqli->query("INSERT INTO medication (userid,flocksid,type,amout) VALUES ($userid,$flocks,'$type','$amout')") or
			die($mysqli->error);
	$_SESSION['message'] = "Record has been saved!";
	$_SESSION['msg_type'] = "success";
	
	
	header("location:addmedication.php");
}
if(isset($_GET['delete'])){
	$id =$_GET['delete'];
	$mysqli->query("DELETE FROM medication WHERE id=$id") or die($mysqli->error());
	
	$_SESSION['message'] = "Record has been deleted!";
	$_SESSION['msg_type'] = "danger";
	
	header("location:addmedication.php");
	
	
}
if(isset($_GET['edit'])){
	$id = $_GET['edit'];
	$update =true;
	$result = $mysqli->query("SELECT * FROM medication WHERE id=$id") or die($mysqli->error);
	if(@count($result)==1){
		$row=$result->fetch_array();
		$type = $row['type'];
	
		$amout = $row['amout'];
		$flocksid = $row['flocksid'];
	}
}
if(isset($_POST['update'])){
	$id = $_POST['id'];
	$type = $_POST['type'];

	$amout = $_POST['amout'];
	
	
	$mysqli->query("UPDATE medication SET type='$type',',amout='$amout',id='$id' WHERE id=$id") or die($mysqli->error);
	$_SESSION['message'] = "Record has been updated!";
	$_SESSION['msg_type'] = "warning";
	
	header('location:addmedication.php');
}


?>