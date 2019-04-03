
<!DOCTYPE html>
<html>
<head>
	<title>Add</title>
		<link href="bootstrap-3.3.7/css/bootstrap.css" rel="stylesheet">
        <script src="bootstrap-3.3.7/js/jquery.min.js"></script>
        <script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>
        <link href="css/css/style.css" rel="stylesheet">

</head>
<body>
<<<<<<< HEAD

=======
>>>>>>> b247b6e3529876e8b02ee9695d93195a07e1eea2
			
            </button>
            <a class="navbar-brand" href="#">
			
                <span id="brand-title">ADD FLOCKS</span>
				
             </a>
			 
        </div>
		<ul class="nav navbar-nav navbar-right">
      <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
<<<<<<< HEAD
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Log out</a></li>
=======
      <li><a href="home.php"><span class="glyphicon glyphicon-log-in"></span> Log out</a></li>
>>>>>>> b247b6e3529876e8b02ee9695d93195a07e1eea2
    </ul>
		    </div>
			
</nav>	

	<br><br><br>
	<?php require_once 'process.php';?>
	
	<?php
	
	if(isset($_SESSION['message'])):?>
	<div class="col-sm-8 col-sm-offset-2">	
	<center><div class="alert alert-<?=$_SESSION['msg_type']?>">
	
	<?php 
		echo $_SESSION['message'];
		unset($_SESSION['message']);
	?>
	</center>
	</div>
	</div>
	<?php endif ?>
	<?php
		$mysqli = new mysqli('localhost','root','','registered') or die(mysqli_error($mysqli));
		$username= $_SESSION["username"];
		$result=$mysqli->query("select id from users where username='$username'") or die($mysqli->error);
		if(@count($result)==1)
		{
			$row=$result->fetch_array();
			$userid=$row['id'];

		}
		$result = $mysqli->query("SELECT * FROM item where userid='$userid'") or die($mysqli->error);
		//pre_r($result);
		
		?>
		<p>&nbsp;</p>
		
		<div class="col-sm-offset-2">
			<a href="index.php" class="next">&laquo; Back</a>
		</div>
		

		<p>&nbsp;</p>
		<center><h1>ITEM</h1><center>
		<div class="row">
				<div class="col-sm-8 col-sm-offset-2">	
				<div class="container-fluid">
					
			<table class="table table-condensed table-hover table-striped">
			<table class="table">
			
				<thead>
					<tr>
						<th>#</th>
						<th>Description</th>
						<th>Unit</th>
						<th>Price</th>
					</tr>
				</thead>
				
				<?php
					while($row=$result->fetch_assoc()):?>
					
						<tr>
							<td><?php echo $row['item_id']?></td>
							<td><?php echo $row['description']?></td>
							<td><?php echo $row['unit']?></td>
<<<<<<< HEAD
							<td>₱<?php echo $row['price']?></td>
=======
							<td><?php echo $row['price']?></td>
>>>>>>> b247b6e3529876e8b02ee9695d93195a07e1eea2
							
						</tr>
						<?php endwhile;?>
			</table>
		</div>
		</div>
		</div>
		<?php
		$mysqli = new mysqli('localhost','root','','registered') or die(mysqli_error($mysqli));
		$username= $_SESSION["username"];
		$result=$mysqli->query("select id from users where username='$username'") or die($mysqli->error);
		if(@count($result)==1)
		{
			$row=$result->fetch_array();
			$userid=$row['id'];

		}
		$result = $mysqli->query("SELECT * FROM sale where userid='$userid'") or die($mysqli->error);
		//pre_r($result);
		
		?>
		<center><h1>SALE</h1></center>
		<div class="row">
				<div class="col-sm-8 col-sm-offset-2">	
				<div class="container-fluid">
					
			<table class="table table-condensed table-hover table-striped">
			
				<thead>
					<tr>
						<th>#</th>
						<th>TimeStamp</th>
						<th>Customer id</th>
					</tr>
				</thead>
				
				<?php
					while($row=$result->fetch_assoc()):?>
					
						<tr>
							<td><?php echo $row['sale_id']?></td>
<<<<<<< HEAD
							<td><?php echo $row['time']?></td>
=======
							<td><?php echo $row['timestamp']?></td>
