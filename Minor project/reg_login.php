<?php
include 'header.php';
?>
        <div id="tooplate_menu">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="select_prod.php">Jewelleries</a></li>
                <li><a href="reg_login.php" class="current">LogIn</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>    	
        </div> <!-- end of tooplate_menu -->
    </div> <!-- end of forever header -->
    
    <div id="tooplate_middle_subpage">
    	<h2>Login And Registeration</h2><br>
        <p style="color:red;">You Required Registeration and LogIn for Buying Products On this Website, So please complete the Login process.</p>	
	</div> <!-- end of middle -->
    
    <div id="tooplate_main">
<div id="login">
<table border="0">
<tr>
<td>
<h1>Account Login</h1>
<form method="post">
<div id="table1">
<table border="0" >
<tr>
<th>Username:</th>
<td><input name="username" placeholder="username" required ></td>
</tr><br>
<tr>
<th>Password:</th>
<td><input type="password" name="pass" placeholder="password" required ></td>
</tr>
<tr>
<td></td><td><input type="submit" value="LogIn" name="bttLogin">&nbsp;&nbsp;<input type="reset" value="Cancel"></td>
</tr>
</table>
</div><!-- end of table1-->
</form>
</td>
<?php
mysqli_connect("localhost","root","","minor_project");

if(isset($_POST['bttLogin']))
{
$uid=$_POST['username'];
$pwd=$_POST['pass'];
$q=mysqli_query("select * from registration where username='$uid' and pass='$pwd'");

if(mysqli_num_rows($q)>0)
{
session_start();
$_SESSION['username']=$uid;
header("location:select_prod.php");
}
else{ 
echo "invalid account";
}
}

?>

</div><!--end of login-->
<td>
<div id="register">
<div id="table2">
<h1>Create Account</h1>
<form action="" method="post">
<table border="0" >
<tr>
<th>Name:</td>
<td><input name="name" placeholder="Name*" required></td>
</tr>
<tr>
<th>Email:</td>
<td><input name="email" placeholder="Email" required></td>
</tr>
<th>Mobile:</td>
<td><input name="mobile" placeholder="Mobile*" required></td>
</tr>
<th>State:</td>
<td><select name="state" required><option>Select State</option><option>MadhyaPradesh</option><option>Maharashtra</option><option>UttarPradesh</option><option>Rajasthan</option><option>Tamilnadu</option></select></td>
</tr>
<th>City:</td>
<td><input name="city" placeholder="Enter City" required></td>
</tr>
<th>Address:</td>
<td><input name="address" placeholder="Address" required></td>
</tr>
<th>User Name:</td>
<td><input name="username" placeholder="User name" required></td>
</tr>
<th>Password:</td>
<td><input name="pass" placeholder="Password" required></td>
</tr>
<th>Re-Enter Password:</td>
<td><input name="re-pass" placeholder="Re-Enter Password" required></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="Register Now" name="submit">&nbsp;&nbsp;<input type="reset" value="Cancel"></td>
</tr>
</table>
</div><!--end of table2-->
</form>
</td>
</tr>
</table><!--BIG TABLES-->
<?php
if(isset($_POST['submit'])){
 
mysqli_connect("localhost","root","","minor_project");

$name=$_POST['name'];
$email=$_POST['email'];
$state=$_POST['state'];
$city=$_POST['city'];
$username=$_POST['username'];
$pass=$_POST['pass'];
$re_pass=$_POST['re-pass'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];
$q=mysqli_query("INSERT INTO `registration`(`name`, `email`, `state`, `city`, `address`, `username`, `pass`, `re-pass`, `mobile`) VALUES ('$name','$email','$state','$city','$address','$username','$pass','$re_pass','$mobile')") or die(mysql_error());
if($q==true){ 
header("location:successfull.php");
} 
else{
echo "Something is wrong,registration is not done";
}
}
?>
</div><!--end of register-->
	
        <div class="cleaner"></div>
    </div> <!-- end of main -->

	<div class="cleaner"></div>
</div> <!-- end of forever wrapper -->
</div> <!-- end of forever body wrapper -->

<?php
include 'footer.php';
?>