<div class="breadcrumb">
	<strong>{$core->get_Lang('youarehere')} : </strong>
    <a href="{$PCMS_URL}" title="{$core->get_Lang('home')}">{$core->get_Lang('home')}</a>
    <a>&raquo;</a>
    <a href="{$PCMS_URL}/index.php?mod={$mod}" title="{$mod}">{$core->get_Lang('service')}</a>
    <!-- // -->
    <a href="javascript:window.history.back();" class="back fr">{$core->get_Lang('back')}</a>
</div>
<div class="container-fluid">
    <div class="page-title">
        <h2>{$core->get_Lang('service')}<a style="margin-left:5px;" class="btn btn-success" href="{$PCMS_URL}/?mod={$mod}&act=edit{$pUrl}" title="{$core->get_Lang('add')}"> <i class="icon-plus icon-white"></i></a></h2>
        <p>Chức năng quản lý danh sách các services trong hệ thống isoCMS</p>
		<p>{$core->get_Lang('This function is intended to manage services in isoCMS system')}</p>
        <div class="permalinkbox">
            <div class="wrap permalink_show">
                <strong><a href="{$DOMAIN_NAME}{$clsISO->getLink('service')}" target="_blank"><img align="absmiddle" src="{$URL_IMAGES}/v2/link.png" /> {$DOMAIN_NAME}{$clsISO->getLink('service')}</a></strong>
            </div>
        </div>
    </div>
	<div class="clearfix"><br /></div>
    <div class="wrap">
        <form id="forums" method="post" action="" name="filter" class="filterForm">
            <div class="ui-action">
               <div class="fl fiterbox" style="width:100%">
                    <div class="wrap">
                        <div class="searchbox">
                        	{if $clsISO->getCheckActiveModulePackage($package_id,$mod,'category','default')}
							<select onchange="_reload()" name="servicecat_id" class="slb">
								{$clsServiceCategory->makeSelectboxOption($servicecat_id)}
							</select>
							{/if}
                            <input type="text" class="m-wrap short search_keyword" name="keyword" value="{$keyword}" placeholder="{$core->get_Lang('search')}" />
                            <a class="btn btn-success fileinput-button" href="javascript:void();" id="searchbtn" style=" padding:5px">
                                <i class="icon-search icon-white"></i>
                            </a>
                        </div>
                        <div class="mt10_767" style="float:right;">
                            <a href="{$PCMS_URL}/?mod={$mod}" class="btn btn-warning" style="color:#fff"> <i class="icon-folder-open icon-white"></i> <span>{$core->get_Lang('all')}({$number_all})</span> </a>
                            <a href="{$PCMS_URL}/?mod={$mod}&type_list=Trash" class="btn btn-danger" style="color:#fff"> <i class="icon-warning-sign icon-white"></i> <span>{$core->get_Lang('trash')} ({$number_trash})</span> </a>
                            <a href="javascript:void(0)" class="btn btn-danger btn-delete-all" clsTable="Service" style="color:#fff; display:none"> <i class="icon-remove icon-white"></i> <span>{$core->get_Lang('Delete Options')}</span> </a>
							{if $clsISO->getCheckActiveModulePackage($package_id,$mod,'category','default')}
							<a href="{$PCMS_URL}/?mod={$mod}&act=category" class="btn btn-green" title="{$core->get_Lang('Category')}"><i class="icon-list icon-white"></i> <span>{$core->get_Lang('Category')}</span> </a>
							{/if}
                            <a href="{$PCMS_URL}/?mod={$mod}&act=setting" class="btn btn-danger" title="{$core->get_Lang('settings')}"><i class="icon-cog icon-white"></i> <span>{$core->get_Lang('settings')}</span> </a>
                        </div>
                    </div>
                </div>
            </div>
            <input type="hidden" name="filter" value="filter" />
        </form>
        <input id="list_selected_chkitem" style="display:none" value="0" />
		<table width="100%" border="0" cellpadding="3" cellspacing="0">
			<tr>
				<td width="50%" align="left">&nbsp;</td>
				<td width="50%" align="right">
					{$core->get_Lang('Record/page')}:
					{$clsISO->getRecordPerPage2($recordPerPage,$totalRecord,$mod,$pUrl)}
				</td>
			</tr>
		</table>
        <div class="clearfix"></div>
        <table cellspacing="0" class="tbl-grid full-width table-striped table_responsive" width="100%">
			<thead>
				<tr>
					<th class="gridheader" style="width:40px"><input id="check_all" type="checkbox" /></th>
					<th class="gridheader hiden767" style="width:60px"><strong>{$core->get_Lang('ID')}</strong></th>
					<th class="gridheader name_responsive" style="text-align:left"><strong>{$core->get_Lang('titleofarticle')}</strong></th>
					{if $clsISO->getCheckActiveModulePackage($package_id,$mod,'category','default')}
					<th class="gridheader hiden_responsive" style="text-align:left"><strong>{$core->get_Lang('category')}</strong></th>
					{/if}
					<th class="gridheader hiden_responsive" style="width:60px"><strong>{$core->get_Lang('status')}</strong></th>
					<th class="gridheader hiden_responsive" style="width:120px;" align="center"><strong>{$core->get_Lang('update')}</strong></th>
					<th class="gridheader hiden_responsive" style="width:70px"><strong>{$core->get_Lang('func')}</strong></th>
				</tr>
			</thead>
			<tbody id="SortAble">
				{section name=i loop=$allItem}
				<tr style="cursor:move" id="order_{$allItem[i].service_id}" class="{if $smarty.section.i.index%2 eq 0}row1{else}row2{/if}">
					<th class="check_40"><input name="p_key[]" class="chkitem" type="checkbox" value="{$allItem[i].service_id}" /></th>
					<th class="index hiden767">{$allItem[i].service_id}</th>
					<td class="name_service">
						<strong class="title">{if $clsClassTable->getOneField('is_online',$allItem[i].service_id) eq 0}<span style="color:#F90">[PRIVATE]</span>{/if} {$clsClassTable->getTitle($allItem[i].service_id)}</strong>
						{if $allItem[i].is_trash eq '1'}<span class="fr" style="color:#CCC">{$core->get_Lang('intrash')}</span>{/if}
						<button type="button" class="toggle-row inline_block767" style="display:none"><i class="fa fa-caret fa-caret-down"></i></button>
					</td>
					{if $clsISO->getCheckActiveModulePackage($package_id,$mod,'category','default')}
					<td data-title="{$core->get_Lang('category')}" class="block_responsive border_top_responsive"><a href="{$PCMS_URL}/index.php?admin&mod={$mod}&servicecat_id={$allItem[i].cat_id}">
						<i class="fa fa-folder-open"></i> {$clsServiceCategory->getTitle($allItem[i].cat_id)}</a>
					</td>
					{/if}
					<td data-title="{$core->get_Lang('status')}" {if $clsISO->getCheckActiveModulePackage($package_id,$mod,'category','default')}class="block_responsive"{else}class="block_responsive border_top_responsive"{/if} style="text-align:center">
						<a href="javascript:void(0);" class="SiteClickPublic" clsTable="Service" pkey="service_id" sourse_id="{$allItem[i].service_id}" rel="{$clsClassTable->getOneField('is_online',$allItem[i].service_id)}" title="{$core->get_Lang('Click to change status')}">
							{if $clsClassTable->getOneField('is_online',$allItem[i].service_id) eq '1'}
							<i class="fa fa-check-circle green"></i>
							{else}
							<i class="fa fa-minus-circle red"></i>
							{/if}
						</a>
					</td>
					<td data-title="{$core->get_Lang('update')}" class="block_responsive" style="text-align:center">{$allItem[i].upd_date|date_format:"%d/%m/%Y %H:%M"}</td>
					<td data-title="{$core->get_Lang('func')}" class="block_responsive" align="center" style="vertical-align: middle; text-align:center; width: 40px; white-space: nowrap;">
						<div class="btn-group">
							<button class="btn btn_dropdown dropdown-toggle" type="button" data-toggle="dropdown">
								<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
							</button>
							<ul class="dropdown-menu" style="right:0px !important">
								{if $allItem[i].is_trash eq '0'}
								<li><a href="{$DOMAIN_NAME}{$clsClassTable->getLink($allItem[i].service_id)}" target="_blank" title="{$core->get_Lang('view')}"><i class="icon-eye-open"></i> <span>{$core->get_Lang('view')}</span></a></li>
								<li><a title="{$core->get_Lang('edit')}" href="{$PCMS_URL}/?mod={$mod}&act=edit&service_id={$core->encryptID($allItem[i].service_id)}"><i class="icon-edit"></i> <span>{$core->get_Lang('edit')}</span></a></li>
								<li><a title="{$core->get_Lang('trash')}" href="{$PCMS_URL}/?mod={$mod}&act=trash&service_id={$core->encryptID($allItem[i].service_id)}{$pUrl}"><i class="icon-trash"></i> <span>{$core->get_Lang('trash')}</span></a></li>
								{else}
								<li><a title="{$core->get_Lang('restore')}" href="{$PCMS_URL}/?mod={$mod}&act=restore&service_id={$core->encryptID($allItem[i].service_id)}{$pUrl}"><i class="icon-refresh"></i> <span>{$core->get_Lang('restore')}</span></a></li>
								<li><a title="{$core->get_Lang('delete')}" class="confirm_delete" href="{$PCMS_URL}/?mod={$mod}&act=delete&service_id={$core->encryptID($allItem[i].service_id)}{$pUrl}"><i class="icon-remove"></i> <span>{$core->get_Lang('delete')}</span></a></li>
								{/if}
							</ul>
						</div>
					</td>
				</tr>
				{/section}
        	</tbody>
		</table>
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
			$.post(path_ajax_script+"/index.php?mod="+mod+"&act=ajUpdPosSortListService", order, 
			
			function(html){
				vietiso_loading(0);
				location.href = REQUEST_URI;
			});
		}
	});
</script>
{/literal}