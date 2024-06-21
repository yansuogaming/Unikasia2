<?php
/* Smarty version 3.1.38, created on 2024-04-08 14:06:47
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/box_service_ad.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_661397873a83d0_58907493',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1e860cb850d9edc55b8ab59c324c74524631d56' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/box_service_ad.tpl',
      1 => 1709883724,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661397873a83d0_58907493 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['listWhy']->value) {?>
<section class="box_service_ad">
    <div class="container">
        <h2 class="sec_box_service_title"><?php echo $_smarty_tpl->tpl_vars['PAGE_NAME']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('is always the ideal choice');?>
</h2>
        <div class="owl-carousel list_service_ad">
            <?php
$__section_i_9_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listWhy']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_9_total = $__section_i_9_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_9_total !== 0) {
for ($__section_i_9_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_9_iteration <= $__section_i_9_total; $__section_i_9_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                <div class="service_ad_item">
                    <div class="icon_service">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['clsWhy']->value->getIcon($_smarty_tpl->tpl_vars['listWhy']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['why_id'],$_smarty_tpl->tpl_vars['listWhy']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['clsWhy']->value->getTitle($_smarty_tpl->tpl_vars['listWhy']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['why_id'],$_smarty_tpl->tpl_vars['listWhy']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
" width="70"
                             height="70">
                    </div>
                    <div class="box_service_content"><?php echo $_smarty_tpl->tpl_vars['clsWhy']->value->getStripIntro($_smarty_tpl->tpl_vars['listWhy']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['why_id'],$_smarty_tpl->tpl_vars['listWhy']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
</div>
                </div>
            <?php
}
}
?>
        </div>

    </div>
</section>

<?php echo '<script'; ?>
>
    $('.list_service_ad').owlCarousel({
        loop:true,
        margin:30,
        nav:false,
        dots:false,
        autoplay:true,
        autoplayTimeout:3500,
        responsive:{
            0:{
                margin: 20,
                items:1,
                loop: $('.owl-carousel .service_ad_item').size() > 1 ? true:false,
            },
            600:{
                items:2,
                loop: $('.owl-carousel .service_ad_item').size() > 2 ? true:false,
            },
            992:{
                items:3,
                loop: $('.owl-carousel .service_ad_item').size() > 3 ? true:false
            },
            1025:{
                items:3,
                loop: $('.owl-carousel .service_ad_item').size() > 3 ? true:false,
            }
        }
    });

<?php echo '</script'; ?>
>

<?php }
}
}
