<?php
/* Smarty version 3.1.38, created on 2024-04-24 07:16:28
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/city/default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66284f5ce36e16_84650613',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a811b5e66b169fbcd3f9396a3a79a3f158d9827' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/city/default.tpl',
      1 => 1705547201,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66284f5ce36e16_84650613 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/isocms/domains/isocms.com/public_html/inc/smarty3138/plugins/function.cycle.php','function'=>'smarty_function_cycle',),));
?>
<div class="page_container">
	<div class="page-title d-flex">
        <div class="title">
			<h2><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('City List');?>
 <div class="info_module" data-toggle="tooltip" data-placement="right" title="Chức năng quản lý danh sách các <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('City List');?>
 trong hệ thống isoCMS">i</div>
			</h2>
			<p><?php echo $_smarty_tpl->tpl_vars['number_all']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('City List');?>
</p>
		</div>
		<div class="button_right">
			<a class="btn btn-main btn-addnew add_new_city" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Add city');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Add city');?>
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
					<?php if ($_smarty_tpl->tpl_vars['lstContinent']->value && $_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'continent','default','default') && $_smarty_tpl->tpl_vars['core']->value->checkAccess('continent')) {?>
						<div class="form-group form-country">
							<select name="continent_id" class="form-control iso-selectbox slb_Chauluc_Id" data-width="100%" id="slb_country">
								<option value="">-- <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Select Continent');?>
 --</option>
								<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstContinent']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
									<option <?php if ($_smarty_tpl->tpl_vars['continent_id']->value == $_smarty_tpl->tpl_vars['lstContinent']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['continent_id']) {?>selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['lstContinent']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['continent_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['clsContinent']->value->getTitle($_smarty_tpl->tpl_vars['lstContinent']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['continent_id']);?>
</option>
								<?php
}
}
?>
							</select>
						</div>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['lstCountryEx']->value && $_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'country','default','default') && $_smarty_tpl->tpl_vars['core']->value->checkAccess('country')) {?>
						<div class="form-group form-country">
							<select name="country_id" class="form-control iso-selectbox slb_Country_Id" data-width="100%" id="slb_country">
								<option value="">-- <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Select Country');?>
 --</option>
								<?php
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstCountryEx']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total !== 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
									<option <?php if ($_smarty_tpl->tpl_vars['country_id']->value == $_smarty_tpl->tpl_vars['lstCountryEx']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['country_id']) {?>selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['lstCountryEx']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['country_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['clsCountryEx']->value->getTitle($_smarty_tpl->tpl_vars['lstCountryEx']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['country_id']);?>
</option>
								<?php
}
}
?>
							</select>
						</div>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['lstRegion']->value && $_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'region','default','default') && $_smarty_tpl->tpl_vars['core']->value->checkAccess('region')) {?>
						<div class="form-group form-country">
							<select name="region_id" class="form-control iso-selectbox" data-width="100%" id="slb_RegionID">
								<option value="">-- <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Select Region');?>
 --</option>
								<?php
$__section_i_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstRegion']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_2_total = $__section_i_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_2_total !== 0) {
for ($__section_i_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_2_iteration <= $__section_i_2_total; $__section_i_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
									<option <?php if ($_smarty_tpl->tpl_vars['region_id']->value == $_smarty_tpl->tpl_vars['lstRegion']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['region_id']) {?>selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['lstRegion']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['region_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['clsRegion']->value->getTitle($_smarty_tpl->tpl_vars['lstRegion']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['region_id']);?>
</option>
								<?php
}
}
?>
							</select>
						</div>
					<?php }?>
					<div class="form-group form-button">
						<button type="submit" class="btn btn-main" id="findtBtn">Tìm kiếm</button>
						<input type="hidden" name="filter" value="filter" />
					</div>
					<div class="form-group form-button">
						<a class="btn btn-delete-all" id="btn_delete" clsTable="City" style="display:none">
							<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Delete');?>

						</a>
					</div>
					<div class="fr group_buttons full_width_767 text_right mt10_767">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;
echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
" class="btn btn-warning btnNew"> <i class="icon-folder-open icon-white"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('all');?>
 (<?php echo $_smarty_tpl->tpl_vars['number_all']->value;?>
)</span> </a>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;
echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
&type_list=Trash" class="btn btn-danger btnNew"> <i class="icon-warning-sign icon-white"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('trash');?>
 (<?php echo $_smarty_tpl->tpl_vars['number_trash']->value;?>
)</span> </a>
                    </div>
				</form>	
			</div>			
			<div class="statistical mb5">
				<table width="100%" border="0" cellpadding="3" cellspacing="0">
					<tr>
						<td width="50%" align="left">&nbsp;</td>
						<td width="50%" align="right">
							<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Record/page');?>
:
							<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getRecordPerPage($_smarty_tpl->tpl_vars['recordPerPage']->value,$_smarty_tpl->tpl_vars['totalRecord']->value,$_smarty_tpl->tpl_vars['mod']->value,'','');?>

						</td>
					</tr>
				</table>
			</div>
			<div class="clearfix"></div>
			<div class="tabbox">
				<div class="hastable">
					<table cellspacing="0" class="tbl-grid table-striped table_responsive" width="100%">
						<thead>
							<tr>
								<th class="gridheader" style="width:40px"><input id="check_all" type="checkbox"  class="el-checkbox" /></th>
								<th class="gridheader hiden767"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('ID');?>
</th>
								<th class="gridheader name_responsive" style="text-align:left;"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('City name');?>
</th>
								<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'region','default','default')) {?>
								<th class="gridheader hiden_responsive" style="text-align:left;"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Region');?>
</th>
								<?php }?>
								<th class="gridheader hiden_responsive" style="width:6%;"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('status');?>
</th>
								<th class="gridheader hiden_responsive"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('func');?>
</th>
							</tr>
						</thead>
						<?php if ($_smarty_tpl->tpl_vars['allItem']->value[0]['city_id'] != '') {?>
						<tbody id="SortAble">
							<?php
$__section_i_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['allItem']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_3_total = $__section_i_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_3_total !== 0) {
for ($__section_i_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_3_iteration <= $__section_i_3_total; $__section_i_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
							<?php $_smarty_tpl->_assignInScope('city_id', $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['city_id']);?>
							<tr style="cursor:move" id="order_<?php echo $_smarty_tpl->tpl_vars['city_id']->value;?>
" class="<?php echo smarty_function_cycle(array('values'=>"row1,row2"),$_smarty_tpl);?>
" >
								<td class="check_40 has-checkbox text-center"><input name="p_key[]" class="chkitem el-checkbox" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['city_id']->value;?>
" /></td>
								<td class="index hiden767"><?php echo $_smarty_tpl->tpl_vars['city_id']->value;?>
 </td>
								<td class="name_service">
									<span class="title mr10"><?php if ($_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField('is_online',$_smarty_tpl->tpl_vars['city_id']->value) == 0) {?><span style="color:#F90">[PRIVATE]</span><?php }?> <span style="font-size:16px"><?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getTitle($_smarty_tpl->tpl_vars['city_id']->value);?>
</span></span>
									<?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SiteHasChild_slide')) {?>
									<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=slide&mod_page=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act_page=<?php echo $_smarty_tpl->tpl_vars['act']->value;?>
&target_id=<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)][$_smarty_tpl->tpl_vars['pkeyTable']->value];?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('listslide');?>
">
										<i class="fa fa-folder-open"></i>  <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('listslide');?>
 <strong style="color:#c00000;">(<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->countTotalSlide($_smarty_tpl->tpl_vars['mod']->value,$_smarty_tpl->tpl_vars['act']->value,$_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)][$_smarty_tpl->tpl_vars['pkeyTable']->value]);?>
)</strong>
									</a>
									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['is_trash'] == '1') {?><span class="fr" style="color:#CCC"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('intrash');?>
</span><?php }?>
									<button type="button" class="toggle-row inline_block767" style="display:none"><i class="fa fa-caret fa-caret-down"></i></button>
								</td>
								<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'region','default','default')) {?>
								<td data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Region');?>
" class="block_responsive"><?php echo $_smarty_tpl->tpl_vars['clsRegion']->value->getTitle($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['region_id']);?>
 </td>
								<?php }?>
								<td data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('status');?>
" class="block_responsive" style="text-align:center">
									<a href="javascript:void(0);" class="SiteClickPublic" clsTable="City" pkey="city_id" sourse_id="<?php echo $_smarty_tpl->tpl_vars['city_id']->value;?>
" rel="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField('is_online',$_smarty_tpl->tpl_vars['city_id']->value);?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Click to change status');?>
">
										<?php if ($_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField('is_online',$_smarty_tpl->tpl_vars['city_id']->value) == '1') {?>
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
											<li><a href="<?php echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;
echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getLink($_smarty_tpl->tpl_vars['city_id']->value);?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('view');?>
"><i class="icon-eye-open"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('view');?>
</span></a></li>
											<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('edit');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
/insert/<?php echo $_smarty_tpl->tpl_vars['city_id']->value;?>
/overview"><i class="icon-edit"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('edit');?>
</span></a></li>
											<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('trash');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=trash&city_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['city_id']->value);
echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['currentPage']->value;?>
"><i class="icon-trash"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('trash');?>
</span></a></li>
											<?php } else { ?>
											<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('restore');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=restore&city_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['city_id']->value);
echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['currentPage']->value;?>
"><i class="icon-refresh"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('restore');?>
</span></a></li>
											<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('delete');?>
" class="confirm_delete" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=delete&city_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['city_id']->value);
echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['currentPage']->value;?>
"><i class="icon-remove"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Delete');?>
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
						<?php } else { ?><tr><td colspan="15"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('nodata');?>
!</td></tr><?php }?>
					</table>
				</div>
			</div>
			<div class="clearfix"></div>
			<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getPaginationAdmin($_smarty_tpl->tpl_vars['totalRecord']->value,$_smarty_tpl->tpl_vars['totalPage']->value,$_smarty_tpl->tpl_vars['currentPage']->value,$_smarty_tpl->tpl_vars['listPageNumber']->value,$_smarty_tpl->tpl_vars['link_page_current']->value,$_smarty_tpl->tpl_vars['type']->value);?>

		</div>
	</div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
	var $boxID = "";
	var $cat_id = '<?php echo $_smarty_tpl->tpl_vars['cat_id']->value;?>
';
	var $city_id= '<?php echo $_smarty_tpl->tpl_vars['city_id']->value;?>
';
	var $country_id= '<?php echo $_smarty_tpl->tpl_vars['country_id']->value;?>
';
	var $region_id= '<?php echo $_smarty_tpl->tpl_vars['region_id']->value;?>
';
	var $departure_point_id= '<?php echo $_smarty_tpl->tpl_vars['departure_point_id']->value;?>
';
	var $is_set= '<?php echo $_smarty_tpl->tpl_vars['is_set']->value;?>
';

	var $recordPerPage = '<?php echo $_smarty_tpl->tpl_vars['recordPerPage']->value;?>
';

	var $currentPage = '<?php echo $_smarty_tpl->tpl_vars['currentPage']->value;?>
';
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_THEMES']->value;?>
/city/jquery.city.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_THEMES']->value;?>
/city/jquery.city.new.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
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
			$.post(path_ajax_script+"/index.php?mod=city&act=ajUpdPosSortCity", order,

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
