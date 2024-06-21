<?php
/* Smarty version 3.1.38, created on 2024-04-11 07:40:06
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/faqs/setting.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66173166613a66_04118729',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '719db26856f2457910ef03305ad66caa25d61bd1' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/faqs/setting.tpl',
      1 => 1675240478,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66173166613a66_04118729 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="page-tour_setting">
	<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('header_title_module_setting');?>

	<div class="container-fluid container-fluid-2 d-flex">
		<div class="menu_setting_box">
			<ul class="ul_menu_setting">
				<li class="current">
					<a href="http://isocms.com/admin/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=<?php echo $_smarty_tpl->tpl_vars['act']->value;?>
">
						<span class="text">Cài đặt module</span>
					</a>
				</li>
			</ul>
		</div>
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
				<?php $_smarty_tpl->_assignInScope('site_mod_intro', ((('site_').($_smarty_tpl->tpl_vars['mod']->value)).('_intro_')).($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
				<textarea id="textarea_intro_editor<?php echo $_smarty_tpl->tpl_vars['now']->value;?>
" class="textarea_intro_editor" name="iso-<?php echo $_smarty_tpl->tpl_vars['site_mod_intro']->value;?>
" style="width:100%"><?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['site_mod_intro']->value);?>
</textarea>
				<div class="clearfix"></br></div>
				<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('meta_box_module_blog');?>

				<fieldset class="submit-buttons">
					<?php echo $_smarty_tpl->tpl_vars['saveBtn']->value;?>

					<input value="UpdateConfiguration" name="submit" type="hidden">
				</fieldset>
			</form>
		</div>
		
	</div>
</div><?php }
}
