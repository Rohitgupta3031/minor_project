<?php 
session_start();
if(!isset($_SESSION['aid']))
{
header("location:index.php");
} ?>
 <style>
#tooplate_footer_wrapper{
margin-top:400px;
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
	       <li><a href="http://localhost/php projects/Minor project new/admin/users_list.php" class="current">Users List</a></li>
                <li><a href="http://localhost/php projects/Minor project new/AddCat.php" >Add Products</a></li>
                <li><a href="http://localhost/php projects/Minor project new/admin/orders.php" >Orders</a></li>
               			            <li><a href="http://localhost/php projects/Minor project new/admin/prod_list.php">Products List</a></li> 
									<li><a href="http://localhost/php projects/Minor project new/admin/logout.php">Logout</a></li>
	
                              </ul>    	
        </div> <!-- end of tooplate_menu -->
    </div> <!-- end of forever header -->
    
    <div id="tooplate_middle_subpage">
    	<h2>ADMIN</h2>
		       <br>
			   
			<h1><u>Users List</u></h1><br><br>


<table border="2" align="center" width="300">
<tr>
<th>NAME</th>
<th>E-mail</th>
<th>STATE</th>
<th>CITY</th>
<th>USERNAME</th>
<th>MOBILE</th>
</tr>
<?php
mysql_connect("localhost","root","");
mysql_select_db("minor_project");
$qry=mysql_query("select * from registration");
while($data=mysql_fetch_array($qry))
{?>
<tr>
<td><?php echo $data['name']; ?></td>
<td><?php echo $data['email'];?></td>
<td><?php echo $data['state']; ?></td>
<td><?php echo $data['city']; ?></td>
<td><?php echo $data['username']; ?></td>
<td><?php echo $data['mobile']; ?></td>
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
