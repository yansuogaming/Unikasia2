<div class="breadcrumb">
	<strong>{$core->get_Lang('youarehere')} : </strong>
	<a href="{$PCMS_URL}" title="{$core->get_Lang('home')}">{$core->get_Lang('home')}</a>
    <a>&raquo;</a>
    <a href="{$PCMS_URL}/index.php?mod={$mod}" title="{$core->get_Lang('travelguide')}">{$core->get_Lang('travelguide')}</a>
	<a>&raquo;</a>
    <a href="{$curl}" title="{$core->get_Lang('travelguidecat')}">{$core->get_Lang('Travel Guide Category list')}</a>
    <!--// -->
    <a href="javascript:window.history.back();" class="back fr">{$core->get_Lang('back')}</a>
</div>
<div class="container-fluid">
    <div class="page-title">
        <h2>{$core->get_Lang('Travel Guide Category list')} <a href="{$PCMS_URL}/?mod={$mod}&act=editcat" class="btn btn-success fileinput-button">
			<i class="icon-plus icon-white"></i>
		</a>
		</h2>
        <p>{$core->get_Lang('Chức năng nhằm quản lý các nhóm dữ liệu của TravelGuide category trong hệ thống isoCMS')}</p>
		<p>{$core->get_Lang('This function is intended to manage TravelGuide category in isoCMS system')}</p>
    </div>
    <div class="ui-action">
        <div class="wrap">
            <div class="fl fiterbox" style=" width:100%">
                <div class="wrap">
					<form id="forums" method="post" class="filterForm" action="">
						<div class="searchbox" style="float:left !important; width:100%">
							<input type="text" class="m-wrap short search_keyword" name="keyword" id="keyword" placeholder="{$core->get_Lang('Type to search')}..." />
						   <a class="btn btn-success" href="javascript:void();" id="searchbtn" style="padding:5px">
								<i class="icon-search icon-white"></i>
							</a>
						</div>
						<div class="group_buttons fr mt10_767">
							<a href="{$PCMS_URL}/?mod={$mod}" class="btn btn-danger" title="{$core->get_Lang('travelguide')}"><i class="fa fa-reply"></i> <span>{$core->get_Lang('travelguide')}</span> </a>
						</div>
						<input type="hidden" name="filter" value="filter" />
    				</form>
                </div>
            </div>
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
					<a href="javascript:void(0)" class="btn btn-danger btn-delete-all" clsTable="GuideCat" style="display:none"> 
						<i class="icon-remove icon-white"></i><span>{$core->get_Lang('Delete Options')}</span> 
					</a>
				</td>
			</tr>
		</table>
	</div>
	<div class="cleafix"></div>
    <div class="hastable">
    	<table class="tbl-grid full-width table-striped table_responsive">
			<thead>
				<tr>
					<th class="gridheader" style="width:40px"><input id="check_all" type="checkbox" /></th>
					<th class="gridheader hiden767" style="width:60px">{$core->get_Lang('ID')}</th>
					<th class="gridheader name_responsive" style="text-align:left">{$core->get_Lang('Name')}</th>
					<th class="gridheader hiden_responsive" style="width:60px; text-align:center">{$core->get_Lang('Status')}</th>
					<th class="gridheader hiden_responsive" style="width:70px">{$core->get_Lang('func')}</th>
				</tr>
			</thead>
            {if $allItem[0].guidecat_id ne ''}
			<tbody id="SortAble">
			   {section name=i loop=$allItem}
				<tr style="cursor:move" id="order_{$allItem[i].guidecat_id}" class="{if $smarty.section.i.index%2 eq 0}row1{else}row2{/if}">
				<th class="check_40">
					{if $clsISO->checkInArray('3,5,15,20',$allItem[i].guidecat_id)}
					<span style="display:inline-block; width:20px;">&nbsp;</span>
					{else}
					<input name="p_key[]" class="chkitem" type="checkbox" value="{$allItem[i].guidecat_id}" />{/if}</th>
				<th class="hiden767 text_center">{$allItem[i].guidecat_id}</th>
				<td  class="name_service">
				<span class="title" title="{if $clsClassTable->getOneField('is_online',$allItem[i].guidecat_id) eq 0}{$core->get_Lang('Guide Category PRIVATE')}{/if}">{$clsClassTable->getTitle($allItem[i].guidecat_id)}</span>
                {if $clsClassTable->getOneField('is_online',$allItem[i].guidecat_id) eq 0}<span style="color:red;" title="{$core->get_Lang('Guide Category PRIVATE')}">[P]</span>{/if}
				{if $allItem[i].is_trash eq '1'}<span class="fr" style="color:#CCC">{$core->get_Lang('intrash')}</span>{/if}
				<button type="button" class="toggle-row inline_block767" style="display:none"><i class="fa fa-caret fa-caret-down"></i></button>
                </td>
                <td data-title="{$core->get_Lang('status')}" class="block_responsive" style="text-align:center">
					<a href="javascript:void(0);" class="SiteClickPublic" clsTable="GuideCat" pkey="{$pkeyTable}" sourse_id="{$allItem[i].$pkeyTable}" rel="{$clsClassTable->getOneField('is_online',$allItem[i].$pkeyTable)}" title="{$core->get_Lang('Click to change status')}">
						{if $clsClassTable->getOneField('is_online',$allItem[i].$pkeyTable) eq '1'}
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
                            <li><a title="{$core->get_Lang('edit')}" href="{$PCMS_URL}/?mod={$mod}&act=editcat&guidecat_id={$core->encryptID($allItem[i].guidecat_id)}"><i class="icon-edit"></i> <span>{$core->get_Lang('edit')}</span></a></li>
							{if $clsISO->checkInArray('3,5,15,20',$allItem[i].guidecat_id)}
							{else}
                            <li><a title="{$core->get_Lang('trash')}" href="{$PCMS_URL}/?mod={$mod}&act=cat&action=Trash&guidecat_id={$core->encryptID($allItem[i].guidecat_id)}"><i class="icon-trash"></i> <span>{$core->get_Lang('trash')}</span></a></li>
							{/if}
                            {else}
                            <li><a title="{$core->get_Lang('restore')}" href="{$PCMS_URL}/?mod={$mod}&act=cat&action=Restore&guidecat_id={$core->encryptID($allItem[i].guidecat_id)}"><i class="icon-refresh"></i> <span>{$core->get_Lang('restore')}</span></a></li>
                            <li><a title="{$core->get_Lang('delete')}" class="confirm_delete" href="{$PCMS_URL}/?mod={$mod}&act=cat&action=Delete&guidecat_id={$core->encryptID($allItem[i].guidecat_id)}"><i class="icon-remove"></i> <span>{$core->get_Lang('delete')}</span></a></li>
                            {/if}
                        </ul>
                    </div>
                </td>
			</tr>
			{/section}
			{else}<tr><td colspan="15" style="text-align:center">{$core->get_Lang('nodata')}</td></tr>
			</tbody>
			{/if}
		</table>
    </div>
	<div class="cleafix"></div>
	{$clsISO->getPaginationAdmin($totalRecord,$totalPage,$currentPage,$listPageNumber,$link_page_current,$type)}
