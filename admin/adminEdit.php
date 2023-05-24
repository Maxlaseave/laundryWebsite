<?php include('partials/adminDashboard.php'); ?>

<section class="home-section">
    <div class="home-content">
      <!--logo-->
      <img src="../img\pashlogo.png"  width="50" height="45">
      <span class="text">Admins</span>
    </div>


    <div class="container-fluid">
        <div class="card shadow mb-4" style="width:50%">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Admin Information</h6>
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
                            <button class="btn btn-outline-success" name="edit-btn"
                                            data-id="<?php echo $row['userId']; ?>">Update</button>
                                        
                        </form>
                    <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>

    <!-- Edit Modal -->
    <div class="modal fade" id="editModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Add a New Admin</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <form method="post" action="adminProcess.php">
            <div class="modal-body">
                <div class="form-group mb-3">
                    <label>Name</label>
                    <input type="text" name ="name" class ="form-control" placeholder="Enter Name" required>
                </div>
                <div class="form-group mb-3">
                    <label>Contact Number</label>
                    <input type="tel" name ="contact" class ="form-control" placeholder="Enter Contact" required>
                </div>
                <div class="form-group mb-3">
                    <label>Email</label>
                    <input type="email" name ="email" class ="form-control" placeholder="Enter Email" required>
                </div>
                <div class="form-group mb-3">
                    <label>Password</label>
                    <input type="password" name ="password" class ="form-control" placeholder="Enter Passwrod" required>
                </div>
                <div class="form-group mb-3">
                    <label>Repeat Password</label>
                    <input type="password" name ="re_password" class ="form-control" placeholder="Enter Repeat Password" required>
                </div>
           
            </div>    
        
       
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="reg-admin">Add Admin</button>
            </div>
        </form>
        </div>
    </div>
    </div>
</section>
