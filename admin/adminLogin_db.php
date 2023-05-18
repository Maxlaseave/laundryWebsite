<?php 
session_start(); 
include "dbconn.php";

if (isset($_POST['email']) && isset($_POST['pass'])) {

	function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	$email = validate($_POST['email']);
	$pass = validate($_POST['pass']);

	if (empty($email)) {
		header("Location: adminLogin.php?error=User Name is required");
	    exit();
	} else if (empty($pass)) {
        header("Location: adminLogin.php?error=Password is required");
	    exit();
	} else {
		//$pass = md5($pass);
		$sql = "SELECT * FROM users WHERE email = '$email' AND password ='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            $_SESSION['email'] = $row['email'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['userId'] = $row['userId'];

            // Retrieve the role from the database
            $role = $row['role'];

            if ($role === "Admin") {
                $_SESSION['role'] = "Admin";
                header("Location: home.php");
            } else {
                $_SESSION['role'] = "Employee";
                header("Location: adminLogin.php?error=Incorrect username or password");
            }
            exit();
        } else {
            header("Location: adminLogin.php?error=Incorrect username or password");
            exit();
        }
	}
} else {
	header("Location: home.php");
	exit();
}
