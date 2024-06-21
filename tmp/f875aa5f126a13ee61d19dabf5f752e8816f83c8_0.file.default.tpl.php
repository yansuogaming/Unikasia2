<?php
/* Smarty version 3.1.38, created on 2024-04-09 01:13:08
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/cart/default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_661433b4d083e2_35288631',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f875aa5f126a13ee61d19dabf5f752e8816f83c8' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/cart/default.tpl',
      1 => 1701311448,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661433b4d083e2_35288631 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="" id="cart_default">
	<div class="container">
		<form action="" method="post" class="formBookingTour">
			<div id="content" class="cart_page">
				<?php if ($_smarty_tpl->tpl_vars['cartSessionService']->value || $_smarty_tpl->tpl_vars['cartSessionVoucher']->value || $_smarty_tpl->tpl_vars['cartSessionCruise']->value || $_smarty_tpl->tpl_vars['cartSessionHotel']->value) {?>
				<div class="list_cart">
					<div class="row">
						<div class="col-lg-8 col-xs-12 box_left_step1">
							<h2 class="text-bold size35 mb20"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cart');?>
</h2>
							<?php if ($_smarty_tpl->tpl_vars['cartSessionService']->value || $_smarty_tpl->tpl_vars['cartSessionVoucher']->value || $_smarty_tpl->tpl_vars['cartSessionCruise']->value || $_smarty_tpl->tpl_vars['cartSessionHotel']->value) {?>
							<p class="note size16"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Check the service information you have put in the cart.');?>
</p>
							<?php }?>
							<div class="package_book_box mb30">
								<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('cart_tour_box');?>

								<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('cart_voucher_box');?>

								<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('cart_cruise_box');?>

								<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('cart_hotel_box');?>

							</div>
						</div>
						<div class="col-lg-4 col-xs-12 box_right_step1">
						<div class="col_right_book" id="sidebar">
							<div class="billing_infomation">
								<div class="price_grand_total ">
									
									<label class="size18 pr20"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Total');?>
:</label>
									<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['totalGrand']->value);?>
" name="grand_total_booking" />
									<?php if ($_smarty_tpl->tpl_vars['_LANG_ID']->value == 'vn') {?>
									<div class="span_price">
										<span class="text_bold size22"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['totalGrand']->value);?>
 <span class="size16 text_normal text-underline"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</span></span>
										<p class="size16 color_1fb69a"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('There are no additional fees');?>
</p>
									</div>
									<?php } else { ?>
									<div class="span_price">
										<span class="text_bold size22"><span class="size16 text_normal text-underline"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</span><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['totalGrand']->value);?>
</span>
										<p class="size16 color_1fb69a"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('There are no additional fees');?>
</p>
									</div>
									<?php }?>
								</div>
								<button class="btn-booking-next-step btn_main size18" type="submit">
									<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Proceed to payment');?>

								</button>
								<input type="hidden" name="bookingCart" value="bookingCart">
								<a class="view_tour btn-booking-next-step size18 text-center" href="<?php echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;
echo $_smarty_tpl->tpl_vars['extLang']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('See other services');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('See other services');?>
</a>
							</div>
							<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('Lfaqscolbox');?>

						</div>
						</div>
					</div>
				</div>
				<?php } else { ?>
				<div class="image_cart">
					<img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/cart.png" class="img100">
				</div>
				<div class="text">
					<h2 class="text-bold size35 mb30"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Your cart is empty');?>
</h2>
					<p><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Looks like you haven't added anything to your cart yet");?>
.</p>
					<a class="btn_main" href="<?php echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;
echo $_smarty_tpl->tpl_vars['extLang']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('start selection');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('start selection');?>
</a>
				</div>
				<?php }?>
			</div>
		</form>
    </div>
</div>
<?php echo '<script'; ?>
>
var msg_fullname_required = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Your full name should not be empty');?>
!";
var msg_lastname_required = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Your last name should not be empty');?>
!";
var msg_phone_required = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Your phone should not be empty');?>
!";
var msg_email_required = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Your email should not be empty');?>
!";
var msg_email_not_valid = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Please enter a valid email address');?>
!";
var msg_confirmemail_not_valid = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Email addresses do not match');?>
!";
var msg_email_repeat_not_valid = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Email repeat addresses do not match');?>
!";
var promotion_check = '<?php echo $_smarty_tpl->tpl_vars['promotion']->value;?>
';
var ONEPAY_Visa_Surcharge = '<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue("ONEPAY_Visa_Surcharge");?>
';
var ONEPAY_American_Express_Surcharge = '<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue("ONEPAY_American_Express_Surcharge");?>
';
var Paypal_Surcharge = '<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue("Paypal_Surcharge");?>
';
var travel_date = '<?php echo $_smarty_tpl->tpl_vars['travel_date']->value;?>
';
var booking_date = '<?php echo $_smarty_tpl->tpl_vars['booking_date']->value;?>
';
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
var $ww = $(window).width();
$(document).ready(function(){
	if($ww >992){
		$.lockfixed("#sidebar", {offset: {top:0, bottom:84}});
	}
  	$(".change_date").on('click', function(event) {
	  window.location.reload($('html, body').animate({
		scrollTop: $('#append_html_day_trip').offset().top - 115
	  }));
  	});
});
$(document).on('click','.ajvCart',function(){
	var $_this = $(this);
	var $table_id = $_this.data('table_id');
	var $tp = $_this.data('tp');
	var $_adata = {
		'table_id' : $table_id,
		'tp' : $tp,
	};
	$.ajax({
		type:'post',
		url:path_ajax_script+'/index.php?mod=cart&act=ajaxUpdateToCart&lang='+LANG_ID,
		data:$_adata,
		dataType:'html',
		success: function(html){
			window.location.reload();
		}
	});
	return false;
});
$(document).on('click','.ajvCartVoucher',function(){
	var $_this = $(this);
	var $voucher_id = $_this.attr('voucher_id');
	var $tp = $_this.attr('tp');
	var $from = $_this.attr('from');
	var $_adata = {
		'voucher_id' : $voucher_id,
		'tp' : $tp,
	};
	$.ajax({
		type:'post',
		url:path_ajax_script+'/index.php?mod=voucher&act=ajaxAddVoucherToCart&lang='+LANG_ID,
		data:$_adata,
		dataType:'html',
		success: function(html){
			window.location.reload();
		}
	});
	return false;
});
function getTotalGrandService() {
	$.ajax({
		type: "POST",
		url: path_ajax_script+"/index.php?mod=cart&act=getTotalGrandService",
		dataType: "html",
		success: function(html) {
			var $htm = formatPrice(html);
			$('#totalGrandService').html($htm);
			$('#totalGrandVoucher').html($htm);
			$('input[name=totalGrandService]').val($htm);
			$('input[name=totalGrandVoucher]').val($htm);
		}
	});
}
<?php echo '</script'; ?>
>
<?php }
}
