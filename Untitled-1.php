<?php include("connection.php");?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style2.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <title>Registration details</title>
<body>

	<div id="google_translate_element"></div>
	
	<script type="text/javascript">
		function googleTranslateElementInit() 
    {
			new google.translate.TranslateElement({pageLanguage: 'en',layout: google.translate.TranslateElement.InlineLayout.SIMPLE,} ,'google_translate_element');
		}
	</script>
	
	<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
	
</html>

  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action="#" method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter your name"  name="fn" required>
            </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" placeholder="Enter your email" name="email" required>
          </div>
          <div class="input-box">
            <span class="details">Age</span>
            <input type="phone" placeholder="Enter your age" name="age" required >
        </div>
        <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="phone" placeholder="Enter your 10 digit mobile number" name="mob" required maxlength="10">
        </div>
        <div class="input-box">
            <span class="details">Address</span>
            <input type="text" placeholder="Enter your address" name="address" required>
        </div>
        <div class="input-box">
            <span class="details">Pincode</span>
            <input type="phone" placeholder="Enter pincode" name="pin" required maxlength="6">
          </div>
            <div class="input-box">
              <span class="details">Password</span>
              <input type="text" placeholder="Enter your password" name="password" required>
            </div>
            <div class="input-box">
                <span class="details">Date Of Registration</span>
                <input type="date" name="date" required>
              </div>
          </div>
            <div class="gender-details">
                <input type="radio" name="gender" value="Male" id="dot-1">
                <input type="radio" name="gender" value="Female" id="dot-2">
                <input type="radio" name="gender" value="Others" id="dot-3">
                <span class="gender-title">Gender</span>
                <div class="category">
                  <label for="dot-1">
                  <span class="dot one"></span>
                  <span class="gender">Male</span>
                </label>
                <label for="dot-2">
                  <span class="dot two"></span>
                  <span class="gender">Female</span>
                </label>
                <label for="dot-3">
                  <span class="dot three"></span>
                  <span class="gender">Others</span>
                </label>
                </div> 
                <div class="role-details">
                  <input type="radio" name="r1" value="Farmer" id="dot-4">
                  <input type="radio" name="r1" value="Trader" id="dot-5">
                  <span class="role-title">Register as</span>
                  <div class="category">
                    <label for="dot-4">
                    <span class="dot four"></span>
                    <span class="role">Farmer</span>
                  </label>
                  <label for="dot-5">
                    <span class="dot five"></span>
                    <span class="role">Trader</span>
                  </label>
                  </div> 
           <div class="button">
              <input type="submit" value="Register" name="register">
            </div>
            <div class="button">
                <input type="reset" value="Reset" name="reset">
              </div>
             
           </div>
      </form>
    </div>
  </div>
  
</body>
</html>
<?php
if(isset($_POST['register']))
{
  $fname= $_POST['fn'];
  $mail= $_POST['email'];
  $age= $_POST['age'];
  $mobile= $_POST['mob'];
  $add= $_POST['address'];
  $pin= $_POST['pin'];
  $pass= $_POST['password'];
  $date= $_POST['date'];
  $gender= $_POST['gender'];
  $role1= $_POST['r1'];
  $sql="INSERT INTO `formregistration` (`name`, `email`, `age`, `mobile`, `address`, `pincode`, `password`, `date`, `gender`, `role`) VALUES ('$fname', '$mail', '$age', '$mobile', '$add', '$pin', '$pass', current_timestamp(), '$gender', '$role1')";
  if($conn->query($sql)==true){
    echo '
    <script>
    alert("Successfully Registered");
    window.location="../crud/index.php"
    </script>
    ';
  }
  else{
    echo'
    <script>
    alert("ERROR: $sql <br> $conn->error");
    window.location="../crud/Untitled-1.php"
    </script>
    ';
  }
  $conn->close();
}
?>