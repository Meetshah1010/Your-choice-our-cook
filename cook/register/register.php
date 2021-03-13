<?php
include('../../connection.php');
session_start();
if(isset($_REQUEST['rsignup']))
{
	
	$crname = $_REQUEST['crname'];
	$crmob = $_REQUEST['crmob'];
	$cremail = $_REQUEST['cremail'];
	$crarea = $_REQUEST['crarea'];
	$crgender = $_REQUEST['crgender'];
	
	$crspec = $_REQUEST['crspec'];
	$crpass = $_REQUEST['crpass'];
	
	

		// Get name of images
		$Get_image_name = $_FILES['file']['name'];
		  
		// image Path
		$image_Path = "uploads/".basename($Get_image_name);
	
		$ins = "INSERT INTO images (file_name, uploaded_on) VALUES ('$Get_image_name', NOW())";
		
	  // Run SQL query
		mysqli_query($conn, $ins);
	
		if (move_uploaded_file($_FILES['file']['tmp_name'], $image_Path)) {
			echo "Your Image uploaded successfully";
		}else{
			echo  "Not Insert Image";
		}
		
	
		$sql = "INSERT INTO cook_request(crname,crmob,cremail,crarea,crgender,crspec,crpass) VALUES('$crname','$crmob','$cremail','$crarea','$crgender','$crspec','$crpass')";
		if($conn->query($sql)==TRUE)
		{
			echo "inserted successfully";
		}else{
			echo "failed";
		}
}
?>