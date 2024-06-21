<?php
/* Smarty version 3.1.38, created on 2024-05-04 19:01:32
  from '/home/unikasia/domains/unikasia.com/private_html/isocms/templates/default/blocks/Press_news.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6636239ce6b286_14448153',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6dee935b59d3c9c970751bd3d789f2646aa9a477' => 
    array (
      0 => '/home/unikasia/domains/unikasia.com/private_html/isocms/templates/default/blocks/Press_news.tpl',
      1 => 1714822355,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6636239ce6b286_14448153 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['lstPartner']->value) {?>
<link rel="preload" href="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/jquery.partner.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
" as="script">
<section class="section_box partner__box press__news bg_fff">
	<div class="box_Partner">
        <div class="partner__box--header header__content">
            <?php $_smarty_tpl->_assignInScope('TitlePressNews', ('TitlePressNews_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
            <?php $_smarty_tpl->_assignInScope('IntroPressNews', ('IntroPressNews_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
            <h2 class="section_box-title"><?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['TitlePressNews']->value);?>
</h2>
            <?php if ($_smarty_tpl->tpl_vars['IntroPressNews']->value) {?>
            <div class="section_box-intro">
                <?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['IntroPressNews']->value));?>

            </div>
            <?php }?>
        </div>
        <div class="container">
			<div id="boxPress" class="boxPress">
				<div class="slideMain" style="height:85px">
					<ul class="slide1" style="height:85px;padding:0">
						<li>
							<?php
$__section_i_23_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstPartner']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_23_total = $__section_i_23_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_23_total !== 0) {
for ($__section_i_23_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_23_iteration <= $__section_i_23_total; $__section_i_23_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
							<?php $_smarty_tpl->_assignInScope('title', $_smarty_tpl->tpl_vars['lstPartner']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title']);?>
							<div class="item">
								<a href="<?php echo $_smarty_tpl->tpl_vars['lstPartner']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['lstPartner']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['url'];?>
" target="_blank">
									<img title="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" src="<?php echo $_smarty_tpl->tpl_vars['clsPartner']->value->getUrlImage($_smarty_tpl->tpl_vars['lstPartner']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['partner_id'],$_smarty_tpl->tpl_vars['lstPartner']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
" height="auto" width="auto"/>
								</a>
							</div>
							<?php
}
}
?>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/jquery.partner.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript">
		var $width_slide_panner = '<?php echo $_smarty_tpl->tpl_vars['width_slide_panner']->value;?>
';
	<?php echo '</script'; ?>
>
    
	<style type="text/css">
		.box_Partner{background:#fff;width: 100%; overflow: hidden}
		.box_Partner h3{font-size:27px;border-top:1px solid #ccc; width:100%;max-width:1060px;margin: 0 auto;padding-top:30px}
		.boxPress{width:100%; max-width:950px;overflow:hidden;position:relative;margin:0 auto;height:85px;overflow:hidden;display:block}
		.boxPress li{list-style:none;height:85px}
		.boxPress ul{margin:0}
		.boxPress li .item{width:131px;height:85px;display:inline-block;text-align:center;padding:10px;margin-right:10px;vertical-align:top;float:left;position:relative}
		.boxPress li .item img{display:inline-block;max-width:100%;margin:auto;position:absolute;z-index:1;top:50%;left:50%;-webkit-transform:translate(-50%,-50%);-khtml-transform:translate(-50%,-50%);-moz-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);-o-transform:translate(-50%,-50%);transform:translate(-50%,-50%);max-height:100%}
		.boxPress .mainPartner{width:100%;height:130px;overflow:hidden;border:0}
		.boxPress .mainPartner li{height:128px;display:inline-block;float:left}
		@media screen and (max-width: 600px) {
			.box_Partner h3 {font-size: 21px;}
		}
	</style>
	<?php echo '<script'; ?>
 type="text/javascript">
		$(function(){
			var $ww = $(window).width();
			$('#boxPress .slide1').width($width_slide_panner);
			$('#boxPress .slide2').width($width_slide_panner);
			$("#boxPress").rotate({
				speed : 20
			});
		});
	<?php echo '</script'; ?>
>
    
</section>
<?php }
}
}
