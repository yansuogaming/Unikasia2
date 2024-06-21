<?php
/* Smarty version 3.1.38, created on 2024-04-08 17:49:07
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/menuMobile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6613cba3be8e81_77791055',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a793da2994767e0b8c8761d3063bd78d508c7a44' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/menuMobile.tpl',
      1 => 1710742650,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6613cba3be8e81_77791055 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="preload" href="<?php echo $_smarty_tpl->tpl_vars['URL_CSS']->value;?>
/mobilemenu.css?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
" as="style" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URL_CSS']->value;?>
/mobilemenu.css?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"/>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/jquery-simple-mobilemenu.min.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
<div class="logo-port">
	<p>
		<a href="<?php echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['PAGE_NAME']->value;?>
">
			<img class="img-responsive img100" alt="<?php echo $_smarty_tpl->tpl_vars['PAGE_NAME']->value;?>
" width="106" height="50" src="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('HeaderLogo');?>
"/>
		</a>	
	</p>
</div>
<div class="header_link">
<!--
	<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'faqs','default','default')) {?>
	<a class="icon_faqs" href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('faqs');?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Faqs');?>
"><i class="fa fa-question-circle" aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Faqs');?>
</a>
	<?php }?>
-->
		<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'setting','cart','customize')) {?>
	<div class="cart__box">
		<a href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('cart');?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cart');?>
" class="color_1c1c1c cart__header">
			<span class="icon__cart"><span class="number__item" id="number_cart_mobile">0</span></span>
			<span class="cart"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cart');?>
</span>
		</a>
	</div>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'member','default','default')) {?>
	<?php if ($_smarty_tpl->tpl_vars['loggedIn']->value == '') {?>
	<div class="dropdown login_mobile">
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
	<div class="dropdown login_mobile">
		<a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Customer Login');?>
" data-bs-toggle="dropdown" href="javascript:void(0);" rel="nofollow" role=link aria-disabled=true>
			<span class="icon_user"></span>
		</a>
		<ul class="dropdown-menu dropdown-mene-profile" role="menu">
			<li><a role="menuitem" href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('my_profile');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('My Profile');?>
</a> </li>
			<li><a role="menuitem" href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('my_booking');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('My Booking');?>
</a> </li>
			<li><a role="menuitem" href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('my_wishlist');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('My Wishlist');?>
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
	<?php }?>
</div>
<ul class="mobile_menu">
    <?php if ($_smarty_tpl->tpl_vars['_LANG_ID']->value != 'vn') {?>
    <li class="relative">
        <a href="javascript:void(0);" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Destinations');?>
" role="link"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Destinations');?>
</a>
        <ul class="submenu">
            <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listCountryDestination']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
            <?php $_smarty_tpl->_assignInScope('title_country', $_smarty_tpl->tpl_vars['listCountryDestination']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title']);?>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['clsCountryEx']->value->getLink($_smarty_tpl->tpl_vars['listCountryDestination']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['country_id']);?>
" title="<?php echo $_smarty_tpl->tpl_vars['title_country']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['title_country']->value;?>
</a></li>
            <?php
}
}
?>
        </ul>
    </li>
    <li class="relative">
        <a href="javascript:void(0);" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Travel styles');?>
" role="link"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Travel styles');?>
 </a>
        <?php if ($_smarty_tpl->tpl_vars['lstCatTour']->value) {?>
        <ul class="submenu">
            <?php
$__section_j_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstCatTour']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_j_1_total = $__section_j_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_j'] = new Smarty_Variable(array());
if ($__section_j_1_total !== 0) {
for ($__section_j_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] = 0; $__section_j_1_iteration <= $__section_j_1_total; $__section_j_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']++){
?>
            <?php $_smarty_tpl->_assignInScope('title_category', $_smarty_tpl->tpl_vars['clsTourCategory']->value->getTitle($_smarty_tpl->tpl_vars['lstCatTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['tourcat_id']));?>
            <li><a  title="<?php echo $_smarty_tpl->tpl_vars['title_category']->value;?>
" href="<?php echo $_smarty_tpl->tpl_vars['clsTourCategory']->value->getLink($_smarty_tpl->tpl_vars['lstCatTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['tourcat_id']);?>
"><?php echo $_smarty_tpl->tpl_vars['title_category']->value;?>
 </a></li>
            <?php
}
}
?>
        </ul>
        <?php }?>
    </li>
    <li class="relative">
        <a href="javascript:void(0);" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Other Product');?>
" role=link aria-disabled=true><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Other Product');?>
</a>
        <ul class="submenu">
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('hotel');?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Stay');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Stay');?>
</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('cruise');?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cruise');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cruise');?>
</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('voucher');?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Voucher');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Voucher');?>
</a></li>
        </ul>
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
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Promotion');?>
" class="color_1c1c1c"> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Deals');?>
</a>
	</li>
    <?php } else { ?>
	<?php if ($_smarty_tpl->tpl_vars['package_id']->value != 1) {?>
		<li class="relative">
			<a href="javascript:void(0);" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Domestic tours');?>
" role=link aria-disabled=true><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Domestic tours');?>
</a>
			<ul class="submenu">
				<?php
$__section_i_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstRegionTour']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_2_total = $__section_i_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_2_total !== 0) {
for ($__section_i_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_2_iteration <= $__section_i_2_total; $__section_i_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
				<?php $_smarty_tpl->_assignInScope('TitleRegion', $_smarty_tpl->tpl_vars['clsRegion']->value->getTitle($_smarty_tpl->tpl_vars['lstRegionTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['region_id']));?>
				<?php $_smarty_tpl->_assignInScope('slugRegion', $_smarty_tpl->tpl_vars['clsRegion']->value->getSlug($_smarty_tpl->tpl_vars['lstRegionTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['region_id']));?>
				<?php $_smarty_tpl->_assignInScope('listCityTourByRegion', $_smarty_tpl->tpl_vars['lstRegionTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['listCityTourByRegion']);?>
				<li>
					<a href="javascript:void(0);" title="<?php echo $_smarty_tpl->tpl_vars['TitleRegion']->value;?>
" ><?php echo $_smarty_tpl->tpl_vars['TitleRegion']->value;?>
</a>
					<ul class="submenu">
						<?php
$__section_j_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listCityTourByRegion']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_j_3_total = $__section_j_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_j'] = new Smarty_Variable(array());
if ($__section_j_3_total !== 0) {
for ($__section_j_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] = 0; $__section_j_3_iteration <= $__section_j_3_total; $__section_j_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']++){
?>
						<?php $_smarty_tpl->_assignInScope('titleCityTourByRegion', $_smarty_tpl->tpl_vars['clsCity']->value->getTitle($_smarty_tpl->tpl_vars['listCityTourByRegion']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['city_id'],$_smarty_tpl->tpl_vars['listCityTourByRegion']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]));?>
						<?php $_smarty_tpl->_assignInScope('linkCityTourByRegion', $_smarty_tpl->tpl_vars['clsCity']->value->getLinkInbound($_smarty_tpl->tpl_vars['listCityTourByRegion']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['city_id'],$_smarty_tpl->tpl_vars['listCityTourByRegion']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]));?>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['linkCityTourByRegion']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['titleCityTourByRegion']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['titleCityTourByRegion']->value;?>
</a></li>
						<?php
}
}
?>
					</ul>
				</li>
				<?php
}
}
?>
			</ul>
		</li>
		<li class="relative">
			<a href="javascript:void(0);" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Outbound tours');?>
" role=link aria-disabled=true><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Outbound tours');?>
</a>
			<ul class="submenu">
				<?php
$__section_i_4_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstCountryTourOutbound']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_4_total = $__section_i_4_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_4_total !== 0) {
for ($__section_i_4_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_4_iteration <= $__section_i_4_total; $__section_i_4_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
				<?php $_smarty_tpl->_assignInScope('country__id', $_smarty_tpl->tpl_vars['lstCountryTourOutbound']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['country_id']);?>
				<?php $_smarty_tpl->_assignInScope('title_country', $_smarty_tpl->tpl_vars['clsCountryEx']->value->getTitle($_smarty_tpl->tpl_vars['lstCountryTourOutbound']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['country_id']));?>
				<li class="menuhover"><a href="<?php echo $_smarty_tpl->tpl_vars['clsCountryEx']->value->getLinkOutbound($_smarty_tpl->tpl_vars['lstCountryTourOutbound']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['country_id']);?>
" title="<?php echo $_smarty_tpl->tpl_vars['title_country']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['title_country']->value;?>
</a></li>
				<?php
}
}
?>
			</ul>
		</li>
		<li class="relative">
			<a href="javascript:void(0);" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Travel styles');?>
" role=link aria-disabled=true><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Travel styles');?>
 </a>
			<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'tour','category_country','default')) {?>
			<ul class="submenu">
				<?php
$__section_i_5_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstCountryTourOutbound']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_5_total = $__section_i_5_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_5_total !== 0) {
for ($__section_i_5_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_5_iteration <= $__section_i_5_total; $__section_i_5_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
				<?php $_smarty_tpl->_assignInScope('country__id', $_smarty_tpl->tpl_vars['lstCountryTourOutbound']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['country_id']);?>
				<?php $_smarty_tpl->_assignInScope('title_country', $_smarty_tpl->tpl_vars['clsCountryEx']->value->getTitle($_smarty_tpl->tpl_vars['lstCountryTourOutbound']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['country_id']));?>
				<?php $_smarty_tpl->_assignInScope('lstCountryCat', $_smarty_tpl->tpl_vars['clsCategory_Country']->value->getListCatCountry($_smarty_tpl->tpl_vars['country__id']->value));?>
				<?php if ($_smarty_tpl->tpl_vars['lstCountryCat']->value) {?>
				<li><a href="javascript:void(0);" role=link aria-disabled=true><?php echo $_smarty_tpl->tpl_vars['title_country']->value;?>
</a>
					<ul class="submenu">
						<?php
$__section_j_6_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstCountryCat']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_j_6_total = $__section_j_6_loop;
$_smarty_tpl->tpl_vars['__smarty_section_j'] = new Smarty_Variable(array());
if ($__section_j_6_total !== 0) {
for ($__section_j_6_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] = 0; $__section_j_6_iteration <= $__section_j_6_total; $__section_j_6_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']++){
?>
						<?php $_smarty_tpl->_assignInScope('title_category_country', $_smarty_tpl->tpl_vars['clsTourCategory']->value->getTitle($_smarty_tpl->tpl_vars['lstCountryCat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['cat_id']));?>
						<li>
							<a href="<?php echo $_smarty_tpl->tpl_vars['clsTourCategory']->value->getLinkCatCountry($_smarty_tpl->tpl_vars['lstCountryCat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['cat_id'],$_smarty_tpl->tpl_vars['country__id']->value);?>
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
				</li>
				<?php }?>
				<?php
}
}
?>
			</ul>
			<?php } else { ?>
			<?php if ($_smarty_tpl->tpl_vars['lstCatTour']->value) {?>
			<ul class="submenu">
				<?php
$__section_j_7_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstCatTour']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_j_7_total = $__section_j_7_loop;
$_smarty_tpl->tpl_vars['__smarty_section_j'] = new Smarty_Variable(array());
if ($__section_j_7_total !== 0) {
for ($__section_j_7_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] = 0; $__section_j_7_iteration <= $__section_j_7_total; $__section_j_7_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']++){
?>
				<?php $_smarty_tpl->_assignInScope('title_category', $_smarty_tpl->tpl_vars['clsTourCategory']->value->getTitle($_smarty_tpl->tpl_vars['lstCatTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['tourcat_id']));?>
				<li><a title="<?php echo $_smarty_tpl->tpl_vars['title_category']->value;?>
" href="<?php echo $_smarty_tpl->tpl_vars['clsTourCategory']->value->getLink($_smarty_tpl->tpl_vars['lstCatTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['tourcat_id']);?>
"><?php echo $_smarty_tpl->tpl_vars['title_category']->value;?>
 </a></li>
				<?php
}
}
?>
			</ul>
			<?php }?>
			<?php }?>
		</li>
    
    
        <li class="relative">
			<a href="javascript:void(0);" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Stay');?>
" role=link aria-disabled=true><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Stay');?>
</a>
			<ul class="submenu">
                <?php
$__section_i_8_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstCountryHotel']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_8_total = $__section_i_8_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_8_total !== 0) {
for ($__section_i_8_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_8_iteration <= $__section_i_8_total; $__section_i_8_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                <?php $_smarty_tpl->_assignInScope('country_hotel_title', $_smarty_tpl->tpl_vars['lstCountryHotel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title']);?>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['clsCountryEx']->value->getLink($_smarty_tpl->tpl_vars['lstCountryHotel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['country_id'],'Hotel',$_smarty_tpl->tpl_vars['lstCountryHotel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
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
		</li>
        <li class="relative">
			<a href="javascript:void(0);" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cruise');?>
" role=link aria-disabled=true><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cruise');?>
</a>
			<ul class="submenu">
                <?php
$__section_i_9_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstCruiseCat']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_9_total = $__section_i_9_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_9_total !== 0) {
for ($__section_i_9_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_9_iteration <= $__section_i_9_total; $__section_i_9_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                <?php $_smarty_tpl->_assignInScope('_cruisecat_id', $_smarty_tpl->tpl_vars['lstCruiseCat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_cat_id']);?>
                <?php $_smarty_tpl->_assignInScope('title_cruisecat', $_smarty_tpl->tpl_vars['lstCruiseCat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title']);?>
                <?php $_smarty_tpl->_assignInScope('link_cruisecat', $_smarty_tpl->tpl_vars['clsCruiseCat']->value->getLink($_smarty_tpl->tpl_vars['_cruisecat_id']->value,$_smarty_tpl->tpl_vars['lstCruiseCat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]));?>
                <?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'cruise','cruise_sub_category','customize')) {?>
                    <?php $_smarty_tpl->_assignInScope('childCat', $_smarty_tpl->tpl_vars['clsCruiseCat']->value->getMenuChild($_smarty_tpl->tpl_vars['_cruisecat_id']->value));?>

                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['link_cruisecat']->value;?>
"
                           title="<?php echo $_smarty_tpl->tpl_vars['title_cruisecat']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['title_cruisecat']->value;?>
</a>
                            <?php echo $_smarty_tpl->tpl_vars['childCat']->value;?>

                    </li>
                <?php } else { ?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['link_cruisecat']->value;?>
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
		</li>
    
        <li class="relative">
			<a href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('voucher');?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Voucher');?>
" class="color_1c1c1c"> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Voucher');?>
</a>
		</li>
	<?php } else { ?>
		<li class="relative">
			<a href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('search_tour');?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Our');?>
" class="color_1c1c1c"> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Our');?>
</a>
		</li>
		<li class="relative">
			<a href="javascript:void(0);" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Travel Styles');?>
" role=link aria-disabled=true><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Travel Styles');?>
 </a>
			<ul class="submenu">
				<?php
$__section_i_10_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstCatTour']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_10_total = $__section_i_10_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_10_total !== 0) {
for ($__section_i_10_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_10_iteration <= $__section_i_10_total; $__section_i_10_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
				<?php $_smarty_tpl->_assignInScope('title_category', $_smarty_tpl->tpl_vars['lstCatTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title']);?>
					<li><a class="color_333" title="<?php echo $_smarty_tpl->tpl_vars['title_category']->value;?>
" href="<?php echo $_smarty_tpl->tpl_vars['clsTourCategory']->value->getLink($_smarty_tpl->tpl_vars['lstCatTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tourcat_id']);?>
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
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Tailor made tour');?>
" class="color_1c1c1c"> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Tailor made tour');?>
</a>
		</li>
		<li class="relative">
			<a href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('service');?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Services');?>
" class="color_1c1c1c"> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Services');?>
</a>
		</li>
	<?php }?>
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
    <?php }?>
</ul>
<?php if (0) {?>
<span class="find_mobi"><i class="fa fa-search" aria-hidden="true"></i></span>
<?php }?>

<?php echo '<script'; ?>
>
    $(document).ready(function() {
        $(".mobile_menu").slideMobileMenu({
            onMenuLoad: function(menu) {
                console.log(menu)
            },
            onMenuToggle: function(menu, opened) {
                console.log(opened)
            }
        });
        $('.find_mobi').on('click', function () {
            $('.content_banner').toggle();
        })

        $('.icon_search').click(function(){
            $('.search_box').addClass('show_search');
            $('.search_top_mb').focus();	
        });
        $('.search_top_mb').focusout(function(){
            $(this).closest('.search_box').removeClass('show_search');
        });
    })
<?php echo '</script'; ?>
>
<?php }
}
