<?php
/* Smarty version 3.1.38, created on 2024-04-09 08:27:15
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/blocks/box_detail_tour_price-config.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66149973c35883_55707776',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23a9967e16b8c77fa7f1606e384edd4547f355ef' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/blocks/box_detail_tour_price-config.tpl',
      1 => 1709260858,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66149973c35883_55707776 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="box_title_trip_code">
	<div class="row d-flex full-height">
		<div class="col-md-9">
			<div class="fill_data_box">
				<h3 class="title_box mb05"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Price Config');?>

				<?php $_smarty_tpl->_assignInScope('price_config_tour', 'price_config_tour');?>
				<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
				<button data-key="<?php echo $_smarty_tpl->tpl_vars['price_config_tour']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Price Config');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
				<?php }?>
				</h3>
				<p class="intro_box mb40"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Price_Config_Notes');?>
</p>
				<div class="form_option_tour mb40">
					<div class="form-group mb40">
						<label class="col-form-label text-bold"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Price class');?>
 <span class="text-red">*</span></label>
						<div class="admin-toolbar-action mt-0">
							<a class="text-link" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?&mod=tour_exhautive&act=property&type=TOUROPTION" target="_blank"> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Manage');?>
</a>
						</div>
						<div id="slb_ContainerTourOption">
							<select name="tour_option[]" id="tour_option" class="required chosen-select required" multiple="multiple">
								<?php $_smarty_tpl->_assignInScope('selected', $_smarty_tpl->tpl_vars['oneItem']->value['tour_option']);?>
								<?php echo $_smarty_tpl->tpl_vars['clsTourOption']->value->makeSelectboxOption2($_smarty_tpl->tpl_vars['selected']->value,'TOUROPTION',0);?>

								<?php echo $_smarty_tpl->tpl_vars['selected']->value;?>

							</select>
						</div>
					</div>
					<hr />
					<label class="col-form-label fs-20"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Group size');?>
</strong></label>
					<div class="form-group ">
						<label class="col-form-label"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Adult');?>
</strong></label>
						<div class="admin-toolbar-action mt-0">
							<a class="text-link" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?&mod=tour_exhautive&act=property&type=SIZEGROUP" target="_blank"> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Manage');?>
</a>
						</div>
						<div id="slb_ContainerAdultSizeGroup">
							<select name="adult_size_group[]" id="adult_size_group" class="chosen-select required" multiple="multiple">
								<?php $_smarty_tpl->_assignInScope('selected', $_smarty_tpl->tpl_vars['oneItem']->value['adult_group_size']);?>
								<?php echo $_smarty_tpl->tpl_vars['clsTourOption']->value->makeSelectboxOption2($_smarty_tpl->tpl_vars['selected']->value,'SIZEGROUP',$_smarty_tpl->tpl_vars['adult_type_id']->value);?>

								<?php echo $_smarty_tpl->tpl_vars['selected']->value;?>

							</select>
						</div>
					</div>
					<!--price new-->
					<div class="form-group">
						<div class="box_top_form_group d-flex align-items-center justify-content-between mb10">
							<div class="box_option">
								<label class="col-form-label label_w"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Children');?>
</strong></label>
								<select class="type_visitor" name="type_visitor_child" data-id="slb_ContainerChildSizeGroup" data-tour_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" data-type="children">
									<option value="<?php echo $_smarty_tpl->tpl_vars['age_type_id']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['oneItem']->value['type_visitor_child'] == $_smarty_tpl->tpl_vars['age_type_id']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Age");?>
</option>
									<option value="<?php echo $_smarty_tpl->tpl_vars['height_type_id']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['oneItem']->value['type_visitor_child'] == $_smarty_tpl->tpl_vars['height_type_id']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Height");?>
</option> 
								</select>
							</div>						
							<div class="admin-toolbar-action mt-0">
								<a class="text-link fr" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?&mod=tour_exhautive&act=property&type=SIZEGROUP" target="_blank"> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Manage');?>
</a>
							</div>
						</div>
						<div id="slb_ContainerChildSizeGroup">
													</div>
					</div>
					<div class="form-group ">
						<div class="box_top_form_group d-flex align-items-center justify-content-between mb10">
							<div class="box_option">
								<label class="col-form-label label_w"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Infant');?>
</strong></label>
								<select class="type_visitor" name="type_visitor_infant" data-id="slb_ContainerInfantSizeGroup" data-tour_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" data-type="infant">
									<option value="<?php echo $_smarty_tpl->tpl_vars['age_type_id']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['oneItem']->value['type_visitor_infant'] == $_smarty_tpl->tpl_vars['age_type_id']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Age");?>
</option>
									<option value="<?php echo $_smarty_tpl->tpl_vars['height_type_id']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['oneItem']->value['type_visitor_infant'] == $_smarty_tpl->tpl_vars['height_type_id']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Height");?>
</option> 
								</select>
							</div>						
							<div class="admin-toolbar-action mt-0">
								<a class="text-link fr" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?&mod=tour_exhautive&act=property&type=SIZEGROUP" target="_blank"> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Manage');?>
</a>
							</div>
						</div>
						<div id="slb_ContainerInfantSizeGroup">
													</div>					
					</div>
					<!--end price new-->
				</div>
				<div class="btn_save_titile_trip_code" >
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
		</div>
		<div class="col-md-3">
			<div class="instruction_fill_data_box">
				<p class="title_box"><i class="fa fa-question-circle text-red " aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Instructions');?>
</p>
				<div class="content_box">
					<p class="mb0"><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['price_config_tour']->value));?>
</p>
				</div>
			</div>
		</div>
	</div>
</div><?php }
}
