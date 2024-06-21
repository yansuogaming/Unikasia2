<div class="page_container">
	<div class="page-title  d-flex">
        <div class="title">
			<h2>{$core->get_Lang('Customers')} <div class="info_module" data-toggle="tooltip" data-placement="right" title="Chức năng quản lý danh sách các khách hàng trong hệ thống isoCMS">i</div></h2>
			<p>{$number_all} {$core->get_Lang('Customers')}</p>
			
		</div>
		<div class="button_right">
			{*<a class="btn btn-main btn-addnew" href="{$PCMS_URL}/?mod={$mod}&act=edit" title="{$core->get_Lang('addcustomers')}">{$core->get_Lang('addcustomers')}</a>*}
			<div class="btn btn-setting"><a href="{$PCMS_URL}/?mod={$mod}&act=setting" title="{$core->get_Lang('Setting')}"><i class="fa fa-cog" aria-hidden="true"></i></a></div>
		</div>
		{if 1 eq 2}
        <p>Chức năng quản lý danh sách các tours trong hệ thống isoCMS</p>
		<p>{$core->get_Lang('This function is intended to manage tours in isoCMS system')}</p>
		{/if}
    </div>
	<div class="container-fluid">
		<div class="filter_box">
			<form id="forums" method="post" class="filterForm" action="">
				<div class="form-group form-keyword">
					<input class="form-control" type="text" name="name" value="{$name}" placeholder="{$core->get_Lang('Name')}..." />
				</div>
				<div class="form-group form-button">
					<button type="submit" class="btn btn-main" id="findtBtn">Tìm kiếm</button>
					<input type="hidden" name="filter" value="filter" />
				</div>
				{*<div class="form-group form-button">
					<button type="button" class="btn btn-export" id="btn_export">Export</button>
				</div>*}
				<div class="form-group form-button">
					<a class="btn btn-delete-all" id="btn_delete" clsTable="Profile" style="display:none">
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
		<div class="hastable">
			<table width="100%" cellspacing="0" class="tbl-grid table-striped table_responsive table-layout-fixed" style="overflow:auto">
				<thead>
					<tr>
						<th class="gridheader" style="width:40px"><input id="check_all" type="checkbox" class="el-checkbox" /></th>
						<th class="gridheader name_responsive name_responsive4" style="text-align:left"><strong>{$core->get_Lang('Member Info')}</strong></th>
						<th class="gridheader hiden_responsive" style="text-align:left; width: 200px"><strong>{$core->get_Lang('Address')}</strong></th>
						<th class="gridheader hiden_responsive" style="text-align:center; width: 160px"><strong>{$core->get_Lang('status')}</strong></th>
						<th class="gridheader hiden_responsive" style="text-align:center; width:160px"></th>
						<th class="gridheader hiden_responsive" style="text-align:center; width:40px"></th>
					</tr>
				</thead>
				<tbody>
					{if $listItem}
					{section name=i loop=$listItem}
					{assign var=nationality value=$clsCountry->getTitle($listItem[i].country_id)}
					<tr class="{if $smarty.section.i.index%2 eq 0}row1{else}row2{/if}">
						<td class="check_40 has-checkbox text-center"><input name="p_key[]" class="chkitem el-checkbox" type="checkbox" value="{$listItem[i].profile_id}" /></td>
						<td class="text-left name_service td_overflow" style="white-space:nowrap">
							<div class="box_name_services">
								<p class="txt_name_services"><a href="{$PCMS_URL}/member/view/{$listItem[i].profile_id}/overview" title="{$listItem[i].full_name}"><span class="txt_tour_id">#{$listItem[i].profile_id}</span> {if $listItem[i].full_name}- {$listItem[i].full_name}{/if}</a>
								{if $listItem[i].is_active eq '0'}
								(<span class="status_reminding" style="display: inline-block">{$core->get_Lang('Reminding')}</span>)
								{else}
								(<span class="status_reviewed" style="display: inline-block">{$core->get_Lang('Reviewed')}</span>)
								{/if}
								</p>
								<p class="txt_info">
								{if $listItem[i].email}<span>{$core->get_Lang("Email")}: {$listItem[i].email}</span>{/if}
								</p>
								<p class="txt_info">
								{if $listItem[i].phone}<span>{$core->get_Lang("Phone")}: {$listItem[i].phone}</span>{/if}
								</p>
								<p class="txt_info">
								{if $nationality}<span>{$core->get_Lang("Nationality")}: {$nationality}</span>{/if}
								</p>
								<p class="txt_info"><span>{$core->get_Lang("Created")}: {$clsISO->formatDateTime($listItem[i].reg_date,"d/m/Y H:i",0)}</span> | <span>{$core->get_Lang("Update")}: {$clsISO->formatDateTime($listItem[i].upd_date,"d/m/Y H:i",0)}</span></p>
							</div>
							<button type="button" class="toggle-row inline_block767" style="display:none">
								<i class="fa fa-caret fa-caret-down"></i>
							</button>
						</td>     
						<td class="block_responsive border_top_responsive" data-title="{$core->get_Lang('Address')}" style="white-space:nowrap">{$listItem[i].address}</td>

						<td class="block_responsive border_top_responsive" data-title="{$core->get_Lang('status')}" align="center" style="text-align:center;" >
							<a href="javascript:void(0);" class="SiteClickPublic" clsTable="Profile" pkey="profile_id" sourse_id="{$listItem[i].profile_id}" rel="{$listItem[i].is_online}" title="{$core->get_Lang('Click to change status')}">
								{if $listItem[i].is_online eq '1'}
								<i class="fa fa-check-circle green"></i>
								{else}
								<i class="fa fa-minus-circle red"></i>
								{/if}
							</a>
						</td>
						<td class="block_responsive border_top_responsive reponsive_td_booking" style="text-align: center;">
							<div class="btn_create_booking btn-main"><a href="" title="Tạo booking">Tạo booking</a></div>
						</div>
						<td class="block_responsive border_top_responsive" style="text-align: center;">							
							<div class="btn-group">
								<button class="btn btn_dropdown dropdown-toggle" type="button" data-toggle="dropdown">
									<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
								</button>
								<ul class="dropdown-menu" style="right:0px !important">
									<li><a title="{$core->get_Lang('view')}" href="{$PCMS_URL}/member/view/{$listItem[i].profile_id}/overview"><i class="icon-edit"></i> {$core->get_Lang('view')}</a></li>
									<li><a title="{$core->get_Lang('delete')}" class="confirm_delete" href="{$PCMS_URL}/?mod={$mod}&act=delete&profile_id={$core->encryptID($listItem[i].profile_id)}"><i class="icon-remove"></i> {$core->get_Lang('delete')}</a></li>
								</ul>
							</div>
						</td>
					</tr>	
					{/section}
					{else}
					<tr>
						<td colspan="20" style="text-align:center">{$core->get_Lang('nodata')}</td>
					</tr>
					{/if}
				</tbody>
			</table>
		</div>
		<div class="clearfix" style="height:5px"></div>
		<table width="100%" border="0" cellpadding="3" cellspacing="0">
			<tr>
				<td width="50%" align="left">{$core->get_Lang('statistical')} <strong>{$totalRecord}</strong> {$core->get_Lang('records')}/<strong>{$totalPage}</strong> {$core->get_Lang('page')}. {$core->get_Lang('youareonpagenumber')} <strong>{$currentPage}</strong></td>
				<td width="50%" align="right">
					{$core->get_Lang('gotopage')}:
					<select name="page" onchange="window.location = this.options[this.selectedIndex].value">
						{section name=i loop=$listPageNumber}
						<option {if $listPageNumber[i] eq $currentPage}selected="selected"{/if} value="{$PCMS_URL}/{$link_page_current}&page={$listPageNumber[i]}">{$listPageNumber[i]}</option>
						{/section}
					</select>
					<a class="btn btn-danger btn-delete-all" clsTable="Tour" style="display:none">
						<i class="icon-remove icon-white"></i> <span>{$core->get_Lang('Delete Options')}</span>
					</a>
				</td>
			</tr>
		</table>
    </div>
</div>