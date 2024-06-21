<?php
/* Smarty version 3.1.38, created on 2024-04-08 13:09:38
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/slider_home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66138a22d86461_02724846',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54396b6598390172e6adbc858c4c3c68f4f7e75c' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/slider_home.tpl',
      1 => 1702371485,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66138a22d86461_02724846 (Smarty_Internal_Template $_smarty_tpl) {
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
$__section_i_22_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listSlide']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_22_total = $__section_i_22_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_22_total !== 0) {
for ($__section_i_22_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_22_iteration <= $__section_i_22_total; $__section_i_22_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
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
                        <a role="link" href="<?php echo $_smarty_tpl->tpl_vars['clsSlide']->value->getUrl($_smarty_tpl->tpl_vars['listSlide']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['slide_id'],$_smarty_tpl->tpl_vars['listSlide']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
" title="<?php echo $_smarty_tpl->tpl_vars['slide_title']->value;?>
">
                            <img data-src="<?php echo $_smarty_tpl->tpl_vars['clsSlide']->value->getImage($_smarty_tpl->tpl_vars['listSlide']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['slide_id'],1600,460,$_smarty_tpl->tpl_vars['listSlide']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['slide_title']->value;?>
" width="1600" height="460" class="img100 owl-lazy">
                        </a>
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
            <?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('find_trip_details');?>

        </div>
		<?php }?>
    </section>
    <?php }
}
}
}
