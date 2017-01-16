<?php 
include("admin/connection.php");
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/index_style.css">
<link rel="stylesheet" type="text/css" href="font-awesome-4.6.3/css/font-awesome.min.css">
</head>
<body>
<ul>
	<div style="float:left;"><li><a href="index.php"><img src="pic/logo.jpg" width="80%" height="20px"></a></li></div>
    <li class="dropdown"  style="float:left;">
    <a href="#x1" class="dropbtn"><b><font size="4%">Movies </a>
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
<?php }?>

  <li style="float: right;"><a href="contactpages.php">Contact Us</a></li>
</ul>
<div class="slideshow-container">
<div class="mySlides fade">
  <img src="pic/8.jpg" style="width:100%">
</div>
<div class="mySlides fade">
  <img src="pic/2.jpg" style="width:100%">
</div>
<div class="mySlides fade">
  <img src="pic/3.jpg" style="width:100%">
</div>
</div>
<br>
<div style="text-align:center">
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
</div>
<br><div><center><h3>MOVIES</h3><hr width="25%" color="#2414BF"></center></div>
<div id="x1"></div>
<div class="b1" >
	<button class="button1" onclick="show()" >Now Showing</button>
	<button class="button2" onclick="show1()">Comming Soon</button>
</div>
<div id="nowshowing">

<?php  
  $sql="SELECT * from movie_info where date <= current_timestamp";
  $res = mysql_query($sql, $connect);
  $i=0;
  while($row = mysql_fetch_assoc($res)){
      $i=$i+1 ;
?>
   <a href="nowshowing.php"><img style="padding-left: 50px;padding-top: 10px;" src="<?=$row['img']?>" height="250px" width="250px"></a>
                           
<?php
    if ($i>=4) {
?> 
<a href="nowshowing.php"><i class="fa fa-arrow-right" aria-hidden="true" style="float: right;">More</i></a>
<?php 
      break;
      }
    }
?>
</div>
<div id="commingsoon" >
	<?php  
  $sql="SELECT * from movie_info where date > current_timestamp";
  $res = mysql_query($sql, $connect);
  $i=0;
  while($row = mysql_fetch_assoc($res)){
      $i=$i+1 ;
?>
   <a href="commingsoon.php"><img style="padding-left: 50px;padding-top: 10px;" src="<?=$row['img']?>" height="250px" width="250px"></a>
                           
<?php
    if ($i>=4) {
?> 
<a href="commingsoon.php"><i class="fa fa-arrow-right" aria-hidden="true" style="float: right;">More</i></a>
<?php 
      break;
      }
    }
?>
</div>



<div class=m3>
	<center><h3>POPULAR VIDEOS</h3></center>
	<iframe width="320" height="180" src="https://www.youtube.com/embed/10r9ozshGVE" frameborder="0"  style="padding-left:62px;">
	</iframe>
	<iframe width="320" height="180" src="https://www.youtube.com/embed/6L6XqWoS8tw" style="padding-left:52px;">
	</iframe>
	<iframe width="320" height="180" src="https://www.youtube.com/embed/YAbI4w95cTE" style="padding-left:82px;" >
	</iframe>
</div>
<div class="footer" style="text-align: center; background-color: #566573 ;"><br>
	<a target="_blank" title="find us on Facebook" href="http://www.facebook.com" class="fb"><i class="fa fa-facebook-official" aria-hidden="true" ></i>
	<a target="_blank" title="find us on Twitter" href="http://www.twitter.com" class="twr"><i  class="fa fa-twitter" aria-hidden="true" ></i>
	<a target="_blank" title="find us on Google+" href="http://www.plus.google.com"  class="google"><i class="fa fa-google-plus" aria-hidden="true"></i><br>
</div>
</body>
</html>


<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
function show() {
    var x = document.getElementById('nowshowing');
    var y=document.getElementById('commingsoon');
    if (x.style.visibility === 'hidden') {
        x.style.visibility = 'visible';
        y.style.visibility = 'hidden';
    } 
}
function show1() {
	var x = document.getElementById('nowshowing');
  var y = document.getElementById('commingsoon');
    if (y.style.visibility === 'hidden') {
        y.style.visibility = 'visible';
        x.style.visibility = 'hidden';
    } else {
        x.style.visibility = 'hidden';
        y.style.visibility = 'visible';
    }
}
$('a').click(function(){
    $('html, body').animate({scrollTop: $( $(this).attr('href') ).offset().top} );
    return false;
});
</script>

	