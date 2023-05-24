<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Employee Login</title>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/userLogin.css">

    <!-- MDB -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../bootstrap/css\bootstrap.css" />

  </head>

<body>
<section class="h-100 ">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
            <div class="mb-md-5 mt-md-4 pb-5">

              <form action ="employeeLogin_db.php" method = "POST">

                <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>
                
                <div class="text-center">
                  <img src="../img/pashlogo.png"
                    style="width: 80px;" alt="logo">
                  <h4 class="mt-1 mb-5 pb-1">EMPLOYEE LOGIN</h4>
                </div>
                <p class="text-white-50 mb-5">Please enter your login and password!</p>

                <div class="form-outline form-white mb-4">
                  <input type="email"  name = "email" class="form-control form-control-lg" />
                  <label class="form-label">Email</label>
                </div>

                <div class="form-outline form-white mb-4">
                  <input type="password" name="password" class="form-control form-control-lg" />
                  <label class="form-label">Password</label>
                </div>

                <button class="btn btn-outline-light btn-lg px-5" type="submit" name = "empLogin">Login</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</body>
</html>