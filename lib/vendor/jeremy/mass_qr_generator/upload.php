<?php

session_start();
$_SESSION['loggedin'] = True;
if($_SESSION['loggedin'] != True){
	header("location:login.php");
	return;
}	


$allowedExts = array("csv");
$extension = strtolower(end(explode('.', $_FILES['file']['name'])));
ini_set('auto_detect_line_endings', true);
echo '<html>	
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


';
if ( $extension == 'csv'){
 if ($_FILES["file"]["error"] > 0){
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
 else{
	$fname = $_FILES["file"]["name"];
    echo "Upload: " . $fname . "<br />";
    echo "Type: " . $_FILES["file"]["type"] . "<br />";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    if (file_exists("vault/" . $_FILES["file"]["name"])){
      
      }
    else{
      if(move_uploaded_file($_FILES["file"]["tmp_name"],"vault/" . $_FILES["file"]["name"])){
      	chmod("vault/" . $_FILES["file"]["name"], 0777); 
      	
      	}
      else{
      	echo "upload failed!";
      	}
      }
    
    
	echo "<br/><br/>";
	if (($handle = fopen("vault/" . $fname, "r")) !== FALSE) {
    	$data = fgetcsv($handle, ",");
      $num = count($data);
    		
		$html_str  = '<form action="generate.php?file='.$fname.'" method="POST">';
      	$html_str .= 'Please check the columns you want to include in the code: ';
      	for($i=0; $i<$num; $i++){
        	$html_str .= '<input type="checkbox" name = "bar_tag[]" value="'.$i. '"/>'.$data[$i];
        }
        $html_str .= "<br/><br/>Please check the columns you want to print as text: ";
        for($j=0; $j<$num; $j++){
        	$html_str .= '<input type="checkbox" name = "text_tag[]" value="'.$j. '"/>'.$data[$j];
        }
      	$html_str .= '<br/><br/><input type="submit" name="formSubmit" value="Submit" />';
      	$html_str .= '</form>'; 
      	echo $html_str;  
        fclose($handle);
	}	
    
    
}    
}
else{
  echo "Invalid file";
  }
 echo '<div id="footer"> 
    			<div class="footer-line"></div> 
					<p class="copyright">Copyright &copy; 2012 &middot; HFOSS  &middot; All Rights Reserved</p> 
			</div><!--end footer--> 
		</div> <!--end wrap-->         		   
	</body> 
</html>'; 
?> 
