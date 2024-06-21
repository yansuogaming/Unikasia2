<div class="page_container page-tour_setting">
	{$core->getBlock('header_title_module_setting')}
	<div class="container-fluid container-fluid-2 d-flex">
		{$core->getBlock('menu_cruise_setting')}
		<div class="content_setting_box">
			<div class="page_detail-title d-flex">
				<div class="title">
					<h2>{if $type eq "GroupCruiseFacilities"}{$core->get_Lang('groupcruisefacilities')}{else}{$clsClassTable->getTextByType($type)}{/if}</h2>
					<p>Chức năng quản lý danh sách các {if $type eq "GroupCruiseFacilities"}{$core->get_Lang('groupcruisefacilities')}{else}{$clsClassTable->getTextByType($type)}{/if} trong hệ thống isoCMS</p>
					<p>This function is intended to manage {if $type eq "GroupCruiseFacilities"}{$core->get_Lang('groupcruisefacilities')}{else}{$clsClassTable->getTextByType($type)}{/if} in isoCMS system</p>
				</div>
				<div class="button_right">
					<a class="btn btn-main btn-addnew clickToAddPropertyss" href="javascript:void(0);" title="{$core->get_Lang('add')} {$core->get_Lang('Cruise Class')}">{$core->get_Lang('add')} {if $type eq "GroupCruiseFacilities"}{$core->get_Lang('groupcruisefacilities')}{else}{$clsClassTable->getTextByType($type)}{/if}</a>
				</div>
			</div>
			{if $type eq 'HighLow'}
			<form id="edititem" method="post" action="" enctype="multipart/form-data" class="validate-form">
				{assign var = high_season_month value = $clsConfiguration->getValue('high_season_month')}
				<div class="service_left">
					<h4 style="margin:30px 0 0px">{$core->get_Lang('Check Rates')}</h4>
				</div>
				<div class="row-span">
					<label style="font-size:12px"><strong>Check:</strong> Tháng cao điểm <br /><strong>UnCheck:</strong> Tháng thấp điểm</label>
					<div class="wrap mt10">
						{section name=i loop=$lstMonth}
						<label class="lblcheck" style="width:16%">
							<input type="checkbox" {if $clsISO->checkInArray($high_season_month,$lstMonth[i])}checked="checked"{/if} name="season_month[]" value="{$lstMonth[i]}" /> {$core->get_Lang('month')} {$lstMonth[i]}
						</label>
						{/section}
					</div>
					<div class="mt10" id="tblCruisePrice"></div>
				</div>
				<fieldset class="submit-buttons">
					 {$saveBtn}
					<input value="Update" name="submit" type="hidden">
				</fieldset>
			</form>
			{else}
			<div class="clearfix"><br /></div>
			<div class="filter_box">
				<form id="forums" method="post" action="" class="filterForm">
				<div class="ui-action">
					<div class="wrap">
						<div class="filterbox filterbox-border" style="width:100%">
							<div class="wrap">
								<div class="form-group form-keyword">
									<input class="form-control" type="text" name="keyword" value="{$keyword}" placeholder="{$core->get_Lang('search')}..." />
								</div>
								<div class="form-group form-button">
									<button type="submit" class="btn btn-main" id="findtBtn">Tìm kiếm</button>
									<input type="hidden" name="filter" value="filter" />
								</div>
								<div class="form-group form-button">
									<a class="btn btn-delete-all" id="btn_delete" clsTable="CruiseProperty" style="display:none">
										{$core->get_Lang('Delete')}
									</a>
								</div>
								{if $type eq 'UsefulInformation'}
								<div class="group_buttons fr"> <a href="{$PCMS_URL}/index.php?mod=cruise&act=property&type=GroupUsefulInformation" class="btn btn-success btnNew" title="{$core->get_Lang('Group UsefulInformation')}"><i class="icon-list icon-white"></i> <span>{$core->get_Lang('Group UsefulInformation')}</span> </a></div>
								{elseif $type eq 'NearestEssentials'}
								<div class="group_buttons fr"> <a href="{$PCMS_URL}/index.php?mod=cruise&act=property&type=GroupNearestEssentials" class="btn btn-success btnNew" title="{$core->get_Lang('Group Nearest Essentials')}"><i class="icon-list icon-white"></i> <span>{$core->get_Lang('Group Nearest Essentials')}</span> </a></div>
								{elseif $type eq 'CruiseFacilities'}
								<div class="group_buttons fr"> <a href="{$PCMS_URL}/index.php?mod=cruise&act=property&type=GroupCruiseFacilities" class="btn btn-success btnNew" title="{$core->get_Lang('Group Cruise Facilities')}"><i class="icon-list icon-white"></i> <span>{$core->get_Lang('Group Cruise Facilities')}</span> </a></div>
								{elseif $type eq 'Benefits'}
								<div class="group_buttons fr"> <a href="{$PCMS_URL}/index.php?mod=cruise&act=property&type=GroupBenefits" class="btn btn-success btnNew" title="{$core->get_Lang('Group Benefits')}"><i class="icon-list icon-white"></i> <span>{$core->get_Lang('Group Benefits')}</span> </a></div>
								{else}
								{/if}
							</div>
						</div>
					</div>
				</div>
				<input type="hidden" name="filter" value="filter" />
			</form>
			</div>
			<div class="statistical mb5">
				<table width="100%" border="0" cellpadding="3" cellspacing="0">
					<tr>
						<td width="50%" align="left">&nbsp;</td>
						<td width="50%" align="right">
							{$core->get_Lang('Record/page')}:
							{$clsISO->getRecordPerPage($recordPerPage,$totalRecord,$mod,$act,$type)}
						</td>
					</tr>
				</table>
			</div>
			<form id="listItem" method="post" action="">
				<input type="hidden" value="delete" name="delete" />
				<table cellspacing="0" class="tbl-grid table-striped table_responsive tblAction full-width" id="tblLanguage">
					<thead>
						<tr>
							<th class="gridheader" style="width:40px"><input id="check_all" type="checkbox" /></th>
							<th class="gridheader hiden767"><strong>{$core->get_Lang('ID')}</strong></th>
							<th class="gridheader name_responsive" style="text-align:left"><strong>{$core->get_Lang('title')}</strong></th>
							{if $type eq 'Conditions'}
							<th class="gridheader hiden767" style="text-align:left; width:120px"><strong>{$core->get_Lang('Type Group')}</strong></th>
							{/if}
							<th class="gridheader hiden767" style="text-align:center;"><strong>{$core->get_Lang('func')}</strong></th>
						</tr>
					</thead>
					{if $allItem[0].cruise_property_id}
					<tbody id="SortAble">
						{section name=i loop=$allItem}
						<tr style="cursor:move" id="order_{$allItem[i].cruise_property_id}" class="{if $smarty.section.i.index%2 eq 0}row1{else}row2{/if}">
							<th class="index"><input name="p_key[]" class="chkitem" type="checkbox" value="{$allItem[i].cruise_property_id}" /></th>
							<td class="index hiden767">{$allItem[i].cruise_property_id}</td>
							<td class="name_service">
								<a class="clickToEditProperty" href="javascript:void(0);" data="{$allItem[i].cruise_property_id}">
									<strong class="title">
										{$clsClassTable->getTitle($allItem[i].cruise_property_id)}
									</strong>
								</a>
								<button type="button" class="toggle-row inline_block767" style="display:none"><i class="fa fa-caret fa-caret-down"></i></button>
							</td>
							{if $type eq 'Conditions'}
							<td class="block_responsive" data-title="{$core->get_Lang('Type Group')}">
								{$clsClassTable->getOneField('type_group',$allItem[i].cruise_property_id)}
							</td>
							{/if}
							<td class="block_responsive" data-title="{$core->get_Lang('func')}" align="center" style="vertical-align: middle; text-align:center; width: 40px; white-space: nowrap;">
								<div class="btn-group">
									<button class="btn btn_dropdown dropdown-toggle" type="button" data-toggle="dropdown">
										<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
									</button>
									<ul class="dropdown-menu" style="right:0px !important">
										<li><a class="clickToEditProperty" title="{$core->get_Lang('edit')}" href="javascript:void(0);" data="{$allItem[i].cruise_property_id}"><i class="icon-edit"></i> <span>{$core->get_Lang('edit')}</span></a></li>
										<li><a class="clickToDeleteProperty" title="{$core->get_Lang('delete')}" href="javascript:void(0);" data="{$allItem[i].cruise_property_id}"><i class="icon-remove"></i> <span>{$core->get_Lang('delete')}</span></a></li>
									</ul>
								</div>
							</td>
						</tr>
						{/section}
						{else}<tr><td colspan="15">{$core->get_Lang('nodata')}</td></tr>
					</tbody>
					{/if}
				</table>
			</form>
			<div class="clearfix"></div>
			{$clsISO->getPaginationAdmin($totalRecord,$totalPage,$currentPage,$listPageNumber,$link_page_current,$type)}
			{/if}
		</div>
	</div>
</div>
<script type="text/javascript">
	var parent_id = '{$parent_id}';
	var type = '{$type}';
	var $SiteHasCruisesProperty = "{$clsConfiguration->getValue('SiteHasCruisesProperty')}";
</script>
<script type="text/javascript">
	var $recordPerPage = '{$recordPerPage}';
	var $currentPage = '{$currentPage}';
	var $type = '{$type}';
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
			var type = $type;
			var order = $(this).sortable("serialize")+'&update=update'+'&recordPerPage='+recordPerPage+'&currentPage='+currentPage+'&type='+type;
			$.post(path_ajax_script+"/index.php?mod="+mod+"&act=ajUpdPosSortListCruiseProperty", order, 
			
			function(html){
				vietiso_loading(0);
				location.href = REQUEST_URI;
			});
		}
	});
</script>
{/literal}
<script type="text/javascript" src="{$URL_THEMES}/cruise/jquery.cruise.js?v={$upd_version}"></script>