<div class="page_container">
    <div class="page-title">
        <h2>{$core->get_Lang('reviews')} {if $type ne ''}{$core->get_Lang($type)}{/if}</h2>>
    </div>
	<div class="container-fluid">
   		<div class="wrap">
			<div class="filter_box">
				<form id="forums" method="post" class="filterForm" action="">
					<div class="form-group form-keyword">
						<input class="form-control" type="text" name="keyword" value="{$keyword}" placeholder="{$core->get_Lang('search')}" />
					</div>
					<div class="form-group form-country">
						<select name="type" class="form-control" data-width="100%" id="slb_country">
							<option value="">{$core->get_Lang('select')}</option>
                        	{$clsClassTable->getSelectByType($type)}
						</select>
					</div>
					<div class="form-group form-button">
						<button type="submit" class="btn btn-main" id="findtBtn">Tìm kiếm</button>
						<input type="hidden" name="filter" value="filter" />
					</div>
					<div class="form-group form-button">
						<a class="btn btn-delete-all" id="btn_delete" clsTable="Reviews" style="display:none">
							{$core->get_Lang('Delete')}
						</a>
					</div>
					<div class="fr group_buttons">
						<a href="{$PCMS_URL}/?mod={$mod}" class="btn btn-warning btnNew" style="color:#fff"> <i class="icon-folder-open icon-white"></i> <span>{$core->get_Lang('all')}({$number_all})</span> </a>
						<a href="{$PCMS_URL}/?mod={$mod}&type_list=Trash" class="btn btn-danger btnNew" style="color:#fff"> <i class="icon-warning-sign icon-white"></i> <span>{$core->get_Lang('trash')} ({$number_trash})</span> </a>
					</div>  
				</form>
			</div>
			<div class="clearfix"></div>
			<input id="list_selected_chkitem" style="display:none" value="0" />
			<div class="statistical mb5">
				<table width="100%" border="0" cellpadding="3" cellspacing="0">
					<tr>
						<td width="50%" align="left">&nbsp;</td>
						<td width="50%" align="right">
							{$core->get_Lang('Record/page')}:
							{$clsISO->getRecordPerPage($recordPerPage,$totalRecord,$mod)}
						</td>
					</tr>
				</table>
			</div>
		</div>
    <div class="wrap">
        <table cellspacing="0" class="tbl-grid table-striped table_responsive" width="100%">
			<thead>
				<tr>
					<th class="gridheader" style="width:40px"><input id="check_all" class="el-checkbox" type="checkbox" /></th>
					<th class="gridheader hiden767"><strong>{$core->get_Lang('ID')}</strong></th>
					<th class="gridheader name_responsive" style="text-align:left"><strong>{$core->get_Lang('Name service')}</strong></th>
					<th class="gridheader hiden_responsive" style="text-align:left"><strong>{$core->get_Lang('country')}</strong></th>
					<th class="gridheader hiden_responsive" style="text-align:center"><strong>{$core->get_Lang('rates')}</strong></th>
					<th class="gridheader hiden_responsive" style="width:6%"><strong>{$core->get_Lang('status')}</strong></th>
					<th class="gridheader hiden_responsive"></th>
				</tr>
			</thead>
            <tbody id="SortAble">
				{section name=i loop=$allItem}
				{math equation="x*100/5" x=$allItem[i].rates assign="percent_rate"}
				<tr id="order_{$allItem[i].reviews_id}" class="{cycle values="row1,row2"}">
					<td class="check_40 has-checkbox text-center"><input name="p_key[]" class="chkitem el-checkbox" type="checkbox" value="{$allItem[i].reviews_id}" /></td>
					<td class="text-left name_service">
						<div class="box_name_services">
							<p class="txt_name_services"><a href="{$PCMS_URL}/?mod={$mod}&act=edit&reviews_id={$core->encryptID($allItem[i].reviews_id)}" title="{$clsClassTable->getFullname($allItem[i].reviews_id)}">#{$allItem[i].reviews_id}</a> - {$clsClassTable->getNameService($allItem[i].reviews_id)}</p>
							<p class="txt_info"><span>{$clsClassTable->getFullname($allItem[i].reviews_id)}</span> | <span>{$clsClassTable->getEmail($allItem[i].reviews_id)}</span></p>
							<p class="txt_info">{$core->get_Lang('Update')}: {$clsISO->formatDateTime($allItem[i].reg_date,"d/m/Y H:i")}</p>
						</div>
					</td>
					<td data-title="{$core->get_Lang('Type')}" class="block_responsive" style="text-align:left">{$allItem[i].type}</td>
					<td data-title="{$core->get_Lang('country')}" class="block_responsive">{$clsClassTable->getCountry($allItem[i].reviews_id)}</td> 
					<td data-title="{$core->get_Lang('rates')}" class="block_responsive" style="text-align:center"><p class="rate_table">{$allItem[i].rates}/<span>/5.0</span></p></td>
					<td data-title="{$core->get_Lang('status')}" class="block_responsive" style="text-align:center">
						<a href="javascript:void(0);" class="SiteClickPublic" clsTable="Reviews" pkey="reviews_id" sourse_id="{$allItem[i].reviews_id}" rel="{$clsClassTable->getOneField('is_online',$allItem[i].reviews_id)}" title="{$core->get_Lang('Click to change status')}">
							{if $clsClassTable->getOneField('is_online',$allItem[i].reviews_id) eq '1'}
							<span class="status_review public">{$core->get_Lang('Public')}</span>
							{else}
							<span class="status_review private">{$core->get_Lang('Private')}</span>
							{/if}
						</a>
					</td>
					<td data-title="{$core->get_Lang('func')}" class="block_responsive" align="center" style="vertical-align: middle; text-align:center; width: 40px; white-space: nowrap;">
						<div>
							<a href="{$PCMS_URL}/?mod={$mod}&act=edit&reviews_id={$core->encryptID($allItem[i].reviews_id)}" title="{$core->get_Lang('edit')}" class="edit_review"><i class="fa fa-eye" aria-hidden="true"></i></a>
							<a href="{$PCMS_URL}/?mod={$mod}&act=delete&reviews_id={$core->encryptID($allItem[i].reviews_id)}{$pUrl}" title="{$core->get_Lang('delete')}" class="delete_review"><i class="fa fa-trash" aria-hidden="true"></i></a>
						</div>
					</td>
				</tr>
				{/section}
        	</tbody>
		</table>
		<div class="statistical mb5">
			<table width="100%" border="0" cellpadding="3" cellspacing="0">
				<tr>
					<td width="50%" align="left">{$core->get_Lang('statistical')} <strong>{$totalRecord}</strong> {$core->get_Lang('records')}/<strong>{$totalPage}</strong> {$core->get_Lang('page')}. {$core->get_Lang('youareonpagenumber')} <strong>{$currentPage}</strong></td>
					{if $totalPage gt '1'}
					<td width="50%" align="right">
						{$core->get_Lang('gotopage')}:
						<select name="page" onchange="window.location = this.options[this.selectedIndex].value">
							{section name=i loop=$listPageNumber}
							<option {if $listPageNumber[i] eq $currentPage}selected="selected"{/if} value="{$PCMS_URL}/{$link_page_current}&page={$listPageNumber[i]}">{$listPageNumber[i]}</option>
							{/section}
						</select> 
					</td>
					{/if}
				</tr>
			</table>
		</div>
	</div>
</div>
</div>
<link rel="stylesheet" href="{$URL_CSS}/reviews.css?v={$upd_version}">
<script type="text/javascript">
	var $recordPerPage = '{$recordPerPage}';
	var $currentPage = '{$currentPage}';
</script>
<script src="{$URL_JS}/highchart/highcharts.js?v={$upd_version}"></script>
<script src="{$URL_JS}/reviews.js?v={$upd_version}"></script>