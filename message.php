<?php
include_once 'header.php';
?> 
<?php
include_once 'dbh.inc.php';

$sql= "SELECT * FROM message";

$data= mysqli_query($conn, $sql);

$total=mysqli_num_rows($data);

//$result=mysqli_fetch_assoc($data);

if($total !=0){

 ?>
   <!DOCTYPE html>
   <html>
   <head>
      <title>Message</title>
      <style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 80%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(odd) {
    background-color:  #dbffd3;
}
</style>

 </head>

<body <body style="background-color:  rgb(255, 233, 233);">>
   
 <h1>Messages!!</h1>

   <table>
   	<tr>
   		<th>Id</th> <th>Name</th><th>subject</th><th>Email</th><th>Message</th>
   	</tr>

   	<?php

   	 while ($result = mysqli_fetch_assoc($data)) 
   		{
   			echo"<tr>
   		      <td>".$result['c_id']."</td>
   		      <td>".$result['c_name']."</td>
   		      <td>".$result['c_sub']."</td>
   		      <td>".$result['c_email']."</td>
   		      <td>".$result['c_message']."</td>
   		      </tr>";
   		
   		}
 
}
else
{
	echo"No record found";
}

?>
</table>
<?php
include_once 'footer.php';
?> 
</body>
</html>