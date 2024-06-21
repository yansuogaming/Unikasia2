<div class="breadcrumb">
	<strong>{$core->get_Lang('youarehere')} : </strong>
    <a href="{$PCMS_URL}" title="{$core->get_Lang('home')}">{$core->get_Lang('home')}</a>
    <a>&raquo;</a>
    <a href="{$PCMS_URL}/index.php?mod={$mod}">{$core->get_Lang('cruise')}</a>
    <a href="javascript:window.history.back();" class="back fr">{$core->get_Lang('back')}</a>
</div>
<div class="container-fluid">
    <div class="page-title">	
        <h2>{$core->get_Lang('cruise')} <a class="btn btn-success createNewCruise" href="javascript:void();" title="{$core->get_Lang('add')}"> <i class="icon-plus icon-white"></i></a></h2>
        <p>Chức năng quản lý danh sách các cruise trong hệ thống isoCMS</p>
		<p>{$core->get_Lang('This function is intended to manage cruise in isoCMS system')}</p>
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
							{if $clsISO->getCheckActiveModulePackage($package_id,$mod,'cat','default')}
							<td class="fieldlabel">{$core->get_Lang('category')}</td>
							<td class="fieldarea" cruise_cat_id="{$cruise_cat_id}">
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
	<div class="clearfix"></div>
	<div class="statistical mb5">
		<table width="100%" border="0" cellpadding="3" cellspacing="0">
			<tr>
				<td width="50%" align="left">&nbsp;</td>
				<td width="50%" align="right">
					{$core->get_Lang('Record/page')}:
					{$clsISO->getRecordPerPage2($recordPerPage,$totalRecord,$mod,$pUrl)}
					<a class="btn btn-danger btn-delete-all" clsTable="Cruise" style="display:none">
                        <i class="icon-remove icon-white"></i> <span>{$core->get_Lang('Delete Options')}</span>
                    </a>
				</td>
			</tr>
		</table>
	</div>
	<table cellspacing="0" class="full-width tbl-grid table-striped table_responsive">
		<thead>
			<tr>
				<th class="gridheader" style="width:40px"><input id="check_all" type="checkbox" /></th>
				<th class="gridheader hiden767"><strong>{$core->get_Lang('ID')}</strong></th>
				<th class="gridheader name_responsive" style="text-align:left"><strong>{$core->get_Lang('Cruise Name')}</strong></th>
				{if $clsISO->getCheckActiveModulePackage($package_id,$mod,'cat','default')}
				<th class="gridheader hiden_responsive" style="text-align:left"><strong>{$core->get_Lang('cruisescategory')}</strong></th>
				{/if}
				<th class="gridheader hiden_responsive"><strong>{$core->get_Lang('status')}</strong></th>
				<th class="gridheader hiden_responsive" style="text-align:center;"><strong>{$core->get_Lang('func')}</strong></th>
			</tr>
		</thead>
        {if $allItem[0].cruise_id ne ''}
		<tbody  id="SortCruise">
		{section name=i loop=$allItem}
		<tr style="cursor:move" id="order_{$allItem[i].cruise_id}" class="{cycle values="row1,row2"}">
			<th class="check_40"><input name="p_key[]" class="chkitem" type="checkbox" value="{$allItem[i].cruise_id}" /></th>
			<th class="index hiden767">{$allItem[i].cruise_id}</th>
			<td class="name_service">
            	<strong class="title" title="{if $clsClassTable->getOneField('is_online',$allItem[i].cruise_id) eq 0}{$core->get_Lang('Cruise PRIVATE')}{/if}">{$clsClassTable->getTitle($allItem[i].cruise_id)}</strong>
                {if $clsClassTable->getOneField('is_online',$allItem[i].cruise_id) eq 0}<span style="color:red;" title="{$core->get_Lang('Cruise PRIVATE')}">[P]</span>{/if}
                {if $allItem[i].is_trash eq '1'}<span class="fr" style="color:#CCC">{$core->get_Lang('intrash')}</span>{/if}
				<button type="button" class="toggle-row inline_block767" style="display:none"><i class="fa fa-caret fa-caret-down"></i></button>
			</td>
            {if $clsISO->getCheckActiveModulePackage($package_id,$mod,'cat','default')}
			<td class="block_responsive border_top_responsive" data-title="{$core->get_Lang('cruisescategory')}">
				<a title="{$core->get_Lang('allcategory')}" href="{$PCMS_URL}/?mod=cruise&cruise_cat_id={$allItem[i].cruise_cat_id}">
				   <img align="absmiddle" src="{$URL_IMAGES}/v2/zoom_last.png" /> {$clsCruiseCat->getTitle($allItem[i].cruise_cat_id)}
				</a>
			</td>
            {/if}
            <td class="block_responsive" style="text-align:center" data-title="{$core->get_Lang('status')}">
                <a href="javascript:void(0);" class="SiteClickPublic" clsTable="Cruise" pkey="cruise_id" sourse_id="{$allItem[i].cruise_id}" rel="{$clsClassTable->getOneField('is_online',$allItem[i].cruise_id)}" title="{$core->get_Lang('Click to change status')}">
                    {if $clsClassTable->getOneField('is_online',$allItem[i].cruise_id) eq '1'}
                    <i class="fa fa-check-circle green"></i>
                    {else}
                    <i class="fa fa-minus-circle red"></i>
                    {/if}
                </a>
            </td>
			<td class="block_responsive" align="center" style="vertical-align: middle; text-align:center; width: 40px; white-space: nowrap;" data-title="{$core->get_Lang('func')}">
                <div class="btn-group">
                    <button class="btn btn_dropdown dropdown-toggle" type="button" data-toggle="dropdown">
						<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
					</button>
                    <ul class="dropdown-menu" style="right:0px !important">
                        {if $allItem[i].is_trash eq '0'}
                        <li><a href="{$DOMAIN_NAME}{$clsClassTable->getLink($allItem[i].cruise_id)}" target="_blank" title="{$core->get_Lang('view')}"><i class="icon-eye-open"></i> <span>{$core->get_Lang('view')}</span></a></li>
                        <li><a title="{$core->get_Lang('edit')}" href="{$PCMS_URL}/?mod={$mod}&act=edit&cruise_id={$core->encryptID($allItem[i].cruise_id)}"><i class="icon-edit"></i> <span>{$core->get_Lang('edit')}</span></a></li>
                        <li><a title="{$core->get_Lang('trash')}" href="{$PCMS_URL}/?mod={$mod}&act=trash&cruise_id={$core->encryptID($allItem[i].cruise_id)}{$pUrl}&page={$currentPage}"><i class="icon-trash"></i> <span>{$core->get_Lang('trash')}</span></a></li>
                        {else}
                        <li><a title="{$core->get_Lang('restore')}" href="{$PCMS_URL}/?mod={$mod}&act=restore&cruise_id={$core->encryptID($allItem[i].cruise_id)}{$pUrl}&page={$currentPage}"><i class="icon-refresh"></i> <span>{$core->get_Lang('restore')}</span></a></li>
                        <li><a title="{$core->get_Lang('delete')}" class="confirm_delete" href="{$PCMS_URL}/?mod={$mod}&act=delete&cruise_id={$core->encryptID($allItem[i].cruise_id)}{$pUrl}&page={$currentPage}"><i class="icon-remove"></i> <span>{$core->get_Lang('delete')}</span></a></li> 
                        {/if}
                    </ul>
                </div>
            </td>
		</tr>
		{/section}
		</tbody>
        {else}<tr><td colspan="15">{$core->get_Lang('nodata')}</td></tr>{/if}
	</table>
	<div class="clearfix"></div>
	{$clsISO->getPaginationAdmin($totalRecord,$totalPage,$currentPage,$listPageNumber,$link_page_current,$type)}
</div>
<script type="text/javascript">var $cruise_cat_id = '{$cruise_cat_id}';var $recordPerPage = '{$recordPerPage}';var $currentPage = '{$currentPage}';</script>
<script type="text/javascript" src="{$URL_THEMES}/cruise/jquery.cruise.js"></script>

{literal}
<script type="text/javascript">
			$("#SortCruise").sortable({
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
					$.post(path_ajax_script+"/index.php?mod=cruise&act=ajUpdPosSortCruise", order, 
					
					function(html){
						vietiso_loading(0);
						location.href = REQUEST_URI;
					});
				}
			});
		</script>
{/literal}