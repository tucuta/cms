<form method="post">
<table>
<tr>
	<td>Enter Menu Name:<input type="text" name="name" autofocus required /></td>
</tr>

<tr>
	<td><input type="submit" name="submit" value="Enter"></td>
</tr>
</table>
</form>

<?php
include('db.php');
extract($_REQUEST);
//$delete=$_GET['del'];
//echo $delete;
if(isset($del))
{
 $obj1=new Db();
$obj1->delete_menu();
}
$demo1=new Db();
$demo1->view_menu();
if(isset($_POST['submit']))
 {
$demo=new Db();
$demo->insert_menu($name);

}
?>
<form action="sub_menu.php">
<input type="submit" value="Sub Menu">
</form>