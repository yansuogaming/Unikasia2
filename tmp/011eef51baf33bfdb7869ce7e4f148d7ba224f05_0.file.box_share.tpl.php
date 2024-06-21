<?php
/* Smarty version 3.1.38, created on 2024-05-06 11:55:35
  from '/home/unikasia/domains/unikasia.com/private_html/isocms/templates/default/blocks/box_share.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_663862c7c051e1_89667614',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '011eef51baf33bfdb7869ce7e4f148d7ba224f05' => 
    array (
      0 => '/home/unikasia/domains/unikasia.com/private_html/isocms/templates/default/blocks/box_share.tpl',
      1 => 1714822352,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_663862c7c051e1_89667614 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="share_news">
	<div class="sharer-icons" data-link_share="<?php echo $_smarty_tpl->tpl_vars['link_share']->value;?>
" data-title_share="<?php echo $_smarty_tpl->tpl_vars['title_share']->value;?>
" data-description_share="<?php echo $_smarty_tpl->tpl_vars['description_share']->value;?>
">
		
	</div>
</div>

<style type="text/css">
	.share_news { display: inline-block; text-align: right; float: right; }
	.share_news .sharer-icons { display: flex; }
	.share_news .sharer-icons a { cursor: pointer; height: 30px; width: 30px; font-size: 16px; text-decoration: none; border: 1px solid transparent; border-radius: 50%; text-align: center; display: flex; justify-content: center; align-items: center; margin-left: 15px; transition: all 0.3s ease-in-out; } 
	.share_news .sharer-icons a i { transition: transform 0.3s ease-in-out; } 
	.share_news .sharer-icons a:hover { color: #fff; } 
	.share_news .sharer-icons a.sharer-icon-facebook { color: #1877f2; border-color: #b7d4fb; } 
	.share_news .sharer-icons a.sharer-icon-facebook:hover { background: #1877f2; color:#FFF } 
	.share_news .sharer-icons a.sharer-icon-twitter { color: #46c1f6; border-color: #b6e7fc; } 
	.share_news .sharer-icons a.sharer-icon-twitter:hover { background: #46c1f6; color:#FFF } 
	.share_news .sharer-icons a.sharer-icon-linkedin { color: #1385c4; border-color: #89c6e7; } 
	.share_news .sharer-icons a.sharer-icon-linkedin:hover { background: #1385c4; color:#FFF } 
	.share_news .sharer-icons a.sharer-icon-pinterest { color: #f13434; border-color: #f9b7b7; } 
	.share_news .sharer-icons a.sharer-icon-pinterest:hover { background: #f13434; color:#FFF }
</style>
<?php echo '<script'; ?>
 type="text/javascript">
	$(".sharer-icons").each(function(index){
		var link_share = $(this).data('link_share');
		var title_share = $(this).data('title_share');
		var description_share = $(this).data('description_share');
		$(this).empty().sharer({
		networks: ["facebook", "twitter", "linkedin", "pinterest"],
		url : DOMAIN_NAME+link_share,
		title : title_share,
		description : description_share,
	});
	});
	$(".icon_share").click(function() {
		$(".share_box").toggleClass('open');
	});
	
<?php echo '</script'; ?>
>
 <?php }
}
