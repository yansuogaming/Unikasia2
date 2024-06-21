<div class="page_container">
	<div class="page-title  d-flex">
        <div class="title">
			<h2>{$core->get_Lang('testimonial')} <div class="info_module" data-toggle="tooltip" data-placement="right" title="Chức năng quản lý danh sách {$core->get_Lang('testimonial')} trong hệ thống isoCMS">i</div></h2>
			<p>Chức năng quản lý danh sách các testimonials trong hệ thống isoCMS</p>
		<p>{$core->get_Lang('This function is intended to manage testimonials in isoCMS system')}</p>
			
		</div>
		<div class="button_right">
			<a class="btn btn-main btn-addnew add_new_testimonial" title="{$core->get_Lang('Add')} {$core->get_Lang('testimonial')}">{$core->get_Lang('Add')} {$core->get_Lang('testimonial')}</a>
			<div class="btn btn-setting"><a href="{$PCMS_URL}/?mod={$mod}&act=setting" title="{$core->get_Lang('Setting')}"><i class="fa fa-cog" aria-hidden="true"></i></a></div>
		</div>
    </div>
	<div class="container-fluid">
    <div class="wrap">
       <div class="filter_box">
			<form id="forums" method="post" action="" name="filter" class="filterForm">
				<div class="form-group form-keyword">
					<input type="text" class="text form-control" name="keyword" value="{$keyword}" placeholder="{$core->get_Lang('search')}..." />
				</div>
				<div class="form-group form-button">
					<button type="submit" class="btn btn-main" id="findtBtn">{$core->get_Lang('Search')}</button>
					<input type="hidden" name="filter" value="filter">
				</div>				
				<div class="form-group form-button">
					<a class="btn btn-delete-all" id="btn_delete" clsTable="Testimonial" style="display:none">
						{$core->get_Lang('Delete')}
					</a>
				</div>
			</form>
			<div style="float:right;">
				<a href="{$PCMS_URL}/?mod={$mod}" class="btn btn-warning btnNew" style="color:#fff"> <i class="icon-folder-open icon-white"></i> <span>{$core->get_Lang('all')}({$number_all})</span> </a>
				<a href="{$PCMS_URL}/?mod={$mod}&type_list=Trash" class="btn btn-danger btnNew" style="color:#fff"> <i class="icon-warning-sign icon-white"></i> <span>{$core->get_Lang('trash')} ({$number_trash})</span> </a>
			</div>
		</div>
        <input id="list_selected_chkitem" style="display:none" value="0" />
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
        <table cellspacing="0" class="tbl-grid table-striped table_responsive" width="100%">
			<thead>
				<tr>
					<th class="gridheader" style="width:40px"><input id="check_all" type="checkbox" /></th>
					<th class="gridheader hiden767"><strong>{$core->get_Lang('ID')}</strong></th>
					<th class="gridheader name_responsive" style="text-align:left"><strong>{$core->get_Lang('Name')}</strong></th>
					<th class="gridheader hiden_responsive" style="width:60px"><strong>{$core->get_Lang('status')}</strong></th>
					<th class="gridheader hiden_responsive" style="width:120px" align="center"><strong>{$core->get_Lang('update')}</strong></th>
					<th class="gridheader hiden_responsive" style="width:70px"><strong>{$core->get_Lang('func')}</strong></th>
				</tr>
			</thead>
			<tbody id="SortAble">
			   {section name=i loop=$allItem}
				<tr style="cursor:move" id="order_{$allItem[i].testimonial_id}" class="{if $smarty.section.i.index%2 eq 0}row1{else}row2{/if}">
					<th class="check_40"><input name="p_key[]" class="chkitem" type="checkbox" value="{$allItem[i].testimonial_id}" /></th>
					<th class="index hiden767">{$allItem[i].testimonial_id}</th>
					<td class="name_service">
						<strong class="title">{if $clsClassTable->getOneField('is_online',$allItem[i].testimonial_id) eq 0}<span style="color:#F90">[PRIVATE]</span>{/if} {$clsClassTable->getTitle($allItem[i].testimonial_id)}</strong>
						{if $allItem[i].is_trash eq '1'}<span class="fr" style="color:#CCC">{$core->get_Lang('intrash')}</span>{/if}
						<button type="button" class="toggle-row inline_block767" style="display:none"><i class="fa fa-caret fa-caret-down"></i></button>
					</td>
					<td data-title="{$core->get_Lang('status')}" class="block_responsive border_top_responsive" style="text-align:center">
						<a href="javascript:void(0);" class="SiteClickPublic" clsTable="Testimonial" pkey="testimonial_id" sourse_id="{$allItem[i].testimonial_id}" rel="{$clsClassTable->getOneField('is_online',$allItem[i].testimonial_id)}" title="{$core->get_Lang('Click to change status')}">
							{if $clsClassTable->getOneField('is_online',$allItem[i].testimonial_id) eq '1'}
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
								<li><a href="{$DOMAIN_NAME}{$clsClassTable->getLink($allItem[i].testimonial_id)}" target="_blank" title="{$core->get_Lang('view')}"><i class="icon-eye-open"></i> <span>{$core->get_Lang('view')}</span></a></li>
								<li><a title="{$core->get_Lang('edit')}" href="{$PCMS_URL}/testimonial/insert/{$allItem[i].testimonial_id}/overview"><i class="icon-edit"></i> <span>{$core->get_Lang('edit')}</span></a></li>
								<li><a title="{$core->get_Lang('trash')}" href="{$PCMS_URL}/?mod={$mod}&act=trash&testimonial_id={$core->encryptID($allItem[i].testimonial_id)}{$pUrl}"><i class="icon-trash"></i> <span>{$core->get_Lang('trash')}</span></a></li>
								{else}
								<li><a title="{$core->get_Lang('restore')}" href="{$PCMS_URL}/?mod={$mod}&act=restore&testimonial_id={$core->encryptID($allItem[i].testimonial_id)}{$pUrl}"><i class="icon-refresh"></i> <span>{$core->get_Lang('restore')}</span></a></li>
								<li><a title="{$core->get_Lang('delete')}" class="confirm_delete" href="{$PCMS_URL}/?mod={$mod}&act=delete&testimonial_id={$core->encryptID($allItem[i].testimonial_id)}{$pUrl}"><i class="icon-remove"></i> <span>{$core->get_Lang('delete')}</span></a></li>
								{/if}
							</ul>
						</div>
					</td>
				</tr>
				{/section}
       		</tbody>
	    </table>
		{$clsISO->getPaginationAdmin($totalRecord,$totalPage,$currentPage,$listPageNumber,$link_page_current,$type)}
	</div>
</div>
</div>

<script type="text/javascript">
	var $recordPerPage = '{$recordPerPage}';
	var $currentPage = '{$currentPage}';
</script>
<script type="text/javascript" src="{$URL_THEMES}/testimonial/jquery.testimonial.new.js?v={$upd_version}"></script>
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
			$.post(path_ajax_script+"/index.php?mod="+mod+"&act=ajUpdPosSortListTestimonial", order, 
			
			function(html){
				vietiso_loading(0);
				location.href = REQUEST_URI;
			});
		}
	});
</script>
{/literal}