<?php
/* Smarty version 3.1.38, created on 2024-04-08 13:17:45
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/slider_homepro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66138c095c4242_28035554',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86de0f3b143804c7f42937847e3c6f6819b42a3c' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/slider_homepro.tpl',
      1 => 1710820513,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66138c095c4242_28035554 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('Video_Teaser_Home') && $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('video_teaser_page') != '') {?>
<section id="slider" class="relative section_box">
    <div id="video-teaser" class="video-teaser video-container">
        <div class="filter"></div>
        <video autoplay loop muted class="fillWidth"><source src="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('video_teaser_page');?>
" type="video/mp4">
            <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Your browser does not support the video tag. I suggest you upgrade your browser.');?>

        </video>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['mod']->value == 'ticket_air') {?>
    <div class="box_search_home <?php echo $_smarty_tpl->tpl_vars['deviceType']->value;?>
">
    <?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('find_ticket_air');?>

    </div>
    <?php } else { ?>
    <div class="box_search_home <?php echo $_smarty_tpl->tpl_vars['deviceType']->value;?>
">
        <?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('find_trip_detailspro');?>

    </div>
    <?php }?>
</section>
<?php } else { ?>
    <?php if ($_smarty_tpl->tpl_vars['listSlide']->value) {?>
    <section id="slider" class="relative section_box">
        <div class="slider__home owl-carousel">
            <?php
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listSlide']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total !== 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                <?php $_smarty_tpl->_assignInScope('slide_title', $_smarty_tpl->tpl_vars['listSlide']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title']);?>
                <?php $_smarty_tpl->_assignInScope('slide_text', $_smarty_tpl->tpl_vars['listSlide']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['text']);?>
                <?php $_smarty_tpl->_assignInScope('slide_link', $_smarty_tpl->tpl_vars['listSlide']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['link']);?>
                <?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getBrowser() == 'phone') {?>
                    <div class="item__slider">
                       <?php if ($_smarty_tpl->tpl_vars['slide_link']->value != '') {?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['slide_link']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['slide_title']->value;?>
">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getImage('default_image_pixel',3,2);?>
" data-src="<?php echo $_smarty_tpl->tpl_vars['clsSlide']->value->getImage($_smarty_tpl->tpl_vars['listSlide']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['slide_id'],480,320,$_smarty_tpl->tpl_vars['listSlide']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
" width="480" height="320" alt="<?php echo $_smarty_tpl->tpl_vars['slide_title']->value;?>
" class="img100 owl-lazy">
                        </a>
                        <?php } else { ?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getImage('default_image_pixel',3,2);?>
" data-src="<?php echo $_smarty_tpl->tpl_vars['clsSlide']->value->getImage($_smarty_tpl->tpl_vars['listSlide']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['slide_id'],480,320,$_smarty_tpl->tpl_vars['listSlide']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
" width="480" height="320" alt="<?php echo $_smarty_tpl->tpl_vars['slide_title']->value;?>
" class="img100 owl-lazy">
                        <?php }?>
                    </div>
                <?php } else { ?>
                    <div class="item_slider <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getBrowser();?>
">
                       	<?php if ($_smarty_tpl->tpl_vars['slide_link']->value != '') {?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['slide_link']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['slide_title']->value;?>
">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getImage('default_image_pixel',4,1);?>
" data-src="<?php echo $_smarty_tpl->tpl_vars['clsSlide']->value->getImage($_smarty_tpl->tpl_vars['listSlide']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['slide_id'],1600,460,$_smarty_tpl->tpl_vars['listSlide']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
" width="1600" height="460" alt="<?php echo $_smarty_tpl->tpl_vars['slide_title']->value;?>
" class="img100 owl-lazy">
                        </a>
                        <?php } else { ?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getImage('default_image_pixel',4,1);?>
" data-src="<?php echo $_smarty_tpl->tpl_vars['clsSlide']->value->getImage($_smarty_tpl->tpl_vars['listSlide']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['slide_id'],1600,460,$_smarty_tpl->tpl_vars['listSlide']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
" width="1600" height="460" alt="<?php echo $_smarty_tpl->tpl_vars['slide_title']->value;?>
" class="img100 owl-lazy">
                        <?php }?>
                    </div>
                <?php }?>
            <?php
}
}
?>
        </div>
		<?php if ($_smarty_tpl->tpl_vars['mod']->value == 'ticket_air') {?>
		<div class="box_search_home <?php echo $_smarty_tpl->tpl_vars['deviceType']->value;?>
">
		<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('find_ticket_air');?>

		</div>
		<?php } else { ?>
        <div class="box_search_home <?php echo $_smarty_tpl->tpl_vars['deviceType']->value;?>
">
            <?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('find_trip_detailspro');?>

        </div>
		<?php }?>
    </section>
    <?php }
}
}
}
