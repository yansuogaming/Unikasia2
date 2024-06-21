<?php
/* Smarty version 3.1.38, created on 2024-04-09 09:44:40
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/blocks/box_detail_seotool.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6614ab988e8140_12590779',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f7e00915fe3323a453b57c7c5646cb3ae6c2f0b' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/blocks/box_detail_seotool.tpl',
      1 => 1697513875,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6614ab988e8140_12590779 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="box_title_trip_code" meta_id="<?php echo $_smarty_tpl->tpl_vars['meta_id']->value;?>
">
	<div class="row d-flex full-height">
		<div class="col-md-12">
			<div class="fill_data_box">
				<h3 class="title_box"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Seo Tool');?>
</h3>
				<div class="form_option_tour">
					<div class="form-group">
						<label class="col-form-label" for="config_value_title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Meta Title');?>
 <span class="required_red">*</span>						
						<?php $_smarty_tpl->_assignInScope('meta_title_hotel', 'meta_title_hotel');?>
						<?php $_smarty_tpl->_assignInScope('help_first', $_smarty_tpl->tpl_vars['meta_title_hotel']->value);?>
						<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
						<button data-key="<?php echo $_smarty_tpl->tpl_vars['meta_title_hotel']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Meta Title');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
						<?php }?>
						</label>
						<input class="form-control required" name="config_value_title" id="config_value_title" onkeyup="countCharTitle(this)" value="<?php echo $_smarty_tpl->tpl_vars['clsMeta']->value->getMetaTitle($_smarty_tpl->tpl_vars['meta_id']->value);?>
" maxlength="255" type="text" onClick="loadHelp(this)">
						<span class="help-block"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('The meta title of your page has a length of');?>
 <strong id="charTitleNum"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getCountMetaWord($_smarty_tpl->tpl_vars['clsMeta']->value->getMetaTitle($_smarty_tpl->tpl_vars['meta_id']->value));?>
</strong> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('characters');?>
. <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Most search engines will truncate meta titles to 70 characters');?>
.</span>
						<div class="text_help" hidden=""><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['meta_title_hotel']->value));?>
</div>
					</div>
					<div class="form-group">
						<label class="col-form-label" for="config_value_intro"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Meta Description');?>
 <span class="required_red">*</span>
						<?php $_smarty_tpl->_assignInScope('meta_description_hotel', 'meta_description_hotel');?>
						<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
						<button data-key="<?php echo $_smarty_tpl->tpl_vars['meta_description_hotel']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Meta Description');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
						<?php }?>
						</label>
						<textarea name="config_value_intro" id="config_value_intro" class="form-control required" onkeyup="countCharDes(this)" onClick="loadHelp(this)"><?php echo $_smarty_tpl->tpl_vars['clsMeta']->value->getMetaDescription($_smarty_tpl->tpl_vars['meta_id']->value);?>
</textarea>
						<span class="help-block"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('The meta description of your page has a length of');?>
 <strong id="charDesNum"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getCountMetaWord($_smarty_tpl->tpl_vars['clsMeta']->value->getMetaDescription($_smarty_tpl->tpl_vars['meta_id']->value));?>
</strong> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('characters');?>
. <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Most search engines will truncate meta descriptions to 160 characters');?>
.</span>
						<div class="text_help" hidden=""><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['meta_description_hotel']->value));?>
</div>
					</div>
					<div class="form-group inpt_tour">
						<label class="col-form-label"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Image Share Social');?>
 <span class="required_red">*</span>
						<?php $_smarty_tpl->_assignInScope('image_share_social_hotel', 'image_share_social_hotel');?>
						<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
						<button data-key="<?php echo $_smarty_tpl->tpl_vars['image_share_social_hotel']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Image Share Social');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
						<?php }?>
						</label>
						<div class="row">
							<div class="col-md-5 col-sm-12">
								<div class="filedrop-picker" onClick="loadHelp(this)">
									<div class="filedrop" onclick="file_explorer(this,event);" ondrop="file_drop(this,event)" toId="selectFile" hiddenId="isoman_hidden_image_seo" data-options='{"openFrom":"seo","clsTable":"Meta", "table_id":"<?php echo $_smarty_tpl->tpl_vars['meta_id']->value;?>
","toId":"isoman_show_image_seo","hiddenId":"isoman_hidden_image_seo"}' ondragover="return false">
										<h3>Kéo ảnh vào đây để tải lên</h3>
										<p>Kích thước (WxH=500x261)<br>
										Các loại tệp được hỗ trợ là: .png,.jpg,.jpeg</p>
										<button type="button" class="btn btn-upload"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('From computer');?>
</button>
									</div>
									<input type="hidden" name="meta_id" value="<?php echo $_smarty_tpl->tpl_vars['meta_id']->value;?>
">
									<input class="hidden" id="selectFile" type="file" data-options='{"seo":"image","clsTable":"Meta", "table_id":"<?php echo $_smarty_tpl->tpl_vars['meta_id']->value;?>
","toId":"isoman_show_image_seo","hiddenId":"isoman_hidden_image_seo"}'>
									<div class="clearfix mt-half"></div>
									<a table_id="<?php echo $_smarty_tpl->tpl_vars['meta_id']->value;?>
" isoman_multiple="0" isoman_callback='isoman_callback({"openFrom":"seo", "clsTable":"Meta", "table_id":"<?php echo $_smarty_tpl->tpl_vars['meta_id']->value;?>
","toField":"image","toId":"isoman_show_image_seo","hiddenId":"isoman_hidden_image_seo"})' class="btn btn-upload-choice ajOpenDialog" isoman_for_id="image_seo" isoman_name="image"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->makeIcon('folder-o',$_smarty_tpl->tpl_vars['core']->value->get_Lang('From library'));?>
</a>
									<div class="text_help" hidden=""><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['image_share_social_hotel']->value));?>
</div>
								</div>
							</div>
							<div class="col-xs-12 col-md-4">
								<div class="aspect-ratio aspect-ratio--square aspect-ratio--square--full aspect-ratio--interactive">
									<input type="hidden" id="isoman_hidden_image_seo" name="isoman_url_image_seo" value="<?php echo $_smarty_tpl->tpl_vars['clsMeta']->value->getOneField('image',$_smarty_tpl->tpl_vars['meta_id']->value);?>
" />
									<img class="aspect-ratio__content radius-3" id="isoman_show_image_seo" src="<?php echo $_smarty_tpl->tpl_vars['clsMeta']->value->getOneField('image',$_smarty_tpl->tpl_vars['meta_id']->value);?>
" width="250px" height="170px" />
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
	function countCharTitle(val) {
		var len = val.value.length;
		$('#charTitleNum').text(len);
	};
	function countCharDes(val) {
		var len = val.value.length;
		$('#charDesNum').text(len);
	};
<?php echo '</script'; ?>
>
<?php }
}
