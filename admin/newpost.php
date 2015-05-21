<?php
include "header.php";
?>
 <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           New Page
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="dashboard.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-list-alt"></i> New Page
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->


                 <style>
				 .error {
                   color: red;
				    font-size: 16px;;
                    }
					.suc {
                   color: green;
				  font-size: 16px;;
                    }
					</style>
					
			  <?php
			  	extract($_REQUEST); 
				if(isset( $save))
				{
					echo "<div class='breadcrumb'><p class='suc'>Page is Added Successfully</p></div>";
				}
				if(isset( $savefail))
				{
					echo "<div class='breadcrumb'><p class='error'>Page is doesn't added try again !</p></div>";
				}
				
				?>
				

                <div class="row">
                    <div class="col-lg-6">
                
										<form role="form" method="post" action="savepage.php">
                           <div class="form-group">
                                <label>Page title</label>
                                <input class="form-control" placeholder="Enter title" name="title" required>
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
                                <textarea class="form-control" rows="10" name="content" ></textarea>
                            </div>
                                                             
                           <div class="form-group">
                                <label>Select Menu</label>
                                <select class="form-control" name="menu">
								    <option value="">-- Select --</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>

                            <button type="submit" name="submit" class="btn btn-default">Post Content</button>
                            

                        </form>

						
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
