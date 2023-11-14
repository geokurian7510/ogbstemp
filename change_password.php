<html>
<head>
<script type="text/javascript" src="swal/jquery.min.js"></script>
<script type="text/javascript" src="swal/bootstrap.min.js"></script>
<script type="text/javascript" src="swal/sweetalert2@11.js"></script>
</head>
<body>
</html>
<?php
session_start();
include_once('connection.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $user_email = $_SESSION['emailforpwdchange'];
    $usertype=$_SESSION['usertypeforpwdchange'];
    $newpwd=$_POST['newpwd'];
    $confirmpwd=$_POST['confirmpwd'];
    if($newpwd==$confirmpwd){
    $sql="update login set pwd='".$newpwd."' where email='".$user_email."'"; 
    $result=mysqli_query($conn,$sql);
    if($usertype=='staff')
    {
        $sqlstaff="update staff set pwd='".$newpwd."' where email='".$user_email."'"; 
        $rsltstaff=mysqli_query($conn,$sqlstaff);
    }
    else if($usertype=='customer'){
        $sqluser="update customer set pwd='".$newpwd."' where email='".$user_email."'";
        $rsltuser=mysqli_query($conn,$sqluser);
    }
    ?>
    <script>
        Swal.fire({
            icon: 'success',
            text: 'password changed sucessfully',
            didClose: () => {
                window.location.replace('ADMINPROFILE.php');
            }
        });
    </script>
    <?php    }
    else{
    echo "<script>alert('password does not match');</script>";
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
          <li class="breadcrumb-item"><a href="index.php">Login</a></li>
          <li class="breadcrumb-item ">Forgot Password</li>
          <li class="breadcrumb-item ">Varify Otp</li>
          <li class="breadcrumb-item active">Change Password</li>


        </ol>
      </nav>
    </div>    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #370606;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        input[type="password"] {
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
    </style>
</head>
<body>
    <form method="POST" action="">
        <h1>Password Change</h1>
        <input type="password" placeholder="New Password" name="newpwd" required>
        <br><br>
        <input type="password" placeholder="Repeat Password" name="confirmpwd" required>
        <br>
        <input type="submit"  name="save" value="Change Password">
    </form>
</body>
</html>
