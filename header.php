<?php

	session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>travel-guide</title>
	<link rel="stylesheet" type="text/css" href="style.css">
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    font-size: 20px;
    padding: 20px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: #f099f1;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: powderblue;}

.dropdown:hover .dropdown-content {
    display: block;
   
}
</style>
</head>
<body>
	<ul>
  <li><a class="active" href="index.php">Home</a></li>
 
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">places</a>
    <div class="dropdown-content">
      <a href="dhaka.php">Dhaka</a>
      <a href="rajshahi.php">Rajshahi</a>
      <a href="khulna.php">Khulna</a>
      <a href="chattagram.php">Chittagong</a>
      <a href="barishal.php">Barishal</a>
      <a href="rongpur.php">Rangpur</a>
      <a href="sylhet.php">Sylhet</a>
      

    </div>
  </li>
  <li><a href="showpackege.php">Package</a></li>
  <li><a href="offer.php">Offer</a></li>

  <li><a href="contact.php">Contact Us</a></li>
 <li style="padding-right:300px;"><a href="">About Us</a></li>

  
				<?php
					if(isset($_SESSION['u_id'])) {
            
             echo '<li style="padding-left:200px;">';
						 echo'<a href="logout.inc.php">logout</a>';
          
             echo '</li>';
					    }
          ?>
        
          
           
        

  &nbsp;
 <li> 
				  <?php

					if(!isset($_SESSION['u_id'])) {
						echo'<li>';
						echo '<form  action ="login.inc.php" method="POST">
					        <input style="font-size: 15pt; height: 40px; width:200px;" type="text" name="uid" placeholder="Username/e-mail">
					        <input style="font-size: 15pt; height: 40px; width:100px;" type="password" name="pwd" placeholder="password">
					        <button style="font-size: 15pt;cursor: pointer; height: 40px;
                   width:60px;" type="submit" name="submit">Login</button>
				            </form> ';
				            
				            echo'</li>';
				        echo'<li> <a href="signup.php">signup</a>';
						echo'</li>';
				              }
				?>
 </li>
  <?php echo '<li>';
            if(!isset($_SESSION['u_id'])) {
            
               $bool='false';
          
             echo '</li>';
              }else{
                $bool='true';
                if($bool=='true' && $_SESSION['u_id']==3 && $_SESSION['u_uid']=='admin') {

             //echo '<li style="padding-left:380px;">';
              echo'<a href="admin.php">admin</a>';
            
                echo '</li>';
                 }
               }
                 echo '<li>';
                 ?>  

</ul>
</body>
</html>