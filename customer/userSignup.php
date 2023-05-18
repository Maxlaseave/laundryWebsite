

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>User Signup</title>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/userLogin.css">

    <!-- MDB -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href = "../bootstrap/css\bootstrap.css" />
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
                <h4 class="mt-1 mb-5 pb-1">SIGN UP</h4>
              </div>

                <form action = "userSignup_db.php" method = "POST">
                <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>

                <?php if (isset($_GET['success'])) { ?>
                    <p class="success"><?php echo $_GET['success']; ?></p>
                <?php } ?>

                <div class="row mb-1">
                    <i class="col-sm-1 bi bi-person-fill"></i>
                        <div class="col-sm-10">
                            <?php if (isset($_GET['name'])) { ?>
                            <input type="text" 
                                  name="name"  
                                  class="form-control" 
                                  placeholder = "Name"
                                  value="<?php echo $_GET['name']; ?>"><br>
                            <?php }else{ ?>
                                    <input type="text" 
                                           name="name" 
                                           class="form-control"
                                           placeholder="Name"><br>
                            <?php }?>      
                        </div>
                 </div>

                 <div class="row mb-1">
                 <i class="col-sm-1 bi bi-telephone-fill"></i>
                        <div class="col-sm-10">
                          <?php if (isset($_GET['contact'])) { ?>
                          <input id="no-arrow" 
                                  name="contact" 
                                  class="form-control"  
                                  type="number" 
                                  placeholder = "Contact Number"
                                  value="<?php echo $_GET['contact']; ?>"><br>
                          <?php }else{ ?>
                            <input id="no-arrow" 
                                  name="contact" 
                                  class="form-control"  
                                  type="number"
                                  placeholder = "Contact Number"><br>
                            <?php }?>
                        </div>
                 </div>

                 <div class="row mb-1">
                    <i class="col-sm-1 bi bi-envelope-at-fill"></i>
                        <div class="col-sm-10">
                        <?php if (isset($_GET['email'])) { ?>
                            <input type="email" 
                                    name="email" 
                                    class="form-control"  
                                    placeholder = "Email"
                                    value ="<?php echo $_GET['email']; ?>"><br>
                        <?php }else{ ?>   
                            <input type="email" 
                                    name="email" 
                                    class="form-control"  
                                    placeholder = "Email"><br>
                        <?php }?>       
                        
                        </div>
                 </div>

                 <div class="row mb-3">
                    <i class="col-sm-1 bi bi-file-lock-fill"></i>
                        <div class="col-sm-10">
                            <input type="password" name="password" class="form-control"  placeholder = "Password">
                        </div>
                 </div>

                 <div class="row mb-3">
                    <i class="col-sm-1 bi-file-lock2"></i>
                        <div class="col-sm-10">
                            <input type="password" name="re_password" class="form-control" placeholder = "Repeat Password">
                        </div>
                 </div>

                  <div class="text-center pt-1 mb-3 pb-1">
                    <button class="btn btn-outline-primary btn-block fa-lg mb-3" type="submit" name = "reg-btn">Register</button>
                  </div>
                  
                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">Already have an account?</p>
                    <a href="userLogin.php">Login</a>

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