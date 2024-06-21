<div class="page-tour_setting">
	{$core->getBlock('header_title_tour_setting')}
	<div class="container-fluid container-fluid-2 d-flex">
		{$core->getBlock('menu_tour_exhautive_setting')}
		<div class="content_setting_box">
			<div class="page_detail-title d-flex">
				<div class="title">
					<h2>{$core->get_Lang('Addon Services')} </h2>
					<p>{$core->get_Lang('Chức năng quản lý danh sách các Addon Services trong hệ thống isoCMS')}</p>
					<p>{$core->get_Lang('This function is intended to manage Addon Services in isoCMS system')}</p>
				</div>
				<div class="button_right">
					<a class="btn btn-main btn-addnew btnCreateService" href="javascript:void(0);" title="{$core->get_Lang('Add new')}">{$core->get_Lang('Add new')}</a>
				</div>
			</div>
			<div class="wrap">
				<form id="forums" method="post" class="filterForm" action="">
					<div class="filterbox">
						<div class="wrap">
							<div class="searchbox" style="float:left !important; width:100%">
								<input type="text" class="text search_keyword" name="keyword" value="{$keyword}" placeholder="{$core->get_Lang('search')}" />
								<a class="btn btn-text btn-main" href="javascript:void();" id="searchbtn" >
									{$core->get_Lang('Search')}
								</a>
							</div>
						</div>
					</div>
					<input type="hidden" name="filter" value="filter" />
				</form>
				<div class="clearfix"><br /></div>
    			<input id="list_selected_chkitem" style="display:none" value="0" />
				<div class="wrap">
					<div class="clearfix"></div>
					<div class="statistical mb5">
						<table width="100%" border="0" cellpadding="3" cellspacing="0">
							<tr>
								<td width="50%" align="left">&nbsp;</td>
								<td width="50%" align="right">
									{$core->get_Lang('Record/page')}:
									<select name="recordperpage" onchange="window.location = this.options[this.selectedIndex].value">
										<option {if $recordPerPage eq '20'}selected="selected"{/if} value="{$PCMS_URL}/?mod={$mod}&act={$act}&recordperpage=20">20</option>
										{if $totalRecord gt '20'}
										<option {if $recordPerPage eq '50'}selected="selected"{/if} value="{$PCMS_URL}/?mod={$mod}&act={$act}&recordperpage=50">50</option>
										{if $totalRecord gt '50'}
										<option {if $recordPerPage eq '100'}selected="selected"{/if} value="{$PCMS_URL}/?mod={$mod}&act={$act}&recordperpage=100">100</option>
										{if $totalRecord gt '100'}
										<option {if $recordPerPage eq '200'}selected="selected"{/if} value="{$PCMS_URL}/?mod={$mod}&act={$act}&recordperpage=200">200</option>
										{if $totalRecord gt '200'}
										<option {if $recordPerPage eq '{$totalRecord}'}selected="selected"{/if} value="{$PCMS_URL}/?mod={$mod}&act={$act}&recordperpage={$totalRecord}">{$core->get_Lang('All')}</option>
										{/if}
										{/if}
										{/if}
										{/if}
									</select>
									<a class="btn btn-danger btn-delete-all" clsTable="AddOnService" style="display:none">
										<i class="icon-remove icon-white"></i> <span>{$core->get_Lang('Delete Options')}</span>
									</a>
								</td>
							</tr>
						</table>
					</div>
					<div class="hastable">
						<table cellspacing="0" class="tbl-grid table-striped table_responsive" width="100%">
							<thead>
								 <tr>
									<th class="gridheader" style="width:40px"><input id="check_all" type="checkbox" /></th>
									<th class="gridheader hiden767"><strong>{$core->get_Lang('ID')}</strong></th>
									{*<th class="gridheader"  style="width:70px">{$core->get_Lang('Image')}</th>*}
									<th class="gridheader name_responsive name_responsive3" style="text-align:left"><strong>{$core->get_Lang('Name')}</strong></th>
									<th class="gridheader hiden_responsive" style="text-align:right; width:8%"><strong>{$core->get_Lang('pricefrom')}</strong></th>
									<th class="gridheader hiden_responsive" style="width:80px"><strong>{$core->get_Lang('status')}</strong></th>
									<th class="gridheader hiden_responsive" style="text-align:center;"></th>

								</tr>
							</thead>

							{if $allItem[0].addonservice_id ne ''}
							<tbody id="SortAble">
								{section name=i loop=$allItem}
								<tr style="cursor:move" id="order_{$allItem[i].addonservice_id}"   class="{cycle values="row1,row2"}">
									<th class="check_40"><input name="p_key[]" class="chkitem" type="checkbox" value="{$allItem[i].addonservice_id}" /></th>
									<th class="index hiden767"> {$allItem[i].addonservice_id}</th>
									{*<th class="index">
										{if $clsClassTable->getImageUrl($allItem[i].addonservice_id)}
										<img src="{$clsClassTable->getImage($allItem[i].addonservice_id,60,40)}" width="60" />
										{/if}
									</th>*}
									<td class="name_service">
										<span class="title">{$clsClassTable->getTitle($allItem[i].addonservice_id)}</span>
										{if $allItem[i].is_trash eq '1'}<span class="fr" style="color:#CCC">{$core->get_Lang('intrash')}</span>{/if}
										<button type="button" class="toggle-row inline_block767 top12" style="display:none"><i class="fa fa-caret fa-caret-down"></i></button>
									</td>
									<td data-title="{$core->get_Lang('price')}" class="block_responsive border_top_responsive" style="text-align:right; white-space:nowrap"> 
										<strong class="format_price">{$clsClassTable->getPrice($allItem[i].addonservice_id)} {$clsISO->getRate()}</strong> 
									</td>
									<td data-title="{$core->get_Lang('status')}" class="block_responsive" style="text-align:center">
										<a href="javascript:void(0);" class="SiteClickPublic" clsTable="AddOnService" pkey="addonservice_id" sourse_id="{$allItem[i].addonservice_id}" rel="{$clsClassTable->getOneField('is_online',$allItem[i].addonservice_id)}" title="{$core->get_Lang('Click to change status')}">
											{if $clsClassTable->getOneField('is_online',$allItem[i].addonservice_id) eq '1'}
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
												<li><a class="btn_edit_service" title="{$core->get_Lang('edit')}" href="javascript:void();" data="{$allItem[i].addonservice_id}"><i class="icon-edit"></i> <span>{$core->get_Lang('edit')}</span></a></li>
												<li><a title="{$core->get_Lang('trash')}" href="{$PCMS_URL}/?mod={$mod}&act={$act}&action=Trash&addonservice_id={$core->encryptID($allItem[i].addonservice_id)}"><i class="icon-trash"></i> <span>{$core->get_Lang('trash')}</span></a></li>
												{else}
												<li><a title="{$core->get_Lang('restore')}" href="{$PCMS_URL}/?mod={$mod}&act={$act}&action=Restore&addonservice_id={$core->encryptID($allItem[i].addonservice_id)}"><i class="icon-refresh"></i> <span>{$core->get_Lang('restore')}</span></a></li>
												<li><a title="{$core->get_Lang('delete')}" class="confirm_delete" href="{$PCMS_URL}/?mod={$mod}&act={$act}&action=Delete&addonservice_id={$core->encryptID($allItem[i].addonservice_id)}"><i class="icon-remove"></i> <span>{$core->get_Lang('delete')}</span></a></li>
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
<script type="text/javascript">
	var $recordPerPage = '{$recordPerPage}';
	var $currentPage = '{$currentPage}';
</script>

<script type="text/javascript" src="{$PCMS_URL}/editor/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript" src="{$URL_THEMES}/property/jquery.addonservice.js"></script>


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
			$.post(path_ajax_script+"/index.php?mod=property&act=ajUpdPosSortServiceTour", order, 
			
			function(html){
				vietiso_loading(0);
				location.href = REQUEST_URI;
			});
		}
	});
</script>
{/literal}