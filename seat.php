<?php 
include("admin/connection.php");
session_start();
$price=$_SESSION['price']; 
$m_id=$_SESSION['m_id'];
$date1=$_SESSION['date'];
$time1=$_SESSION['time'];
$sql="SELECT * from book_info where b_date='$date1' AND b_time='$time1' and m_id='$m_id'";
$res = mysql_query($sql,$connect);
while( $row = mysql_fetch_assoc($res)) {
$_SESSION['seat_no1'] = $row['seat_no'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/seat_style.css">
	<link rel="stylesheet" type="text/css" href="font-awesome-4.6.3/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/index_style.css">
	<link rel="stylesheet" type="text/css" href="css/nowshowing_style.css">
	
<body >
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
<form action="seat_valid.php" method="post" >
				
	<div class="header" style="padding-left: 40px;">
	
		<span class="moviename" style="padding-top: 40px;"><u><?php echo  $_SESSION['name1']; ?>	</u></span>
		<span style="padding-left: 520px;">	
			<span >SHOW TIME</span>
			<span style="margin-left: 100px;">DATE</span><br>
			<select id="time" style="margin-left: 820px;" name="time" readonly >
			  <option value="<?=$_SESSION['time']?>" readonly> <?php echo $_SESSION['time'];?></option>	
			</select>
			<input style="margin-left: 50px;color: red; " type="Date" name="date" value="<?= $_SESSION['date'] ?>" readonly>		
		</span>
	</div>
	<div >
		<span class="verticalLine">
			<span id="d1" style="font-size: 18px; text-align: right;" >Seats Selected::</span><br>
			<span id="d2" style="font-size: 18px; text-align: right;"></span>
			<input type="text" id="h1" name="ticket" style="visibility:hidden;"> 
			<input type="text" id="h2" name="seat_no" style="visibility:hidden;" >
			<input type="text" id="h3" name="d_seat" style="visibility:hidden;" value="<?php
																	//while( $row = mysql_fetch_assoc($res)) {
																	$_SESSION['seat_no1'] = $row['seat_no'];
																	echo $row['seat_no'];
																	//}		
															?>" > 
		</span>
		<div class="main" ><center><div class="screen">ALL EYES THIS WAY</div></center>
		<?php 
		$m='1';
		for ($i=0; $i <8 ; $i++) { ?>	
		<span class="a">
		<form>
			<label class="checkbox"><input name="seat" id="seat" type="checkbox" onClick="showVal(this.form)" value="<?=$m++?>"
			<?php 
				
					if ($row['seat_no']==$m){
				 	echo "disabled";
				 	
				}
				
			?>

			<span></span></label>
			<label class="checkbox"><input name="seat" id="seat" type="checkbox" onClick="showVal(this.form)" value="<?= $m++?>" ><span></span></label>
			<label class="checkbox"><input name="seat" id="seat" type="checkbox" onClick="showVal(this.form)" value="<?= $m++?>" ><span></span></label>
			<label class="checkbox"><input name="seat" id="seat" type="checkbox" onClick="showVal(this.form)" value="<?= $m++?>" ><span></span></label>
			<label class="checkbox"><input name="seat" id="seat" type="checkbox" onClick="showVal(this.form)" value="<?= $m++?>" ><span></span></label>
			<span style="margin-left: 55px;">
			<label class="checkbox"><input name="seat" id="seat" type="checkbox" onClick="showVal(this.form)" value="<?= $m++?>" ><span></span></label>
			
		</form>
		</span>
		</span>
		<?php } ?>
		<button class="button1" onclick="return s()">submit</button>
	</div>
	<a href="date.php" style="font-size: 24px; padding-top: 50px;"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
</form>

<br><br><br><br><br><br><br><br><br><div class="footer" style="text-align: center; background-color: #566573 ;"><br>
	<a target="_blank" title="find us on Facebook" href="http://www.facebook.com" class="fb"><i class="fa fa-facebook-official" aria-hidden="true" ></i>
	<a target="_blank" title="find us on Twitter" href="http://www.twitter.com" class="twr"><i  class="fa fa-twitter" aria-hidden="true" ></i>
	<a target="_blank" title="find us on Google+" href="http://www.plus.google.com"  class="google"><i class="fa fa-google-plus" aria-hidden="true"></i><br>
</div>
</body>

</html>

<script> 
	function show1(){
	var price="<?php echo $_SESSION['price']; ?>";
	var ddl = document.getElementById("showtime");
 	
	var x=document.querySelectorAll('input[type="checkbox"]:checked').length;
 	if (x==0) {
 		alert("Select Seat");
 		return false;
 	}
    if (selectedValue == "")
   	{
    	alert("Please select Show Time");
    	return false;
   	}

}

var checked = false;
function showVal(frm) {
	
	var x=document.querySelectorAll('input[type="checkbox"]:checked').length;
	var y=document.querySelectorAll('input[type="checkbox"]:checked').value;
	document.getElementById('d1').innerHTML = 'Seats Selected::' + x ;
	document.getElementById('h1').value=x;
    var arr = [];
	
    for (var i in frm.seat) {
        if (frm.seat[i].checked) {
            arr.push(frm.seat[i].value);
        }
    }
   
    document.getElementById("h2").value=arr;
    return arr
}

function s(){
	var price="<?php echo $_SESSION['price']; ?>";
	var ddl = document.getElementById("showtime");
	var x=document.querySelectorAll('input[type="checkbox"]:checked').length;
	
 	if (x==0) {
 		alert("Select Seat");
 		return false;
 	}
    if (selectedValue == "")
   	{
    	alert("Please select Show Time");
    	return false;
   	}
   
}
</script>
