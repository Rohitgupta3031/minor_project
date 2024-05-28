<style>
body,html{
background:black;
}
#tooplate_footer_wrapper{
margin-top:300px;
}
table{
font-family:Georgia, "Times New Roman", Times, serif;
}
#content{
margin-top:100px;
}
input{
border-radius:20px;
height:40px;
width:250px;
text-align:center;
font-size:18px;
}
h1{
text-align:center;
text-decoration:underline;
color:red;
}

</style>

<div id="content">
<h1><img src="images/png1.png" height="70px" width="70px">Login For Only Admin</h1>
<form method="post" action="" enctype="multipart/form-data" >
<table border="0"  align="center">
<tr>
<th></th>
<td><input name="aid" placeholder="Username" required style="height:50px;"></td>
</tr>
<tr>
<th></th>
<td><input type="password" name="pwd" placeholder="Password" required style="height:50px;"></td>
</tr>
<tr>
<th></th>
<td><input type="submit" value="Login" name="login"></td>
</tr>
<tr><th></th><td><input type="reset" value="Cancel"></td> </tr>
</table>
</form>
</div>
<?php

mysql_connect("localhost","root","");
mysql_select_db("minor_project");

if(isset($_POST['login']))
{
$uid=$_POST['aid'];
$pwd=$_POST['pwd'];
$q=mysql_query("select * from admin_login where aid='$uid' and pwd='$pwd'");
if(mysql_num_rows($q)>0)
{
session_start();
$_SESSION['aid']=$uid;
header("location:users_list.php");
}
else{ 
echo "<a style='color:white;'>invalid account</a>";
}
}

?>