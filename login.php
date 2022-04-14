<?php
  include('../config.php');

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();
    $username = htmlspecialchars($_POST['uname']);
    $password = htmlspecialchars($_POST['passw']);
    $db = mysqli_connect(db_server, db_username, db_password, db_database);
    if($db){
      echo "connection successful\r\n";
      $query = "SELECT uname, grp FROM usersKrushika WHERE uname = '".$username."' and passw = '".hash('sha256', $password)."'";
      $result = mysqli_query($db, $query);
      $row = mysqli_fetch_assoc($result);
      if(mysqli_num_rows($result) > 0 && $row["uname"] == $username){
        $_SESSION['user'] = $row["uname"];
        $_SESSION['userCat'] = $row["grp"];
        echo "the user identified as : ".$row["uname"];
        header('location:dash.php');
      }else{
        echo "enu result barlilla";
      }
    }else{
      echo "connection failed because : ".mysqli_connect_error();
    }
  }
?>

<html lang="\" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PG trial one</title>
    <link rel="stylesheet" href="style/loginstyle.css">
  </head>
  <body>
    <div id="bg">
    </div>
    <div id="card">
      <form id="form" action="login.php" method="POST">
        <input type="text" name="uname" id="uname" placeholder="username" class="formElements">
        <br>
        <input type="password" name="passw" id="passw" placeholder="password" class="formElements">
        <br>
        <input type="submit" name="submit" value="submit" id="submit" class="formElements">
      </form>
    </div>
  </body>
</html>
