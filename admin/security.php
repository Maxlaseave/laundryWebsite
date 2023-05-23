<?php
session_start();

include('../dbconn.php');

if($dbconfig) {

}
else {
    header("Location: ../dbconn.php");
}

if(!$_SESSION['email']) {
    header('Location: adminLogin.php')
}

?>