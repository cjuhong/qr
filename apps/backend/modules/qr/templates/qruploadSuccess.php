<?php if($extension == 'csv'): ?>
	<?php if(isset($file_error)): ?>
		<h3>Return Code : <?php echo $file_error; ?></h3>
	<?php else : ?>
		<h3>Upload: <?php echo $fileDetail["name"]; ?></h3>
		<h3>Type: <?php echo $fileDetail["type"]; ?></h3>
		<h3>Size: <?php echo $fileDetail["size"]; ?></h3>

		<?php if($uploadFail == true): ?>
			<h3>upload failed!</h3>
		<?php endif; ?>

		<?php if(isset($html_str)): ?>
			<?php echo $html_str; ?>
		<?php endif; ?>
	<?php endif; ?>
<?php else : ?>
	<h3>Invalid file</h3>
<?php endif; ?>