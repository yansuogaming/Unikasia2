<?php
/* Smarty version 3.1.38, created on 2024-04-09 09:33:29
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/property/service.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6614a8f9838ef7_42509825',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e2539e3c71be3a068b979bb35dd473134b5c0a9' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/property/service.tpl',
      1 => 1709803959,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6614a8f9838ef7_42509825 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/isocms/domains/isocms.com/public_html/inc/smarty3138/plugins/function.cycle.php','function'=>'smarty_function_cycle',),));
?>
<div class="page-tour_setting">
	<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('header_title_tour_setting');?>

	<div class="container-fluid container-fluid-2 d-flex">
		<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('menu_tour_exhautive_setting');?>

		<div class="content_setting_box">
			<div class="page_detail-title d-flex">
				<div class="title">
					<h2><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Addon Services');?>
 </h2>
					<p><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Chức năng quản lý danh sách các Addon Services trong hệ thống isoCMS');?>
</p>
					<p><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('This function is intended to manage Addon Services in isoCMS system');?>
</p>
				</div>
				<div class="button_right">
					<a class="btn btn-main btn-addnew btnCreateService" href="javascript:void(0);" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Add new');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Add new');?>
</a>
				</div>
			</div>
			<div class="wrap">
				<form id="forums" method="post" class="filterForm" action="">
					<div class="filterbox">
						<div class="wrap">
							<div class="searchbox" style="float:left !important; width:100%">
								<input type="text" class="text search_keyword" name="keyword" value="<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('search');?>
" />
								<a class="btn btn-text btn-main" href="javascript:void();" id="searchbtn" >
									<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Search');?>

								</a>
							</div>
						</div>
					</div>
					<input type="hidden" name="filter" value="filter" />
				</form>
				<div class="clearfix"><br /></div>
    			<input id="list_selected_chkitem" style="display:none" value="0" />
				<div class="wrap">
					<div class="clearfix"></div>
					<div class="statistical mb5">
						<table width="100%" border="0" cellpadding="3" cellspacing="0">
							<tr>
								<td width="50%" align="left">&nbsp;</td>
								<td width="50%" align="right">
									<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Record/page');?>
:
									<select name="recordperpage" onchange="window.location = this.options[this.selectedIndex].value">
										<option <?php if ($_smarty_tpl->tpl_vars['recordPerPage']->value == '20') {?>selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=<?php echo $_smarty_tpl->tpl_vars['act']->value;?>
&recordperpage=20">20</option>
										<?php if ($_smarty_tpl->tpl_vars['totalRecord']->value > '20') {?>
										<option <?php if ($_smarty_tpl->tpl_vars['recordPerPage']->value == '50') {?>selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=<?php echo $_smarty_tpl->tpl_vars['act']->value;?>
&recordperpage=50">50</option>
										<?php if ($_smarty_tpl->tpl_vars['totalRecord']->value > '50') {?>
										<option <?php if ($_smarty_tpl->tpl_vars['recordPerPage']->value == '100') {?>selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=<?php echo $_smarty_tpl->tpl_vars['act']->value;?>
&recordperpage=100">100</option>
										<?php if ($_smarty_tpl->tpl_vars['totalRecord']->value > '100') {?>
										<option <?php if ($_smarty_tpl->tpl_vars['recordPerPage']->value == '200') {?>selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=<?php echo $_smarty_tpl->tpl_vars['act']->value;?>
&recordperpage=200">200</option>
										<?php if ($_smarty_tpl->tpl_vars['totalRecord']->value > '200') {?>
										<option <?php if ($_smarty_tpl->tpl_vars['recordPerPage']->value == '{$totalRecord}') {?>selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=<?php echo $_smarty_tpl->tpl_vars['act']->value;?>
&recordperpage=<?php echo $_smarty_tpl->tpl_vars['totalRecord']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('All');?>
</option>
										<?php }?>
										<?php }?>
										<?php }?>
										<?php }?>
									</select>
									<a class="btn btn-danger btn-delete-all" clsTable="AddOnService" style="display:none">
										<i class="icon-remove icon-white"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Delete Options');?>
</span>
									</a>
								</td>
							</tr>
						</table>
					</div>
					<div class="hastable">
						<table cellspacing="0" class="tbl-grid table-striped table_responsive" width="100%">
							<thead>
								 <tr>
									<th class="gridheader" style="width:40px"><input id="check_all" type="checkbox" /></th>
									<th class="gridheader hiden767"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('ID');?>
</strong></th>
																		<th class="gridheader name_responsive name_responsive3" style="text-align:left"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Name');?>
</strong></th>
									<th class="gridheader hiden_responsive" style="text-align:right; width:8%"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('pricefrom');?>
</strong></th>
									<th class="gridheader hiden_responsive" style="width:80px"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('status');?>
</strong></th>
									<th class="gridheader hiden_responsive" style="text-align:center;"></th>

								</tr>
							</thead>

							<?php if ($_smarty_tpl->tpl_vars['allItem']->value[0]['addonservice_id'] != '') {?>
							<tbody id="SortAble">
								<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['allItem']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
								<tr style="cursor:move" id="order_<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['addonservice_id'];?>
"   class="<?php echo smarty_function_cycle(array('values'=>"row1,row2"),$_smarty_tpl);?>
">
									<th class="check_40"><input name="p_key[]" class="chkitem" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['addonservice_id'];?>
" /></th>
									<th class="index hiden767"> <?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['addonservice_id'];?>
</th>
																		<td class="name_service">
										<span class="title"><?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getTitle($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['addonservice_id']);?>
</span>
										<?php if ($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['is_trash'] == '1') {?><span class="fr" style="color:#CCC"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('intrash');?>
</span><?php }?>
										<button type="button" class="toggle-row inline_block767 top12" style="display:none"><i class="fa fa-caret fa-caret-down"></i></button>
									</td>
									<td data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('price');?>
" class="block_responsive border_top_responsive" style="text-align:right; white-space:nowrap"> 
										<strong class="format_price"><?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getPrice($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['addonservice_id']);?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getRate();?>
</strong> 
									</td>
									<td data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('status');?>
" class="block_responsive" style="text-align:center">
										<a href="javascript:void(0);" class="SiteClickPublic" clsTable="AddOnService" pkey="addonservice_id" sourse_id="<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['addonservice_id'];?>
" rel="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField('is_online',$_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['addonservice_id']);?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Click to change status');?>
">
											<?php if ($_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField('is_online',$_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['addonservice_id']) == '1') {?>
											<i class="fa fa-check-circle green"></i>
											<?php } else { ?>
											<i class="fa fa-minus-circle red"></i>
											<?php }?>
										</a>
									</td>
									<td data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('func');?>
" class="block_responsive" align="center" style="vertical-align: middle; text-align:center; width: 40px; white-space: nowrap;">
										<div class="btn-group">
											<button class="btn btn_dropdown dropdown-toggle" type="button" data-toggle="dropdown">
												<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
											</button>
											<ul class="dropdown-menu" style="right:0px !important">
												<?php if ($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['is_trash'] == '0') {?>
												<li><a class="btn_edit_service" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('edit');?>
" href="javascript:void();" data="<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['addonservice_id'];?>
"><i class="icon-edit"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('edit');?>
</span></a></li>
												<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('trash');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=<?php echo $_smarty_tpl->tpl_vars['act']->value;?>
&action=Trash&addonservice_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['addonservice_id']);?>
"><i class="icon-trash"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('trash');?>
</span></a></li>
												<?php } else { ?>
												<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('restore');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=<?php echo $_smarty_tpl->tpl_vars['act']->value;?>
&action=Restore&addonservice_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['addonservice_id']);?>
"><i class="icon-refresh"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('restore');?>
</span></a></li>
												<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('delete');?>
" class="confirm_delete" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=<?php echo $_smarty_tpl->tpl_vars['act']->value;?>
&action=Delete&addonservice_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['addonservice_id']);?>
"><i class="icon-remove"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('delete');?>
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
							<?php }?>
						</table>   
					</div>
					<div class="clearfix"></div>
					<div class="statistical mb5">
						<table width="100%" border="0" cellpadding="3" cellspacing="0">
							<tr>
								<td width="50%" align="left"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('statistical');?>
 <strong><?php echo $_smarty_tpl->tpl_vars['totalRecord']->value;?>
</strong> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('records');?>
/<strong><?php echo $_smarty_tpl->tpl_vars['totalPage']->value;?>
</strong> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('page');?>
. <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('youareonpagenumber');?>
 <strong><?php echo $_smarty_tpl->tpl_vars['currentPage']->value;?>
</strong></td>
								<?php if ($_smarty_tpl->tpl_vars['totalPage']->value > '1') {?>
								<td width="50%" align="right">
									<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('gotopage');?>
:
									<select name="page" onchange="window.location = this.options[this.selectedIndex].value">
										<?php
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listPageNumber']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total !== 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
										<option <?php if ($_smarty_tpl->tpl_vars['listPageNumber']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)] == $_smarty_tpl->tpl_vars['currentPage']->value) {?>selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['link_page_current']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['listPageNumber']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)];?>
"><?php echo $_smarty_tpl->tpl_vars['listPageNumber']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)];?>
</option>
										<?php
}
}
?>
									</select>

								</td>
								<?php }?>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
	var $recordPerPage = '<?php echo $_smarty_tpl->tpl_vars['recordPerPage']->value;?>
';
	var $currentPage = '<?php echo $_smarty_tpl->tpl_vars['currentPage']->value;?>
';
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/editor/tiny_mce/tiny_mce.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_THEMES']->value;?>
/property/jquery.addonservice.js"><?php echo '</script'; ?>
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
			var recordPerPage = $recordPerPage;
			var currentPage = $currentPage;
			var order = $(this).sortable("serialize")+'&update=update'+'&recordPerPage='+recordPerPage+'&currentPage='+currentPage;
			$.post(path_ajax_script+"/index.php?mod=property&act=ajUpdPosSortServiceTour", order, 
			
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
