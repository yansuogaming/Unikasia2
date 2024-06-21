<?php
/* Smarty version 3.1.38, created on 2024-04-09 08:27:06
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/blocks/box_detail_tour_image-file-tour.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6614996ac6f181_70295712',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4376840544e9c7319267f2d76b24a70631027263' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/blocks/box_detail_tour_image-file-tour.tpl',
      1 => 1709803839,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6614996ac6f181_70295712 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="box_title_trip_code">
	<div class="row d-flex full-height">
		<div class="col-md-9">
			<div class="fill_data_box">
				<h3 class="title_box"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Image, file tour');?>
</h3>
				<?php $_smarty_tpl->_assignInScope('SiteHasProgramFile_Tours', $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SiteHasProgramFile_Tours'));?>
				<div class="form-group inpt_tour">
					<label class="col-form-label" for="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Image represent tour');?>
 <span class="required_red">*</span>
						<?php $_smarty_tpl->_assignInScope('image_tour', 'image_tour');?>
						<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
						<button data-key="<?php echo $_smarty_tpl->tpl_vars['image_tour']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Image represent tour');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
						<?php }?>
					</label>
					<div class="row">
						<div class="col-xs-12 col-md-5">
							<div class="drop_gallery" onClick="loadHelp(this)">
								<div class="filedrop full" onClick="file_explorer(this,event);" ondrop="file_drop(this,event)" toid="selectFile" toel="isoman_show_image" data-options='{"openFrom":"image","clsTable":"Tour", "table_id":"<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
","toId":"isoman_show_image" }' ondragover="return false">
									<h3><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Drop files to upload');?>
</h3>
									<p>Kích thước (WxH=840x480)<br />
									Các loại tệp được hỗ trợ là: .png,.jpg,.jpeg</p>
									<button type="button" class="btn btn-upload"><?php if ($_smarty_tpl->tpl_vars['oneItem']->value['image']) {?>Thay ảnh<?php } else { ?>Tải ảnh lên<?php }?></button>
								</div>
								<input class="hidden" id="selectFile" type="file" data-options='{"openFrom":"image","clsTable":"Tour", "table_id":"<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
","toId":"isoman_show_image"}' name="image">

								<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
" name="image" id="image" />
								<a table_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" isoman_multiple="0" isoman_callback='isoman_callback({"openFrom":"image", "clsTable":"Tour", "pvalTable":"<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
","toField":"image","toId":"isoman_show_image"})' class="btn-upload-2 ajOpenDialog" isoman_for_id="image" isoman_name="image"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->makeIcon('folder-o',$_smarty_tpl->tpl_vars['core']->value->get_Lang('From library'));?>
</a>
								<div class="text_help" hidden=""><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['image_tour']->value));?>
</div>
							</div>
						</div>
						<div class="col-xs-12 col-md-5">
							<img class="img-responsive radius-3" id="isoman_show_image" src="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
" onerror="this.src='<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/none_image.png'" alt="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('images');?>
" style="width:450px; height:285px"  />
						</div>
					</div>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'tour_exhautive','tour_program_file','customize')) {?>
				<hr class="clearfix" />
				<div class="form-group">
					<label class="col-form-label" for="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('File download program tour');?>
 <span class="required_red">*</span>
					<?php $_smarty_tpl->_assignInScope('file_tour', 'file_tour');?>
							<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
							<button data-key="<?php echo $_smarty_tpl->tpl_vars['file_tour']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Image represent tour');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
							<?php }?>
					</label>
					<p class="help-block"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Chosse File in the warehouse data');?>
</p>
					<img class="isoman_img_pop" id="isoman_show_file_programmes" src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/icon_pdf.png" width="30px" height="30px" />
					<input type="hidden" id="isoman_hidden_file_programme" name="isoman_url_file_programme"  value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['file_programme'];?>
" >
					<input class="text_32 border_aaa bold" type="text" id="isoman_url_file_programme" name="file_programme" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['file_programme'];?>
" style="width:100%; max-width:300px; float:left" onClick="loadHelp(this)" readonly><a style="float:left; margin-left:4px; margin-top:-4px;" href="#" class="ajOpenDialog" isoman_for_id="file_programme" isoman_val="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['file_programme'];?>
" isoman_name="file_programme"><img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/general/folder-32.png" border="0" title="Open" alt="Open" /></a>
					<em style="padding-left:10px; padding-top:3px; display:inline-block">File chương trình tour</em>
					<div class="text_help" hidden=""><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['file_tour']->value));?>
</div>
				</div>
				<?php }?>
			</div>
			<div class="btn_save_titile_trip_code">
				<a tour_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" cat_run="<?php echo $_smarty_tpl->tpl_vars['cat_run']->value;?>
" prev_step="<?php if ($_smarty_tpl->tpl_vars['child_cat_menu_j_index_prev']->value == '') {
if ($_smarty_tpl->tpl_vars['list_cat_menu_prev']->value == '') {
echo $_smarty_tpl->tpl_vars['child_cat_menu_j']->value;
}
if ($_smarty_tpl->tpl_vars['list_cat_menu_prev']->value != '') {
echo $_smarty_tpl->tpl_vars['list_cat_menu_prev']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['child_cat_menu_prev']->value[$_smarty_tpl->tpl_vars['count_child_cat_menu_prev']->value];
}
} else {
echo $_smarty_tpl->tpl_vars['child_cat_menu_j_index_prev']->value;
}?>" class="back_step"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Back');?>
</a>
				<a id="btn-save-img-file"  tour_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" cat_run="<?php echo $_smarty_tpl->tpl_vars['cat_run']->value;?>
" status="" present_step="<?php echo $_smarty_tpl->tpl_vars['child_cat_menu_j']->value;?>
" next_step="<?php if ($_smarty_tpl->tpl_vars['child_cat_menu_j_index_next']->value == '') {
if ($_smarty_tpl->tpl_vars['list_menu_tour_i_index_next']->value['cat_menu'] == '') {?>SaveAll<?php }
if ($_smarty_tpl->tpl_vars['list_menu_tour_i_index_next']->value['cat_menu'] != '') {
echo $_smarty_tpl->tpl_vars['list_cat_menu_next']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['child_cat_menu_next']->value[0];
}
} else {
echo $_smarty_tpl->tpl_vars['child_cat_menu_j_index_next']->value;
}?>" class="save_and_continue_tour"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Save &amp; Continue');?>
</a>
			</div>
		</div>
		<div class="col-md-3">
			<div class="instruction_fill_data_box">
				<p class="title_box"><i class="fa fa-question-circle text-red " aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Instructions');?>
</p>
				<div class="content_box"><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['image_tour']->value));?>
</div>
			</div>
		</div>
	</div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
	var clsTable = 'Tour';
	var table_id = '<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
';
<?php echo '</script'; ?>
><?php }
}
