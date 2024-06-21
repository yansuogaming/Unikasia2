{if $lstTestimonial}
{assign var = TitleSiteTestimonial value = TitleTestimonialsHome_|cat:$_LANG_ID}
{assign var = IntroSiteTestimonial value = IntroTestimonialsHome_|cat:$_LANG_ID}
<section class="section_box testimonials__box">
	<div class="container">
		<div class="box_testimonial">
			<h2 class="section_box-title section_box-title_testimonials"><a class="color_2c2c2c" href="{$clsISO->getLink('testimonial')}" title="{$clsConfiguration->getValue($TitleSiteTestimonial)}">{$clsConfiguration->getValue($TitleSiteTestimonial)}</a></h2>
            <div class="intro_box">{$clsConfiguration->getValue($IntroSiteTestimonial)|html_entity_decode}</div>
			<div class="list_testimonial">
				<div class="jcarousel-box owl_slide_testimonial owl-carousel">
					{section name=i loop=$lstTestimonial}
					{assign var = title_testimonial value = $lstTestimonial[i].title}
					{assign var = link_testimonial value = $clsTestimonial->getLink($lstTestimonial[i].testimonial_id,$lstTestimonial[i])}
					<div class="tes_item" data-dot="<button>{$smarty.section.i.index}</button>">
						<a class="color_444444" href="{$link_testimonial}" title="{$title_testimonial}">
							<h3 class="title limit_2line">{$title_testimonial}</h3>
							<div class="item__intro limit_3line">{$lstTestimonial[i].intro|html_entity_decode|strip_tags} </div>
							<div class="box_customer">
								<img width="45" height="45" src="{$URL_IMAGES}/noimage.png" data-src="{$clsTestimonial->getImage($lstTestimonial[i].testimonial_id,45,45,$lstTestimonial[i])}" alt="{$getTitle}" class="img_customer lazy img100">
								<div class="box_left_customer">
									<p class="item_name">{$lstTestimonial[i].name}</p>
									<label class="rate-2019 block">{$clsTestimonial->getRatesStar($lstTestimonial[i].testimonial_id,$lstTestimonial[i])}</label>
								</div>
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