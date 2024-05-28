<?php 
if (isset($_POST['submit']))
{
mysql_connect("localhost","root","");
mysql_select_db("minor_project");

$name=$_POST['name'];
$username=$_POST['username'];
$mobile=$_POST['mobile'];
$city=$_POST['city'];
$address=$_POST['address'];
$pname=$_POST['pname'];
$price=$_POST['pprice'];
$quantity=$_POST['quantity'];
$final=$_POST['pfinal'];
$query=mysql_query("INSERT INTO `orders`(`name`, `username`, `mobile`, `city`, `address`, `pname`,pprice, `quantity`,pfinal) VALUES ('$name','$username','$mobile','$city','$address','$pname','$price','$quantity','$final')") or die(mysql_error());
if($query==true){ ?>
<h2 style="color:#FF0000;">Order Request is Successfully Submitted.. </h2>
<?php }
else{
echo "Error";
}
}
?>

<style>
body{
background-color:black;
}
</style>