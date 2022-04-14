<?php
  include('session.php');
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>nPG Dashboard</title>
    <link rel="stylesheet" href="style/dashstyle.css">
  </head>
  <body>
    <div class="gridContainer">
      <div class="grid" id="one" onlick="javascript:location.href=addguest.php">
        <img src="img/add-user.png" alt="">
        <p>Add Guest</p>
      </div>
      <div class="grid" id="two">
        <img src="img/bed.png" alt="">
        <p>Allot Bed</p>
      </div>
      <div class="grid" id="three">
        <img src="img/travel-luggage.png" alt="">
        <p>Vacation</p>
      </div>
      <div class="grid" id="four">
        <img src="img/rupee.png" alt="">
        <p>Payments</p>
      </div>
      <div class="grid" id="five">
        <img src="img/due-date.png" alt="">
        <p>Dues</p>
      </div>
    </div>
  </body>
</html>
