
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/signup.css">
    <title>MiniBus</title>
    <link rel="icon" type="image/x-icon" href="/image/minibus-logo v.PNG">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                    <div class="loginBox">
                        <a href="login.php">Login</a>
                        <a href="signup.php">Sign up</href></a>
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
        <div class="signup-container">
            <h2>Sign up</h2>
             <?php if (isset($_SESSION['error'])) : ?>
    <div class="error">
        <h4><?php 
            echo $_SESSION['error'];
            unset($_SESSION['error']);
        ?></h4>
    </div>
<?php endif ?>
            
        <form action="register_db.php" method="post" id="register">
            
            <div class="input-group">
                <label for="username">Username</label>
                <input type="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="password_1">Password</label>
                <input type="password" name="password_1" required>
            </div>
            <div class="input-group">
                <label for="password_2">Confirm password</label>
                <input type="password" name="password_2" required>
            </div>
            <div class="input-group">
                <input type="submit" name="reg_user" class="btn">
            </div>
            
            <p> Already a member? <a href="login.php">Sign in</a></p>
        </form>
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