<?php 
include("admin/connection.php");
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/index_style.css">
<link rel="stylesheet" type="text/css" href="css/nowshowing_style.css">
<link rel="stylesheet" type="text/css" href="font-awesome-4.6.3/css/font-awesome.min.css">
<style>
	body{
		background-color:#F2F4F4;
		}
</style>
</head>
<body bgcolor="#E6E6FA"	 > 
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
<form action="booknow_valid.php" method="POST">
	<center><hr><h3><u><font color="#2414BF">-:<i>UPCOMING MOVIES</i>:-</font></u></h3><hr></center>
	<br><table style="margin-left: 270px; ">
		<tr>
			<td class="list" style="padding-top: 10px;padding-left: 2px;padding-right: 1px;"></td>
			
			<td class="list" style="padding-top: 10px;padding-left: 2px;padding-right: 1px;" >Name <hr width="75%" color="#2414BF"></td>
			<td class="list1" style="padding-top: 10px;padding-left: 2px;padding-right: 4px;"> Summary<hr width="75%" color="#2414BF"></td>
			<td class="list1" style="padding-top: 10px;padding-left: 2px;padding-right: 14px;">Price<hr width="75%" color="#2414BF"></td>
		</tr>
	</table>
<?php  
  $sql="SELECT * from movie_info where date > current_timestamp";
  $res = mysql_query($sql, $connect);
  $i=0;
  while($row = mysql_fetch_assoc($res)){
      $i=$i+1 ;
?>
   <br><br><br><br><table  cellpadding="10" border=1 border-color="#2414BF" style="margin-left: 270px;width:50%;padding: 15px;height:50%;border-collapse:collapse ">
    <tr><td><span ><input type="radio" name="r1" value="<?=$row['id']?>"></span></td>   
    <td align="center"><img style="padding-top: 10px;padding-left: 22px;padding-right: 34px;" src="<?=$row['img']?>" height="125px" width="150px" required></td>
    <td class="list" style="padding-top: 10px;padding-left: 34px;padding-right: 34px;" ><i><font color="#1D6949" ><u><?=$row['name']?></u></font></i></td>
    <td class="list1" style="padding-top: 10px;padding-left: 2px;padding-right: 2px;"><i><font color="#1D6949" ><?=$row['des']?></font></i></td>
    <td class="list1" style="padding-top: 10px;padding-left: 34px;padding-right: 34px;"><font color="#1D6949" ><?=$row['price']?> (&#8377) </font></td></tr>
   </table>
<?php 
    }
?>
	<button class="button1" onclick="return invalid()">Book Now</button>
  
</form>
<div class="footer" style="text-align: center; background-color: #566573 ;"><br>
	<a target="_blank" title="find us on Facebook" href="http://www.facebook.com" class="fb"><i class="fa fa-facebook-official" aria-hidden="true" ></i>
	<a target="_blank" title="find us on Twitter" href="http://www.twitter.com" class="twr"><i  class="fa fa-twitter" aria-hidden="true" ></i>
	<a target="_blank" title="find us on Google+" href="http://www.plus.google.com"  class="google"><i class="fa fa-google-plus" aria-hidden="true"></i><br>
</div>
</body>
</html>
<script type="text/javascript">
  function valid() {
  // All <input> tags...
  var chx = document.getElementsByTagName('input');
  for (var i=0; i<chx.length; i++) {
    // If you have more than one radio group, also check the name attribute
    // for the one you want as in && chx[i].name == 'choose'
    // Return true from the function on first match of a checked item
    if (chx[i].type == 'radio' && chx[i].checked) {

      return true;
    } 
  }
  // End of the loop, return false
   alert("Select Any Movie to procede");
  return false;
}

function invalid() {
  // All <input> tags...
  var chx = document.getElementsByTagName('input');
  for (var i=0; i<chx.length; i++) {
    // If you have more than one radio group, also check the name attribute
    // for the one you want as in && chx[i].name == 'choose'
    // Return true from the function on first match of a checked item
    if (chx[i].type == 'radio' && chx[i].checked) {

      return false;
    } 
  }
  // End of the loop, return false
   alert("Comming Soon-Select Any Movie to procede");
 
  return false;
}
</script>