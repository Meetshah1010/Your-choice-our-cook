<?php 
include('connection.php');
if(isset($_REQUEST['rsignup']))
{
	
		$sql = "SELECT remail FROM register WHERE remail='".$_REQUEST['remail']."'";
		$result = $conn->query($sql);
		$rname = $_REQUEST['rname'];
    $remail = $_REQUEST['remail'];
    $post = $_REQUEST['post'];
		$rpassword  = $_REQUEST['rpassword'];
		$sql = "INSERT INTO register(rname,remail,rpost,rpassword) VALUES('$rname','$remail','$post','$rpassword')";
		if($conn->query($sql)==TRUE)
		{
		echo "";
		}
		else
		{
			echo "";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Create an account</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" type="text/css" href="css/register.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
  integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/css1.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
  integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
  integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
  integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="register.css"/>
	<script src="https://www.google.com/jsapi"></script>
<body>
  <h2 class="text-center" style="margin-top: 50px; color:white;" id="contact">Create an account</h2> 
    <form action="" method="POST">
      <div class="form" >
        <input type="text" class="form-control" required style="" name="rname" placeholder="Name" >
      </div>
      <div class="form">
        <input class="form-control" type="email" name="remail" required placeholder="E-mail">
      </div>
      <div class="form">
        <select name="post" id="post" class="form-control">
          <option value="customer">Customer</option>
          <option value="cook">Cook</option>
        </select>
      </div>
      <div class="form">
        <input type="password" name="rpassword" class="form-control" required placeholder="Password" id="rpassword">
        <label class="mt-3" style="color:white;">Show password</label>
        <input class="pl-2" type="checkbox" onclick="myFunction()">
        <script>
          function myFunction() {
            var x = document.getElementById("rpassword");
              if (x.type === "password") 
                {
                  x.type = "text";
                }
                else 
                {
                  x.type = "password";
                }
                }
          </script>
       </div>
        <div class="form">
          <b><label class="checkbox-inline" style="color:white;"><input type="checkbox" required> I accept all the 
          <a style="color:red;" href="#">T&C*</a></label></b>
        </div>
        <div class="form">
          <button type="submit" class="mt-1 font-weight-bold" name="rsignup">Sign Up</button>
        </div>
      </form>
</body>
</html>
  