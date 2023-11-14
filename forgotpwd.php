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
          <li class="breadcrumb-item active">Forgot Password</li>
        </ol>
      </nav>
    </div>
    <section class="section dashboard">
      <div class="row">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #370606;
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

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            box-sizing: border-box;
        }

        input[type="radio"] {
            margin: 0 5px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
        header {
      background-color: red;
      padding: 10px;
      text-align: center;
    }

    /* Style for the name in the header */
    #ogbs-name {
      color: white;
      font-size: 24px;
    }
    </style>
</head>
<body>
    <form action="otp.php" method="POST">
        <input type="text"  class="form-control"name="email" placeholder="Email">
        <br>
        <input type="radio"  name="usertype" value="admin"> Admin
        <input type="radio" name="usertype" value="customer"> User
        <input type="radio"  name="usertype" value="staff"> Staff
        <br><br>
        <input type="submit"  value="Next">
    </form>
</body>
</html>
