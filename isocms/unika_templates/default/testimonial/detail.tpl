{assign var=title_testimonial value=$clsTestimonial->getTitle($testimonial_id)}
<div class="page_container">
	<nav class="breadcrumb-main bg_fff">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<ol class="breadcrumb hidden-xs mt0 bg_fff" itemscope itemtype="https://schema.org/BreadcrumbList">
					<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
						<a itemprop="item" href="{$PCMS_URL}" title="{$core->get_Lang('Home')}">
							<span itemprop="name" class="reb">{$core->get_Lang('Home')}</span></a>
						<meta itemprop="position" content="1" />
					</li>
					<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
						<a itemprop="item" href="{$clsISO->getLink('testimonial')}" title="{$core->get_Lang('Testimonials')}">
							<span itemprop="name" class="reb">{$core->get_Lang('Testimonials')}</span></a>
						<meta itemprop="position" content="2" />
					</li>
					<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="current">
						<a itemprop="item" href="{$curl}" title="{$title_testimonial}"> <span itemprop="name" class="reb">{$title_testimonial}</span></a>
						<meta itemprop="position" content="3" />
					</li>
				</ol>
				</div>
			</div>
		</div>
	</nav>
	<div class="testimonialPage">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<article class="bg_fff">
						<h1 class="size32 title SegoeUILight">{$title_testimonial}</h1>
						<p class="country text_bold"><label class="rate-2019 inline-block">{$clsTestimonial->getRatesStar($testimonial_id)}</label> {$clsTestimonial->getName($testimonial_id)}, {$clsTestimonial->getCountry($testimonial_id)}</p>
						<div class="formatTextStandard">{$clsTestimonial->getIntro($testimonial_id)}</div>
					</article>
					{if $listItem[0].testimonial_id ne ''}
					<div class="related_box mt30" id="listTestimonialsView">
						<p class="size24 hd mb0">{$core->get_Lang('See more')}</p>
						<div class="listTestimonial">
							{section name=i loop=$listItem}
							{assign var=title value=$clsTestimonial->getTitle($listItem[i].testimonial_id)}
							{assign var=link value=$clsTestimonial->getLink($listItem[i].testimonial_id)}
							<div class="item bg_fff">
								<a href="{$link}" title="{$title}"> 
									<div class="photo">
										<img class="img-responsive img100 lazy" src="{$URL_IMAGES}/pixel.png" data-src="{$clsTestimonial->getImage($listItem[i].testimonial_id,260,200)}" alt="{$title}"  /> 
									</div>
									<div class="body title">
										<h3 class="testimonials-title"> {$title}</h3>
										<div class="introCrx"> {$clsTestimonial->getIntro($listItem[i].testimonial_id)|strip_tags|truncate:235} </div>
										<div class="wrap profilet"> <strong>{$clsTestimonial->getName($listItem[i].testimonial_id)}, {$clsTestimonial->getCountry($listItem[i].testimonial_id)}</strong> </div>
										<div class="star mt10">
										<label class="rate-2019 block">{$clsTestimonial->getRatesStar($listItem[i].testimonial_id)}</label>
										</div>
									</div>
								</a>
							</div>
							{/section}
						</div>
					</div>
					{/if} 
				</div>
			</div>
		</div>
	</div>
</div>