{if $lstCatTour}
<section class="section_home section_travel_style">
    {assign var = TitleCatTour value = TitleCatTour_|cat:$_LANG_ID}
	{assign var = IntroCatTour value = IntroCatTour_|cat:$_LANG_ID}
    <div class="d-flex flex-travel_style flex-row justify-content-end">
        <div class="header_home_box">
            <h2 class="title_home_box">{$clsConfiguration->getValue($TitleCatTour)}</h2>
            <div class="intro_box">{$clsConfiguration->getValue($IntroCatTour)|html_entity_decode}</div>
        </div>
        <div class="carousel_travel_style">
            <div class="owl-carousel slide_travel_style">
                {section name=i loop=$lstCatTour}
                {assign var=getTitle value=$lstCatTour[i].title}
                {assign var=getLink value=$clsTourCategory->getLink($lstCatTour[i].tourcat_id,$lstCatTour[i])}
                <div class="catItem">
                    <a href="{$getLink}" title="{$getTitle}"><img alt="{$getTitle}" class="img100" src="{$clsTourCategory->getImage($lstCatTour[i].tourcat_id,281,441,$lstCatTour[i])}"/></a>
                    <div class="spotlight">
                        <h3><a href="{$getLink}" title="{$getTitle}">{$getTitle}</a></h3>
                        <div class="intro_cat">{$clsTourCategory->getIntro($lstCatTour[i].tourcat_id,$lstCatTour[i])|strip_tags:100}
                        </div>
                    
                    </div>
                </div>
                {/section}
            </div>
        </div>
    </div>
</section>
{/if}