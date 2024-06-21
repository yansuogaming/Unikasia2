<?php
/* Smarty version 3.1.38, created on 2024-04-08 17:10:54
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/company.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6613c2aee82866_61545397',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1c68e48d58301125fa1fd12f6e933afc6a245a5' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/company.tpl',
      1 => 1698303988,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6613c2aee82866_61545397 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel-panel-inner infocompany">
    <div class="panel-pane pane-views-panes clearfix no-title">
        <div class="pane-content">
			<?php $_smarty_tpl->_assignInScope('CompanyName', ('CompanyName_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
			<p class="h3"><?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['CompanyName']->value);?>
</p>
            <ul class="d2-page">
				<?php $_smarty_tpl->_assignInScope('CompanyAddress', ('CompanyAddress_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
            	<li><span> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Address');?>
:</span> <?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['CompanyAddress']->value);?>
 </li>
				<li><span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Email');?>
:</span> <a href="mailto:<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('CompanyEmail');?>
"><?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('CompanyEmail');?>
</a>  </li>
				<li><span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Phone');?>
:</span> <a href="tel:<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('CompanyPhone');?>
"><?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('CompanyPhone');?>
</a></li>
				<li><span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Hotline');?>
:</span> <a href="tel:<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('CompanyHotline');?>
"> <?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('CompanyHotline');?>
</a></li>
            </ul>
        </div>
    </div>
</div><?php }
}
