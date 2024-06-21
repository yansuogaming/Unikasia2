<div class="breadcrumb">
	<strong>{$core->get_Lang('youarehere')} : </strong>
	<a href="{$PCMS_URL}" title="{$core->get_Lang('home')}">{$core->get_Lang('home')}</a>
    <a>&raquo;</a>
	<a href="{$PCMS_URL}/index.php?mod={$mod}">{$core->get_Lang('cruise')}</a>
    <a>&raquo;</a>
    <a href="{$curl}" title="{$core->get_Lang('cruisescategory')}">{$core->get_Lang('cruisescategory')}</a>
    <!--// -->
    <a href="javascript:window.history.back();" class="back fr">{$core->get_Lang('back')}</a>
</div>
<div class="container-fluid">
    <div class="page-title">
        <h2>{$core->get_Lang('Cruise Class')} 
		<a href="javascript:void();" class="btn btn-success fileinput-button btnCreateCruiseCategory">
			<i class="icon-plus icon-white"></i>
		</a>
		</h2>
        <p>Chức năng quản lý danh sách các Cruise Class trong hệ thống isoCMS</p>
		<p>{$core->get_Lang('This function is intended to manage Cruise Class in isoCMS system')}</p>
    </div>
    <div class="ui-action">
        <div class="wrap">
			<form id="forums" method="post" class="filterForm" action="">
				<div class="fl fiterbox" style=" width:100%">
					<div class="wrap">
						<div class="searchbox" style="float:left !important; width:100%">
							<input type="text" class="m-wrap short" name="keyword" id="keyword" placeholder="{$core->get_Lang('search')}" value="{$keyword}" />
							<a class="btn btn-success" href="javascript:void();" id="searchbtn" style="padding:5px">
								<i class="icon-search icon-white"></i>
							</a>
						</div>
					</div>
				</div>
				<input type="hidden" name="filter" value="filter" />
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
					{$clsISO->getRecordPerPage($recordPerPage,$totalRecord,$mod,$act)}
					<a class="btn btn-danger btn-delete-all" clsTable="CruiseCat" style="display:none">
						<i class="icon-remove icon-white"></i> <span>{$core->get_Lang('Delete Options')}</span>
					</a>
				</td>
			</tr>
		</table>
	</div>
    <div class="hastable">
    	<table class="tbl-grid table-striped table_responsive" cellpadding="0" width="100%">
            <tr>
				<td class="gridheader" style="width:40px"><input id="check_all" type="checkbox" /></td>
                <td class="gridheader" style="width:60px"><strong>{$core->get_Lang('ID')}</strong></td>
				<td class="gridheader" style="text-align:left"><strong>{$core->get_Lang('Name')}</strong></td>
				<td class="gridheader" style="text-align:center; width:60px"><strong>{$core->get_Lang('status')}</strong></td>
                <td class="gridheader" style="text-align:center; width:70px"><strong>{$core->get_Lang('func')}</strong></td>
            </tr>
            {if $allItem[0].cruise_cat_id ne ''}
				<tbody id="SortAble">
				   {section name=i loop=$allItem}
					<tr style="cursor:move" id="order_{$allItem[i].cruise_cat_id}" class="{if $smarty.section.i.index%2 eq 0}row1{else}row2{/if}">
						<td class="index"><input name="p_key[]" class="chkitem" type="checkbox" value="{$allItem[i].cruise_cat_id}" /></td>
						<td class="index"> {$allItem[i].cruise_cat_id}</td>
						<td>
							<a style="text-decoration:none" title="{$clsClassTable->getTitle($allItem[i].cruise_cat_id)}"><strong style="font-size:14px;">{$clsClassTable->getTitle($allItem[i].cruise_cat_id)}</strong></a>
							{if $allItem[i].is_trash eq '1'}<span class="fr" style="color:#CCC">{$core->get_Lang('intrash')}</span>{/if}
						</td>
						<td style="text-align:center">
							<a href="javascript:void(0);" class="SiteClickPublic" clsTable="CruiseCat" pkey="cruise_cat_id" sourse_id="{$allItem[i].cruise_cat_id}" rel="{$clsClassTable->getOneField('is_online',$allItem[i].cruise_cat_id)}" title="{$core->get_Lang('Click to change status')}">
								{if $clsClassTable->getOneField('is_online',$allItem[i].cruise_cat_id) eq '1'}
								<i class="fa fa-check-circle green"></i>
								{else}
								<i class="fa fa-minus-circle red"></i>
								{/if}
							</a>
						</td>
						<td align="center" style="vertical-align: middle; text-align:center; width: 40px; white-space: nowrap;">
							<div class="btn-group">
								<button class="btn btn_dropdown dropdown-toggle" type="button" data-toggle="dropdown">
									<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
								</button>
								<ul class="dropdown-menu" style="right:0px !important">
									{if $allItem[i].is_trash eq '0'}
									<li><a href="{$DOMAIN_NAME}{$clsClassTable->getLink($allItem[i].cruise_cat_id)}" target="_blank" title="{$core->get_Lang('view')}"><i class="icon-eye-open"></i> <span>{$core->get_Lang('view')}</span></a></li>
									<li><a class="btnEditCruiseCategory" title="{$core->get_Lang('edit')}" data="{$allItem[i].cruise_cat_id}"><i class="icon-edit"></i> <span>{$core->get_Lang('edit')}</span></a></li>
									<li><a title="{$core->get_Lang('trash')}" href="{$PCMS_URL}/?mod={$mod}&act={$act}&action=Trash&cruise_cat_id={$core->encryptID($allItem[i].cruise_cat_id)}"><i class="icon-trash"></i> <span>{$core->get_Lang('Trash')}</span></a></li>
									{else}
									<li><a title="{$core->get_Lang('restore')}" href="{$PCMS_URL}/?mod={$mod}&act={$act}&action=Restore&cruise_cat_id={$core->encryptID($allItem[i].cruise_cat_id)}"><i class="icon-refresh"></i> <span>{$core->get_Lang('restore')}</span></a></li>
									<li><a title="{$core->get_Lang('delete')}" class="confirm_delete" href="{$PCMS_URL}/?mod={$mod}&act={$act}&action=Delete&cruise_cat_id={$core->encryptID($allItem[i].cruise_cat_id)}"><i class="icon-remove"></i> <span>{$core->get_Lang('delete')}</span></a></li>
									{/if}
								</ul>
							</div>
						</td>
					</tr>
					{if $clsISO->getCheckActiveModulePackage($package_id,$mod,'cruise_sub_category','customize') eq 1}
					{assign var=listChild value=$clsClassTable->getChild($allItem[i].cruise_cat_id,0,0)}
					{if $listChild}
						{$clsClassTable->getLstChild($allItem[i].cruise_cat_id)} 
					{/if}
					{/if}
					{/section}
					
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
			$.post(path_ajax_script+"/index.php?mod="+mod+"&act=ajUpdPosCruiseCat", order, 
			
			function(html){
				vietiso_loading(0);
				location.href = REQUEST_URI;
			});
		}
	});
</script>
{/literal}
<script type="text/javascript" src="{$URL_THEMES}/cruise/jquery.cruise.js?v={$upd_version}"></script>