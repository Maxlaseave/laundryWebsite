<?php include('partials/adminDashboard.php'); ?>


<?php
session_start();
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

      <div class = "table-responsive" style="margin-top: 5%">
      <h1>Drop-Off</h1>
          <table class = "table table-secondary table-hover" id = "bookings" width = "80%" cellspacing = "0">
              <thead  class="thead-dark">
                  <tr>
                      <th>Drop-Off ID</th>
                      <th>No. of Loads</th>
                      <th>Service Type</th>
                      <th>Time</th>
                      <th>Date</th>
                      <th>Additional Remarks</th>
                      <th>Name</th>
                      <th>Contact</th>
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

      <div class="table-responsive">
        <h1>Self Service</h1>
        <table class="table table-secondary table-hover" id="bookings" width="50%" cellspacing="0">
            <thead class="thead-dark">
                <tr>
                    <th>Self Service ID</th>
                    <th>No. of Loads</th>
                    <th>Service Type</th>
                    <th>Time</th>
                    <th>Date</th>
                    <th>Additional Remarks</th>
                    <th>Name</th>
                    <th>Contact</th>
                </tr>
            </thead>
            <tbody>
                <?php
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


</section>

