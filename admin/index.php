<?php
session_start();
if(isset($_SESSION["user_name"]))
{
	header("location: dashboard.php"); 
}
?>
<!DOCTYPE html>

<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>AdminLogin Form</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css/styles.css" rel="stylesheet">
	</head>
	<body>
<!--login modal-->
<div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          
		 
          <h1 class="text-center">Login</h1>
      </div>
      <div class="modal-body">
          <form class="form col-md-12 center-block" action="check.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <input type="text" class="form-control input-lg" name="aname" placeholder="username">
            </div>
            <div class="form-group">
              <input type="password" class="form-control input-lg" name="apass" placeholder="Password">
            </div>
            <div class="form-group">
              <button class="btn btn-primary btn-lg btn-block">Sign In</button>
              <!--<span class="pull-right"><a href="#">Register</a></span><span><a href="#">Need help?</a></span>-->
            </div>
          </form>
      </div>
      <div class="modal-footer">
          <div class="col-md-12">
		  <style>
				 .error {
                   color: red;
                    }
					.success {
                   color: green;
                    }
					</style>
		   <?php
			extract($_REQUEST); 
			if(isset($login))
			{
				echo "<h4 align='center'class='error'>Invalid username / password try again !</h4>";
			}
			if(isset($logout))
			{
				echo "<h4 align='center'class='success'>Your sucessfully logged out.</h4>";
			}
			?>
         <!-- <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>-->
		  </div>	
      </div>
  </div>
  </div>
</div>
	<!-- script references -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>

</body></html>