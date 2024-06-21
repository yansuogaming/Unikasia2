{if $show eq 'Country'}
{assign var=TD value=$clsCountryEx->getTitle($country_id,$oneItemCountry)}
{elseif $show eq 'City'}
{assign var=TD value=$clsCity->getTitle($city_id,$oneItemCity)}
{else}
{assign var=TD value=$clsRegion->getTitle($region_id,$oneItemRegion)}
{/if}
{literal}
<script type="application/ld+json">
{
    "@context": "https://schema.org/",
    "@type": "Blog",
    "@id": "{/literal}{$DOMAIN_NAME}{$curl}{literal}",
    "mainEntityOfPage": "{/literal}{$DOMAIN_NAME}{$curl}{literal}",
    "name": "{/literal}{if $show eq 'Default'}{$core->get_Lang('Our Blog')}{else}{$core->get_Lang('Blog listing by destinations')} {$TD}{/if}{literal}",
    "description": "{/literal}{$description_page}{literal}",
    "publisher": {
        "@type": "Organization",
        "@id": "{/literal}{$DOMAIN_NAME}{literal}",
        "name": "VietISO Company",
        "logo": {
            "@type": "ImageObject",
            "@id": "{/literal}{$DOMAIN_NAME}/uploads/logo/logo_footer_new.png{literal}",
            "url": "{/literal}{$DOMAIN_NAME}/uploads/logo/logo_footer_new.png{literal}",
            "width": "98",
            "height": "47"
        }
    },
{/literal}
{if $lstBlogs}
    {literal}
        "blogPost": [
    {/literal}
    {section name=i loop=$lstBlogs}
    {assign var=title_blog value=$clsBlog->getTitle($lstBlogs[i].blog_id,$lstBlogs[i])}
    {assign var=link_blog value=$clsBlog->getLink($lstBlogs[i].blog_id,$lstBlogs[i])}
    {assign var=publish_date value=$lstBlogs[i].publish_date|date_format:"%Y-%m-%d"}
    {assign var=upd_date value=$lstBlogs[i].upd_date|date_format:"%Y-%m-%d"}
    {assign var=imgBlog value=$clsBlog->getImage($lstBlogs[i].blog_id,828,552,$lstBlogs[i])}
    {assign var=author value=$lstBlogs[i].author}
    {assign var=listTag value=$clsBlog->getArrayTag($lstBlogs[i].blog_id,$lstBlogs[i])}
    {literal}
        {
            "@type": "BlogPosting",
            "@id": "{/literal}{$DOMAIN_NAME}{$link_blog}{literal}#BlogPosting",
            "mainEntityOfPage": "{/literal}{$DOMAIN_NAME}{$link_blog}{literal}",
            "headline": "{/literal}{$title_blog}{literal}",
            "name": "{/literal}{$title_blog}{literal}",
            "description": "{/literal}{$clsBlog->getIntro($lstBlogs[i].blog_id,$lstBlogs[i])|strip_tags}{literal}",
            "datePublished": "{/literal}{$publish_date}{literal}",
            "dateModified": "{/literal}{$upd_date}{literal}",
            "author": {
                "@type": "Person",
                "name": "{/literal}{$author}{literal}"
            },
            "image": {
                "@type": "ImageObject",
                "@id": "{/literal}{$DOMAIN_NAME}{$imgBlog}{literal}",
                "url": "{/literal}{$DOMAIN_NAME}{$imgBlog}{literal}",
                "height": "552",
                "width": "828"
            },
            "url": "{/literal}{$DOMAIN_NAME}{$link_blog}{literal}"
            {/literal}{if $listTag}{literal},"keywords": {/literal}{$listTag|@json_encode}{literal}{/literal}{/if}{literal}
        }{/literal}{if !$smarty.section.i.last}{literal},{/literal}{/if}
{/section}
{literal}]{/literal}
{/if}
{literal}
}
</script>
{/literal}

