{assign var=day value=$core->get_Lang('day')}
{assign var=days value=$core->get_Lang('days')}
<div class="page_container">
	<div class="page-title d-flex">
        <div class="title">
			<h2>{$core->get_Lang('Tours')} <div class="info_module" data-toggle="tooltip" data-placement="right" title="Chức năng quản lý danh sách các tours trong hệ thống isoCMS">i</div>
			</h2>
			<p>{$number_all} {$core->get_Lang('tours')}</p>
		</div>
		<div class="button_right">
			{if $clsISO->checkConnTMS()}
				{if 0}
				<a class="btn btn-success syncTourAPI" href="{$PCMS_URL}/?mod={$mod}&act=syncTourAPI" title="{$core->get_Lang('syncTourAPIfromTMS')}">{$core->get_Lang('syncTourAPIfromTMS')} <i class="fa fa-reply-all" aria-hidden="true"></i></a>
				<a class="btn btn-primary syncTourAPItoTMS" href="{$PCMS_URL}/?mod={$mod}&act=syncTourAPItoTMS" title="{$core->get_Lang('syncTourAPItoTMS')}">{$core->get_Lang('syncTourAPItoTMS')} <i class="fa fa-share" aria-hidden="true"></i></a>
				{/if}
				<a class="btn btn-success open_syncTourAPI" syncTourAPI href="javascript:void(0)" title="{$core->get_Lang('syncTourAPIfromTMS')}">{$core->get_Lang('syncTourAPIfromTMS')} <i class="fa fa-reply-all" aria-hidden="true"></i></a>
				<a class="btn btn-primary open_syncTourtoTMS" syncTourAPItoTMS href="javascript:void(0)" title="{$core->get_Lang('syncTourAPItoTMS')}">{$core->get_Lang('syncTourAPItoTMS')} <i class="fa fa-share" aria-hidden="true"></i></a>
		   {/if}
			<a class="btn btn-main btn-addnew {if $is_day_trip eq '1'}add_new_day_trip{else}add_new_tour{/if}" title="{$core->get_Lang('addtours')}">{$core->get_Lang('addtours')}</a>
			<div class="btn btn-setting"><a href="{$PCMS_URL}/?mod={$mod}&act=setting" title="{$core->get_Lang('Setting')}"><i class="fa fa-cog" aria-hidden="true"></i></a></div>
		</div>
    </div>
	<div class="container-fluid">
		<div class="wrap">
			<div class="statistical mb5">
			<div class="filter_box">
				<form id="forums" method="post" class="filterForm" action="">
					<div class="form-group form-keyword">
						<input class="form-control" type="text" name="keyword" value="{$keyword}" placeholder="{$core->get_Lang('search')}..." />
					</div>
					{if $clsISO->getCheckActiveModulePackage($package_id,$mod,'group ','default') && $_LANG_ID eq 'vn'}
					<div class="form-group">
						<select name="tour_group_id" class="form-control iso-selectbox" data-width="100%" tp="ajax" id="slb_TourGroup">
							{$clsTourGroup->makeSelectboxOption($tour_group_id)}
						</select>
					</div>
					{/if}
					<div class="form-group">
						<select name="cat_id" class="form-control iso-selectbox" data-width="100%" id="slb_Category">
							{$clsTourCat->makeSelectboxOption($tour_group_id, $cat_id, $is_set)}
						</select>
					</div>
					<div class="form-group">
						<select name="number_day" class="form-control iso-selectbox" data-width="100%">
							 <option value="0">{$core->get_Lang('Itinerary')}</option>
							 {$clsISO->makeSelectNumber2(30,$number_day,"$day,$days")}
						</select>
					</div>
					<div class="form-group form-button">
						<button type="submit" class="btn btn-main" id="findtBtn">Tìm kiếm</button>
						<input type="hidden" name="filter" value="filter" />
					</div>
					{if $package_id==4}
					<div class="form-group form-button">
						<button type="button" class="btn btn-export" id="btn_export">Export</button>
					</div>
					{/if}
					<div class="form-group form-button">
						<a class="btn btn-delete-all" id="btn_delete" clsTable="Tour" style="display:none">
							{$core->get_Lang('Delete')}
						</a>
					</div>
				</form>	
				<div class="record_per_page">
					<label>{$core->get_Lang('Record/page')}</label>
					{$clsISO->getRecordPerPage2($recordPerPage,$totalRecord,$mod,$pUrl)}
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="tabbox">
				<div class="hastable">
					{assign var = SiteHasCat_Tours value = $clsISO->getCheckActiveModulePackage($package_id,$mod,'category ','default')}
					{assign var = SiteHasDuplicate_Tours value = $clsConfiguration->getValue('SiteHasDuplicate_Tours')}
					<table cellspacing="0" class="table table-striped tbl-grid table_responsive" width="100%">
						<thead><tr>
							<th class="gridheader" style="width:40px"><input id="check_all" type="checkbox" class="el-checkbox" /></th>
							<th class="gridheader hiden767" style="width:70px">{$core->get_Lang('Image')}</th>
							<th class="gridheader hiden767" style="width:80px"><strong>ID</strong></th>
							<th class="gridheader name_responsive" style="text-align:left"><strong>{$core->get_Lang('nameoftrips')}</strong></th>
							{if $SiteHasCat_Tours}
							<th class="gridheader text-left hiden_responsive" width="16%"><strong>{$core->get_Lang('travelstyles')}</strong></th>
							{/if}
							<th class="gridheader text-left hiden_responsive"><strong>{$core->get_Lang('duration')}</strong></th>
							<th class="gridheader text-left hiden_responsive" width="6%"><strong>{$core->get_Lang('pricefrom')}</strong></th>
							<th class="gridheader text-left hiden_responsive"><strong>{$core->get_Lang('public')}</strong></th>
							<th class="gridheader text-center hiden_responsive" width="40px"></th>
						</tr></thead>
						{if $allItem[0].tour_id ne ''}
						<tbody id="SortAble">
							{section name=i loop=$allItem}
							{assign var = tour_id value = $allItem[i].tour_id}
							<tr style="cursor:move" id="order_{$tour_id}" >
								<td class="check_40 has-checkbox text-center"><input name="p_key[]" class="chkitem el-checkbox" type="checkbox" value="{$tour_id}" /></td>
								<td class="index hiden767"><img src="{$clsClassTable->getImage($tour_id,60,40)}" alt="Image" width="60"/></td>
								<td class="index hiden767" data-title="ID"><span>{$tour_id}</span></td>
								<td class="text-left name_service">
									<span  class="title text-link gotoLink" href="{$PCMS_URL}/tour/edit/{$tour_id}/overview" title="{if $allItem[i].is_online eq 0}{$core->get_Lang('Tour PRIVATE')}{/if}">{$clsClassTable->getTitle($tour_id)}</span>
									{if $allItem[i].is_online eq 0}
									<span class="text-red" title="{$core->get_Lang('Tour PRIVATE')}">[P]</span>{/if}
									{if $allItem[i].is_trash eq '1'}
									<span class="pull-right text-muted">{$core->get_Lang('intrash')}</span>
									{/if}
									<button type="button" class="toggle-row inline_block767" style="display:none">
										<i class="fa fa-caret fa-caret-down"></i>
									</button>
								</td>
								{if $SiteHasCat_Tours}
								<td class="block_responsive" data-title="{$core->get_Lang('travelstyles')}">
									<span>{$clsClassTable->getListCatName($tour_id)}</span>
								</td>
								{/if}
								<td class="text-left block_responsive border_top_responsive" style="white-space:nowrap" data-title="{$core->get_Lang('duration')}">
									{$clsClassTable->getTripDuration2020($tour_id,'/ ')}
								</td>
								<td class="block_responsive" style="text-align:right; white-space:nowrap" data-title="{$core->get_Lang('pricefrom')}">
									{if $clsClassTable->getTripPriceNewPro2020($tour_id,$now_day,0,'value') gt '0'}
										<span class="format_price">
										{$clsClassTable->getTripPriceNewPro2020($tour_id,$now_day,0,'value')} <u>{$clsISO->getShortRate()}</u>
										</span>
									{else}
										<span class="format_price">
										0 <u>{$clsISO->getShortRate()}<u>
										</span>
									{/if}
								</td>
								<td class="block_responsive" style="text-align:center" data-title="{$core->get_Lang('public')}">
									<a href="javascript:void(0);" class="SiteClickPublic" clsTable="Tour" pkey="tour_id" sourse_id="{$tour_id}" rel="{$allItem[i].is_online}" title="{$core->get_Lang('Click to change status')}">
										{if $allItem[i].is_online eq '1'}
										<i class="fa fa-check-circle green"></i>
										{else}
										<i class="fa fa-minus-circle red"></i>
										{/if}
									</a>
								</td>
								<td class="block_responsive text-center" style="white-space:nowrap;" data-title="{$core->get_Lang('func')}">
									<div class="btn-group">
										<button class="btn btn_dropdown dropdown-toggle" type="button" data-toggle="dropdown">
											<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
										</button>
										<ul class="dropdown-menu">
											{if $allItem[i].is_trash eq '0'}
											<li><a href="{$DOMAIN_NAME}{$clsClassTable->getLink($tour_id)}" target="_blank" title="{$core->get_Lang('view')}"><i class="icon-eye-open"></i> <span>{$core->get_Lang('view')}</span></a></li>
											<li><a title="{$core->get_Lang('edit')}" href="{$PCMS_URL}/tour/edit/{$tour_id}/overview"><i class="icon-edit"></i> <span>{$core->get_Lang('edit')}</span></a></li>
											<li><a title="{$core->get_Lang('trash')}" href="{$PCMS_URL}/?mod={$mod}&act=trash&tour_id={$core->encryptID($tour_id)}{$pUrl}&page={$currentPage}"><i class="icon-trash"></i> <span>{$core->get_Lang('trash')}</span></a></li>
											{else}
											<li><a title="{$core->get_Lang('edit')}" href="{$PCMS_URL}/tour/insert/{$tour_id}/overview"><i class="icon-edit"></i> <span>{$core->get_Lang('edit')}</span></a></li>
											<li><a title="{$core->get_Lang('restore')}" href="{$PCMS_URL}/?mod={$mod}&act=restore&tour_id={$core->encryptID($tour_id)}{$pUrl}&page={$currentPage}"><i class="icon-refresh"></i> <span>{$core->get_Lang('restore')}</span></a></li>
											<li><a title="{$core->get_Lang('delete')}" class="confirm_delete" href="{$PCMS_URL}/?mod={$mod}&act=delete&tour_id={$core->encryptID($tour_id)}{$pUrl}&page={$currentPage}"><i class="icon-remove"></i> <span>{$core->get_Lang('delete')}</span></a></li>
											{/if}
											{if $SiteHasDuplicate_Tours}
											<li><a title="{$core->get_Lang('duplicate')}" class="ajDuplicateTour" tour_id="{$tour_id}" href="#"><i class="icon-share"></i> <span>{$core->get_Lang('Duplicate')}</span></a></li>
											{/if}
											{if $clsISO->checkConnTMS() && (!empty($allItem[i].yield_id) || !empty($allItem[i].tms_code))}
											<li><a title="{$core->get_Lang('syncTourAPIfromTMS')}" href="{$PCMS_URL}/?mod={$mod}&act=syncOneTourAPI&yield_id={$core->encryptID($allItem[i].yield_id)}&tour_id={$core->encryptID($allItem[i].tour_id)}"><i class="icon-share"></i> <span>{$core->get_Lang('syncTourAPIfromTMS')}</span></a></li>
											{/if}
										</ul>
									</div>
								</td>
							</tr>
							{/section}
						</tbody>
						{else}<tr><td colspan="15">{$core->get_Lang('nodata')}!</td></tr>{/if}
					</table>
				</div>
			</div>
			<div class="clearfix"></div>
			{$clsISO->getPaginationAdmin($totalRecord,$totalPage,$currentPage,$listPageNumber,$link_page_current,$type)}
		</div>
	</div>
</div>
<script type="text/javascript">
	var $boxID = "";
	var $tour_group_id = '{$tour_group_id}';
	var $tour_type_id = '{$tour_type_id}';
	var $cat_id = '{$cat_id}';
	var $city_id= '{$city_id}';
	var $departure_point_id= '{$departure_point_id}';
	var $is_set= '{$is_set}';
	var $recordPerPage = '{$recordPerPage}';
	var $currentPage = '{$currentPage}';
	var $listcatID  = '';
</script>
{literal}
<style type="text/css">
	.select2-container .select2-selection--single{
		height:50px;
	}
	.select2-container--default .select2-selection--single .select2-selection__rendered{
		line-height:50px;
	}
	.select2-container--default .select2-selection--single .select2-selection__arrow{
		width:30px;
		height:50px;
	}
</style>
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
			$.post(path_ajax_script+"/index.php?mod=tour&act=ajUpdPosSortTour", order,
			function(html){
				vietiso_loading(0);
				location.href = REQUEST_URI;
			});
		}
	});
</script>
{/literal}
