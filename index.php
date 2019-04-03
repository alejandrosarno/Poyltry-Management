<?php include('server.php'); 

   if (empty($_SESSION['username'])){
	   header('location: login.php');
   }
   
  
?>  
<!DOCTYPE html>
<head>
	<title>Register</title>
	<link href="bootstrap-3.3.7/css/bootstrap.css" rel="stylesheet">
   
        <script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>
	
</head>

<body>
		<div class="sidenav">
			<a href="home.php" class="btn"><?php if(isset($_SESSION["username"])): ?>
		     <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
		 <?php endif ?> </a>
			<hr>
			<button class="dropdown-btn">Item 
			
			</button>
			  <div class="dropdown-container">
				<a href="additem.php">Add Item</a>
				<a href="#">Link 2</a>
				<a href="#">Link 3</a>
			  </div>
		
			<button class="dropdown-btn">Flocks
			
			</button>
			  <div class="dropdown-container">
<<<<<<< HEAD
				<a href="add.php">Add</a>
				<a href="#">Link 2</a>
=======
				<a href="addflocks.php">Add Flocks</a>
				<a href="editflocks.php">Edit Flocks</a>
>>>>>>> b247b6e3529876e8b02ee9695d93195a07e1eea2
				<a href="#">Link 3</a>
			  </div>
			<button class="dropdown-btn">Sales
			
			</button>
			  <div class="dropdown-container">
				<a href="addsale.php">Add Sale</a>
				<a href="#">Link 2</a>
				<a href="#">Link 3</a>
			  </div>
			
			<button class="dropdown-btn">Feeds 
			
			</button>
			  <div class="dropdown-container">
				<a href="addfeeds.php">Add Feeds</a>
				<a href="#">Link 2</a>
				<a href="#">Link 3</a>
			  </div>
			
			<button class="dropdown-btn">Customer
			
			</button>
			  <div class="dropdown-container">
				<a href="addcustomer.php">Add Customer</a>
				<a href="#">Link 2</a>
				<a href="#">Link 3</a>
			  </div>
			
			<button class="dropdown-btn">Medication 
			
			</button>
			  <div class="dropdown-container">
				<a href="addmedication.php">Add Medication</a>
				<a href="#">Link 2</a>
				<a href="#">Link 3</a>
			  </div>
			
						<button class="dropdown-btn">Eggs
			
			</button>
			  <div class="dropdown-container">
				<a href="addeggs.php">Add Eggs</a>
				<a href="#">Link 2</a>
				<a href="#">Link 3</a>
			  </div>
			  			<button class="dropdown-btn">Sales Item 
			
			</button>
			  <div class="dropdown-container">
				<a href="addsalesitem.php">Add Salesitem</a>
				<a href="#">Link 2</a>
				<a href="#">Link 3</a>
						<hr>
					</div>
			 <a href="reports.php">Reports
			 <a href="index.php?logout='1'">Logout<span class="glyphicon glyphicon-log-out"></span></a>
		</div>
<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>

</body>
</html>