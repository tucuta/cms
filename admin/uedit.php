<?php

include "header.php";
include "dbconnect.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>View User</title>
	</head>
	<body>
 <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Add User
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

                        <form  action="userupdate.php" method="post" enctype="multipart/formdata" role="form">

               	<?php 
$edit = $_GET['id'];
 //echo $edit;
    $query= mysql_query("select * from users where uid ='$edit'")or die(mysql_error());
	 
	while($row = mysql_fetch_array($query)) 
		{?>
	
                            <div class="form-group">
                                <label>Username</label>
                                <input class="form-control" placeholder="Enter name" type="text" name="uname" value="<?=$row['uname']?>"/>
                            </div>
							
							<div class="form-group">
                                <label>E-Mail</label>
                                <input class="form-control" placeholder="Enter email" name="email" type="email" value="<?=$row['email']?>"/>
                            </div>
							
							<div class="form-group">
                                <label>Role</label>
                                <select name="role">
		<option value="<?=$row['role'];?>"selected ><?=$row['role'];?></option>
                                    <option>Administrator</option>
                                    <option>Reader</option>
                                    
                                </select>
                            </div>
<?php

		}
		?>
		<input type="hidden" name="id" value="<?=$edit?>"/> 
		<button type="submit" name="submit" class="btn btn-default">Submit</button>
                    
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
