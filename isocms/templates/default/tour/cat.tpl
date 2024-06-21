<section class="page_container des_page_container">
    {if $show eq 'CatCountry'}
    {$core->getBlock('des_nav_breadcrumb')}
    {$core->getBlock('des_tailor_made_travel')}
    {$core->getBlock('explore_our_trips')}
    <div class="trvs_goood_reason">
        <div class="container">
            <div class="trvs_goood_reason_intro">
                <div class="header_home_box">
                    <div class="stt">
                        {if $arr_why_trvs_country}
                        <div class="square">0{$count_arr_why_trvs_country}</div>
                        {else}
                        <div class="square">00</div>
                        {/if}
                    </div>
                    <div class="intro">
                        <h2 class="title_home_box">
                            {$clsConfiguration->getValue('TrvsWhyTitle')|html_entity_decode}
                            <div class="title_home_box_data">
                                {$clsTourCategory->getTitle($cat_id)} IN
                                {$clsCountry->getTitle($country_id)}
                            </div>
                        </h2>
                    </div>
                </div>
                <div class="content_home_box">
                    <div class="description">
                        {* {$clsConfiguration->getValue('TrvsWhyDescription')|html_entity_decode} *}
                        {$trvs_why_description|html_entity_decode}
                    </div>
                </div>
            </div>
            <div class="trvs_goood_reason_list">
                <div class="row">
                    {if $arr_why_trvs_country}
                    {foreach from=$arr_why_trvs_country key=key item=item }
                    {assign var="why_trvs_id" value=$item.why_trvs_id}
                    <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                        <div class="trvs_goood_reason_item">
                            <img src="{$clsWhyTravelstyle->getImage($why_trvs_id, 406, 333)}" alt="{$clsWhyTravelstyle->getTitle($why_trvs_id)}" width="406" height="333" loading="lazy">
                            <div class="trvs_goood_reason_item_intro">
                                <div class="trvs_goood_reason_item_title">
                                    <h3>
                                        <a data-fancybox data-src="#modalRS{$key + 1}" href="javascript:;" title="{$clsWhyTravelstyle->getTitle($why_trvs_id)}">
                                            {$clsWhyTravelstyle->getTitle($why_trvs_id)}
                                        </a>
                                    </h3>
                                </div>
                                <div class="trvs_goood_reason_item_stt"> 0{$key + 1} </div>
                                <div style="display: none;" id="modalRS{$key + 1}">
                                    <h3 class="mb-3">{$clsWhyTravelstyle->getTitle($why_trvs_id)}</h3>
                                    <div>{$clsWhyTravelstyle->getContent($why_trvs_id)}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {/foreach}
                    {/if}
                </div>
            </div>
        </div>
    </div>
    {$core->getBlock('des_list_travel_style')}
    <div class="trvs_when_vn">
        <div class="container">
            <div class="header_home_box">
                <h2 class="title_home_box">
                    {$clsConfiguration->getValue('TrvsWhenToGoTitle')|html_entity_decode}
                    {$clsCountry->getTitle($country_id)}
                </h2>
                <div class="description text-center">
                    {$clsConfiguration->getValue('TrvsWhenToGoDescription_1')|html_entity_decode}
                </div>
            </div>
            <div class="content_home_box">
                <div class="tab_month">
                    <div class="row">
                        {if $arr_month_country}
                        {foreach from=$arr_month_country key=key item=item}
                        {assign var="month_country_id" value=$item.month_country_id}
                        {assign var="month_id" value=$item.month_id}

                        <div class="col-4 col-md-4 col-lg-2 month" data-monthid="{$month_id}">
                            <a href="javascript:void(0);" title="{$item.title}">
                                {$item.alias} <img src="{$URL_IMAGES}/destination/when_full.png" alt="{$item.title}" width="32" height="6" loading="lazy" />
                            </a>
                        </div>
                        {/foreach}
                        {/if}
                    </div>
                </div>
                <div class="tab_content">
                    {if $arr_month_country}
                    {foreach from=$arr_month_country key=key item=item}
                    {assign var="month_country_id" value=$item.month_country_id}
                    {assign var="month_id" value=$item.month_id}
                    <div class="tab_content_month hnv_hide" data-monthid="{$month_id}">{$clsMonthCountry->getIntro($month_country_id)}</div>
                    {/foreach}
                    {/if}
                    <a href="#" title="LEARN MORE" class="view_more">
                        View more <i class="fa-solid fa-arrow-right-long"></i>
                    </a>
                </div>
                <div class="tab_destination">
                    <div class="container">
                        <div class="owl-carousel owl-theme owl_when_vn">
                            {if $arr_month_city}
                            {foreach from=$arr_month_city key=key item=item}
                            {assign var="city_id" value=$item.city_id}
                            <div class="item">
                                <div class="des_item">
                                    <div class="des_item_image">
                                        <a href="{$clsCity->getLink($city_id)}" title="{$clsCity->getTitle($city_id)}">
                                            <img src="{$clsCity->getImage($city_id, 424, 315)}" alt="{$clsCity->getTitle($city_id)}" width="424" height="315" loading="lazy" />
                                        </a>
                                    </div>
                                    <div class="info">
                                        <h3><a href="{$clsCity->getLink($city_id)}" title="{$clsCity->getTitle($city_id)}">{$clsCity->getTitle($city_id)}</a></h3>
                                        <p class="map">
                                            <i class="fas fa-map-marker-alt"></i>{$clsCity->getTitle($city_id)}, Vietnam
                                        </p>
                                        <div class="description">
                                            {$clsCity->getIntro($city_id)}
                                        </div>
                                    </div>
                                    <div class="btn_link_act">
                                        <a href="{$clsCity->getLink($city_id)}" title="{$clsCity->getTitle($city_id)}">
                                            <span class="btn_mobile">SEE DETAILS</span>
                                            <i class="fa-solid fa-arrow-right-long"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            {/foreach}
                            {/if}
                        </div>
                    </div>
                </div>
                <div class="when_vn_map">
                    <img src="{$URL_IMAGES}/destination/when_vn_map.png" alt="vector" width="422" height="826" loading="lazy" />
                </div>
            </div>
        </div>
    </div>
    <div class="trvs_list_blog">
        <div class="container">
            <div class="trvs_list_blog_title">
                <h2>
                    {$clsConfiguration->getValue('TrvsBlogTitle')|html_entity_decode}
                    {$clsCountry->getTitle($country_id)}
                </h2>
            </div>
            <div class="trvs_list_blog_content">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                        {if $list_blog}
                        {foreach from=$list_blog key=key item=item}
                        {assign var="blog_id" value=$item.blog_id}
                        {assign var="cat_id" value=$item.cat_id}

                        {if $key eq 0}
                        <div class="box_left">
                            <div class="trvs_item_blog">
                                <div class="trvs_item_blog_image">
                                    <a href="{$clsBlog->getLink($blog_id)}" title="{$clsBlog->getTitle($blog_id)}">
                                        <img src="{$clsBlog->getImage($blog_id, 373, 270)}" alt="{$clsBlog->getTitle($blog_id)}" width="373" height="270">
                                    </a>
                                </div>
                                <div class="trvs_item_blog_intro">
                                    <div class="trvs_item_blog_title">
                                        <h3><a href="{$clsBlog->getLink($blog_id)}" title="{$clsBlog->getTitle($blog_id)}">{$clsBlog->getTitle($blog_id)}</a></h3>
                                    </div>
                                    <div class="trvs_item_blog_description">
                                        {$clsBlog->getIntro($blog_id)}
                                    </div>
                                    <div class="trvs_item_blog_info">
                                        <i class="fa-sharp fa-regular fa-clock"></i>
                                        {$clsBlog->getUpdDate($blog_id)}
                                        | {$clsBlogCategory->getTitle($cat_id)}
                                    </div>
                                    <a href="{$clsBlog->getLink($blog_id)}" class="trvs_item_blog_link" title="{$clsBlog->getTitle($blog_id)}">
                                        LEARN MORE <i class="fa-sharp fa-regular fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        {/if}
                        {/foreach}
                        {/if}
                    </div>
                    <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                        {if $list_blog}
                        {foreach from=$list_blog key=key item=item}
                        {assign var="blog_id" value=$item.blog_id}
                        {assign var="cat_id" value=$item.cat_id}

                        {if $key eq 1}
                        <div class="box_right box_right_top">
                            <div class="trvs_item_blog">
                                <div class="trvs_item_blog_intro order-2 order-md-1">
                                    <div class="trvs_item_blog_title">
                                        <h3><a href="{$clsBlog->getLink($blog_id)}" title="{$clsBlog->getTitle($blog_id)}">{$clsBlog->getTitle($blog_id)}</a></h3>
                                    </div>
                                    <div class="trvs_item_blog_description">
                                        {$clsBlog->getIntro($blog_id)}
                                    </div>
                                    <div class="trvs_item_blog_info">
                                        <i class="fa-sharp fa-regular fa-clock"></i>
                                        {$clsBlog->getUpdDate($blog_id)}
                                        | {$clsBlogCategory->getTitle($cat_id)}
                                    </div>
                                    <a href="{$clsBlog->getLink($blog_id)}" class="trvs_item_blog_link" title="{$clsBlog->getTitle($blog_id)}">
                                        LEARN MORE <i class="fa-sharp fa-regular fa-arrow-right"></i>
                                    </a>
                                </div>
                                <div class="trvs_item_blog_image order-1 order-md-2">
                                    <a href="{$clsBlog->getLink($blog_id)}" title="{$clsBlog->getTitle($blog_id)}">
                                        <img src="{$clsBlog->getImage($blog_id, 373, 270)}" alt="{$clsBlog->getTitle($blog_id)}" width="373" height="270">
                                    </a>
                                </div>
                            </div>
                        </div>
                        {elseif $key eq 2}
                        <div class="box_right box_right_bot">
                            <div class="trvs_item_blog">
                                <div class="trvs_item_blog_image">
                                    <a href="{$clsBlog->getLink($blog_id)}" title="{$clsBlog->getTitle($blog_id)}">
                                        <img src="{$clsBlog->getImage($blog_id, 373, 270)}" alt="{$clsBlog->getLink($blog_id)}" width="373" height="270">
                                    </a>
                                </div>
                                <div class="trvs_item_blog_intro">
                                    <div class="trvs_item_blog_title">
                                        <h3><a href="{$clsBlog->getLink($blog_id)}" title="{$clsBlog->getTitle($blog_id)}">{$clsBlog->getTitle($blog_id)}</a></h3>
                                    </div>
                                    <div class="trvs_item_blog_description">
                                        {$clsBlog->getIntro($blog_id)}
                                    </div>
                                    <div class="trvs_item_blog_info">
                                        <i class="fa-sharp fa-regular fa-clock"></i>
                                        {$clsBlog->getUpdDate($blog_id)}
                                        | {$clsBlogCategory->getTitle($cat_id)}
                                    </div>
                                    <a href="{$clsBlog->getLink($blog_id)}" class="trvs_item_blog_link" title="{$clsBlog->getTitle($blog_id)}">
                                        LEARN MORE <i class="fa-sharp fa-regular fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        {/if}
                        {/foreach}
                        {/if}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="trvs_travel_file">
        <div class="container">
            <div class="trvs_travel_file_title">
                <h2>
                    {$clsConfiguration->getValue('TrvsTravelGuideTitle')|html_entity_decode}
                    <span>{$clsCountry->getTitle($country_id)}</span>
                </h2>
            </div>
            <div class="trvs_travel_file_content">
                <div class="owl-carousel owl-theme trvs_travel_file_carousel">
                    <div class="item">
                        <div class="trvs_travel_file_item">
                            <div class="trvs_travel_file_image">
                                <a href="#" title="TRAVEL FILE">
                                    <img src="https://images.unsplash.com/photo-1447752875215-b2761acb3c5d?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="TRAVEL FILE" width="405" height="352" loading="lazy" />
                                </a>
                            </div>
                            <div class="trvs_travel_file_intro">
                                <h3><a href="#" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </a></h3>
                                <div class="description">
                                    Pulvinar ut molestie imperdiet sed hendrerit maecenas. Amet consectetur pellentesque morbi
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="trvs_travel_file_item">
                            <div class="trvs_travel_file_image">
                                <a href="#" title="TRAVEL FILE">
                                    <img src="https://images.unsplash.com/photo-1715348019723-66f8d6fb4c26?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwzOXx8fGVufDB8fHx8fA%3D%3D" alt="TRAVEL FILE" width="405" height="352" loading="lazy" />
                                </a>
                            </div>
                            <div class="trvs_travel_file_intro">
                                <h3><a href="#" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </a></h3>
                                <div class="description">
                                    Pulvinar ut molestie imperdiet sed hendrerit maecenas. Amet consectetur pellentesque morbi
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="trvs_travel_file_item">
                            <div class="trvs_travel_file_image">
                                <a href="#" title="TRAVEL FILE">
                                    <img src="https://images.unsplash.com/photo-1716847214815-973025e97173?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw0fHx8ZW58MHx8fHx8" alt="TRAVEL FILE" width="405" height="352" loading="lazy" />
                                </a>
                            </div>
                            <div class="trvs_travel_file_intro">
                                <h3><a href="#" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </a></h3>
                                <div class="description">
                                    Pulvinar ut molestie imperdiet sed hendrerit maecenas. Amet consectetur pellentesque morbi
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="trvs_travel_file_item">
                            <div class="trvs_travel_file_image">
                                <a href="#" title="TRAVEL FILE">
                                    <img src="https://images.unsplash.com/photo-1716843140994-77c602d00186?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw0NHx8fGVufDB8fHx8fA%3D%3D" alt="TRAVEL FILE" width="405" height="352" loading="lazy" />
                                </a>
                            </div>
                            <div class="trvs_travel_file_intro">
                                <h3><a href="#" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </a></h3>
                                <div class="description">
                                    Pulvinar ut molestie imperdiet sed hendrerit maecenas. Amet consectetur pellentesque morbi
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {$core->getBlock('why_choose_us')}
    {$core->getBlock('customer_review')}
    <div class="trvs_faq">
        <div class="container">
            <div class="content_trvs_faq">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="trvs_faq_list">
                            <div class="header_trvs_faq">
                                <h2 class="title_trvs_faq">
                                    {$clsConfiguration->getValue('TrvsFAQTitle')|html_entity_decode}
                                    to <span>{$clsCountry->getTitle($country_id)}</span>
                                </h2>
                            </div>
                            <div class="list_faq">
                                <div class="accordion accordion-flush" id="accordionFlushExample">
                                    {if $list_faq_country}
                                    {foreach from=$list_faq_country key=key item=item}
                                    {assign var="faq_id" value=$item.faq_id}
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse{$key}" aria-expanded="false" aria-controls="flush-collapse{$key}">
                                                {$clsFAQ->getTitle($faq_id)}
                                            </button>
                                        </h2>
                                        <div id="flush-collapse{$key}" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                {$clsFAQ->getContent($faq_id)}
                                            </div>
                                        </div>
                                    </div>
                                    {/foreach}
                                    {/if}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="trvs_faq_img">
                            <img src="{$clsCountry->getImageWhy($country_id, 456, 447)}" alt="FAQ Image" width="456" height="447" loading="lazy" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {$core->getBlock('also_like')}
    {/if}
