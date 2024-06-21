<?php
/* Smarty version 3.1.38, created on 2024-04-09 09:47:47
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/blocks/box_detail_cruise_image-gallery.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6614ac53d2dcf5_27122527',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c7b551e371187476ecd16ab645bfc523225ad58' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/blocks/box_detail_cruise_image-gallery.tpl',
      1 => 1704443554,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6614ac53d2dcf5_27122527 (Smarty_Internal_Template $_smarty_tpl) {
?><h3 class="title_box"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Photo Gallery');?>

<?php $_smarty_tpl->_assignInScope('photo_gallery_cruise', 'photo_gallery_cruise');
$_smarty_tpl->_assignInScope('help_first', $_smarty_tpl->tpl_vars['photo_gallery_cruise']->value);
if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
<button data-key="<?php echo $_smarty_tpl->tpl_vars['photo_gallery_cruise']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Photo Gallery');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
<?php }?>
</h3>
<div class="form_option_tour">
	<div class="inpt_tour">
		<div class="row">
			<div class="col-md-5 col-sm-12">
				<div class="filedrop-picker">
					<div class="filedrop" onclick="file_explorer(this,event);" ondrop="file_drop(this,event)" toId="selectFile" data-options='{"openFrom":"gallery","table_id":"<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
","clsTableGal":"CruiseImage"}' ondragover="return false">
						<h3>Kéo ảnh vào đây để tải lên</h3>
						<p>Kích thước (WxH=733x486)<br>
						Các loại tệp được hỗ trợ là: .png,.jpg,.jpeg</p>
						<button type="button" class="btn btn-upload"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('From computer');?>
</button>
					</div>
					<input class="hidden" id="selectFile" type="file" data-options='{"openFrom":"gallery","clsTableGal":"CruiseImage","table_id":"<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
"}' name="image">
					<input style="display:none" type="file" multiple name="image[]" id="ajAttachFile">
					<div class="clearfix mt-half"></div>
					<a table_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" isoman_multiple="1" isoman_callback='isoman_gallery_callback({"openFrom":"gallery","clsTableGal":"CruiseImage","table_id":"<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
"})' class="btn btn-upload-choice ajOpenDialog" isoman_for_id="image_val" isoman_name="image"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->makeIcon('folder-o',$_smarty_tpl->tpl_vars['core']->value->get_Lang('From library'));?>
</a>
				</div>
			</div>
			<div class="col-md-7 col-sm-12">
				<div id="holder_gallery" class="list-unstyled gallery"></div>
			</div>
		</div>
	</div>
	<div class="media-body mb-1 hidden">
		<p class="mb-2">
			<strong>%%filename%%</strong> - Status: <span class="text-muted">Waiting</span>
		</p>
		<div class="progress mb-2">
			<div class="progress-bar progress-bar-striped progress-bar-animated bg-primary"
				 role="progressbar"
				 style="width: 0%"
				 aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
			</div>
		</div>
	</div>
</div>
				
				
<?php echo '<script'; ?>
 type="text/javascript">
	var table_id = '<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
';
	var clsTableGal = 'CruiseImage';
	
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
	var options_gallery = {
		"openFrom":'gallery',
		"clsTableGal":clsTableGal,
		"table_id":table_id
	};
	$(function () {
		loadGallery(table_id, {"clsTable":clsTableGal});
	});
	function loadGallery($table_id, options){
		var $_adata = options || {};
		$_adata['tp'] = 'L';
		$_adata['table_id'] = table_id;
		$.post(path_ajax_script + '/index.php?mod=home&act=ajOpenGallery', $_adata, function(html){
			$('#holder_gallery').html(html);
		});
	}
	function isoman_gallery_callback(options){
		var $_adata = options || {},
			$list_images = isoman_selected_files();
		$_adata['tp'] = '_insert';
		$_adata['list_images'] = $list_images;
		$.post(path_ajax_script+'/?mod=cropper&act=upload_gallery', $_adata, function(res){
			loadGallery(options.table_id, {"clsTable":clsTableGal});
		});
	}
	function delete_gallery(_this){
		var table_id = $(_this).attr('table_id'),
			table_image_id = $(_this).attr('table_image_id');
		$Core.alert.confirm(__['Confirm'], __['Are you sure you want to delete this?'], function(){
			var $_adata = {'table_id':table_id,'clsTable':clsTableGal,'image_id':table_image_id};
			$Core.util.toggleIndicatior(1);
			$.post(path_ajax_script+'/index.php?mod=home&act=ajDeleteGallery',$_adata, function(respJson){
				$Core.util.toggleIndicatior(0);
				if(respJson.result.indexOf('success') >= 0){
					loadGallery(table_id, {"clsTable":clsTableGal});
				}
			}, 'json');
		});
	}
<?php echo '</script'; ?>
>
<?php }
}
