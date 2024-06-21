<?php
/* Smarty version 3.1.38, created on 2024-04-09 09:49:48
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/cruise/ajLoadFormCabin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6614accc24bd65_77650197',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f223c187722d39d77a8987b14c9f01ce11307851' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/cruise/ajLoadFormCabin.tpl',
      1 => 1711433053,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6614accc24bd65_77650197 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="" method="post"  enctype="multipart/form-data" class="validate-form" id="frm_addCabin">
	<div class="box_head_cabin">
		<a href="javscript:void(0);" class="back_list btn_back_list_cabin"><i class="fa fa-angle-left"></i></a>
		<p class="title_add_cabin" data-title_add_cabin="<?php if ($_smarty_tpl->tpl_vars['cabin_id']->value) {
echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Edit cabin');
} else {
echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Add new cabin');
}?>"><?php if ($_smarty_tpl->tpl_vars['cabin_id']->value) {
echo $_smarty_tpl->tpl_vars['oneCabin']->value['title'];
} else {
echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Add new cabin');
}?></p>
	</div>
	<div class="box_body_cabin">
		<div class="row">
			<div class="col-md-9">
				<div class="inpt_tour">
					<label for="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Name Of Cabin');?>
 <span class="required_red">*</span></label>
					<input class="input_text_form input-title required" id="title_cabin" name="title" value="<?php echo $_smarty_tpl->tpl_vars['oneCabin']->value['title'];?>
" maxlength="255" type="text" />
				</div>
				<div class="form-group inpt_tour">
					<label for="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('BedType');?>
 <span class="required_red">*</span></label>
					<div class="admin-toolbar-action">
						<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=cruise&act=property&type=GroupSize" target="_blank" style="text-decoration: underline"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Change');?>
</a>
					</div>
					<div>
						<select name="list_group_size[]" id="list_group_size" class="required full-width chosen-select" multiple="multiple" cruise_type="<?php echo $_smarty_tpl->tpl_vars['oneCruise']->value['cruise_type'];?>
">
							<?php echo $_smarty_tpl->tpl_vars['clsCruiseProperty']->value->getSelectByProperty2('GroupSize',$_smarty_tpl->tpl_vars['oneCabin']->value['list_group_size'],1,$_smarty_tpl->tpl_vars['oneCruise']->value['cruise_type']);?>

						</select>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="d-flex flex-wrap justify-content-center">
					<div class="photobox image">
						<?php if ($_smarty_tpl->tpl_vars['_isoman_use']->value == '1') {?>
							<img src="<?php echo $_smarty_tpl->tpl_vars['oneCabin']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('images');?>
" id="isoman_show_image" />
							<input type="hidden" id="isoman_hidden_image" name="isoman_url_image" value="<?php echo $_smarty_tpl->tpl_vars['oneCabin']->value['image'];?>
">
							<a href="javascript:void()" class="photobox_edit ajOpenDialog" isoman_for_id="image" isoman_val="<?php echo $_smarty_tpl->tpl_vars['oneCabin']->value['image'];?>
" isoman_name="image" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('edit');?>
"><i class="iso-edit"></i></a>
							<?php if ($_smarty_tpl->tpl_vars['oneCabin']->value['image']) {?>
								<a pvalTable="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" clsTable="CruiseCabin" href="javascript:void()" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('delete');?>
" class="photobox_edit deleteItemImage" data-name_input="isoman_url_image" g="imgItem">X</a>
							<?php }?>
						<?php } else { ?>
							<img src="<?php echo $_smarty_tpl->tpl_vars['oneCabin']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('noimages');?>
" id="imgTour_image" />
							<input type="hidden" name="image_src" value="<?php echo $_smarty_tpl->tpl_vars['oneCabin']->value['image'];?>
" class="hidden_src" id="imgTour_hidden" />
							<a href="javascript:void()" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('change');?>
" class="photobox_edit editInlineImage" g="imgTour">
								<i class="iso-edit"></i>
							</a> 
							<input type="file" style="display:none" id="imgTour_file" g="imgTour" class="editInlineImageFile" name="image" />
						<?php }?>
					</div>
					<div class="wrap mt10 boxShowImages">
						<p class="text-center"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Image Size');?>
 (WxH=204x134)</strong></p>
						<p class="text-center">
							<label>
								<input type="radio" class="margin_0" name="is_show_image" value="0" <?php if ($_smarty_tpl->tpl_vars['oneCabin']->value['is_show_image'] == 0) {?>checked<?php }?> /> OFF
							</label>
							<label>
								<input type="radio" class="margin_0" name="is_show_image" value="1" <?php if ($_smarty_tpl->tpl_vars['oneCabin']->value['is_show_image'] == 1) {?>checked<?php }?> /> ON
							</label>
						</p>
					</div>
				</div>
			</div>
		</div>				

		<div class="box_info_cabin">
			<ul class="nav_tab_reviews nav nav-tabs" id="myTab" role="tablist">
				<li class="active"><a data-toggle="tab" href="#info"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Info cabin');?>
</a></li>
				<li><a data-toggle="tab" href="#easy_cancel"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Easy Cancel');?>
</a></li>
				<li><a data-toggle="tab" href="#CabinFacilities"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cabin Facilities');?>
</a></li>
			</ul>
		</div>
		<div class="tab-content" id="myTabContent">
			<div id="info" class="tab-pane fade in active">
				<div class="row">
					<div class="col-md-3">
						<div class="inpt_tour">
							<label for="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cabin size');?>
</label>
							<div class="fieldarea span100 relative">
								<input class="text full fontLarge price-In" name="cabin_size" value="<?php echo $_smarty_tpl->tpl_vars['oneCabin']->value['cabin_size'];?>
" maxlength="255" type="text"><span class="percent">m<sup>2</sup></span>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="inpt_tour">
							<label for="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Quantity');?>
</label>
							<div class="fieldarea span100">
								<input class="text full fontLarge price-In" name="number_cabin" value="<?php echo $_smarty_tpl->tpl_vars['oneCabin']->value['number_cabin'];?>
" maxlength="255" type="text">
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="inpt_tour">
							<label for="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Floor');?>
</label>
							<div class="fieldarea span100">
								<input class="text full fontLarge price-In" name="floor" value="<?php echo $_smarty_tpl->tpl_vars['oneCabin']->value['floor'];?>
" maxlength="255" type="text">
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="inpt_tour">
							<label for="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Bed');?>
</label>
							<div class="fieldarea span100 relative">
								<input class="text full fontLarge" name="bed_size" value="<?php echo $_smarty_tpl->tpl_vars['oneCabin']->value['bed_size'];?>
" maxlength="255" type="text">
							</div>
						</div>
					</div>
					<div class="col-md-2">
						<div class="inpt_tour">
							<label for="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Ex.Bed');?>
</label>
							<div class="fieldarea span100">
								<select class="glSlBox" name="extra_bed" style="width:120px"> 
									<option value="0" <?php if ($_smarty_tpl->tpl_vars['oneCabin']->value['extra_bed'] == 0) {?>selected=selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('No');?>
</option> 
									<option value="1" <?php if ($_smarty_tpl->tpl_vars['oneCabin']->value['extra_bed'] == 1) {?>selected=selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Yes');?>
</option> 
								</select>
							</div>
						</div>
					</div>
				</div>
				<div class="inpt_tour">
					<label for="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Short text');?>
</label>
					<div class="fieldarea span100">
						<textarea style="width:100%" table_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" name="intro" class="textarea_intro_editor" data-column="intro" id="textarea_intro_cabin_editor_overview_<?php echo $_smarty_tpl->tpl_vars['now']->value;?>
" cols="255" rows="2"><?php echo $_smarty_tpl->tpl_vars['oneCabin']->value['intro'];?>
</textarea>
					</div>
				</div>
			</div>
			<div id="easy_cancel" class="tab-pane fade">
				<div class="inpt_tour">
					<div class="fieldarea span100">
						<textarea style="width:100%" table_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" name="easy_cancel" class="textarea_intro_editor" data-column="easy_cancel" id="textarea_easy_cancel_editor_overview_<?php echo $_smarty_tpl->tpl_vars['now']->value;?>
" cols="255" rows="2"><?php echo $_smarty_tpl->tpl_vars['oneCabin']->value['easy_cancel'];?>
</textarea>
					</div>
				</div>
			</div>
			<div id="CabinFacilities" class="tab-pane fade">
				<div class="admin-toolbar-action d-flex justify-content-between">
					<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=cruise&act=property&type=CabinFacilities" target="_blank" style="text-decoration: underline"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Change');?>
</a>
					<div class="checkall" style="margin-bottom:10px">
					<label for="all_check">Check/Uncheck All</label> <input type="checkbox" rel="CheckCabinFacilities" id="all_check" style="height:16px"> </div>
				</div>
				<div class="row">
					<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listCabinFacilities']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
						<?php $_smarty_tpl->_assignInScope('title_cabin_facilities', $_smarty_tpl->tpl_vars['clsCruiseProperty']->value->getTitle($_smarty_tpl->tpl_vars['listCabinFacilities']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_property_id']));?>
						<div class="col-md-4" <?php echo $_smarty_tpl->tpl_vars['oneCabin']->value['list_cabin_facilities'];?>
>
							<label class="lbl_checkbox_cabin_facilities">
								<input class="chkitem CheckCabinFacilities" type="checkbox" name="listCabinFacilities[]" value="<?php echo $_smarty_tpl->tpl_vars['listCabinFacilities']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_property_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['clsISO']->value->checkContainer($_smarty_tpl->tpl_vars['oneCabin']->value['list_cabin_facilities'],$_smarty_tpl->tpl_vars['listCabinFacilities']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_property_id'])) {?> checked="checked"<?php }?>>&nbsp; 
								<img src="<?php echo $_smarty_tpl->tpl_vars['clsCruiseProperty']->value->getImage($_smarty_tpl->tpl_vars['listCabinFacilities']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_property_id'],20,20);?>
" onerror="this.src='<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/none_image.png'" width="20" height="20" alt="<?php echo $_smarty_tpl->tpl_vars['title_cabin_facilities']->value;?>
" class="img_cabin_facilities mr-2"> <?php echo $_smarty_tpl->tpl_vars['title_cabin_facilities']->value;?>

							</label>
						</div>							
					<?php
}
}
?>

				</div>

			</div>
		</div>
	</div>
	<div class="box_footer_cabin">
		<button type="button" class="btn_back_cabin"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Back');?>
</button>
		<input type="hidden" name="cabin_id" value="<?php echo $_smarty_tpl->tpl_vars['cabin_id']->value;?>
">
		<button id="submit_form" type="submit" class="btn_save_cruise_new btn_save_cabin"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Continute');?>
</button>
	</div>
</form>
<?php }
}
