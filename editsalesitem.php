<?php include('processsalesitem.php');?>


<!DOCTYPE html>
<html>
<head>
	<title>salesitem</title>
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
            <a class="navbar-brand" href="addsalesitem.php">
			
                <span id="brand-title">ADD SALES ITEM</span>
				
             </a>
			 
        </div>
		<ul class="nav navbar-nav navbar-right">
      <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Log out</a></li>
    </ul>
		    </div>
			
</nav>	

		<p>&nbsp;</p>
		
	<div class="row">
	<form action="processsalesitem.php" method="POST">
	<div style="text-align:center" class="col-sm-3 col-sm-offset-1">
			</div>
		<div class="col-sm-5">
		
		<center><label>Customer Name</label></center>
		
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
		<center><label>Description</label></center>
		<?php
	
			$sql = "SELECT * FROM `item`";
			$result = mysqli_query($mysqli, $sql);
			
		?>
		<select name="item_id" class="form-control">
			<?php
				$resultCheck = mysqli_num_rows($records);
				while ($row = mysqli_fetch_array($result)) {
			?>
				
			<option value="<?php echo $row['item_id'];?>"><?php echo $row['description'];?></option>
				<?php
				}
				?>
		</select>
		
			<input type="hidden" name="id" value="<?php echo $id; ?>">
			
			<center><label>Quantity</label>
			<input type="number" name="quantity" class="form-control" value="<?php echo $quantity;?>"placeholder="Enter the number of Quantity" required>
			<label>Price</label>
			<input type="number" name="price" class="form-control" value="<?php echo $price;?>"placeholder="Enter the number of Price" required>
			</center>
			<br>
		<?php 
			if($update==true):
		?>
		<button type="submit" class="btn" name="update">Update</button>
		<a href="salesitem.php"class="btn">back</a>
			
		<?php else: ?>
		<div class="col-sm-offset-4">
			<a href="addsalesitem.php" class="next">&laquo; Back</a>
			<button type="submit" class="btn" name="save"><span class="glyphicon glyphicon-save"></span>save</button>
			
		</div>
		<?php endif;?>
		
		</div>
		</div>
	</form>
	</div>

</body>
</html>