<?php
/* Smarty version 3.1.38, created on 2024-04-09 13:12:42
  from '/home/isocms/domains/isocms.com/private_html/isocms/unika_templates/default/blocks/slider_home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6614dc5a8032f0_81383434',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e743eb7ee02c9eea6793fc1a3bdd5956d21a0210' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/unika_templates/default/blocks/slider_home.tpl',
      1 => 1711012205,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6614dc5a8032f0_81383434 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('Video_Teaser_Home') && $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('video_teaser_page') != '') {?>
<section id="slider" class="relative section_box">
    <div id="video-teaser" class="video-teaser video-container">
        <div class="filter"></div>
        <video autoplay muted loop class="fillWidth"><source src="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('video_teaser_page');?>
" type="video/mp4">
            <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Your browser does not support the video tag. I suggest you upgrade your browser.');?>

        </video>
    </div>
</section>
<?php } else { ?>
    <?php if ($_smarty_tpl->tpl_vars['listSlide']->value) {?>
    <section id="slider" class="relative section_box">
        <div class="slider__home owl-carousel">
            <?php
$__section_i_21_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listSlide']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_21_total = $__section_i_21_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_21_total !== 0) {
for ($__section_i_21_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_21_iteration <= $__section_i_21_total; $__section_i_21_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                <?php $_smarty_tpl->_assignInScope('slide_title', $_smarty_tpl->tpl_vars['clsSlide']->value->getTitle($_smarty_tpl->tpl_vars['listSlide']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['slide_id'],$_smarty_tpl->tpl_vars['listSlide']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]));?>
                <?php $_smarty_tpl->_assignInScope('slide_text', $_smarty_tpl->tpl_vars['clsSlide']->value->getIntro($_smarty_tpl->tpl_vars['listSlide']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['slide_id'],$_smarty_tpl->tpl_vars['listSlide']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]));?>
                <?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getBrowser() == 'phone') {?>
                    <div class="item__slider">
                        <a role="link" href="<?php echo $_smarty_tpl->tpl_vars['clsSlide']->value->getUrl($_smarty_tpl->tpl_vars['listSlide']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['slide_id'],$_smarty_tpl->tpl_vars['listSlide']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
" title="<?php echo $_smarty_tpl->tpl_vars['slide_title']->value;?>
">
                            <img data-src="<?php echo $_smarty_tpl->tpl_vars['clsSlide']->value->getImage($_smarty_tpl->tpl_vars['listSlide']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['slide_id'],480,320,$_smarty_tpl->tpl_vars['listSlide']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['slide_title']->value;?>
" width="480" height="320" class="img100 owl-lazy">
                        </a>
                    </div>
                <?php } else { ?>
                    <div class="item_slider <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getBrowser();?>
">
                        <div class="slide_image">
                            <img data-src="<?php echo $_smarty_tpl->tpl_vars['clsSlide']->value->getImage($_smarty_tpl->tpl_vars['listSlide']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['slide_id'],1920,791,$_smarty_tpl->tpl_vars['listSlide']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['slide_title']->value;?>
" width="1600" height="460" class="img100 owl-lazy">
                        </div>
                        <div class="slide_text">
                            <div class="container">
                                <p class="text_1">Leader in the concept of “ tailor-made “ travel</p>
                                <p class="text_2">Who knows Asia better than us? We are his children, we live there!</p>
                                <a class="slide_cta_link" title="" href="/">
                                    Suivez nous 
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="15" viewBox="0 0 17 15" fill="none">
  <path d="M15.75 7.72559L0.75 7.72559" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M9.7002 1.70124L15.7502 7.72524L9.7002 13.7502" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php }?>
            <?php
}
}
?>
        </div>
        <?php if (1 == 2) {?>
		<?php if ($_smarty_tpl->tpl_vars['mod']->value == 'ticket_air') {?>
		<div class="box_search_home <?php echo $_smarty_tpl->tpl_vars['deviceType']->value;?>
">
		<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('find_ticket_air');?>

		</div>
		<?php } else { ?>
        <div class="box_search_home <?php echo $_smarty_tpl->tpl_vars['deviceType']->value;?>
">
            <?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('find_trip_details');?>

        </div>
		<?php }?>
		<?php }?>
    </section>
    <?php }
}
}
}
