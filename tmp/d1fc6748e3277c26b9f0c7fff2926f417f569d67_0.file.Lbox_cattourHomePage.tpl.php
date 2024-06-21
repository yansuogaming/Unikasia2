<?php
/* Smarty version 3.1.38, created on 2024-04-09 13:12:42
  from '/home/isocms/domains/isocms.com/private_html/isocms/unika_templates/default/blocks/Lbox_cattourHomePage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6614dc5a844f39_01689041',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1fc6748e3277c26b9f0c7fff2926f417f569d67' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/unika_templates/default/blocks/Lbox_cattourHomePage.tpl',
      1 => 1711010349,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6614dc5a844f39_01689041 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['lstCatTour']->value) {?>
<section class="section_home section_travel_style">
    <?php $_smarty_tpl->_assignInScope('TitleCatTour', ('TitleCatTour_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
	<?php $_smarty_tpl->_assignInScope('IntroCatTour', ('IntroCatTour_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
    <div class="d-flex flex-travel_style flex-row justify-content-end">
        <div class="header_home_box">
            <h2 class="title_home_box"><?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['TitleCatTour']->value);?>
</h2>
            <div class="intro_box"><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['IntroCatTour']->value));?>
</div>
        </div>
        <div class="carousel_travel_style">
            <div class="owl-carousel slide_travel_style">
                <?php
$__section_i_22_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstCatTour']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_22_total = $__section_i_22_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_22_total !== 0) {
for ($__section_i_22_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_22_iteration <= $__section_i_22_total; $__section_i_22_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                <?php $_smarty_tpl->_assignInScope('getTitle', $_smarty_tpl->tpl_vars['lstCatTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title']);?>
                <?php $_smarty_tpl->_assignInScope('getLink', $_smarty_tpl->tpl_vars['clsTourCategory']->value->getLink($_smarty_tpl->tpl_vars['lstCatTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tourcat_id'],$_smarty_tpl->tpl_vars['lstCatTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]));?>
                <div class="catItem">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['getLink']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['getTitle']->value;?>
"><img alt="<?php echo $_smarty_tpl->tpl_vars['getTitle']->value;?>
" class="img100" src="<?php echo $_smarty_tpl->tpl_vars['clsTourCategory']->value->getImage($_smarty_tpl->tpl_vars['lstCatTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tourcat_id'],281,441,$_smarty_tpl->tpl_vars['lstCatTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
"/></a>
                    <div class="spotlight">
                        <h3><a href="<?php echo $_smarty_tpl->tpl_vars['getLink']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['getTitle']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['getTitle']->value;?>
</a></h3>
                        <div class="intro_cat"><?php echo strip_tags($_smarty_tpl->tpl_vars['clsTourCategory']->value->getIntro($_smarty_tpl->tpl_vars['lstCatTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tourcat_id'],$_smarty_tpl->tpl_vars['lstCatTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]));?>

                        </div>
                    
                    </div>
                </div>
                <?php
}
}
?>
            </div>
        </div>
    </div>
</section>
<?php }
}
}
