<!DOCTYPE html>
<html>
<head>
	<title>Agrideal Web</title>
	<link rel="stylesheet" type="text/css" href="style.css">
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
			<a href="#Logout">Logout</a>
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
	<h1  style="text-align:center;">Add Crops Information:</h1>
	<div class="container">
		<form action="action_page.php">
		  <div class="row">
			<div class="col-25">
			  <label for="Type of crope">Crop type</label>
			</div>
			<div class="col-75">
			  <input type="text" id="Type of crope" name="Crope type" placeholder="type of crop..">
			</div>
		  </div>
		  <div class="row">
			<div class="col-25">
			  <label for="Name of crop">Crop Name</label>
			</div>
			<div class="col-75">
			  <input type="text" id="Name of crop" name="Crop Name" placeholder="Name of the crop..">
			</div>
		  </div>
		  <div class="row">
			<div class="col-25">
			  <label for="quantity">Quantity (kgs)</label>
			</div>
			<div class="col-75">
				<input type="text" id="quantity" name="Quantity" placeholder="Quantity of the crops..">
			</div>
			
		  </div>
		  <div class="row">
			<div class="col-25">
			  <label for="price">Price of crop(in Rs.)</label>
			</div>
			<div class="col-75">
			  <input type="text" name="Price of crop" placeholder="price of crop.." >
			</div>
		  </div>
		  <div class="row">
			<input type="submit" value="Submit">
		  </div>
		</form>
	  </div>
</section>

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
</p>
</section>