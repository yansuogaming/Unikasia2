<?php
/* Smarty version 3.1.38, created on 2024-04-09 10:14:15
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/blocks/box_detail_image.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6614b28735dde3_42079492',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81e7b173fccf813bc630b4dd175d5ae79ebd6c14' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/blocks/box_detail_image.tpl',
      1 => 1710808472,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6614b28735dde3_42079492 (Smarty_Internal_Template $_smarty_tpl) {
?><h3 class="title_box"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Image');?>

<?php $_smarty_tpl->_assignInScope('help_first', $_smarty_tpl->tpl_vars['image_detail']->value);
if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
<button data-key="<?php echo $_smarty_tpl->tpl_vars['image_detail']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Image');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
<?php }?>
</h3>
<div class="form_option_tour">
	<div class="inpt_tour" <?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['image_detail']->value;?>
>
		<div class="row">
			<div class="col-md-6 col-sm-12">
				<div class="drop_gallery" onClick="loadHelp(this)" >
					<div class="text_help" hidden=""><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['image_detail']->value));?>
</div>
					<div class="filedrop full" onClick="file_explorer(this,event);" ondrop="file_drop(this,event)" toid="selectFile" toel="isoman_show_image" data-options='{"openFrom":"image","clsTable":"<?php echo $_smarty_tpl->tpl_vars['clsTable']->value;?>
", "table_id":"<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
","toId":"isoman_show_image" }' ondragover="return false">
						<h3><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Drop files to upload');?>
</h3>
                        <?php if ($_smarty_tpl->tpl_vars['mod']->value == 'blog') {?>
                        <p><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Image size');?>
 (WxH=828x552px)<br />
                        <?php } elseif ($_smarty_tpl->tpl_vars['mod']->value == 'ads') {?>
                         <p><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Image size');?>
 (WxH=1280x294px)<br />
                        <?php } elseif ($_smarty_tpl->tpl_vars['mod']->value == 'testimonial') {?>
                         <p><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Image size');?>
 (WxH=260x200px)<br />
                       <?php } elseif ($_smarty_tpl->tpl_vars['mod']->value == 'news') {?>
                         <p><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Image size');?>
 (WxH=850x547px)<br />
                        <?php } elseif ($_smarty_tpl->tpl_vars['mod']->value == 'country') {?>
                         <p><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Image size');?>
 (WxH=298x198px)<br />
                        <?php } elseif ($_smarty_tpl->tpl_vars['mod']->value == 'hotel') {?>
                         <p><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Image size');?>
 (WxH=850x391px)<br />
                        <?php } elseif ($_smarty_tpl->tpl_vars['mod']->value == 'cruise') {?>
                         <p><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Image size');?>
 (WxH=733x486px)<br />
                        <?php } elseif ($_smarty_tpl->tpl_vars['mod']->value == 'service') {?>
						<p><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Image size');?>
 (WxH=280x255px)<br/>
                        <?php } elseif ($_smarty_tpl->tpl_vars['mod']->value == 'city') {?>
						<p><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Image size');?>
 (WxH=295x168px)<br/>
						<?php } elseif ($_smarty_tpl->tpl_vars['mod']->value == 'voucher') {?>
						<p><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Image size');?>
 (WxH=297x194px)<br/>
						<?php } elseif ($_smarty_tpl->tpl_vars['mod']->value == 'tour_exhautive' && $_smarty_tpl->tpl_vars['image_detail']->value == 'image_category_country') {?>
						<p><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Image size');?>
 (WxH=532x355px)<br/>
                        <?php } else { ?>
						 <p><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Image size');?>
 (WxH=750x500px)<br />
                        <?php }?>
						Các loại tệp được hỗ trợ là: .png,.jpg,.jpeg</p>
						<button type="button" class="btn btn-upload"><?php if ($_smarty_tpl->tpl_vars['oneItem']->value['image']) {
echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Change Image');
} else {
echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Upload Image');
}?></button>
					</div>
					<input class="hidden" id="selectFile" type="file" data-options='{"openFrom":"image","clsTable":"<?php echo $_smarty_tpl->tpl_vars['clsTable']->value;?>
", "table_id":"<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
","toId":"isoman_show_image"}' name="image">

					<input style="display:none" type="file" multiple name="image" id="ajAttachFile" />
					<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
" name="image" id="image" />
					<a table_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" isoman_multiple="0" isoman_callback='isoman_callback({"openFrom":"image", "clsTable":"<?php echo $_smarty_tpl->tpl_vars['clsTable']->value;?>
", "pvalTable":"<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
", "table_id":"<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
","toField":"image","toId":"isoman_show_image"})' class="btn-upload-2 ajOpenDialog" isoman_for_id="image" isoman_name="image"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->makeIcon('folder-o',$_smarty_tpl->tpl_vars['core']->value->get_Lang('From library'));?>
</a>
				</div>
			</div>
			<div class="col-sm-12 col-md-6">
				<div class="aspect-ratio aspect-ratio--square aspect-ratio--square--full aspect-ratio--interactive">
                    <img alt="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['title'];?>
" class="aspect-ratio__content radius-3" id="isoman_show_image"src="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getImage($_smarty_tpl->tpl_vars['pvalTable']->value,250,170);?>
" onerror="this.src='<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/none_image.png'" style="width:100%; height:auto" />
				</div>
			</div>
		</div><!-- /file list -->
	</div>
</div><?php }
}
