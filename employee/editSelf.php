
<?php include('partials/employeeDashboard.php'); ?>

<section class="home-section">
    <div class="home-content">
        <!--logo-->
        <img src="../img/pashlogo.png" width="50" height="45">
        <span class="text">Change Self Service Status</span>
    </div>

    <div class="container-fluid">
        <div class="card shadow mb-4 mt-5" style="width:50%; margin-left: 25%; ">
            <div class="card-header py-3">
                <h6 class="m-0 fs-6 font-weight-bold text-primary">Edit Self Service Status</h6>
            </div>
            <div class="card-body">
                <?php
                if (isset($_POST['edit-self-btn'])) {
                    $selfId = $_POST['self_id'];
                    $sql = "SELECT * FROM selfService WHERE selfServiceId = '$selfId'";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_array($result);
                }
                ?>
                <form action="employeeProcess.php" method="POST">
                    <h4>Booking ID: <?php echo $row['selfServiceId']; ?></h4>
                    <input type="hidden" name="self_id" value="<?php echo $row['selfServiceId']; ?>">
                    <select class="form-select" name="status">
                        <option value="">Select</option>
                        <option value="1" <?php if ($row["status"] == 'Pending') echo "selected"; ?>>Pending</option>
                        <option value="2" <?php if ($row["status"] == 'Confirmed') echo "selected"; ?>>Confirmed</option>
                        <option value="3" <?php if ($row["status"] == 'In Progress') echo "selected"; ?>>In Progress</option>
                        <option value="4" <?php if ($row["status"] == 'Completed') echo "selected"; ?>>Completed</option>
                        <option value="5" <?php if ($row["status"] == 'Denied') echo "selected"; ?>>Denied</option>
                    </select>
                    <button class="btn btn-primary mt-4"type="submit" name="update-self-status" value="Update Status">Update Status</button>
                </form>
            </div>
        </div>
    </div>
</section>




