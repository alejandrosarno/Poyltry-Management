<?php

session_start();
$host = '';
$db ='';

$mysqli = new mysqli('localhost','root','','registered') or die(mysqli_error($mysqli));

$id='';
$update = false;
$breed="";
$rooster="";
$hen ="";

if(isset($_POST['save'])){
	$rooster= $_POST['rooster'];
	$hen = $_POST['hen'];
	$username= $_SESSION["username"];
	$flocks = $_POST['flocksid'];
	$result=$mysqli->query("select id from users where username='$username'") or die($mysqli->error);
	if(@count($result)==1)
	{
		$row=$result->fetch_array();
		$userid=$row['id'];

	}

	$mysqli->query("INSERT INTO flocks (userid,flocksid,breed,rooster,hen) VALUES ($userid,$flocks,'$breed','$rooster','$hen')") or
			die($mysqli->error);
	$_SESSION['message'] = "Record has been saved!";
	$_SESSION['msg_type'] = "success";
	
	
	header("location:addegss.php");
}
if(isset($_GET['delete'])){
	$id =$_GET['delete'];
	$mysqli->query("DELETE FROM flocks WHERE id=$id") or die($mysqli->error());
	
	$_SESSION['message'] = "Record has been deleted!";
	$_SESSION['msg_type'] = "danger";
	
	header("location:addfloks.php");
	
	
}
if(isset($_GET['edit'])){
	$id = $_GET['edit'];
	$update =true;
	$result = $mysqli->query("SELECT * FROM flocks WHERE id=$id") or die($mysqli->error);
	if(@count($result)==1){
		$row=$result->fetch_array();
		$breed = $row['breed'];
		$rooster = $row['rooster'];
		$hen = $row['hen'];
		$flocksid = $row['flocksid'];
	}
}
if(isset($_POST['update'])){
	$id = $_POST['id'];
	$breed = $_POST['breed'];
	$rooster = $_POST['rooster'];
	$hen = $_POST['hen'];
	
	$mysqli->query("UPDATE flocks SET breed='$breed',rooster='$rooster',hen='$hen' WHERE id=$id") or die($mysqli->error);
	$_SESSION['message'] = "Record has been updated!";
	$_SESSION['msg_type'] = "warning";
	
	header('location:addegss.php');
}


?>