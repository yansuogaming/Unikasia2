<div class="des_travel_guide_side">
    <form action="" method="GET" class="form_search_guide">
        <div class="des_travel_guide_search">
            <button class="btn_search_guide"><i class="fa-light fa-magnifying-glass"></i></button>
            <input type="text" name="keyword" class="keyword_search_guide" placeholder="Search">
            <input type="hidden" value="search_guide">
        </div>
    </form>
    <div class="des_travel_guide_category">
        {if ($mod eq 'destination' && $act eq 'travel_guide') || ($mod eq 'destination' && $act eq 'travel_guide_detail') || ($mod eq 'guide' && $act eq 'cat') || ($mod eq 'guide' && $act eq 'search') || ($mod eq 'guide' && $act eq 'detail')}
        <div class="des_travel_guide_category_title">
            <h2>{$country_title}</h2>
        </div>
        <div class="des_travel_guide_category_list">
            {if ($mod eq 'guide' && $act eq 'detail')}
            <a href="{$clsGuide->getLinkGuideCat($country_slug)}" title="All">All</a>
            {/if}
            {if $arr_guide_cat}
            {foreach from=$arr_guide_cat key=key item=item}
            {assign var="guideCatID" value=$item.guidecat_id}
            {assign var="guideCatSlug" value=$item.slug}
            <a href="{$clsGuide->getLinkGuideCat($country_slug, $guideCatSlug, $guideCatID)}" title="{$clsGuideCat->getTitle($guideCatID)}" {if $guideCatID eq $guidecat_id} class="active" {/if}>{$clsGuideCat->getTitle($guideCatID)}</a>
            {/foreach}
            {/if}
        </div>
        {elseif ($mod eq 'destination' && $act eq 'attraction')}
        <div class="des_travel_guide_category_title">
            <h2>Hanoi</h2>
        </div>
        <div class="des_travel_guide_category_list">
            <a href="#" title="Exciting trip">Exciting trip</a>
            <a href="#" title="Hotel">Hotel</a>
            <a href="#" title="Place to go">Place to go</a>
            <a href="#" title="Cusine">Cusine</a>
            <a href="#" title="Culture Hanoi">Culture Hanoi</a>
        </div>
        {/if}
    </div>
    {if ($mod eq 'guide' && $act eq 'detail')}
    <div class="des_travel_guide_country_tour">
        <div class="des_travel_guide_category_title">
            <h2>{$country_title} tours</h2>
        </div>
        <div class="des_travel_guide_category_list">
            {if $arr_trvs_country}
            {foreach from=$arr_trvs_country key=key item=item}
            {assign var="CatID" value=$item.cat_id}
            <a href="{$clsTourCategory->getLink($CatID, '', '', $country_id)}" title="{$clsTourCategory->getTitle($item.cat_id)}" target="_blank">{$clsTourCategory->getTitle($item.cat_id)}</a>
            {/foreach}
            {/if}
        </div>
    </div>
    {/if}
    {if ($mod eq 'destination' && $act eq 'travel_guide') || ($mod eq 'destination' && $act eq 'travel_guide_detail') || ($mod eq 'guide' && $act eq 'cat') || ($mod eq 'guide' && $act eq 'search') || ($mod eq 'guide' && $act eq 'detail')}
    <div class="des_travel_guide_exciting_trip">
        <div class="des_travel_guide_exciting_trip_title">
            <h2>{$core->get_Lang('EXCITING TRIP')}</h2>
        </div>
        <div class="des_travel_guide_exciting_trip_content">
            {if $arr_tour_country}
            {foreach from=$arr_tour_country key=key item=item}
            {assign var="tourID" value=$item.tour_id}
            <div class="des_travel_guide_exciting_trip_item">
                <div class="des_travel_guide_exciting_trip_image">
                    <a href="{$clsTour->getLink($tourID)}" title="{$clsTour->getTitle($tourID)}">
                        <img src="{$clsTour->getImage($tourID, 296, 200)}" alt="{$clsTour->getTitle($tourID)}" width="296" height="200">
                    </a>
                </div>
                <div class="des_travel_guide_exciting_trip_item_title">
                    <h3><a href="{$clsTour->getLink($tourID)}" title="{$clsTour->getTitle($tourID)}">{$clsTour->getTitle($tourID)}</a></h3>
                </div>
                <div class="des_travel_guide_exciting_trip_item_content">
                    <div class="des_travel_guide_exciting_trip_rate">
                        <div class="des_travel_guide_exciting_trip_rate_score">
                            {$clsReviews->getReviews($tourID, 'avg_point')}
                        </div>
                        <div class="des_travel_guide_exciting_trip_rate_title">
                            {$clsReviews->getReviews($tourID, 'txt_review')}
                        </div>
                        <div class="des_travel_guide_exciting_trip_rate_total">
                            - {$clsReviews->getReviews($tourID)} reviews
                        </div>
                    </div>
                    <div class="des_travel_guide_exciting_trip_place">
                        <i class="fa-light fa-location-dot"></i>
                        Place: {$clsTourDestination->getByCountry($tourID, 'city')}
                        {if $clsTourDestination->getByCountry($tourID) > 0}
                        <button type="button" class="tooltips_tour" data-bs-toggle="tooltip" title="{$clsTourDestination->getByCountry($tourID, 'other_city')}">+{$clsTourDestination->getByCountry($tourID)}</button>
                        {/if}
                    </div>
                    <div class="des_travel_guide_exciting_trip_description">
                        {$clsTour->getTripOverview($tourID)}
                    </div>
                    <div class="des_travel_guide_exciting_trip_detail">
                        <div class="box_left">
                            <p>From</p>
                            <span class="price_type">US</span> <span class="price">${$item.min_price}</span>
                        </div>
                        <div class="box_right">
                            <a href="{$clsTour->getLink($tourID)}" title="{$clsTour->getTitle($tourID)}">View tour <i class="fa-light fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            {/foreach}
            {/if}
        </div>
    </div>
    <div class="des_travel_guide_tour_more">
        <div class="des_travel_guide_tour_more_image">
            <img src="{$clsCountry->getImage($country_id, 296, 152)}" alt="Tour {$country_title}" width="296" height="152">
            <div class="des_travel_guide_tour_more_title">
                <h4>Explore more {$country_title} tours</h4>
                <a href="{$clsTourCategory->getLink(0, '', '', $country_id)}" title="See all tours in {$country_title}">See all tours <i class="fa-light fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
    {elseif $mod eq 'destination' && $act eq 'attraction'}
    <div class="des_travel_guide_most_read">
        <div class="des_travel_guide_most_read_title">
            <h2>MOST READ</h2>
        </div>
        <div class="des_travel_guide_most_read_content">
            <div class="des_travel_guide_most_read_item">
                <div class="row">
                    <div class="col-4 col-sm-3 col-md-12 col-lg-4">
                        <img src="https://images.unsplash.com/photo-1715522196138-1da0d3669bc5?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHx0b3BpYy1mZWVkfDl8RnpvM3p1T0hONnd8fGVufDB8fHx8fA%3D%3D" width="83" height="83" alt="Vietnam Airlines Launches New Routes To Singapore, Cambodia">
                    </div>
                    <div class="col-8 col-sm-9 col-md-12 col-lg-8">
                        <h3>Vietnam Airlines Launches New Routes To Singapore, Cambodia</h3>
                    </div>
                </div>
            </div>
            <div class="des_travel_guide_most_read_item">
                <div class="row">
                    <div class="col-4 col-sm-3 col-md-12 col-lg-4">
                        <img src="https://images.unsplash.com/photo-1715522196138-1da0d3669bc5?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHx0b3BpYy1mZWVkfDl8RnpvM3p1T0hONnd8fGVufDB8fHx8fA%3D%3D" width="83" height="83" alt="Vietnam Airlines Launches New Routes To Singapore, Cambodia">
                    </div>
                    <div class="col-8 col-sm-9 col-md-12 col-lg-8">
                        <h3>Vietnam Airlines Launches New Routes To Singapore, Cambodia</h3>
                    </div>
                </div>
            </div>
            <div class="des_travel_guide_most_read_item">
                <div class="row">
                    <div class="col-4 col-sm-3 col-md-12 col-lg-4">
                        <img src="https://images.unsplash.com/photo-1715522196138-1da0d3669bc5?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHx0b3BpYy1mZWVkfDl8RnpvM3p1T0hONnd8fGVufDB8fHx8fA%3D%3D" width="83" height="83" alt="Vietnam Airlines Launches New Routes To Singapore, Cambodia">
                    </div>
                    <div class="col-8 col-sm-9 col-md-12 col-lg-8">
                        <h3>Vietnam Airlines Launches New Routes To Singapore, Cambodia</h3>

                    </div>

                </div>

            </div>

            <div class="des_travel_guide_most_read_item">

                <div class="row">

                    <div class="col-4 col-sm-3 col-md-12 col-lg-4">

                        <img src="https://images.unsplash.com/photo-1715522196138-1da0d3669bc5?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHx0b3BpYy1mZWVkfDl8RnpvM3p1T0hONnd8fGVufDB8fHx8fA%3D%3D" width="83" height="83" alt="Vietnam Airlines Launches New Routes To Singapore, Cambodia">

                    </div>

                    <div class="col-8 col-sm-9 col-md-12 col-lg-8">

                        <h3>Vietnam Airlines Launches New Routes To Singapore, Cambodia</h3>

                    </div>

                </div>

            </div>

            <div class="des_travel_guide_most_read_item">

                <div class="row">

                    <div class="col-4 col-sm-3 col-md-12 col-lg-4">

                        <img src="https://images.unsplash.com/photo-1715522196138-1da0d3669bc5?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHx0b3BpYy1mZWVkfDl8RnpvM3p1T0hONnd8fGVufDB8fHx8fA%3D%3D" width="83" height="83" alt="Vietnam Airlines Launches New Routes To Singapore, Cambodia">

                    </div>

                    <div class="col-8 col-sm-9 col-md-12 col-lg-8">

                        <h3>Vietnam Airlines Launches New Routes To Singapore, Cambodia</h3>

                    </div>

                </div>

            </div>

        </div>

    </div>
    {/if}
