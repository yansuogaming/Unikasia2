
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


<div class="trvgd_header d-flex">

    <div class="trvgd_header_image">

        <img src="{$imgBlog}" alt="{$title_blog}" width="1034" height="861">

    </div>

    <div class="trvgd_header_intro">

        <div class="trvgd_header_txt">

            <span class="trvgd_header_place">

            <p class="country_cat"><a href="/blog/{$blogSlug}" title="{$regionBlog}">{$regionBlog}</a> | <a href="/blog?blogcat_id={$cat_id}" title="{$cateBlog}">{$cateBlog}</a>
            </p>
            </span>

            <h1 class="trvgd_header_title">{$title_blog}</h1>

            <div class="trvgd_header_description">

            {$clsBlog->getIntro($blog_id)|@html_entity_decode}

            </div>

            <div class="trvgd_header_source">

                <div class="box_left">

                <i class="fa-regular fa-clock-three" style="color: #ffffff;"></i>{$publish_date}

                </div>

                <div class="box_right">

                    <i class="fa-solid fa-user" style="color: #ffffff;"></i>{$author}

                </div>

            </div>

        </div>

    </div>

</div>

{literal}

<style>

    .trvgd_header_image {

        width: 53.9%;

        height: 100vh;

    }



    .trvgd_header_image img {

        width: 100%;

        height: 100%;

        object-fit: cover;

    }



    .trvgd_header_intro {

        background: #111D37;

        padding: 220px 320px 220px 47px;

        color: #fff;

        height: 100vh;

        width: calc(100% - 53.9%);

        padding: 47px;

        display: flex;

        flex-direction: column;

        justify-content: center;

    }



    .trvgd_header_place {

        color: #fff;

        font-family: "SF Pro Display";

        font-size: 16px;

        font-style: normal;

        font-weight: 600;

        line-height: 24px;

        margin-bottom: 12px;

        text-transform: uppercase;

    }



    .trvgd_header_place a {

        color: #fff;

        transition: all .3s ease-in-out;

    }



    .trvgd_header_place a:hover {

        color: #ffa718;

    }



    .trvgd_header_title {

        color: #FFF;

        font-family: "SF Pro Display";

        font-size: 32px;

        font-style: normal;

        font-weight: 600;

        line-height: 52px;

        margin-bottom: 26px;

    }



    .trvgd_header_description {

        color: #FFF;

        font-family: "SF Pro Display";

        font-size: 18px;

        font-style: normal;

        font-weight: 500;

        line-height: 28px;

        margin-bottom: 35px;

    }



    .trvgd_header_source {

        color: #FFF;

        font-family: "SF Pro Display";

        font-size: 16px;

        font-style: normal;

        font-weight: 400;

        line-height: 24px;

        display: flex;

        flex-direction: row;

        gap: 25px;

    }



    .trvgd_header_source .box_left,

    .trvgd_header_source .box_right {

        display: flex;

        flex-direction: row;

        gap: 7px;

        align-items: center;

    }



    .trvgd_header .col-md-7,

    .trvgd_header .col-lg-7,

    .trvgd_header .col-md-7,

    .trvgd_header .col-lg-5 {

        padding: 0;

    }



    @media (min-width: 1440px) {

        .trvgd_header_intro {

            padding-right: calc((100vw - 1310px)/2);

        }

    }



    @media (max-width: 1023px) {

        .trvgd_header {

            flex-direction: column-reverse;

        }



        .trvgd_header_image {

            width: 100%;

            height: 100%;

        }



        .trvgd_header_intro {

            width: 100%;

            height: 100%;

            padding: 50px 10px;

        }



        .trvgd_header_txt {

            max-width: 930px;

            margin: 0 auto;

        }

    }



    @media (max-width: 991px) {

        .trvgd_header_txt {

            max-width: 690px;

        }

    }

</style>

{/literal}


