<html>
<head>
<script type="text/javascript" src="swal/jquery.min.js"></script>
<script type="text/javascript" src="swal/bootstrap.min.js"></script>
<script type="text/javascript" src="swal/sweetalert2@11.js"></script>
</head>
<body>
</html>
<?php
// Include the database connection file
include("connection.php");

// Start or resume the session
session_start();

if (!isset($_SESSION["customerid"])) {
   header("Location:index.php"); // Redirect to the login page if not logged in
   exit();
}
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the customer ID from the session
    if (isset($_SESSION["customerid"])) {
        
        // Sanitize and validate input data
        $custid=$_SESSION["customerid"];
        echo $custid;
        $currentPassword = $_POST["currentPassword"];
        $newPassword = $_POST["newPassword"];
        $confirmPassword = $_POST["confirmPassword"];

        // Perform password change if the new password and confirmation match
        if ($newPassword === $confirmPassword) {

         $sql="select * from customer where c_id='".$custid."' and pwd='".$currentPassword."'";
         $result=mysqli_query($conn,$sql);
        
         while( $row=mysqli_fetch_array($result))
         {
            $email=$row['email'];
            echo "email";
            
            echo $email;
         }
      
         $rowcount= mysqli_num_rows($result);
         echo "rowcount";
         echo $rowcount;
         if($rowcount>0)
            {
               $sql="update customer set pwd= '".$newPassword."' where c_id='".$custid."'";
               $result=mysqli_query($conn,$sql);
               $sql="update login set pwd = '".$newPassword."' where email='".$email."'";
               $result=mysqli_query($conn,$sql);
               ?>
               <script>
                   Swal.fire({
                       icon: 'success',
                       text: 'password changed sucessfully',
                       didClose: () => {
                           window.location.replace('../changepassword.php');
                       }
                   });
               </script>
               <?php
            }
         

         }
}}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <style>
         body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

       
        

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
        }

        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
          
        }

        button[type="submit"] {
            background-color: #11107bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }
         </style>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Ink&Paper</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="CSS/ink&paper.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
      <!-- font awesome -->
      <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <!--  -->
      <!-- owl stylesheets -->
      <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:400,700&display=swap&subset=latin-ext" rel="stylesheet">
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesoeet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
      <!-- banner bg main start -->
      <div class="banner_bg_main">
         <!-- header top section start -->
        <!-- <div class="container">
            <div class="header_section_top">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="custom_menu">
                        <ul>
                           <li><a href="#">Best Sellers</a></li>
                           <li><a href="#">Award Winners</a></li>
                           <li><a href="#">New Arrivals</a></li>
                           <li><a href="#">Today's Deals</a></li>
                           <li><a href="#">Customer Service</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- header top section start -->
         <!-- logo section start -->
         <div class="logo_section">
            <div class="container">
               <div class="row">
                  <div class="col-sm-0">
                     <div class="logo"><a href="home.php"><h2 class="banner_taital">OGBS</h2></a></div>
                  </div>
               </div>
            </div>
         </div>
         <!-- logo section end -->
         <!-- header section start -->
         <div class="header_section">
            <div class="container">
               <div class="containt_main">
                  <div id="mySidenav" class="sidenav">
                     <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                     <h2>Hello Readers!</h2>
                     <a href="index.html">Home</a>
                     <a href="#">New Arrivals</a>
                     <a href="#">Best Sellers</a>
                     <a href="#">Featured Authors</a>
                     <a href="#">Today's deals</a>
                  </div>
                  
                  </div>
                  <div class="header_box">
                     <!--<div class="lang_box ">
                        <a href="#" title="Language" class="nav-link" data-toggle="dropdown" aria-expanded="true">
                        <img src="images/flag-uk.png" alt="flag" class="mr-2 " title="United Kingdom"> English <i class="fa fa-angle-down ml-2" aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-menu ">
                           <a href="#" class="dropdown-item">
                           <img src="images/India_Flag .jpeg" class="mr-2" alt="flag">
                           India
                           </a>
                        </div>
                     </div>-->
                   
                        <ul>
                        
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
       
      <!-- book section start -->
      <div class="fashion_section">
        <main id="main" class="main">
          <div class="banner_taital">
                    <nav><h1></h1>
                     <!-- End Page Title -->
               <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="userdashboard.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="youraccount.php">your account</a></li>
                        <li class="breadcrumb-item active">Change Password</li>
                      </ol>
                    </nav>
                  </div>

       <!--banner section end --->           
               <div class="container">
        <h2>Password Change</h2>
        <form action="changepassword.php" method="POST">
            <div class="form-group">
                <label for="currentPassword">Current Password:</label>
                <input type="password" id="currentPassword" name="currentPassword" required>
            </div>
            <div class="form-group">
                <label for="newPassword">New Password:</label>
                <input type="password" id="newPassword" name="newPassword" required>
            </div>
            <div class="form-group">
                <label for="confirmPassword">Confirm Password:</label>
                <input type="password" id="confirmPassword" name="confirmPassword" required>
            </div>
            <button type="submit"  name="">Change Password</button>
        </form>
    </div>
              
      <!-- footer section start -->
     
      <!-- footer section end -->
      <!-- copyright section start -->
     
      <!-- copyright section end -->
      <!-- Javascript files-->
      
   </body>
</html>