<?php
/* Smarty version 3.1.38, created on 2024-04-16 08:24:17
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/feedback/edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_661dd341ba43a1_54782029',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '292e31b5e6b9ad5d4f5961bcd310816c5d1344b4' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/feedback/edit.tpl',
      1 => 1702370868,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661dd341ba43a1_54782029 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="breadcrumb">
	<strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('youarehere');?>
:</strong>
	<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('home');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('home');?>
</a>
    <a>&raquo;</a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('listofcontact');?>
</a>
    <!-- // -->
    <a href="javascript:window.history.back();" class="back fr"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('back');?>
</a>
</div>
<div class="container-fluid">
    <div class="page-title">
        <h2><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('contactmanagement');?>
</h2>
		<?php $_smarty_tpl->_assignInScope('setting', ((('SiteIntroModule_').($_smarty_tpl->tpl_vars['mod']->value)).('_')).($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
		<?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['setting']->value) != '') {?>
        <p><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['setting']->value));?>
</p>
		<?php }?>
    </div>
    <br class="clearfix" />
    <form id="edititem" method="post" action="" enctype="multipart/form-data" class="validate-form">
        <?php $_smarty_tpl->_assignInScope('FEEDBACKVALUE', $_smarty_tpl->tpl_vars['clsISO']->value->getArrayFromString($_smarty_tpl->tpl_vars['oneTable']->value['feedback_store']));?>
		 <div class="coltrols"><?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getFeedbackHTML($_smarty_tpl->tpl_vars['pvalTable']->value);?>
</div>
		<div class="row-field mt10">
            <div class="row-heading"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('note');?>
:</div>
            <div class="coltrols"><?php echo $_smarty_tpl->tpl_vars['clsForm']->value->showInput('note');?>
</div>
        </div>
        <div class="row-field">
            <div class="row-heading"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('processcontact');?>
:</div>
            <div class="coltrols">
            	<label for="is_process"><input type="checkbox" name="is_process" value="1" <?php if ($_smarty_tpl->tpl_vars['oneTable']->value['is_process'] == '1') {?>checked="checked"<?php }?> /> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('tick here if processed');?>
!</label>
            </div>
        </div>
        <fieldset class="submit-buttons">
            <button type="submit" class="btn btn-primary start">
                <i class="icon-ok icon-white"></i>
                <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Submit');?>
</span>
            </button>
            <input value="Update" name="submit" type="hidden">
        </fieldset>
    </form>
</div><?php }
}
