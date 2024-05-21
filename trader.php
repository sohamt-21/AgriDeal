<!DOCTYPE html>
<html>
<head>
	<title>Agrideal Web</title> 
    <link rel="stylesheet" type="text/css" href="style4.css">
</head>
<body>
<header id="home">
	<nav>
		<div class="logo">
			<img src="logo1.png" width="200px">
		</div>
			
		<div class="menu">
			<a href="#home">Home</a>
			<a href="#Search for Crop">Available Crops</a>
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
			We are providing a better way to connect.
		</p>
	</div>
</div>
</header>
<section id="Search for Crop">
   <!-- <form action="" method="POST">
	   <input type="text" name="id" placeholder="enter id">
	   <br>
	   <input type="submit" name="search" value="Search id"> 
   </form>
<br>
<br> -->
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
	<center>
	<table>
		<tr>
			<th>Name Of Crop</th>
			<th>Type Of Crop</th>
			<th>Quantity of Work</th>
			<th>Price Of Crop</th>
			<th>Available Upto</th>
			<th>Name Of Farmer</th>
			<th>Contact Of Farmer</th>
		</tr>
    </centre>
<?php
$conn = mysqli_connect("localhost" , "root" , "" , "cropinput");
if($conn-> connect_error){
	die("Connection Failed". $conn->connect_error);
}
$sql="SELECT cropname,croptype,quantity,name,price,contact,date FROM cropinput";
$result = $conn-> query($sql);

if($result-> num_rows > 0){
	while ($row = $result-> fetch_assoc()){
		echo "<tr><td>" . $row["cropname"] . " </td><td>" . $row["croptype"] . " </td><td>" . $row["quantity"] . "</td><td>" . $row["price"] . "</td><td>" . $row["date"] . "</td><td>" . $row["name"] . "</td><td>" . $row["contact"];
	}
	echo "</table>";
}
else{
	echo "0 Results";
}
$conn-> close();
?>
	</table>
	<br>
	<br>
	<br>
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
</body>
</html>