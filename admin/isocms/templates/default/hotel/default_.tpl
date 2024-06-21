<div class="breadcrumb">
    <strong>{$core->get_Lang('youarehere')} : </strong>
    <a href="{$PCMS_URL}" title="{$core->get_Lang('home')}">{$core->get_Lang('home')}</a>
    <a>&raquo;</a>
    <a href="{$PCMS_URL}/index.php?mod={$mod}" title="{$mod}">{$core->get_Lang('hotels')}</a>
    <!-- // -->
    <a href="javascript:window.history.back();" class="back fr">{$core->get_Lang('back')}</a>
</div>
<div class="container-fluid">
    <div class="page-title">
        <h2>{$core->get_Lang('hotels')} <a class="btn btn-success createNewHotel" href="javascript:void(0);" title="{$core->get_Lang('add')}"> <i class="icon-plus icon-white"></i></a></h2>
        <p>Chức năng quản lý danh sách các Khách sạn trong hệ thống isoCMS</p>
		<p>{$core->get_Lang('This function is intended to manage Hotels in isoCMS system')}</p>
    </div>
    <div class="clearfix"></div>
	{literal}
	<script type="text/javascript">
		$().ready(function() {
			$('.filterForm select[name=iso-city_id],.filterForm select[name=iso-star]').change(function() {
				$('#searchbtn').click();
			});
		});
	</script>
	{/literal}
	<div id="isotabs">
		<ul>
			<li class="tabchild"><a><i class="iso-option"></i> {$core->get_Lang('searchfilter')}</a></li>
		</ul>
	</div>
	<div id="isotabs_content">
		<div class="isotabbox">
			<form id="forums" method="post" action="" name="filter" class="filterForm">
				<div class="searchbox wrap" style="float:none">
					<table class="form mb10" cellpadding="3" cellspacing="3" width="100%">
						<tr>
							{if $clsConfiguration->getValue('SiteModActive_continent') eq 1}
							<td class="fieldlabel">{$core->get_Lang('continent')}</td>
							<td class="fieldarea">
								<select class="slb" style="font-size:14px; width:150px" name="iso-continent_id">
									{$clsContinent->makeSelectboxOption($continent_id)}
								</select>
							</td>
							<td class="fieldlabel">{$core->get_Lang('country')}</td>
							<td class="fieldarea">
								<select class="slb full" name="country_id" style="font-size:14px; width:150px"> 
									{$clsContinent->getOptCountryByContinent($continent_id,$country_id)}
								</select>
							</td>
							{else}
							<td class="fieldlabel">{$core->get_Lang('country')}</td>
							<td class="fieldarea">
								<select class="full" name="country_id" style="font-size:14px;width:160px">
									{$clsCountry->makeSelectboxOption($country_id, $continent_id)}
								</select>
							</td>
							{/if}
							<td class="fieldlabel">{$core->get_Lang('City/Town')}</td>
							<td class="fieldarea">
								<select class="slb full" name="city_id" style="font-size:14px; width:150px">
									{$clsCity->getSelectCity($country_id, $region_id, $city_id,'title')}
								</select>
							</td>
							<td class="fieldlabel">{$core->get_Lang('rating')}</td>
							<td class="fieldarea">
								<select class="slb slb-full" name="star" style="font-size:14px; width:150px">
									<option selected="selected"> -- {$core->get_Lang('rating')} --</option>
									{$clsISO->makeSelectNumber2(6,$star,'star,stars')}
								</select> 
							</td>
						</tr>
						<tr>
							<td class="fieldlabel">{$core->get_Lang('keyword')}</td>
							<td class="fieldarea" colspan="5">
								<input type="text" class="text full" name="keyword" value="{$keyword}" placeholder="{$core->get_Lang('search')}..." />
							</td>
						</tr>
					</table>
				</div>
				<fieldset class="submit-buttons">
					<a class="btn btn-success" href="javascript:void();" id="searchbtn">
						<i class="icon-search icon-white"></i> <span>{$core->get_Lang('search')}</span>
					</a>
					<input type="hidden" name="filter" value="filter" />
				</fieldset>
			</form>
		</div>
	</div>
	<div class="clearfix"><br /></div>
    {if $clsConfiguration->getValue('SiteHasHotelToP') eq 1}
     <div style="padding:6px; border:0px dashed #F00; margin:10px 0 0;">
       Top hotels will be shown on website in category "Hotels & Resort "
       <a class="btn iso-button-small" style="color:#FFF !important" href="{$PCMS_URL}?admin&mod=hotel&act=hoteltop&fromid=COUNTRY&target_id=1" title="Top Hotels">Top Hotels</a>
    </div>
    {/if}
    <div class="hastable">
		{if $allItem[0].hotel_id}
		<div class="statistical mb5">
			<table width="100%" border="0" cellpadding="3" cellspacing="0">
				<tr>
					<td width="50%" align="left">&nbsp;</td>
					<td width="50%" align="right">
						{$core->get_Lang('Record/page')}:
						{$clsISO->getRecordPerPage2($recordPerPage,$totalRecord,$mod,$pUrl)}
						<a class="btn btn-danger btn-delete-all" clsTable="Hotel" style="display:none">
							<i class="icon-remove icon-white"></i> <span>{$core->get_Lang('Delete Options')}</span>
						</a>
					</td>
					<td><a href="{$PCMS_URL}/?mod={$mod}&act=setting" class="btn btn-danger" title="{$core->get_Lang('settings')}"><i class="icon-cog icon-white"></i> <span>{$core->get_Lang('settings')}</span> </a></td>
				</tr>
			</table>
		</div>
		<table cellspacing="0" class="tbl-grid full-width table_responsive">
			<thead>
				<tr>
					<th class="gridheader" style="width:40px"><input id="check_all" type="checkbox" /></th>
					<th class="gridheader hiden767" style="width:60px">{$core->get_Lang('ID')}</th>
					<th style="text-align:left;" class="gridheader name_responsive"><strong>{$core->get_Lang('nameofhotels')}</strong></th>
					<th class="gridheader hiden_responsive" style="width:120px"><strong>{$core->get_Lang('rating')}</strong></th>
					<th class="gridheader hiden_responsive" style="width:70px;" align="right"><strong>{$core->get_Lang('Public')}</strong></th>
					<th class="gridheader hiden_responsive" style="text-align:center; width:100px"><strong>{$core->get_Lang('pricefrom')}</strong></th>
					<th class="gridheader hiden_responsive" style="text-align:center; width:70px;"><strong>{$core->get_Lang('func')}</strong></th>
				</tr>
			</thead>
			<tbody id="SortAble">
				{section name=i loop=$allItem}
				<tr style="cursor:move" id="order_{$allItem[i].hotel_id}" class="{cycle values="row1,row2"}">
					<th class="check_40"><input name="p_key[]" class="chkitem" type="checkbox" value="{$allItem[i].hotel_id}" /></th>
					<td class="index hiden767">{$allItem[i].hotel_id}</td>
					<td class="name_service">
						<strong class="title" title="{if $clsClassTable->getOneField('is_online',$allItem[i].hotel_id) eq 0}{$core->get_Lang('Hotel PRIVATE')}{/if}">{$clsClassTable->getTitle($allItem[i].hotel_id)}</strong>
                {if $clsClassTable->getOneField('is_online',$allItem[i].hotel_id) eq 0}<span style="color:red;" title="{$core->get_Lang('Hotel PRIVATE')}">[P]</span>{/if}
						<div class="clearfix"></div>
						<div class="address">
							<i class="fa fa-map-marker"></i>  {$clsClassTable->getAddress($allItem[i].hotel_id)}
						</div>
						{if $allItem[i].is_trash eq '1'}<span class="fr" style="color:#CCC">{$core->get_Lang('intrash')}</span>{/if}
						<button type="button" class="toggle-row inline_block767" style="display:none"><i class="fa fa-caret fa-caret-down"></i></button>
					</td>
					<td class="block_responsive border_top_responsive" data-title="{$core->get_Lang('rating')}" style="text-align:center"><img src="{$clsClassTable->getImageStar($clsClassTable->getStar($allItem[i].hotel_id))}" /></td>
					<td class="block_responsive" data-title="{$core->get_Lang('Public')}" style="text-align:center">
						<a href="javascript:void(0);" class="SiteClickPublic" clsTable="Hotel" pkey="hotel_id" sourse_id="{$allItem[i].hotel_id}" rel="{$clsClassTable->getOneField('is_online',$allItem[i].hotel_id)}" title="{$core->get_Lang('Click to change status')}">
							{if $clsClassTable->getOneField('is_online',$allItem[i].hotel_id) eq '1'}
							<i class="fa fa-check-circle green"></i>
							{else}
							<i class="fa fa-minus-circle red"></i>
							{/if}
						</a>
					</td>
					<td class="block_responsive" data-title="{$core->get_Lang('pricefrom')}" style="text-align:right; white-space:nowrap">
						<b class="format_price" style="font-size:13px">{$clsClassTable->getPrice($allItem[i].hotel_id)} </b>
					</td>
					<td class="block_responsive" data-title="{$core->get_Lang('func')}" align="center" style="vertical-align: middle; text-align:center; width: 40px; white-space: nowrap;">
						<div class="btn-group">
							<button class="btn iso-button-standard dropdown-toggle" type="button" data-toggle="dropdown"> <i class="icon-cog"></i> <span class="caret"></span></button>
							<ul class="dropdown-menu" style="right:0px !important">
								{if $allItem[i].is_trash eq '0'}
								<li><a href="{$DOMAIN_NAME}{$clsClassTable->getLink($allItem[i].hotel_id)}" target="_blank" title="{$core->get_Lang('view')}"><i class="icon-eye-open"></i> <span>{$core->get_Lang('view')}</span></a></li>
								<li><a title="{$core->get_Lang('edit')}" href="{$PCMS_URL}/?mod={$mod}&act=edit&hotel_id={$core->encryptID($allItem[i].hotel_id)}"><i class="icon-edit"></i> <span>{$core->get_Lang('edit')}</span></a></li>
								<li><a title="{$core->get_Lang('trash')}" href="{$PCMS_URL}/?mod={$mod}&act=trash&hotel_id={$core->encryptID($allItem[i].hotel_id)}{$pUrl}&page={$currentPage}"><i class="icon-trash"></i> <span>{$core->get_Lang('trash')}</span></a></li>
								{else}
								<li><a title="{$core->get_Lang('restore')}" href="{$PCMS_URL}/?mod={$mod}&act=restore&hotel_id={$core->encryptID($allItem[i].hotel_id)}{$pUrl}&page={$currentPage}"><i class="icon-refresh"></i> <span>{$core->get_Lang('restore')}</span></a></li>
								<li><a title="{$core->get_Lang('delete')}" class="confirm_delete" href="{$PCMS_URL}/?mod={$mod}&act=delete&hotel_id={$core->encryptID($allItem[i].hotel_id)}{$pUrl}&page={$currentPage}"><i class="icon-remove"></i> <span>{$core->get_Lang('delete')}</span></a></li>
								{/if}
								{if $clsConfiguration->getValue('SiteHasDuplicate_Hotels')}
								<li><a title="{$core->get_Lang('duplicate')}" class="ajDuplicateHotel" hotel_id="{$allItem[i].hotel_id}"><i class="icon-share"></i> <span>{$core->get_Lang('Duplicate')}</span></a></li>
								{/if}
							</ul>
						</div>
					</td>
				</tr>
				{/section}
			</tbody>
		</table>
		<div class="clearfix"></div>
		{$clsISO->getPaginationAdmin($totalRecord,$totalPage,$currentPage,$listPageNumber,$link_page_current,$type)}
		{else}{$core->get_Lang('nodata')}{/if}
	</div>
</div>
<script type="text/javascript">
    var country_id = "{$country_id}";
    var area_id = "{$area_id}";
    var city_id = "{$city_id}";
	var $recordPerPage = '{$recordPerPage}';
	var $currentPage = '{$currentPage}';
</script>
<script type="text/javascript" src="{$URL_THEMES}/tour/jquery.tour.js"></script>
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
			$.post(path_ajax_script+"/index.php?mod=hotel&act=ajUpdPosSortHotel", order, 
			
			function(html){
				vietiso_loading(0);
				location.href = REQUEST_URI;
			});
		}
	});
</script>
{/literal}
<script type="text/javascript" src="{$URL_THEMES}/hotel/jquery.hotel.js?v={$upd_version}"></script>
