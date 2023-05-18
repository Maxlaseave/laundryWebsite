<?php 
session_start(); 
include "dbconn.php";

if (isset($_POST['name']) && isset($_POST['contact'])
    && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['re_password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

    $name = validate($_POST['name']);
    $contact = validate($_POST['contact']);
	$email = validate($_POST['email']);
	$pass = validate($_POST['password']);
	$re_pass = validate($_POST['re_password']);
    $role = 'customer';

	$user_data = 'email='. $email. '&name='. $name;


	if (empty($name)) {
		header("Location: userSignup.php?error=Name is required&$user_data");
	    exit();
    } else if(empty($contact)) {
        header("Location: userSignup.php?error=Contact Number is required&$user_data");
	    exit();
	
	}else if(empty($email)){
        header("Location: userSignup.php?error=Email is required&$user_data");
	    exit();
	}
	else if(empty($pass)){
        header("Location: userSignup.php?error=Password is required&$user_data");
	    exit();
	}

	else if(empty($re_pass)){
        header("Location: userSignup.php?error=Name is required&$user_data");
	    exit();
	}

	else if($pass !== $re_pass){
        header("Location: userSignup.php?error=The confirmation password  does not match&$user_data");
	    exit();
	}

	else{

		// hashing the password
        $pass = md5($pass);

	    $sql = "SELECT * FROM users WHERE email='$email' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: userSignup.php?error=The username/email is taken try another&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO users VALUES(NULL, '$name','$email','$pass','$contact', '$role')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: userSignup.php?success=Your account has been created successfully");
	         exit();
           }else {
	           	header("Location: userSignup.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}

} else{
	header("Location: userSignup.php");
	exit();
}