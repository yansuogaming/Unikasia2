<?php
/* Smarty version 3.1.38, created on 2024-04-08 13:11:13
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/cruise/property.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66138a81db7c63_88061965',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '87f1ac96e688357d11b18e4321383a3b7e9766ef' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/cruise/property.tpl',
      1 => 1684730972,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66138a81db7c63_88061965 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="page_container page-tour_setting">
	<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('header_title_module_setting');?>

	<div class="container-fluid container-fluid-2 d-flex">
		<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('menu_cruise_setting');?>

		<div class="content_setting_box">
			<div class="page_detail-title d-flex">
				<div class="title">
					<h2><?php if ($_smarty_tpl->tpl_vars['type']->value == "GroupCruiseFacilities") {
echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('groupcruisefacilities');
} else {
echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getTextByType($_smarty_tpl->tpl_vars['type']->value);
}?></h2>
					<p>Chức năng quản lý danh sách các <?php if ($_smarty_tpl->tpl_vars['type']->value == "GroupCruiseFacilities") {
echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('groupcruisefacilities');
} else {
echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getTextByType($_smarty_tpl->tpl_vars['type']->value);
}?> trong hệ thống isoCMS</p>
					<p>This function is intended to manage <?php if ($_smarty_tpl->tpl_vars['type']->value == "GroupCruiseFacilities") {
echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('groupcruisefacilities');
} else {
echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getTextByType($_smarty_tpl->tpl_vars['type']->value);
}?> in isoCMS system</p>
				</div>
				<div class="button_right">
					<a class="btn btn-main btn-addnew clickToAddPropertyss" href="javascript:void(0);" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('add');?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cruise Class');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('add');?>
 <?php if ($_smarty_tpl->tpl_vars['type']->value == "GroupCruiseFacilities") {
echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('groupcruisefacilities');
} else {
echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getTextByType($_smarty_tpl->tpl_vars['type']->value);
}?></a>
				</div>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['type']->value == 'HighLow') {?>
			<form id="edititem" method="post" action="" enctype="multipart/form-data" class="validate-form">
				<?php $_smarty_tpl->_assignInScope('high_season_month', $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('high_season_month'));?>
				<div class="service_left">
					<h4 style="margin:30px 0 0px"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Check Rates');?>
</h4>
				</div>
				<div class="row-span">
					<label style="font-size:12px"><strong>Check:</strong> Tháng cao điểm <br /><strong>UnCheck:</strong> Tháng thấp điểm</label>
					<div class="wrap mt10">
						<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstMonth']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
						<label class="lblcheck" style="width:16%">
							<input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['clsISO']->value->checkInArray($_smarty_tpl->tpl_vars['high_season_month']->value,$_smarty_tpl->tpl_vars['lstMonth']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)])) {?>checked="checked"<?php }?> name="season_month[]" value="<?php echo $_smarty_tpl->tpl_vars['lstMonth']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)];?>
" /> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('month');?>
 <?php echo $_smarty_tpl->tpl_vars['lstMonth']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)];?>

						</label>
						<?php
}
}
?>
					</div>
					<div class="mt10" id="tblCruisePrice"></div>
				</div>
				<fieldset class="submit-buttons">
					 <?php echo $_smarty_tpl->tpl_vars['saveBtn']->value;?>

					<input value="Update" name="submit" type="hidden">
				</fieldset>
			</form>
			<?php } else { ?>
			<div class="clearfix"><br /></div>
			<div class="filter_box">
				<form id="forums" method="post" action="" class="filterForm">
				<div class="ui-action">
					<div class="wrap">
						<div class="filterbox filterbox-border" style="width:100%">
							<div class="wrap">
								<div class="form-group form-keyword">
									<input class="form-control" type="text" name="keyword" value="<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('search');?>
..." />
								</div>
								<div class="form-group form-button">
									<button type="submit" class="btn btn-main" id="findtBtn">Tìm kiếm</button>
									<input type="hidden" name="filter" value="filter" />
								</div>
								<div class="form-group form-button">
									<a class="btn btn-delete-all" id="btn_delete" clsTable="CruiseProperty" style="display:none">
										<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Delete');?>

									</a>
								</div>
								<?php if ($_smarty_tpl->tpl_vars['type']->value == 'UsefulInformation') {?>
								<div class="group_buttons fr"> <a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=cruise&act=property&type=GroupUsefulInformation" class="btn btn-success btnNew" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Group UsefulInformation');?>
"><i class="icon-list icon-white"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Group UsefulInformation');?>
</span> </a></div>
								<?php } elseif ($_smarty_tpl->tpl_vars['type']->value == 'NearestEssentials') {?>
								<div class="group_buttons fr"> <a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=cruise&act=property&type=GroupNearestEssentials" class="btn btn-success btnNew" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Group Nearest Essentials');?>
"><i class="icon-list icon-white"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Group Nearest Essentials');?>
</span> </a></div>
								<?php } elseif ($_smarty_tpl->tpl_vars['type']->value == 'CruiseFacilities') {?>
								<div class="group_buttons fr"> <a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=cruise&act=property&type=GroupCruiseFacilities" class="btn btn-success btnNew" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Group Cruise Facilities');?>
"><i class="icon-list icon-white"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Group Cruise Facilities');?>
</span> </a></div>
								<?php } elseif ($_smarty_tpl->tpl_vars['type']->value == 'Benefits') {?>
								<div class="group_buttons fr"> <a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=cruise&act=property&type=GroupBenefits" class="btn btn-success btnNew" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Group Benefits');?>
"><i class="icon-list icon-white"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Group Benefits');?>
</span> </a></div>
								<?php } else { ?>
								<?php }?>
							</div>
						</div>
					</div>
				</div>
				<input type="hidden" name="filter" value="filter" />
			</form>
			</div>
			<div class="statistical mb5">
				<table width="100%" border="0" cellpadding="3" cellspacing="0">
					<tr>
						<td width="50%" align="left">&nbsp;</td>
						<td width="50%" align="right">
							<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Record/page');?>
:
							<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getRecordPerPage($_smarty_tpl->tpl_vars['recordPerPage']->value,$_smarty_tpl->tpl_vars['totalRecord']->value,$_smarty_tpl->tpl_vars['mod']->value,$_smarty_tpl->tpl_vars['act']->value,$_smarty_tpl->tpl_vars['type']->value);?>

						</td>
					</tr>
				</table>
			</div>
			<form id="listItem" method="post" action="">
				<input type="hidden" value="delete" name="delete" />
				<table cellspacing="0" class="tbl-grid table-striped table_responsive tblAction full-width" id="tblLanguage">
					<thead>
						<tr>
							<th class="gridheader" style="width:40px"><input id="check_all" type="checkbox" /></th>
							<th class="gridheader hiden767"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('ID');?>
</strong></th>
							<th class="gridheader name_responsive" style="text-align:left"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('title');?>
</strong></th>
							<?php if ($_smarty_tpl->tpl_vars['type']->value == 'Conditions') {?>
							<th class="gridheader hiden767" style="text-align:left; width:120px"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Type Group');?>
</strong></th>
							<?php }?>
							<th class="gridheader hiden767" style="text-align:center;"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('func');?>
</strong></th>
						</tr>
					</thead>
					<?php if ($_smarty_tpl->tpl_vars['allItem']->value[0]['cruise_property_id']) {?>
					<tbody id="SortAble">
						<?php
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['allItem']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total !== 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
						<tr style="cursor:move" id="order_<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_property_id'];?>
" class="<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)%2 == 0) {?>row1<?php } else { ?>row2<?php }?>">
							<th class="index"><input name="p_key[]" class="chkitem" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_property_id'];?>
" /></th>
							<td class="index hiden767"><?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_property_id'];?>
</td>
							<td class="name_service">
								<a class="clickToEditProperty" href="javascript:void(0);" data="<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_property_id'];?>
">
									<strong class="title">
										<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getTitle($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_property_id']);?>

									</strong>
								</a>
								<button type="button" class="toggle-row inline_block767" style="display:none"><i class="fa fa-caret fa-caret-down"></i></button>
							</td>
							<?php if ($_smarty_tpl->tpl_vars['type']->value == 'Conditions') {?>
							<td class="block_responsive" data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Type Group');?>
">
								<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField('type_group',$_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_property_id']);?>

							</td>
							<?php }?>
							<td class="block_responsive" data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('func');?>
" align="center" style="vertical-align: middle; text-align:center; width: 40px; white-space: nowrap;">
								<div class="btn-group">
									<button class="btn btn_dropdown dropdown-toggle" type="button" data-toggle="dropdown">
										<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
									</button>
									<ul class="dropdown-menu" style="right:0px !important">
										<li><a class="clickToEditProperty" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('edit');?>
" href="javascript:void(0);" data="<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_property_id'];?>
"><i class="icon-edit"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('edit');?>
</span></a></li>
										<li><a class="clickToDeleteProperty" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('delete');?>
" href="javascript:void(0);" data="<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_property_id'];?>
"><i class="icon-remove"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('delete');?>
</span></a></li>
									</ul>
								</div>
							</td>
						</tr>
						<?php
}
}
?>
						<?php } else { ?><tr><td colspan="15"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('nodata');?>
</td></tr>
					</tbody>
					<?php }?>
				</table>
			</form>
			<div class="clearfix"></div>
			<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getPaginationAdmin($_smarty_tpl->tpl_vars['totalRecord']->value,$_smarty_tpl->tpl_vars['totalPage']->value,$_smarty_tpl->tpl_vars['currentPage']->value,$_smarty_tpl->tpl_vars['listPageNumber']->value,$_smarty_tpl->tpl_vars['link_page_current']->value,$_smarty_tpl->tpl_vars['type']->value);?>

			<?php }?>
		</div>
	</div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
	var parent_id = '<?php echo $_smarty_tpl->tpl_vars['parent_id']->value;?>
';
	var type = '<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
';
	var $SiteHasCruisesProperty = "<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SiteHasCruisesProperty');?>
";
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
	var $recordPerPage = '<?php echo $_smarty_tpl->tpl_vars['recordPerPage']->value;?>
';
	var $currentPage = '<?php echo $_smarty_tpl->tpl_vars['currentPage']->value;?>
';
	var $type = '<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
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
			var recordPerPage = $recordPerPage;
			var currentPage = $currentPage;
			var type = $type;
			var order = $(this).sortable("serialize")+'&update=update'+'&recordPerPage='+recordPerPage+'&currentPage='+currentPage+'&type='+type;
			$.post(path_ajax_script+"/index.php?mod="+mod+"&act=ajUpdPosSortListCruiseProperty", order, 
			
			function(html){
				vietiso_loading(0);
				location.href = REQUEST_URI;
			});
		}
	});
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_THEMES']->value;?>
/cruise/jquery.cruise.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
><?php }
}
