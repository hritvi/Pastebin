<?php
    include 'config.php';
    session_start();  
    $user_check = $_SESSION["name"]; 
    $ses_sql = mysqli_query($db,"SELECT username FROM userinfo where user = '$user_check' ");
    $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
    $login_session = $row['username'];
    if(!isset($_SESSION["name"])){
       header("location:http://localhost:8000/php/home.php");
    }
?>