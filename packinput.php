<?php
include_once 'header.php';
?>
<?php
include_once 'dbh.inc.php';
error_reporting(0);
?>


<?php
$p_id = $_POST['pack_id'];
$p_name = $_POST['pack_name'];
$p_cat = $_POST['catagory'];
$p_price = $_POST['price'];
$p_details = $_POST['detail'];

//echo "$p_id" ;
//echo "$p_name" ;
//echo "$p_cat";
//echo "$p_price";
//echo "$p_details";

$sql = "INSERT INTO package VALUES ('p_id','$p_name','$p_cat','$p_price','$p_details')";

$data = mysqli_query($conn, $sql);


?>
<htmi>
<body>
<div style="background-color:#83c1ff; border: 2px solid grey;
    border-radius: 10px; align-content:center;padding:5px; size:60%;opacity: 0.7 ">
<h2 align="center">data inserted.</h2>
<br>
<p>Go to Admin</p>
<br>
<a href="admin.php">Back</a>
</div>
</body>
</html>
