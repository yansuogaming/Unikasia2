<div class="page-tour_setting page_container">
	{$core->getBlock('header_title_tour_setting')}
	<div class="container-fluid container-fluid-2 d-flex">
		{$core->getBlock('menu_tour_exhautive_setting')}
		<div class="content_setting_box">
			<div class="page_detail-title d-flex">
				<div class="title">
					<h2>{$core->get_Lang('Transportations')} </h2>
					<p>{$core->get_Lang('Chức năng quản lý danh sách Transportations trong hệ thống isoCMS')}</p>
					<p>{$core->get_Lang('This function is intended to manage Transportations in isoCMS system')}</p>
				</div>
				<div class="button_right">
					<a class="btn btn-main btn-addnew btnCreateService" href="javascript:void(0);" title="{$core->get_Lang('Add new')}">{$core->get_Lang('Add new')}</a>
				</div>
			</div>
			<div class="wrap">
				<div class="filter_box">
					<form id="forums" method="post" class="filterForm" action="">
							<div class="form-group form-keyword">
								<input class="form-control" type="text" name="keyword" value="{$keyword}" placeholder="{$core->get_Lang('search')}">
							</div>
							<div class="form-group form-button">
								<button type="submit" class="btn btn-main" id="findtBtn">{$core->get_Lang('Search')}</button>
								<input type="hidden" name="filter" value="filter">
							</div>
							<div class="form-group form-button">
								<a class="btn btn-delete-all " id="btn_delete" clstable="Transport" style="display: none;">
									Xóa
								</a>
							</div>
					</form>
					<div class="record_per_page">
						<label>{$core->get_Lang('Record/page')}</label>
						{$clsISO->getRecordPerPage2($recordPerPage,$totalRecord,$mod,$pUrl)}
					</div>
				</div>
				<div class="clearfix"></div>
				<input id="list_selected_chkitem" style="display:none" value="0" />
				<div class="wrap">
					<div class="hastable">
						<table cellspacing="0" class="tbl-grid table-striped table_responsive" width="100%">
							<thead>
								<tr>
									<th class="gridheader" style="width:40px"><input id="check_all" type="checkbox" /></th>
									<th class="gridheader hiden767"><strong>{$core->get_Lang('ID')}</strong></th>
									<th class="gridheader" style="width:70px">{$core->get_Lang('Image')}</th>
									<th class="gridheader name_responsive name_responsive3" style="text-align:left"><strong>{$core->get_Lang('Name')}</strong></th>
									<th class="gridheader hiden_responsive" style="width:80px"><strong>{$core->get_Lang('status')}</strong></th>
									<th class="gridheader hiden_responsive" style="text-align:center;"></th>
								</tr>
							</thead>
							{if $allItem[0].transport_id ne ''}
							<tbody id="SortAble">
							{section name=i loop=$allItem}
							 <tr style="cursor:move" id="order_{$allItem[i].transport_id}"  class="{cycle values="row1,row2"}">
								<th class="check_40"><input name="p_key[]" class="chkitem" type="checkbox" value="{$allItem[i].transport_id}" /></th>
								<th class="index hiden767"> {$allItem[i].transport_id}</th>
								<th class="index">
									{if $clsClassTable->getImageUrl($allItem[i].transport_id)}
									<img src="{$clsClassTable->getImage($allItem[i].transport_id,60,40)}" width="60" />
									{/if}
								</th>
								<td class="name_service">
									<span class="title">
										{$clsClassTable->getTitle($allItem[i].transport_id)}
									</span>
									{if $allItem[i].is_trash eq '1'}<span class="fr" style="color:#CCC">{$core->get_Lang('intrash')}</span>{/if}
									<button type="button" class="toggle-row inline_block767 top12" style="display:none"><i class="fa fa-caret fa-caret-down"></i></button>
								</td>

								<td data-title="{$core->get_Lang('status')}" class="block_responsive border_top_responsive" style="text-align:center">
									<a href="javascript:void(0);" class="SiteClickPublic" clsTable="Transport" pkey="transport_id" sourse_id="{$allItem[i].transport_id}" rel="{$clsClassTable->getOneField('is_online',$allItem[i].transport_id)}" title="{$core->get_Lang('Click to change status')}">
										{if $clsClassTable->getOneField('is_online',$allItem[i].transport_id) eq '1'}
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
											<li><a class="btn_edit_transport" title="{$core->get_Lang('edit')}" href="javascript:void();" data="{$allItem[i].transport_id}"><i class="icon-edit"></i> <span>{$core->get_Lang('edit')}</span></a></li>
											<li><a title="{$core->get_Lang('trash')}" href="{$PCMS_URL}/?mod={$mod}&act={$act}&action=Trash&transport_id={$core->encryptID($allItem[i].transport_id)}"><i class="icon-trash"></i> <span>{$core->get_Lang('trash')}</span></a></li>
											{else}
											<li><a title="{$core->get_Lang('restore')}" href="{$PCMS_URL}/?mod={$mod}&act={$act}&action=Restore&transport_id={$core->encryptID($allItem[i].transport_id)}"><i class="icon-refresh"></i> <span>{$core->get_Lang('restore')}</span></a></li>
											<li><a title="{$core->get_Lang('delete')}" class="confirm_delete" href="{$PCMS_URL}/?mod={$mod}&act={$act}&action=Delete&transport_id={$core->encryptID($allItem[i].transport_id)}"><i class="icon-remove"></i> <span>{$core->get_Lang('delete')}</span></a></li>
											{/if}
										</ul>
									</div>
								</td>
							</tr>
							{/section}
							</tbody>
							{/if}
						</table>  
					</div>
					<div class="clearfix"></div>
					<div class="statistical mb5">
						<table width="100%" border="0" cellpadding="3" cellspacing="0">
							<tr>
								<td width="50%" align="left">{$core->get_Lang('statistical')} <strong>{$totalRecord}</strong> {$core->get_Lang('records')}/<strong>{$totalPage}</strong> {$core->get_Lang('page')}. {$core->get_Lang('youareonpagenumber')} <strong>{$currentPage}</strong></td>
								{if $totalPage gt '1'}
								<td width="50%" align="right">
									{$core->get_Lang('gotopage')}:
									<select name="page" onchange="window.location = this.options[this.selectedIndex].value">
										{section name=i loop=$listPageNumber}
										<option {if $listPageNumber[i] eq $currentPage}selected="selected"{/if} value="{$PCMS_URL}/{$link_page_current}&page={$listPageNumber[i]}">{$listPageNumber[i]}</option>
										{/section}
									</select>

								</td>
								{/if}
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="{$URL_THEMES}/property/jquery.transport.js"></script>
<script type="text/javascript">var $recordPerPage = '{$recordPerPage}';var $currentPage = '{$currentPage}';</script>
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
			$.post(path_ajax_script+"/index.php?mod=property&act=ajUpdPosSortTransport", order, 

			function(html){
				vietiso_loading(0);
				location.href = REQUEST_URI;
			});
		}
	});
</script>
{/literal}