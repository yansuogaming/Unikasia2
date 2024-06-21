<header class="header-home">
    <div class="bground_header">
        <div class="unika_header unika_true unika_header_2">
            <nav class="unika_header_text">
                <div class="container">
                    <div id="unika_header_top">
                        <div class="unika_header_top_left">
                            <span>Who knows Asia better than us? We are his children, we live there!</span>
                        </div>
                        <div class="unika_header_top_right">
                            <div class="unika_header_top_right_email">
                                <div class="unika_div_img">
                                    <img src="https://unikasia.vietiso.com/isocms/templates/default/skin/images/home/Message.png" alt="ico_mail" class="img_icon">
                                </div>
                                <a href="mailto:info@hanoivoyage.com" title="info@hanoivoyage.com">
                                    info@hanoivoyage.com
                                </a>
                            </div>
                            <div class="unika_header_top_right_whapsapp">
                                <div class="unika_div_img">
                                    <img src="https://unikasia.vietiso.com/isocms/templates/default/skin/images/home/Call.png" alt="ico_phone" class="img_icon">
                                </div>
                                <a href="tel:0983033966" title="0983033966">
                                    Whatsapp: 0983033966
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="unika_header_menu">
                <div class="container">
                    <div class="unika_container">
                        <a href="/" class="logo">
                            <img class="unika_img_logo_1" src="https://unikasia.vietiso.com/isocms/templates/default/skin/images/home/logo_header_2.png" alt="Logo" width="143" height="53">
                            <img class="unika_img_logo_2" src="https://unikasia.vietiso.com/uploads//Demo/image-6.png" alt="Logo" width="143" height="53">
                        </a>
                        <nav class="unika_menu menu navbar navbar-expand-lg bg-body-tertiary">
                            <div class="container-fluid unika_container-fluid">
                                <button class="navbar-toggler unika_navbar-toggler unika_div_img" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <img class="unika_img_navbar_1" src="{$URL_IMAGES}/icon/navbar_icon.svg" alt="Icon">
                                    <img class="unika_img_navbar_2" src="{$URL_IMAGES}/icon/navbar_icon_while.svg" alt="Icon">
                                </button>
                                <div class="collapse navbar-collapse unika_menu_navbar" id="navbarSupportedContent">
                                    <ul class="unika_navbar-nav navbar-nav me-auto mb-2 mb-lg-0">
                                        <div class="nav-item navbar-nav unika_navbar">
                                            <li class="d-flex justify-content-end">
                                                <button class="unika_btn_close_menu div_img">
                                                    <img src="{$URL_IMAGES}/icon/head_close.svg" alt="Icon">
                                                </button>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    DESTINATIONS
                                                    <i class="fas fa-angle-down ms-1" aria-hidden="true"></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <div class="unika_destination">
                                                        <div class="unika_destination_item">
                                                            {section name=i loop=$lstCountry}
                                                            <li>
                                                                <a class="dropdown-item unika_destination_hover" href="{$clsCountryEx->getLink($lstCountry[i].country_id)}" data-class="unika_img{$lstCountry[i].country_id}">{$lstCountry[i].title}</a>
                                                            </li>
                                                            {/section}
                                                        </div>
                                                        <div class="unika_destination_img">
                                                            {section name=i loop=$lstCountry}
                                                            <div class="unika_img_country unika_div_img unika_img{$lstCountry[i].country_id} {if $smarty.section.i.index eq 0} active {/if}">
                                                                <img id="img_{$lstCountry[i].slug}" src="{$lstCountry[i].image_sub}" onerror="this.src='https://unikasia.vietiso.com/isocms/templates/default/skin/images/none_image.png'" alt="{$lstCountry[i].title}" class="active" width="344" height="434">
                                                            </div>
                                                            {/section}
                                                        </div>
                                                    </div>
                                                </ul>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    STAY
                                                    <i class="fas fa-angle-down ms-1" aria-hidden="true"></i>
                                                </a>
                                                <ul class="dropdown-menu unika_stay_dropdown-menu">
                                                    <div class="unika_stay">
                                                        {section name=i loop=$lstCountry}
                                                        <a href="{$clsCountryEx->getLink($lstCountry[i].country_id, " Hotel")}" class="unika_stay_item">
                                                            <div class="unika_div_img unika_stay_img">
                                                                <img src="{$lstCountry[i].image_hotel_sub}" onerror="this.src='{$URL_IMAGES}/none_image.png'" alt="{$lstCountry[i].slug}" width="166" height="261">
                                                            </div>
                                                            <div class="unika_stay_txt">
                                                                {$lstCountry[i].title}
                                                            </div>
                                                        </a>
                                                        {/section}
                                                    </div>
                                                </ul>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    CRUISES
                                                    <i class="fas fa-angle-down ms-1" aria-hidden="true"></i>
                                                </a>
                                                <ul class="dropdown-menu unika_cruises_dropdown-menu">
                                                    <div class="unika_cruises">
                                                        <div class="unika_cruises_left">
                                                            {if $cfg_cate ne ''}
                                                            {foreach from=$cfg_cate key=key item=item}
                                                            {assign var="CountryID" value=$item.info[0]}
                                                            {assign var="Child" value=$item.child}
                                                            <li>
                                                                <div class="unika_dropdown_cruises">
                                                                    <a class="dropdown-item">
                                                                        {$clsCountryEx->getTitle($CountryID)}
                                                                        <i class="fas fa-angle-right ms-1" aria-hidden="true"></i>
                                                                    </a>
                                                                    <div class="unika_cruises_hover active">
                                                                        <div class="unika_hover_content active">
                                                                            {if $Child ne ''}
                                                                            {foreach from=$Child key=k item=i}
                                                                            {assign var="CatCountryID" value=$i.cruise_cat_country_id}
                                                                            {assign var="CatID" value=$i.cat_id}
                                                                            <a class="unika_hover_item" href="{$clsCruiseCatCountry->getLink($CatCountryID)}" data-img="{$clsCruiseCatCountry->getBannerImageVertical($CatCountryID, 344, 434)}">
                                                                                {$clsCruiseCat->getTitle($CatID)}
                                                                            </a>
                                                                            {/foreach}
                                                                            {/if}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            {/foreach}
                                                            {/if}
                                                        </div>
                                                        <div class="unika_cruises_right">
                                                            <div class="unika_right active">
                                                                <div class="unika_cruises_img unika_div_img">
                                                                    <img src="{$clsCruiseCatCountry->getBannerImageVertical($cfg_cate_first, 344, 434)}" alt="Image" width="344" height="434">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </ul>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    BLOG
                                                    <i class="fas fa-angle-down ms-1" aria-hidden="true"></i>
                                                </a>
                                                <ul class="dropdown-menu anika_blog">
                                                    {section name=i loop=$lstCountry}
                                                    <li><a class="dropdown-item" href="{$clsCountryEx->getLink($lstCountry[i].country_id, " Blog")}">{$lstCountry[i].title}</a></li>
                                                    {/section}
                                                </ul>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">ABOUT US</a>
                                            </li>
                                        </div>
                                        <div class="nav-item unika_ul-language">
                                            <div>
                                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <div class="ul-item-unika d-flex align-items-center justify-content-center">
                                                        <div class="unika_div_img">
                                                            <img src="https://unikasia.vietiso.com/isocms/templates/default/skin/images/home/flag_us.png" alt="Icon">
                                                        </div>
                                                        <span class="text-white">Change language</span>
                                                    </div>
                                                    <i class="fas fa-angle-down ms-1" aria-hidden="true"></i>
                                                </a>
                                                <ul class="dropdown-menu unika_language_item">
                                                    <li>
                                                        <a class="dropdown-item ul-item-unika d-flex align-items-center justify-content-start" href="#">
                                                            <div class="unika_div_img">
                                                                <img src="https://unikasia.vietiso.com/isocms/templates/default/skin/images/home/flag_france.png" alt="Icon">
                                                            </div>
                                                            <span class="text-white">France</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <a class="nav-link" href="tel:0983033966">
                                                <div class="ul-item-unika d-flex align-items-center justify-content-center">
                                                    <div class="unika_div_img">
                                                        <img src="images/header/phone.svg" alt="ico_phone" class="img_icon">
                                                    </div>
                                                    <span class="text-white"> Whapsapp: 0983033966 </span>
                                                </div>
                                            </a>
                                            <a class="nav-link" href="mailto:info@hanoivoyage.com">
                                                <div class="ul-item-unika d-flex align-items-center justify-content-center">
                                                    <div class="unika_div_img">
                                                        <img src="images/header/email.svg" alt="ico_mail" class="img_icon">
                                                    </div>
                                                    <span class="text-white"> info@hanoivoyage.com </span>
                                                </div>
                                            </a>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                        <div class="unika_language">
                            <div class="dropdown">
                                <div class="nav-link dropdown-toggle unika_div_img" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="https://unikasia.vietiso.com/isocms/templates/default/skin/images/home/flag_us.png" alt="Icon">
                                    <i class="fas fa-angle-down ms-1" aria-hidden="true"></i>
                                </div>
                                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                    <li>
                                        <a class="dropdown-item unika_div_img" href="#">
                                            <img src="https://unikasia.vietiso.com/isocms/templates/default/skin/images/home/flag_france.png" alt="Icon">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tailor_made_travel">
                            <a href="#">
                                TAILOR-MADE TRAVEL
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {if ($mod eq 'destination' && $act eq 'place')}
        {$core->getBlock('des_header_destination')}
        {/if}
        {if $mod eq 'destination' && $act eq 'travel_style' || $mod eq 'tour' && $act eq 'cat'}
        {$core->getBlock('des_header_travel_style')}
        {/if}
        {if ($mod eq 'destination' && $act eq 'travel_guide') || ($mod eq 'guide' && $act eq 'cat') || ($mod eq 'guide' && $act eq 'search')}
        {$core->getBlock('des_header_travel_guide')}
        {/if}
        {if ($mod eq 'destination' && $act eq 'travel_guide_detail') || ($mod eq 'destination' && $act eq 'attraction') || ($mod eq 'guide' && $act eq 'detail')}
        {$core->getBlock('des_header_travel_guide_detail')}
        {/if}
        {if $mod eq 'homepackage'}
        {$core->getBlock('slider_home')}
        {/if}
        {if $mod eq 'blog' && $act eq 'default'}
        {$core->getBlock('des_header_blog')}
        {/if}
        {if $mod eq 'hotel' && $act eq 'default'}
        {$core->getBlock('des_header_stay')}
        {/if}
        {if $mod eq 'cruise' && $act eq 'cat'}
        {$core->getBlock('des_header_cruise')}
        {/if}
    </div>
</header>
{literal}
<script>
    $(document).ready(function() {
        $('.menu_img_country img').first().addClass('active');
        $('.dropdown-item').hover(
            function() {
                $('.menu_img_country img').removeClass('active');
                let imgId = $(this).data('img');
                $('#' + imgId).addClass('active');
            }
        );
    });
</script>
{/literal}