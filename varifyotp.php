<?php
// Start the session if you haven't already
//session_start();
session_start();

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the entered OTP from the form
    $user_entered_otp = $_POST['otp'];

    // Get the user's email (from the session or your authentication system)
    $user_email = $_SESSION['emailforpwdchange']; // Replace with your logic for getting the user's email
    
    // Connect to the database and validate the OTP
    require 'connection.php'; // Include your database connection code

    // Query the database to check if the OTP is valid and not expired
    $sql = "SELECT * FROM otp_table WHERE email ='".$user_email."' AND otp = '".$user_entered_otp."' AND status = 'unused' AND TIMESTAMPDIFF(MINUTE, timestamp, NOW()) <= 30";
    $result=mysqli_query($conn,$sql);


    if (mysqli_num_rows($result) == 1) {
        // OTP is valid and hasn't expired
        // Mark the OTP as used in the database
        $updateSql = "UPDATE otp_table SET status = 'used' WHERE email ='".$user_email."' AND otp = '".$user_entered_otp."'";
        $rslt=mysqli_query($conn,$updateSql);
        // Redirect the user to a page where they can change their password
        header("Location: change_password.php");
        exit();
    } else {
        // Invalid or expired OTP
        // Show an error message to the user
        $error_message = "Invalid or expired OTP. Please try again.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Recovery</title>
    <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>ogbs</title>
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
       
       
      <!-- book section start -->
      <div class="fashion_section">
  <main id="main" class="main">
    <div class="banner_taital">
      <h1>Forgot Password</h1>
      <nav>
       <!-- End Page Title -->
 <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="userdashboard.php">Login</a></li>
          <li class="breadcrumb-item">Forgot Password</li>
          <li class="breadcrumb-item active">Varify Otp</li>

        </ol>
      </nav>
    </div>
    <section class="section dashboard">
      <div class="row">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:#370606;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

      
        form {
    background-color: #fff;
    padding: 10px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
    
    /* Increase width and height */
    width: 1000px; /* Adjust the width as needed */
    height: 230px; /* Adjust the height as needed */
}


        h1 {
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #555;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        p.error-message {
            color: red;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <form method="post" action="varifyotp.php">
        <h1>Enter the OTP</h1>
        <label for="otp">Enter OTP:</label>
        <input type="text"  class="form-control" id="otp" name="otp" required>
        <br>
        <input type="submit" value="Verify OTP">
    </form>

    <?php
    if (isset($error_message)) {
        echo '<p class="error-message">' . $error_message . '</p>';
    }
    ?>
</body>
</html>





