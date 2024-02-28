<?php


require_once('config.php');
$query="select * from vehicle_detail";
$result=mysqli_query($conn,$query);

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
                            <h2 class="display-6 text-center"> Vehicle Details</h2>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered text-center">
                                <tr class="table-primary">
                                    <td>Vehicle No</td>
                                    <td>Vehicle Owner</td>
                                    <td>Vehicle Name</td>
                                    <td>Vehicle Type</td>
                                    <td>Vehicle Model</td>
                                    <td>Edit</td>
                                    <td>Delete</td>
                                </tr>
                                <tr>
                                <?php
                                if($result)
                                {

                                    while($row=mysqli_fetch_assoc($result))
                                    {

                                        $vhno = $row['vhno'];
                                        $vowner=$row['vowner'];
                                        $vname = $row['vname'];
                                        $vtype = $row['vtype'];
                                        $vmodel = $row['vmodel'];
                                    
                                        echo '<tr>
                                        <th scope="row">'.$vhno.'</th>
                                        
                                        <td>'.$vowner.'</td>
                                        <td>'.$vname.'</td>
                                        <td>'.$vtype.'</td>
                                        <td>'.$vmodel.'</td>
                                      
                                        <td><a href="edit.php?editvhno='.$vhno.'" class="btn btn-primary">edit</a></td>
                                        <td><a href="delete.php?deletevhno='.$vhno.'" class="btn btn-danger">delete</a></td>
                                        </tr>';  
                                        
                                    }
                                }
                                
                            ?>
                                
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</body>
</html>
