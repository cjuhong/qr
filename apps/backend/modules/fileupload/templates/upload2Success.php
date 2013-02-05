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
            $("#td_file").find("tbody").append("<tr><td>上传文件:</td><td><input type='file' id='file"+a+"' name='file"+a+"' />&nbsp;<a href='#' onclick='delfile(this);'>删除</a></td></tr>");
			a++;
        }
        function delfile(obj) {
            $(obj).parent().parent().remove();
        }
    </script>
</head>
<body>
    <form id="form1" runat="server" method="post" enctype="multipart/form-data" action="fileupload/upload2?module2=<?php echo $module2 ?>&uid=<?php echo $uid ?>">
    <div>
		please choose the file size is below 1M 
        <input type="button" value="继续添加" onclick="addfile();" />
        <table id="td_file">
            <tr>
                <td>
                    module:
                </td>
                <td>
	            	<input type="text" id="module2" name="module2" value="<?php echo $module2 ?>"/>
                </td>
            </tr>
            <tr>
                <td>
                    id: 
                </td>
                <td>    <input type="text" id="uid" name="uid" value="<?php echo $uid ?>"/>
                </td>
            </tr>
            <tr>
                <td>
                    上传文件:
                </td>
				<td><input type="file" id="file1" name="file1" />&nbsp;<a href="#" onclick="delfile(this);">删除</a>
				</td>
            </tr>
        </table>
        <input type="submit" value="提交" />
    </div>
    </form>





  <div id="sf_admin_content">
    <form action="<?php echo url_for('file_upload_collection', array('action' => 'batch')) ?>" method="post">
    <?php include_partial('fileupload/list', array('pager' => $pager, 'sort' => $sort, 'helper' => $helper)) ?>
    </form>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('fileupload/list_footer', array('pager' => $pager)) ?>
  </div>
</div>
