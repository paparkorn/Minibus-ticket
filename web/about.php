<?php
session_start();
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['id']);
    unset($_SESSION['username']);
    header('location: main.php');
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>MiniBus</title>
    <link rel="icon" type="image/x-icon" href="/image/minibus-logo v.PNG">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .about-us {
            max-width: 900px;
            margin: 0 auto;
            padding: 30px;
            background-color: #e1e3e1;
            font-family: 'Poppins', sans-serif;
            box-shadow: 20px;
        }

        .about-us h1 {
            font-size: 2em;
            margin-bottom: 1em;
        }

        .about-us p {
            line-height: 1.5;
        }
    </style>
    <script>
    // Pass the session value to JavaScript
    const username = "<?php echo $_SESSION['username']; ?>";
    
    function check() {
        if(username === "") {
            
            alert("Please log in to book.");
        } else {
            // Redirect to the booking page or perform the desired action
            window.location.href = "../Ticket/booking/index.php";
        }
    }
</script>
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
                        <?php if (isset($_SESSION['success'])) : ?>
                            <div class="success">
                                <p>
                                    <?php
                                    echo $_SESSION['success'];
                                    unset($_SESSION['success']);
                                    ?>
                                </p>
                            </div>
                        <?php endif ?>
                        <?php if (isset($_SESSION['username']) && !empty($_SESSION['username'])) { ?>
                            <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
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
                                <li><a href="#" onclick="check()" id="book">Booking</a></li>
                                <li><a href="contact.php">Contact Us</a></li>

                                <li><a href="about.php">About Us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <br><br><br>
    <section class="about-us">
        <h1>About Us</h1>
        <p>Welcome to Minibus, the premier minibus reservation service that streamlines group travel. Since our founding in 2022, we've been dedicated to providing seamless and dependable transportation options for groups of all sizes. Our mission is to simplify, streamline, and enrich the travel planning experience for our consumers.</p>
        <p>At Minibus, we offer a variety of minibuses and transport services to ensure that our clients can find the ideal vehicle for their requirements. Whether you are planning a corporate event, a family excursion, a wedding, or a school trip, our dedicated staff will assist you in locating the ideal minibus and organising a hassle-free trip.</p>
        <p>Our Values:</p>
        <ul>
            <li><strong>Customer Satisfaction:</strong> We prioritise the requirements of our customers and strive to exceed their expectations by providing superior service.</li>
            <li><strong>Safety:</strong> The safety of our passengers is our number one priority. All of our vehicles undergo routine maintenance inspections, and all of our chauffeurs are highly-trained professionals with impeccable driving records.</li>
            <li><strong>Reliability:</strong> We recognise the significance of punctuality and dependability, which is why we ensure that our minibuses arrive promptly every time.</li>
            <li><strong>Eco-Friendly:</strong> We are committed to minimising our environmental impact by implementing eco-friendly practises and providing a variety of fuel-efficient vehicles.</li>

        </ul>

        <p>We have effectively served tens of thousands of customers over the years, earning a reputation for excellence in the transportation industry. We are proud of our modern fleet of well-maintained minibuses, our knowledgeable and polite drivers, and our exceptional customer service team, which is always available to assist you with your travel requirements.</p>
        <p>Choose Minibus for your next group travel experience, and we'll ensure that it's one to remember. Contact us immediately to learn more about our services and to receive a free estimate!</p>
    </section>
    <br><br><br>
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
</body>