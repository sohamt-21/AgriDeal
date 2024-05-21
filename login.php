<?php

$servername="localhost";
$username="root";
$password="";
$dbname="formregistration";
session_start();


$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
    die("connection failed".mysqli_connect_error()); //echo "connection ok";
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
  $email=$_POST['email'];
  $password=$_POST['password'];
  $sql="select * from formregistration where email='".$email."' AND password='".$password."'";
  $result=mysqli_query($conn,$sql);
  $row=mysqli_fetch_array($result);

  if($row["role"]=="Farmer")
  {

    echo'
    <script>
    alert("Login Successful");
    window.location="../crud/thirdpage.php"
    </script>
    ';
   
  }
  elseif($row["role"]=="Trader")
  {
    echo'
    <script>
    alert("Login Successful");
    window.location="../crud/trader.php"
    </script>
    ';
    
  }
  else{
    
    echo'
    <script>
    alert("Invalid Credentials");
    window.location="../crud/index.php"
    </script>
    ';
  }
}
?>