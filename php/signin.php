<?php
	include ('login.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Pastebin</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div class="text">
	<nav>
		<a href="../index.php" class="heading">Pastebin</a>
	</nav>
<form action="" method="post" class="form">
      <input type=text placeholder="Enter user name" name=usr required><br>
	  <input type=password placeholder="Enter password" name=pwd class="form-control" required><br>
	  <input type=submit value="Sign In">
    <span class="error"><?php echo $error; ?></span>
</form>
<a href="signup.php" class="sign s_up">Or click here to Sign Up now</a>
</div>
</body>
</html>