<div class="page_container">
    <div class="page-title">
        <h2>{$core->get_Lang('reviews')}</h2>
        <p>Chức năng quản lý danh sách các reviews trong hệ thống isoCMS</p>
		<p>{$core->get_Lang('This function is intended to manage reviews in isoCMS system')}</p>
    </div>
	<div class="container-fluid">
	<div class="clearfix"><br /></div>
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
					<th class="gridheader name_responsive" style="text-align:left"><strong>{$core->get_Lang('fullname')}</strong></th>
					<th class="gridheader hiden_responsive" style="text-align:left"><strong>{$core->get_Lang('email')}</strong></th>
					<th class="gridheader hiden_responsive" style="text-align:left"><strong>{$core->get_Lang('country')}</strong></th>
					<th class="gridheader hiden_responsive" style="text-align:left"><strong>{$core->get_Lang('Type')}</strong></th>
					<th class="gridheader hiden_responsive" style="text-align:center"><strong>{$core->get_Lang('rates')}</strong></th>
					<th class="gridheader hiden_responsive" style="width:6%"><strong>{$core->get_Lang('status')}</strong></th>
					<th class="gridheader text-right hiden_responsive" style="width:12%;"><strong>{$core->get_Lang('Review date')}</strong></th>
					<th class="gridheader hiden_responsive"></th>
				</tr>
			</thead>
            <tbody id="SortAble">
				{section name=i loop=$allItem}
				<tr style="cursor:move" id="order_{$allItem[i].reviews_id}" class="{cycle values="row1,row2"}">
					<td class="check_40 has-checkbox text-center"><input name="p_key[]" class="chkitem el-checkbox" type="checkbox" value="{$allItem[i].reviews_id}" /></td>
					<td class="index hiden767">{$allItem[i].reviews_id}</td>
					<td class="text-left name_service">
						<span class="title" title="{if $clsClassTable->getOneField('is_online',$allItem[i].reviews_id) eq 0}{$core->get_Lang('Reviews PRIVATE')}{/if}">{$clsClassTable->getFullname($allItem[i].reviews_id)}</span>
						{if $allItem[i].is_online eq 0}
						<span class="color_r" title="{$core->get_Lang('Reviews PRIVATE')}">[P]</span>{/if}
						{if $allItem[i].is_trash eq '1'}
						<span class="pull-right text-muted">{$core->get_Lang('intrash')}</span>
						{/if}
						<button type="button" class="toggle-row inline_block767" style="display:none">
							<i class="fa fa-caret fa-caret-down"></i>
						</button>
					</td>
					<td data-title="{$core->get_Lang('email')}" class="block_responsive border_top_responsive">{$clsClassTable->getEmail($allItem[i].reviews_id)}</td>
					<td data-title="{$core->get_Lang('country')}" class="block_responsive">{$clsClassTable->getCountry($allItem[i].reviews_id)}</td>
					<td data-title="{$core->get_Lang('Type')}" class="block_responsive" style="text-align:left">{$allItem[i].type}</td>
					<td data-title="{$core->get_Lang('rates')}" class="block_responsive" style="text-align:center">{$allItem[i].rates}</td>
					<td data-title="{$core->get_Lang('status')}" class="block_responsive" style="text-align:center">
						<a href="javascript:void(0);" class="SiteClickPublic" clsTable="Reviews" pkey="reviews_id" sourse_id="{$allItem[i].reviews_id}" rel="{$clsClassTable->getOneField('is_online',$allItem[i].reviews_id)}" title="{$core->get_Lang('Click to change status')}">
							{if $clsClassTable->getOneField('is_online',$allItem[i].reviews_id) eq '1'}
							<i class="fa fa-check-circle green"></i>
							{else}
							<i class="fa fa-minus-circle red"></i>
							{/if}
						</a>
					</td>
					<td data-title="{$core->get_Lang('Review date')}" class="block_responsive" style="text-align:right">{$clsISO->formatDateTime($allItem[i].reg_date)}</td>
					<td data-title="{$core->get_Lang('func')}" class="block_responsive" align="center" style="vertical-align: middle; text-align:center; width: 40px; white-space: nowrap;">
						<div class="btn-group">
							<button class="btn btn_dropdown dropdown-toggle" type="button" data-toggle="dropdown">
								<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
							</button>
							<ul class="dropdown-menu" style="right:0px !important">
								{if $allItem[i].is_trash eq '0'}
								<li><a title="{$core->get_Lang('edit')}" href="{$PCMS_URL}/?mod={$mod}&act=edit&reviews_id={$core->encryptID($allItem[i].reviews_id)}"><i class="icon-edit"></i> <span>{$core->get_Lang('edit')}</span></a></li>
								<li><a title="{$core->get_Lang('trash')}" href="{$PCMS_URL}/?mod={$mod}&act=trash&reviews_id={$core->encryptID($allItem[i].reviews_id)}{$pUrl}"><i class="icon-trash"></i> <span>{$core->get_Lang('trash')}</span></a></li>
								{else}
								<li><a title="{$core->get_Lang('restore')}" href="{$PCMS_URL}/?mod={$mod}&act=restore&reviews_id={$core->encryptID($allItem[i].reviews_id)}{$pUrl}"><i class="icon-refresh"></i> <span>{$core->get_Lang('restore')}</span></a></li>
								<li><a title="{$core->get_Lang('delete')}" class="confirm_delete" href="{$PCMS_URL}/?mod={$mod}&act=delete&reviews_id={$core->encryptID($allItem[i].reviews_id)}{$pUrl}"><i class="icon-remove"></i> <span>{$core->get_Lang('delete')}</span></a></li>
								{/if}
							</ul>
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
<script type="text/javascript">
	var $recordPerPage = '{$recordPerPage}';
	var $currentPage = '{$currentPage}';
</script>
{literal}
<script type="text/javascript">
	$("#SortAble").sortable({
		opacity: 0.8,
		cursor: 'move',
		start: function(){
			vietiso_loading(1);
		},
		stop: function(){
			vietiso_loading(0);
		},
		update: function(){
			var recordPerPage = $recordPerPage;
			var currentPage = $currentPage;
			var order = $(this).sortable("serialize")+'&update=update'+'&recordPerPage='+recordPerPage+'&currentPage='+currentPage;
			$.post(path_ajax_script+"/index.php?mod=reviews&act=ajUpdPosSortReviews", order, 
			
			function(html){
				vietiso_loading(0);
				location.href = REQUEST_URI;
			});
		}
	});
</script>
{/literal}