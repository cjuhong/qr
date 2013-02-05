<?php
session_start();
$_SESSION['loggedin'] = True;
if($_SESSION['loggedin'] != True){
	header("location:login.php");
	return;
}
?>
<html>	
	<head>		
		<meta charset="utf-8">
		<title>Mass QR Code Generator</title>
		<link rel="stylesheet" href="styles/style.css" /> 
   </head> 
	<style>
		h5{text-align:right}
	</style>
	<a href="logout.php" ><h5>Logout</h5></a>
    <body>
    	<div id="wrap">         	
        	<div id="header">            	
            	<div class="logo">                	                                        
                    <a href=""><img src="images/name.png" alt="logo" /></a>                 
                </div><!--end logo--> 
                
                <div class="subtitle"> 
                	<img src="images/subtitle.png" alt="description" /> 
                </div><!--end subtitle--> 
                
                 <div id="nav">
                               	           		
       		
            		
            		
                </div> <!--end nav--> 
                
            </div><!--end header-->	
            
            
	          
						
	<br/><br/>
	Welcome to mass QR code generator. This application is for generating QR codes
	from large data sets. Upload you CSV file with the data you want to include in your QR code, and 
	the application will generate the QR codes for you.	<br><br>				
	<font color="red"> Support file type : csv </font>
  	 <form enctype="multipart/form-data" action="upload.php" method="POST">
		<input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
		Choose a file to upload: <input name="file" type="file" /><br /><br/>
		<button type="submit">Submit</button>
	</form>
	<font color="grey">Due to the limitation of QR code,	this application supports up to 5 data fields to put
			on the QR code. For optimization purpose, uploading CSV files with more than 5 column
			is not encouraged. If you have more than 5 columns in you CSV file, you should copy the columns
			you want to put on your QR code.<br><br>				
						
						                                      
		                    
												
							                                        																

    
    		<div id="footer"> 
    			<div class="footer-line"></div> 
					<p class="copyright">Copyright &copy; 2012 &middot; HFOSS  &middot; All Rights Reserved</p> 
			</div><!--end footer--> 
		</div> <!--end wrap-->         		   
	</body> 
</html>
