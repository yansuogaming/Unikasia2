<?php
/* Smarty version 3.1.38, created on 2024-04-11 07:12:02
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/email_template/default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66172ad2697fe6_11237530',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e202289b7fa50b0a65cfc40b7aaecc534fb53495' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/email_template/default.tpl',
      1 => 1684734635,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66172ad2697fe6_11237530 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/isocms/domains/isocms.com/public_html/inc/smarty3138/plugins/function.cycle.php','function'=>'smarty_function_cycle',),1=>array('file'=>'/home/isocms/domains/isocms.com/public_html/inc/smarty3138/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),2=>array('file'=>'/home/isocms/domains/isocms.com/public_html/inc/smarty3138/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div class="breadcrumb">
	<strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('youarehere');?>
:</strong>
	<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('home');?>
</a>
    <a>&raquo;</a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
?mod=email_template"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('emailtemplate');?>
</a>
	<!-- Back -->
    <a href="javascript:window.history.back();" class="back fr"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('back');?>
</a>
</div>
<div class="page_container">
	<div class="page-title d-flex">
        <div class="title">
			<h2><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('emailtemplate');?>
 <div class="info_module" data-toggle="tooltip" data-placement="right" title="Chức năng quản lý danh sách các <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('emailtemplate');?>
 trong hệ thống isoCMS">i</div>
			</h2>
			<?php $_smarty_tpl->_assignInScope('setting', ((('SiteIntroModule_').($_smarty_tpl->tpl_vars['mod']->value)).('_')).($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
			<?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['setting']->value) != '') {?>
			<p><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['setting']->value));?>
</p>
			<?php }?>
		</div>
		<div class="button_right">
			<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=edit" class="btn btn-main btn-addnew" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Add');?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('emailtemplate');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Add');?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('emailtemplate');?>
</a>
		</div>
    </div>
	<div class="container-fluid">
		<div class="clearfix"></div>
		<div class="wrap mt30">
            <div class="filter_box">
				<form id="forums" method="post" class="filterForm" action="">
										
					<div class="form-group form-country">
						<select name="email_cat_id" class="form-control" data-width="100%" id="slb_country">
                            <option value="0"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Category');?>
</option>
							 <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstEmailTemplateCat']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['first'] = ($__section_i_0_iteration === 1);
?>
                            <option <?php if ($_smarty_tpl->tpl_vars['email_cat_id']->value == $_smarty_tpl->tpl_vars['lstEmailTemplateCat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['email_template_cat_id']) {?>selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['lstEmailTemplateCat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['email_template_cat_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['clsEmailTemplateCat']->value->getTitle($_smarty_tpl->tpl_vars['lstEmailTemplateCat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['email_template_cat_id']);?>
</option>
                            <?php
}
}
?>
						</select>
					</div>
					<div class="form-group form-button">
						<button type="submit" class="btn btn-main" id="findtBtn">Tìm kiếm</button>
						<input type="hidden" name="filter" value="filter" />
					</div>
					<div class="form-group form-button hidden">
						<button type="button" class="btn btn-export" id="btn_export">Export</button>
					</div>
				</form>	
			</div>
			<table class="table tbl-grid table-striped table_responsive">
				<thead>
					<tr>
						<th class="gridheader hiden767">ID</th>
						<th class="gridheader text-left name_responsive full-w767"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Name');?>
</th>
						<th class="gridheader text-left hiden767"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Group');?>
</th>
						<th class="gridheader text-left hiden767"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('LastUpdated');?>
</th>
						<th class="gridheader text-left hiden767"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('UpdateBy');?>
</th>
						<th class="gridheader text-left hiden767"></th>
					</tr>
				</thead>
				<?php
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstCat']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total !== 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['first'] = ($__section_i_1_iteration === 1);
?>
				<?php $_smarty_tpl->_assignInScope('lstEmailTemplate', $_smarty_tpl->tpl_vars['clsClassTable']->value->getListEmailTemplate($_smarty_tpl->tpl_vars['lstCat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['email_template_cat_id']));?>
				<?php if ($_smarty_tpl->tpl_vars['lstEmailTemplate']->value) {?>
				<tbody>
					<?php
$__section_j_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstEmailTemplate']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_j_2_total = $__section_j_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_j'] = new Smarty_Variable(array());
if ($__section_j_2_total !== 0) {
for ($__section_j_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] = 0; $__section_j_2_iteration <= $__section_j_2_total; $__section_j_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']++){
?>
					<tr class="<?php echo smarty_function_cycle(array('values'=>"row1,row2"),$_smarty_tpl);?>
">
						<td class="text-center hiden767"><?php echo $_smarty_tpl->tpl_vars['lstEmailTemplate']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['email_template_id'];?>
</td>
						<td class="name_service title_td1"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['clsClassTable']->value->getTitle($_smarty_tpl->tpl_vars['lstEmailTemplate']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['email_template_id']),60);?>

						<button type="button" class="toggle-row inline_block767" style="display:none"><i class="fa fa-caret fa-caret-down"></i></button></td>
						<td class="block_responsive" data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Group');?>
"><?php echo $_smarty_tpl->tpl_vars['lstCat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title'];?>
</td>
						<td class="block_responsive" data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('LastUpdated');?>
"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['lstEmailTemplate']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['upd_date'],"%d/%m/%Y");?>
</td>
						<td class="block_responsive" data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('UpdateBy');?>
"><?php echo $_smarty_tpl->tpl_vars['clsUser']->value->getOneField('user_name',$_smarty_tpl->tpl_vars['lstEmailTemplate']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['user_id_update']);?>
 </td>
						<td class="block_responsive text-center" style="white-space:nowrap;" data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('func');?>
">
							<div class="btn-group">
								<button class="btn btn_dropdown dropdown-toggle" type="button" data-toggle="dropdown">
									<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
								</button>
								<ul class="dropdown-menu">
									<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('edit');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=edit&email_template_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptId($_smarty_tpl->tpl_vars['lstEmailTemplate']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['email_template_id']);?>
"><i class="icon-pencil"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('edit');?>
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


					<?php if (1 == 2) {?>
					<div class="wrap">
					<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['first'] : null)) {?>
					<h2 style="font-size:20px;"><?php echo $_smarty_tpl->tpl_vars['lstCat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title'];?>
</h2>
					<?php } else { ?>
					<h2 style="font-size:18px; margin:30px 0 5px 0"><?php echo $_smarty_tpl->tpl_vars['lstCat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title'];?>
</h2>
					<?php }?>
					<div class="row">
					<?php
$__section_j_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstEmailTemplate']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_j_3_total = $__section_j_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_j'] = new Smarty_Variable(array());
if ($__section_j_3_total !== 0) {
for ($__section_j_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] = 0; $__section_j_3_iteration <= $__section_j_3_total; $__section_j_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']++){
?>
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 full_width_600">
					<div class="emailtplstandard full-width">
					<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=edit&email_template_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptId($_smarty_tpl->tpl_vars['lstEmailTemplate']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['email_template_id']);?>
" id="<?php if (1 == 1) {?>(<?php echo $_smarty_tpl->tpl_vars['lstEmailTemplate']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['email_template_id'];?>
)<?php }?>"><img align="top" src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/massmail.png" /> <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['clsClassTable']->value->getTitle($_smarty_tpl->tpl_vars['lstEmailTemplate']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['email_template_id']),50);?>

					</a>
					</div>
					</div>
					<?php
}
}
?>
					</div>
					</div>
					<?php }?>
				<?php }?>
				<?php
}
}
?>
			</table>
		</div>
	</div>
</div><?php }
}
