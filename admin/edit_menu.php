<?php
include('includes/functions.php');
 $edit=$_GET['ed'];
  $sql = mysql_query("select * from menu where id='$edit'")or die(mysql_error());
$row=mysql_fetch_array($sql);
include "header.php";

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
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">

                        <form role="form" method="post" action="edit.php">
                       <input type="hidden" name="id" value="<?=$edit?>">
                            <div class="form-group">
                                <label>Edit Menu Name</label>
                                <input class="form-control" placeholder="Enter Menu Name" type="text" value='<?=$row['menu_name'];?>' name='menu_name' required />
                            </div>
							<button type="submit" class="btn btn-default" name="submit" value="submit">Submit</button>
                       </form>
   
