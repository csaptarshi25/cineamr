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
		<form action="signup.php"><button  class="button1" style="margin-bottom:15px;">Sign Up</button></form>
		<form action="login.php"><button  class="button2" style="margin-bottom:15px;">log In</button></form>
		<h2 style="font-family: freestyle script; font-size:34px;color:#65F84E;">Enjoy The Awsomeness</h2>
		<form id="form2" onsubmit="return valid1()" action="login_valid.php" method="POST">		
			<div class="forminput"  >
			 	<span class="add-on2"><i class="fa fa-envelope" aria-hidden="true"></i>
				<input type="text" autocomplete="off" placeholder="  Email Id" autofocus name="email" required></input></span>
				<div id="d"></div>
			</div>
			<div class="forminput" style="color: black;" >
				<span class="add-on3"><i class="fa fa-lock" aria-hidden="true"></i>
				<input type="password" placeholder="Password" name="pass" required></span><br> 
					<div>
						<a href="#" class="forgot">Forgot Password?</a>
					</div>
			</div>
				<button class="button3">Log In</button>
				<h3 >Still Not Connected?<a href="signup.php" style="color: #65F84E">Sign Up</h3></a>
			</div>
		</form>
		<br><br><br><div class="footer" style="text-align: center; background-color: #566573 ;"><br>
	<a target="_blank" title="find us on Facebook" href="http://www.facebook.com" class="fb"><i class="fa fa-facebook-official" aria-hidden="true" ></i>
	<a target="_blank" title="find us on Twitter" href="http://www.twitter.com" class="twr"><i  class="fa fa-twitter" aria-hidden="true" ></i>
	<a target="_blank" title="find us on Google+" href="http://www.plus.google.com"  class="google"><i class="fa fa-google-plus" aria-hidden="true"></i><br>
</div>
	</div>
	<script>
		function valid1()
		{
				var r=form2.email.value;
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
					document.getElementById("d").innerHTML="*Enter Valid Email Id";
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
