<?php
include('../../connection.php');
session_start();
if(isset($_SESSION['is_adminlogin']))
{
    $aemail = $_SESSION['aemail'];
}
else
{
    echo "<script> location.href='../login/login.php'</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Requester Profile</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet"  href="../../css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet"  href="../../css/custom.css">
	<link rel="stylesheet" href="updatecook.css">
	<script src="updatecook.js"></script>
</head>
<body>
<nav style="background-color:black;" class="navbar navbar-expand-lg">
            <a class="navbar-brand" style="color:white;" href="../../landing/landing.html">YCOC</a>
</nav>
<!-- start container -->
<div class="container" style="margin-top: 10px;"></div>
<div class="row justify-content-center align-items-center">
		<div class="col-sm-5 jumbotron ">
			<h3 class="text-center">Update Chef Details</h3>
			<?php

			if(isset($_REQUEST['editt']))
			{ 	
				
				$sql = "SELECT * FROM cook WHERE cid = {$_REQUEST['id']}";
				$result = $conn->query($sql);
				$row = $result->fetch_assoc();
				
		}
	?>
			<form action="updatecook.php" method="POST">
				<div>
					<label>Technicain ID</label><br>
					<input type="text" name="cid" id="cid" class="form-control"  value="<?php if(isset($row['cid'])) echo $row['cid'];?>" readonly>
				</div>
				<div>
					<label>Name</label><br>
					<input type="text" name="cname" id="cname" class="form-control" required value="<?php if(isset($row['cname'])) echo $row['cname'];?>">
				</div>
				<div>
					<label>Number</label><br>
					<input type="text" name="cmob" id="cmob" onchange="varifymob()" class="form-control" required value="<?php if(isset($row['cmob'])) echo $row['cmob'];?>">
				</div>
				<div>
					<label>E-mail</label><br>
					<input type="email" name="cemail" id="cemail" class="form-control" required value="<?php if(isset($row['cemail'])) echo $row['cemail'];?>">
				</div>
				<div>
					<label>Working Area</label><br>
					<input type="text" name="carea" id="carea" class="form-control" required value="<?php if(isset($row['carea'])) echo $row['carea'];?>">
				</div>
				<div>
					<label>Speciality</label><br>
					<input type="text" name="cspec" class="form-control" required value="<?php if(isset($row['cspec'])) echo $row['cspec'];?>">
				</div>
				<div class="mt-3">
					<button type="submit" class="btn btn-danger mr-3"  name="updatet" id="updatet">Update</button>
					<a href="../cook/cook.php" class="btn btn-dark">Close</a>
				</div>
			</form>
		</div>
		
		</div><!-- end row-->
		</div>
		</div><!-- end row-->
</div><!--end container-->
</body>
</html>