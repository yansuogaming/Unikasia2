<div class="breadcrumb">
	<strong>{$core->get_Lang('youarehere')} : </strong>
    <a href="{$PCMS_URL}" title="{$core->get_Lang('home')}">{$core->get_Lang('home')}</a>
    <a>&raquo;</a>
    <a href="{$curl}">{$clsClassTable->getTextByType($type)}</a>
    <!--// -->
    <a href="javascript:window.history.back();" class="back fr">{$core->get_Lang('back')}</a>
</div>
<div class="container-fluid">
    <div class="page-title">	
        <h2>{$clsClassTable->getTextByType($type)}	
			<a class="btn btn-success clickToAddPropertyss" href="javascript:void(0);" style="padding:4px">
				<i class="icon-plus icon-white"></i>
			</a>
		</h2>
        <p>Chức năng quản lý danh sách các {$clsClassTable->getTextByType($type)} trong hệ thống isoCMS</p>
		<p>This function is intended to manage {$clsClassTable->getTextByType($type)} in isoCMS system</p>
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
    <form id="forums" method="post" action="">
        <div class="ui-action">
            <div class="wrap">
                <div class="filterbox filterbox-border" style="width:100%">
                    <div class="wrap">
                        <div class="searchbox" style="float:left !important; width:100%">
                            <input style="padding:6px;" type="text" name="keyword" value="{$keyword}" placeholder="{$core->get_Lang('search')}" />
                            <a class="btn btn-success fileinput-button" href="javascript:void(0);" id="searchBtn" style=" padding:7px">
                                <i class="icon-search icon-white"></i>
                            </a>
                        </div>
						{if $type eq 'UsefulInformation'}
						<div class="group_buttons fr"> <a href="{$PCMS_URL}/index.php?mod=cruise&act=property&type=GroupUsefulInformation" class="btn btn-success" title="{$core->get_Lang('Group UsefulInformation')}"><i class="icon-list icon-white"></i> <span>{$core->get_Lang('Group UsefulInformation')}</span> </a></div>
						{elseif $type eq 'NearestEssentials'}
						<div class="group_buttons fr"> <a href="{$PCMS_URL}/index.php?mod=cruise&act=property&type=GroupNearestEssentials" class="btn btn-success" title="{$core->get_Lang('Group Nearest Essentials')}"><i class="icon-list icon-white"></i> <span>{$core->get_Lang('Group Nearest Essentials')}</span> </a></div>
						{elseif $type eq 'CruiseFacilities'}
						<div class="group_buttons fr"> <a href="{$PCMS_URL}/index.php?mod=cruise&act=property&type=GroupCruiseFacilities" class="btn btn-success" title="{$core->get_Lang('Group Cruise Facilities')}"><i class="icon-list icon-white"></i> <span>{$core->get_Lang('Group Cruise Facilities')}</span> </a></div>
						{elseif $type eq 'Benefits'}
						<div class="group_buttons fr"> <a href="{$PCMS_URL}/index.php?mod=cruise&act=property&type=GroupBenefits" class="btn btn-success" title="{$core->get_Lang('Group Benefits')}"><i class="icon-list icon-white"></i> <span>{$core->get_Lang('Group Benefits')}</span> </a></div>
						{else}
						{/if}
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" name="filter" value="filter" />
    </form>
    <div class="clearfix"></div>
	<div class="statistical mb5">
		<table width="100%" border="0" cellpadding="3" cellspacing="0">
			<tr>
				<td width="50%" align="left">&nbsp;</td>
				<td width="50%" align="right">
					{$core->get_Lang('Record/page')}:
					{$clsISO->getRecordPerPage($recordPerPage,$totalRecord,$mod,$act,$type)}
					<a class="btn btn-danger btn-delete-all" clsTable="CruiseProperty" style="display:none">
						<i class="icon-remove icon-white"></i> <span>{$core->get_Lang('Delete Options')}</span>
					</a>
				</td>
			</tr>
		</table>
	</div>
    <form id="listItem" method="post" action="">
        <input type="hidden" value="delete" name="delete" />
        <table cellspacing="0" class="tbl-grid table-striped table_responsive tblAction full-width" id="tblLanguage">
            <tr>
				<td class="gridheader"><input id="check_all" type="checkbox" /></td>
                <td class="gridheader"><strong>{$core->get_Lang('ID')}</strong></td>
                <td class="gridheader" style="text-align:left"><strong>{$core->get_Lang('title')}</strong></td>
				{if $type eq 'Conditions'}
				<td class="gridheader" style="text-align:left; width:120px"><strong>{$core->get_Lang('Type Group')}</strong></td>
				{/if}
                <td class="gridheader" style="text-align:center;"><strong>{$core->get_Lang('func')}</strong></td>
            </tr>
            {if $allItem[0].cruise_property_id}
            <tbody id="SortAble">
				{section name=i loop=$allItem}
				<tr style="cursor:move" id="order_{$allItem[i].cruise_property_id}" class="{if $smarty.section.i.index%2 eq 0}row1{else}row2{/if}">
					<td class="index"><input name="p_key[]" class="chkitem" type="checkbox" value="{$allItem[i].cruise_property_id}" /></td>
					<td class="index">{$allItem[i].cruise_property_id}</td>
					<td>
						<a class="clickToEditProperty" href="javascript:void(0);" data="{$allItem[i].cruise_property_id}">
							<strong class="title">
								{$clsClassTable->getTitle($allItem[i].cruise_property_id)}
							</strong>
						</a>
					</td>
					{if $type eq 'Conditions'}
					<td>
						{$clsClassTable->getOneField('type_group',$allItem[i].cruise_property_id)}
					</td>
					{/if}
					<td align="center" style="vertical-align: middle; text-align:center; width: 40px; white-space: nowrap;">
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