<link rel="stylesheet" type="text/css" href="css/login.css">
<div class="col-sm-12">
<div class="login">
  <form action="" method="POST">
    <div class="form">
      <input class="form-group" type="email" name="remail" required placeholder="E-mail">
    </div>
    <div class="form">
      <input class="form-group" type="password" name="rpassword" required placeholder="Password" id="rpassword" 
      data-toggle="password" >          
        <script type="text/javascript">
	        $("#password").password('toggle');
        </script>
    </div>
    <button type="submit" class="mt-1 btn-block font-weight-bold" name="rlogin" 
      style="border-radius:10px;border:none;padding: 14px 28px;background-color:#adebad">Log in</button><br>
          <b style="position:right;">Don't have an account</b>
          <b><a style="color:red;" href="register.php">Sign up</a></b>
  </form>
 </div>
  </div>