<div class="page_container">
	<div class="page-title  d-flex">
        <div class="title">
			<h2>{$core->get_Lang('Bán hàng')} <div class="info_module" data-toggle="tooltip" data-placement="right" title="Chức năng quản lý danh sách booking trong hệ thống isoCMS">i</div></h2>
			<p>{$totalItem} {$core->get_Lang('booking')}</p>
			
		</div>
		<div class="button_right">
			<a class="btn btn-main btn-addnew" href="" title="{$core->get_Lang('Create Booking')}">{$core->get_Lang('Create Booking')}</a>
			<div class="btn btn-setting"><a href="{$PCMS_URL}/?mod={$mod}&act=setting" title="{$core->get_Lang('Setting')}"><i class="fa fa-cog" aria-hidden="true"></i></a></div>
		</div>
    </div>
	<div class="container-fluid">
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
		
		<div class="hastable">
			<div class="table_list_booking">
				<table cellspacing="0" class="tbl-grid list_booking" width="100%">
					<tr>
						<td class="gridheader" style="width:40px"><input id="check_all" type="checkbox" /></td>
						<td class="gridheader" style="width: 120px; text-align: left"><strong>{$core->get_Lang('Booking code')}</strong></td>
						<td class="gridheader" style="text-align: left;"><strong>{$core->get_Lang('Sản phẩm')}</strong></td>
						<td class="gridheader text-left" style="width:280px"><strong>{$core->get_Lang("Customers")}</strong></td>
						<td class="gridheader text-left" style="width:140px; white-space:nowrap"><strong>{$core->get_Lang('Total Price')}</strong></td> 
						<td class="gridheader text-center" style="width:130px; white-space:nowrap"><strong>{$core->get_Lang('Booking date')}</strong></td> 
						<td class="gridheader text-left" style="width:130px"><strong>{$core->get_Lang('status')}</strong></td>
						<td class="gridheader" style="width:70px"></td>
					</tr>
					<tbody>
						{section name=i loop=$listItem}
						{assign var=BOOKINGVALUE value = $clsClassTable->getBookingValue($listItem[i].booking_id)}
						<tr {if $smarty.section.i.index%2 eq '0'}class="row1"{else}class="row2"{/if}>
							<td class="index"><input name="p_key[]" class="chkitem" type="checkbox" value="{$listItem[i].booking_id}" /></td>
							<td style="text-align: left" class="title">{$listItem[i].booking_code}</td>
							<td style="text-align: left">{$clsClassTable->getHTMLServiceOther($listItem[i].booking_id)}</td>
							<td style="white-space:nowrap">
								<div class="customer_box">
									<p class="td_name">{$clsClassTable->getContactName($listItem[i].booking_id)}</p>
									<a href="tel:+{$clsClassTable->getPhone($listItem[i].booking_id)}" title="{$clsClassTable->getPhone($listItem[i].booking_id)}">{$clsClassTable->getPhone($listItem[i].booking_id)}</a>/ <a href="mailto:{$clsClassTable->getEmail($listItem[i].booking_id)}" title="{$clsClassTable->getEmail($listItem[i].booking_id)}">{$clsClassTable->getEmail($listItem[i].booking_id)}</a>
								</div>
							</td>

							<td style="white-space:nowrap" class="text-left price">{$clsISO->priceFormat($listItem[i].totalgrand)} đ</td>
							<td style="white-space:nowrap" class="text-center">{$clsISO->formatDate($listItem[i].reg_date,'/')}</td>
							{assign var=status value=$clsClassTable->getOneField('status',$listItem[i].booking_id)}
							<td class="booking_status status_{$status}"><span class="text">{$clsClassTable->getBookingStatus($status)}</span></td>
							<td style="text-align: center; white-space: nowrap; width:5%"> 
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
				</table>
			</div>
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