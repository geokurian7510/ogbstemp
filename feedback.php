<?php
include_once 'connection.php'; // Make sure this file contains the database connection code and initializes $conn.
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $custid=$_SESSION["customerid"];
    $date = date("y/m/d");
    $comment= $_POST['comment'];
    $rating = $_POST['rating'];

    // Retrieve the user ID from your session or another source and assign it to $user_id.
    // Replace with the actual user ID.

    // Make sure to use the correct table name and column names in your SQL query.
    $sql = "INSERT INTO feedback(c_id,date, comment, rating) VALUES ('$custid','$date','$comment','$rating')";
    $result = mysqli_query($conn,$sql);

    if ($result) {
        echo "feedback submitted";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
