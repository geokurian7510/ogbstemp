<html>
<head>
<script type="text/javascript" src="swal/jquery.min.js"></script>
<script type="text/javascript" src="swal/bootstrap.min.js"></script>
<script type="text/javascript" src="swal/sweetalert2@11.js"></script>
</head>
<body>
</html>

<?php
include_once 'connection.php';
error_reporting(E_ALL);
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    echo "";
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="select * from login where email='".$email."' and pwd='".$password."'";
    $result=mysqli_query($conn,$sql);
    //echo $result;
    $row=mysqli_fetch_array($result);
    if($row["typeofuser"]=="customer")
    {
        session_start();
        $_SESSION['email']=$email;
		$sql="select * from customer where email='".$email."'";
		$result=mysqli_query($conn,$sql);
		$row=mysqli_fetch_array($result);
		$_SESSION["customername"]=$row["f_name"];
		$_SESSION["customerid"]=$row["c_id"];
        header("location:userdashboard.php");
    }
    elseif($row["typeofuser"]=="admin")		
    {
		session_start();
        $_SESSION['email']=$email;
        header("location:admin2.php");
		$_SESSION["email"]=$row["email"];
    }
    elseif($row["typeofuser"]=="staff")
    {   session_start();
        $_SESSION['email']=$email;
		$sql="select * from staff where email='".$email."'";
		$result=mysqli_query($conn,$sql);
		$row=mysqli_fetch_array($result);
		$_SESSION["staffname"]=$row["f_name"];
		$_SESSION["staffid"]=$row["s_id"];
        header("location:staffdashboard1.php");
        
    }
    else
    {
        session_start();
        //echo "invalid usernme or password";
		?>
		<script>
			Swal.fire({
				icon: 'warning',
				text: 'wrong login information',
				didClose: () => {
					window.location.replace('index.php');
				}
			});
		</script>
		<?php

    }
}
else{
    echo "";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="CSS/indexstylelogin.css">
	<title>
		Animated login signup
	</title>
</head>

<body>
	<form action="" method="POST">
	<div id="container" class="container">
		<!-- FORM SECTION -->
		<div class="row">
			<!-- SIGN UP -->
			<div class="col align-items-center flex-col sign-up">
				<div class="form-wrapper align-items-center">
					<div class="form sign-up">
						<div class="input-group">
							<i class='bx bxs-user'></i>
							<input type="text" placeholder="Username" >
						</div> 
						<div class="input-group">
							<i class='bx bxs-lock-alt'></i>
							<input type="number" placeholder=" mobile number">
						</div>

						<div class="input-group">
							<i class='bx bx-mail-send'></i>
							<input type="email" placeholder="Email">
						</div>
						<div class="input-group">
							<i class='bx bxs-lock-alt'></i>
							<input type="password" placeholder="Password">
						</div>
						<div class="input-group">
							<i class='bx bxs-lock-alt'></i>
							<input type="password" placeholder="Confirm password">
						</div>
						<button>
							Sign up
						</button>
						<p>
							<span>
								Already have an account?
							</span>
							<b onclick="toggle()" class="pointer">
								Sign in here
							</b>
						</p>
					</div>
				</div>
				<div class="form-wrapper">
					<div class="social-list align-items-center sign-up">
						<div class="align-items-center facebook-bg">
							<i class=''></i>
						</div>
						<div class="align-items-center google-bg">
							<i class=''></i>
				
						</div>
						<div class="align-items-center twitter-bg">
							<i class=''></i>
						</div>
						<div class="align-items-center insta-bg">
							<i class=''></i>
						</div>
					</div>
				</div>
			</div>
			<!-- END SIGN UP -->
			<!-- SIGN IN -->
			<div class="col align-items-center flex-col sign-in">
				<div class="form-wrapper align-items-center">
					<div class="form sign-in">
						<div class="input-group">
							<i class='bx bx-mail-send'></i>
							<input type="text" placeholder="Email" name="email">
						</div>
						
						<div class="input-group">
							<i class='bx bxs-lock-alt'></i>
							<input type="password" placeholder="Password" name="password">
						</div>
						<button>
							LOGIN
						</button>
						<p>
							
						</p>
						<p>
							<span>
								
							</span>
							<b onclick="toggle()" class="pointer">
								
							</b>
						</p>
					</div>
				</div>
				<div class="form-wrapper">
					<div class="social-list align-items-center sign-in">
						<div class="align-items-center facebook-bg">
							<i class=''></i>
						</div>
						<div class="align-items-center google-bg">
							<i class=''></i>
						</div>
						<div class="align-items-center twitter-bg">
							<i class=''></i>
						</div>
						<div class="align-items-center insta-bg">
							<i class=''></i>
						</div>
					</div>
				</div>
			</div>
			<!-- END SIGN IN -->
		</div>
		<!-- END FORM SECTION -->
		<!-- CONTENT SECTION -->
		<div class="row content-row">
			<!-- SIGN IN CONTENT -->
			<div class="col align-items-center flex-col">
				<div class="text sign-in">
					<h2>
						Welcome back
					</h2>
					<p>
						LOGIN AND BOOK YOUR CYLINDERS NOW
					</p>
				</div>
				<div class="img sign-in">
					<img src="images/LPG3.png" alt="welcome">
				</div>
			</div>
			<!-- END SIGN IN CONTENT -->
			<!-- SIGN UP CONTENT -->
			<div class="col align-items-center flex-col">
				
				<div class="text sign-up">
					<h2>
						
					</h2>
					<p>
					</p>
				</div>
				
			</div>
			<!-- END SIGN UP CONTENT -->
		</div>
		<!-- END CONTENT SECTION -->
	</div>

	<script src="JS/index.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</form>
</body>

</html>