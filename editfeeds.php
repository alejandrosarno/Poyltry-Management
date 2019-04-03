<?php include('processfeeds.php');?>


<!DOCTYPE html>
<html>
<head>
	<title>Item</title>
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
            <a class="navbar-brand" href="addfeeds.php">
			
                <span id="brand-title">ADD FEEDS</span>
				
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
	<form action="processfeeds.php" method="POST">
	<div style="text-align:center" class="col-sm-3 col-sm-offset-1">
			</div>
		<div class="col-sm-5">
			<input type="hidden" name="id" value="<?php echo $id; ?>">
			<center><label>Flocks id</label></center>
		
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
			<div class="form-group">
			<center><label>Types of feeds</label></center>
			<select name="types" class="form-control" required>
			<option>Choose...</option>
			<option value="Chick Starter">Chick Starter</option>
			<option value="Grower Feed">Grower Feed</option>
			<option value="Layer Feed">Layer Feed</option>
			<option value="Flock Raiser">Flock Raiser</option>
			<option value="Broiler Feed">Broiler Feed</option>
			<option value="Game Bird Feed">Game Bird Feed</option>
			<option value="Fermented Feed">Fermented Feed</option>
			<option value="Cracked Corn">Cracked Corn</option>
			</select>
			</div>
			<div class="form-group">
			<center><label>Quality</label></center>
			<input type="number" name="quality" class="form-control" value="<?php echo $quality;?>"placeholder="Enter the number of quality" required>
			</div>
			<div class="form-group">
			<center><label>Unit</label></center>
<<<<<<< HEAD
			<input type="type" name="unit" class="form-control" value="<?php echo $unit;?>"placeholder="Enter the number of Unit" required>
=======
			<input type="number" name="unit" class="form-control" value="<?php echo $unit;?>"placeholder="Enter the number of Unit" required>
			</div>
			<div class="form-group">
			<center><label>Timestamp</label></center>
			<center><input type="date" name="timestamp" class="form-control" value="<?php echo $timestamp;?>"placeholder="Enter the timestamp" required></center>
>>>>>>> b247b6e3529876e8b02ee9695d93195a07e1eea2
			</div>
			<div class="form-group">
			<center><label>Price</center>
			<input type="number" name="price" class="form-control" value="<?php echo $price;?>"placeholder="Enter the number of Price" required>
			</div>
		<?php 
			if($update==true):
		?>
		<button type="submit" class="btn" name="update">Update</button>
		<a href="addfeeds.php"class="btn">back</a>
		<?php else: ?>
			<div class="col-sm-offset-4">
			<a href="addfeeds.php" class="next">&laquo; Back</a>
			<button type="submit" class="btn" name="save"><span class="glyphicon glyphicon-save">save</button>
		</div>
		<?php endif;?>
		</div>
		</div>
	</form>
	
	</div>
	
	
</body>
</html>