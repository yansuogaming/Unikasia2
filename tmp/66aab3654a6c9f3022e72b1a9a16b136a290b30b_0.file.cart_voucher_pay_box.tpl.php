<?php
/* Smarty version 3.1.38, created on 2024-04-09 13:55:09
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/cart_voucher_pay_box.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6614e64d53ae14_60349726',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66aab3654a6c9f3022e72b1a9a16b136a290b30b' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/cart_voucher_pay_box.tpl',
      1 => 1697261822,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6614e64d53ae14_60349726 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/isocms/domains/isocms.com/public_html/inc/smarty3138/plugins/function.math.php','function'=>'smarty_function_math',),));
if ($_smarty_tpl->tpl_vars['cartSessionVoucher']->value) {?>
<label class="TitleBookingFinal"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Voucher');?>
</label>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cartSessionVoucher']->value, 'item', false, NULL, 'item', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_item']->value['iteration']++;
?>
	<?php $_smarty_tpl->_assignInScope('voucher_id', $_smarty_tpl->tpl_vars['item']->value['voucher_id']);?>
	<?php $_smarty_tpl->_assignInScope('title_package', $_smarty_tpl->tpl_vars['clsVoucher']->value->getTitle($_smarty_tpl->tpl_vars['item']->value['voucher_id']));?>
	<?php $_smarty_tpl->_assignInScope('link_package', $_smarty_tpl->tpl_vars['clsVoucher']->value->getLink($_smarty_tpl->tpl_vars['item']->value['voucher_id']));?>
	<?php $_smarty_tpl->_assignInScope('price_package', $_smarty_tpl->tpl_vars['clsVoucher']->value->getPrice($_smarty_tpl->tpl_vars['item']->value['voucher_id']));?>
	<?php $_smarty_tpl->_assignInScope('priceO_package', $_smarty_tpl->tpl_vars['clsVoucher']->value->getPriceOrigin($_smarty_tpl->tpl_vars['item']->value['voucher_id']));?>
	<?php if ($_smarty_tpl->tpl_vars['voucher_id']->value) {?>
	<?php if ($_smarty_tpl->tpl_vars['_LANG_ID']->value == 'vn') {?>
	<div class="tour_item_book mb10">
		<div class="info_tour_item_book pd0">
			<div class="info_padding">
				<h3 class="title mb10"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_item']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_item']->value['iteration'] : null);?>
. <?php echo $_smarty_tpl->tpl_vars['title_package']->value;?>
</h3>
				<div class="line"></div>
			</div>
			<table class="table_booking_price">
				<tbody>
					<?php $_smarty_tpl->_assignInScope('numberVoucher', $_smarty_tpl->tpl_vars['item']->value['number_voucher']);?>
					<?php $_smarty_tpl->_assignInScope('voucher_price_z', $_smarty_tpl->tpl_vars['item']->value['voucher_price_z']);?>
					<?php echo smarty_function_math(array('assign'=>"TotalPriceVoucher",'equation'=>"x * y",'x'=>$_smarty_tpl->tpl_vars['voucher_price_z']->value,'y'=>$_smarty_tpl->tpl_vars['numberVoucher']->value),$_smarty_tpl);?>

					<tr>
						<td class="td1"><?php echo $_smarty_tpl->tpl_vars['numberVoucher']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('ticket');?>
</td>
						<td class="td2"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['TotalPriceVoucher']->value);?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</td>
					</tr>
					<?php if ($_smarty_tpl->tpl_vars['item']->value['discount_type']) {?>
					<tr>
						<td class="td1"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Discount');?>
</td>
						<?php if ($_smarty_tpl->tpl_vars['item']->value['discount_type'] == '2') {?>
							<?php echo smarty_function_math(array('assign'=>"price_promotion",'equation'=>"x*y/100",'x'=>$_smarty_tpl->tpl_vars['TotalPriceVoucher']->value,'y'=>$_smarty_tpl->tpl_vars['item']->value['discount_value']),$_smarty_tpl);?>

							<td class="td2">-<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['price_promotion']->value);?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</td>
						<?php } else { ?>
							<?php echo smarty_function_math(array('assign'=>"price_promotion",'equation'=>"x*y",'x'=>$_smarty_tpl->tpl_vars['numberVoucher']->value,'y'=>$_smarty_tpl->tpl_vars['item']->value['discount_value']),$_smarty_tpl);?>

							<td class="td2">-<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['price_promotion']->value);?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</td>
						<?php }?>
						<?php echo smarty_function_math(array('assign'=>"TotalPriceVoucher",'equation'=>"x - y",'x'=>$_smarty_tpl->tpl_vars['TotalPriceVoucher']->value,'y'=>$_smarty_tpl->tpl_vars['price_promotion']->value),$_smarty_tpl);?>

					</tr>
					<?php }?>
					<tr class="tr_total">
						<td class="td1"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Total Price Voucher');?>
</td>
						<td class="td2 td_total_price"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['TotalPriceVoucher']->value);?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<?php } else { ?>
	<div class="tour_item_book mb10">
		<div class="info_tour_item_book pd0">
			<div class="info_padding">
				<h3 class="title mb10"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_item']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_item']->value['iteration'] : null);?>
. <?php echo $_smarty_tpl->tpl_vars['title_package']->value;?>
</h3>
				<div class="line"></div>
			</div>
			<table class="table_booking_price">
				<tbody>
					<?php $_smarty_tpl->_assignInScope('numberVoucher', $_smarty_tpl->tpl_vars['item']->value['number_voucher']);?>
					<?php echo smarty_function_math(array('assign'=>"TotalPriceVoucher",'equation'=>"x * y",'x'=>$_smarty_tpl->tpl_vars['priceO_package']->value,'y'=>$_smarty_tpl->tpl_vars['numberVoucher']->value),$_smarty_tpl);?>

					<tr>
						<td class="td1"><?php echo $_smarty_tpl->tpl_vars['numberVoucher']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('ticket');?>
</td>
						<td class="td2"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();
echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['TotalPriceVoucher']->value);?>
</td>
					</tr>
					<?php if ($_smarty_tpl->tpl_vars['item']->value['promotion_z'] > 0) {?>
					<tr>
						<td class="td1"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Discount');?>
</td>
						<td class="td2">-<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();
echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['item']->value['price_promotion']);?>
</td>
					</tr>
					<?php }?>
					<tr class="tr_total">
						<td class="td1"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Total Price Voucher');?>
</td>
						<td class="td2 td_total_price"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();
echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['TotalPriceVoucher']->value);?>
</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<?php }?>
	<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
