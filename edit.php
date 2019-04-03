<?php include('process.php');?>


<!DOCTYPE html>
<html>
<head>
	<title>Flocks</title>
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

	<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		
		<div class="col-sm-offset-2">	
		<a href="add.php" class="next">&laquo; Back</a>
		</div>
		<p>&nbsp;</p>
		
		
	<div class="row">
	<form action="process.php" method="POST">
	<div style="text-align:center" class="col-sm-3 col-sm-offset-1">
			</div>
		<div class="col-sm-5">
			<input type="hidden" name="id" value="<?php echo $id; ?>">
			<div class="form-group">
			<center><label>Breed</center>
			<select name="breed" class="form-control" required>
			<option>Choose...</option>
			<option value="Layer">Layer</option>
			<option value="Broilers">Broilers</option>
			<option value="Hybrid">Hybrid</option>
			<option value="Rhode Island Red">Rhode Island Red</option>
			<option value="Leghorn">Leghorn</option>
			<option value=" Buff Orpington"> Buff Orpington</option>
			</select>
			</div>
			<div class="form-group">
			<center><label>Rooster</center>
			<input type="number" name="rooster" class="form-control" value="<?php echo $rooster;?>"placeholder="Enter the number of rooster" required>
			</div>
			<div class="form-group">
			<center><label>Hen</center>
			<input type="number" name="hen" class="form-control" value="<?php echo $hen;?>"placeholder="Enter the number of hen" required>
			</div>
		<?php 
			if($update==true):
		?>
		<button type="submit" class="btn" name="update">Update</button>
		<a href="add.php"class="btn">back</a>
		<?php else: ?>
		<div class="col-sm-offset-5">
			<button type="submit" class="btn" name="save"><span class="glyphicon glyphicon-save">save</button>
		</div>
		<?php endif;?>
		</div>
		</div>
	</form>
	</div>
</body>
</html>