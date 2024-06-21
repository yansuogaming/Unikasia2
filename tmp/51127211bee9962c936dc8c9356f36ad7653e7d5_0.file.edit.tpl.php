<?php
/* Smarty version 3.1.38, created on 2024-04-15 13:44:57
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/continent/edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_661ccce98d4088_63149425',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51127211bee9962c936dc8c9356f36ad7653e7d5' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/continent/edit.tpl',
      1 => 1594285263,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661ccce98d4088_63149425 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="breadcrumb">
	<strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('youarehere');?>
 : </strong>
	<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('home');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('home');?>
</a>
    <a>&raquo;</a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Continent');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Continent');?>
</a>
    <a>&raquo;</a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['curl']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['act']->value;?>
"> <?php if ($_smarty_tpl->tpl_vars['pvalTable']->value) {
echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('edit');?>
 #<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;
} else {
echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('add');
}?></a>
    <!-- // -->
    <a href="javascript:window.history.back();" class="back fr"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('back');?>
</a>
</div>
<div class="container-fluid">
    <div class="page-title">
        <h2><?php if ($_smarty_tpl->tpl_vars['pvalTable']->value) {
echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getTitle($_smarty_tpl->tpl_vars['pvalTable']->value);
} else {
echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Add New Continents');
}?></h2>
    </div>
	<div class="clearfix"><br /></div>
    <form id="edititem" method="post" action="" enctype="multipart/form-data" class="validate-form">
    	<div id="clienttabs">
            <ul>
                <li class="tabchild"><a href="#"><i class="iso-bassic"></i> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('generalinformation');?>
</a></li>
                <?php if ($_smarty_tpl->tpl_vars['pvalTable']->value) {?><li class="tabchild"><a href="#"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('seosdvanced');?>
</a></li><?php }?>
            </ul>
        </div>
        <div class="clearfix"></div>
        <div id="tab_content">
        	<div class="tabbox" style="display:block">
                <div class="wrap">
                    <div class="fl">
                    	<div class="row-span">
                        	<div class="fieldlabel"><span class="requiredMask">*</span> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('title');?>
</div>
                            <div class="fieldarea">
                            	<input class="text full required" name="iso-title" value="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getTitle($_smarty_tpl->tpl_vars['pvalTable']->value);?>
" maxlength="255" type="text">
                            </div>
                        </div>
                        <div class="row-span">
							<div class="fieldlabel"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('status');?>
</strong> <span class="color_r">*</span></div>
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
                        <div class="row-span">
                        	<div class="fieldlabel"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('articlescontent');?>
.</div>
                        	<div class="fieldarea"><?php echo $_smarty_tpl->tpl_vars['clsForm']->value->showInput('intro');?>
</div>
                        </div>
                    </div>
                </div>
        	</div>
            <?php if ($_smarty_tpl->tpl_vars['pvalTable']->value) {?>
            <div class="tabbox" style="display:none">
            	 <?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('meta_box_detail');?>

        	</div>
            <?php }?>
        </div>
        <div class="clearfix"><br /></div>
        <fieldset class="submit-buttons">
            <?php echo $_smarty_tpl->tpl_vars['saveBtn']->value;
echo $_smarty_tpl->tpl_vars['saveList']->value;?>

            <input value="Update" name="submit" type="hidden" />
        </fieldset>
    </form>
</div><?php }
}
