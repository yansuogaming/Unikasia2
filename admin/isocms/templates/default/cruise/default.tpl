<div class="page_container">
	<div class="page-title d-flex">
		<div class="title">
			<h2>{$core->get_Lang('Cruise')} <div class="info_module" data-toggle="tooltip" data-placement="right" title="Chức năng quản lý danh sách các {$core->get_Lang('Cruise')} trong hệ thống isoCMS">i</div>
			</h2>
			<p>{$number_all} {$core->get_Lang('cruise')}</p>
		</div>
		<div class="button_right">
			<a class="btn btn-main btn-addnew createNewCruise" title="{$core->get_Lang('Add cruise')}">{$core->get_Lang('Add cruise')}</a>
			<div class="btn btn-setting"><a href="{$PCMS_URL}/?mod={$mod}&act=setting" title="{$core->get_Lang('Setting')}"><i class="fa fa-cog" aria-hidden="true"></i></a></div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="wrap">
			<div class="filter_box">
				<form id="forums" method="post" class="filterForm" action="">
					<div class="form-group form-keyword">
						<input class="form-control" type="text" name="keyword" value="{$keyword}" placeholder="{$core->get_Lang('search')}..." />
					</div>

					<div class="form-group form-country">
						<select name="cruise_cat_id" class="form-control" data-width="100%">
							{$clsCruiseCat->makeSelectboxOption($cruise_cat_id,0)}
						</select>
					</div>
					<div class="form-group">
						<select name="country_id" class="form-control" data-width="100%">
							{$clsCountry->makeSelectboxOption($country_id)}
						</select>
					</div>
					<div class="form-group form-button">
						<button type="submit" class="btn btn-main" id="findtBtn">Tìm kiếm</button>
						<input type="hidden" name="filter" value="filter" />
					</div>
					<div class="form-group form-button hidden">
						<button type="button" class="btn btn-export" id="btn_export">Export</button>
					</div>
					<div class="form-group form-button">
						<a class="btn btn-delete-all" id="btn_delete" clsTable="Cruise" style="display:none">
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
					<table cellspacing="0" class="table tbl-grid table-striped table_responsive" width="100%">
						<thead>
							<tr>
								<th class="gridheader" style="width:40px;text-align:left"><input id="check_all" type="checkbox" class="el-checkbox" /></th>
								<th class="gridheader name_responsive" style="text-align:left" colspan="2"><strong>{$core->get_Lang('Cruise Name')}</strong></th>
								<th class="gridheader text-left hiden_responsive"><strong>{$core->get_Lang('duration')}</strong></th>
								<th class="gridheader text-center hiden_responsive" style="width: 120px"><strong>{$core->get_Lang('status')}</strong></th>
								<th class="gridheader text-center hiden_responsive" width="40px"></th>
							</tr>
						</thead>
						{if $allItem[0].cruise_id ne ''}
						<tbody>
							{section name=i loop=$allItem}
							{assign var = cruise_id value = $allItem[i].cruise_id}
							{assign var=nameServices value=$clsClassTable->getTitle($cruise_id)}
							{assign var=oneUserCreator value=$clsUser->getOne($allItem[i].user_id,'first_name,last_name')}
							{assign var=oneUserUpdate value=$clsUser->getOne($allItem[i].user_id_update,'first_name,last_name')}
							<tr id="order_{$cruise_id}" class="{cycle values=" row1,row2"}">
								<td class="check_40 has-checkbox text-center"><input name="p_key[]" class="chkitem el-checkbox" type="checkbox" value="{$cruise_id}" /></td>
								</td>
								<td class="index hiden767"><img src="{$clsClassTable->getImage($cruise_id,105,69)}" alt="Image" width="105" height="69" onerror="this.src='{$URL_IMAGES}/none_image.png'" /></td>
								<td class="text-left name_service">
									<div class="box_name_services">
										<p class="txt_name_services"><a href="{$PCMS_URL}/cruise/insert/{$cruise_id}/overview" title="{$nameServices}"><span class="txt_tour_id">#{$cruise_id}</span> {if $nameServices}- {$nameServices}{/if}</a></p>
										<p class="txt_info"><span>{$core->get_Lang("Created")}: {$oneUserCreator.first_name} {$oneUserCreator.last_name} {$clsISO->formatDateTime($allItem[i].reg_date,"d/m/Y H:i",0)}</span> | <span>{$core->get_Lang("Update")}: {$oneUserUpdate.first_name} {$oneUserUpdate.last_name} {$clsISO->formatDateTime($allItem[i].upd_date,"d/m/Y H:i",0)}</span></p>
									</div>
									<button type="button" class="toggle-row inline_block767" style="display:none"> <i class="fa fa-caret fa-caret-down"></i> </button>
								</td>
								<td class="text-left block_responsive border_top_responsive" style="white-space:nowrap" data-title="{$core->get_Lang('duration')}">
									{assign var=cruise_itinerary value=$clsCruiseItinerary->getItinerary($cruise_id)}

									{section name=j loop=$cruise_itinerary}
									<p>{$clsCruiseItinerary->getNumberDay($cruise_itinerary[j].cruise_itinerary_id)}</p>
									{/section}
								</td>
								<td class="block_responsive" style="text-align:center" data-title="{$core->get_Lang('status')}">
									<a href="javascript:void(0);" class="SiteClickPublic" clsTable="Cruise" pkey="cruise_id" sourse_id="{$allItem[i].cruise_id}" rel="{$clsClassTable->getOneField('is_online',$allItem[i].cruise_id)}" title="{$core->get_Lang('Click to change status')}">
										{if $clsClassTable->getOneField('is_online',$allItem[i].cruise_id) eq '1'}
										<i class="fa fa-check-circle green"></i>
										{else}
										<i class="fa fa-minus-circle red"></i>
										{/if}
									</a>
								</td>
								<td class="block_responsive text-center" style="white-space:nowrap;" data-title="{$core->get_Lang('func')}">
									<div class="d-flex align-items-center" style="gap:5px">
										<a data-href="{$DOMAIN_NAME}{$clsClassTable->getLink($cruise_id)}" title="{$nameServices}" class="btn_preview_tour icon_action edit_review" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
												<path d="M10 12.5C11.3807 12.5 12.5 11.3807 12.5 10C12.5 8.61929 11.3807 7.5 10 7.5C8.61929 7.5 7.5 8.61929 7.5 10C7.5 11.3807 8.61929 12.5 10 12.5Z" fill="#1756C8" />
												<path d="M19.3375 9.7875C18.6024 7.88603 17.3262 6.24164 15.6668 5.05755C14.0073 3.87347 12.0372 3.20161 10 3.125C7.96283 3.20161 5.99275 3.87347 4.33326 5.05755C2.67377 6.24164 1.39761 7.88603 0.662509 9.7875C0.612863 9.92482 0.612863 10.0752 0.662509 10.2125C1.39761 12.114 2.67377 13.7584 4.33326 14.9424C5.99275 16.1265 7.96283 16.7984 10 16.875C12.0372 16.7984 14.0073 16.1265 15.6668 14.9424C17.3262 13.7584 18.6024 12.114 19.3375 10.2125C19.3872 10.0752 19.3872 9.92482 19.3375 9.7875ZM10 14.0625C9.19652 14.0625 8.41108 13.8242 7.743 13.3778C7.07493 12.9315 6.55423 12.297 6.24675 11.5547C5.93927 10.8123 5.85882 9.99549 6.01557 9.20745C6.17232 8.4194 6.55924 7.69553 7.12739 7.12738C7.69554 6.55923 8.41941 6.17231 9.20745 6.01556C9.9955 5.85881 10.8123 5.93926 11.5547 6.24674C12.297 6.55422 12.9315 7.07492 13.3779 7.743C13.8242 8.41107 14.0625 9.19651 14.0625 10C14.0609 11.0769 13.6323 12.1093 12.8708 12.8708C12.1093 13.6323 11.0769 14.0608 10 14.0625Z" fill="#1756C8" />
											</svg></a>
										<div class="btn-group">
											<button class="btn btn_dropdown dropdown-toggle" type="button" data-toggle="dropdown">
												<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
											</button>
											<ul class="dropdown-menu">
												{if $allItem[i].is_trash eq '0'}
												<li><a title="{$core->get_Lang('edit')}" href="{$PCMS_URL}/cruise/insert/{$cruise_id}/overview"><i class="icon-edit"></i> <span>{$core->get_Lang('edit')}</span></a></li>
												<li><a title="{$core->get_Lang('trash')}" href="{$PCMS_URL}/?mod={$mod}&act=trash&cruise_id={$core->encryptID($cruise_id)}{$pUrl}&page={$currentPage}"><i class="icon-trash"></i> <span>{$core->get_Lang('trash')}</span></a></li>
												{else}
												<li><a title="{$core->get_Lang('edit')}" href="{$PCMS_URL}/cuise/insert/{$cruise_id}/overview"><i class="icon-edit"></i> <span>{$core->get_Lang('edit')}</span></a></li>
												<li><a title="{$core->get_Lang('restore')}" href="{$PCMS_URL}/?mod={$mod}&act=restore&cruise_id={$core->encryptID($cruise_id)}{$pUrl}&page={$currentPage}"><i class="icon-refresh"></i> <span>{$core->get_Lang('restore')}</span></a></li>
												<li><a title="{$core->get_Lang('delete')}" class="confirm_delete" href="{$PCMS_URL}/?mod={$mod}&act=delete&cruise_id={$core->encryptID($cruise_id)}{$pUrl}&page={$currentPage}"><i class="icon-remove"></i> <span>{$core->get_Lang('delete')}</span></a></li>
												{/if}
											</ul>
										</div>
									</div>

								</td>
							</tr>
							{/section}
						</tbody>
						{else}<tr>
							<td colspan="15">{$core->get_Lang('nodata')}!</td>
						</tr>{/if}
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
	var $cat_id = '{$cat_id}';
	var $city_id = '{$city_id}';
	var $departure_point_id = '{$departure_point_id}';
	var $is_set = '{$is_set}';
	var $recordPerPage = '{$recordPerPage}';
	var $currentPage = '{$currentPage}';
</script>
<script type="text/javascript" src="{$URL_THEMES}/cruise/jquery.cruise.js?v={$upd_version}"></script>
{literal}
<script type="text/javascript">
	$("#SortAble").sortable({
		opacity: 0.8,
		cursor: 'move',
		start: function() {
			vietiso_loading(1);
		},
		stop: function() {
			vietiso_loading(0);
		},
		update: function() {
			var recordPerPage = $recordPerPage;
			var currentPage = $currentPage;
			var order = $(this).sortable("serialize") + '&update=update' + '&recordPerPage=' + recordPerPage + '&currentPage=' + currentPage;
			$.post(path_ajax_script + "/index.php?mod=cruise&act=ajUpdPosSortCruise", order,

				function(html) {
					vietiso_loading(0);
					location.href = REQUEST_URI;
				});
		}
	});
</script>
{/literal}