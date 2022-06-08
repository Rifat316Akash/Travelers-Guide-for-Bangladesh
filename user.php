<?php
include_once 'dbh.inc.php';

$sql= "SELECT * FROM users";

$data= mysqli_query($conn, $sql);

$total=mysqli_num_rows($data);

//$result=mysqli_fetch_assoc($data);

if($total !=0){

   ?>
   <table>
   	<tr>
   		<th>Id</th> <th>FName</th><th>LName</th><th>Email</th><th>User name</th>
   	</tr>
   	<?php

   	while ($result = mysqli_fetch_assoc($data)) 
   		{
   			echo"<tr>
   		      <td>".$result['user_id']."</td>
   		      <td>".$result['user_first']."</td>
   		      <td>".$result['user_last']."</td>
   		      <td>".$result['user_email']."</td>
   		      <td>".$result['user_uid']."</td>
   		      </tr>";
   		
   		}
 
}
else
{
	echo"No record found";
}

?>
</table>

