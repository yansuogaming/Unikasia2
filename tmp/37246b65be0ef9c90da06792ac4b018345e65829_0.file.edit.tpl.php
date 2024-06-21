<?php
/* Smarty version 3.1.38, created on 2024-04-17 09:37:45
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/why/edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_661f35f9596a11_57475949',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37246b65be0ef9c90da06792ac4b018345e65829' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/why/edit.tpl',
      1 => 1710756782,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661f35f9596a11_57475949 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="breadcrumb">
	<strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('You are here');?>
 : </strong>
	<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
" title="Trang chủ"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Home');?>
</a>
    <a>&raquo;</a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Why with us');?>
?</a>
    <a>&raquo;</a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=<?php echo $_smarty_tpl->tpl_vars['act']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['act']->value;?>
"><?php if ($_smarty_tpl->tpl_vars['pvalTable']->value) {
echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Edit');
} else {
echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Add new');
}?></a>
</div>
<div class="container-fluid">
    <div class="page-title">
        <h2><?php if ($_smarty_tpl->tpl_vars['pvalTable']->value) {
echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Edit');?>
: <?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getTitle($_smarty_tpl->tpl_vars['pvalTable']->value);
} else {
echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('addnew');?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Why with us');?>
?<?php }?></h2>
    </div>
    <div class="clearfix"><br /></div>
    <form id="edititem" method="post" action="" enctype="multipart/form-data" class="validate-form">
        <div class="wrap">
            <div class="row-span">
                <div class="fieldlabel bold"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Title');?>
</strong> <span class="color_r">* </span></div>
                <div class="fieldarea">
                    <input class="text_32 full-width border_aaa bold required fontLarge" style="padding:5px" name="iso-title" value="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getTitle($_smarty_tpl->tpl_vars['pvalTable']->value);?>
" maxlength="255" type="text">
                </div>
            </div>
			<div class="row-span">
                <div class="fieldlabel bold"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Type');?>
</strong> <span class="color_r">* </span></div>
                <div class="fieldarea">
                   <select class="text full" name="iso-type" maxlength="255" style="width:200px" >
					   <option value="" <?php if ($_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField('type',$_smarty_tpl->tpl_vars['pvalTable']->value) == '') {?>selected="selected"<?php }?>>Default</option>
					   <option value="HOME"  <?php if ($_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField('type',$_smarty_tpl->tpl_vars['pvalTable']->value) == 'HOME') {?>selected="selected"<?php }?>>Home</option>
                       <option value="TOUR"  <?php if ($_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField('type',$_smarty_tpl->tpl_vars['pvalTable']->value) == 'TOUR') {?>selected="selected"<?php }?>>Tour</option>
					   <option value="DESTINATION"  <?php if ($_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField('type',$_smarty_tpl->tpl_vars['pvalTable']->value) == 'DESTINATION') {?>selected="selected"<?php }?>>Destination</option>
					   <option value="CRUISE"  <?php if ($_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField('type',$_smarty_tpl->tpl_vars['pvalTable']->value) == 'CRUISE') {?>selected="selected"<?php }?>>Cruise</option>
					   <option value="HOTEL"  <?php if ($_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField('type',$_smarty_tpl->tpl_vars['pvalTable']->value) == 'HOTEL') {?>selected="selected"<?php }?>>Hotel</option>
                       <option value="VOUCHER"  <?php if ($_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField('type',$_smarty_tpl->tpl_vars['pvalTable']->value) == 'HOTEL') {?>selected="selected"<?php }?>>Voucher</option>
				   </select>
                </div>
            </div>
            <div class="row-span">
                <div class="fieldlabel bold"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Icon');?>
</strong> <span class="color_r">*</span></div>
                <div class="fieldarea">
                    <img class="isoman_img_pop" id="isoman_show_image" src="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField('image',$_smarty_tpl->tpl_vars['pvalTable']->value);?>
" style="width:32px" height="32px" />
					<input type="hidden" id="isoman_hidden_image" value="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField('image',$_smarty_tpl->tpl_vars['pvalTable']->value);?>
">
					<input type="text" id="isoman_url_image" name="image" value="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField('image',$_smarty_tpl->tpl_vars['pvalTable']->value);?>
" class="text_32 border_aaa ml10" style="width:calc(100% - 80px) !important; display:inline-block !important; float:left"><a style="float:left; margin-left:4px; margin-top:-4px;" href="#" class="ajOpenDialog" isoman_for_id="image" isoman_val="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField('image',$_smarty_tpl->tpl_vars['pvalTable']->value);?>
" isoman_name="image"><img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/general/folder-32.png" border="0" title="Open" alt="Open"></a>
                </div>
            </div>
            <div class="row-span">
                <div class="fieldlabel bold"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('status');?>
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
			<div class="row-span">
                <div class="fieldlabel bold"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Short Text');?>
</strong> <span class="color_r">*</span></div>
                <div class="fieldarea">
                   <div class="coltrols"><?php echo $_smarty_tpl->tpl_vars['clsForm']->value->showInput($_smarty_tpl->tpl_vars['intro']->value);?>
</div>
                </div>
            </div> 
        </div>
        <div class="clearfix"><br /></div>
        <fieldset class="submit-buttons">
            <?php echo $_smarty_tpl->tpl_vars['saveBtn']->value;
echo $_smarty_tpl->tpl_vars['saveList']->value;?>

            <input value="Update" name="submit" type="hidden" />
        </fieldset>
    </form>
</div>


<?php echo '<script'; ?>
 type="text/javascript">
$('.changeToStore').live('change',function(){
	var $_this = $(this);
	var type= $_this.attr('_type');
	$.ajax({
		type: 'POST',
		url: path_ajax_script+'/index.php?mod='+mod+'&act=ajUpdateWhyType',
		data:{'_type' : $_this.attr('_type'),'why_id': $_this.attr('data'),'val' : $_this.is(':checked')?1:0},
		dataType:'html',
		success: function(html){
		}
	});
});
<?php echo '</script'; ?>
>
<?php }
}
