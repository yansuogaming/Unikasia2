<?php
/* Smarty version 3.1.38, created on 2024-04-10 16:41:41
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/tour_exhautive/category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66165ed57518c9_98477177',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bcb80a48e3331f5e70156129068378f5a9de960e' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/tour_exhautive/category.tpl',
      1 => 1709804016,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66165ed57518c9_98477177 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/isocms/domains/isocms.com/public_html/inc/smarty3138/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div class="page-tour_setting page_container">
	<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('header_title_tour_setting');?>

	<div class="container-fluid container-fluid-2 d-flex">
		<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('menu_tour_exhautive_setting');?>

		<div class="content_setting_box">	
			<div class="page_detail-title d-flex">
				<div class="title">
					<h2><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Travel Style list');?>
 </h2>
					<p><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Chức năng quản lý danh sách các danh mục tour phục vụ cho việc phân loại tour du lịch trong hệ thống isoCMS');?>
</p>
				<p><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('This function is intended to manage Travel Styles in isoCMS system');?>
</p>
				</div>
				<div class="button_right">
					<a class="btn btn-main btn-addnew btnCreateToursCategory" href="javascript:void(0);" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Add new');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Add new');?>
</a>
				</div>
			</div>
			<div class="clearfix"></div>			
			<div class="filter_box">
				<form id="forums" method="post" class="filterForm" action="">
						<div class="form-group form-keyword">
							<input class="form-control" type="text" name="keyword" value="<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('search');?>
">
						</div>
						<?php if ($_smarty_tpl->tpl_vars['SiteHasGroup_Tours']->value) {?>
							<div class="form-group">
								<select class="slb form-control" data-width="100%"  onchange="_reload()" name="tour_group_id">
								<?php echo $_smarty_tpl->tpl_vars['clsTourGroup']->value->makeSelectboxOption($_smarty_tpl->tpl_vars['tour_group_id']->value);?>

								</select>
							</div>
						<?php }?>
						<div class="form-group form-button">
							<button type="submit" class="btn btn-main" id="findtBtn"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Search');?>
</button>
							<input type="hidden" name="filter" value="filter">
						</div>
						<div class="form-group form-button">
							<a class="btn btn-delete-all " id="btn_delete" clstable="TourCategory" style="display: none;">
								Xóa
							</a>
						</div>
				</form>
				<div class="group_buttons fr">
					<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=tour_exhautive" class="btn btn-warning btnNew">
						<i class="icon-list icon-white"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('listtours');?>
</span>
					</a>
				</div>
			</div>
			
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
						</td>
					</tr>
				</table>
			</div>
			<div class="hastable">
				<table cellspacing="0" class="table table-striped tbl-grid table_responsive" width="100%">
                   <thead>
						<tr>
							<th class="gridheader" style="width:40px"><input id="check_all" type="checkbox" class="el-checkbox" /></th>
							<th class="gridheader hiden767" style="width:80px"><strong>ID</strong></th>
							<th class="gridheader name_responsive" style="text-align:left"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('title');?>
</strong></th>
							<?php if ($_smarty_tpl->tpl_vars['SiteHasGroup_Tours']->value) {?>
							<th class="gridheader text-left hiden_responsive" width="16%"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('tourgroup');?>
</strong></th>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SiteHasTourCat_slide')) {?><th class="gridheader hiden_responsive"></th><?php }?>
							<th class="gridheader hiden_responsive"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('status');?>
</strong></th>
							<th class="gridheader text-left hiden_responsive" width="6%"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('update');?>
</strong></th>
							<th class="gridheader text-center hiden_responsive" width="74px"></th>
						</tr>
					</thead>
					<?php if ($_smarty_tpl->tpl_vars['allItem']->value[0]['tourcat_id'] != '') {?>
					<tbody id="SortAble">
						<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['allItem']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
						<tr style="cursor:move" id="order_<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tourcat_id'];?>
" >
							<td class="check_40 has-checkbox text-center"><input name="p_key[]" class="chkitem el-checkbox" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tourcat_id'];?>
" /></td>
							<td class="index hiden767" data-title="ID"><span><?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tourcat_id'];?>
</span></td>
							<td class="text-left name_service">
								<span  class="title"><?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title'];?>
</span>
								<?php if ($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['is_trash'] == '1') {?><span class="fr" style="color:#CCC"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('intrash');?>
</span><?php }?>
								<button type="button" class="toggle-row inline_block767" style="display:none">
									<i class="fa fa-caret fa-caret-down"></i>
								</button>
							</td>
							<?php if ($_smarty_tpl->tpl_vars['SiteHasGroup_Tours']->value) {?>
							<td class="block_responsive" data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('tourgroup');?>
">
								<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=<?php echo $_smarty_tpl->tpl_vars['act']->value;?>
&tour_group_id=<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_group_id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/v2/node-select-child.png" align="absmiddle" /> <?php echo $_smarty_tpl->tpl_vars['clsTourGroup']->value->getTitle($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_group_id']);?>
</a>
							</td>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SiteHasTourCat_slide')) {?>
							<td class="block_responsive">
								<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=slide&mod_page=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act_page=<?php echo $_smarty_tpl->tpl_vars['act']->value;?>
&target_id=<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tourcat_id'];?>
&clsTable=TourCategory" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('listslide');?>
">
								<i class="fa fa-folder-open"></i>  <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('listslide');?>
 <strong style="color:#c00000;">(<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->countTotalSlide($_smarty_tpl->tpl_vars['mod']->value,$_smarty_tpl->tpl_vars['act']->value,$_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tourcat_id']);?>
)</strong>
								</a>
							</td>
							<?php }?>
							<td style="text-align:center">
                                <a href="javascript:void(0);" class="SiteClickPublic" clsTable="TourCategory" pkey="<?php echo $_smarty_tpl->tpl_vars['pkeyTable']->value;?>
" sourse_id="<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)][$_smarty_tpl->tpl_vars['pkeyTable']->value];?>
" rel="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField('is_online',$_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)][$_smarty_tpl->tpl_vars['pkeyTable']->value]);?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Click to change status');?>
">
                                    <?php if ($_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField('is_online',$_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)][$_smarty_tpl->tpl_vars['pkeyTable']->value]) == '1') {?>
                                    <i class="fa fa-check-circle green"></i>
                                    <?php } else { ?>
                                    <i class="fa fa-minus-circle red"></i>
                                    <?php }?>
                                </a>
                            </td>
							<td class="block_responsive" style="text-align:center" data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('update');?>
">
								<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField('upd_date',$_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tourcat_id']),"%m-%d-%Y %H:%M");?>

							</td>
							<td class="block_responsive text-center" style="white-space:nowrap;" data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('func');?>
">
								<div class="btn-group">
									<button class="btn btn_dropdown dropdown-toggle" type="button" data-toggle="dropdown">
										<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
									</button>
									<ul class="dropdown-menu">
										<?php if ($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['is_trash'] == '1') {?>
										<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('restore');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=<?php echo $_smarty_tpl->tpl_vars['act']->value;?>
&action=Restore&tourcat_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tourcat_id']);
echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
"><i class="icon-refresh"></i><span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('restore');?>
</span></a></li>
										<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('delete');?>
" class="confirm_delete" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=<?php echo $_smarty_tpl->tpl_vars['act']->value;?>
&action=Delete&tourcat_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tourcat_id']);
echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
"><i class="icon-remove"></i><span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('delete');?>
</span></a></li>
										<?php } else { ?>
										<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('edit');?>
" class="btnEditToursCategory" href="javascript:void(0)" data="<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tourcat_id'];?>
"><i class="icon-edit"></i><span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('edit');?>
</span></a></li>
										<?php if ($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tourcat_id'] != 10 && $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tourcat_id'] != 20) {?><li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('trash');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=<?php echo $_smarty_tpl->tpl_vars['act']->value;?>
&action=Trash&tourcat_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tourcat_id']);
echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
"><i class="icon-trash"></i><span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('trash');?>
</span></a></li><?php }?>
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
<?php echo '<script'; ?>
 type="text/javascript">
	var $SiteHasGroup_Tours = '<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue("SiteHasGroup_Tours");?>
';
	var $SiteHasSubCat_Tours = '<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue("SiteHasSubCat_Tours");?>
';
	var $tour_group_id = '<?php echo $_smarty_tpl->tpl_vars['tour_group_id']->value;?>
';
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
$(document).ready(function(){
	$(document).on('click', '.btnCreateToursCategory', function(ev){
		vietiso_loading(1);
		$.ajax({
			type:'POST',
			url:path_ajax_script+'/index.php?mod='+mod+'&act=SiteTourCategory',
			data : {'tour_group_id' : $tour_group_id, 'tp' : 'F'},
			dataType:'html',
			success:function(html){
				vietiso_loading(0);
				makepopupnotresize('55%', 'auto', html, 'box_TourCategory');
				$('#box_TourCategory').css('top','50px');
				var $editorID = $('.textarea_tour_intro_editor').attr('id');
				var $editorbannerID = $('.textarea_tour_intro_banner_editor').attr('id');
				$('#'+$editorID).isoTextAreaFix();
				$('#'+$editorbannerID).isoTextAreaFix();
			}
		});
		return false;
	});
	$(document).on('click', '.btnEditToursCategory', function(ev){
		var $_this = $(this);
		vietiso_loading(1);
		$.ajax({
			type:'POST',
			url:path_ajax_script+'/index.php?mod='+mod+'&act=SiteTourCategory',
			data : {'tourcat_id' : $_this.attr('data'), 'tp' : 'F'},
			dataType:'html',
			success:function(html){
				vietiso_loading(0);
				makepopupnotresize('55%', 'auto', html, 'box_TourCategory');
				$('#box_TourCategory').css('top','50px');
				var $editorID = $('.textarea_tour_intro_editor').attr('id');
				var $editorbannerID = $('.textarea_tour_intro_banner_editor').attr('id');
				$('#'+$editorID).isoTextAreaFix();
				$('#'+$editorbannerID).isoTextAreaFix();
			}
		});
		return false;
	});
	$(document).on('click', '.btnClickToSubmitCategory', function(ev){
		var $_this = $(this);
		var $_form = $_this.closest('.frmPop');
		var $title = $_form.find('input[name=title]');
		var $editorID = $('.textarea_tour_intro_editor').attr('id');
		var $editorbannerID = $('.textarea_tour_intro_banner_editor').attr('id');
		
		var $image = $('#isoman_url_image').val();
		var $image_banner = $('#isoman_url_image_banner').val();
		var $video_teaser = $('#isoman_url_video_teaser').val();
		var $background = $('input[name=iso-background]').val();
		var $link_banner = $('input[name=iso-link_banner]').val();
		
		if($title.val()==''){
			$title.addClass('error').focus();
			alertify.error(field_is_required);
			return false;
		}
		$tour_group_id = 0;
		if($SiteHasGroup_Tours){
			var $slb_TourGroup = $('#slb_TourGroup');
			if(parseInt($slb_TourGroup.val())==0){
				$slb_TourGroup.focus();
				setSelectOpen($slb_TourGroup);
				alertify.error(field_is_required);
				return false;
			}
			$tour_group_id = $slb_TourGroup.val();
		}
		var $parent_ID = 0;
		if($SiteHasSubCat_Tours){
			var $slb_TourCategory = $('#slb_TourCategory');
			$parent_ID = $('#slb_TourCategory').val();
		}
		
		var intro = tinyMCE.get($editorID).getContent();

		var _async = true;
		let frag = document.createElement('div');
		frag.innerHTML = intro;
		let itemsBase64 = [...frag.querySelectorAll('img')]
	  .filter(img => img.getAttribute('src').startsWith('data'))
	  .map(img => img.getAttribute('src'));
		console.log(itemsBase64);
		if(itemsBase64.length){
			_async = false;
			$.ajax({
				type: "POST",
				url: PCMS_URL + '/index.php?mod=ajax&act=convertBase64toImage',
				data: {
					intro : intro
				},
				async:false,
				dataType : 'json',
				success: function (res) {
					intro = res.intro;
				}
			});
		}
		console.log(intro);

		var adata = {
			'title' 		: 	$title.val(),
			'intro'	  		: 	intro,
			'link_banner'	  		: 	$link_banner,
			'background'	  		: 	$background,
			'image'	  		: 	$image,
			'image_banner'	: 	$image_banner,
			'video_teaser'	: 	$video_teaser,
			'parent_id'		: 	$parent_ID,
			'tour_group_id'	: 	$tour_group_id,
			'tourcat_id' 	: 	$_this.attr('tourcat_id'),
			'tp' 			: 	'S'
		};
		vietiso_loading(1);
		$.ajax({
			type:'POST',
			url:path_ajax_script+'/index.php?mod='+mod+'&act=SiteTourCategory',
			data:adata,
			dataType:'html',
			success:function(html){
				if(html.indexOf('_SUCCESS') >= 0){
					window.location.reload(true);
				}
				if(html.indexOf('_ERROR') >= 0){
					alertify.error(insert_error);
				}
				if(html.indexOf('_EXIST') >= 0){
					alertify.error(insert_error_exist);
				}
				vietiso_loading(0);
			}
		});
	});
});
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
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
			var recordPerPage = $recordPerPage;
			var currentPage = $currentPage;
			var order = $(this).sortable("serialize")+'&update=update'+'&recordPerPage='+recordPerPage+'&currentPage='+currentPage;
			$.post(path_ajax_script+"/index.php?mod=tour&act=ajUpdPosSortTourCategory", order, 
			
			function(html){
				vietiso_loading(0);
			});
		}
	});
<?php echo '</script'; ?>
>
<?php }
}
