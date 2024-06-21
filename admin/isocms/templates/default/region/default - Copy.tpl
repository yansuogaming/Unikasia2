<div class="breadcrumb">
	<strong>{$core->get_Lang('youarehere')} : </strong>
	<a href="{$PCMS_URL}" title="{$core->get_Lang('home')}">{$core->get_Lang('home')}</a>
    <a>&raquo;</a>
    <a href="{$PCMS_URL}/index.php?mod=country" title="{$mod}">{$core->get_Lang('Country')}</a>
    <a>&raquo;</a>
    <a href="{$curl}" title="{$core->get_Lang('Region List')}">{$core->get_Lang('Region List')}</a>
	<!-- // -->
    <a href="javascript:window.history.back();" class="back fr">{$core->get_Lang('back')}</a>
</div>
<div class="container-fluid">
    <div class="page-title">
        <h2>{$core->get_Lang('Region List')} <a class="btn btn-success" href="{$PCMS_URL}/?mod={$mod}&act=edit{$pUrl}" title="{$core->get_Lang('add')}"> <i class="icon-plus icon-white"></i></a></h2>
        <p>{$core->get_Lang('Chức năng này nhằm tạo tập trung các vùng miền trên toàn hệ thống, phục vụ cho các cities/places/province lựa chọn')}</p>
		<p>{$core->get_Lang('This function is intended to manage the region of city system related and using')}</p>
    </div>
    <div class="clearfix"><br /></div>
    <form id="forums" method="post" action="" class="filterForm">
		<div class="filterbox" style="width:100%">
			<div class="wrap">
				<div class="searchbox full_width_767">
					{if $clsConfiguration->getValue('SiteModActive_continent') && $clsISO->getCheckActiveModulePackage($package_id,'continent','default','default')}
					<select class="slb" onchange="_reload()" name="continent_id" style="width:160px !important;">
						{$clsContinent->makeSelectboxOption($continent_id)}
					</select>
					{/if}
					{if $clsISO->getCheckActiveModulePackage($package_id,'country','default','default')}
					<select class="slb mb10_767" onchange="_reload()" name="country_id" style="width:235px !important;">
						{$clsCountry->makeSelectboxOption($country_id,$continent_id)}
					</select>
					{/if}
					<input type="text" class="text" style="width:200px !important" name="keyword" value="{$keyword}" placeholder="{$core->get_Lang('search')}..." />
					<a class="btn btn-success" href="javascript:void();" id="searchbtn" style=" padding:5px">
						<i class="icon-search icon-white"></i>
					</a>
				</div>
				<div class="fr group_buttons full_width_767 text_right mt10_767">
					<a href="{$PCMS_URL}/?mod={$mod}{$pUrl}" class="btn btn-warning" style="color:#fff"> <i class="icon-folder-open icon-white"></i> <span>{$core->get_Lang('all')} ({$number_all})</span> </a>
					<a href="{$PCMS_URL}/?mod={$mod}{$pUrl}&type_list=Trash" class="btn btn-danger" style="color:#fff"> <i class="icon-warning-sign icon-white"></i> <span>{$core->get_Lang('trash')} ({$number_trash})</span> </a>
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
					<a href="javascript:void(0)" class="btn btn-danger btn-delete-all" clsTable="Region" style="display:none"> 
						<i class="icon-remove icon-white"></i><span>{$core->get_Lang('Delete Options')}</span> 
					</a>
				</td>
			</tr>
		</table>
	</div>
    <input id="list_selected_chkitem" style="display:none" value="0" />
    <div class="clearfix"></div>
    <div class="hastable">
    	<table cellspacing="0" class="tbl-grid full-width table-striped table_responsive" id="tbl_sys_country">
			<thead>
				<tr>
					<th class="gridheader" style="width:40px"><input id="check_all" type="checkbox" /></th>
					<th class="gridheader hiden767">{$core->get_Lang('ID')}</th>
					<th class="gridheader name_responsive" style="text-align:left">{$core->get_Lang('Region name')}</th>
					{if $clsISO->getCheckActiveModulePackage($package_id,'country','default','default')}
					<th class="gridheader hiden_responsive" style="text-align:left">{$core->get_Lang('Country')}</th>
					{/if}
					<th class="gridheader hiden_responsive" style="text-align:left" width="55px">{$core->get_Lang('Status')}</th>
					<th class="gridheader hiden_responsive" width="74px">{$core->get_Lang('func')}</th>
				</tr>
			</thead>
			<tbody id="SortAble">
            {section name=i loop=$allItem}
				<tr style="cursor:move" id="order_{$allItem[i].region_id}" class="{cycle values="row1,row2"}">
					<th class="check_40"><input name="p_key[]" class="chkitem" type="checkbox" value="{$allItem[i].region_id}" /></th>
					<th class="index hiden767">{$allItem[i].region_id}</th>
					<td class="name_service">
						<a style="display:inline-block" class="sumary" href="{$PCMS_URL}/?mod={$mod}&act=edit&region_id={$core->encryptID($allItem[i].region_id)}{$pUrl}"><span style="font-size:16px;">{$clsClassTable->getTitle($allItem[i].region_id)}</span></a>
						<a style="display:inline-block" class="sumary" href="{$PCMS_URL}/?mod=city&region_id={$allItem[i].region_id}">&raquo;  {$core->get_Lang('cities')} <span class="color_r">({$clsClassTable->countNumberCityRegion($allItem[i].region_id)})</span></a>
						<button type="button" class="toggle-row inline_block767" style="display:none"><i class="fa fa-caret fa-caret-down"></i></button>
					</td>
					{if $clsISO->getCheckActiveModulePackage($package_id,'country','default','default')}
					<td data-title="{$core->get_Lang('Country')}" class="block_responsive border_top_responsive"><a title="{$clsCountry->getTitle($allItem[i].country_id)}" href="{$clsCountry->getLink($allItem[i].country_id)}">{$clsCountry->getTitle($allItem[i].country_id)}</a></td>
					{/if}
					<td data-title="{$core->get_Lang('status')}" class="block_responsive" style="text-align:center">
                        <a href="javascript:void(0);" class="SiteClickPublic" clsTable="Region" pkey="region_id" sourse_id="{$allItem[i].region_id}" rel="{$clsClassTable->getOneField('is_online',$allItem[i].region_id)}" title="{$core->get_Lang('Click to change status')}">
                            {if $clsClassTable->getOneField('is_online',$allItem[i].region_id) eq '1'}
                            <i class="fa fa-check-circle green"></i>
                            {else}
                            <i class="fa fa-minus-circle red"></i>
                            {/if}
                        </a>
                    </td>
					<td data-title="{$core->get_Lang('func')}" class="block_responsive" style="vertical-align: middle; width: 10px; text-align:left; white-space: nowrap;">
                        <div class="btn-group">
                            <button class="btn btn_dropdown dropdown-toggle" type="button" data-toggle="dropdown">
								<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
							</button>
                            <ul class="dropdown-menu" style="right:0px !important">
                            	{if $allItem[i].is_trash eq 0}
                                {if $clsISO->getCheckActiveModulePackage($package_id,'region','destination','customize')}
								<li><a title="{$core->get_Lang('view')}" target="_blank" href="{$DOMAIN_NAME}{$clsClassTable->getLink($allItem[i].region_id)}"><i class="icon-eye-open"></i> {$core->get_Lang('view')}</a></li>
								{/if}
                                <li><a title="{$core->get_Lang('edit')}" href="{$PCMS_URL}/?mod={$mod}&act=edit&region_id={$core->encryptID($allItem[i].region_id)}{$pUrl}"><i class="icon-edit"></i> {$core->get_Lang('edit')}</a></li>
                                <li><a title="{$core->get_Lang('trash')}" href="{$PCMS_URL}/?mod={$mod}&act=trash&region_id={$core->encryptID($allItem[i].region_id)}{$pUrl}"><i class="icon-trash "></i>  {$core->get_Lang('trash')}</a></li>
                                {else}
                                <li><a title="{$core->get_Lang('restore')}" href="{$PCMS_URL}/?mod={$mod}&act=restore&region_id={$core->encryptID($allItem[i].region_id)}{$pUrl}"><i class="icon-refresh"></i> {$core->get_Lang('restore')}</a></li>
                                <li><a title="{$core->get_Lang('delete')}" href="{$PCMS_URL}/?mod={$mod}&act=delete&region_id={$core->encryptID($allItem[i].region_id)}{$pUrl}"><i class="icon-remove"></i> {$core->get_Lang('delete')}</a></li>
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
{literal}
<script type="text/javascript">
$(document).on('click', '.btn-delete-all', function(ev){ 
	var $_this = $(this);
	var $listID = getCheckBoxValueByClass('chkitem');
	var $clsTable = $_this.attr('clsTable');
	if($listID==''){   
		alertify.error(confirm_delete);  
		return false;
	}
	else{   
		if(confirm(confirm_delete)){    
			vietiso_loading(1);
			$.ajax({     
				type: "POST",
				url: path_ajax_script+'/?mod='+mod+'&act=ajDeleteMultiItem',
				data: {
					"listID":$listID.join('|'),
					"clsTable":$clsTable
				},
				dataType: "html",
				success: function(html){
					window.location.reload();
				}    
			});
		}
		return false;  
	}  
	return false; 
});
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
			$.post(path_ajax_script+"/index.php?mod=region&act=ajUpdPosSortRegion", order, 
			
			function(html){
				vietiso_loading(0);
				location.href = REQUEST_URI;
			});
		}
	});
</script>
{/literal}