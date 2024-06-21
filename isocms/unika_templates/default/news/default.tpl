{assign var=title_new_cat value=$clsNewsCategory->getTitle($newscat_id,$arrayCat)}
{assign var=title_news_top value=$clsNews->getTitle($lstNews[0].news_id,$lstNews[0])}
{assign var=link_news_top value=$clsNews->getLink($lstNews[0].news_id,$lstNews[0])}
<div class="page_container">
	<div class="breadcrumb-main bg_fff">
        <div class="container">
            <ol class="breadcrumb hidden-xs mt0 bg_fff" itemscope itemtype="https://schema.org/BreadcrumbList">
				<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
					<a itemprop="item" href="{$PCMS_URL}" title="{$core->get_Lang('Home')}">
						<span itemprop="name" class="reb">{$core->get_Lang('Home')}</span></a>
					<meta itemprop="position" content="1" />
				</li>
				<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
					<a itemprop="item" href="{$clsISO->getLink('news')}" title="{$core->get_Lang('News')}">
						<span itemprop="name" class="reb">{$core->get_Lang('News')}</span></a>
					<meta itemprop="position" content="2" />
				</li>
				{if $newscat_id gt '0'}
				<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"> 
					<a itemprop="item" href="{$clsNewsCategory->getLink($newscat_id,$arrayCat)}" title="{$title_new_cat}">
						<span itemprop="name" class="reb">{$title_new_cat}</span></a>
					<meta itemprop="position" content="3" />
				</li> 
				{/if}
            </ol>
        </div>
	</div>	
	<div class="newsPage pageNewsDefault bg_fff">
		<div class="container">
			<section class="box_news_view_top">
				<div class="row">
					{if $lstNewsTopView}
                    <div class="col-lg-8">
                        <div class="box_image_top">
                            <a class="photo" href="{$clsNews->getLink($lstNewsTopView[0].news_id,$lstNewsTopView[0])}" title="{$lstNewsTopView[0].title}">
                                <img class="img-responsive img_scale full-width img100 lazy" src="{$URL_IMAGES}/pixel.png"
                                     data-src="{$clsNews->getImage($lstNewsTopView[0].news_id,850,547,$lstNewsTopView[0])}"
                                     alt="{$lstNewsTopView[0].title}"/>
                                <div class="box_text_image">
                                    <div class="text_image_title">
                                        {$lstNewsTopView[0].title}
                                    </div>
                                    <p class="date_public"><span class="name_cat">{$clsNewsCategory->getTitle($lstNewsTopView[0].newscat_id)}</span> &nbsp; &#8226; {$clsISO->converTimeToText($lstNewsTopView[0].reg_date)}</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        {section name=i loop=$lstNewsTopView start=1}
                        {assign var=title_news value=$clsNews->getTitle($lstNewsTopView[i].news_id,$lstNewsTopView[i])}
                        {assign var=link_news value=$clsNews->getLink($lstNewsTopView[i].news_id,$lstNewsTopView[i])}
                        <div class="box_image_top">
                            <a class="photo" href="{$link_news}" title="{$title_news}">
                                <img class="img-responsive img_scale full-width img100 lazy" src="{$URL_IMAGES}/pixel.png"
                                     data-src="{$clsNews->getImage($lstNewsTopView[i].news_id,419,269,$lstNewsTopView[i])}"
                                     alt="{$title_news}"/>
                                <div class="box_text_image">
                                    <div class="title_img_small">
                                        {$title_news}
                                    </div>
                                    <p class="date_public"><span class="name_cat">{$clsNewsCategory->getTitle($lstNewsTopView[i].newscat_id)}</span> &nbsp; &#8226; {$clsISO->converTimeToText($lstNewsTopView[i].reg_date)}</p>
                                </div>
                            </a>
                        </div>
                        {/section}
                    </div>
					{/if}
				</div>
			</section>
            <section class="box_news_list">
                <div class="row">
                    <div class="col-lg-9 leftNews">
                        <h1 class="Title_news">{$core->get_Lang('Latest news')}</h1>
                        <div class="boxListItem mts">
                            {section name=i loop=$lstNews}
                            {assign var=title_news value=$clsNews->getTitle($lstNews[i].news_id,$lstNews[i])}
                            {assign var=link_news value=$clsNews->getLink($lstNews[i].news_id,$lstNews[i])}
                            <div class="Item">
                                <div class="itemNews">
                                    <a class="photo" href="{$link_news}" title="{$title_news}">
                                        <img class="img-responsive img_scale full-width img100 lazy" src="{$URL_IMAGES}/pixel.png" data-src="{$clsNews->getImage($lstNews[i].news_id,297,191,$lstNews[i])}" alt="{$title_news}" />
                                    </a>
                                    <div class="body">
                                        <p class="date_public"><span class="name_cat">{$clsNewsCategory->getTitle($lstNews[i].newscat_id)}</span> &nbsp; &#8226; {$clsISO->converTimeToText($lstNews[i].reg_date)}</p>
                                        <h3 class="title"><a href="{$link_news}" title="{$title_news}">{$title_news}</a></h3>
                                        <div class="intro limit_3line">
                                            {$clsNews->getIntro($lstNews[i].news_id,$lstNews[i])|strip_tags}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {/section}
                        </div>
                        {if $totalPage gt '1'}
                        <div class="clearfix"></div>
                        <div class="pagination pager">
                            {$page_view}
                        </div>
                        {/if}	
                    </div>
                    <div class="col-lg-3 rightNews">
                        <div class="sticky_fix">
                            {$core->getBlock('l_boxcolNews')}
                        </div>
                    </div>
                </div>
            </section>
		</div>
	</div>

</div>