<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/sidebar.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="sidebar">
  <a href="home.php"><i class="fa-solid fa-house"></i> Home</a>
  <a href="reporting_offense.php"><i class="fa-solid fa-pencil"></i> Report Offense</a>
  <a href="all_offense_list.php"><i class="fa-solid fa-list"></i> Challans</a>
  <a href="search_by_challandate.php"><i class="fa-solid fa-magnifying-glass"></i> Search_by_challandate</a>
  <a href="add_vehicle_details.php"><i class="fa-solid fa-motorcycle"></i> Add new Vehicle details</a>
  <a href="vehicle_list.php"><i class="fa-solid fa-list"></i> Vehicle list</a>
  <a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
</div>

<?php
session_start();
?>



<div class="main">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-custom fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#"><h2><i class="fa-solid fa-traffic-light"></i> Traffic Violation Tracking</h2></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <!-- <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>  -->
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-regular fa-user"><?php echo " $_SESSION[username]";?></i></a>
        </li> 
        <?php
        session_abort();
        ?>
      </ul>
    </div>
  </div>
</nav>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</script>
</body>
</html>
