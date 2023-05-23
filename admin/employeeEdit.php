<?php include('partials/adminDashboard.php'); ?>

<section class="home-section">
    <div class="home-content">
      <!--logo-->
      <img src="../img\pashlogo.png"  width="50" height="45">
      <span class="text">Employee</span>
    </div>


    <div class="container-fluid">
        <div class="card shadow mb-4" style="width:50%">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Employee Information</h6>
            </div>
            <div class="card-body">
                <?php
                if(isset($_POST['edit-btn'])) {
                    $userId = $_POST['edit_id'];

                    $sql = "SELECT * FROM users where userId = '$userId'";
                    $result = mysqli_query($conn, $sql);

                    foreach($result as $row) {
                        ?>
                        <form action="adminProcess.php" method="POST">

                        <input type="hidden" name="edit_id" value="<?php echo $row['userId'];?>">
                            <div class="form-group mb-3">
                                <label>Name</label>
                                <input type="text" name ="editName" value="<?php echo $row['name'];?>" class ="form-control" placeholder="Enter Name" required>
                            </div>
                            <div class="form-group mb-3">
                                <label>Contact Number</label>
                                <input type="tel" name ="editContact" value="<?php echo $row['contactNo'];?>" class ="form-control" placeholder="Enter Contact" required>
                            </div>
                            <div class="form-group mb-3">
                                <label>Email</label>
                                <input type="email" name ="editEmail" value="<?php echo $row['email'];?>" class ="form-control" placeholder="Enter Email" required>
                            </div>
                            <div class="form-group mb-3">
                                <label>Password</label>
                                <input type="password" name ="editPass" class ="form-control" placeholder="Enter Passwrod" required>
                            </div>
                            <a href="admins.php" class ="btn btn-secondary">Cancel</a>
                            <button class="btn btn-primary" type="submit" name="update-btn ">Update</button>
                        </form>
                    <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
</section>
