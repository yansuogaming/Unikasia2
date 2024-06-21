<?php
/* Smarty version 3.1.38, created on 2024-04-08 15:03:04
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/right_guide.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6613a4b8183fd0_56133498',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd310866170faad5d71dfa28a1d1326ddc5144996' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/right_guide.tpl',
      1 => 1701663480,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6613a4b8183fd0_56133498 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="sb__cat_guide mb30">	
	<?php if ($_smarty_tpl->tpl_vars['listGuideCat']->value) {?>
	<div class="destinationLink">
		<?php if ($_smarty_tpl->tpl_vars['_LANG_ID']->value == 'vn') {?>
		<p class="size21 text_bold mb10"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Travel Guide');?>
 <?php if ($_smarty_tpl->tpl_vars['show']->value == 'City') {
echo $_smarty_tpl->tpl_vars['clsCity']->value->getTitle($_smarty_tpl->tpl_vars['city_id']->value);
} else {
echo $_smarty_tpl->tpl_vars['clsCountryEx']->value->getTitle($_smarty_tpl->tpl_vars['country_id']->value);
}?> </p>
		<?php } else { ?>
		<p class="size21 text_bold mb10"><?php if ($_smarty_tpl->tpl_vars['show']->value == 'City') {
echo $_smarty_tpl->tpl_vars['clsCity']->value->getTitle($_smarty_tpl->tpl_vars['city_id']->value);
} else {
echo $_smarty_tpl->tpl_vars['clsCountryEx']->value->getTitle($_smarty_tpl->tpl_vars['country_id']->value);
}?> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Travel Guide');?>
</p>
		<?php }?>
		
		<ul>
		<?php
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listGuideCat']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total !== 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
		<?php if ($_smarty_tpl->tpl_vars['clsGuide']->value->countGuideGlobal($_smarty_tpl->tpl_vars['country_id']->value,$_smarty_tpl->tpl_vars['city_id']->value,$_smarty_tpl->tpl_vars['listGuideCat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['guidecat_id']) > 0) {?>
		<li <?php if ($_smarty_tpl->tpl_vars['guidecat_id']->value == $_smarty_tpl->tpl_vars['listGuideCat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['guidecat_id']) {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['clsGuideCat']->value->getLink($_smarty_tpl->tpl_vars['country_id']->value,$_smarty_tpl->tpl_vars['city_id']->value,$_smarty_tpl->tpl_vars['listGuideCat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['guidecat_id']);?>
" title="<?php echo $_smarty_tpl->tpl_vars['clsGuideCat']->value->getTitle($_smarty_tpl->tpl_vars['listGuideCat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['guidecat_id']);?>
"><?php echo $_smarty_tpl->tpl_vars['clsGuideCat']->value->getTitle($_smarty_tpl->tpl_vars['listGuideCat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['guidecat_id']);?>
</a></li>
		<?php }?>
		<?php
}
}
?>
		</ul>
	</div>
	<?php }?>
</div>	
<?php if ($_smarty_tpl->tpl_vars['listTourPlace']->value) {?>
<div class="related__Box">
	<p class="size30 mb20"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Tour Related');?>
</p>
	<?php
$__section_i_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listTourPlace']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_2_total = $__section_i_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_2_total !== 0) {
for ($__section_i_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_2_iteration <= $__section_i_2_total; $__section_i_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
	<?php $_smarty_tpl->_assignInScope('tour_related_id', $_smarty_tpl->tpl_vars['listTourPlace']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_id']);?>
    <?php $_smarty_tpl->_assignInScope('oneTour', $_smarty_tpl->tpl_vars['listTourPlace']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
    <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getBlock('box_item_tour_mobile',array("tour_id"=>$_smarty_tpl->tpl_vars['tour_related_id']->value,"oneTour"=>$_smarty_tpl->tpl_vars['oneTour']->value));?>

	<?php
}
}
?>
</div>
<?php }
}
}
