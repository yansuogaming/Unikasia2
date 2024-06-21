{if $mod eq 'unknow'}
<!DOCTYPE html>
<html>
	<head>
	<title>{$global_title_page|html_entity_decode|strip_tags}</title>
	<!-- META TAG -->
	<meta http-equiv="content-language" content="{$_LANG_ID}" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="Description" content="{$global_description_page|truncate:400}" />
	</head>
	<body>
		<div id="page"> 
			{$clsISO->getModule($mod,$sub,$act)}
		</div> 
	</body>
</html>
{else}
<!DOCTYPE html>
<html lang="{if $_LANG_ID eq 'vn'}vi{else}{$_LANG_ID}{/if}">
	<head>
		<title>{$global_title_page|html_entity_decode|strip_tags}</title>
		<!-- META TAG -->
        <meta http-equiv="content-language" content="{if $_LANG_ID=='vn'}vi{else}{$_LANG_ID}{/if}" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta name="Description" content="{$global_description_page|truncate:400}" />
		<meta name="google-site-verification" content="{$clsConfiguration->getValue('SiteGoogleVerifyKey')}">
		<link rel="shortcut icon" href="/favicon.ico?v={$upd_version}" type="image/x-icon" />
		{if $noindex eq 'noindex'}
		<meta name="robots" content="noindex,nofollow"/>
		{else}
		<meta name="robots" content="{$index},{$follow},noodp,noydir"/>
		{/if}
        <meta name="revisit-after" content="1 days" />
        <meta name="google" content="nositelinkssearchbox" />
        {$core->getBlock('var_javascript')}

		{if IS_COMPRESS_CSS eq 0}
		<link rel="preload" href="{$URL_CSS}/iso.core.css?v={$upd_version}" as="style" />
		<link rel="stylesheet" href="{$URL_CSS}/iso.core.css?v={$upd_version}" />
		{else}
		<link rel="preload" href="{$URL_CSS}/compress/bootstrap5/bootstrap.min.css?v={$upd_version}" as="style" />
		<link rel="preload" href="{$URL_CSS}/compress/font-awesome.min.css?v={$upd_version}" as="style" />
		<link rel="preload" href="{$URL_CSS}/compress/jquery-ui.css?ver={$upd_version}" as="style" />
		<link rel="preload" href="{$URL_CSS}/compress/owl.carousel.min.css?v={$upd_version}" as="style" />
		<link rel="preload" href="{$URL_CSS}/jquery-confirm.min.css?ver={$upd_version}" as="style" />
		<link rel="preload" href="{$URL_CSS}/vietisocms.css?v={$upd_version}" as="style" />
		<link rel="preload" href="{$URL_CSS}/isotourcms.css?v={$upd_version}" as="style" />
		<link rel="preload" href="{$URL_CSS}/header.css?v={$upd_version}" as="style" />
		<link rel="preload" href="{$URL_CSS}/footer.css?v={$upd_version}" as="style" />
		
		<link rel="stylesheet" href="{$URL_CSS}/compress/bootstrap5/bootstrap.min.css?v={$upd_version}" />
		<link rel="stylesheet" href="{$URL_CSS}/compress/font-awesome.min.css?v={$upd_version}"/>
		<link rel="stylesheet" href="{$URL_CSS}/compress/jquery-ui.css?ver={$upd_version}"/>
		<link rel="stylesheet" href="{$URL_CSS}/compress/owl.carousel.min.css?v={$upd_version}"/>
		<link rel="stylesheet" href="{$URL_CSS}/jquery-confirm.min.css?ver={$upd_version}"/>
		<link rel="stylesheet" href="{$URL_CSS}/vietisocms.css?v={$upd_version}"/>
		<link rel="stylesheet" href="{$URL_CSS}/isotourcms.css?v={$upd_version}"/>
		<link rel="stylesheet" href="{$URL_CSS}/header.css?v={$upd_version}"/>
		<link rel="stylesheet" href="{$URL_CSS}/footer.css?v={$upd_version}"/>
		{/if}

		<link rel="preload" href="{$URL_CSS}/{$mod}.css?v={$upd_version}" as="style" />
		<link rel="stylesheet" href="{$URL_CSS}/{$mod}.css?v={$upd_version}"/>
		
		

		{if IS_COMPRESS_JS eq 0}
		<link rel="preload" href="{$URL_JS}/iso.core.js?v={$upd_version}" as="script" />
		<link rel="preload" href="{$URL_JS}/compress/jquery-vietiso-2.2.4.min.js?v={$upd_version}" as="script" />
		<script src="{$URL_JS}/iso.core.js?v={$upd_version}"></script>
		<script src="{$URL_JS}/compress/jquery-vietiso-2.2.4.min.js?v={$upd_version}"></script>
        <script src="{$URL_JS}/jquery.ui.touch-punch.min.js?v={$upd_version}"></script>
		{else}
		<link rel="preload" href="{$URL_JS}/compress/jquery-2.2.4.min.js?v={$upd_version}" as="script" />
		<link rel="preload" href="{$URL_JS}/compress/jquery-migrate-1.4.1.min.js?v={$upd_version}" as="script" />
		<link rel="preload" href="{$URL_JS}/compress/jquery-ui.min.js?v={$upd_version}" as="script" />
		<link rel="preload" href="{$URL_CSS}/compress/bootstrap5/bootstrap.bundle.min.js?v={$upd_version}" as="script" />
		<link rel="preload" href="{$URL_JS}/compress/jquery.lazyload.min.js?v={$upd_version}" as="script" />
		<link rel="preload" href="{$URL_JS}/compress/backTop.js?v={$upd_version}" as="script" />
		<link rel="preload" href="{$URL_JS}/compress/owl-carousel-2.3.4.min.js?v={$upd_version}" as="script" />
		<link rel="preload" href="{$URL_JS}/makepop.js?v={$upd_version}" as="script" />
		<link rel="preload" href="{$URL_JS}/jquery.countdown.min.js?v={$upd_version}" as="script" />
		<link rel="preload" href="{$URL_JS}/jquery.lockfixed.js?v={$upd_version}" as="script" />
		<link rel="preload" href="{$URL_JS}/swiper.min.js?v={$upd_version}" as="script" />
		
		<script src="{$URL_JS}/compress/jquery-2.2.4.min.js?v={$upd_version}"></script>
		<script src="{$URL_JS}/compress/jquery-migrate-1.4.1.min.js?v={$upd_version}"></script>
		<script src="{$URL_JS}/compress/jquery-ui.min.js?v={$upd_version}"></script>
		<script src="{$URL_CSS}/compress/bootstrap5/bootstrap.bundle.min.js?v={$upd_version}"></script>
		<script src="{$URL_JS}/compress/jquery.lazyload.min.js?v={$upd_version}"></script>
		<script src="{$URL_JS}/compress/backTop.js?v={$upd_version}"></script>
		<script src="{$URL_JS}/compress/owl-carousel-2.3.4.min.js?v={$upd_version}"></script>
		<script src="{$URL_JS}/makepop.js?v={$upd_version}"></script>
		<script src="{$URL_JS}/jquery.countdown.min.js?v={$upd_version}"></script>
		<script src="{$URL_JS}/jquery.lockfixed.js?v={$upd_version}"></script>
		<script src="{$URL_JS}/swiper.min.js?v={$upd_version}"></script>
		<script src="{$URL_JS}/jquery.ui.touch-punch.min.js?v={$upd_version}"></script>
		{/if}
        
		<link rel="preload" href="{$URL_JS}/vietiso.js?v={$upd_version}" as="script" />
		<script src="{$URL_JS}/vietiso.js?v={$upd_version}"></script>
		
		{if $mod eq 'cruise' && $act eq 'detail' || $mod eq 'hotel' && $act eq 'detail' || $mod eq 'about'}
        <link rel="preload" href="{$URL_JS}/fancybox4/fancybox.css?v={$upd_version}" as="css" />
        <link rel="preload" href="{$URL_JS}/fancybox4/fancybox.umd.js?v={$upd_version}" as="script" />
        <link rel="stylesheet" href="{$URL_JS}/fancybox4/fancybox.css?v={$upd_version}"/>
        <script src="{$URL_JS}/fancybox4/fancybox.umd.js?v={$upd_version}"></script>
		{/if}

		{if $mod eq 'member'}
		<link rel="preload" href="{$URL_JS}/jquery.member.validate.js?v={$upd_version}" as="script" />
		<link rel="preload" href="{$URL_JS}/jquery.form.js?v={$upd_version}" as="script" />
		<link rel="preload" href="{$URL_JS}/jquery.login.js?v={$upd_version}" as="script" />
		<script src="{$URL_JS}/jquery.member.validate.js?v={$upd_version}"></script>
		<script src="{$URL_JS}/jquery.form.js?v={$upd_version}"></script>
		<script src="{$URL_JS}/jquery.login.js?v={$upd_version}"></script>
		{/if}
		
		{if $mod ne 'homepackage' and $mod ne 'home'}
		<script src="//maps.googleapis.com/maps/api/js?key={$API_GOOGLE_MAPS}&libraries=places"></script>
		{/if}
		
		{$core->getBlock('box_share_social')}
		{if $page eq ''}
		{if $mod eq 'home'}
		<link rel="canonical" href="{$DOMAIN_NAME}"/>
		{else}
		<link rel="canonical" href="{$DOMAIN_NAME}{$REQUEST_URI}"/>
		{/if}
		{/if}
		<meta property="fb:app_id" content="{$appID}" />
		<script src="https://www.google.com/recaptcha/api.js?hl={$recaptcha_google_lang}&ver={$upd_version}" async defer></script>
		{$core->getBlock('box_google_analytics')}
		{if $uncopy eq 1}
		{$core->getBlock('uncopy')}
		{/if}
	</head>
	<body class="{$mod}_{$act}_body page{$_LANG_ID} {$mod}Body {$deviceType}">
		<!--<div class="loader___page"></div>-->
		<!-- Load Facebook SDK for JavaScript -->
		<!-- Use Facebook Plugin Comment -->
		<div id="fb-root"></div>
		{literal}
		<script>
		(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
				js = d.createElement(s); js.id = id;
				js.src = "//connect.facebook.net/"+facebook_plugin_lang+"/sdk.js#xfbml=1&version=v2.9";
				fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
		</script> 
		{/literal}
		{if $customerchat eq 1}
		<div class="fb-customerchat" attribution=setup_tool page_id="170710566975353"></div>
		{literal}
		<script>
		(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
				js = d.createElement(s); js.id = id;
				js.src = "//connect.facebook.net/"+facebook_plugin_lang+"/sdk/xfbml.customerchat.js";
				fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
		</script> 
		{/literal}
		{/if}
		<div id="page"> 
            {$core->getHeader($mod,'_header')}
			{$clsISO->getModule($mod,$sub,$act)}
			{$core->getHeader($mod,'_footer')}
		</div> 
		<!--[if lt IE 9]>
		<script src="{$URL_JS}/ie/html5shiv.js?v={$upd_version}"></script>
		<script src="{$URL_JS}/ie/respond.min.js?v={$upd_version}"></script>
		<![endif]-->
		{literal}
		<script>
        $(window).load(function() {
            $(".loader___page").fadeOut("slow"); 
        });
		</script>
		{/literal}
		{if $fb_livechat}
		{$core->getBlock('fb_livechat')}
		{/if}
		{if $show eq 'Test'}
		{$core->getBlock('contact_chat')}
		{/if}
	</body>
</html>
{/if}