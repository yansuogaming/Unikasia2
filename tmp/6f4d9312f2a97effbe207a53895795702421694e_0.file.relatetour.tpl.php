<?php
/* Smarty version 3.1.38, created on 2024-04-08 14:11:18
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/relatetour.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66139896b197e7_78654082',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f4d9312f2a97effbe207a53895795702421694e' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/relatetour.tpl',
      1 => 1702452587,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66139896b197e7_78654082 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['lstTourRelated']->value) {?>
<section id="related__Box" class="related__Box">
    <div class="head__Box">
        <h2 class="title_headBox"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Related Tours');?>
</h2>
    </div>
	<div class="box_slider_tour">
		<div class="owl-carousel owl_carousel_4_item" >
			<?php
$__section_i_8_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstTourRelated']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_8_total = $__section_i_8_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_8_total !== 0) {
for ($__section_i_8_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_8_iteration <= $__section_i_8_total; $__section_i_8_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
			<?php $_smarty_tpl->_assignInScope('oneTour', $_smarty_tpl->tpl_vars['lstTourRelated']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
			<?php $_smarty_tpl->_assignInScope('tour__id', $_smarty_tpl->tpl_vars['lstTourRelated']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_id']);?>
			<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getBlock('box_item_tour_mobile',array("tour_id"=>$_smarty_tpl->tpl_vars['tour__id']->value,"oneTour"=>$_smarty_tpl->tpl_vars['oneTour']->value));?>

			<?php
}
}
?>
		</div>
	</div>
</div>
</section>
<?php }
}
}
