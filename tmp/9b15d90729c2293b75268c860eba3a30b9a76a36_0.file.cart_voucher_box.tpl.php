<?php
/* Smarty version 3.1.38, created on 2024-04-09 13:55:02
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/cart_voucher_box.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6614e646b70220_05062089',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b15d90729c2293b75268c860eba3a30b9a76a36' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/cart_voucher_box.tpl',
      1 => 1696958448,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6614e646b70220_05062089 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/isocms/domains/isocms.com/public_html/inc/smarty3138/plugins/function.math.php','function'=>'smarty_function_math',),));
if ($_smarty_tpl->tpl_vars['cartSessionVoucher']->value) {?>
<label class="titleBoxContent"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Voucher');?>
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

<?php $_smarty_tpl->_assignInScope('voucher_id', $_smarty_tpl->tpl_vars['item']->value['voucher_id']);
if ($_smarty_tpl->tpl_vars['voucher_id']->value) {
$_smarty_tpl->_assignInScope('title_package', $_smarty_tpl->tpl_vars['clsVoucher']->value->getTitle($_smarty_tpl->tpl_vars['item']->value['voucher_id']));
$_smarty_tpl->_assignInScope('link_package', $_smarty_tpl->tpl_vars['clsVoucher']->value->getLink($_smarty_tpl->tpl_vars['item']->value['voucher_id']));
$_smarty_tpl->_assignInScope('price_package', $_smarty_tpl->tpl_vars['clsVoucher']->value->getPrice($_smarty_tpl->tpl_vars['item']->value['voucher_id']));
$_smarty_tpl->_assignInScope('price_voucher', $_smarty_tpl->tpl_vars['clsVoucher']->value->getPricePromotion2($_smarty_tpl->tpl_vars['item']->value['voucher_id']));
$_smarty_tpl->_assignInScope('priceO_voucher', $_smarty_tpl->tpl_vars['clsVoucher']->value->getPricePromotionO($_smarty_tpl->tpl_vars['item']->value['voucher_id']));
$_smarty_tpl->_assignInScope('priceO_package', $_smarty_tpl->tpl_vars['clsVoucher']->value->getPriceOrigin($_smarty_tpl->tpl_vars['item']->value['voucher_id']));?>


<?php $_smarty_tpl->_assignInScope('priceOld', $_smarty_tpl->tpl_vars['clsVoucher']->value->getPricePromotionO($_smarty_tpl->tpl_vars['voucher_id']->value));
$_smarty_tpl->_assignInScope('numberVoucher', $_smarty_tpl->tpl_vars['item']->value['number_voucher']);
echo smarty_function_math(array('assign'=>"PriceVoucher",'equation'=>"x * y",'x'=>$_smarty_tpl->tpl_vars['priceOld']->value,'y'=>$_smarty_tpl->tpl_vars['numberVoucher']->value),$_smarty_tpl);?>


<?php $_smarty_tpl->_assignInScope('getPromotion', $_smarty_tpl->tpl_vars['clsISO']->value->getPromotion($_smarty_tpl->tpl_vars['voucher_id']->value,'voucher',$_smarty_tpl->tpl_vars['time_now']->value,$_smarty_tpl->tpl_vars['time_now']->value,'get_infomation'));
if ($_smarty_tpl->tpl_vars['item']->value['discount_value']) {?>
	<?php if ($_smarty_tpl->tpl_vars['item']->value['discount_type'] == '1') {?>
		<?php echo smarty_function_math(array('assign'=>'pricePromotion','equation'=>"x - y",'x'=>$_smarty_tpl->tpl_vars['priceOld']->value,'y'=>$_smarty_tpl->tpl_vars['item']->value['discount_value']),$_smarty_tpl);?>

		<?php $_smarty_tpl->_assignInScope('priceDiscount', $_smarty_tpl->tpl_vars['item']->value['discount_value']);?>
	<?php } else { ?>
		<?php echo smarty_function_math(array('assign'=>'pricePromotion','equation'=>"x*(100 - y)/100",'x'=>$_smarty_tpl->tpl_vars['priceOld']->value,'y'=>$_smarty_tpl->tpl_vars['item']->value['discount_value']),$_smarty_tpl);?>

		<?php echo smarty_function_math(array('assign'=>'priceDiscount','equation'=>"x*y/100",'x'=>$_smarty_tpl->tpl_vars['priceOld']->value,'y'=>$_smarty_tpl->tpl_vars['item']->value['discount_value']),$_smarty_tpl);?>

	<?php }?>	
	<?php echo smarty_function_math(array('assign'=>"TotalPriceVoucher",'equation'=>"x * y",'x'=>$_smarty_tpl->tpl_vars['pricePromotion']->value,'y'=>$_smarty_tpl->tpl_vars['numberVoucher']->value),$_smarty_tpl);?>

<?php } else { ?>
	<?php $_smarty_tpl->_assignInScope('TotalPriceVoucher', $_smarty_tpl->tpl_vars['PriceVoucher']->value);
}?>

<div class="tour_item mb30">
	<div class="info_tour border_bottom_959595">
		<div class="body_hotel <?php echo $_smarty_tpl->tpl_vars['deviceType']->value;?>
">
			<div class="body_left">
				<span class="number_iteration"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_item']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_item']->value['iteration'] : null);?>
</span>
			</div>
			<div class="body_right">
				<h3 class="title mb10"><a href="<?php echo $_smarty_tpl->tpl_vars['link_package']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['title_package']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['title_package']->value;?>
</a></h3>
			</div>
		</div>
	</div>
	<div class="info_price">
		<?php if ($_smarty_tpl->tpl_vars['_LANG_ID']->value == 'vn') {?>
		<table class="table_price">
			<tbody>
				<?php $_smarty_tpl->_assignInScope('row_voucher', 2);?>
				<?php if ($_smarty_tpl->tpl_vars['item']->value['discount_value']) {?>
				<?php $_smarty_tpl->_assignInScope('row_voucher', $_smarty_tpl->tpl_vars['row_voucher']->value+1);?>
				<?php }?>
				<tr class="tr_label">
					<td class="td1" rowspan="<?php echo $_smarty_tpl->tpl_vars['row_voucher']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Voucher');?>
</td>
				</tr>
				<tr>
					<td class="td2"><?php echo $_smarty_tpl->tpl_vars['item']->value['number_voucher'];?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('ticket');?>
</td>
					<td class="td3 hidden_phone">x <?php echo $_smarty_tpl->tpl_vars['price_voucher']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</td>
					<td class="td4">
						
						<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['PriceVoucher']->value);?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>

					</td>
				</tr>
				<?php if ($_smarty_tpl->tpl_vars['item']->value['discount_value']) {?>
					<?php echo smarty_function_math(array('assign'=>"TotalDiscount",'equation'=>"(x - y) * z",'x'=>$_smarty_tpl->tpl_vars['priceOld']->value,'y'=>$_smarty_tpl->tpl_vars['pricePromotion']->value,'z'=>$_smarty_tpl->tpl_vars['numberVoucher']->value),$_smarty_tpl);?>

				<tr>
					<td class="td2"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Discount');?>
</td>
					<td class="td3 hidden_phone">
					
					<?php if ($_smarty_tpl->tpl_vars['item']->value['discount_type'] == '2') {?>
					<p class="color_1fb69a">-<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['item']->value['discount_value']);?>
%</p>

					<?php } elseif ($_smarty_tpl->tpl_vars['item']->value['discount_type'] == '1') {?>
						<?php if ($_smarty_tpl->tpl_vars['_LANG_ID']->value == 'vn') {?>
						<p class="color_1fb69a">-<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['item']->value['discount_value']);?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</p>
						<?php } else { ?>
						<p class="color_1fb69a">-<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();
echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['item']->value['discount_value']);?>
 </p>
						<?php }?>
					<?php }?>
					
					</td>
					<td class="td4">
						-<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['TotalDiscount']->value);?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>

					</td>
				</tr>
				<?php }?>
				<tr class="tr_total">
					<td class="td1"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Total');?>
</td>
					<td class="td2 hidden_phone"></td>
					<td class="td3 hidden_phone"></td>
					<td class="td4 td_total_price"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['TotalPriceVoucher']->value);?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</td>
				</tr>
			</tbody>
		</table>
		<?php } else { ?>
		<table class="table_price">
			<tbody>
				<?php $_smarty_tpl->_assignInScope('row_voucher', 2);?>
				<?php if ($_smarty_tpl->tpl_vars['item']->value['discount_value'] || $_smarty_tpl->tpl_vars['item']->value['discount_type']) {?>
				<?php $_smarty_tpl->_assignInScope('row_voucher', $_smarty_tpl->tpl_vars['row_voucher']->value+1);?>
				<?php }?>
				<tr class="tr_label">
					<td class="td1" rowspan="<?php echo $_smarty_tpl->tpl_vars['row_voucher']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Voucher');?>
</td>
				</tr>
				<tr>
					<td class="td2"><?php echo $_smarty_tpl->tpl_vars['item']->value['number_voucher'];?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('ticket');?>
</td>
					<td class="td3 hidden_phone">x <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();
echo $_smarty_tpl->tpl_vars['price_voucher']->value;?>
</td>
					<td class="td4">
						
						<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();
echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['PriceVoucher']->value);?>

					</td>
				</tr>
				<?php if ($_smarty_tpl->tpl_vars['item']->value['discount_value']) {?>
				<tr>
					<td class="td2"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Discount');?>
</td>
					<td class="td3 hidden_phone">
					
					<?php if ($_smarty_tpl->tpl_vars['item']->value['discount_type'] == '2') {?>
					<p class="color_1fb69a">-<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['item']->value['discount_value']);?>
%</p>

					<?php } elseif ($_smarty_tpl->tpl_vars['item']->value['discount_type'] == '1') {?>
						<?php if ($_smarty_tpl->tpl_vars['_LANG_ID']->value == 'vn') {?>
						<p class="color_1fb69a">-<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['item']->value['discount_value']);?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</p>
						<?php } else { ?>
						<p class="color_1fb69a">-<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();
echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['item']->value['discount_value']);?>
 </p>
						<?php }?>
					<?php }?>
					
					</td>
					<td class="td4">
						-<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();
echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['TotalDiscount']->value);?>

					</td>
				</tr>
				<?php }?>
				<tr class="tr_total">
					<td class="td1"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Total');?>
</td>
					<td class="td2 hidden_phone"></td>
					<td class="td3 hidden_phone"></td>
					<td class="td4 td_total_price"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();
echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['TotalPriceVoucher']->value);?>
</td>
				</tr>
			</tbody>
		</table>
		<?php }?>
	</div>
	<div class="info_function">
		<div class="info_function_left">
			<a  class="edit" href="<?php echo $_smarty_tpl->tpl_vars['clsVoucher']->value->getLink($_smarty_tpl->tpl_vars['item']->value['voucher_id']);?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Edit');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Edit');?>
</a>
			<a class="remove ajvCart" data-tp="DEL_VOUCHER" data-table_id="<?php echo $_smarty_tpl->tpl_vars['item']->value['voucher_id'];?>
" href="javascript:void(0);" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Delete');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Delete');?>
</a>
		</div>
	</div>
</div>
<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
