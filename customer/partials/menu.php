
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/customer.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
</head>
<body>

<div class="container">
  <nav class="navbar fixed-top navcolor navbar-expand-sm">
    <div class="container">
      <a class="navbar-brand item" href="#" style="font-size:20px;">
        <img src="../img/pashlogo.png"  width="50" height="45">
        <strong>PashPash</strong> 
      </a>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item item">
          <a class="nav-link" href="profile.php">
            Profile
          </a>
        </li>
        <li class="nav-item item">
          <a class="nav-link" href="userLogout.php">
            Log out
          </a>
        </li>
      </ul>
    </div>
  </nav>

  <nav class="navbar fixed-top navbar-expand-sm secnav mb-1"> 
    <div class="container collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="home.php" style="margin-left:8px;">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">ABOUT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="dropoff.php">DROP-OFF</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="selfservice.php">SELF-SERVICE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="mybookings.php">MY BOOKINGS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="orderhistory.php">ORDER HISTORY</a>
        </li>
      </ul>
    </div>
  </nav>
</div>



<?php
include('scripts.php');
?>

</body>
</html>