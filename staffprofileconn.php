<?php
// Include the database connection file
include 'connection.php';

// Assume you have a session variable for staff_id
$staffid = $_SESSION["staffid"];

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect data from the form
    $newFirstName = $_POST["newFirstName"];
    $newLastName = $_POST["newLastName"];
    $newPhone = $_POST["newPhone"];
    $newEmail = $_POST["newEmail"];

    // Update the staff table with the new data
    $update_sql = "UPDATE staff SET f_name='$newFirstName', l_name='$newLastName', phn_number='$newPhone', email='$newEmail' WHERE s_id=$staffid";

    if ($conn->query($update_sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

// Fetch data from the staff table
$sql = "SELECT * FROM staff WHERE s_id = $staffid";
$result = $conn->query($sql);

// Check if the query was successful
if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $f_name = $row["f_name"];
    $l_name = $row["l_name"];
    $phn_number = $row["phn_number"];
    $email = $row["email"];
} else {
    // Handle errors or redirect to an error page
    echo "Error fetching data from the database";
    exit();
}

// Close the database connection
$conn->close();
?>