<?php
include_once 'dbh.inc.php';

$p_id = $_POST['id'];

$sql= "SELECT * FROM package WHERE pack_id = '$p_id' ";
$data= mysqli_query($conn, $sql);

$total=mysqli_num_rows($data);



if($total !=0){

   ?>
   <table>
   	<tr>
   		<th>Id</th> <th>Name</th><th>catagory</th><th>price</th><th>details</th>
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
