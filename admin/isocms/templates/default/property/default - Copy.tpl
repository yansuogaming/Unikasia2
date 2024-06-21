<div class="breadcrumb">
	<strong>{$core->get_Lang('You are here')}:</strong>
	<a href="{$PCMS_URL}" title="{$core->get_Lang('Dashboard')}">{$core->get_Lang('Dashboard')}</a>
    <a>&raquo;</a>
    <a href="{$PCMS_URL}/index.php?mod={$mod}" title="{$mod}">{$mod|capitalize}</a>
</div>
<script type="text/javascript" src="{$PCMS_URL}/editor/tiny_mce/tiny_mce.js"></script>
<div class="container-fluid">
    <div class="page-title">	
    	<a href="javascript:window.history.back();" class="back fr">{$core->get_Lang('Back')}</a>
		<div class="page-title">
			<h2>{$core->get_Lang($type)} <a href="javascript:void();" style="padding:5px" class="btn btn-success clickToAddProperty">
					<i class="icon-plus icon-white"></i> <span>{$core->get_Lang('Add new')}</span>
				</a>
			</h2>
			<p>Chức năng quản lý danh sách các {$type} trong hệ thống isoCMS</p>
			<p>This function is intended to manage {$type} in isoCMS system</p>
		</div>
    </div>
	<div class="hastable">
        <div class="wrap mt10 mb20">
			{$core->getBlock('property_type')}
		</div>
        <form id="forums" method="post" action="">
			<div class="fiterbox">
				<div class="wrap">
					<div class="searchbox fl mr10">
						<input style="padding:6px;" type="text" name="keyword" value="{$keyword}" placeholder="{$core->get_Lang('Search')}..." />
						<a class="btn btn-success fileinput-button" href="javascript:void();" id="searchBtn" style=" padding:7px">
							<i class="icon-search icon-white"></i>
						</a>
					</div>
				</div>
			</div>
			<input type="hidden" name="filter" value="filter" />
		</form>
    	<div class="clearfix"></div>
		<div class="statistical mb5">
			<table width="100%" border="0" cellpadding="3" cellspacing="0">
				<tr>
					<td width="50%" align="left">&nbsp;</td>
					<td width="50%" align="right">
						{$core->get_Lang('Record/page')}:
						{$clsISO->getRecordPerPage($recordPerPage,$totalRecord,$mod,'',$type)}
						<a class="btn btn-danger btn-delete-all" clsTable="Property" style="display:none">
							<i class="icon-remove icon-white"></i> <span>{$core->get_Lang('Delete Options')}</span>
						</a>
					</td>
				</tr>
			</table>
		</div>
		<table width="100%" cellspacing="0" class="tbl-grid" id="tblLanguage">
			<thead>
				<td class="gridheader"><input id="check_all" type="checkbox" /></td>
				<td class="gridheader"><strong>{$core->get_Lang('ID')}</strong></td>
				<td class="gridheader" style="text-align:left"><strong>{$core->get_Lang('Name')}</strong></td>
				<td class="gridheader" style="text-align:left"><strong>{$core->get_Lang('Type')}</strong></td>
				<td class="gridheader" width="74px"><strong>{$core->get_Lang('Function')}</strong></td>
			</thead>
		   <tr>
		   <tbody id="SortAble">
			   {section name=i loop=$allItem}
				<tr style="cursor:move" id="order_{$allItem[i].property_id}" class="{if $smarty.section.i.iteration %2 eq '0'}row2{else}row1{/if}">
					<td class="index"><input name="p_key[]" class="chkitem" type="checkbox" value="{$allItem[i].property_id}" /></td>
					<td class="index">{$allItem[i].property_id}</td>
					<td>
						<a class="clickToEditProperty" href="javascript:void();" data="{$allItem[i].property_id}">
							<strong style="font-size:16px">{$clsClassTable->getTitle($allItem[i].property_id)}</strong>
						</a>
						{if $allItem[i].is_trash eq '1'}<span class="fr" style="color:#CCC">{$core->get_Lang('intrash')}</span>{/if}
					</td>
					<td>
						<strong>{$clsClassTable->getOneField('type',$allItem[i].property_id)}</strong>
					</td>
					<td align="center" style="vertical-align: middle; text-align:center; width: 40px; white-space: nowrap;">
						<div class="btn-group">
							<button class="btn iso-button-standard dropdown-toggle" type="button" data-toggle="dropdown"> <i class="icon-cog"></i> <span class="caret"></span></button>
							<ul class="dropdown-menu" style="right:0px !important">
								{if $allItem[i].is_trash eq '0'}
								<li><a title="Edit" class="clickToEditProperty" href="javascript:void()" data="{$allItem[i].property_id}"><i class="icon-edit"></i><span>Edit</span></a></li>
								<li><a title="{$core->get_Lang('trash')}" href="{$PCMS_URL}/?mod={$mod}&type={$type}&action=Trash&property_id={$core->encryptID($allItem[i].property_id)}"><i class="icon-trash"></i><span>{$core->get_Lang('trash')}</span></a></li>
								{else}
								<li><a title="{$core->get_Lang('restore')}" href="{$PCMS_URL}/?mod={$mod}&type={$type}&action=Restore&property_id={$core->encryptID($allItem[i].property_id)}"><i class="icon-refresh"></i><span>{$core->get_Lang('restore')}</span></a></li>
								<li><a title="{$core->get_Lang('delete')}" class="confirm_delete" href="{$PCMS_URL}/?mod={$mod}&type={$type}&action=Delete&property_id={$core->encryptID($allItem[i].property_id)}"><i class="icon-remove"></i><span>{$core->get_Lang('delete')}</span></a></li>
								{/if}
							</ul>
						</div>
					</td>
				</tr>
				{/section}
			</tbody>
		</table>
		<div class="clearfix"></div>
		{$clsISO->getPaginationAdmin($totalRecord,$totalPage,$currentPage,$listPageNumber,$link_page_current,$type)}
	</div>
