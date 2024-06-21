<?php
/* Smarty version 3.1.38, created on 2024-04-10 16:40:06
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/cruise/store.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66165e764df3b1_09554815',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b70d861a5c5db486b48f25cbedb7a922980917e' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/cruise/store.tpl',
      1 => 1684728501,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66165e764df3b1_09554815 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/isocms/domains/isocms.com/public_html/inc/smarty3138/plugins/function.cycle.php','function'=>'smarty_function_cycle',),));
?>
<div class="page_container page-tour_setting">
	<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('header_title_module_setting');?>

	<div class="container-fluid container-fluid-2 d-flex">
		<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('menu_cruise_setting');?>

		<div class="content_setting_box">
			<div class="page_detail-title d-flex">
				<div class="title">
					<h2><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cruise store');?>
 <?php echo $_smarty_tpl->tpl_vars['clsCruiseStore']->value->getTitle($_smarty_tpl->tpl_vars['type']->value);?>
</h2>
					<p>Chức năng quản lý danh sách các <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cruise');?>
 <?php echo $_smarty_tpl->tpl_vars['clsCruiseStore']->value->getTitle($_smarty_tpl->tpl_vars['type']->value);?>
 trong hệ thống isoCMS</p>
					<p>This function is intended to manage <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cruise');?>
 <?php echo $_smarty_tpl->tpl_vars['clsCruiseStore']->value->getTitle($_smarty_tpl->tpl_vars['type']->value);?>
 in isoCMS system</p>
				</div>
			</div>
			<div class="filter_box">
				<form id="forums" method="post" class="filterForm" action="">
					<div class="form-group form-keyword">
						<input type="text" class="form-control m-wrap short" name="keyword" value="<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('search');?>
..." />
					</div>
					<div class="form-group form-button">
						<button type="submit" class="btn btn-main" id="findtBtn">Tìm kiếm</button>
						<input type="hidden" name="filter" value="filter" />
					</div>
				</form>	
			</div>
			<div class="wrap">
				<div class="hastable fl" style="width:52%">
					<table cellspacing="0" class="tbl-grid table-striped" width="100%">
						<thead>
							<tr>
								<th class="gridheader"></th>
								<th class="gridheader"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('index');?>
</strong></th>
								<th class="gridheader" style="text-align:left"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('nameofcity');?>
</strong></th>
								<th class="gridheader" style="text-align:center"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('func');?>
</strong></th>
							</tr>
						</thead>
						<?php if ($_smarty_tpl->tpl_vars['listItem']->value[0]['cruise_id'] != '') {?>
						<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listItem']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] <= $__section_i_0_total; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
						<tr class="<?php echo smarty_function_cycle(array('values'=>"row1,row2"),$_smarty_tpl);?>
">
							<td class="index"><input class="chkitem" name="chkid_cruise[]" value="<?php echo $_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_id'];?>
" type="checkbox"></td>
							<td class="index"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] : null)+$_smarty_tpl->tpl_vars['stt']->value;?>
</td>
							<td><strong style="font-size:18px; line-height:24px"><?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getTitle($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_id']);?>
</strong></td>
							</td>
							<td style="vertical-align:middle; width:65px; text-align:right; white-space:nowrap;">
								<a class="iso-button-action" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=<?php echo $_smarty_tpl->tpl_vars['act']->value;?>
&action=Add&type=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['type']->value);?>
&cruise_id=<?php echo $_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Add this cruise');?>
"><i class="icon-plus-sign icon-white"></i> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Add');?>
</a>
							</td>
						</tr>
						<?php
}
}
?>
						<?php } else { ?>
						<tr><td colspan="6" style="text-align:center"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('No Data');?>
!</td></tr>
						<?php }?>
					</table>
					<input type="hidden" id="list_selected_chkitem" />
					<div class="clearfix" style="height:10px"></div>
					<div style="width:100%; padding:2%; background: #fff;border:1px solid #ccc">
						<label><input type="checkbox" id="check_all" /> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('selectall');?>
</label>
						<a _type="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" class="btn btn-success fileinput-button clickToSaveCruiseStore"> 
							<i class="icon-plus icon-white"></i> 
							<span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Save');?>
</span>
						</a>
					</div>
					<div class="clearfix"></div>
					<div class="adminPaging">
						<ul class="lstAdminPaging">
						<?php
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listPageNumber']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] <= $__section_i_1_total; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
							<li>
								<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['link_page_current']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['listPageNumber']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)];?>
" <?php if ($_smarty_tpl->tpl_vars['listPageNumber']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)] == $_smarty_tpl->tpl_vars['currentPage']->value) {?>class="active"<?php }?>><?php echo $_smarty_tpl->tpl_vars['listPageNumber']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)];?>
</a>
							</li>
						<?php
}
}
?>
						</ul>
						<div class="report">
							<strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('statistical');?>
</strong>: <strong><?php echo $_smarty_tpl->tpl_vars['totalRecord']->value;?>
</strong> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('records');?>
/<strong><?php echo $_smarty_tpl->tpl_vars['totalPage']->value;?>
</strong> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('page');?>
. <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('youareonpagenumber');?>
 <strong><?php echo $_smarty_tpl->tpl_vars['currentPage']->value;?>
</strong>.
						</div>
					</div>
				</div>
				<div class="hastable fr" style="width:46%">
					<div class="fiterbox">
						<div class="wrap">
							<div class="searchbox" style="float:left !important; width:100%">
								<h1 style="font-family:Cambria; font-weight:bold; font-style:italic;"><?php echo $_smarty_tpl->tpl_vars['clsCruiseStore']->value->getTitle($_smarty_tpl->tpl_vars['type']->value);?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('selected');?>
</h1>
							</div>
						</div>
					</div>
					<table cellspacing="0" class="full-width tbl-grid table-striped table_responsive">
						<thead>
							<tr>
								<th class="gridheader"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('index');?>
</strong></th>
								<th class="gridheader" style="text-align:left"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('nameofcity');?>
</strong></th>
								<!--<th class="gridheader" colspan="4" style="width:4%"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('move');?>
</strong></th>-->
								<th class="gridheader" style="text-align:center"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('func');?>
</strong></th>
							</tr>
						</thead>
						<?php if ($_smarty_tpl->tpl_vars['listSelected']->value[0]['cruise_id'] != '') {?>
						<tbody id="SortAble">
							<?php
$__section_i_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listSelected']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_2_total = $__section_i_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_2_total !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] <= $__section_i_2_total; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
							<tr style="cursor:move" id="order_<?php echo $_smarty_tpl->tpl_vars['listSelected']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_id'];?>
" class="<?php echo smarty_function_cycle(array('values'=>"row1,row2"),$_smarty_tpl);?>
">
								<td class="index"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)+1;?>
</td>
								<td><strong style="font-size:18px; line-height:24px"><?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getTitle($_smarty_tpl->tpl_vars['listSelected']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_id']);?>
</strong></td>
								</td>
								<td style="vertical-align: middle; width: 65px; text-align: right; white-space: nowrap;">
									<div class="btn-group">
										<button class="btn btn_dropdown dropdown-toggle" type="button" data-toggle="dropdown">
											<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
										</button>
										<ul class="dropdown-menu" style="right:0px !important">
											<li><a href="<?php echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;
echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getLink($_smarty_tpl->tpl_vars['listSelected']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_id']);?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('view');?>
"><i class="icon-eye-open"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('view');?>
</span></a></li>
											<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('edit');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=edit&cruise_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['listSelected']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_id']);?>
"><i class="icon-edit"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('edit');?>
</span></a></li>
											<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('delete');?>
" class="clkDeleteCruiseStore"  _cruise_store_id="<?php echo $_smarty_tpl->tpl_vars['listSelected']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_store_id'];?>
" href="javascript:void(0);"><i class="icon-remove"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('delete');?>
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
				</div>
			</tr>
		</div>
		</div>
	</div>
</div>
<style>.disabled{-moz-opacity:.8;-webkit-opacity:.8;-o-opacity:.8;opacity:.8;filter:anpha(opacity=80)}</style>
<?php echo '<script'; ?>
 type="text/javascript">
var required_country = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('You not selected country');?>
";
var required_city = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('You not selected city');?>
";
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
$().ready(function(){
	$(document).on('click', '.clkDeleteCruiseStore', function(ev){
		if(confirm(confirm_delete)){
			var $_this = $(this);
			vietiso_loading(1);
			$.ajax({
				type: "POST",
				url:path_ajax_script+'/index.php?mod='+mod+'&act=ajDeleteCruiseStore',
				data: {'cruise_store_id': $_this.attr('_cruise_store_id')},
				dataType: "html",
				success: function(html){
					window.location.reload(true);
				}
			});
		}
	});
	$("input[name='chkid_cruise[]'],#check_all").change(function(){
		var cruise_id = '';
		if($("input[name='chkid_cruise[]']:checked").length > 0){
			cruise_id += '|';
			$("input[name='chkid_cruise[]']:checked").each(function(){
				cruise_id += $(this).val();
				cruise_id += '|';
			});	
		}
		$('#list_selected_chkitem').val(cruise_id);
	})
	$(document).on('click', '.clickToSaveCruiseStore', function(ev){
		var _this = $(this);
		if($('#list_selected_chkitem').val()==''){
			alertify.error(required_city);
			return false;
		}
		var adata = {
			'list_cruise_id' : $('#list_selected_chkitem').val(),
			'type' : _this.attr('_type')
		};
		_this.find('span').text(loading);
		$.ajax({
			type: "POST",
			url: path_ajax_script+"/index.php?mod="+mod+"&act=ajSaveStoreForCruise",
			data: adata,
			dataType: "html",
			success: function(html){
				_this.find('span').text(save);
				$('#check_all').removeAttr('checked');
				window.location.reload(true);
			}
		});
	});
});
<?php echo '</script'; ?>
>


<?php echo '<script'; ?>
 type="text/javascript">
	var $type = '<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
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
			$.post(path_ajax_script+"/index.php?mod=cruise&act=ajUpdPosSortCruiseStore", order, 
			
			function(html){
				vietiso_loading(0);
				window.location.reload(true);
			});
		}
	});
<?php echo '</script'; ?>
>
<?php }
}
