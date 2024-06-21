<div class="breadcrumb">
	<strong>{$core->get_Lang('youarehere')} : </strong>
	<a href="{$PCMS_URL}" title="{$core->get_Lang('home')}">{$core->get_Lang('home')}</a>
    <a>&raquo;</a>
    <a href="{$PCMS_URL}/index.php?mod={$mod}" title="{$core->get_Lang('Page')}">{$core->get_Lang('Page')}</a>
    <!-- // -->
    <a href="javascript:window.history.back();" class="back fr">{$core->get_Lang('back')}</a>
</div>
<div class="container-fluid">
    <div class="page-title">
        <h2>{$core->get_Lang('Page')} <a class="btn btn-success" href="{$PCMS_URL}/?mod={$mod}&act=edit" title="{$core->get_Lang('add')}"> <i class="icon-plus icon-white"></i></a></h2> 
		<p>Chức năng quản lý danh sách các {$core->get_Lang('Page')} trong hệ thống isoCMS</p>
		<p>{$core->get_Lang('This function is intended to manage Page in isoCMS system')}</p>
    </div>
	<div class="clearfix"><br /></div>
	<div class="statistical mb5">
		<table width="100%" border="0" cellpadding="3" cellspacing="0">
			<tr>
				<td width="50%" align="left">&nbsp;</td>
				<td width="50%" align="right">
					{$core->get_Lang('Record/page')}:
					{$clsISO->getRecordPerPage($recordPerPage,$totalRecord,$mod)}
					<a href="javascript:void(0)" class="btn btn-danger btn-delete-all" clsTable="Page" style="color:#fff; display:none"> <i class="icon-remove icon-white"></i> <span>{$core->get_Lang('Delete Options')}</span> </a>
				</td>
			</tr>
		</table>
	</div>
	<div class="hastable">
		<table width="100%" cellspacing="0" class="tbl-grid table-striped table_responsive">
			<thead>
				<tr>
					<th class="gridheader" style="width:40px"><input id="check_all" type="checkbox" /></th>
					<th class="gridheader hiden767"><strong>{$core->get_Lang('ID')}</strong></th>
					<th class="gridheader name_responsive" style="text-align:left"><strong>{$core->get_Lang('Name')}</strong></th>
					{if $clsConfiguration->getValue('SiteHasChild_slide')}<th class="gridheader" style="width:14%"></th>{/if}
					<th class="gridheader hiden_responsive" style="width:6%"><strong>{$core->get_Lang('status')}</strong></th>
					<th class="gridheader hiden_responsive" style="width:60px"><strong>{$core->get_Lang('func')}</strong></th>
				</tr>
			</thead>
			{if $allItem[0].page_id ne ''}
			<tbody id="SortAble">
				{section name=i loop=$allItem}
				<tr style="cursor:move" id="order_{$allItem[i].page_id}" class="{if $smarty.section.i.index%2 eq 0}row1{else}row2{/if}">
					<th class="check_40"><input name="p_key[]" class="chkitem" type="checkbox" value="{$allItem[i].page_id}" /></th>
					<th class="index hiden767">{$allItem[i].page_id}</th>
					<td class="name_service">
						<strong class="title" title="{if $clsClassTable->getOneField('is_online',$allItem[i].page_id) eq 0}{$core->get_Lang('PRIVATE')}{/if}">{$clsClassTable->getTitle($allItem[i].page_id)}</strong>
                {if $clsClassTable->getOneField('is_online',$allItem[i].page_id) eq 0}<span style="color:red;" title="{$core->get_Lang('PRIVATE')}">[P]</span>{/if}
						{if $allItem[i].is_trash eq '1'}<span class="fr" style="color:#CCC">{$core->get_Lang('intrash')}</span>{/if}
						<button type="button" class="toggle-row inline_block767" style="display:none"><i class="fa fa-caret fa-caret-down"></i></button>
					</td>
					{if $clsConfiguration->getValue('SiteHasChild_slide')}
					<td data-title"{$core->get_Lang('Slide Child')}" class="block_responsive">
						<a href="{$PCMS_URL}/index.php?mod=slide&mod_page={$mod}&act_page={$act}&target_id={$allItem[i].page_id}&clsTable=Page" title="{$core->get_Lang('listslide')}"><i class="fa fa-folder-open"></i> {$core->get_Lang('listslide')} <strong style="color:#c00000;">({$clsISO->countTotalSlide($mod,$act,$allItem[i].page_id)})</strong></a>
					</td>
					{/if}
					<td data-title="{$core->get_Lang('status')}" class="block_responsive" style="text-align:center">
						<a href="javascript:void(0);" class="SiteClickPublic" clsTable="Page" pkey="page_id" sourse_id="{$allItem[i].page_id}" rel="{$clsClassTable->getOneField('is_online',$allItem[i].page_id)}" title="{$core->get_Lang('Click to change status')}">
							{if $clsClassTable->getOneField('is_online',$allItem[i].page_id) eq '1'}
							<i class="fa fa-check-circle green"></i>
							{else}
							<i class="fa fa-minus-circle red"></i>
							{/if}
						</a>
					</td>
					<td data-title="{$core->get_Lang('func')}" class="block_responsive" style="vertical-align: middle; width: 40px; text-align: center; white-space: nowrap;">
						<div class="btn-group">
							<button class="btn btn_dropdown dropdown-toggle" type="button" data-toggle="dropdown">
								<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
							</button>
							<ul class="dropdown-menu" style="right:0px !important">
								{if $allItem[i].is_trash eq '0'}
								<li><a href="{$DOMAIN_NAME}{$clsClassTable->getLink($allItem[i].page_id)}" target="_blank" title="{$core->get_Lang('view')}"><i class="icon-eye-open"></i> <span>{$core->get_Lang('view')}</span></a></li>
								<li><a title="{$core->get_Lang('edit')}" href="{$PCMS_URL}/?mod={$mod}&act=edit&page_id={$core->encryptID($allItem[i].page_id)}"><i class="icon-edit"></i> {$core->get_Lang('edit')}</a></li>
								{if $allItem[i].is_plink eq '0'}
								<li><a title="{$core->get_Lang('trash')}" href="{$PCMS_URL}/?mod={$mod}&act=trash&page_id={$core->encryptID($allItem[i].page_id)}{$pUrl}"><i class="icon-trash"></i> <span>{$core->get_Lang('trash')}</span></a></li>
								{/if}
								{else}
								<li><a title="{$core->get_Lang('restore')}" href="{$PCMS_URL}/?mod={$mod}&act=restore&page_id={$core->encryptID($allItem[i].page_id)}{$pUrl}"><i class="icon-refresh"></i> <span>{$core->get_Lang('restore')}</span></a></li>
								<li><a title="{$core->get_Lang('delete')}" class="confirm_delete" href="{$PCMS_URL}/?mod={$mod}&act=delete&page_id={$core->encryptID($allItem[i].page_id)}{$pUrl}"><i class="icon-remove"></i> <span>{$core->get_Lang('delete')}</span></a></li>
								{/if}
							</ul>
						</div>
					</td>
				</tr>	
				{/section}
				{else}
				<tr><td colspan="10" style="text-align:center">{$core->get_Lang('nodata')}</td></tr>
			</tbody>	
			{/if}
		</table>
	</div>
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
			$.post(path_ajax_script+"/index.php?mod="+mod+"&act=ajUpdPosSortListPage", order, 
			
			function(html){
				vietiso_loading(0);
				location.href = REQUEST_URI;
			});
		}
	});
</script>
{/literal}