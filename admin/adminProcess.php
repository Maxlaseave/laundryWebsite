<?php 
session_start(); 
include "../dbconn.php";
//add admin

if(isset($_POST['reg-admin'])){

	function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}	

	$name = $_POST['name'];
	$contact = $_POST['contact'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$re_password = $_POST['re_password'];
	$role = "Admin";

	if($password === $re_password) {

		$password = md5($password);

		$sql = "INSERT INTO users VALUES (NULL, '$name','$email','$password','$contact', '$role')";
		$result = mysqli_query($conn, $sql);

		if($result) {
			echo "Saved";
			$_SESSION['success'] = "Admin Profile Added";
			header('Location: admins.php?=Admin Profile Added'); //change to move to a different modal
			
		}
		else {
			$_SESSION['status'] = "Admin Profile Not Added";
			header('Location: admins.php?error=Admin Profile Not Added');
		}	
	}
	else {
		$_SESSION['status'] = "Passwords Do Not Match";
		echo "<script>
            const modal = new bootstrap.Modal(document.getElementById('exampleModal'));
            modal.show();
          </script>";
		header('Location: admins.php');
	}
}


if(isset($_POST['update-btn'])){

	function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}	
	$userId = $_POST['edit_id'];
	$newName = $_POST['editName'];
	$newEmail = $_POST['editEmail'];
	$newContact = $_POST['editContact'];
	$newPass = $_POST['editPass'];

	$newPass = md5($newPass);
	$update = "UPDATE users SET name ='$newName', email ='$newEmail', contactNo='$newContact', password='$newPass' WHERE userId='$userId'"; 
	$result = mysqli_query($conn, $update);

	if($result){
		$_SESSION['success'] = "Admin Profile Updated";
		header('Location: admins.php');

	}
	else {

		$_SESSION['status'] = "Admin Profile Not Updated";
		header('Location: admins.php');
	}
}

if(isset($_POST['delete-btn'])) {

	$userId = $_POST['delete_id'];

	$delete = "DELETE FROM users WHERE userId='$userId'";
	$result = mysqli_query($conn, $delete);

	if($result) {
		$_SESSION['success'] = "Admin Profile Successfully Deleted";
		header('Location: admins.php');
	}
	else {
		$_SESSION['status'] = "Admin Profile Not Deleted";
		header('Location: admins.php');
	}
	
}


if(isset($_POST['reg-employee'])){

	function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}	

	$name = $_POST['name'];
	$contact = $_POST['contact'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$re_password = $_POST['re_password'];
	$role = "Employee";

	if($password === $re_password) {

		$password = md5($password);

		$sql = "INSERT INTO users VALUES (NULL, '$name','$email','$password','$contact', '$role')";
		$result = mysqli_query($conn, $sql);

		if($result) {
			echo "Saved";
			$_SESSION['success'] = "Employee Profile Added";
			header('Location: employees.php'); 
			
		}
		else {
			$_SESSION['status'] = "Employee Profile Not Added";
			header('Location: employees.php');
		}	
	}
	else {
		$_SESSION['status'] = "Passwords Do Not Match";
		echo "<script>
            const modal = new bootstrap.Modal(document.getElementById('exampleModal'));
            modal.show();
          </script>";
		header('Location:  employees.php');
	}
}


if(isset($_POST['update-btn-emp'])){

	function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}	
	$userId = $_POST['edit_id'];
	$newName = $_POST['editName'];
	$newEmail = $_POST['editEmail'];
	$newContact = $_POST['editContact'];
	$newPass = $_POST['editPass'];

	$newPass = md5($newPass);
	$update = "UPDATE users SET name ='$newName', email ='$newEmail', contactNo='$newContact', password='$newPass' WHERE userId='$userId'"; 
	$result = mysqli_query($conn, $update);

	if($result){
		$_SESSION['success'] = "Employee Profile Updated";
		header('Location: employees.php');

	}
	else {

		$_SESSION['status'] = "Employee Profile Not Updated";
		header('Location: employees.php');
	}
}


if(isset($_POST['delete-btn-emp'])) {

	$userId = $_POST['delete_id'];

	$delete = "DELETE FROM users WHERE userId='$userId'";
	$result = mysqli_query($conn, $delete);

	if($result) {
		$_SESSION['success'] = "Employee Profile Successfully Deleted";
		header('Location: employees.php');
	}
	else {
		$_SESSION['status'] = "Employee Profile Not Deleted";
		header('Location: employees.php');
	}
	
}
?>

