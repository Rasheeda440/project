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

if ( isset( $_POST['submit'] ) ){}
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
    <div class="hero">
        <div class="container" id = "section1">
            <div class="main-heading">
                <h1 class="title">Discover</h1>
                <h2 class="sub-title">Luxury hotels</h2>
            </div>
            <a href="#section2" class="btn btn-gradient">Explore now
                <span class="dots"><i class="fas fa-ellipsis-h"></i></span>
            </a>
        </div>
    </div>
    <!--Hero end-->
    <!--Booking section start-->
    <!--Booking section end-->
    <!--Hotels section start-->
	
    <section class="hotels" id = "section2">
        <div class="container">
            <h5 class="section-head">
                <span class="heading">Explore</span>
                <span class="sub-heading">Our beautiful hotels</span>
            </h5>
            <div class="grid">
			     
                <div class="grid-item featured-hotels">
                    <img class="hotel-image" src="images/hotel_astro_resort.jpg" alt="">
                    <h5 class="hotel-name">Astro Hotel</h5>
                    <span class="hotel-price">From $200/Night</span>
                    <div class="hotel-rating">
                        <i class="fas fa-star rating"></i>
                        <i class="fas fa-star rating"></i>
                        <i class="fas fa-star rating"></i>
                        <i class="fas fa-star rating"></i>
                        <i class="fas fa-star-half rating"></i>
                    </div>
                    <a href="#section4" class="btn btn-gradient">Book now
                        <span class="dots"><i class="fas fa-ellipsis-h"></i></span>
                    </a>
                </div>
                <div class="grid-item featured-hotels">
                    <img class="hotel-image" src="images/hotel_the_enchanted_garden.jpg" alt="">
                    <h5 class="hotel-name">Enchanted Garden</h5>
                    <span class="hotel-price">From $300/Night</span>
                    <div class="hotel-rating">
                        <i class="fas fa-star rating"></i>
                        <i class="fas fa-star rating"></i>
                        <i class="fas fa-star rating"></i>
                        <i class="fas fa-star rating"></i>
                        <i class="fas fa-star rating"></i>
                    </div>
                    <a href="#section4" class="btn btn-gradient">Book now
                        <span class="dots"><i class="fas fa-ellipsis-h"></i></span>
                    </a>
                </div>
                <div class="grid-item featured-hotels">
                    <img class="hotel-image" src="images/hotel_the_paradise.jpg" alt="">
                    <h5 class="hotel-name">The Paradise</h5>
                    <span class="hotel-price">From $350/Night</span>
                    <div class="hotel-rating">
                        <i class="fas fa-star rating"></i>
                        <i class="fas fa-star rating"></i>
                        <i class="fas fa-star rating"></i>
                        <i class="fas fa-star rating"></i>
                        <i class="fas fa-star-half rating"></i>
                    </div>
                    <a href="#section4" class="btn btn-gradient">Book now
                        <span class="dots"><i class="fas fa-ellipsis-h"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--Hotels section end-->
    <!--Special offer section start-->
    <section class="offer" id = "section33">
        <div class="container">
            <div class="offer-content">
                <div class="discount">
                    40% off
                </div>
                <h5 class="hotel-name">The Paradise</h5>
                <div class="hotel-rating">
                    <i class="fas fa-star rating"></i>
                    <i class="fas fa-star rating"></i>
                    <i class="fas fa-star rating"></i>
                    <i class="fas fa-star rating"></i>
                    <i class="fas fa-star-half rating"></i>
                </div>
                <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque deleniti harum impedit ipsum officia optio, porro praesentium qui quidem repellendus saepe, voluptatem. Ab excepturi explicabo magnam molestias natus neque, unde.</p>
                <a href="#section4" class="btn btn-gradient">Redeem offer
                    <span class="dots"><i class="fas fa-ellipsis-h"></i></span>
                </a>
            </div>
        </div>
    </section>
    <!--Special offer section end-->
    <!--Rooms section start-->
    <section class="rooms" id = "section44">
        <div class="container">
            <h5 class="section-head">
                <span class="heading">Luxurious</span>
                <span class="sub-heading">Affordable rooms</span>
            </h5>
            <div class="grid rooms-grid">
                <div class="grid-item featured-rooms">
                    <div class="image-wrap">
                        <img class="room-image" src="images/room_1.jpg" alt="">
                        <h5 class="room-name">Astro Hotel</h5>
                    </div>
                    <div class="room-info-wrap">
                        <span class="room-price">$200 <span class="per-night">Per night</span></span>
                        <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis enim in magni nemo nobis officiis quas voluptas?</p>
                        <a href="#section4" class="btn rooms-btn">Book now &rarr;</a>
                    </div>
                </div>
                <div class="grid-item featured-rooms">
                    <div class="image-wrap">
                        <img class="room-image" src="images/room_2.jpg" alt="">
                        <h5 class="room-name">Astro Hotel</h5>
                    </div>
                    <div class="room-info-wrap">
                        <span class="room-price">$200 <span class="per-night">Per night</span></span>
                        <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis enim in magni nemo nobis officiis quas voluptas?</p>
                        <a href="#section4" class="btn rooms-btn">Book now &rarr;</a>
                    </div>
                </div>
                <div class="grid-item featured-rooms">
                    <div class="image-wrap">
                        <img class="room-image" src="images/room_3.jpg" alt="">
                        <h5 class="room-name">Astro Hotel</h5>
                    </div>
                    <div class="room-info-wrap">
                        <span class="room-price">$200 <span class="per-night">Per night</span></span>
                        <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis enim in magni nemo nobis officiis quas voluptas?</p>
                        <a href="#section4" class="btn rooms-btn">Book now &rarr;</a>
                    </div>
                </div>
                <div class="grid-item featured-rooms">
                    <div class="image-wrap">
                        <img class="room-image" src="images/room_4.jpg" alt="">
                        <h5 class="room-name">Astro Hotel</h5>
                    </div>
                    <div class="room-info-wrap">
                        <span class="room-price">$200 <span class="per-night">Per night</span></span>
                        <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis enim in magni nemo nobis officiis quas voluptas?</p>
                        <a href="#section4" class="btn rooms-btn">Book now &rarr;</a>
                    </div>
                </div>
                <div class="grid-item featured-rooms">
                    <div class="image-wrap">
                        <img class="room-image" src="images/room_5.jpg" alt="">
                        <h5 class="room-name">Enchanted Garden</h5>
                    </div>
                    <div class="room-info-wrap">
                        <span class="room-price">$300 <span class="per-night">Per night</span></span>
                        <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis enim in magni nemo nobis officiis quas voluptas?</p>
                        <a href="#section4" class="btn rooms-btn">Book now &rarr;</a>
                    </div>
                </div>
                <div class="grid-item featured-rooms">
                    <div class="image-wrap">
                        <img class="room-image" src="images/room_6.jpg" alt="">
                        <h5 class="room-name">Enchanted Garden</h5>
                    </div>
                    <div class="room-info-wrap">
                        <span class="room-price">$300 <span class="per-night">Per night</span></span>
                        <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis enim in magni nemo nobis officiis quas voluptas?</p>
                        <a href="#section4" class="btn rooms-btn">Book now &rarr;</a>
                    </div>
                </div>
                <div class="grid-item featured-rooms">
                    <div class="image-wrap">
                        <img class="room-image" src="images/room_7.jpg" alt="">
                        <h5 class="room-name">Enchanted Garden</h5>
                    </div>
                    <div class="room-info-wrap">
                        <span class="room-price">$300 <span class="per-night">Per night</span></span>
                        <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis enim in magni nemo nobis officiis quas voluptas?</p>
                        <a href="#section4" class="btn rooms-btn">Book now &rarr;</a>
                    </div>
                </div>
                <div class="grid-item featured-rooms">
                    <div class="image-wrap">
                        <img class="room-image" src="images/room_8.jpg" alt="">
                        <h5 class="room-name">The Paradise</h5>
                    </div>
                    <div class="room-info-wrap">
                        <span class="room-price">$350 <span class="per-night">Per night</span></span>
                        <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis enim in magni nemo nobis officiis quas voluptas?</p>
                        <a href="#section4" class="btn rooms-btn">Book now &rarr;</a>
                    </div>
                </div>
                <div class="grid-item featured-rooms">
                    <div class="image-wrap">
                        <img class="room-image" src="images/room_9.jpg" alt="">
                        <h5 class="room-name">The Paradise</h5>
                    </div>
                    <div class="room-info-wrap">
                        <span class="room-price">$350 <span class="per-night">Per night</span></span>
                        <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis enim in magni nemo nobis officiis quas voluptas?</p>
                        <a href="#section4" class="btn rooms-btn">Book now &rarr;</a>
                    </div>
                </div>
                <div class="grid-item featured-rooms">
                    <div class="image-wrap">
                        <img class="room-image" src="images/room_10.jpg" alt="">
                        <h5 class="room-name">The Paradise</h5>
                    </div>
                    <div class="room-info-wrap">
                        <span class="room-price">$350 <span class="per-night">Per night</span></span>
                        <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis enim in magni nemo nobis officiis quas voluptas?</p>
                        <a href="#section4" class="btn rooms-btn">Book now &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
	
    <!--Rooms section end-->
    <!--Contact section start-->
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
                <form action= "#section3" method = "post" class="form contact-form" id="submit" onsubmit="return validate()">
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