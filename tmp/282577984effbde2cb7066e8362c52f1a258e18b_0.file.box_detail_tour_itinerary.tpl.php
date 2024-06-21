<?php
/* Smarty version 3.1.38, created on 2024-04-09 08:27:10
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/blocks/box_detail_tour_itinerary.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6614996e759412_19386419',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '282577984effbde2cb7066e8362c52f1a258e18b' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/blocks/box_detail_tour_itinerary.tpl',
      1 => 1709887232,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6614996e759412_19386419 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="box_title_trip_code">
	<div class="row d-flex full-height">
		<div class="col-md-9">
			<div class="fill_data_box">
				<h3 class="title_box mb0"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Itinerary');?>

				<?php $_smarty_tpl->_assignInScope('itinerary_tour', 'itinerary_tour');?>
				<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
				<button data-key="<?php echo $_smarty_tpl->tpl_vars['itinerary_tour']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Itinerary');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
				<?php }?>
				</h3>
				<p class="intro_box mb40"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('introitinerary');?>
</p>
				<div class="form_option_tour">
					<?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SiteHasItineraryTours')) {?>
					<div class="inpt_tour">
						<div class="hastable">
							<div class="contingency_table" style="display: none;">
								<p class="title_contingency_table"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Contingency table');?>
</p> <a style="vertical-align:middle" href="javascript:void(0);" id="clickToAddItinerary_contingency" class="iso-button-primary fl"><i class="icon-plus-sign"></i>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Add Contingency');?>
</a>
								<table class="full-width tbl-grid" cellspacing="0">
									<thead>
										<tr>
											<?php if ($_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField('duration_type',$_smarty_tpl->tpl_vars['pvalTable']->value) == 0) {?>
											<th class="gridheader" style="width:100px"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('day');?>
</strong></th>
											<?php }?>
											<th class="gridheader name_responsive name_responsive2" style="text-align:left"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Title');?>
</strong></th>
											<th class="gridheader hiden_responsive" style="text-align:left; width: 190px;"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Meals');?>
</strong></th>
											<th class="gridheader hiden_responsive" style="width: 50px"></th>
										</tr>
									</thead>
									<tbody id="tblTourItinerary_contingency"></tbody>
								</table>
							</div>
							<table class="full-width tbl-grid table-striped table_responsive" cellspacing="0">
								<thead>
								<tr>
									<?php if ($_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField('duration_type',$_smarty_tpl->tpl_vars['pvalTable']->value) == 0) {?>
									<th class="gridheader" style="width:100px"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('day');?>
</strong></th>
									<?php }?>
									<th class="gridheader name_responsive name_responsive2" style="text-align:left"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Title');?>
</strong></th>
									<th class="gridheader hiden_responsive" style="text-align:left; width: 190px;"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Meals');?>
</strong></th>
									<th class="gridheader hiden_responsive" style="width: 50px"></th>
								</tr>
								</thead>
								<tbody id="tblTourItinerary"></tbody>
							</table>
						</div>
						<?php if ($_smarty_tpl->tpl_vars['clsClassTable']->value->checkTourItinerary($_smarty_tpl->tpl_vars['pvalTable']->value)) {?>

						<?php } else { ?>
						<a href="javascript:void(0);" id="clickToAddItinerary" class="btn_additinerary" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('additinerary');?>
">+ <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('additinerary');?>
</a>
						<?php }?>
					</div>
					<?php }?>
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
		</div>
		<div class="col-md-3">
			<div class="instruction_fill_data_box">
				<p class="title_box"><i class="fa fa-question-circle text-red " aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Instructions');?>
</p>
				<div class="content_box">
					<p class="mb0"><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['itinerary_tour']->value));?>
</p>
				</div>
			</div>
		</div>
	</div>
</div>

<?php echo '<script'; ?>
>
	loadTourItinerary($tour_id);
	loadTourItineraryContingency(tour_id);
<?php echo '</script'; ?>
>
<?php }
}
