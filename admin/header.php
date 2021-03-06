<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">
	 <link href="css/styles.css" rel="stylesheet">


    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

	<script>
	function goBack() {
		window.history.back();
	}
	</script>

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="dashboard.php">INNOVATE CMS</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
               <?php
				session_start();
				include "includes/config.php";
				if(!isset($_SESSION["user_name"]))
				{
					header("location: index.php"); 
				}
				?>
               <li class="dropdown">
                    <a href="<?=DIR?>" target="_blank"><i class="fa fa-globe"></i> View Site</a>    
                </li>
                <li class="dropdown">

                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?=$_SESSION["user_name"]; ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                       
                        <li>
                            <a href="editprofile.php"><i class="fa fa-fw fa-edit"></i>Edit Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="dashboard.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
					<li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#menu"><i class=" fa fa-fw fa-list" ></i>Menu <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="menu" class="collapse">
                            <li>
                                <a href="allmenus.php">All Menus</a>
                            </li>
                            <li>
                                <a href="new_menu.php">Add Menu</a>
                            </li>
							<li>
                                <a href="addsubmenu.php">Add Sub Menu</a>
                            </li>
                        </ul>
                    </li>
                     
					 <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#posts"><i class="fa fa-fw fa-list-alt"></i> Pages <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="posts" class="collapse">
                            <li>
                                <a href="allpages.php">All Pages</a>
                            </li>
                            <li>
                                <a href="newpost.php">Add New</a>
                            </li>
                        </ul>
                    </li>
					 <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-user"></i> Users <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="allusers.php">All Users</a>
                            </li>
                            <li>
                                <a href="adduser.php">Add New</a>
                            </li>
							<li>
                                <a href="editprofile.php">Your Profile</a>
                            </li>
                        </ul>
                    </li>
					   <li>
                        <a href="comment.php"><i class="fa fa-fw fa-comments"></i>Comments</a>
                    </li>
						 <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#settings"><i class="fa fa-fw fa-gear"></i> Settings <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="settings" class="collapse">
                            <li>
                                <a href="#">General</a>
                            </li>
                           
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
