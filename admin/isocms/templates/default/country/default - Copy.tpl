<div class="breadcrumb">
	<strong>{$core->get_Lang('youarehere')} : </strong>
	<a href="{$PCMS_URL}" title="{$core->get_Lang('home')}">{$core->get_Lang('home')}</a>
    {if $clsConfiguration->getValue('SiteModActive_continent')}
    <a>&raquo;</a>
    <a href="{$PCMS_URL}/?mod={$mod}&continent_id={$continent_id}" title="{$mod}">{$clsContinent->getTitle($continent_id)}</a>
    {/if}
    <a>&raquo;</a>
    <a href="javascript:void(0)" title="{$mod}">{$core->get_Lang('Countries List')}</a>
    <!-- // -->
    <a href="javascript:window.history.back();" class="back fr">{$core->get_Lang('back')}</a>
</div>
<div class="clearfix"></div>
{if $msg eq 'DeleteFailed'}
<div style="padding:15px; padding-top:0;">
	<div style="padding:10px; background:red; color:#fff; font-size:14px; text-align:center; "><img src="{$URL_IMAGES}/warning-20.png" title="" align="absmiddle" />
<strong>{$core->get_Lang('Warning')}:</strong> {$core->get_Lang('exitscityofcountry')}
</div>
</div>
<div class="clearfix"></div>
{/if}
<div class="container-fluid">
    <div class="page-title">
        <h2>{$core->get_Lang('Countries List')} <a class="btn btn-success" href="{$PCMS_URL}/?mod={$mod}&act=edit" title="{$core->get_Lang('add')}"> <i class="icon-plus icon-white"></i></a></h2>
		<p>{$core->get_Lang('Chức năng này nhằm tạo tập trung các Quốc gia trên toàn hệ thống, phục vụ cho các region/cities/places/province lựa chọn')}</p>
		<p>{$core->get_Lang('This function is intended to manage the region/cities/province/places of system related and using')}</p>
    </div>
	<div class="clearfix"></div>
    <div class="wrap">
        <form id="forums" method="post" action="" name="filter" class="filterForm">
           <div class="filterbox">
                <div class="wrap">
                    <div class="searchbox full_width_767">
                        <input type="text" class="text" name="keyword" value="{$keyword}" placeholder="{$core->get_Lang('search')}" style="width:200px !important" />
                        <a class="btn btn-success" href="javascript:void();" id="searchbtn" style=" padding:5px">
                            <i class="icon-search icon-white"></i>
                        </a>
                    </div>
                    <div class="fr group_buttons full_width_767 text_right mt10_767">
                        <a href="{$PCMS_URL}/?mod={$mod}{$pUrl}" class="btn btn-warning"> <i class="icon-folder-open icon-white"></i> <span>{$core->get_Lang('all')} ({$number_all})</span> </a>
                        <a href="{$PCMS_URL}/?mod={$mod}{$pUrl}&type_list=Trash" class="btn btn-danger"> <i class="icon-warning-sign icon-white"></i> <span>{$core->get_Lang('trash')} ({$number_trash})</span> </a>
                        <a href="javascript:void(0)" class="btn btn-danger btn-delete-all" clsTable="Country" style="color:#fff; display:none"> <i class="icon-remove icon-white"></i> <span>{$core->get_Lang('Delete Options')}</span> </a>
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
						{$clsISO->getRecordPerPage($recordPerPage,$totalRecord,$mod,'','')}
					</td>
				</tr>
			</table>
		</div>
        <input id="list_selected_chkitem" style="display:none" value="0" />
        <table cellspacing="0" class="tbl-grid table-striped table_responsive" width="100%">
			<thead>
				<tr>
					<th class="gridheader" style="width:40px"><input id="check_all" type="checkbox" /></th>
					<th class="gridheader hiden767" style="text-align:center">{$core->get_Lang('ID')}</th>
					<th class="gridheader name_responsive" style="text-align:left">{$core->get_Lang('Countries name')}</th>
					{if $core->checkAccess('region') && $clsISO->getCheckActiveModulePackage($package_id,'region','default','default')}
					<th class="gridheader text-center hiden_responsive" width="120px">{$core->get_Lang('Region')}</th>
					{/if}
					{if $core->checkAccess('city') && $clsISO->getCheckActiveModulePackage($package_id,'city','default','default')}
					<th class="gridheader text-center hiden_responsive" width="120px">{$core->get_Lang('Cities')}</th>
					{/if}
					<th class="gridheader hiden_responsive" style="width:80px">{$core->get_Lang('status')}</th>
					<th class="gridheader hiden_responsive" style="width:70px">{$core->get_Lang('func')}</th>
				</tr>
			</thead>
            <tbody id="tbl_sys_country">
                {section name=i loop=$allItem}
                <tr style="cursor:move" id="order_{$allItem[i].country_id}" class="{if $smarty.section.i.index%2 eq 0}row1{else}row2{/if}">
					<th class="check_40"><input name="p_key[]" class="chkitem" type="checkbox" value="{$allItem[i].country_id}" /></th>
                    <th class="index hiden767">{$allItem[i].country_id}</th>
                    <td class="name_service">
                        <span class="title mr10">{if $clsClassTable->getOneField('is_online',$allItem[i].country_id) eq 0}<span style="color:#F90">[PRIVATE]</span>{/if} <span style="font-size:18px">{$clsClassTable->getTitle($allItem[i].country_id)}</span></span>
                        {if $clsConfiguration->getValue('SiteHasCountry_slide')}
                        <a href="{$PCMS_URL}/index.php?mod=slide&mod_page={$mod}&clsTable=Country&act_page={$act}&target_id={$allItem[i].$pkeyTable}" title="{$core->get_Lang('listslide')}">
                            <i class="fa fa-folder-open"></i>  {$core->get_Lang('listslide')} <strong style="color:#c00000;">({$clsISO->countTotalSlide($mod,$act,$allItem[i].$pkeyTable)})</strong>
                        </a>
                        {/if}
                        {if $allItem[i].is_trash eq '1'}<span class="fr" style="color:#CCC">{$core->get_Lang('intrash')}</span>{/if}
						<button type="button" class="toggle-row inline_block767" style="display:none"><i class="fa fa-caret fa-caret-down"></i></button>
                    </td>
                    {if $core->checkAccess('region') && $clsISO->getCheckActiveModulePackage($package_id,'region','default','default')}
                    <td data-title="{$core->get_Lang('region')}" class="text-center block_responsive border_top_responsive">
                    	<a href="{$PCMS_URL}/index.php?mod=region&country_id={$allItem[i].country_id}{$pUrl}">
                        	{$clsClassTable->countNumberRegion($allItem[i].country_id)}
                        </a>
                    </td>
                    {/if}
                    {if $core->checkAccess('city') && $clsISO->getCheckActiveModulePackage($package_id,'city','default','default')}
                    <td data-title="{$core->get_Lang('Cities')}" class="text-center block_responsive">
                    	<a href="{$PCMS_URL}/index.php?mod=city&country_id={$allItem[i].country_id}{$pUrl}">
                        	{$clsClassTable->countNumberCity($allItem[i].country_id)}
                        </a>
                    </td>
                    {/if}
                    <td data-title="{$core->get_Lang('status')}" class="block_responsive" style="text-align:center">
                        <a href="javascript:void(0);" class="SiteClickPublic" clsTable="Country" pkey="country_id" sourse_id="{$allItem[i].country_id}" rel="{$clsClassTable->getOneField('is_online',$allItem[i].country_id)}" title="{$core->get_Lang('Click to change status')}">
                            {if $clsClassTable->getOneField('is_online',$allItem[i].country_id) eq '1'}
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
                            	{if $allItem[i].is_trash eq '0'}
                                <li><a title="{$core->get_Lang('view')}" target="_blank" href="{$DOMAIN_NAME}{$clsClassTable->getLink($allItem[i].country_id)}"><i class="icon-eye-open"></i> {$core->get_Lang('view')}</a></li>
                                <li><a title="{$core->get_Lang('edit')}" href="{$PCMS_URL}/?mod={$mod}&act=edit&country_id={$core->encryptID($allItem[i].country_id)}{$pUrl}"><i class="icon-edit"></i> {$core->get_Lang('edit')}</a></li>
                                <li><a title="{$core->get_Lang('trash')}" href="{$PCMS_URL}/?mod={$mod}&act=trash&country_id={$core->encryptID($allItem[i].country_id)}{$pUrl}"><i class="icon-trash "></i>  {$core->get_Lang('trash')}</a></li>
                                {else}
                                <li><a title="{$core->get_Lang('restore')}" href="{$PCMS_URL}/?mod={$mod}&act=restore&country_id={$core->encryptID($allItem[i].country_id)}{$pUrl}"><i class="icon-refresh"></i> {$core->get_Lang('restore')}</a></li>
                                <li><a title="{$core->get_Lang('delete')}" href="{$PCMS_URL}/?mod={$mod}&act=delete&country_id={$core->encryptID($allItem[i].country_id)}{$pUrl}"><i class="icon-remove"></i> {$core->get_Lang('delete')}</a></li>
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
	$("#tbl_sys_country").sortable({
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
			$.post(path_ajax_script+"/index.php?mod=country&act=ajUpdPosSortCountry", order, 
			
			function(html){
				vietiso_loading(0);
				location.href = REQUEST_URI;
			});
		}
	});
</script>
{/literal}