<?php
/* Smarty version 3.1.38, created on 2024-04-11 08:11:39
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/blocks/box_detail_image_avatar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_661738cbdb1739_33122548',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '74b9dcee4d3f1b84c5c66709f9521291293e37af' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/blocks/box_detail_image_avatar.tpl',
      1 => 1697513821,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661738cbdb1739_33122548 (Smarty_Internal_Template $_smarty_tpl) {
?><h3 class="title_box"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Image');?>

</h3>
<div class="form_option_tour">
	<div class="inpt_tour">
		<div class="row">
						<div class="col-xs-12 col-md-4">
				<div class="aspect-ratio aspect-ratio--square aspect-ratio--square--full aspect-ratio--interactive">
					<img class="aspect-ratio__content radius-3" id="isoman_show_avatar" src="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['avatar'];?>
" width="250px" height="170px" />
				</div>
			</div>
		</div><!-- /file list -->
	</div>
</div><?php }
}
