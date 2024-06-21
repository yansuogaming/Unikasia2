<div class="breadcrumb">
	<strong>{$core->get_Lang('youarehere')} : </strong>
	<a href="{$PCMS_URL}" title="{$core->get_Lang('home')}">{$core->get_Lang('home')}</a>
	<a>&raquo;</a>
	<a href="javascript:void(0)">{$core->get_Lang('Travel Guide Category by Cities')}</a>
    <!-- // -->
    <a href="javascript:window.history.back();" class="back fr">{$core->get_Lang('back')}</a>
</div>
<div class="container-fluid">
    <div class="page-title">
        <h2>{$core->get_Lang('Travel Guide Category by Cities')} <a class="btn btn-success" href="{$PCMS_URL}/?mod={$mod}&act=editcompose" title="{$core->get_Lang('add')}"> <i class="icon-plus icon-white"></i></a></h2>
        <p>{$core->get_Lang('Chức năng quản lý miêu tả cho nhóm dữ liệu thuộc thành phố, điểm đến thuộc TravelGuide trong hệ thống isoCMS')}</p>
		<p>{$core->get_Lang('This function is intended to manage Travel guide category introduction')}</p>
    </div>
	<div class="clearfix"><br /></div>
    <form id="forums" method="post" class="filterForm" action="">
        <div class="fiterbox">
            <div class="wrap">
                <div class="searchbox">
					{if $clsISO->getCheckActiveModulePackage($package_id,'country','default','default')}
                	 <select  onchange="_reload();" class="slb full mb10_767" name="country_id" id="slb_Country" style="font-size:14px;width:150px">
                        {$clsCountry->makeSelectboxOption($country_id)}
                    </select>
					{/if}
					{if $clsCountry->countNumberRegion($country_id) gt '0'}
					{if $clsISO->getCheckActiveModulePackage($package_id,'country','default','default')}
					<select name="region_id" onchange="_reload();" style="width:180px;font-size:14px; padding:3px" class="slb mb10_767">
						{$clsRegion->makeSelectboxOption($country_id,$region_id)}
					</select>
					{/if}
					{/if}
					{if $clsISO->getCheckActiveModulePackage($package_id,'city','default','default')}
                    <select  onchange="_reload();" class="slb full mb10_767" name="city_id" id="slb_City" style="font-size:14px;width:150px"> 
                        {$clsCity->makeSelectboxOption($city_id,$country_id)}
                    </select>
					{/if}
                    {if $clsISO->getCheckActiveModulePackage($package_id,'guide','cat','default')}
                    <select  onchange="_reload();"  name="cat_id" class="slb full mb10_767" style="font-size:14px;width:200px">
                        {$clsGuideCat->makeSelectboxOption(0,$cat_id)}
                    </select>
                    {/if}
                    <a class="btn btn-success" href="javascript:void();" id="searchbtn" style="padding:5px">
                        <i class="icon-search icon-white"></i>
                    </a>
                </div>
                <div class="group_buttons fr mt10_767">
					 {if $clsISO->getCheckActiveModulePackage($package_id,'guide','cat','default')}
                     <a href="{$PCMS_URL}/?mod={$mod}&act=cat" class="btn btn-success" title="{$core->get_Lang('Guide Category')}"><i class="icon-list icon-white"></i> <span>{$core->get_Lang('Guide Category')}</span> </a>
						{/if}
					 <a href="javascript:void(0)" class="btn btn-danger btn-delete-all" clsTable="Guide2" style="color:#fff; display:none"> <i class="icon-remove icon-white"></i> <span>{$core->get_Lang('Delete Options')}</span> </a>
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
					{$clsISO->getRecordPerPage2($recordPerPage,$totalRecord,$mod,$pUrl,$act)}
				</td>
			</tr>
		</table>
	</div>
	<div class="hastable">
		<table cellspacing="0" class="full-width tbl-grid table_responsive">
			<thead>
				<tr>
					<th class="gridheader" style="width:40px"><input id="check_all" type="checkbox" /></th>
					<th class="gridheader hiden767" style="width:60px">{$core->get_Lang('ID')}</th>
					{if $clsISO->getCheckActiveModulePackage($package_id,'guide','cat','default')}
					<th class="gridheader name_responsive" style="text-align:left">{$core->get_Lang('Name')}</th>
					{/if}
					{if $clsISO->getCheckActiveModulePackage($package_id,'country','cat','default')}
					<th class="gridheader hiden_responsive" style="text-align:left; width:120px">{$core->get_Lang('Country')}</th>
					{/if}
					{if $clsISO->getCheckActiveModulePackage($package_id,'region','default','default')}
					<th class="gridheader hiden_responsive" style="text-align:left; width:120px">{$core->get_Lang('Region')}</th>
					{/if}
					{if $clsISO->getCheckActiveModulePackage($package_id,'city','default','default')}
					<th class="gridheader hiden_responsive" style="text-align:left; width:120px">{$core->get_Lang('City')}</th>
					{/if}
					<th class="gridheader hiden_responsive" style="width:60px">{$core->get_Lang('status')}</th>
					<th class="gridheader hiden_responsive" style="width:60px">{$core->get_Lang('func')}</th>
				</tr>
			</thead>
			{if $allItem[0].guide2_id ne ''}
			<tbody id="SortAble">
			   {section name=i loop=$allItem}
				<tr style="cursor:move" id="order_{$allItem[i].guide2_id}" class="{if $smarty.section.i.index%2 eq 0}row1{else}row2{/if}">
				<th class="check_40"><input name="p_key[]" class="chkitem" type="checkbox" value="{$allItem[i].guide2_id}" /></th>
				<th class="index hiden767">{$allItem[i].guide2_id}</th>
            	<td class="name_service">
				<span class="title" title="{if $clsClassTable->getOneField('is_online',$allItem[i].guide2_id) eq 0}{$core->get_Lang('PRIVATE')}{/if}">{$clsGuideCat->getTitle($allItem[i].cat_id)}</span>
                {if $clsClassTable->getOneField('is_online',$allItem[i].guide2_id) eq 0}<span style="color:red;" title="{$core->get_Lang('PRIVATE')}">[P]</span>{/if}
		            {if $allItem[i].is_trash eq '1'}<span class="fr" style="color:#CCC">{$core->get_Lang('intrash')}</span>{/if}
					<button type="button" class="toggle-row inline_block767" style="display:none"><i class="fa fa-caret fa-caret-down"></i></button>
                </td>
				{if $clsISO->getCheckActiveModulePackage($package_id,'country','cat','default')}
                <td data-title="{$core->get_Lang('Country')}" class="block_responsive border_top_responsive">{$clsCountry->getTitle($allItem[i].country_id)}</td>
				{/if}
					{if $clsISO->getCheckActiveModulePackage($package_id,'region','default','default')}
				<td data-title="{$core->get_Lang('Region')}" class="block_responsive">{$clsRegion->getTitle($allItem[i].region_id)}</td>
				{/if}
				{if $clsISO->getCheckActiveModulePackage($package_id,'city','default','default')}
                <td data-title="{$core->get_Lang('City')}" class="block_responsive">{$clsCity->getTitle($allItem[i].city_id)}</td>
				{/if}
                <td data-title="{$core->get_Lang('status')}" class="block_responsive" style="text-align:center;">
					<a href="javascript:void(0);" class="SiteClickPublic" clsTable="Guide2" pkey="{$pkeyTable}" sourse_id="{$allItem[i].$pkeyTable}" rel="{$clsClassTable->getOneField('is_online',$allItem[i].$pkeyTable)}" title="{$core->get_Lang('Click to change status')}">
						{if $clsClassTable->getOneField('is_online',$allItem[i].$pkeyTable) eq '1'}
						<i class="fa fa-check-circle green"></i>
						{else}
						<i class="fa fa-minus-circle red"></i>
						{/if}
					</a>
				</td>
				<td data-title="{$core->get_Lang('func')}" class="block_responsive" align="center" style="vertical-align: middle; text-align:center;white-space: nowrap;">
                    <div class="btn-group">
                        <button class="btn iso-button-standard dropdown-toggle" type="button" data-toggle="dropdown"> <i class="icon-cog"></i> <span class="caret"></span></button>
                        <ul class="dropdown-menu" style="right:0px !important">
                            {if $allItem[i].is_trash eq '0'}
                            {assign var=country_id value= $clsClassTable->getOneField('country_id',$allItem[i].$pkeyTable)}
                            {assign var=city_id value= $clsClassTable->getOneField('city_id',$allItem[i].$pkeyTable)}
                            {assign var=cat__id value= $clsClassTable->getOneField('cat_id',$allItem[i].$pkeyTable)}
                             <li><a {$allItem[i].$pkeyTable},{$country_id},{$city_id},{$cat__id} href="{$DOMAIN_NAME}{$clsClassTable->getLinkGuide($allItem[i].$pkeyTable,$country_id,$city_id,$cat__id)}" target="_blank" title="{$core->get_Lang('view')}"><i class="icon-eye-open"></i> <span>{$core->get_Lang('view')}</span></a></li>
                            <li><a title="{$core->get_Lang('edit')}" href="{$PCMS_URL}/?mod={$mod}&act=editcompose&guide2_id={$core->encryptID($allItem[i].guide2_id)}{if $parent_id}&parent_id={$allItem[i].parent_id}{/if}"><i class="icon-edit"></i> <span>{$core->get_Lang('edit')}</span></a></li>
                            <li><a title="{$core->get_Lang('trash')}" href="{$PCMS_URL}/?mod={$mod}&act=trash2&guide2_id={$core->encryptID($allItem[i].guide2_id)}"><i class="icon-trash"></i> <span>{$core->get_Lang('trash')}</span></a></li>
                            {else}
                            <li><a title="{$core->get_Lang('restore')}" href="{$PCMS_URL}/?mod={$mod}&act=restore2&guide2_id={$core->encryptID($allItem[i].guide2_id)}{$pUrl}"><i class="icon-refresh"></i> <span>{$core->get_Lang('restore')}</span></a></li>
                            <li><a title="{$core->get_Lang('delete')}" class="confirm_delete" href="{$PCMS_URL}/?mod={$mod}&act=delete2&guide2_id={$core->encryptID($allItem[i].guide2_id)}{$pUrl}"><i class="icon-remove"></i> <span>{$core->get_Lang('delete')}</span></a></li>
                            {/if}
                        </ul>
                    </div>
                </td>
			</tr>
			{/section}{else}<tr><td colspan="15" style="text-align:center">{$core->get_Lang('nodata')}</td></tr>
		</tbody>	
		{/if}
		</table>
		{$clsISO->getPaginationAdmin($totalRecord,$totalPage,$currentPage,$listPageNumber,$link_page_current,$type)}
	</div>
