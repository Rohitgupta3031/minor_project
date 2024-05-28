<style>
#tooplate_footer_wrapper{
margin-top:300px;
}
table{
font-family:Georgia, "Times New Roman", Times, serif;
}
#search{

}
#search input{
margin-left:300px;
border:3px solid #bd9213;
width:300px;
height:50px;
border-radius:20px;
text-align:center;
font-size:15px;
}
#btn{
background-color:black;
color:#bd9213;
}
</style>
<?php
include 'header.php';
?>

        <div id="tooplate_menu">
            <ul>
	       <li><a href="http://localhost/php projects/Minor project new/admin/index.php" >User List</a></li>
                <li><a href="http://localhost/php projects/Minor project new/AddCat.php" >Add products</a></li>
                <li><a href="http://localhost/php projects/Minor project new/admin/orders.php" >Orders</a></li>
                <li><a href="http://localhost/php projects/Minor project new/admin/search.php" class="current">Search</a></li>
				             <li><a href="http://localhost/php projects/Minor project new/admin/prod_list.php" >Products List</a></li>

							  </ul>    	
        </div> <!-- end of tooplate_menu -->
    </div> <!-- end of forever header -->
    
    <div id="tooplate_middle_subpage">
    	<h2>ADMIN</h2>
		       <br>
			   
			<h1><u>Search products</u></h1><br><br>
<div id="search">
<form  method="get" action="search2.php" >
<input type="text" name="search" placeholder="Enter name of product"><br><br>
<input type="submit" name="btn" value="SEARCH" id="btn">
</form>
</div>

    <div class="cleaner"></div>
    </div> <!-- end of main -->

	<div class="cleaner"></div>
</div> <!-- end of forever wrapper -->
</div> <!-- end of forever body wrapper -->

<?php
include 'footer.php';
?>
