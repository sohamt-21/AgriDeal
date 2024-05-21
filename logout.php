<?php

session_start();
unset($_SESSION['userdata']);
echo'<script>
    alert("Logged Out Successfully");
    
</script>
';
header("location:index.php");

?>