</div>
<script type="text/javascript">
	var country_id="{$country_id}";
	var cat_id="{$cat_id}";
</script>
{literal}
<script type="text/javascript">
$().ready(function(){
	makeSelectCategory(country_id,$('select[name=city_id]').val(),cat_id);
	$('select[name=country_id]').change(function() {
		var $_this = $(this);
		makeSelectCategory($_this.val(),0,cat_id);
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
function makeSelectCategory($country_id, $city_id, $cat_id){
	$('select[name=cat_id]').html('<option value="0">'+loading+'</option>');
	var $_adata = {
		'country_id': $country_id,
		'city_id': $city_id,
		'cat_id': $cat_id
	};
	$.ajax({
		type: 'POST',
		url: path_ajax_script+'/index.php?mod=guide&act=ajLoadSelectCategory',
		data :$_adata,
		dataType:'html',
		success: function(html){
			$('select[name=cat_id]').html(html);
		} 
	});
}

</script>
{/literal}

<script type="text/javascript">
	var $recordPerPage = '{$recordPerPage}';
	var $currentPage = '{$currentPage}';
</script>
<script type="text/javascript" src="{$URL_THEMES}/tour/jquery.tour.js?v={$upd_version}"></script>
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
			$.post(path_ajax_script+"/index.php?mod=guide&act=ajUpdPosSortGuideNotitle", order, 
			
			function(html){
				vietiso_loading(0);
				location.href = REQUEST_URI;
			});
		}
	});
</script>
{/literal}