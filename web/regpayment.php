<?php
    session_start();
    include('server.php'); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add a Card</Title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
	<?php include "css/regcss.css" ?>
    body{
            animation: fadeEffect 1s;
        }
        @keyframes fadeEffect {
            from {opacity: 0;}
            to {opacity: 1;}
        }
	</style>
	<script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Baloo+Chettan+2:400,700&display=swap" rel="stylesheet"> 
<style>
	.error h3 
	{
    width: 92%;
    margin: 0px auto;
    padding: 10px;
   
    color: #a94442;
    background: #f2dede;
    border-radius: 5px;
    text-align: left;
  }
.success h3
{
	width: 92%;
    margin: 0px auto;
    padding: 10px;
	border-radius: 5px;
    text-align: left;
    color: #3c763d;
    background: #dff9d8;
   
   
}
	</style>
</head>
<body>
    <div class="wrapper">
        <h2>Add a Card</h2>
<form method="POST" action="regpayment_db.php">
<?php if (isset($_SESSION['error'])) : ?>
            <div class="error">
                <h3>
                    <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
                </h3>
            </div>
        <?php endif ?> 
		<?php if (isset($_SESSION['success'])) : ?>
            <div class="success">
                <h3>
                    <?php 
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
        <?php endif ?> 
            


<div class="pay-input-group">
                <div class="input-box">
                    <h4>Payment Details</h4>
                    <input type="radio" required name="pay" id="bc1" checked class="radio" value="credit card" >
                    <label for="bc1"><span><i class="fa fa-cc-visa"></i> Credit Card</span></label>
                    <input type="radio" required name="pay" id="bc2" class="radio"  value="debit card">
                    <label for="bc2"><span><i class="fa fa-cc-mastercard"></i> Debit Card</span></label>
					
                </div>
</div>
<div class="pay-input-group">
                <div class="input-box">
                    <input type="tel" placeholder="Card Number" required class="name" name="card_no" >
                    <i class="fa fa-credit-card icon"></i>
                </div>
</div>
<div class="pay-input-group">
                <div class="input-box">
                    <input type="tel" placeholder="Card CVV" required class="name" name="card_cvc">
                    <i class="fa fa-user icon"></i>
                </div>
<div class="input-box">
                    <select name="month">
                        <option value="Jan">Jan</option>
                        <option value="Feb">Feb</option>
                        <option value="Mar">Mar</option>
                        <option value="Apr">Apr</option>
                        <option value="May">May</option>
                        <option value="Jan">Jun</option>
                        <option value="Jul">Jul</option>
                        <option value="Aug">Aug</option>
                        <option value="Sep">Sep</option>
                        <option value="Oct">Oct</option>
                        <option value="Nov">Nov</option>
                        <option value="Dec">Dec</option>
                    </select>
                    <select name="years">
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
						<option value="2023">2023</option>
						<option value="2024">2024</option>
						<option value="2025">2025</option>
						<option value="2026">2026</option>
						<option value="2027">2027</option>
						<option value="2028">2028</option>
                    </select>
                </div>
</div>
<div class="input-group">
                <div class="input-box">
                    <button type="submit"name="Payment" >REGISTER CARD</button>
                </div>
				
</div>
<p>Proceed to Payment ? <a href="payment.php">Click Here</a></p>
</form>
</div>
<br><br>
</body>
</html>