</div>
<script type="text/javascript">
	var parent_id = '{$parent_id}';
	var type = '{$type}';
	var content_vn_required = '{$core->get_Lang("content_vn_required")}';
	var content_en_required = '{$core->get_Lang("content_en_required")}';
	var insert_success = '{$core->get_Lang("insert_success")}';
	var update_success = '{$core->get_Lang("update_success")}';
	var confirm_delete = '{$core->get_Lang("confirm_delete")}';
</script>
{literal}
<script type="text/javascript">
	$().ready(function(){
		$('#forums select').change(function(){
			$('#forums').submit();
		});
		$('.clickToAddProperty').click(function(){
			vietiso_loading(1);
			var adata = {
				'parent_id' : parent_id,
				'type' : type
			};
			$.ajax({
				type: "POST",
				url: path_ajax_script+"/?mod=property&act=ajLoadFormAddProperty",
				data: adata,
				dataType: "html",
				success: function(html){
					vietiso_loading(0);
					makepopup('45%','auto',html,'frmAddProperty');
				}
			});
			return false;
		});
		$('.clickToEditProperty').live('click',function(){
			var $_this = $(this);
			var adata = {
				'property_id' : $_this.attr('data'),
				'type' : type
			};
			vietiso_loading(1);
			$.ajax({
				type: "POST",
				url: path_ajax_script+"/?mod=property&act=ajLoadFormEditProperty",
				data: adata,
				dataType: "html",
				success: function(html){
					vietiso_loading(0);
					makepopup('45%','auto',html,'frmEditProperty');
				}
			});
			return false;
		});
		$('.clickToDeleteProperty').live('click',function(){
			if(confirm('Delete This Property ?')){
				var $_this = $(this);
				var adata = {
					'property_id' : $_this.attr('data')
				};
				vietiso_loading(1);
				$.ajax({
					type: "POST",
					url: path_ajax_script+"/?mod=property&act=ajDeleteProperty",
					data: adata,
					dataType: "html",
					success: function(html){
						vietiso_loading(0);
						window.location.reload();
					}
				});
			}
			return false;
		});
		$('.frmPop .clickToClose').live('click',function(e){
			var idtmp =$(this).closest('.frmPop');
			$('#isoblanketpop_'+idtmp.attr('id')).remove();
			idtmp.remove();	
		});
		$('#clickSubmitProperty').live('click',function(e){
			e.preventDefault();
			var _this = $(this);
			var $image = $('#isoman_url_image');
			if($('#title').val()==''){
				$('#title').addClass('errorInput').focus();
				alertify.error(title_required);
				return false;
			}
			/*if($('#type').val()==''){
				$('#type').addClass('errorInput').focus();
				alertify.error('Bạn chưa chọn lại thuộc tính');
				return false;
			}*/
		
			var adata = {
				'title'				: $('#title').val(),
				'image'	  		: 	$image.val(),
				'type'				: type,
				'property_id'		: _this.attr('property_id')
			};
			$.ajax({
				type : "POST",
				url : path_ajax_script+'/index.php?mod=property&act=ajSubmitProperty',
				data: adata,
				dataType: 'html',
				success : function(html){
					window.location.reload();
				}
			});
		});
	});
</script>
{/literal}
<script type="text/javascript">
	var $type= '{$type}';
	var $recordPerPage = '{$recordPerPage}';
	var $currentPage = '{$currentPage}';
</script>
<script type="text/javascript" src="{$URL_THEMES}/tour/jquery.tour.js"></script>
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
			var type = $type;
			var recordPerPage = $recordPerPage;
			var currentPage = $currentPage;
			var order = $(this).sortable("serialize")+'&update=update'+'&recordPerPage='+recordPerPage+'&currentPage='+currentPage+'&type='+type;
			$.post(path_ajax_script+"/index.php?mod=property&act=ajUpdPosSortProperty", order, 
			
			function(html){
				vietiso_loading(0);
				location.href = REQUEST_URI;
			});
		}
	});
</script>
{/literal}