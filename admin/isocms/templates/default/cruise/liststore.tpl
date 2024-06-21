<div class="page_container page-tour_setting">
	{$core->getBlock('header_title_module_setting')}
	<div class="container-fluid container-fluid-2 d-flex">
		{$core->getBlock('menu_cruise_setting')}
		<div class="content_setting_box">
			<div class="wrap">
				<div class="page_detail-title d-flex">
					<div class="title">
						<h2>{$clsClassTable->getTitle($type)} </h2>
						<p>{$core->get_Lang('systemmanagement')} {$clsClassTable->getTitle($type)}</p>
					</div>
					<div class="button_right">
						<a class="btn btn-main btn-addnew btnCreateService" href="{$PCMS_URL}/?mod={$mod}&act=listcruise{$pUrl}" title="{$core->get_Lang('add')} {$clsClassTable->getTitle($type)}">{$core->get_Lang('add')} {$clsClassTable->getTitle($type)}</a>
					</div>
				</div>
				<div class="statistical mb5">
					<div class="filter_box">
						<form id="forums" method="post" class="filterForm" action="">
							<div class="form-group form-keyword">
								<input class="form-control" type="text" name="keyword" value="{$keyword}" placeholder="{$core->get_Lang('search')}..." />
							</div>

							<div class="form-group form-country">
								<select name="cruise_cat_id" class="form-control" data-width="100%" id="slb_country">
									{$clsCruiseCat->makeSelectboxOption($cruise_cat_id,0)}
								</select>
							</div>
							<div class="form-group form-button">
								<button type="submit" class="btn btn-main" id="findtBtn">Tìm kiếm</button>
								<input type="hidden" name="filter" value="filter" />
							</div>
							<div class="form-group form-button hidden">
								<button type="button" class="btn btn-export" id="btn_export">Export</button>
							</div>
							<div class="form-group form-button">
								<a class="btn btn-delete-all" id="btn_delete" clsTable="Cruise" style="display:none">
									{$core->get_Lang('Delete')}
								</a>
							</div>
						</form>	
						<div class="record_per_page">
							<label>{$core->get_Lang('Record/page')}</label>
							{$clsISO->getRecordPerPage2($recordPerPage,$totalRecord,$mod,$pUrl)}
						</div>
					</div>
				</div>
			</div>
			
			<div class="clearfix"></div>
			<br class="clearfix" />
			<table cellspacing="0" class="tbl-grid table-striped table_responsive" width="100%">
				<thead>
					<tr>
						<th class="gridheader hiden767" style="width:4%;text-align:left; "><strong>{$core->get_Lang('index')}</strong></th>
						<th class="gridheader name_responsive full-w767" style="text-align:left"><strong>{$core->get_Lang('nameofcruises')}</strong></th>
						{if $clsConfiguration->getValue('SiteHasCruisesCategory')}
						<th class="gridheader hiden_responsive" style="text-align:left"><strong>{$core->get_Lang('cruisescategory')}</strong></th>
						{/if}
						{if $clsConfiguration->getValue('SiteHasCruisesItinerary')}
						<th class="gridheader hiden_responsive" style="text-align:left"><strong>{$core->get_Lang('itinerary')}</strong></th>
						{/if}
						<th class="gridheader hiden_responsive" style="text-align:right"><strong>{$core->get_Lang('pricefrom')}</strong></th>
						<!--<td class="gridheader" style="width:3%" colspan="4"><b>{$core->get_Lang('move')}</b></td>-->
						<th class="gridheader hiden_responsive" style="text-align:center;width:80px "><strong>{$core->get_Lang('func')}</strong></th>
					</tr>
				</thead>
				{if $allItem[0].cruise_id ne ''}
				<tbody id="SortAble">
					{section name=i loop=$allItem}
					<tr style="cursor:move" id="order_{$allItem[i].cruise_id}" class="{if $smarty.section.i.index%2 eq 0}row1{else}row2{/if}">
						<td class="index hiden767">{$smarty.section.i.index+1}</td>
						<td class="name_service title_td1">
							<strong class="title" title="{if $clsCruise->getOneField('is_online',$allItem[i].cruise_id) eq 0}Cruise này đang ở chế độ PRIVATE{/if}">{$clsCruise->getTitle($allItem[i].cruise_id)}</strong>
							{if $clsCruise->getOneField('is_online',$allItem[i].cruise_id) eq 0}<span style="color:red;" title="Cruise đang ở chế độ Private">[P]</span>{/if}
							<button type="button" class="toggle-row inline_block767" style="display:none"><i class="fa fa-caret fa-caret-down"></i></button>
						</td>
						{if $clsConfiguration->getValue('SiteHasCruisesCategory')}
						<td class="block_responsive" data-title="{$core->get_Lang('cruisescategory')}">
							<a title="{$core->get_Lang('category')}" href="javascript:void(0);">
							   <img src="{$URL_IMAGES}/v2/zoom_last.png" /> {$clsCruise->getCatName($allItem[i].cruise_id)}
							</a>
						</td>
						{/if}
						{if $clsConfiguration->getValue('SiteHasCruisesItinerary')}
						<td class="block_responsive" data-title="{$core->get_Lang('itinerary')}">
							<a title="{$core->get_Lang('allitineraries')}" href="{$PCMS_URL}/cruise/insert/{$allItem[i].cruise_id}/itinerary/itinerary">
							   <img src="{$URL_IMAGES}/v2/zoom_last.png" /> {$core->get_Lang('allitineraries')}
							</a>
						</td>
						{/if}
						<td class="block_responsive" data-title="{$core->get_Lang('pricefrom')}" style="text-align:right; white-space:nowrap">
							<strong class="format_price" style="font-size:13px">
								{$clsCruise->getPriceCruiseList($allItem[i].cruise_id,$now_month,'Valuedetail')}
							</strong>
						</td>
						{if 1 eq 2}
						   <td style="vertical-align:middle;text-align:center">
								{if !$smarty.section.i.first}<a title="{$core->get_Lang('movetop')}" href="{$PCMS_URL}/?mod={$mod}&act={$act}&action=move&direct=movetop&cruise_store_id={$allItem[i].cruise_store_id}{$pUrl}"><i class="icon-circle-arrow-up"></i></a>{/if}
							</td>
							<td style="vertical-align: middle;text-align:center">
								{if !$smarty.section.i.last}<a title="{$core->get_Lang('movebottom')}" href="{$PCMS_URL}/?mod={$mod}&act={$act}&action=move&direct=movebottom&cruise_store_id={$allItem[i].cruise_store_id}{$pUrl}"><i class="icon-circle-arrow-down"></i></a>{/if}
							</td>
							<td style="vertical-align: middle;text-align:center">
								{if !$smarty.section.i.first}
								<a title="{$core->get_Lang('moveup')}" href="{$PCMS_URL}/?mod={$mod}&act={$act}&action=move&direct=moveup&cruise_store_id={$allItem[i].cruise_store_id}{$pUrl}"><i class="icon-arrow-up"></i></a>
								{/if}
							</td>
							<td style="vertical-align: middle;text-align:center">
								{if !$smarty.section.i.last}
								<a title="{$core->get_Lang('movedown')}" href="{$PCMS_URL}/?mod={$mod}&act={$act}&action=move&direct=movedown&cruise_store_id={$allItem[i].cruise_store_id}{$pUrl}"><i class="icon-arrow-down"></i></a>
								{/if}
							</td>
						{/if}
						<td class="text-center block_responsive" style="white-space: nowrap;">
							<div class="btn-group">
								<button class="btn btn_dropdown dropdown-toggle" type="button" data-toggle="dropdown">
									<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
								</button>
								<ul class="dropdown-menu" style="right:0px !important">
									<li><a class="confirm_delete" title="{$core->get_Lang('delete')}" href="{$PCMS_URL}/?mod={$mod}&act={$act}&action=Delete&cruise_store_id={$allItem[i].cruise_store_id}{$pUrl}"><i class="icon-upload icon-white"></i> {$core->get_Lang('delete')}</a</li>
								</ul>
							</div>
						</td>
					</tr>
					{/section}
				{else}
					<tr><td colspan="15">{$core->get_Lang('nodata')}</td></tr>

				</tbody>
				{/if}
			</table>
		</div>
	</div>
</div>

<script type="text/javascript">
	var $recordPerPage = '{$recordPerPage}';
	var $currentPage = '{$currentPage}';
	var $type = '{$type}';
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
			var type = $type;
			var order = $(this).sortable("serialize")+'&update=update'+'&recordPerPage='+recordPerPage+'&currentPage='+currentPage+'&type='+type;
			$.post(path_ajax_script+"/index.php?mod="+mod+"&act=ajUpdPosSortListCruiseStore", order, 
			
			function(html){
				vietiso_loading(0);
				location.href = REQUEST_URI;
			});
		}
	});
</script>
{/literal}