</div>



{literal}
<style>

    .des_travel_guide_search {

        border-radius: 4px;

        background: var(--Neutral-5, #F0F0F0);

        display: flex;

        flex-direction: row;

        align-items: center;

    }



    .btn_search_guide {

        width: 24px;

        height: 24px;

        margin-left: 20px;

        border: none;

    }



    .des_travel_guide_search input {

        height: 48px;

        padding: 12px 10px 12px 20px;

        border-radius: 4px;

        background: var(--Neutral-5, #F0F0F0);

        border: none;

        width: 100%;

    }

    .des_travel_guide_country_tour{
        margin-top: 20px;
    }

    .des_travel_guide_category, 
    .des_travel_guide_country_tour {

        border-radius: 4px;

        border: 1px solid var(--Neutral-4, #D3DCE1);

        padding: 24px 16px;

        margin-top: 12px;
    }



    .des_travel_guide_category_title h2 {

        color: var(--Neutral-2, #434B5C);

        font-family: "SF Pro Display";

        font-size: 20px;

        font-style: normal;

        font-weight: 600;

        line-height: 32px;

        margin-bottom: 16px;

    }



    .des_travel_guide_category_list {

        font-family: "SF Pro Display";

        font-size: 16px;

        font-style: normal;

        font-weight: 500;

        line-height: 24px;

        display: flex;

        flex-direction: column;

        text-align: left;

        gap: 16px;

    }



    .des_travel_guide_category_list a {

        color: var(--Neutral-2, #434B5C);

        transition: all .3s ease-in-out;

    }



    .des_travel_guide_category_list a:hover {

        color: #FFA718;

    }



    .des_travel_guide_category_list .active {

        color: #FFA718;

        text-decoration: underline;

    }
    .des_travel_guide_exciting_trip {
        margin-top: 48px;
    }
    .des_travel_guide_exciting_trip_title h2 {

        color: var(--Neutral-2, #434B5C);

        font-family: "SF Pro Display";

        font-size: 20px;

        font-style: normal;

        font-weight: 600;

        line-height: 32px;

        margin-bottom: 22px;

    }



    .des_travel_guide_exciting_trip_item_title h3 {

        font-family: "SF Pro Display";

        font-size: 18px;

        font-style: normal;

        font-weight: 600;

        line-height: 28px;

        margin-top: 8px;

        margin-bottom: 10px;

        white-space: nowrap;

        overflow: hidden;

        text-overflow: ellipsis;

    }



    .des_travel_guide_exciting_trip_item_title h3 a {

        color: var(--Neutral-1, #111D37);

        transition: all .3s ease-in-out;

    }



    .des_travel_guide_exciting_trip_item_title h3 a:hover {

        color: #FFA718;

    }



    .des_travel_guide_exciting_trip_item_content {

        display: flex;

        flex-direction: column;

        gap: 9px;

    }



    .des_travel_guide_exciting_trip_rate {

        display: flex;

        flex-direction: row;

        gap: 8px;

    }



    .des_travel_guide_exciting_trip_rate_score {

        border-radius: 4px;

        background: var(--Semantic-4, #13B97D);

        padding: 2px 6px;

        color: var(--Background, #F9F9F9);

        font-family: "SF Pro Display";

        font-size: 14px;

        font-style: normal;

        font-weight: 500;

        line-height: 20px;

    }



    .des_travel_guide_exciting_trip_rate_title {

        color: #13B97D;

        font-family: "SF Pro Display";

        font-size: 14px;

        font-style: normal;

        font-weight: 500;

        line-height: 20px;

    }



    .des_travel_guide_exciting_trip_rate_total {

        color: var(--Neutral-3, #959AA4);

        font-family: "SF Pro Display";

        font-size: 14px;

        font-style: normal;

        font-weight: 400;

        line-height: 20px;

    }



    .des_travel_guide_exciting_trip_place {

        color: var(--Neutral-2, #434B5C);

        font-family: "SF Pro Display";

        font-size: 14px;

        font-style: normal;

        font-weight: 400;

        line-height: 20px;

        display: flex;

        flex-direction: row;

        gap: 8px;

    }



    .des_travel_guide_exciting_trip_place .fa-location-dot {

        margin-top: 3px;

    }



    .des_travel_guide_exciting_trip_place .tooltips_tour {

        padding: 1px 9px;

        height: 22px;

        border: none;

        border-radius: 2px;

        background: #ffeed3;

        color: var(--Primary, #FFA718);

        text-align: center;

        font-family: "SF Pro Display";

        font-size: 14px;

        font-style: normal;

        font-weight: 500;

        line-height: 20px;

    }



    .des_travel_guide_exciting_trip_description {

        color: var(--Neutral-3, #959AA4);

        font-family: "SF Pro Display";

        font-size: 14px;

        font-style: normal;

        font-weight: 500;

        line-height: 20px;

        display: -webkit-box;

        -webkit-line-clamp: 3;

        -webkit-box-orient: vertical;

        overflow: hidden;

    }



    .des_travel_guide_exciting_trip_detail {

        display: flex;

        flex-direction: row;

        justify-content: space-between;

        margin-top: 18px;

    }



    .des_travel_guide_exciting_trip_detail .box_left p {

        color: var(--Neutral-3, #959AA4);

        font-family: "SF Pro Display";

        font-size: 14px;

        font-style: normal;

        font-weight: 500;

        line-height: 20px;

        margin-bottom: unset;

    }



    .des_travel_guide_exciting_trip_detail .box_left .price_type {

        color: var(--Primary, #FFA718);

        font-family: "SF Pro Display";

        font-size: 18px;

        font-style: normal;

        font-weight: 500;

        line-height: 28px;

    }



    .des_travel_guide_exciting_trip_detail .box_left .price {

        color: var(--Primary, #FFA718);

        font-family: "SF Pro Display";

        font-size: 24px;

        font-style: normal;

        font-weight: 600;

        line-height: 36px;

    }



    .des_travel_guide_exciting_trip_detail .box_right a {

        display: flex;

        padding: 12px 20px;

        justify-content: center;

        align-items: center;

        gap: 6px;

        border-radius: 8px;

        background: var(--Primary, #FFA718);

        color: var(--Neutral-6, #FFF);

        font-family: "SF Pro Display";

        font-size: 16px;

        font-style: normal;

        font-weight: 400;

        line-height: 24px;

        transition: ease-in-out all 0.3s;

    }



    .des_travel_guide_exciting_trip_detail .box_right a:hover,

    .des_travel_guide_tour_more_title a:hover {

        background: #E88F00;

    }



    .des_travel_guide_exciting_trip_item {

        margin-bottom: 48px;

    }



    .des_travel_guide_tour_more_image {

        position: relative;

    }



    .des_travel_guide_tour_more_image img {

        transition: all 0.3s ease-in-out;

        border-radius: 8px;

    }



    .des_travel_guide_tour_more_image:hover img {

        filter: brightness(70%);

    }



    .des_travel_guide_tour_more_title {

        position: absolute;

        top: 50%;

        left: 30px;

        right: 30px;

        transform: translateY(-50%);

        text-align: center;

        display: flex;

        flex-direction: column;

        gap: 16px;

    }



    .des_travel_guide_tour_more_title h4 {

        color: var(--Neutral-6, #FFF);

        text-align: center;

        font-family: "SF Pro Display";

        font-size: 16px;

        font-style: normal;

        font-weight: 600;

        line-height: 24px;

    }



    .des_travel_guide_tour_more_title a {

        display: table;

        margin: 0 auto;

        padding: 12px 20px;

        justify-content: center;

        align-items: center;

        gap: 8px;

        border-radius: 8px;

        background: var(--Primary, #FFA718);

        color: #fff;

        transition: ease-in-out all 0.3s;

    }



    .des_travel_guide_most_read {

        padding: 32px 0 8px;

        border-top: 1px solid var(--Neutral-4, #D3DCE1);

        border-bottom: 1px solid var(--Neutral-4, #D3DCE1);

    }



    .des_travel_guide_most_read_title h2 {

        color: var(--Neutral-2, #434B5C);

        font-family: "SF Pro Display";

        font-size: 20px;

        font-style: normal;

        font-weight: 600;

        line-height: 32px;

        margin-bottom: 24px;

    }



    .des_travel_guide_most_read_item {

        margin-bottom: 24px;

    }



    .des_travel_guide_most_read_item img {

        border-radius: 4px;

    }



    .des_travel_guide_most_read_item h3 {

        color: var(--Neutral-1, #111D37);

        font-family: "SF Pro Display";

        font-size: 14px;

        font-style: normal;

        font-weight: 500;

        line-height: 20px;

    }



    .des_travel_guide_exciting_trip_image {

        border-radius: 8px;

        overflow: hidden;

    }



    .des_travel_guide_exciting_trip_image img {

        border-radius: 8px;

        transition: all .3s ease-in-out;

        width: 100%;

    }



    .des_travel_guide_exciting_trip_image img:hover {

        scale: 1.2;

    }



    @media (min-width: 1200px) {}



    @media (min-width: 992px) and (max-width: 1199px) {}



    @media (min-width: 768px) and (max-width: 991px) {

        .des_travel_guide_most_read_item img {

            width: unset;

            height: auto;

            margin-bottom: 7px;

        }

    }



    @media (min-width: 576px) and (max-width: 767px) {}



    @media (max-width: 575px) {}

</style>
{/literal}

<script>
    var country_id = {$country_id};
    var country_slug = '{$country_slug}';
    var lang_id = '{$_LANG_ID}';
</script>

{literal}
<script>
    $(document).ready(function() {
        $('.form_search_guide').on('submit', function(e) {
        e.preventDefault();
            var keyword = $('.keyword_search_guide').val();
            var pretty_keyword = keyword.replace(/\s/g, '+');
            var newUrl = '/' + lang_id + '/search-guide/' + country_slug + '/' + pretty_keyword;
            window.location.href = newUrl;
        });
    });
</script>
{/literal}