</div>
<script type="text/javascript">
	var insert_error_exist_code = '{$core->get_Lang("insert_error_exist_code")}';
	var $recordPerPage = '{$recordPerPage}';
	var $currentPage = '{$currentPage}';
</script>
{literal}
<script type="text/javascript">
$().ready(function(){
	loadListSysCategory('','');
	$('#keyword').bind('keyup keydown change',function(){
		var $_this=$(this);
		var $total_rows = $('#tblHolderGuideCategory tr').size();
		if($total_rows > 1 && $_this.val() != ''){
			var $s = $_this.val();
			$("#tblHolderGuideCategory tr").each(function(){
				$(this).text().search(new RegExp($s,"i"))<0? $(this).hide():$(this).show();
			});
		}else{
			$('#tblHolderGuideCategory tr').each(function(){
				$(this).show();
			});
		}
	});
	$(document).on('click', '.btnmove_guidecat', function(ev){
		var $_this = $(this);
		var adata = {
			'guidecat_id' : $_this.attr('data'),
			'direct' : $_this.attr('direct'),
			'tp' : 'M'
		};
		vietiso_loading(1);
		$.ajax({
			type: "POST",
			url: path_ajax_script+'/?mod='+mod+'&act=OpenGuideCategory',
			data: adata,
			dataType: "html",
			success: function(html){
				loadListSysCategory('','');
				vietiso_loading(0);
			}
		});
		return false;
	});
	$(document).on('click', '.btndelete_guidecat', function(ev){
		var $_this = $(this);
		if(confirm(confirm_delete)){
			vietiso_loading(1);
			$.ajax({
				type:'POST',
				url:path_ajax_script+'/index.php?mod='+mod+'&act=OpenGuideCategory',
				data:{'guidecat_id':$_this.attr('data'),'tp':'D'},
				dataType:'html',
				success:function(html){
					loadListSysCategory('','');
					vietiso_loading(0);
				}
			});
		}
		return false;
	});
});
function loadListSysCategory($parent_id,$keyword){
	var adata = {
		'parent_id' : $parent_id,
		'keyword'	: $keyword,
		'tp' : 'L'
	};
	vietiso_loading(1);
	$.ajax({
		type: "POST",
		url: path_ajax_script+'/?mod='+mod+'&act=OpenGuideCategory',
		data: adata,
		dataType: "html",
		success: function(html){
			$('#tblHolderGuideCategory').html(html);
			vietiso_loading(0);
		}
	});
}
</script>
{/literal}
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
			$.post(path_ajax_script+"/index.php?mod=guide&act=ajUpdPosSortGuideCat", order, 
			
			function(html){
				vietiso_loading(0);
				location.href = REQUEST_URI;
			});
		}
	});
</script>
{/literal}
