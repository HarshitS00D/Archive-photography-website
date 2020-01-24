<?php
	session_start();
	$error="";
	if(isset($_POST['Submit']))
	{
		$connection=mysql_connect('localhost','root','');
		$selected=mysql_select_db('archive',$connection);
		$Email=$_POST['Email'];
		$f=0;
		$query="SELECT email,password from user";
		$execute=mysql_query($query);
		while($data=mysql_fetch_array($execute)){
			if($data['email']==$Email && $data['password']==$_POST['Password'])
			{
				$_SESSION['Email']=$Email;
				$f=1;break;
			}
		}
		if($f==1){
			header("Location:try.php");
		}
		else{
				$error="Invalid email or password";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/style-login.css">
</head>
<body>

	<center>
	<div class="loginbox">
		<form action="login.php" method="POST">
			
		<img src="icon/loginlogo1.png">
		<h1>Login</h1>
	
		
		
		<input type="text" name="Email" placeholder=" Enter Email"><br>
		
		<input type="Password" name="Password" placeholder=" Enter Password"><br>
		<span class="Error"><?php echo $error; ?></span>
		<input type="Submit" name="Submit" value="Submit"><br>
	
		<a href="signup.php">Don't have an account?</a>
		
		</form>

	</div>
</center>
</body>
</html>