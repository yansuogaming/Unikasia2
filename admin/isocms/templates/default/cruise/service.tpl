<div class="page_container page-tour_setting">
	{$core->getBlock('header_title_module_setting')}
	<div class="container-fluid container-fluid-2 d-flex">
	   {$core->getBlock('menu_cruise_setting')}
	   <div class="content_setting_box">
	   		<div class="page_detail-title d-flex">
				<div class="title">
					<h2>{$core->get_Lang('servicecruises')}</h2>
					<p>Chức năng quản lý danh sách các Cruise Services trong hệ thống isoCMS</p>
				<p>{$core->get_Lang('This function is intended to manage Cruise Services in isoCMS system')}</p>
				</div>
				<div class="button_right">
					<a class="btn btn-main btn-addnew btnCreateCruiseService" href="javascript:void(0);" title="{$core->get_Lang('add')} {$core->get_Lang('servicecruises')}">{$core->get_Lang('add')} {$core->get_Lang('servicecruises')}</a>
				</div>
			</div>
			<div class="filter_box">
				<form id="forums" method="post" class="filterForm" action="">
					<div class="form-group form-keyword">
						<input class="form-control" type="text" name="keyword" value="{$keyword}" placeholder="{$core->get_Lang('search')}..." />
					</div>
					<div class="form-group form-button">
						<button type="submit" class="btn btn-main" id="findtBtn">Tìm kiếm</button>
						<input type="hidden" name="filter" value="filter" />
					</div>
					<div class="form-group form-button hidden">
						<button type="button" class="btn btn-export" id="btn_export">Export</button>
					</div>
					<div class="form-group form-button">
						<a class="btn btn-delete-all" id="btn_delete" clsTable="CruiseService" style="display:none">
							{$core->get_Lang('Delete')}
						</a>
					</div>
				</form>	
				<div class="record_per_page">
					<label>{$core->get_Lang('Record/page')}</label>
					{$clsISO->getRecordPerPage2($recordPerPage,$totalRecord,$mod,$pUrl)}
				</div>
			</div>
			
			<input id="list_selected_chkitem" style="display:none" value="0" />
			<div class="clearfix"></div>
			<div class="hastable">
				
				<table class="tbl-grid table-striped table_responsive full-width">
					<thead>
						<tr>
							<th class="gridheader" style="width:40px"><input id="check_all" type="checkbox" /></th>
							<th class="gridheader hiden767" style="width:60px"><strong>{$core->get_Lang('ID')}</strong></th>
							<th class="gridheader name_responsive" style="text-align:left"><strong>{$core->get_Lang('Name')}</strong></th>
							<th class="gridheader hiden767" style="width:100px;text-align:right"><strong>{$core->get_Lang('price')} ({$clsISO->getRate()})</strong></th>
							<th class="gridheader hiden767" style="width:60px"><strong>{$core->get_Lang('status')}</strong></th>
							<th class="gridheader hiden767" style="width:120px"><strong>{$core->get_Lang('update')}</strong></th>
							<th class="gridheader hiden767" style="text-align:center; width:70px"><strong>{$core->get_Lang('func')}</strong></th>
						</tr>
					</thead>
					{if $allItem[0].cruise_service_id ne ''}
				   <tbody id="SortAble">
						{section name=i loop=$allItem}
						<tr style="cursor:move" id="order_{$allItem[i].cruise_service_id}" class="{if $smarty.section.i.index%2 eq 0}row1{else}row2{/if}">
							<th class="index"><input name="p_key[]" class="chkitem" type="checkbox" value="{$allItem[i].cruise_service_id}" /></th>
							<td class="index hiden767"> {$allItem[i].cruise_service_id}</td>
							<td class="name_service">
								<strong style="font-size:14px">{if $clsClassTable->getOneField('is_online',$allItem[i].cruise_service_id) eq 0}<span style="color:#F90">[PRIVATE]</span>{/if} {$clsClassTable->getTitle($allItem[i].cruise_service_id)}</strong>
								{if $allItem[i].is_trash eq '1'}<span class="fr" style="color:#CCC">{$core->get_Lang('intrash')}</span>{/if}
								<button type="button" class="toggle-row inline_block767" style="display:none"><i class="fa fa-caret fa-caret-down"></i></button>
							</td>
							<td class="block_responsive" data-title="{$core->get_Lang('price')}" style="text-align:right; white-space:nowrap">
								<strong class="format_price" style="font-size:13px">
									{$clsClassTable->getPrice($allItem[i].cruise_service_id)} {$clsISO->getRate()}
								</strong>
							</td>
							<td class="block_responsive" data-title="{$core->get_Lang('status')}" style="text-align:center">
								<a href="javascript:void(0);" class="SiteClickPublic" clsTable="CruiseService" pkey="cruise_service_id" sourse_id="{$allItem[i].cruise_service_id}" rel="{$clsClassTable->getOneField('is_online',$allItem[i].cruise_service_id)}" title="{$core->get_Lang('Click to change status')}">
									{if $clsClassTable->getOneField('is_online',$allItem[i].cruise_service_id) eq '1'}
									<i class="fa fa-check-circle green"></i>
									{else}
									<i class="fa fa-minus-circle red"></i>
									{/if}
								</a>
							</td>
							<td class="block_responsive" data-title="{$core->get_Lang('update')}">{$clsClassTable->getOneField('upd_date',$allItem[i].cruise_service_id)|date_format:"%m-%d-%Y %H:%M"}</td>
							<td class="block_responsive" data-title="{$core->get_Lang('func')}" align="center" style="vertical-align: middle; text-align:center; width: 40px; white-space: nowrap;">
								<div class="btn-group">
									<button class="btn btn_dropdown dropdown-toggle" type="button" data-toggle="dropdown">
										<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
									</button>
									<ul class="dropdown-menu" style="right:0px !important">
										{if $allItem[i].is_trash eq '0'}
										<li><a class="clickEditCruiseService" title="{$core->get_Lang('edit')}" href="javascript:void();" data="{$allItem[i].cruise_service_id}"><i class="icon-edit"></i> <span>{$core->get_Lang('edit')}</span></a></li>
										<li><a title="{$core->get_Lang('trash')}" href="{$PCMS_URL}/?mod={$mod}&act={$act}&action=Trash&cruise_service_id={$core->encryptID($allItem[i].cruise_service_id)}"><i class="icon-trash"></i> <span>{$core->get_Lang('trash')}</span></a></li>
										{else}
										<li><a title="{$core->get_Lang('restore')}" href="{$PCMS_URL}/?mod={$mod}&act={$act}&action=Restore&cruise_service_id={$core->encryptID($allItem[i].cruise_service_id)}"><i class="icon-refresh"></i> <span>{$core->get_Lang('restore')}</span></a></li>
										<li><a title="{$core->get_Lang('delete')}" class="confirm_delete" href="{$PCMS_URL}/?mod={$mod}&act={$act}&action=Delete&cruise_service_id={$core->encryptID($allItem[i].cruise_service_id)}"><i class="icon-remove"></i> <span>{$core->get_Lang('delete')}</span></a></li>
										{/if}
									</ul>
								</div>
							</td>
						</tr>
						{/section}
					</tbody>
					{/if}
				</table>
				<div class="clearfix"></div>
				{$clsISO->getPaginationAdmin($totalRecord,$totalPage,$currentPage,$listPageNumber,$link_page_current,$type)}
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	var $SiteHasCruisesService = "{$clsConfiguration->getValue('SiteHasCruisesService')}";
</script>
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
			$.post(path_ajax_script+"/index.php?mod="+mod+"&act=ajUpdPosSortListCruiseService", order, 
			
			function(html){
				vietiso_loading(0);
				location.href = REQUEST_URI;
			});
		}
	});
</script>
{/literal}
<script type="text/javascript" src="{$URL_THEMES}/cruise/jquery.cruise.js?v={$upd_version}"></script>