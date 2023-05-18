<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>User Login</title>
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
                  <h4 class="mt-1 mb-5 pb-1">LOGIN</h4>
                </div>


                <form action = "" method = "POST">
                  <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                  <?php } ?>
                <div class="row mb-4">
                    <i class="col-sm-1 bi bi-envelope-at-fill"></i>
                        <div class="col-sm-10">
                            <input type="email" name = "email" class="form-control" id="inputEmail3" placeholder = "Email">
                        </div>
                 </div>

                 <div class="row mb-5">
                    <i class="col-sm-1 bi bi-file-lock-fill"></i>
                        <div class="col-sm-10">
                            <input type="password" name = "pass" class="form-control" id="inputEmail3" placeholder = "Password">
                        </div>
                 </div>


                  <div class="text-center pt-1 mb-5 pb-1">
                    <button class="btn btn-outline-primary btn-block fa-lg mb-3" type="submit">Login</button>
                  </div>

                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">Don't have an account?</p>
                    <a href="userSignup.php">Sign Up</a>

                  </div>
                </form>

                
              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center" id = "right-box">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4">FOR FAST & AFFORDABLE <span>LAUNDRY</span></h4>
                <h3>PashPash</h3>
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
session_start();
include "../dbconn.php";

if  (isset($_POST['email']) && isset($_POST['pass'])) {
    if (isset($_POST['email']) && isset($_POST['pass'])) {
        function validate($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $email = validate($_POST['email']);
        $pass = validate($_POST['pass']);

        if (empty($email)) {
            header("Location: userLogin.php?error=User Name is required");
            exit();
        } else if (empty($pass)) {
            header("Location: userLogin.php?error=Password is required");
            exit();
        } else {
            $pass = md5($pass);
            $sql = "SELECT * FROM users WHERE email = '$email' AND password ='$pass'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) === 1) {
                $row = mysqli_fetch_assoc($result);
                if ($row['email'] === $email && $row['password'] === $pass) {
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['userId'] = $row['userId'];

                    // Retrieve role
                    $role = $row['role'];

                    if ($role === "customer") {
                        $_SESSION['role'] = "customer";
                        header("Location: home.php");
                    } else {
                        $_SESSION['role'] = "Admin";
                        header("Location: userLogin.php?error=User doesn't exist");
                    }
                    exit();
                } else {
                    header("Location: userLogin.php?error=Incorrect username or password");
                    exit();
                }
            } else {
                header("Location: userLogin.php?error=Incorrect username or password");
                exit();
            }
        }
    }
}
?>