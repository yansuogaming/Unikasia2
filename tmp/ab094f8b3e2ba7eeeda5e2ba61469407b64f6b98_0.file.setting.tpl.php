<?php
/* Smarty version 3.1.38, created on 2024-04-08 14:39:48
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/hotel/setting.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66139f44bd4c52_26633630',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab094f8b3e2ba7eeeda5e2ba61469407b64f6b98' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/hotel/setting.tpl',
      1 => 1709685687,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66139f44bd4c52_26633630 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="page-tour_setting">
	<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('header_title_module_setting');?>

	<div class="container-fluid container-fluid-2 d-flex">
		<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('menu_hotel_setting');?>

		<div class="content_setting_box">
			<div class="page_detail-title d-flex">
				<div class="title">
					<h2><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('setting');?>
</h2>
				<p><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('systemmanagementsetting');?>
</p>
				</div>
			</div>
			<form method="post" action="" enctype="multipart/form-data">
			<h3 class="title_box"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('intropage');?>
</h3>
				<?php $_smarty_tpl->_assignInScope('site_hotel_intro', ('site_hotel_intro_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
				<textarea id="textarea_intro_editor<?php echo $_smarty_tpl->tpl_vars['now']->value;?>
" class="textarea_intro_editor" name="iso-<?php echo $_smarty_tpl->tpl_vars['site_hotel_intro']->value;?>
" style="width:100%"><?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['site_hotel_intro']->value);?>
</textarea>
				<div class="clearfix"></br></div>
				<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('setting_module_banner');?>

				<fieldset class="submit-buttons">
					<?php echo $_smarty_tpl->tpl_vars['saveBtn']->value;?>

					<input value="UpdateConfiguration" name="submit" type="hidden">
				</fieldset>
			</form>
		</div>
		
	</div>
</div>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/cropper/jquery.cropper.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/cropper/cropper.min.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/cropper/cropper.min.css?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
" media="all" /><?php }
}
