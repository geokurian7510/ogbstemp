<?php
include_once('connection.php');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
    $fromdate = $_POST['frmdate'];
    $todate = $_POST['todate'];

    $sql = "SELECT p.pro_name, SUM(o.quantity) AS quantity, SUM(o.amount) AS amount, GROUP_CONCAT(c.f_name) AS customer_names
    FROM `oder` o
    JOIN customer c ON c.c_id = o.c_id
    JOIN tbl_product p ON p.pro_id = o.pro_id 
    WHERE o.orderdate BETWEEN '".$fromdate."' AND '".$todate."' 
    GROUP BY o.pro_id";

    $result = $conn->query($sql);

    $data = array();
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

$conn->close();
?>







<!DOCTYPE html>
<html>
<head>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        form {
            margin-bottom: 20px;
            display: flex;
            flex-wrap: wrap;
        }

        label {
            margin-right: 10px;
            margin-bottom: 5px;
        }

        input[type="date"] {
            padding: 5px;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            padding: 5px 10px;
            background-color: #007BFF;
            color: white;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        #myChart {
            max-width: 600px;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f0f0f0;
        }

        tr:hover {
            background-color: #f9f9f9;
        }
        .form-container {
            position: relative;
        }

        .close-link {
            position: absolute;
            top: 10px;
            right: 10px;
        }
        .date-range {
            font-weight: bold;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
<div class="form-container">
    <a href="admin2.php" class="close-link">Close</a>
</div>
<h2><center>Sales Report By Products</center></h2>
<form action ="report2.php" method="POST">
<label for="fromDate">From Date:</label>
<input type="date" id="fromDate" name ="frmdate">

<label for="toDate">To Date:</label>
<input type="date" id="toDate" name ="todate">
<input type ="submit" name ="submit" value ="submit">
</form>
<div class="date-range">
    <?php
    if(isset($fromdate) && isset($todate)){
        echo "Selected Date Range: " . $fromdate . " to " . $todate;
    }
    ?>
</div>
    <canvas id="myChart"></canvas>
    <script>
var ctx = document.getElementById('myChart').getContext('2d');

var labels = <?php echo json_encode(array_column($data, 'pro_name')); ?>;
var values = <?php echo json_encode(array_column($data, 'quantity')); ?>;

// Define an array of background colors
var backgroundColors = [
    'rgba(75, 192, 192, 0.2)',
    'rgba(255, 99, 132, 0.2)',
    'rgba(54, 162, 235, 0.2)',
    'rgba(255, 206, 86, 0.2)',
    'rgba(153, 102, 255, 0.2)',
    'rgba(255, 159, 64, 0.2)'
    // Add more colors as needed
];

var data = {
    labels: labels,
    datasets: [{
        label: 'Chart Data',
        data: values,
        backgroundColor: backgroundColors, // Use the array of background colors
        borderColor: backgroundColors.map(color => color.replace('0.2', '1')), // Use solid versions of the colors
        borderWidth: 1
    }]
};

var options = {
    scales: {
        y: {
            beginAtZero: true
        }
    }
};

var myChart = new Chart(ctx, {
    type: 'bar',
    data: data,
    options: options
});
</script>


<h2>Details Table</h2>
    <table border="1">
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>Amount</th>
            </tr>
        </thead>
        <tbody>
        <?php
    foreach ($data as $row) {
        echo "<tr>";
        echo "<td>" . $row['pro_name'] . "</td>";
        echo "<td>" . $row['quantity'] . "</td>";
        echo "<td>" . $row['amount'] . "</td>";

        echo "</tr>";
    }
    ?>
        </tbody>
    </table>

</body>
</html>