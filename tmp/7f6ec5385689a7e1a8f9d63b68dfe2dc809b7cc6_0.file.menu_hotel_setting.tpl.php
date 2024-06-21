<?php
/* Smarty version 3.1.38, created on 2024-04-08 14:39:48
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/blocks/menu_hotel_setting.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66139f44c3c406_42321593',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f6ec5385689a7e1a8f9d63b68dfe2dc809b7cc6' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/blocks/menu_hotel_setting.tpl',
      1 => 1696388253,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66139f44c3c406_42321593 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="menu_setting_box">
	<ul class="ul_menu_setting">
		<?php $_smarty_tpl->_assignInScope('lstProperty', $_smarty_tpl->tpl_vars['clsProperty']->value->getListType());?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lstProperty']->value, 'v', false, 'k');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
		<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'hotel','property','default',$_smarty_tpl->tpl_vars['k']->value)) {?>
		<li class="<?php if ($_smarty_tpl->tpl_vars['type']->value == $_smarty_tpl->tpl_vars['k']->value) {?>current<?php }?>">
			<a title="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=hotel&act=property&type=<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" >
				<span class="text"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</span>
			</a>
		</li>
		<?php }?>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'hotel','price_range','default')) {?>
		<li class="<?php if ($_smarty_tpl->tpl_vars['act']->value == 'price_range') {?>current<?php }?>">
			<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=hotel&act=price_range">
				<span class="text"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Price range');?>
</span>
			</a>
		</li>
        <?php }?>
		<li class="<?php if ($_smarty_tpl->tpl_vars['act']->value == 'setting') {?>current<?php }?>">
			<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=hotel&act=setting">
				<span class="text"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Module Setting');?>
</span>
			</a>
		</li>
	</ul>
</div><?php }
}
