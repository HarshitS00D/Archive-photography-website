<?php
	session_start();
	$connection=mysql_connect('localhost','root','');
	$selected=mysql_select_db('archive',$connection);
		$email=$_SESSION['Email'];
		$id=$_GET['id'];
		$query="SELECT * from likedpost";
		$execute=mysql_query($query);
		$f=1;
		while ($data=mysql_fetch_array($execute)) {
			if($data['userid']==$email && $data['postid']==$id)
			{
				$f=0;
				$query="UPDATE gallery set likes=likes-1 where id=$id";
				$execute=mysql_query($query);

				$query="DELETE from likedpost where userid='$email' and postid=$id";
				$execute=mysql_query($query);

				$query="SELECT likes from gallery where id=$id";
				$execute=mysql_query($query);
				while($data=mysql_fetch_array($execute))
				{
					$likes=$data['likes'];
					echo "u".$likes." likes";
				}
				break;	
			}
		 	
		 } 
		if($f==1)
		{
			$query="INSERT into likedpost(userid,postid) VALUES('$email','$id')";
			$execute=mysql_query($query);
			$query="UPDATE gallery set likes=likes+1 where id=$id";
			$execute=mysql_query($query);
			$query="SELECT likes from gallery where id=$id";
			$execute=mysql_query($query);
			while($data=mysql_fetch_array($execute))
			{
				$likes=$data['likes'];
				echo "l".$likes." likes";
			}
		}
		



		/*$query="UPDATE gallery set likes=likes+1 where id=$id";
		$execute=mysql_query($query);
		$query="SELECT likes from gallery where id=$id";
		$execute=mysql_query($query);
		while($data=mysql_fetch_array($execute))
		{
			$likes=$data['likes'];
			echo $likes." likes";
		}*/
 ?>