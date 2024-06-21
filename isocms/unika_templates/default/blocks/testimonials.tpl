{if $lstTestimonial}
{assign var = TitleSiteTestimonial value = TitleTestimonialsHome_|cat:$_LANG_ID}
{assign var = IntroSiteTestimonial value = IntroTestimonialsHome_|cat:$_LANG_ID}
<section class="section_home section_testimonial">
    <div class="container">
        <div class="header_home_box">
            <h2 class="title_home_box">{$clsConfiguration->getValue($TitleSiteTestimonial)}</h2>
            {*<div class="intro_box">{$clsConfiguration->getValue($IntroSiteTestimonial)|html_entity_decode}</div>*}
        </div>
        <div class="content_home_box">
            <div class="list_testimonial">
                <div class=" owl_testimonial owl-carousel">
                    {section name=i loop=$lstTestimonial}
                    {assign var = title_testimonial value = $lstTestimonial[i].title}
                    {assign var = link_testimonial value = $clsTestimonial->getLink($lstTestimonial[i].testimonial_id,$lstTestimonial[i])}
                    <div class="itemTest">
                        <div class="user_avatar">
                            <img class="img100" alt="{$clsTestimonial->getName($lstTestimonial[i].testimonial_id,$lstTestimonial[i])}" src="{$clsTestimonial->getImage($lstTestimonial[i].testimonial_id,52,52,$lstTestimonial[i])}" width="52" height="52" />
                        </div>
                        <a class="color_1c1c1c" href="{$link_testimonial}" title="{$title_testimonial}">
                            <div class="rate">
                            <label class="rate_star block">{$clsTestimonial->getRatesStar($lstTestimonial[i].testimonial_id,$lstTestimonial[i])}</label>
                            </div>
                            <div class="intro text8line mb10">{$clsTestimonial->getIntro($lstTestimonial[i].testimonial_id,$lstTestimonial[i])|strip_tags} </div>
                            <div class="user_name">
                                <p class="name">{$clsTestimonial->getName($lstTestimonial[i].testimonial_id,$lstTestimonial[i])}</p>
                                <p class="country">{$clsTestimonial->getCountry($lstTestimonial[i].testimonial_id,$lstTestimonial[i])}</p>
                            </div>
                        </a>
                    </div>
                    {/section}
                </div>
            </div>
        </div>
    </div>
</section>
{/if} 