<?php
	$success="";
	$FNameError="";
	$LNameError="";
	$EmailError="";
	$PasswordError="";
	$ConfirmPasswordError="";
	$fname=1;
	$flname=1;
	$femail=1;
	$fPass=1;
	$fcpass=1;
	if(isset($_POST['Submit']))
	{
		$LName="";
		if(empty($_POST['FName']))
		{
			$FNameError="First Name is Required";
			$fname=0;
		}
		else{
			$FName=$_POST['FName'];
			if(!preg_match("/^[a-zA-Z. ]*$/", $FName))
			{
				$FNameError="Only Letters and White spaces are Allowed";
				$fname=0;
			}
		}
		if(!empty($_POST['LName']))
		{
			$LName=$_POST['LName'];
			if(!preg_match("/^[a-zA-Z. ]*$/", $LName))
			{
				$LNameError="Only Letters and White spaces are Allowed";
				$flname=0;
			}
		}
		if(empty($_POST['Email']))
		{
			$EmailError="Email is Required";
			$femail=0;
		}
		else{
			$Email=$_POST['Email'];
			if(!preg_match("/[a-zA-Z0-9._-]{3,}@[a-zA-Z0-9._-]{3,}[.]{1}[a-zA-Z0-9._-]{2,}/",$Email))
			{
				$EmailError="Invalid Email";
				$femail=0;
			}
		}
		if(empty($_POST['Password']))
		{
			$PasswordError="Password is Required";
			$fPass=0;
		}
		else{
			$Password=$_POST['Password'];
		}
		if(empty($_POST['ConfirmPassword']))
		{
			$ConfirmPasswordError="Password is Required";
			$fcpass=0;
		}
		else{
			$ConfirmPassword=$_POST['ConfirmPassword'];
			if($Password!=$ConfirmPassword)
			{
				$ConfirmPasswordError="Password doesn't Match";
				$fcpass=0;
			}
		}
		if($fname==1 && $flname==1 && $femail==1 && $fPass==1 && $fcpass=1)
		{
			$connection=mysql_connect('localhost','root','');
			$selected=mysql_select_db('archive',$connection);

			$query="SELECT email from user where email='$Email'";
			$res=mysql_query($query);
			if(mysql_num_rows($res)!=0)
			{
				$EmailError="Email alredy Exists";
			}
			else{
				$query="INSERT into user(email,password,fname,lname) VALUES('$Email','$Password','$FName','$LName')";
				$execute=mysql_query($query);
				$success="You have successfully Registered!";
			}
		}
	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<link rel="stylesheet" type="text/css" href="css/style-signup.css">
</head>
<body>

	<center>
	<div class="signupbox">
		<form action="signup.php" method="POST">
			
		<!--<img src="loginlogo1.png">-->
		<h1>SignUp</h1>
	
		<input type="text" name="FName" placeholder=" Enter First Name"><span class="error"><?php echo $FNameError ?></span><br>
		<input type="text" name="LName" placeholder=" Enter Last Name"><span class="error"><?php echo $LNameError ?></span><br>
		<input type="text" name="Email" placeholder=" Enter Email"><span class="error"><?php echo $EmailError ?></span><br>
		<input type="Password" name="Password" placeholder=" Enter Password"><span class="error"><?php echo $PasswordError ?></span><br>
		<input type="Password" name="ConfirmPassword" placeholder="Confirm Password"><span class="error"><?php echo $ConfirmPasswordError ?></span><br>
		<input type="Submit" name="Submit" value="Submit Your Details"><br>
		<span style="color:pink;font-size: 18px;"><b><?php echo $success; ?></b></span><br>
	
		<a href="login.php">Already have an account?</a>
		
		</form>

	</div>
</center>
</body>
</html>