
<?php 
session_start(); 
include "../dbconn.php";
if(isset($_POST['update-drop-status'])){

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }   
    $dropId = $_POST['drop_id'];
    $newStatus = $_POST['status'];

    $update = "UPDATE dropOff SET status ='$newStatus' WHERE dropOffId ='$dropId'"; 
    $result = mysqli_query($conn, $update);

    if($result){
        $_SESSION['success'] = "Order Updated";
        header('Location: bookings.php');
        exit();
    } else {
        $_SESSION['status'] = "Order Not Updated";
        header('Location: bookings.php');
        exit();
    }
}


if(isset($_POST['update-self-status'])){

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }   
    $selfId = $_POST['self_id'];
    $newStatus = $_POST['status'];

    $update = "UPDATE selfService SET status ='$newStatus' WHERE selfServiceId ='$selfId '"; 
    $result = mysqli_query($conn, $update);

    if($result){
        $_SESSION['success'] = "Order Updated";
        header('Location: bookings.php');
        exit();
    } else {
        $_SESSION['status'] = "Order Not Updated";
        header('Location: bookings.php');
        exit();
    }
}

?>

