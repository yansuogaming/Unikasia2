<?php
/* Smarty version 3.1.38, created on 2024-04-09 13:11:43
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/booking/list_booking.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6614dc1f2d7780_02125776',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '499dadf1d650290babb068d87d1d171e05c86973' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/booking/list_booking.tpl',
      1 => 1710291155,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6614dc1f2d7780_02125776 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/isocms/domains/isocms.com/public_html/inc/smarty3138/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),1=>array('file'=>'/home/isocms/domains/isocms.com/public_html/inc/smarty3138/plugins/function.math.php','function'=>'smarty_function_math',),));
?>
<div class="page_container">
	<div class="page-title  d-flex">
        <div class="title">
			<h2><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Bán hàng');?>
 <div class="info_module" data-toggle="tooltip" data-placement="right" title="Chức năng quản lý danh sách booking trong hệ thống isoCMS">i</div></h2>
			<p><?php echo $_smarty_tpl->tpl_vars['totalItem']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('booking');?>
</p>
			
		</div>
		<div class="button_right">
			<a class="btn btn-main btn-addnew btn_addBooking" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Create Booking');?>
" data-toggle="modal" data-target="#addBooking"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Create Booking');?>
</a>
		</div>
    </div>
<!--    modal-->
	<div class="modal right fade" id="addBooking" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">				
				<form method="post" id="frmForm" class="frmform" enctype="multipart/form-data">
					<div class="modal-header">
						<div class="content_head">
							<a href="<?php echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;?>
/admin/index.php?mod=booking&act=list_booking" class="d-flex align-items-center">
								<div class="text_booking">
									<p class="booking_name"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('booking');?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('new');?>
</p>
									<p class="status"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Create by ");?>
 <span class="name_create_by"><?php echo $_smarty_tpl->tpl_vars['clsUser']->value->getOneField('first_name',$_smarty_tpl->tpl_vars['_loged_id']->value);?>
 <?php echo $_smarty_tpl->tpl_vars['clsUser']->value->getOneField('last_name',$_smarty_tpl->tpl_vars['_loged_id']->value);?>
</span></p>
								</div>
							</a>
							<div class="box_button">
								<button class="btn_cancel close_modal_booking btn_cancel_booking" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cancel');?>
</button>
								<button class="btn_submit btnClickToSubmitBooking"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Complete');?>
</button>
							</div>
						</div>
						<!--<button type="button" class="close close_modal_booking" data-dismiss="modal">&times;</button>
						<h4 class="modal-title" id="myModalLabel2"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('add');?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('booking');?>
</h4>-->
					</div>

					<div class="modal-body">
							<div class="box_section box_contact">
								<a class="btn btn-primary btn_title" type="button" data-toggle="collapse" data-target="#collapseContact" aria-expanded="true" aria-controls="collapseExample"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Customers');?>
 (<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('contact');?>
) <i class="fa fa-angle-up pull-right"></i></a>
								<div class="box_form collapse in" id="collapseContact" aria-expanded="true">
									<div class="row">
										<div class="col-lg-3 d-flex justify-content-between">
											<div class="inp_full_name">
												<input name="fullname" class="text full required" value="" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Fullname');?>
*" type="text"/>
											</div>											
											<div class="box_inp_fullname">
												<input class="text full" id="full_name" name="full_name" value="" type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Fullname');?>
*"/>
											</div>
											<button class="btn-main btn_addCustomer" id="btn_addCustomer" type="button"  data-toggle="modal" data-target="#addCustomer"></button>
																					
											<label for=""><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Enter 3 letters to search');?>
</label>
										</div>
										<div class="col-lg-3">
											<input class="text full birthday" name="birthday" value="" type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Birthday');?>
"/>
										</div>
										<div class="col-lg-3">
											<input class="text full required" name="email" value="" type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Email');?>
*" />
											<label for=""><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Must be unique when adding new customers');?>
</label>
										</div>
										<div class="col-lg-3">
											<input class="text full required" name="phone" value="" type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Phone');?>
*" />
										</div>
										<div class="col-lg-3">
											<select name="country_id" id="country_id" class="iso-selectbox required" id="">
												<option value=""><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Country');?>
*</option>
												<?php echo $_smarty_tpl->tpl_vars['clsCountry']->value->getSelectByCountry('',false);?>

											</select>
										</div>					
										<div class="col-lg-6">
											<input class="text full" name="address" value="" type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Address');?>
" />
										</div>
									</div>
								</div>
							</div>
							<div class="box_section box_product_service">
								<span class="text_error" hidden><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('You have not selected a product/service');?>
</span>
								<a class="btn btn-primary btn_title" type="button" data-toggle="collapse" data-target="#collapseProduct" aria-expanded="true" aria-controls="collapseExample"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Inventory');?>
<i class="fa fa-angle-up pull-right"></i></a>
								<div class="collapse in" id="collapseProduct" aria-expanded="true">
									<div class="box_total_price"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Total');?>
: <span class="total_price"><span id="total_price">0</span> <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</span><input id="inp_total_price" type="hidden" value="0"/></div>
									<div class="box_form">
										<div class="row">
											<div class="col-lg-3">
												<select class="form-control iso-selectbox" onchange="show_option_product(this)" name="product_group">
													<option value=""><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Group product');?>
</option>
													<option value="tour"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Tour');?>
</option>
													<option value="hotel"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Hotel');?>
</option>
													<option value="cruise"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cruise');?>
</option>
																										<option value="voucher"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Voucher');?>
</option>
												</select>
											</div>							
											<div id="box_option_product">					
												
											</div>
										</div>
										<div id="box_booking">
										</div>
									</div>
								</div>						
							</div>
							<div class="box_section box_note_booking">
								<a class="btn btn-primary btn_title" type="button" data-toggle="collapse" data-target="#collapseNoteBooking" aria-expanded="true" aria-controls="collapseExample"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Special Requests');?>
<i class="fa fa-angle-up pull-right"></i></a>
								<div class="box_form collapse in" id="collapseNoteBooking" aria-expanded="true">
									<div class="row">
										<div class="col-lg-12">
											<textarea class="txt_note" name="customer_note" id="" cols="30" rows="10" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Special Requests');?>
"></textarea>
										</div>	
									</div>
								</div>
							</div>
							<div class="box_section box_info_price_booking">
								<a class="btn btn-primary btn_title" type="button" data-toggle="collapse" data-target="#collapseInfoPriceBooking" aria-expanded="true" aria-controls="collapseExample"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Billing Information');?>
<i class="fa fa-angle-up pull-right"></i></a>
								<div class="collapse in" id="collapseInfoPriceBooking" aria-expanded="true">
									<div class="box_form box_form_price">
										<div class="row">
											<div class="col-lg-12">
												<div class="box_billing">
													<label class="lbl_billing lbl_total"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Total');?>
</label>
													<span class="price"><span id="price_total">0</span> <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</span>
													<input type="hidden" id="inp_price_total" name="price_total" value="0" />
												</div>
											</div>	
											<div class="col-lg-12">
												<div class="box_billing price_deposit">
													<label class="lbl_billing"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Deposit');?>
</label>
													<span class="price"><span id="price_deposit">0</span> <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</span>
													<input type="hidden" id="inp_price_deposit" name="price_deposit" value="0" />
												</div>									
											</div>	
											<div class="col-lg-12">
												<div class="box_billing">
													<label class="lbl_billing"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Final Payment');?>
</label>
													<span class="price"><span id="price_final_payment">0</span> <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</span>
													<input type="hidden" id="inp_price_final_payment" name="price_final_payment" value="0" />
												</div>									
											</div>
											<div class="col-lg-12">
												<div class="box_billing mb0">
													<label class="lbl_billing lbl_total_payment"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Total payment');?>
</label>
													<span class="price"><span id="price_total_payment">0</span> <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</span>
													<input type="hidden" id="inp_price_total_payment" name="price_total_payment" value="0" />
												</div>									
											</div>	
										</div>
									</div>							
									<div class="payment_tab">
										<div class="payment-choice">
											<input type="radio" class="chkPayment" name="payment_method" checked="checked" value="<?php echo $_smarty_tpl->tpl_vars['PAYMENT_CASH_ID']->value;?>
">
											<span class="lbl_pay"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Direct payment');?>
</span>
										</div>
										<div class="payment-choice">
											<input type="radio" class="chkPayment" name="payment_method" value="<?php echo $_smarty_tpl->tpl_vars['PAYMENT_TRANSFER_ID']->value;?>
">
											<span class="lbl_pay"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Transfer payments / ATM');?>
</span>
										</div>
										<div class="payment-choice">
											<input type="radio" class="chkPayment" name="payment_method" value="<?php echo $_smarty_tpl->tpl_vars['PAYMENT_VNPAY_GATEWAY']->value;?>
">
											<span class="lbl_pay"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Payment by card / VNPAY');?>
</span>
										</div>
										<div class="payment-choice">
											<input type="radio" class="chkPayment" name="payment_method" value="<?php echo $_smarty_tpl->tpl_vars['PAYMENT_ONEPAY_ATM']->value;?>
">
											<span class="lbl_pay"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Pay with OnePAY');?>
</span>
										</div>
									</div>
								</div>

							</div>
					</div>
					<div class="modal-footer">	
						<div class="box_button">
							<div class="box_billing mb0">
								<label class="lbl_billing lbl_total_payment"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Total payment');?>
</label>
								<span class="price"><span id="price_total_payment_footer">0</span> <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</span>
							</div>
							<button class="btn_cancel close_modal_booking btn_cancel_booking" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cancel');?>
</button>
							<button class="btn_submit btnClickToSubmitBooking"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Complete');?>
</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="modal right fade" id="addCustomer" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">	
				<div class="box_section box_contact">
					<a class="btn btn-primary btn_title" type="button"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Customers');?>
 (<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('contact');?>
)</a>
					<div class="box_form">
						<form action="" method="" id="frmAddCustomer" onsubmit="return false">
							<div class="row">
								<div class="col-lg-6">
									<input class="text full required" name="full_name_new" value="" type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Fullname');?>
*"/>
								</div>
								<div class="col-lg-6">
									<input class="text full birthday" name="birthday_new" value="" type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Birthday');?>
"/>
								</div>
								<div class="col-lg-6">
									<input class="text full required" name="email_new" value="" type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Email');?>
*" />
									<label for=""><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Must be unique when adding new customers');?>
</label>
								</div>
								<div class="col-lg-6">
									<input class="text full required" name="phone_new" value="" type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Phone');?>
*" />
								</div>
								<div class="col-lg-6">
									<select name="country_id_new" class="iso-selectbox required" id="">
										<option value=""><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Country');?>
*</option>
										<?php echo $_smarty_tpl->tpl_vars['clsCountry']->value->getSelectByCountry('',false);?>

									</select>
								</div>					
								<div class="col-lg-6">
									<input class="text full" name="address_new" value="" type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Address');?>
" />
								</div>				
								<div class="col-lg-12 text-right">
									<button class="btn_cancel close_modal_booking" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cancel');?>
</button>
									<button class="btn_submit btn-main btnClickToSubmitAddCustomer"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Submit');?>
</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="wrap">
			<div class="filter_box">
				<form id="forums" method="post" action="" name="filter" class="filterForm">
					<div class="form-group form-keyword">
						<input type="text" class="text form-control" name="keyword" value="<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('search');?>
..." />
					</div>
					<div class="form-group form-category">
						<select name="group_product" class="form-control" id="booking_date">
							<option value=""><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Group product');?>
</option>
							<option value="TOUR" <?php if ($_smarty_tpl->tpl_vars['group_product']->value == 'TOUR') {?> selected<?php }?> ><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Tour');?>
</option>
							<option value="HOTEL" <?php if ($_smarty_tpl->tpl_vars['group_product']->value == 'HOTEL') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Hotel');?>
</option>
							<option value="CRUISE" <?php if ($_smarty_tpl->tpl_vars['group_product']->value == 'CRUISE') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cruise');?>
</option>
														<option value="VOUCHER" <?php if ($_smarty_tpl->tpl_vars['group_product']->value == 'VOUCHER') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Voucher');?>
</option>
						</select>
					</div>
					<div class="form-group">
						<select name="status_pay" class="form-control">
						 	<option value=""><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Status');?>
</option>
						 	<option value="0" <?php if ($_smarty_tpl->tpl_vars['status_pay']->value == '0') {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Unpaid');?>
</option>
						 	<option value="1" <?php if ($_smarty_tpl->tpl_vars['status_pay']->value == '1') {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Pay off');?>
</option>
						 	<option value="2" <?php if ($_smarty_tpl->tpl_vars['status_pay']->value == '2') {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Prepaid');?>
</option>
						 	<option value="3" <?php if ($_smarty_tpl->tpl_vars['status_pay']->value == '3') {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Canceled');?>
</option>
						</select>
					</div>
					<div class="form-group form-button">
						<button type="submit" class="btn btn-main" id="findtBtn"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Search');?>
</button>
						<input type="hidden" name="filter" value="filter">
					</div>
				</form>
				<div class="record_per_page">
					<label><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Record/page');?>
</label>
					<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getRecordPerPage2($_smarty_tpl->tpl_vars['recordPerPage']->value,$_smarty_tpl->tpl_vars['totalRecord']->value,$_smarty_tpl->tpl_vars['mod']->value,$_smarty_tpl->tpl_vars['pUrl']->value,$_smarty_tpl->tpl_vars['act']->value);?>

				</div>
			</div>
			<div class="clearfix"></div>
			<div class="tabbox">
				<div class="hastable">
					<table cellspacing="0" class="tbl-grid table-striped table_responsive" width="100%">
						<thead>
							<tr>
								<th class="gridheader name_responsive text-left" style="width: 130px;"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Booking code');?>
</strong></th>
								<th class="gridheader hiden_responsive text-left" style=""><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Booking name');?>
</strong></th>
								<th class="gridheader hiden_responsive text-left" style=""><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Customers");?>
</strong></th>
								<th class="gridheader hiden_responsive text-right" style="width:130px"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Total Price");?>
</strong></th>	
								<th class="gridheader hiden_responsive text-right" style="width:150px"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Completly payment");?>
</strong></th>
								<th class="gridheader text-left hiden_responsive" style="width: 190px"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('status');?>
</strong></th>
								<th class="gridheader text-center hiden_responsive" width="40px"></th>
							</tr>
						</thead>
						<?php if ($_smarty_tpl->tpl_vars['listItem']->value[0]['booking_id'] != '') {?>
							<tbody id="SortAble">
								<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listItem']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
								<?php $_smarty_tpl->_assignInScope('BOOKINGVALUE', $_smarty_tpl->tpl_vars['clsClassTable']->value->getBookingValue($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['booking_id']));?>
								<?php $_smarty_tpl->_assignInScope('CARTSTORE', $_smarty_tpl->tpl_vars['clsClassTable']->value->getCartStore($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['booking_id']));?>
								<?php $_smarty_tpl->_assignInScope('booking_id', $_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['booking_id']);?>
								<?php $_smarty_tpl->_assignInScope('deposit', $_smarty_tpl->tpl_vars['clsBillingHistory']->value->getPaymentTermComplete($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['booking_id']));?>
								<tr <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)%2 == '0') {?>class="row1"<?php } else { ?>class="row2"<?php }?>>	
									<td style="text-align: left" class="text-left name_service">
										<span class="title" title="<?php if ($_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField('is_online',$_smarty_tpl->tpl_vars['booking_id']->value) == 0) {
echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Booking PRIVATE');
}?>"><?php echo $_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['booking_code'];?>
</span>
										<p class="text_booking_group">[
										<?php if ($_smarty_tpl->tpl_vars['CARTSTORE']->value['TOUR']) {?>
										<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Travel tour');?>

										<?php } elseif ($_smarty_tpl->tpl_vars['CARTSTORE']->value['HOTEL']) {?>
										<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Hotel');?>

										<?php } elseif ($_smarty_tpl->tpl_vars['CARTSTORE']->value['CRUISE']) {?>
										<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cruise');?>

										<?php } else { ?>
										<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Voucher');?>

										<?php }?>
										]</p>
									</td>
									<td class="block_responsive border_top_responsive" data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Booking name');?>
">
									<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getHTMLServiceOther($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['booking_id']);?>

									<p class="text_bot"><?php if ($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['user_id'] == 0) {
echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('From');?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('website');
} else {
echo $_smarty_tpl->tpl_vars['clsUser']->value->getOneField('first_name',$_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['user_id']);?>
 <?php echo $_smarty_tpl->tpl_vars['clsUser']->value->getOneField('last_name',$_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['user_id']);
}?> | <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reg_date'],"%d/%m/%Y %H:%M");?>
</p>
									</td>
									<td class="block_responsive border_top_responsive" style="white-space:nowrap" data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Customers');?>
">
										<div class="customer_box">
											<p class="td_name"><?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getContactName($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['booking_id']);?>
</p>
											<p class="text_bot"><a href="tel:+<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getPhone($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['booking_id']);?>
" title="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getPhone($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['booking_id']);?>
"><?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getPhone($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['booking_id']);?>
</a> / <a href="mailto:<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getEmail($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['booking_id']);?>
" title="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getEmail($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['booking_id']);?>
"><?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getEmail($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['booking_id']);?>
</a></p>
											
										</div>
									</td>
									<?php $_smarty_tpl->_assignInScope('total_cashback', $_smarty_tpl->tpl_vars['clsBillingHistory']->value->getPaymentTermComplete($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['booking_id'],'CASHBACK'));?>
									<?php echo smarty_function_math(array('assign'=>"totalgrand",'equation'=>"x-y-z",'x'=>$_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['totalgrand'],'y'=>$_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['totalcancel'],'z'=>$_smarty_tpl->tpl_vars['total_cashback']->value),$_smarty_tpl);?>

									<td class="block_responsive border_top_responsive text-right price" style="white-space:nowrap" data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Total Price');?>
"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->priceFormat($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['totalgrand']);?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRateText();?>
</td>
									<td class="block_responsive border_top_responsive text-right price" style="white-space:nowrap;padding-right:20px!important" data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Completly payment');?>
"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->priceFormat($_smarty_tpl->tpl_vars['deposit']->value);?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRateText();?>
</td>
									
									<?php $_smarty_tpl->_assignInScope('status_pay', $_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField('status_pay',$_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['booking_id']));?>
									<td class="block_responsive border_top_responsive booking_status status_pay_<?php echo $_smarty_tpl->tpl_vars['status_pay']->value;?>
" data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('status');?>
"><span class="text"><?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getStatusBookingPay($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['booking_id']);?>
</span></td>
									
									<td class="block_responsive text-center" style="text-align: center; white-space: nowrap; width:5%" data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('func');?>
"> 
										<div class="btn-group">
											<button class="btn btn_dropdown dropdown-toggle" type="button" data-toggle="dropdown">
												<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
											</button>
											<ul class="dropdown-menu" style="right:0px !important">
												<?php if (_ISOCMS_CLIENT_LOGIN == '111') {?>
											   <li><a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=member&act=viewbooking&booking_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['booking_id']);?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('view');?>
"><i class="icon-edit"></i> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('view');?>
</a></li>
											   <?php } else { ?>
											   <li><a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=booking&act=edit&action=list_booking&booking_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['booking_id']);?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('view');?>
"><i class="icon-edit"></i> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('view');?>
</a></li>
											   <?php }?>
												<li><a class="confirm_delete" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=<?php echo $_smarty_tpl->tpl_vars['act']->value;?>
&action=delete&booking_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['booking_id']);?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('delete');?>
"><i class="icon-remove"></i> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('delete');?>
</a></li>
												<li><a href="javascript:void"  class="syncBookingTMS"  booking_id="<?php echo $_smarty_tpl->tpl_vars['booking_id']->value;?>
" tms_crm_order_id="<?php echo $_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tms_crm_order_id'];?>
">
                                                        <?php if ($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tms_crm_order_id']) {
echo $_smarty_tpl->tpl_vars['clsISO']->value->makeIMO('sync',$_smarty_tpl->tpl_vars['core']->value->get_Lang('Booking TMS'),'color-green');?>

                                                        <?php } else {
echo $_smarty_tpl->tpl_vars['clsISO']->value->makeIMO('sync',$_smarty_tpl->tpl_vars['core']->value->get_Lang('Booking TMS'));
}?> </a>
                                                </li>
											</ul>
										</div>
									</td>

								</tr>
								<?php
}
}
?>
							</tbody>
							<?php } else { ?><tr><td colspan="15"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('nodata');?>
!</td></tr><?php }?>

					</table>
					<div class="clearfix"></div>
					<div class="statistical mb5">
						<table width="100%" border="0" cellpadding="3" cellspacing="0">
							<tr>
								<td width="50%" align="left"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('statistical');?>
 <strong><?php echo $_smarty_tpl->tpl_vars['totalRecord']->value;?>
</strong> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('records');?>
/<strong><?php echo $_smarty_tpl->tpl_vars['totalPage']->value;?>
</strong> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('page');?>
. <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('youareonpagenumber');?>
 <strong><?php echo $_smarty_tpl->tpl_vars['currentPage']->value;?>
</strong></td>
								<td width="50%" align="right">
									<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('gotopage');?>
:
									<select name="page" onchange="window.location = this.options[this.selectedIndex].value">
										<?php
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listPageNumber']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total !== 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
										<option <?php if ($_smarty_tpl->tpl_vars['listPageNumber']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)] == $_smarty_tpl->tpl_vars['currentPage']->value) {?>selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['link_page_current']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['listPageNumber']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)];?>
"><?php echo $_smarty_tpl->tpl_vars['listPageNumber']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)];?>
</option>
										<?php
}
}
?>
									</select>
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php echo '<script'; ?>
>
var Departure_date_invalid='<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Departure date is invalid");?>
';
var Not_Available="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('No vacancy');?>
";
var Available="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Still empty');?>
";
var Promotions="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Promotions');?>
";
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
$(document).ready(function(){
	
$('#from_date').datepicker({
	dateFormat: "dd/mm/yy", 
 
	maxDate: "+1Y",
	changeMonth: true,
	changeYear: true,
	numberOfMonths: 1,
	showOtherMonths: true,
	onSelect: function(dateStr) { 
		var date = $(this).datepicker('getDate'); 
		if(date){ 
			date.setDate(date.getDate() + 30); 
		} 
		$('#to_date').datepicker('option').datepicker('setDate', date); 
	},
	onClose: function(dateText, inst) {
		$('#to_date').focus();
	}
});
$("#to_date").datepicker( { 
	dateFormat: "dd/mm/yy", 
	changeMonth: true,
	changeYear: true,
	numberOfMonths: 1,
	showOtherMonths: true
});	
});
<?php echo '</script'; ?>
>

<link rel="stylesheet" type="text/css"  href="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/datepicker/jquery-ui.css?ver=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"/>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/datepicker/jquery-ui.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/jquery-easyui/themes/gray/easyui.css?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
" type="text/css" media="screen">
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/jquery-easyui/jquery.easyui.min.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
><?php }
}
