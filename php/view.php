<?php
    $unique_key = $_GET['s'];
    include('config.php');
    $sql = "SELECT data FROM data WHERE uniquekey='" . $unique_key . "';";
    $result = $db->query($sql);
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $paste_data = $row["data"];
        }
    }
    if(!$paste_data){
        $display = "Error 404! Page not found";
    }
    else{
        $display = $paste_data;
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
    <div class="data"><?php echo $display; ?></div>
</div>
</body>
</html>