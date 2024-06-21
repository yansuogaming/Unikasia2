<div class="breadcrumb">
    <strong>{$core->get_Lang('youarehere')} : </strong>
    <a href="{$PCMS_URL}" title="{$core->get_Lang('home')}">{$core->get_Lang('home')}</a>
    <a>&raquo;</a>
    <a href="{$PCMS_URL}/index.php?mod={$mod}" title="{$core->get_Lang('Service')}">{$core->get_Lang('Service')}</a>
    <a>&raquo;</a>
    <a href="{$curl}" title="{$mod}">{$core->get_Lang('servicecategory')}</a>
    <!-- // -->
    <a href="javascript:window.history.back();" class="back fr">{$core->get_Lang('back')}</a>
</div>
<div class="clearfix"></div>
{if $msg eq 'DeleteFailed'}
<div style="padding:15px; padding-top:0;">
	<div style="padding:10px; background:red; color:#fff; font-size:14px; text-align:center; "><img src="{$URL_IMAGES}/warning-20.png" title="" align="absmiddle" />
		<strong>{$core->get_Lang('Warning')}:</strong> {$core->get_Lang('identicalposts')}
	</div>
</div>
<div class="clearfix"></div>
{/if}
<div class="container-fluid">
    <div class="page-title">
        <h2>{$core->get_Lang('servicecategory')} <a class="btn btn-success btnCreateCategoryService" title="{$core->get_Lang('add')}"> <i class="icon-plus icon-white"></i></a></h2>
        <p>{$core->get_Lang('systemmanagementservicecategory')}</p>
    </div>
    <div class="clearfix"></div>
    <form id="forums" method="post" class="filterForm" action="">
        <div class="ui-action">
            <div class="wrap">
                <div class="fiterbox" style="width:100%;">
                    <div class="wrap">
                        <div class="searchbox" style="float:left !important;">
                            <input type="text" class="m-wrap short" name="keyword" value="{$keyword}" placeholder="{$core->get_Lang('search')}..." />
                            <a class="btn btn-success" href="javascript:void();" id="searchbtn" style=" padding:5px">
                                <i class="icon-search icon-white"></i>
                            </a>
                            <a href="{$PCMS_URL}/index.php?mod=service" class="btn btn-warning">
                                <i class="icon-list icon-white"></i> <span>{$core->get_Lang('list service')}</span>
                            </a>
                        </div>
                        <div class="fr group_buttons">
                            <a href="{$PCMS_URL}/?mod={$mod}&act={$act}" class="btn btn-warning" style="color:#fff"> <i class="icon-folder-open icon-white"></i> <span>{$core->get_Lang('all')} ({$number_all})</span> </a>
                            <a href="{$PCMS_URL}/?mod={$mod}&act={$act}&type_list=Trash" class="btn btn-danger" style="color:#fff"> <i class="icon-warning-sign icon-white"></i> <span>{$core->get_Lang('trash')} ({$number_trash})</span> </a>
                            <a href="javascript:void(0)" class="btn btn-danger btn-delete-all" clsTable="ServiceCategory" style="color:#fff; display:none"> <i class="icon-remove icon-white"></i> <span>{$core->get_Lang('Delete Options')}</span> </a>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" name="filter" value="filter" />
    </form>
    <div class="wrap">
        <div class="hastable">
            <table cellspacing="0" class="tbl-grid table-striped table_responsive" width="100%">
				<thead>
					<tr>
						<th class="gridheader" style="width:40px"><input id="check_all" type="checkbox" /></th>
						<th class="gridheader hiden767"><strong>{$core->get_Lang('index')}</strong></th>
						<th class="gridheader name_responsive" style="text-align:left"><strong>{$core->get_Lang('title')}</strong></th>
						<th class="gridheader hiden_responsive" style="text-align:left"><strong>{$core->get_Lang('List Service')}</strong></th>
						<th class="gridheader hiden_responsive" style="text-align:right"><strong>{$core->get_Lang('update')}</strong></th>
						<th class="gridheader hiden_responsive" style="text-align:center"><strong>{$core->get_Lang('status')}</strong></th>
						<th class="gridheader hiden_responsive"><strong>{$core->get_Lang('func')}</strong></th>
					</tr>
				</thead>
                {if $allItem[0].servicecat_id ne ''}
				<tbody id="SortAble">
					{section name=i loop=$allItem}
					<tr style="cursor:move" id="order_{$allItem[i].servicecat_id}" class="{if $smarty.section.i.index%2 eq 0}row1{else}row2{/if}">
						<th class="check_40"><input name="p_key[]" class="chkitem" type="checkbox" value="{$allItem[i].servicecat_id}" /></th>
						<th class="index hiden767"> {$smarty.section.i.index+1}</th>
						<td class="name_service">
							<a style="text-decoration:none" title="{$clsClassTable->getTitle($allItem[i].servicecat_id)}"><strong style="font-size:14px;">{$clsClassTable->getTitle($allItem[i].servicecat_id)}</strong></a>
							{if $allItem[i].is_trash eq '1'}<span class="fr" style="color:#CCC">{$core->get_Lang('intrash')}</span>{/if}
							<button type="button" class="toggle-row inline_block767" style="display:none"><i class="fa fa-caret fa-caret-down"></i></button>
						</td>
						<td data-title="{$core->get_Lang('List Service')}" class="block_responsive border_top_responsive"><a href="{$PCMS_URL}/?mod=service&servicecat_id={$allItem[i].servicecat_id}">
								<i class="fa fa-folder-open"></i> {$core->get_Lang('listofarticles')} <strong style="color:#c00000;">({$clsClassTable->countItemInCat($allItem[i].servicecat_id)})</strong></a>
						</td>
						<td data-title="{$core->get_Lang('update')}" class="block_responsive" style="text-align:right">{$clsClassTable->getOneField('upd_date',$allItem[i].servicecat_id)|date_format:"%m-%d-%Y %H:%M"}</td>
						<td data-title="{$core->get_Lang('status')}" class="block_responsive" style="text-align:center">
							<a href="javascript:void(0);" class="SiteClickPublic" clsTable="ServiceCategory" pkey="servicecat_id" sourse_id="{$allItem[i].servicecat_id}" rel="{$clsClassTable->getOneField('is_online',$allItem[i].servicecat_id)}" title="{$core->get_Lang('Click to change status')}">
								{if $clsClassTable->getOneField('is_online',$allItem[i].servicecat_id) eq '1'}
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
									<li><a href="{$DOMAIN_NAME}{$clsClassTable->getLink($allItem[i].servicecat_id)}" target="_blank" title="{$core->get_Lang('view')}"><i class="icon-eye-open"></i> <span>{$core->get_Lang('view')}</span></a></li>
									<li><a class="btnEditServiceCat" title="{$core->get_Lang('edit')}" data="{$allItem[i].servicecat_id}"><i class="icon-edit"></i> <span>{$core->get_Lang('edit')}</span></a></li>
									<li><a title="{$core->get_Lang('trash')}" href="{$PCMS_URL}/?mod={$mod}&act={$act}&action=Trash&servicecat_id={$core->encryptID($allItem[i].servicecat_id)}"><i class="icon-trash"></i> <span>{$core->get_Lang('Trash')}</span></a></li>
									{else}
									<li><a title="{$core->get_Lang('restore')}" href="{$PCMS_URL}/?mod={$mod}&act={$act}&action=Restore&servicecat_id={$core->encryptID($allItem[i].servicecat_id)}"><i class="icon-refresh"></i> <span>{$core->get_Lang('restore')}</span></a></li>
									<li><a title="{$core->get_Lang('delete')}" class="confirm_delete" href="{$PCMS_URL}/?mod={$mod}&act={$act}&action=Delete&servicecat_id={$core->encryptID($allItem[i].servicecat_id)}"><i class="icon-remove"></i> <span>{$core->get_Lang('delete')}</span></a></li>
									{/if}
								</ul>
							</div>
						</td>
					</tr>
					{/section}
                </tbody>
				{/if}
            </table>  
            <div class="clearfix" style="height:5px"></div>
            <div class="pagination_box">
                <div class="wrap holderEvent_tbl" id="dataTable_paginate"> 
                    <!-- Ajax Loading pagination --> 
                </div>
            </div> 
        </div>
    </div>
</div>
<script type="text/javascript">
	var $SiteHasCat_Service = "{$clsISO->getCheckActiveModulePackage($package_id,$mod,'category','default')}";
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
			$.post(path_ajax_script+"/index.php?mod="+mod+"&act=ajUpdPosSortListServiceCat", order, 
			
			function(html){
				location.href = REQUEST_URI;
				vietiso_loading(0);
			});
		}
	});
</script>
{/literal}
<script type="text/javascript" src="{$PCMS_URL}/editor/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript" src="{$URL_THEMES}/service/jquery.service.js?v={$upd_version}"></script>