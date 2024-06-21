<?php
/* Smarty version 3.1.38, created on 2024-04-11 07:47:56
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/blocks/meta_box_module.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6617333cacf985_39492229',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3a7b537d902c5df83ecd966147ae0007c972a1f' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/blocks/meta_box_module.tpl',
      1 => 1675222828,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6617333cacf985_39492229 (Smarty_Internal_Template $_smarty_tpl) {
?><form id="forums" method="post" action="">
	<div class="wrap">
		<div class="fl col_Left">
			<div class="row-field">
				<div class="row-heading"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Meta Image');?>
* <span class="size12">(W X H: 500x261)</span></div>
				<div class="coltrols">
					<div class="photobox photobox_share image" style="width:200px; height:200px; ">
						<?php if ($_smarty_tpl->tpl_vars['_isoman_use']->value == '1') {?>
						<img src="<?php echo $_smarty_tpl->tpl_vars['oneMeta']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('images');?>
" id="isoman_show_image_seo" />
						<input type="hidden" id="isoman_hidden_image_seo" name="isoman_url_image_seo" value="<?php echo $_smarty_tpl->tpl_vars['oneMeta']->value['image'];?>
" />
						<a href="javascript:void()" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('change');?>
" class="photobox_edit ajOpenDialog" isoman_for_id="image_seo" isoman_val="<?php echo $_smarty_tpl->tpl_vars['oneMeta']->value['image'];?>
" isoman_name="image_seo"><i class="iso-edit"></i></a>
						<?php if ($_smarty_tpl->tpl_vars['oneMeta']->value['image']) {?>
						<a pvalTable="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" clsTable="Meta" href="javascript:void()" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('delete');?>
" class="photobox_edit deleteItemImageHtml" data-name_input="isoman_url_image_seo" g="imgItem" style="margin-left:25px;line-height:27px;background:red;color:#fff;text-align:center; text-decoration:none">X</a>
						<?php }?>
						<?php } else { ?>
						<img src="<?php echo $_smarty_tpl->tpl_vars['oneMeta']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('noimages');?>
" id="imgTour_image" />
						<input type="hidden" name="image_src" value="<?php echo $_smarty_tpl->tpl_vars['oneMeta']->value['image'];?>
" class="hidden_src" id="imgTour_hidden" />
						<a href="javascript:void()" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Change');?>
" class="photobox_edit editInlineImage" g="imgTour">
							<i class="iso-edit"></i>
						</a> 
						<input type="file" style="display:none" id="imgTour_file" g="imgTour" class="editInlineImageFile" name="image" />
						<?php }?>
					</div>
				</div>
			</div>
		</div>
		<div class="fr col_Right">
			<div class="row-field">
				<div class="row-heading"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Meta Title');?>
*</div>
				<div class="coltrols">
					<div class="mb10"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('The meta title of your page has a length of');?>
 <strong id="charTitleNum"><?php echo $_smarty_tpl->tpl_vars['number_word_title']->value;?>
</strong> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('characters');?>
. <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Most search engines will truncate meta titles to 70 characters');?>
.</div>
					<input class="text full fontLarge required" name="config_value_title"  onkeyup="countCharTitle(this)" value="<?php echo $_smarty_tpl->tpl_vars['clsMeta']->value->getOneField('config_value_title',$_smarty_tpl->tpl_vars['meta_id']->value);?>
" maxlength="255" type="text">
				</div>
			</div>
			<div class="row-field">
				<div class="row-heading"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Meta Description');?>
*</div>
				<div class="coltrols">
					<div class="mb10"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('The meta description of your page has a length of');?>
 <strong id="charDesNum"><?php echo $_smarty_tpl->tpl_vars['number_word_description']->value;?>
</strong> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('characters');?>
. <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Most search engines will truncate meta descriptions to 160 characters');?>
.</div>
					<textarea name="config_value_intro" class="text full required"  onkeyup="countCharDes(this)" style="height:70px"><?php echo $_smarty_tpl->tpl_vars['clsMeta']->value->getOneField('config_value_intro',$_smarty_tpl->tpl_vars['meta_id']->value);?>
</textarea>
				</div>
			</div>
			<div class="row-field">
				<div class="row-heading"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Meta Index');?>
*</div>
				<div class="coltrols">
					<table>
						<tr>
							<td style="background:#CCC"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Meta Robots Index');?>
</td>
							<td>
								<select name="meta_index">
									<option value="0"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Index');?>
</option>
									<option value="1" <?php if ($_smarty_tpl->tpl_vars['oneMeta']->value['meta_index'] == 1) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('NoIndex');?>
</option>
								</select>
							</td>
							<td style="background:#CCC"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Meta Robots Follow');?>
</td>
							<td>
								<select name="meta_follow">
									<option value="0"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Follow');?>
</option>
									<option value="1" <?php if ($_smarty_tpl->tpl_vars['oneMeta']->value['meta_follow'] == 1) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('NoFollow');?>
</option>
								</select>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
	
	<div class="google_search_view">
		<div class="title_box">Google Search Demo</div>
		<div class="g">
			<div class="rc" data-hveid="CAMQAA" data-ved="2ahUKEwimtvGyhrfoAhUUVN4KHUjdAt8QFSgAMAJ6BAgDEAA">
				<div class="r">
					<a href="<?php echo $_smarty_tpl->tpl_vars['clsMeta']->value->getConfigLink($_smarty_tpl->tpl_vars['meta_id']->value);?>
" onMouseDown="return rwt(this,'','','','3','AOvVaw2TCr7DGKKcv5xJhzEckMqH','','2ahUKEwimtvGyhrfoAhUUVN4KHUjdAt8QFjACegQIAxAB','','',event)">
						<br>
						<h3 class="LC20lb DKV0Md"><?php echo $_smarty_tpl->tpl_vars['clsMeta']->value->getMetaTitle($_smarty_tpl->tpl_vars['meta_id']->value);?>
</h3>
						<div class="TbwUpd NJjxre"><cite class="iUh30 bc tjvcx"><?php echo $_smarty_tpl->tpl_vars['host']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['clsMeta']->value->getConfigLinkViewGoogleSearch($_smarty_tpl->tpl_vars['meta_id']->value);?>
</cite></div>
					</a>
					<div class="B6fmyf">
						<div class="TbwUpd"><cite class="iUh30 bc tjvcx"><?php echo $_smarty_tpl->tpl_vars['host']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['clsMeta']->value->getConfigLinkViewGoogleSearch($_smarty_tpl->tpl_vars['meta_id']->value);?>
</cite></div>
					</div>
				</div>
				<div class="s">
					<div><?php echo $_smarty_tpl->tpl_vars['clsMeta']->value->getMetaDescription($_smarty_tpl->tpl_vars['meta_id']->value);?>
</div>
				</div>
			</div>
		</div>
	</div>
	<fieldset class="submit-buttons">
        <?php echo $_smarty_tpl->tpl_vars['saveBtn']->value;?>

        <input value="UpdateMeta" name="submitMeta" type="hidden">
    </fieldset>
</form>

<?php echo '<script'; ?>
 type="text/javascript">
function countCharTitle(val) {
	var len = val.value.length;
	$('#charTitleNum').text(len);
};
function countCharDes(val) {
	var len = val.value.length;
	$('#charDesNum').text(len);
};
<?php echo '</script'; ?>
>
<?php }
}
