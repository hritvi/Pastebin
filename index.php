<?php
	session_start();
	include 'php/session.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Pastebin</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div class="text">
	<a href="index.php" class="heading">Pastebin</a>
	<div class="wel">Welcome <?php echo $user_check; ?></div>

	<div class="tarea">
	<div class="caption">ENTER YOUR TEXT HERE:</div>
	<form action ="php/paste.php" method="post">
		<textarea rows="10" cols="50" name="data" placeholder="Enter text......"></textarea>
		<br/>
		<input type="submit"/>
	</form>
	</div>
	<div class="sign">
	<a href="php/prev.php" class="s_in">View Previous Pastes</a>
	 | 
	<a href="php/logout.php" class="s_up">Logout</a>
	</div>
</div>
</body>
</html>