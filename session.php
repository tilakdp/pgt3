<?php
  session_start();
  if(isset($_SESSION['user'])){
    echo '<div class="sessionStatus"><?php echo "logged in as : ".$_SESSION["user"]; ?></div>';
  }else {
    echo '<div class="sessionStatus">sorry you are not logged in</div>';
    sleep(3);
    header('location:login.php');
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style/sessionstyle.css">
  </head>
  <body>
    
  </body>
</html>
