<?php
include_once 'header.php';
?>
<?php
include_once 'dbh.inc.php';
error_reporting(0);
?>


<?php
$c_id = $_POST['id'];
$c_name = $_POST['name'];
$c_sub = $_POST['subject'];
$c_email = $_POST['email'];
$c_message = $_POST['message'];

//echo "$p_id" ;
//echo "$p_name" ;
//echo "$p_cat";
//echo "$p_price";
//echo "$p_details";

$sql = "INSERT INTO message VALUES ('c_id','$c_name','$c_sub','$c_email','$c_message')";

$data = mysqli_query($conn, $sql);


?>
<htmi>
<body>
<div style="background-color:#83c1ff; border: 2px solid grey;
    border-radius: 10px; align-content:center;padding:5px; size:60%;opacity: 0.7 ">
<h2 align="center">Message has been send.</h2>
<br>
<p>Go to Home</p>
<br>
<a href="index.php">home</a>
</div>
</body>
</html>

