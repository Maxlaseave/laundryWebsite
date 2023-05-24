
<?php include('partials/employeeDashboard.php'); ?>

<section class="home-section">
    <div class="home-content">
        <!--logo-->
        <img src="../img/pashlogo.png" width="50" height="45">
        <span class="text">Change DropOff Status</span>
    </div>

    <div class="container-fluid">
        <div class="card shadow mb-4 mt-5" style="width:50%; margin-left: 25%; ">
            <div class="card-header py-3">
                <h6 class="m-0 fs-6 font-weight-bold text-primary">Edit Admin Information</h6>
            </div>
            <div class="card-body">
                <?php
                if (isset($_POST['edit-drop-btn'])) {
                    $dropId = $_POST['drop_id'];
                    $sql = "SELECT * FROM dropOff WHERE dropOffId = '$dropId'";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_array($result);
                }
                ?>
                <form action="employeeProcess.php" method="POST">
                    <h4>Order ID: <?php echo $row['dropOffId']; ?></h4>
                    <input type="hidden" name="drop_id" value="<?php echo $row['dropOffId']; ?>">
                    <select class="form-select" name="status">
                        <option value="">Select Any One</option>
                        <option value="Pending" <?php if ($row["status"] == 'Pending') echo "selected"; ?>>Pending</option>
                        <option value="In Progress" <?php if ($row["status"] == 'In Progress') echo "selected"; ?>>In Progress</option>
                        <option value="Completed" <?php if ($row["status"] == 'Completed') echo "selected"; ?>>Completed</option>
                        <option value="Denied" <?php if ($row["status"] == 'Denied') echo "selected"; ?>>Denied</option>
                    </select>
                    <button class="btn btn-primary"type="submit" name="update-drop-status" value="Update Status">Update Status</button>
                </form>
            </div>
        </div>
    </div>
</section>




