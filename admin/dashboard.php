<?php include('partials/adminDashboard.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="../css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
  </head>
<section class="home-section">

    <div class="home-content">
      <!--logo-->
      <img src="../img/pashlogo.png"  width="50" height="45">
      <span class="text">Dashboard</span>
    </div>

    <div class="container-fluid px-4 mt-4">
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card shadow mb-4">
                                    <div class="card-body"><h6 class="modal-title fs-5" id="exampleModalLabel">Drop Off</h6>
                                    </div>
                                    <div class="card-footer d-flex float-right justify-content-between">
                                    
                                    <?php
                                  
                                    $dropoff = "SELECT * FROM dropoff";
                                    $qdropoff = mysqli_query($conn, $dropoff);
          
                                    if ($qdropoffTotal = mysqli_num_rows($qdropoff)) echo "<h4>".$qdropoffTotal."</h4>";
                                    ?>
                                      
                                    <a class="small stretched-link mt-2" href="orders.php">View Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card shadow mb-4">
                                    <div class="card-body"><h6 class="modal-title fs-5" id="exampleModalLabel">Self-service</h6>
                                    </div>
                                    <div class="card-footer d-flex float-right justify-content-between">

                                    <?php
                                  
                                    $ss = "SELECT * FROM selfservice";
                                    $qss = mysqli_query($conn, $ss);
          
                                    if ($qssTotal = mysqli_num_rows($qss)) echo "<h4>".$qssTotal."</h4>";
                                    ?>
                                      
                                    <a class="small stretched-link mt-2" href="orders.php">View Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card shadow mb-4">
                                    <div class="card-body"><h6 class="modal-title fs-5" id="exampleModalLabel">Admins</h6>
                                    </div>
                                    <div class="card-footer d-flex float-right justify-content-between">
                                    <?php
                                  
                                  $adrole = 'Admin';
                                  $ad = "SELECT * FROM users WHERE role ='$adrole'";
                                  $qad = mysqli_query($conn, $ad);
          
                                    if ($qadTotal = mysqli_num_rows($qdropoff)) echo "<h4>".$qadTotal."</h4>";
                                    ?>
                                      
                                    <a class="small stretched-link mt-2" href="admins.php">View Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card shadow mb-4">
                                    <div class="card-body"><h6 class="modal-title fs-5" id="exampleModalLabel">Employees</h6>
                                    </div>
                                    <div class="card-footer d-flex float-right justify-content-between">
                                    <?php

                                    $emprole = 'Employee';
                                    $emp = "SELECT * FROM users WHERE role ='$emprole'";
                                    $qemp = mysqli_query($conn, $emp);
          
                                    if ($qempTotal = mysqli_num_rows($qemp)) echo "<h4>".$qempTotal."</h4>";
                                    else echo '0';
                                    ?>
                                      
                                    <a class="small stretched-link mt-2" href="employees.php">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>

</section>


