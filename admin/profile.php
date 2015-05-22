<?php
//session_start();
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
                            Admin Profile
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Forms
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">

                        <form  action="aupdate.php" method="post" enctype="multipart/formdata" role="form">
						<?php

               $query= mysql_query("select * from admin where username ='$username'")or die(mysql_error());
	 
	while($row = mysql_fetch_array($query)) 
		{?>
                            <div class="form-group">
                                <label>Username</label>
                                <input class="form-control" placeholder="Enter name" type="text" name="username" value="<?=$row['username'];?>"/>
                            </div>
							<div class="form-group">
                                <label>Password</label>
                                <input class="form-control" placeholder="Enter password" type="password"  name="password">
                            </div>
							<div class="form-group">
                                <label>E-Mail</label>
                                <input class="form-control" placeholder="Enter email" name="email" type="email" value="<?=$row['email'];?>"/>
                            </div>
							<div class="form-group">
                                <label>Name</label>
                                <input class="form-control" placeholder="Enter email" name="name" type="text" value="<?=$row['name'];?>"/>
                            </div>
							<?php
							}
							?>

                   <button type="submit" class="btn btn-default" name="update">Update</button>
                    
                        </form>

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
