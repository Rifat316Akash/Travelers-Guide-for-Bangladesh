

<?php
include_once 'header.php';
?>


<!DOCTYPE html>
<html>
<head>
	<title>Insert Packege</title>
	<link rel="stylesheet" type="text/css" href="contact.css">
	<style>
		

	</style>
</head>
<body>
	<div style="margin-top: 100px;color: #fff;text-transform: uppercase;transition: all 4s ease-in-out;">
		<h1 style="font-size:32px;line-height: 10px">Insert Packege</h1>
		<h2 style="font-size: 10px;"></h2>
	</div>
	<div class="contact-form">
		<form id="contact-form" method="post" action="packinput.php">
			
		<input type="text" name="pack_name" class="form-control" placeholder="Pack Name" required>
		<br>
		<input type="text" name="catagory" class="form-control" placeholder="Catagory" required>
		<br>

		<input type="text" name="price" class="form-control" placeholder="Price" required>
		<br>

		<textarea name="detail" class="form-control" placeholder="Details" row="5" required></textarea>
		<br>
		<input type="submit"  class="form-control submit" value="Insert">
		</form>


</body>
</html>



<!--

<!DOCTYPE html>
<html>
<head>
	<title>Insert packege</title>
</head>
<body>
<form action="packinput.php" method="POST">
	<!--Package Id<input type="text" name="pack_id" value=""><br><br>
	Package name<input type="text" name="pack_name" placeholder="Package name" required=""><br><br>
	Catagory<input type="text" name="catagory" placeholder=Catagory" required=""><br><br>
	price<input type="text" name="price" placeholder=price" required=""><br><br>
	Package Details<input type="text" name="detail" placeholder="Details" required=""><br><br>
	<input type="submit" name="submit" value="Submit">

</form>


</body>

</html-->