
<?php 
session_start(); 
include "../dbconn.php";
if(isset($_POST['update-drop'])){

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }   
    $dropId = $_POST['drop_id'];
    $newStatus = $_POST['dropStatus'];

    $update = "UPDATE dropOff SET status ='$newStatus' WHERE dropOffId ='$dropId'"; 
    $result = mysqli_query($conn, $update);

    if($result){
        $_SESSION['success'] = "Order Updated";
        header('Location: orders.php');
        exit();
    } else {
        $_SESSION['status'] = "Order Not Updated";
        header('Location: orders.php');
        exit();
    }
}
?>
