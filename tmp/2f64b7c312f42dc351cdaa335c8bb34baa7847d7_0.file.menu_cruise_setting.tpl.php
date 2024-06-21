<?php
/* Smarty version 3.1.38, created on 2024-04-08 13:11:09
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/blocks/menu_cruise_setting.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66138a7dbe8a80_34173101',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f64b7c312f42dc351cdaa335c8bb34baa7847d7' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/blocks/menu_cruise_setting.tpl',
      1 => 1709947504,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66138a7dbe8a80_34173101 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="menu_setting_box">
	<ul class="ul_menu_setting">
        <li class="<?php if ($_smarty_tpl->tpl_vars['act']->value == 'setting') {?>current<?php }?>">
			<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=cruise&act=setting">
				<span class="text"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Module Setting');?>
</span>
			</a>
		</li>
		<?php $_smarty_tpl->_assignInScope('lstCruiseType', $_smarty_tpl->tpl_vars['clsCruiseStore']->value->getListType());?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lstCruiseType']->value, 'v', false, 'k');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
		<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'property','default','default',$_smarty_tpl->tpl_vars['k']->value)) {?>
		<li class="<?php if ($_smarty_tpl->tpl_vars['type']->value == $_smarty_tpl->tpl_vars['k']->value) {?>current<?php }?>">
			<a title="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=cruise&act=liststore&type=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['k']->value);?>
" >
				<span class="text"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</span>
			</a>
		</li>
		<?php }?>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'promotionpro','default','default','Cruise')) {?>
		<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,$_smarty_tpl->tpl_vars['mod']->value,'store','default')) {?>
		<li class="<?php if ($_smarty_tpl->tpl_vars['act']->value == 'store') {?>current<?php }?>">
			<a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cruise store');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=cruise&act=store&type=Q1JVSVNFU1RPUkUtVmlldElTTw">
				<span class="text"> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cruise store');?>
</span>
			</a>
		</li>
		<li class="<?php if ($_smarty_tpl->tpl_vars['act']->value == 'promotion') {?>current<?php }?>">
			<a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Best Deals');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=cruise&act=promotion">
				<span class="text"> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Best Deals');?>
</span>
			</a>
		</li>

		<?php }?>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'cruise','service','default')) {?>
		<li class="<?php if ($_smarty_tpl->tpl_vars['act']->value == 'service') {?>current<?php }?>">
			<a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Transfer Services');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=service" >
				<span class="text"> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Transfer Services');?>
</span>
			</a>
		</li>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'cruise','cat','default')) {?>
		<li class="<?php if ($_smarty_tpl->tpl_vars['act']->value == 'cat') {?>current<?php }?>">
			<a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cruise Class');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=cruise&act=cat" >
				<span class="text"> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cruise Category');?>
</span>
			</a>
		</li>
		<?php }?>
		<?php $_smarty_tpl->_assignInScope('lstCruiseProperty', $_smarty_tpl->tpl_vars['clsCruiseProperty']->value->getListType());?>
		<?php if ($_smarty_tpl->tpl_vars['lstCruiseProperty']->value) {?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lstCruiseProperty']->value, 'v', false, 'k');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
		<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'cruise','property','default',$_smarty_tpl->tpl_vars['k']->value)) {?>
		<li class="<?php if ($_smarty_tpl->tpl_vars['act']->value == 'property' && $_smarty_tpl->tpl_vars['type']->value == $_smarty_tpl->tpl_vars['k']->value) {?>current<?php }?>">
			<a title="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=property&type=<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" >
				<span class="text"> <?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</span>
			</a>
		</li>
		<?php }?>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'cruise','childpolicy','default')) {?>
		<li class="<?php if ($_smarty_tpl->tpl_vars['act']->value == 'childpolicy') {?>current<?php }?>">
			<a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('chilpolicy');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=cruise&act=childpolicy" >
				<span class="text"> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('childpolicy');?>
</span>
			</a>
		</li>
		<?php }?>
		
	</ul>
</div><?php }
}
