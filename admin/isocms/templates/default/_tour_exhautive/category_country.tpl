<div class="breadcrumb">
	<strong>{$core->get_Lang('youarehere')} : </strong>
	<a href="{$PCMS_URL}" title="{$core->get_Lang('home')}">{$core->get_Lang('home')}</a>
    <a>&raquo;</a>
	<a href="{$PCMS_URL}/index.php?mod=country">{$core->get_Lang('Travel Styles by Country')}</a>
	<a>&raquo;</a>
    <!-- // -->
    <a href="javascript:window.history.back();" class="back fr">{$core->get_Lang('back')}</a>
</div>
<div class="container-fluid">
    <div class="page-title">
        <h2>{$core->get_Lang('Travel Styles by Country list')} <a class="btn btn-success" href="{$PCMS_URL}/?mod={$mod}&act=edit_categorycountry" title="{$core->get_Lang('add')}"> <i class="icon-plus icon-white"></i></a></h2>
        <p>{$core->get_Lang('Chức năng quản lý danh sách các Travel Styles by Country phục vụ cho việc phân loại tour du lịch trong hệ thống isoCMS')}</p>
        <p>{$core->get_Lang('This function is intended to manage Travel Styles by Country in isoCMS system')}</p>
    </div>
	<div class="clearfix"><br /></div>
    <form id="forums" method="post" class="filterForm" action="">
        <div class="fiterbox">
            <div class="wrap">
                <div class="searchbox">
                	 <select  onchange="_reload();" class="slb full" name="country_id" id="slb_Country" style="font-size:14px;width:150px">
                        {$clsCountry->makeSelectboxOption($country_id)}
                    </select>
                    {if $clsConfiguration->getValue('SiteHasCat_Tours') eq 1}
                    <select  onchange="_reload();"  name="cat_id" class="slb full" style="font-size:14px;width:200px" {$country_id}>
                        {$clsTourCategory->makeSelectboxOptionCountry($country_id,$cat_id)}
                    </select>
                    {/if}
                    <input type="text" class="text" name="keyword" value="{$keyword}" placeholder="{$core->get_Lang('search')}" />
                    <a class="btn btn-success" href="javascript:void();" id="searchbtn" style="padding:5px">
                        <i class="icon-search icon-white"></i>
                    </a>
                </div>
                <div class="group_buttons fr">
                     <a href="{$PCMS_URL}/?mod={$mod}&act=category" class="btn btn-success" title="{$core->get_Lang('Travel Styles list')}"><i class="icon-list icon-white"></i> <span>{$core->get_Lang('Travel Styles list')}</span> </a>
                </div>
            </div>
		</div>
        <input type="hidden" name="filter" value="filter" />
    </form>
	<div class="clearfix"></div>
	<div class="statistical mb5">
		<table width="100%" border="0" cellpadding="3" cellspacing="0">
			<tr>
				<td width="50%" align="left">&nbsp;</td>
				<td width="50%" align="right">
					{$core->get_Lang('Record/page')}:
					<select name="recordperpage" onchange="window.location = this.options[this.selectedIndex].value">
						<option {if $recordPerPage eq '20'}selected="selected"{/if} value="{$PCMS_URL}/?mod={$mod}&act={$act}&recordperpage=20">20</option>
						{if $totalRecord gt '20'}
						<option {if $recordPerPage eq '50'}selected="selected"{/if} value="{$PCMS_URL}/?mod={$mod}&act={$act}&recordperpage=50">50</option>
						{if $totalRecord gt '50'}
						<option {if $recordPerPage eq '100'}selected="selected"{/if} value="{$PCMS_URL}/?mod={$mod}&act={$act}&recordperpage=100">100</option>
						{if $totalRecord gt '100'}
						<option {if $recordPerPage eq '200'}selected="selected"{/if} value="{$PCMS_URL}/?mod={$mod}&act={$act}&recordperpage=200">200</option>
						{if $totalRecord gt '200'}
						<option {if $recordPerPage eq '{$totalRecord}'}selected="selected"{/if} value="{$PCMS_URL}/?mod={$mod}&act={$act}&recordperpage={$totalRecord}">{$core->get_Lang('All')}</option>
						{/if}
						{/if}
						{/if}
						{/if}
					</select>
					<a class="btn btn-danger btn-delete-all" clsTable="Category_Country" style="display:none">
                        <i class="icon-remove icon-white"></i> <span>{$core->get_Lang('Delete Options')}</span>
                    </a>
				</td>
			</tr>
		</table>
	</div>
	<div class="hastable">
		<table cellspacing="0" class="tbl-grid full-width table_responsive">
			<thead>
				<tr>
					<th class="gridheader" style="width:40px"><input id="check_all" type="checkbox" /></th>
					<th class="gridheader hiden767"><strong>{$core->get_Lang('ID')}</strong></th>
					{if $clsConfiguration->getValue('SiteHasCat_Tours')}
					<th class="gridheader name_responsive" style="text-align:left"><strong>{$core->get_Lang('Name')}</strong></th>
					{/if}
					<th class="gridheader hiden_responsive" style="text-align:left; width:150px"><strong>{$core->get_Lang('Country')}</strong></th>
					<th class="gridheader hiden_responsive" style="width:55px;"><strong>{$core->get_Lang('status')}</strong></th>
					<th class="gridheader hiden_responsive" width="60px"><strong>{$core->get_Lang('func')}</strong></th>
				</tr>
			</thead>
			{if $allItem[0].category_country_id ne ''}
			<tbody id="SortAble">
			{section name=i loop=$allItem}
				<tr style="cursor:move" id="order_{$allItem[i].category_country_id}" class="{if $smarty.section.i.index%2 eq 0}row1{else}row2{/if}">
					<th class="check_40"><input name="p_key[]" class="chkitem" type="checkbox" value="{$allItem[i].category_country_id}" /></th>
					<th class="index hiden767">{$allItem[i].category_country_id}</th>
					<td class="name_service">
						<strong style="font-size:16px">{if $clsClassTable->getOneField('is_online',$allItem[i].category_country_id) eq 0}<span style="color:#F90">[PRIVATE]</span>{/if} 
						
						<a href="{$PCMS_URL}/index.php?mod={$mod}&cat_id={$allItem[i].cat_id}">
						<i class="fa fa-folder-open"></i>  {$clsTourCategory->getTitle($allItem[i].cat_id)}</a></strong>
						{if $allItem[i].is_trash eq '1'}<span class="fr" style="color:#CCC">{$core->get_Lang('intrash')}</span>{/if}
						<button type="button" class="toggle-row inline_block767" style="display:none"><i class="fa fa-caret fa-caret-down"></i></button>
					</td>
					<td data-title="{$core->get_Lang('Country')}" class="block_responsive border_top_responsive"><strong style="font-size:16px">{$clsCountry->getTitle($allItem[i].country_id)}</strong></td>
					<td data-title="{$core->get_Lang('status')}" class="block_responsive" style="text-align:center">
					<a href="javascript:void(0);" class="SiteClickPublic" clsTable="Category_Country" pkey="{$pkeyTable}" sourse_id="{$allItem[i].$pkeyTable}" rel="{$clsClassTable->getOneField('is_online',$allItem[i].$pkeyTable)}" title="{$core->get_Lang('Click to change status')}">
						{if $clsClassTable->getOneField('is_online',$allItem[i].$pkeyTable) eq '1'}
						<i class="fa fa-check-circle green"></i>
						{else}
						<i class="fa fa-minus-circle red"></i>
						{/if}
					</a>
				</td>
				<td data-title="{$core->get_Lang('func')}" class="block_responsive" align="center" style="vertical-align: middle; text-align:center; width: 40px; white-space: nowrap;">
					<div class="btn-group">
						<button class="btn iso-button-standard dropdown-toggle" type="button" data-toggle="dropdown"> <i class="icon-cog"></i> <span class="caret"></span></button>
						<ul class="dropdown-menu" style="right:0px !important">
							{if $allItem[i].is_trash eq '0'}
							{assign var=city_id value= $clsClassTable->getOneField('city_id',$allItem[i].$pkeyTable)}
							{assign var=cat_id value= $clsClassTable->getOneField('cat_id',$allItem[i].$pkeyTable)}
							<li><a href="{$DOMAIN_NAME}{$clsCity->getLinkGuide($cat_id,$city_id)}" target="_blank" title="{$core->get_Lang('view')}"><i class="icon-eye-open"></i> <span>{$core->get_Lang('view')}</span></a></li>
							<li><a title="{$core->get_Lang('edit')}" href="{$PCMS_URL}/?mod={$mod}&act=edit_categorycountry&category_country_id={$core->encryptID($allItem[i].category_country_id)}{if $parent_id}&parent_id={$allItem[i].parent_id}{/if}"><i class="icon-edit"></i> <span>{$core->get_Lang('edit')}</span></a></li>
							<li><a title="{$core->get_Lang('trash')}" href="{$PCMS_URL}/?mod={$mod}&act=trash2&category_country_id={$core->encryptID($allItem[i].category_country_id)}"><i class="icon-trash"></i> <span>{$core->get_Lang('trash')}</span></a></li>
							{else}
							<li><a title="{$core->get_Lang('restore')}" href="{$PCMS_URL}/?mod={$mod}&act=restore2&category_country_id={$core->encryptID($allItem[i].category_country_id)}{$pUrl}"><i class="icon-refresh"></i> <span>{$core->get_Lang('restore')}</span></a></li>
							<li><a title="{$core->get_Lang('delete')}" class="confirm_delete" href="{$PCMS_URL}/?mod={$mod}&act=delete2&category_country_id={$core->encryptID($allItem[i].category_country_id)}{$pUrl}"><i class="icon-remove"></i> <span>{$core->get_Lang('delete')}</span></a></li>
							{/if}
						</ul>
					</div>
				</td>
			</tr>
			{/section}{else}<tr><td colspan="15" style="text-align:center">{$core->get_Lang('nodata')}</td></tr>{/if}
			</tbody>
		</table>
		<div class="statistical mt5">
            <table width="100%" border="0" cellpadding="3" cellspacing="0">
                <tr>
                    <td width="50%" align="left">{$core->get_Lang('statistical')} <strong>{$totalRecord}</strong> {$core->get_Lang('records')}/<strong>{$totalPage}</strong> {$core->get_Lang('page')}. {$core->get_Lang('youareonpagenumber')} <strong>{$currentPage}</strong></td>
					{if $totalPage gt 1}
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
<script type="text/javascript">
	var country_id="{$country_id}";
	var $recordPerPage = '{$recordPerPage}';
	var $currentPage = '{$currentPage}';
</script>
{literal}
<script type="text/javascript">
$().ready(function(){
	$('select[name=country_id]').change(function() {
		var $_this = $(this);
		makeSelectCategory($_this.val(),0,0);
		$('select[name=city_id]').html('<option value="">'+loading+'</option>');
		$.ajax({
			type: "POST",
			url: path_ajax_script+'/index.php?mod=guide&act=loadCity',
			data: {"country_id": $_this.val()},
			dataType: "html",
			success: function(html) {
				$('select[name=city_id]').html(html);
			}
		});
	});
});
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
		$.post(path_ajax_script+"/index.php?mod=tour&act=ajUpdPosSortTravelStylebyCountry", order, 
		
		function(html){
			vietiso_loading(0);
			location.href = REQUEST_URI;
		});
	}
});
</script>
{/literal}
