<?php include("connection2.php");?>
<!DOCTYPE html>
<html>
<head>
	<title>Agrideal Web</title>
	<link rel="stylesheet" type="text/css" href="style3.css">
</head>
<body>
<header id="home">
	<nav>
		<div class="logo">
			<img src="logo1.png" width="200px">
		</div>
			
		<div class="menu">
			<a href="#home">Home</a>
			<a href="#Add Crops Information">Add Crops Information</a>
			<a href="#Contact us">Contact us</a>
			<a href="logout.php">Logout</a>
		</div>
	</nav>

<div class="container">
	<div class="left">
		<img src="frontimg.png" >
	</div>
	<br>
	<br>
	<div class="right">
		<h1>Welcome to AgriDEAL</h1>
		<p>
			We are providing a better way to deal.
		</p>
	</div>
</div>

</header>
<section id="Add Crops Information">
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
<h1  style="text-align:center;">Add Crops Information:</h1>
	<div class="container">
	
	<br>
		<form action="#" method="POST" >
		  <div class="row">
			<div class="col-25">
			  <label for="Type of crop">Crop type</label>
			</div>
			<div class="col-75">
			  <input type="text" id="Type of crop" name="croptype" placeholder="Enter type of crop" required>
			</div>
		  </div>
		  <div class="row">
			<div class="col-25">
			  <label for="Name of crop">Crop Name</label>
			</div>
			<div class="col-75">
			  <input type="text" id="Name of crop" name="cropname" placeholder="Enter name of the crop" required>
			</div>
		  </div>
		  <div class="row">
			<div class="col-25">
			  <label for="quantity">Quantity</label>
			</div>
			<div class="col-75">
				<input type="number" id="quantity" name="quantity" placeholder="Enter the quantity in(Kg)" required>
			</div>
			
		  </div>
		  <div class="row">
			<div class="col-25">
			  <label for="price">Price of crop</label>
			</div>
			<div class="col-75">
			  <input type="number" name="price" placeholder="Enter price in(₹)" required >
			</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="date">Available upto</label>
				</div>
				<div class="col-75">
				   <input type="date" name="date" required>
				</div>
			</div>
			<div class="row">
			<div class="col-25">
			  <label for="Your name">Your Name</label>
			</div>
			<div class="col-75">
			  <input type="text" id="Your name" name="name" placeholder="Enter your name" required>
			</div>
		  </div>
		  <div class="row">
			<div class="col-25">
			  <label for="Your contact">Your Contact No.</label>
			</div>
			<div class="col-75">
			  <input type="phone" id="Your contact" name="contact" placeholder="Enter your contact No." required maxlength="10">
			</div>
		  </div>
			<center>
		  <div class="row" position="center">
			<input type="submit" value="Submit" name="submit" position="center">
		  </div>
			</center>
			<br>
			<br>
			<br>
			<br>
			<br>
		</form>
	  </div>
</section>


<?php
if(isset($_POST['submit']))
{
  $croptype= $_POST['croptype'];
  $cropname= $_POST['cropname'];
  $quantity= $_POST['quantity'];
  $price= $_POST['price'];
  $date= $_POST['date'];
  $name= $_POST['name'];
  $contact= $_POST['contact'];
  $sqol=" INSERT INTO `cropinput` (`croptype`, `cropname`, `quantity`, `price`, `date`,`name`,`contact`) VALUES ('$croptype', '$cropname', '$quantity', '$price', current_timestamp(), '$name','$contact' )";
  //echo"$sql";
  if($conn->query($sqol)==true){
    echo '
    <script>
    alert("Successfully Added Product");
    window.location="../crud/thirdpage.php"
    </script>
    ';
  }
  else{
    echo'
    <script>
    alert("ERROR:Cannot Add Product");
    window.location="../crud/thirdpage.php"
    </script>
    ';
  }
  $conn->close();
}
?>
<br>
<br><br><br>
<section id="Contact us">
<h2 style="text-align:center;">Contact Us</h2>
<br>
<p style="text-align:center;">
  <h2 style="text-align:center;">Email:</h2>
  <br>
  <h3 style="text-align:center;">sohamtak3148@gmail.com</h3>
  <br>
  <h3 style="text-align:center;">mayurtalewar@gmail.com</h3>
  <br>
  <h3 style="text-align:center;">sameerrajutadavi@gmail.com</h3>
  <br>
  <h3 style="text-align:center;">tapasvitaktode@gmail.com</h3>
  <br>
  <h3 style="text-align:center;">devansh.tajpuriya@gmail.com</h3>
</p>
</section>
</html>