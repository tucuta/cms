<?php
include "header.php";
?>
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

                        <form  action="ustore.php" method="post" enctype="multipart/formdata" role="form">

               
                            <div class="form-group">
                                <label>Username</label>
                                <input class="form-control" placeholder="Enter name" type="text" name="uname">
                            </div>
							<div class="form-group">
                                <label>Password</label>
                                <input class="form-control" placeholder="Enter password" type="password"  name="upass">
                            </div>
							<div class="form-group">
                                <label>E-Mail</label>
                                <input class="form-control" placeholder="Enter email" name="email" type="email">
                            </div>
							
							<div class="form-group">
                                <label>Role</label>
                                <select name="role">
                                    <option>Administrator</option>
                                    <option>Reader</option>
                                    
                                </select>
                            </div>

                   <button type="submit" class="btn btn-default">Submit</button>
                    <button type="reset" class="btn btn-default">Reset</button>

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
