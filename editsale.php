<?php include('processsale.php');?>


<!DOCTYPE html>
<html>
<head>
	<title>Sale</title>
		<link href="bootstrap-3.3.7/css/bootstrap.css" rel="stylesheet">
        <script src="bootstrap-3.3.7/js/jquery.min.js"></script>
        <script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>
        <link href="css/css/style.css" rel="stylesheet">
		<style>
a {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
}

a:hover {
  background-color: #ddd;
  color: black;
}

.previous {
  background-color: #f1f1f1;
  color: black;
}

.next {
  background-color: #4CAF50;
  color: white;
}

.round {
  border-radius: 50%;
}
</style>
</head>
<body>

            </button>
            <a class="navbar-brand" href="editsale.php">
			
                <span id="brand-title">ADD SALES</span>
				
             </a>
			 
        </div>
		<ul class="nav navbar-nav navbar-right">
      <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Log out</a></li>
    </ul>
		    </div>
			
</nav>	

	<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		
		
		<div class="col-sm-offset-2">	
		<a href="addsale.php" class="next">&laquo; Back</a>
		</div>
		
		
		<p>&nbsp;</p>
		
	<div class="row">
	<form action="processsale.php" method="POST">
	<div style="text-align:center" class="col-sm-3 col-sm-offset-1">
			</div>
		<div class="col-sm-5">
			<input type="hidden" name="sale_id" value="<?php echo $sale_id; ?>"><br>
<<<<<<< HEAD
			
=======
			<div class="form-group">
			<center><label>Timestamp</label></center>
			<input type="date" name="timestamp" class="form-control" value="<?php echo $timestamp;?>"placeholder="Enter the timestamp" required>
			</div>
>>>>>>> b247b6e3529876e8b02ee9695d93195a07e1eea2
			<center><label>Customer name</label></center>
			
		<?php
		
			$sql = "SELECT * FROM `customer`";
			$result = mysqli_query($mysqli, $sql);
			
		?>
		<select name="customer_id" class="form-control">
			<?php
				$resultCheck = mysqli_num_rows($records);
				while ($row = mysqli_fetch_array($result)) {
			?>
				
			<option value="<?php echo $row['customer_id'];?>"><?php echo $row['lastname'];?></option>
				<?php
				}
				?>
		</select>
		<?php 
			if($update==true):
		?>
		<button type="submit" class="btn" name="update">Update</button>
		<a href="addsale.php"class="btn">back</a>
		<?php else: ?>
			<br><div class="col-sm-offset-5">	
			<button type="submit" class="btn" name="save"><span class="glyphicon glyphicon-save"></span>save</button>
			</div>
		<?php endif;?>
		</div>
		</div>
	
	</form>
	</div>
</body>
</html>