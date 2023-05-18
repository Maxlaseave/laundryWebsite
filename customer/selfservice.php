<?php
session_start();
include "../dbconn.php";

if($_SERVER['REQUEST_METHOD'] === 'POST') {

    function validate($data){
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

    $loads = $_POST['qty'];
    $serviceType = $_POST['serviceType'];
    $timeSlot = $_POST['timeSlot'];
    $bookingDate = $_POST['sdate'];
    $additionalRemarks = $_POST['remarks'];

    $sql = "INSERT INTO selfService VALUES (NULL, '$loads', '$serviceType', '$timeSlot', '$bookingDate', '$additionalRemarks')";

    $result1 = mysqli_query($conn, $sql);

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/customer.css">
    <link rel="stylesheet" href="../bootstrap/css\bootstrap.css">
</head>
<body>

<nav class="navbar fixed-top navcolor navbar-expand-sm">
	<div class="container">
		<a class="navbar-brand item" href="#" style="font-size:20px;">
			<img src="../img/pashlogo.png"  width="50" height="45">
			<strong>PashPash</strong> 
		</a>
		

		<ul class="navbar-nav ml-auto">
            <li class="nav-item item">
                <a class="nav-link" href="#">
                  Profile
                </a>
            </li>
            <li class="nav-item item">
                <a class="nav-link" href="login.php">
                  Log out
                </a>
            </li>
        </ul>
  </div>
</nav>

<nav class="navbar fixed-top navbar-expand-sm secnav"> 
<div class="container collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="home.php" style="margin-left:8px;">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">ABOUT</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="dropoff.php" >DROP-OFF</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#" style="color: #ddc03f;">SELF-SERVICE</a>
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

<form action="" method = "POST">
<div class="container text-center" style="margin-top: 150px;">
    <div class="row">

    <div class="col"> 
        <div class="input-group mb-4">
        <span class="input-group-text">No.of Loads: </span>
        <input type="number" class="form-control" name="qty" placeholder="<= 7kg per Load" required>
        </div>
    </div>

    <div class="col"> 
        <div class="input-group mb-4">
          <select class="form-select" name = "serviceType" aria-label="select service" required>
            <option selected>Service Type</option>
            <option value="1">Wash & Dry</option>
            <option value="2">Wash</option>
            <option value="3">Dry</option>
          </select>

        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="input-group mb-4">
              <select class="form-select" name = "timeSlot" aria-label="select service" required> 
                <option selected>Time</option>
                <option value="1">10:00 AM</option>
                <option value="2">11:00 AM</option>
                <option value="3">12:00 PM</option>
                <option value="4">1:00 PM</option>
                <option value="5">2:00 PM</option>
                <option value="6">3:00 PM</option>
                <option value="7">4:00 PM</option>                
              </select>
            </div>
        </div>

        <div class="col">
            <div class="input-group mb-4">
            <span class="input-group-text">Date: </span>
            <input placeholder="Select date" type="date" class="form-control" name="sdate" required>
            </div>
        </div>

        <div class="input-group mb-4">
            <span class="input-group-text">Additional Remarks: </span>
            <input type="text" class="form-control" name="remarks" placeholder="optional" >
        </div>  
    </div>
</div>



<button type="submit" name="SELFSERVICEsubmit" class="btn btn-light submit" style="padding: 5px 50px 5px 50px; 
    margin: 20px;
    background-color: #d7e6e5;
    position: absolute;
    left: 78.8%;
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);">Submit</button>

</form>

<div class="container-md" style="margin-top:50px; padding-top:10px;">
    <hr>
    <p class="smalltitle"><strong>SELF-SERVICE LAUNDRY</strong></p>
    <p class="content" style="margin-left: 5px;">Wash you clothes easily with our Self-service laundry! Simply bring your laundry, dry cleaning, and/or specialty items to any PashPash branch near you. You only need to put it in the washing machines we have and wait for 1-2 hours to have your clothes clean and dry again.<br><br> Feel free to bring your own laundry agents or you may purchase at PashPash Laundryshop. <br><br>
Maximum of 8 kilograms per cycle only. If your laundry is more than 8 kilograms and you need to increase the quantity of cycles above to indicate the number of cycles you have to use. <br><br>
Once you book an appointment, PashPash gives you a priority number and you will be informed of the slots available beforehand. Time allowance of up to 10 minutes will be given for those who come late. After 10 minutes, the slot will be given to walk-in customers.</p>

  
</div>
</div>

</body>
</html>