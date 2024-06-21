<div class="breadcrumb">
	<strong>{$core->get_Lang('youarehere')} : </strong>
	<a href="{$PCMS_URL}" title="{$core->get_Lang('home')}">{$core->get_Lang('home')}</a>
    <a>&raquo;</a>
	<a href="{$PCMS_URL}/index.php?mod=country">{$core->get_Lang('country')}</a>
	<a>&raquo;</a>
	<a href="javascript:void(0)">{$core->get_Lang('travelguide')}</a>
    <a href="javascript:window.history.back();" class="back fr">{$core->get_Lang('back')}</a>
</div>
<div class="container-fluid">
    <div class="page-title">
        <h2>{$core->get_Lang('Travel Guide')}: {$core->get_Lang('Content list')} <a class="btn btn-success" href="{$PCMS_URL}/?mod={$mod}&act=edit" title="{$core->get_Lang('add')}"> <i class="icon-plus icon-white"></i></a></h2>
        <p>Chức năng này nhằm tạo tập trung các vùng miền trên toàn hệ thống, phục vụ cho các cities/places/province lựa chọn</p>
		<p>This function is intended to manage the region of city system related and using</p>
    </div>
	<div class="clearfix"><br /></div>
    <form id="forums" method="post" class="filterForm" action="">
        <div class="fiterbox">
            <div class="wrap">
                <div class="searchbox full_width_767">
					{if $clsISO->getCheckActiveModulePackage($package_id,'country','default','default')}
                     <select  onchange="_reload();" class="slb full mb10_767" name="country_id" id="slb_Country" style="font-size:14px;width:150px !important">
                        {$clsCountry->makeSelectboxOption($country_id)}
                    </select>
					{/if}
					{if $clsRegion->makeSelectboxOption($country_id,$region_id) && $clsISO->getCheckActiveModulePackage($package_id,'region','default','default')}
					<select onchange="_reload();" class="slb full mr5 mb10_767" id="slb_RegionID" name="region_id" style="width:150px !important;">
						{$clsRegion->makeSelectboxOption($country_id,$region_id)}
					</select>
					{/if}
                    <select onchange="_reload();" class="slb full mb10_767" name="city_id" id="slb_City" style="font-size:14px;width:150px !important"> 
                        {$clsCity->makeSelectboxOptionnew($city_id,$country_id,$region_id,$city_id)}
                    </select>
                    {if $clsISO->getCheckActiveModulePackage($package_id,'guide','cat','default')}
                    <select onchange="_reload();"  name="cat_id" class="slb full mb10_767" style="font-size:14px;width:150px !important">
                        {$clsGuideCat->makeSelectboxOptionNew(0,$cat_id,$country_id,$city_id)}
                    </select>
                    {/if}
                    <input type="text" class="slb full search_keyword" name="keyword" value="{$keyword}" placeholder="{$core->get_Lang('search')}" style="font-size:14px;width:200px" />
                    <a class="btn btn-success" href="javascript:void();" id="searchbtn" style="padding:5px">
                        <i class="icon-search icon-white"></i>
                    </a>
                </div>
				{if $clsISO->getCheckActiveModulePackage($package_id,'guide','cat','default')}
                <div class="group_buttons fr mt10_767">
                     <a href="{$PCMS_URL}/?mod={$mod}&act=cat" class="btn btn-success" title="{$core->get_Lang('Guide Category')}"><i class="icon-list icon-white"></i> <span>{$core->get_Lang('Guide Category')}</span> </a>
                </div>
				{/if}
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
					{$clsISO->getRecordPerPage2($recordPerPage,$totalRecord,$mod,$pUrl)}
					<a href="javascript:void(0)" class="btn btn-danger btn-delete-all" clsTable="Guide" style="display:none"> 
						<i class="icon-remove icon-white"></i><span>{$core->get_Lang('Delete Options')}</span> 
					</a>
				</td>
			</tr>
		</table>
	</div>
	<input id="list_selected_chkitem" style="display:none" value="0" />
	<div class="hastable">
		<table cellspacing="0" class="full-width tbl-grid table-striped table_responsive">
			<thead>
				<tr>
					<th class="gridheader" style="width:40px"><input id="check_all" type="checkbox" /></th>
					<th class="gridheader hiden767" style="width:60px">{$core->get_Lang('ID')}</th>
					<th class="gridheader name_responsive" style="text-align:left">{$core->get_Lang('Name')}</th>
					{if $clsISO->getCheckActiveModulePackage($package_id,'guide','cat','default')}
					<th class="gridheader hiden_responsive" style="text-align:left; width:200px">{$core->get_Lang('categories')}</th>
					{/if}
					{if $clsISO->getCheckActiveModulePackage($package_id,'city','default','default')}
					<th class="gridheader hiden_responsive" style="text-align:left; width:120px">{$core->get_Lang('City')}</th>
					{/if}
					{if $clsISO->getCheckActiveModulePackage($package_id,'city','default','default')}
					<th class="gridheader hiden_responsive" style="text-align:left; width:120px">{$core->get_Lang('Country')}</th>
					{/if}
					<th class="gridheader hiden_responsive" style="width:70px">{$core->get_Lang('status')}</th>
					<th class="gridheader hiden_responsive" style="width:74px">{$core->get_Lang('func')}</th>
				</tr>
			</thead>
			{if $allItem[0].guide_id ne ''}
			<tbody id="SortAble">
			   {section name=i loop=$allItem}
				<tr style="cursor:move" id="order_{$allItem[i].guide_id}" class="{if $smarty.section.i.index%2 eq 0}row1{else}row2{/if}">
				<th class="check_40"><input name="p_key[]" class="chkitem" type="checkbox" value="{$allItem[i].guide_id}" /></th>
				<th class="index hiden767">{$allItem[i].guide_id}</th>
				<td class="name_service">
				<span class="title" title="{if $clsClassTable->getOneField('is_online',$allItem[i].guide_id) eq 0}{$core->get_Lang('Guide PRIVATE')}{/if}">{$clsClassTable->getTitle($allItem[i].guide_id)}</span>
                {if $clsClassTable->getOneField('is_online',$allItem[i].guide_id) eq 0}<span style="color:red;" title="{$core->get_Lang('Guide PRIVATE')}">[P]</span>{/if}
				{if $allItem[i].is_trash eq '1'}<span class="fr" style="color:#CCC">{$core->get_Lang('intrash')}</span>{/if}
				<button type="button" class="toggle-row inline_block767" style="display:none"><i class="fa fa-caret fa-caret-down"></i></button>
                </td>
               {if $clsISO->getCheckActiveModulePackage($package_id,'guide','cat','default')}
                <td data-title="{$core->get_Lang('categories')}" class="block_responsive">
				<i class="fa fa-folder-open"></i>  <a href="{$PCMS_URL}/?mod={$mod}&cat_id={$allItem[i].cat_id}" title="{$clsGuideCat->getTitle($allItem[i].cat_id)}">{$clsGuideCat->getTitle($allItem[i].cat_id)}</a>
                </td>
				{/if}
				{if $clsISO->getCheckActiveModulePackage($package_id,'city','default','default')}
				<td data-title="{$core->get_Lang('City')}" class="block_responsive">
				{$clsCity->getTitle($allItem[i].city_id)}
                </td>
				{/if}
				{if $clsISO->getCheckActiveModulePackage($package_id,'country','default','default')}
				<td data-title="{$core->get_Lang('Country')}" class="block_responsive">
				{$clsCountry->getTitle($allItem[i].country_id)}
                </td>
                {/if}
                <td data-title="{$core->get_Lang('status')}" class="block_responsive" style="text-align:center">
					<a href="javascript:void(0);" class="SiteClickPublic" clsTable="Guide" pkey="{$pkeyTable}" sourse_id="{$allItem[i].$pkeyTable}" rel="{$clsClassTable->getOneField('is_online',$allItem[i].$pkeyTable)}" title="{$core->get_Lang('Click to change status')}">
						{if $clsClassTable->getOneField('is_online',$allItem[i].$pkeyTable) eq '1'}
						<i class="fa fa-check-circle green"></i>
						{else}
						<i class="fa fa-minus-circle red"></i>
						{/if}
					</a>
				</td>
				<td data-title="{$core->get_Lang('func')}" class="block_responsive" align="center" style="vertical-align: middle; text-align:center; width: 40px; white-space: nowrap;">
                    <div class="btn-group">
                        <button class="btn btn_dropdown dropdown-toggle" type="button" data-toggle="dropdown">
							<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
						</button>
                        <ul class="dropdown-menu" style="right:0px !important">
                            {if $allItem[i].is_trash eq '0'}
                            <li><a href="{$DOMAIN_NAME}{$clsClassTable->getLink($allItem[i].guide_id)}" target="_blank" title="{$core->get_Lang('view')}"><i class="icon-eye-open"></i> <span>{$core->get_Lang('view')}</span></a></li>
                            <li><a title="{$core->get_Lang('edit')}" href="{$PCMS_URL}/?mod={$mod}&act=edit&guide_id={$core->encryptID($allItem[i].guide_id)}{if $parent_id}&parent_id={$allItem[i].parent_id}{/if}{$pUrl}"><i class="icon-edit"></i> <span>{$core->get_Lang('edit')}</span></a></li>
                            <li><a title="{$core->get_Lang('trash')}" href="{$PCMS_URL}/?mod={$mod}&act=trash&guide_id={$core->encryptID($allItem[i].guide_id)}{$pUrl}&page={$currentPage}"><i class="icon-trash"></i> <span>{$core->get_Lang('trash')}</span></a></li>
                            {else}
                            <li><a title="{$core->get_Lang('restore')}" href="{$PCMS_URL}/?mod={$mod}&act=restore&guide_id={$core->encryptID($allItem[i].guide_id)}{$pUrl}&page={$currentPage}"><i class="icon-refresh"></i> <span>{$core->get_Lang('restore')}</span></a></li>
                            <li><a title="{$core->get_Lang('delete')}" class="confirm_delete" href="{$PCMS_URL}/?mod={$mod}&act=delete&guide_id={$core->encryptID($allItem[i].guide_id)}{$pUrl}&page={$currentPage}"><i class="icon-remove"></i> <span>{$core->get_Lang('delete')}</span></a></li> 
                            {/if}
                        </ul>
                    </div>
                </td>
			</tr>
			{/section}
			{else}<tr><td colspan="15" style="text-align:center">{$core->get_Lang('nodata')}</td></tr>
			</tbody>
			{/if}
		</table>
		<div class="clearfix"></div>
		{$clsISO->getPaginationAdmin($totalRecord,$totalPage,$currentPage,$listPageNumber,$link_page_current,$type)}
	</div>
</div>
<script type="text/javascript">
	var country_id="{$country_id}";
	var cat_id = "{$cat_id}";
</script>
{literal}
<script type="text/javascript">
$().ready(function(){
		makeSelectCategory(country_id,$('select[name=city_id]').val(),cat_id);
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
function makeSelectCategory($country_id, $city_id, $cat_id){
	$('select[name=cat_id]').html('<option value="0">Loading...</option>');
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
			$.post(path_ajax_script+"/index.php?mod=guide&act=ajUpdPosSortGuide", order, 
			
			function(html){
				vietiso_loading(0);
				location.href = REQUEST_URI;
			});
		}
	});
</script>
{/literal}