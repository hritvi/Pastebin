<?php
session_start(); 
include('create_link.php');
$unique_key =generateKey();
if(!isset($_SESSION["name"])){
       $user="guest";
}
else{
	$user=$_SESSION["name"];
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
	$data=$_POST["data"];
	$sql ="INSERT INTO data (data, uniquekey, user) values('". $data ."','".$unique_key. "','$user');";
	if($db->query($sql)===TRUE){
		$paste_link ="http://localhost:8000/php/view.php?s=".$unique_key;
		$display= "The paste link is : <a href=" .$paste_link. ">".$paste_link."</a>";
	}
	else{
         $display= "Error: " .$sql . "<br>";
	}
}
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
	<div class="link"><?php echo $display; ?></div>
</div>
</body>
</html>