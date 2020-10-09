<?php 
include('connection.php');
session_start();		
if($_SESSION['is_login'])
{
	$remail = $_SESSION['remail'];
}
else
{
	echo "<script>location.href='login.php';</script>";
}
$sql = "SELECT rname,remail FROM register WHERE remail = '$remail'";
$result = $conn->query($sql);
if($result->num_rows == 1)
{
	$row = $result->fetch_assoc();
	$rname = $row['rname']; 
}
#email reading completed 
if(isset($_REQUEST['nameupdate']))
{
	if($_REQUEST['rname'] == "")
	{
		$passmsg = '<div class="alert alert-warning col-sm-6 mt-3" role="alert">All fields are required</div>';
	} 
	else
	{
		$rname = $_REQUEST['rname'];
		$sql = "UPDATE register SET rname='$rname' WHERE remail = '$remail'";
		if($conn->query($sql) == TRUE)
		{
			$passmsg = '<div class="alert alert-success col-sm-6 mt-3"role="alert">Successfully updated </div>';
		}
		else
		{
			$passmsg = '<div class="alert alert-danger col-sm-6 mt-3"role="alert">Unable to  updated </div>';	
		}
	}
}
?>
<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Responsive Sticky Navbar</title>
      <link rel="stylesheet" href="css/profile.css">
    <body>
    <h1 class="title-pen"> User Profile <span>UI</span></h1>

    <div> 
			<form action="" method="POST" >
				<div>
					<label for="remail">E-mail</label>
					<input type="email" name="remail" id="remail"  value="<?php echo $remail ?>" readonly>
				</div>
				<div >
					<label for="rname">Name</label>
					<input type="text" name="rname" id="rname"  value="<?php echo $rname ?>" readonly>
				</div>
				
				<?php 
				if(isset($passmsg))
				{
					echo $passmsg;
				}
				?>
			</form>
		</div>
    

  
    </body>
</html>