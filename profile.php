<?php 
include('connection.php');
session_start();
$remail =   $_SESSION["remail"] ;
$sql = "SELECT rname,remail FROM register WHERE remail = '$remail'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$rname = $row['rname']; 
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

    <div> 
    	<h1 style="font-weight: bold;text-align: center;">Welcome</h1>
			<form action="" method="POST" style="text-align: center;">
				<div>
					<label for="remail">E-mail</label>
					<input type="email" name="remail" id="remail"  value="<?php echo $remail ?>" readonly>
				</div>
				<div >
					<label for="rname">Name</label>
					<input type="text" name="rname" id="rname"  value="<?php echo $rname ?>" readonly>
				</div>

			</form>
		</div>
    
		<?php 
  include('product.php');
  ?>
  
    </body>
</html>