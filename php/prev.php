<?php
  session_start();
  include 'session.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Pastebin</title>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div class="text">
  <a href="../index.php" class="heading">Pastebin</a>
  <div class="wel">Welcome <?php echo $user_check; ?></div>
  <?php
      $s=" SELECT * FROM data WHERE user='$user_check' ";
      $result1 = $db->query($s);
      if ($result1->num_rows > 0) {
      // output data of each row
      while($row2 = $result1->fetch_assoc()) {
          $paste = $row2["data"];
          $unique_key = $row2["uniquekey"];
          $link="http://localhost:8000/php/view.php?s=".$unique_key;
          $display= "<a href=" .$link. ">".$link."</a>";
          $del_link="http://localhost:8000/php/delete.php?id=".$unique_key;
          if($paste==' ') continue;
  ?>
        <div class="pastes">
        <div class="data"><?php echo $paste; ?></div>
        <div>
        <span class="opt" onclick="viewlink()">View Link</span>
        | 
        <a href="<?php echo $del_link;?>" class="opt">Delete</a>
        </div>
        <div id=link><?php echo $display; ?></div>
        </div>
  <?php 
      }
    } 
    else {
      echo "0 results";
  }
  ?>
</div>
</body>
</html>
<script type="text/javascript">
  var i=0;
  function viewlink()
  {
    if (i==0 )
    {     
      document.getElementById('link').style.display = "block";
      document.getElementById('link').style.opacity = 1;         
      i=1;
    }
    else{
        document.getElementById('link').style.opacity = 0;
        document.getElementById('link').style.display="none";
        i=0;
      }      
}
</script>