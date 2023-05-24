<?php include('partials/adminDashboard.php'); ?>


<section class="home-section">
    <div class="home-content">
      <!--logo-->
      <img src="../img\pashlogo.png"  width="50" height="45">
      <span class="text">Employees</span>
    </div>

    
        <!-- Add Modal -->
        <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Add a New Employee</h1>
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
                    <input type="tel" name ="contact" class ="form-control" placeholder="+63" required>
                </div>
                <div class="form-group mb-3">
                    <label>Email</label>
                    <input type="email" name ="email" class ="form-control" placeholder="Enter Email" required>
                </div>
                <div class="form-group mb-3">
                    <label>Password</label>
                    <input type="password" name ="password" class ="form-control" placeholder="Enter Password" required>
                </div>
                <div class="form-group mb-3">
                    <label>Repeat Password</label>
                    <input type="password" name ="re_password" class ="form-control" placeholder="Enter Repeat Password" required>
                </div>
           
            </div>    
        
       
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary" name="reg-employee">Add Employee</button>
            </div>
        </form>
        </div>
    </div>
    </div>


<!-- Admin Table -->
  <div class="container-fluid">
  <div class="card shadow mb-4 mt-2" style="width:99%; margin-left: 10px;">
          <div class="card-header">
            <h6 class="modal-title fs-5" id="exampleModalLabel">List of Employees</h6>
            </div>
              <div class="card-body">
                  <div class="table-responsive" id="tables">
                      <table class="table table-hover" id="admins">
                          <thead>
                          <tr>
                              <th>ID</th>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Contact</th>
                              <th>Edit</th>
                              <th>Delete</th>
                          </tr>
                          </thead>
                          <tbody>
                          <?php
                          $adminRole = 'Employee'; 
                          $userSql = "SELECT * FROM users WHERE role = '$adminRole'";
                          $userResult = mysqli_query($conn, $userSql);

                          if ($userResult && mysqli_num_rows($userResult) > 0) {
                              while ($row = mysqli_fetch_assoc($userResult)) {
                                  ?>
                                  <tr>
                                      <td><?php echo $row['userId']; ?></td>
                                      <td><?php echo $row['name']; ?></td>
                                      <td><?php echo $row['email']; ?></td>
                                      <td>+63 <?php echo $row['contactNo']; ?></td>

                                      <td>
                                          <form action="employeeEdit.php" method="post">
                                              <input type="hidden" name="edit_id" value="<?php echo $row['userId']; ?>">
                                              <button class="btn btn-outline-success" name="edit-btn" data-bs-toggle="modal" 
                                                      data-id="<?php echo $row['userId']; ?>">Edit</button>
                                          </form>
                                      </td>
                                      <td>
                                          <form action="adminProcess.php" method="post">
                                              <input type="hidden" name="delete_id" value="<?php echo $row['userId']; ?>">
                                              <button class="btn btn-outline-danger" name="delete-btn-emp">Delete</button>
                                          </form>                            
                                      </td>
                                          
                                  </tr>
                              <?php
                              }
                          } else {
                              echo "<tr><td colspan='6'>No Admin Accounts Found</td></tr>";
                          }
                          ?>
                          </tbody>
                      </table>
                      <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal" s>
                    Add Employee
                </button> 
                  </div>
          </div>
  </div>      
</section>

<?php
include('partials/scripts.php');
?>
</body>
</html>