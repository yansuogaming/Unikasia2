<div class="page_container cru_page_container">
    {* {$core->getBlock('des_nav_breadcrumb')} *}
    <div class="container">
        {*code new*}
        <div class="backcrump d-flex justify-content-start flex-wrap">
            <div class="backcrump-first">You are here:</div>
            <div class="content_backcrump d-flex align-items-center flex-wrap">
                <a class="item-bacruump" href="#">Home</a>
                <div class="div_img">
                    <img src="{URL_IMAGES}/uni_van/images/backcrump.svg" alt="Icon" />
                </div>
                <a class="item-bacruump" href="#">Cruise</a>
                <div class="div_img">
                    <img src="{URL_IMAGES}/uni_van/images/backcrump.svg" alt="Icon" />
                </div>
                <a class="item-bacruump" href="#">Vietnam</a>
                <div class="div_img">
                    <img src="{URL_IMAGES}/uni_van/images/backcrump.svg" alt="Icon" />
                </div>
                <span>Halong Bay cruises</span>
            </div>
        </div>
        {*code new*}
        <div class="d-flex justify-content-center">
            <div class="cruise-content  d-flex justify-content-between  align-items-start">
                <div class="sort_filter d-flex flex-column ">
                    <div class="title  d-flex justify-content-between align-items-center ">
                        <h2>Sort & filter</h2>
                    </div>
                    <div class="list_sort_filter">
                        <div class="d-flex flex-column div_sort_filter">
                            <div class="sort_filter_mobile justify-content-between align-items-center">
                                <h2 class="title_filter ">Sort & filter</h2>
                                <button class="unika_filter_mobile_close div_img">
                                    <img src="{URL_IMAGES}/uni_van/images/cruises/Close.svg" alt="Icon">
                                </button>
                            </div>
                            <div class="item_sort_filter destinations d-flex flex-column  justify-content-start">
                                <div class="title_filter ">Destinations</div>
                                <div class="list_item">
                                    <label class="item_radio">Laos
                                        <input type="radio" name="radio" />
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="item_radio">Vietnam
                                        <input type="radio" name="radio" />
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="item_radio">Cambodia
                                        <input type="radio" name="radio" />
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="item_radio">Thailand
                                        <input type="radio" name="radio" />
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="item_radio">Myanmar
                                        <input type="radio" name="radio" />
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="item_sort_filter duration d-flex justify-content-start flex-column ">
                                <div class="title_filter">Duration</div>
                                <div class="list_item">
                                    <label class="item_checkbox">2 days
                                        <input type="checkbox" />
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="item_checkbox">3 days
                                        <input type="checkbox" />
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="item_sort_filter price d-flex flex-column  justify-content-start">
                                <div class="title_filter">Price</div>
                                <div class="d-flex align-items-center justify-content-between flex-column filter_price">
                                    <div class="value_ranges d-flex justify-content-between flex-wrap align-items-center  width-100">
                                        <div class="item_value">
                                            <input type="number" id="min" value="10" />
                                        </div>
                                        <div class="item_value">
                                            <input type="number" id="max" value="100" />
                                        </div>
                                    </div>
                                    <div class="range-slide">
                                        <div class="slide">
                                            <div class="line" id="line" style="left: 0%; right: 0%"></div>
                                            <span class="thumb" id="thumbMin" style="left: 0%"></span>
                                            <span class="thumb" id="thumbMax" style="left: 100%"></span>
                                        </div>
                                        <input id="rangeMin" type="range" max="100" min="10" step="5" value="0" />
                                        <input id="rangeMax" type="range" max="100" min="10" step="5" value="100" />
                                    </div>
                                </div>
                            </div>
                            <div class="item_sort_filter property_rating d-flex flex-column  justify-content-start">
                                <div class="title_filter">Property rating</div>
                                <div class="list_item list_rank_star">
                                    <label class="item_checkbox">Unrated
                                        <input type="checkbox" />
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="item_checkbox">
                                        <div class="d-flex align-items-center justify-content-start ">
                                            <span>3</span>
                                            <div class="div_img">
                                                <img src="{URL_IMAGES}/uni_van/images/star.svg" alt="Image" />
                                            </div>
                                        </div>
                                        <input type="checkbox" />
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="item_checkbox">
                                        <div class="d-flex align-items-center justify-content-start ">
                                            <span>4</span>
                                            <div class="div_img">
                                                <img src="{URL_IMAGES}/uni_van/images/star.svg" alt="Image" />
                                            </div>
                                        </div>
                                        <input type="checkbox" />
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="item_checkbox">
                                        <div class="d-flex align-items-center justify-content-start ">
                                            <span>5</span>
                                            <div class="div_img">
                                                <img src="{URL_IMAGES}/uni_van/images/star.svg" alt="Image" />
                                            </div>
                                        </div>
                                        <input type="checkbox" />
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="item_checkbox">
                                        <div class="d-flex align-items-center justify-content-start ">
                                            <span>6</span>
                                            <div class="div_img">
                                                <img src="{URL_IMAGES}/uni_van/images/star.svg" alt="Image" />
                                            </div>
                                        </div>
                                        <input type="checkbox" />
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="item_sort_filter cruises_type d-flex flex-column  justify-content-start">
                                <div class="title_filter">Cruises type</div>
                                <div class="d-flex flex-column  justify-content-start">
                                    <div class="list_item">
                                        <label class="item_checkbox">Bai Tu Long Bay Cruises
                                            <input type="checkbox" />
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="item_checkbox">Lan Ha Bay Cruises
                                            <input type="checkbox" />
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="item_checkbox">Luxury Cruises Halong
                                            <input type="checkbox" />
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="item_checkbox">Halong Bay Classic Cruises
                                            <input type="checkbox" />
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="item_checkbox">Private Cruises
                                            <input type="checkbox" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <button class="view_more_type">
                                        View more
                                    </button>
                                </div>
                            </div>
                            <div class="item_sort_filter cabins d-flex flex-column  justify-content-start">
                                <div class="title_filter">Number of cabins</div>
                                <div class="list_item">
                                    <label class="item_checkbox">1 - 5 cabins
                                        <input type="checkbox" />
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="item_checkbox">6 - 10 cabins
                                        <input type="checkbox" />
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="item_checkbox">11 - 20 cabins
                                        <input type="checkbox" />
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="item_checkbox">21 - 30 cabins
                                        <input type="checkbox" />
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="item_checkbox">31+ cabins
                                        <input type="checkbox" />
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cruises">
                    <div class="cruises_title d-flex flex-column ">
                        <h2>{$clsCruiseCat->getTitle($cruise_cat_id)}: {$totalRecord} cruises found</h2>
                        <span>
                            100% customizable {$clsCruiseCat->getTitle($cruise_cat_id)}. Idea to compose your trip
                            as you wish
                        </span>
                    </div>
                    <div class="list_cruises d-flex flex-column ">
                        {if $listCruise}
                        {foreach from=$listCruise key=key item=item}
                        {assign var="CruiseID" value=$item.cruise_id}
                        {assign var="CruiseTitle" value=$clsCruise->getTitle($CruiseID)}
                        {assign var="CruiseLink" value=$clsCruise->getLink($CruiseID)}

                        <div class="item_cruises d-flex  justify-content-between align-items-start">
                            <a href="{$CruiseLink}" title="{$CruiseTitle}" class="div_img img_cruises">
                                <img src="{$clsCruise->getImage($CruiseID, 353, 244)}" alt="{$CruiseTitle}" width="353" height="244" />
                            </a>
                            <div class="content_cruise d-flex ">
                                <div class="content d-flex flex-column ">
                                    <div class="d-flex flex-column unika_title_star">
                                        <h3>
                                            <a href="{$CruiseLink}" class="title ellipsis_2" title="{$CruiseTitle}">
                                                {$CruiseTitle}
                                            </a>
                                        </h3>
                                        <div class="rating d-flex justify-content-start  align-items-center">
                                            {if $item.star_number}
                                            {section name=i loop=$item.star_number}
                                            <div class="div_img">
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                            </div>
                                            {/section}
                                            {/if}
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-start ">
                                        <div class="div_img img_icon_content">
                                            <img src="{URL_IMAGES}/uni_van/images/cruises/location.svg" alt="Icon" />
                                        </div>
                                        <div class="d-flex  ellipsis_3 txt_content">
                                            <span>Place to visit:</span> Hanoi
                                            - Lan Ha Bay - Dark & Light Cave - Ao Ech Area - Halong
                                            International Cruise Port - Hanoi
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center ">
                                        <div class="div_img img_icon_content">
                                            <img src="{URL_IMAGES}/uni_van/images/cruises/cabin.svg" alt="Icon" />
                                        </div>
                                        <div class="d-flex  justify-content-start ellipsis_1 txt_content">
                                            <span>Cabin:</span> {$item.total_cabin}
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center ">
                                        <div class="div_img img_icon_content">
                                            <img src="{URL_IMAGES}/uni_van/images/cruises/material.svg" alt="Icon" />
                                        </div>
                                        <div class="d-flex  justify-content-start ellipsis_1 txt_content">
                                            <span>Material:</span> Wooden junk
                                        </div>
                                    </div>
                                    <div class="other d-flex flex-column">
                                        <div class="d-flex justify-content-start align-items-center ">
                                            <div class="div_img img_icon_content">
                                                <img src="{URL_IMAGES}/uni_van/images/cruises/true.svg" alt="icon" />
                                            </div>
                                            <span class="ellipsis_1 span_txt">Breakfast included</span>
                                        </div>
                                        <div class="d-flex justify-content-start align-items-center ">
                                            <div class="div_img img_icon_content">
                                                <img src="{URL_IMAGES}/uni_van/images/cruises/true.svg" alt="icon" />
                                            </div>
                                            <span class="ellipsis_1 span_txt">No prepayment needed – pay at the
                                                property</span>
                                        </div>
                                    </div>
                                    <div class="highlights d-flex justify-content-start align-items-center flex-wrap">
                                        <span>Highlights</span>
                                        <div class="list_icon d-flex justify-content-start align-items-center  flex-wrap">
                                            <div class="div_img img_highlight">
                                                <img src="{URL_IMAGES}/uni_van/images/cruises/icon1.svg" alt="Icon" />
                                                <span class="txt_icon ">
                                                    2 large double beds 
                                                </span>
                                            </div>
                                            <div class="div_img img_highlight">
                                                <img src="{URL_IMAGES}/uni_van/images/cruises/icon2.svg" alt="Icon" />
                                                <span class="txt_icon ">
                                                    2 large double beds 
                                                </span>
                                            </div>
                                            <div class="div_img img_highlight">
                                                <img src="{URL_IMAGES}/uni_van/images/cruises/icon3.svg" alt="Icon" />
                                                <span class="txt_icon ">
                                                    2 large double beds 
                                                </span>
                                            </div>
                                            <div class="div_img img_highlight">
                                                <img src="{URL_IMAGES}/uni_van/images/cruises/icon4.svg" alt="Icon" />
                                                <span class="txt_icon ">
                                                    2 large double beds 
                                                </span>
                                            </div>
                                            <div class="div_img img_highlight">
                                                <img src="{URL_IMAGES}/uni_van/images/cruises/icon5.svg" alt="Icon" />
                                                <span class="txt_icon ">
                                                    2 large double beds 
                                                </span>
                                            </div>
                                            <div class="icon_other ">+6</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="money_cruise d-flex flex-column align-items-end justify-content-between">
                                    <div class="reviews d-flex justify-content-end align-items-end flex-column">
                                        <div class="d-flex justify-content-end align-items-center item_evaluate">
                                            <div class="d-flex flex-column justify-content-end ">
                                                <span class="span_review">Very good</span>
                                                <span class="span_quantity">(9 reviews)</span>
                                            </div>
                                            <div class="average_reviews d-flex align-items-center justify-content-center">
                                                4.5
                                            </div>
                                        </div>
                                        <div class="price d-flex flex-column">
                                            <span class="txt_money">Price per person from</span>
                                            <div class="txt_money_cruise d-flex justify-content-end align-items-end">
                                                US
                                                <span>$1250</span>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="{$CruiseLink}" class="btn_explore d-flex justify-content-center align-items-center" title="{$CruiseTitle}">
                                        Explore
                                        <div class="div_img">
                                            <img src="{URL_IMAGES}/uni_van/images/btn_contact.svg" alt="Icon" />
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        {/foreach}
                        {/if}


                    </div>
                    <div class="recently-viewed d-flex flex-column justify-content-start align-items-start ">
                        <h3 class="title_recently">
                            Recently viewed
                        </h3>
                        <div class="recently_viewed swiper">
                            <div class="swiper-wrapper">
                                <div class="item_recently_viewed swiper-slide">
                                    <div class="item-recently_viewed d-flex flex-column ">
                                        <a class="div_img img_item">
                                            <img src="{URL_IMAGES}/uni_van/images/interested1.png" width="296" height="200" alt="Image" />
                                        </a>
                                        <div class="content_interested d-flex flex-column ">
                                            <h3>
                                                <a class=" ellipsis_2  title_recently_viewed" href="#">
                                                    Waldschenke Stendenitz Übernachten im Wald am See
                                                </a>
                                            </h3>
                                            <div class="rating d-flex align-items-center ">
                                                <div class="div_img">
                                                    <img src="{URL_IMAGES}/uni_van/images/star.svg" alt="Icon" />
                                                </div>
                                                <div class="div_img">
                                                    <img src="{URL_IMAGES}/uni_van/images/star.svg" alt="Icon" />
                                                </div>
                                                <div class="div_img">
                                                    <img src="{URL_IMAGES}/uni_van/images/star.svg" alt="Icon" />
                                                </div>
                                                <div class="div_img">
                                                    <img src="{URL_IMAGES}/uni_van/images/star.svg" alt="Icon" />
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between  align-items-start">
                                                <div class="div_img img_recently_viewed">
                                                    <img src="{URL_IMAGES}/uni_van/images/location.svg" alt="Icon" />
                                                </div>
                                                <div class="d-flex  ellipsis_3 txt_recently_viewed">
                                                    <span>Place to visit: </span>
                                                    Hanoi - Lan Ha Bay - Dark & Light Cave - Ao Ech Area -
                                                    Halong International Cruise Port - Hanoi
                                                </div>
                                            </div>
                                            <div class="viewed d-flex align-items-center justify-content-start ">
                                                <div class="count_reviews d-flex align-items-center justify-content-center">
                                                    4.5
                                                </div>
                                                <span class="span1">Very good</span>
                                                <span class="span2">(9 reviews)</span>
                                            </div>
                                            <div class="money d-flex justify-content-end align-items-end flex-wrap">
                                                <span class="txt_money_viewed">Price per person from</span>
                                                <div class="infor_money d-flex justify-content-end align-items-end flex-wrap ">
                                                    <span class="type_money">US</span>
                                                    <span class="cuise_moeny_viewed">$650</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item_recently_viewed swiper-slide">
                                    <div class="item-recently_viewed d-flex flex-column ">
                                        <a class="div_img img_item">
                                            <img src="{URL_IMAGES}/uni_van/images/interested1.png" width="296" height="200" alt="Image" />
                                        </a>
                                        <div class="content_interested d-flex flex-column ">
                                            <h3>
                                                <a class=" ellipsis_2  title_recently_viewed" href="#">
                                                    Waldschenke Stendenitz Übernachten im Wald am See
                                                </a>
                                            </h3>
                                            <div class="rating d-flex align-items-center ">
                                                <div class="div_img">
                                                    <img src="{URL_IMAGES}/uni_van/images/star.svg" alt="Icon" />
                                                </div>
                                                <div class="div_img">
                                                    <img src="{URL_IMAGES}/uni_van/images/star.svg" alt="Icon" />
                                                </div>
                                                <div class="div_img">
                                                    <img src="{URL_IMAGES}/uni_van/images/star.svg" alt="Icon" />
                                                </div>
                                                <div class="div_img">
                                                    <img src="{URL_IMAGES}/uni_van/images/star.svg" alt="Icon" />
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between  align-items-start">
                                                <div class="div_img img_recently_viewed">
                                                    <img src="{URL_IMAGES}/uni_van/images/location.svg" alt="Icon" />
                                                </div>
                                                <div class="d-flex  ellipsis_3 txt_recently_viewed">
                                                    <span>Place to visit: </span>
                                                    Hanoi - Lan Ha Bay - Dark & Light Cave - Ao Ech Area -
                                                    Halong International Cruise Port - Hanoi
                                                </div>
                                            </div>
                                            <div class="viewed d-flex align-items-center justify-content-start ">
                                                <div class="count_reviews d-flex align-items-center justify-content-center">
                                                    4.5
                                                </div>
                                                <span class="span1">Very good</span>
                                                <span class="span2">(9 reviews)</span>
                                            </div>
                                            <div class="money d-flex justify-content-end align-items-end flex-wrap">
                                                <span class="txt_money_viewed">Price per person from</span>
                                                <div class="infor_money d-flex justify-content-end align-items-end flex-wrap ">
                                                    <span class="type_money">US</span>
                                                    <span class="cuise_moeny_viewed">$650</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item_recently_viewed swiper-slide">
                                    <div class="item-recently_viewed d-flex flex-column ">
                                        <a class="div_img img_item">
                                            <img src="{URL_IMAGES}/uni_van/images/interested1.png" width="296" height="200" alt="Image" />
                                        </a>
                                        <div class="content_interested d-flex flex-column ">
                                            <h3>
                                                <a class=" ellipsis_2  title_recently_viewed" href="#">
                                                    Waldschenke Stendenitz Übernachten im Wald am See
                                                </a>
                                            </h3>
                                            <div class="rating d-flex align-items-center ">
                                                <div class="div_img">
                                                    <img src="{URL_IMAGES}/uni_van/images/star.svg" alt="Icon" />
                                                </div>
                                                <div class="div_img">
                                                    <img src="{URL_IMAGES}/uni_van/images/star.svg" alt="Icon" />
                                                </div>
                                                <div class="div_img">
                                                    <img src="{URL_IMAGES}/uni_van/images/star.svg" alt="Icon" />
                                                </div>
                                                <div class="div_img">
                                                    <img src="{URL_IMAGES}/uni_van/images/star.svg" alt="Icon" />
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between  align-items-start">
                                                <div class="div_img img_recently_viewed">
                                                    <img src="{URL_IMAGES}/uni_van/images/location.svg" alt="Icon" />
                                                </div>
                                                <div class="d-flex  ellipsis_3 txt_recently_viewed">
                                                    <span>Place to visit: </span>
                                                    Hanoi - Lan Ha Bay - Dark & Light Cave - Ao Ech Area -
                                                    Halong International Cruise Port - Hanoi
                                                </div>
                                            </div>
                                            <div class="viewed d-flex align-items-center justify-content-start ">
                                                <div class="count_reviews d-flex align-items-center justify-content-center">
                                                    4.5
                                                </div>
                                                <span class="span1">Very good</span>
                                                <span class="span2">(9 reviews)</span>
                                            </div>
                                            <div class="money d-flex justify-content-end align-items-end flex-wrap">
                                                <span class="txt_money_viewed">Price per person from</span>
                                                <div class="infor_money d-flex justify-content-end align-items-end flex-wrap ">
                                                    <span class="type_money">US</span>
                                                    <span class="cuise_moeny_viewed">$650</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item_recently_viewed swiper-slide">
                                    <div class="item-recently_viewed d-flex flex-column ">
                                        <a class="div_img img_item">
                                            <img src="{URL_IMAGES}/uni_van/images/interested1.png" width="296" height="200" alt="Image" />
                                        </a>
                                        <div class="content_interested d-flex flex-column ">
                                            <h3>
                                                <a class=" ellipsis_2  title_recently_viewed" href="#">
                                                    Waldschenke Stendenitz Übernachten im Wald am See
                                                </a>
                                            </h3>
                                            <div class="rating d-flex align-items-center ">
                                                <div class="div_img">
                                                    <img src="{URL_IMAGES}/uni_van/images/star.svg" alt="Icon" />
                                                </div>
                                                <div class="div_img">
                                                    <img src="{URL_IMAGES}/uni_van/images/star.svg" alt="Icon" />
                                                </div>
                                                <div class="div_img">
                                                    <img src="{URL_IMAGES}/uni_van/images/star.svg" alt="Icon" />
                                                </div>
                                                <div class="div_img">
                                                    <img src="{URL_IMAGES}/uni_van/images/star.svg" alt="Icon" />
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between  align-items-start">
                                                <div class="div_img img_recently_viewed">
                                                    <img src="{URL_IMAGES}/uni_van/images/location.svg" alt="Icon" />
                                                </div>
                                                <div class="d-flex  ellipsis_3 txt_recently_viewed">
                                                    <span>Place to visit: </span>
                                                    Hanoi - Lan Ha Bay - Dark & Light Cave - Ao Ech Area -
                                                    Halong International Cruise Port - Hanoi
                                                </div>
                                            </div>
                                            <div class="viewed d-flex align-items-center justify-content-start ">
                                                <div class="count_reviews d-flex align-items-center justify-content-center">
                                                    4.5
                                                </div>
                                                <span class="span1">Very good</span>
                                                <span class="span2">(9 reviews)</span>
                                            </div>
                                            <div class="money d-flex justify-content-end align-items-end flex-wrap">
                                                <span class="txt_money_viewed">Price per person from</span>
                                                <div class="infor_money d-flex justify-content-end align-items-end flex-wrap ">
                                                    <span class="type_money">US</span>
                                                    <span class="cuise_moeny_viewed">$650</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center unika_blogs">
        <div class="container">
            <div class="blogs d-flex justify-content-center  flex-column align-items-center">
                <h2 class="title_2">Re<span>views</span></h2>
                <div class="reviews2 swiper">
                    <div class="swiper-wrapper">
                        <div class="item_review d-flex flex-column swiper-slide">
                            <div class="div_img img_review">
                                <img src="{URL_IMAGES}/uni_van/images/review1.png" alt="Image" />
                            </div>
                            <div class="content_review d-flex flex-column ">
                                <div class="rating_reviews d-flex align-items-center ">
                                    <div class="div_img">
                                        <img src="{URL_IMAGES}/uni_van/images/star.svg" alt="Icon" />
                                    </div>
                                    <div class="div_img">
                                        <img src="{URL_IMAGES}/uni_van/images/star.svg" alt="Icon" />
                                    </div>
                                    <div class="div_img">
                                        <img src="{URL_IMAGES}/uni_van/images/star.svg" alt="Icon" />
                                    </div>
                                    <div class="div_img">
                                        <img src="{URL_IMAGES}/uni_van/images/star.svg" alt="Icon" />
                                    </div>
                                </div>
                                <h3>
                                    <a class=" ellipsis_2  title_reviews" href="#">Waldschenke 10 Days
                                        Vietnam
                                    </a>
                                </h3>
                                <div class="ellipsis_5 unika_blog_content">
                                    Right from the start, I must commend this travel agency for
                                    their exceptional attention to detail. We embarked to a 10-day
                                    trip to Cambodia and every single request and preference we
                                    provided was meticulously considered and incorporated...
                                </div>
                                <div class="unika_author_blog d-flex align-items-center justify-content-start ">
                                    <div class="div_img img_review_author">
                                        <img src="{URL_IMAGES}/uni_van/images/review_user.png" alt="Image" />
                                    </div>
                                    <div class="content_author d-flex flex-column align-items-start justify-content-center ">
                                        <div class=" ellipsis_1">Fritz</div>
                                        <span class=" ">
                                            10 Feb, 2024
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item_review d-flex flex-column swiper-slide">
                            <div class="div_img img_review">
                                <img src="{URL_IMAGES}/uni_van/images/review1.png" alt="Image" />
                            </div>
                            <div class="content_review d-flex flex-column ">
                                <div class="rating_reviews d-flex align-items-center ">
                                    <div class="div_img">
                                        <img src="{URL_IMAGES}/uni_van/images/star.svg" alt="Icon" />
                                    </div>
                                    <div class="div_img">
                                        <img src="{URL_IMAGES}/uni_van/images/star.svg" alt="Icon" />
                                    </div>
                                    <div class="div_img">
                                        <img src="{URL_IMAGES}/uni_van/images/star.svg" alt="Icon" />
                                    </div>
                                    <div class="div_img">
                                        <img src="{URL_IMAGES}/uni_van/images/star.svg" alt="Icon" />
                                    </div>
                                </div>
                                <h3>
                                    <a class=" ellipsis_2  title_reviews" href="#">Waldschenke 10 Days Vietnam
                                    </a>
                                </h3>
                                <div class="ellipsis_5 unika_blog_content">
                                    Right from the start, I must commend this travel agency for
                                    their exceptional attention to detail. We embarked to a 10-day
                                    trip to Cambodia and every single request and preference we
                                    provided was meticulously considered and incorporated...
                                </div>
                                <div class="unika_author_blog d-flex align-items-center justify-content-start ">
                                    <div class="div_img img_review_author">
                                        <img src="{URL_IMAGES}/uni_van/images/review_user.png" alt="Image" />
                                    </div>
                                    <div class="content_author d-flex flex-column align-items-start justify-content-center ">
                                        <div class=" ellipsis_1">Fritz</div>
                                        <span class=" ">
                                            10 Feb, 2024
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item_review d-flex flex-column swiper-slide">
                            <div class="div_img img_review">
                                <img src="{URL_IMAGES}/uni_van/images/review1.png" alt="Image" />
                            </div>
                            <div class="content_review d-flex flex-column ">
                                <div class="rating_reviews d-flex align-items-center ">
                                    <div class="div_img">
                                        <img src="{URL_IMAGES}/uni_van/images/star.svg" alt="Icon" />
                                    </div>
                                    <div class="div_img">
                                        <img src="{URL_IMAGES}/uni_van/images/star.svg" alt="Icon" />
                                    </div>
                                    <div class="div_img">
                                        <img src="{URL_IMAGES}/uni_van/images/star.svg" alt="Icon" />
                                    </div>
                                    <div class="div_img">
                                        <img src="{URL_IMAGES}/uni_van/images/star.svg" alt="Icon" />
                                    </div>
                                </div>
                                <h3>
                                    <a class=" ellipsis_2  title_reviews" href="#">Waldschenke 10 Days
                                        Vietnam
                                    </a>
                                </h3>
                                <div class="ellipsis_5 unika_blog_content">
                                    Right from the start, I must commend this travel agency for
                                    their exceptional attention to detail. We embarked to a 10-day
                                    trip to Cambodia and every single request and preference we
                                    provided was meticulously considered and incorporated...
                                </div>
                                <div class="unika_author_blog d-flex align-items-center justify-content-start ">
                                    <div class="div_img img_review_author">
                                        <img src="{URL_IMAGES}/uni_van/images/review_user.png" alt="Image" />
                                    </div>
                                    <div class="content_author d-flex flex-column align-items-start justify-content-center ">
                                        <div class=" ellipsis_1">Fritz</div>
                                        <span class=" ">
                                            10 Feb, 2024
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="unika_ready_start">
        <div class="unika_start">
            <div class="unika_title_ready">
                SO, READY TO START? 
            </div>
            <div class="unika_content_ready">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Arcu, bibendum purus scelerisque ipsum id. Fringilla ipsum elementum aliquam aliquam sed duis feugiat molestie nisl. Sed sit cursus vulputate dignissim.
            </div>
            <a href="" class="unika_link_ready">
                LET’S PLAN YOUR TRIP
                <div class="div_img">
                    <img src="{URL_IMAGES}/uni_van/images/btn_contact.svg" alt="Icon">
                </div>
            </a>
        </div>
    </div>
    <div class="unika_social">
        <div class="unika_social_icons">
            <a href="https://www.youtube.com/user/vietiso" class="unika_social_icon">
                <i class="fa-brands fa-youtube" aria-hidden="true"></i>
            </a>
            <a href="https://x.com/vietiso" class="unika_social_icon">
                <i class="fa-brands fa-twitter"></i>
            </a>
            <a href="https://www.instagram.com/unikaisa" class="unika_social_icon">
                <i class="fa-brands fa-instagram" aria-hidden="true"></i>
            </a>
            <a href="https://www.facebook.com/unikasia" class="unika_social_icon">
                <i class="fa-brands fa-facebook-f" aria-hidden="true"></i>
            </a>
        </div>
    </div>
