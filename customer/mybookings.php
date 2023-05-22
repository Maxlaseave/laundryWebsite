
<?php include('partials/menu.php'); ?>


<?php
    session_start();
    include "../dbconn.php"; 

    $userID = $_SESSION['userId'];
    $sql1 = "SELECT * FROM selfService WHERE userId = $userID";
    $result1 = mysqli_query($conn, $sql1);

    $sql2 = "SELECT * FROM dropoff WHERE userId = $userID";
    $result2 = mysqli_query($conn, $sql2);
?>


<div class = "table-responsive" style = "margin-top: 10%">
<h1>Self Service</h1>
    <table class = "table table-secondary table-hover" id = "bookings" width = "50%" cellspacing = "0">
        <thead>
            <tr>
                <th>ID</th>
                <th>No. of Loads</th>
                <th>Service Type</th>
                <th>Time</th>
                <th>Date</th>
                <th>Additional Remarks</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
        <?php
        if(mysqli_num_rows($result1) > 0) {
            while($row = mysqli_fetch_assoc($result1)){
            ?>

                <tr>
                    <td><?php echo $row['selfServiceId']; ?></td>
                    <td><?php echo $row['numberOfLoads']; ?></td>
                    <td><?php echo $row['serviceType']; ?></td>
                    <td><?php echo $row['timeSlot']; ?></td>
                    <td><?php echo $row['bookingDate']; ?></td>
                    <td><?php echo $row['additionalRemarks']; ?></td>
                    <td><?php echo $row['status']; ?></td>
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


<h1>Drop-Off</h1>
<div class = "table-responsive">
    <table class = "table table-secondary table-hover" id = "bookings" width = "50%" cellspacing = "0">
        <thead>
            <tr>
                <th>ID</th>
                <th>No. of Loads</th>
                <th>Service Type</th>
                <th>Time</th>
                <th>Date</th>
                <th>Additional Remarks</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
        <?php
        if(mysqli_num_rows($result2) > 0) {
            while($row = mysqli_fetch_assoc($result2)){
            ?>

                <tr>
                    <td><?php echo $row['dropOffId']; ?></td>
                    <td><?php echo $row['numberOfLoads']; ?></td>
                    <td><?php echo $row['serviceType']; ?></td>
                    <td><?php echo $row['timeSlot']; ?></td>
                    <td><?php echo $row['bookingDate']; ?></td>
                    <td><?php echo $row['additionalRemarks']; ?></td>
                    <td><?php echo $row['status']; ?></td>
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