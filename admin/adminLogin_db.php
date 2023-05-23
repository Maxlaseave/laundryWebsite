<?php 
session_start(); 
include "../dbconn.php";

if (isset($_POST['adminLogin'])) {
	function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	$email = validate($_POST['email']);
	$password = validate($_POST['password']);

	if (empty($email)) {
		header("Location: adminLogin.php?error=User Name is required");
	    exit();
	} else if (empty($password)) {
        header("Location: adminLogin.php?error=Password is required");
	    exit();
	} else {
		
		$password = md5($password);
		$sql = "SELECT * FROM users WHERE email = '$email' AND password ='$password'";

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
                header("Location: dashboard.php");
            } else {
                $_SESSION['role'] = "Employee";
                header("Location: adminLogin.php?error=Incorrect username or password");
            }
            
        } else {
            header("Location: adminLogin.php?error=Incorrect username or password");
           
        }
	}
} else {
	header("Location: dashboard.php");
	
}

?>