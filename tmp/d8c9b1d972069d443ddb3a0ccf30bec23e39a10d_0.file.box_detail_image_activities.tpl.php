<?php
/* Smarty version 3.1.38, created on 2024-04-11 09:18:54
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/blocks/box_detail_image_activities.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6617488e80bef5_76887128',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8c9b1d972069d443ddb3a0ccf30bec23e39a10d' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/blocks/box_detail_image_activities.tpl',
      1 => 1709280387,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6617488e80bef5_76887128 (Smarty_Internal_Template $_smarty_tpl) {
?><h3 class="title_box"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Image');?>

<?php $_smarty_tpl->_assignInScope('help_first', $_smarty_tpl->tpl_vars['image_detail']->value);
if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
<button data-key="<?php echo $_smarty_tpl->tpl_vars['image_detail']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Image');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
<?php }?>
</h3>
<div class="form_option_tour">
	<div class="inpt_tour">
		<div class="row">
			<div class="col-md-5 col-sm-12">
				<div class="drop_gallery" onClick="loadHelp(this)" >
					<div class="text_help" hidden=""><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['image_detail']->value));?>
</div>
					<div class="filedrop full" onClick="file_explorer(this,event);" ondrop="file_drop(this,event)" toid="selectFile" toel="isoman_show_image" data-options='{"openFrom":"image","clsTable":"<?php echo $_smarty_tpl->tpl_vars['clsTable']->value;?>
", "table_id":"<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
","toId":"isoman_show_image" }' ondragover="return false">
						<h3><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Drop files to upload');?>
</h3>
						<p>Kích thước (WxH=300x200)<br />
						Các loại tệp được hỗ trợ là: .png,.jpg,.jpeg</p>
						<button type="button" class="btn btn-upload"><?php if ($_smarty_tpl->tpl_vars['oneItem']->value['image']) {?>Thay ảnh<?php } else { ?>Tải ảnh lên<?php }?></button>
					</div>
					<input class="hidden" id="selectFile" type="file" data-options='{"openFrom":"image","clsTable":"<?php echo $_smarty_tpl->tpl_vars['clsTable']->value;?>
", "table_id":"<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
","toId":"isoman_show_image"}' name="image">

					<input style="display:none" type="file" multiple name="image" id="ajAttachFile" />
					<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
" name="image" id="image" />
					<a table_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" isoman_multiple="0" isoman_callback='isoman_callback({"openFrom":"image", "clsTable":"<?php echo $_smarty_tpl->tpl_vars['clsTable']->value;?>
", "pvalTable":"<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
", "table_id":"<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
","toField":"image","toId":"isoman_show_image"})' class="btn-upload-2 ajOpenDialog" isoman_for_id="image" isoman_name="image"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->makeIcon('folder-o',$_smarty_tpl->tpl_vars['core']->value->get_Lang('From library'));?>
</a>
				</div>
			</div>
			<div class="col-xs-12 col-md-4">
				<div class="aspect-ratio aspect-ratio--square aspect-ratio--square--full aspect-ratio--interactive">
					<img class="aspect-ratio__content radius-3" id="isoman_show_image" src="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
" onerror="this.src='<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/none_image.png'" width="250px" height="170px" />
				</div>
			</div>
		</div><!-- /file list -->
	</div>
</div><?php }
}
