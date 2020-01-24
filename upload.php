<?php
	session_start();
	require_once('ImageManipulator.php');
		if(isset($_POST['Submit']) && !empty($_FILES['file']['name']))
		{
			$connection=mysql_connect('localhost','root','');
			$selected=mysql_select_db('archive',$connection);
			$file=$_FILES['file']['name'];
			$tmp_name=$_FILES['file']['tmp_name'];
			$path="gallery/".$file;

		//move_uploaded_file($tmp_name,$path);
        $newNamePrefix = 'xs-';
        $manipulator = new ImageManipulator($_FILES['file']['tmp_name']);
        $width  = $manipulator->getWidth();
        $height = $manipulator->getHeight();
        $centreX = round($width / 2);
        $centreY = round($height / 2);
        if($width==$height)
        {
        $x1 = 0;  
        $y1 = 0; 
        $x2 = $width;
        $y2 = $height; 
       
        $newImage = $manipulator->crop($x1, $y1, $x2, $y2);
    
        $manipulator->save('gallery/' .$newNamePrefix.$_FILES['file']['name']);
        move_uploaded_file($tmp_name,$path);
        }
        else if($width>$height)
        {
      	 $x1 = 0; 
        $y1 = 0; 
        $x2 = $height; 
        $y2 = $height; 
        $newImage = $manipulator->crop($x1, $y1, $x2, $y2);
    
        $manipulator->save('gallery/' . $newNamePrefix . $_FILES['file']['name']);
        move_uploaded_file($tmp_name,$path);
 		}
 		else
 		{
 			$x1 = 0; 
        $y1 = 0; 
        $x2 = $width;  
        $y2 = $width; 
        $newImage = $manipulator->crop($x1, $y1, $x2, $y2);
        
        $manipulator->save('gallery/' . $newNamePrefix . $_FILES['file']['name']);
        move_uploaded_file($tmp_name,$path);
 		}
 		$query="INSERT into gallery(url,thumbnail,likes) VALUES('gallery/$file','gallery/xs-$file','0')";
 		$execute=mysql_query($query);
       
	}	
		header("Location:gallery.php");
?>