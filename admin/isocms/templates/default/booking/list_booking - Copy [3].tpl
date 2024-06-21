<div class="page_container">
	<div class="page-title  d-flex">
        <div class="title">
			<h2>{$core->get_Lang('Bán hàng')} <div class="info_module" data-toggle="tooltip" data-placement="right" title="Chức năng quản lý danh sách booking trong hệ thống isoCMS">i</div></h2>
			<p>{$totalItem} {$core->get_Lang('booking')}</p>
			
		</div>
		<div class="button_right">
			<a class="btn btn-main btn-addnew" title="{$core->get_Lang('Create Booking')}" data-toggle="modal" data-target="#addBooking">{$core->get_Lang('Create Booking')}</a>
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
								<button class="btn_cancel close_modal_booking" data-dismiss="modal">{$core->get_Lang('Cancel')}</button>
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
										<div class="col-lg-3">
											<input class="text full required" name="full_name" value="" type="text" placeholder="{$core->get_Lang('Fullname')}*" onKeyUp="show_customer()"  />
											<button class="btn-main btn_addCustomer" id="btn_addCustomer" type="button"  data-toggle="modal" data-target="#addCustomer"></button>
											
											<div class="autosugget" id="autosugget_cus">
												<ul class="HTML_sugget" style="max-height: 90px"></ul>
												<div class="clearfix"></div>
												<a class="close_Div">{$core->get_Lang('close')}</a>
											</div>
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
							<button class="btn_cancel close_modal_booking" data-dismiss="modal">{$core->get_Lang('Cancel')}</button>
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
<!--    end modal-->
    
    <!--<div class="container">
    	<form method="post" id="frmForm" class="frmform" enctype="multipart/form-data">
			<div class="box_contact">
				<a class="btn btn-primary btn_title" type="button" data-toggle="collapse" data-target="#collapseContact" aria-expanded="true" aria-controls="collapseExample">{$core->get_Lang('Customer')} ({$core->get_Lang('contact')}) <i class="fa fa-angle-up pull-right"></i></a>
				<div class="box_form collapse in" id="collapseContact" aria-expanded="true">
					<div class="row">
						<div class="col-lg-3">
							<input class="text full" name="full_name" value="" type="text" placeholder="{$core->get_Lang('Fullname')}" />
							<label for="">{$core->get_Lang('Enter 3 letters to search')}</label>
						</div>
						<div class="col-lg-3">
							<input class="text full" name="birthday" value="" type="text" placeholder="{$core->get_Lang('Birthday')}" />
						</div>
						<div class="col-lg-3">
							<input class="text full" name="email" value="" type="text" placeholder="{$core->get_Lang('Email')}" />
							<label for="">{$core->get_Lang('Must be unique when adding new customers')}</label>
						</div>
						<div class="col-lg-3">
							<input class="text full" name="phone" value="" type="text" placeholder="{$core->get_Lang('Phone')}" />
						</div>
						<div class="col-lg-3">
							<select name="country_id" id="">
								<option value="">{$core->get_Lang('Country')}</option>
							</select>
						</div>					
						<div class="col-lg-6">
							<input class="text full" name="address" value="" type="text" placeholder="{$core->get_Lang('Address')}" />
						</div>
					</div>
				</div>
			</div>
			<div class="box_product_service">
				<a class="btn btn-primary btn_title" type="button" data-toggle="collapse" data-target="#collapseProduct" aria-expanded="true" aria-controls="collapseExample">{$core->get_Lang('Inventory')}<i class="fa fa-angle-up pull-right"></i></a>
				<div class="box_form collapse in" id="collapseProduct" aria-expanded="true">
					<div class="row">						
						<div class="col-lg-3">
							<select name="country_id" id="">
								<option value="">{$core->get_Lang('Group product')}</option>
							</select>
						</div>							
						<div class="col-lg-3">
							<select name="country_id" id="">
								<option value="">{$core->get_Lang('Option product')}</option>
							</select>
						</div>						
						<div class="col-lg-3">
							<select name="country_id" id="">
								<option value="">{$core->get_Lang('Title product')}</option>
							</select>
							<label for="">{$core->get_Lang('Enter 3 letters to search')}</label>
						</div>	
					</div>
					<div id="box_booking">
						<div class="box_info_booking">
							<div class="box_head_book">
								<p class="title_tour">Du Lịch Hồ Núi Cốc - Thái Nguyên 2 Ngày 1 đêm</p>
								<button class="btn_del"></button>
							</div>
							<div class="row box_content_book">
								<div class="col-lg-3 box_content_left">
									<div class="form-item">
										<label for="">{$core->get_Lang('Departure')}</label>
										<input class="datepicker required form-control" name="departure" type="text" value="" placeholder="dd/mm/yyyy" />										
									</div>
									<div class="form-item">
										<label for="">{$core->get_Lang('Tour option')}</label>
										<select name="tour_option" id="">
											<option value="">Tiêu chuẩn</option>
										</select>									
									</div>
									<div class="form-item adult-child">
										<label for="">{$core->get_Lang('Adult')}</label>
										<input class="text full" name="adult_simple" value="" type="number" placeholder="" />
										<span class="price">( x 1 350 000 đ)</span>					
									</div>
									<div class="form-item adult-child">
										<label for="">{$core->get_Lang('Child')}</label>
										<input class="text full" name="children_simple" value="" type="number" placeholder="" />
										<span class="price">( x 1 000 000 đ)</span>					
									</div>
								</div>
								<div class="col-lg-3 box_content_right">
									<label for="">{$core->get_Lang('Services bonus')}</label>
									<select name="tour_option" id="">
										<option value="">Tiêu chuẩn</option>
									</select>
									<div id="lst_service_bonus">
										<div class="form-item">
											<input class="text full" name="child" value="" type="number" placeholder="" />
											<label for="">{$core->get_Lang('Child')}</label>	<button class="btn_delete_bonus">x</button>		
										</div>
									</div>
								</div>
							</div>
						</div>						
					</div>
				</div>
			</div>
		</form>
    </div>-->
	<div class="container-fluid">
		<div class="wrap">
			<div class="filter_box">
				<form id="forums" method="post" action="" name="filter" class="filterForm">
					<div class="form-group form-keyword">
						<input type="text" class="text form-control" name="keyword" value="{$keyword}" placeholder="{$core->get_Lang('search')}..." />
					</div>
					<div class="form-group form-category">
						<select name="booking_time" class="form-control" id="booking_date">
							<option value="0">{$core->get_Lang('Booking time')}</option>
							{foreach from=$list_booking_time  item=item}
							<option {if $booking_time==$item} selected{/if} value="{$item}">{$item}</option>
							{/foreach}
						</select>
					</div>
					<div class="form-group">
						<select name="status" class="form-control">
							 <option value="0">{$core->get_Lang('Status')}</option>
							<option {if $status==2} selected{/if} value="2">{$core->get_Lang('Reviewed')}</option>
							 <option value="0">{$core->get_Lang('InProcess')}</option>

							 <option {if $status==3} selected{/if} value="3">{$core->get_Lang('Failed')}</option>
							 <option {if $status==6} selected{/if} value="6">{$core->get_Lang('Canceled')}</option>
						</select>
					</div>
					<div class="form-group form-button">
						<button type="submit" class="btn btn-main" id="findtBtn">{$core->get_Lang('Search')}</button>
						<input type="hidden" name="filter" value="filter">
					</div>
				</form>
			</div>
			<div class="clearfix"></div>
			<div class="tabbox">
				<div class="hastable">
					<table cellspacing="0" class="tbl-grid table-striped table_responsive" width="100%">
						<thead>
							<tr>
								<th class="gridheader" style="width:40px"><input id="check_all" type="checkbox" class="el-checkbox" /></th>
								<th class="gridheader name_responsive" style="text-align: left"><strong>{$core->get_Lang('Booking code')}</strong></th>
								<th class="gridheader hiden_responsive" style="text-align:left"><strong>{$core->get_Lang('Sản phẩm')}</strong></th>
								<th class="gridheader hiden_responsive" style="text-align:left"><strong>{$core->get_Lang("Customers")}</strong></th>
								<th class="gridheader hiden_responsive" style="text-align:left"><strong>{$core->get_Lang("Total Price")}</strong></th>							
								<th class="gridheader hiden_responsive text-center" style="width:130px; white-space:nowrap"><strong>{$core->get_Lang('Booking date')}</strong></th> 
								<th class="gridheader text-center hiden_responsive" style="width: 120px"><strong>{$core->get_Lang('status')}</strong></th>
								<th class="gridheader text-center hiden_responsive" width="40px"></th>
							</tr>
						</thead>
						{if $listItem[0].booking_id ne ''}
							<tbody id="SortAble">
								{section name=i loop=$listItem}
								{assign var=BOOKINGVALUE value = $clsClassTable->getBookingValue($listItem[i].booking_id)}
								{assign var=booking_id value = $listItem[i].booking_id}
								<tr {if $smarty.section.i.index%2 eq '0'}class="row1"{else}class="row2"{/if}>							
									<td class="check_40 has-checkbox text-center"><input name="p_key[]" class="chkitem el-checkbox" type="checkbox" value="{$booking_id}" /></td></td>
									<td style="text-align: left" class="text-left name_service">
										<span class="title" title="{if $clsClassTable->getOneField('is_online',$booking_id) eq 0}{$core->get_Lang('Booking PRIVATE')}{/if}">{$listItem[i].booking_code}</span>
										<button type="button" class="toggle-row inline_block767" style="display:none">
											<i class="fa fa-caret fa-caret-down"></i>
										</button>
									</td>
									<td class="block_responsive border_top_responsive" data-title="{$core->get_Lang('Sản phẩm')}">
									{$clsClassTable->getHTMLServiceOther($listItem[i].booking_id)}
									</td>
									<td class="block_responsive border_top_responsive" style="white-space:nowrap" data-title="{$core->get_Lang('Customers')}">
										<div class="customer_box">
											<p class="td_name">{$clsClassTable->getContactName($listItem[i].booking_id)}</p>
											<a href="tel:+{$clsClassTable->getPhone($listItem[i].booking_id)}" title="{$clsClassTable->getPhone($listItem[i].booking_id)}">{$clsClassTable->getPhone($listItem[i].booking_id)}</a>/ <a href="mailto:{$clsClassTable->getEmail($listItem[i].booking_id)}" title="{$clsClassTable->getEmail($listItem[i].booking_id)}">{$clsClassTable->getEmail($listItem[i].booking_id)}</a>
										</div>
									</td>
									<td class="block_responsive border_top_responsive text-left price" style="white-space:nowrap" data-title="{$core->get_Lang('Total Price')}">{$clsISO->priceFormat($listItem[i].totalgrand)} đ</td>
									<td class="block_responsive border_top_responsive text-center" style="white-space:nowrap" data-title="{$core->get_Lang('Booking date')}">{$clsISO->formatDate($listItem[i].reg_date,'/')}</td>
									{assign var=status value=$clsClassTable->getOneField('status',$listItem[i].booking_id)}
									<td class="block_responsive border_top_responsive booking_status status_{$status}" data-title="{$core->get_Lang('status')}"><span class="text">{$clsClassTable->getBookingStatus($status)}</span></td>
									<td class="block_responsive text-center" style="text-align: center; white-space: nowrap; width:5%" data-title="{$core->get_Lang('func')}"> 
										<div class="btn-group">
											<button class="btn btn_dropdown dropdown-toggle" type="button" data-toggle="dropdown">
												<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
											</button>
											<ul class="dropdown-menu" style="right:0px !important">
												{if _ISOCMS_CLIENT_LOGIN eq '111'}
											   <li><a href="{$PCMS_URL}/?mod=member&act=viewbooking&booking_id={$core->encryptID($listItem[i].booking_id)}" title="{$core->get_Lang('view')}"><i class="icon-edit"></i> {$core->get_Lang('view')}</a></li>
											   {else}
											   <li><a href="{$PCMS_URL}/?mod=booking&act=edit&booking_id={$core->encryptID($listItem[i].booking_id)}" title="{$core->get_Lang('view')}"><i class="icon-edit"></i> {$core->get_Lang('view')}</a></li>
											   {/if}
												<li><a class="confirm_delete" href="{$PCMS_URL}/?mod={$mod}&act={$act}&action=delete&booking_id={$core->encryptID($listItem[i].booking_id)}" title="{$core->get_Lang('delete')}"><i class="icon-remove"></i> {$core->get_Lang('delete')}</a></li>
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