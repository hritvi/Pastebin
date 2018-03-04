<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', ''); //your username
   define('DB_PASSWORD', '');//your password
   define('DB_DATABASE', 'pastebin');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
 ?>