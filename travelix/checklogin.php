<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Travelix</title>
    <!--Font awesome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
	<style>
     html{
       scroll-behavior: smooth;
    }
    </style>
</head>
<body>
    <header class="header">
    <div class="container">
        <nav class="nav">
            <a href="index.html" class="logo">
                <img src="images/logo.png" alt="" class="logo-image">
            </a>
            <div class="hamburger-menu">
                <i class="fas fa-bars open-state"></i>
                <i class="fas fa-times close-state"></i>
            </div>
            
        </nav>
    </div>
</header>
    <!--Hotels section end-->
    <!--Special offer section start-->
	<section class="Book Now" id = "section4">
        <div class="container">
            <h5 class="section-head">
                <span class="heading">SiGN IN</span>
                <span class="sub-heading">We Welcome You</span>
            </h5>
            <div class="contact-content" id = "section3">
                <div class="traveler-wrap">
                    <img src="images/traveler.png" alt="">
                </div>
                <div >
		<h1>Invalid Credentials Provided </h1>

		</div>

		<div>

		<?php
			ini_set ("display_errors", "1");
			error_reporting(E_ALL);
			ob_start();

			
			$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "travelix";

   // Create connection
   $conn = new mysqli($servername, $username, $password, $dbname);
   // Check connection
    if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
    }

			// Defining your login details into variables
			$myusername = mysqli_real_escape_string($conn,$_POST['email']);
            $mypassword = mysqli_real_escape_string($conn,$_POST['pass']); 

	

			$sql="SELECT * FROM tbmembers WHERE email='$myusername' and password='$mypassword'" or die(mysqli_error());
			$result= mysqli_query($conn,$sql);
			$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
            //$active = $row['active'];

			// Checking table row
			$count=mysqli_num_rows($result);
			// If username and password is a match, the count will be 1

			if($count == 1){
				// If everything checks out, you will now be forwarded to voter.php
				//$user = $result_fetch_assoc();
     		    //$_SESSION['member_id'] = $user['member_id'];
				
				$_SESSION["member_id"]=$row["member_id"];
				$_SESSION["email"]=$row["email"];
				header("location:index.php");
			}
			//If the username or password is wrong, you will receive this message below.
			else {
				echo "Wrong Username or Password<br><br>Return to <a href=\"login.php\">Login</a>";
			}

			ob_end_flush();

		?> 

		</div>
            </div>
        </div>
    </section>
 <footer class="footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-content-brand">
                <a href="index.html" class="logo">
                    <img src="images/logo.png" alt="" class="logo-image">
                </a>
                <p class="paragraph">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus dolorum, ex laudantium quia quos repellendus sit ullam voluptatem. A adipisci aliquam debitis dolorem est fugiat nulla provident quaerat, quis unde.
                </p>
            </div>
            <div class="social-media-wrap">
                <h4 class="footer-heading">Follow us</h4>
                <div class="social-media">
                    <a class="sm-link" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="sm-link" href="#"><i class="fab fa-facebook-square"></i></a>
                    <a class="sm-link" href="#"><i class="fab fa-instagram"></i></a>
                    <a class="sm-link" href="#"><i class="fab fa-pinterest"></i></a>
                    <a class="sm-link" href="#"><i class="fab fa-tripadvisor"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--Footer section end-->
<script src="main.js"></script>
</body>
</html>