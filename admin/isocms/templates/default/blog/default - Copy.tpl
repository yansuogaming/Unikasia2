<div class="breadcrumb">
    <strong>{$core->get_Lang('youarehere')}:</strong>
    <a href="{$PCMS_URL}" title="{$core->get_Lang('home')}">{$core->get_Lang('home')}</a>
    <a>&raquo;</a>
    <a href="{$PCMS_URL}/index.php?mod={$mod}" title="{$mod}">{$core->get_Lang('Blogs')}</a>
    <!-- // -->
    <a href="javascript:window.history.back();" class="back fr">{$core->get_Lang('back')}</a>
</div>
<div class="container-fluid">
    <div class="page-title">
        <h2>{$core->get_Lang('blog')} <a style="margin-left:5px;" class="btn btn-success" href="{$PCMS_URL}/?mod={$mod}&act=edit{$pUrl}" title="{$core->get_Lang('add')}"> <i class="icon-plus icon-white"></i></a></h2>
        {assign var = setting value = 'SiteIntroModule_'|cat:$mod|cat:'_'|cat:$_LANG_ID}
		{if $clsConfiguration->getValue($setting) ne ''}
		<p>{$clsConfiguration->getValue($setting)}</p>
		{/if}
        <div class="permalinkbox">
            <div class="wrap permalink_show">
                <strong><a href="{$DOMAIN_NAME}{$clsISO->getLink($mod)}" target="_blank"><img align="absmiddle" src="{$URL_IMAGES}/v2/link.png" /> {$DOMAIN_NAME}{$clsISO->getLink($mod)}</a></strong>
            </div> 
        </div>
    </div>
    <div class="clearfix"><br /></div>
    <div class="wrap">
        <form id="forums" method="post" action="" name="filter" class="filterForm">
			{if $_loged_id eq 1}
			{$core->getBlock('filter_post_by_ctv')}
			{else}
			{assign var=blog_category_check value=$clsISO->getCheckActiveModulePackage($package_id,$mod,'category','default')}
            <div class=" filterbox" style="width:100%">
                <div class="wrap">
                    <div class="searchbox">
                        {if $blog_category_check}
                        <select onchange="_reload()" name="blogcat_id" class="slb">
                            {$clsBlogCategory->makeSelectboxOption($blogcat_id)}
                        </select>
                        {/if}
                        <input type="text" class="text" name="keyword" value="{$keyword}" placeholder="{$core->get_Lang('search')}" />
                        <a class="btn btn-success" href="javascript:void();" id="searchbtn" style="padding:5px">
                            <i class="icon-search icon-white"></i>
                        </a>
                    </div>
                    <div class="fr group_buttons">
						{if $blog_category_check && $_user_group_id ne 5}
						<a href="{$PCMS_URL}/?mod={$mod}&act=category" class="btn btn-green" title="{$core->get_Lang('Category')}"><i class="icon-list icon-white"></i> <span>{$core->get_Lang('Category')}</span> </a>
						{/if}
                        <a href="{$PCMS_URL}/?mod={$mod}" class="btn btn-warning"><i class="icon-folder-open icon-white"></i> <span>{$core->get_Lang('all')} ({$number_all})</span> </a>
                        <a href="{$PCMS_URL}/?mod={$mod}&type_list=Trash" class="btn btn-danger"> <i class="icon-warning-sign icon-white"></i> <span>{$core->get_Lang('trash')} ({$number_trash})</span> </a>
                        
						{if $_user_group_id ne '5'}
                        <a href="{$PCMS_URL}/?mod={$mod}&act=setting" class="btn btn-danger" title="{$core->get_Lang('settings')}"><i class="icon-cog icon-white"></i> <span>{$core->get_Lang('settings')}</span> </a>
						<a class="btn btn-danger btn-delete-all" clsTable="Blog" style="display:none"><i class="icon-remove icon-white"></i> <span>{$core->get_Lang('Delete Options')}</span> </a>
						{/if}
                    </div>
                </div>
            </div>
			{/if}
            <input type="hidden" name="filter" value="filter" />
        </form>
        <input id="list_selected_chkitem" style="display:none" value="0" />
		<div class="clearfix"></div>
		<div class="statistical mb5">
			<table width="100%" border="0" cellpadding="3" cellspacing="0">
				<tr>
					<td width="50%" align="left">&nbsp;</td>
					<td width="50%" align="right">
						{$core->get_Lang('Record/page')}:
						{$clsISO->getRecordPerPage($recordPerPage,$totalRecord,$mod)}
					</td>
				</tr>
			</table>
		</div>
        <div class="clearfix"></div>
        <table cellspacing="0" class="tbl-grid table-striped table_responsive" width="100%">
            <tr>
                <td class="gridheader" style="width:40px"><input id="check_all" type="checkbox" /></td>
                <td class="gridheader" style="width:60px">{$core->get_Lang('ID')}</td>
                <td class="gridheader" style="text-align:left">{$core->get_Lang('Name')}</td>
                {if $blog_category_check}
                <td class="gridheader" style="text-align:left; width:150px">{$core->get_Lang('Category')}</td>
                {/if}
				<td class="gridheader" style="width:60px" align="right">{$core->get_Lang('viewer')}</td>
				{if $_loged_id eq 1 || $_user_group_id eq 5}
				<td class="gridheader" style="width:10%">{$core->get_Lang('Approved')}</td>
				{/if}
                <td class="gridheader" style="width:60px" align="right">{$core->get_Lang('status')}</td>
				<td class="gridheader" style="width:120px;" align="right">{$core->get_Lang('timeup')}</td>
                <td class="gridheader" style="width:120px;" align="right">{$core->get_Lang('update')}</td>
                <td class="gridheader" style="width:70px">{$core->get_Lang('func')}</td>
            </tr>
			<tbody id="SortAble">
				{section name=i loop=$allItem}
				<tr style="cursor:move" id="order_{$allItem[i].blog_id}" class="{if $smarty.section.i.index%2 eq 0}row1{else}row2{/if}">
						<td class="index"><input name="p_key[]" class="chkitem" type="checkbox" value="{$allItem[i].blog_id}" /></td>
						<td class="index">{$allItem[i].blog_id}</td>
						<td>
							<span class="title">{if $clsClassTable->getOneField('is_online',$allItem[i].blog_id) eq 0}<span style="color:#F90">[PRIVATE]</span>{/if} {$clsClassTable->getTitle($allItem[i].blog_id)}</span>
							{if $allItem[i].is_trash eq '1'}<span class="fr" style="color:#CCC">{$core->get_Lang('intrash')}</span>{/if}
						</td>
						{if $blog_category_check}
						<td><a href="{$PCMS_URL}/index.php?admin&mod={$mod}&blogcat_id={$allItem[i].cat_id}">
							<i class="fa fa-folder-open"></i> {$clsBlogCategory->getTitle($allItem[i].cat_id)}</a>
						</td>
						{/if}
						<td style="text-align:center">{$allItem[i].num_view}</td>
						{if $_loged_id eq 1 || $_user_group_id eq 5}
						<td style="text-align:center">
							<a href="javascript:void(0);" {if $_loged_id eq 1}class="SiteClickPublic"{/if} clsTable="Blog" pkey="blog_id" toField="is_approve" sourse_id="{$allItem[i].blog_id}" rel="{$clsClassTable->getOneField('is_approve',$allItem[i].blog_id)}" title="{$core->get_Lang('Click to change status')}"> {if $allItem[i].is_approve eq '1'}<i class="fa fa-check-circle green"></i>{else}<i class="fa fa-minus-circle red"></i>{/if}</a>
						</td>
						{/if}
						<td style="text-align:center">
							<a href="javascript:void(0);" class="SiteClickPublic" clsTable="Blog" pkey="{$pkeyTable}" sourse_id="{$allItem[i].$pkeyTable}" rel="{$clsClassTable->getOneField('is_online',$allItem[i].$pkeyTable)}" title="{$core->get_Lang('Click to change status')}">
								{if $clsClassTable->getOneField('is_online',$allItem[i].$pkeyTable) eq '1'}
								<i class="fa fa-check-circle green"></i>
								{else}
								<i class="fa fa-minus-circle red"></i>
								{/if}
							</a>
						</td>
						<td style="text-align:right">{$allItem[i].reg_date|date_format:"%d/%m/%Y %H:%M"}</td>
						<td style="text-align:right">{$allItem[i].upd_date|date_format:"%d/%m/%Y %H:%M"}</td>
						<td align="center" style="vertical-align: middle; text-align:center; width: 40px; white-space: nowrap;">
							<div class="btn-group">
								<button class="btn btn_dropdown dropdown-toggle" type="button" data-toggle="dropdown">
								<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
							</button>
								<ul class="dropdown-menu" style="right:0px !important">
									{if $allItem[i].is_trash eq '0'}
									<li><a href="{$DOMAIN_NAME}{$clsClassTable->getLink($allItem[i].blog_id)}" target="_blank" title="{$core->get_Lang('View')}"><i class="icon-eye-open"></i> <span>{$core->get_Lang('View')}</span></a></li>
									<li><a title="{$core->get_Lang('Edit')}" href="{$PCMS_URL}/?mod={$mod}&act=edit&blog_id={$core->encryptID($allItem[i].blog_id)}"><i class="icon-edit"></i> <span>{$core->get_Lang('Edit')}</span></a></li>
									<li><a title="{$core->get_Lang('Trash')}" href="{$PCMS_URL}/?mod={$mod}&act=trash&blog_id={$core->encryptID($allItem[i].blog_id)}{$pUrl}&page={$currentPage}"><i class="icon-trash"></i> <span>{$core->get_Lang('Trash')}</span></a></li>
									{else}
									<li><a title="{$core->get_Lang('Refresh')}" href="{$PCMS_URL}/?mod={$mod}&act=restore&blog_id={$core->encryptID($allItem[i].blog_id)}{$pUrl}&page={$currentPage}"><i class="icon-refresh"></i> <span>{$core->get_Lang('Refresh')}</span></a></li>
									{if $allItem[i].is_approve eq 1 && $_user_group_id eq 5}
									{else}
									<li><a title="{$core->get_Lang('Delete')}" class="confirm_delete" href="{$PCMS_URL}/?mod={$mod}&act=delete&blog_id={$core->encryptID($allItem[i].blog_id)}{$pUrl}&page={$currentPage}"><i class="icon-remove"></i> <span>{$core->get_Lang('Delete')}</span></a></li>
									{/if}
									{/if}
								</ul>
							</div>
						</td>
					</tr>
				{/section}
			</tbody>
        </table>
		<div class="cleafix"></div>
		{$clsISO->getPaginationAdmin($totalRecord,$totalPage,$currentPage,$listPageNumber,$link_page_current,$type)}
    </div>
</div>
<script type="text/javascript">
	var $recordPerPage = '{$recordPerPage}';
	var $currentPage = '{$currentPage}';
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
			var order = $(this).sortable("serialize")+'&update=update'+'&recordPerPage='+recordPerPage+'&currentPage='+currentPage;
			$.post(path_ajax_script+"/index.php?mod=blog&act=ajUpdPosSortBlog", order, 
			
			function(html){
				vietiso_loading(0);
				location.href = REQUEST_URI;
			});
		}
	});
</script>
{/literal}