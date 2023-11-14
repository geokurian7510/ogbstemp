<?php include('connection.php');
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["s_id"])) {
    // Get the staff ID from the form
    $s_id = $_POST["s_id"];
    // Update the staff status from 2 to 1
    $sql = "UPDATE staff SET status = 1 WHERE status = 2 AND s_id = $s_id";
    mysqli_query($conn, $sql);
    
    // Redirect back to the staff list page
    header("Location: viewstaff1.php"); // Replace with the actual page name
}
?>

