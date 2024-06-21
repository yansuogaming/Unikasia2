<?php
/* Smarty version 3.1.38, created on 2024-04-09 13:55:09
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/cart_tour_pay_box.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6614e64d4b7213_40518027',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc6abcd0a48f70106f8c5ed02969a4522ec5497d' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/cart_tour_pay_box.tpl',
      1 => 1701337739,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6614e64d4b7213_40518027 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['cartSessionService']->value) {?>
<label class="TitleBookingFinal"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Tour');?>
</label>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cartSessionService']->value, 'item', false, NULL, 'item', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_item']->value['iteration']++;
?>
	<?php $_smarty_tpl->_assignInScope('tour_id', $_smarty_tpl->tpl_vars['item']->value['tour_id_z']);?>
	<?php $_smarty_tpl->_assignInScope('departure_date', $_smarty_tpl->tpl_vars['clsISO']->value->getStrToTime($_smarty_tpl->tpl_vars['item']->value['check_in_book_z']));?>
	<?php $_smarty_tpl->_assignInScope('end_date', $_smarty_tpl->tpl_vars['clsTour']->value->getEndDate($_smarty_tpl->tpl_vars['departure_date']->value,$_smarty_tpl->tpl_vars['tour_id']->value));?>
	<?php $_smarty_tpl->_assignInScope('title_package', $_smarty_tpl->tpl_vars['clsTour']->value->getTitle($_smarty_tpl->tpl_vars['item']->value['tour_id_z']));?>
	<?php $_smarty_tpl->_assignInScope('link_package', $_smarty_tpl->tpl_vars['clsTour']->value->getLink($_smarty_tpl->tpl_vars['item']->value['tour_id_z']));?>
	<?php if ($_smarty_tpl->tpl_vars['tour_id']->value) {?>
	<div class="tour_item_book mb10">
		<div class="info_tour_item_book pd0">
			<div class="info_padding">
				<h3 class="title mb10"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_item']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_item']->value['iteration'] : null);?>
. <?php echo $_smarty_tpl->tpl_vars['title_package']->value;?>
(<?php echo $_smarty_tpl->tpl_vars['clsTour']->value->getLTripDuration($_smarty_tpl->tpl_vars['tour_id']->value);?>
)</h3>
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<p class="departure_in4"><b><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Depart at');?>
  </b></p>
						<p class="departure"><?php echo $_smarty_tpl->tpl_vars['clsTour']->value->getListDeparturePoint($_smarty_tpl->tpl_vars['tour_id']->value);?>
</p>
						<p class="start_date"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->converTimeToText5($_smarty_tpl->tpl_vars['departure_date']->value);?>
</p>
					</div>
					<div class="col-md-6 col-sm-6">
						 <p> <b><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Ends at');?>
 </b> </p>
						 <p class="departure"><?php echo $_smarty_tpl->tpl_vars['clsTour']->value->getEndCityAround($_smarty_tpl->tpl_vars['tour_id']->value,1);?>
</p>
						 <span class="end_date"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->converTimeToText5($_smarty_tpl->tpl_vars['end_date']->value);?>
</span>
					</div>
				</div>
				<div class="line"></div>
			</div>
			<?php $_smarty_tpl->_assignInScope('adult_visitor', ("national_visitor").($_smarty_tpl->tpl_vars['adult_type_id']->value));?>
			<?php $_smarty_tpl->_assignInScope('child_visitor', ("national_visitor").($_smarty_tpl->tpl_vars['child_type_id']->value));?>
			<?php $_smarty_tpl->_assignInScope('infant_visitor', ("national_visitor").($_smarty_tpl->tpl_vars['infant_type_id']->value));?>
			<?php $_smarty_tpl->_assignInScope('adult_price', ("people_price").($_smarty_tpl->tpl_vars['adult_type_id']->value));?>
			<?php $_smarty_tpl->_assignInScope('child_price', ("people_price").($_smarty_tpl->tpl_vars['child_type_id']->value));?>
			<?php $_smarty_tpl->_assignInScope('infant_price', ("people_price").($_smarty_tpl->tpl_vars['infant_type_id']->value));?>

			<?php $_smarty_tpl->_assignInScope('number_adult', $_smarty_tpl->tpl_vars['item']->value['number_adults_z']);?>
			<?php $_smarty_tpl->_assignInScope('number_child', $_smarty_tpl->tpl_vars['item']->value['number_child_z']);?>
			<?php $_smarty_tpl->_assignInScope('number_infant', $_smarty_tpl->tpl_vars['item']->value['number_infants_z']);?>

			<?php $_smarty_tpl->_assignInScope('price_adult', $_smarty_tpl->tpl_vars['item']->value['total_price_adults']);?>
			<?php $_smarty_tpl->_assignInScope('price_child', $_smarty_tpl->tpl_vars['item']->value['total_price_child']);?>
			<?php $_smarty_tpl->_assignInScope('price_infant', $_smarty_tpl->tpl_vars['item']->value['total_price_infants']);?>
			<?php $_smarty_tpl->_assignInScope('total_price_of_guests', $_smarty_tpl->tpl_vars['price_adult']->value+$_smarty_tpl->tpl_vars['price_child']->value+$_smarty_tpl->tpl_vars['price_infant']->value);?>
			<?php $_smarty_tpl->_assignInScope('number_of_guests', $_smarty_tpl->tpl_vars['number_adult']->value+$_smarty_tpl->tpl_vars['number_child']->value);?>
			<?php $_smarty_tpl->_assignInScope('tour_class_id', $_smarty_tpl->tpl_vars['item']->value['tour__class']);?>
			<?php if ($_smarty_tpl->tpl_vars['_LANG_ID']->value == 'vn') {?>
			
			<table class="table_booking_price">
				<tbody>
					<tr>
						<td class="td1"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Type of tour');?>
</td>
						<td class="td2"><?php echo $_smarty_tpl->tpl_vars['clsTourOption']->value->getTitle($_smarty_tpl->tpl_vars['tour_class_id']->value);?>
</td>
					</tr>
					
					<tr>
						<td class="td1"><?php echo $_smarty_tpl->tpl_vars['number_adult']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Adults');
if ($_smarty_tpl->tpl_vars['number_child']->value > 0) {?>, <?php echo $_smarty_tpl->tpl_vars['number_child']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Child');
}
if ($_smarty_tpl->tpl_vars['number_infant']->value > 0) {?>, <?php echo $_smarty_tpl->tpl_vars['number_infant']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Infant');
}?></td>
						<td class="td2"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['total_price_of_guests']->value);?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</td>
					</tr>
					<?php if ($_smarty_tpl->tpl_vars['item']->value['promotion_z'] > 0) {?>
					<tr class="promotion">
						<td class="td1"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Discount');?>
</td>
						<td class="td2">-<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['item']->value['price_promotion']);?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</td>
					</tr>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['item']->value['number_addon']) {?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['number_addon'], 'v', false, 'k');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
					<?php if ($_smarty_tpl->tpl_vars['v']->value > 0) {?>
					<tr class="tr_addon">
						<td class="td1"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['clsAddOnService']->value->getTitle($_smarty_tpl->tpl_vars['k']->value);?>
</td>
						<td class="td2">
							<?php $_smarty_tpl->_assignInScope('price_service', $_smarty_tpl->tpl_vars['v']->value*$_smarty_tpl->tpl_vars['clsAddOnService']->value->getStrPrice($_smarty_tpl->tpl_vars['k']->value));?>
							<?php if ($_smarty_tpl->tpl_vars['clsAddOnService']->value->getExtra($_smarty_tpl->tpl_vars['k']->value) == '0') {?>
							0 
							<?php } elseif ($_smarty_tpl->tpl_vars['clsAddOnService']->value->getExtra($_smarty_tpl->tpl_vars['k']->value) == '1') {?>
							<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['price_service']->value);?>
 
							<?php } else { ?>
							<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['price_service']->value);?>
 
							<?php }?>
							<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>

						</td>
					</tr>
					<?php }?>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<?php }?>
					<tr class="tr_total">
						<td class="td1"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Total Price');?>
</td>
						<td class="td2 td_total_price"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['item']->value['total_price_z']);?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</td>
					</tr>
					<?php if ($_smarty_tpl->tpl_vars['item']->value['price_deposit']) {?>
					<tr class="tr_deposit">
						<td class="td1"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Deposit');?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['deposit'];?>
 (%)</td>
						<td class="td2 td_total_price"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['item']->value['price_deposit']);?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</td>
					</tr>
					<?php }?>
				</tbody>
			</table>
			<?php } else { ?>
			<table class="table_booking_price">
				<tbody>
					<tr>
						<td class="td1"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Type of tour');?>
</td>
						<td class="td2"><?php echo $_smarty_tpl->tpl_vars['clsTourOption']->value->getTitle($_smarty_tpl->tpl_vars['tour_class_id']->value);?>
</td>
					</tr>
					
					<tr>
						<td class="td1"><?php echo $_smarty_tpl->tpl_vars['number_adult']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Adults');
if ($_smarty_tpl->tpl_vars['number_child']->value > 0) {?>, <?php echo $_smarty_tpl->tpl_vars['number_child']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Child');
}
if ($_smarty_tpl->tpl_vars['number_infant']->value > 0) {?>, <?php echo $_smarty_tpl->tpl_vars['number_infant']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Infant');
}?></td>
						<td class="td2"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();
echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['total_price_of_guests']->value);?>
</td>
					</tr>
					<?php if ($_smarty_tpl->tpl_vars['item']->value['promotion_z'] > 0) {?>
					<tr class="promotion">
						<td class="td1"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Discount');?>
</td>
						<td class="td2">-<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();
echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['item']->value['price_promotion']);?>
</td>
					</tr>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['item']->value['number_addon']) {?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['number_addon'], 'v', false, 'k');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
					<?php if ($_smarty_tpl->tpl_vars['v']->value > 0) {?>
					<tr class="tr_addon">
						<td class="td1"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['clsAddOnService']->value->getTitle($_smarty_tpl->tpl_vars['k']->value);?>
</td>
						<td class="td2">
							<?php $_smarty_tpl->_assignInScope('price_service', $_smarty_tpl->tpl_vars['v']->value*$_smarty_tpl->tpl_vars['clsAddOnService']->value->getStrPrice($_smarty_tpl->tpl_vars['k']->value));?>
							<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>

							<?php if ($_smarty_tpl->tpl_vars['clsAddOnService']->value->getExtra($_smarty_tpl->tpl_vars['k']->value) == '0') {?>
							0 
							<?php } elseif ($_smarty_tpl->tpl_vars['clsAddOnService']->value->getExtra($_smarty_tpl->tpl_vars['k']->value) == '1') {?>
							<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['price_service']->value);?>
 
							<?php } else { ?>
							<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['price_service']->value);?>
 
							<?php }?>
						</td>
					</tr>
					<?php }?>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<?php }?>
					<tr class="tr_total">
						<td class="td1"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Total Price');?>
</td>
						<td class="td2 td_total_price"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();
echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['item']->value['total_price_z']);?>
</td>
					</tr>
					<?php if ($_smarty_tpl->tpl_vars['item']->value['price_deposit']) {?>
					<tr class="tr_deposit">
						<td class="td1"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Deposit');?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['deposit'];?>
 (%)</td>
						<td class="td2 td_total_price"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();
echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['item']->value['price_deposit']);?>
</td>
					</tr>
					<?php }?>
				</tbody>
			</table>
			<?php }?>
		</div>
	</div>
	<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
