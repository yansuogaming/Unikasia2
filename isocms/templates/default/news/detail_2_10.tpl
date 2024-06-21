{assign var=title_news value=$clsNews->getTitle($news_id,$newsItem)}
{assign var=reg_date value=$newsItem.reg_date|date_format:"%Y-%m-%d"}
{assign var=last_update value=$newsItem.last_update|date_format:"%Y-%m-%d"}
{assign var=author value=$newsItem.author}
{literal}
<script type="application/ld+json">
	{
		"@graph": [{
			"@context": "http://schema.org",
			"@type": "NewsArticle",
			"mainEntityOfPage": {
				"@type": "WebPage",
				"@id": "{/literal}{$DOMAIN_NAME}{$curl}{literal}"
			},
			"image": {
			"@type": "ImageObject",
			"url": "{/literal}{$DOMAIN_NAME}{$global_image_seo_page}{literal}",
			"height": 850,
			"width": 480
			},
			"datePublished": "{/literal}{$reg_date}{literal}",
			"dateModified": "{/literal}{$last_update}{literal}",
			"publisher": {
			"@type": "Organization",
			"name": "{/literal}{$PAGE_NAME}{literal}",
			"logo": "{/literal}{$DOMAIN_NAME}{$clsConfiguration->getImageValue('HeaderLogo')}{literal}"},
			"description": "{/literal}{$PAGE_NAME}{literal}"
			}
		]
	}
	</script>
{/literal}
<div class="page_container">
	<div class="breadcrumb-main bg_fff">
        <div class="container">
            <ol class="breadcrumb hidden-xs mt0 bg_fff" itemscope itemtype="http://schema.org/BreadcrumbList">
				<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
					<a itemprop="item" href="{$PCMS_URL}" title="{$core->get_Lang('Home')}">
						<span itemprop="name" class="reb">{$core->get_Lang('Home')}</span></a>
					<meta itemprop="position" content="1" />
				</li>
				<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
					<a itemprop="item" href="{$clsISO->getLink('news')}" title="{$core->get_Lang('Travel news')}">
						<span itemprop="name" class="reb">{$core->get_Lang('Travel news')}</span></a>
					<meta itemprop="position" content="2" />
				</li>
                {if $newscat_id gt 0 && $clsISO->getCheckActiveModulePackage($package_id,'news','category','default')}
                {assign var=itemCat value=$clsNewsCategory->getOne($newscat_id,'title,slug')}
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
					<a itemprop="item" href="{$clsNewsCategory->getLink($newscat_id,$itemCat)}" title="{$clsNewsCategory->getTitle($newscat_id,$itemCat)}">
						<span itemprop="name" class="reb">{$clsNewsCategory->getTitle($newscat_id,$itemCat)}</span></a>
					<meta itemprop="position" content="3" />
				</li>
				<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
					<a itemprop="item" href="{$curl}" title="{$title_news}">
						<span itemprop="name" class="reb">{$title_news}</span></a>
					<meta itemprop="position" content="4" />
				</li>
				{else}
				<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
					<a itemprop="item" href="{$curl}" title="{$title_news}">
						<span itemprop="name" class="reb">{$title_news}</span></a>
					<meta itemprop="position" content="3" />
				</li>
                {/if}

            </ol>
        </div>
    </div>
    <div class="newsPage pageNewsDefault bg_f1f1f1">
		<div class="container">
			<h1 class="title mb20">{$title_news}</h1>
			<div class="row">
				<div class="col-lg-9 newsLeft mb991_30">
					<div class="NewsContent">
						<div class="submitted">
							<i class="fa fa-clock-o" aria-hidden="true"></i> {$clsISO->converTimeToText($newsItem.reg_date)}
							<!--<div class="sharethis-inline-share-buttons" data-image="{$DOMAIN_NAME}{$clsISO->getPageImageShare($news_id,'News',$newsItem)}" data-url="{$DOMAIN_NAME}{$curl}" data-title="{$title_news}"></div>-->
							<script type="text/javascript" src="{$URL_JS}/jquery.sharer.js?v={$up_version}"></script>
							{assign var=link_share value=$curl}
							{assign var=$title_share value=$title_news}
							{$core->getBlock('box_share')}
						</div>
						<div class="content">
							<div class="field-items maxWidthImage tinymce_Content">
								{$clsNews->getIntro($news_id,$newsItem)}
								<div class="clearfix"></div>
								{$clsNews->getContent($news_id,$newsItem)}
							</div>
						</div>
						<div class="cleafix"></div>
						<div class="comment_box mtm mt30">
                                <div class="fb-comments" data-href="{$PCMS_URL}{$clsNews->getLink($news_id,$newsItem)}" data-width="100%" data-numposts="5" data-colorscheme="light"></div>
                        </div>
					</div>
					{if $lstRelated}
					<div class="cleafix mb30"></div>
					<div class="relateNews mb30">
						<h2 class="title24 mb20 titleRelated">{$core->get_Lang('Related News')}</h2>
							{section name=i loop=$lstRelated}
							{assign var=title_news_relate value=$clsNews->getTitle($lstRelated[i].news_id,$lstRelated[i])}
							{assign var=link_news_relate value=$clsNews->getLink($lstRelated[i].news_id,$lstRelated[i])}
								<div class="list_post">
								<a class="photo" title="{$title_news_relate}" href="{$link_news_relate}"><img class="img100 lazy" src="{$URL_IMAGES}/pixel.png" data-src="{$clsNews->getImage($lstRelated[i].news_id,90,70,$lstRelated[i])}" alt="{$title_news_relate}"></a>
									<div class="content_recent">
									<h3>
								<a class="clickviewtopnews" data-item="{$lstRelated[i].news_id}" href="{$link_news_relate}" title="{$title_news_relate}">{$title_news_relate}</a>
									</h3>
									<p class="date_public">{$clsISO->converTimeToText($lstRelated[i].reg_date)}</p>
									</div>
								</div>
							{/section}
					</div>
					{/if}
				</div>
				<div class="col-lg-3 sidebar rightNews">
					{$core->getBlock('l_boxcolNews')}
				</div>
			</div>
        </div>
    </div>
</div>