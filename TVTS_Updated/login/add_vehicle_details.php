<?php

include'config.php';
session_start();


if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])) {

    // $name=$_POST['name'];
    // $adds=$_POST['adds'];
    // $pno=$_POST['pno'];
    // $aids=$_POST['aids'];
    // $email=$_POST['email'];
    // $challandate=$_POST['challandate'];
    $vhno = $_POST['vhno'];
    $vowner=$_POST['vowner'];
    $vname = $_POST['vname'];
    $vtype = $_POST['vtype'];
    $vmodel = $_POST['vmodel'];
    // $ccost = $_POST['ccost'];
    // $cdesc = $_POST['cdesc'];
   
    // $sql= $conn->prepare("INSERT INTO `u_info` (pid,name,adds,pno,aids,email,challandate) VALUES(?,?,?,?,?,?,?)");
    // $sql->execute([$_SESSION['pid'], $name, $adds, $pno, $aids, $email, $challandate]);
    
    // $stmt_select = $conn->prepare("SELECT uid FROM u_info WHERE name= ?");
    // $stmt_select->bind_param("s", $name);
    // $stmt_select->execute();
    // $result = $stmt_select->get_result();

    // $row = $result->fetch_assoc();
    // $uid = $row['uid'];

    // $stmt_insert = $conn->prepare("INSERT INTO vehicle_detail ( vhno,vowner, vname,vtype, vmodel) VALUES (?, ?, ?, ?, ?)");
    // $stmt_insert->bind_param("sssss",  $vhno,$vowner,$vname,$vtype,$vmodel);
    // $stmt_insert->execute();

    $sql = "INSERT INTO vehicle_detail (vhno, vowner, vname, vtype, vmodel) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$vhno, $vowner, $vname, $vtype, $vmodel]);
}

session_abort();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Violator Details</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="css/sidebar.css">
  <style>
      .back {
            background-color: #eeccff; /* Background color */
        }
    </style>
</head>

<body class="back">

<?php include('sidebar.php'); ?>

<div class="main"> 
<h2>Add New Vehicle Details</h2>      
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
          echo '<div class="success" role="alert">Report submitted successfully!</div>';
        }
      ?>
      <!-- <h2 class="form-title">Add Violator Details</h2> -->
      <form method="post">
       <!-- <table class="table">
          <tbody>
             <tr>
              <td><label for="name" class="form-label">Name</label></td>
              <td><input type="text" class="form-control" id="name" name="name" required></td>
            </tr>
            <tr>
              <td><label for="adds" class="form-label">Address</label></td>
              <td><input type="text" class="form-control" id="adds" name="adds" required></td>
            </tr>
            <tr>
              <td><label for="pno" class="form-label">Phone Number</label></td>
              <td><input type="text" class="form-control" id="pno" name="pno" required></td>
            </tr>
            <tr>
              <td><label for="aids" class="form-label">Aadhar Number</label></td>
              <td><input type="text" class="form-control" id="aids" name="aids" required></td>
            </tr>
            <tr>
              <td><label for="email" class="form-label">Email</label></td>
              <td><input type="email" class="form-control" id="email" name="email" required></td>
            </tr>
            <tr>
              <td><label for="challandate" class="form-label">Challan Date</label></td>
              <td><input type="date" class="form-control" id="challandate" name="challandate" required></td>
            </tr> 
          </tbody>
        </table>-->
        
        <h2 class="form-title">Add Vehicle Details</h2>
        <table class="table">
          <tbody>
            <tr>
              <td><label for="vhno" class="form-label">Vehicle Number</label></td>
              <td><input type="text" class="form-control" id="vhno" name="vhno" required></td>
            </tr>
            <tr>
              <td><label for="vname" class="form-label">Vehicle Owner</label></td>
              <td><input type="text" class="form-control" id="vowner" name="vowner" required></td>
            </tr>
            <tr>
              <td><label for="vtype" class="form-label">Vehicle Name</label></td>
              <td><input type="text" class="form-control" id="vname" name="vname" required></td>
            </tr>
            
            <tr>
              <td><label for="vtype" class="form-label">Vehicle Type</label></td>
              <td><input type="text" class="form-control" id="vtype" name="vtype" required></td>
            </tr>
            <tr>
              <td><label for="vmodel" class="form-label">Vehicle Model</label></td>
              <td><input type="text" class="form-control" id="vmodel" name="vmodel" required></td>
            </tr>
            <!-- <tr>
              <td><label for="ccost" class="form-label">Challan Cost</label></td>
              <td><input type="text" class="form-control" id="ccost" name="ccost" required></td>
            </tr>
            <tr>
              <td><label for="cdesc" class="form-label">Challan Description</label></td>
              <td><textarea class="form-control" id="cdesc" name="cdesc" rows="3" required></textarea></td>
            </tr> -->
          </tbody>
        </table>
        
        <button type="submit" class="btn btn-primary" name="submit">Add Details</button>
      </form>
    </div>
  </div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>