>>>>>>> b247b6e3529876e8b02ee9695d93195a07e1eea2
							<td><?php echo $row['customer_id']?></td>
						</tr>
						<?php endwhile;?>
			</table>
		</div>
		</div>
		</div>
		<?php
		$mysqli = new mysqli('localhost','root','','registered') or die(mysqli_error($mysqli));
		$username= $_SESSION["username"];
		$result=$mysqli->query("select id from users where username='$username'") or die($mysqli->error);
		if(@count($result)==1)
		{
			$row=$result->fetch_array();
			$userid=$row['id'];

		}
		$result = $mysqli->query("SELECT * FROM feeds where userid='$userid'") or die($mysqli->error);
		//pre_r($result);
		
		?>
		<center><h1>FEEDS</h1></center>
		<div class="row">
				<div class="col-sm-8 col-sm-offset-2">	
				<div class="container-fluid">
					
			<table class="table table-condensed table-hover table-striped">
			
			<table class="table">
			
				<thead>
					<tr>
						<th>#</th>
						<th>Flocks id</th>	
						<th>Types of feeds</th>						
						<th>Quality</th>
						<th>Unit</th>
						
						
						<th>Timestamp</th>
						<th>Price</th>
						
					</tr>
				</thead>
				
				<?php
					while($row=$result->fetch_assoc()):?>
					
						<tr>
							<td><?php echo $row['id']?></td>
							<td><?php echo $row['flocksid']?></td>
							<td><?php echo $row['types']?></td>
							<td><?php echo $row['quality']?></td>
							<td><?php echo $row['unit']?></td>
<<<<<<< HEAD
							<td><?php echo $row['time']?></td>
							<td>₱<?php echo $row['price']?></td>
=======
							<td><?php echo $row['timestamp']?></td>
							<td><?php echo $row['price']?></td>
>>>>>>> b247b6e3529876e8b02ee9695d93195a07e1eea2
							
						</tr>
						<?php endwhile;?>
			</table>
		</div>
		</div>
		</div>
		<?php
		$mysqli = new mysqli('localhost','root','','registered') or die(mysqli_error($mysqli));
		$username= $_SESSION["username"];
		$result=$mysqli->query("select id from users where username='$username'") or die($mysqli->error);
		if(@count($result)==1)
		{
			$row=$result->fetch_array();
			$userid=$row['id'];

		}
		$result = $mysqli->query("SELECT * FROM flocks where userid='$userid'") or die($mysqli->error);
		//pre_r($result);
		
		?>
		<CENTER><h1>FLOCKS</h1></center>
		<div class="row">
				<div class="col-sm-8 col-sm-offset-2">	
				<div class="container-fluid">
					
			<table class="table table-condensed table-hover table-striped">
			<table class="table">
			
				<thead>
					<tr>
						<th>#</th>
						<th>Breed</th>
						<th>Rooster</th>
						<th>Hen</th>
						
					</tr>
				</thead>
				
				<?php
					while($row=$result->fetch_assoc()):?>
					
						<tr>
							<td><?php echo $row['flocksid']?></td>
							<td><?php echo $row['breed']?></td>
							<td><?php echo $row['rooster']?></td>
							<td><?php echo $row['hen']?></td>
						</tr>
						<?php endwhile;?>
			</table>
		</div>
		</div>
		</div>
		<?php
		$mysqli = new mysqli('localhost','root','','registered') or die(mysqli_error($mysqli));
		$username= $_SESSION["username"];
		$result=$mysqli->query("select id from users where username='$username'") or die($mysqli->error);
		if(@count($result)==1)
		{
			$row=$result->fetch_array();
			$userid=$row['id'];

		}
		$result = $mysqli->query("SELECT * FROM customer where userid='$userid'") or die($mysqli->error);
		//pre_r($result);
		
		?>
		<center><h1>CUSTOMER<h1></center>
		<div class="row">
				<div class="col-sm-8 col-sm-offset-2">	
				<div class="container-fluid">
					
			<table class="table table-condensed table-hover table-striped">
				<thead>
					<tr>
						<th>#</th>
						<th>Last Name</th>
						<th>First Name</th>
						<th>Middle Name</th>
						<th>Contact No.</th>
						<th>address</th>
						
					</tr>
				</thead>
				
				<?php
					while($row=$result->fetch_assoc()):?>
					
						<tr>
							<td><?php echo $row['customer_id']?></td>
							<td><?php echo $row['lastname']?></td>
							<td><?php echo $row['firstname']?></td>
							<td><?php echo $row['middlename']?></td>
							<td><?php echo $row['contactno']?></td>
							<td><?php echo $row['address']?></td>
							
						</tr>
						<?php endwhile;?>
			</table>
		</div>
		</div>
		</div>
		<?php
		$mysqli = new mysqli('localhost','root','','registered') or die(mysqli_error($mysqli));
		$username= $_SESSION["username"];
		$result=$mysqli->query("select id from users where username='$username'") or die($mysqli->error);
		if(@count($result)==1)
		{
			$row=$result->fetch_array();
			$userid=$row['id'];

		}
		$result = $mysqli->query("SELECT * FROM medication where userid='$userid'") or die($mysqli->error);
		//pre_r($result);
		
		?>
	    
		<center><h1>MEDICATION<h1></center>
		<div class="row">
				<div class="col-sm-8 col-sm-offset-2">	
				<div class="container-fluid">
					
			<table class="table table-condensed table-hover table-striped">
				<thead>
					<tr>
						<th>#</th>
						<th>Flocks id</th>
						<th>Types of vaccine</th>
						<th>Timestamp</th>
						<th>Amout</th>
						
					</tr>
				</thead>
				
				<?php
					while($row=$result->fetch_assoc()):?>
					
						<tr>
							<td><?php echo $row['id']?></td>
							<td><?php echo $row['flocksid']?></td>
							<td><?php echo $row['type']?></td>
