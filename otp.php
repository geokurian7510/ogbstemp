<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
include_once('connection.php');
session_start();

$otp = rand(100000, 999999);
if ($_SERVER["REQUEST_METHOD"] == "POST") {

$email=$_POST['email'];
echo "EMAIL".$email;
$usertype=$_POST['usertype'];
$_SESSION['usertypeforpwdchange']=$usertype;
$_SESSION['emailforpwdchange']=$email;
echo "EMAIL in session".$_SESSION['emailforpwdchange'];
//$email="aswathyashokmanalil@gmail.com";
 // Generate a 6-digit OTP
 $sql1="select * from login where email='".$email."'";
 $rslt1=mysqli_query($conn,$sql1);
 if(mysqli_num_rows($rslt1)){

 
 $sql = "INSERT INTO otp_table (email, otp, timestamp, status) VALUES ('$email', '$otp', NOW(), 'unused')";
$rslt=mysqli_query($conn,$sql);

 













				

require 'PHPmailer/src/PHPMailer.php';
require 'PHPmailer/src/SMTP.php';
require 'PHPmailer/src/Exception.php';
$mail = new PHPMailer;


                // SMTP configuration
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'geokurian4@gmail.com';
                $mail->Password = 'qjzgvzfmecmsonqq';
                $mail->SMTPSecure = 'ssl';
                $mail->Port = 465;

                // Sender and recipient
                $mail->setFrom('geokurian4@gmail.com', 'Geo Kurian');
                $mail->addAddress($email);

                // Email content
                $mail->isHTML(true);
                $mail->Subject = 'OTP for change Password';
                $mail->Body = $otp; // Your email content


                // Send the email
                if (!$mail->send()) {
                    echo 'Message could not be sent.';
                    echo 'Mailer Error: ' . $mail->ErrorInfo;
                } else {
                    echo 'Message has been sent.';
                   header("location:varifyotp.php") ;
                }
            }
            else{
                echo "<script>alert('invalid mailID');</script>";
                header("location:login.php");
            }
        }
?>