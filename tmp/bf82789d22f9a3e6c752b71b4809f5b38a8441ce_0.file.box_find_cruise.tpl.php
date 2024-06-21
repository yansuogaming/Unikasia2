<?php
/* Smarty version 3.1.38, created on 2024-04-08 16:03:05
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/box_find_cruise.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6613b2c90ca374_21364081',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf82789d22f9a3e6c752b71b4809f5b38a8441ce' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/box_find_cruise.tpl',
      1 => 1709621877,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6613b2c90ca374_21364081 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="box_filter_cruise">
	<label for="" class="lbl_filter"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Filter');?>
:</label>
	<form action="" method="post" id="form_filter_cruise">
		<input type="hidden" value="filter_cruise" name="filter_cruise">
		<div class="box_form">
			<div class="form_input">
				<select class="slb" name="place">
					<option value=""><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Start from');?>
</option>
					<?php echo $_smarty_tpl->tpl_vars['clsCruiseItinerary']->value->getSelectTripAround($_smarty_tpl->tpl_vars['place']->value);?>

				</select>
				<i class="fa fa-angle-down" aria-hidden="true"></i>
			</div>
			<div class="form_input">
				<select class="slb" name="star_number">
					<option value=""><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Star rating');?>
</option>
					<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->makeSelectNumberStart(5,$_smarty_tpl->tpl_vars['star_number']->value);?>

				</select>
				<i class="fa fa-angle-down" aria-hidden="true"></i>
			</div> 
			<div class="form_input">
				<select class="find_select" name="price_range_ID" id="price_range_ID"> 
					<option value=""><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Price');?>
</option>
					<?php echo $_smarty_tpl->tpl_vars['clsCruisePriceRange']->value->getSelectPriceRange($_smarty_tpl->tpl_vars['price_range_ID']->value);?>

				</select>
				<i class="fa fa-angle-down" aria-hidden="true"></i>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['act']->value == 'default') {?>
				<div class="form_input">
					<select class="find_select" name="cat_ID" id="cat_ID"> 
						<option value=""><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Category Cruise');?>
</option>
						<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstCruiseCatSearch']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['lstCruiseCatSearch']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_cat_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['cat_ID']->value == $_smarty_tpl->tpl_vars['lstCruiseCatSearch']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_cat_id']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['lstCruiseCatSearch']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title'];?>
</option>
						<?php
}
}
?>
					</select>
					<i class="fa fa-angle-down" aria-hidden="true"></i>
				</div>
			<?php }?>
		</div>
	</form>
</div><?php }
}
