<?php
/* Smarty version 3.1.38, created on 2024-04-09 08:40:31
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/blocks/box_detail_tour_departure_date.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66149c8f70eb68_13039259',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8bcf2a685c8a4464d2c1ab3d438efb81a7358d21' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/blocks/box_detail_tour_departure_date.tpl',
      1 => 1635140950,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66149c8f70eb68_13039259 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="box_title_trip_code">
	<div class="row d-flex full-height">
		<div class="col-md-12">
			<div class="fill_data_box">
				<h3 class="title_box mb05"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Departure Schedule');?>
</h3>
				<p class="help-block text-muted "><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Departure_Schedule_Notes');?>
</p>
				<div class="admin-toolbar-action">
					<a href="javascript:void(0)" class="btn btn-warning mr-2" onClick="open_departure_date(this)" openFrom="general" tour_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" date_id="0" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Add Departure');?>
"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->makeIcon('plus',$_smarty_tpl->tpl_vars['core']->value->get_Lang('Add Departure'));?>
</a>
				</div>
				<div class="form_option_tour mt-40">
					<div class="calendar" id="calendar"></div>
				</div>
			</div>
		</div>
	</div>
</div><?php }
}
