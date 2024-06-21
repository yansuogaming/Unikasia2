
<div class="breadcrumb">
	<strong>{$core->get_Lang('youarehere')} : </strong>
	<a href="{$PCMS_URL}" title="{$core->get_Lang('home')}">{$core->get_Lang('home')}</a>
    <a>&raquo;</a>
	<a href="{$PCMS_URL}/index.php?mod={$mod}" title="{$mod}">{$mod|capitalize}</a>
    <!-- // -->
    <a href="javascript:window.history.back();" class="back fr">{$core->get_Lang('back')}</a>
</div>

<div class="container-fluid">
    <div class="page-title">
        {if $type == 'BC'}
        	<h2>{$core->get_Lang('Partner')} <a class="btn btn-success" href="{$PCMS_URL}/index.php?mod={$mod}&type=BC&act=edit{if $cat_id ne ''}&cat_id={$cat_id}{/if}" title="{$core->get_Lang('Add new')}"> <i class="icon-plus icon-white"></i> <span>{$core->get_Lang('Add')}</span></a></h2>
        {else}
        	<h2>{$core->get_Lang('Partner')} <a class="btn btn-success" href="{$PCMS_URL}/index.php?mod={$mod}&type=BC&act=edit{if $cat_id ne ''}&cat_id={$cat_id}{/if}" title="{$core->get_Lang('Add new')}"> <i class="icon-plus icon-white"></i> <span>{$core->get_Lang('Add')}</span></a></h2>
        {/if}
        
        <p>Chức năng quản lý danh sách các Partner trong hệ thống isoCMS</p>
		<p>{$core->get_Lang('This function is intended to manage Partner in isoCMS system')}</p>
    </div>
	<div class="clearfix"></div>
    <form id="forums" method="post" class="filterForm" action="">
    	<div class="filterbox filterbox_has_border wrap">
        	<div class="fr group_buttons">
                <a href="{$PCMS_URL}/?mod={$mod}" class="btn btn-primary">
                    <i class="icon-folder-open icon-white"></i><span> {$core->get_Lang('All')}({$number_all})</span>
                </a>
                <a href="{$PCMS_URL}/?mod={$mod}&type_list=Trash" class="btn btn-warning">
                    <i class="icon-trash icon-white"></i><span> {$core->get_Lang('Trash')}({$number_trash})</span>
                </a>
            </div>
        	<div class="searchbox fl">
            	<input type="text" class="text fl mr5" name="keyword" value="{$keyword}" placeholder="Search..." />
                <a class="btn btn-success" href="javascript:void();" id="searchbtn">
                    <i class="icon-search icon-white"></i>
                </a>            
            </div>
        </div>
        <input type="hidden" name="filter" value="filter" />
    </form>
    <div class="clearfix"><br /></div>
	<div class="statistical mb5">
		<table width="100%" border="0" cellpadding="3" cellspacing="0">
			<tr>
				<td width="50%" align="left">&nbsp;</td>
				<td width="50%" align="right">
					{$core->get_Lang('Record/page')}:
					{$clsISO->getRecordPerPage($recordPerPage,$totalRecord,$mod)}
					<a class="btn btn-danger btn-delete-all" clsTable="Partner" style="display:none">
                        <i class="icon-remove icon-white"></i> <span>{$core->get_Lang('Delete Options')}</span>
                    </a>
				</td>
			</tr>
		</table>
	</div>
    {if $allItem[0].partner_id eq ''}
    {$core->get_Lang('No data. Click Add New to continue.')}
   
    {else}
    <table cellspacing="0" class="tbl-grid full-width table-striped table_responsive">
		<thead>
			<tr>
				<th class="gridheader" style="width:40px"><input id="check_all" type="checkbox" /></th>
				<th class="gridheader hiden767"><strong>{$core->get_Lang('ID')}</strong></th>
				<th class="gridheader name_responsive" style="text-align:left"><strong>{$core->get_Lang('Title')}</strong></th>
				<th class="gridheader hiden_responsive" style="text-align:left"><strong>{$core->get_Lang('Path Url')}</strong></th>
				<th class="gridheader hiden_responsive" style="text-align:left;width:60px"><strong>{$core->get_Lang('status')}</strong></th>
				<th class="gridheader hiden_responsive" style="width:60px"><strong>{$core->get_Lang('func')}</strong></th>
			</tr>
		</thead>
        <tbody id="SortAble">
			{section name=i loop=$allItem}
			<tr style="cursor:move" id="order_{$allItem[i].partner_id}" class="{if $smarty.section.i.index%2 eq 0}row1{else}row2{/if}">
				<th class="check_40"><input name="p_key[]" class="chkitem" type="checkbox" value="{$allItem[i].partner_id}" /></th>
				<th class="index hiden767">{$allItem[i].partner_id}</th>
				<td class="name_service">	
					{if $type == 'BC'}
						<a title="Edit" href="{$PCMS_URL}/index.php?mod={$mod}&act=edit&type=BC&partner_id={$core->encryptID($allItem[i].partner_id)}">
						   <strong style="font-size:16px;">{$allItem[i].title}</strong>
						</a>
					{else}
						<a title="Edit" href="{$PCMS_URL}/index.php?mod={$mod}&act=edit&partner_id={$core->encryptID($allItem[i].partner_id)}">
						   <strong style="font-size:16px;">{$allItem[i].title}</strong>
						</a>
					{/if}
					
					{if $allItem[i].is_trash eq 1}<span style="color:#999">[{$core->get_Lang('Trash')}]</span>{/if}
					<button type="button" class="toggle-row inline_block767" style="display:none"><i class="fa fa-caret fa-caret-down"></i></button>
				</td>
				<td data-title="{$core->get_Lang('Path Url')}" class="block_responsive border_top_responsive">				
					<a href="{$allItem[i].url}" target="_blank">{$allItem[i].url}</a>
				</td>
				<td data-title="{$core->get_Lang('status')}" class="block_responsive" style="text-align:center">
					<a href="javascript:void(0);" class="SiteClickPublic" clsTable="Partner" pkey="partner_id" sourse_id="{$allItem[i].partner_id}" rel="{$clsClassTable->getOneField('is_online',$allItem[i].partner_id)}" title="{$core->get_Lang('Click to change status')}">
						{if $clsClassTable->getOneField('is_online',$allItem[i].partner_id) eq '1'}
						<i class="fa fa-check-circle green"></i>
						{else}
						<i class="fa fa-minus-circle red"></i>
						{/if}
					</a>
				</td>
				<td data-title="{$core->get_Lang('func')}" class="block_responsive" align="center" style="vertical-align: middle; text-align:center; width: 40px; white-space: nowrap;">
					<div class="btn-group">
						<button class="btn btn_dropdown dropdown-toggle" type="button" data-toggle="dropdown">
							<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
						</button>
						<ul class="dropdown-menu" style="right:0px !important">
							{if $allItem[i].is_trash eq '0'}
								{if $type == 'BC'}
									<li><a title="{$core->get_Lang('edit')}" href="{$PCMS_URL}/?mod={$mod}&act=edit&type=BC&partner_id={$core->encryptID($allItem[i].partner_id)}"><i class="icon-edit"></i> <span>{$core->get_Lang('edit')}</span></a></li>
									<li><a title="{$core->get_Lang('trash')}" href="{$PCMS_URL}/?mod={$mod}&act=trash&type=BC&partner_id={$core->encryptID($allItem[i].partner_id)}{$pUrl}&page={$currentPage}"><i class="icon-trash"></i> <span>{$core->get_Lang('trash')}</span></a></li>
								{else}
									<li><a title="{$core->get_Lang('edit')}" href="{$PCMS_URL}/?mod={$mod}&act=edit&partner_id={$core->encryptID($allItem[i].partner_id)}"><i class="icon-edit"></i> <span>{$core->get_Lang('edit')}</span></a></li>
									<li><a title="{$core->get_Lang('trash')}" href="{$PCMS_URL}/?mod={$mod}&act=trash&partner_id={$core->encryptID($allItem[i].partner_id)}{$pUrl}&page={$currentPage}"><i class="icon-trash"></i> <span>{$core->get_Lang('trash')}</span></a></li>
								{/if}							
							{else}
								{if $type == 'BC'}
									<li><a title="{$core->get_Lang('restore')}" href="{$PCMS_URL}/?mod={$mod}&act=restore&type=BC&partner_id={$core->encryptID($allItem[i].partner_id)}{$pUrl}&page={$currentPage}"><i class="icon-refresh"></i> <span>{$core->get_Lang('restore')}</span></a></li>
									<li><a title="{$core->get_Lang('delete')}" class="confirm_delete" href="{$PCMS_URL}/?mod={$mod}&act=delete&type=BC&partner_id={$core->encryptID($allItem[i].partner_id)}{$pUrl}&page={$currentPage}"><i class="icon-remove"></i> <span>{$core->get_Lang('delete')}</span></a></li>
								{else}
									<li><a title="{$core->get_Lang('restore')}" href="{$PCMS_URL}/?mod={$mod}&act=restore&partner_id={$core->encryptID($allItem[i].partner_id)}{$pUrl}&page={$currentPage}"><i class="icon-refresh"></i> <span>{$core->get_Lang('restore')}</span></a></li>
									<li><a title="{$core->get_Lang('delete')}" class="confirm_delete" href="{$PCMS_URL}/?mod={$mod}&act=delete&partner_id={$core->encryptID($allItem[i].partner_id)}{$pUrl}&page={$currentPage}"><i class="icon-remove"></i> <span>{$core->get_Lang('delete')}</span></a></li>
								{/if}
								
							{/if}
						</ul>
					</div>
				</td>
			</tr>	
			{/section}
    	</tbody>
	</table>
    {/if}
    <div class="clearfix"><br /></div>
    <div class="clearfix"></div>
	{$clsISO->getPaginationAdmin($totalRecord,$totalPage,$currentPage,$listPageNumber,$link_page_current,$type)}
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
			$.post(path_ajax_script+"/index.php?mod="+mod+"&act=ajUpdPosSortListPartner", order, 
			
			function(html){
				vietiso_loading(0);
				location.href = REQUEST_URI;
			});
		}
	});
</script>
{/literal}