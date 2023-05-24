<?php include('partials/employeeDashboard.php'); ?>

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
                            
                        </div>

</section>
