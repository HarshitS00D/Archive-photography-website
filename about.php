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
	<link rel="stylesheet" type="text/css" href="css/style-about.css">
</head>
<body>
<div class="bgimg">
    <div class="navbar">
   			<div class="logo">
   			<img src="icon/logo.png">
   			</div> 	
			<ul>
				<li><a href="redirect.php?Value=<?php echo $login_logout; ?>" ><?php echo $login_logout; ?></a></li>
				<li><a href="contact.php">CONTACT</a></li>
				<li class="active"><a href="#">ABOUT</a></li>
				<li><a href="gallery.php">GALLERY</a></li>
				<li><a href="try.php">HOME</a></li>
			</ul>
	</div>

<div class="bgtext">
	<h1>ABOUT</h1><br>
	<a href="try.php"><img src="icon/homemade.png"> Home</a> > About
		
</div>
</div>




	
	
	

	
</body>
</html>