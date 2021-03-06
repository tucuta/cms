<?php
require('admin/includes/config.php'); 
include "admin/dbconnect.php";
?>

<!DOCTYPE HTML>
<html>

<head>
  <title>Innovate CMS</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="theme/css/style.css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="theme/js/modernizr-1.5.min.js"></script>
</head>

<body>
  <div id="main">
    <header>
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.php">INNOVATE<span class="logo_colour">CMS</span></a></h1>
          <h2>Simple Content Management System</h2>
        </div>
      </div>
      <nav>
        <div id="menu_container">
          <ul class="sf-menu" id="nav">
		  <?php
		//get the rest of the pages
		$sql = mysql_query("SELECT `pages`.`menu_id` , `menu`.`menu_name` , `pages`.`id` FROM `pages` INNER JOIN `menu` ON (`pages`.`menu_id` = `menu`.`id`)");
		while ($row = mysql_fetch_object($sql))
		{
			?>

			<li><a href="<?=DIR?>?p=<?=$row->id?>"><?=$row->menu_name?></a></li> 
			<?php
		}
	?>
            
          </ul>
        </div>
      </nav>
    </header>
    <div id="site_content">
      <div id="sidebar_container">
        <div class="sidebar">
          <h3>Latest News</h3>
          <h4>New Website Launched</h4>
          <h5>March 1st, 2012</h5>
          <p>2012 sees the redesign of our website. Let us know what you think..... <a href="#">read more</a></p>
        </div>
        <div class="sidebar">
          <h3>Special Offers</h3>
          <h4>20% Discount</h4>
          <p>For the month of March 2012, we are offering a 20% discount for all new customers.</p>
        </div>
        <div class="sidebar">
          <h3>Contact Us</h3>
          <p>We'd love to hear from you. Call us, <a href="#">email us</a> or complete our <a href="contact.php">contact form</a>.</p>
        </div>
      </div>
      <div id="content">
       <?php	
	//if no page clicked on load home page default to it of 1
	if(!isset($_GET['p'])){
		$q = mysql_query("SELECT * FROM pages WHERE id='11'");
	} else { //load requested page based on the id
		$id = $_GET['p']; //get the requested id
		$id = mysql_real_escape_string($id); //make it safe for database use
		$q = mysql_query("SELECT * FROM pages WHERE id='$id'");
	}
	
	//get page data from database and create an object
	$r = mysql_fetch_object($q);
	
	//print the pages content
	echo "<h1>$r->page_title</h2>";
	echo $r->page_content;
	?>
      </div>
    </div>
    <div id="scroll">
      <a title="Scroll to the top" class="top" href="#"><img src="theme/images/top.png" alt="top" /></a>
    </div>
    <footer>
      <p>
	  <?php
		//get the rest of the pages
		$sql3 = mysql_query("SELECT `pages`.`menu_id` , `menu`.`menu_name` , `pages`.`id` FROM `pages` INNER JOIN `menu` ON (`pages`.`menu_id` = `menu`.`id`)");
		$count =mysql_num_rows($sql3);
		$i=1;
		while ($row3 = mysql_fetch_object($sql3))
		{
			?>

			<a href="<?=DIR?>?p=<?=$row3->id?>"><?=$row3->menu_name?></a>
			<?php
			if($i<$count)
			{
				echo "|";
			}
			$i++;
		}
	?></p>
      <p>Copyright &copy; INNOVATE CMS | <a href="http://innovatetechnosolutions.com/" target="_blank">designed by Innovate Techno Solutions Team</a></p>
    </footer>
  </div>
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="theme/js/jquery.js"></script>
  <script type="text/javascript" src="theme/js/jquery.easing-sooper.js"></script>
  <script type="text/javascript" src="theme/js/jquery.sooperfish.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('ul.sf-menu').sooperfish();
      $('.top').click(function() {$('html, body').animate({scrollTop:0}, 'fast'); return false;});
    });
  </script>
</body>
</html>
