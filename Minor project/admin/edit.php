<?php
$id=$_REQUEST['id'];
mysql_connect("localhost","root","");
mysql_select_db("minor_project");
 
 $qry=mysql_query("select * from products where id='$id' ");
 $row=mysql_fetch_array($qry);
?>

<form action="update.php" method="get">
<table border="2" width="600" align="center">
<tr>
<th>Product Name</th>
<td><input type="text" name="pname" value="<?php echo $row['pname']?>"></td>
</tr>

<tr>
<th>Description</th>
<td><input type="text" name="pdesc" value="<?php echo $row['pdesc']?>"></td>
</tr>

<tr>
<th>Price</th>
<td><input type="text" name="pprice" value="<?php echo $row['pprice'] ?>"></td>
</tr>

<tr>
<th>Category</th>
<td><input type="text" name="pcategory" value="<?php echo $row['pcategory'] ?>"></td>
</tr>

<tr>
 <td><input type="hidden" name="id" value="<?php echo $id?>" /></td>
<td></td>
<tr>
<td></td>
<td><input type="submit" value="UPDATE">
<input type="reset" value="CANCEL" </td>
</tr>
</table>
</form>


<style>
body{
background-color:black;
color:white;
}
table{
margin-top:150px;
}
<style>