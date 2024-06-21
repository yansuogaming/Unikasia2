<?php
/* Smarty version 3.1.38, created on 2024-04-11 08:13:07
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/continent/setting.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_661739239601a5_30277292',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'faf8cd7fdf9748262817d9b5d775be131ddd08d7' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/continent/setting.tpl',
      1 => 1587463214,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661739239601a5_30277292 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="breadcrumb">
	<strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('youarehere');?>
 : </strong>
	<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('home');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('home');?>
</a>
    <a>&raquo;</a>
	<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('continent');?>
</a>
    <a>&raquo;</a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=<?php echo $_smarty_tpl->tpl_vars['act']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('settingcontinent');?>
</a>
</div>
<div class="clearfix"></div>
<div class="container-fluid">
    <div class="page-title">
        <h2><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('settingcontinent');?>
</h2>
        <p><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('systemmanagementsettingcontinent');?>
</p>
    </div>
   <?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('form_setting_module');?>

</div>

<?php echo '<script'; ?>
 type="text/javascript">
	$(document).ready(function(){
		$(".datepicker").datepicker();
	});
<?php echo '</script'; ?>
>
<?php }
}
