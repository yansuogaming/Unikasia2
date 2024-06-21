<?php
/* Smarty version 3.1.38, created on 2024-04-08 13:11:09
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/blocks/header_title_module_setting.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66138a7db9e532_40217931',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'edc6a5f4bfc5d1322aac4ee417aca7238a733752' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/blocks/header_title_module_setting.tpl',
      1 => 1709105219,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66138a7db9e532_40217931 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="page-title  d-flex">
	<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?&mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;
if ($_smarty_tpl->tpl_vars['act']->value != 'setting') {?>&act=setting<?php }?>" class="back"></a>
	<div class="title">
		<h1>
			<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Setting');?>

		</h1>
		<p>Hệ thống quản lý những cài đặt liên quan đến <?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
</p>
	</div>
</div><?php }
}
