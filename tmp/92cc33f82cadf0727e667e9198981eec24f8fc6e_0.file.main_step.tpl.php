<?php
/* Smarty version 3.1.38, created on 2024-04-11 08:11:36
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/member/main_step.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_661738c8157a44_97986202',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92cc33f82cadf0727e667e9198981eec24f8fc6e' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/member/main_step.tpl',
      1 => 1709780279,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661738c8157a44_97986202 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="post" accept-charset="UTF-8" enctype="multipart/form-data">
	<div class="box_main_step_content">
		<div class="row d-flex flex-wrap full-height">
			<div class="col-xs-12 col-sm-12 col-md-9">
				<div class="fill_data_box">
					<div class="form_title_and_table_code">
						<?php if ($_smarty_tpl->tpl_vars['currentstep']->value == 'image') {?>
						<?php $_smarty_tpl->_assignInScope('image_detail', 'image_member');?>
						<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('box_detail_image_avatar');?>

						<?php } elseif ($_smarty_tpl->tpl_vars['currentstep']->value == 'profile') {?>
						<h3 class="title_box"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Profile');?>
</h3>
						
						<div class="inpt_tour">
							<label for="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('First name');?>

														</label>
							<input class="text_32 full-width bold border_aaa title_capitalize" name="iso-first_name" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['first_name'];?>
" type="text" onClick="loadHelp(this)" />
							<div class="text_help" hidden=""><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['first_name_member']->value));?>
</div>
						</div>
						<div class="inpt_tour">
							<label for="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Last name');?>

														</label>
							<input class="text_32 full-width bold border_aaa title_capitalize" name="iso-last_name" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['last_name'];?>
" type="text" onClick="loadHelp(this)" />
							<div class="text_help" hidden=""><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['last_name_member']->value));?>
</div>
						</div>
						<div class="inpt_tour">
							<label for="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Email');?>

														</label>
							<input class="text_32 full-width bold border_aaa" name="iso-email" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['email'];?>
" type="email" onClick="loadHelp(this)" />
							<div class="text_help" hidden=""><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['email_member']->value));?>
</div>
						</div>
						<div class="inpt_tour">
							<label for="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Phone Number');?>

														</label>
							<input class="text_32 full-width bold border_aaa" name="iso-phone" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['phone'];?>
" type="text" onClick="loadHelp(this)" />
							<div class="text_help" hidden=""><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['phone_member']->value));?>
</div>
						</div>
						<div class="inpt_tour">
							<label for="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Organisation');?>

														</label>
							<input class="text_32 full-width bold border_aaa" name="organisation" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['organisation'];?>
" type="text" onClick="loadHelp(this)" />
							<div class="text_help" hidden=""><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['organisation_member']->value));?>
</div>
						</div>
						<div class="inpt_tour">
							<label for="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Address');?>

														</label>
							<input class="text_32 full-width bold border_aaa" name="iso-address" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['address'];?>
" type="text" onClick="loadHelp(this)" />
							<div class="text_help" hidden=""><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['address_member']->value));?>
</div>
						</div>
						<div class="inpt_tour">
							<label for="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Country');?>

														</label>
							<input class="text_32 full-width bold border_aaa" name="" value="" type="text" onClick="loadHelp(this)" />
							<div class="text_help" hidden=""><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['country_member']->value));?>
</div>
						</div>
						<div class="inpt_tour">
							<label for="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Postal code');?>

														</label>
							<input class="text_32 full-width bold border_aaa" name="iso-state" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['state'];?>
" type="text" onClick="loadHelp(this)" />
							<div class="text_help" hidden=""><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['postalCode_member']->value));?>
</div>
						</div>
						
						<?php } elseif ($_smarty_tpl->tpl_vars['currentstep']->value == 'booking') {?>
							<div class="inpt_tour">
								<h3 class="title_box"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Bookings');?>
</h3>
								<?php if ($_smarty_tpl->tpl_vars['totalBooking']->value > '0') {?>
									<?php if ($_smarty_tpl->tpl_vars['lstBookingHotel']->value) {?>
										<h3><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('List Hotel Booking');?>
</h3>
										<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstBookingHotel']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
											<?php $_smarty_tpl->_assignInScope('hotel_id', $_smarty_tpl->tpl_vars['clsBooking']->value->getServiceID($_smarty_tpl->tpl_vars['lstBookingHotel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['booking_id'],'hotel'));?>
											<div class="bookingItem">
												<div class="bookingTop">
													<div class="row">
														<div class="col-sm-3">
															<div class="pic_hotel hotel" <?php echo $_smarty_tpl->tpl_vars['hotel_id']->value;?>
>
																<img src="<?php echo $_smarty_tpl->tpl_vars['clsHotel']->value->getImage($_smarty_tpl->tpl_vars['hotel_id']->value,193,129);?>
" class="static" width="90" height="60" alt="<?php echo $_smarty_tpl->tpl_vars['clsHotel']->value->getTitle($_smarty_tpl->tpl_vars['hotel_id']->value);?>
" style="height: 60px; width: 90px;">
															</div>
														</div>
														<div class="col-sm-9">
															<div class="detail_hotel_booking">
																<p class="content_blue">
																	<b>
																		<a class="hotelLinks" href="<?php echo $_smarty_tpl->tpl_vars['clsHotel']->value->getLink($_smarty_tpl->tpl_vars['hotel_id']->value);?>
" title="<?php echo $_smarty_tpl->tpl_vars['clsHotel']->value->getTitle($_smarty_tpl->tpl_vars['hotel_id']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['clsHotel']->value->getTitle($_smarty_tpl->tpl_vars['hotel_id']->value);?>
</a>
																	</b>
																</p>
																<?php if ($_smarty_tpl->tpl_vars['clsHotel']->value->getAddress($_smarty_tpl->tpl_vars['hotel_id']->value) != '') {?>
																	<p class="address"><i class="fa fa-map-marker"></i> <?php echo $_smarty_tpl->tpl_vars['clsHotel']->value->getAddress($_smarty_tpl->tpl_vars['hotel_id']->value);?>
</p>
																<?php }?>
																<div class="clear">&nbsp;</div>
															</div>
														</div>
													</div>
												</div>
												<div class="clear"></div>
												<div class="allbox">
													<?php $_smarty_tpl->_assignInScope('Store_Hotel', $_smarty_tpl->tpl_vars['clsBooking']->value->getBookingValue($_smarty_tpl->tpl_vars['lstBookingHotel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['booking_id']));?>
													<div class="date_hotel_booking mb10">
														<p>
															<span class="date_hotel_on"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Booked on');?>
</span>
															<span class="date_hotel"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->converTimeToText($_smarty_tpl->tpl_vars['clsBooking']->value->getOneField('reg_date',$_smarty_tpl->tpl_vars['lstBookingHotel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['booking_id']));?>
</span>
														</p>
													</div>
													<div class="row">
														<div class="allbox_left col-sm-8">
															<p class="booking_left">
																<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Booking ID');?>

															</p>
															<p class="booking_right">
																<?php echo $_smarty_tpl->tpl_vars['clsBooking']->value->getOneField('booking_code',$_smarty_tpl->tpl_vars['lstBookingHotel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['booking_id']);?>

															</p>
															<div class="clear"></div>
															<p class="booking_left">
																<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Check-in');?>
:
															</p>
															<p class="booking_right">

																<span><?php echo $_smarty_tpl->tpl_vars['Store_Hotel']->value['checkin'];?>
</span>
															</p>
															<div class="clear"></div>
															<p class="booking_left">
																<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Check-out');?>
:
															</p>
															<p class="booking_right">
																<span><?php echo $_smarty_tpl->tpl_vars['Store_Hotel']->value['checkout'];?>
</span>
															</p>
															<div class="clear"></div>
														</div>
														<div class="allbox_right col-sm-4">
															<p>
																<span class="money_hotel"><?php echo $_smarty_tpl->tpl_vars['clsHotel']->value->getPrice($_smarty_tpl->tpl_vars['hotel_id']->value);?>
</span>
															</p>
															<div>
																<p class="text_conditions">
																	<span title="Any cancellation received within 1 day prior to arrival date will incur the first night charge. Failure to arrive at your hotel will be treated as a No-Show and will incur the first night charge (Hotel policy)."><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Booking Conditions');?>
 <i class="ficon ficon-10 ficon-hover-details"></i></span>
																</p>
															</div>
															<a class="fr mt10" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=viewbooking&booking_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['lstBookingHotel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['booking_id']);?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('View Booking');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('View Booking');?>
</a>
														</div>
													</div>
												</div>
											</div>
										<?php
}
}
?>
									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['lstBookingTour']->value) {?>
										<div class="cleafix mb30"></div>

										<h3><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('List Tour Booking');?>
</h3>
										<?php
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstBookingTour']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total !== 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>											
											<?php $_smarty_tpl->_assignInScope('cart_store_Tour', $_smarty_tpl->tpl_vars['clsBooking']->value->getCartStoreBooking($_smarty_tpl->tpl_vars['lstBookingTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['booking_id'],"TOUR"));?>
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart_store_Tour']->value, 'item', false, NULL, 'j', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
												<?php $_smarty_tpl->_assignInScope('tour_id', $_smarty_tpl->tpl_vars['item']->value['tour_id_z']);?>
												<?php if ($_smarty_tpl->tpl_vars['tour_id']->value > 0) {?>
												<?php $_smarty_tpl->_assignInScope('cityAround', $_smarty_tpl->tpl_vars['clsTour']->value->getLCityAround($_smarty_tpl->tpl_vars['tour_id']->value));?>
													<div class="bookingItem" <?php echo $_smarty_tpl->tpl_vars['lstBookingTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['booking_id'];?>
>
														<div class="bookingTop">
															<div class="row">
																<div class="col-sm-3">
																	<div class="pic_hotel tour" <?php echo $_smarty_tpl->tpl_vars['tour_id']->value;?>
>
																		<img src="<?php echo $_smarty_tpl->tpl_vars['clsTour']->value->getImage($_smarty_tpl->tpl_vars['tour_id']->value,193,129);?>
" class="static" width="90" height="60" alt="<?php echo $_smarty_tpl->tpl_vars['clsTour']->value->getTitle($_smarty_tpl->tpl_vars['tour_id']->value);?>
" onerror="this.src='<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/none_image.png';" style="height: 60px; width: 90px;">
																	</div>
																</div>
																<div class="col-sm-9">
																	<div class="detail_hotel_booking">
																		<p class="content_blue">
																			<b>
																				<a class="hotelLinks" href="<?php echo $_smarty_tpl->tpl_vars['clsTour']->value->getLink($_smarty_tpl->tpl_vars['tour_id']->value);?>
" title="<?php echo $_smarty_tpl->tpl_vars['clsTour']->value->getTitle($_smarty_tpl->tpl_vars['tour_id']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['clsTour']->value->getTitle($_smarty_tpl->tpl_vars['tour_id']->value);?>
</a>
																			</b>
																		</p>
																		<?php if ($_smarty_tpl->tpl_vars['cityAround']->value != '') {?>
																			<p class="address"><i class="fa fa-map-marker"></i> <?php echo $_smarty_tpl->tpl_vars['cityAround']->value;?>
</p>
																		<?php }?>
																		<div class="clear">&nbsp;</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="clear"></div>
														<div class="allbox">
															<?php $_smarty_tpl->_assignInScope('Store_Tour', $_smarty_tpl->tpl_vars['clsBooking']->value->getBookingValue($_smarty_tpl->tpl_vars['lstBookingTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['booking_id']));?>
															<div class="date_hotel_booking mb10">
																<p>
																	<span class="date_hotel_on"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Booked on');?>
</span>
																	<span class="date_hotel"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->converTimeToText($_smarty_tpl->tpl_vars['clsBooking']->value->getOneField('reg_date',$_smarty_tpl->tpl_vars['lstBookingTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['booking_id']));?>
</span>
																</p>
															</div>
															<div class="row">
																<div class="allbox_left col-sm-8">
																	<p class="booking_left">
																		<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Booking ID');?>

																	</p>
																	<p class="booking_right">
																		<?php echo $_smarty_tpl->tpl_vars['clsBooking']->value->getOneField('booking_code',$_smarty_tpl->tpl_vars['lstBookingTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['booking_id']);?>

																	</p>
																	<div class="clear"></div>
																	<p class="booking_left">
																		<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Check-in');?>
:
																	</p>
																	<p class="booking_right">
																		<span><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->converTimeToText7($_smarty_tpl->tpl_vars['item']->value['check_in_book_z'],$_smarty_tpl->tpl_vars['tour_id']->value);?>
</span>
																	</p>
																	<div class="clear"></div>
																	<p class="booking_left">
																		<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Check-out');?>
:
																	</p>
																	<p class="booking_right">
																		<span><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->converTimeToText5($_smarty_tpl->tpl_vars['clsTour']->value->getTextEndDate($_smarty_tpl->tpl_vars['item']->value['check_in_book_z'],$_smarty_tpl->tpl_vars['tour_id']->value));?>
</span>
																	</p>
																	<div class="clear"></div>
																</div>
																<div class="allbox_right col-sm-4">
																	<p>	
																		<?php if ($_smarty_tpl->tpl_vars['_LANG_ID']->value == 'vn') {?>
																		<span class="money_hotel"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->priceFormat($_smarty_tpl->tpl_vars['item']->value['total_price_z']);?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getRate();?>
</span>
																		<?php } else { ?>
																			<span class="money_hotel"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getRate();
echo $_smarty_tpl->tpl_vars['clsISO']->value->priceFormat($_smarty_tpl->tpl_vars['item']->value['total_price_z']);?>
</span>
																		<?php }?>
																	</p>
																	<div>
																		<p class="text_conditions">
																			<span title="Any cancellation received within 1 day prior to arrival date will incur the first night charge. Failure to arrive at your hotel will be treated as a No-Show and will incur the first night charge (Hotel policy)."><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Booking Conditions');?>
 <i class="ficon ficon-10 ficon-hover-details"></i></span>
																		</p>
																	</div>
																	<a class="fr mt10" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=booking&act=edit&booking_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['lstBookingTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['booking_id']);?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('View Booking');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('View Booking');?>
</a>
																</div>
															</div>
														</div>
													</div>
												<?php }?>
											<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										<?php
}
}
?>
									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['lstBookingCruise']->value) {?>
										<div class="cleafix mb30"></div>
										<h3><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('List Cruise Booking');?>
</h3>
										<?php
$__section_i_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstBookingCruise']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_2_total = $__section_i_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_2_total !== 0) {
for ($__section_i_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_2_iteration <= $__section_i_2_total; $__section_i_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
											<?php $_smarty_tpl->_assignInScope('cruise_id', $_smarty_tpl->tpl_vars['clsBooking']->value->getServiceID($_smarty_tpl->tpl_vars['lstBookingCruise']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['booking_id'],'cruise'));?>
											<div class="bookingItem">
												<div class="bookingTop">
													<div class="row">
														<div class="col-sm-3">
															<div class="pic_hotel cruise" <?php echo $_smarty_tpl->tpl_vars['cruise_id']->value;?>
>
																<img src="<?php echo $_smarty_tpl->tpl_vars['clsCruise']->value->getImage($_smarty_tpl->tpl_vars['cruise_id']->value,193,129);?>
" class="static" width="90" height="60" alt="<?php echo $_smarty_tpl->tpl_vars['clsCruise']->value->getTitle($_smarty_tpl->tpl_vars['cruise_id']->value);?>
" style="height: 60px; width: 90px;">
															</div>
														</div>
														<div class="col-sm-9">
															<div class="detail_hotel_booking">
																<p class="content_blue">
																	<b>
																		<a class="hotelLinks" href="<?php echo $_smarty_tpl->tpl_vars['clsCruise']->value->getLink($_smarty_tpl->tpl_vars['cruise_id']->value);?>
" title="<?php echo $_smarty_tpl->tpl_vars['clsCruise']->value->getTitle($_smarty_tpl->tpl_vars['cruise_id']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['clsCruise']->value->getTitle($_smarty_tpl->tpl_vars['cruise_id']->value);?>
</a>
																	</b>
																</p>
																<?php if ($_smarty_tpl->tpl_vars['clsCruise']->value->getCityAround($_smarty_tpl->tpl_vars['cruise_id']->value) != '') {?>
																	<p class="address"><i class="fa fa-map-marker"></i> <?php echo $_smarty_tpl->tpl_vars['clsCruise']->value->getCityAround($_smarty_tpl->tpl_vars['cruise_id']->value);?>
</p>
																<?php }?>
																<div class="clear">&nbsp;</div>
															</div>
														</div>
													</div>
												</div>
												<div class="clear"></div>
												<div class="allbox">
													<?php $_smarty_tpl->_assignInScope('Store_Cruise', $_smarty_tpl->tpl_vars['clsBooking']->value->getBookingValue($_smarty_tpl->tpl_vars['lstBookingCruise']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['booking_id']));?>
													<div class="date_hotel_booking mb10">
														<p>
															<span class="date_hotel_on"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Booked on');?>
</span>
															<span class="date_hotel"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->converTimeToText($_smarty_tpl->tpl_vars['clsBooking']->value->getOneField('reg_date',$_smarty_tpl->tpl_vars['lstBookingCruise']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['booking_id']));?>
</span>
														</p>
													</div>
													<div class="row">
														<div class="allbox_left col-sm-8">
															<p class="booking_left">
																<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Booking ID');?>

															</p>
															<p class="booking_right">
																<?php echo $_smarty_tpl->tpl_vars['clsBooking']->value->getOneField('booking_code',$_smarty_tpl->tpl_vars['lstBookingCruise']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['booking_id']);?>

															</p>
															<div class="clear"></div>
															<p class="booking_left">
																<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Check-in');?>
:
															</p>
															<p class="booking_right">
																<span><?php echo $_smarty_tpl->tpl_vars['Store_Cruise']->value['departure_date'];?>
</span>
															</p>
															<div class="clear"></div>
															<p class="booking_left">
																<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Check-out');?>
:
															</p>
															<p class="booking_right">
																<span><?php echo $_smarty_tpl->tpl_vars['clsBooking']->value->getOneField('check_out',$_smarty_tpl->tpl_vars['lstBookingCruise']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['booking_id']);?>
</span>
															</p>
															<div class="clear"></div>
															<p class="booking_left">
																<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cabin of name');?>
:
															</p>
															<p class="booking_right">
																<?php echo $_smarty_tpl->tpl_vars['clsCruiseCabin']->value->getTitle($_smarty_tpl->tpl_vars['Store_Cruise']->value['cruise_cabin_id']);?>

															</p>
															<div class="clear"></div>
															<p class="booking_left">
																<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Number of Cabin');?>

															</p>
															<p class="booking_right">
																<?php echo $_smarty_tpl->tpl_vars['Store_Cruise']->value['number_room'];?>

															</p>
															<div class="clear"></div>
														</div>
														<div class="allbox_right col-sm-4">
															<p>
																<span class="money_hotel"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getRate();?>
 <?php echo $_smarty_tpl->tpl_vars['Store_Cruise']->value['totalGrand'];?>
</span>
															</p>
															<div>
																<p class="text_conditions">
																	<span title="Any cancellation received within 1 day prior to arrival date will incur the first night charge. Failure to arrive at your hotel will be treated as a No-Show and will incur the first night charge (Hotel policy)."><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Booking Conditions');?>
 <i class="ficon ficon-10 ficon-hover-details"></i></span>
																</p>
															</div>
															<a class="fr mt10" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=viewbooking&booking_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['lstBookingCruise']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['booking_id']);?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('View Booking');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('View Booking');?>
</a>
														</div>
													</div>
												</div>
											</div>

										<?php
}
}
?>
									<?php }?>
								<?php } else { ?>
									<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('No Data!');?>

								<?php }?>
							</div>
						<?php } elseif ($_smarty_tpl->tpl_vars['currentstep']->value == 'reviewsPhoto') {?>
						<div class="inpt_tour">
							<h3 class="title_box"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Tour Reviews &amp; Photos');?>
</h3>						
							<?php if ($_smarty_tpl->tpl_vars['totalReviews']->value > '0') {?>
								<?php
$__section_i_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstReviewsTour']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_3_total = $__section_i_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_3_total !== 0) {
for ($__section_i_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_3_iteration <= $__section_i_3_total; $__section_i_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
									<div class="bookingItem">
										<div class="bookingTop">
											<div class="row">
												<div class="col-sm-3">
													<div class="pic_hotel">
														<img src="<?php echo $_smarty_tpl->tpl_vars['clsTour']->value->getImage($_smarty_tpl->tpl_vars['lstReviewsTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['table_id'],193,129);?>
" class="static" alt="<?php echo $_smarty_tpl->tpl_vars['clsTour']->value->getTitle($_smarty_tpl->tpl_vars['lstReviewsTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['table_id']);?>
"  width="100" height="66" style="height: 66px; width: 100px;">
													</div>
												</div>
												<div class="col-sm-7">
													<div class="detail_hotel_booking">
														<h3 class="content_blue">
															<a class="hotelLinks" href="<?php echo $_smarty_tpl->tpl_vars['clsTour']->value->getLink($_smarty_tpl->tpl_vars['lstReviewsTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['table_id']);?>
#Reviews<?php echo $_smarty_tpl->tpl_vars['lstReviewsTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['clsTour']->value->getTitle($_smarty_tpl->tpl_vars['lstReviewsTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['table_id']);?>
" target="blank"><?php echo $_smarty_tpl->tpl_vars['clsTour']->value->getTitle($_smarty_tpl->tpl_vars['lstReviewsTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['table_id']);?>
</a>
															<label class="rate-1"><?php echo $_smarty_tpl->tpl_vars['clsReviews']->value->getRatesStar($_smarty_tpl->tpl_vars['lstReviewsTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id']);?>
</label>
															<span  class="rates">(<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Rating');?>
: <?php echo $_smarty_tpl->tpl_vars['clsReviews']->value->getRates($_smarty_tpl->tpl_vars['lstReviewsTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id']);?>
)</span>
														</h3>
														<div class="intro"><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsReviews']->value->getContent($_smarty_tpl->tpl_vars['lstReviewsTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id']));?>
</div>
													</div>
												</div>
												<div class="col-sm-2">
													<?php if ($_smarty_tpl->tpl_vars['clsReviews']->value->getOneField('is_online',$_smarty_tpl->tpl_vars['lstReviewsTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id']) == 0) {?>
														<p class="text-center color_f00000"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Private');?>
</p>
													<?php } else { ?>
														<p class="text-center color_66ff00"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Public');?>
</p>
													<?php }?>
												</div>
											</div>
										</div>
									</div>
								<?php
}
}
?>
								<?php
$__section_i_4_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstReviewsHotel']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_4_total = $__section_i_4_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_4_total !== 0) {
for ($__section_i_4_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_4_iteration <= $__section_i_4_total; $__section_i_4_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
									<div class="bookingItem">
										<div class="bookingTop">
											<div class="row">
												<div class="col-sm-2">
													<div class="pic_hotel">
														<img src="<?php echo $_smarty_tpl->tpl_vars['clsHotel']->value->getImage($_smarty_tpl->tpl_vars['lstReviewsHotel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['table_id'],193,129);?>
" class="static" alt="<?php echo $_smarty_tpl->tpl_vars['clsHotel']->value->getTitle($_smarty_tpl->tpl_vars['lstReviewsHotel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['table_id']);?>
" width="100" height="66" style="height: 66px; width: 100px;">
													</div>
												</div>
												<div class="col-sm-8">
													<div class="detail_hotel_booking">
														<h3 class="content_blue">
															<a class="hotelLinks" href="<?php echo $_smarty_tpl->tpl_vars['clsHotel']->value->getLink($_smarty_tpl->tpl_vars['lstReviewsHotel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['table_id']);?>
#Reviews<?php echo $_smarty_tpl->tpl_vars['lstReviewsHotel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['clsHotel']->value->getTitle($_smarty_tpl->tpl_vars['lstReviewsHotel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['table_id']);?>
"><?php echo $_smarty_tpl->tpl_vars['clsHotel']->value->getTitle($_smarty_tpl->tpl_vars['lstReviewsHotel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['table_id']);?>
</a>
															<label class="rate-1"><?php echo $_smarty_tpl->tpl_vars['clsReviews']->value->getRatesStar($_smarty_tpl->tpl_vars['lstReviewsHotel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id']);?>
</label> <span  class="rates">(<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Rating');?>
: <?php echo $_smarty_tpl->tpl_vars['clsReviews']->value->getRates($_smarty_tpl->tpl_vars['lstReviewsHotel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id']);?>
)</span>
														</h3>
														<div class="intro"><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsReviews']->value->getContent($_smarty_tpl->tpl_vars['lstReviewsHotel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id']));?>
</div>
													</div>
												</div>
												<div class="col-sm-2">
													<?php if ($_smarty_tpl->tpl_vars['clsReviews']->value->getOneField('is_online',$_smarty_tpl->tpl_vars['lstReviewsHotel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id']) == 0) {?>
														<p class="text-center color_f00000"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Private');?>
</p>
													<?php } else { ?>
														<p class="text-center color_66ff00"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Public');?>
</p>
													<?php }?>
												</div>
											</div>
										</div>
									</div>
								<?php
}
}
?>
								<?php
$__section_i_5_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstReviewsCruise']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_5_total = $__section_i_5_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_5_total !== 0) {
for ($__section_i_5_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_5_iteration <= $__section_i_5_total; $__section_i_5_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
									<div class="bookingItem">
										<div class="bookingTop">
											<div class="row">
												<div class="col-sm-2">
													<div class="pic_hotel">
														<img src="<?php echo $_smarty_tpl->tpl_vars['clsCruise']->value->getImage($_smarty_tpl->tpl_vars['lstReviewsCruise']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['table_id'],193,129);?>
" class="static" alt="<?php echo $_smarty_tpl->tpl_vars['clsCruise']->value->getTitle($_smarty_tpl->tpl_vars['lstReviewsCruise']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['table_id']);?>
" width="100" height="66" style="height: 66px; width: 100px;">
													</div>
												</div>
												<div class="col-sm-8">
													<div class="detail_hotel_booking">
														<h3 class="content_blue">
															<a class="hotelLinks" href="<?php echo $_smarty_tpl->tpl_vars['clsCruise']->value->getLink($_smarty_tpl->tpl_vars['lstReviewsCruise']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['table_id']);?>
#Reviews<?php echo $_smarty_tpl->tpl_vars['lstReviewsCruise']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['clsCruise']->value->getTitle($_smarty_tpl->tpl_vars['lstReviewsCruise']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['table_id']);?>
"><?php echo $_smarty_tpl->tpl_vars['clsCruise']->value->getTitle($_smarty_tpl->tpl_vars['lstReviewsCruise']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['table_id']);?>
</a>
															<label class="rate-1"><?php echo $_smarty_tpl->tpl_vars['clsReviews']->value->getRatesStar($_smarty_tpl->tpl_vars['lstReviewsCruise']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id']);?>
</label> <span class="rates">(<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Rating');?>
: <?php echo $_smarty_tpl->tpl_vars['clsReviews']->value->getRates($_smarty_tpl->tpl_vars['lstReviewsCruise']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id']);?>
)</span>
														</h3>
														<div class="intro"><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsReviews']->value->getContent($_smarty_tpl->tpl_vars['lstReviewsCruise']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id']));?>
</div>
													</div>
												</div>
												<div class="col-sm-2">
													<?php if ($_smarty_tpl->tpl_vars['clsReviews']->value->getOneField('is_online',$_smarty_tpl->tpl_vars['lstReviewsCruise']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id']) == 0) {?>
														<p class="text-center color_f00000"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Private');?>
</p>
													<?php } else { ?>
														<p class="text-center color_66ff00"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Public');?>
</p>
													<?php }?>
												</div>
											</div>
										</div>
									</div>
								<?php
}
}
?>
							<?php } else { ?>
								<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('No Data!');?>

							<?php }?>
						</div>							
								
						<?php }?>
											</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-3 col_instruction">
				<div class="instruction_fill_data_box">
					<p class="title_box"><i class="fa fa-question-circle text-red " aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Instructions');?>
</p>
					<div class="content_box"><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['help_first']->value));?>
</div>
				</div>
			</div>
		</div>
	</div>
</form>

	<style type="text/css">
		.form-group{margin-bottom:10px;}
		.form-group label{width:150px; text-align:right; display: inline-block; line-height:32px}
		.form-group .col-right{width:300px;display: inline-block}
		.form-group input{width:100%; padding:0 10px; line-height:32px}
		.bookingItem {
			width: 100%;
			margin-top: 20px;
			position: relative;
			display: inline-block;
		}
		.detail_hotel_booking .content_blue {font-size: 15px}
		.detail_hotel_booking .content_blue .rates {display: block;margin: 4px 0}
		.bookingItem .col-sm-3{width:25%;float:left}
		.bookingItem .col-sm-9{width:75%;float:left}
		#tab_content .col-sm-9{width:75%;float:left}
		.bookingItem .col-sm-2{width:16.6%; display:inline-block; float:left}
		.bookingItem .col-sm-4{width:33.3%; display:inline-block; float:left}
		#tab_content .col-sm-6{width:50%;float:left}
		.bookingItem .col-sm-8{width:66.6%; display:inline-block; float:left}
		.col-sm-8{width:66.6%; display:inline-block; float:left}
		.allbox_right {
			text-align: right;
			position: relative;
		}
		.money_hotel {
			font-size: 16px;
			color: #000;
			font-weight: 700;
		}
		.date_hotel_booking{text-align:right}
		.allbox {
			width: 100%;
			padding: 12px 12px 16px;
			margin-top: 10px;
			background-color: #fcfcfc;
			border: 1px solid #ebebeb;
			height: auto;
		}
		.allbox p, .detail_hotel_booking p {
			margin-bottom: 0;
			margin-top: 0;
		}
		.address {
			font-size: 13px;
			color: #666;
		}
		.booking_left {
			text-align: right;
			width: 40%;
			margin-top: 5px;
			font-weight: 700;
			color: #000;
		}
		.booking_right {
			text-align: left;
			width: 55%;
			margin-left: 4%;
			color: #666;
		}
		.booking_left,
		.booking_right {
			position: relative;
			float: left;
			font-size: 13px;
			white-space: normal;
		}
		.text_conditions, .text_conditions span {
			font-size: 11px;
			color: #36B66F;
		}
		.allbox .manage_booking, .buttonconnect, .css3button, .css3button1 {
			border: 1px solid #2ca4fb;
			background-color: #2ca4fb;
		}
		.allbox .manage_booking, .button_loginemail, .buttonconnect, .css3button, .css3button1, .css3buttoncancel, .submit_reviews {
			color: #fff;
			cursor: pointer;
			text-align: center;
		}
		.allbox .manage_booking, .allbox .submit_reviews, .button_loginemail, .buttonconnect, .css3button, .css3button1, .css3buttoncancel {
			border-radius: 7px;
			-webkit-border-radius: 7px;
			-moz-border-radius: 7px;
		}
		.allbox .manage_booking {
			padding: 5px 15px;
		}
		.rate-1{padding:0}
		.rate-1, .rate-1 span {
			display: inline-block;
			width: 77px;
			height: 13px;
			background: url(/isocms/templates/default/skin/images/rate-1.png) repeat-x 0 -13px;
		}
		.rate-1 span {
			display: inline-block;
			background-position: 0 0;
		}
	</style>


<?php echo '<script'; ?>
>
if($('.textarea_intro_editor').length > 0){
	$('.textarea_intro_editor').each(function(){
		var $_this = $(this);
		var $editorID = $_this.attr('id');
		$('#'+$editorID).isoTextArea();
	});
}
	$('.toggle-row').click(function(){
		$(this).closest('tr').toggleClass('open_tr');
	});
<?php echo '</script'; ?>
>
<?php }
}