<<<<<<< HEAD
							<td><?php echo $row['time']?></td>
							<td>₱<?php echo $row['amout']?></td>
=======
							<td><?php echo $row['timestamp']?></td>
							<td><?php echo $row['amout']?></td>
>>>>>>> b247b6e3529876e8b02ee9695d93195a07e1eea2
						</tr>
						<?php endwhile;?>
			</table>
			</div>
			</div>
			</div>
			<?php
		$mysqli = new mysqli('localhost','root','','registered') or die(mysqli_error($mysqli));
		$username= $_SESSION["username"];
		$result=$mysqli->query("select id from users where username='$username'") or die($mysqli->error);
		if(@count($result)==1)
		{
			$row=$result->fetch_array();
			$userid=$row['id'];

		}
		$result = $mysqli->query("SELECT * FROM salesitem where userid='$userid'") or die($mysqli->error);
		//pre_r($result);
		
		?>
		
		
		<center><h1>SALE ITEM<h1></center>
		<div class="row">
				<div class="col-sm-8 col-sm-offset-2">	
				<div class="container-fluid">
					
			<table class="table table-condensed table-hover table-striped">
				<thead>
					<tr>
						<th>#</th>
						<th>Date</th>
						<th>Item id</th>
						<th>Customer id</th>
						<th>Date</th>
						<th>Quantity</th>
						<th>Price</th>
					</tr>
				</thead>
				
				<?php
					while($row=$result->fetch_assoc()):?>
					
						<tr>
							<td><?php echo $row['id']?></td>
							<td><?php echo $row['date']?></td>
							<td><?php echo $row['item_id']?></td>
							<td><?php echo $row['customer_id']?></td>
							<td><?php echo $row['date']?></td>
							<td><?php echo $row['quantity']?></td>
<<<<<<< HEAD
							<td>₱<?php echo $row['price']?></td>
=======
							<td><?php echo $row['price']?></td>
>>>>>>> b247b6e3529876e8b02ee9695d93195a07e1eea2
						</tr>
						<?php endwhile;?>
			</table>
			</div>
			</div>
			</div>
			<?php
		$mysqli = new mysqli('localhost','root','','registered') or die(mysqli_error($mysqli));
		$username= $_SESSION["username"];
		$result=$mysqli->query("select id from users where username='$username'") or die($mysqli->error);
		if(@count($result)==1)
		{
			$row=$result->fetch_array();
			$userid=$row['id'];

		}
		$result = $mysqli->query("SELECT * FROM eggs where userid='$userid'") or die($mysqli->error);
		//pre_r($result);
		
		?>
		<center><h1>EGGS<h1></center>
		<div class="row">
				<div class="col-sm-8 col-sm-offset-2">	
				<div class="container-fluid">
					
			<table class="table table-condensed table-hover table-striped">
			
			<table class="table">
			
				<thead>
					<tr>
						<th>#</th>
						<th>Flocks id</th>	
						<th>Timestamp</th>						
						<th>Small egss</th>
						<th>Medium Eggs</th>
						<th>Large Egss</th>
						<th>Spoiled Egss</th>
						<th>Broken Egss</th>
						
					</tr>
				</thead>
				
				<?php
					while($row=$result->fetch_assoc()):?>
					
						<tr>
							<td><?php echo $row['id']?></td>
							<td><?php echo $row['flocksid']?></td>
							<td><?php echo $row['timestamp']?></td>
							<td><?php echo $row['smalleggs']?></td>
							<td><?php echo $row['mediumeggs']?></td>
							<td><?php echo $row['largeeggs']?></td>
							<td><?php echo $row['spoiledeggs']?></td>
							<td><?php echo $row['brokeneggs']?></td>
							
						</tr>
						<?php endwhile;?>
			</table>
		</div>
		</div>
		</div>
		<?php
		function pre_r($array){
			echo'<pre>';
			print_r($array);
			echo'</pre>';
		}
	
	?>
	
</body>
</html>