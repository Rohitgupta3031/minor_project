<?php 
session_start();
if(!isset($_SESSION['aid']))
{
header("location:index.php");
} ?>
<style>
#tooplate_footer_wrapper{
margin-top:600px;
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
	       <li><a href="http://localhost/php projects/Minor project new/admin/users_list.php">Users List</a></li>
                <li><a href="http://localhost/php projects/Minor project new/AddCat.php" >Add Products</a></li>
                <li><a href="http://localhost/php projects/Minor project new/admin/orders.php" class="current">Orders</a></li>
             
		           <li><a href="http://localhost/php projects/Minor project new/admin/prod_list.php">Products List</a></li>
				   <li><a href="http://localhost/php projects/Minor project new/admin/logout.php">Logout</a></li>

                              </ul>    	
        </div> <!-- end of tooplate_menu -->
    </div> <!-- end of forever header -->
    
    <div id="tooplate_middle_subpage">
    	<h2>ADMIN</h2>
		       <br>
			   
			<h1><u>Orders</u></h1><br><br>
<table border="2" align="center" width="300">
<tr>
<th>NAME</th>
<th>USERNAME</th>
<th>MOBILE</th>
<th>CITY</th>
<th>ADDRESS</th>
<th>PRODUCT NAME</th>
<th>PRICE</th>
<th>QUANTITY</th>
<th>TOTAL PRICE</th>
</tr>
<?php
mysql_connect("localhost","root","");
mysql_select_db("minor_project");
$qry=mysql_query("select * from orders");
while($data=mysql_fetch_array($qry))
{?>
<tr>
<td><?php echo $data['name']; ?></td>
<td><?php echo $data['username'];?></td>
<td><?php echo $data['mobile']; ?></td>
<td><?php echo $data['city']; ?></td>
<td><?php echo $data['address']; ?></td>
<td><?php echo $data['pname']; ?></td>
<td><?php echo $data['pprice']; ?></td>
<td><?php echo $data['quantity']; ?></td>
<td><?php echo $data['pfinal']; ?></td>
<td><a href="delete.php?id=<?php echo $data['id']?>"> <button type="botton" onclick="return confirm('Confirm,to place order')">Place Order</button> </a></td>
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
