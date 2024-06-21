<?php
/* Smarty version 3.1.38, created on 2024-04-08 13:09:38
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/box_header_en.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66138a22bd85a3_18983032',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0098cb1a2b676fa3cc21a55793e286a321bf0943' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/box_header_en.tpl',
      1 => 1698460870,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66138a22bd85a3_18983032 (Smarty_Internal_Template $_smarty_tpl) {
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
						<div class="box_search_top">
						<form class="form_search_top" method="post" action="<?php echo $_smarty_tpl->tpl_vars['extLang']->value;?>
/">
							<input type="text" class="search_top" name="key" autocomplete="off" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Search by destination, tour');?>
,....">
							<input type="hidden" name="Hid_Search" value="Hid_Search" />
						</form>	
						</div>		

					</div>
				</div>
				<div class="col-xl-6">
					<div class="header_top_right">
						<ul class="header__desktop--right__menu list_style_none">
							<li class="dropdown menu_lang">
								<?php if (count($_smarty_tpl->tpl_vars['listLang']->value) > 1) {?>
								<li class="dropdown language_select">
									<a class="slt_country" data-bs-toggle="dropdown" style="cursor:pointer" title="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getFullLanguage($_smarty_tpl->tpl_vars['_LANG_ID']->value);?>
" role=link aria-disabled=true><i class="flag flag-20 flag-20-<?php echo $_smarty_tpl->tpl_vars['_LANG_ID']->value;?>
 pd0_15"></i></a>
									<ul class="dropdown-menu menu-language">
										<?php
$__section_i_12_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listLang']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_12_total = $__section_i_12_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_12_total !== 0) {
for ($__section_i_12_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_12_iteration <= $__section_i_12_total; $__section_i_12_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['first'] = ($__section_i_12_iteration === 1);
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
								</li>
								<?php }?>
							</li>
							

							<li>
								<a href="/" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Help');?>
" class=""> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Help');?>
</a>
							</li>
							<li>
								<a href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('contact');?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Contact');?>
" class=""> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Contact');?>
</a>
							</li>
                        
                        
                            <?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'setting','cart','customize')) {?>
							<li class="cart__box">
								<a href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('cart');?>
" rel="nofollow" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cart');?>
" class="cart__header"><span class="icon__cart"><span class="number__item" id="number_cart" style="display: none">0</span></span></a>
							</li>
							<?php }?>
                        
                        
							<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'member','default','default')) {?>
							<?php echo '<script'; ?>
 src = "https://accounts.google.com/gsi/client" async defer > <?php echo '</script'; ?>
> 
							<?php if ($_smarty_tpl->tpl_vars['loggedIn']->value == '') {?>
                            <li class="loggedIn_li">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['clsProfile']->value->getLink('signin');?>
" class="signin_head login" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Log in');?>
"> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Log in');?>
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
                                    <?php $_smarty_tpl->_assignInScope('_provider', $_smarty_tpl->tpl_vars['clsProfile']->value->getOauthProvider($_smarty_tpl->tpl_vars['profile_id']->value));?>
                                    <?php if ($_smarty_tpl->tpl_vars['_provider']->value == '_REGSITER') {?>
                                    <li><a role="menuitem" href="<?php echo $_smarty_tpl->tpl_vars['clsProfile']->value->getLink('change_pass');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Change Password');?>
</a></li>
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
                        <li class="relative">
                            <a href="javascript:void(0);" class="mnu-main mnu-level-1 dropdown-toggle <?php if ($_smarty_tpl->tpl_vars['mod']->value == 'destination') {?>active<?php }?>" id="dropdownMenuDes" data-bs-toggle="dropdown" data-target="mg-s-tours" aria-expanded="false" rel="nofollow" role="link"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Destinations');?>
</a>
                            <div class="dropdown-menu mega-menu mg-dropdown mg-s-tours header-mega-menu-new" aria-labelledby="dropdownMenuDes">
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
                            <a href="javascript:void(0);" class="mnu-main mnu-level-1 dropdown-toggle <?php if (($_smarty_tpl->tpl_vars['mod']->value == 'tour' || $_smarty_tpl->tpl_vars['mod']->value == 'tour_new') && $_smarty_tpl->tpl_vars['act']->value != 'contact') {?>active<?php }?>" id="dropdownMenuTour" data-bs-toggle="dropdown" data-target="mg-s-tours" aria-expanded="false" rel="nofollow" role="link"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Travel Styles');?>
</a>
                            <div class="dropdown-menu mega-menu mg-dropdown mg-s-tours header-mega-menu-new dropdownMenuTour" aria-labelledby="dropdownMenuTour">
                                <div class="d-flex-menu">
                                    <div class="d-nav-menu">
                                        <ul class="nav nav-tabs nav-pills nav-stacked" role="tablist">	
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
$__section_i_15_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listCountryDestination']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_15_total = $__section_i_15_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_15_total !== 0) {
for ($__section_i_15_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_15_iteration <= $__section_i_15_total; $__section_i_15_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['first'] = ($__section_i_15_iteration === 1);
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
$__section_j_16_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstCountryCat']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_j_16_total = $__section_j_16_loop;
$_smarty_tpl->tpl_vars['__smarty_section_j'] = new Smarty_Variable(array());
if ($__section_j_16_total !== 0) {
for ($__section_j_16_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] = 0; $__section_j_16_iteration <= $__section_j_16_total; $__section_j_16_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']++){
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
$__section_j_17_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstCatTour']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_j_17_total = $__section_j_17_loop;
$_smarty_tpl->tpl_vars['__smarty_section_j'] = new Smarty_Variable(array());
if ($__section_j_17_total !== 0) {
for ($__section_j_17_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] = 0; $__section_j_17_iteration <= $__section_j_17_total; $__section_j_17_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']++){
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
                            <a href="javascript:void(0);" class="mnu-main mnu-level-1 dropdown-toggle <?php if (($_smarty_tpl->tpl_vars['mod']->value == 'tour' || $_smarty_tpl->tpl_vars['mod']->value == 'tour_new') && $_smarty_tpl->tpl_vars['act']->value != 'contact') {?>active<?php }?>" id="dropdownMenuOther" data-bs-toggle="dropdown" data-target="mg-s-tours" aria-expanded="false" rel="nofollow" role="link"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Other Products');?>
</a>
                            <div class="dropdown-menu mega-menu mg-dropdown mg-s-tours header-mega-menu-new dropdownMenuOther" aria-labelledby="dropdownMenuOther">
                                <div class="d-flex-menu">
                                    <div class="d-nav-menu">
                                        <ul class="nav nav-tabs nav-pills nav-stacked" role="tablist">	

                                            <li role="presentation">
                                                <div class="tab-menu active" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Stay');?>
" href="#stay" role="tab" data-bs-toggle="tab" aria-expanded="true"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Stay');?>
</div>
                                            </li>
                                            <li role="presentation">
                                                <div class="tab-menu" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cruise');?>
" href="#cruise" role="tab" data-bs-toggle="tab" aria-expanded="true"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cruise');?>
</div>
                                            </li>
                                            <li role="presentation">
                                                <a class="tab-menu" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Voucher');?>
" href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('voucher');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Voucher');?>
</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane show" id="stay">
                                            <div class="flex_colum">
                                                <div class="mega-item-menu">
                                                    <ul>
                                                        <?php
$__section_i_18_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstCountryHotel']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_18_total = $__section_i_18_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_18_total !== 0) {
for ($__section_i_18_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_18_iteration <= $__section_i_18_total; $__section_i_18_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['first'] = ($__section_i_18_iteration === 1);
?>
                                                        <?php $_smarty_tpl->_assignInScope('country_hotel_title', $_smarty_tpl->tpl_vars['lstCountryHotel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title']);?>
                                                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['clsCountryEx']->value->getLink($_smarty_tpl->tpl_vars['lstCountryHotel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['country_id'],'Hotel',$_smarty_tpl->tpl_vars['lstCountryHotel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
" title="<?php echo $_smarty_tpl->tpl_vars['country_hotel_title']->value;?>
" ><?php echo $_smarty_tpl->tpl_vars['country_hotel_title']->value;?>
</a></li>
                                                        <?php
}
}
?>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="cruise">
                                            <div class="flex_colum">
                                                <div class="mega-item-menu">
                                                    <ul>
                                                        <?php
$__section_i_19_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstCruiseCat']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_19_total = $__section_i_19_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_19_total !== 0) {
for ($__section_i_19_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_19_iteration <= $__section_i_19_total; $__section_i_19_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['first'] = ($__section_i_19_iteration === 1);
?>
                                                        <?php $_smarty_tpl->_assignInScope('_cruisecat_id', $_smarty_tpl->tpl_vars['lstCruiseCat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_cat_id']);?>
                                                        <?php $_smarty_tpl->_assignInScope('title_cruisecat', $_smarty_tpl->tpl_vars['lstCruiseCat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title']);?>
                                                        <?php $_smarty_tpl->_assignInScope('link_cruisecat', $_smarty_tpl->tpl_vars['clsCruiseCat']->value->getLink($_smarty_tpl->tpl_vars['_cruisecat_id']->value,$_smarty_tpl->tpl_vars['lstCruiseCat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]));?>
                                                        <?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'cruise','cruise_sub_category','customize')) {?>
                                                        <?php $_smarty_tpl->_assignInScope('childCat', $_smarty_tpl->tpl_vars['clsCruiseCat']->value->getMenuChild($_smarty_tpl->tpl_vars['_cruisecat_id']->value));?> 

                                                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['link_cruisecat']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['title_cruisecat']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['title_cruisecat']->value;?>
</a>  
                                                            <?php echo $_smarty_tpl->tpl_vars['childCat']->value;?>

                                                        </li>
                                                        <?php } else { ?>
                                                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['link_cruisecat']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['title_cruisecat']->value;?>
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
                                    </div>
                                </div>
                            </div>
                        </li>
						<li class="relative">
							<a href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('news');?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Experience');?>
" class="color_1c1c1c"> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Experience');?>
</a>
						</li>
						
						<li class="relative">
							<a href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('blog');?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Blog');?>
" class="color_1c1c1c"> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Blog');?>
</a>
						</li>
						<li class="menu_promotion">
							<a href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('promotion');?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Deals');?>
" class="color_1c1c1c"> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Deals');?>
</a>
						</li>
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
 type="text/javascript">
document.addEventListener("DOMContentLoaded", function(){
    document.querySelectorAll('.dropdown-menu').forEach(function(element){
        element.addEventListener('click', function (e) {
          e.stopPropagation();
        });
    })
    if (window.innerWidth < 992) {
        document.querySelectorAll('.navbar .dropdown').forEach(function(everydropdown){
            everydropdown.addEventListener('hidden.bs.dropdown', function () {
                  this.querySelectorAll('.submenu').forEach(function(everysubmenu){
                    everysubmenu.style.display = 'none';
                  });
            })
        });

        document.querySelectorAll('.dropdown-menu a').forEach(function(element){
            element.addEventListener('click', function (e) {

                let nextEl = this.nextElementSibling;
                if(nextEl && nextEl.classList.contains('submenu')) {	
                    e.preventDefault();
                    console.log(nextEl);
                    if(nextEl.style.display == 'block'){
                        nextEl.style.display = 'none';
                    } else {
                        nextEl.style.display = 'block';
                    }

                }
            });
        })
    }
}); 
// DOMContentLoaded  end
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
	
<?php }
}
