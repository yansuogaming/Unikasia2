{*van code new*}
<div class="unika_sort_filter">
    <div class="unika_btn_sort_filter">Sort & filter</div>
</div>
<div class="unika_mobile_travel_guide">
    <div class="unika_mobile_travel_guide_content">
        <div class="unika_mobile_travel_top">
            <div>Sort & filter</div>
            <div class="unika_mobile_travel_close">
                <i class="fa-sharp fa-light fa-xmark" aria-hidden="true"></i>
            </div>
        </div>
        <form action="" method="GET" class="form_search_guide">
            <div class="des_travel_guide_search">
                <button class="btn_search_guide"><i class="fa-light fa-magnifying-glass"></i></button>
                <input type="text" name="keyword" class="keyword_search_guide" placeholder="Search">
                <input type="hidden" value="search_guide">
            </div>
        </form>
        <div class="des_travel_guide_category">
            <div class="des_travel_guide_category_title">
                <h2>Vietnam</h2>
            </div>
            <div class="des_travel_guide_category_list">
                <a href="https://unikasia.vietiso.com/en/guides/vietnam/places-to-go-c29" title="Places To Go" class="active">Places To Go</a>
                <a href="https://unikasia.vietiso.com/en/guides/vietnam/cuisine-c23" title="Cuisine">Cuisine</a>
                <a href="https://unikasia.vietiso.com/en/guides/vietnam/top-attractions-c2" title="Top Attractions">Top Attractions</a>
                <a href="https://unikasia.vietiso.com/en/guides/vietnam/travel-file-c28" title="Travel File">Travel File</a>
            </div>
        </div>
    </div>
</div>

{literal}
<script>
    //van code new
    $(document)
        .on('click', '.unika_sort_filter', function() {
            $('.unika_mobile_travel_guide').slideToggle();
            $('.unika_header_2').css({
                "z-index": 0
            });
        })
        .on('click', '.unika_mobile_travel_close', function() {
            $('.unika_mobile_travel_guide').hide();
            $('.unika_header_2').css({
                "z-index": 3
            });
        })
    //van code new
</script>
{/literal}

{*van code new*}