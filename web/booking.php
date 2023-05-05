<?php 
    session_start();
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
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
                            <p><a href="main.php?logout='1'" style="color:blue">Logout</a></p>
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
                                <li><a href="booking.php">Booking</a></li>
                                <li><a href="contact.php">Contact Us</a></li>
                                <li><a href="help.php">Help</a></li>
                                <li><a href="about.php">About Us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="rightCb">
                    <div class="container-location">
                        <a href="location.php">Our Location</a>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 column">
                        <fieldset>
                            <legend><h1>Enter Details</h1></legend>
                        <form action="booking_db.php" method="POST" enctype="multipart/form-data" class="form-body">
                            <div class="radio-inline">
                                <label>
                                    <input type="radio" name="travel_type" value="oneway" checked>One way
                                </label>
                            </div>
                            <div class="radio-inline">
                                <label>
                                    <input type="radio" name="travel_type" value="roundtrip">Round trip
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="from">From</label>
                                <select class="form-control" name="from"id="from">
                                    <option></option>
                                    <option value="BRI">Brighton</option>
                                    <option value="LON">London</option>
                                    <option value="CAM">Cambridge</option>
                                    <!-- <option value="OXF">Oxford</option>
                                    <option value="MAN">Manchester</option> -->
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="to">To</label>
                                <select class="form-control"name="to" id="to">
                                    <option></option>
                                    <option value="BRI">Brighton</option>
                                    <option value="LON">London</option>
                                    <option value="CAM">Cambridge</option>
                                    <!-- <option value="OXF">Oxford</option>
                                    <option value="MAN">Manchester</option> -->
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="ondate">On</label><input type="date" class="form-control" id="ondate"name="ondate" required>
                            </div>
                            <div class="form-group">
                                <label for="returndate">Return</label><input type="date"name="returndate" class="form-control" id="returndate">
                            </div>
                            <div class="form-group">
                            <label for="passenger">Passenger:</label>
                            <input type="number" id="passenger" name="passenger" step="1">
                            </div>
                            <div class="form-group">
                                <label for="returndate">Price</label>
                                <span id="amount"></span>
                                <div id="slider-range"></div>
                            </div>
                            <input type="submit" name="Submit" value="Submit" class="btn" style="margin-left:150px;margin-top:10px;">
                        </form>
                        </fieldset>
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
</body>