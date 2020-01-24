<?php
	session_start();
	$login_logout="LOGIN";
	$userimg="";
	$login_url="redirect.php?Value=".$login_logout;
	if(isset($_SESSION['Email']))
	{
		$connection=mysql_connect('localhost','root','');
		$selected=mysql_select_db('archive',$connection);
		$email=$_SESSION['Email'];
		$query="SELECT fname from user where email='$email'";
		$execute=mysql_query($query);
		while($data=mysql_fetch_array($execute))
		{
			$login_logout=$data['fname'];
			$login_logout=strtoupper($login_logout);

		}
		$login_url="";
		$userimg='<img src="icon/user1.png" style="height:12px;width:auto;"> ';
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Archive prototype</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<style type="text/css">
	html{
		scroll-behavior: smooth;	}
</style>
<body>
    <div class="navbar">
   			<div class="logo">
   			<img src="icon/logo.png">
   			</div> 	
			<ul>
				<li><a href=<?php echo $login_url; ?> > <?php echo $userimg.$login_logout; ?></a>
					<?php
					if($login_logout!="LOGIN")
					{ 
				echo	'<ul>
						<li><a href="bookmarkpg.php"> BOOKMARKS</a></li>
						<li><a href="redirect.php?Value='.$login_logout.'"> LOGOUT </a></li>
						</ul>';
					}
					
					?>
				</li>
				<li><a href="contact.php">CONTACT</a></li>
				<li><a href="about.php">ABOUT</a></li>
				<li><a href="gallery.php">GALLERY</a></li>
				<li class="active"><a href="#">HOME</a></li>
			</ul>
	</div>
	<br>
	<div class="text">

		<h1>Hi,I'am Harshit!</h1>
		The art of seeing!
	</div>
	
	<div class="indexgallery">
		<div class="box"><img src="imgs/1.jpg"></div>
		<div class="box"><img src="imgs/2.jpg"></div>
		<div class="box"><img src="imgs/3.jpg"></div>
		<div class="box"><img src="imgs/4.jpg"></div>
		<div class="box"><img src="imgs/5.jpg"></div>
		<div class="box"><img src="imgs/6.jpg"></div>
		<div class="box"><img src="imgs/7.jpg"></div>
		<div class="box"><img src="imgs/8.jpg"></div>
	</div>

	
</body>
</html>