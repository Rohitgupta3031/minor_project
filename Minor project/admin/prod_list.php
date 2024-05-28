<?php 
session_start();
if(!isset($_SESSION['aid']))
{
header("location:index.php");
} ?>

<style>
#tooplate_footer_wrapper{
margin-top:700px;
}
table{
background-color:#2A0000;
color:#FFFBF0;
font-family:Georgia, "Times New Roman", Times, serif;
}
table th{
color: #bd9213;
}


</style>
<?php
include 'header.php';
?>

        <div id="tooplate_menu">
            <ul>
	       <li><a href="http://localhost/php projects/Minor project new/admin/users_list.php" >Users List</a></li>
                <li><a href="http://localhost/php projects/Minor project new/AddCat.php" >Add Products</a></li>
                <li><a href="http://localhost/php projects/Minor project new/admin/orders.php" >Orders</a></li>
              
				            <li><a href="http://localhost/php projects/Minor project new/admin/prod_list.php" class="current">Products List</a></li>
							<li><a href="http://localhost/php projects/Minor project new/admin/logout.php">Logout</a></li>

                              </ul>    	
        </div> <!-- end of tooplate_menu -->
    </div> <!-- end of forever header -->
    
    <div id="tooplate_middle_subpage">
    	<h2>ADMIN</h2>
		       <br>
			   
			<h1><u>Available Products</u></h1><br><br>
<table border="2" align="center" width="800">
<tr>
<th>PRODUCT NAME</th>
<th>DESCRIPTION</th>
<th>PRICE</th>
<th>CATEGORY</th>
</tr>
<?php
mysql_connect("localhost","root","");
mysql_select_db("minor_project");
$qry=mysql_query("select * from products");
while($data=mysql_fetch_array($qry))
{?>
<tr>
<td><?php echo $data['pname']; ?></td>
<td><?php echo $data['pdesc'];?></td>
<td><?php echo $data['pprice']; ?></td>
<td><?php echo $data['pcategory']; ?></td>
<td><a href="delete2.php?id=<?php echo $data['id']?>">
 <button type="botton" onclick="return confirm('Are you sure to delete this product..')">DELETE</button> </a> 

<td><a href="edit.php?id=<?php echo $data['id']?>"> <button type="button">UPDATE</td>
</tr>
<?php }
?>
</table>

    <div class="cleaner"></div>
    </div> <!-- end of main -->

	<div class="cleaner"></div>
</div> <!-- end of forever wrapper -->
</div> <!-- end of forever body wrapper -->

<?php
include 'footer.php';
?>
