<?php
/* Smarty version 3.1.38, created on 2024-04-08 14:40:16
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/hotel/property.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66139f60407ea6_81494876',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd88e270e46ac61d1edc186351c1997c54c8d94b9' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/hotel/property.tpl',
      1 => 1696390578,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66139f60407ea6_81494876 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/isocms/domains/isocms.com/public_html/inc/smarty3138/plugins/function.cycle.php','function'=>'smarty_function_cycle',),));
?>
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_smarty_tpl->tpl_vars['URL_CSS']->value;?>
/module.css?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
">
<div class="page-tour_setting">
	<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('header_title_module_setting');?>

	<div class="container-fluid container-fluid-2 d-flex">
		<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('menu_hotel_setting');?>

		<div class="content_setting_box">
			<div class="page_detail-title d-flex">
				<div class="title">
					<h2><?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getTextByType($_smarty_tpl->tpl_vars['type']->value);?>
 </h2>
					<p>Chức năng quản lý danh sách các <?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getTextByType($_smarty_tpl->tpl_vars['type']->value);?>
 trong hệ thống isoCMS</p>
				</div>
				<div class="button_right">
					<a class="btn btn-main btn-addnew clickToAddProperty" href="javascript:void(0);" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Add new');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Add new');?>
</a>
				</div>
			</div>
			
			<div class="wrap">
				<div class="statistical mb5">
					<table width="100%" border="0" cellpadding="3" cellspacing="0">
						<tr>
							<td width="50%" align="left">&nbsp;</td>
							<td width="50%" align="right">
								<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Record/page');?>
:
								<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getRecordPerPage($_smarty_tpl->tpl_vars['recordPerPage']->value,$_smarty_tpl->tpl_vars['totalRecord']->value,$_smarty_tpl->tpl_vars['mod']->value,$_smarty_tpl->tpl_vars['act']->value,$_smarty_tpl->tpl_vars['type']->value);?>

								<a class="btn btn-danger btn-delete-all" clsTable="Property" style="display:none">
									<i class="icon-remove icon-white"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Delete Options');?>
</span>
								</a>
							</td>
						</tr>
					</table>
				</div>
				<table cellspacing="0" class="tbl-grid table-data full-width table-striped table_responsive">
					<thead>
						<tr>
							<?php if ($_smarty_tpl->tpl_vars['type']->value == 'HotelFacilities' || $_smarty_tpl->tpl_vars['type']->value == 'RoomFacilities') {?>
							<th class="gridheader boder_top_none" style="text-align:left; width: 80px;"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Favorite');?>
</th>
							<?php }?>
							<th class="gridheader boder_top_none hiden767" style="text-align:left; width: 145px;"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('ID');?>
</th>
							<th class="gridheader boder_top_none name_responsive <?php if ($_smarty_tpl->tpl_vars['type']->value != 'HotelFacilities' && $_smarty_tpl->tpl_vars['type']->value != 'RoomFacilities') {?>full-w767<?php }?>" style="text-align:left;width: calc(100% - 80px)"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Title');?>
</th>
							<th class="gridheader boder_top_none hiden767" style="text-align:center; width: 80px;"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('func');?>
</th>
						</tr>
					</thead>
					<?php if ($_smarty_tpl->tpl_vars['allItem']->value) {?>
					<tbody id="SortAble">
						<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['allItem']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
						<tr style="cursor:move" id="order_<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['property_id'];?>
" class="<?php echo smarty_function_cycle(array('values'=>"row1,row2"),$_smarty_tpl);?>
">
							<?php if ($_smarty_tpl->tpl_vars['type']->value == 'HotelFacilities' || $_smarty_tpl->tpl_vars['type']->value == 'RoomFacilities') {?>
							<td class="text_center has-checkbox" style="with:80px">
							<input class="changeFavorite" <?php if ($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['is_favorite']) {?> checked<?php }?> type="checkbox" data="<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['property_id'];?>
">
							</td>
							<?php }?>
							<td class="text_left hiden767"><?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['property_id'];?>
</td>
							<td class="name_service <?php if ($_smarty_tpl->tpl_vars['type']->value != 'HotelFacilities' && $_smarty_tpl->tpl_vars['type']->value != 'RoomFacilities') {?>title_td1<?php }?>"><span class="title"><?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getTitle($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['property_id']);?>
</span>
							<button type="button" class="toggle-row inline_block767" style="display:none"><i class="fa fa-caret fa-caret-down"></i></button></td>
							</td>
							<td class="block_responsive text-center" data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('func');?>
">
								<div class="btn-group">
									<button class="btn btn_dropdown dropdown-toggle" type="button" data-toggle="dropdown">
										<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
									</button>
									<ul class="dropdown-menu" style="right:0px !important">
										<li><a class="clickToEditProperty item_left" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Edit');?>
" href="javascript:void(0);" data="<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['property_id'];?>
"><i class="icon-edit"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Edit');?>
</span></a></li>
										<li><a class="clickToDeleteProperty item_right" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Delete');?>
" href="javascript:void(0);" data="<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['property_id'];?>
" ><i class="icon-remove"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Delete');?>
</span></a></li>
									</ul>
								</div>
							</td>
						</tr>
						<?php
}
}
?>
					</tbody>
					<?php } else { ?>
					<tr><td colspan="7" style="text-align:center"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('No Data');?>
!</td></tr>
					<?php }?>
				</table>
				<div class="clearfix"></div>
				<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getPaginationAdmin($_smarty_tpl->tpl_vars['totalRecord']->value,$_smarty_tpl->tpl_vars['totalPage']->value,$_smarty_tpl->tpl_vars['currentPage']->value,$_smarty_tpl->tpl_vars['listPageNumber']->value,$_smarty_tpl->tpl_vars['link_page_current']->value,$_smarty_tpl->tpl_vars['type']->value);?>

			</div>
		</div>
	</div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
	var parent_id = '<?php echo $_smarty_tpl->tpl_vars['parent_id']->value;?>
';
	var type = '<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
';
	var text_delete_type = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Delete");?>
 <?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getTextByType($_smarty_tpl->tpl_vars['type']->value);?>
' ;
	var content_vn_required = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("content_vn_required");?>
';
	var content_en_required = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("content_en_required");?>
';
	var insert_success = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("insert_success");?>
';
	var update_success = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("update_success");?>
';
	var confirm_delete = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("confirm_delete");?>
';
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
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
					makepopup('700px','auto',html,'frmAddProperty','frmPop2');
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
					makepopup('700px','auto',html,'frmEditProperty','frmPop2');
				}
			});
			return false;
		});
		$('.clickToDeleteProperty').live('click',function(){
			if(confirm(text_delete_type)){
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
		$('.changeFavorite').live('change',function(){
			var $_this = $(this);
			$.ajax({
				type: 'POST',
				url: path_ajax_script+'/index.php?mod=property&act=ajUpdatePropertyFavorite',
				data:{'property_id': $_this.attr('data'),'is_favorite' : $_this.is(':checked')?1:0},
				dataType:'html',
				success: function(html){
					alertify.success(update_success);
				}
			});
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
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
	var $type= '<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
';
	var $recordPerPage = '<?php echo $_smarty_tpl->tpl_vars['recordPerPage']->value;?>
';
	var $currentPage = '<?php echo $_smarty_tpl->tpl_vars['currentPage']->value;?>
';
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
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
<?php echo '</script'; ?>
>
<?php }
}
