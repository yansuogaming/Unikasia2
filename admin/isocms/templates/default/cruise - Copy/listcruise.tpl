<div class="breadcrumb">
	<strong>{$core->get_Lang('youarehere')} : </strong>
	<a href="{$PCMS_URL}" title="{$core->get_Lang('home')}">{$core->get_Lang('home')}</a>
    <a>&raquo;</a>
    <a href="{$PCMS_URL}/index.php?mod={$mod}">{$core->get_Lang('cruise')}</a>
    <a>&raquo;</a>
    <a href="{$curl}">{$clsCruiseStore->getTitle($type)}</a>  
    <!-- Back-->
    <a href="javascript:window.history.back();" class="back fr">{$core->get_Lang('back')}</a>
</div>
<div class="container-fluid">
    <div class="page-title">	
        <h2>{$core->get_Lang('cruise')} <a style="vertical-align:top" title="{$core->get_Lang('add')}" href="{$PCMS_URL}/index.php?mod={$mod}&act=liststore&type={$core->encryptID($type)}" class="btn iso-corner-all btn-warning fileinput-button"> <i class="icon-chevron-left icon-white"></i> <span>{$clsCruiseStore->getTitle($type)}</span></a></h2>
        <p>{$core->get_Lang('systemmanagementcruisestore')}</p>
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
									 {$clsCruiseCat->makeSelectboxOption(0,$cruise_cat_id)}
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
    <div class="hastable">
    	<table cellspacing="0" class="tbl-grid" width="100%">
            <tr>
                <td class="gridheader" style="width:4%;text-align:left; "><strong>{$core->get_Lang('index')}</strong></td>
                <td class="gridheader" style="text-align:left"><strong>{$core->get_Lang('nameofcruises')}</strong></td>
                {if $clsConfiguration->getValue('SiteHasCruisesCategory')}
                <td class="gridheader" style="text-align:left;width:20%"><strong>{$core->get_Lang('cruisescategory')}</strong></td>
                {/if}
                <td class="gridheader" style="text-align:center; "><strong>{$core->get_Lang('func')}</strong></td>
            </tr>
            {if $allItem[0].cruise_id ne ''}
            {section name=i loop=$allItem}
            <tr class="{cycle values = "row1,row2"}">
            	<td class="index">{$smarty.section.i.index+1}</td>
                <td>
                    <strong class="title" title="{if $clsClassTable->getOneField('is_online',$allItem[i].cruise_id) eq 0}Cruise này đang ở chế độ PRIVATE{/if}">{$clsClassTable->getTitle($allItem[i].cruise_id)}</strong>
                    {if $clsClassTable->getOneField('is_online',$allItem[i].cruise_id) eq 0}<span style="color:red;" title="Cruise đang ở chế độ Private">[P]</span>{/if}
                </td>
                {if $clsConfiguration->getValue('SiteHasCruisesCategory')}
                <td>
                    <a title="{$core->get_Lang('category')}" href="javascript:void(0);">
                       <img src="{$URL_IMAGES}/v2/zoom_last.png" /> {$clsCruiseCat->getTitle($allItem[i].cruise_cat_id)}
                    </a>
                </td>
                {/if}
                <td style="vertical-align: middle; width: 40px; text-align: right; white-space: nowrap;">
                    <a class="iso-button-action" title="{$core->get_Lang('add')}" href="{$PCMS_URL}/?mod={$mod}&act={$act}&action=Add&cruise_id={$allItem[i].cruise_id}{$pUrl}"><i class="icon-plus-sign icon-white"></i> {$core->get_Lang('add')}</a>
                </td>
            </tr>
            {/section}
            {else}<tr><td colspan="6">{$core->get_Lang('No Data')}!</td></tr>{/if}
        </table>
    </div>
    <div class="statistical mt5">
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
<script type="text/javascript">
	var $cat_id = '{$cat_id}';
	var $depart_point_id= '{$depart_point_id}';
	var $city_id= '{$city_id}';
	var $tour_type_id = 0;
</script>
{literal}
<script type="text/javascript">
$().ready(function(){
	loadDepartPoint($cat_id,$tour_type_id);
	$('.btn_addselling').click(function(){
		var $_this = $(this);
		var adata = {
			'tour_id': $_this.attr('data'),
			'tp': 'ADD'
		};
		vietiso_loading(1);
		$.ajax({
			type: "POST",
			url:path_ajax_script+'/index.php?mod=show&act=ajaxUpdateTourSelling',
			data: adata,
			dataType: "html",
			success: function(html){
				window.location.reload(true);
			}
		});
	});
});
function loadDepartPoint($cat_id,$tour_type_id){
	var cat_id=$('select[name=cat_id]').val();
	$('select[name=depart_point_id]').html('<option value="">'+loading+'</option>');
	$.ajax({
		type: "POST",
		url: path_ajax_script+'/?mod='+mod+'&act=ajLoadDepartPoint',
		data: {
			"cat_id"	: $cat_id, 
			'depart_point_id': $depart_point_id,
			'tour_type_id': $tour_type_id
		},
		dataType: "html",
		success: function(html){
			$('select[name=depart_point_id]').html(html);
		}
	});
}
</script>
{/literal}
<br />
