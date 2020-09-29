<?php 
#include('connection.php');
if(isset($_REQUEST['rsignup']))
{
	if(($_REQUEST['rname']=="") || ($_REQUEST['remail'] == "") || ($_REQUEST['rpassword'] == ""))
	{
		$regmsg = '<div class="alert alert-warning mt-2"role="alert">All fields are required</div>';
    }
    /*
	else
	{
		$sql = "SELECT r_email FROM requesterlogin_tb WHERE r_email='".$_REQUEST['remail']."'";
		$result = $conn->query($sql);
		if($result->num_rows==1)
		{
			$regmsg = '<div class="alert alert-warning mt-2"role="alert">E-mail id is already Registered</div>';
		}
		else
		{
		$rname = $_REQUEST['rname'];
		$remail = $_REQUEST['remail'];
		$rpassword  = $_REQUEST['rpassword'];
		$sql = "INSERT INTO requesterlogin_tb(r_name,r_email,r_password) VALUES('$rname','$remail','$rpassword')";
		if($conn->query($sql)==TRUE)
		{
		$regmsg = '<div class="alert alert-success mt-2"role="alert">Account sucessfully created</div>';
		}
		else
		{
			$regmsg = '<div class="alert alert-danger mt-2"role="alert">Unable to create account</div>';
		}
	}
}*/
}
?>
<div class="container ">
    <div class="row mt-4 mb-4">
      <div class="col-sm-3 ">
				<div class="card text-white bg-danger mb-3">
        <div class="card-header">Ram yha pr tuje jo details dalni hai woh dal dena</div>
					<div class="card-body"></div>
					<h4 class="card-title"></h4>
					<a class="btn text-white" href="requests.php">View</a>
				</div>
      </div>
      <div class="col-sm-3 ">
				<div class="card text-white bg-danger mb-3">
					<div class="card-header">Ram yha pr tuje jo details dalni hai woh dal dena</div>
					<div class="card-body"></div>
					<h4 class="card-title"></h4>
					<a class="btn text-white" href="requests.php">View</a>
				</div>
			</div>
      <div class="col-sm-6 ">
        <form action="" method="POST" style="box-shadow: 10px 0px 10px 0px lightgrey; border-style: outset;
         padding : 20px 20px 20px 20px; ">
          <div class="form-group">
            <img src="https://img.icons8.com/material-sharp/24/000000/user.png"/>
            <label class="pl-2" style="font-weight: bold;" for="name">Name</label><br>
            <input type="text" class="form-control" name="rname" placeholder="Enter your name">
          </div>
          <div class="form-group">
            <img src="https://img.icons8.com/ios/24/000000/email.png"/>
            <label class="pl-2" style="font-weight: bold;" for="email">Email</label><br>
            <input class="form-control" type="email" name="remail" placeholder="E-mail" >
          </div>
          <div class="form-group">
            <img src="https://img.icons8.com/material-sharp/24/000000/user.png"/>
            <label class="pl-2" style="font-weight: bold;">Choose the feild</label><br>
            <select name="feils" id="feild" class="form-control">
              <option value="customer">Customer</option>
              <option value="cook">Cook</option>
            </select>
          </div>
          <div class="form-group">
            <img src="https://img.icons8.com/android/24/000000/key.png"/>
            <label for="password" class="pl-2" style="font-weight: bold;">Password</label><br>
            <input type="password" name="rpassword" class="form-control" placeholder="Password" id="rpassword" >
            <label style="font-weight :bold;">Show password</label>
            <input type="checkbox" onclick="myFunction()">
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
          <button type="submit" class="btn-success mt-4 btn-block shadow-sm font-weight-bold " name="rsignup">
            Sign up</button>
            <?php  if(isset($regmsg)) {echo $regmsg;}?>
        </form>
      </div>	
    </div>
  </div>