<?php
   session_start();
	include ('config.php');
	if($_SERVER["REQUEST_METHOD"] == "POST") {
      $username = mysqli_real_escape_string($db,$_POST['usr']);
      $password = mysqli_real_escape_string($db,$_POST['pwd']); 
      
      $sql = "SELECT * FROM userinfo WHERE username = '$username' and password = '$password'";
      $result = mysqli_query($db,$sql);
      $count = mysqli_num_rows($result);
    
      if($count == 1) {
         $_SESSION["name"]=$username;
         header("location: ../index.php");
         $error="";
      }else {
         $error="<br> Your Login Name or Password is invalid.Try Again";
      }
   }
?>