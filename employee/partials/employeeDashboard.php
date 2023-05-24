<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Sidebar Menu | Side Navigation Bar</title>
    <link rel="stylesheet" href="../css/admin.scss" />
    <link rel="stylesheet" href="../css/admin.css"/>
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
  </head>
  <body>
  <div class="sidebar close">
    <div class="logo-details">
        <i class='bx bx-menu' ></i>
    </div>
    <ul class="nav-links">
      <li>
        <a href="dashboard.php">
          <i class='bx bx-grid-alt'></i>
          <span class="link_name">Dashboard</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="dashboard.php">Dashboard</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="bookings.php">
            <i class='bx bx-collection' ></i>
            <span class="link_name">Bookings</span>
          </a>
          
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="bookings.php">Bookings</a></li>
        </ul>
      </li>

   
      
    <li>
    <div class="profile-details">
      <div class="profile-content">
        <img src="../img/image-profile.png" alt="profileImg">
      </div>
      <div class="name-job">
        

      <?php
          include "../dbconn.php";
          session_start();

          // Check if the userId is set in the session
          if (isset($_SESSION['userId'])) {
            $userId = $_SESSION['userId'];

            $sql = "SELECT * FROM users WHERE userId = $userId";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) === 1) {
              $row = mysqli_fetch_assoc($result);
              ?>
              <div class="profile_name"><?php echo $row['name']; ?></div>
              <div class="job"><?php echo $row['role']; ?></div>
              </div>
              <a href="employeeLogout.php" class="logout-link">
                <i class='bx bx-log-out' role="button"></i>
              </a>
              </div> 
              <?php
            }
          }
      ?>

</ul>
</div>

  <script>
  let arrow = document.querySelectorAll(".arrow");
  for (var i = 0; i < arrow.length; i++) {
    arrow[i].addEventListener("click", (e)=>{
   let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
   arrowParent.classList.toggle("showMenu");
    });
  }
  let sidebar = document.querySelector(".sidebar");
  let sidebarBtn = document.querySelector(".bx-menu");
  console.log(sidebarBtn);
  sidebarBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("close");
  });
  </script>

<?php include('partials/scripts.php'); ?>

</body>
</html>