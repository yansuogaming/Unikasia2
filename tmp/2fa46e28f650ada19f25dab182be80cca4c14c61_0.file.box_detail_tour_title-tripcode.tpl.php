<?php
/* Smarty version 3.1.38, created on 2024-04-09 08:26:56
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/blocks/box_detail_tour_title-tripcode.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6614996086fb81_27860713',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2fa46e28f650ada19f25dab182be80cca4c14c61' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/blocks/box_detail_tour_title-tripcode.tpl',
      1 => 1709173057,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6614996086fb81_27860713 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="box_title_trip_code">
	<div class="row d-flex full-height">
		<div class="col-md-9">
			<div class="fill_data_box">
				<h3 class="title_box"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Title and trip code');?>
</h3>
				<div class="form_title_and_trip_code">
					<div class="form-group inpt_tour">
						<label class="col-form-label" for="title">
						<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Title');?>
 <span class="required_red">*</span>
						<?php $_smarty_tpl->_assignInScope('title_tour', 'title_tour');?>
						<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
						<button data-key="<?php echo $_smarty_tpl->tpl_vars['title_tour']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Title');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
						<?php }?>
						</label>
						<input class="form-control input-lg input_text_form required" tour_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" type="text" id="title" <?php if ($_smarty_tpl->tpl_vars['oneItem']->value['yield_id']) {?>readonly<?php }?> name="title" value="<?php echo $_smarty_tpl->tpl_vars['clsTour']->value->getTitle($_smarty_tpl->tpl_vars['pvalTable']->value);?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('New title tour');?>
" onClick="loadHelp(this)">
						<div class="text_help" hidden=""><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['title_tour']->value));?>
</div>
					</div>
					<div class="form-group inpt_tour">
						<label class="col-form-label" for="trip_code"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Trip code');?>
 <span class="required_red">*</span>
						<?php $_smarty_tpl->_assignInScope('titleTrip', 'trip_code');?>
						<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
						<button data-key="<?php echo $_smarty_tpl->tpl_vars['titleTrip']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Trip code');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
						<?php }?>
						</label>
						<p class="not_text_tour"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Add your trip code');?>
</p>
						<input class="form-control input_text_form w-400px required" tour_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" type="text" id="trip_code" <?php if ($_smarty_tpl->tpl_vars['oneItem']->value['yield_id']) {?>readonly<?php }?> name="trip_code" value="<?php echo $_smarty_tpl->tpl_vars['clsTour']->value->getTripCode($_smarty_tpl->tpl_vars['pvalTable']->value);?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Trip Code');?>
" onClick="loadHelp(this)">
						<div class="text_help" hidden=""><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['titleTrip']->value));?>
</div>
					</div>
					<?php $_smarty_tpl->_assignInScope('tms_domain', $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['tms_domain']->value));?>
					<?php if ($_smarty_tpl->tpl_vars['tms_domain']->value) {?>
					<div class="form-group inpt_tour">
						<label class="col-form-label" for="trip_code"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('TravelMaster product code');?>

						<?php $_smarty_tpl->_assignInScope('tms_code', 'tms_code');?>
						<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
						<button data-key="<?php echo $_smarty_tpl->tpl_vars['tms_code']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('TMS code');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
						<?php }?>
						</label>
						<p class="not_text_tour"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Add your TMS code');?>
</p>
						<input class="form-control input_text_form w-400px" tour_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" type="text" id="tms_code" <?php if ($_smarty_tpl->tpl_vars['oneItem']->value['yield_id']) {?>readonly<?php }?> name="tms_code" value="<?php echo $_smarty_tpl->tpl_vars['clsTour']->value->getTMSCode($_smarty_tpl->tpl_vars['pvalTable']->value);?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Trip Code');?>
" onClick="loadHelp(this)">
						<div class="text_help" hidden=""><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['tms_code']->value));?>
</div>
					</div><?php }?>
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
				<div class="content_box"><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['title_tour']->value));?>
</div>
			</div>
		</div>
	</div>
</div><?php }
}
