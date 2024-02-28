<?php
session_start();
require_once('config.php');
$query = "SELECT * FROM Challan";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Offense List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <style>
      .back {
            background-color: #eeccff; /* Background color */
        }
    </style>
    
</head>
<body class="back">
    <?php include('sidebar.php'); ?>

    <div class="main">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h2 class="display-6 text-center">Offense List </h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered text-center">
                            <thead class="table-primary">
                                <tr>
                                    <th>Challan ID</th>
                                    <th>Vehicle No</th>
                                    <th>Violation Type</th>
                                    <th>Challan Cost</th>
                                    <th>Challan Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if($result) {
                                    while($row = mysqli_fetch_assoc($result)) {
                                        $challan_id = $row['challan_id'];
                                        $vhno = $row['vhno'];
                                        $challan_date = $row['challan_date'];
                                        $challan_cost = $row['challan_cost'];
                                        $violation_type = $row['violation_type'];
                                        
                                        echo '<tr>
                                                <td>'. $challan_id.'</td>
                                                <td>'. $vhno.'</td>
                                                <td>'. $violation_type.'</td>
                                                <td>'. $challan_cost.'</td>
                                                <td>'. $challan_date.'</td>
                                              </tr>';  
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
