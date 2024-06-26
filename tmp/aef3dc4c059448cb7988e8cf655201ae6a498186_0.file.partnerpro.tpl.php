<?php
/* Smarty version 3.1.38, created on 2024-04-08 13:09:39
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/partnerpro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66138a2368f2a4_46099555',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aef3dc4c059448cb7988e8cf655201ae6a498186' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/partnerpro.tpl',
      1 => 1704445318,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66138a2368f2a4_46099555 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['lstPartner']->value) {?>
<section class="section_box partner__box bg_fff">
    <div class="partner__box--header header__content">
        <?php $_smarty_tpl->_assignInScope('TitlePartner', ('TitlePartner_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
        <?php $_smarty_tpl->_assignInScope('IntroPartner', ('IntroPartner_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
        <h2 class="section_box-title"><?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['TitlePartner']->value);?>
</h2>
        <div class="section_box-intro">
            <?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['IntroPartner']->value));?>

        </div>
    </div>
    <div class="container">
    <div class="partner_logo_box owl-carousel">
    	<?php
$__section_i_30_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstPartner']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_30_total = $__section_i_30_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_30_total !== 0) {
for ($__section_i_30_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_30_iteration <= $__section_i_30_total; $__section_i_30_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
        <div class="partner_icon_scale">
            <a href="<?php echo $_smarty_tpl->tpl_vars['lstPartner']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['lstPartner']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title'];?>
" target="_blank">
                <img title="<?php echo $_smarty_tpl->tpl_vars['lstPartner']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['clsPartner']->value->getUrlImage($_smarty_tpl->tpl_vars['lstPartner']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['partner_id'],$_smarty_tpl->tpl_vars['lstPartner']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
" height="auto" width="auto"/>
            </a>
        </div>
        <?php
}
}
?>
    </div>
 	</div>
</section>
<?php if ($_smarty_tpl->tpl_vars['deviceType']->value == 'phone') {?>

<?php echo '<script'; ?>
>
    if($('.partner_logo_box').length > 0){
		var $owl = $('.partner_logo_box');
		$owl.owlCarousel({
			loop:false,
			nav: false,
			dots:false,
			margin:10,
			autoplay:true,
            autoplayTimeout:3000,	
			responsiveClass:true,
			responsive:{
				0:{
					items:2,
                    margin:20,
                    nav: false,
				},
				320:{
					items:2.3,
					margin:20,
				},
				360:{
					items:2.5,
					margin:20,
				},
				420:{
					items:3,
					margin:20,
				}
			}
		});
	}
<?php echo '</script'; ?>
>

<?php }
}
}
}
