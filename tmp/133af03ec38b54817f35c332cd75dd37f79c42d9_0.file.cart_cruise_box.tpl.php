<?php
/* Smarty version 3.1.38, created on 2024-04-09 13:55:02
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/cart_cruise_box.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6614e646bd89f6_28336901',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '133af03ec38b54817f35c332cd75dd37f79c42d9' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/cart_cruise_box.tpl',
      1 => 1692260711,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6614e646bd89f6_28336901 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/isocms/domains/isocms.com/public_html/inc/smarty3138/plugins/function.math.php','function'=>'smarty_function_math',),));
if ($_smarty_tpl->tpl_vars['cartSessionCruise']->value) {?>
<label class="titleBoxContent"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cruise');?>
</label>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cartSessionCruise']->value, 'item', false, 'k', 'item', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_item']->value['iteration']++;
$_smarty_tpl->_assignInScope('title_cruise', $_smarty_tpl->tpl_vars['clsCruiseItinerary']->value->getTitleDay($_smarty_tpl->tpl_vars['k']->value));
$_smarty_tpl->_assignInScope('link_cruise', $_smarty_tpl->tpl_vars['clsCruise']->value->getLink($_smarty_tpl->tpl_vars['item']->value['cruise_id']));?>
<div class="tour_item cruise_itinerary_item item_cart mb30">
	<div class="info_tour border_bottom_959595">
		<div class="body_hotel <?php echo $_smarty_tpl->tpl_vars['deviceType']->value;?>
">
			<div class="body_left">
				<span class="number_iteration"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_item']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_item']->value['iteration'] : null);?>
</span>
			</div>
			<div class="body_right">
				<h3 class="title mb10"><a href="<?php echo $_smarty_tpl->tpl_vars['link_cruise']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['title_cruise']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['title_cruise']->value;?>
</a></h3>
								<div class="departure_in4">
					<div class="depart_at">
						<p class="mb0"><b><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Depart');?>
</b> <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->converTimeToText5($_smarty_tpl->tpl_vars['item']->value['departure_date']);?>
</p> 
						<p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="info_price">
		<?php $_smarty_tpl->_assignInScope('rowspan', count($_smarty_tpl->tpl_vars['item']->value['cabin']));?>
		<?php if ($_smarty_tpl->tpl_vars['_LANG_ID']->value == 'vn') {?>
		<table class="table_price">
			<tbody>
				<tr class="tr_label"><td class="td1" rowspan="<?php if ($_smarty_tpl->tpl_vars['item']->value['promotion'] > 0) {
echo $_smarty_tpl->tpl_vars['rowspan']->value+2;
} else {
echo $_smarty_tpl->tpl_vars['rowspan']->value+1;
}?>"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cabin');?>
</td></tr>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['cabin'], 'value', false, 'cruise_cabin_id', 'cabin', array (
));
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cruise_cabin_id']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
				<?php echo smarty_function_math(array('assign'=>"price_cabin",'equation'=>"x/y",'x'=>$_smarty_tpl->tpl_vars['value']->value['totalprice'],'y'=>$_smarty_tpl->tpl_vars['value']->value['number_cabin']),$_smarty_tpl);?>

				<tr>
					<td class="td2"><?php echo $_smarty_tpl->tpl_vars['value']->value['number_cabin'];?>
 <?php echo $_smarty_tpl->tpl_vars['clsCruiseCabin']->value->getTitle($_smarty_tpl->tpl_vars['cruise_cabin_id']->value);?>
</td>
					<td class="td3"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['price_cabin']->value);?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</td>
					<td class="td4"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['value']->value['totalprice']);?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</td>
				</tr>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php if ($_smarty_tpl->tpl_vars['item']->value['promotion'] > 0) {?>
					<?php if ($_smarty_tpl->tpl_vars['item']->value['discount_type'] == '2') {?>
						<tr class="promotion">
							<td class="td2"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Discount');?>
</td>
							<td class="td3 hidden_phone"><p class="color_1fb69a mb0">-<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['item']->value['promotion']);?>
%</p></td>
							<td class="td4">-<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['item']->value['totalPricePromotionCruise']);?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</td>
						</tr>
					<?php } else { ?>
						<tr class="promotion">
							<td class="td2"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Discount');?>
</td>
							<td class="td3 hidden_phone"><p class="color_1fb69a mb0">-<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['item']->value['promotion']);?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</p></td>
							<td class="td4">-<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['item']->value['totalPricePromotionCruise']);?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</td>
						</tr>
					<?php }?>
				<?php }?>
				<tr class="tr_total">
					<td class="td1"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Total');?>
</td>
					<td class="td2 hidden_phone"></td>
					<td class="td3 hidden_phone"></td>
					<td class="td4 td_total_price"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['item']->value['totalpriceCabin']);?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</td>
				</tr>
			</tbody>
		</table>
		<?php } else { ?>
		<table class="table_price">
			<tbody>
				<tr class="tr_label"><td class="td1" rowspan="<?php if ($_smarty_tpl->tpl_vars['item']->value['promotion'] > 0) {
echo $_smarty_tpl->tpl_vars['rowspan']->value+2;
} else {
echo $_smarty_tpl->tpl_vars['rowspan']->value+1;
}?>"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cabin');?>
</td></tr>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['cabin'], 'value', false, 'cruise_cabin_id', 'cabin', array (
));
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cruise_cabin_id']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
				<?php echo smarty_function_math(array('assign'=>"price_cabin",'equation'=>"x/y",'x'=>$_smarty_tpl->tpl_vars['value']->value['totalprice'],'y'=>$_smarty_tpl->tpl_vars['value']->value['number_cabin']),$_smarty_tpl);?>

				<tr>
					<td class="td2"><?php echo $_smarty_tpl->tpl_vars['value']->value['number_cabin'];?>
 <?php echo $_smarty_tpl->tpl_vars['clsCruiseCabin']->value->getTitle($_smarty_tpl->tpl_vars['cruise_cabin_id']->value);?>
</td>
					<td class="td3"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();
echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['price_cabin']->value);?>
</td>
					<td class="td4"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();
echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['value']->value['totalprice']);?>
</td>
				</tr>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php if ($_smarty_tpl->tpl_vars['item']->value['promotion'] > 0) {?>
					<?php if ($_smarty_tpl->tpl_vars['item']->value['discount_type'] == '2') {?>
						<tr class="promotion">
							<td class="td2"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Discount');?>
</td>
							<td class="td3 hidden_phone">-<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['item']->value['promotion']);?>
%</td>
							<td class="td4">-<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();
echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['item']->value['totalPricePromotionCruise']);?>
 </td>
						</tr>
					<?php } else { ?>
						<tr class="promotion">
							<td class="td2"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Discount');?>
</td>
							<td class="td3 hidden_phone">-<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();
echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['item']->value['promotion']);?>
%</td>
							<td class="td4">-<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();
echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['item']->value['totalPricePromotionCruise']);?>
 </td>
						</tr>
					<?php }?>
				<?php }?>
				<tr class="tr_total">
					<td class="td1"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Total');?>
</td>
					<td class="td2 hidden_phone"></td>
					<td class="td3 hidden_phone"></td>
					<td class="td4 td_total_price"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();
echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['item']->value['totalpriceCabin']);?>
</td>
				</tr>
			</tbody>
		</table>
		<?php }?>
		<div class="info_function">
			<div class="info_function_left">
				<a  class="edit" href="<?php echo $_smarty_tpl->tpl_vars['clsCruise']->value->getLink($_smarty_tpl->tpl_vars['item']->value['cruise_id']);?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Edit');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Edit');?>
</a>
				<a class="remove ajvCart"  data-tp="DEL_CRUISE" data-table_id="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" href="javascript:void(0);" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Delete');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Delete');?>
</a>
			</div>
		</div>
	</div>
</div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
