<?php include('processeggs.php');?>


<!DOCTYPE html>
<html>
<head>
	<title>Medication</title>
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
            <a class="navbar-brand" href="editeggs.php">
			
                <span id="brand-title">ADD EGGS</span>
				
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
		
	<div class="row">
	<form action="processeggs.php" method="POST">
	<div style="text-align:center" class="col-sm-3 col-sm-offset-1">
			</div>
		<div class="col-sm-5">
		<center><label>Flocks Name</label></center>
		<?php
		
			$sql = "SELECT * FROM `flocks`";
			$result = mysqli_query($mysqli, $sql);
			
		?>
		<select name="flocksid" class="form-control">
			<?php
				$resultCheck = mysqli_num_rows($records);
				while ($row = mysqli_fetch_array($result)) {
			?>
				
			<option value="<?php echo $row['flocksid'];?>"><?php echo $row['breed'];?></option>
				<?php
				}
				?>	
		</select>
			<input type="hidden" name="id" value="<?php echo $id; ?>">
			<center><label>Type Date</label>
			<input type="date" name="timestamp" class="form-control" value="<?php echo $timestamp;?>"placeholder="Enter the timestamp" required>
			<label>Small Egss</label>
			<input type="number" name="smalleggs" class="form-control" value="<?php echo $smalleggs;?>"placeholder="Small eggs" required>
			<label>Medium Egss</label>
			<input type="number" name="mediumeggs" class="form-control" value="<?php echo $mediumeggs;?>"placeholder="mediumeggs" required>
			<label>Large Egss</label>
			<input type="number" name="largeeggs" class="form-control" value="<?php echo $largeeggs;?>"placeholder="largeeggs" required>
			<label>Spoiled Eggs</label>
			<input type="number" name="spoiledeggs" class="form-control" value="<?php echo $spoiledeggs;?>"placeholder="spoiledeggs" required>
			<label>Broken Egss</label>
			<input type="number" name="brokeneggs" class="form-control" value="<?php echo $brokeneggs;?>"placeholder="brokeneggs" required>
		</center>
		<br>
		<?php 
			if($update==true):
		?>
		<button type="submit" class="btn" name="update">Update</button>
		<a href="addegss.php"class="btn">back</a>
		<?php else: ?>
						<div class="col-sm-offset-4">	
						<a href="addeggs.php" class="next">&laquo; Back</a>
			<button type="submit" class="btn" name="save"><span class="glyphicon glyphicon-save">save</button> 
			
			</div>
		<?php endif;?>
		</div>
		</div>
	</form>
	
	
</body>
</html>