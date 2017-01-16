
<?php session_start(); ?>
<html>
	<head><title>Contact Us</title>
	<style>
			ul 
			{
					list-style-type: none;
					margin: 0;
					padding: 1.5;
					overflow: hidden;
					background-color: #051E2C;
			}
			li 
			{
					float: left;
			}
			li a 
			{
					display: block;
					color: white;
					text-align: center;
					padding: 14px 17px;
					text-decoration: none;
			}
			li a:hover 
			{
					background-color: #111;
			}
			.flex-container 
			{
					display: -webkit-flex;
					display: flex;
					width: 100%;
					height: 100%;
	   
			}
			.flex-item 
			{
	  
					width: 50%;
					height: 100%;
					margin: 10px;
			}
			body
			{
					
					background-color: #F2F4F4  ;
					background-repeat: no-repeat;
					background-size:cover;
					opacity:1;
					background-arrangement:fixed;
			}
			
			
			.buttons:hover 
			{
					background-color:#10E477;
			}
			.buttons:active 
			{
					background-color: #2B328C;
					box-shadow: 0 5px #666;
					transform: translateY(4px);
			}
			.dash
			{
					border: 0 none;
					border-top: 2px dashed #1D6949;
					background: none;
					height:0;
					style="border: 1px solid #1D6949" 
			} 
			.modal 
			{
					display: none; 
					position: fixed;
					z-index: 1; 
					padding-top: 100px; 
					left: 0;
					top: 0;
					width:100%;
					height:100%; 
					overflow: auto; 
					background-color: rgb(0,0,0); 
					background-color: rgba(0,0,0,0.4); 
			}
			.modal-content 
			{
					background-image: url("golden.jpg");
					margin: auto;
					padding: 150px;
					border: 1px solid #888;
					width: 5%;
			}

		
			.close 
			{
					color: #aaaaaa;
					float: right;
					hspace:50px;
					font-size: 28px;
					font-weight: bold;
			}

			.close:hover,.close:focus 
			{
					color: #000;
					text-decoration: none;
					cursor: pointer;
			}



			{box-sizing:border-box}



			.dot {
			  height: 13px;
			  width: 13px;
			  margin: 0 2px;
			  background-color: #bbb;
			  border-radius: 50%;
			  display: inline-block;
			  transition: background-color 0.6s ease;
			}

			.active {
			  background-color: #C0ACBC;
			}

			div.background {
			  background: url(7.jpg) repeat;
			  border: 2px solid black;
			}

			div.transbox {
			  margin: 60px;
			 
			  border: 1px solid black;
			  opacity: 0.6;
			  filter: alpha(opacity=60);
			}

			div.transbox p {
			  margin: 5%;
			  font-weight: bold;
			  color: #FFFFFF;
			}

			.c1{

				font-size: 25px;
				font-family: Arial;
				font-style: italic;
				font-weight: bold;
				border-bottom-style: solid;
				opacity:0.9;
			}
			.c2{
				margin-left: 2px;

			}
			h1{
				
				background-color: #E0E1E3;
			}
			.m1{
				
				background-color: #E0E1E3;
			}
			.m2{
				
				background-color: #FFFFFF;
			}
			.m3{
				
				background-color: #B2BABB;
				opacity:.8;
				height: 170px;
				padding-left:20px;

			}
			.m4{
				
				background-color: #566573  ;
				float: left;
			}

			ul {
				list-style-type: none;
				margin: 0;
				padding: 0;
				overflow: hidden;
				background-color: #333 ;
			}

			li {
				float: left;
			}

			li a, .dropbtn {
				display: inline-block;
				color: white;
				text-align: center;
				padding: 14px 60px;
				text-decoration: none;
			}

			li a:hover, .dropdown:hover .dropbtn {
				background-color: #26D362;
				color: black;
			}

			li.dropdown {
				display: inline-block;
			}

			.dropdown-content {
				display: none;
				position: absolute;
				background-color: #f9f9f9;
				min-width: 170px;
				box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
			}

			.dropdown-content a {
				color: black;
				padding: 12px 16px;
				text-decoration: none;
				display: block;
				text-align: left;
			}

			.dropdown-content a:hover {background-color: #26D362}

			.dropdown:hover .dropdown-content {
				display: block;
			}
			.fb{
				font-size: 28px;
				padding-left: 100px;
				padding-right: 100px;
			}
			.twr{
				font-size: 28px;
				padding-left: 100px;
				padding-right: 200px;
			}
			.google{
				font-size: 28px;
			}
			.footer{
					margin-top: 20px;
					padding-bottom: 10px;
								
	</style>
	<link rel="stylesheet" type="text/css" href="index_style.css">
	<!--<link rel="stylesheet" type="text/css" href="welcome_style.css">-->
	<link rel="stylesheet" type="text/css" href="font-awesome-4.6.3/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/index_style.css">


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
		<br><font color="#1D6949" size="25"><center><marquee behavior="alternate" scrollamount="15">CONTACT US &#9756 </marquee><hr width="75%" size="5" noshade></center></font>
		<center><font color="#1D6949" size="5">We'd &#9829 to help ! </font><center>
		<center><font color="#1D6949" size="4">Email us with any questions or Inquiries or call 518-387-9327.We would be <br> happy to answer your questions. Feel<br> free to give your feedback !</center>
			<div class="flex-container">		
					<div class="flex-item">
						<table align="left" cellspacing="15" >
								<th><h2><font color="#1D6949" >01/<u><i> SEND US A <br>MESSAGE</i></u></font></h2></th>
								<tr >
									<td class="xd"><font color="#1D6949" ><center>  NAME : </center></font></td>
									<td><input type="email" placeholder=" Name" size="45" /></td>
								</tr>
								<tr>
									<td class="xd"><font color="#1D6949" ><center>   EMAIL : </center></font></td>
									<td><input type="email" placeholder=" Email" size="45" /><br><font color="#BB3D63" >( *Please use a REAL email address so that we can reach you ..)</font></td>
								</tr>
								<tr>
									<td class="xd"><font color="#1D6949" ><center>   SUBJECT : </center></font></td>
									<td><input type="email" placeholder=" Inquiry about Website" size="45" /></td>
								</tr>
								<tr>
									<td class="xd"><font color="#1D6949" ><center>   MESSAGE : </center></font></td>
									<td><textarea rows="10" cols="47"></textarea></td>
								</tr>
								<tr>
									<td colspan="2"><center><button id="myBtn" class="buttons">Send Email</button>
									<div id="myModal" class="modal">
												<div class="modal-content">
														<span class="close"></span>
												</div>
									</div>
									<script>
											var modal = document.getElementById('myModal');
											var btn = document.getElementById("myBtn");
											var span = document.getElementsByClassName("close")[0];
											btn.onclick = function() 
											{
													modal.style.display = "block";
											}
											span.onclick = function() 
											{
													modal.style.display = "none";
											}
											window.onclick = function(event) 
											{
													if (event.target == modal) 
													{
															modal.style.display = "none";
													}
											}
									</script>
									</center></td>
								</tr>
								<tr>
									<td><font color="#1D6949" >We  do not sell <br> or share your personal<br> information with others.<br> See our  <a href="pr.html">  privacy   policy  </a>  for  details .</td>
								</tr>
						</table>
				</div>
					<div class="flex-item">
						<h2><font color="#1D6949" >02 / <u><i> GET IN <br>TOUCH</i></u></font></h2>
						<br><br><center><font size="5">&#10148 <b>  movieess__booknow</font></b><br>Kolkata,India</center>
						<br><br><center><font size="5">&#9743 (617) 248845-8978566</center>
						<br><br><center><font size="5">&#9993 bookinstantticket.com</center>
						<br><hr width="30%" class="dash">
						<img src="http://www.realtechnirman.com/images/map-small.jpg" alt="Smiley face" size="30%">
					</div>
					</body></div>
					<div class="footer" style="text-align: center; background-color: #566573 ;"><br>
	<a target="_blank" title="find us on Facebook" href="http://www.facebook.com" class="fb"><i class="fa fa-facebook-official" aria-hidden="true" ></i>
	<a target="_blank" title="find us on Twitter" href="http://www.twitter.com" class="twr"><i  class="fa fa-twitter" aria-hidden="true" ></i>
	<a target="_blank" title="find us on Google+" href="http://www.plus.google.com"  class="google"><i class="fa fa-google-plus" aria-hidden="true"></i><br>
</div>

	
</html>

