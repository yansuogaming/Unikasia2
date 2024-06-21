<?php
/* Smarty version 3.1.38, created on 2024-04-09 13:55:09
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/cart_cruise_pay_box.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6614e64d58d295_52920262',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ad1a05f3116ddcebdcbf253198119b1a2ff0a2b' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/cart_cruise_pay_box.tpl',
      1 => 1692263088,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6614e64d58d295_52920262 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['cartSessionCruise']->value) {?>
<label class="TitleBookingFinal"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cruise');?>
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
<div class="tour_item_book mb10">
	<div class="info_tour_item_book pd0">
		<div class="info_padding">
			<h3 class="title mb10"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_item']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_item']->value['iteration'] : null);?>
. <?php echo $_smarty_tpl->tpl_vars['title_cruise']->value;?>
</h3>
			<p class="departure_in4"><b><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Depart');?>
</b> <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->converTimeToText5($_smarty_tpl->tpl_vars['item']->value['departure_date']);?>
</p>
			<div class="line"></div>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['_LANG_ID']->value == 'vn') {?>
		<table class="table_booking_price">
			<tbody>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['cabin'], 'value', false, 'cruise_cabin_id', 'cabin', array (
));
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cruise_cabin_id']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
				<tr>
					<td class="td1"><?php echo $_smarty_tpl->tpl_vars['clsCruiseCabin']->value->getTitle($_smarty_tpl->tpl_vars['cruise_cabin_id']->value);?>
(<?php echo $_smarty_tpl->tpl_vars['value']->value['number_cabin'];?>
)</td>
					<td class="td2"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['value']->value['totalprice']);?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</td>
				</tr>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php if ($_smarty_tpl->tpl_vars['item']->value['promotion'] > 0) {?>
				<tr class="promotion">
					<td class="td1"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Discount');?>
</td>
					<td class="td2">-<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['item']->value['totalPricePromotionCruise']);?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</td>
				</tr>
				<?php }?>
				<tr class="tr_total">
					<td class="td1"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cruise Price');?>
</td>
					<td class="td2 td_total_price"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['item']->value['totalpriceCabin']);?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</td>
				</tr>
			</tbody>
		</table>
		<?php } else { ?>
		<table class="table_booking_price">
			<tbody>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['cabin'], 'value', false, 'cruise_cabin_id', 'cabin', array (
));
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cruise_cabin_id']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
				<tr>
					<td class="td1"><?php echo $_smarty_tpl->tpl_vars['clsCruiseCabin']->value->getTitle($_smarty_tpl->tpl_vars['cruise_cabin_id']->value);?>
(<?php echo $_smarty_tpl->tpl_vars['value']->value['number_cabin'];?>
)</td>
					<td class="td2"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();
echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['value']->value['totalprice']);?>
</td>
				</tr>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php if ($_smarty_tpl->tpl_vars['item']->value['promotion'] > 0) {?>
				<tr class="promotion">
					<td class="td1"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Discount');?>
</td>
					<td class="td2">-<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['item']->value['totalPricePromotionCruise']);?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</td>
				</tr>
				<?php }?>
				<tr class="tr_total">
					<td class="td1"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cruise Price');?>
</td>
					<td class="td2 td_total_price"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();
echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['item']->value['totalpriceCabin']);?>
</td>
				</tr>
			</tbody>
		</table>
		<?php }?>
	</div>
</div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
