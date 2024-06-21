<div class="breadcrumb">
	<strong>{$core->get_Lang('youarehere')} : </strong>
	<a href="{$PCMS_URL}" title="{$core->get_Lang('home')}">{$core->get_Lang('home')}</a>
    <a>&raquo;</a>
    <a href="{$PCMS_URL}/index.php?mod={$mod}" title="{$core->get_Lang('Meta Tags')}">{$core->get_Lang('Meta Tags')}</a>
    <!-- // -->
    <a href="javascript:window.history.back();" class="back fr">{$core->get_Lang('back')}</a>
</div>
<div class="container-fluid">
    <div class="page-title">
        <h2>{$core->get_Lang('Meta Tags')} <a class="btn btn-success" href="{$PCMS_URL}/?mod={$mod}&act=edit" title="{$core->get_Lang('add')}"> <i class="icon-plus icon-white"></i></a></h2>
		{assign var = setting value = 'SiteIntroModule_'|cat:$mod|cat:'_'|cat:$_LANG_ID}
		{if $clsConfiguration->getValue($setting) ne ''}
        <p>{$clsConfiguration->getValue($setting)}</p>
		{/if}
    </div>
    <form id="forums" method="post" action="" name="filter">
		<div class="fiterbox" style="width:100%">
			<div class="wrap">
				<div class="searchbox">
					<input type="text" id="keyword" class="text fl full mr5" name="keyword" value="{$keyword}" placeholder="{$core->get_Lang('search')}"  style="width:200px !important;"/>
					<a class="btn btn-success fl mr5" id="searchbtn" style="padding:4px">
						<i class="icon-search icon-white"></i>
					</a>
				</div>
				<div class="fr group_buttons">
					<a href="{$PCMS_URL}/?mod={$mod}&act=setting" class="btn btn-danger" title="{$core->get_Lang('settings')}"><i class="icon-cog icon-white"></i> <span>{$core->get_Lang('settings')}</span> </a>
				</div>
			</div>
		</div>
		<input type="hidden" name="filter" value="filter" />
    </form>
	<br class="clear" />
	<div class="statistical mb5">
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
				</td>
			</tr>
		</table>
	</div>
    <table cellspacing="0" class="tbl-grid table-striped table_responsive" width="100%">
        <tr>
            <td class="gridheader"><strong>{$core->get_Lang('index')}</strong></td>
            <td class="gridheader" style="text-align:left;"><strong>{$core->get_Lang('link')}</strong></td>
            <td class="gridheader hidden767" style="width:250px;"><strong>{$core->get_Lang('length')}</strong></td>
            <td class="gridheader" style="text-align:center; width:40px;"><strong>{$core->get_Lang('func')}</strong></td>
        </tr>
		{if $allItem[0].meta_id eq ''}
		<tr>
			<td colspan="10" style="text-align:center">{$core->get_Lang('No Data')} !</td>
		</tr>
		{else}
        {section name=i loop=$allItem}
        <tr class="{if $smarty.section.i.index%2 eq 0}row1{else}row2{/if}">
            <td class="index">{$smarty.section.i.index+1}</td>
            <td>							
                <a title="Edit" href="{$PCMS_URL}/index.php?mod={$mod}&act=edit&meta_id={$core->encryptID($allItem[i].meta_id)}{$pUrl}">
                   <strong>{$clsClassTable->getOneField('config_link',$allItem[i].meta_id)}</strong>
                </a>
                {if $allItem[i].is_trash eq '1'}<span class="fr" style="color:#CCC">[In Trash]</span>{/if}
            </td>
            <td class="hidden767" style="text-align:right">
                {$core->get_Lang('Title')}: {$clsClassTable->getStatus('title',$allItem[i].meta_id)}&nbsp;|&nbsp;{$core->get_Lang('Description')}: {$clsClassTable->getStatus('description',$allItem[i].meta_id)}&nbsp;|&nbsp;{$core->get_Lang('Keyword')}: {$clsClassTable->getStatus('keyword',$allItem[i].meta_id)}
            </td>
            <td align="center" style="vertical-align: middle; text-align:center; width: 40px; white-space: nowrap;">
                <div class="btn-group">
                    <button class="btn btn_dropdown dropdown-toggle" type="button" data-toggle="dropdown">
						<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
					</button>
                    <ul class="dropdown-menu" style="right:0px !important">
                        {if $allItem[i].is_trash eq '0'}
                        <li><a href="{$DOMAIN_NAME}{$clsClassTable->getConfigLink($allItem[i].meta_id)}{$pUrl}" target="_blank" title="{$core->get_Lang('View')}"><i class="icon-eye-open"></i> <span>{$core->get_Lang('view')}</span></a></li>
                        <li><a title="{$core->get_Lang('Edit')}" href="{$PCMS_URL}/?mod={$mod}&act=edit&meta_id={$core->encryptID($allItem[i].meta_id)}"><i class="icon-edit"></i> <span>{$core->get_Lang('edit')}</span></a></li>
                        <li><a title="{$core->get_Lang('Trash')}" href="{$PCMS_URL}/?mod={$mod}&act=trash&meta_id={$core->encryptID($allItem[i].meta_id)}{$pUrl}&page={$currentPage}"><i class="icon-trash"></i> <span>{$core->get_Lang('trash')}</span></a></li>
                        {else}
                        <li><a title="{$core->get_Lang('restore')}" href="{$PCMS_URL}/?mod={$mod}&act=restore&meta_id={$core->encryptID($allItem[i].meta_id)}{$pUrl}&page={$currentPage}"><i class="icon-refresh"></i> <span>{$core->get_Lang('restore')}</span></a></li>
                        <li><a title="{$core->get_Lang('Delete')}" class="confirm_delete" href="{$PCMS_URL}/?mod={$mod}&act=delete&meta_id={$core->encryptID($allItem[i].meta_id)}{$pUrl}&page={$currentPage}"><i class="icon-remove"></i> <span>{$core->get_Lang('delete')}</span></a></li>  
                        {/if}
                    </ul>
                </div>
            </td>
        </tr>	
        {/section}
		{/if}
    </table>
	<div class="statistical mt5">
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
				</td>
			</tr>
		</table>
	</div>
</div>