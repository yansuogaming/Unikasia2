<?php
/* Smarty version 3.1.38, created on 2024-04-08 14:39:48
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/blocks/setting_module_banner.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66139f44cab564_26595625',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1429f148d306288b1a1cbd075e01c756762ad54' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/blocks/setting_module_banner.tpl',
      1 => 1704274536,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66139f44cab564_26595625 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="form-group inpt_tour">
	<h3 class="title_box"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Banner');?>
</h3>
	<div class="row">
		<?php $_smarty_tpl->_assignInScope('site_mod_banner', (('site_').($_smarty_tpl->tpl_vars['mod']->value)).('_banner'));?>
		<div class="col-xs-12 col-md-4">
			<div class="drop_gallery">
				<div class="filedrop full" onClick="file_explorer(this,event);" ondrop="file_drop(this,event)" toid="selectFile" toel="isoman_show_banner" data-options='{"openFrom":"banner","clsTable":"Configuration", "table_id":"<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
","toId":"isoman_show_banner" }' ondragover="return false">
					<h3><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Drop files to upload');?>
</h3>
					<p>
						Image size (WxH=1920x400px)<br>
						Các loại tệp được hỗ trợ là: .png,.jpg,.jpeg</p>
					<button type="button" class="btn btn-upload"><?php if ($_smarty_tpl->tpl_vars['oneItem']->value['banner']) {?>Thay ảnh<?php } else { ?>Tải ảnh lên<?php }?></button>
				</div>
				<input class="hidden" id="selectFile" type="file" data-options='{"openFrom":"banner","clsTable":"Configuration", "table_id":"<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
","toId":"isoman_show_banner"}' name="iso-<?php echo $_smarty_tpl->tpl_vars['site_mod_banner']->value;?>
">

				<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['site_mod_banner']->value);?>
" name="iso-<?php echo $_smarty_tpl->tpl_vars['site_mod_banner']->value;?>
" id="banner" />
				<a table_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" isoman_multiple="0" isoman_callback='isoman_callback({"openFrom":"banner", "clsTable":"Configuration", "pvalTable":"<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
","toField":"banner","toId":"isoman_show_banner"})' class="btn-upload-2 ajOpenDialog" isoman_for_id="banner" isoman_name="banner"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->makeIcon('folder-o',$_smarty_tpl->tpl_vars['core']->value->get_Lang('From library'));?>
</a>
			</div>
		</div>
		<div class="col-xs-12 col-md-8">
			<img class="img-responsive radius-3" id="isoman_show_banner" src="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['site_mod_banner']->value);?>
" onerror="this.src='<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/none_image.png'" alt="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('banner');?>
" style="width:100%; height:250px;object-fit: contain"  />
		</div>
	</div>
</div><?php }
}
