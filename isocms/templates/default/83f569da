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
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="Description" content="{$global_description_page|truncate:400}" />
    <meta name="google-site-verification" content="{$clsConfiguration->getValue('SiteGoogleVerifyKey')}">
    <link rel="shortcut icon" href="/favicon.ico?v={$upd_version}" type="image/x-icon" />

    {if $mod eq 'hotel'}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="{$URL_CSS}/hotel.css?v={$upd_version}" as="style" />
    <script src="{$URL_JS}/hotel.js?v={$upd_version}"></script>
    <script src="{$URL_JS}/hotelSlide.js?v={$upd_version}"></script>
    {/if}




    <!--
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Knob/1.2.13/jquery.knob.min.js"></script>
-->



    <script src="{$URL_JS}/common-new.js?v={$upd_version}"></script>
    {if $noindex eq 'noindex'}
    <meta name="robots" content="noindex,nofollow" />
    {else}
    <meta name="robots" content="{$index},{$follow},noodp,noydir" />
    {/if}
    <meta name="revisit-after" content="1 days" />
    <meta name="google" content="nositelinkssearchbox" />
    {$core->getBlock('var_javascript')}


    <!--
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/css/bootstrap-datepicker.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.7.1/nouislider.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-rc.0/css/select2.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.css">
-->

    {if IS_COMPRESS_CSS eq 0}
    <link rel="preload" href="{$URL_CSS}/iso.core.css?v={$upd_version}" as="style" />
    <link rel="stylesheet" href="{$URL_CSS}/iso.core.css?v={$upd_version}" />
    {else}
    <link rel="preload" href="{$URL_CSS}/compress/bootstrap5/bootstrap.min.css?v={$upd_version}" as="style" />
    {*
    <link rel="preload" href="{$URL_CSS}/compress/font-awesome.min.css?v={$upd_version}" as="style" />*}
    <link rel="preload" href="{$URL_CSS}/compress/jquery-ui.css?ver={$upd_version}" as="style" />
    <link rel="preload" href="{$URL_CSS}/compress/owl.carousel.min.css?v={$upd_version}" as="style" />
    <link rel="preload" href="{$URL_CSS}/jquery-confirm.min.css?ver={$upd_version}" as="style" />
    <link rel="preload" href="{$URL_CSS}/vietisocms.css?v={$upd_version}" as="style" />
    {*
    <link rel="preload" href="{$URL_CSS}/isotourcms.css?v={$upd_version}" as="style" />*}
    <link rel="preload" href="{$URL_CSS}/header.css?v={$upd_version}" as="style" />
    <link rel="preload" href="{$URL_CSS}/footer.css?v={$upd_version}" as="style" />


    <link rel="stylesheet" href="{$URL_CSS}/compress/bootstrap5/bootstrap.min.css?v={$upd_version}" />
    {*
    <link rel="stylesheet" href="{$URL_CSS}/compress/font-awesome.min.css?v={$upd_version}" />*}
    <link rel="stylesheet" href="{$URL_CSS}/compress/jquery-ui.css?ver={$upd_version}" />
    <link rel="stylesheet" href="{$URL_CSS}/compress/owl.carousel.min.css?v={$upd_version}" />
    <link rel="stylesheet" href="{$URL_CSS}/jquery-confirm.min.css?ver={$upd_version}" />
    <link rel="stylesheet" href="{$URL_CSS}/vietisocms.css?v={$upd_version}" />
    {*
    <link rel="stylesheet" href="{$URL_CSS}/isotourcms.css?v={$upd_version}" />*}
    <link rel="stylesheet" href="{$URL_CSS}/header.css?v={$upd_version}" />
    <link rel="stylesheet" href="{$URL_CSS}/footer.css?v={$upd_version}" />
    {/if}

    <link rel="preload" href="{$URL_CSS}/{$mod}.css?v={$upd_version}" as="style" />
    <link rel="stylesheet" href="{$URL_CSS}/{$mod}.css?v={$upd_version}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="{$URL_CSS}/home/home.css">
    {if $mod eq 'tour'}
    <link rel="stylesheet" href="{$URL_CSS}/tours/tour.css">
    {/if}
    <link rel="stylesheet" href="{$URL_CSS}/common.css" />



    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <!-- Destination -->
    <link rel="stylesheet" href="{$URL_CSS}/hnv_destination.css?v={$upd_version}">
    <link rel="preload" href="{$URL_CSS}/hnv_destination.css?v={$upd_version}">
    <!-- Travel style -->
    <link rel="stylesheet" href="{$URL_CSS}/hnv_travel_style.css?v={$upd_version}">
    <link rel="preload" href="{$URL_CSS}/hnv_travel_style.css?v={$upd_version}">
    <!-- Travel guide -->
    <link rel="stylesheet" href="{$URL_CSS}/hnv_travel_guide.css?v={$upd_version}">
    <link rel="preload" href="{$URL_CSS}/hnv_travel_guide.css?v={$upd_version}">
    <!-- Travel guide detail -->
    <link rel="stylesheet" href="{$URL_CSS}/hnv_travel_guide_detail.css?v={$upd_version}">
    <link rel="preload" href="{$URL_CSS}/hnv_travel_guide_detail.css?v={$upd_version}">
    <!-- Attraction -->
    <link rel="stylesheet" href="{$URL_CSS}/hnv_attraction.css?v={$upd_version}">
    <link rel="preload" href="{$URL_CSS}/hnv_attraction.css?v={$upd_version}">

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


    <!--
	{* <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.8/umd/popper.min.js"></script>*}
	{* <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js"></script>*}
	{* <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>*}
	{* <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js"></script>*}
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
-->
    <script src="https://kit.fontawesome.com/42aa736347.js" crossorigin="anonymous"></script>

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    <link rel="preload" href="{$URL_JS}/vietiso.js?v={$upd_version}" as="script" />
    <script src="{$URL_JS}/vietiso.js?v={$upd_version}"></script>

    <link rel="preload" href="{$URL_JS}/fancybox4/fancybox.css?v={$upd_version}" as="css" />
    <link rel="preload" href="{$URL_JS}/fancybox4/fancybox.umd.js?v={$upd_version}" as="script" />
    <link rel="stylesheet" href="{$URL_JS}/fancybox4/fancybox.css?v={$upd_version}" />
    <script src="{$URL_JS}/fancybox4/fancybox.umd.js?v={$upd_version}"></script>


    {if $mod eq 'member'}
    <link rel="preload" href="{$URL_JS}/jquery.member.validate.js?v={$upd_version}" as="script" />
    <link rel="preload" href="{$URL_JS}/jquery.form.js?v={$upd_version}" as="script" />
    <link rel="preload" href="{$URL_JS}/jquery.login.js?v={$upd_version}" as="script" />
    <script src="{$URL_JS}/jquery.member.validate.js?v={$upd_version}"></script>
    <script src="{$URL_JS}/jquery.form.js?v={$upd_version}"></script>
    <script src="{$URL_JS}/jquery.login.js?v={$upd_version}"></script>
    {/if}
    <script src="{$URL_JS}/common-new.js"></script>
    {if $mod ne 'homepackage' and $mod ne 'home'}
    <script src="//maps.googleapis.com/maps/api/js?key={$API_GOOGLE_MAPS}&libraries=places"></script>
    {/if}

    {$core->getBlock('box_share_social')}
    {if $page eq ''}
    {if $mod eq 'home'}
    <link rel="canonical" href="{$DOMAIN_NAME}" />
    {else}
    <link rel="canonical" href="{$DOMAIN_NAME}{$REQUEST_URI}" />
    {/if}
    {/if}
    <meta property="fb:app_id" content="{$appID}" />
    <script src="https://www.google.com/recaptcha/api.js?hl={$recaptcha_google_lang}&ver={$upd_version}" async defer>
    </script>
    {$core->getBlock('box_google_analytics')}
    {if $uncopy eq 1}
    {$core->getBlock('uncopy')}
    {/if}
    {literal}
    <script type="text/javascript">
        (function(c, l, a, r, i, t, y) {
            c[a] = c[a] || function() {
                (c[a].q = c[a].q || []).push(arguments)
            };
            t = l.createElement(r);
            t.async = 1;
            t.src = "https://www.clarity.ms/tag/" + i;
            y = l.getElementsByTagName(r)[0];
            y.parentNode.insertBefore(t, y);
        })(window, document, "clarity", "script", "lpkeztkllc");
    </script>
    {/literal}
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
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/" + facebook_plugin_lang + "/sdk.js#xfbml=1&version=v2.9";
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
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/" + facebook_plugin_lang + "/sdk/xfbml.customerchat.js";
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