<?php

include("admin/connection.php");
session_start();

?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/index_style.css">
<link rel="stylesheet" type="text/css" href="css/nowshowing_style.css">
<link rel="stylesheet" type="text/css" href="font-awesome-4.6.3/css/font-awesome.min.css">
</head>
<body background="pic/bg.jpg">
<ul>
 <div style="float:left;"><li><a href="index.php"><img src="pic/logo.jpg" width="80%" height="20px"></a></li></div>
    <li class="dropdown"  style="float:left;">
    <a href="index.php#x1" class="dropbtn"><b><font size="4%">Movies </a>
  </li>
<?php
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {?>

    <li class="dropdown2" style="float: right;">
  <a href="#" class="dropbtn2"><i class="fa fa-cog" aria-hidden="true"></i> <?php echo  $_SESSION['name']; ?></a>
   <div class="dropdown-content2" style=" z-index: 999;">
      <a href="myprofile.php">My Profile</a>
  
      <a href="logout.php">Sign Out </a>
    </div>
  </li>
<?php  } else {?>

    <li style="float: right;"><a href="signup.php"> Sign up</a></li>
<<?php }?>

  <li style="float: right;"><a href="contactpages.php">Contact Us</a></li>
</ul>
<br><br><hr>
<h1><u><center>-: BOOKING HISTORY:-</center></u></h1><hr><br><br><br>

<table class="container" border=1 align="center">

	<thead>
		<tr>
			
			<th><h1><font size="5%" color="#2414BF"><u>BOOKING ID</u></font></h1></th>
			<th><h1><font size="5%" color="#2414BF"><u>EMAIL ID</u></font></h1></th>
			<th><h1><font size="5%"color="#2414BF"><u>NO OF TICKETS</u></font></h1></th>
			<th><h1><font size="5%" color="#2414BF"><u>BOOKING DATE</u></font></h1></th>
			<th><h1><font size="5%" color="#2414BF"><u>SEAT NO.</u></font></h1></th>
		</tr>
	</thead>

	<?php 	
	$umail=$_SESSION['email'];
	
	$sql="select * from book_info where c_email='" . $umail . "'";
		$rs=mysql_query($sql,$connect);
		while($row=mysql_fetch_array($rs))
		{
?>
		<tr>
			<td><?=$row[0]?></td>
			<td><?=$row[1]?></td>
			<td><?=$row[3]?></td>
			<td><?=$row[7]?></td>
			<td><?=$row[6]?></td>
		</tr>
<?php
		}
?>
</table>
<div class="footer" style="text-align: center; background-color: #566573 ;"><br>
	<a target="_blank" title="find us on Facebook" href="http://www.facebook.com" class="fb"><i class="fa fa-facebook-official" aria-hidden="true" ></i>
	<a target="_blank" title="find us on Twitter" href="http://www.twitter.com" class="twr"><i  class="fa fa-twitter" aria-hidden="true" ></i>
	<a target="_blank" title="find us on Google+" href="http://www.plus.google.com"  class="google"><i class="fa fa-google-plus" aria-hidden="true"></i><br>
</div>
</body>
</html>