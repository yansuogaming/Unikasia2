<?php
/* Smarty version 3.1.38, created on 2024-05-06 17:32:57
  from '/home/unikasia/domains/unikasia.com/public_html/isocms/templates/default/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6638b1d9699b17_23076435',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5b7c5462526d872ed382b15383410fb5e92a01b' => 
    array (
      0 => '/home/unikasia/domains/unikasia.com/public_html/isocms/templates/default/index.tpl',
      1 => 1714988722,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6638b1d9699b17_23076435 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/unikasia/domains/unikasia.com/public_html/inc/smarty3138/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
if ($_smarty_tpl->tpl_vars['mod']->value == 'unknow') {?>
<!DOCTYPE html>
<html>
	<head>
	<title><?php echo preg_replace('!<[^>]*?>!', ' ', html_entity_decode($_smarty_tpl->tpl_vars['global_title_page']->value));?>
</title>
	<!-- META TAG -->
	<meta http-equiv="content-language" content="<?php echo $_smarty_tpl->tpl_vars['_LANG_ID']->value;?>
" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="Description" content="<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['global_description_page']->value,400);?>
" />
	</head>
	<body>
		<div id="page"> 
			<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getModule($_smarty_tpl->tpl_vars['mod']->value,$_smarty_tpl->tpl_vars['sub']->value,$_smarty_tpl->tpl_vars['act']->value);?>

		</div> 
	</body>
</html>
<?php } else { ?>
<!DOCTYPE html>
<html lang="<?php if ($_smarty_tpl->tpl_vars['_LANG_ID']->value == 'vn') {?>vi<?php } else {
echo $_smarty_tpl->tpl_vars['_LANG_ID']->value;
}?>">
	<head>
		<title><?php echo preg_replace('!<[^>]*?>!', ' ', html_entity_decode($_smarty_tpl->tpl_vars['global_title_page']->value));?>
</title>
		<!-- META TAG -->
        <meta http-equiv="content-language" content="<?php if ($_smarty_tpl->tpl_vars['_LANG_ID']->value == 'vn') {?>vi<?php } else {
echo $_smarty_tpl->tpl_vars['_LANG_ID']->value;
}?>" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta name="Description" content="<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['global_description_page']->value,400);?>
" />
		<meta name="google-site-verification" content="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SiteGoogleVerifyKey');?>
">
		<link rel="shortcut icon" href="/favicon.ico?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
" type="image/x-icon" />


        <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.6.0.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/hotel.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/hotelSlide.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
		<?php if ($_smarty_tpl->tpl_vars['noindex']->value == 'noindex') {?>
		<meta name="robots" content="noindex,nofollow"/>
		<?php } else { ?>
		<meta name="robots" content="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['follow']->value;?>
,noodp,noydir"/>
		<?php }?>
        <meta name="revisit-after" content="1 days" />
        <meta name="google" content="nositelinkssearchbox" />
        <?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('var_javascript');?>


		<?php if (IS_COMPRESS_CSS == 0) {?>
		<link rel="preload" href="<?php echo $_smarty_tpl->tpl_vars['URL_CSS']->value;?>
/iso.core.css?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
" as="style" />
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URL_CSS']->value;?>
/iso.core.css?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
" />
		<?php } else { ?>
		<link rel="preload" href="<?php echo $_smarty_tpl->tpl_vars['URL_CSS']->value;?>
/compress/bootstrap5/bootstrap.min.css?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
" as="style" />
		<link rel="preload" href="<?php echo $_smarty_tpl->tpl_vars['URL_CSS']->value;?>
/compress/font-awesome.min.css?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
" as="style" />
		<link rel="preload" href="<?php echo $_smarty_tpl->tpl_vars['URL_CSS']->value;?>
/compress/jquery-ui.css?ver=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
" as="style" />
		<link rel="preload" href="<?php echo $_smarty_tpl->tpl_vars['URL_CSS']->value;?>
/compress/owl.carousel.min.css?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
" as="style" />
		<link rel="preload" href="<?php echo $_smarty_tpl->tpl_vars['URL_CSS']->value;?>
/jquery-confirm.min.css?ver=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
" as="style" />
		<link rel="preload" href="<?php echo $_smarty_tpl->tpl_vars['URL_CSS']->value;?>
/vietisocms.css?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
" as="style" />
		<link rel="preload" href="<?php echo $_smarty_tpl->tpl_vars['URL_CSS']->value;?>
/isotourcms.css?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
" as="style" />
		<link rel="preload" href="<?php echo $_smarty_tpl->tpl_vars['URL_CSS']->value;?>
/header.css?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
" as="style" />
		<link rel="preload" href="<?php echo $_smarty_tpl->tpl_vars['URL_CSS']->value;?>
/footer.css?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
" as="style" />
        
		
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URL_CSS']->value;?>
/compress/bootstrap5/bootstrap.min.css?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
" />
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URL_CSS']->value;?>
/compress/font-awesome.min.css?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"/>
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URL_CSS']->value;?>
/compress/jquery-ui.css?ver=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"/>
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URL_CSS']->value;?>
/compress/owl.carousel.min.css?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"/>
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URL_CSS']->value;?>
/jquery-confirm.min.css?ver=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"/>
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URL_CSS']->value;?>
/vietisocms.css?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"/>
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URL_CSS']->value;?>
/isotourcms.css?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"/>
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URL_CSS']->value;?>
/header.css?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"/>
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URL_CSS']->value;?>
/footer.css?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"/>
		<?php }?>

		<link rel="preload" href="<?php echo $_smarty_tpl->tpl_vars['URL_CSS']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
.css?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
" as="style" />
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URL_CSS']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
.css?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css">
		<?php if ($_smarty_tpl->tpl_vars['mod']->value == "homepackage") {?>
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
			<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URL_CSS']->value;?>
/home/home.css">
		<?php }?>
		<?php if (IS_COMPRESS_JS == 0) {?>
		<link rel="preload" href="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/iso.core.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
" as="script" />
		<link rel="preload" href="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/compress/jquery-vietiso-2.2.4.min.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
" as="script" />
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/iso.core.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/compress/jquery-vietiso-2.2.4.min.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/jquery.ui.touch-punch.min.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
		<?php } else { ?>
		<link rel="preload" href="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/compress/jquery-2.2.4.min.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
" as="script" />
		<link rel="preload" href="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/compress/jquery-migrate-1.4.1.min.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
" as="script" />
		<link rel="preload" href="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/compress/jquery-ui.min.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
" as="script" />
		<link rel="preload" href="<?php echo $_smarty_tpl->tpl_vars['URL_CSS']->value;?>
/compress/bootstrap5/bootstrap.bundle.min.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
" as="script" />
		<link rel="preload" href="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/compress/jquery.lazyload.min.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
" as="script" />
		<link rel="preload" href="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/compress/backTop.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
" as="script" />
		<link rel="preload" href="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/compress/owl-carousel-2.3.4.min.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
" as="script" />
		<link rel="preload" href="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/makepop.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
" as="script" />
		<link rel="preload" href="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/jquery.countdown.min.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
" as="script" />
		<link rel="preload" href="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/jquery.lockfixed.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
" as="script" />
		<link rel="preload" href="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/swiper.min.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
" as="script" />
		
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/compress/jquery-2.2.4.min.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/compress/jquery-migrate-1.4.1.min.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/compress/jquery-ui.min.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['URL_CSS']->value;?>
/compress/bootstrap5/bootstrap.bundle.min.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/compress/jquery.lazyload.min.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/compress/backTop.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/compress/owl-carousel-2.3.4.min.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/makepop.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/jquery.countdown.min.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/jquery.lockfixed.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/swiper.min.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/jquery.ui.touch-punch.min.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
		<?php }?>
		<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
        
		<link rel="preload" href="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/vietiso.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
" as="script" />
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/vietiso.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
		
		<?php if ($_smarty_tpl->tpl_vars['mod']->value == 'cruise' && $_smarty_tpl->tpl_vars['act']->value == 'detail' || $_smarty_tpl->tpl_vars['mod']->value == 'hotel' && $_smarty_tpl->tpl_vars['act']->value == 'detail' || $_smarty_tpl->tpl_vars['mod']->value == 'about') {?>
        <link rel="preload" href="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/fancybox4/fancybox.css?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
" as="css" />
        <link rel="preload" href="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/fancybox4/fancybox.umd.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
" as="script" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/fancybox4/fancybox.css?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"/>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/fancybox4/fancybox.umd.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['mod']->value == 'member') {?>
		<link rel="preload" href="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/jquery.member.validate.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
" as="script" />
		<link rel="preload" href="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/jquery.form.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
" as="script" />
		<link rel="preload" href="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/jquery.login.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
" as="script" />
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/jquery.member.validate.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/jquery.form.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/jquery.login.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
		<?php }?>
		
		<?php if ($_smarty_tpl->tpl_vars['mod']->value != 'homepackage' && $_smarty_tpl->tpl_vars['mod']->value != 'home') {?>
		<?php echo '<script'; ?>
 src="//maps.googleapis.com/maps/api/js?key=<?php echo $_smarty_tpl->tpl_vars['API_GOOGLE_MAPS']->value;?>
&libraries=places"><?php echo '</script'; ?>
>
		<?php }?>
		
		<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('box_share_social');?>

		<?php if ($_smarty_tpl->tpl_vars['page']->value == '') {?>
		<?php if ($_smarty_tpl->tpl_vars['mod']->value == 'home') {?>
		<link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;?>
"/>
		<?php } else { ?>
		<link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;
echo $_smarty_tpl->tpl_vars['REQUEST_URI']->value;?>
"/>
		<?php }?>
		<?php }?>
		<meta property="fb:app_id" content="<?php echo $_smarty_tpl->tpl_vars['appID']->value;?>
" />
		<?php echo '<script'; ?>
 src="https://www.google.com/recaptcha/api.js?hl=<?php echo $_smarty_tpl->tpl_vars['recaptcha_google_lang']->value;?>
&ver=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
" async defer><?php echo '</script'; ?>
>
		<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('box_google_analytics');?>

		<?php if ($_smarty_tpl->tpl_vars['uncopy']->value == 1) {?>
		<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('uncopy');?>

		<?php }?>
        
        <?php echo '<script'; ?>
 type="text/javascript">
            (function(c,l,a,r,i,t,y){
                c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
                t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
                y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
            })(window, document, "clarity", "script", "lpkeztkllc");
        <?php echo '</script'; ?>
>
        
	</head>
	<body class="<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['act']->value;?>
_body page<?php echo $_smarty_tpl->tpl_vars['_LANG_ID']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
Body <?php echo $_smarty_tpl->tpl_vars['deviceType']->value;?>
">
		<!--<div class="loader___page"></div>-->
		<!-- Load Facebook SDK for JavaScript -->
		<!-- Use Facebook Plugin Comment -->
		<div id="fb-root"></div>
		
		<?php echo '<script'; ?>
>
		(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
				js = d.createElement(s); js.id = id;
				js.src = "//connect.facebook.net/"+facebook_plugin_lang+"/sdk.js#xfbml=1&version=v2.9";
				fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
		<?php echo '</script'; ?>
> 
		
		<?php if ($_smarty_tpl->tpl_vars['customerchat']->value == 1) {?>
		<div class="fb-customerchat" attribution=setup_tool page_id="170710566975353"></div>
		
		<?php echo '<script'; ?>
>
		(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
				js = d.createElement(s); js.id = id;
				js.src = "//connect.facebook.net/"+facebook_plugin_lang+"/sdk/xfbml.customerchat.js";
				fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
		<?php echo '</script'; ?>
> 
		
		<?php }?>
		<div id="page"> 
            <?php echo $_smarty_tpl->tpl_vars['core']->value->getHeader($_smarty_tpl->tpl_vars['mod']->value,'_header');?>

			<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getModule($_smarty_tpl->tpl_vars['mod']->value,$_smarty_tpl->tpl_vars['sub']->value,$_smarty_tpl->tpl_vars['act']->value);?>

			<?php echo $_smarty_tpl->tpl_vars['core']->value->getHeader($_smarty_tpl->tpl_vars['mod']->value,'_footer');?>

		</div> 
		<!--[if lt IE 9]>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/ie/html5shiv.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/ie/respond.min.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
		<![endif]-->
		
		<?php echo '<script'; ?>
>
        $(window).load(function() {
            $(".loader___page").fadeOut("slow"); 
        });
		<?php echo '</script'; ?>
>
		
		<?php if ($_smarty_tpl->tpl_vars['fb_livechat']->value) {?>
		<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('fb_livechat');?>

		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['show']->value == 'Test') {?>
		<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('contact_chat');?>

		<?php }?>
	</body>
</html>
<?php }
}
}
