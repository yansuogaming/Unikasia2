<div class="breadcrumb">
	<strong>{$core->get_Lang('youarehere')} : </strong>
	<a href="{$PCMS_URL}" title="{$core->get_Lang('home')}">{$core->get_Lang('home')}</a>
    <a>&raquo;</a>
    <a href="{$PCMS_URL}/index.php?mod={$mod}" title="{$mod}">{$core->get_Lang('advert')}</a>
    <!-- // -->
    <a href="javascript:window.history.back();" class="back fr">{$core->get_Lang('back')}</a>
</div>
<div class="container-fluid">
    <div class="page-title">
    	<h2>{$core->get_Lang('advert')} 
		 <a class="btn btn-success" href="{$PCMS_URL}/?mod={$mod}&act=edit{$pUrl}" title="{$core->get_Lang('add')}"> <i class="icon-plus icon-white"></i></a>
		</h2>
    </div>
	<div class="clearfix"><br /></div>
    <div id="clienttabs">
        <ul>
            <li class="tabchild"><a href="#"><i class="iso-option"></i> {$core->get_Lang('List of ads')}</a></li>
            {if $_DEV && $clsConfiguration->getValue('SiteHasGroup_Ads') and 1 eq 2}
            <li class="tabchild">
            	<a href="javascript:void(0);"><i class="iso-pos"></i> {$core->get_Lang('Position Advertising')}</a>
            </li>
            {/if}
        </ul>
    </div>
    <div id="tab_content">
        <div class="tabbox" style="display:block">
            <form id="forums" method="post" action="" name="filter" class="filterForm">
                <div class="ui-action">
                   <div class="fl fiterbox" style="width:100%">
                        <div class="wrap">
                            <div class="searchbox">
                                <input type="text" class="m-wrap short" name="keyword" value="{$keyword}" placeholder="{$core->get_Lang('search')}" />
                                <a class="btn btn-success" href="javascript:void();" id="searchbtn" style=" padding:5px">
                                    <i class="icon-search icon-white"></i>
                                </a>
                            </div>
                       		<div style="float:right;">
                                <a href="{$PCMS_URL}/?mod={$mod}" class="btn btn-warning" style="color:#fff"> <i class="icon-folder-open icon-white"></i> <span>{$core->get_Lang('all')}({$number_all})</span> </a>
                                <a href="{$PCMS_URL}/?mod={$mod}&type_list=Trash" class="btn btn-danger" style="color:#fff"> <i class="icon-warning-sign icon-white"></i> <span>{$core->get_Lang('trash')} ({$number_trash})</span> </a>
                                <a href="javascript:void(0)" class="btn btn-danger btn-delete-all" clsTable="Ads" style="color:#fff; display:none"> <i class="icon-remove icon-white"></i> <span>{$core->get_Lang('Delete Options')}</span> </a>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="filter" value="filter" />
            </form>
            <div class="clearfix"><br /></div>
            <table cellspacing="0" class="tbl-grid table-striped table_responsive" style="width:100%">
				<thead>
					<tr>
						<th class="gridheader" style="width:40px"><input id="check_all" type="checkbox" /></th>
						<th class="gridheader hiden767" style="width:4%;text-align:left;"><strong>{$core->get_Lang('index')}</strong></th>
						<th class="gridheader name_responsive text_left" style="text-align:center" width="50"><strong>{$core->get_Lang('images')}</strong></th>
						<th class="gridheader hiden_responsive" style="text-align:left"><strong>{$core->get_Lang('nameofads')}</strong></th>
						<th class="gridheader hiden_responsive" style="text-align:left"><strong>{$core->get_Lang('link')}</strong></th>
						<th class="gridheader hiden_responsive" style="width:6%"><strong>{$core->get_Lang('status')}</strong></th>
						<th class="gridheader hiden_responsive" style="width:12%;" align="center"><strong>{$core->get_Lang('update')}</strong></th>
						<th class="gridheader hiden_responsive" style="text-align:center;"><strong>{$core->get_Lang('func')}</strong></th>
					</tr>
				</thead>
                {section name=i loop=$allItem}
                <tr class="{if $smarty.section.i.index%2 eq 0}row1{else}row2{/if}">
                	<th class="check_40"><input name="p_key[]" class="chkitem" type="checkbox" value="{$allItem[i].ads_id}" /></th>
                    <th class="index hiden767">{$smarty.section.i.index+1}</th>
                    <td class="name_service full_width_767" style=" text-align:center;width:250px"><img src="{$clsClassTable->getOneField('image',$allItem[i].ads_id)}" width="200" />
					<button type="button" class="toggle-row inline_block767" style="display:none"><i class="fa fa-caret fa-caret-down"></i></button>
					</td>
                    <td data-title="{$core->get_Lang('nameofads')}" class="block_responsive border_top_responsive">
                    	<strong class="title">{if $clsClassTable->getOneField('is_online',$allItem[i].ads_id) eq 0}<span style="color:#F90">[PRIVATE]</span>{/if} {$clsClassTable->getTitle($allItem[i].ads_id)}</strong>
                    	{if $allItem[i].is_trash eq '1'}<span class="fr" style="color:#CCC">{$core->get_Lang('intrash')}</span>{/if}
                    </td>
                    <td data-title="{$core->get_Lang('link')}" class="block_responsive">{$clsClassTable->getOneField('url',$allItem[i].ads_id)}</td>
                    <td data-title="{$core->get_Lang('status')}" class="block_responsive" style="text-align:center">
                        <a href="javascript:void(0);" class="SiteClickPublic" clsTable="Ads" pkey="ads_id" sourse_id="{$allItem[i].ads_id}" rel="{$clsClassTable->getOneField('is_online',$allItem[i].ads_id)}" title="{$core->get_Lang('Click to change status')}">
                            {if $clsClassTable->getOneField('is_online',$allItem[i].ads_id) eq '1'}
                            <i class="fa fa-check-circle green"></i>
                            {else}
                            <i class="fa fa-minus-circle red"></i>
                            {/if}
                        </a>
                    </td>
                    <td data-title="{$core->get_Lang('update')}" class="block_responsive" style="text-align:center">{$allItem[i].upd_date|date_format:"%d/%m/%Y %H:%M"}</td>
                    <td data-title="{$core->get_Lang('func')}" class="block_responsive" align="center" style="vertical-align: middle; text-align:center; width: 40px; white-space: nowrap;">
                        <div class="btn-group">
                            <button class="btn btn_dropdown dropdown-toggle" type="button" data-toggle="dropdown">
								<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
							</button>
                            <ul class="dropdown-menu" style="right:0px !important">
                                {if $allItem[i].is_trash eq '0'}
                                <li><a title="{$core->get_Lang('edit')}" href="{$PCMS_URL}/?mod={$mod}&act=edit&ads_id={$core->encryptID($allItem[i].ads_id)}"><i class="icon-edit"></i> <span>{$core->get_Lang('Edit')}</span></a></li>
                                <li><a title="{$core->get_Lang('trash')}" href="{$PCMS_URL}/?mod={$mod}&act=trash&ads_id={$core->encryptID($allItem[i].ads_id)}{$pUrl}"><i class="icon-trash"></i> <span>{$core->get_Lang('Trash')}</span></a></li>
                                {else}
                                <li><a title="{$core->get_Lang('restore')}" href="{$PCMS_URL}/?mod={$mod}&act=restore&ads_id={$core->encryptID($allItem[i].ads_id)}{$pUrl}"><i class="icon-refresh"></i> <span>{$core->get_Lang('Refresh')}</span></a></li>
                                <li><a title="{$core->get_Lang('delete')}" class="confirm_delete" href="{$PCMS_URL}/?mod={$mod}&act=delete&ads_id={$core->encryptID($allItem[i].ads_id)}{$pUrl}"><i class="icon-remove"></i> <span>{$core->get_Lang('Delete')}</span></a></li>
                                {/if}
                            </ul>
                        </div>
                    </td>
                </tr>
                {/section}
            </table>
            <div class="adminPaging">
                <ul class="lstAdminPaging">
                	{section name=i loop=$listPageNumber}
                    <li><a href="{$PCMS_URL}/{$link_page_current}&page={$listPageNumber[i]}" {if $listPageNumber[i] eq $currentPage}class="active"{/if}>{$listPageNumber[i]}</a>
                    </li>
                	{/section}
                </ul>
                <div class="report">
                    <strong>{$core->get_Lang('statistical')}</strong>: <strong>{$totalRecord}</strong> {$core->get_Lang('records')}/<strong>{$totalPage}</strong> {$core->get_Lang('page')}. {$core->get_Lang('youareonpagenumber')} <strong>{$currentPage}</strong>.
                </div>
            </div>
		</div>
        {if $_DEV && $clsConfiguration->getValue('SiteHasGroup_Ads') eq 1 || 1 eq 1}
        <div class="tabbox" style="display:none">
        	<div class="hastable">
                <table cellspacing="0" class="tbl-grid" style="width:100%">
                    <tr>
                        <td class="gridheader" style=" width:4%">#</td>
                        <td class="gridheader" style=" width:4%">ID</td>
                        <td class="gridheader" style="text-align:left"><strong>{$core->get_Lang('title')}</strong></td>
                        <td class="gridheader" style="text-align:left"><strong>{$core->get_Lang('intro')}</strong></td>
                        <td class="gridheader"><strong>{$core->get_Lang('length')}</strong></td>
                        <td class="gridheader" style="width:6%"><strong>{$core->get_Lang('status')}</strong></td>
                        <td class="gridheader" style="text-align:center; width:6%" colspan="4"><b>{$core->get_Lang('move')}</b></td>
                        <td class="gridheader" style="text-align:center"><strong>{$core->get_Lang('func')}</strong></td>
                    </tr>
                    <tbody id="tblAdsGroup"></tbody>
                </table>
                <div class="clearfix" style="height:5px"></div>
                <div class="pagination_box" style="display:none">
                    <div class="wrap holderEvent_tbl" id="dataTable_paginate">
                    <!-- Ajax Loading pagination -->
                    </div>
                </div>
            </div>
        </div>
        {/if}
	</div>
</div>
<script type="text/javascript">
var $SiteHasGroup_Ads = "{$clsConfiguration->getValue('SiteHasGroup_Ads')}";
</script>
<script type="text/javascript" src="{$URL_THEMES}/ads/jquery.ads.js?v={$upd_version}"></script>