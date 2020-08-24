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
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
if(empty($name)){
    echo '<script>alert("The name is empty.")</script>';
}else if(empty($email)){
    echo '<script>alert("The email is empty.")</script>';
} else if(empty($subject)){
    echo '<script>alert("The subject is empty.")</script>';
}
else if(empty($message)){
    echo '<script>alert("The message is empty.")</script>';
}else{
$sql="INSERT INTO message (name, email, subject, message) VALUES ('".$name."','".$email."', '".$subject."', '".$message."')";


if (mysqli_query($conn, $sql)) {
  echo '<script>alert("Your response has been recorded successfully")</script>'; 
} else {
	echo '<script>alert("Error: " . $sql . "<br>" . $conn->error)</script>';
}
}
$conn->close();

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
    <section class="contact">
        <div class="container">
            <h5 class="section-head">
                <span class="heading">Contact</span>
                <span class="sub-heading">Get in touch with us</span>
            </h5>
            <div class="contact-content" id = "section3">
                <div class="traveler-wrap">
                    <img src="images/traveler.png" alt="">
                </div>
                <form action= "contact.php" method = "post" class="form contact-form" id="submit" onsubmit="return validate()">
                    <div class="input-group-wrap">
                        <div class="input-group">
                            <input type="text" class="input" name = "name" placeholder="Name">
                            <span class="bar"></span>
                        </div>
                        <div class="input-group">
                            <input type="text" class="input" name ="email" placeholder="E-mail">
                            <span class="bar"></span>
                        </div>
                    </div>
                    <div class="input-group">
                        <input type="text" class="input" name = "subject" placeholder="Subject">
                        <span class="bar"></span>
                    </div>
                    <div class="input-group">
                        <textarea class="input" cols="30" rows="8" name = "message" placeholder="Message" re></textarea>
                        <span class="bar"></span>
                    </div>
                    <button type="submit" name="submit" class="btn form-btn btn-purple">Send Message
                        <span class="dots"><i class="fas fa-ellipsis-h"></i></span>
                    </button>
                </form>
            </div>
        </div>
    </section>
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