<?php
/* Smarty version 3.1.38, created on 2024-04-09 13:11:56
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/booking/edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6614dc2cb22b80_33108274',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '91fb2906c1385679897aee7f4cb4071758ea403c' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/booking/edit.tpl',
      1 => 1706063053,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6614dc2cb22b80_33108274 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/isocms/domains/isocms.com/public_html/inc/smarty3138/plugins/function.math.php','function'=>'smarty_function_math',),1=>array('file'=>'/home/isocms/domains/isocms.com/public_html/inc/smarty3138/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div class="container_booking" style="height: 100%">
	<div class="content_head">
		<a href="<?php echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;?>
/admin/index.php?mod=booking&act=<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" class="d-flex align-items-center">
			<div class="text_booking">
				<p class="booking_name"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['booking_code'];?>
</p>
				<span class="status"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Still unconfirmed service");?>
</span>
			</div>
		</a>
		<?php if ($_smarty_tpl->tpl_vars['action']->value != "booking_tailor") {?>
			<?php if ($_smarty_tpl->tpl_vars['oneItem']->value['status_pay'] != '3') {?>
			<button class="btn_cancel" id="cancelBooking"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cancel Booking');?>
</button>
			<?php } else { ?>
			<button class="btn_cancel"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Canceled');?>
</button>
			<?php }?>
		<?php } else { ?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=print&action=<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
&booking_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['pvalTable']->value);?>
" class="btn-print fr">
				<i class="fa fa-print"></i> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('print');?>

			</a>
		<?php }?>
		
	</div>
	<div id="bookingTab" class="booking_tabs">
		<ul>
			<?php if ($_smarty_tpl->tpl_vars['action']->value != "booking_tailor") {?>
				<li><a href="javascript:void();"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Booking');?>
</a></li>
				<li><a href="javascript:void();"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Payments');?>
</a></li>
				<?php if ($_smarty_tpl->tpl_vars['tour_cart_store']->value) {?><li><a href="javascript:void();"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Group List');?>
</a></li><?php }?>
			<?php }?>
			<li><a href="javascript:void();"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Confirmation Email');?>
</a></li>
		</ul>
	</div>
	<div id="tab_content">
		<?php if ($_smarty_tpl->tpl_vars['action']->value != "booking_tailor") {?>
			<div class="tabbox">
				<div class="wrap">
					<div class="content_left">
						<div class="box_info info_booking">
							<p class="booking_name"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['booking_code'];?>
</p>
							<p class="booking_item"><label class="bold600" for=""><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Total Price');?>
: </label> 
							<span class="bold600 price_booking"><?php echo number_format($_smarty_tpl->tpl_vars['oneItem']->value['totalgrand'],0,"."," ");?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRateText();?>
</span></p>
							<p class="booking_item"><label class="bold600" for=""><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cashback');?>
: </label> 
							<span class="bold600 price_booking"><?php echo number_format($_smarty_tpl->tpl_vars['total_cashback']->value,0,"."," ");?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRateText();?>
</span></p>
							<p class="booking_item"><label class="bold600" for=""><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Payment status');?>
: </label> 
							<span class="deposit_booking"> 
							<?php if ($_smarty_tpl->tpl_vars['deposit_bill_complete']->value > 0) {?>
								<?php if ($_smarty_tpl->tpl_vars['deposit_bill_complete']->value == $_smarty_tpl->tpl_vars['oneItem']->value['totalgrand']) {?>
									<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Pay off');?>

								<?php } else { ?>
									<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Deposit');?>

									<?php echo number_format($_smarty_tpl->tpl_vars['deposit_bill_complete']->value,0,"."," ");?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRateText();?>

								<?php }?>
							<?php } else { ?>
								<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Unpaid');?>

							<?php }?>
							</span>
							</p>	

							<?php echo smarty_function_math(array('assign'=>"balance",'equation'=>"x-y-z-a",'x'=>$_smarty_tpl->tpl_vars['oneItem']->value['totalgrand'],'y'=>$_smarty_tpl->tpl_vars['oneItem']->value['totalcancel'],'z'=>$_smarty_tpl->tpl_vars['total_cashback']->value,'a'=>$_smarty_tpl->tpl_vars['deposit_bill_complete']->value),$_smarty_tpl);?>
					
							<p class="booking_item"><label class="bold600" for=""><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Balance');?>
: </label> 
							<span class="bold600 price_booking"><?php if ($_smarty_tpl->tpl_vars['balance']->value < 0) {
echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Return customers');?>
 <?php echo smarty_function_math(array('assign'=>"balance_return",'equation'=>"abs(x)",'x'=>$_smarty_tpl->tpl_vars['balance']->value),$_smarty_tpl);?>
 <?php echo number_format($_smarty_tpl->tpl_vars['balance_return']->value,0,"."," ");
} else {
echo number_format($_smarty_tpl->tpl_vars['balance']->value,0,"."," ");
}?> <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRateText();?>
</span></p>
							<p class="booking_item"><label class="bold600" for=""><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Booking date');?>
: </label> <span class=""><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oneItem']->value['reg_date'],"%d/%m/%Y - %H:%m");?>
</span></p>
						</div>
						<label for="" class="lbl_info_booking bold600"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Main Contact");?>
</label>
						<div class="box_info">
							<p class="booking_item"><label for=""><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Fullname');?>
: </label> <span class="bold600"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['full_name'];?>
</span></p>
							<p class="booking_item"><label for=""><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Birthday');?>
: </label> <span class=""><?php if ($_smarty_tpl->tpl_vars['booking_store']->value['birthday']) {
echo $_smarty_tpl->tpl_vars['booking_store']->value['birthday'];
} else {
echo $_smarty_tpl->tpl_vars['booking_store']->value['birthday_']['day'];?>
/<?php echo $_smarty_tpl->tpl_vars['booking_store']->value['birthday_']['month'];?>
/<?php echo $_smarty_tpl->tpl_vars['booking_store']->value['birthday_']['year'];
}?></span></p>
							<p class="booking_item"><label for=""><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Email');?>
: </label> <span class="bold600"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['email'];?>
</span></p>
							<p class="booking_item"><label for=""><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Phone');?>
: </label> <span class="bold600"></span><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['phone'];?>
</p>
							<p class="booking_item"><label for=""><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Country');?>
: </label> <span class=""><?php if ($_smarty_tpl->tpl_vars['booking_store']->value['country_id'] == 0) {?>Việt Nam<?php } else {
echo $_smarty_tpl->tpl_vars['clsCountry']->value->getTitle($_smarty_tpl->tpl_vars['booking_store']->value['country_id']);
}?></span></p>
							<p class="contact_edit bgf9f9f9"><button class="btn_edit_contact" data-toggle="modal" data-target="#mdContact"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Edit');?>
</button></p>
							<div id="mdContact" class="modal fade" role="dialog">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close close_modal_booking" data-dismiss="modal">&times;</button>
											<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" name="booking_id">
											<h4 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Main Contact");?>
</h4>
										</div>
										<div class="modal-body">
											<p class="error" style="color: red;display: none"></p>
											<div class="form-group">
												<label class="col-form-label text-bold"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Full name');?>
<span class="text-red">*</span></label>
												<input type="text" class="form-control required" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['full_name'];?>
" name="full_name" placeholder="">
											</div>
											<div class="form-group">
												<label class="col-form-label text-bold"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Birth day');?>
</label>
												<input type="text" class="form-control birthday" value="<?php echo $_smarty_tpl->tpl_vars['booking_store']->value['birthday'];?>
" name="birthday" placeholder="">
											</div>
											<div class="form-group">
												<label class="col-form-label text-bold"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Email');?>
<span class="text-red">*</span></label>
												<input type="email" class="form-control required" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['email'];?>
" name="email" placeholder="">
											</div>
											<div class="form-group">
												<label class="col-form-label text-bold"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Phone');?>
<span class="text-red">*</span></label>
												<input type="text" class="form-control required" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['phone'];?>
" name="phone" placeholder="">
											</div>
										</div>
										<div class="modal-footer version-xs">
											<button type="button" class="btn btn-default close_modal_booking" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Close');?>
</button>
											<button type="button" class="btn btn-success submitContact" onClick="editContactBooking('contact')"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Update');?>
</button>
										</div>
									</div>

								</div>
							</div>
						</div>
						<label for="" class="lbl_info_booking bold600"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Notes");?>
</label>
						<div class="box_info">
							<div class="desp"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['note'];?>
</div>
							<p class="contact_edit bgf9f9f9"><button class="btn_edit_note" data-toggle="modal" data-target="#mdNote"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Edit');?>
</button></p>
						</div>
						<div id="mdNote" class="modal fade" role="dialog">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close close_modal_booking" data-dismiss="modal">&times;</button>
											<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" name="booking_id">
											<h4 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Notes");?>
</h4>
										</div>
										<div class="modal-body">
											<p class="error" style="color: red;display: none"></p	>
											<div class="form-group">
												<label class="col-form-label text-bold"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Note');?>
<span class="text-red">*</span></label>
												<textarea name="note" id="" cols="30" rows="10" class="form-control"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['note'];?>
</textarea>
											</div>
										</div>
										<div class="modal-footer version-xs">
											<button type="button" class="btn btn-default close_modal_booking" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Close');?>
</button>
											<button type="button" class="btn btn-success submitContact" onClick="editContactBooking('note')"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Update');?>
</button>
										</div>
									</div>

								</div>
							</div>
					</div>
					<div class="content_right">
						<?php if ($_smarty_tpl->tpl_vars['tour_cart_store']->value) {?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tour_cart_store']->value, 'item', false, NULL, 'i', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
							<?php $_smarty_tpl->_assignInScope('tour_id', $_smarty_tpl->tpl_vars['item']->value['tour_id_z']);?>
							<?php $_smarty_tpl->_assignInScope('title', $_smarty_tpl->tpl_vars['clsTour']->value->getTitle($_smarty_tpl->tpl_vars['tour_id']->value));?>
							<?php $_smarty_tpl->_assignInScope('Depart_point', $_smarty_tpl->tpl_vars['clsTour']->value->getDepartureCity($_smarty_tpl->tpl_vars['tour_id']->value));?>
							<?php $_smarty_tpl->_assignInScope('fullTextAddress', $_smarty_tpl->tpl_vars['clsTour']->value->getTextdepartureCityEnd($_smarty_tpl->tpl_vars['tour_id']->value,'full'));?>
							<?php if ($_smarty_tpl->tpl_vars['clsTour']->value->getTextdepartureCityEnd($_smarty_tpl->tpl_vars['tour_id']->value) != '') {?>
								<?php $_smarty_tpl->_assignInScope('address', $_smarty_tpl->tpl_vars['clsTour']->value->getTextdepartureCityEnd($_smarty_tpl->tpl_vars['tour_id']->value));?>
							<?php } else { ?>
								<?php $_smarty_tpl->_assignInScope('address', $_smarty_tpl->tpl_vars['fullTextAddress']->value);?>
							<?php }?>
							<?php $_smarty_tpl->_assignInScope('tour_option', $_smarty_tpl->tpl_vars['clsTourOption']->value->getTitle($_smarty_tpl->tpl_vars['item']->value['tour__class']));?>
							<?php $_smarty_tpl->_assignInScope('lstService', $_smarty_tpl->tpl_vars['item']->value['number_addon']);?>
							<div class="item_tour">
								<a class="dropdown-toggle bgf9f9f9" data-toggle="collapse"  data-target="#collapse<?php echo $_smarty_tpl->tpl_vars['tour_id']->value;?>
">[<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Travel tour');?>
] <?php echo $_smarty_tpl->tpl_vars['tour_id']->value;?>
:[<?php echo $_smarty_tpl->tpl_vars['Depart_point']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['address']->value;?>
] <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 <i class="fa fa-angle-down" aria-hidden="true"></i></a>
								<div class="collapse" id="collapse<?php echo $_smarty_tpl->tpl_vars['tour_id']->value;?>
">
									<div class="info-item">
										<div class="info_room">
											<div class="room_item">
												<label class="departure bold600"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Departure');?>
</label>
												<div class="text_room">
													<p class="address_room"><?php echo $_smarty_tpl->tpl_vars['clsTour']->value->getListDeparturePoint($_smarty_tpl->tpl_vars['tour_id']->value);?>
</p>
													<span class="time_room"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->converTimeToText7($_smarty_tpl->tpl_vars['item']->value['check_in_book_z']);?>
</span>
												</div>
											</div>
											<div class="room_item">
												<label class="departure bold600"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('End');?>
</label>
												<div class="text_room">
													<p class="address_room"><?php echo $_smarty_tpl->tpl_vars['fullTextAddress']->value;?>
</p>
													<span class="time_room"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->converTimeToText5($_smarty_tpl->tpl_vars['clsTour']->value->getTextEndDate($_smarty_tpl->tpl_vars['item']->value['check_in_book_z'],$_smarty_tpl->tpl_vars['tour_id']->value));?>
</span>
												</div>
											</div>
											<div class="room_item">
												<label class="deprture bold600"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Tour option');?>
</label>
												<div class="text_room">
													<p class="address_room"><?php echo $_smarty_tpl->tpl_vars['tour_option']->value;?>
</p>
												</div>
											</div>
											<div class="room_item">
												<label class=" bold600"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Tourer');?>
</label>
												<div class="text_room">
													<p class="address_room">
													<?php if ($_smarty_tpl->tpl_vars['item']->value['number_adults_z']) {
echo $_smarty_tpl->tpl_vars['item']->value['number_adults_z'];?>
 x <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Adult');?>
<br><?php }?> 
													<?php if ($_smarty_tpl->tpl_vars['item']->value['number_child_z']) {
echo $_smarty_tpl->tpl_vars['item']->value['number_child_z'];?>
 x <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Children');?>
<br><?php }?>
													<?php if ($_smarty_tpl->tpl_vars['item']->value['number_infants_z']) {
echo $_smarty_tpl->tpl_vars['item']->value['number_infants_z'];?>
 x <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Infants');
}?> </p>
												</div>
											</div>
											<div class="room_item">
												<label class=" bold600"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Services bonus');?>
</label>
												<div class="text_room">
													<p class="address_room">
													<?php if ($_smarty_tpl->tpl_vars['lstService']->value) {?>
														<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lstService']->value, 'itemService', false, 'k', 'i', array (
));
$_smarty_tpl->tpl_vars['itemService']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['itemService']->value) {
$_smarty_tpl->tpl_vars['itemService']->do_else = false;
?>
															<?php echo $_smarty_tpl->tpl_vars['clsAddOnService']->value->getTitle($_smarty_tpl->tpl_vars['k']->value);?>
</br>
														<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
													<?php }?>
													</p>
												</div>
											</div>
										</div>
										<div class="status_room">
											<div class="box_switch" title1="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Confirm');?>
" title2="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Refuse');?>
">
												<div class="switch3 update_status" data-type_id="<?php echo $_smarty_tpl->tpl_vars['tour_id']->value;?>
" data-type="TOUR">
													<input type="radio" name="status_tour_<?php echo $_smarty_tpl->tpl_vars['tour_id']->value;?>
" value="2" class="status status_off" <?php if ($_smarty_tpl->tpl_vars['item']->value['status'] == 2) {?>checked<?php }?> <?php if ($_smarty_tpl->tpl_vars['item']->value['status'] == 2) {?>disabled<?php }?>>
													<input type="radio" name="status_tour_<?php echo $_smarty_tpl->tpl_vars['tour_id']->value;?>
" value="0" class="status status_na" disabled <?php if (!$_smarty_tpl->tpl_vars['item']->value['status'] || $_smarty_tpl->tpl_vars['item']->value['status'] == 0) {?>checked<?php }?>>
													<input type="radio" name="status_tour_<?php echo $_smarty_tpl->tpl_vars['tour_id']->value;?>
" value="1" class="status status_on" <?php if ($_smarty_tpl->tpl_vars['item']->value['status'] == 1) {?>checked<?php }?> <?php if ($_smarty_tpl->tpl_vars['item']->value['status'] == 2 || $_smarty_tpl->tpl_vars['item']->value['status'] == 1) {?>disabled<?php }?>>
													<a></a>
												</div>
											</div>									
										</div>
									</div>

								</div>
															</div>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['hotel_cart_store']->value) {?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hotel_cart_store']->value, 'item', false, NULL, 'i', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
							<?php $_smarty_tpl->_assignInScope('hotel_id', $_smarty_tpl->tpl_vars['item']->value['hotel_id']);?>
							<?php $_smarty_tpl->_assignInScope('oneItemHotel', $_smarty_tpl->tpl_vars['clsHotel']->value->getOne($_smarty_tpl->tpl_vars['hotel_id']->value,'title,address'));?>
							<?php $_smarty_tpl->_assignInScope('title', $_smarty_tpl->tpl_vars['clsHotel']->value->getTitle($_smarty_tpl->tpl_vars['hotel_id']->value,$_smarty_tpl->tpl_vars['oneItemHotel']->value));?>

							<div class="item_tour">
								<a class="dropdown-toggle bgf9f9f9" data-toggle="collapse"  data-target="#collapseHotel_<?php echo $_smarty_tpl->tpl_vars['hotel_id']->value;?>
">[<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Hotel');?>
] <?php echo $_smarty_tpl->tpl_vars['hotel_id']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 <i class="fa fa-angle-down" aria-hidden="true"></i></a>
								<div class="collapse" id="collapseHotel_<?php echo $_smarty_tpl->tpl_vars['hotel_id']->value;?>
">
									<div class="info-item">
										<div class="info_room">
											<div class="room_item">
												<label class="departure bold600"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Address');?>
</label>
												<div class="text_room">
													<span class="address_room"><?php echo $_smarty_tpl->tpl_vars['clsHotel']->value->getAddress($_smarty_tpl->tpl_vars['hotel_id']->value,$_smarty_tpl->tpl_vars['oneItemHotel']->value);?>
</span>
												</div>
											</div>
											<div class="room_item">
												<label class="departure bold600"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Check in');?>
</label>
												<div class="text_room">
													<span class="time_room"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->converTimeToText5($_smarty_tpl->tpl_vars['item']->value['check_in']);?>
</span>
												</div>
											</div>
											<div class="room_item">
												<label class="departure bold600"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Check out');?>
</label>
												<div class="text_room">
													<span class="time_room"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->converTimeToText5($_smarty_tpl->tpl_vars['item']->value['check_out']);?>
</span>
												</div>
											</div>
											<div class="room_item">
												<label class=" bold600"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Room');?>
</label>
												<div class="text_room">
													<p class="address_room">
														<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['room'], 'room', false, NULL, 'i', array (
));
$_smarty_tpl->tpl_vars['room']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['room']->value) {
$_smarty_tpl->tpl_vars['room']->do_else = false;
?>
															<div class="item_room">
																<p class="item_text_room"><?php echo $_smarty_tpl->tpl_vars['clsHotelRoom']->value->getTitle($_smarty_tpl->tpl_vars['room']->value['hotel_room_id']);?>
</p>

																<p class="item_text_room"><?php if ($_smarty_tpl->tpl_vars['room']->value['number_room'] > 0) {?><span class="time_room"><?php echo $_smarty_tpl->tpl_vars['room']->value['number_room'];?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('room');?>
</span><?php }?> <?php if ($_smarty_tpl->tpl_vars['room']->value['number_adult'] > 0) {?><span class="time_room"><?php echo $_smarty_tpl->tpl_vars['room']->value['number_adult'];?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('adult');?>
</span><?php }?> <?php if ($_smarty_tpl->tpl_vars['room']->value['number_child'] > 0) {?><span class="time_room"><?php echo $_smarty_tpl->tpl_vars['room']->value['number_child'];?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('child');?>
</span><?php }?></p>
															</div>
														<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
													</p>
												</div>
											</div>
										</div>
										<div class="status_room">
											<div class="box_switch" title1="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Confirm');?>
" title2="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Refuse');?>
">
												<div class="switch3 update_status" data-type_id="<?php echo $_smarty_tpl->tpl_vars['hotel_id']->value;?>
" data-type="HOTEL">
													<input type="radio" name="status_hotel_<?php echo $_smarty_tpl->tpl_vars['hotel_id']->value;?>
" value="2" class="status status_off" <?php if ($_smarty_tpl->tpl_vars['item']->value['status'] == 2) {?>checked<?php }?> <?php if ($_smarty_tpl->tpl_vars['item']->value['status'] == 2) {?>disabled<?php }?>>
													<input type="radio" name="status_hotel_<?php echo $_smarty_tpl->tpl_vars['hotel_id']->value;?>
" value="0" class="status status_na" disabled <?php if (!$_smarty_tpl->tpl_vars['item']->value['status'] || $_smarty_tpl->tpl_vars['item']->value['status'] == 0) {?>checked<?php }?>>
													<input type="radio" name="status_hotel_<?php echo $_smarty_tpl->tpl_vars['hotel_id']->value;?>
" value="1" class="status status_on" <?php if ($_smarty_tpl->tpl_vars['item']->value['status'] == 1) {?>checked<?php }?> <?php if ($_smarty_tpl->tpl_vars['item']->value['status'] == 2) {?>disabled<?php }?>>
													<a></a>
												</div>
											</div>	
										</div>
									</div>

								</div>
															</div>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['cruise_cart_store']->value) {?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cruise_cart_store']->value, 'item', false, NULL, 'i', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
							<?php $_smarty_tpl->_assignInScope('cruise_id', $_smarty_tpl->tpl_vars['item']->value['cruise_id']);?>
							<?php if ($_smarty_tpl->tpl_vars['cruise_id']->value) {?>
								<?php $_smarty_tpl->_assignInScope('oneItemCruise', $_smarty_tpl->tpl_vars['clsCruise']->value->getOne($_smarty_tpl->tpl_vars['cruise_id']->value,'title'));?>
								<?php $_smarty_tpl->_assignInScope('title', $_smarty_tpl->tpl_vars['clsCruise']->value->getTitle($_smarty_tpl->tpl_vars['cruise_id']->value,$_smarty_tpl->tpl_vars['oneItemCruise']->value));?>

								<div class="item_tour">
									<a class="dropdown-toggle bgf9f9f9" data-toggle="collapse"  data-target="#collapseCruise_<?php echo $_smarty_tpl->tpl_vars['cruise_id']->value;?>
">[<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cruise');?>
] <?php echo $_smarty_tpl->tpl_vars['cruise_id']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 <i class="fa fa-angle-down" aria-hidden="true"></i></a>
									<div class="collapse" id="collapseCruise_<?php echo $_smarty_tpl->tpl_vars['cruise_id']->value;?>
">
										<div class="info-item">
											<div class="info_room">
												<div class="room_item">
													<label class="departure bold600"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Itinerary');?>
</label>
													<div class="text_room">
														<span class="address_room"><?php echo $_smarty_tpl->tpl_vars['clsCruiseItinerary']->value->getTitleDay($_smarty_tpl->tpl_vars['item']->value['cruise_itinerary_id']);?>
</span>
													</div>
												</div>
												<div class="room_item">
													<label class="departure bold600"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Departure');?>
</label>
													<div class="text_room">
														<span class="time_room"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->converTimeToText5($_smarty_tpl->tpl_vars['item']->value['departure_date']);?>
</span>
													</div>
												</div>
												<div class="room_item">
													<label class="departure bold600"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Duration');?>
</label>
													<div class="text_room">
														<span class="time_room"><?php echo $_smarty_tpl->tpl_vars['clsCruiseItinerary']->value->makeSelectTripDurationNew($_smarty_tpl->tpl_vars['item']->value['cruise_itinerary_id']);?>
</span>
													</div>
												</div>
												<div class="room_item">
													<label class=" bold600"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cruise cabin');?>
</label>
													<div class="text_room">
														<p class="address_room">
															<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['cabin'], 'cabin', false, NULL, 'i', array (
));
$_smarty_tpl->tpl_vars['cabin']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cabin']->value) {
$_smarty_tpl->tpl_vars['cabin']->do_else = false;
?>
																<div class="item_room">
																	<p class="item_text_room"><?php echo $_smarty_tpl->tpl_vars['clsCruiseCabin']->value->getTitle($_smarty_tpl->tpl_vars['cabin']->value['cruise_cabin_id']);?>
</p>
																	<p class="item_text_room"><?php if ($_smarty_tpl->tpl_vars['cabin']->value['number_cabin'] > 0) {?><span class="time_room"><?php echo $_smarty_tpl->tpl_vars['cabin']->value['number_cabin'];?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('cabin');?>
</span><?php }?> <?php if ($_smarty_tpl->tpl_vars['cabin']->value['number_adult'] > 0) {?><span class="time_room"><?php echo $_smarty_tpl->tpl_vars['cabin']->value['number_adult'];?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('adult');?>
</span><?php }?> <?php if ($_smarty_tpl->tpl_vars['cabin']->value['number_child'] > 0) {?><span class="time_room"><?php echo $_smarty_tpl->tpl_vars['cabin']->value['number_child'];?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('child');?>
</span><?php }?></p>
																</div>
															<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
														</p>
													</div>
												</div>
											</div>
											<div class="status_room">
												<div class="box_switch" title1="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Confirm');?>
" title2="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Refuse');?>
">
													<div class="switch3 update_status" data-type_id="<?php echo $_smarty_tpl->tpl_vars['item']->value['cruise_itinerary_id'];?>
" data-type="CRUISE">
														<input type="radio" name="status_cruise_<?php echo $_smarty_tpl->tpl_vars['item']->value['cruise_itinerary_id'];?>
" value="2" class="status status_off" <?php if ($_smarty_tpl->tpl_vars['item']->value['status'] == 2) {?>checked<?php }?> <?php if ($_smarty_tpl->tpl_vars['item']->value['status'] == 2) {?>disabled<?php }?>>
														<input type="radio" name="status_cruise_<?php echo $_smarty_tpl->tpl_vars['item']->value['cruise_itinerary_id'];?>
" value="0" class="status status_na" disabled <?php if (!$_smarty_tpl->tpl_vars['item']->value['status'] || $_smarty_tpl->tpl_vars['item']->value['status'] == 0) {?>checked<?php }?>>
														<input type="radio" name="status_cruise_<?php echo $_smarty_tpl->tpl_vars['item']->value['cruise_itinerary_id'];?>
" value="1" class="status status_on" <?php if ($_smarty_tpl->tpl_vars['item']->value['status'] == 1) {?>checked<?php }?> <?php if ($_smarty_tpl->tpl_vars['item']->value['status'] == 2) {?>disabled<?php }?>><a></a>
													</div>
												</div>	
											</div>
										</div>

									</div>
																	</div>
							<?php }?>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['voucher_cart_store']->value) {?>

						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['voucher_cart_store']->value, 'item', false, NULL, 'i', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
							<?php $_smarty_tpl->_assignInScope('voucher_id', $_smarty_tpl->tpl_vars['item']->value['voucher_id']);?>
							<?php $_smarty_tpl->_assignInScope('title', $_smarty_tpl->tpl_vars['clsVoucher']->value->getTitle($_smarty_tpl->tpl_vars['voucher_id']->value));?>						
							<div class="item_tour item_voucher">
								<a class="dropdown-toggle bgf9f9f9" data-toggle="collapse"  data-target="#collapseVoucher_<?php echo $_smarty_tpl->tpl_vars['voucher_id']->value;?>
">[<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Voucher');?>
] <?php echo $_smarty_tpl->tpl_vars['voucher_id']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 <i class="fa fa-angle-down" aria-hidden="true"></i></a>
								<div class="collapse" id="collapseVoucher_<?php echo $_smarty_tpl->tpl_vars['voucher_id']->value;?>
">
									<div class="info-item info-item-full">
										<div class="info_room">
											<div class="room_item">
												<label class="departure bold600"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Ticket');?>
</label>
												<div class="text_room">
													<span class="address_room"><?php echo $_smarty_tpl->tpl_vars['item']->value['number_voucher'];?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('ticket');?>
</span>
												</div>
											</div>
										</div>
																			</div>

								</div>
															</div>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						<?php }?>
					</div>
				</div>
			</div>
			<div class="tabbox" style="display: none">
				<div class="wrap">
					<div class="pay_booking_top <?php if (!($_smarty_tpl->tpl_vars['money_balance']->value > 0)) {?> <?php if ($_smarty_tpl->tpl_vars['oneItem']->value['status_pay'] == 3) {?>btn_cancel<?php } else { ?>pay_booking_top_complete<?php }
}?>">
						<?php if ($_smarty_tpl->tpl_vars['money_balance']->value > 0) {?>
						<p class="text_status"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Booking has not completed payment');?>
</p>
						<div class="box_balance">
							<p class="balance"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Balance');?>
 
							<span class="price_balance"><?php echo number_format($_smarty_tpl->tpl_vars['money_balance']->value,0,"."," ");?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRateText();?>
</span></p>
							<button class="btn_pay_booking" type="button" ><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Payment');?>
</button>
						</div>
						<?php } elseif ($_smarty_tpl->tpl_vars['oneItem']->value['status_pay'] == 3) {?>
							<p class="text_status"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Booking has been canceled');?>
</p>
						<?php } else { ?>
							<p class="text_status"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Booking has completed payment');?>
</p>
						<?php }?>
					</div>
					<div class="content_pay_booking">
						<div class="content_pay_left">
							<table class="tbl_content_pay">
								<thead>
									<tr class="item_tbl title_tbl">
										<th class="id_pay">#<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('ID');?>
</th>
										<th class="time_create_pay"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Created by');?>
</th>
										<th class="time_create_pay"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Payment term');?>
</th>
										<th class="payments_pay"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Payments');?>
</th>
										<th class="money_pay"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Amount Money');?>
</th>
										<th class="status_pay"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Bill type');?>
</th>
										<th class="status_pay"></th>
										<th class="view_pay"></th>
									</tr>
								</thead>
								<tbody>
									<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstBillingHistory']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
									<tr class="item_tbl">
										<td class="id_pay"><span class="label_mobile">#<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('ID');?>
: </span>#<?php echo $_smarty_tpl->tpl_vars['lstBillingHistory']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['billing_history_id'];?>
</td>
										<td class="time_create_pay">
											<span class="label_mobile"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Created by');?>
: </span><?php if ($_smarty_tpl->tpl_vars['lstBillingHistory']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['user_id'] > 0) {?>
												<?php echo $_smarty_tpl->tpl_vars['clsUser']->value->getOneField('first_name',$_smarty_tpl->tpl_vars['lstBillingHistory']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['user_id']);?>
 <?php echo $_smarty_tpl->tpl_vars['clsUser']->value->getOneField('last_name',$_smarty_tpl->tpl_vars['lstBillingHistory']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['user_id']);?>

											<?php }?>
											<?php if ($_smarty_tpl->tpl_vars['lstBillingHistory']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reg_date'] > 0) {?>
												<p class="time_create"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['lstBillingHistory']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reg_date'],"%d/%m/%Y - %H:%M");?>
</p>
											<?php }?>
										</td>
										<td class="time_create_pay"><span class="label_mobile"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Payment term');?>
: </span><?php if ($_smarty_tpl->tpl_vars['lstBillingHistory']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['payment_term'] > 0) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['lstBillingHistory']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['payment_term'],"%d/%m/%Y");
}?></td>
										<td class="payments_pay">
											<?php if ($_smarty_tpl->tpl_vars['lstBillingHistory']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['payment_method'] == '1') {?>
												<?php $_smarty_tpl->_assignInScope('SitePay_CashName', ('SitePay_CashName_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
												<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['SitePay_CashName']->value);?>

											<?php } elseif ($_smarty_tpl->tpl_vars['lstBillingHistory']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['payment_method'] == '2') {?>
												<?php $_smarty_tpl->_assignInScope('SitePay_BankName', ('SitePay_BankName_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
												<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['SitePay_BankName']->value);?>

											<?php } elseif ($_smarty_tpl->tpl_vars['lstBillingHistory']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['payment_method'] == '3') {?>
												<?php $_smarty_tpl->_assignInScope('ONEPAY_Name', ('ONEPAY_Name_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
												<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['ONEPAY_Name']->value);?>

											<?php } elseif ($_smarty_tpl->tpl_vars['lstBillingHistory']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['payment_method'] == '4') {?>
												<?php $_smarty_tpl->_assignInScope('ONEPAY_Visa_Name', ('ONEPAY_Visa_Name_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
												<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['ONEPAY_Visa_Name']->value);?>

											<?php } elseif ($_smarty_tpl->tpl_vars['lstBillingHistory']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['payment_method'] == '5') {?>
												<?php $_smarty_tpl->_assignInScope('Paypal_Name', ('Paypal_Name_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
												<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['Paypal_Name']->value);?>

											<?php } elseif ($_smarty_tpl->tpl_vars['lstBillingHistory']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['payment_method'] == '6') {?>
												<?php $_smarty_tpl->_assignInScope('ONEPAY_Visa_Name', ('ONEPAY_Visa_Name_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
												<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['ONEPAY_Visa_Name']->value);?>

											<?php } elseif ($_smarty_tpl->tpl_vars['lstBillingHistory']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['payment_method'] == '7') {?>
												<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('QR code');?>

											<?php }?>

										</td>
										<td class="money_pay"><span class="label_mobile"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Amount Money');?>
: </span> <?php echo number_format($_smarty_tpl->tpl_vars['lstBillingHistory']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['bill_money'],0,"."," ");?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRateText();?>
</td>
										<td class="status_pay">
											<?php if ($_smarty_tpl->tpl_vars['lstBillingHistory']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['bill_type'] == 'PAYMENT') {?>
												<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Payment');?>

											<?php } else { ?>
												<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cashback');?>
											
											<?php }?>
										</td>
										<td class="status_pay">
											<p class="<?php if ($_smarty_tpl->tpl_vars['lstBillingHistory']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['status'] == 1) {?>complete_payment<?php } else { ?>waiting_payment<?php }?>">
												<?php if ($_smarty_tpl->tpl_vars['lstBillingHistory']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['status'] == 1) {?>
													<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Completly payment');?>

												<?php } else { ?>
													<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Waiting Payment');?>
											
												<?php }?>
											</p>
										</td>
										<td class="view_pay"><?php if ($_smarty_tpl->tpl_vars['lstBillingHistory']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['bill_type'] == 'PAYMENT') {?><button class="view_detail" type="button" data-billing_id="<?php echo $_smarty_tpl->tpl_vars['lstBillingHistory']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['billing_history_id'];?>
" data-billEncryt="<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['lstBillingHistory']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['billing_history_id']);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/icon/view_form.png" alt=""></button><?php }?></td>
									</tr>
									<?php
}
}
?>

								</tbody>

							</table>
						</div>
						<div class="content_pay_right mgb15" id="collapse">
							<p class="add_payment" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Add Payment');?>
</p>
							<?php if ($_smarty_tpl->tpl_vars['money_max']->value > 0 || $_smarty_tpl->tpl_vars['checkBillingHistory']->value) {?>
							<div class="box_pay box_add_pay mgb15 collapse in" id="collapse1" data-parent="#collapse" aria-expanded="true">
								<?php if ($_smarty_tpl->tpl_vars['checkBillingHistory']->value) {?>
									<p class="bill_id"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Invoice waiting for confirmation');?>
: <span>#<?php echo $_smarty_tpl->tpl_vars['checkBillingHistory']->value['billing_history_id'];?>
</span></p>
									<p class="info-bill"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Date_created');?>
: <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['checkBillingHistory']->value['reg_date'],"%d/%m/%Y - %H:%M");?>
</p>
									<p class="info-bill"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Payments term');?>
: <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['checkBillingHistory']->value['payment_term'],"%d/%m/%Y");?>
</p>
									<p class="info-bill"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Amount Money');?>
: <?php echo number_format($_smarty_tpl->tpl_vars['checkBillingHistory']->value['bill_money'],0,"."," ");?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</p>
									<p class="info-bill"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Payments');?>
: 
											<?php if ($_smarty_tpl->tpl_vars['checkBillingHistory']->value['payment_method'] == '1') {?>
												<?php $_smarty_tpl->_assignInScope('SitePay_CashName', ('SitePay_CashName_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
												<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['SitePay_CashName']->value);?>

											<?php } elseif ($_smarty_tpl->tpl_vars['checkBillingHistory']->value['payment_method'] == '2') {?>
												<?php $_smarty_tpl->_assignInScope('SitePay_BankName', ('SitePay_BankName_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
												<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['SitePay_BankName']->value);?>

											<?php } elseif ($_smarty_tpl->tpl_vars['checkBillingHistory']->value['payment_method'] == '3') {?>
												<?php $_smarty_tpl->_assignInScope('ONEPAY_Name', ('ONEPAY_Name_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
												<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['ONEPAY_Name']->value);?>

											<?php } elseif ($_smarty_tpl->tpl_vars['checkBillingHistory']->value['payment_method'] == '4') {?>
												<?php $_smarty_tpl->_assignInScope('ONEPAY_Visa_Name', ('ONEPAY_Visa_Name_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
												<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['ONEPAY_Visa_Name']->value);?>

											<?php } elseif ($_smarty_tpl->tpl_vars['checkBillingHistory']->value['payment_method'] == '5') {?>
												<?php $_smarty_tpl->_assignInScope('Paypal_Name', ('Paypal_Name_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
												<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['Paypal_Name']->value);?>

											<?php } elseif ($_smarty_tpl->tpl_vars['checkBillingHistory']->value['payment_method'] == '6') {?>
												<?php $_smarty_tpl->_assignInScope('ONEPAY_Visa_Name', ('ONEPAY_Visa_Name_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
												<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['ONEPAY_Visa_Name']->value);?>

											<?php } elseif ($_smarty_tpl->tpl_vars['checkBillingHistory']->value['payment_method'] == '7') {?>
												<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('QR code');?>

											<?php }?></p>
									<p class="info-bill"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Note');?>
: <?php echo $_smarty_tpl->tpl_vars['checkBillingHistory']->value['note'];?>
</p>
									<button id="success_bill" class="btn_success_bill" type="button" data-billing_id="<?php echo $_smarty_tpl->tpl_vars['checkBillingHistory']->value['billing_history_id'];?>
" value="SUCCESS"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Payment');?>
</button>
								<?php } else { ?>
								<p class="title_add_pay"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Add Payment');?>
</p>
								<p class="error" style="color: red;display: none;margin-bottom: 10px;"></p>
								<div class="box_add_money">
									<p class="title_item"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Amount Money');?>
</label>
									<p class="title_text mgb15"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Pay the amount you want');?>
</p>
									<div class="mgb15 d-flex align-items-center">
										<input type="radio" name="choose_payment" value="0" checked> 
										<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" name="booking_id">
										<label for="" class="lbl_title"><?php echo number_format($_smarty_tpl->tpl_vars['money_max']->value,0,"."," ");?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRateText();?>
 (<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Pay off');?>
)</label>
										<input type="hidden" name="money_min" value="<?php echo $_smarty_tpl->tpl_vars['money_max']->value;?>
" data-min="<?php echo number_format($_smarty_tpl->tpl_vars['money_min']->value,0,"."," ");?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRateText();?>
" data-max="<?php echo number_format($_smarty_tpl->tpl_vars['money_max']->value,0,"."," ");?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRateText();?>
"> 
									</div>
									<p class="title_text"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('or another number');?>
</p>
									<div class=" d-flex align-items-center">
										<input type="radio" name="choose_payment" value="1"> 
										<div class="box_input">
											<input class="price_tour" type="text" name="money" value="0" min="<?php echo $_smarty_tpl->tpl_vars['money_min']->value;?>
" max="<?php echo $_smarty_tpl->tpl_vars['money_max']->value;?>
">
											<span class="rate"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getRate();?>
</span>
										</div>
									</div>
								</div>
								<div class="box_add_money">
									<p class="title_item"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Payments term');?>
</label>
									<div class="box_input_date">
										<input class="text full datepicker" name="payment_term" value="" type="text" placeholder="dd/mm/yyyy"/>
									</div>

								</div>
								<div class="box_add_money">
									<p class="title_item"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Payments');?>
</label>
									<select name="payment_method" id="" class="slt_payment">
										<?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SitePay_CashStatus_Mode')) {?>
										<?php $_smarty_tpl->_assignInScope('SitePay_CashName', ('SitePay_CashName_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
										<?php $_smarty_tpl->_assignInScope('SitePay_CashDesc', ('SitePay_CashDesc_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
										<option value="1"><?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['SitePay_CashName']->value);?>
</option>
										<?php }?>
										<?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SitePay_Bank_Mode')) {?>
										<?php $_smarty_tpl->_assignInScope('SitePay_BankName', ('SitePay_BankName_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
										<option value="2"><?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['SitePay_BankName']->value);?>
</option>
										<?php }?>
										<!-- Onepay ATM -->                           
										<?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('ONEPAY_Status_Mode')) {?>
										<?php $_smarty_tpl->_assignInScope('ONEPAY_Name', ('ONEPAY_Name_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
										<option value="3"><?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['ONEPAY_Name']->value);?>
</option>
										<?php }?>
										<!-- Onepay Visa -->
										<?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('ONEPAY_Visa_Status_Mode')) {?>
										<?php $_smarty_tpl->_assignInScope('ONEPAY_Visa_Name', ('ONEPAY_Visa_Name_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
										<option value="4"><?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['ONEPAY_Visa_Name']->value);?>
</option>
										<?php }?>
										<?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('ONEPAY_Visa_Status_Mode')) {?>
										<?php $_smarty_tpl->_assignInScope('ONEPAY_Visa_Name', ('ONEPAY_Visa_Name_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
										<option value="6"><?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['ONEPAY_Visa_Name']->value);?>
</option>
										<?php }?>
										<!-- Paypal -->
										<?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('Paypal_Status_Mode')) {?>
										<?php $_smarty_tpl->_assignInScope('Paypal_Name', ('Paypal_Name_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
										<option value="5"><?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['Paypal_Name']->value);?>
</option>
										<?php }?>
									</select>
								</div>
								<div class="box_add_money mgb15">
									<p class="title_item"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Notes');?>
</label>
									<textarea name="note" id="" cols="30" rows="10" class="note"></textarea>
								</div>
								<div class="box_footer_payment">
									<button class="btn_preview" data-send="" onClick="billing_booking(this)" value="PREVIEW"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Preview');?>
</button>
									<div class="box_button">
										<button class="btn_save" id="cancel" type="reset"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cancel');?>
</button>
										<button class="btn_pay" data-send="" onClick="billing_booking(this)" value="PREVIEW"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Send');?>
</button>
									</div>
								</div>						

	<!--							<button class="btn_pay" data-toggle="modal" data-target="#billAdd"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Payment');?>
</button>-->				<?php }?>
							</div>
							<?php }?>


							<?php echo smarty_function_math(array('assign'=>"max_cashback",'equation'=>"x-y-z",'x'=>$_smarty_tpl->tpl_vars['oneItem']->value['totalgrand'],'y'=>$_smarty_tpl->tpl_vars['oneItem']->value['totalcancel'],'z'=>$_smarty_tpl->tpl_vars['total_cashback']->value),$_smarty_tpl);?>

							<p class="add_payment back_money collapsed" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Extra cashback');?>
</p>
							<?php if ($_smarty_tpl->tpl_vars['max_cashback']->value > 0 || $_smarty_tpl->tpl_vars['checkBillingHistoryCashback']->value) {?>
							<div class="box_pay box_cashback mgb15 collapse" id="collapse2" data-parent="#collapse">
								<?php if ($_smarty_tpl->tpl_vars['checkBillingHistoryCashback']->value) {?>
									<p class="bill_id"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Invoice waiting for confirmation');?>
: <span>#<?php echo $_smarty_tpl->tpl_vars['checkBillingHistoryCashback']->value['billing_history_id'];?>
</span></p>
									<p class="info-bill"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Date_created');?>
: <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['checkBillingHistoryCashback']->value['reg_date'],"%d/%m/%Y - %H:%M");?>
</p>
									<p class="info-bill"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Amount Money');?>
: <?php echo number_format($_smarty_tpl->tpl_vars['checkBillingHistoryCashback']->value['bill_money'],0,"."," ");?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</p>
									<p class="info-bill"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Payments');?>
: 
											<?php if ($_smarty_tpl->tpl_vars['checkBillingHistoryCashback']->value['payment_method'] == '1') {?>
												<?php $_smarty_tpl->_assignInScope('SitePay_CashName', ('SitePay_CashName_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
												<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['SitePay_CashName']->value);?>

											<?php } elseif ($_smarty_tpl->tpl_vars['checkBillingHistoryCashback']->value['payment_method'] == '2') {?>
												<?php $_smarty_tpl->_assignInScope('SitePay_BankName', ('SitePay_BankName_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
												<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['SitePay_BankName']->value);?>

											<?php } elseif ($_smarty_tpl->tpl_vars['checkBillingHistoryCashback']->value['payment_method'] == '3') {?>
												<?php $_smarty_tpl->_assignInScope('ONEPAY_Name', ('ONEPAY_Name_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
												<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['ONEPAY_Name']->value);?>

											<?php } elseif ($_smarty_tpl->tpl_vars['checkBillingHistoryCashback']->value['payment_method'] == '4') {?>
												<?php $_smarty_tpl->_assignInScope('ONEPAY_Visa_Name', ('ONEPAY_Visa_Name_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
												<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['ONEPAY_Visa_Name']->value);?>

											<?php } elseif ($_smarty_tpl->tpl_vars['checkBillingHistoryCashback']->value['payment_method'] == '5') {?>
												<?php $_smarty_tpl->_assignInScope('Paypal_Name', ('Paypal_Name_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
												<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['Paypal_Name']->value);?>

											<?php } elseif ($_smarty_tpl->tpl_vars['checkBillingHistoryCashback']->value['payment_method'] == '6') {?>
												<?php $_smarty_tpl->_assignInScope('ONEPAY_Visa_Name', ('ONEPAY_Visa_Name_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
												<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['ONEPAY_Visa_Name']->value);?>

											<?php } elseif ($_smarty_tpl->tpl_vars['checkBillingHistoryCashback']->value['payment_method'] == '7') {?>
												<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('QR code');?>

											<?php }?></p>
									<p class="info-bill"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Note');?>
: <?php echo $_smarty_tpl->tpl_vars['checkBillingHistoryCashback']->value['note'];?>
</p>
									<button id="success_bill_cashback" class="btn_success_bill" type="button" data-billing_id="<?php echo $_smarty_tpl->tpl_vars['checkBillingHistoryCashback']->value['billing_history_id'];?>
" value="SUCCESS"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Payment');?>
</button>
								<?php } else { ?>
								<p class="title_add_pay"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Extra cashback');?>
</p>
								<p class="error" style="color: red;display: none;margin-bottom: 10px;"></p>
								<div class="box_add_money">
									<p class="title_item"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Amount Money');?>
</label>
									<div class=" d-flex align-items-center">
										<div class="box_input">
											<input class="price_tour" type="text" name="money" value="0" max="<?php echo $_smarty_tpl->tpl_vars['max_cashback']->value;?>
" >
											<span class="rate"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getRate();?>
</span>
										</div>
									</div>
								</div>
								<div class="box_add_money mgb15">
									<p class="title_item"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Notes');?>
</label>
									<textarea name="note" id="" cols="30" rows="10" class="note"></textarea>
								</div>
								<div class="box_footer_payment justify-content-end">
									<button class="btn_save mr5" id="cancel" type="reset"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cancel');?>
</button>
									<button class="btn_pay" data-send="" onClick="billing_cashback(this)" value="CASHBACK"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Send');?>
</button>
								</div>
								<?php }?>
							</div>
							<?php }?>
						</div>
					</div>
				</div>
				<!--modal bill-->
					<div class="modal fade" id="billAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-body">
								</div>
								<div class="modal-footer">
									<div class="box_footer_modal">									
										<div class="footer_modal_left">
											<a href="" class="download" id="download_bill" target="_blank" style="display: none"><i class="fa fa-download" aria-hidden="true"></i><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Download bill');?>
</a>
											<a href="javascript:void(0)" class="copy" id="copy_bill" style="display: none"><i class="fa fa-clone" aria-hidden="true"></i><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Copy');?>
</a>
											<input type="hidden" id="billing_id" value="<?php echo $_smarty_tpl->tpl_vars['lstBillingHistory']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['billing_history_id'];?>
">
										</div>
										<div class="footer_modal_right">
											<button type="button" class="btn btn-default close_modal_booking" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Close');?>
</button>
											<button type="button" class="btn btn-main btn_comfirm_bill" data-send="" id="btn_comfirm_bill" value="SAVE"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Confirm');?>
</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<!--end modal bill-->
			</div>
			<?php if ($_smarty_tpl->tpl_vars['tour_cart_store']->value) {?>
			<div class="tabbox" style="display: none">
				<div class="wrap">
					<div class="box_button mb20"><button type="button" class="btn_add_group_list" data-booking_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
">+ <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Add new");?>
 / <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Edit');?>
</button>
					</div>
					<table cellspacing="0" class="tbl-grid table-striped table_responsive" width="100%">
						<thead>
							<tr>
								<th class="gridheader name_responsive text-left" style="width: 200px;"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Full name');?>
</strong></th>
								<th class="gridheader hiden_responsive text-left" style="width: 200px"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Email');?>
</strong></th>
								<th class="gridheader hiden_responsive text-left" style="width: 200px"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Birthday');?>
</strong></th>
								<th class="gridheader hiden_responsive text-left" style="width: 200px"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Phone');?>
</strong></th>
								<th class="gridheader hiden_responsive text-left" style="width:130px"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Country');?>
</strong></th>	
								<th class="gridheader hiden_responsive text-left"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Address');?>
</strong></th>
							</tr>
						</thead>
						<tbody id="SortAble">
						<?php if ($_smarty_tpl->tpl_vars['arr_customer']->value) {?>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr_customer']->value, 'item', false, NULL, 'i', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
								<tr class="row1">	
									<td style="text-align: left" class="text-left name_service">
										<span class="title" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Full name');?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['full_name'];?>
</span>
									</td>
									<td class="block_responsive border_top_responsive" data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Email');?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['email'];?>
</td>
									<td class="block_responsive border_top_responsive" data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Email');?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['birthday'];?>
</td>
									<td class="block_responsive border_top_responsive" style="white-space:nowrap" data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Phone');?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['phone'];?>
</td>

									<td class="block_responsive border_top_responsive" style="white-space:nowrap" data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Country');?>
"><?php echo $_smarty_tpl->tpl_vars['clsCountry']->value->getTitle($_smarty_tpl->tpl_vars['item']->value['country']);?>
</td>
									<td class="block_responsive border_top_responsive" style="" data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Address');?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['address'];?>
</td>
								</tr>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						<?php } else { ?>
							<tr class="row1">	
									<td class="text-center name_service" colspan="6">
										<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('nodata');?>

									</td>
								</tr>
						<?php }?>
						</tbody>							
					</table>
					<div class="modal right fade" id="addGroupList" role="dialog">
						<div class="modal-dialog" role="document">
							<div class="modal-content">	
								<div class="box_section box_contact">
									<a class="btn btn-primary btn_title" type="button"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Add new');?>
 / <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Edit');?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('group list');?>
</a>
									<div class="box_form">
										<form action="" method="" id="frmAddGroupList" onsubmit="return false">
											<div class="box_customer_tour">
											</div>
											<div class="row">
												<div class="col-lg-12 text-right">
													<button class="btn_cancel close_modal_booking" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cancel');?>
</button>
													<button class="btn_submit btn-main btnClickToSubmitAddGroupList" data-booking_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Submit');?>
</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php }?>
		<?php }?>
		<div class="tabbox" style="display: none">
			<div class="wrap">				
				<div class="page-title">
					<p class="title_box_email bold600"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Email confirm');?>
</p>
					<p class="text_email">(<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Email automatically sent to customers when confirming the service');?>
)</p>
				</div>
				<div class="clearfix"></div>
				<form id="newitem" method="post" action="" enctype="multipart/form-data" class="validate-form">
					<div class="row-field">
						<div style="width: 100%;padding: 15px 22px 18px 20px;font-family: 'Segoe UI';background: #F1F1F1;font-weight: 400;color: #222222;">
							<center style="width: 100%;height: 70px;background: #101A36;">
								<div style="width: 100%;height: 100%;max-width: 650px;display: flex;justify-content: space-between;align-items:center;padding:0px 5px">
									<a href="<?php echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;
echo $_smarty_tpl->tpl_vars['extLang']->value;?>
" title="IsoCMS.com"><img width="109" height="54" src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/logo_isocms_mail.png" alt="IsoCMS.com"></a>
									<div style="text-align: right;color: #fff;">
										<p style="margin: 0;font-weight: 400;font-size: 14px;line-height: 19px; color: #FFFFFF;"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Booking Code');?>
: <?php echo $_smarty_tpl->tpl_vars['oneItem']->value['booking_code'];?>
</p>
										<p style="margin: 0;font-weight: 400;font-size: 14px;line-height: 19px; color: #FFFFFF;"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Verification code');?>
: 12321321</p>
									</div>
								</div>
							</center>
							<!--<table style="width: 100%;max-width: 650px;">
								<tr>
									<td style="padding: 0">
										<div style="background:#fff;border-top: 5px solid #32A923;border-radius: 5px 5px 0px 0px;text-align:center;margin-top: 30px;">
											<div style="padding: 30px 30px 0px;">
												<img width="35" height="35" src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/icon/icon_tick_email.png" alt="tick" style="margin-bottom: 19px">
												<h1 style="font-weight: 700;font-size: 21px;line-height: 28px;color: #32A923;margin-bottom: 34px;"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Your service has been confirmed');?>
</h1>
												<div style="text-align: left;">
													<p style="font-size: 16px;line-height: 21px;margin-bottom: 17px;display: flow-root"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Dear');?>
 <?php echo $_smarty_tpl->tpl_vars['oneItem']->value['full_name'];?>
,</p>
													<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tour_cart_store']->value, 'item', false, NULL, 'i', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
														<?php $_smarty_tpl->_assignInScope('tour_id', $_smarty_tpl->tpl_vars['item']->value['tour_id_z']);?>
														<?php $_smarty_tpl->_assignInScope('title', $_smarty_tpl->tpl_vars['clsTour']->value->getTitle($_smarty_tpl->tpl_vars['tour_id']->value));?>
														<?php $_smarty_tpl->_assignInScope('Depart_point', $_smarty_tpl->tpl_vars['clsTour']->value->getDepartureCity($_smarty_tpl->tpl_vars['tour_id']->value));?>
														<?php if ($_smarty_tpl->tpl_vars['clsTour']->value->getTextdepartureCityEnd($_smarty_tpl->tpl_vars['tour_id']->value) != '') {?>
															<?php $_smarty_tpl->_assignInScope('address', $_smarty_tpl->tpl_vars['clsTour']->value->getTextdepartureCityEnd($_smarty_tpl->tpl_vars['tour_id']->value));?>
														<?php } else { ?>
															<?php $_smarty_tpl->_assignInScope('address', $_smarty_tpl->tpl_vars['fullTextAddress']->value);?>
														<?php }?>
														<p style="font-size: 16px;line-height: 21px;margin-bottom: 17px;display: flow-root"><img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/icon/icon_tick.png" alt="tick" style="margin-right: 16px;margin-right: 16px;float: left;margin-top: 6px;"><span style=" width: calc(100% - 29px); float: left; "><b><?php echo $_smarty_tpl->tpl_vars['tour_id']->value;?>
: [<?php echo $_smarty_tpl->tpl_vars['Depart_point']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['address']->value;?>
] <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</b> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('is departed from');?>
 <b><?php echo $_smarty_tpl->tpl_vars['Depart_point']->value;?>
</b> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('days');?>
 <b><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->converTimeToText7($_smarty_tpl->tpl_vars['item']->value['check_in_book_z']);?>
</b></span></p>
														<p style="font-size: 16px;line-height: 21px;margin-bottom: 17px;display: flow-root"><img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/icon/icon_tick.png" alt="tick" style="margin-right: 16px;margin-right: 16px;float: left;margin-top: 6px;"><span style=" width: calc(100% - 29px); float: left; "><b><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Payment');?>
</b> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('yours will be handled by');?>
 isoCMS. <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('The');?>
 "<b><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Contact Information');?>
</b>" <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('section below will give you more information');?>
</span></p>
														<p style="font-size: 16px;line-height: 21px;margin-bottom: 48px;display: flow-root"><img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/icon/icon_tick.png" alt="tick" style="margin-right: 16px;margin-right: 16px;float: left;margin-top: 6px;"><span style=" width: calc(100% - 29px); float: left; "><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('You can cancel for FREE until');?>
 <b><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->converTimeToText8($_smarty_tpl->tpl_vars['item']->value['check_in_book_z'],7,'');?>
</b></span></p>
													<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
												</div>
											</div>
											<div style="padding: 20px;background: rgba(245, 131, 33, 0.1);border-radius: 0px 0px 5px 5px;">
												<p style="font-size: 13px;line-height: 18px;color: #666666;width: 100%;max-width: 400px;margin: auto;"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('To view, cancel, or modify your booking, use our easy self-service');?>
.</p>
											</div>
										</div>
									</td>
								</tr>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tour_cart_store']->value, 'item', false, NULL, 'i', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
									<?php $_smarty_tpl->_assignInScope('tour_id', $_smarty_tpl->tpl_vars['item']->value['tour_id_z']);?>
									<?php $_smarty_tpl->_assignInScope('title', $_smarty_tpl->tpl_vars['clsTour']->value->getTitle($_smarty_tpl->tpl_vars['tour_id']->value));?>
									<?php $_smarty_tpl->_assignInScope('Depart_point', $_smarty_tpl->tpl_vars['clsTour']->value->getDepartureCity($_smarty_tpl->tpl_vars['tour_id']->value));?>
									<?php $_smarty_tpl->_assignInScope('fullTextAddress', $_smarty_tpl->tpl_vars['clsTour']->value->getTextdepartureCityEnd($_smarty_tpl->tpl_vars['tour_id']->value,'full'));?>
									<?php $_smarty_tpl->_assignInScope('tour_option', $_smarty_tpl->tpl_vars['clsTourOption']->value->getTitle($_smarty_tpl->tpl_vars['item']->value['tour__class']));?>
									<?php $_smarty_tpl->_assignInScope('lstService', $_smarty_tpl->tpl_vars['clsTour']->value->getListService($_smarty_tpl->tpl_vars['tour_id']->value));?>
									<?php if ($_smarty_tpl->tpl_vars['clsTour']->value->getTextdepartureCityEnd($_smarty_tpl->tpl_vars['tour_id']->value) != '') {?>
										<?php $_smarty_tpl->_assignInScope('address', $_smarty_tpl->tpl_vars['clsTour']->value->getTextdepartureCityEnd($_smarty_tpl->tpl_vars['tour_id']->value));?>
									<?php } else { ?>
										<?php $_smarty_tpl->_assignInScope('address', $_smarty_tpl->tpl_vars['fullTextAddress']->value);?>
									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['item']->value['price_deposit']) {?>
										<?php $_smarty_tpl->_assignInScope('price_deposit', $_smarty_tpl->tpl_vars['item']->value['price_deposit']);?>
									<?php } else { ?>
										<?php $_smarty_tpl->_assignInScope('price_deposit', 0);?>
									<?php }?>
									<?php echo smarty_function_math(array('assign'=>"balance",'equation'=>"x-y",'x'=>$_smarty_tpl->tpl_vars['item']->value['total_price_z'],'y'=>$_smarty_tpl->tpl_vars['price_deposit']->value),$_smarty_tpl);?>

									
									<tr>
										<td style="padding: 0">
											<div style="background:#fff;border-radius: 5px;margin-top: 20px;padding: 30px 30px 24px;">
												<div style="padding-bottom: 20px;clear: both;height: 100%;display: flow-root;border-bottom: 1px solid rgba(0, 0, 0, 0.1);">
													<a href="<?php echo $_smarty_tpl->tpl_vars['clsTour']->value->getLink($_smarty_tpl->tpl_vars['tour_id']->value);?>
" title="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
"><img width="128" height="85" src="<?php echo $_smarty_tpl->tpl_vars['clsTour']->value->getImage($_smarty_tpl->tpl_vars['tour_id']->value,128,85);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" style="margin-right: 20px;width: 20%;height: auto; max-width: 128px;float: left">
													<h3 style=" overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; font-weight: 700; font-size: 18px; line-height: 24px; color: #222222; width: calc(80% - 20px);float:left"><?php echo $_smarty_tpl->tpl_vars['tour_id']->value;?>
: [<?php echo $_smarty_tpl->tpl_vars['Depart_point']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['address']->value;?>
] <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3></a>
												</div>
												<div style=" padding: 20px 0px; border-bottom: 1px solid rgba(0, 0, 0, 0.1); display: flex; justify-content: space-between; font-size: 14px; line-height: 19px; ">
													<div style=" width: 50%; border-right: 1px solid rgba(0, 0, 0, 0.1); ">
														<p style=" font-weight: 600; margin-bottom: 10px; "><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Departure');?>
</p>
														<p style=" margin-bottom: 5px; "><?php echo $_smarty_tpl->tpl_vars['clsTour']->value->getListDeparturePoint($_smarty_tpl->tpl_vars['tour_id']->value);?>
</p>
														<p style=" margin: 0; "><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->converTimeToText7($_smarty_tpl->tpl_vars['item']->value['check_in_book_z']);?>
</p>
													</div>
													<div style="text-align: right;width:50%">
														<p style=" margin-bottom: 10px; font-weight: 600; "><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('End');?>
</p>
														<p style=" margin-bottom: 5px; "><?php echo $_smarty_tpl->tpl_vars['fullTextAddress']->value;?>
</p>
														<p style=" margin: 0; "><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->converTimeToText5($_smarty_tpl->tpl_vars['clsTour']->value->getTextEndDate($_smarty_tpl->tpl_vars['item']->value['check_in_book_z'],$_smarty_tpl->tpl_vars['tour_id']->value));?>
</p>
													</div>
												</div>
												<div style=" padding: 20px 0px; border-bottom: 1px solid rgba(0, 0, 0, 0.1); display: flex; justify-content: space-between; font-size: 14px; line-height: 19px; ">
													<p style=" margin: 0; "><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Tour option');?>
</p>
													<p style=" margin: 0; "><?php echo $_smarty_tpl->tpl_vars['tour_option']->value;?>
</p>
												</div>
												<div style=" padding: 20px 0px; border-bottom: 1px solid rgba(0, 0, 0, 0.1); display: flex; justify-content: space-between; font-size: 14px; line-height: 19px; ">
													<p style=" margin: 0; "><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Duration');?>
</p>
													<p style=" margin: 0; "><?php echo $_smarty_tpl->tpl_vars['clsTour']->value->getTripDuration($_smarty_tpl->tpl_vars['tour_id']->value);?>
</p>
												</div>
												<div style=" padding: 20px 0px; border-bottom: 1px solid rgba(0, 0, 0, 0.1); display: flex; justify-content: space-between; font-size: 14px; line-height: 19px; ">
													<div>
														<p style=" margin: 0; "><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Tourer');?>
</p>
													</div>
													<div>
														<?php if ($_smarty_tpl->tpl_vars['item']->value['number_infants']) {?><p style=" margin-bottom: 5px; "><?php echo $_smarty_tpl->tpl_vars['item']->value['number_infants'];?>
 x <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Infants');?>
</p><?php }?>
														<?php if ($_smarty_tpl->tpl_vars['item']->value['number_child_z']) {?><p style=" margin: 0; "><?php echo $_smarty_tpl->tpl_vars['item']->value['number_child_z'];?>
 x <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Children');?>
</p><?php }?>
											
													</div>
												</div>
												<div style=" padding: 20px 0px; border-bottom: 1px solid rgba(0, 0, 0, 0.1); display: flex; justify-content: space-between; font-size: 14px; line-height: 19px; ">
													<div>
														<p style=" margin: 0; "><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Services bonus');?>
</p>
													</div>
													<div>
														<p style=" margin: 0; ">
															<?php if ($_smarty_tpl->tpl_vars['lstService']->value) {?>
																<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lstService']->value, 'itemService', false, NULL, 'i', array (
));
$_smarty_tpl->tpl_vars['itemService']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['itemService']->value) {
$_smarty_tpl->tpl_vars['itemService']->do_else = false;
?>
																	<?php echo $_smarty_tpl->tpl_vars['clsAddOnService']->value->getTitle($_smarty_tpl->tpl_vars['itemService']->value);?>
</br>
																<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
															<?php }?>
														</p>
													</div>
												</div>
												<div style=" padding-top: 20px; display: flex; justify-content: space-between; font-size: 14px; line-height: 19px; ">
													<div>
														<p style=" margin: 0; "><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Customer Contact');?>
</p>
													</div>
													<div style="text-align: right">
														<p style=" font-weight: 600; margin-bottom: 10px; "><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['full_name'];?>
</p>
														<p style=" font-weight: 600; margin-bottom: 10px; "><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['email'];?>
</p>
														<p style=" font-weight: 600; margin-bottom: 0px;"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['phone'];?>
</p>
													</div>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td style="padding: 0">
											<h2 style=" font-weight: 700; font-size: 16px; line-height: 21px; color: #222222; margin-top: 20px; "><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Payment Details');?>
</h2>
											<div style="background:#fff;border-radius: 5px;text-align:center;margin-top: 18px;">
												<div style="padding: 30px">
													<p style="margin-bottom: 13px; display: flex; justify-content: space-between; font-size: 16px; line-height: 21px; ">
														<span style=" margin: 0; "><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Total price service');?>
</span>
														<span style=" margin: 0; "><?php echo number_format($_smarty_tpl->tpl_vars['item']->value['total_price_z'],0,"."," ");?>
 đ</span>
													</p>
													<p style="margin-bottom: 13px; display: flex; justify-content: space-between; font-size: 16px; line-height: 21px; ">
														<span style=" margin: 0; "><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Deposit');?>
 (<?php if ($_smarty_tpl->tpl_vars['item']->value['deposit']) {
echo $_smarty_tpl->tpl_vars['item']->value['deposit'];
} else { ?>0<?php }?>%)</span>
														<span style=" margin: 0; "><?php echo number_format($_smarty_tpl->tpl_vars['item']->value['price_deposit'],0,"."," ");?>
 đ</span>
													</p>
													<p style="margin-bottom: 13px; display: flex; justify-content: space-between; font-size: 16px; line-height: 21px; ">
														<span style=" margin: 0; "><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Balance');?>
</span>
														<span style=" margin: 0; "><?php echo number_format($_smarty_tpl->tpl_vars['balance']->value,0,"."," ");?>
 đ</span>
													</p>
													<p style="margin-bottom: 13px; display: flex; justify-content: space-between; font-size: 16px; line-height: 21px; ">
														<span style=" margin: 0; font-weight: 600"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Total payment');?>
</span>
														<span style=" margin: 0; font-weight: 600 "><?php echo number_format($_smarty_tpl->tpl_vars['item']->value['price_deposit'],0,"."," ");?>
 đ</span>
													</p>
												</div>
												<div style="padding: 18px;background: #FFE62E;border-radius: 0px 0px 5px 5px;">
													<p style="width: 100%;max-width: 440px;margin: auto;font-size: 14px;line-height: 20px;text-align: center;color: #222222;"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('You must pay');?>
 <span style=" font-weight: 600; color: rgba(255, 0, 0, 1); "><?php echo number_format($_smarty_tpl->tpl_vars['balance']->value,0,"."," ");?>
 đ</span> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('to us 1 day before departure');?>
 (<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->converTimeToText8($_smarty_tpl->tpl_vars['item']->value['check_in_book_z']);?>
)</p>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td style="padding: 0">
											<div style="background:#fff;border-radius: 5px;margin-top: 18px;padding: 30px;">
												<h2 style=" font-weight: 700; font-size: 18px; line-height: 24px; color: #222222; margin-bottom: 20px; "><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Customer support');?>
</h2>
												<p style=" font-size: 15px; line-height: 24px; color: #222222; margin: 0; "><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Using our convenient support mode, travelers can take action to resend confirmation, make a request, cancel a room or modify contact information');?>
.</p>
												<div style=" display: flex; flex-wrap: wrap; justify-content: space-between; text-align: center; ">
													<div style="min-width: 163px; width: 50%; margin-top: 33px; ">
														<div style="width: 53px;height: 53px;margin: auto;margin-bottom: 10px;background: #FFE62E;border-radius: 50%;display: flex;align-items: center;justify-content: center;"><img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/icon/icon_mail_send.png" alt=""></div>
														<p style=" width: 100%; max-width: 160px; margin: auto; font-weight: 600; font-size: 16px; line-height: 24px; text-align: center; color: #2B439F; margin-bottom: 10px; "><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Share confirmation');?>
</p>
														<p style=" width: 100%; max-width: 164px; margin: auto; font-size: 14px; line-height: 20px; text-align: center; color: #222222; "><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Resend service confirmations to yourself or others');?>
</p>
													</div>
													<div style="min-width: 163px; width: 50%; margin-top: 33px; ">
														<div style="width: 53px;height: 53px;margin: auto;margin-bottom: 10px;background: #FFE62E;border-radius: 50%;display: flex;align-items: center;justify-content: center;"><img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/icon/icon_story.png" alt=""></div>
														<p style=" width: 100%; max-width: 160px; margin: auto; font-weight: 600; font-size: 16px; line-height: 24px; text-align: center; color: #2B439F; margin-bottom: 10px; "><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Special requirements');?>
</p>
														<p style=" width: 100%; max-width: 164px; margin: auto; font-size: 14px; line-height: 20px; text-align: center; color: #222222; "><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Add some special requests for the best trip');?>
</p>
													</div>
													<div style="min-width: 163px; width: 50%; margin-top: 33px; ">
														<div style="width: 53px;height: 53px;margin: auto;margin-bottom: 10px;background: #FFE62E;border-radius: 50%;display: flex;align-items: center;justify-content: center;"><img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/icon/icon_cancel_file.png" alt=""></div>
														<p style=" width: 100%; max-width: 160px; margin: auto; font-weight: 600; font-size: 16px; line-height: 24px; text-align: center; color: #2B439F; margin-bottom: 10px; "><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cancel service');?>
</p>
														<p style=" width: 100%; max-width: 164px; margin: auto; font-size: 14px; line-height: 20px; text-align: center; color: #222222; "><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cancel online service easily before');?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->converTimeToText8($_smarty_tpl->tpl_vars['item']->value['check_in_book_z'],7,'');?>
</p>
													</div>
													<div style="min-width: 163px; width: 50%; margin-top: 33px; ">
														<div style="width: 53px;height: 53px;margin: auto;margin-bottom: 10px;background: #FFE62E;border-radius: 50%;display: flex;align-items: center;justify-content: center;"><img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/icon/icon_contact_book.png" alt=""></div>
														<p style=" width: 100%; max-width: 160px; margin: auto; font-weight: 600; font-size: 16px; line-height: 24px; text-align: center; color: #2B439F; margin-bottom: 10px; "><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Contact Information');?>
</p>
														<p style=" width: 100%; max-width: 164px; margin: auto; font-size: 14px; line-height: 20px; text-align: center; color: #222222; "><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Change some contact information');?>
</p>
													</div>
												</div>
											</div>
										</td>
									</tr>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								<tr>
									<td style="padding: 0">
									<?php $_smarty_tpl->_assignInScope('CompanyAddress', ('CompanyAddress_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
										<div style="background:#fff;border-radius: 5px;margin-top: 18px;padding: 30px 30px 34px;">
											<h2 style=" font-weight: 700; font-size: 18px; line-height: 24px; color: #222222; margin-bottom: 20px; "><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Need more support information');?>
?</h2>
											<p style=" font-size: 15px; line-height: 24px; color: #222222; margin-bottom: 20px; "><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Let your hotline');?>
 <b><?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('CompanyHotline');?>
</b> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('always be within reach');?>
. <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('You will need it if you want to contact our customer support');?>
.</p> 
											<p style=" font-size: 15px; line-height: 24px; color: #222222; margin-bottom: 20px; "><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Quickly learn the “how” in our content diverse FAQ library');?>
.</p>
											<div style=" height: 46px; line-height: 46px; background: rgba(255, 230, 46, 0.2); border: 1px solid #FFE62E; text-align: center; ">
												<a href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('faqs');?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Faqs');?>
" style=" font-weight: 600; font-size: 16px;color: #000000; "><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Questions frequently');?>
</a>
											</div>
											
										</div>
									</td>
								</tr>
								<tr>
									<td style="padding: 0">
										<div style="border-radius: 5px;padding: 30px 30px 34px;">
											<p style=" font-weight: 600; font-size: 14px; line-height: 19px; color: #555555; text-transform: uppercase; text-align: center; margin-bottom: 10px; "><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Online tourism business plan');?>
 - ISOCMS</p>
											<div style=" font-weight: 400; font-size: 14px; line-height: 19px; text-align: center; color: #555555; ">
												<p style=" margin-bottom: 5px; "><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Phone');?>
: <?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('CompanyHotline');?>
</p>
												<p style=" margin-bottom: 5px; "><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Address');?>
: <?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['CompanyAddress']->value);?>
</p>
												<p style=" margin-bottom: 5px; "><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Email');?>
: <a href="mailto:<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('CompanyEmail');?>
" title="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('CompanyEmail');?>
"><?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('CompanyEmail');?>
</a></p>
												<p style=" margin-bottom: 20px; "><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Website');?>
: <a href="https://isocms.com" title="vietiso.com">https://isocms.com</a></p>
											</div>
											<div style=" text-align: center; ">
												<a href="http://www.facebook.com/<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SiteFacebookLink');?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Facebook');?>
" style=" margin-right: 10px; "><img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/icon/icon_fb.png" alt="facebook"></a>
												<a href="http://www.twitter.com/<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SiteTwitterLink');?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Twitter');?>
" style=" margin-right: 10px; "><img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/icon/icon_twiter.png" alt="twiter"></a>
												<a href="http://www.youtube.com/<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SiteYoutubeLink');?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Youtube');?>
" style=" margin-right: 10px; "><img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/icon/icon_youtube.png" alt="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Youtube');?>
"></a>
											</div>
										</div>
									</td>
								</tr>
							</table>-->
							<?php echo html_entity_decode($_smarty_tpl->tpl_vars['oneItem']->value['booking_html']);?>

						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php echo '<script'; ?>
>
var text_price_min_error = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Price min');?>
";
var text_price_max_error = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Price max');?>
";
var text_price_error = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Amount must be greater than 0');?>
";
var text_payment_term_error = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Payment term is required');?>
";
var $booking_id = 	"<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
";
var comfirm_cancel_booking="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Are you sure cancel booking?');?>
";
<?php echo '</script'; ?>
>

<style type="text/css">
.table-mce{margin:0 auto}
td{ font-size:13px !important}
.hidden { display:none !important}
</style>
<?php echo '<script'; ?>
>
	if($("#bookingTab").length>0){
		makeBookingTabs();
	}
	if($("#bookingtab").length>0){
		makeSystemBookingTab();
	}
	$('.item_tour .dropdown-toggle').click(function(){
		$(this).find('i.fa').toggleClass('fa-angle-up');
		$(this).find('i.fa').toggleClass('fa-angle-down');
	});
	$(document).on("click",'.content_pay_right .add_payment',function(){
		$(".content_pay_right .collapse").collapse('hide');
		if($(this).hasClass("collapsed")){
			$(this).next().collapse('show');
		}
	});
	$(document).on("click","#success_bill,#success_bill_cashback",function(e){
		$_this = $(this);
		var value = $_this.val();
		if(value == "SUCCESS"){
			$.ajax({
				type: "POST",
				data: {
					billing_id 		: $(this).data("billing_id"),
					status		:	1
				},
				async:false,
				url: path_ajax_script+"/index.php?mod=booking&act=ajupdateComfirmBilling",
				success: function(result){
					vietiso_loading(0);
					if(result){
						alertify.success('Success !');
						location.reload();
					}else{
						alertify.success('Error !');
						location.reload();
					}
					setTimeout(function() { 
						$_this.val("SUCCESS");
					}, 5000);
				},
				beforeSend: function (){
					$_this.val("SENDING");
					vietiso_loading(1);
				}
			});
		}
		
	});
	$(document).on('click','#cancel',function(){
		$("input[name='money']").val(0);
		$("input[name='payment_term']").val('');
		$("select[name='payment_method']").val('');
		$("textarea[name='note']").val('');
	});
	$(document).on('click','#btn_comfirm_bill',function(){
		var box_info = $("#billAdd").find("#info_customer");
		var elm_customer_name = box_info.find("input[name='name_customer']");
		var elm_customer_email = box_info.find("input[name='email_customer']");
		var elm_customer_phone = box_info.find("input[name='phone_customer']");
		var check = 0;
		console.log(elm_customer_name.val());
		if(elm_customer_name.val() == ''){
			elm_customer_name.addClass('error');
			elm_customer_name.focus();
			check = 1;
			return false;
		}else{
			elm_customer_name.removeClass('error');
		}
		if(elm_customer_email.val() == ''){
			elm_customer_email.addClass('error');
			elm_customer_email.focus();
			check = 1;
			return false;
		}else{
			if(checkValidEmail(elm_customer_email.val())==false){
				elm_customer_email.addClass('error');
				elm_customer_email.focus();
				check = 1;
				return false;
			}else{
				elm_customer_email.removeClass('error');
			}			
		}
		if(elm_customer_phone.val() == ''){
			elm_customer_phone.addClass('error');
			elm_customer_phone.focus();
			check = 1;
			return false;
		}else{
			elm_customer_phone.removeClass('error');
		}
		if(check == 0){
			billing_booking($(this))	
		}
		
	});
	$(document).on('click','.view_detail',function(){
		var billing_id = $(this).data('billing_id');
		$("#download_bill").attr("href",path_ajax_script+"/index.php?mod=booking&act=downloadPDF&billing_id="+billing_id);
		var billing_encryt = $(this).data("billencryt");
		$("#billing_id").val(DOMAIN_NAME+"/bill-"+billing_encryt);
		console.log(billing_id);
		$.ajax({
			type: "POST",
			data: {
				billing_id 		: billing_id,
			},
			dataType:"json",
			async:false,
			url: path_ajax_script+"/index.php?mod=booking&act=ajPaymentsBookingDetail",
			success: function(json){
				vietiso_loading(0);
				if(json.result){
					$("#billAdd").find('.modal-body').html(json.html);
					$("#billAdd").modal('show');
					$("#billAdd").data("billing_id",billing_id);
					$("#billAdd").data("billing_type",'PREVIEW');
					$("#download_bill,#copy_bill").show();
					$(".btn_comfirm_bill").hide();
				}
				
			},
			beforeSend:function(){
				vietiso_loading(1);
			}
		});
	});
	$(document).on('click','.close_modal_booking',function(){
		var billing_type = $("#billAdd").data('billing_type');
		if(billing_type == "SUCCESS"){
			location.reload();
		}
	});
	$(document).on('click','#copy_bill',function(){
		console.log($("#billing_id").val());
		var copyText = document.getElementById("billing_id");
		copyText.select();
		navigator.clipboard.writeText(copyText.value);
	});
function makeBookingTabs(){
	if(!$("#bookingTab").hasClass('disabled')){
		console.log('sss');
		$('#bookingTab li').each(function(tbs){
			$(this).attr('id','tab'+tbs).addClass('tab').find('a').attr('data','#bookingtab'+tbs);
		});
		$('.tabbox').each(function(tbs){
			$(this).attr('id','tab'+tbs+'box');
			$(this).attr('data',tbs);
		});
		$(".tabbox").css("display","none");
		var selectedTab;
		$("#bookingTab .tab").live('click',function(){
			if($(this).hasClass('disabled')){return false;}
			if($(this).find('a').attr('isTab')!='0'){
				var elid = $(this).attr("id");
				$(".tab").removeClass("tabselected");
				$("#"+elid).addClass("tabselected");
				if (elid != selectedTab) {
					$(".tabbox").hide();
					$("#"+elid+"box").show();
					selectedTab = elid;
				}
				if($(this).find('a').attr('submit')=='_NOT'){
					$('.submit-buttons').hide();
				}else{
					$('.submit-buttons').show();
				}
				var hs = $(this).find('a').attr('data');
				setTimeout(function(){window.location.hash = hs;},200);
			}
			return false;
		});
		selectedTab = location.hash.substring(1)!=''?location.hash.substring(8):'tab0';
		console.log(location.hash.substring(8));
		if($("#"+selectedTab+'box').length==0) selectedTab = 'tab0';
		$("#"+selectedTab).addClass("tabselected");
		$("#"+selectedTab+"box").css("display","");
		if($('#'+selectedTab).find('a').attr('submit')=='_NOT'){
			$('.submit-buttons').hide();
		}else{
			$('.submit-buttons').show();
		}
		if(location.hash.indexOf('iso')!=-1){
			setTimeout(function(){
				window.location.hash = 'iso'+selectedTab;
			},200);
		}
	}
}
	
function makeSystemBookingTab(){
	$('#bookingtab li').each(function(tbs){
		$(this).attr('id','isotab'+tbs).addClass('tab').find('a').attr('data','#bookingtab'+tbs);
	});
	$('.isotabbox').each(function(tbs){
		$(this).attr('id','isotab'+tbs+'box');
		$(this).attr('data',tbs);
	});
	$(".isotabbox").css("display","none");
	$_document.on('click', '#bookingtab .tab', function(ev){
		var tabid = $(this).attr("id");
		$("#bookingtab .tab").removeClass("tabselected");
		if($("#"+tabid+"box").is(':visible')){
			$("#"+tabid+"box").hide();
		}else{
			$(".isotabbox").hide();
			$("#"+tabid+"box").show();
			$("#bookingtab #"+tabid).addClass("tabselected");
		}
		return false;
	});
	return true;
}
function checkValidEmail(email){
	var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	return regex.test(email);
}
function editContactBooking(edit){
	var check = true;
	var data = {};
	var booking_id = $("input[name='booking_id']").val();
	if(edit == 'contact'){
		
		var full_name = $("input[name='full_name']").val();
		var birthday = $("input[name='birthday']").val();
		var email = $("input[name='email']").val();
		var phone = $("input[name='phone']").val();
		$('#mdContact').find("input.required").each(function(){
			if($(this).val() == ''){
				$(this).focus();
				check = false;
				$('#mdContact').find('.error').text('Vui lòng không bỏ qua những thông tin *');
				$('#mdContact').find('.error').show();
				return false;
			}
		});
		if(!checkValidEmail(email)){
			$("input[name='email']").focus();
			$('#mdContact').find('.error').text('Email không đúng định dạng');
			$('#mdContact').find('.error').show();
			check = false;	
			return false;
		}
		data = {
				booking_id: booking_id,
				full_name: full_name,
				birthday: birthday,
				email: email,
				phone: phone,
				submit: edit
			};
	}
	if(edit == 'note'){
		check = true;
		data = {
				booking_id: booking_id,
				note: $("textarea[name='note']").val(),
				submit: edit
			};
	}
	
	if(check){
		$('#mdContact').find('.error').text('');
		$('#mdContact').find('.error').hide();
		$.ajax({
			type: "POST",
			data: data,
			async:false,
			url: path_ajax_script+"/index.php?mod=booking&act=ajUpdateContactBooking",
			success: function(result){
				vietiso_loading(0);
				if(result){
					alertify.success('Success !');
					location.reload();
				}else{
					alertify.success('Error !');
					location.reload();
				}
				
			},beforeSend: function(){
				vietiso_loading(1);
			}
		});
	}
	
}
	
	function billing_booking(elm){
		var $_this = $(elm);
		var check = true;
		if($('.box_add_pay').find("input[name='choose_payment']:checked").val() == 0){
			var money = $('.box_add_pay').find("input[name='money_min']").val();
			money = (money !== undefined) ? money.replaceAll(" ","") : 0;
			money = parseInt(money);
		}else{
			var money = $('.box_add_pay').find("input[name='money']").val();
			money = (money !== undefined) ? money.replaceAll(" ","") : 0;
			money = parseInt(money);
		}
		var moneyMin = parseInt($('.box_add_pay').find("input[name='money']").attr('min'));
		var moneyMax = parseInt($('.box_add_pay').find("input[name='money']").attr('max'));
		var textMoneyMin = $('.box_add_pay').find("input[name='money_min']").data('min');
		var textMoneyMax = $('.box_add_pay').find("input[name='money_min']").data('max');
		
		if($('.box_add_pay').find("input[name='choose_payment']:checked").val() == 1 && (money <= 0) || money > moneyMax){
			$('.box_add_pay').find('.error').show();
			$('.box_add_pay').find('.error').html(text_price_min_error+" > 0,"+text_price_max_error+" > "+textMoneyMax);
			check = false;
			$("input[name='money']").focus();
			return false;
		}
		if($('.box_add_pay').find("input[name='payment_term']").val() == ''){
			$('.box_add_pay').find('.error').show();
			$('.box_add_pay').find('.error').text(text_payment_term_error);
			check = false;
			$("input[name='payment_term']").focus();
		}
		if(check){
			var type = $(elm).val();
			$('.box_add_pay').find('.error').hide();
			$('.box_add_pay').find('.error').text("");
			var data = {
					booking_id 		: $('.box_add_pay').find("input[name='booking_id']").val(),
					money 			: money,
					payment_method 	: $('.box_add_pay').find("select[name='payment_method']").val(),
					note 			: $('.box_add_pay').find("textarea[name='note']").val(),
					payment_term 	: $('.box_add_pay').find("input[name='payment_term']").val(),
					type			: type
				};
			if(type == 'SAVE'){
				var box_info = $("#billAdd").find("#info_customer");
				var customer_name = box_info.find("input[name='name_customer']").val();
				var customer_email = box_info.find("input[name='email_customer']").val();
				var customer_phone = box_info.find("input[name='phone_customer']").val();
				data['customer_name'] = customer_name;
				data['customer_email'] = customer_email;
				data['customer_phone'] = customer_phone;
			}
			$.ajax({
			type: "POST",
				data: data,
				dataType:"json",
				async:false,
				url: path_ajax_script+"/index.php?mod=booking&act=ajPaymentsBooking",
				success: function(json){
					$_this.removeClass("sendding");
					vietiso_loading(0);
					if(json.result){
						if(type == 'SAVE'){
							alertify.success('Success !');
							location.reload();
						}else{
							$("#billAdd").find('.modal-body').html(json.html);
							$("#billAdd").modal('show');
							$("#billAdd").data("billing_id",json.billing_id);
							$("#billAdd").data("billing_type",type);	

							$("#download_bill").attr("href",path_ajax_script+"/index.php?mod=booking&act=downloadPDF&billing_id="+json.billing_id);
							$(".btn_comfirm_bill").show();
							$("#download_bill,#copy_bill").hide();
						}

					}else{
						alertify.success('Error !');
						location.reload();
					}

				},
				beforeSend : function(){
					vietiso_loading(1);
					if(type == 'SAVE'){
						$_this.removeAttr("id");
					}
					
				}
			});
		}
		
	}
	function billing_cashback(elm){
		var $_this = $(elm);
		var check = true;
		var parent = $('.box_cashback');
		var input_money = parent.find("input[name='money']");
		var money = input_money.val();
		money = (money !== undefined) ? money.replaceAll(" ","") : 0;
		money = parseInt(money);
		var moneyMax = parseInt(input_money.attr('max'));
		var value = $_this.val();
		if(money > moneyMax){
			parent.find('.error').show();
			parent.find('.error').html(text_price_max_error+" > "+moneyMax);
			check = false;
			input_money.focus();
			return false;
		}
		if(money <= 0){
			parent.find('.error').show();
			parent.find('.error').html(text_price_min_error+" > 0");
			check = false;
			input_money.focus();
			return false;
		}
		if(check && value == "CASHBACK"){
			var type = $(elm).val();
			parent.find('.error').hide();
			parent.find('.error').text("");
			var data = {
					booking_id 		: $booking_id,
					money 			: money,
					note 			: parent.find("textarea[name='note']").val()
				};
			$.ajax({
			type: "POST",
				data: data,
				dataType:"json",
				async:false,
				url: path_ajax_script+"/index.php?mod=booking&act=ajPaymentsCashback",
				success: function(json){
					vietiso_loading(0);
					if(json.result){
						alertify.success('Success !');
						location.reload();

					}else{
						alertify.success('Error !');
						location.reload();
					}
					setTimeout(function() { 
						$_this.val("CASHBACK");
					}, 5000);

				},
				beforeSend : function(){
					vietiso_loading(1);
					$_this.val("SENDING");
					
				}
			});
		}
		
	}
<?php echo '</script'; ?>
>
<?php }
}
