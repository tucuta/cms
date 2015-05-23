<?php

include "header.php";
include "dbconnect.php";
?>
 <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                  
                        <h1 class="page-header">
                            All Users
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="dashboard.php">Dashboard</a>
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
					<table  class="table table-bordered table-hover">
			<tr><th>Username</th><th>E-mail</th><th> Role</th><th>Operations</th></tr>
					<?php 
$sql = mysql_query("select * from users")or die(mysql_error());
	 
	while($row = mysql_fetch_array($sql)) 
		{?>
		
			<tr><td><?php echo $row["uname"]?></td>
		<td><?php echo $row["email"]?></td>
		<td><?php echo $row["role"]?></td>
			
		
<td colspan="3"><a href="uview.php?id=<?=$row['uid'];?>"><img src="images/view.png" alt="uview.php" width="16px" height="16px"/></a>&nbsp;&nbsp;&nbsp;&nbsp; 
<a href="uedit.php?id=<?=$row['uid'];?>"><img src="images/edit.png" alt="uedit.php" width="16px" height="16px"/>
&nbsp;&nbsp;&nbsp; 
<a href="udel.php?id=<?=$row['uid'];?>"><img src="images/delete.png" width="16px" height="16px"/></a></td>
</tr>
<?php 
}	

?>
		</table><br/><br/><br/><br/>
		

	
	</div>
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