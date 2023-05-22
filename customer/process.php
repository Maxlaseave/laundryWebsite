<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
include "../dbconn.php"; 

//process for drop off
if (isset($_POST['dropOffSubmit'])) {

    function validate($data){
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

    $loads = $_POST['qty'];
    $serviceType = $_POST['serviceType'];
    $timeSlot = $_POST['timeSlot'];
    $bookingDate = $_POST['dropDate'];
    $additionalRemarks = $_POST['remarks'];

    // Retrieve user information from session
    $userId = $_SESSION['userId'];
    $dropOffId = "D" . uniqid();

    // Insert the booking into the database
    $sql = "INSERT INTO dropOff VALUES ('$dropOffId', '$loads', '$serviceType', '$timeSlot', '$bookingDate', '$additionalRemarks', '$userId')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        ?>
            <script>
                swal({
                    title: "success",  
                    icon: "error",
                    button: "Done",
                });
            </script>
        <?php
            unset($_SESSION['status']);
        header("Location: mybookings.php");
        exit();
        
    } else {
        $_SESSION['status'] = "Schedule Not Submitted";
        $_SESSION['status_code'] = "error";
        header("Location: dropoff.php");  
        exit();
    }
}



//process for self service
if(isset($_POST['selfServiceSubmit'])) {

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

    $userId = $_SESSION['userId'];
    $selfServiceId = "S" . uniqid();

    $sql = "INSERT INTO selfService VALUES ('$selfServiceId', '$loads', '$serviceType', '$timeSlot', '$bookingDate', '$additionalRemarks', '$userId')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        // Booking successfully inserted into the database
        // You can redirect the user to a success page or perform any other necessary actions
        $_SESSION['status'] = "Schedule Submitted";
        $_SESSION['status_code'] = "success";
        header("Location: selfservice.php");
        exit();
    } else {
        // Error occurred while inserting the booking
        // You can redirect the user to an error page or display an error message
        $_SESSION['status'] = "Not Submitted";
        $_SESSION['status_code'] = "error";
        header("Location: selfservice.php");
        exit();
    }

}

//process for update/edit profile
if(isset($_POST['updateProfile'])) {

    function validate($data){
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

    $name = validate($_POST['editName']);
    $contact = validate($_POST['editContact']);
	$email = validate($_POST['editEmail']);
	$pass = validate($_POST['editPassword']);
	$re_pass = validate($_POST['editRePassword']);
    $role = validate($_POST['editRole']);

    $sql = "UPDATE users SET name ='$name', email = '$email', password = '$pass', contactNo = '$contact', role = '$role')";
    $result($conn, $sql);

    if ($result) {
        $_SESSION['status'] = "Profile Updated";
        $_SESSION['status_code'] = "success";
        header("Location: profileUpdate.php");
        
    } else {

        $_SESSION['status'] = "Profile Not Updated";
        $_SESSION['status_code'] = "error";
        header("Location: profileUpdate.php");
      
    }
}

?>

<?php

include('partials/scripts.js');

?>