<div class="breadcrumb">
	<strong>{$core->get_Lang('youarehere')} : </strong>
    <a href="{$PCMS_URL}" title="{$core->get_Lang('home')}">{$core->get_Lang('home')}</a>
    <a>&raquo;</a>
    <a href="{$curl}">{$core->get_Lang('bookinghotelmanagement')}</a>
    <!-- // -->
    <a href="javascript:window.history.back();" class="back fr">{$core->get_Lang('back')}</a>
</div>
<div class="page_container">
	<div class="page-title d-flex">
        <div class="title">
			<h2>
			{if $status ne ''}
				{if $status eq 0}{$core->get_Lang('Hotel Booking Reminding List')}{/if}
				{if $status eq 1}{$core->get_Lang('Hotel Booking Offered List')}{/if}
				{if $status eq 2}{$core->get_Lang('Hotel Booking Reviewed List')}{/if}
			{else}
				{$core->get_Lang('Hotel Booking List')}
			{/if}
			</h2>
			{assign var = setting value = 'SiteIntroModule_'|cat:$mod|cat:'_'|cat:$_LANG_ID}
			{if $clsConfiguration->getValue($setting) ne ''}
			<p>{$clsConfiguration->getValue($setting)|html_entity_decode}</p>
			{/if}
		</div>
    </div>
	<div class="container-fluid">
		<div class="clearfix"></div>
		<div class="filter_box">
			<form id="forums" method="post" class="filterForm" action="">
				{assign var=blog_category_check value=$clsISO->getCheckActiveModulePackage($package_id,$mod,'category','default')}
				<div class="form-group form-keyword">
					<input class="form-control" type="text" name="keyword" value="{$keyword}" placeholder="{$core->get_Lang('search')}" />
				</div>
				<div class="form-group form-button">
					<button type="submit" class="btn btn-main" id="findtBtn">Tìm kiếm</button>
					<input type="hidden" name="filter" value="filter" />
				</div>
				<div class="form-group form-button">
					<a class="btn btn-delete-all" id="btn_delete" clsTable="Booking" type="Hotel" style="display:none">
						{$core->get_Lang('Delete')}
					</a>
				</div>
				<div class="group_buttons fr">
					<a href="{$PCMS_URL}/?mod={$mod}&act=booking_hotel" class="btn btn-warning btnNew">
						<i class="icon-folder-open icon-white"></i> <span>{$core->get_Lang('all')} ({$totalItem})</span>
					</a>
					<a href="{$PCMS_URL}/?mod={$mod}&act=booking_hotel&status=1" class="btn btn-success btnNew" style="background:#06C;border-color:#06C">
						<i class="icon-folder-open icon-white"></i> <span>{$core->get_Lang('Offered')} ({$number_process})</span>
					</a>
					<a href="{$PCMS_URL}/?mod={$mod}&act=booking_hotel&status=2" class="btn btn-success btnNew" style="background:#c00000;border-color:#c00000">
						<i class="icon-warning-sign icon-white"></i> <span>{$core->get_Lang('Reviewed')} ({$number_reviewed})</span>
					</a>
					<a href="{$PCMS_URL}/?mod={$mod}&act=booking_hotel&status=0" class="btn btn-success btnNew" style="background:#FC0;border-color:#FC0">
						<i class="icon-warning-sign icon-white"></i> <span>{$core->get_Lang('Reminding')} ({$number_unprocess})</span>
					</a>
					<a class="btn btn-danger btn-delete-all btnNew" clsTable="Booking" type="Hotel" style="display:none">
						<i class="icon-remove icon-white"></i> <span>{$core->get_Lang('Delete')}</span>
					</a>
					<a href="javascript:void(0)" class="btn btn-success btn-export btnNew">
						<img src="{$URL_IMAGES}/v2/excel.png" style="vertical-align:middle"> {$core->get_Lang('Export')}
					</a>
				</div>
			</form>	
		</div>
		
		<div class="dateExport dateExport2" style="display:none">
			<form class="form-export" method="post" action="">
				<div class="form-group inline-block">
					<div class="span50 fl">
						<label class="col-md-3 col-sm-4 col-xs-4 control-label title" for="from_date">
							{$core->get_Lang('From')} <span class="color_r">*</span>
						</label>
						<div class="col-md-9 col-sm-8 col-xs-8">
							<input name="from_date" autocomplete="off" maxlength="10" id="from_date" value="{$clsISO->formatTimeDate($now_day)}" size="15" class="full-width text_32 border_aaa" placeholder="dd/mm/yy">
						</div>
					</div>
					<div class="span50 fr">
						<label class="col-md-3 col-sm-4 col-xs-4 control-label title" for="to_date">
							{$core->get_Lang('To')} <span class="color_r">*</span>
						</label>
						<div class="col-md-9 col-sm-8 col-xs-8">
							<input name="to_date" autocomplete="off" maxlength="10" id="to_date" value="{$clsISO->formatTimeDate($now_next)}" size="15" class="full-width text_32 border_aaa" placeholder="dd/mm/yy">
						</div>
					</div>
				</div>
				<button type="submit" class="buttonExport" id="button_export">{$core->get_Lang('Export')}</button>
				<input type="hidden" name="Export" value="Export" />
			</form>
		</div>
		<br />
		<div class="hastable">
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
			<div class="table_list_booking">
				<table cellspacing="0" class="tbl-grid table-striped table-layout-fixed" width="100%">
					<thead>
						<tr>
						<th class="gridheader" style="width:40px"><input id="check_all" type="checkbox" /></th>
						<th class="gridheader" style="width:40px"><strong>{$core->get_Lang('ID')}</strong></th>
						<th class="gridheader text-left" style="width:150px"><strong>{$core->get_Lang("Customer's Contact")}</strong></th>
						<th class="gridheader text-left" style="width:100px"><strong>{$core->get_Lang('Name of hotel')}</strong></th> 
						<th class="gridheader text-left" style="width:100px; white-space:nowrap"><strong>{$core->get_Lang('Check in')}</strong></th> 
						<th class="gridheader text-left" style="width:100px; white-space:nowrap"><strong>{$core->get_Lang('Check out')}</strong></th>
						<th class="gridheader" style="width:100px"><strong>{$core->get_Lang('status')}</strong></th>
						<th class="gridheader" style="width:60px"><strong>{$core->get_Lang('action')}</strong></th>
					</tr>
					</thead>
					<tbody>
						{section name=i loop=$listItem}
						{assign var=BOOKINGVALUE value = $clsClassTable->getBookingValue($listItem[i].booking_id)}
						<tr {if $smarty.section.i.index%2 eq '0'}class="row1"{else}class="row2"{/if}>
							<td class="index"><input name="p_key[]" class="chkitem" type="checkbox" value="{$listItem[i].booking_id}" /></td>
							<td class="index td_overflow">{$listItem[i].booking_id}</td>
							<td class="td_overflow" style="white-space:nowrap">
								<strong>{$clsClassTable->getFullName($listItem[i].booking_id)} </strong>
								<br />
								<i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:{$clsClassTable->getEmail($listItem[i].booking_id)}" title="{$clsClassTable->getEmail($listItem[i].booking_id)}">{$clsClassTable->getEmail($listItem[i].booking_id)}</a>
								<br/>
								<i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:+{$clsClassTable->getPhone($listItem[i].booking_id)}" title="{$clsClassTable->getPhone($listItem[i].booking_id)}">{$clsClassTable->getPhone($listItem[i].booking_id)}</a>
								<br />
								<i class="fa fa-globe" aria-hidden="true"></i> <span>{$clsClassTable->getCountry($listItem[i].booking_id)}</span>
							</td>
							<td class="td_message">
								<strong>{$clsHotel->getTitle($listItem[i].target_id)}</strong>
								<br/>
								<i class="fa fa-map-marker" aria-hidden="true"></i> {$clsHotel->getAddress($listItem[i].target_id)}
							</td>
							<td style="white-space:nowrap" class="text-left td_overflow">{$BOOKINGVALUE.checkin}</td>
							<td style="white-space:nowrap" class="text-left td_overflow">{$BOOKINGVALUE.checkout}</td>
							<td>
								{if $listItem[i].status eq '0'}
								<span class="status_pending">{$core->get_Lang('Reminding')}</span>
								{elseif $listItem[i].status eq '2'}
								<span class="status_lock">{$core->get_Lang('Reviewed')}</span>
								{else}
								<span class="status_approved">{$core->get_Lang('Offered')}</span>
								{/if}
							</td>
							<td style="text-align: center; white-space: nowrap; width:5%"> 
								<div class="btn-group">
									<button class="btn iso-button-standard dropdown-toggle" type="button" data-toggle="dropdown">
										<i class="icon-cog"></i> <span class="caret"></span>
									</button>
									<ul class="dropdown-menu" style="right:0px !important">
									   <li><a href="{$PCMS_URL}/?mod=member&act=viewbooking&booking_id={$core->encryptID($listItem[i].booking_id)}" title="{$core->get_Lang('view')}"><i class="icon-edit"></i> {$core->get_Lang('view')}</a></li>
										<li><a href="{$PCMS_URL}/?mod={$mod}&act=print&booking_id={$core->encryptID($listItem[i].booking_id)}" title="{$core->get_Lang('delete')}"><i class="icon-print"></i> {$core->get_Lang('print')}</a></li>
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