<script type="text/javascript" src="{$URL_JS}/jquery.sharer.js?v={$up_version}"></script>
<div class="page_container">
    <div class="banner">
		<img class="img100" src="{$clsConfiguration->getImage(site_blog_banner,1920,400)}" width="1920" height="400" alt="{if $show eq 'Default'}{$core->get_Lang('Our Blog')}{else}{$core->get_Lang('Blog in')}{$TD}{/if}"/>
    </div>
	<nav class="breadcrumb-main bg_fff">
        <div class="container">
            <ol class="breadcrumb bg_fff hidden-xs mt0" itemscope itemtype="https://schema.org/BreadcrumbList">
				<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
					<a itemprop="item" href="{$PCMS_URL}" title="{$core->get_Lang('Home')}">
						<span itemprop="name" class="reb">{$core->get_Lang('Home')}</span></a>
					<meta itemprop="position" content="1" />
				</li>
				<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
					<a itemprop="item" href="{$curl}" title="{$core->get_Lang('Blog')}">
						<span itemprop="name" class="reb">{$core->get_Lang('Blog')}</span></a>
					<meta itemprop="position" content="2" />
				</li>
				 {if $show eq 'City'}
				<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
					<a itemprop="item" href="{$clsCity->getLink($city_id,'Blog',false,$oneItemCity)}" title="{$TD}">
						<span itemprop="name" class="reb">{$TD}</span></a>
					<meta itemprop="position" content="3" />
				</li>
				{elseif $show eq 'Country'}
				<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
					<a itemprop="item" href="{$curl}" title="{$TD}">
						<span itemprop="name" class="reb">{$TD}</span></a>
					<meta itemprop="position" content="3" />
				</li>
				{else}
				{/if}
            </ol>
        </div>
    </nav>
    <div id="contentPage" class="pageBlogDefault bg_f1f1f1 pdt50">
		<article class="container">
			<h1 class="title32 color_333 mb20">
			{if $show eq 'Default'}{$core->get_Lang('Our Blog')}{else}{$core->get_Lang('Blog listing by destinations')} {$TD}{/if}</h1>
			<div class="row">
				<div class="col-lg-8 blogLeft mb991_30">
					{section name=i loop=$lstBlogs}
						{assign var=title_blog value=$clsBlog->getTitle($lstBlogs[i].blog_id,$lstBlogs[i])}
						{assign var=link_blog value=$clsBlog->getLink($lstBlogs[i].blog_id,$lstBlogs[i])}
						{assign var=author value=$clsBlog->getAuthor($lstBlogs[i].blog_id,$lstBlogs[i])}
						<article class="blogItem">
							<h3 class="title24 color_333 mb10"><a class="fontSize24 color_333" href="{$link_blog}" title="{$title_blog}">{$title_blog}</a></h3>
							<div class="submitted">
								<i class="fa fa-clock-o" aria-hidden="true"></i> {$clsISO->converTimeToText($lstBlogs[i].publish_date)} {if $author ne ''}<i class="fa fa-user" aria-hidden="true"></i> {$author} {/if}
								<!--<div class="sharethis-inline-share-buttons" data-image="{$DOMAIN_NAME}{$clsISO->getPageImageShare($lstBlogs[i].blog_id,'Blog')}" data-url="{$DOMAIN_NAME}{$link_blog}" data-title="{$title_blog}"></div>-->
								{assign var=link_share value=$link_blog}
								{assign var=title_share value=$title_blog}
								{$core->getBlock('box_share')}
							</div>
							<div class="content">
								<a class="photo" href="{$link_blog}" title="{$title_blog}">
									<img class="trek-blog-gallery lazy img100" src="{$URL_IMAGES}/pixel.png" data-src="{$clsBlog->getImage($lstBlogs[i].blog_id,828,552,$lstBlogs[i])}" alt="{$title_blog}" title="{$title_blog}" draggable="false">
								</a>
								<div class="bodyBlog textjustify992">
									{$clsBlog->getIntro($lstBlogs[i].blog_id,$lstBlogs[i])|strip_tags|truncate:250}
									<a class="linkBlog" href="{$link_blog}" title="{$title_blog}">{$core->get_Lang('Read more')}</a>
								</div>
								
							</div>
						</article>
					{/section}
				{if $totalPage gt '1'}
				<div class="text-center">
					<div class="item-list">
						<div class="pagination pager">
							{$page_view}
						</div>
					</div>
				</div>
				{/if}
				</div>
				<aside class="col-lg-4 rightBlog">
					{$core->getBlock('l_rightblog')}
				</aside  
			></div>
		</article>
		{if $show ne 'Default'}
		<div class="pd50_0 bg_fff">
			<div class="container">
				<div class="destinationAZ">
					{if $show eq 'City'}
					<h2 class="pane-title mt0 mb30">{$core->get_Lang('A-Z Blogs of Other Destinations')}</h2>
					{else}
					<h2 class="pane-title mt0 mb30">{$core->get_Lang('A-Z Blogs of Destinations')} {$TD}</h2>
					{/if}
					<div class="listDestination d-flex flex-wrap">
						{section name=i loop=$letter}
						{assign var = lstCityAZ value = $clsISO->getItemByAlphabetCityBlog($country_id,$city_id,$letter[i])}
						{if $lstCityAZ}
						<ul class="masonry grid-of-blog">
							<h3 class="title"><span>{$letter[i]}</span></h3>
							{section name=j loop=$lstCityAZ}
								{if $clsBlog->countBlogGolobal($country_id,$lstCityAZ[j].city_id) gt 0}
								{assign var=itemCity value=$clsCity->getOne($lstCityAZ[j].city_id,'title,slug')}
								<li><a href="{$clsCity->getLink($lstCityAZ[j].city_id,'Blog',false,$itemCity)}">{$clsCity->getTitle($lstCityAZ[j].city_id,$itemCity)}</a></li>
								{/if}
							{/section}
						</ul>
						{/if}
						{/section}
					</div>
				</div>
			</div>
		</div>
		{/if}
	</div>
</div>