<?php
/* Smarty version 3.1.38, created on 2024-04-10 16:52:34
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/member/my_booking.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66166162a28f04_87684327',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f51db917e99280881f0dc81f0fb49f82e07733be' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/member/my_booking.tpl',
      1 => 1667191231,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66166162a28f04_87684327 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="page_container">
	<nav class="breadcrumb-main  breadcrumb-cruise bg-default breadcrumb-more bg_fff">
		<div class="container">
			<ol class="breadcrumb hidden-xs mt0 bg_fff" itemscope itemtype="http://schema.org/BreadcrumbList">
				<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
					<a itemtype="http://schema.org/Thing" itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
">
						<span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Home');?>
</span></a>
					<meta itemprop="position" content="1" />
				</li>
				<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
					<a itemtype="http://schema.org/Thing" itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['curl']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('My Profile');?>
">
						<span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('My Profile');?>
</span></a>
					<meta itemprop="position" content="2" />
				</li>
			</ol>
		</div>
	</nav>
	<section id="contentPage" class="pageMyBooking pd40_0">
		<div class="container">
			<div class="content-info">
				<div class="row">
					<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('box_member_link');?>

					<div class="col-lg-9 col-xs-12 tabs_content pl0" id="lstTabs" style="border:0 !important">
						<div class="right-category">
							<ul class="nav nav-tabs custom-tabs">
								<li class="nav-link active" id="forthcoming-tab" data-bs-toggle="tab" data-bs-target="#forthcoming" type="button" role="tab" aria-controls="forthcoming" aria-selected="true"><a><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Sắp tới');?>
</a></li>
								<li class="nav-link" id="completed-tab" data-bs-toggle="tab" data-bs-target="#completed" type="button" role="tab" aria-controls="completed-tab" aria-selected="false"><a><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Hoàn tất');?>
</a></li>
								<li class="nav-link" id="cancelled-tab" data-bs-toggle="tab" data-bs-target="#cancelled" type="button" role="tab" aria-controls="cancelled-tab" aria-selected="false"><a><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Đã hủy');?>
</a></li>
							</ul>
						  	<div class="tab-content">
								<div id="forthcoming" class="tab-pane fade show active" role="tabpanel" aria-labelledby="forthcoming-tab">
									<?php if ($_smarty_tpl->tpl_vars['lstBooking']->value) {?>
									<?php
$__section_bk_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstBooking']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bk_0_total = $__section_bk_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bk'] = new Smarty_Variable(array());
if ($__section_bk_0_total !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_bk']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_bk']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_bk']->value['iteration'] <= $__section_bk_0_total; $_smarty_tpl->tpl_vars['__smarty_section_bk']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_bk']->value['index']++){
?>
									<div class="item_booking">
										<div class="infor_booking">
											<p class="text_bold size18"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Bookingg');?>
 <?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_bk']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_bk']->value['iteration'] : null);?>
</p>
											<p><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Booking ID');?>
 : <?php echo $_smarty_tpl->tpl_vars['lstBooking']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bk']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bk']->value['index'] : null)]['booking_code'];?>
</p>
											<p><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Booking date');?>
 : <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->converTimeToText5($_smarty_tpl->tpl_vars['lstBooking']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bk']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bk']->value['index'] : null)]['reg_date']);?>
 </p>
										</div>

											<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('cart_tour_box_my_booking');?>

											<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('cart_voucher_box_my_booking');?>

											<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('cart_cruise_box_my_booking');?>

											<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('cart_hotel_box_my_booking');?>

									</div>
									<?php
}
}
?>
									<?php } else { ?>
									<div class="row">
										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
											<div class="img-landmark">
												<img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/landmark.png">
											</div>
										</div>
										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
											<div class="title-forthcoming">
												<h2><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Chưa có gì ở đây - hãy đặt tour đầu tiên của bạn ngày hôm nay');?>
!</h2>
											</div>
										</div>
										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
											<div class="description-forthcoming">
												<h3><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Chọn từ hơn 100.000 Tour du lịch (đó là hơn 100.000 cách để kiếm tiền hoa hồng!) - từ các chuyến tham quan VIP,đến các vé tham quan phải xem,đến các trải nghiệm tuyệt vời');?>
.</h3>
											</div>
										</div>
										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
											<div class="btn-forthcoming">
												<a href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('search_tour');?>
" class="btn btn-custom btn_main" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Bắt đầu Booking');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Bắt đầu Booking');?>
 </a>
											</div>
										</div>
									</div>
									<?php }?>
								</div>
								<div id="completed" class="tab-pane fade" role="tabpanel" aria-labelledby="completed-tab">
									<?php if ($_smarty_tpl->tpl_vars['lstBookingTour']->value) {?>
										<?php
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstBookingTour']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] <= $__section_i_1_total; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
											<?php $_smarty_tpl->_assignInScope('CartStore', $_smarty_tpl->tpl_vars['clsBooking']->value->getCartStore($_smarty_tpl->tpl_vars['lstBookingTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['booking_id']));?>
											<div class="item_booking">
											<div class="infor_booking">
												<p class="text_bold size18"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Bookingg');?>
 <?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] : null);?>
</p>
												<p><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Booking ID');?>
 : <?php echo $_smarty_tpl->tpl_vars['lstBookingTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['booking_code'];?>
</p>
												<p><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Booking date');?>
 : <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->converTimeToText5($_smarty_tpl->tpl_vars['lstBookingTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reg_date']);?>
 </p>
											</div>
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CartStore']->value, 'item', false, 'key', 'item', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_item']->value['iteration']++;
?>
												<div class="package_book_box mb30">
													<?php $_smarty_tpl->_assignInScope('tour_id_z', $_smarty_tpl->tpl_vars['item']->value['tour_id_z']);?>
													<?php $_smarty_tpl->_assignInScope('title_package', $_smarty_tpl->tpl_vars['clsTour']->value->getTitle($_smarty_tpl->tpl_vars['tour_id_z']->value));?>
													<?php $_smarty_tpl->_assignInScope('departure_date', $_smarty_tpl->tpl_vars['clsISO']->value->getStrToTime($_smarty_tpl->tpl_vars['item']->value['check_in_book_z'],$_smarty_tpl->tpl_vars['tour_id_z']->value));?>
													<?php $_smarty_tpl->_assignInScope('end_date', $_smarty_tpl->tpl_vars['clsTour']->value->getEndDate($_smarty_tpl->tpl_vars['departure_date']->value,$_smarty_tpl->tpl_vars['tour_id_z']->value));?>
													<?php $_smarty_tpl->_assignInScope('number_adult', $_smarty_tpl->tpl_vars['item']->value['number_adults_z']);?>
													<?php $_smarty_tpl->_assignInScope('number_child', $_smarty_tpl->tpl_vars['item']->value['number_child_z']);?>
													<?php $_smarty_tpl->_assignInScope('number_infant', $_smarty_tpl->tpl_vars['item']->value['number_infants_z']);?>
													<?php $_smarty_tpl->_assignInScope('price_adult', $_smarty_tpl->tpl_vars['item']->value['total_price_adults']);?>
													<?php $_smarty_tpl->_assignInScope('price_child', $_smarty_tpl->tpl_vars['item']->value['total_price_child']);?>
													<?php $_smarty_tpl->_assignInScope('price_infant', $_smarty_tpl->tpl_vars['item']->value['total_price_infants']);?>
													<div class="tour_item mb30">
														<div class="info_tour border_bottom_959595">
															<div class="body_hotel <?php echo $_smarty_tpl->tpl_vars['deviceType']->value;?>
">
																<div class="body_left">
																	<span class="number_iteration"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_item']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_item']->value['iteration'] : null);?>
</span>
																</div>
																<div class="body_right">
																	<h3 class="title mb10"><a href="<?php echo $_smarty_tpl->tpl_vars['clsTour']->value->getLink($_smarty_tpl->tpl_vars['tour_id_z']->value);?>
" title="<?php echo $_smarty_tpl->tpl_vars['title_package']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['title_package']->value;?>
</a></h3>
																	<p class="duration"><?php echo $_smarty_tpl->tpl_vars['clsTour']->value->getLTripDuration($_smarty_tpl->tpl_vars['tour_id_z']->value);?>
</p>
																	<div class="departure_in4">
																		<p><b><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Depart at');?>
 <?php echo $_smarty_tpl->tpl_vars['clsTour']->value->getListDeparturePoint($_smarty_tpl->tpl_vars['tour_id_z']->value);?>
 </b> - <span class="start_date"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->converTimeToText5($_smarty_tpl->tpl_vars['departure_date']->value);?>
</span> <span class="icon_cart"></span></p> <p><b><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Kết thúc tại');?>
 <?php echo $_smarty_tpl->tpl_vars['clsTour']->value->getEndCityAround($_smarty_tpl->tpl_vars['tour_id_z']->value,1);?>
 </b> - <span class="end_date"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->converTimeToText5($_smarty_tpl->tpl_vars['end_date']->value);?>
</span></p></div>
																</div>
															</div>
														</div>
														<div class="info_price">
															<div class="price_customers">
																<div class="item_left_price">
																	<p class="customers mb40 text-bold"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Traveler');?>
</p>
																</div>
																<div class="item_center_price">
																	<div class="amount_of_people">
																		<p><?php echo $_smarty_tpl->tpl_vars['number_adult']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Adults');?>
</p>
																		<p><?php if ($_smarty_tpl->tpl_vars['number_child']->value > 0) {
echo $_smarty_tpl->tpl_vars['number_child']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Child');
}?></p>
																		<p><?php if ($_smarty_tpl->tpl_vars['number_infant']->value > 0) {
echo $_smarty_tpl->tpl_vars['number_infant']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Infant');
}?></p>
																		<?php if ($_smarty_tpl->tpl_vars['item']->value['promotion_z'] > 0) {?>
																			<p class="color_1fb69a"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Discount');?>
</p>
																		<?php }?>
																	</div>
																	<div class="unit_price">
																		<p><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['item']->value['price_adults_z']);?>
 <span class="size14 text-underline"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</span></p>
																		<p><?php if ($_smarty_tpl->tpl_vars['number_child']->value > 0) {?>x <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['item']->value['price_child_z']);?>
 <span class="size14 text-underline"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</span><?php }?></p>
																		<p><?php if ($_smarty_tpl->tpl_vars['number_infant']->value > 0) {?>x <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['item']->value['price_infants_z']);?>
 <span class="size14 text-underline"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</span><?php }?></p>
																		<?php if ($_smarty_tpl->tpl_vars['item']->value['promotion_z'] > 0) {?>
																			<p class="color_1fb69a">-<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['item']->value['promotion_z']);?>
%</p>
																		<?php }?>
																	</div>
																	<input type="hidden" name="number_of_guests" id="number_of_guests" value="">
																</div>
																<div class="item_right_price price_box">
																	<p><?php if ($_smarty_tpl->tpl_vars['price_adult']->value > 0) {
echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['price_adult']->value);?>
 <span class="size14 text-underline"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</span></p><?php }?></p>
																	<p><?php if ($_smarty_tpl->tpl_vars['price_child']->value > 0) {
echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['price_child']->value);?>
 <span class="size14 text-underline"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</span></p><?php }?></p>
																																		<?php if ($_smarty_tpl->tpl_vars['item']->value['promotion_z'] > 0) {?>
																		<p class="color_1fb69a price_promotion">-<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['item']->value['price_promotion']);?>
 <span class="size14 text-underline"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</span></p></p>
																	<?php }?>
																</div>
															</div>
															<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->checkEmptyArr($_smarty_tpl->tpl_vars['item']->value['number_addon'])) {?>
																<div class="price_service" sss="<?php echo $_smarty_tpl->tpl_vars['item']->value['number_addon'];?>
">
																	<div class="item_left_price_service">
																		<p class="customers text-bold"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Extra service');?>
</p>
																	</div>
																	<div class="item_center_price_service">

																		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['number_addon'], 'v', false, 'k');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
																			<?php if ($_smarty_tpl->tpl_vars['v']->value > 0) {?>
																				<div class="room_service_item">
																					<p><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['clsAddOnService']->value->getTitle($_smarty_tpl->tpl_vars['k']->value);?>
</p>
																				</div>
																			<?php }?>
																		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

																	</div>
																	<div class="item_right_price_service price_box">

																		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['number_addon'], 'v', false, 'k');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
																			<?php $_smarty_tpl->_assignInScope('price_service', $_smarty_tpl->tpl_vars['v']->value*$_smarty_tpl->tpl_vars['clsAddOnService']->value->getStrPrice($_smarty_tpl->tpl_vars['k']->value));?>
																			<?php if ($_smarty_tpl->tpl_vars['v']->value > 0) {?>
																				<?php if ($_smarty_tpl->tpl_vars['clsAddOnService']->value->getExtra($_smarty_tpl->tpl_vars['k']->value) == '0') {?>
																					<p class="price"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Free');?>
</p>
																																									<?php } else { ?>
																					<p class="price"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['price_service']->value);?>
 <span class="size14 text-underline"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
<span class="siz12"></span></span></p>
																				<?php }?>
																			<?php }?>
																		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

																	</div>
																</div>
															<?php }?>
														</div>
														<div class="last_price_total">
															<div class="total_price">
																<p><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Total');?>
</p>
																<div class="total_price_right size22"><b><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['item']->value['total_price_z']);?>
</b> <span class="text-underline size16"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</span></div>
															</div>

														</div>
														<?php if ($_smarty_tpl->tpl_vars['deviceType']->value == 'phone') {?>
															<?php if ($_smarty_tpl->tpl_vars['item']->value['deposit'] > 0) {?>
																<div class="price_deposite">
																	<p> <?php echo $_smarty_tpl->tpl_vars['item']->value['deposit'];?>
 % <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Deposit');?>
</p>
																	<div class="deposits">
																		<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['item']->value['price_deposit']);?>
 <span class="text-underline size16"> <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</span>
																	</div>
																</div>
															<?php }?>
															<div class="info_function phone">
																<div class="info_function_left">
																</div>
															</div>
														<?php } else { ?>
															<div class="info_function">
																<div class="info_function_left">
																</div>
																<?php if ($_smarty_tpl->tpl_vars['item']->value['deposit']) {?>
																	<div class="info_function_right">
																		<p> <?php echo $_smarty_tpl->tpl_vars['item']->value['deposit'];?>
 % <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Deposit');?>
</p>
																		<div class="deposits">
																			<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['item']->value['price_deposit']);?>
 <span class="text-underline size16"> <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</span>
																		</div>
																	</div>
																<?php }?>
															</div>
														<?php }?>
													</div>
												</div>
											<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										</div>
										<?php
}
}
?>
									<?php } else { ?>
									<div class="row">
										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
											<div class="img-landmark">
												<img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/landmark.png">
											</div>
										</div>
										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
											<div class="title-forthcoming">
												<h2><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Chưa có gì ở đây - hãy đặt tour đầu tiên của bạn ngày hôm nay');?>
!</h2>
											</div>
										</div>
										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
											<div class="description-forthcoming">
												<h3><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Chọn từ hơn 100.000 Tour du lịch (đó là hơn 100.000 cách để kiếm tiền hoa hồng!) - từ các chuyến tham quan VIP,đến các vé tham quan phải xem,đến các trải nghiệm tuyệt vời');?>
.</h3>
											</div>
										</div>
										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
											<div class="btn-forthcoming">
												<a href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('search_tour');?>
" class="btn btn-custom btn_main" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Bắt đầu Booking');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Bắt đầu Booking');?>
 </a>
											</div>
										</div>
									</div>
									<?php }?>
								</div>
								<div id="cancelled" class="tab-pane fade" role="tabpanel" aria-labelledby="cancelled-tab">
									<div class="row">
										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
											<div class="img-landmark">
												<img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/landmark.png">
											</div>
										</div>
										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
											<div class="title-forthcoming">
												<h2><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Chưa có gì ở đây - hãy đặt tour đầu tiên của bạn ngày hôm nay');?>
!</h2>
											</div>
										</div>
										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
											<div class="description-forthcoming">
												<h3><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Chọn từ hơn 100.000 Tour du lịch (đó là hơn 100.000 cách để kiếm tiền hoa hồng!) - từ các chuyến tham quan VIP,đến các vé tham quan phải xem,đến các trải nghiệm tuyệt vời');?>
.</h3>
											</div>
										</div>
										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
											<div class="btn-forthcoming">
												<a href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('search_tour');?>
" class="btn btn-custom btn_main" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Bắt đầu Booking');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Bắt đầu Booking');?>
 </a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div> 
				</div>
			</div>
		</div>
	</section>
</div>

	<?php echo '<script'; ?>
>
		$(document).ready(function(){
			$('.fileinput-exists').click(function(){
				$('.btn-update').show();
			});
			$('.it-head-iti').click(function(){
				$(this).find('.fa-dropdown').toggleClass('fa-angle-up');
				$(this).next().slideToggle();
			});
		});
	<?php echo '</script'; ?>
>

<?php }
}
