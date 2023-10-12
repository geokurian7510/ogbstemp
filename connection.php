<?php
$dbhost='localhost';
$dbuser='root';
$dbpass='';
$db='ogbstemp';
$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$db);
if(!$conn){
    echo "Error connecting to database: ";
}
else{
    echo "";
}
?>