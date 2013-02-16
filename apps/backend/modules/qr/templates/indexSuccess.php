<h1>Welcome to QR code generator. </h1>
<br><br>				
<font color="red"> Support file type : csv </font>
<form enctype="multipart/form-data" action="<?php echo url_for('@qrupload')?>" method="POST">
	<input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
		Choose a file to upload: <input name="file" type="file" />
	<br /><br/>
	<button type="submit">Submit</button>
</form>
				
						                                      
		