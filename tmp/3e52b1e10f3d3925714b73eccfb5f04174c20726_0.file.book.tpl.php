<?php
/* Smarty version 3.1.38, created on 2024-04-09 13:55:09
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/cart/book.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6614e64d23bc00_15690223',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e52b1e10f3d3925714b73eccfb5f04174c20726' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/cart/book.tpl',
      1 => 1701337802,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6614e64d23bc00_15690223 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="page_container" id="tour_page_container">
    <section id="booking" class="pd40_0 color_f9f9f9">
		<div class="container">
			<form action="" method="post" id="formBookingTour" class="formBookingTour">
				<h1 class="mb20 size35"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Payment details');?>
</h1>
				<div class="row">
					<div class="col-lg-8">
						<div class="box_infor_book">
							<p class="note size16"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Please do not ignore the information *');?>
</p>
							<?php if ($_smarty_tpl->tpl_vars['cartSessionService']->value || $_smarty_tpl->tpl_vars['cartSessionVoucher']->value || $_smarty_tpl->tpl_vars['cartSessionCruise']->value || $_smarty_tpl->tpl_vars['cartSessionHotel']->value) {?>
							<div class="boxMainInfor">
								<?php if ($_smarty_tpl->tpl_vars['err_msg']->value) {?>
								<div class="box-message_book">
									<?php echo $_smarty_tpl->tpl_vars['err_msg']->value;?>

								</div>
								<?php }?>
								<div class="box_contact_infor_book">
									
									<div class="box_infor_customer">
										<h3 class="size20 mb20"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Please enter contact information');?>
</h3>
										<div class="group-1 dp-flex">
											<div class="form-group">
												<label><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Title');?>
 <span style="color: red">*</span></label>
												<select id="title" name="title" class="form-booking_input find_select">
													<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->makeSelectTitle($_smarty_tpl->tpl_vars['title']->value);?>

												</select>
											</div>
											<div class="form-group full_name">
												<label><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Full Name');?>
 <span style="color: red">*</span></label>
												<input id="fullname" name="fullname" placeholder="" type="text" class="form-booking_input" value="<?php if ($_smarty_tpl->tpl_vars['fullname']->value) {
echo $_smarty_tpl->tpl_vars['fullname']->value;
} else {
echo $_smarty_tpl->tpl_vars['oneProfile']->value['full_name'];
}?>"/>
											</div>
											<div class="form-group birthday">
												<label><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Date of Birth');?>
</label>
												<input type="hidden" id="birthday">
											</div>
											
											<?php echo '<script'; ?>
>
											$(function(){
												$("#birthday").dateDropdowns({
													submitFieldName: 'birthday',
													minAge: 18,
													defaultDate: '<?php echo $_smarty_tpl->tpl_vars['birthday']->value;?>
'
												});
											});
											<?php echo '</script'; ?>
>
											
										</div>
										<div class="group-2 dp-flex">
											<div class="form-group telephone">
												<label><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Phone Number');?>
 <span style="color: red">*</span></label>
												<input id="telephone" name="telephone" placeholder="" type="text" class="form-booking_input" value="<?php if ($_smarty_tpl->tpl_vars['telephone']->value) {
echo $_smarty_tpl->tpl_vars['telephone']->value;
} else {
echo $_smarty_tpl->tpl_vars['oneProfile']->value['phone'];
}?>">
											</div>
											<div class="form-group email">
												<label><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Email');?>
 <span style="color: red">*</span></label>
												<input id="email" name="email" placeholder="" type="email" class="form-booking_input" value="<?php if ($_smarty_tpl->tpl_vars['email']->value) {
echo $_smarty_tpl->tpl_vars['email']->value;
} else {
echo $_smarty_tpl->tpl_vars['oneProfile']->value['email'];
}?>"/>
											</div>
										</div>

										<label><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Address');?>
</label>
										<div class="group-3 dp-flex">
											<div class="form-group list_city" style="display: none">
												<select name="country_id"  class="form-booking_input find_select">
													<?php echo $_smarty_tpl->tpl_vars['clsCountryBK']->value->getSelectByCountry($_smarty_tpl->tpl_vars['country_id']->value);?>

												</select>
											</div>
																						<div class="form-group address">
												<input name="address" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Enter your detailed address');?>
" type="text" class="required form-booking_input" value="<?php if ($_smarty_tpl->tpl_vars['address']->value) {
echo $_smarty_tpl->tpl_vars['address']->value;
} else {
echo $_smarty_tpl->tpl_vars['oneProfile']->value['address'];
}?>">
											</div>
										</div>
										<div class="form-group mb0">
											<label style="vertical-align:top"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Messager');?>
</label>
											<textarea rows="7" class="form-control" cols="50" name="note" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Enter your wish, request...');?>
"><?php echo $_smarty_tpl->tpl_vars['note']->value;?>
</textarea>
										</div>
									</div>
								</div>
							</div>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cartSessionService']->value, 'item', false, NULL, 'item', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
							<?php $_smarty_tpl->_assignInScope('tour_id_z', $_smarty_tpl->tpl_vars['item']->value['tour_id_z']);?>
							<?php if ($_smarty_tpl->tpl_vars['tour_id_z']->value) {?>
							<?php $_smarty_tpl->_assignInScope('title_package', $_smarty_tpl->tpl_vars['clsTour']->value->getTitle($_smarty_tpl->tpl_vars['item']->value['tour_id_z']));?>
							<?php $_smarty_tpl->_assignInScope('link_package', $_smarty_tpl->tpl_vars['clsTour']->value->getLink($_smarty_tpl->tpl_vars['item']->value['tour_id_z']));?>
							<?php $_smarty_tpl->_assignInScope('number_adult', $_smarty_tpl->tpl_vars['item']->value['number_adults_z']);?>
							<?php $_smarty_tpl->_assignInScope('number_child', $_smarty_tpl->tpl_vars['item']->value['number_child_z']);?>
							<?php $_smarty_tpl->_assignInScope('number_infant', $_smarty_tpl->tpl_vars['item']->value['number_infants_z']);?>
							<div class="boxMainInfor">
								<div class="box_contact_infor_book">
									<div class="box_infor_customer">
										<div class="box_info_traveller">
											<h3 class="size20 mb20"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Travelers information');?>
</h3>
											<div class="experience mb10">
											<span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Are you the one who experiences this tour?');?>
</span>
											<span class="radio_span">
												<input type="radio" class="ckh_experience" data-tour_id="<?php echo $_smarty_tpl->tpl_vars['tour_id_z']->value;?>
" name="experience_<?php echo $_smarty_tpl->tpl_vars['tour_id_z']->value;?>
" checked value="0">
												<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('No');?>

											</span>
											<span class="radio_span">
												<input type="radio" class="ckh_experience" data-tour_id="<?php echo $_smarty_tpl->tpl_vars['tour_id_z']->value;?>
" name="experience_<?php echo $_smarty_tpl->tpl_vars['tour_id_z']->value;?>
" value="1">
												<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Yes');?>

											</span>
											</div>
											<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['number_adult']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] <= $__section_i_0_total; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
											<?php $_smarty_tpl->_assignInScope('idx', (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] : null));?>
											<div class="ItemAddit">
												<p class="text_bold"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Customer');?>
 <?php echo $_smarty_tpl->tpl_vars['idx']->value;?>
</p>
												<div class="group-1 dp-flex">
													<div class="form-group">
														<label><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Title');?>
</label>
														<select id="title_adult_<?php echo $_smarty_tpl->tpl_vars['tour_id_z']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['idx']->value;?>
" name="title_adult_<?php echo $_smarty_tpl->tpl_vars['tour_id_z']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['idx']->value;?>
" class="form-booking_input find_select">
															<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->makeSelectTitle($_smarty_tpl->tpl_vars['title']->value);?>

														</select>
													</div>
													<div class="form-group full_name">
														<label><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Full Name');?>
</label>
														<input id="fullname_adult_<?php echo $_smarty_tpl->tpl_vars['tour_id_z']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['idx']->value;?>
" name="fullname_adult_<?php echo $_smarty_tpl->tpl_vars['tour_id_z']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['idx']->value;?>
" placeholder="" type="text" class="form-booking_input" value=""/>
													</div>
													<div class="form-group birthday birthday_2">
														<label><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Date of Birth');?>
</label>
														<input type="hidden" class="birthday" id="birthday_adult_<?php echo $_smarty_tpl->tpl_vars['tour_id_z']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['idx']->value;?>
">
													</div>
												</div>
											</div>
											
											<?php echo '<script'; ?>
>
											$(function(){
												$("#birthday_adult_<?php echo $_smarty_tpl->tpl_vars['tour_id_z']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['idx']->value;?>
").dateDropdowns({
													submitFieldName: 'birthday_adult_<?php echo $_smarty_tpl->tpl_vars['tour_id_z']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['idx']->value;?>
',
													minAge: 16,
													defaultDate: '1980-01-01'
												});
											});
											<?php echo '</script'; ?>
>
											
											<?php
}
}
?>
											<?php if ($_smarty_tpl->tpl_vars['number_child']->value) {?>
											<?php
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['number_child']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] <= $__section_i_1_total; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
											<?php $_smarty_tpl->_assignInScope('idx', (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] : null));?>
											<div class="ItemAddit">
												<p class="text_bold"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Children');?>
 <?php echo $_smarty_tpl->tpl_vars['idx']->value;?>
</p>
												<div class="group-1 dp-flex">
													<div class="form-group">
														<label><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Title');?>
 <span style="color: red">*</span></label>
														<select id="title_child_<?php echo $_smarty_tpl->tpl_vars['tour_id_z']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['idx']->value;?>
" name="title_child_<?php echo $_smarty_tpl->tpl_vars['tour_id_z']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['idx']->value;?>
" class="form-booking_input find_select">
															<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->makeSelectTitle($_smarty_tpl->tpl_vars['title']->value);?>

														</select>
													</div>
													<div class="form-group full_name">
														<label><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Full Name');?>
 <span style="color: red">*</span></label>
														<input id="fullname_child_<?php echo $_smarty_tpl->tpl_vars['tour_id_z']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['idx']->value;?>
" name="fullname_child_<?php echo $_smarty_tpl->tpl_vars['tour_id_z']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['idx']->value;?>
" placeholder="" type="text" class="form-booking_input" value="<?php echo $_smarty_tpl->tpl_vars['fullname']->value;?>
"/>
													</div>
													<div class="form-group birthday birthday_2">
														<label><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Date of Birth');?>
</label>
														<input type="hidden" class="birthday" id="birthday_child_<?php echo $_smarty_tpl->tpl_vars['tour_id_z']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['idx']->value;?>
">
													</div>
												</div>
											</div>
											
											<?php echo '<script'; ?>
>
											$(function(){
												$("#birthday_child_<?php echo $_smarty_tpl->tpl_vars['tour_id_z']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['idx']->value;?>
").dateDropdowns({
													submitFieldName: 'birthday_child_<?php echo $_smarty_tpl->tpl_vars['tour_id_z']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['idx']->value;?>
',
													minAge: 6,
													maxAge: 15,
													defaultDate: '2010-01-01'
												});
											});
											<?php echo '</script'; ?>
>
											
											<?php
}
}
?>
											<?php }?>
											<?php if ($_smarty_tpl->tpl_vars['number_infant']->value) {?>
											<?php
$__section_i_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['number_infant']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_2_total = $__section_i_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_2_total !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] <= $__section_i_2_total; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
											<?php $_smarty_tpl->_assignInScope('idx', (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] : null));?>
											<div class="ItemAddit">
												<p class="text_bold"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Infant');?>
 <?php echo $_smarty_tpl->tpl_vars['idx']->value;?>
</p>
												<div class="group-1 dp-flex">
													<div class="form-group">
														<label><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Title');?>
 <span style="color: red">*</span></label>
														<select id="title_infant_<?php echo $_smarty_tpl->tpl_vars['tour_id_z']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['idx']->value;?>
" name="title_infant_<?php echo $_smarty_tpl->tpl_vars['tour_id_z']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['idx']->value;?>
" class="form-booking_input find_select">
															<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->makeSelectTitle($_smarty_tpl->tpl_vars['title']->value);?>

														</select>
													</div>
													<div class="form-group full_name">
														<label><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Full Name');?>
 <span style="color: red">*</span></label>
														<input id="fullname_infant_<?php echo $_smarty_tpl->tpl_vars['tour_id_z']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['idx']->value;?>
" name="fullname_infant_<?php echo $_smarty_tpl->tpl_vars['tour_id_z']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['idx']->value;?>
" placeholder="" type="text" class="form-booking_input" value="<?php echo $_smarty_tpl->tpl_vars['fullname']->value;?>
"/>
													</div>
													<div class="form-group birthday birthday_2">
														<label><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Date of Birth');?>
</label>
														<input type="hidden" class="birthday" id="birthday_infant_<?php echo $_smarty_tpl->tpl_vars['tour_id_z']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['idx']->value;?>
">
													</div>
												</div>
											</div>
											
											<?php echo '<script'; ?>
>
											$(function(){
												$("#birthday_infant_<?php echo $_smarty_tpl->tpl_vars['tour_id_z']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['idx']->value;?>
").dateDropdowns({
													submitFieldName: 'birthday_infant_<?php echo $_smarty_tpl->tpl_vars['tour_id_z']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['idx']->value;?>
',
													maxAge: 4,
													defaultDate: '2019-01-01'
												});
											});
											<?php echo '</script'; ?>
>
											
											<?php
}
}
?>
											<?php }?>
										</div>
									</div>
								</div>
							</div>
							<?php }?>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							<?php }?>
						</div>
						<div class="billing_infomation mt20">
							<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getVar('PAYMENT_GLOBAL') == '1') {?>
								<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('pay_gateway_new');?>

							<?php }?>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="col_right_fixed" id="sidebar">
							<div class="amount_due">
								<label class="size18"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Amount due');?>
</label>
								<input type="hidden" name="price_total_book" id="price_total_book_post" value="<?php echo $_smarty_tpl->tpl_vars['totalGrand']->value;?>
" />
								<?php if ($_smarty_tpl->tpl_vars['_LANG_ID']->value == 'vn') {?>
								<span class="right"><span id="price_total_book" class="size22 PriceFinal"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['totalGrand']->value);?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</span></span>
								<?php } else { ?>
								<span class="right"><span id="price_total_book" class="size22 PriceFinal"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();
echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['totalGrand']->value);?>
</span></span>
								<?php }?>
							</div>
							<div class="info_tour_book pd20_991">
							<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('cart_tour_pay_box');?>

							<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('cart_voucher_pay_box');?>

							<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('cart_cruise_pay_box');?>

							<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('cart_hotel_pay_box');?>

							</div>
							<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('cart_price_pay_box');?>

							<div class="social_card">
								<p><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('We support via payment gateways');?>
:</p>
								<ul class="list_social_card">
									<li><img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/icon/payment.png" alt=""></li>
								</ul>
							</div>
							<div class="form-group clearfix col_right_bottom">
								<div class="_captcha">
									<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getVar('_ISOCMS_CAPTCHA') == 'IMG') {?>
									<div class="col-md-2 col-sm-2 col-xs-4">
										<input type="text" maxlength="5" id="security_code" name="security_code" style="float:left; width:100%; margin-right:5px; height:43px" class="form-control required" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Security code');?>
" />
										<div id="error_security" class="error_security"></div>
									</div>
									<div class="col-md-2 col-sm-2 col-xs-4 text-left">
										<img class="capcha_code" src="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/captcha.php?sid=<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
"  onclick="this.src='<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
captcha.php?'+Math.random()+'&sid=<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
';" width="80px" height="43px"  style="line-height:43px"/>
									</div>
									<?php } else { ?>
									<div class="g-recaptcha" data-sitekey="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getVar('reCAPTCHA_KEY');?>
"></div>
									<?php }?>
								</div> 
								<div class="btn-booking">
				                    <input type="hidden" name="totalFinal" class="totalFinal" value="<?php echo $_smarty_tpl->tpl_vars['totalPricePaymentNowFinal']->value;?>
">
                                    <input type="hidden" name="exchange_rate" id="exchange_rate" value="<?php echo $_smarty_tpl->tpl_vars['_EXCHANGE_RATE']->value;?>
" />
									<button class="btn-bookinggroup btn_main" type="submit">
										<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Payment');?>

									</button>
									<input type="hidden" name="booking" value="booking">
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</section>
</div>
<?php echo '<script'; ?>
 >
	var _LANG_ID = '<?php echo $_smarty_tpl->tpl_vars['_LANG_ID']->value;?>
';
	var adult_type_id = '<?php echo $_smarty_tpl->tpl_vars['adult_type_id']->value;?>
';
	var child_type_id = '<?php echo $_smarty_tpl->tpl_vars['child_type_id']->value;?>
';
	var infant_type_id = '<?php echo $_smarty_tpl->tpl_vars['infant_type_id']->value;?>
';
	var rate = '<?php echo $_smarty_tpl->tpl_vars['clsTour']->value->getTripPriceOrgin($_smarty_tpl->tpl_vars['tour_id']->value);?>
';
	var tour_id = '<?php echo $_smarty_tpl->tpl_vars['tour_id']->value;?>
';
	var price_adult = '';
	var price_child = '';
	var price_infant = '';
	var Input_data_is_invalid='<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Input data is invalid");?>
';
	var Select = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("Select");?>
';
	var Traveller = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("Traveller");?>
';
	var Title_optional = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("Title (optinal)");?>
';
	var optional = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("optional");?>
';
	var FullName = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("Full Name");?>
';
	var DateofBirth = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("Birthday");?>
';
	var Address = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("Address");?>
';
	var Female = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("Female");?>
';
	var Male = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("Male");?>
';
	var Gender = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("Gender");?>
';
	var Traveller_Type = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("Traveller Types");?>
'
	var adults = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("adults");?>
';
	var adult = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("adult");?>
';
	var Adult = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("Adult");?>
';
	var child = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("child");?>
';
	var Children = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("Children");?>
';
	var infant = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("infant");?>
';
	var Infant = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("Infant");?>
';
	var Mr = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("Mr");?>
';
	var Mrs = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("Mrs");?>
';
	var Ms = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("Ms");?>
';
	var Mss = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("Mss");?>
';
	var Dr = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("Dr");?>
';
	var Day = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("Day");?>
';
	var Month = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("Month");?>
';
	var Year = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("Year");?>
';
	var January = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("January");?>
'
	var February = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("February");?>
';
	var March = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("March");?>
';
	var April = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("April");?>
';
	var May = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("May");?>
';
	var June = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("June");?>
';
	var July = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("July");?>
';
	var August = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("August");?>
';
	var September = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("September");?>
';
	var October = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("October");?>
';
	var November = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("November");?>
';
	var December = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("December");?>
';
	var Jan = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("Jan");?>
'
	var Feb = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("Feb");?>
';
	var Mar = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("Mar");?>
';
	var Apr = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("Apr");?>
';
	var May = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("May");?>
';
	var Jun = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("Jun");?>
';
	var Jul = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("Jul");?>
';
	var Aug = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("Aug");?>
';
	var Sep = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("Sep");?>
';
	var Oct = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("Oct");?>
';
	var Nov = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("Nov");?>
';
	var Dec = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("Dec");?>
';
	var For = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("For");?>
';
	var loading = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("loading");?>
';
	var promotion_check = '<?php echo $_smarty_tpl->tpl_vars['promotion']->value;?>
';
	var ONEPAY_Surcharge = '<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue("ONEPAY_Surcharge");?>
';
	var ONEPAY_Visa_Surcharge = '<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue("ONEPAY_Visa_Surcharge");?>
';
	var ONEPAY_American_Express_Surcharge = '<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue("ONEPAY_American_Express_Surcharge");?>
';
	var Paypal_Surcharge = '<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue("Paypal_Surcharge");?>
';
	var nd = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("nd");?>
';
	var rd = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("rd");?>
';
	var th = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("th");?>
';
	var st = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("st");?>
';
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
  src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/datepicker/jquery.date-dropdowns.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
	function apply_promotion_code(_this){
		var promotion_code = $('#'+'promotion_code').val();
			var $_adata = {'promotion_code':promotion_code};
			$(_this).text('Loading...');
			$.post(path_ajax_script+'/index.php?mod=cart&act=get_promotion&lang='+LANG_ID, $_adata, function(html){
				$(_this).text('Áp dụng');
				var tmp = html.split('|||');
				if(html.indexOf('_success') >= 0){
					$('#discount__code-message').addClass('hidden');
					$('#discount__apply-result').removeClass('hidden').html(tmp[1]);
					$('.PriceFinal').html(tmp[2]);
					$('#price_total_book_post').val(tmp[3]);
					$('.totalFinal').val(tmp[3]);
				} else if(html.indexOf('_invalid') >= 0){
					$('#discount__code-message').removeClass('hidden').html(tmp[1]);
				} else if(html.indexOf('_empty') >= 0){
					$('#discount__code-message').removeClass('hidden').html(tmp[1]);
				}
			});
	}
<?php echo '</script'; ?>
>


<?php echo '<script'; ?>
 >
var $ww = $(window).width();
$(document).ready(function(){
	var $heightFooter = $('.footer_2019').outerHeight();
	if($ww >992){
	$.lockfixed("#sidebar", {offset: {top: -170, bottom:84}});
	}
	$(".btn-bookinggroup").click(function(e){
		var $form_firstName = $("#fullname").val();
		var $form_lastName = $("#last_name").val();
		var $form_email = $("#email").val();
		var $form_phone = $("#telephone").val();
		if($("#fullname").val()==''){
			$("#fullname").focus();
			return false;
		}
		if($("#telephone").val()==''){
			$("#telephone").focus();
			return false;
		}
		if($("#email").val()==''){
			$("#email").focus();
			return false;
		}
		if(checkValidEmail($form_email)==false){
			$("#email").focus();
			return false;
		}
		
		var allowSubmit = true;
		$('.ckh_contact_infor').each(function() {
			var $_this = $(this);
			var tour_id = $_this.data('tour_id');
			if($('input[name=contact_infor_'+tour_id+']:checked').val()==1){
				if($("#fullname_"+tour_id).val()==''){
					$("#fullname_"+tour_id).focus();
					e.preventDefault();
      				return false;
				}
				if($("#telephone_"+tour_id).val()==''){
					$("#telephone_"+tour_id).focus();
					e.preventDefault();
					return false;
				}
				if($("#email_"+tour_id).val()==''){
					$("#email_"+tour_id).focus();
					e.preventDefault();
					return false;
				}
				if(checkValidEmail($("#email_"+tour_id).val())==false){
					$("#email").focus();
					return false;
				}
			 }
		});
		return true;
	});
	$(document).on('click','.ckh_experience',function(){
		var $_this=$(this);
		var tour_id=$_this.data('tour_id');
		if($_this.val()==1){
			if($('input[name=contact_infor_'+tour_id+']:checked').val()==1){
				var title_name=$('#title_'+tour_id).val();
			 	var full_name=$('#fullname_'+tour_id).val();
				var birthday=$('#birthday_'+tour_id).val();
				var birthday_split = birthday.split('-');
			}else{
				var title_name=$('#title').val();
				var full_name=$('#fullname').val();
				var birthday=$('#birthday').val();
				var birthday_split = birthday.split('-');
			}
			$('#title_adult_'+tour_id+'_1').val(title_name);
			$('#fullname_adult_'+tour_id+'_1').val(full_name);
			$('#fullname_adult_'+tour_id+'_1').val(full_name);
			$('#birthday_adult_'+tour_id+'_1').val(birthday);
			$("select[name='birthday_adult_"+tour_id+"_1_[day]']").val(birthday_split[2]);
			$("select[name='birthday_adult_"+tour_id+"_1_[month]']").val(birthday_split[1]);
			$("select[name='birthday_adult_"+tour_id+"_1_[year]']").val(birthday_split[0]);
		 }else{
			$('#title_adult_'+tour_id+'_1').val('Mr');
			$('#fullname_adult_'+tour_id+'_1').val('');
			$('#birthday_adult_'+tour_id+'_1').val('1980-01-01');
			$("select[name='birthday_adult_"+tour_id+"_1_[day]']").val('01');
			$("select[name='birthday_adult_"+tour_id+"_1_[month]']").val('01');
			$("select[name='birthday_adult_"+tour_id+"_1_[year]']").val('1980');
		 }
	});
});
function loadTraveller(tour_id){
	var full_name=$('#fullname').val();
	var birthday=$('#birthday').val();
	var birthday_split = birthday.split('-');	
	$('#fullname_adult_'+tour_id+'_1').val(full_name);
	$('#birthday_adult_'+tour_id+'_1').val(birthday);
	$("select[name='birthday_adult_"+tour_id+"_1_[day]']").val(birthday_split[2]);
	$("select[name='birthday_adult_"+tour_id+"_1_[month]']").val(birthday_split[1]);
	$("select[name='birthday_adult_"+tour_id+"_1_[year]']").val(birthday_split[0]);
}

function checkValidEmail(email){
	var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	return regex.test(email);
}
function checkValidPhoneNumber(phone)
{
	var phoneno = /^\d{10,11}$/;
	if(phone.match(phoneno))
	return true;
	else
	return false;
}
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
	var map_lo="";
	var map_la="";
	var map_zoom = '';
	var map_type = '';
<?php echo '</script'; ?>
>

<style>
	.searchmap{ background:#E9EFF3; padding:10px; margin:10px 0 0;}
	.row-span .fieldlabel{width: 150px;padding:0px 10px;float:left;height:32px;line-height:32px;text-align:left;font-size:13px;}
	.row-span .fieldarea{width: calc(100% - 150px);float:right;}
</style>
<?php echo '<script'; ?>
>
	$(function(){
		initialize();
	});
	var geocoder=new google.maps.Geocoder();
	var map; 
	var marker;
	function $getID(id){
		return document.getElementById(id);
	}
	function geocode(position) {
		geocoder.geocode({
			latLng: position
		},function(responses) {
			$getID('map-search-input').value = responses[0].formatted_address;
			map.panTo(marker.getPosition());
		});
	}
	function initialize(){
		map_lo=map_lo!='' ? map_lo : '105.86727258378903'; 
		map_la=map_la!='' ? map_la : '20.988668210459167';
		if(map_zoom=='') map_zoom = 11;
		if(map_type=='') map_type = 'roadmap';
		var mapOptions = {
			center: new google.maps.LatLng(map_la,map_lo),
			zoom: parseInt(map_zoom),
			mapTypeId: map_type
		}; 
		map = new google.maps.Map(document.getElementById('map_canvas'),mapOptions); 
		var input = document.getElementById('map-search-input'); 
		var autocomplete = new google.maps.places.Autocomplete(input); 
		autocomplete.bindTo('bounds', map); 
		var location = new google.maps.LatLng (map_la,map_lo); 
		marker = new google.maps.Marker({ position:location}); 
		marker.setMap(map); 
		marker.setDraggable(true); 
		google.maps.event.addListener(marker, "dragend", function(event){ 
			var point = marker.getPosition(); 
			map.panTo(point); 
			geocode(point);
		}); 
		/**/ 
		google.maps.event.addListener(autocomplete, 'place_changed', function(){
			var place = autocomplete.getPlace();
			if(place.geometry.viewport){ 
				map.fitBounds(place.geometry.viewport); 
			}else{
				map.setCenter(place.geometry.location); map.setZoom(11); 
			}
			geocode(place.geometry.location);
			marker.setPosition(place.geometry.location); 
		});

	}
	function findLocation(address){
		geocoder = new google.maps.Geocoder(); 
		geocoder.geocode({'address': address},function(results,status){
			if (status == google.maps.GeocoderStatus.OK) {
				marker.setPosition(results[0].geometry.location);
				geocode(results[0].geometry.location);
			} else {
				alert("Sorry but Google Maps could not find this location.");
			}
		});
	};
	$(function(){
		$(document).on('keydown', '#map-search-input', function(ev){
			var _this = $(this);
			var _code = ev.keyCode;
			if (_code === 13 && $.trim(_this.val()) != '') {
				findLocation(_this.val()); 
				return false;
			}
		});
		$('input[name=title]').click(function(){
			$('.tabchildcol a[href="#map"]').trigger('click');
		}).blur(function(){
			$('.tabchildcol.current').trigger('click');
			}).keydown(function(ev){
				var _this = $(this);
				var _code = ev.keyCode;
				if (_code === 13 && $.trim(_this.val()) != '') {
					findLocation(_this.val());
					return false;
				}
			});
			$(document).on('click','#map-search-input',function(){
				initialize();
			});
	});
<?php echo '</script'; ?>
>
<?php }
}
