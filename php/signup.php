<?php
	session_start();
	include 'config.php';
	function test_input($data) {
    	$data = trim($data);
    	$data = stripslashes($data);
    	$data = htmlspecialchars($data);
    	return $data;
	}
	$fname=test_input($_POST["fname"]);
	$lname=test_input($_POST["lname"]);
	$user =test_input($_POST["username"]);
	$email=test_input($_POST["email"]);
	$pass =test_input($_POST["password"]);
	$sql="INSERT INTO userinfo(username,fname,lname,emailid,password) VALUES ('$fname','$lname','$user','$email','$pass')";
	if (mysqli_query($db, $sql)) {
    	$_SESSION["name"] = $user;
    	header("location:../index.php");
	} 
	else {
    $error="There is some problem in data. \n This may be due to incorrect enrollment number or you may have already registered. ";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>SignUp-Pastebin</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div class="text">
	<nav>
		<a href="../index.php" class="heading">Pastebin</a>
	</nav>
	<form action="" method="post" class="form">
		<input type="text" name="fname" placeholder="Enter First Name" size=40 required><br>
		<input type="text" name="lname" placeholder="Enter Last Name" size=40 required><br>
		<input type="text" name="username" placeholder="Enter a username" size=40 required><br>
		<input type="email" name="email" placeholder="Enter you email-id" size=40 required><br>
		<input type="password" name="password" placeholder="Enter password" size=40 required><br>
		<input type="submit" />
	</form>
	<span class="sign">Already Registered? <a href="signin.php" class="s_up">Click here to Sign In now</a></span>
</div>
</body>
</html>