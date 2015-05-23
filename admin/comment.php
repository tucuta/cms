<?php
include("includes/functions.php");
include"header.php";
?>
 <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            User comments
                        </h1>
                         <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="dashboard.php">Dashboard</a>
                            </li>
                            
                            <li class="active">
                                <i class="fa fa-edit"></i> Click on commenttab to see comments
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

 

<!--<div class="container">
<button id="btn" class="btn btn-primary">comment</button>
<form id="comment"  method="POST" class="form-horizontal" role="form" enctype="multipart/formdata">

 <div class="form-group">
 <div class="col-xs-6">
      <label class="control-label col-sm-2" for="email">Email:</label>
	   <div class="col-sm-10">
	  <input type="email" class="form-control input-lg col-xs-4" name="email" required/><br>
	  </div></div></div>
	  <div class="col-xs-6">
	  <div class="form-group">
      <label class="control-label col-sm-2" for="comment">Comment:</label>
	   <div class="col-sm-10">
      <textarea name="comment" class="form-control input-lg" rows="5" id="comment"></textarea>
    </div></div></div>
	  
 <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
      </div>
    </div>
</form></div><br><br>-->
<?php
extract($_REQUEST);
$dis=mysql_query("select *from comments")or die(mysql_error());
	$count=mysql_num_rows($dis);
echo "<a href='#'id='com'>Comments <span class='badge'>".$count."</span></a><br>";
//echo $del;

if(isset($_POST["submit"]))
	
	{
		$insert=new Comment();
		$insert->insert_comment($email,$comment);
if($insert=1)
{
	echo "
	<div class='alert alert-success fade in' width:'50px'>
	<a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    <strong>commented successfully</strong>
  </div>";

}	
	}
if(isset($del))
{
$delete=new Comment();
$delete->delete();
}

$display=new Comment();
$display->display();


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
	 <script src="js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap.js"></script>
<script type="text/javascript">


$(document).ready(function()
{
	$("#comment").hide();
	
});
$(document).ready(function()
{
	$("#btn").click(function(){
		$("#comment").toggle();
		$("#comment").trigger('reset');
	});
	
});
$(document).ready(function()
{
	
	$("#comm").hide();
});
$(document).ready(function()
{
	$("#com").click(function(){
		$("#comm").toggle();
		$("#comm").trigger('reset');
	});
	
});

</script>
</body>

</html>
