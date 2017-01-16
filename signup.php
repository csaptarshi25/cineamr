<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/signup_style.css">	
	<link rel="stylesheet" type="text/css" href="font-awesome-4.6.3/css/font-awesome.min.css">
	<script src="js/script.js"></script>
</head>
<body> 
<ul>
  <div style="float:left;"><li><a href="index.php"><img src="pic/logo.jpg" width="80%" height="20px"></a></li></div>
    <li class="dropdown"  style="float:left;">
    <a href="index.php#x1" class="dropbtn"><b><font size="4%">Movies </a>
  </li>
  
  <li><a href="contactpages.php">Contact Us</a></li>
</ul>
	<br><div class="container">
	<form  action="signup.php"><button  class="button1" style="margin-bottom:15px;">Sign Up</button></form>
	<form  action="login.php"><button  class="button2" style="margin-bottom:15px;">log In</button></form>

  	<h2 style="font-family: freestyle script; font-size:34px;color:#65F84E;">Be a part of Awsomeness</h2>
	<form id="form1"  action="signup_valid.php" onsubmit="return valid()" method="POST">		
		<div class="forminput">
			<span class="add-on1"><i class="fa fa-user" aria-hidden="true"></i>
			<input type="text"  autocomplete="off" placeholder="  Name" maxlength="30" name="name" required autofocus> </span>
		</div>  
		<div class="forminput">
			<span class="add-on2"><i class="fa fa-envelope" aria-hidden="true"></i>
			<input type="text" autocomplete="off" placeholder="  E-Mail Id " name="email" required></span>
			<div id="d"></div>
		</div> 
		<div class="forminput">
			<span class="add-on3"><i class="fa fa-lock" aria-hidden="true"></i>
			<input type="password" placeholder="  Password" name="pass" required></span>
		<div>
			<button class="button3">Sign Up</button>
			<br>
			<h3>Already Connected?<a href="login.php" style="color: #65F84E   ;" >Log In</h3></p>
		</div>
		</form>
	<br><br><br><div class="footer" style="text-align: center; background-color: #566573 ;"><br>
	<a target="_blank" title="find us on Facebook" href="http://www.facebook.com" class="fb"><i class="fa fa-facebook-official" aria-hidden="true" ></i>
	<a target="_blank" title="find us on Twitter" href="http://www.twitter.com" class="twr"><i  class="fa fa-twitter" aria-hidden="true" ></i>
	<a target="_blank" title="find us on Google+" href="http://www.plus.google.com"  class="google"><i class="fa fa-google-plus" aria-hidden="true"></i><br>
</div>
</div>
	<script>
		function valid()
			{
				var password=form1.pass.value;
				
				var r=form1.email.value;
				var y=r.length;
				var f=0;
				for(i=0;i<y; i++)
				{
					if(r[i]=="@")
					{
						f=1;
						break;
					}
					else 
					{
						f=0;
					}	
				}
				if(f==0)
				{	
					document.getElementById("d").innerHTML="*Enter Valid Email Id ";
					return false;
				}
				else
				{
					return true;
				}
			}
	</script>
</body>
</html>