<?php
include_once 'connection.php';
if(isset($_GET['id'])){

$id=$_GET['id'];

    $sql="update staff set status=1 where s_id='".$id."' ";
    $result=mysqli_query($conn,$sql);
}
else{
    echo "outside isset";
}
?>