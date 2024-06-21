<?php
/* Smarty version 3.1.38, created on 2024-04-08 14:37:18
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/relateCruise.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66139eae923eb3_63828770',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '333f4d9de1c23477f41a26909009e2fae10835b7' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/relateCruise.tpl',
      1 => 1698307961,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66139eae923eb3_63828770 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['lstCruiseOther']->value) {?>
<section class="section_box box_cruise_cd_related">
	<div class="container">
		<div class="headBox">
			<h2 class="title_cruise_box_detail"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Maybe you are interested');?>
</h2>
		</div>	
		<div class="owl-carousel owl-theme owl_slide_cruise_related mt30">
			<?php
$__section_i_9_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstCruiseOther']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_9_total = $__section_i_9_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_9_total !== 0) {
for ($__section_i_9_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_9_iteration <= $__section_i_9_total; $__section_i_9_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
				<?php $_smarty_tpl->_assignInScope('cruise_item_id', $_smarty_tpl->tpl_vars['lstCruiseOther']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_id']);?>
				<?php $_smarty_tpl->_assignInScope('arrCruise', $_smarty_tpl->tpl_vars['lstCruiseOther']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
				<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getBlock('box_item_cruise',array("cruise_item_id"=>$_smarty_tpl->tpl_vars['cruise_item_id']->value,"arrCruise"=>$_smarty_tpl->tpl_vars['arrCruise']->value));?>

			<?php
}
}
?>
		</div>
	</div>
</section>	
<?php }
}
}
