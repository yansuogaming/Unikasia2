<section class="reasonandrecom">
    <div class="container">
        <h2 class="reasonsbook">{$core->get_Lang('The reasons you should book with us')} </h2>
        <div class="owl-carousel" id="reason-book">
            {section name=i loop=$listWhy}
            <div class="white-box text-center">
                <div class="d-flex justify-content-center"><img class="reason_img" src="{$listWhy[i].image}" alt="{$listWhy[i].title}"></div>
                <h3>{$listWhy[i].title}</h3>
                <div class="trvs_why_description">{$listWhy[i].intro|html_entity_decode}</div>
            </div>
            {/section}
        </div>
        <div class="row justify-content-center text-center">
            <h2 class="txtfamous">{$core->get_Lang('The famous travel guide books recommended us')}</h2>
            <div class="img-guidebook">
                <div class="row">
                    {section name=i loop=$listPartner}
                    <div class="linkbooktour">
                        <a href="{$listPartner[i].url}" title="{$listPartner[i].title}" target="_blank">
                            <img src="{$listPartner[i].image}" alt="{$listPartner[i].slug}" class="img-fluid" width="138" height="66">
                        </a>
                    </div>
                    {/section}
                </div>
            </div>
        </div>
    </div>
</section>

{literal}
<script>
    $(document).ready(function() {
        const $owl = $('#reason-book');
        const itemCount = $owl.children().length;

        $owl.owlCarousel({
            items: 3,
            loop: itemCount > 3,
            margin: 16,
            nav: false,
            autoplay: itemCount > 3,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            dots: false
        });
    });
</script>
{/literal}