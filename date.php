<?php 
include("admin/connection.php");
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/seat_style.css">
	<link rel="stylesheet" type="text/css" href="font-awesome-4.6.3/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/index_style.css">
	<link rel="stylesheet" type="text/css" href="css/nowshowing_style.css">
	
	<style type="text/css">
		.button11{
			height: 20px;
			width: 50px;
			text-align: center;
		}
	</style>
</head>
<body>
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
      <a href="tranhist.php">Booking History</a>
      <a href="logout.php">Sign Out </a>
    </div>
  </li>
<?php  } else {?>

    <li style="float: right;"><a href="signup.php"> Sign up</a></li>
<<?php }?>

  <li style="float: right;"><a href="contactpages.php">Contact Us</a></li>
</ul>

<form action="date_valid.php" method="post" >

	<div class="header" style="padding-left: 40px;">
	
		<span class="moviename"><u><?php echo  $_SESSION['name1']; ?>	</u></span>
		<span style="padding-left: 520px;">	
			<span >SHOW TIME</span>
			<span style="margin-left: 100px;">DATE</span><br>
			<select id="showtime" style="margin-left: 820px;" name="time" >
			  <option value=""></option>	
			  <option value="11.00 A.M">11.00 A.M </option>
			  <option value="01.30 P.M">01.30 P.M</option>
			  <option value="04.00 P.M">04.00 P.M</option>
			  <option value="06.00 P.M">06.00 P.M</option>
			</select>
			<input style="margin-left: 50px;color: red; " type="Date" name="date" value="<?= date("Y-m-d"); ?>">		
		</span>
		<button class="button11" onclick="return fun_go()">GO</button>
	</div>
</form>

</body>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><div class="footer" style="text-align: center; background-color: #566573 ;"><br>
	<a target="_blank" title="find us on Facebook" href="http://www.facebook.com" class="fb"><i class="fa fa-facebook-official" aria-hidden="true" ></i>
	<a target="_blank" title="find us on Twitter" href="http://www.twitter.com" class="twr"><i  class="fa fa-twitter" aria-hidden="true" ></i>
	<a target="_blank" title="find us on Google+" href="http://www.plus.google.com"  class="google"><i class="fa fa-google-plus" aria-hidden="true"></i><br>
</div>
</html>
<script> 
	function fun_go(){
	var price="<?php echo $_SESSION['price']; ?>";
	var ddl = document.getElementById("showtime");
 	var selectedValue = ddl.options[ddl.selectedIndex].value;
	if (selectedValue == "")
   	{
    	alert("Please select Show Time");
    	return false;
   	}
}

</script>