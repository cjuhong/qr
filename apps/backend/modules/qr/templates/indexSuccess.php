<h1>Welcome to QR code generator. </h1>
<br><br>				
<font color="red"> Support file type : csv </font>
<form enctype="multipart/form-data" action="<?php echo url_for('@qrupload')?>" method="POST">
	<input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
		Choose a file to upload: <input name="file" type="file" />
	<br /><br/>
	<button type="submit">Submit</button>
</form>
<font color="grey">
	Due to the limitation of QR code,	this application supports up to 5 data fields to put
			on the QR code. For optimization purpose, uploading CSV files with more than 5 column
			is not encouraged. If you have more than 5 columns in you CSV file, you should copy the columns
			you want to put on your QR code.
</font>				
						
						                                      
		