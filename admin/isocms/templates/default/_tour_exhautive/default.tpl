<div class="breadcrumb">
	<strong>{$core->get_Lang('youarehere')} : </strong>
    <a href="{$PCMS_URL}" title="{$core->get_Lang('home')}">{$core->get_Lang('home')}</a>
    <a>&raquo;</a>
    <a href="{$curl}" title="{$mod}">{$core->get_Lang('tours')}</a>    
    <!-- Back-->
    <a href="javascript:window.history.back();" class="back fr">{$core->get_Lang('back')}</a>
</div>
<div class="container-fluid">
    <div class="page-title">	
        <h2>
       {$core->get_Lang('tours')} <a class="btn btn-success add_new_tour" title="{$core->get_Lang('addtours')}"> <i class="icon-plus icon-white"></i></a>
        </h2>
        <p>Chức năng quản lý danh sách các tours trong hệ thống isoCMS</p>
		<p>{$core->get_Lang('This function is intended to manage tours in isoCMS system')}</p>
    </div>
    <div id="isotabs">
		 <ul>
            <li class="tabchild"><a><i class="iso-option"></i> {$core->get_Lang('searchfilter')}</a></li>
        </ul>
	</div>
    <div id="isotabs_content">
		<div class="isotabbox">
			<form id="forums" method="post" class="filterForm" action="">
				<div class="searchbox wrap" style="float:none">
					<table class="form" cellpadding="3" cellspacing="3">
						<tr>
                            <td class="fieldlabel">{$core->get_Lang('Country')}</td>
                            <td class="fieldarea">
                                <select class="slb" onchange="_reload()" id="slb_Country"  name="country_id" style="width:200px">
                                	<option value="0">{$core->get_Lang('Select Country')}</option>
                                    {section name=i loop=$lstCountry}
                                    <option {if $country_id eq $lstCountry[i].country_id} selected="selected"{/if}value="{$lstCountry[i].country_id}">{$clsCountry->getTitle($lstCountry[i].country_id)}</option>
                                    {/section}
                                </select>
                            </td>
                            {if $clsConfiguration->getValue('SiteHasCat_Tours')}
							<td class="fieldlabel">{$core->get_Lang('tourcategory')}</td>
							<td class="fieldarea">
								<select onchange="_reload()" name="cat_id" class="slb" id="slb_Category" style="width:200px;">
									{$clsTourCat->makeSelectboxOption($tour_group_id, $cat_id, $is_set)}
								</select>
							</td>
							{/if}
						</tr>
						<tr>
                        	{if $clsConfiguration->getValue('SiteHasDeparturePoint_Tours') eq '1'}
							<td class="fieldlabel">{$core->get_Lang('departurepoint')}</td>
							<td class="fieldarea">
								<select onchange="_reload()" name="departure_point_id" class="slb" id="slb_Departure_Point" style="width:200px;">
									<option value="0">-- {$core->get_Lang('Departure point')} --</option>
								</select>
							</td>
							{/if}
							<td class="fieldlabel">{$core->get_Lang('numberday')}</td>
							<td class="fieldarea">
								<select onchange="_reload()" name="number_day" class="slb" style="width:200px;">
									 <option value="0">-- {$core->get_Lang('Number days')} --</option>
									 {$clsISO->makeSelectNumber2(30,$number_day)}
								</select>
							</td>
						</tr>
						<tr>
							{if $clsConfiguration->getValue('SiteHasPriceRange_Tours') eq '1'}
							<td class="fieldlabel">{$core->get_Lang('pricerange')}</td>
							<td class="fieldarea">
								<select onchange="_reload()" name="price_range_id" class="slb" style="width:200px;">
									 {$clsPriceRange->getSelectByPrice($tour_group_id,$price_range_id)}
								</select>
							</td>
							{/if}
							<td class="fieldlabel">{$core->get_Lang('search')}</td>
							<td class="fieldarea">
								<input style="width:190px" type="text" class="text" name="keyword" value="{$keyword}" placeholder="{$core->get_Lang('search')}..." />
							</td>
						</tr>
					</table>
				</div>
				<div class="mt10"></div>
				<center>
					<div class="group_buttons">
						<a class="btn btn-success" href="javascript:void();" id="searchbtn" >
							<i class="icon-search icon-white"></i> <span>{$core->get_Lang('search')}</span>
						</a>
						<input type="hidden" name="filter" value="filter" />
						<input type="hidden" name="tour_type_id" value="{$tour_type_id}" />
                        <input type="hidden" name="is_set" value="{$is_set}" />
						<input id="list_selected_chkitem" style="display:none" value="0" />
					</div>
				</center>
            </form>
		</div>
	</div>	
	<div class="clearfix"></div>
	<div class="statistical mb5">
		<table width="100%" border="0" cellpadding="3" cellspacing="0">
			<tr>
				<td width="50%" align="left">&nbsp;</td>
				<td width="50%" align="right">
					{$core->get_Lang('Record/page')}:
					{$clsISO->getRecordPerPage2($recordPerPage,$totalRecord,$mod,$pUrl)}
					<a class="btn btn-danger btn-delete-all" clsTable="Tour" style="display:none">
                        <i class="icon-remove icon-white"></i> <span>{$core->get_Lang('Delete Options')}</span>
                    </a>
				</td>
			</tr>
		</table>
	</div>
	<div class="tabbox">
		<div class="hastable">
			<table cellspacing="0" class="tbl-grid table_responsive" width="100%">
				<thead>
					<tr class="border-b-2-dcdcdc">
						<th class="gridheader"  style="width:40px; text-align:center"><input id="check_all" type="checkbox" style="margin-top:5px;" /></th>
						<th class="gridheader hiden767" colspan="2" style="width:50px"><strong>ID</strong></th>
						<th class="gridheader name_responsive" style="text-align:left"><strong>{$core->get_Lang('nameoftrips')}</strong></th>

						<th class="gridheader hiden_responsive" style="text-align:right"><strong>{$core->get_Lang('duration')}</strong></th>
						{if $clsConfiguration->getValue('SiteHasCat_Tours')}
						<th class="gridheader hiden_responsive" style="text-align:left; width:12%"><strong>{$core->get_Lang('travelstyles')}</strong></th>
						{/if}
						<th class="gridheader hiden_responsive" style="text-align:center"><strong>{$core->get_Lang('public')}</strong></th>
						<th class="gridheader hiden_responsive" style="text-align:right; width:6%"><strong>{$core->get_Lang('pricefrom')}</strong></th>
						<th class="gridheader hiden_responsive" style="text-align:center; width:40px"><strong>{$core->get_Lang('func')}</strong></th>
					</tr>
				</thead>
				{if $allItem[0].tour_id ne ''}
				<tbody id="SortAble">
					{section name=i loop=$allItem}
					<tr style="cursor:move" id="order_{$allItem[i].tour_id}" class="{cycle values="row1,row2"}">
						<th class="check_40 border-r-n" style="text-align:center"><input name="p_key[]" class="chkitem" type="checkbox" value="{$allItem[i].tour_id}" /></th>
						<th class="index hiden767 border-l-n border-r-n border-r-color-f3f3f3" data-title="ID"><span>{$allItem[i].tour_id}</span></th>
						<th class="index hiden767 border-l-n border-r-color-f3f3f3"><span><img src="{$clsClassTable->getImage($allItem[i].tour_id,75,50)}" alt="{$clsClassTable->getTitle($allItem[i].tour_id)}" width="100%" height="auto"></span></th>
						<td class="text-left name_service">
							<a href="{$PCMS_URL}/tour/insert/{$allItem[i].tour_id}/overview">
								<strong class="title" title="{if $clsClassTable->getOneField('is_online',$allItem[i].tour_id) eq 0}{$core->get_Lang('Tour PRIVATE')}{/if}">{$clsClassTable->getTitle($allItem[i].tour_id)}</strong>
								{if $clsClassTable->getOneField('is_online',$allItem[i].tour_id) eq 0}<span style="color:red;" title="{$core->get_Lang('Tour PRIVATE')}">[P]</span>{/if}

								{if $allItem[i].is_trash eq '1'}<span class="fr" style="color:#CCC">{$core->get_Lang('intrash')}</span>{/if}

								<button type="button" class="toggle-row inline_block767" style="display:none"><i class="fa fa-caret fa-caret-down"></i></button>
							</a>
						</td>
						<td class="text-right block_responsive border_top_responsive" style="white-space:nowrap" data-title="{$core->get_Lang('duration')}">
							{$clsClassTable->getTripDuration($allItem[i].tour_id)}
						</td>
						{if $clsConfiguration->getValue('SiteHasCat_Tours')}
							<td class="block_responsive" data-title="{$core->get_Lang('travelstyles')}"><strong>{$clsClassTable->getCatName($allItem[i].tour_id)}</strong></td>
						{/if}
						<td class="block_responsive" style="text-align:center" data-title="{$core->get_Lang('public')}">
							<a href="javascript:void(0);" class="SiteClickPublic" clsTable="Tour" pkey="tour_id" sourse_id="{$allItem[i].tour_id}" rel="{$clsClassTable->getOneField('is_online',$allItem[i].tour_id)}" title="{$core->get_Lang('Click to change status')}">
								{if $clsClassTable->getOneField('is_online',$allItem[i].tour_id) eq '1'}
								<i class="fa fa-check-circle green"></i>
								{else}
								<i class="fa fa-minus-circle red"></i>
								{/if}
							</a>
						</td>
						<td class="block_responsive" style="text-align:right; white-space:nowrap" data-title="{$core->get_Lang('pricefrom')}">
							{if $clsClassTable->getTripPriceNewPro($allItem[i].tour_id,$now_day,0,'value') gt '0'}
								<strong class="format_price">{$clsISO->getRate()}  
								{$clsClassTable->getTripPriceNewPro($allItem[i].tour_id,$now_day,0,'value')}
								</strong>
							{else}
								<strong class="format_price">{$clsISO->getRate()}  
								0
								</strong>
							{/if}
						</td>
						<td class="block_responsive" align="center" style="vertical-align: middle; text-align:center;white-space: nowrap;" data-title="{$core->get_Lang('func')}">
							<div class="btn-group ">
								<button class="btn iso-button-standard dropdown-toggle " type="button" data-toggle="dropdown">
								<i class="icon-cog"></i> <span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									{if $allItem[i].is_trash eq '0'}
									<li><a href="{$DOMAIN_NAME}{$clsClassTable->getLink($allItem[i].tour_id)}" target="_blank" title="{$core->get_Lang('view')}"><i class="icon-eye-open"></i> <span>{$core->get_Lang('view')}</span></a></li>
									<li><a title="{$core->get_Lang('edit')}" href="{$PCMS_URL}/tour/insert/{$allItem[i].tour_id}/overview"><i class="icon-edit"></i> <span>{$core->get_Lang('edit')}</span></a></li>
									<li><a title="{$core->get_Lang('trash')}" href="{$PCMS_URL}/?mod={$mod}&act=trash&tour_id={$core->encryptID($allItem[i].tour_id)}{$pUrl}&page={$currentPage}"><i class="icon-trash"></i> <span>{$core->get_Lang('trash')}</span></a></li>
									{else}
									<li><a title="{$core->get_Lang('edit')}" href="{$PCMS_URL}/tour/insert/{$allItem[i].tour_id}/overview"><i class="icon-edit"></i> <span>{$core->get_Lang('edit')}</span></a></li>
									<li><a title="{$core->get_Lang('restore')}" href="{$PCMS_URL}/?mod={$mod}&act=restore&tour_id={$core->encryptID($allItem[i].tour_id)}{$pUrl}&page={$currentPage}"><i class="icon-refresh"></i> <span>{$core->get_Lang('restore')}</span></a></li>
									<li><a title="{$core->get_Lang('delete')}" class="confirm_delete" href="{$PCMS_URL}/?mod={$mod}&act=delete&tour_id={$core->encryptID($allItem[i].tour_id)}{$pUrl}&page={$currentPage}"><i class="icon-remove"></i> <span>{$core->get_Lang('delete')}</span></a></li>
									{/if}
									{if $clsConfiguration->getValue('SiteHasDuplicate_Tours')}
									<li><a title="{$core->get_Lang('duplicate')}" class="ajDuplicateTour" tour_id="{$allItem[i].tour_id}" href="#"><i class="icon-share"></i> <span>{$core->get_Lang('Duplicate')}</span></a></li>
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
</script>
<script type="text/javascript" src="{$URL_THEMES}/tour_exhautive/jquery.tour.js"></script>
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
			$.post(path_ajax_script+"/index.php?mod=tour&act=ajUpdPosSortTour", order, 
			
			function(html){
				vietiso_loading(0);
				/*location.href = REQUEST_URI;*/
			});
		}
	});	
</script>
{/literal}