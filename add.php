<?php include('process.php');?>

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
			
                <span id="brand-title">ADD FLOCKS</span>
				
             </a>
			 
        </div>
		<ul class="nav navbar-nav navbar-right">
      <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Log out</a></li>
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
		$result = $mysqli->query("SELECT * FROM flocks where userid='$userid'") or die($mysqli->error);
		//pre_r($result);
		
		?>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<div class="col-sm-offset-2">	
		<a href="index.php" class="btn btn-info btn-lg"> Home
        </a>
		
		</div>
		

		<p>&nbsp;</p>
		
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
						<th colspan="2">Action</th>
					</tr>
				</thead>
				
				<?php
					while($row=$result->fetch_assoc()):?>
					
						<tr>
							<td><?php echo $row['flocksid']?></td>
							<td><?php echo $row['breed']?></td>
							<td><?php echo $row['rooster']?></td>
							<td><?php echo $row['hen']?></td>
							<td>
								<a href="edit.php?edit=<?php echo $row['flocksid'];?>"><span class="glyphicon glyphicon-eye-open" title="View Profile"></span></a> |
								<a href="process.php?delete=<?php echo $row['flocksid'];?>"><span class="glyphicon glyphicon-trash" title="Delete"></span></i></a>
									
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
	<a class="navbar-brand" href="#">
	<a href="edit.php"class="btn">Add</a>
	                <a href="index.php"class="btn">Back</a>
</body>
</html>