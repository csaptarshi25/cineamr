<?php
include("admin/connection.php");
session_start();
$sql="CREATE TABLE IF NOT EXISTS book_info(
				b_id varchar(20) PRIMARY KEY,
				c_email varchar(25) not null,
				b_time varchar(10) not null,
				b_tickets int(5) not null,
				m_name varchar(30) not null,
				m_id int(10) not null,
				seat_no varchar(10),
				b_date date )";
$retval = mysql_query($sql, $connect);
if (!$retval) {
    die('COULD NOT CREATE TABLE\n: ' . mysql_error());
}
$b_id='c' . uniqid();
$c_email=$_SESSION['email'];
$b_time=$_POST['time'];
$b_tickets=$_POST['ticket'];
$m_name=$_SESSION['name1'];
$m_id=$_SESSION['m_id'];
$b_date=$_POST['date'];
$seat_no=$_POST['seat_no'];



$check=mysql_query("select c_email from book_info where seat_no='$seat_no' and b_time='$b_time' and b_date='$b_date'",$connect);
$checkrows=mysql_num_rows($check);
   if($checkrows>0) {
     echo "<script>
alert('Seat $seat_no already RESERVED !!....');
window.location.href='seat.php';
</script>";
   }
else{

$ins="INSERT INTO book_info (b_id,c_email,b_time,b_tickets,m_name,m_id,seat_no,b_date) values ('$b_id','$c_email','$b_time','$b_tickets','$m_name','$m_id','$seat_no','$b_date')";
$retval = mysql_query($ins, $connect);
if (!$retval) {
    die('COULD NOT ENTER DATA\n: ' . mysql_error());
}
$sql="SELECT * from book_info WHERE b_id='$b_id' ";
$res = mysql_query($sql, $connect);
$row = mysql_fetch_assoc($res);
}?>
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" type="text/css" href="font-awesome-4.6.3/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="css/index_style.css">
		<link rel="stylesheet" type="text/css" href="css/nowshowing_style.css">

	<style type="text/css">
		.container{
			height: 350px;
			width: 550px ;
			border:thin solid black;
			margin-top: 50px;
			padding-left: 20px;
			font-size: 18px;
			padding-top: 40px;
		}
		.details{
			margin-bottom: 10px;
		}
		.b1utton{
			height: 25px;
			width: 100px;
			margin-top: 30px;

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
<center><div class="container" style="background-color:#867CDF;">
	<span ><u><h4>Your Ticket Has Been Confirmed !! <i class="fa fa-smile-o" aria-hidden="true"> <i class="fa fa-smile-o" aria-hidden="true"></i></i></h4></u></span>
	<br><div class="details">Booking Id : <?=$row['b_id']?> </div>
	<div class="details">Registered Email : <?=$row['c_email']?> </div>
	<div class="details">Movie Time : <?=$row['b_time']?> </div>
	<div class="details">No. Of Seats : <?=$row['b_tickets']?> </div>
	<div class="details">Movie Name : <mark><?=$row['m_name']?> </mark></div>
	<div class="details">Date : <?=$row['b_date']?> </div>
	<button onclick="return print_screen()" class="b1">Print</button>
</div></center>
<a href="index.php" style="font-size: 24px;"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
<br><br><div class="footer" style="text-align: center; background-color: #566573 ;"><br>
	<a target="_blank" title="find us on Facebook" href="http://www.facebook.com" class="fb"><i class="fa fa-facebook-official" aria-hidden="true" ></i>
	<a target="_blank" title="find us on Twitter" href="http://www.twitter.com" class="twr"><i  class="fa fa-twitter" aria-hidden="true" ></i>
	<a target="_blank" title="find us on Google+" href="http://www.plus.google.com"  class="google"><i class="fa fa-google-plus" aria-hidden="true"></i><br>
</div>
</body>
</html>
<script type="text/javascript">
	function print_screen(){
		window.print();
	}
</script>