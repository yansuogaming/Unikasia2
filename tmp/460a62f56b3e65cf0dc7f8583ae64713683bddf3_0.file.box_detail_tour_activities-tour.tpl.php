<?php
/* Smarty version 3.1.38, created on 2024-04-12 09:18:27
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/blocks/box_detail_tour_activities-tour.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_661899f3d141c1_77010863',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '460a62f56b3e65cf0dc7f8583ae64713683bddf3' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/blocks/box_detail_tour_activities-tour.tpl',
      1 => 1709280028,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661899f3d141c1_77010863 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/isocms/domains/isocms.com/public_html/inc/smarty3138/plugins/function.cycle.php','function'=>'smarty_function_cycle',),));
?>
<div class="box_title_trip_code">
	<div class="row d-flex full-height">
		<div class="col-md-9">
			<div class="fill_data_box">
				<div class="d-flex justify-content-between align-items-center">
					<div>
						<h3 class="title_box mb05"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Activities tour');?>

						<?php $_smarty_tpl->_assignInScope('activities_tour', 'activities_tour');?>
						<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
						<button data-key="<?php echo $_smarty_tpl->tpl_vars['activities_tour']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Activities tour');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
						<?php }?>
						</h3>				
						<p class="not_text_tour mb40"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('fill overview');?>
</p>
					</div>
					<div class="admin-toolbar-action">
						<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS']->value;?>
/admin/?mod=property&act=activities" target="_blank" style="text-decoration: underline"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Change');?>
</a>
											</div>
				</div>
				<div class="form_option_tour">
					<div class="inpt_tour">
						<div class="accordion_in acc_active">
							<div class="acc_content">
								<table width="100%" class="tbl-grid table-striped" cellpadding="0" cellspacing="0">
									<thead><tr>
										<th class="gridheader"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('ID');?>
</strong></th>
										<th class="gridheader" style="width:80px"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Image');?>
</strong></th>
										<th class="gridheader text-left"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Name');?>
</strong></th>
										<th class="gridheader" style="width:70px"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Tool');?>
</strong></th>
									</tr></thead>
									<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstActivities']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
									<tr class="<?php echo smarty_function_cycle(array('values'=>"row1,row2"),$_smarty_tpl);?>
">
										<td class="index"><?php echo $_smarty_tpl->tpl_vars['lstActivities']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['activities_id'];?>
</td>
										<td class="index"><img src="<?php if ($_smarty_tpl->tpl_vars['lstActivities']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['image'] != '') {
echo $_smarty_tpl->tpl_vars['clsActivities']->value->getImage($_smarty_tpl->tpl_vars['lstActivities']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['activities_id'],60,40);
}?>" width="60" onerror="this.src='<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/none_image.png'" /></td>
										<td><?php echo $_smarty_tpl->tpl_vars['clsActivities']->value->getTitle($_smarty_tpl->tpl_vars['lstActivities']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['activities_id']);?>
</td>
										<td class="text-center"><input type="checkbox" class="el-checkbox" name="list_activities_id[]"<?php echo $_smarty_tpl->tpl_vars['lstActivities']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['check'];?>
 value="<?php echo $_smarty_tpl->tpl_vars['lstActivities']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['activities_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['clsISO']->value->checkContainer($_smarty_tpl->tpl_vars['oneItem']->value['list_activities_id'],$_smarty_tpl->tpl_vars['lstActivities']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['activities_id'])) {?>checked="checked"<?php }?> /></td>
									</tr>
									<?php
}
}
?>
								</table>
							</div>
						</div>
					</div>
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
				<div class="content_box">
					<p class="mb0"><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['activities_tour']->value));?>
</p>
				</div>
			</div>
		</div>
	</div>
</div><?php }
}
