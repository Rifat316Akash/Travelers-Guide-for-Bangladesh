<?php
include_once 'header.php';
?>	

<?php
	if (isset($_SESSION['u_id'])) {
 	echo "You are in admin mode";
	}
			
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
	
</head>
<body style=" background-color: rgb(234, 211, 148)">
<div style="background-color:#83c1ff; border: 2px solid grey;
    border-radius: 10px; align-content:center;padding:5px; size:60%;opacity: 0.9 ">
<h2 align="center">Welcome to Admin control panel</h2>
</div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<img src="admin1.png" alt="admin" style="width:500px;height:300px;float:; padding-left: 300px;">
	

<p style="padding-bottom: 50px;">Edit and Update</p>
<div style="font-size: 30px;">
<a href="user.php">show user</a><br>
</div><br>
<div style="font-size: 30px;">
	
<a href="insert_package.php">insert package</a><br>
</div><br>
<div style="font-size: 30px;">
<a href="showpackadmin.php">Available packeg</a><br>
</div><br>
<div style="font-size: 30px;">
<a href="message.php">Message</a><br>
</div><br>
<div style="font-size: 30px;">

</div><br>

		


</body>
</html>