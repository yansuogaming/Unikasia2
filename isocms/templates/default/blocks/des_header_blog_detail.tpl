
{assign var=title_blog value=$clsBlog->getTitle($blog_id,$blogItem)}
{assign var=publish_date value=$blogItem.publish_date|date_format:"%d %b, %Y"}
{assign var=upd_date value=$blogItem.upd_date|date_format:"%d %b, %Y"}
{assign var=author value=$blogItem.author}
{assign var=imgBlog value=$clsBlog->getImage($blog_id,1034,861,$blogItem)}
{assign var=listTag value=$clsBlog->getListTag($blog_id,$blogItem)}
{assign var=cateBlog value=$clsBlogCategory->getTitle($cat_id,$blogItem)}

{assign var=cateBlogSlug value=$clsBlogCategory->getSlug($cat_id)}

{assign var=regionBlog value=$clsCountryEx->getTitle($country_id)}
{assign var=blogSlug value=$clsCountryEx->getSlug($country_id)}

<section name ="intro_detailblog">
	    <div class="detail_top_box">

        <div class="d-flex">

            <div class="col-photo">

                <img src="{$imgBlog}" width="1034" height="861" alt="{$title_blog}" />

            </div>

            <div class="col-text">

                <div class="blog_info">
					
                    <p class="country_cat"><a href="/blog/{$blogSlug}" title="{$regionBlog}">{$regionBlog}</a> | <a href="/blog?blogcat_id={$cat_id}" title="{$cateBlog}">{$cateBlog}</a></p>

                    <h1 class="title text3line">{$title_blog}</h1>

                    <div class="intro text5line">

                    {$clsBlog->getIntro($blog_id)|@html_entity_decode}

                    </div>

                    <div lang="publish_author submitted">

                        <span class="publish_date mgr10">
							<i class="fa-regular fa-clock-three" style="color: #ffffff;"></i>{$publish_date}
						</span>
						
                        <span class="author">
							<i class="fa-solid fa-user" style="color: #ffffff;"></i>{$author}
						</span>


                    </div>

                </div>

            </div>

        </div>

    </div>

</section>