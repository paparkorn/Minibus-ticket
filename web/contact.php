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
    <link rel="stylesheet" href="css/style1.css">
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
                    <div class= "user_content">
                        <?php if (isset($_SESSION['success'])) : ?>
                            <div class = "success">
                                <p>
                                    <?php
                                        echo $_SESSION['success'];
                                        unset ($_SESSION['success']);
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
                        <?php }else{ ?> 
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
      <section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Contact Us</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="wrapper">
						<div class="row no-gutters">
							<div class="col-lg-8 col-md-7 order-md-last d-flex align-items-stretch">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h3 class="mb-4">Get in touch</h3>
									<!-- <div id="form-message-warning" class="mb-4"></div> 
				      		<div id="form-message-success" class="mb-4">
				            Your message was sent, thank you!
				      		</div> -->
									<form action="contact_db.php" method="post"  class="contactForm">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="name">Full Name</label>
													<input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
												</div>
											</div>
											<div class="col-md-6"> 
												<div class="form-group">
													<label class="label" for="email">Email Address</label>
													<input type="email" class="form-control" name="email" id="email" placeholder="Email"required>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="subject">Subject</label>
													<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"required>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="#">Message</label>
													<textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message"required></textarea>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="submit"  name="Submit" value="Submit"  class="btn btn-primary">
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
							<div class="col-lg-4 col-md-5 d-flex align-items-stretch">
								<div class="info-wrap bg-primary w-100 p-md-5 p-4">
									<h3>Let's get in touch</h3>
									<p class="mb-4">Got a question, need assistance with your booking, or want to provide feedback? We're here to help! You can reach out to us using any of the methods below, and our dedicated team will get back to you as soon as possible.</p>
				        	<div class="dbox w-100 d-flex align-items-start">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-map-marker"></span>
				        		</div>
				        		<div class="text pl-3">
					            <p><span>Address:</span> Mithras House, Lewes Road, Brighton BN2 4AT</p>
					          </div>
				          </div>
				        	<div class="dbox w-100 d-flex align-items-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-phone"></span>
				        		</div>
				        		<div class="text pl-3">
					            <p><span>Phone:</span> <a href="tel://1234567920">+44 1235 2355 98</a></p>
					          </div>
				          </div>
				        	<div class="dbox w-100 d-flex align-items-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-paper-plane"></span>
				        		</div>
				        		<div class="text pl-3">
					            <p><span>Email:</span> <a href="mailto:info@yoursite.com">p.nawinchoketam1@brighton.ac.uk</a></p>
					          </div>
				          </div>
				        	<div class="dbox w-100 d-flex align-items-center">
				        		
				          </div>
			          </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
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

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/main.js"></script>

</body>