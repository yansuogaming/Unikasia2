<div class="breadcrumb">
	<strong>{$core->get_Lang('youarehere')} : </strong>
	<a href="{$PCMS_URL}" title="{$core->get_Lang('home')}">{$core->get_Lang('home')}</a>
    <a>&raquo;</a>
    <a href="{$PCMS_URL}/index.php?mod={$mod}">{$core->get_Lang('cruise')}</a>
    <a>&raquo;</a>
    <a href="{$curl}">{$clsClassTable->getTitle($type)}</a>
    <!-- Back -->
    <a href="javascript:window.history.back();" class="back fr">{$core->get_Lang('back')}</a>
</div>
<div class="container-fluid">
	<div class="wrap">
        <div class="page-title fl" style="width:60%">
            <h2>{$clsClassTable->getTitle($type)} <a style="vertical-align:top; margin-left:10px" class="btn btn-success iso-corner-all fileinput-button" title="{$core->get_Lang('add')}" href="{$PCMS_URL}/?mod={$mod}&act=listcruise{$pUrl}" > <i class="icon-plus icon-white"></i> <span>{$core->get_Lang('add')} {$clsClassTable->getTitle($type)}</span></a></h2>
            <p>{$core->get_Lang('systemmanagement')} {$clsClassTable->getTitle($type)}</p>
        </div>
    </div>
    <div id="isotabs">
		 <ul>
            <li class="tabchild"><a><i class="iso-option"></i> {$core->get_Lang('searchfilter')}</a></li>
        </ul>
	</div>
    <div id="isotabs_content">
		<div class="isotabbox">
			<form id="forums" method="post" class="filterForm" action="">
				<div class="searchbox wrap" style="float:none">
					<table class="form" cellpadding="3" cellspacing="3">
						<tr>
							{if $clsConfiguration->getValue('SiteHasCruisesCategory')}
							<td class="fieldlabel">{$core->get_Lang('pricerange')}</td>
							<td class="fieldarea">
								<select onchange="_reload()" name="cruise_cat_id" class="slb" style="width:200px;">
									 {$clsCruiseCat->makeSelectboxOption($cruise_cat_id,0)}
								</select>
							</td>
							{/if}
							<td class="fieldlabel">{$core->get_Lang('Search')}</td>
							<td class="fieldarea">
								<input style="width:190px" type="text" class="text" name="keyword" value="{$keyword}" placeholder="{$core->get_Lang('search')}" />
							</td>
						</tr>
					</table>
				</div>
				<div class="mt10"></div>
				<center>
					<div class="group_buttons">
						<a class="btn btn-success" href="javascript:void();" id="searchbtn" >
							<i class="icon-search icon-white"></i> <span>{$core->get_Lang('Search')}</span>
						</a>
						<input type="hidden" name="filter" value="filter" />
						<input id="list_selected_chkitem" style="display:none" value="0" />
					</div>
				</center>
            </form>
		</div>
	</div>
    <br class="clearfix" />
    <table cellspacing="0" class="tbl-grid table-striped table_responsive" width="100%">
        <tr>
            <td class="gridheader" style="width:4%;text-align:left; "><strong>{$core->get_Lang('index')}</strong></td>
            <td class="gridheader" style="text-align:left"><strong>{$core->get_Lang('nameofcruises')}</strong></td>
            {if $clsConfiguration->getValue('SiteHasCruisesCategory')}
            <td class="gridheader" style="text-align:left"><strong>{$core->get_Lang('cruisescategory')}</strong></td>
            {/if}
            {if $clsConfiguration->getValue('SiteHasCruisesItinerary')}
            <td class="gridheader" style="text-align:left"><strong>{$core->get_Lang('itinerary')}</strong></td>
            {/if}
            <td class="gridheader" style="text-align:right"><strong>{$core->get_Lang('pricefrom')}</strong></td>
            <!--<td class="gridheader" style="width:3%" colspan="4"><b>{$core->get_Lang('move')}</b></td>-->
            <td class="gridheader" style="text-align:center;width:3% "><strong>{$core->get_Lang('func')}</strong></td>
        </tr>
        {if $allItem[0].cruise_id ne ''}
        <tbody id="SortAble">
			{section name=i loop=$allItem}
			<tr style="cursor:move" id="order_{$allItem[i].cruise_id}" class="{if $smarty.section.i.index%2 eq 0}row1{else}row2{/if}">
				<td class="index">{$smarty.section.i.index+1}</td>
				<td>
					<strong class="title" title="{if $clsCruise->getOneField('is_online',$allItem[i].cruise_id) eq 0}Cruise này đang ở chế độ PRIVATE{/if}">{$clsCruise->getTitle($allItem[i].cruise_id)}</strong>
					{if $clsCruise->getOneField('is_online',$allItem[i].cruise_id) eq 0}<span style="color:red;" title="Cruise đang ở chế độ Private">[P]</span>{/if}
				</td>
				{if $clsConfiguration->getValue('SiteHasCruisesCategory')}
				<td>
					<a title="{$core->get_Lang('category')}" href="javascript:void(0);">
					   <img src="{$URL_IMAGES}/v2/zoom_last.png" /> {$clsCruise->getCatName($allItem[i].cruise_id)}
					</a>
				</td>
				{/if}
				{if $clsConfiguration->getValue('SiteHasCruisesItinerary')}
				<td>
					<a title="{$core->get_Lang('allitineraries')}" href="{$PCMS_URL}/?mod=cruise&act=cruise_itinerary&cruise_id={$allItem[i].cruise_id}">
					   <img src="{$URL_IMAGES}/v2/zoom_last.png" /> {$core->get_Lang('allitineraries')}
					</a>
				</td>
				{/if}
				<td style="text-align:right; white-space:nowrap">
					<strong class="format_price" style="font-size:13px">
						{$clsCruise->getPrice($allItem[i].cruise_id)} {$clsISO->getRate()}
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
				<td><a class="iso-cancel-action confirm_delete" title="{$core->get_Lang('delete')}" href="{$PCMS_URL}/?mod={$mod}&act={$act}&action=Delete&cruise_store_id={$allItem[i].cruise_store_id}{$pUrl}"><i class="icon-upload icon-white"></i> {$core->get_Lang('delete')}</a></td>
			</tr>
			{/section}
			{else}<tr><td colspan="15">{$core->get_Lang('nodata')}</td></tr>
		
		</tbody>
		{/if}
    </table>
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