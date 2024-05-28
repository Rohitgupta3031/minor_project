<?php

mysql_connect("localhost","root","");
mysql_select_db("minor_project");

$pname=$_GET['pname'];
$pdesc=$_GET['pdesc'];
$price=$_GET['pprice'];
$pcat=$_GET['pcategory'];
$id=$_GET['id'];

$qry=mysql_query("UPDATE products SET pname='$pname',pdesc='$pdesc' ,pprice='$price' ,pcategory='$pcat' WHERE id='$id' ") or die(mysql_error());
if($qry==true)
{
	header("location:prod_list.php");
}
else{
	echo "Error";
}
?>