</section>

<script>
    var country_id={$country_id};
</script>
{literal}
<script>
    if ($('.owl_when_vn').length > 0) {
        var $owl = $('.owl_when_vn');
        $owl.owlCarousel({
            lazyLoad: true,
            loop: false,
            margin: 23,
            nav: true,
            navText: ["<i class='fa-solid fa-angle-left'></i>", "<i class='fa-solid fa-angle-right'></i>"],
            dots: false,
            // autoplay: false,
            // autoplayTimeout:3000,	
            // animateOut: 'fadeOut',
            // animateIn: 'fadeIn',
            autoHeight: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 2
                }
            }
        });
    }

    if ($('.trvs_travel_file_carousel').length > 0) {
        var $owl = $('.trvs_travel_file_carousel');
        $owl.owlCarousel({
            lazyLoad: true,
            loop: false,
            margin: 32,
            nav: false,
            navText: ["<i class='fa-solid fa-angle-left'></i>", "<i class='fa-solid fa-angle-right'></i>"],
            dots: false,
            // autoplay: false,
            // autoplayTimeout:3000,	
            // animateOut: 'fadeOut',
            // animateIn: 'fadeIn',
            autoHeight: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        });
    }
</script>
{/literal}

{literal}
<script>
    $(document).ready(function() {
        const today = new Date();
        const monthIndex = today.getMonth(); // Lấy chỉ số tháng (0 - 11)
        const months = [
            "January", "February", "March", "April", "May", "June",
            "July", "August", "September", "October", "November", "December"
        ];
        const currentMonth = months[monthIndex]; // Lấy tên tháng hiện tại
        const currentMonthIndex = monthIndex + 1; // Lấy index tháng hiện tại

        // Lấy danh sách các tháng trong .tab_month
        const tabMonths = $('.tab_month .month');
        // So sánh currentMonthIndex với data-monthid và thêm class nếu bằng nhau
        tabMonths.each(function() {
            const monthId = parseInt($(this).attr('data-monthid'), 10);
            if (monthId === currentMonthIndex) {
                $(this).addClass('month_act');
            }
        });

        // Lấy danh sách các tháng trong .tab_content
        const tabContentMonths = $('.tab_content .tab_content_month');
        // So sánh currentMonthIndex với data-monthid và thêm class nếu bằng nhau
        tabContentMonths.each(function() {
            const monthId = parseInt($(this).attr('data-monthid'), 10);
            if (monthId === currentMonthIndex) {
                $(this).removeClass('hnv_hide').addClass('hnv_show');
            }
        });

        // Thêm sự kiện click vào .tab_month
        tabMonths.click(function() {
            const clickedMonthId = parseInt($(this).attr('data-monthid'), 10);
            // Xóa tất cả .month_act và thêm lại cho phần tử đc click
            tabMonths.each(function() {
                const monthId = parseInt($(this).attr('data-monthid'), 10);
                $(this).removeClass('month_act');
            });
            $(this).addClass('month_act');
            // Hiển thị intro phần tử tương ứng
            tabContentMonths.each(function() {
                const monthId = parseInt($(this).attr('data-monthid'), 10);
                if (monthId === clickedMonthId) {
                    $(this).removeClass('hnv_hide').addClass('hnv_show');
                } else {
                    $(this).addClass('hnv_hide').removeClass('hnv_show');
                }
            });

            $.ajax({
                type: "POST",
                url: path_ajax_script+"/index.php?mod=tour&act=ajWhenToGo",
                data: {
                    country_id: country_id, // Giá trị của country_id
                    month_id: clickedMonthId // Giá trị của clickedMonthId
                },
                // dataType: "dataType",
                success: function (response) {
                    $(".owl_when_vn").hide();
                    $(".tab_destination .container").html(response);

                    if ($('.aj_owl_when_vn').length > 0) {
                        var $owl = $('.aj_owl_when_vn');
                        $owl.owlCarousel({
                            lazyLoad: true,
                            loop: false,
                            margin: 23,
                            nav: true,
                            navText: ["<i class='fa-solid fa-angle-left'></i>", "<i class='fa-solid fa-angle-right'></i>"],
                            dots: false,
                            // autoplay: false,
                            // autoplayTimeout:3000,	
                            // animateOut: 'fadeOut',
                            // animateIn: 'fadeIn',
                            autoHeight: true,
                            responsiveClass: true,
                            responsive: {
                                0: {
                                    items: 1
                                },
                                600: {
                                    items: 1
                                },
                                1000: {
                                    items: 2
                                }
                            }
                        });
                    }
                }
            });
            console.log(country_id);
            console.log(clickedMonthId);
        });
    });
</script>
{/literal}