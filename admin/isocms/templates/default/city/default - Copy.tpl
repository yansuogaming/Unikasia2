<div class="breadcrumb">
	<strong>{$core->get_Lang('youarehere')} : </strong>
	<a href="{$PCMS_URL}" title="{$core->get_Lang('home')}">{$core->get_Lang('home')}</a>
	<a>&raquo;</a>
	{if $clsCountryEx->getTitle($country_id) ne ''}
    <a href="{$PCMS_URL}/index.php?mod=country">{$core->get_Lang('country')}</a>
	<a>&raquo;</a>
    <a>{$clsCountryEx->getTitle($country_id)}</a>
	{else}
	<a href="{$PCMS_URL}/index.php?mod=city">{$core->get_Lang('city')}</a>
	{/if}
    <!-- Back-->
    <a href="javascript:window.history.back();" class="back fr">{$core->get_Lang('back')}</a>
</div>
<div class="container-fluid">
    <div class="page-title">
        <h2>{$core->get_Lang('City List')} <a class="btn btn-success" href="{$PCMS_URL}/?mod={$mod}&act=edit{$pUrl}" title="{$core->get_Lang('add')}"> <i class="icon-plus icon-white"></i></a></h2>
        <p>{$core->get_Lang('Chức năng này nhằm quản lý các cities/places/province, điểm du lịch mà hệ thống dịch vụ sẽ sử dụng đến với mục tiêu lọc dữ liệu theo thành phố trên toàn hệ thống một cách nhanh chóng')}</p>
		<p>{$core->get_Lang('This function is intended to manage the "cities/province/places to go" that all of data in system related and using')}</p>
    </div>
    <div class="clearfix"><br /></div>
    <form id="forums" method="post" action="" class="filterForm">
        <div class="ui-action">
        	<div class="fl fiterbox" style="width:100%">
                <div class="wrap">
                    <div class="searchbox">
                    	{if $lstContinent && $clsISO->getCheckActiveModulePackage($package_id,'continent','default','default') and $core->checkAccess('continent')}
                    	<select name="continent_id" onchange="_reload();" style="width:120px;font-size:14px; padding:3px" class="slb">
                        	<option value="">-- {$core->get_Lang('Select Continent')} --</option>
                        	{section name=i loop=$lstContinent}
                            <option {if $continent_id eq $lstContinent[i].continent_id}selected="selected"{/if} value="{$lstContinent[i].continent_id}">{$clsContinent->getTitle($lstContinent[i].continent_id)}</option>
                            {/section}
                        </select>
                        {/if}
                        {if $lstCountryEx && $clsISO->getCheckActiveModulePackage($package_id,'country','default','default') and $core->checkAccess('country')}
                    	<select name="country_id" onchange="_reload();" style="width:200px !important;font-size:14px; padding:3px" class="slb">
                        	<option value="">-- {$core->get_Lang('Select Country')} --</option>
                            {section name=i loop=$lstCountryEx}
                            <option {if $country_id eq $lstCountryEx[i].country_id}selected="selected"{/if} value="{$lstCountryEx[i].country_id}">{$clsCountryEx->getTitle($lstCountryEx[i].country_id)}</option>
                            {/section}
                        </select>
                        {/if}
						{if $clsCountryEx->countNumberRegion($country_id) gt 0 && $clsISO->getCheckActiveModulePackage($package_id,'region','default','default') }
						<select name="region_id" onchange="_reload();" style="width:200px !important;font-size:14px; padding:3px" class="slb">
                        	<option value="">-- {$core->get_Lang('Select Region')} --</option>
                            {section name=i loop=$lstRegion}
                            <option {if $region_id eq $lstRegion[i].region_id}selected="selected"{/if} value="{$lstRegion[i].region_id}">{$clsRegion->getTitle($lstRegion[i].region_id)}</option>
                            {/section}
                        </select>
						{/if}
                        <input type="text" class="m-wrap medium" style="width:163px !important" name="keyword" value="{$keyword}" placeholder="{$core->get_Lang('search')}" />
                        <a class="btn btn-success fileinput-button" href="javascript:void();" id="searchbtn" style=" padding:5px; vertical-align:bottom">
                            <i class="icon-search icon-white"></i>
                        </a>
                    </div>
                    <div class="fr group_buttons full_width_767 text_right mt10_767">
                        <a href="{$PCMS_URL}/?mod={$mod}{$pUrl}" class="btn btn-warning fileinput-button">
                            <i class="icon-folder-open icon-white"></i> <span>{$core->get_Lang('all')} ({$number_all})</span> 
                        </a>
                        <a href="{$PCMS_URL}/{$link_page_current_2}&type_list=Trash" class="btn btn-danger fileinput-button">
                            <i class="icon-warning-sign icon-white"></i> <span>{$core->get_Lang('trash')} ({$number_trash})</span> 
                        </a>
                        <a href="javascript:void(0)" class="btn btn-danger btn-delete-all" clsTable="City" style="color:#fff; display:none"> <i class="icon-remove icon-white"></i> <span>{$core->get_Lang('Delete Options')}</span> </a>
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" name="filter" value="filter" />
    </form>
	<div class="statistical mb5">
		<table width="100%" border="0" cellpadding="3" cellspacing="0">
			<tr>
				<td width="50%" align="left">&nbsp;</td>
				<td width="50%" align="right">
					{$core->get_Lang('Record/page')}:
					{$clsISO->getRecordPerPage2($recordPerPage,$totalRecord,$mod,$pUrl)}
				</td>
			</tr>
		</table>
	</div>
    <input id="list_selected_chkitem" style="display:none" value="0" />
    <div class="hastable">
    	<table cellspacing="0" class="full-width tbl-grid table-striped table_responsive" id="tbl_sys_country">
			<thead>
				<tr>
					<th class="gridheader" style="width:40px"><input id="check_all" type="checkbox" /></th>
					<th class="gridheader hiden767">{$core->get_Lang('ID')}</th>
					<th class="gridheader name_responsive" style="text-align:left;">{$core->get_Lang('City name')}</th>
					{if $clsISO->getCheckActiveModulePackage($package_id,'region','default','default')}
					<th class="gridheader hiden_responsive" style="text-align:left;">{$core->get_Lang('Region')}</th>
					{/if}
					<th class="gridheader hiden_responsive" style="width:6%;">{$core->get_Lang('status')}</th>
					<th class="gridheader hiden_responsive">{$core->get_Lang('func')}</th>
				</tr>
			</thead>
			<tbody id="SortAble">
				{section name=i loop=$allItem}
				<tr style="cursor:move" id="order_{$allItem[i].city_id}" class="{if $smarty.section.i.index%2 eq 0}row1{else}row2{/if}">
					<th class="check_40"><input name="p_key[]" class="chkitem" type="checkbox" value="{$allItem[i].city_id}" /></th>
					<th class="index hiden767">{$allItem[i].city_id} </th>
					<td class="name_service">
						<span class="title mr10">{if $clsClassTable->getOneField('is_online',$allItem[i].city_id) eq 0}<span style="color:#F90">[PRIVATE]</span>{/if} <span style="font-size:16px">{$clsClassTable->getTitle($allItem[i].city_id)}</span></span>
						{if $clsConfiguration->getValue('SiteHasChild_slide')}
						<a href="{$PCMS_URL}/index.php?mod=slide&mod_page={$mod}&act_page={$act}&target_id={$allItem[i].$pkeyTable}" title="{$core->get_Lang('listslide')}">
							<i class="fa fa-folder-open"></i>  {$core->get_Lang('listslide')} <strong style="color:#c00000;">({$clsISO->countTotalSlide($mod,$act,$allItem[i].$pkeyTable)})</strong>
						</a>
						{/if}
						{if $allItem[i].is_trash eq '1'}<span class="fr" style="color:#CCC">{$core->get_Lang('intrash')}</span>{/if}
						<button type="button" class="toggle-row inline_block767" style="display:none"><i class="fa fa-caret fa-caret-down"></i></button>
					</td>
					{if $clsISO->getCheckActiveModulePackage($package_id,'region','default','default')}
					<td data-title="{$core->get_Lang('Region')}" class="block_responsive">{$clsRegion->getTitle($allItem[i].region_id)} </td>
					{/if}
					<td data-title="{$core->get_Lang('status')}" class="block_responsive" style="text-align:center">
						<a href="javascript:void(0);" class="SiteClickPublic" clsTable="City" pkey="city_id" sourse_id="{$allItem[i].city_id}" rel="{$clsClassTable->getOneField('is_online',$allItem[i].city_id)}" title="{$core->get_Lang('Click to change status')}">
							{if $clsClassTable->getOneField('is_online',$allItem[i].city_id) eq '1'}
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
								<li><a href="{$DOMAIN_NAME}{$clsClassTable->getLink($allItem[i].city_id)}" target="_blank" title="{$core->get_Lang('view')}"><i class="icon-eye-open"></i> <span>{$core->get_Lang('view')}</span></a></li>
								<li><a title="{$core->get_Lang('edit')}" href="{$PCMS_URL}/?mod={$mod}&act=edit&city_id={$core->encryptID($allItem[i].city_id)}"><i class="icon-edit"></i> <span>{$core->get_Lang('edit')}</span></a></li>
								<li><a title="{$core->get_Lang('trash')}" href="{$PCMS_URL}/?mod={$mod}&act=trash&city_id={$core->encryptID($allItem[i].city_id)}{$pUrl}&page={$currentPage}"><i class="icon-trash"></i> <span>{$core->get_Lang('trash')}</span></a></li>
								{else}
								<li><a title="{$core->get_Lang('restore')}" href="{$PCMS_URL}/?mod={$mod}&act=restore&city_id={$core->encryptID($allItem[i].city_id)}{$pUrl}&page={$currentPage}"><i class="icon-refresh"></i> <span>{$core->get_Lang('restore')}</span></a></li>
								<li><a title="{$core->get_Lang('delete')}" class="confirm_delete" href="{$PCMS_URL}/?mod={$mod}&act=delete&city_id={$core->encryptID($allItem[i].city_id)}{$pUrl}&page={$currentPage}"><i class="icon-remove"></i> <span>{$core->get_Lang('Delete')}</span></a></li>  
								{/if}
							</ul>
						</div>
					</td>
				</tr>	
				{/section}
			</tbody>
        </table>
		<div class="clearfix"></div>
		{$clsISO->getPaginationAdmin($totalRecord,$totalPage,$currentPage,$listPageNumber,$link_page_current,$type)}
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
			$.post(path_ajax_script+"/index.php?mod=city&act=ajUpdPosSortCity", order, 
			
			function(html){
				vietiso_loading(0);
				location.href = REQUEST_URI;
			});
		}
	});
</script>
{/literal}