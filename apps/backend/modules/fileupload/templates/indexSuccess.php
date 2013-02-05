<?php use_helper('I18N', 'Date') ?>
<?php include_partial('fileupload/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo $module2 ?> <?php echo __( 'Fileupload List', array(), 'messages') ?></h1>

  <?php include_partial('fileupload/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('fileupload/list_header', array('pager' => $pager)) ?>
  </div>


    <script type="text/javascript">
		var a = 2;
        function addfile() {
            $("#td_file").find("tbody").append("<tr><td> Upload file (max 64MB):</td><td><input type='file' id='file"+a+"' name='file"+a+"' />&nbsp;<a href='#' onclick='delfile(this);'>cancel</a></td></tr>");
			a++;
        }
        function delfile(obj) {
            $(obj).parent().parent().remove();
        }
    </script>
</head>
<body>
    <form id="form1" runat="server" method="post" enctype="multipart/form-data" action="fileupload/upload2">
    <div>
        <table id="td_file">

    <?php if (!$module2): ?>

            <tr>
                <td>
                    module:
                </td>
				<td>
				<select id="module2"  name="module2">
				<option value="banner">banner</option>
				<option value="news">news</option>
				<option value="article">article</option>
				<option value="comment">comment</option>
				<option value="theme">theme</option>
				<option value="information">information</option>
				<option value="favorite">favorite</option>
				</select>
				</td>
			<tr>

	<?php endif; ?>

    <?php if ($module2): ?>
            <tr>
                <td>
                    module:
                </td>
	            	<input type="hidden" id="module2" name="module2" value="<?php echo $module2 ?>" readonly = true  size= '100'/>
                <td><?php echo $module2 ?>
                </td>
            </tr>
	<?php endif; ?>
            <tr>
                <td>
                    Upload file (max 64MB):
                </td>
				<td><input type="file" id="file1" name="file1" />&nbsp;<a href="#" onclick="delfile(this);">cancel</a>
				</td>
            </tr>
        </table>
        <input type="button" value="addfile" onclick="addfile();" />
        <input type="submit" value="submit" /></h2>
    </div>
    </form>

<BR>
<BR>
<BR>

  <div id="sf_admin_content">
    <form action="<?php echo url_for('file_upload_collection', array('action' => 'batch')) ?>" method="post">
    <?php include_partial('fileupload/list', array('pager' => $pager, 'sort' => $sort, 'helper' => $helper)) ?>
    </form>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('fileupload/list_footer', array('pager' => $pager)) ?>
  </div>
</div>
