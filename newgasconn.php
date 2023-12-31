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
include_once'connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{

    $custid=$_SESSION["customerid"];
    echo "";
    $ratcard=$_POST['ratcard'];
    
    $aadharno=$_POST['aadharno'];
    $no_of_cylinder=$_POST['no_of_cylinder'];
   
    $img = $_FILES['photo']['name'];
    $allow = array("jpg","jpeg","gif","png");
    $todir = 'uploads/';      
      if ( !!$_FILES['photo']['name'] ) // is the file uploaded yet?
      {
        echo "";
            $info = explode('.', strtolower( $_FILES['photo']['name']) ); // whats the extension of the file
    
            if ( in_array( end($info), $allow) ) // is this file allowed
            {
                echo "";
                if ( move_uploaded_file( $_FILES['photo']['tmp_name'], $todir . basename($_FILES['photo']['name'] ) ) )
                {
                    echo "";
                    echo " ";
                    $dst_db="uploads/".$img;
                }
            }
            else
            {
                $imageErr= " error this file ext is not allowed";
                $flag=0;
            }
        }
        $sqlcheck="select * from connection where c_id ='".$custid."'";
        $checkrslt=mysqli_query($conn,$sqlcheck);
        if(mysqli_num_rows($checkrslt)>0)
        {?>
            <script>
                Swal.fire({
                    icon: 'warning',
                    text: 'Alread have an Active connection',
                    didClose: () => {
                        window.location.replace('../ogbstemp/newgasconn.php');
                    }
                });
            </script>
        <?php }
        $sqlration="select * from connection where ratcard ='".$ratcard."'";
        $rlt=mysqli_query($conn,$sqlration);
        if($rlt->num_rows > 0){
            ?>
            <script>
                Swal.fire({
                    icon: 'warning',
                    text: 'Ration Card already Exist!',
                    didClose: () => {
                        window.location.replace('../ogbstemp/newgasconn.php');
                    }
                });
            </script>
            <?php
    
        }else{
            $sql = "insert into connection(ratcard,c_id,aadharno,no_of_cylinder,photo) values('$ratcard','$custid','$aadharno','$no_of_cylinder','$img')";
    $result=mysqli_query($conn,$sql);
    $connid=mysqli_insert_id($conn);
    $_SESSION['connid']=$connid;
    header("location:connproductminu.php");
            
        }
    ?>
            <script>
                Swal.fire({
                    icon: 'success',
                    text: 'Updated Successfully',
                    didClose: () => {
                        window.location.replace('../userdashboard.php');
                    }
                });
            </script>
            <?php
}

else{
}
?>
<?php include_once('connection.php');?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title></title>
  <!-- Design by foolishdeveloper.com -->
    <title></title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css”>

    <!--Stylesheet-->
    <style media="screen">
      *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing:content-box;
}
body{
    
  background-image: url('images/newconn.jpeg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;

}
.background{
    width: 430px;
    height: 520px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
}
.background .shape{
    height: 200px;
    width: 200px;
    position: absolute;
    border-radius: 50%;
}
form{
    height: 520px;
    width: 400px;
    background: transparent;
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
}
form *{
    font-family: 'Poppins',sans-serif;
    color: #130202;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h3{
    font-size: 32px;
    font-weight: 500;
    line-height: 2px;
    text-align: center;
}

label{
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 500;
}
input{
    display: block;
    height: 50px;
    width: 100%;
    background-color: rgba(255,255,255,0.07);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}
::placeholder{
    color: #110101;
}
button{
    margin-top: 50px;
    width: 100%;
    background-color: #ffffff60;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}


    </style>
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    <form method="POST" action="newgasconn.php" enctype="multipart/form-data">
        <h3>New Connection</h3>
        <label for="cat_i">Ration Card Number </label>
        <input type="text" placeholder="" name="ratcard" id="" pattern="[0-9]{10}" title="Ration Card Number must be 10 Digits" required>
      
        <label for="image">Image </label>
        <input type="file" placeholder="" name="photo" id="" required>
        <label for="aadharno">Aadhar Number</label>
        <input type="text" placeholder="" name="aadharno" id="" pattern="[0-9]{12}" title="Aadhar Number must be 12 Digits" required>

        <label for="no_of_cylinder">Number of cylinders</label>
<select name="no_of_cylinder" id="no_of_cylinder" required>
    <option value="1">1</option>
    <option value="2">2</option>
</select>
<br>

        
      <br>
        <input type="submit" name="" id = "Add" value="SUBMIT">
       
    </form></div></div></div>








    
   
</body>
</html>






