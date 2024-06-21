<div class="page_container">
	<div class="page-title d-flex">
        <div class="title">
			<h2 class="title-page">{$core->get_Lang('Discount')}</h2>
			{assign var = SiteIntroModule value= 'SiteIntroModule_discount_'|cat:$_LANG_ID}
			<div class="text-multed">{$clsConfiguration->getValue($SiteIntroModule)|html_entity_decode}</div>
		</div>
		<div class="button_right">
			<a class="btn btn-main btn-addnew" onClick="open_discount(this)" title="{$core->get_Lang('addtours')}">{$clsISO->makeIcon('plus', $core->get_Lang('Add Discount'))}</a></a>
		</div>
    </div>
	<div class="container-fluid">
		<div class="wrap">
			<form class="form" method="post">
				<div class="search">
					<div class="form-group has-search">
						<input type="hidden" name="filter" value="filter" />
						<span class="fa fa-search form-control-feedback"></span>
						<input class="form-control input-lg" name="keyword" value="{$keyword}" placeholder="Tìm kiếm tour" type="text">
					</div>
				</div>
				<table class="tbl-grid table-striped table_responsive table-iloocal" width="100%" cellpadding="0" cellspacing="0">
					<thead><tr>
						<th class="text-center" style="width:40px"><input id="check_all" type="checkbox" class="el-checkbox" /></th>
						<th class="name_responsive" align="left">{$core->get_Lang('Name')}</th>
						<th class="hiden_responsive" align="left" width="10%">{$core->get_Lang('Code')}</th>
						<th class="text-left hiden_responsive">{$core->get_Lang('State')}</th>
						<th class="text-left hiden_responsive" width="200px">{$core->get_Lang('Booking Date')}</th>
						<th class="text-left hiden_responsive" width="200px">{$core->get_Lang('Travel Date')}</th>
						<th class="text-center hiden_responsive" width="150px">{$core->get_Lang('Used')}</th>
						<th class="text-center hiden_responsive">{$core->get_Lang('Status')}</th>
						<th class="text-center hiden_responsive" width="60px">{$core->get_Lang('Tools')}</th>
					</tr></thead>
					<tbody id="SortAble">
						{section name=i loop=$allItem}
						<tr class="{cycle values='row1,row2'}">
							<th class="index" style="width: 40px"><input name="p_key[]" class="el-checkbox chkitem" type="checkbox" value="{$allItem[i].discount_id}"/></th>
							<td class="text-left name_service">{$allItem[i].title}
								{if $allItem[i].is_trash eq '1'}
								<span class="fr" style="color:#CCC">{$core->get_Lang('intrash')}</span>
								{/if}
								<button type="button" class="toggle-row inline_block767" style="display:none"><i class="fa fa-caret fa-caret-down"></i></button>
							</td>
							<td class="text-left block_responsive" data-title="{$core->get_Lang('Code')}">{$allItem[i].code}</td>
							<td class="text-left block_responsive" data-title="{$core->get_Lang('State')}">{$clsClassTable->getStatus($allItem[i].discount_id)}</td>
							<td class="text-left px-10 block_responsive" data-title="{$core->get_Lang('Booking Date')}">{$clsISO->convertTimeToText($allItem[i].booking_date_from)} 
								- {$clsISO->convertTimeToText($allItem[i].booking_date_to)}</td>
							<td class="text-left px-10 block_responsive" data-title="{$core->get_Lang('Travel Date')}">{$clsISO->convertTimeToText($allItem[i].travel_date_from)} 
								- {$clsISO->convertTimeToText($allItem[i].travel_date_to)}</td>
							<td class="text-center block_responsive" data-title="{$core->get_Lang('Used')}">{$allItem[i].total_used}</td>
							<td class="block_responsive text-center" data-title="{$core->get_Lang('public')}">
								<a href="javascript:void(0);" class="SiteClickPublic" clsTable="Discount" pkey="{$clsClassTable->pkey}" sourse_id="{$allItem[i].$pkeyTable}" rel="{$allItem[i].is_online}">{if $allItem[i].is_online eq '1'}
									<i class="fa fa-check-circle green"></i>{else}
									<i class="fa fa-minus-circle red"></i>{/if}
								</a>
							</td>
							<td class="text-center block_responsive" style="white-space: nowrap;">
								<div class="btn-group">
									<button class="btn btn_dropdown dropdown-toggle" type="button" data-toggle="dropdown">
										<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
									</button>
									<ul class="dropdown-menu" style="right:0px !important">
										{if $allItem[i].is_trash eq '0'}
										<li><a title="{$core->get_Lang('Edit')}" href="javascript:void(0)" onClick="open_discount(this)" discount_id="{$allItem[i].discount_id}"><i class="icon-edit"></i> <span>{$core->get_Lang('Edit')}</span></a></li>
										<li><a title="{$core->get_Lang('Trash')}" href="{$PCMS_URL}/?mod={$mod}&act=trash&discount_id={$allItem[i].discount_id}{$pUrl}&page={$currentPage}"><i class="icon-trash"></i> <span>{$core->get_Lang('Trash')}</span></a>
										</li>
										{else}
										<li><a title="{$core->get_Lang('Refresh')}" href="{$PCMS_URL}/?mod={$mod}&act=restore&discount_id={$allItem[i].discount_id}{$pUrl}&page={$currentPage}"><i class="icon-refresh"></i> <span>{$core->get_Lang('Restore')}</span></a></li>
										<li><a title="{$core->get_Lang('Delete')}" class="confirm_delete" href="{$PCMS_URL}/?mod={$mod}&act=delete&discount_id={$allItem[i].discount_id}{$pUrl}&page={$currentPage}"><i class="icon-remove"></i> <span>{$core->get_Lang('Delete')}</span></a></li>
										{/if}
									</ul>
								</div>
							</td>
						</tr>
						{/section}
					</tbody>
				</table>
			</form>
		</div>
	</div>
</div>
<!-- Insert External Script -->
<link rel="stylesheet" href="{$URL_JS}/jquery-easyui/themes/gray/easyui.css?v={$upd_version}" type="text/css" media="screen">
<script type="text/javascript" src="{$URL_JS}/jquery-easyui/jquery.easyui.min.js?v={$upd_version}"></script>