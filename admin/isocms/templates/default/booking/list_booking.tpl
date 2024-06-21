<div class="page_container">
	<div class="page-title  d-flex">
        <div class="title">
			<h2>{$core->get_Lang('Bán hàng')} <div class="info_module" data-toggle="tooltip" data-placement="right" title="Chức năng quản lý danh sách booking trong hệ thống isoCMS">i</div></h2>
			<p>{$totalItem} {$core->get_Lang('booking')}</p>
			
		</div>
		<div class="button_right">
			<a class="btn btn-main btn-addnew btn_addBooking" title="{$core->get_Lang('Create Booking')}" data-toggle="modal" data-target="#addBooking">{$core->get_Lang('Create Booking')}</a>
		</div>
    </div>
<!--    modal-->
	<div class="modal right fade" id="addBooking" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">				
				<form method="post" id="frmForm" class="frmform" enctype="multipart/form-data">
					<div class="modal-header">
						<div class="content_head">
							<a href="{$DOMAIN_NAME}/admin/index.php?mod=booking&act=list_booking" class="d-flex align-items-center">
								<div class="text_booking">
									<p class="booking_name">{$core->get_Lang('booking')} {$core->get_Lang('new')}</p>
									<p class="status">{$core->get_Lang("Create by ")} <span class="name_create_by">{$clsUser->getOneField('first_name',$_loged_id)} {$clsUser->getOneField('last_name',$_loged_id)}</span></p>
								</div>
							</a>
							<div class="box_button">
								<button class="btn_cancel close_modal_booking btn_cancel_booking" data-dismiss="modal">{$core->get_Lang('Cancel')}</button>
								<button class="btn_submit btnClickToSubmitBooking">{$core->get_Lang('Complete')}</button>
							</div>
						</div>
						<!--<button type="button" class="close close_modal_booking" data-dismiss="modal">&times;</button>
						<h4 class="modal-title" id="myModalLabel2">{$core->get_Lang('add')} {$core->get_Lang('booking')}</h4>-->
					</div>

					<div class="modal-body">
							<div class="box_section box_contact">
								<a class="btn btn-primary btn_title" type="button" data-toggle="collapse" data-target="#collapseContact" aria-expanded="true" aria-controls="collapseExample">{$core->get_Lang('Customers')} ({$core->get_Lang('contact')}) <i class="fa fa-angle-up pull-right"></i></a>
								<div class="box_form collapse in" id="collapseContact" aria-expanded="true">
									<div class="row">
										<div class="col-lg-3 d-flex justify-content-between">
											<div class="inp_full_name">
												<input name="fullname" class="text full required" value="" placeholder="{$core->get_Lang('Fullname')}*" type="text"/>
											</div>											
											<div class="box_inp_fullname">
												<input class="text full" id="full_name" name="full_name" value="" type="text" placeholder="{$core->get_Lang('Fullname')}*"/>
											</div>
											<button class="btn-main btn_addCustomer" id="btn_addCustomer" type="button"  data-toggle="modal" data-target="#addCustomer"></button>
																					
											<label for="">{$core->get_Lang('Enter 3 letters to search')}</label>
										</div>
										<div class="col-lg-3">
											<input class="text full birthday" name="birthday" value="" type="text" placeholder="{$core->get_Lang('Birthday')}"/>
										</div>
										<div class="col-lg-3">
											<input class="text full required" name="email" value="" type="text" placeholder="{$core->get_Lang('Email')}*" />
											<label for="">{$core->get_Lang('Must be unique when adding new customers')}</label>
										</div>
										<div class="col-lg-3">
											<input class="text full required" name="phone" value="" type="text" placeholder="{$core->get_Lang('Phone')}*" />
										</div>
										<div class="col-lg-3">
											<select name="country_id" id="country_id" class="iso-selectbox required" id="">
												<option value="">{$core->get_Lang('Country')}*</option>
												{$clsCountry->getSelectByCountry('',false)}
											</select>
										</div>					
										<div class="col-lg-6">
											<input class="text full" name="address" value="" type="text" placeholder="{$core->get_Lang('Address')}" />
										</div>
									</div>
								</div>
							</div>
							<div class="box_section box_product_service">
								<span class="text_error" hidden>{$core->get_Lang('You have not selected a product/service')}</span>
								<a class="btn btn-primary btn_title" type="button" data-toggle="collapse" data-target="#collapseProduct" aria-expanded="true" aria-controls="collapseExample">{$core->get_Lang('Inventory')}<i class="fa fa-angle-up pull-right"></i></a>
								<div class="collapse in" id="collapseProduct" aria-expanded="true">
									<div class="box_total_price">{$core->get_Lang('Total')}: <span class="total_price"><span id="total_price">0</span> {$clsISO->getShortRate()}</span><input id="inp_total_price" type="hidden" value="0"/></div>
									<div class="box_form">
										<div class="row">
											<div class="col-lg-3">
												<select class="form-control iso-selectbox" onchange="show_option_product(this)" name="product_group">
													<option value="">{$core->get_Lang('Group product')}</option>
													<option value="tour">{$core->get_Lang('Tour')}</option>
													<option value="hotel">{$core->get_Lang('Hotel')}</option>
													<option value="cruise">{$core->get_Lang('Cruise')}</option>
													{*<option value="combo">{$core->get_Lang('Combo')}</option>*}
													<option value="voucher">{$core->get_Lang('Voucher')}</option>
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
								<a class="btn btn-primary btn_title" type="button" data-toggle="collapse" data-target="#collapseNoteBooking" aria-expanded="true" aria-controls="collapseExample">{$core->get_Lang('Special Requests')}<i class="fa fa-angle-up pull-right"></i></a>
								<div class="box_form collapse in" id="collapseNoteBooking" aria-expanded="true">
									<div class="row">
										<div class="col-lg-12">
											<textarea class="txt_note" name="customer_note" id="" cols="30" rows="10" placeholder="{$core->get_Lang('Special Requests')}"></textarea>
										</div>	
									</div>
								</div>
							</div>
							<div class="box_section box_info_price_booking">
								<a class="btn btn-primary btn_title" type="button" data-toggle="collapse" data-target="#collapseInfoPriceBooking" aria-expanded="true" aria-controls="collapseExample">{$core->get_Lang('Billing Information')}<i class="fa fa-angle-up pull-right"></i></a>
								<div class="collapse in" id="collapseInfoPriceBooking" aria-expanded="true">
									<div class="box_form box_form_price">
										<div class="row">
											<div class="col-lg-12">
												<div class="box_billing">
													<label class="lbl_billing lbl_total">{$core->get_Lang('Total')}</label>
													<span class="price"><span id="price_total">0</span> {$clsISO->getShortRate()}</span>
													<input type="hidden" id="inp_price_total" name="price_total" value="0" />
												</div>
											</div>	
											<div class="col-lg-12">
												<div class="box_billing price_deposit">
													<label class="lbl_billing">{$core->get_Lang('Deposit')}</label>
													<span class="price"><span id="price_deposit">0</span> {$clsISO->getShortRate()}</span>
													<input type="hidden" id="inp_price_deposit" name="price_deposit" value="0" />
												</div>									
											</div>	
											<div class="col-lg-12">
												<div class="box_billing">
													<label class="lbl_billing">{$core->get_Lang('Final Payment')}</label>
													<span class="price"><span id="price_final_payment">0</span> {$clsISO->getShortRate()}</span>
													<input type="hidden" id="inp_price_final_payment" name="price_final_payment" value="0" />
												</div>									
											</div>
											<div class="col-lg-12">
												<div class="box_billing mb0">
													<label class="lbl_billing lbl_total_payment">{$core->get_Lang('Total payment')}</label>
													<span class="price"><span id="price_total_payment">0</span> {$clsISO->getShortRate()}</span>
													<input type="hidden" id="inp_price_total_payment" name="price_total_payment" value="0" />
												</div>									
											</div>	
										</div>
									</div>							
									<div class="payment_tab">
										<div class="payment-choice">
											<input type="radio" class="chkPayment" name="payment_method" checked="checked" value="{$PAYMENT_CASH_ID}">
											<span class="lbl_pay">{$core->get_Lang('Direct payment')}</span>
										</div>
										<div class="payment-choice">
											<input type="radio" class="chkPayment" name="payment_method" value="{$PAYMENT_TRANSFER_ID}">
											<span class="lbl_pay">{$core->get_Lang('Transfer payments / ATM')}</span>
										</div>
										<div class="payment-choice">
											<input type="radio" class="chkPayment" name="payment_method" value="{$PAYMENT_VNPAY_GATEWAY}">
											<span class="lbl_pay">{$core->get_Lang('Payment by card / VNPAY')}</span>
										</div>
										<div class="payment-choice">
											<input type="radio" class="chkPayment" name="payment_method" value="{$PAYMENT_ONEPAY_ATM}">
											<span class="lbl_pay">{$core->get_Lang('Pay with OnePAY')}</span>
										</div>
									</div>
								</div>

							</div>
					</div>
					<div class="modal-footer">	
						<div class="box_button">
							<div class="box_billing mb0">
								<label class="lbl_billing lbl_total_payment">{$core->get_Lang('Total payment')}</label>
								<span class="price"><span id="price_total_payment_footer">0</span> {$clsISO->getShortRate()}</span>
							</div>
							<button class="btn_cancel close_modal_booking btn_cancel_booking" data-dismiss="modal">{$core->get_Lang('Cancel')}</button>
							<button class="btn_submit btnClickToSubmitBooking">{$core->get_Lang('Complete')}</button>
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
					<a class="btn btn-primary btn_title" type="button">{$core->get_Lang('Customers')} ({$core->get_Lang('contact')})</a>
					<div class="box_form">
						<form action="" method="" id="frmAddCustomer" onsubmit="return false">
							<div class="row">
								<div class="col-lg-6">
									<input class="text full required" name="full_name_new" value="" type="text" placeholder="{$core->get_Lang('Fullname')}*"/>
								</div>
								<div class="col-lg-6">
									<input class="text full birthday" name="birthday_new" value="" type="text" placeholder="{$core->get_Lang('Birthday')}"/>
								</div>
								<div class="col-lg-6">
									<input class="text full required" name="email_new" value="" type="text" placeholder="{$core->get_Lang('Email')}*" />
									<label for="">{$core->get_Lang('Must be unique when adding new customers')}</label>
								</div>
								<div class="col-lg-6">
									<input class="text full required" name="phone_new" value="" type="text" placeholder="{$core->get_Lang('Phone')}*" />
								</div>
								<div class="col-lg-6">
									<select name="country_id_new" class="iso-selectbox required" id="">
										<option value="">{$core->get_Lang('Country')}*</option>
										{$clsCountry->getSelectByCountry('',false)}
									</select>
								</div>					
								<div class="col-lg-6">
									<input class="text full" name="address_new" value="" type="text" placeholder="{$core->get_Lang('Address')}" />
								</div>				
								<div class="col-lg-12 text-right">
									<button class="btn_cancel close_modal_booking" data-dismiss="modal">{$core->get_Lang('Cancel')}</button>
									<button class="btn_submit btn-main btnClickToSubmitAddCustomer">{$core->get_Lang('Submit')}</button>
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
						<input type="text" class="text form-control" name="keyword" value="{$keyword}" placeholder="{$core->get_Lang('search')}..." />
					</div>
					<div class="form-group form-category">
						<select name="group_product" class="form-control" id="booking_date">
							<option value="">{$core->get_Lang('Group product')}</option>
							<option value="TOUR" {if $group_product=='TOUR'} selected{/if} >{$core->get_Lang('Tour')}</option>
							<option value="HOTEL" {if $group_product=='HOTEL'} selected{/if}>{$core->get_Lang('Hotel')}</option>
							<option value="CRUISE" {if $group_product=='CRUISE'} selected{/if}>{$core->get_Lang('Cruise')}</option>
							{*<option value="COMBO" {if $group_product=='COMBO'} selected{/if}>{$core->get_Lang('Combo')}</option>*}
							<option value="VOUCHER" {if $group_product=='VOUCHER'} selected{/if}>{$core->get_Lang('Voucher')}</option>
						</select>
					</div>
					<div class="form-group">
						<select name="status_pay" class="form-control">
						 	<option value="">{$core->get_Lang('Status')}</option>
						 	<option value="0" {if $status_pay eq '0'}selected{/if}>{$core->get_Lang('Unpaid')}</option>
						 	<option value="1" {if $status_pay eq '1'}selected{/if}>{$core->get_Lang('Pay off')}</option>
						 	<option value="2" {if $status_pay eq '2'}selected{/if}>{$core->get_Lang('Prepaid')}</option>
						 	<option value="3" {if $status_pay eq '3'}selected{/if}>{$core->get_Lang('Canceled')}</option>
						</select>
					</div>
					<div class="form-group form-button">
						<button type="submit" class="btn btn-main" id="findtBtn">{$core->get_Lang('Search')}</button>
						<input type="hidden" name="filter" value="filter">
					</div>
				</form>
				<div class="record_per_page">
					<label>{$core->get_Lang('Record/page')}</label>
					{$clsISO->getRecordPerPage2($recordPerPage,$totalRecord,$mod,$pUrl,$act)}
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="tabbox">
				<div class="hastable">
					<table cellspacing="0" class="tbl-grid table-striped table_responsive" width="100%">
						<thead>
							<tr>
								<th class="gridheader name_responsive text-left" style="width: 130px;"><strong>{$core->get_Lang('Booking code')}</strong></th>
								<th class="gridheader hiden_responsive text-left" style=""><strong>{$core->get_Lang('Booking name')}</strong></th>
								<th class="gridheader hiden_responsive text-left" style=""><strong>{$core->get_Lang("Customers")}</strong></th>
								<th class="gridheader hiden_responsive text-right" style="width:130px"><strong>{$core->get_Lang("Total Price")}</strong></th>	
								<th class="gridheader hiden_responsive text-right" style="width:150px"><strong>{$core->get_Lang("Completly payment")}</strong></th>
								<th class="gridheader text-left hiden_responsive" style="width: 190px"><strong>{$core->get_Lang('status')}</strong></th>
								<th class="gridheader text-center hiden_responsive" width="40px"></th>
							</tr>
						</thead>
						{if $listItem[0].booking_id ne ''}
							<tbody id="SortAble">
								{section name=i loop=$listItem}
								{assign var=BOOKINGVALUE value = $clsClassTable->getBookingValue($listItem[i].booking_id)}
								{assign var=CARTSTORE value = $clsClassTable->getCartStore($listItem[i].booking_id)}
								{assign var=booking_id value = $listItem[i].booking_id}
								{assign var=deposit value=$clsBillingHistory->getPaymentTermComplete($listItem[i].booking_id)}
								<tr {if $smarty.section.i.index%2 eq '0'}class="row1"{else}class="row2"{/if}>	
									<td style="text-align: left" class="text-left name_service">
										<span class="title" title="{if $clsClassTable->getOneField('is_online',$booking_id) eq 0}{$core->get_Lang('Booking PRIVATE')}{/if}">{$listItem[i].booking_code}</span>
										<p class="text_booking_group">[
										{if $CARTSTORE.TOUR}
										{$core->get_Lang('Travel tour')}
										{elseif $CARTSTORE.HOTEL}
										{$core->get_Lang('Hotel')}
										{elseif $CARTSTORE.CRUISE}
										{$core->get_Lang('Cruise')}
										{else}
										{$core->get_Lang('Voucher')}
										{/if}
										]</p>
									</td>
									<td class="block_responsive border_top_responsive" data-title="{$core->get_Lang('Booking name')}">
									{$clsClassTable->getHTMLServiceOther($listItem[i].booking_id)}
									<p class="text_bot">{if $listItem[i].user_id eq 0}{$core->get_Lang('From')} {$core->get_Lang('website')}{else}{$clsUser->getOneField('first_name',$listItem[i].user_id)} {$clsUser->getOneField('last_name',$listItem[i].user_id)}{/if} | {$listItem[i].reg_date|date_format:"%d/%m/%Y %H:%M"}</p>
									</td>
									<td class="block_responsive border_top_responsive" style="white-space:nowrap" data-title="{$core->get_Lang('Customers')}">
										<div class="customer_box">
											<p class="td_name">{$clsClassTable->getContactName($listItem[i].booking_id)}</p>
											<p class="text_bot"><a href="tel:+{$clsClassTable->getPhone($listItem[i].booking_id)}" title="{$clsClassTable->getPhone($listItem[i].booking_id)}">{$clsClassTable->getPhone($listItem[i].booking_id)}</a> / <a href="mailto:{$clsClassTable->getEmail($listItem[i].booking_id)}" title="{$clsClassTable->getEmail($listItem[i].booking_id)}">{$clsClassTable->getEmail($listItem[i].booking_id)}</a></p>
											
										</div>
									</td>
									{assign var=total_cashback value=$clsBillingHistory->getPaymentTermComplete($listItem[i].booking_id,'CASHBACK')}
									{math assign="totalgrand" equation="x-y-z" x=$listItem[i].totalgrand y=$listItem[i].totalcancel  z=$total_cashback}
									<td class="block_responsive border_top_responsive text-right price" style="white-space:nowrap" data-title="{$core->get_Lang('Total Price')}">{$clsISO->priceFormat($listItem[i].totalgrand)} {$clsISO->getShortRateText()}</td>
									<td class="block_responsive border_top_responsive text-right price" style="white-space:nowrap;padding-right:20px!important" data-title="{$core->get_Lang('Completly payment')}">{$clsISO->priceFormat($deposit)} {$clsISO->getShortRateText()}</td>
									
									{assign var=status_pay value=$clsClassTable->getOneField('status_pay',$listItem[i].booking_id)}
									<td class="block_responsive border_top_responsive booking_status status_pay_{$status_pay}" data-title="{$core->get_Lang('status')}"><span class="text">{$clsClassTable->getStatusBookingPay($listItem[i].booking_id)}</span></td>
									
									<td class="block_responsive text-center" style="text-align: center; white-space: nowrap; width:5%" data-title="{$core->get_Lang('func')}"> 
										<div class="btn-group">
											<button class="btn btn_dropdown dropdown-toggle" type="button" data-toggle="dropdown">
												<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
											</button>
											<ul class="dropdown-menu" style="right:0px !important">
												{if _ISOCMS_CLIENT_LOGIN eq '111'}
											   <li><a href="{$PCMS_URL}/?mod=member&act=viewbooking&booking_id={$core->encryptID($listItem[i].booking_id)}" title="{$core->get_Lang('view')}"><i class="icon-edit"></i> {$core->get_Lang('view')}</a></li>
											   {else}
											   <li><a href="{$PCMS_URL}/?mod=booking&act=edit&action=list_booking&booking_id={$core->encryptID($listItem[i].booking_id)}" title="{$core->get_Lang('view')}"><i class="icon-edit"></i> {$core->get_Lang('view')}</a></li>
											   {/if}
												<li><a class="confirm_delete" href="{$PCMS_URL}/?mod={$mod}&act={$act}&action=delete&booking_id={$core->encryptID($listItem[i].booking_id)}" title="{$core->get_Lang('delete')}"><i class="icon-remove"></i> {$core->get_Lang('delete')}</a></li>
												<li><a href="javascript:void"  class="syncBookingTMS"  booking_id="{$booking_id}" tms_crm_order_id="{$listItem[i].tms_crm_order_id}">
                                                        {if $listItem[i].tms_crm_order_id}{$clsISO->makeIMO('sync',$core->get_Lang('Booking TMS'),'color-green')}
                                                        {else}{$clsISO->makeIMO('sync',$core->get_Lang('Booking TMS'))}{/if} </a>
                                                </li>
											</ul>
										</div>
									</td>

								</tr>
								{/section}
							</tbody>
							{else}<tr><td colspan="15">{$core->get_Lang('nodata')}!</td></tr>{/if}

					</table>
					<div class="clearfix"></div>
					<div class="statistical mb5">
						<table width="100%" border="0" cellpadding="3" cellspacing="0">
							<tr>
								<td width="50%" align="left">{$core->get_Lang('statistical')} <strong>{$totalRecord}</strong> {$core->get_Lang('records')}/<strong>{$totalPage}</strong> {$core->get_Lang('page')}. {$core->get_Lang('youareonpagenumber')} <strong>{$currentPage}</strong></td>
								<td width="50%" align="right">
									{$core->get_Lang('gotopage')}:
									<select name="page" onchange="window.location = this.options[this.selectedIndex].value">
										{section name=i loop=$listPageNumber}
										<option {if $listPageNumber[i] eq $currentPage}selected="selected"{/if} value="{$PCMS_URL}/{$link_page_current}&page={$listPageNumber[i]}">{$listPageNumber[i]}</option>
										{/section}
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

<script>
var Departure_date_invalid='{$core->get_Lang("Departure date is invalid")}';
var Not_Available="{$core->get_Lang('No vacancy')}";
var Available="{$core->get_Lang('Still empty')}";
var Promotions="{$core->get_Lang('Promotions')}";
</script>
{literal}
<script type="text/javascript">
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
</script>
{/literal}
<link rel="stylesheet" type="text/css"  href="{$URL_JS}/datepicker/jquery-ui.css?ver={$upd_version}"/>
<script type="text/javascript" src="{$URL_JS}/datepicker/jquery-ui.js?v={$upd_version}"></script>
<link rel="stylesheet" href="{$URL_JS}/jquery-easyui/themes/gray/easyui.css?v={$upd_version}" type="text/css" media="screen">
<script type="text/javascript" src="{$URL_JS}/jquery-easyui/jquery.easyui.min.js?v={$upd_version}"></script>