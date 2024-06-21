<header class="header-home">
    <div class="bground_header">
        <div id="header_fixed" style="position: relative">
            <nav class="txt_header1">
                <div class="container">
                    <div class="row border-bottom" id="header_top">
                        <div class="col-md-6 d-flex align-items-center ps-0">
                            <p class="txt_pcust">{$core->get_Lang('Who knows Asia better than us? We are his children, we live there!')}</p>
                        </div>
                        <div class="col-md-6 d-flex align-items-center justify-content-end icon-txt-mail-span pe-0">
                            <img src="{$URL_IMAGES}/home/Message.png" alt="ico_mail" class="img_icon">
                            <a href="mailto:info@hanoivoyage.com">
                                <span class="me-4">info@hanoivoyage.com</span>
                            </a>
                            <img src="{$URL_IMAGES}/home/Call.png" alt="ico_phone" class="img_icon">
                            <a href="tel:0983033966">
                                <span>Whatsapp: 0983033966</span>
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="text-light py-3 nah_bg_header_bot">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 col-md-2 d-flex align-items-center ps-0">
                            <h1><a href="/" title="Home">
                                    <img class="img_logo_voyages_1" src="{$clsConfiguration->getValue('HeaderLogo')}" alt="Logo" width="143" height="53">
                                    <img class="img_logo_voyages_2 d-none" src="{$URL_IMAGES}/home/logo_header_2.png" alt="Logo" width="143" height="53">
                                </a></h1>
                        </div>
                        <div class="col-lg-8 col-md-12 col-sm1-12 d-none d-md-flex align-items-center justify-content-center">
                            <div class="dropdown txt_dropdown">
                                <button class="btn dropdown-toggle txt_dropdown" type="button" data-bs-toggle="dropdown">
                                    {$core->get_Lang('Destinations')} <i class="fas fa-angle-down ms-1"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <div class=" dropdown_destination">
                                        <div class="dropdown-menu_country">
                                            {section name=i loop=$lstCountry}
                                            <a class="dropdown-item" href="{$clsCountryEx->getLink($lstCountry[i].country_id)}" data-img="img_{$lstCountry[i].title}">{$lstCountry[i].title}</a>
                                            {/section}
                                        </div>
                                        <div class="dropdown-menu_img_country">
                                            {section name=i loop=$lstCountry}
                                            <div class="menu_img_country">
                                                <img id="img_{$lstCountry[i].title}" src="{$lstCountry[i].image_sub}" onerror="this.src='{$URL_IMAGES}/none_image.png'" alt="{$lstCountry[i].slug}">
                                            </div>
                                            {/section}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown txt_dropdown">
                                <button class="btn dropdown-toggle txt_dropdown" type="button" data-bs-toggle="dropdown">
                                    {$core->get_Lang('Stay')} <i class="fas fa-angle-down ms-1"></i>
                                </button>
                                <div class="dropdown-menu dropdown-stay-parent">
                                    <div class="dropdown-menu-stay">
                                        {section name=i loop=$lstCountry}
                                        <a class="dropdown-item position-relative overflow-hidden" href="{$clsCountryEx->getLink($lstCountry[i].country_id, " Hotel")}">
                                            <img src="{$lstCountry[i].image_hotel_sub}" onerror="this.src='{$URL_IMAGES}/none_image.png'" alt="{$lstCountry[i].slug}">
                                            <span class="text-light">{$lstCountry[i].title}</span>
                                        </a>
                                        {/section}
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown txt_dropdown">
                                <button class="btn dropdown-toggle txt_dropdown" type="button" data-bs-toggle="dropdown">
                                    {$core->get_Lang('Cruises')} <i class="fas fa-angle-down ms-1"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Vietnam</a>
                                    <a class="dropdown-item" href="#">Cambodia</a>
                                    <a class="dropdown-item" href="#">Laos</a>
                                    <a class="dropdown-item" href="#">Thailand</a>
                                    <a class="dropdown-item" href="#">Myanmar</a>
                                </div>
                            </div>
                            <div class="dropdown txt_dropdown">
                                <button class="btn dropdown-toggle txt_dropdown" type="button" data-bs-toggle="dropdown">
                                    {$core->get_Lang('Blog')} <i class="fas fa-angle-down ms-1"></i>
                                </button>
                                <div class="dropdown-menu">
                                    {section name=i loop=$lstCountry}
                                    <a class="dropdown-item" href="{$clsCountryEx->getLink($lstCountry[i].country_id, " Blog")}">{$lstCountry[i].title}</a>
                                    {/section}
                                </div>
                            </div>
                            <div class="button txt_dropdown">
                                <button class="btn txt_dropdown">{$core->get_Lang('About Us')}</button>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 d-flex align-items-center justify-content-end pe-0">
                            <div class="drop_down ml-3">
                                <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="text-decoration: none;">
                                    <img src="{$URL_IMAGES}/home/flag_us.png" alt="">
                                    <i class="far fa-angle-down text-white ms-2"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="--bs-dropdown-min-width: unset;">
                                    <a class="dropdown-item" href="#"><img src="{$URL_IMAGES}/home/flag_france.png" alt=""></a>
                                </div>
                            </div>
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
        {if $mod eq 'cruise' && $act eq 'cat2'}
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