<?php
include "header.php";
include('includes/functions.php');
?>

 <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            New Menu
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> New Menu
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">

                        <form role="form" method="post">
                       <?php
                      if(isset($del))
                      {
                    $obj1=new Functions();
                    $obj1->delete_menu();
                         ?>
						<div class="alert alert-success">
 <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    <strong>Deleted successfully</strong>
  </div>
                          <?php
							}
                         if(isset($editsuc))
                          {
                         ?>
						<div class="alert alert-success">
 <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    <strong>Updated successfully</strong>
  </div>
                          <?php
							}
						 ?>
                            <div class="form-group">
                                <label>Enter Menu Name</label>
                                <input class="form-control" placeholder="Enter Menu Name" type="text" name="name" required />
                            </div>
							<button type="submit" class="btn btn-default" name="submit" value="submit">Submit</button>
                       </form>
   <?php  
   extract($_REQUEST);
   
 $demo=new Functions();
if(isset($_POST['submit']))
 {
  
   $demo->insert_menu($name);
   
 }
 $menu= mysql_query("select menu_name from menu where active=1")or die(mysql_error());
$count = mysql_num_rows($menu);
if($count>0)
{
$demo->view_menu();
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
   <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
<?php





?>
