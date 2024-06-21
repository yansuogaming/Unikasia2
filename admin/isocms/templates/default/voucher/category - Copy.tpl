<div class="breadcrumb">
    <strong>{$core->get_Lang('youarehere')} : </strong>
    <a href="{$PCMS_URL}" title="{$core->get_Lang('home')}">{$core->get_Lang('home')}</a>
    <a>&raquo;</a>
    <a href="{$PCMS_URL}/index.php?mod={$mod}" title="{$core->get_Lang('voucher')}">{$core->get_Lang('voucher')}</a>
    <a>&raquo;</a>
    <a href="{$curl}" title="{$mod}">{$core->get_Lang('vouchercategory')}</a>
    <!-- // -->
    <a href="javascript:window.history.back();" class="back fr">{$core->get_Lang('back')}</a>
</div>
<div class="clearfix"></div>
{if $msg eq 'DeleteFailed'}
<div style="padding:15px; padding-top:0;">
	<div style="padding:10px; background:red; color:#fff; font-size:14px; text-align:center; "><img src="{$URL_IMAGES}/warning-20.png" title="" align="absmiddle" />
		<strong>{$core->get_Lang('Warning')}:</strong> {$core->get_Lang('identicalposts')}
	</div>
</div>
<div class="clearfix"></div>
{/if}
<div class="container-fluid">
    <div class="page-title">
        <h2>{$core->get_Lang('vouchercategory')} <a class="btn btn-success btnCreateCategoryVoucher" title="{$core->get_Lang('add')}"> <i class="icon-plus icon-white"></i></a></h2>
        <p>{$core->get_Lang('systemmanagementvouchercategory')}</p>
    </div>
    <div class="clearfix"></div>
    <form id="forums" method="post" class="filterForm" action="">
        <div class="ui-action">
            <div class="wrap">
                <div class="fiterbox" style="width:100%;">
                    <div class="wrap">
                        <div class="fr group_buttons">
                            <a href="{$PCMS_URL}/?mod={$mod}&act={$act}" class="btn btn-warning" style="color:#fff"> <i class="icon-folder-open icon-white"></i> <span>{$core->get_Lang('all')} ({$number_all})</span> </a>
                            <a href="{$PCMS_URL}/?mod={$mod}&act={$act}&type_list=Trash" class="btn btn-danger" style="color:#fff"> <i class="icon-warning-sign icon-white"></i> <span>{$core->get_Lang('trash')} ({$number_trash})</span> </a>
                            <a href="javascript:void(0)" class="btn btn-danger btn-delete-all" clsTable="VoucherCat" style="color:#fff; display:none"> <i class="icon-remove icon-white"></i> <span>{$core->get_Lang('Delete Options')}</span> </a>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" name="filter" value="filter" />
    </form>
    <div class="wrap">
        <div class="hastable">
			<table id="list_voucher_cat" class="tbl-grid table-striped table_responsive">
				<thead>
					<tr>
						<th class="gridheader"  style="width:40px">
							<input id="check_all" type="checkbox" style="margin-top:5px;" />
						</th>
						<th style="width: 60px">{$core->get_Lang('ID')}</th>
						<th align="left">{$core->get_Lang('Title')}</th>
						<th align="left" style="width: 200px">{$core->get_Lang('List Voucher')}</th>
						<th style="width:140px; text-align: right"><strong>{$core->get_Lang('update')}</strong></th>
						<th style="width: 116px" align="center">{$core->get_Lang('Status')}</th>
						<th style="width: 106px" align="center">{$core->get_Lang('Function')}</th>
					</tr>
				</thead>
                {if $allItem[0].voucher_cat_id ne ''}
				<tbody id="SortAble">
			   {section name=i loop=$allItem}
				<tr style="cursor:move" id="order_{$allItem[i].voucher_cat_id}" class="{if $smarty.section.i.index%2 eq 0}row1{else}row2{/if}">
					<td class="index"><input name="p_key[]" class="chkitem" type="checkbox" value="{$allItem[i].voucher_cat_id}" /></td>
					<td class="index"> {$smarty.section.i.index+1}</td>
					<td>
                    	<a style="text-decoration:none" title="{$clsClassTable->getTitle($allItem[i].voucher_cat_id)}"><strong style="font-size:14px;">{$clsClassTable->getTitle($allItem[i].voucher_cat_id)}</strong></a>
                    	{if $allItem[i].is_trash eq '1'}<span class="fr" style="color:#CCC">{$core->get_Lang('intrash')}</span>{/if}
                    </td>
					<td><a href="{$PCMS_URL}/?mod=voucher&voucher_cat_id={$allItem[i].voucher_cat_id}">
                    		<i class="fa fa-folder-open"></i> {$core->get_Lang('listofarticles')} <strong style="color:#c00000;">({$clsClassTable->countItemInCat($allItem[i].voucher_cat_id)})</strong></a>
					</td>
					<td style="text-align:right">{$clsClassTable->getOneField('upd_date',$allItem[i].voucher_cat_id)|date_format:"%m-%d-%Y %H:%M"}</td>
					<td style="text-align:center">
						<a href="javascript:void(0);" class="SiteClickPublic" clsTable="VoucherCat" pkey="voucher_cat_id" sourse_id="{$allItem[i].voucher_cat_id}" rel="{$clsClassTable->getOneField('is_online',$allItem[i].voucher_cat_id)}" title="{$core->get_Lang('Click to change status')}">
							{if $clsClassTable->getOneField('is_online',$allItem[i].voucher_cat_id) eq '1'}
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
                                <li><a class="btnEditVoucherCat" title="{$core->get_Lang('edit')}" data="{$allItem[i].voucher_cat_id}"><i class="icon-edit"></i> <span>{$core->get_Lang('edit')}</span></a></li>
                                <li><a title="{$core->get_Lang('trash')}" href="{$PCMS_URL}/?mod={$mod}&act={$act}&action=Trash&voucher_cat_id={$core->encryptID($allItem[i].voucher_cat_id)}"><i class="icon-trash"></i> <span>{$core->get_Lang('Trash')}</span></a></li>
                                {else}
                                <li><a title="{$core->get_Lang('restore')}" href="{$PCMS_URL}/?mod={$mod}&act={$act}&action=Restore&voucher_cat_id={$core->encryptID($allItem[i].voucher_cat_id)}"><i class="icon-refresh"></i> <span>{$core->get_Lang('restore')}</span></a></li>
                                <li><a title="{$core->get_Lang('delete')}" class="confirm_delete" href="{$PCMS_URL}/?mod={$mod}&act={$act}&action=Delete&voucher_cat_id={$core->encryptID($allItem[i].voucher_cat_id)}"><i class="icon-remove"></i> <span>{$core->get_Lang('delete')}</span></a></li>
                                {/if}
                            </ul>
                        </div>
                    </td>
				</tr>
                {/section}
                {/if}
            </table>  
			{literal}
			<script>
			$(document).ready(function(){
				$('#list_voucher_cat').DataTable({
					columnDefs: [
					  { orderable: false, targets: '_all' }
					]
				});
			});
			</script>
			{/literal}
        </div>
    </div>
</div>
<script type="text/javascript">
var $SiteHasCat_Voucher = "{$clsConfiguration->getValue('SiteHasCat_Voucher')}";
</script>
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
			$.post(path_ajax_script+"/index.php?mod=voucher&act=ajUpdPosSortVoucherCategory", order, 
			
			function(html){
				vietiso_loading(0);
				location.href = REQUEST_URI;
			});
		}
	});
</script>
{/literal}
<script type="text/javascript" src="{$URL_THEMES}/voucher/js/jquery.voucher.js?v={$upd_version}"></script>