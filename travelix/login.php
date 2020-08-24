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
                <form method = "post" class="form contact-form" id="submit" action="checklogin.php" onSubmit="return loginValidate(this)">
                    <div class="input-group">
                        <div class="input-group">
                            <input type="text" class="input" name = "email" placeholder="yourmail@mail.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                            <span class="bar"></span>
                        </div>
                    </div>
                    <div class="input-group">
                        <input type="password" class = "input" name = "pass" placeholder="Password">
                        <span class="bar"></span>
                    </div>
                    <button type="submit" name="submit" class="btn form-btn btn-purple">Login
                        <span class="dots"><i class="fas fa-ellipsis-h"></i></span>
                    </button>
					<br></br> 
					<br>Not yet registered? <a href="register.php"><b>Register Here</b></a>
                </form>
            </div>
        </div>
    </section>
    <!--Rooms section end-->
    <!--Contact section start-->
    
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