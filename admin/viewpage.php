<?php 
include "header.php";
?>
<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
					
                        <h1 class="page-header">
                         View Page  
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="dashboard.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-list-alt"></i> View Page
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">
                
			<?php
			 include("dbconnect.php");
			 	extract($_REQUEST); 
			 $sql = mysql_query("SELECT * FROM `pages` WHERE `id`=$id")or die(mysql_error());
			$count = mysql_num_rows($sql);
			if($count>0)
			{
				?>
			
				 
                        <div class="table-responsive">
                            
				
				<?php
				
			while($row = mysql_fetch_array($sql))
				{
					?>
					<table class="table table-bordered table-hover table-striped">
                                <thead>
                            
									<tr>
                                        <th>Page Title : <?=$row[1];?> </th>
                                    </tr>
                                </thead>
                                <tbody>
				
			<tr>
					
				
					<td><b>Content</b><br /><?=$row[2];?></td>
					
				</tr>
				<?php
				
				}
			}
					?>
	 </tbody>
       </table>
	     <button class="btn btn-default" onclick="goBack()">Go Back</button>
	 	
						
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
