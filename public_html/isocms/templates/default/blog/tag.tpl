<link rel="stylesheet" href="{$URL_CSS}/blog_tag.css?v={$upd_version}">

{assign var=title_tag_blog value=$clsTag->getTitle($tag_id)}

<section id="contentPage" class="blogPage pageBlogTag bg_f1f1f1">
	<div class="container">
		<div class="bread_crumb">
			<span class="breadcrumb-item txt_youarehere">You are here:</span>

			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{PCMS_URL}" title="{$core->get_Lang('Home')}">Home</a></li>
				<li class="breadcrumb-item"><a href="{PCMS_URL}blog" title="{$core->get_Lang('Blog')}">Blog</a></li>
				{if $tag_id}
				<li class="breadcrumb-item active" aria-current="page">{$title_tag_blog}</li>
				{/if}

			</ol>
		</div>

		<div class="listtag_blog" style="display: flex">
			<div class="last-blog-item col-sm-9">
				<h1 class="title32 color_333 mb20">{$core->get_Lang('Blog listing by tag')} {$title_tag_blog} </h1>
				{section name=i loop=$lstBlogs}
				<div class="lastblog">
					<div class="row">

						{assign var=title_blog value=$clsBlog->getTitle($lstBlogs[i].blog_id)}
						{assign var=link_blog value=$clsBlog->getLink($lstBlogs[i].blog_id)}

						<div class="col-md-6">
							<div class="bloglastest">
								<a href="{$clsBlog->getLink($lstBlogs[i].blog_id)}" class="blog_itemblog">
									<div class="lastest-blog-img overflow-hidden">
										<img class="img-last-blog img-fluid" src="{$clsBlog->getImage($lstBlogs[i].blog_id,405,237)}" alt="{$title_blog}" title="{$title_blog}" width="100%" height="auto" draggable="false" />
									</div>
								</a>
							</div>
						</div>

						<div class="col-md-6">
							<h3 class="txt_titlebloglastest">
								<a class="fontSize24 color_333" href="{$link_blog}" title="{$title_blog}">{$title_blog}</a>
							</h3>
							<p class="date-time">
								<span><i class="fa-regular fa-clock" style="color: #74C0FC;" aria-hidden="true"></i>
									{$clsISO->converTimeToText($lstBlogs[i].reg_date)} {if $clsBlog->getAuthor($lstBlogs[i].blog_id) ne ''}</span>
								<span class="ms-3"><i class="fa-solid fa-user" style="color: #004ea8;" aria-hidden="true"></i> {$clsBlog->getAuthor($lstBlogs[i].blog_id)} {/if}</span>
							</p>
							<div class="last-blog-content fw-normal">
								{$clsBlog->getIntro($lstBlogs[i].blog_id)|strip_tags|truncate:250}
								<a class="linkBlog" href="{$link_blog}" rel="tag" title="{$title_blog}">{$core->get_Lang('Read more')}</a>
							</div>
						</div>
					</div>
				</div>

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

			<aside class="col-lg-3 sidebar rightBlog">
				{$core->getBlock('l_rightblog')}
			</aside>
		</div>
</section>
</div>

<script>
	$(document).ready(function() {
		if ($('.lastblog .bloglastest').length === 1) { // Hoặc '.col-md-6'
			$('.lastblog').css('border-bottom', 'none');
		}
	});

	$(document).ready(function() {
		$('.unika_header').removeClass('unika_header_2');

		$(window).scroll(function() {
			requestAnimationFrame(function() {
				$('.unika_header').removeClass('unika_header_2');
			});
		});
	});
</script>