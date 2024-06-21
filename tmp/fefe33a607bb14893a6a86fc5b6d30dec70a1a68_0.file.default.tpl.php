<?php
/* Smarty version 3.1.38, created on 2024-04-08 15:29:00
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/property/default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6613aacc63be65_35511829',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fefe33a607bb14893a6a86fc5b6d30dec70a1a68' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/property/default.tpl',
      1 => 1709952599,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6613aacc63be65_35511829 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/isocms/domains/isocms.com/public_html/inc/smarty3138/plugins/modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),1=>array('file'=>'/home/isocms/domains/isocms.com/public_html/inc/smarty3138/plugins/function.cycle.php','function'=>'smarty_function_cycle',),));
?>
<div class="breadcrumb">
	<strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('You are here');?>
:</strong>
	<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Dashboard');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Dashboard');?>
</a>
    <a>&raquo;</a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['mod']->value);?>
</a>
</div>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/editor/tiny_mce/tiny_mce.js"><?php echo '</script'; ?>
>
<div class="page-tour_setting page_container">
    <?php if ($_smarty_tpl->tpl_vars['type']->value != 'Unit') {?>
	<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('header_title_tour_setting');?>

    <?php }?>
	<div class="container-fluid container-fluid-2 d-flex">
        <?php if ($_smarty_tpl->tpl_vars['type']->value != 'Unit') {?>
		<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('menu_tour_exhautive_setting');?>

        <?php }?>
		<div class="content_setting_box <?php echo $_smarty_tpl->tpl_vars['type']->value;?>
">
			<div class="page_detail-title d-flex">
				<div class="title">
					<h2><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang($_smarty_tpl->tpl_vars['type']->value);?>
 </h2>
					<p>Chức năng quản lý danh sách các <?php echo $_smarty_tpl->tpl_vars['type']->value;?>
 trong hệ thống isoCMS</p>
					<p>This function is intended to manage <?php echo $_smarty_tpl->tpl_vars['type']->value;?>
 in isoCMS system</p>
				</div>
				<div class="button_right">
					<a class="btn btn-main btn-addnew clickToAddProperty" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Add');?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang($_smarty_tpl->tpl_vars['type']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Add');?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang($_smarty_tpl->tpl_vars['type']->value);?>
</a>
				</div>
			</div>
			<div class="container-fluid">
				<div class="wrap">
					<div class="filter_box">
						<form id="forums" method="post" class="filterForm" action="">
							<div class="form-group form-keyword">
								<input class="form-control" type="text" name="keyword" value="<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('search');?>
..." />
							</div>
							<div class="form-group form-button">
								<button type="submit" class="btn btn-main" id="findtBtn">Tìm kiếm</button>
								<input type="hidden" name="filter" value="filter" />
								<input type="hidden" name="type" value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" />
							</div>
							<div class="form-group form-button">
								<a class="btn btn-delete-all" id="btn_delete" clsTable="Property" style="display:none">
									<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Delete');?>

								</a>
							</div>
						</form>	
						<div class="record_per_page">
							<label><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Record/page');?>
</label>
							<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getRecordPerPage($_smarty_tpl->tpl_vars['recordPerPage']->value,$_smarty_tpl->tpl_vars['totalRecord']->value,$_smarty_tpl->tpl_vars['mod']->value,'',$_smarty_tpl->tpl_vars['type']->value);?>

						</div>
					</div>
					
				</div>
				<div class="hastable">
					<table width="100%" cellspacing="0" class="tbl-grid table-striped table_responsive" id="tblLanguage">
						<thead>
							<tr>
								<th class="gridheader" style="width:40px"><input id="check_all" type="checkbox" /></th>
								<th class="gridheader hiden767" style="width:60px"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('ID');?>
</strong></th>
								<th class="gridheader name_responsive" style="text-align:left"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Name');?>
</strong></th>
								<th class="gridheader hiden_responsive text-left" style="width:100px"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Type');?>
</strong></th>
								<th class="gridheader hiden_responsive" style="text-align:center; width:60px"></th>
							</tr>
						</thead>
					   <tr>
					   <tbody id="SortAble">
							<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['allItem']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
							<tr style="cursor:move" id="order_<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['property_id'];?>
"   class="<?php echo smarty_function_cycle(array('values'=>"row1,row2"),$_smarty_tpl);?>
">
								<th class="check_40"><input name="p_key[]" class="chkitem" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['property_id'];?>
" /></th>
								<th class="index hiden767"> <?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['property_id'];?>
</th>
								<td class="name_service">
									<span class="title"><?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getTitle($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['property_id']);?>
</span>
									<?php if ($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['is_trash'] == '1') {?><span class="fr" style="color:#CCC"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('intrash');?>
</span><?php }?>
									<button type="button" class="toggle-row inline_block767" style="display:none"><i class="fa fa-caret fa-caret-down"></i></button>
								</td>
								<td class="text-left block_responsive border_top_responsive" style="white-space:nowrap" data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Type');?>
">
									<strong><?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField('type',$_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['property_id']);?>
</strong>
								</td>
								<td data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('func');?>
" class="block_responsive" align="center" style="vertical-align: middle; text-align:center; width: 60px; white-space: nowrap;">
									<div class="btn-group">
										<button class="btn btn_dropdown dropdown-toggle" type="button" data-toggle="dropdown">
											<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
										</button>
										<ul class="dropdown-menu" style="right:0px !important">
											<?php if ($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['is_trash'] == '0') {?>
											<li><a title="Edit" class="clickToEditProperty" href="javascript:void()" data="<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['property_id'];?>
"><i class="icon-edit"></i><span>Edit</span></a></li>
											<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('trash');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&type=<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
&action=Trash&property_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['property_id']);?>
"><i class="icon-trash"></i><span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('trash');?>
</span></a></li>
											<?php } else { ?>
											<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('restore');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&type=<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
&action=Restore&property_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['property_id']);?>
"><i class="icon-refresh"></i><span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('restore');?>
</span></a></li>
											<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('delete');?>
" class="confirm_delete" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&type=<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
&action=Delete&property_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['property_id']);?>
"><i class="icon-remove"></i><span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('delete');?>
</span></a></li>
											<?php }?>
										</ul>
									</div>
								</td>
							</tr>
							<?php
}
}
?>
						</tbody>
					   
					</table>
					<div class="clearfix"></div>
					<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getPaginationAdmin($_smarty_tpl->tpl_vars['totalRecord']->value,$_smarty_tpl->tpl_vars['totalPage']->value,$_smarty_tpl->tpl_vars['currentPage']->value,$_smarty_tpl->tpl_vars['listPageNumber']->value,$_smarty_tpl->tpl_vars['link_page_current']->value,$_smarty_tpl->tpl_vars['type']->value);?>

				</div>
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
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_THEMES']->value;?>
/tour/jquery.tour.js"><?php echo '</script'; ?>
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
