<?php
	session_start();
	$val=$_GET['Value'];
	if($val=="LOGIN")
	{
		header("Location:login.php");
	}
	else {
		session_unset();
		header("Location:try.php");
	}
?>