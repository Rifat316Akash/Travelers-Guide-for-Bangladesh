<?php
include_once 'header.php';
?> 
<?php
include_once 'dbh.inc.php';

$sql= "SELECT * FROM package";

$data= mysqli_query($conn, $sql);

$total=mysqli_num_rows($data);

//$result=mysqli_fetch_assoc($data);

if($total !=0){

   ?>

   <!DOCTYPE html>
   <html>
   <head>
      <title>packeges</title>
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
   <body style="background-color:  rgb(255, 233, 233);">
   
   <h2>We Have Some Amaizing Pcakege. Choose the Best for You.... </h2>
   
   <table style="width: 100%;">
   	<tr>
   		<th>Pack Id</th> <th>Pack Name</th><th>Catagory</th><th>Price</th><th>Details</th>
   	</tr>
   	<?php

   	while ($result = mysqli_fetch_assoc($data)) 
   		{
   			echo"<tr>
   		      <td>".$result['pack_id']."</td>
   		      <td>".$result['pack_name']."</td>
   		      <td>".$result['category']."</td>
   		      <td>".$result['price']."</td>
   		      <td>".$result['detail']."</td>
   		      </tr>";
   		
   		}
 
}
else
{
	echo"No record found";
}

?>
</table>
<h1>Buy Package</h1>


   <div style="margin-top: 20px;color: #fff;text-transform: uppercase;transition: all 4s ease-in-out;">
      
      <h2 style="font-size: 10px;"></h2>
   </div>
   <div class="contact-form">
      <form id="contact-form" method="post" action="buy.php">
         
      <input type="text" name="id" class="form-control" placeholder="id" required>
      <br>
      <input type="submit"  class="form-control submit" value="buy pack">
      </form>


<?php
include_once 'footer.php';
?> 
</body>
 </html>
