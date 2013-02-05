<?php use_helper('I18N', 'Date') ?>
<?php include_partial('fileupload/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Fileupload List', array(), 'messages') ?></h1>

  <?php include_partial('fileupload/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('fileupload/list_header', array('pager' => $pager)) ?>
  </div>



<?php echo form_tag('fileupload/upload','multipart=true') ?>

  <table>
	<?php echo $form ?>
	<input type="submit" value="上传" />
	</form>
  </table>

  <div id="sf_admin_content">
    <form action="<?php echo url_for('file_upload_collection', array('action' => 'batch')) ?>" method="post">
    <?php include_partial('fileupload/list', array('pager' => $pager, 'sort' => $sort, 'helper' => $helper)) ?>
    </form>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('fileupload/list_footer', array('pager' => $pager)) ?>
  </div>
</div>
