<?php
/* Smarty version 3.1.38, created on 2024-04-15 13:27:56
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/blocks/box_detail_category_country_banner.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_661cc8ec2a8200_99373706',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2561e5b264d9784e895d45617fd77b86be9d8052' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/blocks/box_detail_category_country_banner.tpl',
      1 => 1706071671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661cc8ec2a8200_99373706 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="box_title_trip_code">
	<div class="row d-flex full-height">
		<div class="col-md-12">
			<div class="fill_data_box">
				<div class="form-group inpt_tour">
					<label class="col-form-label" for="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Banner Size');?>

						<?php $_smarty_tpl->_assignInScope('banner_guideCat', 'banner_guideCat');?>
						<?php $_smarty_tpl->_assignInScope('help_first', $_smarty_tpl->tpl_vars['banner_guideCat']->value);?>
						<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
						<button data-key="<?php echo $_smarty_tpl->tpl_vars['banner_guideCat']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Banner');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
						<?php }?>
					</label>
					<div class="row">
						<div class="col-xs-12 col-md-5">
							<div class="drop_gallery" onClick="loadHelp(this)">
								<div class="filedrop full" onClick="file_explorer(this,event);" ondrop="file_drop(this,event)" toid="selectFile" toel="isoman_show_banner" data-options='{"openFrom":"banner","clsTable":"Category_Country", "table_id":"<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
","toId":"isoman_show_banner" }' ondragover="return false">
									<h3><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Drop files to upload');?>
</h3>
									<p>Kích thước (WxH=1920x480)<br />
									Các loại tệp được hỗ trợ là: .png,.jpg,.jpeg</p>
									<button type="button" class="btn btn-upload"><?php if ($_smarty_tpl->tpl_vars['oneItem']->value['image_banner']) {?>Thay ảnh<?php } else { ?>Tải ảnh lên<?php }?></button>
								</div>
								<input class="hidden" id="selectFile" type="file" data-options='{"openFrom":"banner","clsTable":"Category_Country", "table_id":"<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
","toId":"isoman_show_banner"}' name="image_banner">

								<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image_banner'];?>
" name="image_banner" id="banner" />
								<a table_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" isoman_multiple="0" isoman_callback='isoman_callback({"openFrom":"banner", "clsTable":"Category_Country", "pvalTable":"<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
","toField":"banner","toId":"isoman_show_banner"})' class="btn-upload-2 ajOpenDialog" isoman_for_id="banner" isoman_name="banner"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->makeIcon('folder-o',$_smarty_tpl->tpl_vars['core']->value->get_Lang('From library'));?>
</a>
								<div class="text_help" hidden=""><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['banner_guideCat']->value));?>
</div>
							</div>
						</div>
						<div class="col-xs-12 col-md-12">
							<img class="img-responsive radius-3" id="isoman_show_banner" src="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image_banner'];?>
" onerror="this.src='<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/none_image.png'" alt="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('banner');?>
" style="width:100%; height:334px"  />
						</div>
					</div>
				</div>
				<hr class="clearfix" />
				<div class="inpt_tour">
					<label for="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Banner Link');?>

					<?php $_smarty_tpl->_assignInScope('banner_link_guideCat', 'banner_link_guideCat');?>
					<?php $_smarty_tpl->_assignInScope('help_first', $_smarty_tpl->tpl_vars['banner_link_guideCat']->value);?>
					<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
					<button data-key="<?php echo $_smarty_tpl->tpl_vars['banner_link_guideCat']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Banner Link');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
					<?php }?>
					</label>
					<input class="text_32 full-width bold border_aaa" name="iso-link_banner" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['link_banner'];?>
"  type="text" onClick="loadHelp(this)" placeholder="<?php echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;?>
" />
					<div class="text_help" hidden=""><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['banner_link_guideCat']->value));?>
</div>
				</div>
				<div class="inpt_tour">
					<label for="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Banner Content');?>

						<?php $_smarty_tpl->_assignInScope('banner_content_guideCat', 'banner_content_guideCat');?>
						<?php $_smarty_tpl->_assignInScope('help_first', $_smarty_tpl->tpl_vars['banner_content_guideCat']->value);?>
						<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
						<button data-key="<?php echo $_smarty_tpl->tpl_vars['banner_content_guideCat']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Banner Content');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
						<?php }?>
					</label>
					<textarea style="width:100%" table_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" name="iso-intro_banner" class="textarea_intro_editor" data-column="iso-intro_banner" id="textarea_intro_editor_overview_<?php echo $_smarty_tpl->tpl_vars['now']->value;?>
" cols="255" rows="2"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['intro_banner'];?>
</textarea>
					<div class="text_help" hidden=""><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['banner_content_guideCat']->value));?>
</div>
					
					<?php echo '<script'; ?>
>
					$(".showdate").datepicker({dateFormat: "dd/mm/yy"});
					<?php echo '</script'; ?>
>
					
				</div>
			</div>
		</div>
	</div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
	var clsTable = 'Guide2';
	var table_id = '<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
';
<?php echo '</script'; ?>
><?php }
}