</div>

{literal}
<style>
    .cru_header {
        padding-top: 127px;
        padding-bottom: 182px;
    }

    .value_ranges {
        width: 100%;
    }

    .cruise-content {
        float: left;
        width: 100%;
    }

    .content_page .div_img {
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        border-radius: 8px;
    }

    img {
        max-width: 100%;
        max-height: 100%;
        -o-object-fit: cover !important;
        object-fit: cover !important;
        -o-object-position: center center !important;
        object-position: center center !important;
    }

    .ellipsis_1 {
        display: -webkit-box;
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
        text-align: left;
    }

    .ellipsis_2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
        text-align: left;
    }

    .ellipsis_3 {
        display: -webkit-box !important;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
        text-align: left;
    }

    .ellipsis_4 {
        display: -webkit-box;
        -webkit-line-clamp: 4;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
        text-align: left;
    }

    .ellipsis_5 {
        display: -webkit-box;
        -webkit-line-clamp: 5;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
        text-align: left;
    }

    .page_container {
        float: left;
        width: 100%;
        border-radius: 40px 40px 0px 0px;
        margin-top: -52px;
        z-index: 1;
        position: relative;
        background: #FFFFFF;
    }

    /* custom css radio */

    /* The container */
    .item_radio {
        display: block;
        position: relative;
        padding-left: 35px;
        margin-bottom: 16px;
        padding-top: 1px;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        font-size: 16px;
        font-weight: 500;
        color: #434B5C;
        line-height: 24px;
    }

    /* Hide the browser's default radio button */
    .item_radio input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
    }

    /* Create a custom radio button */
    .item_radio .checkmark {
        position: absolute;
        top: 0;
        left: 0;
        height: 24px;
        width: 24px;
        background-color: #FFFFFF;
        border-radius: 50%;
        border: 1px solid #F0F0F0;
    }

    /* When the radio button is checked, add a blue background */
    .item_radio input:checked~.checkmark {
        background-color: #FFA718;
        border: unset;
    }

    /* Show the indicator (dot/circle) when checked */
    .item_radio input:checked~.checkmark:after {
        display: block;
    }

    /* Style the indicator (dot/circle) */
    .item_radio .checkmark:after {
        top: 8px;
        left: 8px;
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: white;
    }

    /* Custom checkbox */
    /* The container */
    .item_checkbox {
        display: block;
        position: relative;
        padding-left: 35px;
        margin-bottom: 16px;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        color: #434B5C;
        padding-top: 1px;
    }

    /* Hide the browser's default checkbox */
    .item_checkbox input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
        height: 0;
        width: 0;
    }

    /* Create a custom checkbox */
    .item_checkbox .checkmark {
        position: absolute;
        top: 0;
        left: 0;
        height: 24px;
        width: 24px;
        background-color: #FFFFFF;
        border: 1px solid #F0F0F0;
        border-radius: 4px;
    }

    /* When the checkbox is checked, add a blue background */
    .item_checkbox input:checked~.checkmark {
        background-color: #FFA718;
    }

    /* Create the checkmark/indicator (hidden when not checked) */
    .checkmark:after {
        content: "";
        position: absolute;
        display: none;
    }

    /* Show the checkmark when checked */
    .item_checkbox input:checked~.checkmark:after {
        display: block;
    }

    /* Style the checkmark/indicator */
    .item_checkbox .checkmark:after {
        left: 9px;
        top: 5px;
        width: 5px;
        height: 10px;
        border: solid white;
        border-width: 0 3px 3px 0;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
    }

    .backcrump {
        padding: 40px 0;
    }

    .sort_filter {
        max-width: 296px;
        width: 100%;
        gap: 32px;
    }


    .sort_filter .title {
        padding: 12px;
        background-color: #F0F0F0;
        border-radius: 8px;
    }

    .title_filter {
        font-size: 24px;
        line-height: 36px;
        font-weight: 600;
    }

    .view_more_type {
        background: unset;
        border: unset;
        text-align: left;
    }

    .item_sort_filter {
        padding-bottom: 32px;
        border-bottom: 1px solid #D3DCE1;
        gap: 32px;
    }

    .cruises {
        width: calc(100% - 296px - 32px);
    }

    .cruises_title h2 {
        font-size: 24px;
        line-height: 36px;
        font-weight: 600;
        color: var(--Neutral-1, #111D37);
    }

    .txt_content {
        width: calc(100% - 20px - 6px);
        margin-left: 6px;
        font-size: 14px;
        font-style: normal;
        font-weight: 400;
        line-height: 20px;
        color: var(--Neutral-2, #434B5C);
    }

    .img_icon_content {
        width: 20px;
        height: 20px;
    }

    .txt_icon {
        display: none;
        background: #111D37;
        width: max-content;
        position: absolute;
        top: -30px;
        padding: 2px 8px;
        border-radius: 3px;
        color: #FFFFFF;
        font-size: 12px;
        font-weight: 400;
        line-height: 16px;
    }

    .content_cruise .title {
        font-size: 24px;
        line-height: 36px;
        font-weight: 600;
        color: var(--Neutral-1, #111D37);
        transition: all .3s ease-in-out;
    }

    .img_highlight {
        width: 20px;
        height: 20px;
        position: relative;
        overflow: unset;
    }

    .img_highlight:hover .txt_icon {
        display: block;
    }

    .icon_other {
        padding: 4px;
        background: #e5edf6;
        border-radius: 2px;
        color: #004EA8;
        font-size: 12px;
        line-height: 16px;
        font-weight: 500;
    }

    .money_cruise {
        background: #004EA8;
        padding: 12px;
        border-radius: 8px;
        max-width: 174px;
        width: 100%;
        height: max-content;
        gap: 13px;
    }

    .average_reviews {
        padding: 5px;
        min-width: 32px;
        height: 32px;
        border-radius: 8px 8px 8px 0;
        background: #FFFFFF;
        font-size: 16px;
        font-style: normal;
        font-weight: 600;
        line-height: 24px;
        color: #004EA8;
    }

    .img_cruises {
        max-width: 353px;
        border-radius: 8px;
    }

    .content_cruise {
        width: 100%;
        gap: 20px;
    }

    .list_cruises {
        padding: 32px 0;
        gap: 32px;
    }

    .btn_explore {
        background: #FFA718;
        padding: 12px 0;
        border-radius: 8px;
        gap: 12px;
        color: #FFFFFF;
        width: 100%;
        transition: all .3s ease-in-out;
        /*code new*/
    }

    /*code new*/
    .btn_explore:hover {
        background: #E88F00;
    }

    .unika_link_ready:hover {
        border: 1px solid white
    }

    /*code new*/

    .content_cruise .content {
        width: calc(100% - 194px);
        gap: 16px;
    }

    .item_cruises {
        padding: 11px 12px;
        border: 1px solid #F0F0F0;
        border-radius: 8px;
        gap: 18px;
    }

    .link_pagination {
        color: #D3DCE1;
    }

    .link_pagination.active {
        color: #434B5C;
        padding: 2px 9px;
        background: #ffedd1;
        border-radius: 3px;
    }

    .img_item {
        position: relative;
        width: 100%;
        border-radius: 8px;
    }

    .list_rank_star {
        flex-direction: column;
        display: flex;
    }

    .btn_love {
        position: absolute;
        right: 16px;
        top: 10px;
        width: 36px;
        height: 30px;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
        background: url(../images/wishlist.png) no-repeat;
        background-size: 100% 100%;
    }

    .title_recently_viewed {
        line-height: 28px;
        text-align: left;
    }

    .img_recently_viewed {
        width: 20px;
        height: 20px;
    }

    .txt_recently_viewed {
        width: calc(100% - 25px);
    }

    .count_reviews {
        padding: 4px;
        font-size: 14px;
        line-height: 20px;
        background: #004EA8;
        color: #FFFFFF;
        border-radius: 4px 4px 4px 0;
        margin-right: 7px;
    }

    .recently_viewed {
        float: left;
        width: 100%;
    }

    /* custom two range */
    .range-slide {
        position: relative;
        height: 2px;
        width: 100%;
    }

    .slide {
        position: absolute;
        top: 0;
        height: 2px;
        background: #D3DCE1;
        left: 9px;
        right: 9px;
    }

    .line {
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        height: 2px;
        background-color: #FFA718;
    }

    .thumb {
        position: absolute;
        z-index: 2;
        text-align: left;
        border: 3px solid #FFFFFF;
        background-color: #FFA718;
        border-radius: 50%;
        outline: none;
        top: -9px;
        height: 18px;
        width: 18px;
        margin-left: -9px;
    }

    .range-slide input {
        -webkit-appearance: none;
        appearance: none;
        position: absolute;
        pointer-events: none;
        z-index: 3;
        height: 3px;
        top: 0;
        width: 100%;
        opacity: 0;
        margin: 0;
    }

    .range-slide input::-webkit-slider-thumb {
        -webkit-appearance: none;
        appearance: none;
        pointer-events: all;
        border-radius: 50%;
        cursor: pointer;
        width: 18px;
        height: 18px;
    }

    .display {
        margin: 40px;
        width: 240px;
        display: flex;
        justify-content: space-between;
    }

    .item_value {
        border-radius: 4px;
        border: 1px solid #F0F0F0;
        width: 90px;
    }

    /* end custom two range */

    .item_value input {
        border: unset;
        width: 100%;
        padding: 4px 12px;
        text-align: center;
    }

    .sort_filter .title h2 {
        font-size: 24px;
        line-height: 36px;
        font-weight: 600;
        color: var(--Neutral-2, #434B5C);
    }

    .recently-viewed {
        padding: 80px 0px;
    }

    .title_recently_viewed {
        font-size: 18px;
        line-height: 28px;
        font-weight: 600;
        color: #111D37;
        transition: all .3s ease-in-out;
    }

    .blogs {
        gap: 32px;
    }

    .slick-next {
        right: -40px;
    }

    .slick-prev {
        left: -40px;
    }

    /* css blog reviews */
    .reviews2 {
        float: left;
        width: 100%;
        max-width: 1312px;
        padding-bottom: 80px;
    }

    .item_review {
        width: 405px;
        position: relative;
    }

    .img_review {
        position: relative;
        width: 100%;
    }

    .content_review {
        padding: 24px;
        border-radius: 20px 20px 8px 8px;
        position: relative;
        margin-top: -24px;
        background: #FFFFFF;
        gap: 20px;
    }

    .img_review_author {
        width: 48px;
        height: 48px;
        border-radius: 50% !important;
    }

    .content_author {
        width: calc(100% - 48px - 11px);
    }

    .title_2,
    .title_2 span {
        font-size: 32px;
        font-style: normal;
        font-weight: 600;
        line-height: 52px;
        color: #111D37;
    }

    .txt_content span {
        font-size: 14px;
        line-height: 20px;
        font-weight: 600;
        color: var(--Neutral-2, #434B5C);
        margin-right: 3px;
    }

    .span_txt {
        font-size: 14px;
        line-height: 20px;
        color: #13B97D;
        margin-left: 6px;
    }

    .div_sort_filter {
        gap: 32px;
    }

    .rating .div_img {
        width: 20px;
        height: 20px;
    }

    .rating {
        gap: 3px;
    }

    .content_cruise .content .other {
        gap: 4px;
    }

    .content_cruise .title:hover {
        color: #FFA718;
    }

    .cruises_title {
        gap: 18px;
    }

    .cruises_title {
        gap: 18px;
    }

    .cruises_title span {
        font-size: 16px;
        font-weight: 400;
        line-height: 24px;
        color: #434B5C;
    }

    .filter_price {
        gap: 18px;
    }

    .view_more_type {
        color: #FFA718;
        font-size: 16px;
        line-height: 24px;
    }

    .highlights {
        gap: 12px;
    }

    .highlights .list_icon {
        gap: 10px;
    }

    .item_evaluate {
        gap: 8px;
    }

    .item_evaluate span {

        text-align: right;
    }

    .span_review {
        font-size: 16px;
        line-height: 24px;
        font-weight: 500;
        color: #FFFFFF;
    }

    .span_quantity {
        font-size: 12px;
        line-height: 16px;
        color: #D3DCE1;
        font-weight: 400;
    }

    .txt_money {
        color: #FFFFFF;
        font-size: 14px;
        font-weight: 400;
        line-height: 20px;
        text-align: right;
    }

    .txt_money_cruise {
        font-size: 20px;
        font-weight: 400;
        line-height: 33px;
        text-align: right;
        color: #FFA718;
    }

    .txt_money_cruise span {
        font-size: 24px;
        line-height: 36px;
        text-align: right;
        color: #FFA718;
        margin-left: 5px;
        font-weight: 600;
    }

    .item_checkbox .div_img {
        margin-left: 10px;
    }

    .item_checkbox span {
        font-size: 16px;
        line-height: 24px;
        color: #434B5C;
    }

    .content_page .div_img img:hover {
        object-fit: cover;
        -moz-transform: scale(1.1);
        -webkit-transform: scale(1.1);
        transform: scale(1.1);
        transition: all .3s ease-in-out;
        border-radius: 8px;
    }

    .backcrump-first {
        font-size: 16px;
        font-weight: 600;
        line-height: 24px;
        text-align: left;
        margin-right: 24px;
    }

    .item-bacruump {
        font-size: 16px;
        font-weight: 400;
        line-height: 24px;
        text-align: left;
        color: #FFA718;
    }

    .content_backcrump {
        gap: 8px;
    }

    .swiper {
        width: 100%;
        height: 100%;
    }

    .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .title_recently {
        font-size: 24px;
        line-height: 36px;
        font-weight: 600;
        padding-bottom: 32px;
    }

    .item-recently_viewed {
        gap: 12px;
    }

    .content_interested {
        gap: 12px;
    }

    .item_recently_viewed .rating .div_img {
        width: 16px;
        height: 16px;
    }

    .txt_recently_viewed {
        font-size: 14px;
        line-height: 20px;
        font-weight: 400;
    }

    .txt_recently_viewed span {
        font-size: 14px;
        line-height: 20px;
        font-weight: 600;
    }

    .viewed .span1 {
        font-size: 14px;
        line-height: 20px;
        font-weight: 500;
        color: #434B5C;
        margin-right: 2px;
    }

    .viewed .span2 {
        font-size: 14px;
        line-height: 20px;
        color: #959AA4;
        font-weight: 400;
    }

    .txt_money_viewed {
        font-size: 14px;
        line-height: 30px;
        color: #959AA4;
        font-weight: 500;
    }

    .cuise_moeny_viewed {
        font-size: 24px;
        line-height: 36px;
        font-weight: 600;
        color: #FFA718;
        margin-left: 6px;
    }

    .type_money {
        font-size: 18px;
        line-height: 32px;
        font-weight: 600;
        color: #FFA718;
        margin-left: 6px;
    }

    .title_recently_viewed:hover {
        color: #FFA718;
    }

    .highlights span {
        font-size: 14px;
        font-style: normal;
        font-weight: 400;
        line-height: 20px;
        color: var(--Neutral-2, #434B5C);
    }

    .unika_banner {
        position: relative;
        max-height: 600px;
        height: 100%;
    }

    .unika_banner_img img {
        height: 100% !important;
        min-height: 350px;
    }

    .unika_text_banner {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        max-width: 1096px;
        width: 100%;
    }

    .unika_banner_title {
        font-size: 48px;
        font-style: normal;
        font-weight: 600;
        line-height: 64px;
        color: #FFF;
        text-align: center;
    }

    .unika_banner_txt {
        font-size: 18px;
        font-weight: 500;
        line-height: 28px;
        color: var(--Neutral-5, #F0F0F0);
        text-align: center;
        display: -webkit-box !important;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .wrap_form_banner {
        display: flex;
        flex-direction: column;
        gap: 24px;
    }

    .unika_img_mobile {
        display: none;
    }

    .unika_banner_shadow {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: linear-gradient(rgba(24, 28, 26, 0.48), rgba(24, 28, 26, 0));
        pointer-events: none;
    }

    .unika_title_star {
        gap: 7px;
    }

    .title_2 span {
        position: relative;
    }

    .title_2 span::after {
        content: "";
        position: absolute;
        background-color: #ffa718;
        z-index: -1;
        height: 8px;
        width: 100%;
        left: 0;
        bottom: 8px;
    }

    .title_reviews {
        font-size: 18px;
        font-style: normal;
        font-weight: 600;
        line-height: 28px;
        color: #111D37;
        transition: all .3s ease-in-out;
    }

    .title_reviews:hover {
        color: #FFA718;
    }

    .unika_blog_content {
        font-size: 16px;
        font-style: normal;
        font-weight: 400;
        line-height: 24px;
        color: var(--Neutral-1, #111D37);
    }

    .unika_author_blog {
        gap: 10px;
    }

    .unika_author_blog div {
        font-size: 16px;
        font-style: normal;
        font-weight: 600;
        line-height: 24px;
        color: var(--Neutral-1, #111D37);
    }

    .unika_author_blog span {
        font-size: 14px;
        font-style: normal;
        font-weight: 400;
        line-height: 20px;
        color: var(--Neutral-2, #434B5C);
    }

    .unika_bgr_blogs {
        display: none;
    }

    .sort_filter_mobile {
        display: none;
    }

    .unika_ready_start {
        background: url(https://unikasia.vietiso.com/isocms/templates/default/skin/images/hotel/Frames1.png) no-repeat, #FFA718;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .unika_start {
        display: flex;
        padding: 60px 0;
        flex-direction: column;
        max-width: 604px;
        align-items: center;
    }

    .unika_title_ready {
        font-size: 32px;
        font-style: normal;
        font-weight: 600;
        line-height: 52px;
        color: var(--Neutral-1, #111D37);
        text-align: center;
    }

    .unika_content_ready {
        padding-top: 5px;
        font-size: 16px;
        font-style: normal;
        font-weight: 500;
        line-height: 24px;
        text-align: center;
        color: var(--Neutral-2, #434B5C);
    }

    .unika_link_ready {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 12px 20px;
        border-radius: 8px;
        background: var(--Neutral-1, #111D37);
        max-width: 237px;
        font-size: 16px;
        font-style: normal;
        font-weight: 500;
        line-height: 24px;
        color: #FFFFFF;
        margin-top: 48px;
        gap: 8px;
    }

    .unika_social {
        position: fixed;
        top: 40%;
        right: 15px;
        z-index: 3;
    }

    .unika_social_icons {
        display: flex;
        flex-direction: column;
        gap: 16px;
    }

    .unika_social_icon {
        color: #959AA4;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        border-radius: 40px;
        background: #FFF;
        box-shadow: 0px 12px 32px 0px rgba(125, 135, 158, 0.09);
    }

    .unika_social_icon:hover {
        color: #FFA718;
        box-shadow: 0px 12px 24px 0px rgba(255, 167, 24, 0.36);
    }

    .money_cruise .reviews {
        gap: 50px;
    }

    .unika_footer {
        float: left;
        width: 100%;
    }

    .cru_header_background_image {
        position: relative;
    }

    .cru_header {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .unika_header_2 {
        position: fixed;
    }

    .div_img .fa-star {
        color: #ffa718;
    }

    @media screen and (min-width: 1920px) {
        .img_cruises {
            width: 100%;
        }

        .sort_filter {
            width: 296px;
        }

        .cruises {
            width: calc(100% - 296px - 32px);
        }
    }

    @media screen and (max-width: 1199px) {
        .item_cruises {
            flex-direction: column;
            width: calc(50% - 16px);
            align-items: center !important;
        }

        .content_cruise {
            flex-direction: column;
        }

        .list_cruises {
            flex-direction: row !important;
            flex-wrap: wrap;
        }

        .content_cruise .content {
            width: 100%;
        }

        .money_cruise {
            max-width: 100%;
        }

        .reviews {
            flex-direction: row !important;
            align-items: start !important;
            flex-wrap: wrap;
        }
    }

    @media screen and (max-width: 999px) {
        .sort_filter_mobile {
            display: flex;
        }

        .unika_filter_mobile_close {
            background: unset;
            border: unset;
        }

        .div_sort_filter {
            background: #FFFFFF;
            max-width: 400px;
            width: 100%;
            padding: 20px;
            height: 100%;
            overflow-y: scroll;
            padding-bottom: 50px;
        }

        .sort_filter {
            max-width: 100%;
        }

        .img_cruises {
            max-width: 100%;
            width: 100%;
        }

        .cruise-content {
            flex-direction: column;
            gap: 32px;
        }

        .list_sort_filter {
            display: none;
        }

        .cruises {
            width: 100%;
        }

        .sort_filter .title {
            cursor: pointer;
        }

        .reviews {
            justify-content: space-between !important;
            gap: 40px;
            width: 100%;
        }

        .icon_sort_filter {
            display: flex;
            width: 30px;
        }

        .list_sort_filter {
            position: fixed;
            top: 69px;
            left: 0;
            width: 100%;
            height: 100vh;
            z-index: 2;
            box-shadow: 0px 2px 7px rgba(0, 0, 0, 0.15);
            background: rgba(24, 28, 26, 0.58);
        }
    }

    @media screen and (max-width: 768px) {
        .list_cruises {
            flex-direction: column !important;
        }

        .item_cruises {
            width: 100%;
        }

        img {
            width: 100% !important;
        }
    }

    @media screen and (max-width: 500px) {
        .money_cruise .reviews {
            gap: 15px;
        }

        .backcrump {
            display: none !important;
        }

        .sort_filter {
            padding-top: 20px;
        }

        .unika_banner_title {
            font-size: 24px;
            font-style: normal;
            font-weight: 600;
            line-height: 150%;
        }

        .wrap_form_banner {
            gap: 4px;
        }

        .unika_banner_txt {
            font-size: 14px;
            font-style: normal;
            font-weight: 500;
            line-height: 20px;
        }

        .unika_img_pc {
            display: none;
        }

        .unika_img_mobile {
            display: block;
        }

        .content_page {
            border-radius: 20px 20px 0px 0px;
            margin-top: -35px;
            padding: 0 9px;
        }

        .unika_img_mobile {
            max-height: 459px;
        }

        .sort_filter .title h2 {
            font-size: 16px;
            font-style: normal;
            line-height: 150%;
            width: 100%;
            text-align: center;
        }

        .cruises_title h2 {
            font-size: 16px;
            font-style: normal;
            font-weight: 600;
            line-height: 36px;
        }

        .cruises_title {
            gap: 4px;
        }

        .cruises_title {
            gap: 4px;
        }

        .item_cruises {
            padding: 0;
        }

        .content_cruise {
            padding: 0 16px 18px 16px;
        }

        .content_cruise .title {
            font-size: 18px;
            font-style: normal;
            font-weight: 600;
            line-height: 28px;
        }

        .reviews {
            flex-direction: row-reverse !important;
            gap: 20px;
        }

        .unika_title_star {
            gap: 4px;
        }

        .txt_money_cruise {
            justify-content: start !important;
        }

        .title_2,
        .title_2 span {
            font-size: 24px;
            font-style: normal;
            font-weight: 600;
            line-height: 36px;
            z-index: 0;
        }

        .title_2 span::after {
            bottom: 6px;
        }

        .recently-viewed {
            padding: 60px 0;
        }
    }
</style>
{/literal}

{literal}
<script>
    $(function() {
        let unika_banner_txt = $('.unika_banner_txt');
        let height_old = unika_banner_txt.height();
        // Temporarily remove -webkit-line-clamp

        unika_banner_txt.css({
            '-webkit-line-clamp': 'unset',
            'display': 'block'
        });

        // Get the height of the element without line clamping
        var height_new = unika_banner_txt.height();

        let img_banner = unika_banner_txt.parents('.unika_banner').find('.unika_banner_img img');
        let height_img = img_banner.height();
        let height_img_new = height_img - height_old + height_new;
        let widthScreen = $(window).width();

        if (widthScreen > 500) {
            img_banner.css({
                "min-height": `${height_img_new}px`
            });
        }

        new Swiper(".recently_viewed", {
            slidesPerView: 3,
            spaceBetween: 32,
            // autoplay: {
            //     delay: 3000,
            //     disableOnInteraction: false
            // },
            // Responsive breakpoints
            breakpoints: {
                769: {
                    slidesPerView: 3,
                },
                768: {
                    slidesPerView: 2,
                },
                500: {
                    slidesPerView: 2,
                },
                0: {
                    slidesPerView: 1,
                },
            }
        });

        new Swiper(".reviews2", {
            slidesPerView: 3,
            spaceBetween: 32,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            // autoplay: {
            //     delay: 3000,
            //     disableOnInteraction: false
            // },
            // Responsive breakpoints
            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                991: {
                    slidesPerView: 3,
                }
            }
        });

        //js custom to range
        let min = 0;
        let max = 100;

        const calcLeftPosition = value => {
            value = 100 / (100 - 10) * (value - 10);
            if (value < 0) {
                value = 0;
            }
            return value;
        };

        $('#rangeMin').on('input', function(e) {
            const newValue = parseInt(e.target.value);
            if (newValue > max) return;
            min = newValue;
            $('#thumbMin').css('left', calcLeftPosition(newValue) + '%');
            $('#min').val(newValue);
            $('#line').css({
                'left': calcLeftPosition(newValue) + '%',
                'right': (100 - calcLeftPosition(max)) + '%'
            });
        });

        $('#rangeMax').on('input', function(e) {
            const newValue = parseInt(e.target.value);
            if (newValue < min) return;
            max = newValue;
            $('#thumbMax').css('left', calcLeftPosition(newValue) + '%');
            $('#max').val(newValue);
            $('#line').css({
                'left': calcLeftPosition(min) + '%',
                'right': (100 - calcLeftPosition(newValue)) + '%'
            });
        });

        $(document)
            .on('click', '.btn_close_menu', function() {
                $('.menu_navbar').collapse('hide');
            })
            .on('click', '.sort_filter .title', function() {
                $('.list_sort_filter').slideToggle();
            })
            .on('click', '.unika_filter_mobile_close', function() {
                $('.list_sort_filter').hide();
            })
    })
</script>
{/literal}