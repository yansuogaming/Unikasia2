<?php
/* Smarty version 3.1.38, created on 2024-04-09 13:55:02
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/cart_hotel_box.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6614e646c4a989_80095491',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'afaefb6378f1f8cc9b74eb7b4ed25c63a6332598' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/cart_hotel_box.tpl',
      1 => 1692266063,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6614e646c4a989_80095491 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['cartSessionHotel']->value) {?>
<label class="titleBoxContent"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Hotels');?>
</label>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cartSessionHotel']->value, 'item', false, 'k', 'item', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_item']->value['iteration']++;
$_smarty_tpl->_assignInScope('title_hotel', $_smarty_tpl->tpl_vars['clsHotel']->value->getTitle($_smarty_tpl->tpl_vars['k']->value));
$_smarty_tpl->_assignInScope('link_cruise', $_smarty_tpl->tpl_vars['clsHotel']->value->getLink($_smarty_tpl->tpl_vars['item']->value['hotel_id']));?>
<div class="tour_item hotel_item item_cart mb30">
	<div class="info_tour border_bottom_959595">
		<div class="body_hotel <?php echo $_smarty_tpl->tpl_vars['deviceType']->value;?>
">
			<div class="body_left">
				<span class="number_iteration"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_item']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_item']->value['iteration'] : null);?>
</span>
			</div>
			<div class="body_right">
				<h3 class="title mb0"><a href="<?php echo $_smarty_tpl->tpl_vars['link_cruise']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['title_hotel']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['title_hotel']->value;?>
 <img class="star" height="13" src="<?php echo $_smarty_tpl->tpl_vars['clsHotel']->value->getHotelStar($_smarty_tpl->tpl_vars['item']->value['hotel_id']);?>
" alt="star" style="width: auto" /></a></h3>
				<div class="address_hotel mb10"><i class="fa fa-map-marker"></i> <?php echo $_smarty_tpl->tpl_vars['clsHotel']->value->getAddress($_smarty_tpl->tpl_vars['item']->value['hotel_id']);?>
</div>
				<div class="departure_in4">
					<div class="depart_at">
						<p class="mb0"><b><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Check In');?>
</b>
						</p> 
						<p class="mb10">
						<span class="start_date"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->converTimeToText5($_smarty_tpl->tpl_vars['item']->value['check_in']);?>
</span></p> 
						 <span class="icon_cart"></span>
					</div>
					<div class="ends_at">
						<p class="mb0"><b><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Check Out');?>
</b> 
						</p>
						<p class="mb10"><span class="end_date"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->converTimeToText5($_smarty_tpl->tpl_vars['item']->value['check_out']);?>
</span></p>
					</div>
				</div>
				<?php $_smarty_tpl->_assignInScope('str_number_night', $_smarty_tpl->tpl_vars['item']->value['check_out']-$_smarty_tpl->tpl_vars['item']->value['check_in']);?>
				<div class="number_night">
					<?php if ($_smarty_tpl->tpl_vars['deviceType']->value != 'phone') {?>
					<p class="text_bold mb0"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Number Night');?>
</p>
					<?php if ($_smarty_tpl->tpl_vars['str_number_night']->value) {?>
					<p><?php echo $_smarty_tpl->tpl_vars['str_number_night']->value/86400;?>
</p>
					<?php } else { ?>
					<p>1</p>
					<?php }?>
					<?php } else { ?>
					<p class="text_bold mb0"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Number Night');?>
 <?php if ($_smarty_tpl->tpl_vars['str_number_night']->value) {?>
					<span><?php echo $_smarty_tpl->tpl_vars['str_number_night']->value/86400;?>
</span>
					<?php } else { ?>
					<span>1</span>
					<?php }?>
					</p>
					<?php }?>
				</div>
			</div>
		</div>
	</div>
	<div class="info_price">
		<?php $_smarty_tpl->_assignInScope('rowspan', count($_smarty_tpl->tpl_vars['item']->value['room']));?>
		<?php if ($_smarty_tpl->tpl_vars['_LANG_ID']->value == 'vn') {?>
		<table class="table_price">
			<tbody>
				<tr class="tr_label"><td class="td1" rowspan="<?php if ($_smarty_tpl->tpl_vars['item']->value['promotion'] > 0) {
echo $_smarty_tpl->tpl_vars['rowspan']->value+2;
} else {
echo $_smarty_tpl->tpl_vars['rowspan']->value+1;
}?>"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Room');?>
</td></tr>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['room'], 'value', false, 'hotel_room_id', 'cabin', array (
));
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['hotel_room_id']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
				<tr>
					
					<td class="td2"><?php echo $_smarty_tpl->tpl_vars['value']->value['number_room'];?>
 <?php echo $_smarty_tpl->tpl_vars['clsHotelRoom']->value->getTitle($_smarty_tpl->tpl_vars['hotel_room_id']->value);?>
</td>
					<td class="td3 hidden_phone">x <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['value']->value['totalprice']);?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</td>
					<td class="td4"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['value']->value['totalprice']*$_smarty_tpl->tpl_vars['value']->value['number_room']);?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</td>
				</tr>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php if ($_smarty_tpl->tpl_vars['item']->value['promotion'] > 0) {?>
					<?php if ($_smarty_tpl->tpl_vars['item']->value['discount_type'] == 2) {?>
						<tr class="promotion">
							<td class="td2"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Discount');?>
</td>
							<td class="td3 hidden_phone">-<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['item']->value['promotion']);?>
%</td>
							<td class="td4">-<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['item']->value['totalPricePromotionHotel']);?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</td>
						</tr>
					<?php } else { ?>
						<tr class="promotion">
							<td class="td2"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Discount');?>
</td>
							<td class="td3 hidden_phone">-<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['item']->value['promotion']);?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</td>
							<td class="td4">-<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['item']->value['totalPricePromotionHotel']);?>
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
					<td class="td4 td_total_price"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['item']->value['totalpriceRoom']);?>
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
if ($_smarty_tpl->tpl_vars['item']->value['promotion'] > 0) {
echo $_smarty_tpl->tpl_vars['rowspan']->value+2;
} else {
echo $_smarty_tpl->tpl_vars['rowspan']->value+1;
}
}?>"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Room');?>
</td></tr>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['room'], 'value', false, 'hotel_room_id', 'cabin', array (
));
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['hotel_room_id']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
				<tr>
					
					<td class="td2"><?php echo $_smarty_tpl->tpl_vars['value']->value['number_room'];?>
 <?php echo $_smarty_tpl->tpl_vars['clsHotelRoom']->value->getTitle($_smarty_tpl->tpl_vars['hotel_room_id']->value);?>
</td>
					<td class="td3"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();
echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['value']->value['totalprice']*$_smarty_tpl->tpl_vars['value']->value['number_room']);?>
</td>
					<td class="td4"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();
echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['value']->value['totalprice']*$_smarty_tpl->tpl_vars['value']->value['number_room']);?>
</td>
				</tr>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php if ($_smarty_tpl->tpl_vars['item']->value['promotion'] > 0) {?>
					<?php if ($_smarty_tpl->tpl_vars['item']->value['discount_type'] == 2) {?>
						<tr class="promotion">
							<td class="td2"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Discount');?>
</td>
							<td class="td3 hidden_phone">-<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['item']->value['promotion']);?>
%</td>
							<td class="td4">-<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();
echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['item']->value['totalPricePromotionHotel']);?>
 </td>
						</tr>
					<?php } else { ?>
						<tr class="promotion">
							<td class="td2"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Discount');?>
</td>
							<td class="td3 hidden_phone">-<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['item']->value['promotion']);?>
</td>
							<td class="td4">-<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['item']->value['totalPricePromotionHotel']);?>
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
					<td class="td4 td_total_price"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();
echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['item']->value['totalpriceRoom']);?>
</td>
				</tr>
			</tbody>
		</table>
		<?php }?>
		<div class="info_function">
			<div class="info_function_left">
				<a  class="edit" href="<?php echo $_smarty_tpl->tpl_vars['clsHotel']->value->getLink($_smarty_tpl->tpl_vars['item']->value['hotel_id']);?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Edit');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Edit');?>
</a>
				<a class="remove ajvCart" data-tp="DEL_HOTEL" data-table_id="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
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
