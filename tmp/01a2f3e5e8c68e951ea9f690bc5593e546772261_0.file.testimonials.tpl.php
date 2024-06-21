<?php
/* Smarty version 3.1.38, created on 2024-04-09 13:12:42
  from '/home/isocms/domains/isocms.com/private_html/isocms/unika_templates/default/blocks/testimonials.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6614dc5a8e3c14_69574996',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01a2f3e5e8c68e951ea9f690bc5593e546772261' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/unika_templates/default/blocks/testimonials.tpl',
      1 => 1711080548,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6614dc5a8e3c14_69574996 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['lstTestimonial']->value) {
$_smarty_tpl->_assignInScope('TitleSiteTestimonial', ('TitleTestimonialsHome_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));
$_smarty_tpl->_assignInScope('IntroSiteTestimonial', ('IntroTestimonialsHome_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
<section class="section_home section_testimonial">
    <div class="container">
        <div class="header_home_box">
            <h2 class="title_home_box"><?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['TitleSiteTestimonial']->value);?>
</h2>
                    </div>
        <div class="content_home_box">
            <div class="list_testimonial">
                <div class=" owl_testimonial owl-carousel">
                    <?php
$__section_i_24_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstTestimonial']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_24_total = $__section_i_24_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_24_total !== 0) {
for ($__section_i_24_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_24_iteration <= $__section_i_24_total; $__section_i_24_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                    <?php $_smarty_tpl->_assignInScope('title_testimonial', $_smarty_tpl->tpl_vars['lstTestimonial']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title']);?>
                    <?php $_smarty_tpl->_assignInScope('link_testimonial', $_smarty_tpl->tpl_vars['clsTestimonial']->value->getLink($_smarty_tpl->tpl_vars['lstTestimonial']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['testimonial_id'],$_smarty_tpl->tpl_vars['lstTestimonial']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]));?>
                    <div class="itemTest">
                        <div class="user_avatar">
                            <img class="img100" alt="<?php echo $_smarty_tpl->tpl_vars['clsTestimonial']->value->getName($_smarty_tpl->tpl_vars['lstTestimonial']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['testimonial_id'],$_smarty_tpl->tpl_vars['lstTestimonial']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
" src="<?php echo $_smarty_tpl->tpl_vars['clsTestimonial']->value->getImage($_smarty_tpl->tpl_vars['lstTestimonial']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['testimonial_id'],52,52,$_smarty_tpl->tpl_vars['lstTestimonial']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
" width="52" height="52" />
                        </div>
                        <a class="color_1c1c1c" href="<?php echo $_smarty_tpl->tpl_vars['link_testimonial']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['title_testimonial']->value;?>
">
                            <div class="rate">
                            <label class="rate_star block"><?php echo $_smarty_tpl->tpl_vars['clsTestimonial']->value->getRatesStar($_smarty_tpl->tpl_vars['lstTestimonial']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['testimonial_id'],$_smarty_tpl->tpl_vars['lstTestimonial']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
</label>
                            </div>
                            <div class="intro text8line mb10"><?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['clsTestimonial']->value->getIntro($_smarty_tpl->tpl_vars['lstTestimonial']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['testimonial_id'],$_smarty_tpl->tpl_vars['lstTestimonial']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]));?>
 </div>
                            <div class="user_name">
                                <p class="name"><?php echo $_smarty_tpl->tpl_vars['clsTestimonial']->value->getName($_smarty_tpl->tpl_vars['lstTestimonial']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['testimonial_id'],$_smarty_tpl->tpl_vars['lstTestimonial']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
</p>
                                <p class="country"><?php echo $_smarty_tpl->tpl_vars['clsTestimonial']->value->getCountry($_smarty_tpl->tpl_vars['lstTestimonial']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['testimonial_id'],$_smarty_tpl->tpl_vars['lstTestimonial']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
</p>
                            </div>
                        </a>
                    </div>
                    <?php
}
}
?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php }?> <?php }
}
