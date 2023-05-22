<?php include('partials/adminDashboard.php'); ?>



<section class="home-section">
    <div class="home-content">
      <!--logo-->
      <img src="../img\pashlogo.png"  width="50" height="45">
      <span class="text">Admins</span>
    </div>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Add Admin
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <input type="tel" name ="name" class ="form-control" placeholder="Enter Contact" required>
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
        </form>
       
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
        </div>
    </div>
    </div>
</section>

