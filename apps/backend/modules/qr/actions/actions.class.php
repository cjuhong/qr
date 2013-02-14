<?php

/**
 * qr actions.
 *
 * @package    mgto
 * @subpackage qr
 * @author     Jeremy
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class qrActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    //$this->forward('default', 'module');
  }

  public function executeQrupload(sfWebRequest $request)
  {
    //$this->forward('default', 'module');
    $allowedExts = array("csv");
	$this->extension = strtolower(end(explode('.', $_FILES['file']['name'])));
	ini_set('auto_detect_line_endings', true);
	
	if ( $this->extension == 'csv'){
 		if ($_FILES["file"]["error"] > 0){
    		//echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    		$this->file_error = $_FILES["file"]["error"];
    	}else {
			$fname = $_FILES["file"]["name"];
    			//echo "Upload: " . $fname . "<br />";
    			//echo "Type: " . $_FILES["file"]["type"] . "<br />";
    			//echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    			$this->fileDetail = array(
    				"name" => $_FILES["file"]["name"],
    				"type" => $_FILES["file"]["type"],
    				"size" => $_FILES["file"]["size"] / 1024
    				);
    		if(file_exists("vault/" . $_FILES["file"]["name"])){
      
      		}else {
      			if(move_uploaded_file($_FILES["file"]["tmp_name"],"vault/" . $_FILES["file"]["name"])){
      				chmod("vault/" . $_FILES["file"]["name"], 0777);       	
      			}else {
      				//echo "upload failed!";
      				$this->uploadFail = true;
      			}
      		}
        
			//echo "<br/><br/>";
			if (($handle = fopen("vault/" . $fname, "r")) !== FALSE) {
    			$data = fgetcsv($handle, ",");
     			$num = count($data);
    		
				$this->html_str  = '<form action="qrgenerate?file='.$fname.'" method="POST">';
      			$this->html_str .= 'Please check the columns you want to include in the code: ';
      			for($i=0; $i<$num; $i++){
        			$this->html_str .= '<input type="checkbox" name = "bar_tag[]" value="'.$i. '"/>'.$data[$i];
        		}
        		$this->html_str .= "<br/><br/>Please check the columns you want to print as text: ";
        		for($j=0; $j<$num; $j++){
        			$this->html_str .= '<input type="checkbox" name = "text_tag[]" value="'.$j. '"/>'.$data[$j];
        		}
      			$this->html_str .= '<br/><br/><input type="submit" name="formSubmit" value="Submit" />';
      			$this->html_str .= '</form>'; 
      			//echo $html_str;  
        		fclose($handle);
			}	    
		}
	}
  }


  public function executeQrgenerate(sfWebRequest $request)
  {
    //$this->forward('default', 'module');
    //var_dump(get_class_methods(Qr));
    //echo dirname(__FILE__);
    //echo sfConfig::get('sf_web_dir');
  	$currentHost = "qr/temp";
  	$path = 'http://'.$request->getHost()."/".$currentHost.'/';
  	//echo $path;
	$PNG_TEMP_DIR = sfConfig::get('sf_web_dir').DIRECTORY_SEPARATOR.'temp'.DIRECTORY_SEPARATOR;
	$PNG_WEB_DIR = 'temp/';
	$errorCorrectionLevel = 'H';
	$matrixPointSize = 5;

	if (!file_exists($PNG_TEMP_DIR)){
		mkdir($PNG_TEMP_DIR);
	}

	$filename = $PNG_TEMP_DIR.'test.png';

	if(isset($_POST['formSubmit'])){
	    $file     = $_GET['file'];
	    $checkBox = $_POST['bar_tag'];
	    $textBox  = $_POST['text_tag'];
	    $size     = count($checkBox);
	    $t_size   = count($textBox);
	    $row_count= 1;

	    $str = "";
	    $str = "<style>@media print
		{
			table {page-break-after:always}
		}
		</style><table>";
    	if(($handle = fopen("vault/".$file,"r")) !== FALSE){
        //echo "file open<br/>";
        
        while(($data = fgetcsv($handle,",")) !== FALSE){
            if($row_count == 1){
            	$str = $str.'<tr>';
            }

            $qr = "";
            $tx = "";
            for ($c=0; $c < $t_size-1; $c++){
                $tx .= $data[$textBox[$c]];
                $tx .= "<br/>";
            }
            $tx .= $data[$textBox[$t_size-1]];         
            for ($c=0; $c < $size-1; $c++){
                $qr .= $data[$checkBox[$c]];
                $qr .= ", ";
            }
            $qr .= $data[$checkBox[$size-1]]; 
            //echo $qr."<br/>";

            if ($qr !== "") { 
 					  if (trim($qr) == ''){
						   die('data cannot be empty! <a href="?">back</a>');
				      }
					  $filename = 'test'.md5($qr.'|'.$errorCorrectionLevel.'|'.$matrixPointSize).'.png';
					  //echo $filename."<br/>";
					  Qr::png($qr, $filename, 'L', 4, 2);
					  $row_str = '<td><table><tr><td><img src="'.$path.$filename.'"/></td><td>'.$tx.'</td></tr></table></td>'; 
					  $row_count++;
					  $str = $str.$row_str;
					  if($row_count>2){
					  		$row_count = 1;
					  		$str = $str.'</tr>';
					  }
					      
					  //echo '<tr><td><img src="'.$PNG_WEB_DIR.basename($filename).'"/></td><td>'.$tx.'</td></tr>';     
        
    			}   
            
            
        }
       echo "</table>";
        fclose($handle);
        unlink("vault/".$file);
    }

}
	$this->result = $str;

  }


}
