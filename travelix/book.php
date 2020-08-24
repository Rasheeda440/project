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
<?php

if ( isset( $_POST['submit'] ) ){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "travelix";

// Create connection
$connn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($connn->connect_error) {
  die("Connection failed: " . $connn->connect_error);
}
$name = $_POST['custname'];
$email = $_POST['custemail'];
$number = $_POST['phonenumber'];
$message = $_POST['package'];
if(empty($name)){
    echo '<script>alert("The name is empty.")</script>';
}else if(empty($email)){
    echo '<script>alert("The email is empty.")</script>';
} else if(empty($number)){
    echo '<script>alert("The Phone number is empty.")</script>';
}else if(empty($message)){
    echo '<script>alert("The Package details are empty.")</script>';
}else{
  $newsql = "INSERT INTO travelix.order (customer_name, customer_email, customer_phone, customer_packagedetail) VALUES ('".$name."','".$email."', '".$number."', '".$message."')";
if (mysqli_query($connn, $newsql)){
    echo '<script>alert("Your response has been recorded successfully")</script>'; 
}else {
	echo '<script>alert("Error: " . $sql . "<br>" . $conn->error)</script>';
}
}
$connn->close();

}
?>
<!--Header start-->
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
            <ul class="nav-list">
                <li class="nav-item">
                    <a href="index.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="about.html" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a href="book.php" class="nav-link">Book now</a>
                </li>
                <li class="nav-item">
                    <a href="news.html" class="nav-link">News</a>
                </li>
                <li class="nav-item">
                    <a href="contact.php" class="nav-link">Contact</a>
                </li>
            </ul>
        </nav>
    </div>
</header>
<!--Header end-->
<!--Main start-->
<main class="main">
    <!--Hero start-->
	<section class="Book Now" id = "section4">
        <div class="container">
            <h5 class="section-head">
                <span class="heading">BOOK NOW</span>
                <span class="sub-heading">We are Glad to welcome you</span>
            </h5>
            <div class="contact-content" id = "section3">
                <div class="traveler-wrap">
                    <img src="images/traveler.png" alt="">
                </div>
                <form action= "book.php" method = "post" class="form contact-form" id="submit" onsubmit="return validate()">
                    <div class="input-group-wrap">
                        <div class="input-group">
                            <input type="text" class="input" name = "custname" placeholder="Name">
                            <span class="bar"></span>
                        </div>
                        <div class="input-group">
                            <input type="text" class="input" name ="custemail" placeholder="yourmail@mail.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                            <span class="bar"></span>
                        </div>
                    </div>
                    <div class="input-group">
                        <input type="text" class = "input" name = "phonenumber" placeholder="03x-xx-xxxxxx" pattern="[0-9]{3}-[0-9]{2}-[0-9]{6}">
                        <span class="bar"></span>
                    </div>
                    <div class="input-group">
                        <textarea class = "input" cols="30" rows="8" name = "package" placeholder="Type Your Selected Package Details" re></textarea>
                        <span class="bar"></span>
                    </div>
                    <button type="submit" name="submit" class="btn form-btn btn-purple">Book Now
                        <span class="dots"><i class="fas fa-ellipsis-h"></i></span>
                    </button>
                </form>
            </div>
        </div>
    </section>
    <!--Rooms section end-->
    <!--Contact section start-->
    <!--Contact section end-->
</main>
<!--Main end-->
<!--Footer section start-->
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
</html>