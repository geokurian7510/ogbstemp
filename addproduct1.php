

<?php
include('connection.php');error_reporting(E_ALL);
if(isset($_POST['submit']))
{
    echo "";
    
    $pro_name = $_POST['pro_name'];
    $pro_price = $_POST['pro_price'];
    $pro_img = $_FILES['pro_img']['name'];
    $allow = array("jpg","jpeg","gif","png");
    $todir = 'uploads/';      
      if ( !!$_FILES['pro_img']['name'] ) // is the file uploaded yet?
      {
        echo "inside image 1";
            $info = explode('.', strtolower( $_FILES['pro_img']['name']) ); // whats the extension of the file
    
            if ( in_array( end($info), $allow) ) // is this file allowed
            {
                echo "inside image 2";
                if ( move_uploaded_file( $_FILES['pro_img']['tmp_name'], $todir . basename($_FILES['pro_img']['name'] ) ) )
                {
                    echo "inside image 3";
                    echo " the file has been moved correctly";
                    $dst_db="uploads/".$pro_img;
                }
    
            }
            else
            {
                $imageErr= " error this file ext is not allowed";
                $flag=0;
            }
        }
    
    
    $stock = $_POST['stock']; 
    $pro_description = $_POST['pro_description'];
    $sql = "INSERT INTO tbl_product(pro_name,pro_price,pro_img,stock,pro_description) VALUES('$pro_name','$pro_price','$pro_img','$stock','$pro_description')"; 
    $result=mysqli_query($conn,$sql);   
}
else {
    echo "post failed";
}
?>

 <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ogbs</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="CSS/admin2.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style media="screen">
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            background-image: url('');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            font-family: 'Poppins', sans-serif;
        }

        .form-container {
            width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: rgba(0, 0, 0);
            border-radius: 10px;
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 0 40px rgba(8, 7, 16, 0.6);
            text-align: center;
        }

        .form-container h2 {
            font-size: 32px;
            font-weight: 500;
            margin-bottom: 20px;
            color: #ffffff;
        }

        .form-row {
            margin-bottom: 20px;
        }

        label {
            font-size: 16px;
            font-weight: 500;
            color: #ffffff;
            display: block;
            text-align: left;
        }

        select,
        input[type="text"],
        input[type="date"],
        input[type="number"],
        input[type="file"] {
            width: 100%;
            height: 40px;
            padding: 10px;
            background-color: rgba();
            border-radius: 3px;
            font-size: 14px;
            font-weight: 300;
            border: none;
        }

        input[type="file"] {
            height: auto;
        }

        button {
            width: 100%;
            padding: 15px 0;
            background-color: #ffffff60;
            color: #080710;
            font-size: 18px;
            font-weight: 600;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

<div class="d-flex align-items-left justify-content-between">
  <a href="" class="logo d-flex align-items-center">
    <img src="assets/img/logo.png" alt="">
    <span class="d-none d-lg-block">OGBS</span>
  </a>
  <i class="bi bi-list toggle-sidebar-btn" style="margin-right: 100px;"></i>

</div><!-- End Logo -->

<nav class="header-nav ms-auto">
  <ul class="d-flex align-items-center">

    <li class="nav-item d-block d-lg-none">
      <a class="nav-link nav-icon search-bar-toggle " href="#">
        <i class="bi bi-search"></i>
      </a>
    </li><!-- End Search Icon-->

    
        <li>
          <hr class="dropdown-divider">
        </li>

       

        <li>
          <hr class="dropdown-divider">
        </li>

        

      </ul><!-- End Notification Dropdown Items -->

    </li><!-- End Notification Nav -->
  
  

  
<ul class="navbar-nav ml-auto">
      <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
      <img src="images/icon.png" alt="Profile" class="rounded-circle">    <span class="d-none d-md-block dropdown-toggle ps-2">ADMIN</span>
      </a><!-- End Profile Iamge Icon -->

      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">


        <li>
          <a class="dropdown-item d-flex align-items-center" href="ADMINPROFILE.php">
            <i class="bi bi-person"></i>
            <span>My Profile</span>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          
        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
         
        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="logout.php">
            <i class="bi bi-box-arrow-right"></i>
            <span>Sign Out</span>
          </a>
        </li>

      </ul><!-- End Profile Dropdown Items -->
    </li><!-- End Profile Nav -->

  </ul>
</nav><!-- End Icons Navigation -->

</header><!-- End Header -->

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link collapsed " href="admin2.php">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed " data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-people"></i><span>Staff Management</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
      
        <a href="viewstaff1.php">
          <i class="bi bi-circle"></i><span>View Staff</span>
        </a>
      </li>
      <li>
     
      <li>
      
      <a href="staffservicearea1.php">
          <i class="bi bi-circle"></i><span>Staff ServiceArea</span>
        </a>
      </li>
      <li>
        
      </li>
    </ul>
  </li><!-- End Components Nav -->

  <li class="nav-item">
    <a class="nav-link  " data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-cart3"></i><span>Product&Bookings</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
     
      <li>
      <a href="viewproduct1.php">
          <i class="bi bi-circle"></i><span>View Product</span>
        </a>
      </li>
     
      <a href="stock1.php">
          <i class="bi bi-circle"></i><span> Cyllinder </span>
        </a>
      </li>
      <li>
      <a href="viewoderadmin.php">
          <i class="bi bi-circle"></i><span>View Bookings </span>
        </a>
      </li>
      <li>
      </li>
    </ul>
  </li><!-- End Forms Nav -->


<!-- End Icons Nav -->


  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-person"></i><span>Customer Management</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="approvegasconn1.php">
          <i class="bi bi-circle"></i><span>Approve Gas Connection</span>
        </a>
      </li>
      <li>
      <li>
        <a href="viewfeedback1.php">
          <i class="bi bi-circle"></i><span>View Feedback</span>
        </a>
      </li>
    </ul>
  </li>
  
 
  
  <li class="nav-heading">Pages</li>

  <li class="nav-item">
    <a class="nav-link collapsed" href="ADMINPROFILE.php">
      <i class="bi bi-person"></i>
      <span>Profile</span>
    </a>
  </li><!-- End Profile Page Nav -->


<!-- End Contact Page Nav -->


  <li class="nav-item">
    <a class="nav-link collapsed" href="logout.php">
      <i class="bi bi-box-arrow-in-right"></i>
      <span>Logout</span>
    </a>
  </li><!-- End Login Page Nav -->

 




</ul>
  </aside><!-- End Sidebar-->
  <body>
  <main class="main">
    <div class="form-container">
        <br><h2>Add Product</h2>
         <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="POST" enctype="multipart/form-data">

            
    <!--<h2>Add Product</h2><br>
         <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-row">
                        <label for="firstname" >select sub category:</label> &nbsp;
            <select name="subcategory" id="subcategory" value="choose sub category"> <option value="">-select subcategory-</option>
                            <div class="dropdown"> 
                                        
                               php code for dropdown   
    
                                </select> 
                            </div>
                    -->          
                        <div class="form-row">
                            <br> <label for="pro_name">Product Name:</label>
            <input type="text" name="pro_name" required>
                         </div>
                         
                         <div class="form-row">
            <label for="pro_price">Price:</label>
            <input type="number" name="pro_price" required>
                        </div>
                        
                        <div class="form-row">
            <label for="pro_description">Product Description</label>
            <input type="text" name="pro_description" required>
                        </div>
                        
                        <div class="form-row">
            <label for="pro_imag">Select an image:</label>
            <input type="file" name="pro_img">
                        </div> 
                          <div class="form-row">
            <label for="stock">stock:</label>
            <input type="text" name="stock" required>
                          </div>
            
                          <input type="submit" name="submit" class="btn btn-success" value="Add Product">
            <?php if (!empty($errors)): ?>
        <div class="alert alert-danger">
            <ul>
                
            </ul>
        </div>
    <?php endif; ?>
                    
        </form>
    </div>
</main>
</body>!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy;  <strong><span></span></strong>
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
     <a href="https://bootstrapmade.com/"></a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="vendor/apexcharts/apexcharts.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/chart.js/chart.umd.js"></script>
  <script src="vendor/echarts/echarts.min.js"></script>
  <script src="vendor/quill/quill.min.js"></script>
  <script src="vendor/simple-datatables/simple-datatables.js"></script>
  <script src="vendor/tinymce/tinymce.min.js"></script>
  <script src="vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="JS/admin2.js"></script>

</body>

</html>