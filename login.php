<?php
  include('../config.php');

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();
    $username = htmlspecialchars($_POST['uname']);
    $password = htmlspecialchars($_POST['passw']);
    // $db = mysqli_connect('localhost', 'logintool', 'norg2021', 'krushika');
    $db = mysqli_connect(db_server, db_username, db_password, db_database);
    if($db){
      echo "connection successful\r\n";
      $query = "SELECT uname, grp FROM usersKrushika WHERE uname = '".$username."' and passw = '".hash('sha256', $password)."'";
      // echo "query idu : ".$query."\n";
      $result = mysqli_query($db, $query);
      $row = mysqli_fetch_assoc($result);
      if(mysqli_num_rows($result) > 0){
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
    // if(password_verify($username, '$2y$10$u5L2nJ.EfyxW0fJ/xOuH8e97gW4aICOPQgZBZswRNMnpcTSGQ7nUm') && password_verify($password, '$2y$10$8wA.H27d2tSwL0BQ3nK4YOOEj.3zd99AGm9aAvOGOIKB9wXIMs6GO')){
    //   echo "username and password match aitu!";
    //   echo "\n";
    //   $_SESSION['logged_in'] = $username;
    //   header("location:dash.php");
    // }else {
    //   echo "\nauthenticate aglilla maga!";
    // }
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
    <script type="text/javascript">
      // setInterval(function(){location.reload()}, 3000);
    </script>
  </body>
</html>
