<?php
	session_start();
	$login_logout="LOGIN";
	$userimg="";
	$login_url="redirect.php?Value=".$login_logout;
	echo '<script> var checklogin=0;</script>';
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
		echo '<script>checklogin=1;</script>';
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Archive prototype</title>
	<link rel="stylesheet" type="text/css" href="css/style-gallery.css">
	<link rel="stylesheet" type="text/css" href="css/lightbox.min.css">
	<script src="lightbox-plus-jquery.min.js"></script>
	<script type="text/javascript">
		function like(id) {
			
			if(checklogin==1)
			{
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange= function(){
			if(this.readyState==4 && this.status==200)
				{
					var res=this.responseText.substr(1);
					var check=this.responseText.substr(0,1);
					document.getElementById(id+"count").innerHTML=res;
					if(check=='u')
						document.getElementById(id).src="icon/unlike.png";
					else document.getElementById(id).src="icon/like1.png";
					
				}
			};
			xhttp.open("GET","updatelikes.php?id="+id,true);
			xhttp.send(); 
			}
			else{
				alert("Please Login First!");
			}			
		}
		function bookmark(id){
			if(checklogin==1)
			{
				var xhttp=new XMLHttpRequest();
				xhttp.onreadystatechange=function(){
					if(this.readyState==4 && this.status==200)
					{
						if(this.responseText=="booked")
						document.getElementById(id).src="icon/bmred.png";
						else document.getElementById(id).src="icon/bmgrey.png";
					}
				};
				xhttp.open("GET","bookmark.php?id="+id,true);
				xhttp.send();
			}
			else{
				alert("Please Login First!");
			}
		}
	</script>
</head>
<body>
<div class="bgimg">
    <div class="navbar">
   			<div class="logo">
   			<img src="icon/logo.png">
   			</div> 	
			<ul>
				<li><a href=<?php echo $login_url; ?> > <?php echo $userimg.$login_logout; ?></a>
					<?php
					if($login_logout!="LOGIN")
					{ 

					echo   '<ul>
							<li><a href="bookmarkpg.php"> BOOKMARKS </a></li>
							<li><a href="redirect.php?Value='.$login_logout.'"> LOGOUT </a></li>
							</ul>';
						
					}

					?>
				</li>
				<li><a href="contact.php">CONTACT</a></li>
				<li><a href="about.php">ABOUT</a></li>
				<li class="active"><a href="#">GALLERY</a></li>
				<li><a href="try.php">HOME</a></li>
			</ul>
	</div>
	
	<div class="bgtext">
		<h1>GALLERY</h1><br>
		<a href="try.php"><img src="icon/homemade.png"> Home</a> > gallery
	</div>

</div>
	
	<center>
		<?php
			if($login_logout!="LOGIN")
			{
				$email=$_SESSION['Email'];
				if($email=="hsood92@gmail.com")
				{
					echo '<div class="newpost">

					<h1> Upload New Post</h1>
					<form action="upload.php" method="Post" enctype="multipart/form-data">
					<input type="file" name="file" class="custom-file-input">
					<input type="Submit" name="Submit" value="Insert">
					</form>
					</div>';
				}
			}
		?>
	</center>

	<div class="gallery">
	<?php
	$connection=mysql_connect('localhost','root','');
	$selected=mysql_select_db('archive',$connection);
		$query="SELECT * from gallery";
		$execute=mysql_query($query);
		
		while($data=mysql_fetch_array($execute))
		{
			$like_url="icon/unlike.png";
			$bm_url="icon/bmgrey.png";
			$url=$data['url'];
			$thumbnail=$data['thumbnail'];
			$id=$data['id'];
			$likes=$data['likes'];
		
			if(isset($_SESSION['Email']))
			{
				$email=$_SESSION['Email'];
				$query="SELECT * from likedpost where userid='$email' and postid=$id";
				$res=mysql_query($query);
				if(mysql_num_rows($res)!=0)
				{
					$like_url="icon/like1.png";
				}
				$query="SELECT * from bookmark where userid='$email' and postid=$id";
				$res=mysql_query($query);
				if(mysql_num_rows($res)!=0)
				{
					$bm_url="icon/bmred.png";
				}
				
			}
			echo '<div class="post"><a href="'.$url.'" title="'.$url.'"data-lightbox="mygallery"><img class="thumbnail" src="'.$thumbnail.'"></a><img id="'.$id.'"  class="like" src='.$like_url.' onclick="like(this.id)"><img class="bookmark" id="bm'.$id.'" title="bookmark" src="'.$bm_url.'" onclick="bookmark(this.id)"><br><span 
			id="'.$id.'count" class="likecount">'.$likes.' likes</span></div>';
			
		}
	?>


	<div class="post">
		<a href="gallery/1.jpg" data-lightbox="mygallery"><img class="thumbnail" src="gallery/xs-1.jpg "></a>
		<img id="2" class="like" src="icon/unlike.png" onclick="like(this.id)">
		<img class="bookmark" id="bm2" title="bookmark" src="icon/bmgrey.png" onclick="bookmark(this.id)"><br>
		<span id="2count" class="likecount">2 likes</span>
	</div>
	

	
	
</div>




	
	
	

	
</body>
</html> 