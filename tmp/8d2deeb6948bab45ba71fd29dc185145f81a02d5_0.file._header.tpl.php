<?php
/* Smarty version 3.1.38, created on 2024-04-09 13:12:42
  from '/home/isocms/domains/isocms.com/private_html/isocms/unika_templates/default/_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6614dc5a642674_28125966',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d2deeb6948bab45ba71fd29dc185145f81a02d5' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/unika_templates/default/_header.tpl',
      1 => 1711003420,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6614dc5a642674_28125966 (Smarty_Internal_Template $_smarty_tpl) {
?><header id="header" class="header">
    <div class="header_top">
        <div class="container">
        <div class="d-flex header_top_content align-items-center">
            <div class="header_top_left">
            <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Who knows Asia better than us? We are his children, we live there!');?>

            </div>
            <div class="header_top_right d-flex align-items-center">
                <a href="tel:<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('CompanyHotline');?>
" title="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('CompanyHotline');?>
" class=""><i class="fa fa-envelope" aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('CompanyHotline');?>
</a>
                <a href="mailto:<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('CompanyEmail');?>
" title="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('CompanyEmail');?>
" class=""><i class="fa fa-phone" aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Whapsapp');?>
: <?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('CompanyEmail');?>
</a>
            </div>
        </div>
        </div>
    </div>
    <div class="header_menu">
        <div class="container">
            <div class="d-flex align-items-center">
                <div class="header_logo">
                    <?php if ($_smarty_tpl->tpl_vars['mod']->value == 'home') {?>
                    <h1 id="logo" class="logo" title="<?php echo $_smarty_tpl->tpl_vars['PAGE_NAME']->value;?>
">
                        <a title="<?php echo $_smarty_tpl->tpl_vars['PAGE_NAME']->value;?>
" href="<?php echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;
echo $_smarty_tpl->tpl_vars['extLang']->value;?>
">
                            <img alt="<?php echo $_smarty_tpl->tpl_vars['PAGE_NAME']->value;?>
" src="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getImageValue('HeaderLogo');?>
" width="143" height="53" class="img100"/>
                        </a>
                    </h1>
                    <?php } else { ?>
                    <p id="logo" class="logo">
                        <a title="<?php echo $_smarty_tpl->tpl_vars['PAGE_NAME']->value;?>
" href="<?php echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;
echo $_smarty_tpl->tpl_vars['extLang']->value;?>
">
                            <img alt="<?php echo $_smarty_tpl->tpl_vars['PAGE_NAME']->value;?>
" src="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getImageValue('HeaderLogo');?>
" width="143" height="53" class="img100"/>
                        </a>
                    </p>
                    <?php }?>	
                </div>
                <div class="header_main_menu">
                    <ul class="main__menu--ul ul_main_menu">
                        <li class="relative">
                            <a href="javascript:void(0);" class="mnu-main mnu-level-1 dropdown-toggle <?php if ($_smarty_tpl->tpl_vars['mod']->value == 'destination') {?>active<?php }?>" id="dropdownMenuDes" data-bs-toggle="dropdown" data-target="mg-s-tours" aria-expanded="false" rel="nofollow" role="link"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Destinations');?>
</a>
                            <div class="dropdown-menu mega-menu mg-dropdown mg-s-tours header-mega-menu-new" aria-labelledby="dropdownMenuDes">
                                <div class="d-flex-menu">
                                    <div class="d-nav-menu">
                                        <ul class="nav nav-tabs nav-pills nav-stacked" role="tablist">	
                                            <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listCountryDestination']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['first'] = ($__section_i_0_iteration === 1);
?>
                                            <?php $_smarty_tpl->_assignInScope('title_country', $_smarty_tpl->tpl_vars['listCountryDestination']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title']);?>
                                            <li><a class="tab-menu" href="<?php echo $_smarty_tpl->tpl_vars['clsCountryEx']->value->getLink($_smarty_tpl->tpl_vars['listCountryDestination']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['country_id']);?>
" title="<?php echo $_smarty_tpl->tpl_vars['title_country']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['title_country']->value;?>
</a></li>
                                            <?php
}
}
?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        
                        <?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'tour_exhautive','category_country','default')) {?>
                        <li class="relative">
                            <a href="javascript:void(0);" class="mnu-main mnu-level-1 dropdown-toggle <?php if (($_smarty_tpl->tpl_vars['mod']->value == 'tour' || $_smarty_tpl->tpl_vars['mod']->value == 'tour_new') && $_smarty_tpl->tpl_vars['act']->value != 'contact') {?>active<?php }?>" id="dropdownMenuTour" data-bs-toggle="dropdown" data-target="mg-s-tours" aria-expanded="false" rel="nofollow" role="link" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('CIRCUITS');?>
" ><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('CIRCUITS');?>
</a>
                            <div class="dropdown-menu mega-menu mg-dropdown mg-s-tours header-mega-menu-new dropdownMenuTour" aria-labelledby="dropdownMenuTour">
                                <div class="d-flex-menu">
                                    <div class="d-nav-menu">
                                        <ul class="nav nav-tabs nav-pills nav-stacked" role="tablist">	
                                            <?php
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listCountryDestination']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total !== 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['first'] = ($__section_i_1_iteration === 1);
?>
                                            <?php $_smarty_tpl->_assignInScope('country__id', $_smarty_tpl->tpl_vars['listCountryDestination']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['country_id']);?>
                                            <?php $_smarty_tpl->_assignInScope('title_country', $_smarty_tpl->tpl_vars['listCountryDestination']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title']);?>
                                            <?php $_smarty_tpl->_assignInScope('lstCountryCat', $_smarty_tpl->tpl_vars['clsCategory_Country']->value->getListCatCountry($_smarty_tpl->tpl_vars['country__id']->value));?>
                                            <?php if ($_smarty_tpl->tpl_vars['lstCountryCat']->value) {?>
                                            <li role="presentation">
                                                <div class="tab-menu <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['first'] : null)) {?>active<?php }?>" title="<?php echo $_smarty_tpl->tpl_vars['title_country']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Tours');?>
" href="#<?php echo $_smarty_tpl->tpl_vars['listCountryDestination']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['slug'];?>
" role="tab" data-bs-toggle="tab" aria-expanded="<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['first'] : null)) {?>true<?php } else { ?>false<?php }?>"><?php echo $_smarty_tpl->tpl_vars['title_country']->value;?>
  <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Tours');?>
</div>
                                            </li>
                                            <?php }?>
                                            <?php
}
}
?>
                                            <li role="presentation">
                                                <div class="tab-menu" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Combined Countries Tours');?>
" href="#multi" role="tab" data-bs-toggle="tab" aria-expanded="false"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Combined Countries Tours');?>
</div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-content">
                                        <?php
$__section_i_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listCountryDestination']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_2_total = $__section_i_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_2_total !== 0) {
for ($__section_i_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_2_iteration <= $__section_i_2_total; $__section_i_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['first'] = ($__section_i_2_iteration === 1);
?>
                                        <?php $_smarty_tpl->_assignInScope('country__id', $_smarty_tpl->tpl_vars['listCountryDestination']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['country_id']);?>
                                        <?php $_smarty_tpl->_assignInScope('title_country', $_smarty_tpl->tpl_vars['listCountryDestination']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title']);?>
                                        <?php $_smarty_tpl->_assignInScope('lstCountryCat', $_smarty_tpl->tpl_vars['clsCategory_Country']->value->getListCatCountry($_smarty_tpl->tpl_vars['country__id']->value));?>
                                        <?php if ($_smarty_tpl->tpl_vars['lstCountryCat']->value) {?>
                                        <div role="tabpanel" class="tab-pane <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['first'] : null)) {?>show<?php }?>" id="<?php echo $_smarty_tpl->tpl_vars['listCountryDestination']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['slug'];?>
">
                                            <div class="flex_colum">
                                                <div class="mega-item-menu">
                                                    <a class="label" href="<?php echo $_smarty_tpl->tpl_vars['clsCountryEx']->value->getLink($_smarty_tpl->tpl_vars['country__id']->value);?>
" title="All <?php echo $_smarty_tpl->tpl_vars['title_country']->value;?>
 Tours">All <?php echo $_smarty_tpl->tpl_vars['title_country']->value;?>
 Tours</a>
                                                    <ul>
                                                        <?php
$__section_j_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstCountryCat']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_j_3_total = $__section_j_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_j'] = new Smarty_Variable(array());
if ($__section_j_3_total !== 0) {
for ($__section_j_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] = 0; $__section_j_3_iteration <= $__section_j_3_total; $__section_j_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']++){
?>
                                                        <?php $_smarty_tpl->_assignInScope('oneCategoryCountry', $_smarty_tpl->tpl_vars['clsTourCategory']->value->getOne($_smarty_tpl->tpl_vars['lstCountryCat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['cat_id'],'title,slug'));?>
                                                        <?php $_smarty_tpl->_assignInScope('title_category_country', $_smarty_tpl->tpl_vars['oneCategoryCountry']->value['title']);?>
                                                        <li>
                                                            <a href="<?php echo $_smarty_tpl->tpl_vars['clsTourCategory']->value->getLinkCatCountry($_smarty_tpl->tpl_vars['lstCountryCat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['cat_id'],$_smarty_tpl->tpl_vars['country__id']->value,$_smarty_tpl->tpl_vars['oneCategoryCountry']->value);?>
"
                                                               title="<?php echo $_smarty_tpl->tpl_vars['title_category_country']->value;?>
">
                                                                <?php echo $_smarty_tpl->tpl_vars['title_category_country']->value;?>

                                                            </a>
                                                        </li>
                                                        <?php
}
}
?>
                                                    </ul>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <?php }?>
                                        <?php
}
}
?>
                                        <div role="tabpanel" class="tab-pane" id="multi">
                                            <div class="flex_colum">
                                                <div class="mega-item-menu">
                                                    <a class="label" role="link" href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('multi');?>
" title="All <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Combined Countries Tours');?>
">All <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Combined Countries Tours');?>
</a>
                                                    <ul>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_cat_multi_id']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                                    <?php $_smarty_tpl->_assignInScope('title_category_multi', $_smarty_tpl->tpl_vars['clsTourCategory']->value->getTitleOnline($_smarty_tpl->tpl_vars['item']->value));?>
                                                    <?php if ($_smarty_tpl->tpl_vars['title_category_multi']->value) {?>
                                                    <li>
                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['clsTourCategory']->value->getLinkCatMultiCountry($_smarty_tpl->tpl_vars['item']->value);?>
"
                                                           title="<?php echo $_smarty_tpl->tpl_vars['title_category_multi']->value;?>
">
                                                            <?php echo $_smarty_tpl->tpl_vars['title_category_multi']->value;?>

                                                        </a>
                                                    </li>
                                                    <?php }?>
                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                    </ul>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <?php } else { ?>
                        <li class="relative">
                            <a href="javascript:void(0);" class="mnu-main mnu-level-1 dropdown-toggle <?php if (($_smarty_tpl->tpl_vars['mod']->value == 'tour' || $_smarty_tpl->tpl_vars['mod']->value == 'tour_new') && $_smarty_tpl->tpl_vars['act']->value != 'contact') {?>active<?php }?>" id="dropdownMenuTour" data-bs-toggle="dropdown" data-target="mg-s-tours" aria-expanded="false" rel="nofollow" role="link"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Travel Styles');?>
</a>
                            <div class="dropdown-menu mega-menu mg-dropdown mg-s-tours header-mega-menu-new" aria-labelledby="dropdownMenuTour">
                                <div class="d-flex-menu">
                                    <div class="d-nav-menu">
                                        <?php if ($_smarty_tpl->tpl_vars['lstCatTour']->value) {?>
                                        <ul class="nav nav-tabs nav-pills nav-stacked" role="tablist">	
                                            <?php
$__section_j_4_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstCatTour']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_j_4_total = $__section_j_4_loop;
$_smarty_tpl->tpl_vars['__smarty_section_j'] = new Smarty_Variable(array());
if ($__section_j_4_total !== 0) {
for ($__section_j_4_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] = 0; $__section_j_4_iteration <= $__section_j_4_total; $__section_j_4_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']++){
?>
                                            <?php $_smarty_tpl->_assignInScope('title_category', $_smarty_tpl->tpl_vars['lstCatTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['title']);?>
                                            <li><a class="tab-menu" title="<?php echo $_smarty_tpl->tpl_vars['title_category']->value;?>
" href="<?php echo $_smarty_tpl->tpl_vars['clsTourCategory']->value->getLink($_smarty_tpl->tpl_vars['lstCatTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['tourcat_id'],$_smarty_tpl->tpl_vars['lstCatTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
"><?php echo $_smarty_tpl->tpl_vars['title_category']->value;?>
 </a></li>
                                            <?php
}
}
?>
                                        </ul>
                                        <?php }?>
                                    </div>
                                </div>
                            </div>
                        </li>
                        
                        <?php }?>
                        <li class="relative">
                            <a href="javascript:void(0);" class="mnu-main mnu-level-1 dropdown-toggle"
                               id="dropdownMenuHotel" data-bs-toggle="dropdown" data-target="mg-s-hotel"
                               aria-expanded="false" rel="nofollow"
                               role="link" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('SÉJOURS');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('SÉJOURS');?>
</a>
                            <div class="dropdown-menu mega-menu mg-dropdown mg-s-hotel header-mega-menu-new"
                                 aria-labelledby="dropdownMenuHotel">
                                <div class="d-flex-menu">
                                    <div class="d-nav-menu">
                                        <ul class="nav nav-tabs nav-pills nav-stacked" role="tablist">
                                            <?php
$__section_i_5_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstCountryHotel']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_5_total = $__section_i_5_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_5_total !== 0) {
for ($__section_i_5_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_5_iteration <= $__section_i_5_total; $__section_i_5_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['first'] = ($__section_i_5_iteration === 1);
?>
                                            <?php $_smarty_tpl->_assignInScope('country_hotel_title', $_smarty_tpl->tpl_vars['lstCountryHotel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title']);?>
                                            <li><a class="tab-menu"
                                                   href="<?php echo $_smarty_tpl->tpl_vars['clsCountryEx']->value->getLink($_smarty_tpl->tpl_vars['lstCountryHotel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['country_id'],'Hotel',$_smarty_tpl->tpl_vars['lstCountryHotel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
"
                                                   title="<?php echo $_smarty_tpl->tpl_vars['country_hotel_title']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['country_hotel_title']->value;?>
</a>
                                            </li>
                                            <?php
}
}
?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="relative">
                            <a href="javascript:void(0);" class="mnu-main mnu-level-1 dropdown-toggle"
                               id="dropdownMenuHotel" data-bs-toggle="dropdown" data-target="mg-s-hotel"
                               aria-expanded="false" rel="nofollow"
                               role="link" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('ACCOMMODATION');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('ACCOMMODATION');?>
</a>
                            <div class="dropdown-menu mega-menu mg-dropdown mg-s-hotel header-mega-menu-new"
                                 aria-labelledby="dropdownMenuHotel">
                                <div class="d-flex-menu">
                                    <div class="d-nav-menu">
                                        <ul class="nav nav-tabs nav-pills nav-stacked" role="tablist">
                                            <?php
$__section_i_6_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstCountryHotel']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_6_total = $__section_i_6_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_6_total !== 0) {
for ($__section_i_6_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_6_iteration <= $__section_i_6_total; $__section_i_6_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['first'] = ($__section_i_6_iteration === 1);
?>
                                            <?php $_smarty_tpl->_assignInScope('country_hotel_title', $_smarty_tpl->tpl_vars['lstCountryHotel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title']);?>
                                            <li><a class="tab-menu"
                                                   href="<?php echo $_smarty_tpl->tpl_vars['clsCountryEx']->value->getLink($_smarty_tpl->tpl_vars['lstCountryHotel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['country_id'],'Hotel',$_smarty_tpl->tpl_vars['lstCountryHotel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
"
                                                   title="<?php echo $_smarty_tpl->tpl_vars['country_hotel_title']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['country_hotel_title']->value;?>
</a>
                                            </li>
                                            <?php
}
}
?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
						<li class="relative">
							<a href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('blog');?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Blog');?>
"> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Blog');?>
</a>
						</li>
						<li class="menu_promotion">
							<a href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('about');?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('QUI SOMMES NOUS');?>
"> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('QUI SOMMES NOUS');?>
</a>
						</li>
					</ul>
                </div>
                <div class="header_user">
                    <?php if (count($_smarty_tpl->tpl_vars['listLang']->value) > 1) {?>
                    <div class="language_select">
                        <a class="slt_country" data-bs-toggle="dropdown" style="cursor:pointer" title="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getFullLanguage($_smarty_tpl->tpl_vars['_LANG_ID']->value);?>
" role=link aria-disabled=true><i class="flag flag-20 flag-20-<?php echo $_smarty_tpl->tpl_vars['_LANG_ID']->value;?>
 pd0_15"></i> <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                        <?php if (count($_smarty_tpl->tpl_vars['listLang']->value) > 1) {?>
                        <ul class="dropdown-menu menu-language">
                            <?php
$__section_i_7_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listLang']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_7_total = $__section_i_7_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_7_total !== 0) {
for ($__section_i_7_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_7_iteration <= $__section_i_7_total; $__section_i_7_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['first'] = ($__section_i_7_iteration === 1);
?>
                            <?php if ($_smarty_tpl->tpl_vars['listLang']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)] != $_smarty_tpl->tpl_vars['_LANG_ID']->value) {?>
                            <li><a class="color_333" href="<?php if ($_smarty_tpl->tpl_vars['listLang']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)] != $_smarty_tpl->tpl_vars['LANG_DEFAULT']->value) {
echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['listLang']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)];
} else {
echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;
}?>" title="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getFullLanguage($_smarty_tpl->tpl_vars['listLang']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
"><i class="flag flag-20 flag-20-<?php echo $_smarty_tpl->tpl_vars['listLang']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)];?>
"></i> <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getFullLanguage($_smarty_tpl->tpl_vars['listLang']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
</a></li>
                            <?php }?>
                            <?php
}
}
?>
                        </ul>
                        <?php }?>
                    </div>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['loggedIn']->value == '') {?>
                    <div class="dropdown menu_login">
                        <a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Customer Login');?>
" data-bs-toggle="dropdown" href="javascript:void(0);" rel="nofollow" role=link aria-disabled=true >
                            <span class="icon_user"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-mene-profile" role="menu">
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('signin');?>
" class="signin_head color_333" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Sign In');?>
">
                                <i class="fa fa-sign-out" aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Sign In');?>
</a>
                            </li>
                            <li class="border0"><a href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('signup');?>
" class="signin_head color_333" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Sign Up');?>
">
                                <i class="fa fa-user" aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Sign Up');?>
</a>
                            </li>
                        </ul>
                    </div>
                    <?php } else { ?>
                    <div class="dropdown menu_login">
                        <a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Customer Login');?>
" data-bs-toggle="dropdown" href="javascript:void(0);" rel="nofollow" role=link aria-disabled=true>
                            <span class="icon_user"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-mene-profile" role="menu">
                            <li><a role="menuitem" href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('my_profile');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('My Profile');?>
</a> </li>
                            <li><a role="menuitem" href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('contact_info');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Contact Information');?>
</a> </li>
                            <?php $_smarty_tpl->_assignInScope('_provider', $_smarty_tpl->tpl_vars['clsProfile']->value->getOauthProvider($_smarty_tpl->tpl_vars['profile_id']->value));?>
                            <?php if ($_smarty_tpl->tpl_vars['_provider']->value == '_REGSITER') {?>
                                <li><a role="menuitem" href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('change_pass');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Change Password');?>
</a> </li>
                            <?php }?>
                            <li><a role="menuitem" href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('logout');?>
"><i class="fa fa-sign-out" aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Logout');?>
</a></li>
                        </ul>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</header>


<?php echo '<script'; ?>
>
$(function (){
	var fixed_box_scroll = $("#header");
    var $ww = $(window).width();
	$(window).scroll(function(){
		if ($(window).scrollTop() >= 30) {
			fixed_box_scroll.addClass("fixed_header");
			
		} else {
			fixed_box_scroll.removeClass("fixed_header");
		}
	});
});
<?php echo '</script'; ?>
>


<?php if (1 == 2) {
if ($_smarty_tpl->tpl_vars['_LANG_ID']->value == 'vn') {
if ($_smarty_tpl->tpl_vars['mod']->value != 'cart') {?> 
<?php if ($_smarty_tpl->tpl_vars['act']->value != 'success') {?>
<header id="header" class="header">
	<?php if ($_smarty_tpl->tpl_vars['deviceType']->value == 'computer') {?>
	<div class="container_header_top container-fluid">
		<div class="container">
			<div class="row header__desktop--right header_top">
				<div class="col-xl-6">
					<div class="header_top_left d-flex align-items-center">
						<?php if ($_smarty_tpl->tpl_vars['mod']->value == 'home') {?>
						<h1 id="logo" class="logo" title="<?php echo $_smarty_tpl->tpl_vars['PAGE_NAME']->value;?>
">
							<a  title ="<?php echo $_smarty_tpl->tpl_vars['PAGE_NAME']->value;?>
" class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;
echo $_smarty_tpl->tpl_vars['extLang']->value;?>
">
								<img alt="<?php echo $_smarty_tpl->tpl_vars['PAGE_NAME']->value;?>
" src="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getImageValue('HeaderLogo');?>
" width="98" height="47" class="img100"/>
							</a>
						</h1>
						<?php } else { ?>
						<p id="logo" class="logo">
							<a title ="<?php echo $_smarty_tpl->tpl_vars['PAGE_NAME']->value;?>
" class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;
echo $_smarty_tpl->tpl_vars['extLang']->value;?>
">
								<img alt="<?php echo $_smarty_tpl->tpl_vars['PAGE_NAME']->value;?>
" src="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getImageValue('HeaderLogo');?>
" width="98" height="47" class="img100"/>
							</a>
						</p>
						<?php }?>	

					</div>
				</div>
				<div class="col-xl-6">
					<div class="header_top_right">
						<ul class="header__desktop--right__menu list_style_none">
							<?php if (count($_smarty_tpl->tpl_vars['listLang']->value) > 1) {?>
                            <li class="dropdown language_select">
                                <a class="slt_country" data-bs-toggle="dropdown" style="cursor:pointer" title="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getFullLanguage($_smarty_tpl->tpl_vars['_LANG_ID']->value);?>
" role=link aria-disabled=true><i class="flag flag-20 flag-20-<?php echo $_smarty_tpl->tpl_vars['_LANG_ID']->value;?>
 pd0_15"></i> <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <?php if (count($_smarty_tpl->tpl_vars['listLang']->value) > 1) {?>
                                <ul class="dropdown-menu menu-language">
                                    <?php
$__section_i_8_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listLang']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_8_total = $__section_i_8_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_8_total !== 0) {
for ($__section_i_8_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_8_iteration <= $__section_i_8_total; $__section_i_8_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['first'] = ($__section_i_8_iteration === 1);
?>
                                    <?php if ($_smarty_tpl->tpl_vars['listLang']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)] != $_smarty_tpl->tpl_vars['_LANG_ID']->value) {?>
                                    <li><a class="color_333" href="<?php if ($_smarty_tpl->tpl_vars['listLang']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)] != $_smarty_tpl->tpl_vars['LANG_DEFAULT']->value) {
echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['listLang']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)];
} else {
echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;
}?>" title="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getFullLanguage($_smarty_tpl->tpl_vars['listLang']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
"><i class="flag flag-20 flag-20-<?php echo $_smarty_tpl->tpl_vars['listLang']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)];?>
"></i> <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getFullLanguage($_smarty_tpl->tpl_vars['listLang']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
</a></li>
                                    <?php }?>
                                    <?php
}
}
?>
                                </ul>
                                <?php }?>
                            </li>
                            <?php }?>
							<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'setting','cart','customize')) {?>
							<li class="cart__box">
								<a href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('cart');?>
" rel="nofollow" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cart');?>
" class="cart__header"><span class="icon__cart"><span class="number__item" id="number_cart">0</span></span><span class="cart"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cart');?>
</span></a>
							</li>
							<?php }?>


							<?php if (!$_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'member','default','default')) {?>
							
							<li>
								<a href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('contact');?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Contact us');?>
" class=""> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Contact us');?>
</a>
							</li>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'faqs','default','default')) {?>
							<li>
								<a href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('faqs');?>
" rel="nofollow" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('FAQs');?>
" class=""> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('FAQs');?>
</a>
							</li>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'member','default','default')) {?>
							<?php echo '<script'; ?>
 src = "https://accounts.google.com/gsi/client" async defer > <?php echo '</script'; ?>
> 
							<?php if ($_smarty_tpl->tpl_vars['loggedIn']->value == '') {?>
								<li class="loggedIn_li">
									<a href="<?php echo $_smarty_tpl->tpl_vars['clsProfile']->value->getLink('signin');?>
" class="signin_head login" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Sign in');?>
"> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Sign in');?>
</a>
									<a href="<?php echo $_smarty_tpl->tpl_vars['clsProfile']->value->getLink('signup');?>
" class="signin_head register btn_main" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Sign up');?>
">
										<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Sign up');?>
</a>
								</li>
							<?php } else { ?>
								<li class="loggedIn">
									<a class="profile_owner dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);" role=link aria-disabled=true>
										<?php $_smarty_tpl->_assignInScope('_avatar', $_smarty_tpl->tpl_vars['clsProfile']->value->getImageAvatar($_smarty_tpl->tpl_vars['profile_id']->value,20,20));?>
										<img class="img-cover w20_h20" src="<?php if ($_smarty_tpl->tpl_vars['_avatar']->value != '') {
echo $_smarty_tpl->tpl_vars['_avatar']->value;
} else {
echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/member.jpg<?php }?>"/>
										&nbsp;<?php echo $_smarty_tpl->tpl_vars['clsProfile']->value->getUsername($_smarty_tpl->tpl_vars['profile_id']->value);?>
 <i class="fa fa-caret-down"></i>
									</a>
									<ul class="dropdown-menu dropdown-mene-profile" role="menu">
										<li><a role="menuitem" href="<?php echo $_smarty_tpl->tpl_vars['clsProfile']->value->getLink('my_profile');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('My Profile');?>
</a> </li>
										<li><a role="menuitem" href="<?php echo $_smarty_tpl->tpl_vars['clsProfile']->value->getLink('my_booking');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('My Booking');?>
</a> </li>
										<li><a role="menuitem" href="<?php echo $_smarty_tpl->tpl_vars['clsProfile']->value->getLink('my_review');?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('My Tour Reviews');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('My Tour Reviews');?>
</a>
										</li>
																				<li>
											<a role="menuitem" href="<?php echo $_smarty_tpl->tpl_vars['clsProfile']->value->getLink('my_offer');?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('My Offers &amp; Discounts');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('My Offers &amp; Discounts');?>
</a>
										 </li>
			<!--							<li><a role="menuitem" href="<?php echo $_smarty_tpl->tpl_vars['clsProfile']->value->getLink('contact_info');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Contact Information');?>
</a> </li>-->
										<?php $_smarty_tpl->_assignInScope('_provider', $_smarty_tpl->tpl_vars['clsProfile']->value->getOauthProvider($_smarty_tpl->tpl_vars['profile_id']->value));?>
										<?php if ($_smarty_tpl->tpl_vars['_provider']->value == '_REGSITER') {?>
											<li><a role="menuitem" href="<?php echo $_smarty_tpl->tpl_vars['clsProfile']->value->getLink('change_pass');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Change Password');?>
</a> </li>
										<?php }?>
										<li><a role="menuitem" href="<?php echo $_smarty_tpl->tpl_vars['clsProfile']->value->getLink('logout');?>
"><i class="fa fa-sign-out" aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Logout');?>
</a></li>
									</ul>
								</li>
															<?php }?>
							<?php }?>
						</ul>
					</div>
				</div>
			</div>

		</div>
	</div>
	
	<div class="container">
		<div class="row header__desktop--left header_main">
			<div class="col-xl-12">
				<nav class="main__menu" id="main__menu">
                    <ul class="main__menu--ul ul_main_menu">
                        <?php if ($_smarty_tpl->tpl_vars['package_id']->value != 1) {?>
                            <li class="relative">
                                <a href="javascript:void(0);" class="mnu-main mnu-level-1 dropdown-toggle"
                                   id="dropdownMenuDomestic" data-bs-toggle="dropdown" data-target="mg-s-tours"
                                   aria-expanded="false" rel="nofollow"
                                   role="link"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Domestic tours');?>
</a>
                                <div class="dropdown-menu mega-menu mg-dropdown mg-s-tours header-mega-menu-new dropdownMenuDomestic"
                                     aria-labelledby="dropdownMenuDomestic">
                                    <div class="d-flex-menu">
                                        <div class="d-nav-menu">
                                            <ul class="nav nav-tabs nav-pills nav-stacked" role="tablist">
                                                <?php
$__section_i_9_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstRegionTour']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_9_total = $__section_i_9_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_9_total !== 0) {
for ($__section_i_9_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_9_iteration <= $__section_i_9_total; $__section_i_9_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['first'] = ($__section_i_9_iteration === 1);
?>
                                                    <?php $_smarty_tpl->_assignInScope('TitleRegion', $_smarty_tpl->tpl_vars['lstRegionTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title']);?>
                                                    <?php $_smarty_tpl->_assignInScope('slugRegion', $_smarty_tpl->tpl_vars['lstRegionTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['slug']);?>
                                                    <?php $_smarty_tpl->_assignInScope('listCityTourByRegion', $_smarty_tpl->tpl_vars['lstRegionTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['listCityTourByRegion']);?>
                                                    <li role="presentation">
                                                        <div class="tab-menu <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['first'] : null)) {?>active<?php }?>"
                                                             title="<?php echo $_smarty_tpl->tpl_vars['TitleRegion']->value;?>
" href="#<?php echo $_smarty_tpl->tpl_vars['slugRegion']->value;?>
" role="tab"
                                                             data-bs-toggle="tab"
                                                             aria-expanded="<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['first'] : null)) {?>true<?php } else { ?>false<?php }?>"><?php echo $_smarty_tpl->tpl_vars['TitleRegion']->value;?>
</div>
                                                    </li>
                                                <?php
}
}
?>
                                            </ul>
                                        </div>
                                        <div class="tab-content">
                                            <?php
$__section_i_10_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstRegionTour']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_10_total = $__section_i_10_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_10_total !== 0) {
for ($__section_i_10_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_10_iteration <= $__section_i_10_total; $__section_i_10_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['first'] = ($__section_i_10_iteration === 1);
?>
                                            <?php $_smarty_tpl->_assignInScope('TitleRegion', $_smarty_tpl->tpl_vars['lstRegionTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title']);?>
                                            <?php $_smarty_tpl->_assignInScope('slugRegion', $_smarty_tpl->tpl_vars['lstRegionTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['slug']);?>
                                            <?php $_smarty_tpl->_assignInScope('listCityTourByRegion', $_smarty_tpl->tpl_vars['lstRegionTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['listCityTourByRegion']);?>
                                            <div role="tabpanel"
                                                 class="tab-pane <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['first'] : null)) {?>show<?php }?>"
                                                 id="<?php echo $_smarty_tpl->tpl_vars['slugRegion']->value;?>
">
                                                <div class="flex_colum">
                                                    <div class="mega-item-menu">
                                                        <a class="label" role="link"
                                                           title="<?php echo $_smarty_tpl->tpl_vars['TitleRegion']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['TitleRegion']->value;?>
</a>
                                                        <ul>
                                                            <?php
$__section_j_11_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listCityTourByRegion']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_j_11_total = $__section_j_11_loop;
$_smarty_tpl->tpl_vars['__smarty_section_j'] = new Smarty_Variable(array());
if ($__section_j_11_total !== 0) {
for ($__section_j_11_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] = 0; $__section_j_11_iteration <= $__section_j_11_total; $__section_j_11_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']++){
?>
                                                            <li>
                                                                <a href="<?php echo $_smarty_tpl->tpl_vars['clsCity']->value->getLinkInbound($_smarty_tpl->tpl_vars['listCityTourByRegion']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['city_id'],$_smarty_tpl->tpl_vars['listCityTourByRegion']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]);?>
"
                                                                   title="<?php echo $_smarty_tpl->tpl_vars['listCityTourByRegion']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['title'];?>
">
                                                                    <?php echo $_smarty_tpl->tpl_vars['listCityTourByRegion']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['title'];?>

                                                                </a>
                                                            </li>
                                                            <?php
}
}
?>
                                                        </ul>
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
                            </li>
                            <li class="relative">
                                <a href="javascript:void(0);" class="mnu-main mnu-level-1 dropdown-toggle"
                                   id="dropdownMenuDes" data-bs-toggle="dropdown" data-target="mg-s-tours"
                                   aria-expanded="false" rel="nofollow"
                                   role="link"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Outbound tours');?>
</a>
                                <div class="dropdown-menu mega-menu mg-dropdown mg-s-tours header-mega-menu-new"
                                     aria-labelledby="dropdownMenuDes">
                                    <div class="d-flex-menu">
                                        <div class="d-nav-menu">
                                            <ul class="nav nav-tabs nav-pills nav-stacked" role="tablist">
                                                <?php
$__section_i_12_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstCountryTourOutbound']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_12_total = $__section_i_12_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_12_total !== 0) {
for ($__section_i_12_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_12_iteration <= $__section_i_12_total; $__section_i_12_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['first'] = ($__section_i_12_iteration === 1);
?>
                                                <?php $_smarty_tpl->_assignInScope('country__id', $_smarty_tpl->tpl_vars['lstCountryTourOutbound']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['country_id']);?>
                                                <?php $_smarty_tpl->_assignInScope('title_country', $_smarty_tpl->tpl_vars['lstCountryTourOutbound']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title']);?>

                                                <li><a class="tab-menu"
                                                       href="<?php echo $_smarty_tpl->tpl_vars['clsCountryEx']->value->getLinkOutbound($_smarty_tpl->tpl_vars['country__id']->value,$_smarty_tpl->tpl_vars['lstCountryTourOutbound']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
"
                                                       title="<?php echo $_smarty_tpl->tpl_vars['title_country']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['title_country']->value;?>
</a></li>
                                                <?php
}
}
?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="relative">
                                <a href="javascript:void(0);" class="mnu-main mnu-level-1 dropdown-toggle"
                                   id="dropdownMenuTravelStyle" data-bs-toggle="dropdown" data-target="mg-s-tours"
                                   aria-expanded="false" rel="nofollow" role="link"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Travel styles');?>
</a>
                                <?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'tour','category_country','default')) {?>
                                <div class="dropdown-menu mega-menu mg-dropdown mg-s-tours header-mega-menu-new dropdownMenuTravelStyle"
                                     aria-labelledby="dropdownMenuTravelStyle">
                                    <div class="d-flex-menu">
                                        <div class="d-nav-menu">
                                            <ul class="nav nav-tabs nav-pills nav-stacked" role="tablist">
                                                <?php
$__section_i_13_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listCountryDestination']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_13_total = $__section_i_13_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_13_total !== 0) {
for ($__section_i_13_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_13_iteration <= $__section_i_13_total; $__section_i_13_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['first'] = ($__section_i_13_iteration === 1);
?>
                                                    <?php $_smarty_tpl->_assignInScope('country__id', $_smarty_tpl->tpl_vars['listCountryDestination']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['country_id']);?>
                                                    <?php $_smarty_tpl->_assignInScope('title_country', $_smarty_tpl->tpl_vars['listCountryDestination']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title']);?>
                                                    <?php $_smarty_tpl->_assignInScope('lstCountryCat', $_smarty_tpl->tpl_vars['clsCategory_Country']->value->getListCatCountry($_smarty_tpl->tpl_vars['country__id']->value));?>
                                                    <?php if ($_smarty_tpl->tpl_vars['lstCountryCat']->value) {?>
                                                    <li role="presentation">
                                                        <div class="tab-menu <?php if (!$_smarty_tpl->tpl_vars['first']->value) {?>active<?php }?>"
                                                             title="<?php echo $_smarty_tpl->tpl_vars['title_country']->value;?>
"
                                                             href="#Country_<?php echo $_smarty_tpl->tpl_vars['country__id']->value;?>
" role="tab"
                                                             data-bs-toggle="tab"
                                                             aria-expanded="<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['first'] : null)) {?>true<?php } else { ?>false<?php }?>"><?php echo $_smarty_tpl->tpl_vars['title_country']->value;?>
</div>
                                                    </li>
                                                    <?php $_smarty_tpl->_assignInScope('first', 1);?>
                                                    <?php }?>
                                                <?php
}
}
?>
                                            </ul>
                                        </div>
                                        <div class="tab-content">
                                            <?php
$__section_i_14_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listCountryDestination']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_14_total = $__section_i_14_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_14_total !== 0) {
for ($__section_i_14_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_14_iteration <= $__section_i_14_total; $__section_i_14_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['first'] = ($__section_i_14_iteration === 1);
?>
                                                <?php $_smarty_tpl->_assignInScope('country__id', $_smarty_tpl->tpl_vars['listCountryDestination']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['country_id']);?>
                                                <?php $_smarty_tpl->_assignInScope('title_country', $_smarty_tpl->tpl_vars['listCountryDestination']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title']);?>
                                                <?php $_smarty_tpl->_assignInScope('lstCountryCat', $_smarty_tpl->tpl_vars['clsCategory_Country']->value->getListCatCountry($_smarty_tpl->tpl_vars['country__id']->value));?>
                                                <?php if ($_smarty_tpl->tpl_vars['lstCountryCat']->value) {?>
                                                <div role="tabpanel"
                                                     class="tab-pane <?php if (!$_smarty_tpl->tpl_vars['first2']->value) {?>show<?php }?>"
                                                     id="Country_<?php echo $_smarty_tpl->tpl_vars['country__id']->value;?>
">
                                                    <div class="flex_colum">
                                                        <div class="mega-item-menu">
                                                            <a class="label" role="link"
                                                               title="<?php echo $_smarty_tpl->tpl_vars['title_country']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['title_country']->value;?>
</a>
                                                            <ul>
                                                                <?php
$__section_j_15_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstCountryCat']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_j_15_total = $__section_j_15_loop;
$_smarty_tpl->tpl_vars['__smarty_section_j'] = new Smarty_Variable(array());
if ($__section_j_15_total !== 0) {
for ($__section_j_15_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] = 0; $__section_j_15_iteration <= $__section_j_15_total; $__section_j_15_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']++){
?>
                                                                    <?php $_smarty_tpl->_assignInScope('oneCategoryCountry', $_smarty_tpl->tpl_vars['clsTourCategory']->value->getOne($_smarty_tpl->tpl_vars['lstCountryCat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['cat_id'],'title,slug'));?>
                                                                    <?php $_smarty_tpl->_assignInScope('title_category_country', $_smarty_tpl->tpl_vars['oneCategoryCountry']->value['title']);?>
                                                                    <?php if ($_smarty_tpl->tpl_vars['title_category_country']->value) {?>
                                                                        <li>
                                                                            <a href="<?php echo $_smarty_tpl->tpl_vars['clsTourCategory']->value->getLinkCatCountry($_smarty_tpl->tpl_vars['lstCountryCat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['cat_id'],$_smarty_tpl->tpl_vars['country__id']->value,$_smarty_tpl->tpl_vars['oneCategoryCountry']->value);?>
"
                                                                               title="<?php echo $_smarty_tpl->tpl_vars['title_category_country']->value;?>
">
                                                                                <?php echo $_smarty_tpl->tpl_vars['title_category_country']->value;?>

                                                                            </a>
                                                                        </li>
                                                                    <?php }?>
                                                                <?php
}
}
?>
                                                            </ul>
                                                        </div>

                                                    </div>
                                                </div>
                                                <?php $_smarty_tpl->_assignInScope('first2', 1);?>
                                                <?php }?>
                                            <?php
}
}
?>
                                        </div>
                                    </div>
                                </div>
                                <?php } else { ?>
                                <?php if ($_smarty_tpl->tpl_vars['lstCatTour']->value) {?>
                                    <ul class="dropdown-menu dropdown_travelstyle" role="menu">
                                        <?php
$__section_j_16_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstCatTour']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_j_16_total = $__section_j_16_loop;
$_smarty_tpl->tpl_vars['__smarty_section_j'] = new Smarty_Variable(array());
if ($__section_j_16_total !== 0) {
for ($__section_j_16_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] = 0; $__section_j_16_iteration <= $__section_j_16_total; $__section_j_16_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']++){
?>
                                        <?php $_smarty_tpl->_assignInScope('title_category', $_smarty_tpl->tpl_vars['lstCatTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['title']);?>
                                        <li><a title="<?php echo $_smarty_tpl->tpl_vars['title_category']->value;?>
"
                                               href="<?php echo $_smarty_tpl->tpl_vars['clsTourCategory']->value->getLink($_smarty_tpl->tpl_vars['lstCatTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['tourcat_id'],$_smarty_tpl->tpl_vars['lstCatTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]);?>
"><?php echo $_smarty_tpl->tpl_vars['title_category']->value;?>
 </a>
                                        </li>
                                        <?php
}
}
?>
                                    </ul>
                                <?php }?>
                                <?php }?>
                            </li>
                            <li class="relative">
                                <a href="javascript:void(0);" class="mnu-main mnu-level-1 dropdown-toggle"
                                   id="dropdownMenuHotel" data-bs-toggle="dropdown" data-target="mg-s-hotel"
                                   aria-expanded="false" rel="nofollow"
                                   role="link"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Stay');?>
</a>
                                <div class="dropdown-menu mega-menu mg-dropdown mg-s-hotel header-mega-menu-new"
                                     aria-labelledby="dropdownMenuHotel">
                                    <div class="d-flex-menu">
                                        <div class="d-nav-menu">
                                            <ul class="nav nav-tabs nav-pills nav-stacked" role="tablist">
                                                <?php
$__section_i_17_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstCountryHotel']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_17_total = $__section_i_17_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_17_total !== 0) {
for ($__section_i_17_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_17_iteration <= $__section_i_17_total; $__section_i_17_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['first'] = ($__section_i_17_iteration === 1);
?>
                                                <?php $_smarty_tpl->_assignInScope('country_hotel_title', $_smarty_tpl->tpl_vars['lstCountryHotel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title']);?>
                                                <li><a class="tab-menu"
                                                       href="<?php echo $_smarty_tpl->tpl_vars['clsCountryEx']->value->getLink($_smarty_tpl->tpl_vars['lstCountryHotel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['country_id'],'Hotel',$_smarty_tpl->tpl_vars['lstCountryHotel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
"
                                                       title="<?php echo $_smarty_tpl->tpl_vars['country_hotel_title']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['country_hotel_title']->value;?>
</a>
                                                </li>
                                                <?php
}
}
?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="relative">
                                <a href="javascript:void(0);" class="mnu-main mnu-level-1 dropdown-toggle"
                                   id="dropdownMenuCruise" data-bs-toggle="dropdown" data-target="mg-s-cruise"
                                   aria-expanded="false" rel="nofollow"
                                   role="link"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cruise');?>
</a>
                                <div class="dropdown-menu mega-menu mg-dropdown mg-s-cruise header-mega-menu-new"
                                     aria-labelledby="dropdownMenuCruise">
                                    <div class="d-flex-menu">
                                        <div class="d-nav-menu">
                                            <ul class="nav nav-tabs nav-pills nav-stacked" role="tablist">
                                                <?php
$__section_i_18_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstCruiseCat']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_18_total = $__section_i_18_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_18_total !== 0) {
for ($__section_i_18_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_18_iteration <= $__section_i_18_total; $__section_i_18_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['first'] = ($__section_i_18_iteration === 1);
?>
                                                    <?php $_smarty_tpl->_assignInScope('_cruisecat_id', $_smarty_tpl->tpl_vars['lstCruiseCat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_cat_id']);?>
                                                    <?php $_smarty_tpl->_assignInScope('title_cruisecat', $_smarty_tpl->tpl_vars['lstCruiseCat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title']);?>
                                                    <?php $_smarty_tpl->_assignInScope('link_cruisecat', $_smarty_tpl->tpl_vars['clsCruiseCat']->value->getLink($_smarty_tpl->tpl_vars['_cruisecat_id']->value,$_smarty_tpl->tpl_vars['lstCruiseCat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]));?>
                                                    <?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'cruise','cruise_sub_category','customize')) {?>
                                                        <?php $_smarty_tpl->_assignInScope('childCat', $_smarty_tpl->tpl_vars['clsCruiseCat']->value->getMenuChild($_smarty_tpl->tpl_vars['_cruisecat_id']->value));?>
                                                
                                                        <li><a class="tab-menu"
                                                               href="<?php echo $_smarty_tpl->tpl_vars['link_cruisecat']->value;?>
"
                                                               title="<?php echo $_smarty_tpl->tpl_vars['title_cruisecat']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['title_cruisecat']->value;?>
</a>
                                                                <?php echo $_smarty_tpl->tpl_vars['childCat']->value;?>

                                                        </li>
                                                    <?php } else { ?>
                                                        <li><a class="tab-menu"
                                                               href="<?php echo $_smarty_tpl->tpl_vars['link_cruisecat']->value;?>
"
                                                               title="<?php echo $_smarty_tpl->tpl_vars['title_cruisecat']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['title_cruisecat']->value;?>
</a>
                                                        </li>
                                                    <?php }?>
                                                <?php
}
}
?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php } else { ?>
                            <li class="relative">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('search_tour');?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Our');?>
"
                                   class="color_1c1c1c"> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Our');?>
</a>
                            </li>
                            <li class="relative subMenu">
                                <a class="dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);"
                                   title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Travel Styles');?>
" role=link aria-disabled=true><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Travel Styles');?>
 <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="dropdown-menu dropdown_hotel nav_menu_child" role="menu">
                                    <?php
$__section_i_19_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstCatTour']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_19_total = $__section_i_19_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_19_total !== 0) {
for ($__section_i_19_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_19_iteration <= $__section_i_19_total; $__section_i_19_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['first'] = ($__section_i_19_iteration === 1);
?>
                                        <?php $_smarty_tpl->_assignInScope('title_category', $_smarty_tpl->tpl_vars['lstCatTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title']);?>
                                        <li class="menuhover"><a
                                                    href="<?php echo $_smarty_tpl->tpl_vars['clsTourCategory']->value->getLink($_smarty_tpl->tpl_vars['lstCatTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tourcat_id'],$_smarty_tpl->tpl_vars['lstCatTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
"
                                                    title="<?php echo $_smarty_tpl->tpl_vars['title_category']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['title_category']->value;?>
</a></li>
                                    <?php
}
}
?>
                                </ul>
                            </li>
                            <li class="relative">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('tailor');?>
"
                                   title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Tailor made tour');?>
"> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Tailor made tour');?>
</a>
                            </li>
                            <li class="relative">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('service');?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Services');?>
"
                                   class="color_1c1c1c"> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Services');?>
</a>
                            </li>
                        <?php }?>
                        <li class="relative">
                            <a class="tab-menu color_1c1c1c"
                                                       title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Voucher');?>
"
                                                       href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('voucher');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Voucher');?>
</a>
                        </li>
                        <li class="relative">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('news');?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('News');?>
" class="color_1c1c1c"> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('News');?>
</a>
                        </li>

                        <li class="relative">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('blog');?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Blog');?>
" class="color_1c1c1c"> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Blog');?>
</a>
                        </li>
                        <?php if ($_smarty_tpl->tpl_vars['package_id']->value == 3 || $_smarty_tpl->tpl_vars['package_id']->value == 4) {?>
                        <li class="menu_promotion">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('promotion');?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Promotion');?>
" class="color_1c1c1c"> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Promotion');?>
</a>
                        </li>
                        <?php }?>
                    </ul>
				</nav>
			</div>
		</div>
	</div>
	<?php } else { ?>
	<div class="header__mobile block1024" style="display: none">
		<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('menuMobile');?>

	</div>
	<?php }?>
</header>
<?php }
}?>



<?php echo '<script'; ?>
>
	function openCountry(evt, cityName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the link that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
$(".subMenuCat").hover(
  function () {
	  var itemf = $('.dropdown-menu .nav .tablinks').length;
	$('.dropdown-menu .nav .tablinks').each(function(index){ // nested class from activator class
		if (index === 0) {
			// this is the first one
			$(this).addClass('active'); // add class in first item
			$('.dropdown-menu .nav .tablinks .tabcontent').css("display","none");
			$('.dropdown-menu .nav .tablinks.active .tabcontent').css("display","block");
			$('.dropdown-menu .nav .tablinks.active .tabcontent li').css("z-index","1");
		}
	});
    $(this).addClass('open');
  },
  function () {
    $(this).removeClass("open");
	  $('.dropdown-menu .nav .tablinks.active').removeClass('active');
  }
);
    document.querySelectorAll('.dropdown-menu').forEach(function(element){
        element.addEventListener('click', function (e) {
            e.stopPropagation();
        });
    })

<?php echo '</script'; ?>
>


<?php echo '<script'; ?>
>
$(function (){
	var fixed_box_scroll = $("#header");
	var fixed_box_scrollMenu = $(".tabskVoucher");
	var fixed_box_scrollMenuTabs = $(".tabskTour");
	var sm_menu_ham= $("#sm_menu_ham");
    var $ww = $(window).width();
	$(window).scroll(function(){
		if ($(window).scrollTop() >= 30) {
			fixed_box_scroll.addClass("fixed_header");
			if($ww > 992){
			fixed_box_scrollMenu.addClass("fixed_Menu");
			}
			fixed_box_scrollMenuTabs.addClass("fixed_MenuTour");
			sm_menu_ham.addClass("fixed_header");
		} else {
			fixed_box_scroll.removeClass("fixed_header");
			if($ww > 992){
			fixed_box_scrollMenu.removeClass("fixed_Menu");
			}
			fixed_box_scrollMenuTabs.removeClass("fixed_MenuTour");
			sm_menu_ham.removeClass("fixed_header");

		}
	});
});
lastScroll = 0;
var $ww = $(window).width();
$(window).on('scroll',function() {
	var scroll = $(window).scrollTop();
	if(lastScroll - scroll < 0 && $(window).scrollTop() >= 300) {
		$('body').removeClass('slideDown').addClass('slideUp');
		$(".fixed_header").slideUp(0);
	} else {
		$('body').removeClass('slideUp').addClass('slideDown');
		$(".fixed_header").slideDown(0);
	}
	if(lastScroll - scroll < 0 && $(window).scrollTop() >= 500) {
		$(".fixed_Menu").slideUp(0);
	} else {
		$(".fixed_Menu").slideDown(0);
	}
	lastScroll = scroll;
});
<?php echo '</script'; ?>
>

<?php } else {
echo $_smarty_tpl->tpl_vars['core']->value->getBlock('box_header_en');?>

<?php }
}?>


<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('script_application_ld_json');
}
}
