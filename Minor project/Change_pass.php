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

<?php
mysql_connect("localhost","root","");
mysql_select_db("minor_project");

?>
<form action="" method="post">

<table>
<tr><th>USERNAME</th></tr>
<tr><td><input name="username" value="<?php $_SESSION['username'] ?>"></td></tr>

<tr><th>PASSWORD</th></tr>
<tr><td><input name="pass" ></td></tr>

<tr><th>NEW-PASSWORD</th></tr>
<tr><td><input name="new"></td></tr>

<tr><td><input type="submit" value="ok" name="change"> <input type="reset" value="cancel"></td></tr>
</table>
</form>

<?php
if(isset($_POST['change']))
{
$uid=$_POST['username'];
$pwd=$_POST['pass'];
$new=$_POST['new']
$q=mysql_query("select * from registration where username='$uid' and pass='$pwd'") or die(mysql_error());
if(mysql_num_rows($q)>0)
{
$new=mysql_query("UPDATE `registration` SET `username`='$uid',`pass`='$new' WHERE username='$uid' ") or die(mysql_error());
if($new==true){
echo "pass is updated";
}
else{ echo "error"; }
}
}
?>