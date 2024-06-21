<?php
/* Smarty version 3.1.38, created on 2024-04-09 13:55:09
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/cart_price_pay_box.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6614e64d61e3b5_85444674',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9eb46d2888164891ce20b6cf5800b99a1ae42d8' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/cart_price_pay_box.tpl',
      1 => 1667457630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6614e64d61e3b5_85444674 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['_LANG_ID']->value == 'vn') {?>
<div class="last_price_total_book">
	<div class="total_price_book">
		<table class="table_total_price">
			<tbody>
				<?php if ($_smarty_tpl->tpl_vars['cartSessionService']->value) {?>
				<tr>
					<td class="td1"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Tour Price');?>
</td>
					<td  class="td2"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['totalPriceTour']->value);?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</td>
				</tr>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['cartSessionVoucher']->value) {?>
				<tr>
					<td  class="td1"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Voucher Price');?>
</td>
					<td  class="td2"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['totalPriceVoucher']->value);?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</td>
				</tr>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['cartSessionCruise']->value) {?>
				<tr>
					<td class="td1"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cruise Price');?>
</td>
					<td class="td2"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['totalPriceCruise']->value);?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</td>
				</tr>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['cartSessionHotel']->value) {?>
				<tr>
					<td class="td1"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Hotel Price');?>
</td>
					<td class="td2"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['totalPriceHotel']->value);?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</td>
				</tr>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['totalPriceDeposit']->value) {?>
				<tr>
					<td class="td1"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Deposit');?>
</td>
					<td class="td2"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['totalPriceDeposit']->value);?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</td>
				</tr>
				<?php }?>
				<tr>
					<td class="td1"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Payment remaining');?>
</td>
					<td class="td2"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['totalRemaining']->value);?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</td>
				</tr>
				<?php if ($_smarty_tpl->tpl_vars['totalPriceDeposit']->value) {?>
				<tr class="pay_now_text">
					<td class="td1"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('First payment');?>
</td>
					<td class="td2"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['totalPricePaymentNow']->value);?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</td>
				</tr>
				<?php } else { ?>
				<tr class="pay_now_text">
					<td class="td1"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Total Payment');?>
</td>
					<td class="td2"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['totalPricePaymentNow']->value);?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</td>
				</tr>
				<?php }?>
			</tbody>
		</table>
	</div>
</div>
<?php } else { ?>
<div class="last_price_total_book">
	<div class="total_price_book">
		<table class="table_total_price">
			<tbody>
				<?php if ($_smarty_tpl->tpl_vars['cartSessionService']->value) {?>
				<tr>
					<td class="td1"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Tour Price');?>
</td>
					<td  class="td2"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();
echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['totalPriceTour']->value);?>
</td>
				</tr>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['cartSessionVoucher']->value) {?>
				<tr>
					<td  class="td1"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Voucher Price');?>
</td>
					<td  class="td2"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();
echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['totalPriceVoucher']->value);?>
</td>
				</tr>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['cartSessionCruise']->value) {?>
				<tr>
					<td class="td1"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cruise Price');?>
</td>
					<td class="td2"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();
echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['totalPriceCruise']->value);?>
</td>
				</tr>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['cartSessionHotel']->value) {?>
				<tr>
					<td class="td1"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Hotel Price');?>
</td>
					<td class="td2"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();
echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['totalPriceHotel']->value);?>
</td>
				</tr>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['totalPriceDeposit']->value) {?>
				<tr>
					<td class="td1"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Deposit');?>
</td>
					<td class="td2"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();
echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['totalPriceDeposit']->value);?>
 </td>
				</tr>
				<?php }?>
				<tr>
					<td class="td1"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Payment remaining');?>
</td>
					<td class="td2"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();
echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['totalRemaining']->value);?>
 </td>
				</tr>
				<?php if ($_smarty_tpl->tpl_vars['totalPriceDeposit']->value) {?>
				<tr class="pay_now_text">
					<td class="td1"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('First payment');?>
</td>
					<td class="td2"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();
echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['totalPricePaymentNow']->value);?>
</td>
				</tr>
				<?php } else { ?>
				<tr class="pay_now_text">
					<td class="td1"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Total Payment');?>
</td>
					<td class="td2"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();
echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['totalPricePaymentNow']->value);?>
</td>
				</tr>
				<?php }?>
			</tbody>
		</table>
	</div>
</div>
<?php }?>

<div class="form-group BoxPromotion" style="display: none">
	<div class="input-group">
		<input type="text" name="promotion_code" id="promotion_code" class="form-control" placeholder="Nhập mã giảm giá">
		<div class="input-group-btn"><button type="button" onClick="apply_promotion_code(this)" class="btn btn-primary buttonDiscount">Áp dụng</button></div>
	</div>
	<span id="discount__code-message" class="help-block text-red hidden"></span>
</div>
<div style="display: none">
	<p><span class="lable"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Giảm giá ');?>
</span>
	<span id="discount__apply-result" class=" hidden">
	<span class="price tag"></span></span></p>
</div><?php }
}
