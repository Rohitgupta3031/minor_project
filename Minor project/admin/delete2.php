<?php
$id=$_REQUEST['id'];
mysql_connect("localhost","root","");
mysql_select_db("minor_project");

$qry=mysql_query("delete  from products  where id='$id' ")or die(mysql_error());

if($qry==true)
{
	header("location:prod_list.php");
}
else{
	echo "Error..";
}
?>
