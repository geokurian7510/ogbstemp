<?php
// Include the database connection file
include("connection.php");

// Start or resume the session
session_start();
?>
<html>
<head>
<script type="text/javascript" src="swal/jquery.min.js"></script>
<script type="text/javascript" src="swal/bootstrap.min.js"></script>
<script type="text/javascript" src="swal/sweetalert2@11.js"></script>
</head>
<body>
</html>
<?php


/*if (!isset($_SESSION["staffid"])) {
   header("Location:index.php"); // Redirect to the login page if not logged in
   exit();
}*/
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the customer ID from the session
    if (isset($_SESSION["staffid"])) {
      $s_id = $_SESSION["staffid"];

      if(isset($_POST['pass'])){
        
        // Sanitize and validate input data
        $staffid=$_SESSION["staffid"];
        $currentPassword = $_POST["currentPassword"];
        $newPassword = $_POST["newPassword"];
        $confirmPassword = $_POST["confirmPassword"];

        // Perform password change if the new password and confirmation match
        if ($newPassword === $confirmPassword) {

         $sql="select * from staff where s_id='".$staffid."' and pwd='".$currentPassword."'";
         $result=mysqli_query($conn,$sql);
        
         while( $row=mysqli_fetch_array($result))
         {
            $email=$row['email'];
            echo "email";
            
            echo $email;
            echo $staffid;

         }
      
         $rowcount= mysqli_num_rows($result);
         echo "rowcount";
         echo $rowcount;
         if($rowcount>0)
            {
               $sql="update staff set pwd= '".$newPassword."' where s_id='".$staffid."'";
               $result=mysqli_query($conn,$sql);
               $sql="update login set pwd = '".$newPassword."' where email ='".$email."'";
               $result=mysqli_query($conn,$sql);
               ?>
               <script>
                   Swal.fire({
                       icon: 'success',
                       text: 'password changed sucessfully',
                       didClose: () => {
                           window.location.replace('../staffprofile.php');
                       }
                   });
               </script>
               <?php
            }
         

         }
        }
        if(isset($_POST['editpro'])){
          // Collect data from the form
    $newFirstName = $_POST["newFirstName"];
    $newLastName = $_POST["newLastName"];
    $newPhone = $_POST["newPhone"];
    $newEmail = $_POST["newEmail"];

    // Update the staff table with the new data
    $update_sql = "UPDATE staff SET f_name='$newFirstName', l_name='$newLastName', phn_number='$newPhone', email='$newEmail' WHERE s_id=$s_id";

    if ($conn->query($update_sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
        }


}}


?>


<!-- Your HTML form goes here with the updated PHP variables -->


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

<div class="">
  <form class="" method="POST" action="#">
  </form>
</div><!-- End Search Bar -->

<nav class="header-nav ms-auto">
  
      </a>
    </li><!-- End Search Icon-->

  
  

  
<ul class="navbar-nav ml-auto">
      <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
      <img src="images/icon.png" alt="Profile" class="rounded-circle">    <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $_SESSION["staffname"]; ?></span>
      </a><!-- End Profile Iamge Icon -->

      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
        <li class="dropdown-header">
          <h6><?php echo $_SESSION["staffname"];?></h6>
          <span></span>
        </li>
        <li>
          <hr class="dropdown-divider">
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
    <a class="nav-link collapsed " href="staffdashboard1.php">
      <i class="bi bi-grid"></i>
      <span> Staff Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->
  
  <li class="nav-item">
    <a class="nav-link collapsed " href="staffcylinder.php">
      <i class="bi bi-cart"></i>
      <span> Cylinder Orders</span>
    </a>
  </li><!-- End Dashboard Nav -->

  

  


<!-- End Icons Nav -->



  
 
  
  <li class="nav-heading">Pages</li>

  <li class="nav-item">
    <a class="nav-link " href="staffprofile.php">
      <i class="bi bi-person"></i>
      <span>Profile</span>
    </a>
  </li><!-- End Profile Page Nav -->


 


  <li class="nav-item">
    <a class="nav-link collapsed" href="logout.php">
      <i class="bi bi-box-arrow-in-right"></i>
      <span>Logout</span>
    </a>
  </li><!-- End Login Page Nav -->

 




</ul>

</aside><!-- End Sidebar-->

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Users</li>
          <li class="breadcrumb-item active">Profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">
          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
              <img src="images/icon.png" alt="Profile" class="rounded-circle">
              <h2><?php echo $_SESSION["email"];?></h2><br>
              <h3><b>STAFF</b></h3>
             
            </div>
          </div>
        </div>
        <?php


// Check if staffid is set in session
if(isset($_SESSION['staffid'])) {
    // Fetch staff details from the database
    $staffid = $_SESSION['staffid'];
    $query = "SELECT * FROM staff WHERE s_id = $staffid";
    $result = mysqli_query($conn, $query); // Fix: use $query instead of $sql

    // Check if the query was successful
    if($result) {
        // Fetch the data
        $row = mysqli_fetch_assoc($result);
        
        // Display the fetched data in your HTML
        ?>
        
        
        <div class="col-xl-8">
          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">
                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                </li>
                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                </li>
               
                <li class="nav-item">
                  <button class="nav-link"  data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                </li>
              </ul>
              <div class="tab-content pt-2">
                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">About</h5>
                  <p class="small fst-italic">Staff delivers cylinder and products
                  </p>
                  <h5 class="card-title">Profile Details</h5>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">First Name </div>
                    <label for="newFirstName" class="col-md-4 col-lg-3 col-form-label" value=""><?php echo $row['f_name']; ?></label>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label"> Last Name   </div>
                    <div class="col-lg-9 col-md-8"><?php echo $row['l_name']; ?></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8"><?php echo $row['email']; ?></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Phone Number</div>
                    <div class="col-lg-9 col-md-8"><?php echo $row['phn_number']; ?></div>
                  </div>
                 
                </div><?php
    } else {
        // Handle the case where the query fails
        echo "Error retrieving staff details: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
} else {
    // Handle the case where staffid is not set in the session
    echo "Staff ID not found in session.";
}
?>
                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                  <!-- Profile Edit Form -->
                  
        

<!-- Your HTML form goes here with the updated PHP variables -->

<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include the database connection file
include 'connection.php';

// Assume you have a session variable for staffid
$staffid = $_SESSION["staffid"];

// Fetch existing data from the staff table
$select_sql = "SELECT * FROM staff WHERE s_id = $staffid";
$select_result = $conn->query($select_sql);

// Check if the query was successful
if ($select_result === false) {
    // Print the SQL query for debugging
    echo "Select query error: " . $conn->error;
    exit();
}

if ($select_result->num_rows > 0) {
    $row = $select_result->fetch_assoc();
    $f_name = $row["f_name"];
    $l_name = $row["l_name"];
    $phn_number = $row["phn_number"];
    $email = $row["email"];
} else {
    // Handle errors or redirect to an error page
    echo "No records found in the database for staffid: $staffid";
    exit();
}

// Check if the form is submitted
/*if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect data from the form
    $newFirstName = $_POST["newFirstName"];
    $newLastName = $_POST["newLastName"];
    $newPhone = $_POST["newPhone"];
    $newEmail = $_POST["newEmail"];

    // Update the staff table with the new data
    $update_sql = "UPDATE staff SET f_name='$newFirstName', l_name='$newLastName', phn_number='$newPhone', email='$newEmail' WHERE s_id=$staffid";

    if ($conn->query($update_sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}*/

// Close the database connection
$conn->close();
?>

<!-- Your HTML form goes here with the updated PHP variables -->

<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <!-- Other form fields remain unchanged -->

    <div class="row mb-3">
        <label for="newFirstName" class="col-md-4 col-lg-3 col-form-label">First Name</label>
        <div class="col-md-8 col-lg-9">
            <input name="newFirstName" type="text" class="form-control" id="newFirstName" value="<?php echo $f_name; ?>">
        </div>
    </div>

    <div class="row mb-3">
        <label for="newLastName" class="col-md-4 col-lg-3 col-form-label">Last Name</label>
        <div class="col-md-8 col-lg-9">
            <textarea name="newLastName" class="form-control" id="newLastName"><?php echo $l_name; ?></textarea>
        </div>
    </div>

    <div class="row mb-3">
        <label for="newEmail" class="col-md-4 col-lg-3 col-form-label">Email</label>
        <div class="col-md-8 col-lg-9">
            <input name="newEmail" type="text" class="form-control" id="newEmail" value="<?php echo $email; ?>">
        </div>
    </div>

    <div class="row mb-3">
        <label for="newPhone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
        <div class="col-md-8 col-lg-9">
            <input name="newPhone" type="text" class="form-control" id="newPhone" value="<?php echo $phn_number; ?>">
        </div>
    </div>

    <!-- Other form fields remain unchanged -->

    <div class="text-center">
        <button type="submit" class="btn btn-primary" name="editpro">Save Changes</button>
    </div>
</form>




                </div>

                <div class="tab-pane fade pt-3" id="profile-settings">

                  <!-- Settings Form -->
                  <!-- End settings Form -->
                </div>
                <div class="tab-pane fade pt-3" id="profile-change-password">
                  <!-- Change Password Form -->
                  <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
                    <div class="row mb-3">
                      <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="currentPassword" type="password" class="form-control" id="currentPassword">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="newPassword" type="password" class="form-control" id="newPassword">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="confirmPassword" type="password" class="form-control" id="renewPassword">
                      </div>
                    </div>
                    <div class="text-center">
                      <button type="submit"  class="btn btn-primary" name="pass">Change Password</button>
                    </div>
                  </form><!-- End Change Password Form -->
                </div>
              </div><!-- End Bordered Tabs -->
            </div>
          </div>
        </div>
      </div>
    </section>
  </main><!-- End #main -->
  <!-- ======= Footer ======= -->
  
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- Vendor JS Files -->
  <script src="vendor/apexcharts/apexcharts.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/chart.js/chart.umd.js"></script>
  <script src="vendor/echarts/echarts.min.js"></script>
  <script src="vendor/quill/quill.min.js"></script>
  <script src="vendorsimple-datatables/simple-datatables.js"></script>
  <script src="vendor/tinymce/tinymce.min.js"></script>
  <script src="vendor/php-email-form/validate.js"></script>
  <!-- Template Main JS File -->
  <script src="JS/admin2.js"></script>
</body>
</html>