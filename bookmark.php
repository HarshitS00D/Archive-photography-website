<?php
	session_start();
	$connection=mysql_connect('localhost','root','');
	$selected=mysql_select_db('archive',$connection);
	$email=$_SESSION['Email'];
	$id=$_GET['id'];
	$id=substr($id,2);
	$query="SELECT * from bookmark";
	$execute=mysql_query($query);
	$f=1;
		
		while ($data=mysql_fetch_array($execute)) {
			if($data['userid']==$email && $data['postid']==$id)
			{
				$f=0;
				$query="DELETE from bookmark where userid='$email' and postid='$id'";
				$execute=mysql_query($query);
				echo "notbooked";
				break;	
			}
		 	
		 }
		 if($f==1)
		 {
		 	$query="INSERT into bookmark(userid,postid) VALUES('$email','$id')";
			$execute=mysql_query($query);
			echo "booked";
		 }
?>