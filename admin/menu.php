<!-- Code Written by Nagendra-->

<style>
ul li:hover ul{
        display: block; /* display the dropdown */
    }
</style>
<body>
<nav>
    <div id="menu_container">
    <ul class="sf-menu" id="nav">	
<?php
extract($_REQUEST);
    // connect to mysql
    $link = mysql_connect( 'localhost', 'root', 'vertrigo' );

    // select the database
    mysql_select_db('icms', $link);

	 // the query to fetch the menu data
	 $sql = mysql_query("SELECT `id`, `menu_name`, `active` FROM `menu`");
     
	  // get the results of the query
      $count = mysql_num_rows($sql);
    
	 // loop over the results
    while($row = mysql_fetch_array($sql))
    {
		//$row_array[$row['id']]['id']=$row['id'];
		$row_array[$row['id']]['menu_name']=$row['menu_name'];
		//$row_array[$row['id']]['active']=$row['active'];
	}
	if($count>0)
{
	foreach($row_array as $key => $val)
	{
		?>

    
	<li><a href="#"><?=$val['menu_name']; ?></a><li>
	<!--<td><?=$val['active'];?></td>-->
	

<?php
	}
}
?>
  
<?php

$view1 = mysql_query("select * from sub_menu")or die(mysql_error());
$count = mysql_num_rows($view1);

while($row = mysql_fetch_array($view1))
	{
		$row_array1[$row['id']]['subname']=$row['subname'];

	}

	if($count>0)
{
	?>

	<?php
	foreach($row_array1 as $key1 => $val1)
	{

	?>
	
	  <li><a href="#">Drop Down</a>
                <ul>
				<li><a href="#"><?=$val1['subname']; ?></a></li>
				<!--<li><a href="#"><?=$val1['subname']; ?></a></li>
				<li><a href="#"><?=$val1['subname']; ?></a></li>-->
               				
			   </ul>
           

<?php
	}
}  
?>
 
     </li>    </div>
      </nav>
    </header>
  </body>
