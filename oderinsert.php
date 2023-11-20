<?php
session_start();
include_once("connection.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $custid = $_SESSION["customerid"];
    echo"customerid";
    $pro_id=$_SESSION['pro_id'];
    echo "pro_id".$pro_id;
    echo $custid;
    $quantity=$_SESSION['quantity'];
    echo"quantity";
    echo $quantity;
    $totamt=$_SESSION['totalamount'];
    echo"totamt";
    echo $totamt;
    $date = date("Y/m/d");
    echo $date;$status=0;
    //$totamt = 0;
    
   
$sql1= "INSERT INTO oder (c_id, pro_id, quantity,amount,orderdate,status) VALUES
 ('$custid', '$pro_id', '$quantity', '$totamt','$date','$status');";
$result = mysqli_query($conn, $sql1);
$_SESSION['orderid']=mysqli_insert_id($conn);
}
    
header("location:oderpayment.php");

?>