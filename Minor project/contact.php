<?php
include 'header.php';
?>
        <div id="tooplate_menu">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="select_prod.php">Jewelleries</a></li>
                <li><a href="reg_login.php">LogIn</a></li>
                <li><a href="contact.php" class="current">Contact</a></li>
            </ul>    	
        </div> <!-- end of tooplate_menu -->
    </div> <!-- end of forever header -->
    
    <div id="tooplate_middle_subpage">
    	<h2>Contact Us</h2><br>
        <p>For any complant,complement and enquiry please contact us we are available for you 24 hours. Contact us through E-mail or message and phone calls. </p>	
	</div> <!-- end of middle -->
    
    <div id="tooplate_main">
    
    	<div class="col_w960">
        	<div class="col_w450 float_l">
                
			  <div class="col_w200 float_l">
 					<h4>Map</h4>
					<div class="cleaner h10"></div>
					<div id="map">
		            <a href="images/map_big.jpg" title="Map"><img width="300" height="190" src="images/map_thumb.jpg" alt="Map" /></a>
					</div>
		            <div class="cleaner h30"></div>				
                    <h4>Mailing Address</h4>
                    <h6><strong>Company Name</strong></h6>
                    India, <br />
					Online jewellery shop <br />
					Phone: 010-010-5500 <br />
					email: <a href="mailto:info@yoursite.com">onlinejewellery@123.com</a>    
              </div>
                <div class="cleaner"></div>
            </div>
            
            <div class="col_w450 float_r">
				<div id="contact_form">
        
					<h4>Quick Contact Form</h4>
					
					<form method="post" name="contact" action="#">
					
						<label for="author">Name:</label> <input type="text" id="author" name="author" class="required input_field" />
						<div class="cleaner h10"></div>
													
						<label for="email">Email:</label> <input type="text" class="validate-email required input_field" name="email" id="email" />
						<div class="cleaner h10"></div>
											
						<label for="subject">Subject:</label> <input type="text" class="validate-subject required input_field" name="subject" id="subject"/>				               
						<div class="cleaner h10"></div>
							
						<label for="text">Message:</label> <textarea id="text" name="text" rows="0" cols="0" class="required"></textarea>
						<div class="cleaner h10"></div>				
												
						<input type="submit" value="Send" id="submit" name="submit" class="submit_btn float_l" />
						<input type="reset" value="Reset" id="reset" name="reset" class="submit_btn float_r" />
						
					</form>
					
				</div>
            </div>
            
            <div class="cleaner"></div>
		</div>
        
        <div class="cleaner"></div>
    </div> <!-- end of main -->

	<div class="cleaner"></div>
</div> <!-- end of forever wrapper -->
</div> <!-- end of forever body wrapper -->
<?php
include 'footer.php';
?>