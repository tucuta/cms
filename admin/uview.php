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
	<script>
function goBack() 
{
    window.history.back();
}
</script>
<div id="page-wrapper">
	<form action="allusers.php" method="post" enctype="multipart/form-data">
 

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        

						<?php 
						extract($_REQUEST);
						if(isset($uperr))
						{?>
						<div class="alert alert-danger">
                    <p>Your Updation Failed.Try Again.</p>
                </div>
				<?php
						}
						?>
                </div>
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
                    <div class="col-lg-6" align="left">
					<table border="0" align="center" cellpadding="10px" class="table table-bordered table-hover">
			<tr><th align="center">Username</th><th>E-mail</th><th> Role</th></tr>
					<?php 
$view = $_GET['id'];
 //echo $view;
    $query= mysql_query("select * from users where uid ='$view'")or die(mysql_error());
	 
	while($row = mysql_fetch_array($query)) 
		{?>
	
			<tr><td><?php echo $row["uname"]?></td>
		<td><?php echo $row["email"]?></td>
		<td><?php echo $row["role"]?></td></tr>
		
    <?php
		}
   
?>
</table><br/><br/><br/><br/>

<button onclick="goBack()" class="btn btn-default">Go Back</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="uedit.php?id=<?=$view;?>"><img src="images/edit.png" alt="uedit.php" width="16px" height="16px"/>
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
	</html