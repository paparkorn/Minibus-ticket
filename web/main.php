<?php
session_start();
if (isset($_GET['logout'])) {
    session_destroy();

    unset($_SESSION['username']);
    header('location: main.php');
}
?>
<?php
if (!isset($_SESSION['username'])) {
    header('location: login.php');
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/main.css">
    <title>MiniBus</title>
    <link rel="icon" type="image/x-icon" href="/image/minibus-logo v.PNG">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div id="main_page" class="page-container">
        <div class="header">
            <div class="hTop">
                <div class="leftC">
                    <div class="logo">
                        <a href="main.php"><img src="image/minibus-logo v.PNG"></href></a>
                    </div>
                    <div class="cpname">
                        <h2>MiniBus</h2>
                    </div>
                </div>
                <div class="rightC">
                    <div class="user_content">
                        <?php if (isset($_SESSION['error'])) : ?>
					<div class="error">
						<h4><?php 
							echo $_SESSION['error'];
							unset($_SESSION['error']);
						?></h4>
					</div>
				<?php endif ?>
				<?php if (isset($_SESSION['success'])) : ?>
					<div class="success">
						<h4><?php 
							echo $_SESSION['success'];
							unset($_SESSION['success']);
						?></h4>
					</div>
				<?php endif ?>
                        <?php if (isset($_SESSION['username']) && !empty($_SESSION['username'])) { ?>
                            <p style="float:left">Welcome <?php echo $_SESSION['username']; ?></strong></p>
                            <p><a href="main.php?logout='1'" style="background: red;
                                color: white;
                                text-decoration: none;
                                padding: 5px;
                                border-radius: 10px;">Logout</a></p>
                        <?php } else { ?>
                            <div class="loginBox">
                                <a href="login.php">Login</a>
                                <a href="signup.php">Sign up</href></a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="hBtm">
                <div class="leftC">
                    <div class="navBar">
                        <nav>
                            <ul>
                                <li><a href="main.php">Home</a></li>
                                <li><a href="../Ticket/booking/index.php">Booking</a></li>
                                <li><a href="contact.php">Contact Us</a></li>

                                <li><a href="about.php">About Us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

            </div>
        </div>
        <div class="content-container">
            <video id="videobbg" autoplay muted loop>
                <source src="image/MiniBus (4) - Trim.mp4">
            </video>

        </div>

        <div class="services-container">
            <h2>Services</h2>
            <div class="services-box">
                <div class="services-c">
                    <div class="circular_image">
                        <img src="image/bus-inside.jpg">
                    </div>
                    <div class="information-article">
                        <h3>Comfortable Seat</h3>
                        <p>Our minibusses feature high-quality,
                            comfortable seats to ensure you can sit back and relax during your journey.
                            With a variety of seating options available, including extra legroom and built-in amenities,
                            we have everything you need to make your trip as comfortable as possible.
                            Book with us today for a comfortable and enjoyable travel experience!</p>
                    </div>
                </div>
                <div class="services-c">
                    <div class="circular_image">
                        <img src="image/parking_lot.webp">
                    </div>
                    <div class="information-article">
                        <h3>Parking</h3>
                        <p>Our minibus service offers free parking to customers who book a ride with us.
                            Park with us for both short and long-term trips,
                            and return to find your car waiting for you.
                            Book with us today for a smooth,
                            stress-free travel experience with the added convenience of free parking!</p>
                    </div>
                </div>
                <div class="services-c">
                    <div class="circular_image">
                        <img src="image/helpdesk-clipart-7.jpg">
                    </div>
                    <div class="information-article">
                        <h3>Help Services</h3>
                        <p>Our help desk team is available 24/7 to assist you with any questions or concerns you may have before,
                            during, or after your trip. Whether you need help with booking,
                            finding your pick-up location, or making changes to your itinerary,
                            our team is here to help.
                            Book with us today for a reliable and supportive travel experience!</p>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer" id="footer">
            <div class="section-center">
                <p class="text" id="text">

                    &copy; <span>MiniBus</span><br><br><br>
                    <i class="fa-brands fa-facebook fa-beat-fade fa-xl"></i>&nbsp;&nbsp;&nbsp;
                    <i class="fa-brands fa-twitter fa-beat-fade fa-2xl"></i>&nbsp;&nbsp;&nbsp;
                    <i class="fa-brands fa-instagram fa-beat-fade fa-2xl"></i>&nbsp;&nbsp;&nbsp;
                    <i class="fa-solid fa-envelope fa-beat-fade fa-2xl"></i>&nbsp;&nbsp;&nbsp;
                </p>
            </div>
        </footer>
    </div>

</body>

</html>