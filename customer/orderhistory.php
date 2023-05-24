
<?php include('partials/menu.php'); ?>


<?php
    session_start();
    include "../dbconn.php"; 

    $userID = $_SESSION['userId'];
    $sql1 = "SELECT * FROM selfService WHERE status IN('Completed', 'Denied') AND userId = $userID";
    $result1 = mysqli_query($conn, $sql1);

    $sql2 = "SELECT * FROM dropoff  WHERE status IN('Completed', 'Denied') AND userId = $userID";
    $result2 = mysqli_query($conn, $sql2);
?>


<div class = "container table-responsive" style = "margin-top: 10%">
<p class="smalltitle"><strong>SELF-SERVICE</strong></p>
    <table class = "table table-hover mb-5" id = "bookings" width = "50%" cellspacing = "0">
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
        else { ?>
            <tr><td class="text-center" colspan='8'>No Bookings Completed</td></tr>
            <?php
        }
        ?>
        </tbody>
    </table>



<div class = "table-responsive">
<p class="smalltitle"><strong>DROP OFF</strong></p>
    <table class = "table table-hover" id = "bookings" width = "50%" cellspacing = "0">
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
        else { ?>
            <tr><td class="text-center" colspan='8'>No Bookings Completed</td></tr>
            <?php
        }
        ?>
        </tbody>
    </table>
</div>

    </div>