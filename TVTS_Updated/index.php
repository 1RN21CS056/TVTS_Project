<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1">
    <title>Homepage</title>
    <link rel="icon" href="./img/policelogo.jpg" type="image/png">
    <link rel="shortcut icon" href="./img/policelogo.jpg" type="img/x-icon">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" type="text/css">
    <style>
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .traffic-rule-description {
            display: none;
        }

        .traffic-rule-description.active {
            display: block;
        }
    </style>
</head>

<body>
<header class="header" id="header">
    <!--header-start-->
    <div class="container">
        <figure class="logo animated fadeInDown delay-07s">
            <a href="#"><img src="./img/policelogo.jpg" alt=""></a>
        </figure><h><b>BANGALORE  POLICE</b></h>
        <h1 class="animated fadeInDown delay-07s">WELCOME TO BANGALORE TRAFFIC CONTROL</h1>
        <ul class="we-create animated fadeInUp delay-1s">
            <li>A LITTLE CARE MAKES <b>ACCIDENTS RARE</b></li>
        </ul>
        <a class="link animated fadeInUp delay-1s servicelink" href="login/login.php">LOGIN NOW</a>
    </div>
</header>
<!--header-end-->

<nav class="main-nav-outer" id="test">
    <!--main-nav-start-->
    <div class="container">
        <ul class="main-nav">
            <li><a href="#header">Home</a></li>
            <li><a href="login/login.php">Login Now</a></li>
            <li class="dropdown">
                <a href="#" class="dropbtn">Traffic Rules</a>
                <div class="dropdown-content">
                    <a href="#" class="show-rule" data-rule="traffic-rule-1">Traffic signs that provide information</a>
                    <a href="#" class="show-rule" data-rule="traffic-rule-2">Functions of traffic signs</a>
                    <a href="#" class="show-rule" data-rule="traffic-rule-3">Do not Drive without these Documents</a>
                    <!-- Add more rules as needed -->
                </div>
            </li>
            <li class="small-logo"><a href="#header"><img src="./img/policelogo.jpg" height="70" width="70" alt=""></a></li>
            <li><a href="#client">COFOUNDER</a></li>
            <li><a href="#team">Help Desk</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </div>
</nav>
<!--main-nav-end-->

<section class="main-section alabaster" id="Traffic">
    <!--main-section alabaster-start-->
    <div class="container">
        <div class="row">
            <figure class="col-lg-5 col-sm-4 wow fadeInLeft">
                <img src="./img/policelogo.jpg" alt="">
            </figure>
            <div class="col-lg-7 col-sm-8 featured-work">
                <h2 id="traffic-rule-1">Traffic signs that provide information</h2>
                <p class="traffic-rule-description" id="traffic-rule-1-description">The distance left to cover to reach a specific destination.<br>
                            Alternative routes to the specific destination, if any.<br>
                            Locations on the cautionary traffic signs are also displayed such as schools, colleges, workplaces, clubs, public places and restaurants.  </p>
                <h2 id="traffic-rule-2">Functions of traffic signs</h2>
				<p class="traffic-rule-description" id="traffic-rule-2-description">Knowledge of traffic signs for any driver is necessary as they perform certain functions which are essential for road safety.<br> The functions performed by traffic signs are:<br>
					The distance left to cover to reach a specific destination.<br>
					Alternative routes to the specific destination, if any.<br>
					Locations on the cautionary traffic signs are also displayed such as schools, colleges, workplaces, clubs, public places and restaurants.
					<br></p>

                <h2 id="traffic-rule-3">Do not Drive without these Documents</h2>
				<p class="traffic-rule-description" id="traffic-rule-3-description">     Valid driving license<br>
                            Vehicle registration certificate ( Form 23)<br>
                            Valid vehicle's insurance certificate<br>
                            Permit and vehicle's certificate of fitness (applicable only to transport vehicles)<br>
                            Valid Pollution Under Control Certificate On demand by a police officer in uniform or an officer of the Transport Department, produce these documents for inspection</p>

                <!-- Add more rules and descriptions as needed -->
            </div>
        </div>
    </div>
</section>
<!--main-section alabaster-end-->
<section class="main-section client-part" id="client">
    <!--main-section client-part-start-->
    <div class="container">
        <b class="quote-right wow fadeInDown delay-03"><i class="fa fa-quote-right"></i></b>
        <div class="row">
            <div class="col-lg-12">
                <h4 style="font-style: italic; color: white;"> HI WE ARE DHANUSH M & ESHWAR K . MAKER OF THIS TRAFFIC VIOLATION  TRACKING  SYSTEM  WEBSITE. THIS IS A MINI PROJECT OF DBMS</h4>
            </div>
        </div>
        <ul class="client wow fadeIn delay-05s">
            <li><a href="#">
                <img src="img/person1.png" height="130" width="135" alt="">
                <h3>Dhanush M</h3>
            </a></li>
            <li><a href="#">
                <img src="img/person2.png" height="130" width="135" alt="">
                <h3>Eshwar K</h3>
            </a></li>
        </ul>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const showRuleLinks = document.querySelectorAll('.show-rule');
        showRuleLinks.forEach(function(link) {
            link.addEventListener('click', function(event) {
                event.preventDefault();
                const ruleId = link.getAttribute('data-rule');
                const ruleDescription = document.getElementById(ruleId + '-description');
                if (ruleDescription) {
                    ruleDescription.classList.toggle('active');
                }
            });
        });
    });
</script>


</body>
</html>
