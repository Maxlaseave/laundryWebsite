<?php include('partials/employeeDashboard.php'); ?>


<?php
include "../dbconn.php"; 

$sql1 = "SELECT * FROM selfService";
$result1 = mysqli_query($conn, $sql1);

$sql2 = "SELECT * FROM dropOff";
$result2 = mysqli_query($conn, $sql2);
?>

<section class="home-section">
    <div class="home-content">
        <!--logo-->
        <img src="../img/pashlogo.png" width="50" height="45">
        <span class="text">Orders</span>
    </div>
<!--Drop Off -->
    <div class="container-fluid">
        <div class="card shadow mb-4 mt-2" style="width:99%; margin-left: 10px;">
            <div class="card-header">
            <h6 class="modal-title fs-5" id="exampleModalLabel">Drop-Off</h6>
            </div>
            <div class="card-body">
    
            <table class = "table table-hover" id = "bookings">
              <thead>
                  <tr>
                      <th>ID</th>
                      <th>No. of Loads</th>
                      <th>Service Type</th>
                      <th>Time</th>
                      <th>Date</th>
                      <th>Additional Remarks</th>
                      <th>Name</th>
                      <th>Contact</th>
                      <th>Status</th>
                      <th>Update Status</th>
                  </tr>
              </thead>
              <tbody>
              <?php
              if(mysqli_num_rows($result2) > 0) {
                  while($row = mysqli_fetch_assoc($result2)){
                      $userId = $row['userId'];
                        $userSql = "SELECT * FROM users WHERE userId = '$userId'";
                        $userResult = mysqli_query($conn, $userSql);
                        $userRow = mysqli_fetch_assoc($userResult);
                        ?>
                  

                      <tr>
                          <td><?php echo $row['dropOffId']; ?></td>
                          <td><?php echo $row['numberOfLoads']; ?></td>
                          <td><?php echo $row['serviceType']; ?></td>
                          <td><?php echo $row['timeSlot']; ?></td>
                          <td><?php echo $row['bookingDate']; ?></td>
                          <td><?php echo $row['additionalRemarks']; ?></td>
                          <td><?php echo $userRow['name']; ?></td>
                          <td><?php echo $userRow['contactNo']; ?></td>
                          <td><?php echo $row['status']; ?></td>
                          <td>
                            <form action="editDrop.php" method = "post">
                                <input type="hidden" name="drop_id" value="<?php echo $row['dropOffId']; ?>">
                                <button class="btn btn-outline-success" name="edit-drop-btn">Edit</button> 
                            </form>
                          </td>
                      </tr>
                  <?php
                  }
              }
              else {
                  echo "<tr><td colspan='6'>No Bookings</td></tr>";
              }
              ?>
              </tbody>
          </table>
      </div>
    </div>
</div>
</div>

<!--Self Service -->
    <div class="container-fluid">
        <div class="card shadow mb-4 mt-2" style="width:99%; margin-left: 10px;">
            <div class="card-header">
            <h6 class="modal-title fs-5" id="exampleModalLabel">Self-service</h6>
            </div>
            <div class="card-body">
    
            <table class = "table table-hover" id = "bookings">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>No. of Loads</th>
                    <th>Service Type</th>
                    <th>Time</th>
                    <th>Date</th>
                    <th>Additional Remarks</th>
                    <th>Name</th>
                    <th>Contact</th>
                    <th>Status</th>
                    <th>Update Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "../dbconn.php";
                if (mysqli_num_rows($result1) > 0) {
                    while ($row = mysqli_fetch_assoc($result1)) {
                        $userId = $row['userId'];
                        $userSql = "SELECT * FROM users WHERE userId = '$userId'";
                        $userResult = mysqli_query($conn, $userSql);
                        $userRow = mysqli_fetch_assoc($userResult);
                        ?>

                        <tr>
                            <td><?php echo $row['selfServiceId']; ?></td>
                            <td><?php echo $row['numberOfLoads']; ?></td>
                            <td><?php echo $row['serviceType']; ?></td>
                            <td><?php echo $row['timeSlot']; ?></td>
                            <td><?php echo $row['bookingDate']; ?></td>
                            <td><?php echo $row['additionalRemarks']; ?></td>
                            <td><?php echo $userRow['name']; ?></td>
                            <td><?php echo $userRow['contactNo']; ?></td>
                            <td><?php echo $row['status']; ?></td>
                            <td>
                                <form action="editSelf.php" method = "post">
                                    <input type="hidden" name="self_id" value="<?php echo $row['selfServiceId']; ?>">
                                    <button class="btn btn-outline-success" name="edit-self-btn">Edit</button>   
                                </form>
                            </td>
                        </tr>
                <?php
                    }
                } else {
                    echo "<tr><td colspan='8'>No Bookings</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    </div>
    </div>


</section>
<?php

