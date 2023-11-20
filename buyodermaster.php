<?php
session_start();
include_once("connection.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $custid = $_SESSION["customerid"];
    echo"customerid";
    $pro_id=$_SESSION['proid'];
    echo "proid".$pro_id;
    echo $custid;
    $quantity=$_SESSION['qty'];
    echo"quantity";
    echo $quantity;
    $totamt=$_SESSION['totamount'];
    echo"totamt";
    echo $totamt;
 
    $date = date("Y/m/d");
    echo $date;
    //$totamt = 0;
    $sql = "INSERT INTO ordermaster(c_id,date,total_amount,del_id,status) VALUES ('$custid', '$date', '$totamt', '$del_id', 'pending')";
    $result = mysqli_query($conn, $sql);
    $master_id=mysqli_insert_id($conn);
    $_SESSION['ordermaster_id'] = $master_id;
   
$sql1= "INSERT INTO order (ordermaster_id, pro_id, quantity, total_amount) VALUES ('$master_id', '$pro_id', '$quantity', '$totamt');";
$result = mysqli_query($conn, $sql1);
}
    
header("location:bill.php");

?>