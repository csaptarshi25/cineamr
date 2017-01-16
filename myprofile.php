<?php
session_start();  
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/myprofile_style.css">
<link rel="stylesheet" type="text/css" href="font-awesome-4.6.3/css/font-awesome.min.css">

<script src="js/script.js"></script>
</head>
<body>

<ul>
 <div style="float:left;"><li><a href="index.php"><img src="pic/logo.jpg" width="80%" height="20px"></a></li></div>
    <li class="dropdown"  style="float:left;">
    <a href="index.php#x1" class="dropbtn"><b><font size="4%">Movies </a>
  </li>
  
   <li class="dropdown2" style="float: right;">
  <a href="#" class="dropbtn2"><i class="fa fa-cog" aria-hidden="true"></i> <?php echo  $_SESSION['name']; ?></a>
   <div class="dropdown-content2" style=" z-index: 999;">
      <a href="myprofile.php">My Profile</a>
      <a href="tranhist.php">Booking History</a>
      <a href="logout.php">Sign Out </a>
    </div>
  </li>
	</li>
  <li style="float: right;"><a href="contactpages.php" >Contact Us</a></li>
</ul>
<br><div class="container">
    <form action="myprofile_valid.php" method="POST">
    <h2 class="header" >My Profile</h2>
   <div class="a1"> 
      <span class="addon1" >Name :
      <input type="text" id="input1" name="name" readOnly value='<?php echo  $_SESSION['name']; ?>'></span>
      <a href="#" onclick="Show1()"><i class="fa fa-pencil-square-o" aria-hidden="true" style="color: white; font-size: 28px;" ></i></a><div id="d1" style="font-size: 18px; color:  #ff9900"></div>
  </div>

    <div class="a2">
        <span class="addon2" >Email :
        <input type="text" id="input2" name="email" readOnly autocomplete="off" value='<?php echo  $_SESSION['email']; ?>'></span>
    </div>

    <div class="a3">
        <span class="addon3">Password :
        <input  type="Password" id="input3" name="pass" readOnly autocomplete="off" value='<?php echo  $_SESSION['pass']; ?>'></span> 
        <a href="#" onclick="Show2()"><i class="fa fa-pencil-square-o" aria-hidden="true" style="color: white; font-size: 28px;" ></i></a><div id="d2" style="font-size: 18px; color:  #ff9900"></div>
    </div>
       <button id="button1"  onclick=" return Show()" >Update</button>
    </form>
</div>
<br><br><br><br><br><br><div class="footer" style="text-align: center; background-color: #566573 ;"><br>
	<a target="_blank" title="find us on Facebook" href="http://www.facebook.com" class="fb"><i class="fa fa-facebook-official" aria-hidden="true" ></i>
	<a target="_blank" title="find us on Twitter" href="http://www.twitter.com" class="twr"><i  class="fa fa-twitter" aria-hidden="true" ></i>
	<a target="_blank" title="find us on Google+" href="http://www.plus.google.com"  class="google"><i class="fa fa-google-plus" aria-hidden="true"></i><br>
</div>
</body>
</html>     
<script type="text/javascript">
function Show1(){
  document.getElementById("input1").autocomplete= 'off';
  document.getElementById("input1").readOnly = false;
  document.getElementById("input1").style.backgroundColor = '#ffa';
  document.getElementById("input1").value= "";
  document.getElementById("input1").focus();
}
function Show2(){
  document.getElementById("input3").autocomplete= 'off';
  document.getElementById("input3").readOnly = false;
  document.getElementById("input3").style.backgroundColor = '#ffa';
  document.getElementById("input3").value= "";
  document.getElementById("input3").focus();
}
function Show( ){
  var name=document.getElementById("input1").value;
  var pass=document.getElementById("input3").value;
  if (name=="") {
    /*document.getElementById("d1").innerHTML="*Fill out the Name";*/
    alert("Fill out the Name");
    document.getElementById("input1").focus();
    return false;
  }
  if (pass=="") {
    /*document.getElementById("d2").innerHTML="*Fill out the Password";*/
    alert("Fill out Password");
    document.getElementById("input3").focus();
    return false;
  }
  if (document.getElementById("input1").readOnly==true && document.getElementById("input3").readOnly==true) {
    alert("Make some change to update");
    return false;
  }
}
</script>