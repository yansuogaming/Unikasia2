<?php
/* Smarty version 3.1.38, created on 2024-04-12 16:29:43
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/package/edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6618ff0752d730_02919015',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5af3e1433e7dc7f467e89c8aa5bc5cda3178acf' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/package/edit.tpl',
      1 => 1660892398,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6618ff0752d730_02919015 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/isocms/domains/isocms.com/public_html/inc/smarty3138/plugins/modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),));
?>
<div class="breadcrumb">
	<strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('youarehere');?>
 : </strong>
	<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('home');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('home');?>
</a>
    <a>&raquo;</a>
	<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['mod']->value);?>
</a>
    <a>&raquo;</a>
	 <a href="<?php echo $_smarty_tpl->tpl_vars['curl']->value;?>
"><?php if ($_smarty_tpl->tpl_vars['pvalTable']->value) {
echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('edit');?>
 #<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;
} else {
echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('add');
}?></a>
    <a href="javascript:window.history.back();" class="back fr"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('back');?>
</a>
</div>
<div class="container-fluid">
    <div class="page-title">
        <h2><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Package');?>
 &raquo; <span class="color_r"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Edit');?>
</span></h2>
       <p><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Package Management');?>
</p>
    </div>
	<div class="clearfix"></div>
    <form id="edititem" method="post" action="" enctype="multipart/form-data" class="validate-form">
    	<div class="wrap">
			<div class="row-span">
				<div class="fieldlabel"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Title');?>
</strong> <span class="color_r">*</span></div>
				<div class="fieldarea">
					<input class="text_32 full-width border_aaa bold title_capitalize required" name="title" value="<?php echo $_smarty_tpl->tpl_vars['oneTable']->value['title'];?>
" maxlength="255" type="text">
				</div>
			</div>
			
			
			<div class="row-span">
				<div class="fieldlabel"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Status');?>
</strong></div>
				<div class="fieldarea">
					<div class="checkbox-switch">
						<?php if ($_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField("is_online",$_smarty_tpl->tpl_vars['pvalTable']->value) == 1) {?>
						<input type="checkbox" checked value="1" name="is_online" class="input-checkbox" id="toolbar-active">
						<?php } else { ?>
						<input type="checkbox" value="1" name="is_online" class="input-checkbox" id="toolbar-active">
						<?php }?>
						<div class="checkbox-animate">
							<span class="checkbox-off">PRIVATE</span>
							<span class="checkbox-on">PUBLIC</span>
						</div>
					</div>	
					<span class="notice" id="prv_status" <?php if ($_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField("is_online",$_smarty_tpl->tpl_vars['pvalTable']->value) == 1) {?>style="display:none;"<?php }?>>PRIVATE: <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('This article can only be seen via the link in the admin page');?>
.</span>
					<span class="notice" id="pub_status" <?php if ($_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField("is_online",$_smarty_tpl->tpl_vars['pvalTable']->value) == 0) {?>style="display:none;"<?php }?>>PUBLIC: <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('This article is available online show normal status');?>
.</span>
				</div>      
			</div>
			<div class="clearfix mb50"></div>
			<div class="row-span">
				<div class="fieldlabel"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Permissions');?>
</strong> <span class="color_r">*</span></div>
				<div class="fieldarea">
					<div class="list_feature_box">
						<?php $_smarty_tpl->_assignInScope('lstModule', $_smarty_tpl->tpl_vars['core']->value->getListAdminModule());?>
						
						<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstModule']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
						<?php $_smarty_tpl->_assignInScope('listFeaturePackageByModule', $_smarty_tpl->tpl_vars['clsClassTable']->value->getListFeaturePackageByModule($_smarty_tpl->tpl_vars['lstModule']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name']));?>
						<?php if ($_smarty_tpl->tpl_vars['listFeaturePackageByModule']->value) {?>
						<div class="module_item mb30">
							<h4 class="mb10">Module <?php echo $_smarty_tpl->tpl_vars['lstModule']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</h4>
							
							<div class="row">
								<?php
$__section_j_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listFeaturePackageByModule']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_j_1_total = $__section_j_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_j'] = new Smarty_Variable(array());
if ($__section_j_1_total !== 0) {
for ($__section_j_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] = 0; $__section_j_1_iteration <= $__section_j_1_total; $__section_j_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']++){
?>
								<div class="col-sm-4">
									<div class="item" mod="<?php echo $_smarty_tpl->tpl_vars['listFeaturePackageByModule']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['mod_page'];?>
" act="<?php echo $_smarty_tpl->tpl_vars['listFeaturePackageByModule']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['act_page'];?>
" type="<?php echo $_smarty_tpl->tpl_vars['listFeaturePackageByModule']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['type'];?>
" type_page="<?php echo $_smarty_tpl->tpl_vars['listFeaturePackageByModule']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['type_page'];?>
">
										<label><input type="checkbox" <?php if (in_array($_smarty_tpl->tpl_vars['listFeaturePackageByModule']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['feature_package_id'],$_smarty_tpl->tpl_vars['list_feature_package_check_id']->value)) {?> checked <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['listFeaturePackageByModule']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['feature_package_id'];?>
" name="list_feature_package_id[]" />
										<?php echo $_smarty_tpl->tpl_vars['clsFeaturePackage']->value->getTitle($_smarty_tpl->tpl_vars['listFeaturePackageByModule']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['feature_package_id']);?>
</label>
									</div>
								</div>
								<?php
}
}
?>
							</div>
						</div>
						<?php }?>
						<?php
}
}
?>
					</div>
					<div align="right"><a href="javascript:void(0);" onclick="zCheckAll('edititem');return false">Check All</a> | <a href="javascript:void(0);" onclick="zUncheckAll('edititem');return false">Uncheck All</a></div>
				</div>
			</div>
			<fieldset class="submit-buttons" style="position: fixed;left: 0;right: 0; bottom: 10px;">
				<?php echo $_smarty_tpl->tpl_vars['saveBtn']->value;
echo $_smarty_tpl->tpl_vars['saveList']->value;?>

				<input value="Update" name="submit" type="hidden" />
			</fieldset>
		</div>
    </form>
</div>

<style type="text/css">
.fieldarea .line{display:inline-block; width:100%; margin-bottom:10px}
.fieldarea .line label{font-size:12px; font-weight:bold !important; margin-bottom:5px; display:block}
	.list_feature_box .item{display: inline-block; width: 100%; margin-bottom: 10px; font-size: 16px;}
	.list_feature_box .item input{margin: 0 5px 0;}
	.list_feature_box .item label{padding: 0; margin: 0;}
</style>
<?php }
}
