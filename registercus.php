<?php
session_start();
$f_name=$l_name=$email=$phn_number="";
include_once 'connection.php';
error_reporting(E_ALL);
function test_input($data)
{
	$data=trim($data);
	$data=stripslashes($data);
	htmlspecialchars($data);
}
$flag=1;
if ($_SERVER['REQUEST_METHOD']=='POST')
 { 
if(empty($_POST["f_name"])){
	
	$f_nameErr="Name is required";
	$flag=0;
} 
else{
	$f_name=$_POST["f_name"];
	if (!preg_match("/^[a-zA-Z-' ]*$/",$f_name)) {
		$f_nameErr = "Only letters and white space allowed";
		$flag=0;
	  }
}
//echo $f_name; 
if(empty($_POST["l_name"])) {
	$l_nameErr="Name is required";
	$flag=0;
}
else{
	$l_name=$_POST["l_name"];
	if (!preg_match("/^[a-zA-Z-' ]*$/",$l_name)) {
		$l_nameErr = "Only letters and white space allowed";
		$flag=0;
	  }
}
//echo $l_name;
if(empty($_POST["phn_number"])) {
	$phn_numberErr="Phone number is required";
	$flag=0;
}  
else{
	$phn_number = $_POST["phn_number"];


$pattern = '/^\d{10}$/'; // Regular expression pattern for 10-digit phone number

if (preg_match($pattern, $phn_number)) {
  $phn_number = $_POST["phn_number"];
} else {
    $phn_numberErr= "Invalid phone number";
    $flag=0;
}

}
//echo $phn_number;
if(empty($_POST["email"])){
	$emailErr = "Email is required";
	$flag=0;
}
else{
	$email = $_POST["email"];
  // check if e-mail address is well-formed
  
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    
    $emailErr = "Invalid email format";
    $flag=0;
  }
}
//echo $email;
if(empty($_POST["pwd"])){
	$pwdErr="Password is required";
	$flag=0;
}
else{
	$pwd=$_POST["pwd"];
}$pwd=$_POST["pwd"];
echo "hai";
echo "<br>";
//echo $pwd;
$confirmpassword=$_POST["confirmpassword"];
echo $confirmpassword;
$user="customer";
if($pwd==$confirmpassword)
    {
		if($flag==1){
		
    $sql="insert into customer (f_name,l_name,phn_number,email,pwd,typeofuser)values('$f_name','$l_name','$phn_number','$email','$pwd','$user')";
	
    if (mysqli_query($conn, $sql)) {
		$sql = "INSERT INTO login (email,pwd,typeofuser) VALUES ('$email','$pwd','$user')";
      mysqli_query($conn, $sql);
      $_SESSION["email"] = $email;
      header('Location:indexhome.php');
       exit();
    }  
}
}
} 
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>customerRegistrationForm</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/register.css">
	</head>

	<body>

		<div class="wrapper" style="background-image: url('images/gas7.jpg');">
			<div class="inner">
				<div class="image-holder">
					<img src="images/gas4.jpg" alt="">
				</div>
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
					<h3>Customer Registration Form</h3>
					<div class="form-group">
						<input type="text" placeholder="First Name" name="f_name" class="form-control"value="<?php echo $f_name;?>">
						<span class="error">* <?php if(isset($f_nameErr)){ echo $f_nameErr;}?></span>
						<input type="text" placeholder="Last Name" name="l_name" class="form-control"value="<?php echo $f_name;?>">
						<span class="error">* <?php if(isset($l_nameErr)){ echo $l_nameErr;}?></span>
					</div>

						<div class="form-wrapper">
							<input type="number" placeholder="Phone Number" name="phn_number" class="form-control" value="<?php echo $phn_number;?>">
							<span class="error">* <?php if(isset($phn_numberErr)){ echo $phn_numberErr;}?></span>
							<i class="zmdi zmdi-email"></i>
					
					<div class="form-wrapper">
						<input type="text" placeholder="Email Address" name="email" class="form-control" value="<?php echo $email;?>">
						<span class="error">* <?php if(isset($emailErr)){ echo $emailErr;}?></span>
						<i class="zmdi zmdi-email"></i>
					</div>
					<div class="form-wrapper">
					</div>
					<div class="form-wrapper">
						<input type="password" placeholder="Password" name="pwd" class="form-control">
						<span class="error">* <?php if(isset($pwdErr)){ echo $pwdErr;}?></span>
						<i class="zmdi zmdi-lock"></i>
					</div>
					<div class="form-wrapper">
						<input type="password" placeholder="Confirm Password" name="confirmpassword" class="form-control">
						<i class="zmdi zmdi-lock"></i>
					</div>
					<button>
						<input type="submit" value="REGISTER" name="submit" i class="zmdi zmdi-arrow-right">
</button>
				</form>
			</div>
		</div>
		
	</body>
</html>