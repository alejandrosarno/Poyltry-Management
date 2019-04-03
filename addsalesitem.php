<?php include('processsalesitem.php');?>

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

			
            </button>
            <a class="navbar-brand" href="#">
			
                <span id="brand-title">ADD SALES ITEM</span>
				
             </a>
			 
        </div>
		<ul class="nav navbar-nav navbar-right">
      <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Log out</a></li>
    </ul>
		    </div>
			
</nav>	

	<br><br><br>
	<?php require_once 'processsalesitem.php';?>
	
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
		$result = $mysqli->query("SELECT * FROM salesitem where userid='$userid'") or die($mysqli->error);
		//pre_r($result);
		
		?>
		<?php
		
		$result = $mysqli->query("SELECT * FROM item,customer,salesitem where item.item_id = salesitem.item_id and customer.customer_id = salesitem.customer_id") or die($mysqli->error);
		//pre_r($result);
		
		?>
		
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		
		<p>&nbsp;</p>
		
		
		
		<div class="row">
				<div class="col-sm-8 col-sm-offset-2">	
				<div class="container-fluid">
					
			<table class="table table-condensed table-hover table-striped">
				<thead>
					<tr>
						<th>#</th>
						<th>Item id</th>
						<th>Customer id</th>
						
						<th>Quantity</th>
						<th>Price</th>
						<th>Date</th>
						<th>Total</th>
						<th colspan="2">Action</th>
					</tr>
				</thead>
				
				<?php
					while($row=$result->fetch_assoc()):?>
					
						<tr>
							<td><?php echo $row['id']?></td>
							<td><?php echo $row['description']?></td>
							<td><?php echo $row['customer_id']?></td>
							
							<td><?php echo $row['quantity']?></td>
							<td>₱<?php echo $row['price']?></td>
							<td><?php echo $row['date']?></td>
							<td>₱<?php echo $row['total']?></td>
							<td>
								<a href="editsalesitem.php?edit=<?php echo $row['id'];?>"><span class="glyphicon glyphicon-eye-open" title="View Profile"></span></a> |
								<a href="processsalesitem.php?delete=<?php echo $row['id'];?>"><span class="glyphicon glyphicon-trash" title="Delete"></span></i></a>	
									
							</td>
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
		<ul class="nav navbar-nav navbar-right">
	<a href="editsalesitem.php"class="btn">Add Sale item</a>
	                <a href="index.php"class="btn">Back</a>

</body>
</html>