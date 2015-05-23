<?php
include("dbconnect.php");
include("header.php");
extract($_REQUEST);
if(isset($_SESSION["user_name"]))
{
	$username = $_SESSION["user_name"];
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
 <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Your Profile
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i>Edit profile
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">

                        
						<?php

               $query= mysql_query("select * from admin where username ='$username'")or die(mysql_error());
			   
	           $count1 = mysql_num_rows($query);
            if($count1 > 0)
           {
	           $row = mysql_fetch_array($query);
				   ?>
                            <form  action="aupdate.php" method="post" enctype="multipart/formdata" role="form">
							<div class="form-group">
                                <label>Username</label>
                                <input class="form-control" type="text" name="username" value="<?=$row['username'];?>"/>
                            </div>
							<div class="form-group">
                                <label>New Password</label>
                                <input class="form-control" type="password"  name="npwd">
                            </div><p><b> <i>would like to change the password type a new one. Otherwise leave this blank.</i></b></p>
							<div class="form-group">
                                <label>Repeat New Password</label>
                                <input class="form-control"  type="password"  name="cpwd">
                            </div>
							<div class="form-group">
                                <label>E-Mail</label>
                                <input class="form-control" name="email" type="email" value="<?=$row['email'];?>"/>
                            </div>
							<div class="form-group">
                                <label>Name</label>
                                <input class="form-control" placeholder="Enter email" name="name" type="text" value="<?=$row['name'];?>"/>
                            </div>
							<button type="submit" class="btn btn-default" name="update">Update</button>
							</form>
							<?php
							}
			   else
			   {
		   $sql1 = mysql_query("select * from users where uname ='$username'");
$row1  = mysql_fetch_array($sql1);
if(is_array($row1)) 
	{?>

                         <form  action="userupdate.php" method="post" enctype="multipart/formdata" role="form">
						 <div class="form-group">
                                <label>Username</label>
                                <input class="form-control" type="text" name="username" value="<?=$row1['uname'];?>"/>
                            </div>
							
							<div class="form-group">
                                <label>E-Mail</label>
                                <input class="form-control" name="email" type="email" value="<?=$row1['email'];?>"/>
                            </div>
							<div class="form-group">
                                <label>Role</label>
                                <input class="form-control"  name="role" type="text" value="<?=$row1['role'];?>"/>
                            </div>
							<button type="submit" class="btn btn-default" name="update">Update</button>
							</form>
							<?php
							}
			   }

							?>

                   
                    
                        

                       </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
