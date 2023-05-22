
<?php include('partials/menu.php'); ?>


<?php
    session_start();
    include "../dbconn.php"; 

    $userID = $_SESSION['userId'];

    $sql = "SELECT * FROM dropoff WHERE userId = $userID";
    $result = mysqli_query($conn, $sql)
?>

<div class = "table-responsive">
    <table class = "table table-bordered" id = "bookings" width = "80%" cellspacing = "0">
        <thead  class="thead-dark">
            <tr>
                <th>Self Service ID</th>
                <th>No. of Loads</th>
                <th>Service Type</th>
                <th>Time</th>
                <th>Date</th>
                <th>Additional Remarks</th>
            </tr>
        </thead>
        <tbody>
        <?php
        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)){
            ?>

                <tr>
                    <td><?php echo $row['selfServiceId']; ?></td>
                    <td><?php echo $row['noOfLoads']; ?></td>
                    <td><?php echo $row['serviceType']; ?></td>
                    <td><?php echo $row['timeSlot']; ?></td>
                    <td><?php echo $row['date']; ?></td>
                    <td><?php echo $row['additionalRemarks']; ?></td>
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