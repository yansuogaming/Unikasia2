<?php
/* Smarty version 3.1.38, created on 2024-04-09 08:27:00
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/blocks/box_detail_tour_option-tour.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_661499642ea2a9_58413277',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb5e5895c21b9df43a9c3f6f9a52ae2596156957' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/blocks/box_detail_tour_option-tour.tpl',
      1 => 1709195951,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661499642ea2a9_58413277 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="box_title_trip_code">
	<div class="row d-flex full-height">
		<div class="col-md-9">
			<div class="fill_data_box">
				<h3 class="title_box"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Option tour');?>
</h3>
				<div class="form_option_tour">
					<?php if (1 == 2) {?>
					<div class="inpt_tour">
						<label for="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Tour Type');
echo $_smarty_tpl->tpl_vars['clsISO']->value->makeIcon('compress','','ml-2');?>
 <span class="required_red">*</span></label>
						<?php if ($_smarty_tpl->tpl_vars['oneItem']->value['yield_id']) {?>
							<?php if ($_smarty_tpl->tpl_vars['oneItem']->value['tour_option_id'] == 1) {?>S.I.C<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['oneItem']->value['tour_option_id'] == 3) {?>F.I.T<?php }?>
						<?php } else { ?>
						<p class="not_text_tour"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Chosse Tour Type');?>
</p>
						<div id="slb_ContainerTourCategory">
							<select name="tour_option_id" id="tour_option_id" class="text_32 border_aaa required" style="width:250px">
								<option value=""><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Select');?>
</option>
								<option value="1" <?php if ($_smarty_tpl->tpl_vars['oneItem']->value['tour_option_id'] == 1) {?>selected<?php }?>>S.I.C</option>
								<option value="3" <?php if ($_smarty_tpl->tpl_vars['oneItem']->value['tour_option_id'] == 3) {?>selected<?php }?>>F.I.T</option>
							</select>
						</div>
						<?php }?>
					</div>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,$_smarty_tpl->tpl_vars['mod']->value,'group','default') && $_smarty_tpl->tpl_vars['_LANG_ID']->value == 'vn') {?>
					<div class="form-group inpt_tour">
						<label class="col-form-label"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('tourgroup');?>
</label>
						<div class="fieldarea">
							<select name="tour_group_id" class="slb full" id="slb_TourGroup" tp="multiple" style="width:260px;">
								<?php echo $_smarty_tpl->tpl_vars['clsTourGroup']->value->makeSelectboxOption($_smarty_tpl->tpl_vars['tour_group_id']->value);?>

							</select>
						</div>
					</div>
					<?php }?>
					<div class="form-group inpt_tour">
						<label class="col-form-label"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Travel style');?>
 <span class="required_red">*</span>
							<?php $_smarty_tpl->_assignInScope('travel_style_tour', 'travel_style_tour');?>
							<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
							<button data-key="<?php echo $_smarty_tpl->tpl_vars['travel_style_tour']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Travel style');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
							<?php }?>
						</label>
						<p class="help-block"></p>
						<div class="admin-toolbar-action">
							<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=tour_exhautive&act=category" target="_blank" style="text-decoration: underline"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Change');?>
</a>
						</div>
						<div id="slb_ContainerTourCategory" onClick="loadHelp(this)">
							<select name="cat_id[]" id="cat_id" class="required full-width chosen-select" multiple="multiple">
								<?php $_smarty_tpl->_assignInScope('selected', $_smarty_tpl->tpl_vars['oneItem']->value['list_cat_id']);?>
								<?php echo $_smarty_tpl->tpl_vars['clsTourCategory']->value->makeSelectboxOption($_smarty_tpl->tpl_vars['oneItem']->value['tour_group_id'],$_smarty_tpl->tpl_vars['selected']->value,1,0,0);?>

								<?php echo $_smarty_tpl->tpl_vars['selected']->value;?>

							</select>
							<div class="text_help" hidden=""><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['travel_style_tour']->value));?>
</div>
						</div>
					</div>
					<div class="clearfix"></div>
										<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,$_smarty_tpl->tpl_vars['mod']->value,'tour_departure_point','customize')) {?>
					<div class="form-group inpt_tour">
						<label class="col-form-label"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Departure Point');?>
 <span class="required_red">*</span>
						<?php $_smarty_tpl->_assignInScope('departure_point_tour', 'departure_point_tour');?>
							<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
							<button data-key="<?php echo $_smarty_tpl->tpl_vars['departure_point_tour']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Departure Point');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
							<?php }?>
						</label>
						<p class="help-block"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('ex');?>
: Ha Noi, Ho Chi Minh City, Da Nang</p>
						<div id="slb_ContainerDepartPoint" onClick="loadHelp(this)">
							<select name="departure_point_id[]" id="departure_point_id" class="full-width chosen-select required" multiple="multiple">
								<?php $_smarty_tpl->_assignInScope('selected', $_smarty_tpl->tpl_vars['oneItem']->value['list_departure_point_id']);?>
								<?php echo $_smarty_tpl->tpl_vars['clsCity']->value->getSelectMultiDeparturePoint($_smarty_tpl->tpl_vars['tour_group_id']->value,$_smarty_tpl->tpl_vars['selected']->value,0);?>

								<?php echo $_smarty_tpl->tpl_vars['selected']->value;?>

							</select>
							<div class="text_help" hidden=""><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['departure_point_tour']->value));?>
</div>
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
		</div>
		<div class="col-md-3">
			<div class="instruction_fill_data_box">
				<p class="title_box"><i class="fa fa-question-circle text-red " aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Instructions');?>
</p>
				<div class="content_box"><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['travel_style_tour']->value));?>
</div>
			</div>
		</div>
	</div>
</div><?php }
}
