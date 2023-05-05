<?php 
session_start();
include('server.php');
$id=$_SESSION['username'];
// $seat = $_SESSION['seat'];
// $price=$_SESSION['price'];
// $string = implode(', ', $seat);
// $qry="insert into booked (name,seat,price) values('$id','$string','$price') ";
// $result = mysqli_query($conn, $qry);
// foreach($seat as $selected) {
	// echo $selected . "<br>";
	// $_SESSION['newseat'][]=$selected;
// }
// echo $price;
// $_SESSION['newprice']=$price;
// unset($_SESSION['seat']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
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
</head>
<body>
	<div class = "wrapper">
<h2>Payment Form</h2>
<h3><?php

?></h3>
	<form method="POST" action="payment_db.php">
		<?php if (isset($_SESSION['error'])) : ?>
			<div class="error">
				<h3><?php 
					echo $_SESSION['error'];
					unset($_SESSION['error']);
				?></h3>
			</div>
		<?php endif ?> 
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="success">
				<h3><?php 
					echo $_SESSION['success'];
					unset($_SESSION['success']);
				?></h3>
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
		<div class="pay-input-group">
			<div class="input-box">
				<button type="submit"name="Payment" >PAY NOW</button>
			</div>
		</div>
		<p>Add a Card ? <a href="regpayment.php">Click Here</a></p><br>
		<!-- <p>Remove Card ? <a href="revpayment.php">Click Here</a></p><br> -->
	</form>
	</div>
</body>
</html>