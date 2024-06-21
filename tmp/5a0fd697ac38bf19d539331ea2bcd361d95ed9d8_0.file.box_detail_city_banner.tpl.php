<?php
/* Smarty version 3.1.38, created on 2024-04-24 07:16:43
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/blocks/box_detail_city_banner.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66284f6b0625b4_16445014',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a0fd697ac38bf19d539331ea2bcd361d95ed9d8' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/blocks/box_detail_city_banner.tpl',
      1 => 1702433109,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66284f6b0625b4_16445014 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="box_title_trip_code">
	<div class="row d-flex full-height">
		<div class="col-md-12">
			<div class="fill_data_box">
				<div class="form-group inpt_tour">
					<label class="col-form-label" for="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Banner Size');?>
 <span class="required_red">*</span>
						<?php $_smarty_tpl->_assignInScope('banner_city', 'banner_city');?>
						<?php $_smarty_tpl->_assignInScope('help_first', $_smarty_tpl->tpl_vars['banner_city']->value);?>
						<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
						<button data-key="<?php echo $_smarty_tpl->tpl_vars['banner_city']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Banner');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
						<?php }?>
					</label>
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="drop_gallery" onClick="loadHelp(this)">
								<div class="filedrop full" onClick="file_explorer(this,event);" ondrop="file_drop(this,event)" toid="selectFile" toel="isoman_show_banner" data-options='{"openFrom":"banner","clsTable":"City", "table_id":"<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
","toId":"isoman_show_banner","toField":"banner" }' ondragover="return false">
									<h3><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Drop files to upload');?>
</h3>
									<p>Kích thước (WxH=1920x400px)<br />
									Các loại tệp được hỗ trợ là: .png,.jpg,.jpeg</p>
									<button type="button" class="btn btn-upload"><?php if ($_smarty_tpl->tpl_vars['oneItem']->value['banner']) {?>Thay ảnh<?php } else { ?>Tải ảnh lên<?php }?></button>
								</div>
								<input class="hidden" id="selectFile" type="file" data-options='{"openFrom":"banner","clsTable":"City", "table_id":"<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
","toId":"isoman_show_banner","toField":"banner"}' name="banner">

								<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['banner'];?>
" name="banner" id="banner" />
								<a table_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" isoman_multiple="0" isoman_callback='isoman_callback({"openFrom":"banner", "clsTable":"City", "pvalTable":"<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
","toField":"banner","toId":"isoman_show_banner"})' class="btn-upload-2 ajOpenDialog" isoman_for_id="banner" isoman_name="banner"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->makeIcon('folder-o',$_smarty_tpl->tpl_vars['core']->value->get_Lang('From library'));?>
</a>
								<div class="text_help" hidden=""><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['banner_city']->value));?>
</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-12">
							<img class="img-responsive radius-3" id="isoman_show_banner" src="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getBanner($_smarty_tpl->tpl_vars['pvalTable']->value,400,100);?>
" onerror="this.src='<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/none_image.png'" alt="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('banner');?>
" style="width:100%; height:auto"  />
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
	var clsTable = 'City';
	var table_id = '<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
';
<?php echo '</script'; ?>
><?php }
}
