<?php
include 'config.php';
$unique_key = $_GET['id'];
$sql= "DELETE * FROM data WHERE uniquekey='$unique_key' ";
$db->close();
//header("location: prev.php");
?>