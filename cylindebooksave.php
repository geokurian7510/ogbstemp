<html>
<head>
<script type="text/javascript" src="swal/jquery.min.js"></script>
<script type="text/javascript" src="swal/bootstrap.min.js"></script>
<script type="text/javascript" src="swal/sweetalert2@11.js"></script>
</head>
<body>
</html>
<?php

include_once('connection.php');
session_start();
$cylinderid = $_SESSION['cylinderid'];
$userId = $_SESSION["customerid"];
echo "userid" . $userId;
$today = date('Y-m-d');
$currentMonth = date('Y-m');

// Function to check if the user has exceeded the monthly limit
function hasExceededMonthlyLimit($userId)
{
    global $conn;

    $currentMonth = date('Y-m');
    $sql = "SELECT COUNT(*) as count FROM gas_cylinder_bookings WHERE user_id = $userId AND DATE_FORMAT(booking_date, '%Y-%m') = '$currentMonth'";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row['count'] >= 2;
    }

    return false;
}

// Function to check if the user has exceeded the yearly limit
function hasExceededYearlyLimit($userId)
{
    global $conn;

    $currentYear = date('Y');
    $sql = "SELECT COUNT(*) as count FROM gas_cylinder_bookings WHERE user_id = $userId AND YEAR(booking_date) = $currentYear";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row['count'] >= 15;
    }

    return false;
}

// Function to make a booking
function makeBooking($userId)
{
    global $conn;

    // Check if the user has exceeded the monthly limit
    if (hasExceededMonthlyLimit($userId)) {
        echo '<script>alert("Sorry, you have already booked 2 cylinders this month.");</script>';
        return;
    }

    // Check if the user has exceeded the yearly limit
    if (hasExceededYearlyLimit($userId)) {
        echo "Sorry, you have already booked 15 cylinders this year.";
        return;
    }

    // If limits are not exceeded, make the booking
    $currentDate = date('Y-m-d');

    $checkDuplicateSql = "SELECT * FROM gas_cylinder_bookings WHERE user_id = $userId AND booking_date = '$currentDate'";
    $duplicateResult = $conn->query($checkDuplicateSql);
    
    if ($duplicateResult && $duplicateResult->num_rows > 0) {
        // Handle the case where a record already exists for the same day
        echo "You have already booked a cylinder for today.";
    }else{





    $sql = "INSERT INTO gas_cylinder_bookings (user_id, booking_date) VALUES ($userId, '$currentDate')";

    if ($conn->query($sql) === TRUE) {
        echo "Cylinder booked successfully.";
          header("Location: payment.php");

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}}

// Example usage: Replace '1' with the actual user ID
makeBooking($userId);

// Close the database connection
$conn->close();
?>
