<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Profile</title>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/userLogin.css">

    <!-- MDB -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../bootstrap/css\bootstrap.css" />

  </head>
  <body>


 



<!-- Start your project here-->
<section class="h-100">
  <div class="container py-5 h-100 ">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10 ">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="../img/pashlogo.png"
                    style="width: 150px;" alt="logo">
                  <h4 class="mt-1 mb-5 pb-1">PROFILE</h4>
                </div>

                <div class="text-center">
                <p class="content"><?php
include "../dbconn.php";
// Start the session (if not already started)
session_start();

// Check if the user is logged in and the user ID is set in the session
if (isset($_SESSION['userId'])) {
    // User is logged in, retrieve the user ID
    $userId = $_SESSION['userId'];

    // Query the database to fetch the user's profile using the user ID
    $sql = "SELECT * FROM users WHERE userId = $userId";
    $result = mysqli_query($conn, $sql);

  
    // Check if a user record was found
    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);

        //Saves prev data to be viewed by users when editing their information for cpnvenience
        $pname = $row['name'];
        $pemail = $row['email'];
        $pcon = $row['contactNo'];

        // Display the user's profile information
        echo "Name: " . $row['name'];?></p>

        <p class="col content">
        <?php
        echo "Email: " . $row['email'];
        ?>

        </p>
        <p class="col content">
        <?php
        echo "Contact Number: " . $row['contactNo'] ;
        // ... Display other profile information as needed
    } else {
        echo "User not found.";
    }
} else {
    // User is not logged in, handle the case accordingly (redirect to login page, show an error message, etc.)
    // ...
}
?>
        </p>
        

              </div>

                
              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center" id = "right-box">
              <div class="text-white px-3 py-4 p-md-5 mx-md-5">
              <div class="text-center">
                  <h5 class="mt-5 mb-4 pb-1">UPDATE INFORMATION</h5>
                </div>
                
                <form method="post" action=" ">
                <div class="col">
                <div class="input-group mb-4">
                <span class="input-group-text">Name: </span>
                <input type="text" class="form-control" name="name" placeholder="Enter name" value="<?php echo $pname;?>">
                </div>

                <div class="col">
                <div class="input-group mb-4">
                <span class="input-group-text">Email: </span>
                <input type="email" class="form-control" name="email" placeholder="Enter email" value="<?php echo $pemail;?>"><br>
                </div>


                <div class="col">
                <div class="input-group mb-4">
                <span class="input-group-text">Password: </span>
                <input type="text"class="form-control" name="password" placeholder="Enter password"><br>
                </div>

                <div class="col">
                <div class="input-group mb-1">
                <span class="input-group-text">Contact No: </span>
                <input type="number" class="form-control" name="contactNo" placeholder="+63" value="<?php echo $pcon;?>"><br>
                </div>

                <div class="text-center pt-1 mb-3 pb-1">
                    <button class="btn btn-success btn-block fa-lg mb-3 mt-3" type="submit" name="submit">Save</button>
                    <a href="home.php" class ="btn btn-danger">Go Back</a>
                  </div>
                  

                </form>
              </div>

            </div>
   
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



    <!-- MDB -->
    <script src="bootstrap\js\bootstrap.js"></script>


  </body>
</html>

<?php
include "../dbconn.php";

//go back to home.php
if(isset($POST['close'])){

header('Location: home.php');

}

// Updates info 
if(isset($_POST['submit'])){
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $contact = $_POST['contactNo'];

    $update = "UPDATE users SET name = '".$name."', email = '".$email."', password = '".$pass."',
                contactNo = '".$contact."' WHERE userId =".$userId;
     

     $result = mysqli_query($conn, $update);
     
     if($result){
            echo "Data Successfully updated!";
     }else{
            echo "Failed in updating data!".mysqli_error($conn);
     }

    //UPDATE students SET column1 = 'value1', column2 = 'value2' WHERE id = id
}
?>

