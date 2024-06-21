<?php
/* Smarty version 3.1.38, created on 2024-04-08 15:34:39
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/blocks/meta_box_module_blog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6613ac1ff08226_13104708',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77c367f5c01f64cb968ec75604876141cc38c3c8' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/blocks/meta_box_module_blog.tpl',
      1 => 1675224810,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6613ac1ff08226_13104708 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="box_title_trip_code" meta_id="<?php echo $_smarty_tpl->tpl_vars['meta_id']->value;?>
">
	<div class="row d-flex full-height">
		<div class="col-md-12">
			<div class="fill_data_box">
				<h3 class="title_box"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('seosdvanced');?>
</h3>
				<div class="form_option_tour">
					<div class="form-group">
						<label class="col-form-label" for="config_value_title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Meta Title');?>
 <span class="required_red">*</span></label>
						<input class="form-control required" name="config_value_title" id="config_value_title" onkeyup="countCharTitle(this)" value="<?php echo $_smarty_tpl->tpl_vars['clsMeta']->value->getMetaTitle($_smarty_tpl->tpl_vars['meta_id']->value);?>
" maxlength="255" type="text">
						<span class="help-block"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('The meta title of your page has a length of');?>
 <strong id="charTitleNum"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getCountMetaWord($_smarty_tpl->tpl_vars['clsMeta']->value->getMetaTitle($_smarty_tpl->tpl_vars['meta_id']->value));?>
</strong> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('characters');?>
. <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Most search engines will truncate meta titles to 70 characters');?>
.</span>
					</div>
					<div class="form-group">
						<label class="col-form-label" for="config_value_intro"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Meta Description');?>
 <span class="required_red">*</span></label>
						<textarea name="config_value_intro" id="config_value_intro" class="form-control required" onkeyup="countCharDes(this)"><?php echo $_smarty_tpl->tpl_vars['clsMeta']->value->getMetaDescription($_smarty_tpl->tpl_vars['meta_id']->value);?>
</textarea>
						<span class="help-block"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('The meta description of your page has a length of');?>
 <strong id="charDesNum"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getCountMetaWord($_smarty_tpl->tpl_vars['clsMeta']->value->getMetaDescription($_smarty_tpl->tpl_vars['meta_id']->value));?>
</strong> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('characters');?>
. <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Most search engines will truncate meta descriptions to 160 characters');?>
.</span>
					</div>
					<div class="form-group">
						<label class="col-form-label" for="config_value_intro"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Meta Index');?>
 <span class="required_red">*</span></label>
						<table>
							<tr>
								<td><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Meta Robots Index');?>
: </td>
								<td>
									<select name="meta_index">
										<option value="0"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Index');?>
</option>
										<option value="1" <?php if ($_smarty_tpl->tpl_vars['oneMeta']->value['meta_index'] == 1) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('NoIndex');?>
</option>
									</select>
								</td>
								<td><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Meta Robots Follow');?>
: </td>
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
					
					<div class="form-group inpt_tour">
						<label class="col-form-label"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Image Share Social');?>
 <span class="required_red">*</span></label>
						<div class="row">
							<div class="col-md-5 col-sm-12">
								<div class="filedrop-picker">
									<div class="filedrop" onclick="file_explorer(this,event);" ondrop="file_drop(this,event)" toId="selectFile" hiddenId="isoman_hidden_image_seo" data-options='{"openFrom":"seo","clsTable":"Meta", "table_id":"<?php echo $_smarty_tpl->tpl_vars['meta_id']->value;?>
","toId":"isoman_show_image_seo","hiddenId":"isoman_hidden_image_seo"}' ondragover="return false">
										<h3>Kéo ảnh vào đây để tải lên</h3>
										<p>Kích thước (WxH=500x261)<br>
										Các loại tệp được hỗ trợ là: .png,.jpg,.jpeg</p>
										<button type="button" class="btn btn-upload"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('From computer');?>
</button>
									</div>
									<input type="hidden" name="meta_id" value="<?php echo $_smarty_tpl->tpl_vars['meta_id']->value;?>
">
									<input class="hidden" id="selectFile" type="file" data-options='{"seo":"image","clsTable":"Meta", "table_id":"<?php echo $_smarty_tpl->tpl_vars['meta_id']->value;?>
","toId":"isoman_show_image_seo","hiddenId":"isoman_hidden_image_seo"}'>
									<div class="clearfix mt-half"></div>
									<a table_id="<?php echo $_smarty_tpl->tpl_vars['meta_id']->value;?>
" isoman_multiple="0" isoman_callback='isoman_callback({"openFrom":"seo", "clsTable":"Meta", "table_id":"<?php echo $_smarty_tpl->tpl_vars['meta_id']->value;?>
","toField":"image","toId":"isoman_show_image_seo","hiddenId":"isoman_hidden_image_seo"})' class="btn btn-upload-choice ajOpenDialog" isoman_for_id="image_seo" isoman_name="image"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->makeIcon('folder-o',$_smarty_tpl->tpl_vars['core']->value->get_Lang('From library'));?>
</a>
								</div>
							</div>
							<div class="col-xs-12 col-md-4">
								<div class="aspect-ratio aspect-ratio--square aspect-ratio--square--full aspect-ratio--interactive">
									<input type="hidden" id="isoman_hidden_image_seo" name="isoman_url_image_seo" value="<?php echo $_smarty_tpl->tpl_vars['clsMeta']->value->getOneField('image',$_smarty_tpl->tpl_vars['meta_id']->value);?>
" />
									<img class="aspect-ratio__content radius-3" id="isoman_show_image_seo" src="<?php echo $_smarty_tpl->tpl_vars['oneMeta']->value['image'];?>
" width="250px" height="170px" />
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>

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
