<?php
/* Smarty version 3.1.38, created on 2024-04-11 07:47:56
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/blocks/setting_module.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6617333ca55259_92746374',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '956a400570abd6a642919f36b8fb1592b271aad7' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/blocks/setting_module.tpl',
      1 => 1690520935,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6617333ca55259_92746374 (Smarty_Internal_Template $_smarty_tpl) {
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
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang($_smarty_tpl->tpl_vars['mod']->value);?>
</a>
    <a>&raquo;</a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=<?php echo $_smarty_tpl->tpl_vars['act']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('setting');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('setting');?>
</a>
</div>
<div class="clearfix"></div>
<div class="container-fluid">
    <div class="page-title">
        <h2><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('setting');?>
</h2>
        <p><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('systemmanagementsetting');?>
</p>
    </div>
	
		<div id="clienttabs">
			<ul>
				<li><a><i class="fa fa-cog"></i> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('general');?>
</a></li>
				<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->checkInArray('page',$_smarty_tpl->tpl_vars['mod']->value)) {?>
				<?php } else { ?>
				<li class="tabchild"><a href="#"><i class="iso-media"></i> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('seosdvanced');?>
</a></li>
				<?php }?>
			</ul>
		</div>
		<div id="tab_content">
			<div class="tabbox">
                <form method="post" action="" enctype="multipart/form-data">
				<table class="form" cellpadding="3" cellspacing="3">
					<tr class="row-span" style="display:none">
						<td class="fieldlabel span20"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('link');?>
</td>
						<td class="fieldarea">
                        	<?php $_smarty_tpl->_assignInScope('site_mod_link', ((('site_').($_smarty_tpl->tpl_vars['mod']->value)).('_link_')).($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
							
							<input class="text full required" name="iso-<?php echo $_smarty_tpl->tpl_vars['site_mod_link']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['site_mod_link']->value);?>
" maxlength="255" type="text" />
						</td>
					</tr>
					<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->checkInArray('cruise,blog',$_smarty_tpl->tpl_vars['mod']->value)) {?>
					<?php } else { ?>
					<tr class="row-span">
						<td class="fieldlabel"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('intropage');?>
</td>
						<td class="fieldarea">
							<?php $_smarty_tpl->_assignInScope('site_mod_intro', ((('site_').($_smarty_tpl->tpl_vars['mod']->value)).('_intro_')).($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
                            <textarea id="textarea_intro_editor<?php echo $_smarty_tpl->tpl_vars['now']->value;?>
" class="textarea_intro_editor" name="iso-<?php echo $_smarty_tpl->tpl_vars['site_mod_intro']->value;?>
" style="width:100%"><?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['site_mod_intro']->value);?>
</textarea>
						</td>
					</tr>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->checkInArray('cruise,download,faqs,feedback,guide,news,recruit,service,testimonial',$_smarty_tpl->tpl_vars['mod']->value)) {?>
					<?php } else { ?>
                    <tr class="row-span">
                        <td class="fieldlabel"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('bannercover');?>
</td>
                        <td class="fieldarea">
							<?php $_smarty_tpl->_assignInScope('site_mod_banner', (('site_').($_smarty_tpl->tpl_vars['mod']->value)).('_banner'));?>
                            <div class="photobox span98">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['site_mod_banner']->value);?>
" id="isoman_show_<?php echo $_smarty_tpl->tpl_vars['site_mod_banner']->value;?>
" class="span100" height="156px" style="width:100%;" />
                                <input type="hidden" id="isoman_hidden_<?php echo $_smarty_tpl->tpl_vars['site_mod_banner']->value;?>
" name="iso-<?php echo $_smarty_tpl->tpl_vars['site_mod_banner']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['site_mod_banner']->value);?>
" />
                                <a href="javascript:void()" class="photobox_edit ajOpenDialog" isoman_for_id="<?php echo $_smarty_tpl->tpl_vars['site_mod_banner']->value;?>
" isoman_val="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['site_mod_banner']->value);?>
" isoman_name="<?php echo $_smarty_tpl->tpl_vars['site_mod_banner']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('edit');?>
"><i class="iso-edit"></i></a>
                            </div>
                        </td>
                    </tr>
					<?php }?>
                    <tr class="row-span" style="display:none">
						<td class="fieldlabel span20"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('introBanner');?>
</td>
						<td class="fieldarea">
							<?php $_smarty_tpl->_assignInScope('site_intro_mod_banner', ((('site_intro_').($_smarty_tpl->tpl_vars['mod']->value)).('_banner_')).($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
							<input class="text full required" name="iso-<?php echo $_smarty_tpl->tpl_vars['site_intro_mod_banner']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['site_intro_mod_banner']->value);?>
" maxlength="1000" type="text" />
						</td>
					</tr>
				</table>
				<div class="clearfix mt10"></div>
				<fieldset class="submit-buttons">
					<?php echo $_smarty_tpl->tpl_vars['saveBtn']->value;?>

					<input value="UpdateConfiguration" name="submit" type="hidden">
				</fieldset>
                </form>
			</div>
			<div class="tabbox" style="display:none">
				<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('meta_box_module');?>

			</div>
		</div>
	
</div>

<?php echo '<script'; ?>
 type="text/javascript">
	$(document).ready(function(){
		$(".datepicker").datepicker();
	});
<?php echo '</script'; ?>
>
<?php }
}
