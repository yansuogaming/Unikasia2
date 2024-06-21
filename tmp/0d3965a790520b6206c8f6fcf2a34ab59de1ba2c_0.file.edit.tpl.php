<?php
/* Smarty version 3.1.38, created on 2024-04-16 08:30:28
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/email_template/edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_661dd4b4a2c232_83207072',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d3965a790520b6206c8f6fcf2a34ab59de1ba2c' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/email_template/edit.tpl',
      1 => 1676980800,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661dd4b4a2c232_83207072 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="breadcrumb">
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
<div class="container-fluid">
    <form method="post" action="" enctype="multipart/form-data" class="validate-form">
        <div class="page-title">	
            <h2><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('emailtemplate');?>

            	            </h2>
            <?php $_smarty_tpl->_assignInScope('setting', ((('SiteIntroModule_').($_smarty_tpl->tpl_vars['mod']->value)).('_')).($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
            <?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['setting']->value) != '') {?><p><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['setting']->value));?>
</p> <?php }?>
        </div>
        <div class="clearfix"><br /></div>
    	<div class="wrap">
            <table class="form" width="100%" border="0" cellspacing="2" cellpadding="3">
            	 <tr>
                    <td class="fieldlabel span20 block767 full_width_767 text_left_767"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('templatename');?>
 <font color="red">*</font></td>
                    <td class="fieldarea  block767 full_width_767">
                        <input class="text full required" name="iso-title" style="padding:5px" value="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getTitle($_smarty_tpl->tpl_vars['pvalTable']->value);?>
" maxlength="255" type="text">
                    </td>
                </tr>
                <tr>
                    <td class="fieldlabel span20 block767 full_width_767 text_left_767"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Group');?>
 <font color="red">*</font></td>
                    <td class="fieldarea  block767 full_width_767">
                        <select name="iso-cat_id" class="required">
                            <option value="0"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Category');?>
</option>
                            <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstEmailTemplateCat']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                            <option <?php if ($_smarty_tpl->tpl_vars['oneItem']->value['cat_id'] == $_smarty_tpl->tpl_vars['lstEmailTemplateCat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['email_template_cat_id']) {?>selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['lstEmailTemplateCat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['email_template_cat_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['clsEmailTemplateCat']->value->getTitle($_smarty_tpl->tpl_vars['lstEmailTemplateCat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['email_template_cat_id']);?>
</option>
                            <?php
}
}
?>
                        </select>
                    </td>
                </tr>
            	<tr>
                    <td class="fieldlabel span20  block767 full_width_767 text_left_767"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('From');?>
 <font color="red">*</font></td>
                    <td class="fieldarea  block767 full_width_767">
                        <input type="text" class="text full" name="iso-fromname" size="25" value="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getFromName($_smarty_tpl->tpl_vars['pvalTable']->value);?>
" placeholder="Join Carter,..." data-enter-submit="true" style="width:40%" />
                        <input type="text" class="text full" name="iso-fromemail" size="40" value="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getFromEmail($_smarty_tpl->tpl_vars['pvalTable']->value);?>
" data-enter-submit="true" placeholder="example@email.com" style="width:40%"> 
                    </td>
                </tr>
                <tr>
                    <td class="fieldlabel span20  block767 full_width_767 text_left_767"> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Copy To');?>
 </td>
                    <td class="fieldarea  block767 full_width_767">
                        <input type="text" name="iso-copyto" size="50" style="padding:5px" value="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getCopyTo($_smarty_tpl->tpl_vars['pvalTable']->value);?>
" data-enter-submit="true" placeholder="example@email.com,..." />
                        <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Enter email addresses separated by a comma');?>

                    </td>
                </tr>
                <tr>
                    <td class="fieldlabel span20  block767 full_width_767 text_left_767"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('subject');?>
 <font color="red">*</font></td>
                    <td class="fieldarea  block767 full_width_767">
                        <input class="text full required" name="iso-subject" style="padding:5px" value="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getSubject($_smarty_tpl->tpl_vars['pvalTable']->value);?>
" maxlength="255" type="text"  placeholder="Subject E-Mail" />
                    </td>
                </tr>
                <tr>
                    <td class="fieldlabel span20  block767 full_width_767 text_left_767"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('HeaderEmail');?>
 <font color="red">*</font></td>
                    <td class="fieldarea  block767 full_width_767">
						<textarea id="textarea_intro_editor_header<?php echo $_smarty_tpl->tpl_vars['now']->value;?>
" class="textarea_intro_email_editor_simple" name="iso-header" style="width:100%"><?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getHeader($_smarty_tpl->tpl_vars['pvalTable']->value);?>
</textarea>
                        
                    </td>
                </tr>
                <tr>
                    <td class="fieldlabel span20  block767 full_width_767 text_left_767"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('BodyEmail');?>
 <font color="red">*</font></td>
                    <td class="fieldarea  block767 full_width_767">
						<textarea id="textarea_intro_editor<?php echo $_smarty_tpl->tpl_vars['now']->value;?>
" class="textarea_intro_email_editor" name="iso-content" style="width:100%"><?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getContent($_smarty_tpl->tpl_vars['pvalTable']->value);?>
</textarea>
                    </td>
                </tr>
                <tr>
                    <td class="fieldlabel span20  block767 full_width_767 text_left_767"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('FooterEmail');?>
 <font color="red">*</font></td>
                    <td class="fieldarea  block767 full_width_767">
						<textarea id="textarea_intro_editor_footer<?php echo $_smarty_tpl->tpl_vars['now']->value;?>
" class="textarea_intro_email_editor_simple" name="iso-footer" style="width:100%"><?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getFooter($_smarty_tpl->tpl_vars['pvalTable']->value);?>
</textarea>
                    </td>
                </tr>
                
                <?php echo '<script'; ?>
 type="text/javascript">
                    $(function(){
                        if($('.textarea_intro_email_editor').length > 0){
                            $('.textarea_intro_email_editor').each(function(){
                                var $_this = $(this);
                                var $editorID = $_this.attr('id');
                                $('#'+$editorID).isoTextAreaEmail();
                            });
                        }
                        if($('.textarea_intro_email_editor_simple').length > 0){
                            $('.textarea_intro_email_editor_simple').each(function(){
                                var $_this = $(this);
                                var $editorID = $_this.attr('id');
                                $('#'+$editorID).isoTextAreaSimpleEmail();
                            });
                        }
                        var $ok = true;
                        var $editorID = 'textarea_content';
                        $("a.toggle").click(function(){
                            if($ok){
                                 tinyMCE.execCommand('mceRemoveControl', false, $editorID);
                                 $ok = false;
                            }else{
                                tinyMCE.execCommand('mceAddControl', false, $editorID);
                                $ok = true;
                            }
                            return false;
                        });
                        $(window).load(function(){
                            $('#textarea_content_ifr').height(240);
                        });
                        $('.command').click(function(){
                            var $_this = $(this);
                            tinymce.activeEditor.execCommand('mceInsertContent', false, $_this.attr('data'));
                            return false;
                        });
                    });
                <?php echo '</script'; ?>
>
                
            </table>
        </div>
        <fieldset class="submit-buttons">
            <?php echo $_smarty_tpl->tpl_vars['saveBtn']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['resetBtn']->value;?>

            <input value="Update" name="submit" type="hidden">
        </fieldset>
    </form>
    
    <div class="wrap mt30">
        <div class="page-title">	
            <h2><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Available Merge Fields');?>
</h2>
        </div>
        <div class="row">
			<div class="col-sm-6 col-md-4">
				<div class="row-field full_width">
					<div class="row-heading"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('company');?>
</div>
					<div class="content coltrols" style="padding:0px">
						<ul class="wicket">
							<li>
								<a class="command" href="javascript:void();" data="[%PAGE_NAME%]"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Page Name');?>
</a>
								<span>[%PAGE_NAME%]</span>
							</li>
                            <li>
								<a class="command" href="javascript:void();" data="[%PAGE_NAME%]"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Companyname');?>
</a>
								<span>[%COMPANY_NAME%]</span>
							</li>
							<li>
								<a class="command" href="javascript:void();" data="[%COMPANY_ADDRESS%]"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('address');?>
</a>
								<span>[%COMPANY_ADDRESS%]</span>
							</li>
							<li>
								<a class="command" href="javascript:void();" data="[%COMPANY_PHONE%]"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('phone');?>
</a>
								<span>[%COMPANY_PHONE%]</span>
							</li>
							<li>
								<a class="command" href="javascript:void();" data="[%COMPANY_EMAIL%]">Email</a>
								<span>[%COMPANY_EMAIL%]</span>
							</li>
							<li>
								<a class="command" href="javascript:void();" data="[%COMPANY_FAX%]">Fax</a>
								<span>[%COMPANY_FAX%]</span>
							</li>
							<li>
								<a class="command" href="javascript:void();" data="[%COMPANY_WEBSITE%]"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('webiste');?>
</a>
								<span>[%COMPANY_WEBSITE%]</span>
							</li>
						</ul>
					</div>
				</div>
			</div>
            <div class="col-sm-6 col-lg-4 col-md-4">
				<div class="row-field full_width">
					<div class="row-heading"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('customer');?>
</div>
					<div class="content coltrols" style="padding:0px">
						<ul class="wicket">
							<li>
								<a class="command" href="javascript:void();" data="[%CUSTOMER_FULLNAME%]"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('fullname');?>
</a>
								<span>[%CUSTOMER_FULLNAME%]</span>
							</li>
							<li>
								<a class="command" href="javascript:void();" data="[%CUSTOMER_EMAIL%]">Email</a>
								<span>[%CUSTOMER_EMAIL%]</span>
							</li>
							<li>
								<a class="command" href="javascript:void();" data="[%CUSTOMER_ADDRESS%]"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('address');?>
</a>
								<span>[%CUSTOMER_ADDRESS%]</span>
							</li>
							<li>
								<a class="command" href="javascript:void();" data="[%CUSTOMER_PHONE%]"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('phone');?>
</a>
								<span>[%CUSTOMER_PHONE%]</span>
							</li>
							<li>
								<a class="command" href="javascript:void();" data="[%CUSTOMER_COUNTRY%]"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('country');?>
</a>
								<span>[%CUSTOMER_COUNTRY%]</span>
							</li>
							<li>
								<a class="command" href="javascript:void();" data="[%DATETIME%]"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('datetime');?>
</a>
								<span>[%DATETIME%]</span>
							</li>
							<li class="lastBorder">
								<a class="command" href="javascript:void();" data="[%UNSUBSCRIBE%]">Unsubscribe email</a>
								<span>[%UNSUBSCRIBE%]</span>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php }
}
