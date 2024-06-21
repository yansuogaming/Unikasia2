<?php
/* Smarty version 3.1.38, created on 2024-04-22 14:48:46
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/guide/notitle.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6626165e349003_88004991',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0e90a0fa3e68f53880d63d2deac24c264cd310d' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/guide/notitle.tpl',
      1 => 1676973084,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6626165e349003_88004991 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="page_container">
   <div class="page-title d-flex">
        <div class="title">
			<h2><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Travel Guide Category by Cities');?>
 <div class="info_module" data-toggle="tooltip" data-placement="right" title="Chức năng quản lý danh sách các <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Travel Guide Category by Cities');?>
 trong hệ thống isoCMS">i</div>
			</h2>
			<p><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Chức năng quản lý miêu tả cho nhóm dữ liệu thuộc thành phố, điểm đến thuộc TravelGuide trong hệ thống isoCMS');?>
</p>
			<p><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('This function is intended to manage Travel guide category introduction');?>
</p>
		</div>
		<div class="button_right">
			<a class="btn btn-main btn-addnew add_new_guide" type="guide2" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Add Guide Category by Cities');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Add Guide Category by Cities');?>
</a>
		</div>
    </div>
	<div class="container-fluid">
		<div class="filter_box">
			<form id="forums" method="post" class="filterForm" action="">
				<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'country','default','default')) {?>
					<div class="form-group form-country">
						<select name="country_id" class="form-control" data-width="100%" id="slb_country">
							 <?php echo $_smarty_tpl->tpl_vars['clsCountry']->value->makeSelectboxOption($_smarty_tpl->tpl_vars['country_id']->value);?>

						</select>
					</div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['clsCountry']->value->countNumberRegion($_smarty_tpl->tpl_vars['country_id']->value) > '0') {?>
					<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'country','default','default')) {?>
						<div class="form-group form-country">
							<select name="region_id" class="form-control" data-width="100%" id="slb_country">
								 <?php echo $_smarty_tpl->tpl_vars['clsRegion']->value->makeSelectboxOption($_smarty_tpl->tpl_vars['country_id']->value,$_smarty_tpl->tpl_vars['region_id']->value);?>

							</select>
						</div>
					<?php }?>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'city','default','default')) {?>
					<div class="form-group form-country">
						<select name="city_id" class="form-control" data-width="100%" id="slb_country">
							 <?php echo $_smarty_tpl->tpl_vars['clsCity']->value->makeSelectboxOption($_smarty_tpl->tpl_vars['city_id']->value,$_smarty_tpl->tpl_vars['country_id']->value);?>

						</select>
					</div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'guide','cat','default')) {?>
					<div class="form-group form-country">
						<select name="cat_id" class="form-control" data-width="100%" id="slb_country">
							 <?php echo $_smarty_tpl->tpl_vars['clsGuideCat']->value->makeSelectboxOption(0,$_smarty_tpl->tpl_vars['cat_id']->value);?>

						</select>
					</div>
				<?php }?>
				<div class="form-group form-button">
					<button type="submit" class="btn btn-main" id="findtBtn">Tìm kiếm</button>
					<input type="hidden" name="filter" value="filter" />
				</div>
				<div class="form-group form-button hidden">
					<button type="button" class="btn btn-export" id="btn_export">Export</button>
				</div>
				<div class="form-group form-button">
					<a class="btn btn-delete-all" id="btn_delete" clsTable="Guide2" style="display:none">
						<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Delete');?>

					</a>
				</div>
			</form>	
			<div class="group_buttons fr mt10_767">
				 <?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'guide','cat','default')) {?>
				 <a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=cat" class="btn btn-success btnNew" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Guide Category');?>
"><i class="icon-list icon-white"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Guide Category');?>
</span> </a>
				<?php }?>
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
					<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getRecordPerPage2($_smarty_tpl->tpl_vars['recordPerPage']->value,$_smarty_tpl->tpl_vars['totalRecord']->value,$_smarty_tpl->tpl_vars['mod']->value,$_smarty_tpl->tpl_vars['pUrl']->value,$_smarty_tpl->tpl_vars['act']->value);?>

				</td>
			</tr>
		</table>
	</div>
	<div class="hastable">
		<table cellspacing="0" class="tbl-grid table-striped table_responsive" width="100%">
			<thead>
				<tr>
					<th class="gridheader" style="width:40px"><input id="check_all" type="checkbox" class="el-checkbox"/></th>
					<th class="gridheader hiden767" style="width:60px"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('ID');?>
</th>
					<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'guide','cat','default')) {?>
					<th class="gridheader name_responsive" style="text-align:left"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Name');?>
</th>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'country','cat','default')) {?>
					<th class="gridheader hiden_responsive" style="text-align:left; width:120px"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Country');?>
</th>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'region','default','default')) {?>
					<th class="gridheader hiden_responsive" style="text-align:left; width:120px"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Region');?>
</th>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'city','default','default')) {?>
					<th class="gridheader hiden_responsive" style="text-align:left; width:120px"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('City');?>
</th>
					<?php }?>
					<th class="gridheader hiden_responsive" style="width:60px"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('status');?>
</th>
					<th class="gridheader hiden_responsive" style="width:60px"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('func');?>
</th>
				</tr>
			</thead>
			<?php if ($_smarty_tpl->tpl_vars['allItem']->value[0]['guide2_id'] != '') {?>
			<tbody id="SortAble">
			   <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['allItem']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
				<tr style="cursor:move" id="order_<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['guide2_id'];?>
" class="<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)%2 == 0) {?>row1<?php } else { ?>row2<?php }?>">
					<td class="check_40 has-checkbox text-center"><input name="p_key[]" class="chkitem el-checkbox" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['guide2_id'];?>
"  /></td>
					<td class="index hiden767"><?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['guide2_id'];?>
</td>
					<td class="name_service">
					<span class="title" title="<?php if ($_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField('is_online',$_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['guide2_id']) == 0) {
echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('PRIVATE');
}?>"><?php echo $_smarty_tpl->tpl_vars['clsGuideCat']->value->getTitle($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cat_id']);?>
</span>
					<?php if ($_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField('is_online',$_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['guide2_id']) == 0) {?><span style="color:red;" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('PRIVATE');?>
">[P]</span><?php }?>
						<?php if ($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['is_trash'] == '1') {?><span class="fr" style="color:#CCC"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('intrash');?>
</span><?php }?>
						<button type="button" class="toggle-row inline_block767" style="display:none"><i class="fa fa-caret fa-caret-down"></i></button>
					</td>
					<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'country','cat','default')) {?>
					<td data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Country');?>
" class="block_responsive border_top_responsive"><?php echo $_smarty_tpl->tpl_vars['clsCountry']->value->getTitle($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['country_id']);?>
</td>
					<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'region','default','default')) {?>
					<td data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Region');?>
" class="block_responsive"><?php echo $_smarty_tpl->tpl_vars['clsRegion']->value->getTitle($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['region_id']);?>
</td>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'city','default','default')) {?>
					<td data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('City');?>
" class="block_responsive"><?php echo $_smarty_tpl->tpl_vars['clsCity']->value->getTitle($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['city_id']);?>
</td>
					<?php }?>
					<td data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('status');?>
" class="block_responsive" style="text-align:center;">
						<a href="javascript:void(0);" class="SiteClickPublic" clsTable="Guide2" pkey="<?php echo $_smarty_tpl->tpl_vars['pkeyTable']->value;?>
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
					<td data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('func');?>
" class="block_responsive" align="center" style="vertical-align: middle; text-align:center;white-space: nowrap;">
						<div class="btn-group">
							<button class="btn iso-button-standard dropdown-toggle" type="button" data-toggle="dropdown"> <i class="icon-cog"></i> <span class="caret"></span></button>
							<ul class="dropdown-menu" style="right:0px !important">
								<?php if ($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['is_trash'] == '0') {?>
								<?php $_smarty_tpl->_assignInScope('country_id', $_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField('country_id',$_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)][$_smarty_tpl->tpl_vars['pkeyTable']->value]));?>
								<?php $_smarty_tpl->_assignInScope('city_id', $_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField('city_id',$_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)][$_smarty_tpl->tpl_vars['pkeyTable']->value]));?>
								<?php $_smarty_tpl->_assignInScope('cat__id', $_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField('cat_id',$_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)][$_smarty_tpl->tpl_vars['pkeyTable']->value]));?>
								 <li><a <?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)][$_smarty_tpl->tpl_vars['pkeyTable']->value];?>
,<?php echo $_smarty_tpl->tpl_vars['country_id']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['city_id']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['cat__id']->value;?>
 href="<?php echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;
echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getLinkGuide($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)][$_smarty_tpl->tpl_vars['pkeyTable']->value],$_smarty_tpl->tpl_vars['country_id']->value,$_smarty_tpl->tpl_vars['city_id']->value,$_smarty_tpl->tpl_vars['cat__id']->value);?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('view');?>
"><i class="icon-eye-open"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('view');?>
</span></a></li>
								<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('edit');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/guide/compose/insert/<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)][$_smarty_tpl->tpl_vars['pkeyTable']->value];?>
/overview"><i class="icon-edit"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('edit');?>
</span></a></li>
								<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('trash');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=trash2&guide2_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['guide2_id']);?>
"><i class="icon-trash"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('trash');?>
</span></a></li>
								<?php } else { ?>
								<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('restore');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=restore2&guide2_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['guide2_id']);
echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
"><i class="icon-refresh"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('restore');?>
</span></a></li>
								<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('delete');?>
" class="confirm_delete" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=delete2&guide2_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['guide2_id']);
echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
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
} else { ?><tr><td colspan="15" style="text-align:center"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('nodata');?>
</td></tr>
		</tbody>	
		<?php }?>
		</table>
		<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getPaginationAdmin($_smarty_tpl->tpl_vars['totalRecord']->value,$_smarty_tpl->tpl_vars['totalPage']->value,$_smarty_tpl->tpl_vars['currentPage']->value,$_smarty_tpl->tpl_vars['listPageNumber']->value,$_smarty_tpl->tpl_vars['link_page_current']->value,$_smarty_tpl->tpl_vars['type']->value);?>

	</div>
</div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
	var country_id="<?php echo $_smarty_tpl->tpl_vars['country_id']->value;?>
";
	var cat_id="<?php echo $_smarty_tpl->tpl_vars['cat_id']->value;?>
";
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
$().ready(function(){
	makeSelectCategory(country_id,$('select[name=city_id]').val(),cat_id);
	$('select[name=country_id]').change(function() {
		var $_this = $(this);
		makeSelectCategory($_this.val(),0,cat_id);
		$('select[name=city_id]').html('<option value="">'+loading+'</option>');
		$.ajax({
			type: "POST",
			url: path_ajax_script+'/index.php?mod=guide&act=loadCity',
			data: {"country_id": $_this.val()},
			dataType: "html",
			success: function(html) {
				$('select[name=city_id]').html(html);
			}
		});
	});
});
function makeSelectCategory($country_id, $city_id, $cat_id){
	$('select[name=cat_id]').html('<option value="0">'+loading+'</option>');
	var $_adata = {
		'country_id': $country_id,
		'city_id': $city_id,
		'cat_id': $cat_id
	};
	$.ajax({
		type: 'POST',
		url: path_ajax_script+'/index.php?mod=guide&act=ajLoadSelectCategory',
		data :$_adata,
		dataType:'html',
		success: function(html){
			$('select[name=cat_id]').html(html);
		} 
	});
}

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
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_THEMES']->value;?>
/tour/jquery.tour.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_THEMES']->value;?>
/guide/jquery.guide.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
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
			$.post(path_ajax_script+"/index.php?mod=guide&act=ajUpdPosSortGuideNotitle", order, 
			
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
