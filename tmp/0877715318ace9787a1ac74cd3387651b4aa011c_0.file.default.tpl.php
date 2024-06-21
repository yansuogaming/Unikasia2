<?php
/* Smarty version 3.1.38, created on 2024-04-11 08:13:40
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/region/default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_661739443bb318_16945235',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0877715318ace9787a1ac74cd3387651b4aa011c' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/region/default.tpl',
      1 => 1675310303,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661739443bb318_16945235 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/isocms/domains/isocms.com/public_html/inc/smarty3138/plugins/function.cycle.php','function'=>'smarty_function_cycle',),));
?>
<div class="page_container">
	<div class="page-title d-flex">
        <div class="title">
			<h2><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Region List');?>
 <div class="info_module" data-toggle="tooltip" data-placement="right" title="Chức năng quản lý danh sách các <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Region List');?>
 trong hệ thống isoCMS">i</div>
			</h2>
			<p><?php echo $_smarty_tpl->tpl_vars['number_all']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Region List');?>
</p>
		</div>
		<div class="button_right">
			<a class="btn btn-main btn-addnew add_new_region" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Add region');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Add region');?>
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
					<?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SiteModActive_continent') && $_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'continent','default','default')) {?>
					<div class="form-group form-country">
						<select name="continent_id" class="form-control" data-width="100%" id="slb_country">
							<?php echo $_smarty_tpl->tpl_vars['clsContinent']->value->makeSelectboxOption($_smarty_tpl->tpl_vars['continent_id']->value);?>

						</select>
					</div>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'country','default','default')) {?>					
					<div class="form-group form-country">
						<select name="country_id" class="form-control" data-width="100%" id="slb_country">
							<?php echo $_smarty_tpl->tpl_vars['clsCountry']->value->makeSelectboxOption($_smarty_tpl->tpl_vars['country_id']->value,$_smarty_tpl->tpl_vars['continent_id']->value);?>

						</select>
					</div>
					<?php }?>
					<div class="form-group form-button">
						<button type="submit" class="btn btn-main" id="findtBtn">Tìm kiếm</button>
						<input type="hidden" name="filter" value="filter" />
					</div>
					<div class="form-group form-button">
						<a class="btn btn-delete-all" id="btn_delete" clsTable="Region" style="display:none">
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
								<th class="gridheader name_responsive" style="text-align:left"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Region name');?>
</th>
								<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'country','default','default')) {?>
								<th class="gridheader hiden_responsive" style="text-align:left"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Country');?>
</th>
								<?php }?>
								<th class="gridheader hiden_responsive" style="text-align:left" width="55px"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Status');?>
</th>
								<th class="gridheader hiden_responsive" width="74px"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('func');?>
</th>
							</tr>
						</thead>
						<?php if ($_smarty_tpl->tpl_vars['allItem']->value[0]['region_id'] != '') {?>
						<tbody id="SortAble">
							<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['allItem']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
							<?php $_smarty_tpl->_assignInScope('region_id', $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['region_id']);?>
							<tr style="cursor:move" id="order_<?php echo $_smarty_tpl->tpl_vars['region_id']->value;?>
" class="<?php echo smarty_function_cycle(array('values'=>"row1,row2"),$_smarty_tpl);?>
" >
								<td class="check_40 has-checkbox text-center"><input name="p_key[]" class="chkitem el-checkbox" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['region_id']->value;?>
" /></td>
								<td class="index hiden767"><?php echo $_smarty_tpl->tpl_vars['region_id']->value;?>
</td>
								<td class="text-left name_service">
									<a style="display:inline-block" class="sumary" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/region/insert/<?php echo $_smarty_tpl->tpl_vars['region_id']->value;?>
/overview"><span style="font-size:16px;"><?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getTitle($_smarty_tpl->tpl_vars['region_id']->value);?>
</span></a>
									<a style="display:inline-block" class="sumary" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=city&region_id=<?php echo $_smarty_tpl->tpl_vars['region_id']->value;?>
">&raquo;  <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('cities');?>
 <span class="color_r">(<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->countNumberCityRegion($_smarty_tpl->tpl_vars['region_id']->value);?>
)</span></a>
									<button type="button" class="toggle-row inline_block767" style="display:none"><i class="fa fa-caret fa-caret-down"></i></button>
								</td>
								<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'country','default','default')) {?>
								<td data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Country');?>
" class="block_responsive border_top_responsive"><a title="<?php echo $_smarty_tpl->tpl_vars['clsCountry']->value->getTitle($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['country_id']);?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=region&country_id=<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['country_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['clsCountry']->value->getTitle($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['country_id']);?>
</a></td>
								<?php }?>
								<td data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('status');?>
" class="block_responsive" style="text-align:center">
									<a href="javascript:void(0);" class="SiteClickPublic" clsTable="Region" pkey="region_id" sourse_id="<?php echo $_smarty_tpl->tpl_vars['region_id']->value;?>
" rel="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField('is_online',$_smarty_tpl->tpl_vars['region_id']->value);?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Click to change status');?>
">
										<?php if ($_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField('is_online',$_smarty_tpl->tpl_vars['region_id']->value) == '1') {?>
										<i class="fa fa-check-circle green"></i>
										<?php } else { ?>
										<i class="fa fa-minus-circle red"></i>
										<?php }?>
									</a>
								</td>
								<td data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('func');?>
" class="block_responsive" style="vertical-align: middle; width: 10px; text-align:left; white-space: nowrap;">
									<div class="btn-group">
										<button class="btn btn_dropdown dropdown-toggle" type="button" data-toggle="dropdown">
											<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
										</button>
										<ul class="dropdown-menu" style="right:0px !important">
											<?php if ($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['is_trash'] == 0) {?>
											<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'region','destination','customize')) {?>
											<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('view');?>
" target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;
echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getLink($_smarty_tpl->tpl_vars['region_id']->value);?>
"><i class="icon-eye-open"></i> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('view');?>
</a></li>
											<?php }?>
											<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('edit');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/region/insert/<?php echo $_smarty_tpl->tpl_vars['region_id']->value;?>
/overview"><i class="icon-edit"></i> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('edit');?>
</a></li>
											<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('trash');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=trash&region_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['region_id']->value);
echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
"><i class="icon-trash "></i>  <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('trash');?>
</a></li>
											<?php } else { ?>
											<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('restore');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=restore&region_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['region_id']->value);
echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
"><i class="icon-refresh"></i> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('restore');?>
</a></li>
											<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('delete');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=delete&region_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['region_id']->value);
echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
"><i class="icon-remove"></i> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('delete');?>
</a></li>
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
/region/jquery.region.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
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
			$.post(path_ajax_script+"/index.php?mod=region&act=ajUpdPosSortRegion", order,

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
