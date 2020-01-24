<?php
	session_start();
	$login_logout="LOGIN";

	if(isset($_SESSION['Email']))
	{
		$login_logout="LOGOUT";
	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Archive prototype</title>
	<link rel="stylesheet" type="text/css" href="css/style-contact.css">
</head>
<body>
<div class="bgimg">
    <div class="navbar">
   			<div class="logo">
   			<img src="icon/logo.png">
   			</div> 	
			<ul>
				<li><a href="redirect.php?Value=<?php echo $login_logout; ?>" ><?php echo $login_logout; ?></a></li>
				<li class="active"><a href="#">CONTACT</a></li>
				<li><a href="about.php">ABOUT</a></li>
				<li><a href="gallery.php">GALLERY</a></li>
				<li><a href="try.php">HOME</a></li>
			</ul>
	</div>

 	<div class="bgtext">
		<h1>CONTACT</h1><br>
		<a href="try.php"><img src="icon/homemade.png"> Home</a> > contact
		
	</div>
</div>


	<div class="map">
		<img src="imgs/mapcrop.png">
	</div>

	<div class="contactinfo">

		<h1 id="title">Let's Work </h1>
		<h1 id="title2"> Together! </h1><br>
		Email:hsood92@gmail.com<br><br>
		phone no:+917404148745<br><br>
		<a href="https://www.google.com/maps/place/60+49th+Pl,+Maspeth,+NY+11378,+USA/@40.7218054,-73.9220542,17z/data=!3m1!4b1!4m5!3m4!1s0x89c25eb95b0576d1:0x4ed2a8c9529ed335!8m2!3d40.7218054!4d-73.9198655" target="_blank">Visit Us:60-49 Road 11378 New York</a>

	</div>

	<div class="contactform">

		<form action="contact.php" method="post">
			<span style="font-size: 40px;color: #72696b; font-weight: bold;">Pitch Us!</span><br><br>
			<span style="padding-left:1em;color:#72696b ">FULL NAME</span>  <span style="padding-left:16em;color:#72696b">EMAIL</span><br>
			<input type="text" name="FullName">
			<input type="text" name="Email"><br>
			<span style="padding-left:1em;color:#72696b ">SUBJECT</span><br>
			<input type="text" name="Subject"><br>
			<span style="padding-left:1em;color:#72696b ">MESSAGE</span> <br>
			<textarea name="Message"></textarea><br>
			<input type="Submit" name="Submit" value="SUBMIT" style="margin-left:7px;">
		</form>
	</div>




	
	
	

	
</body>
</html>