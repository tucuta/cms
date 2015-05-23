<?php
include('header.php');
include('includes/functions.php');
$sql = mysql_query("select * from menu where active=1")or die(mysql_error());
 $count = mysql_num_rows($sql);
 while($row = mysql_fetch_array($sql))
	{
		$row_array[$row['id']]['menu_name']=$row['menu_name'];
	}
?>
<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Forms
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
		<?php
                      if(isset($del))
                      {
                    $obj1=new Functions();
                    $obj1->delete_submenu();
                         ?>
						<div class='alert alert-success fade in'>
 <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    <strong>Deleted successfully</strong>
  </div>
                          <?php
							}
			if(isset($asms))
                      {
                         ?>
						<div class='alert alert-success fade in'>
 <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    <strong>Submenu Added successfully</strong></div>
						<?php } ?>
						<br>
				<div class="form-group"><br>
			<form role="form" method="post" action="addsubmenudb.php">	
      
                                <label>Select Main Menu</label>
                                <select class="form-control" name='menu_list'>
		<option value="">--------------- Select ----------------</option>
                                    <?php
	   foreach($row_array as $key => $val)
	{
		?>
		
		<option value='<?php echo $key?>'><?=$val['menu_name']?></option>
		<?php
	}
		?>
                                </select>
                            </div>
<div class="form-group">
                                <label>Enter Sub Menu Name</label>
                                <input class="form-control" placeholder="Enter Sub Menu Name" type="text" name="sub_menu" required />
                            </div>
							<button type="submit" class="btn btn-default" name="submit" value="submit">Submit</button>
                       </form>
<?php
   $demo1=new Functions();
$demo1->view_submenu();
?>


<!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
   <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>