<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Sidebar Menu | Side Navigation Bar</title>
    <link rel="stylesheet" href="admin.scss" />
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
          <a href="orders.php">
            <i class='bx bx-collection' ></i>
            <span class="link_name">Orders</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="orders.php">Orders</a></li>
          <li><a href="#dropoff">Drop-off</a></li>
          <li><a href="#selfservice">Self-service</a></li>
        </ul>
      </li>
      <li>
        <a href="sales.php">
          <i class='bx bx-line-chart'></i>
          <span class="link_name">Sales</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="sales.php">Sales</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="inventory.php">
          <i class="bx bx-building"></i>
            <span class="link_name">Inventory</span>
          </a>
        </div>

        <ul class="sub-menu">
          <li><a class="link_name" href="inventory.php">Inventory</a></li>
        </ul>
      </li>
      <li>
        <a href="employees.php">
          <i class='bx bx-briefcase' ></i>
          <span class="link_name">Employees</span>
        </a>

        <ul class="sub-menu">
          <li><a class="link_name" href="employees.php">Employees</a></li>
          <li><a href="#">Branch 1</a></li>
          <li><a href="#">Branch 2</a></li>
          <li><a href="#">Branch 3</a></li>
        </ul>
      </li>
      
      <li>
    <div class="profile-details">
      <div class="profile-content">
        <img src="image/profile.jpg" alt="profileImg">
      </div>
      <div class="name-job">
        <div class="profile_name">Prem Shahi</div>
        <div class="job">Web Desginer</div>
      </div>
      <i class='bx bx-log-out' role="button" ></i>
    </div>
  </li>
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