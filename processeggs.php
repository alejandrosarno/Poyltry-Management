<?php

session_start();
$host = '';
$db ='';

$mysqli = new mysqli('localhost','root','','registered') or die(mysqli_error($mysqli));

$id='';
$update = false;
$timestamp="";
$smalleggs="";
$mediumeggs ="";
$largeeggs ="";
$spoiledeggs ="";
$brokeneggs ="";

if(isset($_POST['save'])){
	$type = $_POST['type'];
	$timestamp = $_POST['timestamp'];
	$smalleggs = $_POST['smalleggs'];
	$mediumeggs = $_POST['mediumeggs'];
	$largeeggs = $_POST['largeeggs'];
	$spoiledeggs = $_POST['spoiledeggs'];
	$brokeneggs = $_POST['brokeneggs'];
	$username= $_SESSION["username"];
	$flocks = $_POST['flocksid'];
	$result=$mysqli->query("select id from users where username='$username'") or die($mysqli->error);
	if(@count($result)==1)
	{
		$row=$result->fetch_array();
		$userid=$row['id'];

	}

	$mysqli->query("INSERT INTO eggs (userid,flocksid,timestamp,smalleggs,mediumeggs,largeeggs,spoiledeggs,brokeneggs) VALUES ($userid,$flocks,'$timestamp','$smalleggs','$mediumeggs','$largeeggs','$spoiledeggs','$brokeneggs')") or
			die($mysqli->error);
	$_SESSION['message'] = "Record has been saved!";
	$_SESSION['msg_type'] = "success";
	
	
	header("location:addegss.php");
}
if(isset($_GET['delete'])){
	$id =$_GET['delete'];
	$mysqli->query("DELETE FROM eggs WHERE id=$id") or die($mysqli->error());
	
	$_SESSION['message'] = "Record has been deleted!";
	$_SESSION['msg_type'] = "danger";
	
	header("location:addegss.php");
	
	
}
if(isset($_GET['edit'])){
	$id = $_GET['edit'];
	$update =true;
	$result = $mysqli->query("SELECT * FROM eggs WHERE id=$id") or die($mysqli->error);
	if(@count($result)==1){
		$row=$result->fetch_array();
		$timestamp = $row['timestamp'];
		$smalleggs = $row['smalleggs'];
		$mediumeggs = $row['mediumeggs'];
		$largeeggs = $row['largeeggs'];
		$spoiledeggs = $row['spoiledeggs'];
		$brokeneggs = $row['brokeneggs'];
		$flocksid = $row['flocksid'];
	}
}
if(isset($_POST['update'])){
	$id = $_POST['id'];
	$timestamp = $_POST['timestamp'];
	$smalleggs = $_POST['smalleggs'];
	$mediumeggs = $_POST['mediumeggs'];
	$largeeggs = $_POST['largeeggs'];
	$spoiledeggs = $_POST['spoiledeggs'];
	$brokeneggs = $_POST['brokeneggs'];
	
	$mysqli->query("UPDATE eggs SET timestamp='$timestamp',smalleggs='$smalleggs',mediumeggs='$mediumeggs','$largeeggs','$spoiledeggs','$brokeneggs' WHERE id=$id") or die($mysqli->error);
	$_SESSION['message'] = "Record has been updated!";
	$_SESSION['msg_type'] = "warning";
	
	header('location:addegss.php');
}


?>