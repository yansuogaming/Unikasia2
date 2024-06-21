<div class="breadcrumb">
	<strong>{$core->get_Lang('youarehere')} : </strong>
    <a href="{$PCMS_URL}" title="{$core->get_Lang('home')}">{$core->get_Lang('home')}</a>
    <a>&raquo;</a>
    <a href="{$PCMS_URL}/index.php?mod={$mod}&clsTable={$core->encryptID($clsTable)}">{$core->get_Lang('Billing')}</a>
    <!-- // -->
    <a href="javascript:window.history.back();" class="back fr">{$core->get_Lang('back')}</a>
</div>
<div class="page_container">
	<div class="page-title d-flex">
        <div class="title">
			<h2>{$core->get_Lang('Billing Management')} <div class="info_module" data-toggle="tooltip" data-placement="right" title="Chức năng quản lý danh sách các {$core->get_Lang('Billing Management')} trong hệ thống isoCMS">i</div>
			</h2>
			<p>{$core->get_Lang('Here you can find all the important figures regarding your revenue and fees')}</p>
		</div>
    </div>
	<div class="container-fluid">
		<div class="filter_box">
			<form id="forums" method="post" class="filterForm" action="">
				<div class="form-group form-keyword">
					<input class="form-control" type="text" name="code" value="{$code}" placeholder="{$core->get_Lang('code')}..." />
				</div>
				<div class="form-group form-country">
					<select name="status" class="form-control" data-width="100%">
						<option value="">{$core->get_Lang('Status')}</option>
						<option value="0" {if $status eq '0'}selected="selected"{/if}>{$core->get_Lang('Failed')}</option>
						<option value="1" {if $status eq '1'}selected="selected"{/if}>{$core->get_Lang('Completed')}</option>
						<option value="2" {if $status eq '2'}selected="selected"{/if}>{$core->get_Lang('Pending')}</option>
						<option value="4" {if $status eq '4'}selected="selected"{/if}>{$core->get_Lang('Canceled')}</option>
					</select>
				</div>
				<div class="form-group form-button">
					<button type="submit" class="btn btn-main" id="findtBtn">Tìm kiếm</button>
					<input type="hidden" name="filter" value="filter" />
				</div>
				<div class="group_buttons fr">
					<a href="{$PCMS_URL}/?mod={$mod}" class="btn btn-success btnNew">
						<i class="icon-folder-open icon-white"></i> <span>{$core->get_Lang('all')} ({$totalItem})</span>
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
							<input name="from_date" autocomplete="off" maxlength="10" id="from_date" value="{$clsISO->formatTimeDate($now_day)}" size="15" class="full-width text_32 border_aaa" placeholder="dd/mm/yyyy">
						</div>
					</div>
					<div class="span50 fr">
						<label class="col-md-3 col-sm-4 col-xs-4 control-label title" for="to_date">
							{$core->get_Lang('To')} <span class="color_r">*</span>
						</label>
						<div class="col-md-9 col-sm-8 col-xs-8">
							<input name="to_date" autocomplete="off" maxlength="10" id="to_date" value="{$clsISO->formatTimeDate($now_next)}" size="15" class="full-width text_32 border_aaa" placeholder="dd/mm/yyyy">
						</div>
					</div>
				</div>
				<button type="submit" class="buttonExport" id="button_export">{$core->get_Lang('Export')}</button>
				<input type="hidden" name="Export" value="Export" />
			</form>
		</div>
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
				<table cellspacing="0" class="tbl-grid table-striped table_responsive" width="100%">
					<thead><tr>
						<th class="gridheader hiden767" style="width:40px"><strong>No.</strong></th>
						<th class="gridheader name_responsive full-w767" style="text-align:left"><strong>{$core->get_Lang('Code')}</strong></th>
						<th class="gridheader hiden767" style="text-align:left;width:5%;"><strong>{$core->get_Lang('Type')}</strong></th>
						<th class="gridheader hiden767" style="white-space:nowrap"><strong>{$core->get_Lang('Billing Method')}</strong></th>
						<th class="gridheader hiden767" style="width:8%;white-space:nowrap"><strong>{$core->get_Lang('Total')}($)</strong></th>
						<th class="gridheader hiden767" style="width:8%;white-space:nowrap"><strong>{$core->get_Lang('Total')}(₫)</strong></th>
						<th class="gridheader hiden767" style="white-space:nowrap"><strong>{$core->get_Lang('Pay Now')}($)</strong></th>
						<th class="gridheader hiden767" style="white-space:nowrap"><strong>{$core->get_Lang('Pay Now')}(₫)</strong></th>
						<th class="gridheader hiden767" style="white-space:nowrap"><strong>{$core->get_Lang('Unpaid')}($)</strong></th>
						<th class="gridheader hiden767" style="white-space:nowrap"><strong>{$core->get_Lang('Unpaid')}(₫)</strong></th>
						<th class="gridheader hiden767" style="white-space:nowrap"><strong>{$core->get_Lang('Status')}</strong></th>
						<th class="gridheader hiden767" style="width:10%"><strong>{$core->get_Lang('Date')}</strong></th>
						<th class="gridheader hiden767" style="width:6%"><strong>{$core->get_Lang('Action')}</strong></th>
					</tr></thead>
					{section name=i loop=$listItem}

					<tr class="row_custom {cycle values="row1,row2"}">
						<td class="index hiden767">{$smarty.section.i.iteration}</td>
						<td class="name_service title_td1">{$clsClassTable->getFieldValue($listItem[i].billing_id,'billing_code')}<button type="button" class="toggle-row inline_block767" style="display:none"><i class="fa fa-caret fa-caret-down"></i></button></td>
						<td class="block_responsive" data-title="{$core->get_Lang('Type')}">{$clsClassTable->getFieldValue($listItem[i].billing_id,'billing_type')}</td>
						<td class="block_responsive" data-title="{$core->get_Lang('Billing Method')}">{$clsClassTable->getFieldValue($listItem[i].billing_id,'billing_method')}</td>
						<td class="fieldNumber block_responsive" data-title="{$core->get_Lang('Total')}($)">{$clsClassTable->getFieldValue($listItem[i].billing_id,'totalgrand')}</td>
						<td class="fieldNumber block_responsive" data-title="{$core->get_Lang('Total')}(₫)">{$clsClassTable->getFieldValue($listItem[i].billing_id,'totalgrand_VND')}</td>
						<td class="fieldNumber block_responsive" data-title="{$core->get_Lang('Pay Now')}($)">{$clsClassTable->getFieldValue($listItem[i].billing_id,'deposit')}</td>
						<td class="fieldNumber block_responsive" data-title="{$core->get_Lang('Pay Now')}(₫)">{$clsClassTable->getFieldValue($listItem[i].billing_id,'deposit_VND')}</td>
						<td class="fieldNumber block_responsive" data-title="{$core->get_Lang('Unpaid')}">{$clsClassTable->getFieldValue($listItem[i].billing_id,'balance')}</td>
						<td class="fieldNumber block_responsive" data-title="{$core->get_Lang('Status')}">{$clsClassTable->getFieldValue($listItem[i].billing_id,'balance_VND')}</td>
						<td class=" block_responsive">{$clsClassTable->getFieldValue($listItem[i].billing_id,'status')}</td>
						<td class="fieldNumber block_responsive" data-title="{$core->get_Lang('Date')}">{$clsClassTable->getFieldValue($listItem[i].billing_id,'reg_date')}</td>
						<td class=" block_responsive" data-title="{$core->get_Lang('Action')}" style="vertical-align: top; text-align: right; white-space: nowrap"> 
							{assign var = booking_id value = $clsClassTable->getFieldValue($listItem[i].billing_id,'booking_id')}
							<div class="btn-group">
								<button class="btn btn_dropdown dropdown-toggle" type="button" data-toggle="dropdown">
									<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
								</button>
								<ul class="dropdown-menu" style="right:0px !important">
									<li><a href="{$PCMS_URL}/?mod=member&act=viewbooking&booking_id={$core->encryptID($booking_id)}">
										<i class="icon-edit"></i> {$core->get_Lang('View')}</a></li>
									<li><a href="{$PCMS_URL}/?mod=member&act=print&booking_id={$core->encryptID($listItem[i].booking_id)}">
										<i class="icon-print"></i> {$core->get_Lang('Print')}</a></li>
								</ul>
							</div>
						</td>
					</tr>
					{/section}
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