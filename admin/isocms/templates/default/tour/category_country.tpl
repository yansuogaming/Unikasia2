<div class="breadcrumb">
	<strong>{$core->get_Lang('youarehere')} : </strong>
	<a href="{$PCMS_URL}" title="{$core->get_Lang('home')}">{$core->get_Lang('home')}</a>
    <a>&raquo;</a>
	<a href="{$PCMS_URL}/index.php?mod=country">{$core->get_Lang('Travel Styles by Country')}</a>
	<a>&raquo;</a>
    <!-- // -->
    <a href="javascript:window.history.back();" class="back fr">{$core->get_Lang('back')}</a>
</div>
<div class="page-tour_setting page_container">
	{$core->getBlock('header_title_tour_setting')}
	<div class="container-fluid container-fluid-2 d-flex">
		{$core->getBlock('menu_tour_exhautive_setting')}
		<div class="content_setting_box">
			<div class="page-title d-flex">
				<div class="title">
					<h2>{$core->get_Lang('Travel Styles by Country list')} <div class="info_module" data-toggle="tooltip" data-placement="right" title="Chức năng quản lý danh sách các {$core->get_Lang('Travel Styles by Country list')} trong hệ thống isoCMS">i</div>
					</h2>
					<p>{$core->get_Lang('Chức năng quản lý danh sách các Travel Styles by Country phục vụ cho việc phân loại tour du lịch trong hệ thống isoCMS')}</p>
					<p>{$core->get_Lang('This function is intended to manage Travel Styles by Country in isoCMS system')}</p>
				</div>
				<div class="button_right">
					<a href="{$PCMS_URL}/index.php?mod=tour&act=edit_categorycountry" class="btn btn-main btn-addnew btnCreateToursCategory" title="{$core->get_Lang('Add')}">{$core->get_Lang('Add new')}</a>
				</div>
			</div>
			<div class="filter_box">
				<form id="forums" method="post" class="filterForm" action="">
					{*<div class="form-group form-keyword">
						<input class="form-control" type="text" name="keyword" value="{$keyword}" placeholder="{$core->get_Lang('search')}..." />
					</div>*}
					<div class="form-group form-category">
						<select onchange="_reload()" name="country_id" class="form-control">
							{$clsCountry->makeSelectboxOption($country_id)}
						</select>
					</div>
					{if $clsConfiguration->getValue('SiteHasCat_Tours') eq 1}
					<div class="form-group form-category">
						<select onchange="_reload()" name="cat_id" class="form-control">
							{$clsTourCategory->makeSelectboxOptionCountry($country_id,$cat_id)}
						</select>
					</div>
					{/if}
					<div class="form-group form-button">
						<button type="submit" class="btn btn-main" id="findtBtn">Tìm kiếm</button>
						<input type="hidden" name="filter" value="filter" />
					</div>
					<div class="form-group form-button">
						<a class="btn btn-delete-all" id="btn_delete" clsTable="Category_Country" style="display:none">
							{$core->get_Lang('Delete')}
						</a>
					</div>
				</form>	
				<div class="group_buttons fr">
					<a href="{$PCMS_URL}/?mod={$mod}&act=category" class="btn btn-success btnNew" title="{$core->get_Lang('Travel Styles list')}"><i class="icon-list icon-white"></i> <span>{$core->get_Lang('Travel Styles list')}</span> </a>
				</div>
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
									{assign var=country_id value= $clsClassTable->getOneField('country_id',$allItem[i].$pkeyTable)}
									{assign var=cat_id value= $clsClassTable->getOneField('cat_id',$allItem[i].$pkeyTable)}
									<li><a href="{$DOMAIN_NAME}{$clsTourCategory->getLinkCatCountry($cat_id,$country_id)}" target="_blank" title="{$core->get_Lang('view')}"><i class="icon-eye-open"></i> <span>{$core->get_Lang('view')}</span></a></li>
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
	</div>
</div>
<script type="text/javascript">
	var country_id="{$country_id}";
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
		$.post(path_ajax_script+"/index.php?mod=tour&act=ajUpdPosSortTravelStylebyCountry", order, 
		
		function(html){
			vietiso_loading(0);
			location.href = REQUEST_URI;
		});
	}
});
</script>
{/literal}
