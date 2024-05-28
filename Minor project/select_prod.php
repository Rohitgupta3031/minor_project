<style>

</style>
<?php
include 'header.php';
?>

        <div id="tooplate_menu">
            <ul>
       <li><a href="index.php">Home</a></li>
                <li><a href="about.php" >About Us</a></li>
                <li><a href="select_prod.php" class="current">Jewelleries</a></li>
                <li><a href="reg_login.php">LogIn</a></li>
                <li><a href="contact.php">Contact</a></li>                
				</ul>    	
        </div> <!-- end of tooplate_menu -->
    </div> <!-- end of forever header -->
    
    <div id="tooplate_middle_subpage">
    	<h2>Available Jewelleries</h2>
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
else{ ?>			
<span style="color:red; font-size:25px;"><?php echo "Welcome: For Buy now Products Please..."; ?> </span><a href='reg_login.php'>Login here</a>
<?php 
}
?>
</div><!--end of username -->
	</div> <!-- end of middle -->
	
	<div id="tooplate_main">
<?php 
$con=mysqli_connect("localhost","root","","minor_project");
$result="select * from products";
$qry = mysqli_query($con,$result);
while($data=mysqli_fetch_array($qry))
{?>
<div id="products" style="float:left; border:3px solid;">
<table width="300" border="1" align="center">
<tr>
	<td>
	<img src="<?php  echo $data['image']?>" height="180px" width="150px" />
	</td>
	<td>
	<table border="1" width="300" align="center" >
	<tr>
	<th>Product<br>Name:</th>
	<td><?php echo $data['pname'];?></td>
	</tr>

	<tr>
	<th>Description:</th>
	<td><?php echo $data['pdesc'];?></td>
	</tr>
	
	<tr>
	<th>Price:</th>
	<td><?php  echo $data['pprice'];?> Rs/-</td>
	</tr>
	
	<tr>
	<th>Category:</th>
	<td><?php  echo $data['pcategory']; ?></td>
	</tr>
	
	<tr>
	<td></td>
	<?php 
	if(isset($_SESSION['username']))
	{
	?>
	<td><a href="buy_now.php?pname=<?php echo $data['pname']?>"><button type="button">Buy Now</button></a></td>
	<?php
	}
	?>
    </tr>
	<!---->
	</table>
	</td>
</tr>
</table>
</div><!--end of products-->	

	<?php }?>

        <div class="cleaner"></div>
    </div> <!-- end of main -->

	<div class="cleaner"></div>
</div> <!-- end of forever wrapper -->
</div> <!-- end of forever body wrapper -->

<?php
include 'footer.php';
?>
