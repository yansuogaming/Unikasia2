<?php
/* Smarty version 3.1.38, created on 2024-04-08 14:33:26
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/tour_exhautive/property.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66139dc6e43014_68253607',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56245acb11ed15d8fb53ccb1d2c293707b7db957' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/tour_exhautive/property.tpl',
      1 => 1701242208,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66139dc6e43014_68253607 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/isocms/domains/isocms.com/public_html/inc/smarty3138/plugins/function.cycle.php','function'=>'smarty_function_cycle',),));
?>
<div class="page-tour_setting">
	<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('header_title_tour_setting');?>

	<div class="container-fluid container-fluid-2 d-flex">
		<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('menu_tour_exhautive_setting');?>

		<div class="content_setting_box">
			<div class="page_detail-title d-flex">
				<div class="title">
					<h2><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang($_smarty_tpl->tpl_vars['type']->value);?>
</h2>
					<p>Chức năng quản lý danh sách các <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang($_smarty_tpl->tpl_vars['type']->value);?>
 trong hệ thống isoCMS</p>
					<p>This function is intended to manage <?php echo $_smarty_tpl->tpl_vars['type']->value;?>
 in isoCMS system</p>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['type']->value == 'TOUROPTION') {?>
				<div class="button_right">
					<a class="btn btn-main btn-addnew" id="clickToAddTourOption" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Add new');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Add new');?>
</a>
				</div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['type']->value == 'MEAL') {?>
				<div class="button_right">
					<a class="btn btn-main btn-addnew btnCreateTourProperty" data="0" type="MEAL" tp="F" href="javascript:void(0);">
						<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Add new');?>

					</a>
				</div>
				<?php }?>
			</div>
			<div class="wrap">
				<?php if ($_smarty_tpl->tpl_vars['type']->value == 'TOUROPTION') {?>
				<div class="tabbox touroption">
					<div class="contentTab">
						<div id="LstTourOption"></div>
					</div>
				</div>
				<?php } elseif ($_smarty_tpl->tpl_vars['type']->value == 'SIZEGROUP') {?>
				<div class="tabbox configGroup">
					
					<?php echo '<script'; ?>
 type="text/javascript">
						$().ready(function() {
							makeGlobalTab('config_group');
							$('#config_group_ul ul li.first').trigger("click");
						});
					<?php echo '</script'; ?>
>
					
					<div class="globaltabs" id="config_group_ul">
						<ul>
							<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listVISITORTYPE']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['first'] = ($__section_i_0_iteration === 1);
?>
							 <li <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['first'] : null)) {?>class="first"<?php } else {
}?> tour_property_id="<?php echo $_smarty_tpl->tpl_vars['listVISITORTYPE']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_property_id'];?>
"><a href="javascript:void(0);"><?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getTitle($_smarty_tpl->tpl_vars['listVISITORTYPE']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_property_id']);?>
</a></li>
							<?php
}
}
?>
							<?php
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listVISITORAGETYPE']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total !== 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['first'] = ($__section_i_1_iteration === 1);
?>
								<li tour_property_id="<?php echo $_smarty_tpl->tpl_vars['listVISITORAGETYPE']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_property_id'];?>
"><a href="javascript:void(0);"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Setting');?>
 <?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getTitle($_smarty_tpl->tpl_vars['listVISITORAGETYPE']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_property_id']);?>
</a></li>
							<?php
}
}
?>
							<?php
$__section_i_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listVISITORHEIGHTTYPE']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_2_total = $__section_i_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_2_total !== 0) {
for ($__section_i_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_2_iteration <= $__section_i_2_total; $__section_i_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['first'] = ($__section_i_2_iteration === 1);
?>
								<li tour_property_id="<?php echo $_smarty_tpl->tpl_vars['listVISITORHEIGHTTYPE']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_property_id'];?>
"><a href="javascript:void(0);"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Setting');?>
 <?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getTitle($_smarty_tpl->tpl_vars['listVISITORHEIGHTTYPE']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_property_id']);?>
</a></li>
							<?php
}
}
?>
							<li><a href="javascript:void(0);"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Setting Child Policy');?>
</a></li>
						</ul>
					</div>
					<div class="clearfix"></div>
					<div class="tab_contentglobal">
						<?php
$__section_i_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listVISITORTYPE']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_3_total = $__section_i_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_3_total !== 0) {
for ($__section_i_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_3_iteration <= $__section_i_3_total; $__section_i_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['first'] = ($__section_i_3_iteration === 1);
?>
						<div class="tabboxchild_config_group" <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['first'] : null)) {?>style="display:block"<?php } else { ?>style="display:none"<?php }?>>
							<div class="wrap mb10">
								<div class="button_right">
									<a href="javascript:void();" class="btn-main btn-addnew btnCreateSizeGroup" tour_property_id="<?php echo $_smarty_tpl->tpl_vars['listVISITORTYPE']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_property_id'];?>
">
										Thêm mới
									</a>
								</div>
							</div>
							<table class="tbl-grid full-width table-striped">
								<thead>
									<tr>
										<th class="gridheader" style=" width:8%"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('index');?>
</strong></th>
										<th class="gridheader" style="text-align:left"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('title');?>
</strong></th>
										<th class="gridheader" style="text-align:right"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('min people');?>
</strong></th>
										<th class="gridheader" style="text-align:right"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('max people');?>
</strong></th>
										<th class="gridheader" style="text-align:center;"></th>
									</tr>
								</thead>
								
								<tbody id="tblHolderSizeGroup<?php echo $_smarty_tpl->tpl_vars['listVISITORTYPE']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_property_id'];?>
">
								</tbody>
							</table>
						</div>
						<?php
}
}
?>
						<?php
$__section_i_4_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listVISITORAGETYPE']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_4_total = $__section_i_4_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_4_total !== 0) {
for ($__section_i_4_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_4_iteration <= $__section_i_4_total; $__section_i_4_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['first'] = ($__section_i_4_iteration === 1);
?>
						<div class="tabboxchild_config_group" style="display:none">
							<div class="wrap mb10">
								<div class="button_right">
									<a href="javascript:void();" class="btn-main btn-addnew btnCreateSizeGroup" tour_property_id="<?php echo $_smarty_tpl->tpl_vars['listVISITORAGETYPE']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_property_id'];?>
">
										Thêm mới
									</a>
								</div>
							</div>
							<table class="tbl-grid">
								<thead>
									<tr>
										<th class="gridheader" style=" width:8%"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('index');?>
</strong></th>
										<th class="gridheader" style="text-align:left"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('title');?>
</strong></th>
										<th class="gridheader" style="text-align:right"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Type');?>
</strong></th>
										<th class="gridheader" style="text-align:right"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('min age');?>
</strong></th>
										<th class="gridheader" style="text-align:right"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('max age');?>
</strong></th>
										<th class="gridheader" style="text-align:center;"></th>
									</tr>
								</thead>
								
								<tbody id="tblHolderSizeGroup<?php echo $_smarty_tpl->tpl_vars['listVISITORAGETYPE']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_property_id'];?>
">
								</tbody>
							</table>
						</div>
						<?php
}
}
?>
						<?php
$__section_i_5_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listVISITORHEIGHTTYPE']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_5_total = $__section_i_5_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_5_total !== 0) {
for ($__section_i_5_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_5_iteration <= $__section_i_5_total; $__section_i_5_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['first'] = ($__section_i_5_iteration === 1);
?>
						<div class="tabboxchild_config_group" style="display:none">
							<div class="wrap mb10">
								<div class="button_right">
									<a href="javascript:void();" class="btn-main btn-addnew btnCreateSizeGroup" tour_property_id="<?php echo $_smarty_tpl->tpl_vars['listVISITORHEIGHTTYPE']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_property_id'];?>
">
										Thêm mới
									</a>
								</div>
							</div>
							<table class="tbl-grid">
								<thead>
									<tr>
										<th class="gridheader" style=" width:8%"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('index');?>
</strong></th>
										<th class="gridheader" style="text-align:left"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('title');?>
</strong></th>
										<th class="gridheader" style="text-align:right"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Type');?>
</strong></th>
										<th class="gridheader" style="text-align:right"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('min height');?>
</strong></th>
										<th class="gridheader" style="text-align:right"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('max height');?>
</strong></th>
										<th class="gridheader" style="text-align:center;"></th>
									</tr>
								</thead>
								
								<tbody id="tblHolderSizeGroup<?php echo $_smarty_tpl->tpl_vars['listVISITORHEIGHTTYPE']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_property_id'];?>
">
								</tbody>
							</table>
						</div>
						<?php
}
}
?>
						<div class="tabboxchild_config_group" style="display:none">
							<table class="tbl-grid table-striped table_responsive">
								<thead>
									<th class="gridheader" style=" width:120px; text-align:center"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Group Size');?>
</strong></th>
									<th class="gridheader" style="width:120px; text-align:center"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Adult');?>
</strong></th>
									<th class="gridheader" style="width:120px; text-align:center"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Max Child');?>
</strong></th>
									<th class="gridheader" style="width:120px; text-align:center"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Max Infant');?>
</strong></th>
								</thead>
								<tbody>
								<?php
$__section_i_6_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstAdultGroupSize']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_6_total = $__section_i_6_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_6_total !== 0) {
for ($__section_i_6_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_6_iteration <= $__section_i_6_total; $__section_i_6_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['first'] = ($__section_i_6_iteration === 1);
?>
								<?php $_smarty_tpl->_assignInScope('numberAdult', $_smarty_tpl->tpl_vars['lstAdultGroupSize']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['number_to']-$_smarty_tpl->tpl_vars['lstAdultGroupSize']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['number_from']+1);?>
								<?php
$__section_j_7_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['numberAdult']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_j_7_total = $__section_j_7_loop;
$_smarty_tpl->tpl_vars['__smarty_section_j'] = new Smarty_Variable(array());
if ($__section_j_7_total !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_j']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_j']->value['iteration'] <= $__section_j_7_total; $_smarty_tpl->tpl_vars['__smarty_section_j']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_j']->value['first'] = ($_smarty_tpl->tpl_vars['__smarty_section_j']->value['iteration'] === 1);
?>
								<?php $_smarty_tpl->_assignInScope('numberAdultPrice', (isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['iteration'] : null)+$_smarty_tpl->tpl_vars['lstAdultGroupSize']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['number_from']-1);?>
								<tr>
								<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['first'] : null)) {?>
								<td rowspan="<?php echo $_smarty_tpl->tpl_vars['numberAdult']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['clsTourOption']->value->getTitle($_smarty_tpl->tpl_vars['lstAdultGroupSize']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_option_id']);?>
</td>
								<?php }?>
								<td style="text-align:center"><strong style="text-align:center"><?php echo $_smarty_tpl->tpl_vars['numberAdultPrice']->value;?>
</strong></td>
								<td><input class="full adult_number_setting" style="width:100px" group_size_id="<?php echo $_smarty_tpl->tpl_vars['lstAdultGroupSize']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_option_id'];?>
" number_adult="<?php echo $_smarty_tpl->tpl_vars['numberAdultPrice']->value;?>
" type="text" value="<?php echo $_smarty_tpl->tpl_vars['clsSettingChildPolicy']->value->getNumberChild($_smarty_tpl->tpl_vars['lstAdultGroupSize']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_option_id'],$_smarty_tpl->tpl_vars['numberAdultPrice']->value);?>
" traveler_type="child"/></td>
								<td><input class="full adult_number_setting" style="width:100px" group_size_id="<?php echo $_smarty_tpl->tpl_vars['lstAdultGroupSize']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_option_id'];?>
" type="text" number_adult="<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['iteration'] : null)+$_smarty_tpl->tpl_vars['lstAdultGroupSize']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['number_from']-1;?>
" value="<?php echo $_smarty_tpl->tpl_vars['clsSettingChildPolicy']->value->getNumberInfant($_smarty_tpl->tpl_vars['lstAdultGroupSize']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_option_id'],$_smarty_tpl->tpl_vars['numberAdultPrice']->value);?>
" traveler_type="infant"/></td>
								</tr>
								<?php
}
}
?>
								<?php
}
}
?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<?php } else { ?>
				<?php if ($_smarty_tpl->tpl_vars['type']->value != 'VISITORTYPE' && $_smarty_tpl->tpl_vars['type']->value != 'MEAL') {?>
				<form method="post" id="forums">
					<div class="filterbox">
						<div class="wrap">
							<div class="searchbox">
								<input name="keyword" value="<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
" type="text" class="text" />
								<a class="btn btn-success" href="javascript:void(0);" style="padding:6px" id="searchbtn">
									<i class="icon-search icon-white"></i>
								</a>
								
								<a class="btn btn-success btnCreateTourProperty" data="0" type="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" tp="F" href="javascript:void(0);">
									<i class="icon-plus icon-white"></i>
								</a>
							</div>
						</div>
					</div>
					<input type="hidden" name="filter" value="filter" />
				</form>
				<?php }?>
				<div class="hastable">
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
								<td width="50%" align="right">
									<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('gotopage');?>
:
									<select name="page" class="gotopage">
										<?php
$__section_i_8_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listPageNumber']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_8_total = $__section_i_8_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_8_total !== 0) {
for ($__section_i_8_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_8_iteration <= $__section_i_8_total; $__section_i_8_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['first'] = ($__section_i_8_iteration === 1);
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
									<a href="javascript:void(0)" class="btn btn-danger btn-delete-all" clsTable="Hotel" style="display:none">
										<i class="icon-remove icon-white"></i>
										<span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Delete Options');?>
</span>
									</a>
								</td>
							</tr>
						</table>
					</div>
					<table cellspacing="0" class="tbl-grid table-striped table_responsive" width="100%">
						<thead>
							<tr>
								<th class="gridheader hiden767" style="width:60px"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('ID');?>
</strong></th>
								<th class="gridheader name_responsive" style="text-align:left;width: -webkit-fill-available"><strong><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['title'];?>
</strong></th>
								<th class="gridheader hiden_responsive" style="width:80px"><strong><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['status'];?>
</strong></th>
								<th class="gridheader hiden_responsive" style="text-align:center; width:60px"><strong><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['action'];?>
</strong></th>
							</tr>
						</thead>
						<tbody <?php if ($_smarty_tpl->tpl_vars['type']->value != 'VISITORTYPE') {?> id="SortAble"<?php }?>>
							<?php
$__section_i_9_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['allItem']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_9_total = $__section_i_9_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_9_total !== 0) {
for ($__section_i_9_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_9_iteration <= $__section_i_9_total; $__section_i_9_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['first'] = ($__section_i_9_iteration === 1);
?>
							<tr style="cursor:move" id="order_<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_property_id'];?>
" class="<?php echo smarty_function_cycle(array('values'=>"row1,row2"),$_smarty_tpl);?>
">
								<td class="index hiden767"> <?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_property_id'];?>
</td>
								<td class="name_service title_td1">
									<span class="title"><?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getTitle($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_property_id']);?>
</span>
									<button type="button" class="toggle-row inline_block767" style="display:none"><i class="fa fa-caret fa-caret-down"></i></button>
								</td>
								<td data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('status');?>
" class="block_responsive border_top_responsive" style="text-align:center">
									<a href="javascript:void(0);" class="SiteClickPublic" clsTable="TourProperty" pkey="<?php echo $_smarty_tpl->tpl_vars['pkeyTable']->value;?>
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
" class="block_responsive" align="center" style="vertical-align: middle; text-align:center; width: 60px; white-space: nowrap;">
									<div class="btn-group">
										<button class="btn btn_dropdown dropdown-toggle" type="button" data-toggle="dropdown">
											<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
										</button>
										<ul class="dropdown-menu" style="right:0px !important">
											<li><a class="btndelete_tourProperty" tp="F" type="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('edit');?>
" href="javascript:void();" data="<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_property_id'];?>
"><i class="icon-edit"></i> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('edit');?>
</a></li>
										<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('delete');?>
" class="confirm_delete" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=deleteTourProperty&type=MEAL&tour_property_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)][$_smarty_tpl->tpl_vars['pkeyTable']->value]);?>
"><i class="icon-remove"></i> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('delete');?>
</a></li>
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
					<div class="statistical mt5">
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
								<td width="50%" align="right">
									<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('gotopage');?>
:
									<select name="page" class="gotopage">
										<?php
$__section_i_10_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listPageNumber']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_10_total = $__section_i_10_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_10_total !== 0) {
for ($__section_i_10_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_10_iteration <= $__section_i_10_total; $__section_i_10_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['first'] = ($__section_i_10_iteration === 1);
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
									<a href="javascript:void(0)" class="btn btn-danger btn-delete-all" clsTable="Hotel" style="display:none">
										<i class="icon-remove icon-white"></i>
										<span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Delete Options');?>
</span>
									</a>
								</td>
							</tr>
						</table>
					</div>
				</div>
				<?php }?>
			</div>
		</div>
	</div>
</div>

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

<style type="text/css">
.tbl-grid tr td{font-size:15px !important;}
</style>
<?php echo '<script'; ?>
 type="text/javascript">
	
	$(document).on('change', '.adult_number_setting', function(ev){
		var $_this = $(this);
		$.ajax({
			type: "POST",
			url: path_ajax_script+"/?mod="+mod+"&act=ajSetMaxChildPolicy",
			data:{
				'group_size_id':$_this.attr("group_size_id"),
				'number_adult':$_this.attr("number_adult"),
				'traveler_type':$_this.attr("traveler_type"),
				"number_people":$_this.val(),
				'tp' : 'S'
			},
			dataType: "html",
			success: function(html){
				var htm = html.split('|||');
				$_this.val(htm[1]);
				$("#tabs_config_group_5").trigger("click");
			}
		}); 
	});
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
			$.post(path_ajax_script+"/index.php?mod=tour&act=ajUpdPosSortTourProperty", order, 
			
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
