<?php 
session_start();
if(!isset($_SESSION['aid']))
{
header("location:index.php");
} ?>


<style>
#tooplate_footer_wrapper{
margin-top:300px;
}
table{
font-family:Georgia, "Times New Roman", Times, serif;
}


</style>
<?php
include 'header.php';
?>

        <div id="tooplate_menu">
            <ul>
	       <li><a href="http://localhost/php projects/Minor project new/admin/users_list.php" >User List</a></li>
                <li><a href="http://localhost/php projects/Minor project new/AddCat.php"class="current" >Add products</a></li>
                <li><a href="http://localhost/php projects/Minor project new/admin/orders.php" >Orders</a></li>
                            <li><a href="http://localhost/php projects/Minor project new/admin/prod_list.php">Products List</a></li>
							<li><a href="http://localhost/php projects/Minor project new/admin/logout.php">Logout</a></li>

                              </ul>    	
        </div> <!-- end of tooplate_menu -->
    </div> <!-- end of forever header -->
    
    <div id="tooplate_middle_subpage">
    	<h2>ADMIN</h2>
		       <br>
			   
			<h1><u>Add Product</u></h1><br><br>
<form method="post" enctype="multipart/form-data">
<table border="2" width="450" align="center">
<tr>
<th>Product Name</th>
<td><input type="text" name="pname" id="" placeholder="Enter Product Name" required></td>
</tr>
<tr>
<th>Product Desc</th>
<td><input type="text" name="pdesc" id="" placeholder="Enter Product Desc" required></td>
</tr>
<tr>
<th>Product Price</th>
<td><input type="text" name="pprice" id="" placeholder="Enter Product Price" required></td>
</tr>
<tr>
<th>Product Category</th>
<td><select name="pcategory" id="" required><option>Select Category</option><option>Bracelets</option><option>Earings</option><option>Necklace Set</option><option>kangans Set</option><option>Ring</option></select></td>
</tr>
<tr>
<th>Product-image</th> 
<td><input type="file" name="img" required></td>
</tr>
<tr></tr>
<tr>
<td></td>
<td><input type="submit" name="submit" value="ADD">&nbsp;&nbsp;<input type="reset" value="CANCEL"></td>
</tr>
</table>
</form>

</div><!--end of table_add-->
<?php
if (isset($_POST['submit']))
{
mysql_connect("localhost","root","");
mysql_select_db("minor_project");

$pname=$_POST['pname'];
$pdesc=$_POST['pdesc'];
$pprice=$_POST['pprice'];
$pcategory=$_POST['pcategory'];
$img=$_FILES['img']['name'];
$img_temp=$_FILES['img']['tmp_name'];
$image="image/".$img;
move_uploaded_file($img_temp,$image);

$query=mysql_query("INSERT INTO `products`(`pname`, `pdesc`, `pprice`,`pcategory`, `image`) VALUES ('$pname','$pdesc','$pprice','$pcategory','$image')") or die(mysql_error());
if($query==true){
header("location:AddCat.php");
}
else{
echo "Error";
}
}
?>

	


    <div class="cleaner"></div>
    </div> <!-- end of main -->

	<div class="cleaner"></div>
</div> <!-- end of forever wrapper -->
</div> <!-- end of forever body wrapper -->

<?php
include 'footer.php';
?>
