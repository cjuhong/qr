<?php
include "phpqrcode/qrlib.php";


$PNG_TEMP_DIR = dirname(__FILE__).DIRECTORY_SEPARATOR.'temp'.DIRECTORY_SEPARATOR;
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
    echo "<style>@media print
{
table {page-break-after:always}
}
</style><table>";
    if (($handle = fopen("vault/".$file,"r")) !== FALSE){
        //echo "file open<br/>";
        
        while(($data = fgetcsv($handle,",")) !== FALSE){
            if($row_count == 1){
            	echo '<tr>';
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
					  $filename = $PNG_TEMP_DIR.'test'.md5($qr.'|'.$errorCorrectionLevel.'|'.$matrixPointSize).'.png';
					  //echo $filename."<br/>";
					  QRcode::png($qr, $filename, 'L', 4, 2);
					  $row_str = '<td><table><tr><td><img src="'.$PNG_WEB_DIR.basename($filename).'"/></td><td>'.$tx.'</td></tr></table></td>'; 
					  $row_count++;
					  echo $row_str;
					  if($row_count>2){
					  		$row_count = 1;
					  		echo '</tr>';
					  }
					      
					  //echo '<tr><td><img src="'.$PNG_WEB_DIR.basename($filename).'"/></td><td>'.$tx.'</td></tr>';     
        
    			}   
            
            
        }
       echo "</table>";
        fclose($handle);
        unlink("vault/".$file);
    }

}
?>
