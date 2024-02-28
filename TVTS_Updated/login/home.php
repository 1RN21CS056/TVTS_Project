<?php
require_once('config.php');

// Check database connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Execute the query using query()
$query = "SELECT COUNT(vhno) AS vehicleno_count FROM challan";
$stmt = $conn->query($query);

// Check for errors in query execution
if (!$stmt) {
    die("Query failed: " . $conn->error);
}

// Fetch the result using fetch()
$result = $stmt->fetch_assoc();

// Check if any result is fetched
if (!$result) {
    die("No result fetched.");
}

// Get the total count of unique UIDs
$total_unique_uids = $result['vehicleno_count'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Another Frame after login</title>
    <style>

        
        .back {
                background-color: #eeccff; /* You can change this color as needed */
            }
         .challans-box {
            width: 400px;
            height: 100px;
            background-color: #3498db;
            color:  black;
            text-align: center; 
            line-height: 100px; /* Center the text vertically */
            font-size: 30px;
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            border-radius: 80px;
            margin: 50px auto;

        }
    </style>
</head>
<body class="back">
     <?php include('sidebar.php'); ?>
    
    <div class="main">
    <!-- Display the count in a box -->
    <div class="challans-box">
        Total no of Challans: <?php echo $total_unique_uids; ?>
    </div>
    </div>
</body>
</html>
