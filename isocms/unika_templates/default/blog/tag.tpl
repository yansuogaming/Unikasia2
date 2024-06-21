{assign var=title_tag_blog value=$clsTag->getTitle($tag_id)}
<div class="page_container">
	<nav class="breadcrumb-main breadcrumb-{$mod} bg_fff">
        <div class="container">
            <ol class="breadcrumb hidden-xs mt0 bg_fff" itemscope itemtype="http://schema.org/BreadcrumbList">
				<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
					<a itemprop="item" href="{$PCMS_URL}" title="{$core->get_Lang('Home')}">
						<span itemprop="name" class="reb">{$core->get_Lang('Home')}</span></a>
					<meta itemprop="position" content="1" />
				</li>
				<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
					<a itemprop="item" title="{$core->get_Lang('Blog Tag')}">
						<span itemprop="name" class="reb">{$core->get_Lang('Blog Tag')}</span></a>
					<meta itemprop="position" content="2" />
				</li>  				
				<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"> 
					<a itemprop="item" href="{$curl}" title="{$title_tag_blog}">
						<span itemprop="name" class="reb">{$title_tag_blog}</span></a>
					<meta itemprop="position" content="3" />
				</li>
            </ol>
        </div>
    </nav>
    <section id="contentPage" class="blogPage pageBlogTag bg_f1f1f1">
		<div class="container">
			<h1 class="title32 color_333 mb20">{$core->get_Lang('Blog listing by tag')} {$title_tag_blog} </h1>
			<div class="row">
				<div class="col-lg-8 blogLeft mb768_30">
					{section name=i loop=$lstBlogs}
                    {assign var=title_blog value=$clsBlog->getTitle($lstBlogs[i].blog_id)}
                    {assign var=link_blog value=$clsBlog->getLink($lstBlogs[i].blog_id)}
                    <article class="blogItem">
                        <h3 class="title24 color_333 mb10"><a class="fontSize24 color_333" href="{$link_blog}" title="{$title_blog}">{$title_blog}</a></h3>
                        <div class="submitted">
                            <i class="fa fa-clock-o" aria-hidden="true"></i> {$clsISO->converTimeToText($lstBlogs[i].reg_date)} {if $clsBlog->getAuthor($lstBlogs[i].blog_id) ne ''}&nbsp;<i class="fa fa-user" aria-hidden="true"></i> {$clsBlog->getAuthor($lstBlogs[i].blog_id)} {/if}
                            <div class="sharethis-buttons mt0">
                                <div class="sharethis-wrapper">
                                    <div class="addthis_toolbox addthis_default_style" addthis:media="{$DOMAIN_NAME}{$clsBlog->getImage($lstBlogs[i].blog_id,400,300)}" addthis:url="{$DOMAIN_NAME}{$link_blog}" addthis:title="{$title_blog}">
                                    <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                                    <a class="addthis_button_tweet"></a>
                                    <a class="addthis_button_pinterest_pinit"></a>
                                    <a class="addthis_counter addthis_pill_style"></a>
                                    </div>
                                    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=thiembv"></script>
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <div class="photo">
                                <img class="trek-blog-gallery lazy" src="{$clsBlog->getImage($lstBlogs[i].blog_id,730,487)}" alt="{$title_blog}" title="{$title_blog}" width="100%" height="auto" draggable="false"/>
                            </div>
                            <div class="bodyBlog textjustify992">
                                {$clsBlog->getIntro($lstBlogs[i].blog_id)|strip_tags|truncate:250}
                                <a class="linkBlog" href="{$link_blog}" rel="tag" title="{$title_blog}">{$core->get_Lang('Read more')}</a>
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
				<aside class="col-lg-4 sidebar rightBlog">
					{$core->getBlock('l_rightblog')}
				</aside>  
			</div>
		</div>                
    </section>
</div>