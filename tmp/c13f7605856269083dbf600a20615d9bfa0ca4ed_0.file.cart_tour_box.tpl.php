<?php
/* Smarty version 3.1.38, created on 2024-04-09 13:55:02
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/cart_tour_box.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6614e646a9c3d8_54857055',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c13f7605856269083dbf600a20615d9bfa0ca4ed' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/cart_tour_box.tpl',
      1 => 1701406479,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6614e646a9c3d8_54857055 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['cartSessionService']->value) {?>
<label class="titleBoxContent"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Tour');?>
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
	<?php if ($_smarty_tpl->tpl_vars['tour_id']->value) {?>
	<?php $_smarty_tpl->_assignInScope('departure_date', $_smarty_tpl->tpl_vars['clsISO']->value->getStrToTime($_smarty_tpl->tpl_vars['item']->value['check_in_book_z']));?>
	<?php $_smarty_tpl->_assignInScope('end_date', $_smarty_tpl->tpl_vars['clsTour']->value->getEndDate($_smarty_tpl->tpl_vars['departure_date']->value,$_smarty_tpl->tpl_vars['tour_id']->value));?>
	<?php $_smarty_tpl->_assignInScope('title_package', $_smarty_tpl->tpl_vars['clsTour']->value->getTitle($_smarty_tpl->tpl_vars['item']->value['tour_id_z']));?>
	<?php $_smarty_tpl->_assignInScope('link_package', $_smarty_tpl->tpl_vars['clsTour']->value->getLink($_smarty_tpl->tpl_vars['item']->value['tour_id_z']));?>
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
					<p class="duration"><?php echo $_smarty_tpl->tpl_vars['clsTour']->value->getLTripDuration($_smarty_tpl->tpl_vars['tour_id']->value);?>
</p>
					<div class="departure_in4">
						<div class="depart_at">
							<p class="mb0"><b><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Depart at');?>
 <?php echo $_smarty_tpl->tpl_vars['clsTour']->value->getListDeparturePoint($_smarty_tpl->tpl_vars['tour_id']->value);?>
 </b>
							</p> 
							<p>
							<span class="start_date"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->converTimeToText5($_smarty_tpl->tpl_vars['departure_date']->value);?>
</span></p> 
							 <span class="icon_cart"></span>
						</div>
						<div class="ends_at">
							<p class="mb0"><b><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Ends at');?>
 <?php echo $_smarty_tpl->tpl_vars['clsTour']->value->getEndCityAround($_smarty_tpl->tpl_vars['tour_id']->value,1);?>
 </b> 
							</p>
							<p><span class="end_date"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->converTimeToText5($_smarty_tpl->tpl_vars['end_date']->value);?>
</span></p>
						</div>
					</div>
				</div>
			</div>
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
		<?php $_smarty_tpl->_assignInScope('number_of_guests', $_smarty_tpl->tpl_vars['number_adult']->value+$_smarty_tpl->tpl_vars['number_child']->value);?>
		
		<?php $_smarty_tpl->_assignInScope('row_traveler', 2);?>
		<?php if ($_smarty_tpl->tpl_vars['number_child']->value > 0) {?>	
			<?php $_smarty_tpl->_assignInScope('row_traveler', $_smarty_tpl->tpl_vars['row_traveler']->value+1);?>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['number_infant']->value > 0) {?>
		<?php $_smarty_tpl->_assignInScope('row_traveler', $_smarty_tpl->tpl_vars['row_traveler']->value+1);?>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['item']->value['promotion_z'] > 0) {?>
		<?php $_smarty_tpl->_assignInScope('row_traveler', $_smarty_tpl->tpl_vars['row_traveler']->value+1);?>
		<?php }?>
		<div class="info_price">
			<?php if ($_smarty_tpl->tpl_vars['_LANG_ID']->value == 'vn') {?>
			<table class="table_price">
				<tbody>
					<tr class="tr_label"><td class="td1" rowspan="<?php echo $_smarty_tpl->tpl_vars['row_traveler']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Traveler');?>
</td></tr>
					
					<tr>

						<td class="td2"><?php echo $_smarty_tpl->tpl_vars['number_adult']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Adults');?>
</td>
						<td class="td3 hidden_phone">x <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['item']->value['price_adults_z']);?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</td>
						<td class="td4"><?php if ($_smarty_tpl->tpl_vars['price_adult']->value > 0) {
echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['price_adult']->value);
}?> <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</td>
					</tr>
					<?php if ($_smarty_tpl->tpl_vars['number_child']->value > 0) {?>	
						<?php $_smarty_tpl->_assignInScope('arr_price_child', $_smarty_tpl->tpl_vars['item']->value['arr_price_child']);?>
						<tr>
							<td class="td2" colspan="2"><?php echo $_smarty_tpl->tpl_vars['number_child']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Child');?>
 
								<p class="mb0 fr">
									(<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['arr_price_child']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
									<span class="w_240 text_left"><?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null) > 0) {?>; <?php }
echo $_smarty_tpl->tpl_vars['arr_price_child']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['text'];?>
: <?php echo $_smarty_tpl->tpl_vars['arr_price_child']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['number'];?>
 x <?php echo number_format($_smarty_tpl->tpl_vars['arr_price_child']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['price'],0,".",",");?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
 </span>
								<?php
}
}
?>)
								</p>
								
							</td>
														<td class="td4"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['price_child']->value);?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</td>
						</tr>
						
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['number_infant']->value > 0) {?>
						<?php $_smarty_tpl->_assignInScope('arr_price_infant', $_smarty_tpl->tpl_vars['item']->value['arr_price_infant']);?>
						<tr>
							<td class="td2" colspan="2"><?php echo $_smarty_tpl->tpl_vars['number_infant']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Infant');?>
 
								<p class="mb0 fr">
								(<?php
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['arr_price_infant']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total !== 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
									<span class="w_240 text_left"><?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null) > 0) {?>; <?php }
echo $_smarty_tpl->tpl_vars['arr_price_infant']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['text'];?>
: <?php echo $_smarty_tpl->tpl_vars['arr_price_infant']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['number'];?>
 x <?php echo number_format($_smarty_tpl->tpl_vars['arr_price_infant']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['price'],0,".",",");?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
 </span>
								<?php
}
}
?>)
								</p>
							</td>
														<td class="td4"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['price_infant']->value);?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</td>
						</tr>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['item']->value['promotion_z'] > 0) {?>
						<?php if ($_smarty_tpl->tpl_vars['item']->value['discount_type'] == 2) {?>
							<tr class="promotion">
								<td class="td2"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Discount');?>
</td>
								<td class="td3 hidden_phone">-<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['item']->value['promotion_z']);?>
%</td>
								<td class="td4">-<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['item']->value['price_promotion']);?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</td>
							</tr>
						<?php } else { ?>
							<tr class="promotion">
								<td class="td2"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Discount');?>
</td>
								<td class="td3 hidden_phone">-<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['item']->value['promotion_z']);?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</td>
								<td class="td4">-<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['item']->value['price_promotion']);?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</td>
							</tr>
						<?php }?>
					
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['item']->value['number_addon'] > 0) {?>
					<?php $_smarty_tpl->_assignInScope('rows_addon', count($_smarty_tpl->tpl_vars['item']->value['number_addon']));?>
					<tr class="tr_addon1 tr_label"><td class="td1" rowspan="<?php echo $_smarty_tpl->tpl_vars['rows_addon']->value+1;?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Extra service');?>
</td></tr>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['number_addon'], 'v', false, 'k', 'addon', array (
));
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
					<?php if ($_smarty_tpl->tpl_vars['v']->value) {?>
					<tr class="tr_addon">

						<td class="td2"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['clsAddOnService']->value->getTitle($_smarty_tpl->tpl_vars['k']->value);?>
</td>
						<td class="td3 hidden_phone">
							<?php if ($_smarty_tpl->tpl_vars['clsAddOnService']->value->getExtra($_smarty_tpl->tpl_vars['k']->value) == '0') {?>
							<p class="price">0 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</p> 
							<?php } else { ?>
							<p class="price">x <?php echo $_smarty_tpl->tpl_vars['clsAddOnService']->value->getStrPrice($_smarty_tpl->tpl_vars['k']->value);?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</p>
							<?php }?>
						</td>
						<td class="td4">
							<?php $_smarty_tpl->_assignInScope('price_service', $_smarty_tpl->tpl_vars['v']->value*$_smarty_tpl->tpl_vars['clsAddOnService']->value->getStrPrice($_smarty_tpl->tpl_vars['k']->value));?>
							<?php if ($_smarty_tpl->tpl_vars['clsAddOnService']->value->getExtra($_smarty_tpl->tpl_vars['k']->value) == '0') {?>
							<p class="price">0 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</p> 
							<?php } else { ?>
							<p class="price"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['price_service']->value);?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</p>
							<?php }?>
						</td>
					</tr>
					<?php }?>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<?php }?>

					<tr class="tr_total">
						<td class="td1"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Total');?>
</td>
						<td class="td2 hidden_phone"></td>
						<td class="td3 hidden_phone"></td>
						<td class="td4 td_total_price"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['item']->value['total_price_z']);?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</td>
					</tr>
				</tbody>
			</table>
			<?php } else { ?>
			<table class="table_price">
				<tbody>
					<tr class="tr_label"><td class="td1" rowspan="<?php echo $_smarty_tpl->tpl_vars['row_traveler']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Traveler');?>
</td></tr>
					
					<tr>

						<td class="td2"><?php echo $_smarty_tpl->tpl_vars['number_adult']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Adults');?>
</td>
						<td class="td3 hidden_phone">x <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();
echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['item']->value['price_adults_z']);?>
</td>
						<td class="td4"><?php if ($_smarty_tpl->tpl_vars['price_adult']->value > 0) {
echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();
echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['price_adult']->value);
}?></td>
					</tr>
					<?php if ($_smarty_tpl->tpl_vars['number_child']->value > 0) {?>
						<?php $_smarty_tpl->_assignInScope('arr_price_child', $_smarty_tpl->tpl_vars['item']->value['arr_price_child']);?>
						<tr>
							<td class="td2" colspan="2"><?php echo $_smarty_tpl->tpl_vars['number_child']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Child');?>
 
								<p class="fr">
									(<?php
$__section_i_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['arr_price_child']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_2_total = $__section_i_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_2_total !== 0) {
for ($__section_i_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_2_iteration <= $__section_i_2_total; $__section_i_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
									<span class="w_240 text_left"><?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null) > 0) {?>; <?php }
echo $_smarty_tpl->tpl_vars['arr_price_child']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['text'];?>
: <?php echo $_smarty_tpl->tpl_vars['arr_price_child']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['number'];?>
 x <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();
echo number_format($_smarty_tpl->tpl_vars['arr_price_child']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['price'],0,".",",");?>
 </span>
								<?php
}
}
?>)
								</p>								
							</td>
														<td class="td4"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();
echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['price_child']->value);?>
</td>
						</tr>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['number_infant']->value > 0) {?>
						<?php $_smarty_tpl->_assignInScope('arr_price_infant', $_smarty_tpl->tpl_vars['item']->value['arr_price_infant']);?>
						<tr>
							<td class="td2" colspan="2"><?php echo $_smarty_tpl->tpl_vars['number_infant']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Infant');?>
 
								<p class="fr">
								(<?php
$__section_i_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['arr_price_infant']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_3_total = $__section_i_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_3_total !== 0) {
for ($__section_i_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_3_iteration <= $__section_i_3_total; $__section_i_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
									<span class="w_240 text_left"><?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null) > 0) {?>; <?php }
echo $_smarty_tpl->tpl_vars['arr_price_infant']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['text'];?>
: <?php echo $_smarty_tpl->tpl_vars['arr_price_infant']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['number'];?>
 x <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();
echo number_format($_smarty_tpl->tpl_vars['arr_price_infant']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['price'],0,".",",");?>
 </span>
								<?php
}
}
?>)
								</p>
							</td>
														<td class="td4"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();
echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['price_infant']->value);?>
</td>
						</tr>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['item']->value['promotion_z'] > 0) {?>
						<?php if ($_smarty_tpl->tpl_vars['item']->value['discount_type'] == 2) {?>
							<tr class="promotion">
								<td class="td2"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Discount');?>
</td>
								<td class="td3 hidden_phone">-<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();
echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['item']->value['promotion_z']);?>
%</td>
								<td class="td4">-<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();
echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['item']->value['price_promotion']);?>
</td>
							</tr>
						<?php } else { ?>
							<tr class="promotion">
								<td class="td2"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Discount');?>
</td>
								<td class="td3 hidden_phone">-<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();
echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['item']->value['promotion_z']);?>
</td>
								<td class="td4">-<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();
echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['item']->value['price_promotion']);?>
</td>
							</tr>
						<?php }?>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['item']->value['number_addon'] > 0) {?>
					<?php $_smarty_tpl->_assignInScope('rows_addon', count($_smarty_tpl->tpl_vars['item']->value['number_addon']));?>
					<tr class="tr_addon1 tr_label"><td class="td1" rowspan="<?php echo $_smarty_tpl->tpl_vars['rows_addon']->value+1;?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Extra service');?>
</td></tr>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['number_addon'], 'v', false, 'k', 'addon', array (
));
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
					<tr class="tr_addon">
						<td class="td2"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['clsAddOnService']->value->getTitle($_smarty_tpl->tpl_vars['k']->value);?>
</td>
						<td class="td3 hidden_phone">
							<?php if ($_smarty_tpl->tpl_vars['clsAddOnService']->value->getExtra($_smarty_tpl->tpl_vars['k']->value) == '0') {?>
							<p class="price">0</p> 
							<?php } else { ?>
							<p class="price">x <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();
echo $_smarty_tpl->tpl_vars['clsAddOnService']->value->getStrPrice($_smarty_tpl->tpl_vars['k']->value);?>
</p>
							<?php }?>
						</td>
						<td class="td4">
							<?php $_smarty_tpl->_assignInScope('price_service', $_smarty_tpl->tpl_vars['v']->value*$_smarty_tpl->tpl_vars['clsAddOnService']->value->getStrPrice($_smarty_tpl->tpl_vars['k']->value));?>
							<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>

							<?php if ($_smarty_tpl->tpl_vars['clsAddOnService']->value->getExtra($_smarty_tpl->tpl_vars['k']->value) == '0') {?>
							<p class="price">0</p> 
							<?php } else { ?>
							<p class="price"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['price_service']->value);?>
</p>
							<?php }?>
						</td>
					</tr>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<?php }?>

					<tr class="tr_total">
						<td class="td1"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Total');?>
</td>
						<td class="td2 hidden_phone"></td>
						<td class="td3 hidden_phone"></td>
						<td class="td4 td_total_price"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();
echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['item']->value['total_price_z']);?>
</td>
					</tr>
				</tbody>
			</table>
			<?php }?>
		</div>
		<div class="info_function">
			<div class="info_function_left">
				<a  class="edit" href="<?php echo $_smarty_tpl->tpl_vars['clsTour']->value->getLink($_smarty_tpl->tpl_vars['item']->value['tour_id_z']);?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Edit');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Edit');?>
</a>
				<a class="remove ajvCart" data-tp="DEL_PACKAGE" data-table_id="<?php echo $_smarty_tpl->tpl_vars['item']->value['tour_id_z'];?>
" href="javascript:void(0);" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Delete');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Delete');?>
</a>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['item']->value['deposit']) {?>
			<div class="info_function_right">
				<p> <?php echo $_smarty_tpl->tpl_vars['item']->value['deposit'];?>
 % <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Deposit');?>
</p>
				<?php if ($_smarty_tpl->tpl_vars['_LANG_ID']->value == 'vn') {?>
				<div class="deposits">
					<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['item']->value['price_deposit']);?>
 <span class="text-underline size16"> <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</span>
				</div>
				<?php } else { ?>
				<div class="deposits">
					<span class="text-underline size16"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</span><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['item']->value['price_deposit']);?>

				</div>
				<?php }?>
			</div>
			<?php }?>
		</div>
	</div>
	<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->_assignInScope('row_traveler', 0);
}
}
}
