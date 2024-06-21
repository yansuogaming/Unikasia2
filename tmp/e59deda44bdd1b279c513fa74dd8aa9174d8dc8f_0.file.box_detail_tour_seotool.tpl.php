<?php
/* Smarty version 3.1.38, created on 2024-04-09 09:04:18
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/blocks/box_detail_tour_seotool.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6614a2226fb0b8_66422141',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e59deda44bdd1b279c513fa74dd8aa9174d8dc8f' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/blocks/box_detail_tour_seotool.tpl',
      1 => 1709280342,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6614a2226fb0b8_66422141 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="box_title_trip_code" meta_id="<?php echo $_smarty_tpl->tpl_vars['meta_id']->value;?>
">
	<div class="row d-flex full-height">
		<div class="col-md-9">
			<div class="fill_data_box">
				<h3 class="title_box"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Seo Tool');?>

				<?php $_smarty_tpl->_assignInScope('seo_tool_tour', 'seo_tool_tour');?>
				<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
				<button data-key="<?php echo $_smarty_tpl->tpl_vars['seo_tool_tour']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Seo Tool');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
				<?php }?>
				</h3>
				<div class="form_option_tour">
					<div class="form-group">
						<label class="col-form-label" for="config_value_title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Meta Title');?>
 <span class="required_red">*</span></label>
						<input class="form-control required" name="config_value_title" id="config_value_title" onkeyup="countCharTitle(this)" value="<?php echo $_smarty_tpl->tpl_vars['clsMeta']->value->getMetaTitle($_smarty_tpl->tpl_vars['meta_id']->value);?>
" maxlength="255" type="text">
						<span class="help-block"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('The meta title of your page has a length of');?>
 <strong id="charTitleNum"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getCountMetaWord($_smarty_tpl->tpl_vars['clsMeta']->value->getMetaTitle($_smarty_tpl->tpl_vars['meta_id']->value));?>
</strong> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('characters');?>
. <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Most search engines will truncate meta titles to 70 characters');?>
.</span>
					</div>
					<div class="form-group">
						<label class="col-form-label" for="config_value_intro"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Meta Description');?>
 <span class="required_red">*</span></label>
						<textarea name="config_value_intro" id="config_value_intro" class="form-control required" onkeyup="countCharDes(this)"><?php echo $_smarty_tpl->tpl_vars['clsMeta']->value->getMetaDescription($_smarty_tpl->tpl_vars['meta_id']->value);?>
</textarea>
						<span class="help-block"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('The meta description of your page has a length of');?>
 <strong id="charDesNum"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getCountMetaWord($_smarty_tpl->tpl_vars['clsMeta']->value->getMetaDescription($_smarty_tpl->tpl_vars['meta_id']->value));?>
</strong> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('characters');?>
. <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Most search engines will truncate meta descriptions to 160 characters');?>
.</span>
					</div>
					<div class="form-group inpt_tour">
						<label class="col-form-label"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Image Share Social');?>
 <span class="required_red">*</span></label>
						<div class="row">
							<div class="col-md-5 col-sm-12">
								<div class="filedrop-picker">
									<div class="filedrop" onclick="file_explorer(this,event);" ondrop="file_drop(this,event)" toId="selectFile" hiddenId="isoman_hidden_image_seo" data-options='{"openFrom":"seo","clsTable":"Meta", "table_id":"<?php echo $_smarty_tpl->tpl_vars['meta_id']->value;?>
","toId":"isoman_show_image_seo","hiddenId":"isoman_hidden_image_seo"}' ondragover="return false">
										<h3>Kéo ảnh vào đây để tải lên</h3>
										<p>Kích thước (WxH=500x261)<br>
										Các loại tệp được hỗ trợ là: .png,.jpg,.jpeg</p>
										<button type="button" class="btn btn-upload"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('From computer');?>
</button>
									</div>
									<input class="hidden" id="selectFile" type="file" data-options='{"seo":"image","clsTable":"Meta", "table_id":"<?php echo $_smarty_tpl->tpl_vars['meta_id']->value;?>
","toId":"isoman_show_image_seo","hiddenId":"isoman_hidden_image_seo"}'>
									<div class="clearfix mt-half"></div>
									<a table_id="<?php echo $_smarty_tpl->tpl_vars['meta_id']->value;?>
" isoman_multiple="0" isoman_callback='isoman_callback({"openFrom":"seo", "clsTable":"Meta", "table_id":"<?php echo $_smarty_tpl->tpl_vars['meta_id']->value;?>
","toField":"image","toId":"isoman_show_image_seo","hiddenId":"isoman_hidden_image_seo"})' class="btn btn-upload-choice ajOpenDialog" isoman_for_id="image_seo" isoman_name="image"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->makeIcon('folder-o',$_smarty_tpl->tpl_vars['core']->value->get_Lang('From library'));?>
</a>
								</div>
							</div>
							<div class="col-xs-12 col-md-4">
								<div class="aspect-ratio aspect-ratio--square aspect-ratio--square--full aspect-ratio--interactive">
									<input type="hidden" id="isoman_hidden_image_seo" name="isoman_url_image_seo" value="<?php echo $_smarty_tpl->tpl_vars['clsMeta']->value->getOneField('image',$_smarty_tpl->tpl_vars['meta_id']->value);?>
" />
									<img class="aspect-ratio__content radius-3" id="isoman_show_image_seo" src="<?php echo $_smarty_tpl->tpl_vars['clsMeta']->value->getOneField('image',$_smarty_tpl->tpl_vars['meta_id']->value);?>
" onerror="this.src='<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/none_image.png'" width="250px" height="170px" />
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="btn_save_titile_trip_code">
					<?php if ($_smarty_tpl->tpl_vars['cat_run']->value == 'seotool') {?>
					<a tour_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" cat_run="<?php echo $_smarty_tpl->tpl_vars['cat_run']->value;?>
" prev_step="<?php if ($_smarty_tpl->tpl_vars['child_cat_menu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index_prev']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index_prev'] : null)] == '') {
if ($_smarty_tpl->tpl_vars['list_menu_tour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index_prev']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index_prev'] : null)]['cat_menu'] == '') {
echo $_smarty_tpl->tpl_vars['child_cat_menu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)];
}
if ($_smarty_tpl->tpl_vars['list_menu_tour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index_prev']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index_prev'] : null)]['cat_menu'] != '') {
echo $_smarty_tpl->tpl_vars['list_cat_menu_prev']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['child_cat_menu_prev']->value[$_smarty_tpl->tpl_vars['count_child_cat_menu_prev']->value];
}
} else {
echo $_smarty_tpl->tpl_vars['child_cat_menu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index_prev']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index_prev'] : null)];
}?>" class="back_step"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Back');?>
</a>
					<a id="btn-save-img-file"  tour_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS']->value;?>
/admin/tour/edit/<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
/overview" class="save_and_continue_tour"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Save &amp; Continue');?>
</a>
					<?php } else { ?>
					<a tour_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" cat_run="<?php echo $_smarty_tpl->tpl_vars['cat_run']->value;?>
" prev_step="<?php if ($_smarty_tpl->tpl_vars['child_cat_menu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index_prev']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index_prev'] : null)] == '') {
if ($_smarty_tpl->tpl_vars['list_menu_tour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index_prev']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index_prev'] : null)]['cat_menu'] == '') {
echo $_smarty_tpl->tpl_vars['child_cat_menu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)];
}
if ($_smarty_tpl->tpl_vars['list_menu_tour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index_prev']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index_prev'] : null)]['cat_menu'] != '') {
echo $_smarty_tpl->tpl_vars['list_cat_menu_prev']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['child_cat_menu_prev']->value[$_smarty_tpl->tpl_vars['count_child_cat_menu_prev']->value];
}
} else {
echo $_smarty_tpl->tpl_vars['child_cat_menu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index_prev']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index_prev'] : null)];
}?>" class="back_step"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Back');?>
</a>
					<a id="btn-save-img-file"  tour_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" cat_run="<?php echo $_smarty_tpl->tpl_vars['cat_run']->value;?>
" status="" present_step="<?php echo $_smarty_tpl->tpl_vars['child_cat_menu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)];?>
" next_step="<?php if ($_smarty_tpl->tpl_vars['child_cat_menu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index_next']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index_next'] : null)] == '') {
if ($_smarty_tpl->tpl_vars['list_menu_tour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index_next']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index_next'] : null)]['cat_menu'] == '') {?>title-tripcode<?php }
if ($_smarty_tpl->tpl_vars['list_menu_tour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index_next']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index_next'] : null)]['cat_menu'] != '') {
echo $_smarty_tpl->tpl_vars['list_cat_menu_next']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['child_cat_menu_next']->value[0];
}
} else {
echo $_smarty_tpl->tpl_vars['child_cat_menu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index_next']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index_next'] : null)];
}?>" class="save_and_continue_tour"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Save &amp; Continue');?>
</a>
					<?php }?>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="instruction_fill_data_box">
				<p class="title_box"><i class="fa fa-question-circle text-red " aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Instructions');?>
</p>
				<div class="content_box">
					<p class="mb0"><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['seo_tool_tour']->value));?>
</p>
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
