<?php
$id=$_REQUEST['id'];
mysql_connect("localhost","root","");
mysql_select_db("minor_project");

$qry=mysql_query("delete  from orders  where id='$id' ");

if($qry==true)
{
	header("location:orders.php");
}
else{
	echo "Error..";
}
?>