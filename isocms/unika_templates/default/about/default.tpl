<div class="page_container">
	{assign var=itemPage value= $clsPage->getOne($page_id,'title,intro')}
	{assign var=titlePage value= $clsPage->getTitle($page_id,$itemPage)}
	{assign var=introPage value= $clsPage->getIntro($page_id,$itemPage)}
	<nav class="breadcrumb-main bg_fff">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<ol class="breadcrumb hidden-xs mt0 bg_fff" itemscope itemtype="https://schema.org/BreadcrumbList">
						<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
							<a itemprop="item" href="{$PCMS_URL}" title="{$core->get_Lang('Home')}">
								<span itemprop="name" class="reb">{$core->get_Lang('Home')}</span></a>
							<meta itemprop="position" content="1" />
						</li>
						<li  itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="current">
							<a itemprop="item" href="{$curl}" title="{$titlePage}">
								<span itemprop="name" class="reb">{$titlePage}</span></a>
							<meta itemprop="position" content="2" />
						</li>
					</ol>
				</div>
			</div>
		</div>
	</nav>
 	<section class="aboutPage whyPage">
		<div class="container ">
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<div class="Aboutcontent">
						<h1 class="titlePage">{$titlePage}</h1>
						<div class="tinymce_Content">{$introPage}</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>