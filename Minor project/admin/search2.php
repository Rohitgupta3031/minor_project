
	<?php
		mysql_connect("localhost","root","");
	    mysql_select_db("minor_project");
	$btn=$_GET['btn'];
	$qry=mysql_query("SELECT * FROM `products` WHERE pname='$btn' ") or die(mysql_error());
	while($data=mysql_fetch_array($qry)){ ?>
<table border="5" width="450" align="center" >
<tr>
<th>Product name:</th>
<td><?php echo $data['pname'];?></td>
</tr>

<tr>
<th>Description:</th>
<td><?php echo $data['pdesc'];?></td>
</tr>

<tr>
<th>Price:</th>
<td><?php  echo $data['pprice'];?></td>
</tr>

<tr>
<th>Category:</th>
<td><?php  echo $data['pcategory']; ?></td>
</tr>
<?php
}
?>
</form>
</table>
