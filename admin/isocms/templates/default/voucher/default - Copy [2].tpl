<div class="breadcrumb">
    <strong>{$core->get_Lang('youarehere')}:</strong>
    <a href="{$PCMS_URL}" title="{$core->get_Lang('home')}">{$core->get_Lang('home')}</a>
    <a>&raquo;</a>
    <a href="{$PCMS_URL}/index.php?mod={$mod}" title="{$mod}">{$core->get_Lang('Voucher')}</a>
    <!-- // -->
    <a href="javascript:window.history.back();" class="back fr">{$core->get_Lang('back')}</a>
</div>
<div class="container-fluid">
    <div class="page-title">
        <h2>{$core->get_Lang('Voucher')} <a style="margin-left:5px;" class="btn btn-success" href="{$PCMS_URL}/?mod={$mod}&act=edit" title="{$core->get_Lang('add')}"> <i class="icon-plus icon-white"></i></a></h2>
        <p>Chức năng quản lý danh sách các voucher trong hệ thống isoCMS</p>
		<p>{$core->get_Lang('This function is intended to manage voucher in isoCMS system')}</p>
        <div class="permalinkbox">
            <div class="wrap permalink_show">
                <strong><a href="{$DOMAIN_NAME}{$clsISO->getLink($mod)}" target="_blank"><img align="absmiddle" src="{$URL_IMAGES}/v2/link.png" /> {$DOMAIN_NAME}{$clsISO->getLink($mod)}</a></strong>
            </div> 
        </div>
    </div>
    <div class="clearfix"><br /></div>
	<form id="forums" method="post" class="filterForm" action="">
        <div class="ui-action">
            <div class="wrap">
                <div class="fiterbox" style="width:100%;">
                    <div class="wrap">
                        <div class="fr group_buttons">
							<a href="{$PCMS_URL}/?mod={$mod}&act=category" class="btn btn-green" style="color:#fff"> <i class="icon-list icon-white"></i> <span>{$core->get_Lang('Category')}</span> </a>
                            <a href="{$PCMS_URL}/?mod={$mod}&act={$act}" class="btn btn-warning" style="color:#fff"> <i class="icon-folder-open icon-white"></i> <span>{$core->get_Lang('all')} ({$number_all})</span> </a>
                            <a href="{$PCMS_URL}/?mod={$mod}&act={$act}&type_list=Trash" class="btn btn-danger" style="color:#fff"> <i class="icon-warning-sign icon-white"></i> <span>{$core->get_Lang('trash')} ({$number_trash})</span> </a>
							<a href="{$PCMS_URL}/?mod={$mod}&act=setting" class="btn btn-danger" style="color:#fff"> <i class="icon-cog icon-white"></i> <span>{$core->get_Lang('setting')}</span> </a>
                            <a href="javascript:void(0);" class="btn btn-danger btn-delete-all" clsTable="Voucher" style="color:#fff; display:none"> <i class="icon-remove icon-white"></i> <span>{$core->get_Lang('Delete Options')}</span> </a>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="wrap">
		<table id="list_voucher" class="table-striped table_responsive tbl-grid">
			<thead>
				<tr>
					<th style="width:40px"><input id="check_all" type="checkbox" style="margin-top:5px;" /></th>
					<th style="width: 60px">{$core->get_Lang('ID')}</th>
					<th align="left">{$core->get_Lang('Name')}</th>
					<th style="text-align:left; width:150px"><strong>{$core->get_Lang('Category')}</strong></th>
					<th style="width:140px; text-align: right"><strong>{$core->get_Lang('update')}</strong></th>
					<th style="width: 116px" align="center">{$core->get_Lang('Status')}</th>
					<th style="width: 106px" align="center">{$core->get_Lang('Function')}</th>
				</tr>
			</thead>
			<tbody id="SortAble">
				{section name=i loop=$allItem}
				<tr style="cursor:move" id="order_{$allItem[i].voucher_id}" class="{if $smarty.section.i.index%2 eq 0}row1{else}row2{/if}">
					<td class="index"><input name="p_key[]" class="chkitem" type="checkbox" value="{$allItem[i].voucher_id}" /></td>
					<td class="index">{$allItem[i].voucher_id}</td>
					<td>
						<strong class="title">{if $clsClassTable->getOneField('is_online',$allItem[i].voucher_id) eq 0}<span style="color:#F90">[PRIVATE]</span>{/if} {$clsClassTable->getTitle($allItem[i].voucher_id)}</strong>
						{if $allItem[i].is_trash eq '1'}<span class="fr" style="color:#CCC">{$core->get_Lang('intrash')}</span>{/if}
					</td>
					<td>{$clsVoucherCat->getTitle($allItem[i].cat_id)}
						{*<a href="{$PCMS_URL}/index.php?admin&mod={$mod}&voucher_cat_id={$allItem[i].cat_id}">
						<i class="fa fa-folder-open"></i> </a>*}
					</td>
					<td style="text-align:right">{$allItem[i].upd_date|date_format:"%d/%m/%Y %H:%M"}</td>
					<td style="text-align:center">
						<a href="javascript:void(0);" class="SiteClickPublic" clsTable="Voucher" pkey="{$pkeyTable}" sourse_id="{$allItem[i].$pkeyTable}" rel="{$clsClassTable->getOneField('is_online',$allItem[i].$pkeyTable)}" title="{$core->get_Lang('Click to change status')}">
							{if $clsClassTable->getOneField('is_online',$allItem[i].$pkeyTable) eq '1'}
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
								<li><a href="{$DOMAIN_NAME}{$clsClassTable->getLink($allItem[i].voucher_id)}" target="_blank" title="{$core->get_Lang('View')}"><i class="icon-eye-open"></i> <span>{$core->get_Lang('View')}</span></a></li>
								<li><a title="{$core->get_Lang('Edit')}" href="{$PCMS_URL}/?mod={$mod}&act=edit&voucher_id={$core->encryptID($allItem[i].voucher_id)}"><i class="icon-edit"></i> <span>{$core->get_Lang('Edit')}</span></a></li>
								<li><a title="{$core->get_Lang('Trash')}" href="{$PCMS_URL}/?mod={$mod}&act=trash&voucher_id={$core->encryptID($allItem[i].voucher_id)}{$pUrl}&page={$currentPage}"><i class="icon-trash"></i> <span>{$core->get_Lang('Trash')}</span></a></li>
								{else}
								<li><a title="{$core->get_Lang('Refresh')}" href="{$PCMS_URL}/?mod={$mod}&act=restore&voucher_id={$core->encryptID($allItem[i].voucher_id)}{$pUrl}&page={$currentPage}"><i class="icon-refresh"></i> <span>{$core->get_Lang('Refresh')}</span></a></li>
								{if $allItem[i].is_approve eq 1 && $_user_group_id eq 5}
								{else}
								<li><a title="{$core->get_Lang('Delete')}" class="confirm_delete" href="{$PCMS_URL}/?mod={$mod}&act=delete&voucher_id={$core->encryptID($allItem[i].voucher_id)}{$pUrl}&page={$currentPage}"><i class="icon-remove"></i> <span>{$core->get_Lang('Delete')}</span></a></li>
								{/if}
								{/if}
								{if $clsConfiguration->getValue('SiteHasDuplicate_News')}
								<li><a title="{$core->get_Lang('duplicate')}" class="ajDuplicateVoucher" voucher_id="{$allItem[i].voucher_id}"><i class="icon-share"></i> <span>{$core->get_Lang('duplicate')}</span></a></li>
								{/if}
							</ul>
						</div>
					</td>
				</tr>
				{/section}
			</tbody>
		</table>
		<script>
		var  City='{$core->get_Lang("Category")}';
		</script>
		{literal}
		<script>
		$(document).ready(function(){
			$('#list_voucher').DataTable({
				columnDefs: [
				  { orderable: false, targets: '_all' }
				],
				initComplete: function () {
					this.api().columns([3]).every( function () {
						var column = this;
						var select = $('<select><option value="">'+City+'</option></select>')
							.appendTo( $(column.header()).empty() )
							.on( 'change', function () {
								var val = $.fn.dataTable.util.escapeRegex(
									$(this).val()
								);
								column
									.search( val ? '^'+val+'$' : '', true, false )
									.draw();
							} );
						column.data().unique().sort().each( function ( d, j ) {
							select.append( '<option value="'+d+'">'+d+'</option>' )
						} );
					} );
				}
			});
			
		});
		</script>
		{/literal}
    </div>
</div>
<script type="text/javascript">
	var $recordPerPage = '{$recordPerPage}';
	var $currentPage = '{$currentPage}';
</script>
{literal}
<style>
.DataTables_sort_icon{display: none}
</style>
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
			$.post(path_ajax_script+"/index.php?mod=voucher&act=ajUpdPosSortVoucher", order, 
			
			function(html){
				vietiso_loading(0);
				location.href = REQUEST_URI;
			});
		}
	});
</script>
{/literal}