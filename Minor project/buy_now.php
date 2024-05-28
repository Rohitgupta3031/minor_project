<?php
include 'header.php';
?>

        <div id="tooplate_menu">
            <ul>
       <li><a href="index.php">Home</a></li>
                <li><a href="about.php" >About Us</a></li>
                <li><a href="select_prod.php" class="current">Jewelleries</a></li>
                <li><a href="reg_login.php">LogIn</a></li>
                <li><a href="contact.html">Contact</a></li>                
				</ul>    	
        </div> <!-- end of tooplate_menu -->
    </div> <!-- end of forever header -->
    
    <div id="tooplate_middle_subpage">
    	<h2>Buy Now Product</h2>
		       <br>
	<div id="username" style="padding:-500px 0px 0px;"> 
 <?php
session_start();
if(isset($_SESSION['username']))
{ ?>
<h1 style="color:purple;"><?php echo 'Welcome  '.$_SESSION['username']."<br>"; ?></h1>
<?php
echo "<a href='logout.php'>LogOut</a>";
}
else{			
header("location:reg_login.php");
}
 ?>
</div><!--end of username -->
</div> <!-- end of middle -->
	
	<div id="tooplate_main">

<?php 
mysql_connect("localhost","root","");
mysql_select_db("minor_project");
$pname=$_REQUEST['pname'];
$qry1=mysql_query("select * from registration where username='$_SESSION[username]'");
$row=mysql_fetch_array($qry1);
$qry=mysql_query("select * from products where pname='$pname'");
$data=mysql_fetch_array($qry);
{?>
<form action="final_order.php" method="post">
<table width="305" border="1" align="center">
	<tr>
	<td>
	<img src="<?php  echo $data['image']?>" height="270px" width="250px" />
	</td>
	<td>
	<table border="1" width="300" align="center" >
	<tr>
	<th>Name:</th>
	<td><input name="name" value="<?php echo $row['name'];?>" /></td>
	</tr>
	
	<tr>
	<th>Username:</th>
	<td><input name="username" value="<?php echo $row['username'];?>"/></td>
	</tr>
	
	<tr>
	<th>Mobile:</th>
	<td><input name="mobile" value="<?php  echo $row['mobile'];?>"/></td>
	</tr>
	
	<tr>
	<th>City:</th>
	<td><input name="city" value="<?php  echo $row['city']; ?>" /></td>
	</tr>
	
	<tr>
	<th>Address:</th>
	<td><input name="address" value="<?php  echo $row['address']; ?>"/></td>
	</tr>
	
	<tr>
	<th>Product Name:</th>
	<td><input name="pname" value="<?php  echo $data['pname']; ?>"/></td>
	</tr>
	<tr>
	<th>Price:</th>
	<td><input id="n1" name="pprice" value="<?php  echo $data['pprice']; ?>"/></td>
	</tr>
	<tr>
	<th>Quantity:</th>
	<td><input id="n2" onkeyup="multiply()" name="quantity" required/></td>
	</tr>
	<tr>
	<th>Final Price:</th>
	<td><input id="rs" name="pfinal" value=""/></td>
	</tr>
	<tr>
	<td></td>
	<td><input type="submit" name="submit" value="OrderNow"></button></td>
	</tr>

	
<script src="js_lib.js"></script>
<script>
function multiply() 
{
var n1=$("#n1").val(); 
var n2=$("#n2").val(); 
var r=(+n1) * (+n2); 
 $("#rs").val(r); 
} 
</script>

		<?php 
	
	if(isset($_SESSION['username']))
	{
	?>
	
	<?php
	}
	?>
	</td>
	</tr>
	</table>
	</td>
</tr>
</table>
</form>
	<br>
	<?php }?>
	


        <div class="cleaner"></div>
    </div> <!-- end of main -->

	<div class="cleaner"></div>
</div> <!-- end of forever wrapper -->
</div> <!-- end of forever body wrapper -->

<?php
include 'footer.php';
?>
