<?php
/* Smarty version 3.1.38, created on 2024-04-08 13:11:09
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/cruise/setting.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66138a7db5cc00_99711528',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '872d69520164c3d5d7b901b14c879e1d18b73441' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/cruise/setting.tpl',
      1 => 1709947399,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66138a7db5cc00_99711528 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="page_container page-tour_setting">
	<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('header_title_module_setting');?>

	<div class="container-fluid container-fluid-2 d-flex">
		<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('menu_cruise_setting');?>

		<div class="content_setting_box">
			<div class="page_detail-title d-flex">
				<div class="title">
					<h2><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Module Setting');?>
</h2>
				</div>
			</div>
			<form method="post" action="" enctype="multipart/form-data">
				<div class="inpt_tour">
                    <h4 class="mb10"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Booking Includes');?>
</h4>
                    
					<textarea style="width:100%" table_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" name="iso-<?php echo $_smarty_tpl->tpl_vars['site_cruise_include']->value;?>
" class="textarea_intro_editor" data-column="iso-intro" id="textarea_intro_editor_overview_<?php echo $_smarty_tpl->tpl_vars['now']->value;?>
" cols="255" rows="2"><?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['site_cruise_include']->value);?>
</textarea>
				</div>
				<div class="clearfix mt10"></div>
				<fieldset class="submit-buttons">
					<?php echo $_smarty_tpl->tpl_vars['saveBtn']->value;?>

					<input value="UpdateConfiguration" name="submit" type="hidden">
				</fieldset>
			</form>
		</div>
	</div>
</div><?php }
}
