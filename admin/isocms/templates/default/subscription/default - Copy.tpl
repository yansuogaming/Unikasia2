<div class="breadcrumb">
	<strong>{$core->get_Lang('youarehere')}:</strong>
	<a href="{$PCMS_URL}">{$core->get_Lang('home')}</a>
    <a>&raquo;</a>
    <a href="{$PCMS_URL}/index.php?mod={$mod}" title="{$mod}">{$core->get_Lang('Subscribe management')}</a>
	<!-- Back -->
	<a href="javascript:window.history.back();" class="back fr">{$core->get_Lang('back')}</a>
</div>
<div class="container-fluid">
    <div class="page-title">
        <h2>{$core->get_Lang('Subscribe management')}</h2>
        {assign var = setting value = 'SiteIntroModule_'|cat:$mod|cat:'_'|cat:$_LANG_ID}
		{if $clsConfiguration->getValue($setting) ne ''}
        <p>{$clsConfiguration->getValue($setting)|html_entity_decode}</p>
		{/if}
    </div>
	{literal}
	<script type="text/javascript">
		$(function(){
			$('#searchBtn').click(function(){
				$('#forums').submit();
			});
		});
	</script>
	{/literal}
	<form id="forums" method="post" action="" class="filterForm">
		<div class="filterbox" style="width:100%">
			<div class="wrap">
				<div class="searchbox">
					<input type="text" class="text" name="keyword" value="{$keyword}" placeholder="{$core->get_Lang('search')}..." />
					<a class="btn btn-success" id="searchBtn" style="padding:5px">
						<i class="icon-search icon-white"></i>
					</a>
				</div>
				<div class="fr group_buttons">
					<a href="{$PCMS_URL}/?mod={$mod}" class="btn btn-warning">
						<i class="icon-folder-open icon-white"></i> <span>{$core->get_Lang('all')} ({$number_all})</span>
					</a>
					<a href="javascript:void(0)" class="btn btn-success btn-export">
						<img src="{$URL_IMAGES}/v2/excel.png" style="vertical-align:middle"> {$core->get_Lang('Export')}
					</a>
				</div>
			</div>
		</div>
		<input type="hidden" name="filter" value="filter" />
	</form>
	<div class="dateExport dateExport2" style="display:none">
		<form class="form-export" method="post" action="">
			<div class="form-group inline-block">
				<div class="span50 fl">
					<label class="col-md-3 col-sm-4 col-xs-4 control-label title" for="from_date">
						{$core->get_Lang('From')} <span class="color_r">*</span>
					</label>
					<div class="col-md-9 col-sm-8 col-xs-8">
						<input name="from_date" autocomplete="off" maxlength="10" id="from_date" value="{$clsISO->formatTimeDate($now_day)}" size="15" class="full-width text_32 border_aaa" placeholder="mm/dd/yyyy">
					</div>
				</div>
				<div class="span50 fr">
					<label class="col-md-3 col-sm-4 col-xs-4 control-label title" for="to_date">
						{$core->get_Lang('To')} <span class="color_r">*</span>
					</label>
					<div class="col-md-9 col-sm-8 col-xs-8">
						<input name="to_date" autocomplete="off" maxlength="10" id="to_date" value="{$clsISO->formatTimeDate($now_next)}" size="15" class="full-width text_32 border_aaa" placeholder="mm/dd/yyyy">
					</div>
				</div>
			</div>
			<button type="submit" class="buttonExport" id="button_export">{$core->get_Lang('Export')}</button>
			<input type="hidden" name="Export" value="Export" />
		</form>
	</div>
	<br class="clear" />
	{if $allItem[0].subscribe_id ne ''}
	<table width="100%" cellspacing="0" class="tbl-grid table-striped table_responsive">
		<tr>
			<td class="gridheader"><strong>{$core->get_Lang('No.')}</strong></td>
			<td class="gridheader text-left"><strong>{$core->get_Lang('E-Mail')}</strong></td>
			<td class="gridheader text-right"><strong>{$core->get_Lang('Datetime')}</strong></td>
			<td class="gridheader"><strong>{$core->get_Lang('Tool')}</strong></td>
		</tr>
		{section name=i loop=$allItem}
		<tr class="{if $smarty.section.i.index%2 eq 0}row1{else}row2{/if}">
			<td class="index"> {$smarty.section.i.index+1}</td>
			<td><a href="mailto:{$clsClassTable->getOneField('email',$allItem[i].subscribe_id)}">{$clsClassTable->getOneField('email',$allItem[i].subscribe_id)}</a></td>
			<td style="text-align:center; width:120px">
				{$clsISO->formatDateTime($allItem[i].reg_date)}
			</td>
			<td style="vertical-align: middle; width: 20px; text-align: right; white-space: nowrap;">
				<a title="Xóa hẳn" class="btn-small btn-danger confirm_delete" href="{$PCMS_URL}/?mod={$mod}&act=delete&subscribe_id={$core->encryptID($allItem[i].subscribe_id)}"><i class="icon-remove icon-white"></i></a>
			</td>
		</tr>
		{/section}
	</table>
	{/if}
	<div class="adminPaging">
		<div class="report">
			{$core->get_Lang('statistical')} <strong>{$totalRecord}</strong> {$core->get_Lang('records')}/<strong>{$totalPage}</strong> {$core->get_Lang('page')}. {$core->get_Lang('youareonpagenumber')} <strong>{$currentPage}</strong>
		</div>
		<ul class="lstAdminPaging">
		{section name=i loop=$listPageNumber}
			<li><a href="{$PCMS_URL}/{$link_page_current}&page={$listPageNumber[i]}" {if $listPageNumber[i] eq $currentPage}class="active"{/if}>{$listPageNumber[i]}</a></li>
		{/section}
		</ul>
	</div>
	<a class="iso-button-full" onclick="$('#hide-DIV').slideToggle();">{$core->get_Lang('Click here to view list email')}</a>
	<div id="hide-DIV" class="mt5" style="display:none">
		<textarea style="width:100%; height:60px">{$htmlEmail}</textarea>
	</div>
</div>
{literal}
<script type="text/javascript">
$(document).ready(function(){
$('#from_date').datepicker({
	dateFormat: "mm/dd/yy", 
 
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
	dateFormat: "mm/dd/yy",
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