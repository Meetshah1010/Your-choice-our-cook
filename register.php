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
      <div class="col-sm-7 ">
				<div class="card text-white mb-3" style="background-color:#a3c2c2">
        <div class="card-header">Ram yha pr tuje jo details dalni hai woh dal dena</div>
					<div class="card-body"></div>
					<h4 class="card-title"></h4>
					<a class="btn text-white" href="requests.php">View</a>
				</div>
      </div>

      <div class="col-sm-5">
        <form action="" method="POST" style="border-style: outset;
         padding : 20px 20px 20px 20px;border-radius:10px; background-color:#e6faff;">
          <div class="form-group" >
            <input type="text" class="form-control" style="border-radius:20px;border:solid;" name="rname" 
            placeholder="Enter your name" >
          </div>
          <div class="form-group">
            <input class="form-control" type="email" name="remail" placeholder="E-mail"
             style="border-radius:20px;border:solid;" >
          </div>
          <div class="form-group">
            <select name="feils" id="feild" class="form-control" style="border-radius:20px;border:solid;">
              <option value="customer">Customer</option>
              <option value="cook">Cook</option>
            </select>
          </div>
            <div class="form-group">
              <input type="password" name="rpassword" class="form-control" placeholder="Password" 
              id="rpassword"
             style="border-radius:20px;border:solid;">
            <!--- <img src="https://img.icons8.com/material-sharp/24/000000/visible.png">-->
           
          
           <label class="mt-3">Show password</label>
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
          <div class="form-group">
				<label class="checkbox-inline"><input type="checkbox" required> I accept all the <a href="#">
          T&C*</a></label>
				
			</div>
          <button type="submit" class="mt-1" name="rsignup" 
          style="border-radius:4px;border:none;padding: 14px 28px;background-color:#adebad">Sign up</button>
            <?php  if(isset($regmsg)) {echo $regmsg;}?>
        </form>
      </div>	
    </div>
  </div>
  