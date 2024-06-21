{assign var=maxStars value=5}
<section class="customersay">
    <div class="container">
        <div class="customerSayTitle">
            {if $mod eq "hotel" || $mod eq "stay" || $mod eq "blog" || $mod eq "tour"}
                <h2 class="txt_reviews">Reviews</h2>
            {else}
                <h2 class="txtwhatsay txt_underline">{$clsConfiguration->getValue('TitleTestimonialsHome_'|cat:$_LANG_ID)|html_entity_decode}</h2>
            {/if}
        </div>
        <div class="customer_cards owl-carousel owl-theme" id="home_customer_reivews">
            {section name=i loop=$listReview}
                {assign var = k value = $smarty.section.i.index}
                <div class="customer_card item">
                    <div class="customer_card_container overflow-hidden"><img class="customer_card_thumb" src="{$listReview[i].image}" onerror="this.src='{$URL_IMAGES}/none_image.png'" alt=""></div>
                    <div class="customer_review">
                        <div class="customer_stars">
                            {assign var=numStars value=$listReview[i].rates}
                            {assign var=remainingStars value=$maxStars - $numStars}
                            {section name=j loop=$numStars}
                                <i class="fa-solid fa-star"></i>
                            {/section}
                            {section name=k loop=$remainingStars}
                                <i class="fa-regular fa-star"></i>
                            {/section}
                        </div>
                        <h3 class="customer_review_h3 txt-hover-home">{$listReview[i].title}</h3>
                        <div class="content">{$clsISO->limit_textIso($listReview[i].intro|html_entity_decode, 50)}</div> <a class="more_review" data-fancybox data-src="#modalViewMore{$k}" href="javascript:;">{$core->get_Lang('View more')}</a>
                        <div class="customer_avt">
                            <img src="{$listReview[i].avatar}" alt="avatar" onerror="this.src='{$URL_IMAGES}/none_image.png'" >
                            <div class="customer_name">
                                <p class="fw-bold">{$listReview[i].name}</p>
                                <span>{$listReview[i].reg_date|date_format:"%d %b, %Y"}</span>
                            </div>
                        </div>
                    </div>
                    <div style="display: none;" id="modalViewMore{$k}">
                        <h2 class="mb-3">{$listReview[i].title}</h2>
                        <div>{$listReview[i].intro|html_entity_decode}</div>
                    </div>
                </div>
            {/section}
        </div>
    </div>
</section>

{literal}
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            Fancybox.bind("[data-fancybox]", {});
        });
    </script>
{/literal}
