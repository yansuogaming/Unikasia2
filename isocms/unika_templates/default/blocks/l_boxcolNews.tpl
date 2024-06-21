<div class="sidebar">
	{if $lstCategory && $clsISO->getCheckActiveModulePackage($package_id,'news','category','default')}
    <div class="linkNewsCat mb40">
		<h2 class="titleBoxCat">{if $act eq 'cat'}{$core->get_Lang('Other')} {/if}{$core->get_Lang('Categories')}</h2>
		<ul>
			{section name=i loop=$lstCategory}
			{assign var = title value = $clsNewsCategory->getTitle($lstCategory[i].newscat_id,$lstCategory[i])}
			<li class="category-link {if $lstCategory[i].newscat_id eq $newscat_id} active{/if}"><a href="{$clsNewsCategory->getLink($lstCategory[i].newscat_id,$lstCategory[i])}" title="{$title}"><i class="fa fa-angle-right" aria-hidden="true"></i> {$title}</a></li>
			{/section}
		</ul>
    </div>
	{/if}
	{if $lstLatestNews}
	<div class="newsPopular mb20">
        <h2 class="titleBoxPopular">{$core->get_Lang('Featured news')}</h2>
		{section name=i loop=$lstLatestNews}
		{assign var = link value = $clsNews->getLink($lstLatestNews[i].news_id,$lstLatestNews[i])}
		{assign var = title value = $clsNews->getTitle($lstLatestNews[i].news_id,$lstLatestNews[i])}
		{assign var = image value = $clsNews->getImage($lstLatestNews[i].news_id,76,76,$lstLatestNews[i])}
		<div class="list_post">
			<a href="{$link}" title="{$title}"><img class="full-width img100 lazy" src="{$URL_IMAGES}/pixel.png" data-src="{$image}" alt="{$title}"></a>
			<div class="content_recent">
				<h3><a href="{$link}" title="{$title}">{$title}</a></h3>
			</div>
		</div>
		{/section}
    </div>
	{/if}
</div>