<?php
	session_start();
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
	<div class="tarea">
	<div class="caption">ENTER YOUR TEXT HERE:</div>
	<form action ="paste.php" method="post">
		<textarea rows="12" cols="50" name="data" placeholder="Enter text......"></textarea>
		<br/>
		<input type="submit" class="btn"/>
	</form>
	</div>
	<div class="sign">
	<a href="signin.php" class="s_in">Sign In</a>
	 | 
	<a href="signup.php" class="s_up">Sign Up</a>
	</div>
	<i>Signed in as Guest</i>
</div>
</body>
</html>