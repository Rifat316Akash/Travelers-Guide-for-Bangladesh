
<?php
include_once 'header.php';
?>


<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<link rel="stylesheet" type="text/css" href="contact.css">
	<style>
		

	</style>
</head>
<body>
	<div style="margin-top: 100px;color: #fff;text-transform: uppercase;transition: all 4s ease-in-out;">
		<h1 style="font-size:32px;line-height: 10px">Hello</h1>
		<h2 style="font-size: 10px;">We are always ready to serve you!</h2>
	</div>
	<div class="contact-form">
		<form id="contact-form" method="post" action="contactform.php">
			
		<input type="text" name="name" class="form-control" placeholder="Your Name" required>
		<br>
		<input type="text" name="subject" class="form-control" placeholder="Subject" required>
		<br>
		<input type="email" name="email" class="form-control" placeholder="Your Email" required>
		<br>

		<textarea name="message" class="form-control" placeholder="Message" row="5" required></textarea>
		<br>
		<input type="submit"  class="form-control submit" value="Send message">
		</form>





</body>
</html>
