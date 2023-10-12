<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>online gas admin</title>
    <link rel="stylesheet" href="CSS/admin.css" />
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
  </head>
  <body>
    <nav class="sidebar">
      <a href="#" class="logo"><b>OGBS ADMIN</b></a>
      <div class="menu-content">
        <ul class="menu-items">
          <div class="menu-title"><B>HELLO SIR</B></div>
          <li class="item">
            <div class="submenu-item">
              <span>Staff Management</span>
              <i class="fa-solid fa-chevron-right"></i>
            </div>
            <ul class="menu-items submenu">
              <div class="menu-title">
                <i class="fa-solid fa-chevron-left"></i>
                Back
              </div>
              <li class="item">
                <a href="approvestaff.php">Approve Staff</a>
              </li>
              <li class="item">
                <a href="viewstaffminu.php">View Staff</a>
              </li>
              <li class="item">
                <a href=""></a>
              </li>
            </ul>
          </li>
          <li class="item">
            <div class="submenu-item">
              <span>Category</span>
              <i class="fa-solid fa-chevron-right"></i>
            </div>

            <ul class="menu-items submenu">
              <div class="menu-title">
                <i class="fa-solid fa-chevron-left"></i>
                Back
              </div>
              <li class="item">
                <a href="viewcategory.php">View Category</a>
              </li>
              <li class="item">
                <a href="#"></a>
              </li>
              <li class="item">
                <a href="#"></a>
              </li>
            </ul>
          </li>
          
          <li class="item">
            <div class="submenu-item">
              <span>Manage Stock</span>
              <i class="fa-solid fa-chevron-right"></i>
            </div>

            <ul class="menu-items submenu">
              <div class="menu-title">
                <i class="fa-solid fa-chevron-left"></i>
                Back
              </div>
              <li class="item">
                <a href="stock.php">Add Stock</a>
              </li>
              <li class="item">
                <a href="viewstock.php">View Stock</a>
             
              <li class="item">
                <a href="#">Second sublink</a>
              </li>
            </ul>
          </li>
          <li class="item">
            <div class="submenu-item">
              <span>Service Area</span>
              <i class="fa-solid fa-chevron-right"></i>
            </div>

            <ul class="menu-items submenu">
              <div class="menu-title">
                <i class="fa-solid fa-chevron-left"></i>
                Your submenu title
              </div>
              <li class="item">
                <a href="servicearea.php">Add Service Area</a>
              </li>
              <li class="item">
                <a href="viewservicearea.php">View Service Area</a>
             
              <li class="item">
                <a href="staffservicearea.php">Staff ServiceArea</a>
              </li>
            </ul>
          </li>

          <li class="item">
            <div class="submenu-item">
              <span> Connection</span>
              <i class="fa-solid fa-chevron-right"></i>
            </div>

            <ul class="menu-items submenu">
              <div class="menu-title">
                <i class="fa-solid fa-chevron-left"></i>
                Back
              </div>
              <li class="item">
                <a href="approvegasconn.php">Approve Connection</a>
              </li>
              <li class="item">
                <a href="viewgasconn.php"> View Approved connection</a>
             
              <li class="item">
                <a href="#">Second sublink</a>
              </li>
            </ul>
          </li>
          <li class="item">
            <div class="submenu-item">
              <span> Product</span>
              <i class="fa-solid fa-chevron-right"></i>
            </div>

            <ul class="menu-items submenu">
              <div class="menu-title">
                <i class="fa-solid fa-chevron-left"></i>
                Back
              </div>
              <li class="item">
                <a href="addproduct.php">Add Product</a>
              </li>
              <li class="item">
                <a href="viewproduct.php"> View product</a>
             
              <li class="item">
                <a href="#">Second sublink</a>
              </li>
            </ul>
          </li>

          <li class="item">
            <a href="viewfeedback.php">View Feedback</a>
          </li>
          <li class="item">
            <a href="#">Cylinder Booking</a>
          </li>
          <li class="item">
            <a href="indexhome.php">Log Out</a>
          </li>
        </ul>
      </div>
    </nav>

    <nav class="navbar">
      <i class="fa-solid fa-bars" id="sidebar-close"></i>
    </nav>

  

    <script src="JS/admin.js"></script>
  </body>
</html>