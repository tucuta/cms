<?php 
include "header.php";
?>
<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                          All Pages
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="dashboard.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-list-alt"></i> All Pages
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">
                
			<?php
			 include("dbconnect.php");
			 $sql = mysql_query("SELECT `pages`.`page_title` , `menu`.`menu_name`, `pages`.`id` FROM `icms`.`pages` INNER JOIN `icms`.`menu` ON (`pages`.`menu_id` = `menu`.`id`) WHERE `menu`.`active`=1 ")or die(mysql_error());
			$count = mysql_num_rows($sql);
			if($count>0)
			{
				?>
			
				 
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>S.NO</th>
                                        <th>Page Title</th>
                                        <th>Menu Name</th>
                                        <th colspan="3">Operations</th>
                                    </tr>
                                </thead>
                                <tbody>
				
				
				<?php
				$i=1;
			while($row = mysql_fetch_array($sql))
				{
					?>
			<tr>
					<td><?=$i;?></td>
					<td><?=$row[0];?></td>
					<td><?=$row[1];?></td>
					<td><a href="#?id=<?=$row[2];?>"><img src="images/view.png" class="img" ></a></td>
					<td><a href="#?id=<?=$row[2];?>"><img src="images/edit.png" class="img" ></a></td>
					<td><a href="#?id=<?=$row[2];?>"><img src="images/delete.png" class="img" ></a></td>
				</tr>
				<?php
				$i++;
				}
			}
					?>
	 </tbody>
       </table>
						
                    </div>
                        
                </div>
                <!-- /.row -->

				
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
