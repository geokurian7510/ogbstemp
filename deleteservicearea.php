<?php
include('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['ids'];
    $sql = "DELETE FROM servicearea WHERE serviceid='" . $id . "'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        // Redirect to staffservicearea1.php after successful deletion
        header("Location: staffservicearea1.php");
        exit(); // Make sure to exit after sending the header to prevent further execution
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
} else {
    echo "";
}
?>
