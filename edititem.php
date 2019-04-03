<?php include('processitem.php');?>


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
     <br>

			
            </button>
            <a class="navbar-brand" href="edititem.php">
			
                <span id="brand-title">ADD ITEM</span>
				
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
		<a href="additem.php" class="next">&laquo; Back</a>
		</div>
		
		
	<div class="row">
	<form action="processitem.php" method="POST">
	<div style="text-align:center" class="col-sm-3 col-sm-offset-1">
			</div>
		<div class="col-sm-5">
			<input type="hidden" name="item_id" value="<?php echo $item_id; ?>">
			<div class="form-group">
			<center><label>Description</center>
			<br><input type="text" name="description" class="form-control" value="<?php echo $description;?>"placeholder="Enter the Description" required>
			</div>
			
			<div class="form-group">
			<center><label>Unit</center>
			<br><input type="type" name="unit" class="form-control" value="<?php echo $unit;?>"placeholder="Enter the unit" required>
			</div>
			<div class="form-group">
			<center><label>Price</center>
			<br><input type="number" name="price" class="form-control" value="<?php echo $price;?>"placeholder="Enter the price" required>
			</div>
		
		<?php 
			if($update==true):
		?>
		<button type="submit" class="btn" name="update">Update</button>
		<a href="additem.php"class="btn">back</a>
		<?php else: ?>
		<div class="col-sm-offset-5">	
			<button type="submit" class="btn" name="save"><span class="glyphicon glyphicon-save"></span>save</button>
		</div>
		<?php endif;?>
		</div>
		</div>
	</form>
	</div>


</body>
</html>