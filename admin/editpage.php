<?php 
include "header.php";
?>
<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
					
                        <h1 class="page-header">
                         Edit Page  
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="dashboard.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-list-alt"></i> Edit Page
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
					
					<form role="form" method="post" action="updatepage.php">
					<input type="hidden" name="id" value="<?=$row[0];?>">
                           <div class="form-group">
                                <label>Page title</label>
                                <input class="form-control" placeholder="Enter title" name="title" value="<?=$row[1];?>"required>
                            </div>                                                      
                            <div class="form-group">
								<script src="tinymce/js/tinymce/tinymce.min.js"></script>
								<script>tinymce.init({
									
								   selector: "textarea",
									theme: "modern",
									plugins: [
										"advlist autolink lists link image charmap print preview hr anchor pagebreak",
										"searchreplace wordcount visualblocks visualchars code fullscreen",
										"insertdatetime media nonbreaking save table contextmenu directionality",
										"emoticons template paste textcolor colorpicker textpattern"
									],
									toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
									toolbar2: "print preview media | forecolor backcolor emoticons",
									image_advtab: true,
									templates: [
										{title: 'Test template 1', content: 'Test 1'},
										{title: 'Test template 2', content: 'Test 2'}
									]
								});
								</script>


                                <label>Content</label>
                                <textarea class="form-control" rows="10" name="content" > <?=$row[2];?></textarea>
                            </div>
                                                             
                           <div class="form-group">
						   <table>
						   <tr>
							<td> <label>Select Menu</label></td>
							<td>&nbsp;</td>
							<td><select class="form-control" name="menu">
							
								    <option value="">-- Select --</option>
                                    
                                    <?php

		$menuId =$row[3];
			 $sql1 = mysql_query("select * from menu where active=1")or die(mysql_error());
             $count1 = mysql_num_rows($sql1);
             if($count1>0)
             {
             while($row1 = mysql_fetch_array($sql1))
	         {
				 if($menuId == $row1[0])
				 {
	
		      ?>
						
								<option value="<?=$row1[0];?>" selected ><?=$row1[1];?></option>
							
							<?php }
							else
				 {
								?>

								<option value="<?=$row1[0];?>"><?=$row1[1];?></option>
				 <?php
				 }
			 }
				}?></select></td>
						   </tr>
						   </table>     
                            </div>

                            <button type="submit" name="submit" class="btn btn-default">Update Content</button>
                            
	                       

                        </form>

				<?php
				
				}
			}
					?>
	
	 	
						
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

</html>
