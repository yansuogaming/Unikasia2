<section class="page_container blog_des_destination">
    <div class="container bread_crumb">
        <span class="breadcrumb-item txt_youarehere">You are here:</span>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{PCMS_URL}" title="{$core->get_Lang('Home')}">{$core->get_Lang(Home)}</a></li>
            <li class="breadcrumb-item"><a href="{PCMS_URL}blog" title="{$core->get_Lang('Blog')}">{$core->get_Lang(Blog)}</a></li>
            {if $country_id}
            <li class="breadcrumb-item active" aria-current="page">{$clsCountryEx->getTitle($country_id)}</li>{/if}
        </ol>
    </div>
    <section class="blog-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-3 blog-left">
                    {section name =i loop=$lstBlogLeft}
                    <div class="blog-item">
                        <div class="bloglastest">
                            <a class="text-decoration-none blog_itemblog" href="{$clsBlog->getLink($lstBlogLeft[i].blog_id,$lstBlogLeft[i])}" title="{$title_blog}">
                                <div class="img_blog_left overflow-hidden">
                                    <img class="img-blog img-fluid" src="{$clsBlog->getImage($lstBlogLeft[i].blog_id, 296, 193)}" alt="{$lstBlogLeft[i].slug}">
                                </div>
                        </div>
                        <h2 class="txt_blogitem">{$lstBlogLeft[i].title}</a>
                        </h2>
                        <div class="blog-item-content">{$clsISO->limit_textIso($clsBlog->getIntro($lstBlogLeft[i].blog_id), 20)}</div>
                        <p class="date-time">
                            <i class="fa-regular fa-clock" style="color: #74C0FC;"></i>{$lstBlogLeft[i].publish_date|date_format:"%d %b, %Y"} |
                            <span>{$clsBlogCategory->getTitle($lstBlogLeft[i].cat_id)}</span>
                        </p>
                    </div>
                    {/section}
                </div>
                <div class="col-lg-6 col-sm-6 blog-mid">
                    {section name=i loop=$lstBlogCenterTop}
                    <div class="blog-item">
                        <div class="bloglastest">
                            <a href="{$clsBlog->getLink($lstBlogCenterTop[i].blog_id)}" class="text-decoration-none blog_itemblog" title="{$lstBlogCenterTop[i].title}">
                                <div class="img_blog_mid1 overflow-hidden">
                                    <img class="img-blog-mid img-fluid" src="{$clsBlog->getImage($lstBlogCenterTop[i].blog_id, 624, 408)}" alt="image-blog">
                                </div>
                        </div>
                        <h2 class="blog-item-center">{$lstBlogCenterTop[i].title}
                            </a>
                        </h2>
                        <div class="blog-item-content">{$clsISO->limit_textIso($clsBlog->getIntro($lstBlogCenterTop[i].blog_id), 40)}</div>
                        <p class="date-time">
                            <i class="fa-regular fa-clock" style="color: #74C0FC;"></i> {$lstBlogCenterTop[i].upd_date|date_format:"%d %b, %Y"} |
                            <span>{$clsBlogCategory->getTitle($lstBlogCenterTop[i].cat_id)}</span>
                        </p>
                    </div>
                    {/section}
                    {section name=i loop=$lstBlogCenterBot}
                    <div class="row blog-item blog-item-center-second card-bodyblog">
                        <div class="col-sm d-flex flex-column" style="gap: 16px">
                            <h2 class="m-0 txt_blogitemmid">
                                <a href="{$clsBlog->getLink($lstBlogCenterBot[i].blog_id)}" title="{$lstBlogCenterBot[i].slug}" class="blog_itemblog">
                                    {$lstBlogCenterBot[i].title}
                                </a>
                            </h2>
                            <div class="blog-item-content">
                                <div class="txtblog_p">{$clsISO->limit_textIso($clsBlog->getIntro($lstBlogCenterBot[i].blog_id), 40)}</div>
                            </div>
                            <p class="date-time">
                                <i class="fa-regular fa-clock" style="color: #74C0FC;"></i> {$lstBlogCenterBot[i].publish_date|date_format:"%d %b, %Y"}
                                |
                                <span>{$clsBlogCategory->getTitle($lstBlogCenterBot[i].cat_id)}</span>
                            </p>
                        </div>
                        <div class="col-sm img_blog_mid2 bloglastest">
                            <div class="bloglastest">
                                <div class="blog-mid_img overflow-hidden">
                                    <img class="img-blog mb-3 mb-sm-0 img-fluid" src="{$clsBlog->getImage($lstBlogCenterBot[i].blog_id, 296, 193)}" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                    {/section}
                </div>
                <div class="col-sm-3 blog-end">
                    {section name=i loop=$lstBlogRight}
                    <div class="blog-item">
                        <a href="{$clsBlog->getLink($lstBlogRight[i].blog_id,$lstBlogRight[i])}" class="text-decoration-none blog_itemblog">
                            <div class="img_blog_left overflow-hidden">
                                <img class="img-blog img-fluid" src="{$clsBlog->getImage($lstBlogRight[i].blog_id, 296, 193)}" alt="{$lstBlogLeft[i].slug}">
                            </div>
                            <h2 class="txt_blogitem">{$lstBlogRight[i].title}
                        </a>
                        </h2>
                        <div class="blog-item-content">
                            {$clsISO->limit_textIso($clsBlog->getIntro($lstBlogRight[i].blog_id), 20)}
                        </div>
                        <p class="date-time">
                            <i class="fa-regular fa-clock" style="color: #74C0FC;"></i> {$lstBlogRight[i].publish_date|date_format:"%d %b, %Y"} |
                            <span>{$clsBlogCategory->getTitle($lstBlogRight[i].cat_id)}</span>
                        </p>
                    </div>
                    {/section}
                </div>
            </div>
        </div>
    </section>
    <section class="lastest-blog">
        <div class="container">
            <div class="row">
                <div class="last-blog-item col-sm-9">
                    <h2 class="title-lastest-blog">{$core->get_Lang('LASTEST BLOG')}</h2>
                    {section name=i loop=$lstBlogs}
                    <div class="lastblog">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="bloglastest">
                                    <a href="{$clsBlog->getLink($lstBlogs[i].blog_id)}" class="blog_itemblog">
                                        <div class="lastest-blog-img overflow-hidden">
                                            <img class="img-last-blog img-fluid" src="{$clsBlog->getImage($lstBlogs[i].blog_id, 405, 237)}">
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="txt_titlebloglastest">
                                    <a href="{$clsBlog->getLink($lstBlogs[i].blog_id)}">{$lstBlogs[i].title}</a>
                                </h3>
                                <p class="date-time">
                                    <span><i class="fa-regular fa-clock" style="color: #74C0FC;"></i>
                                        {$lstBlogs[i].publish_date|date_format:"%d %b, %Y"}</span>
                                    <span class="ms-3"><i class="fa-light fa-folder-open" style="color: #004ea8;"></i> {$clsBlogCategory->getTitle($lstBlogs[i].cat_id)}</span>
                                </p>
                                <div class="last-blog-content fw-normal">
                                    {$lstBlogs[i].intro|html_entity_decode}
                                </div>
                            </div>
                        </div>
                    </div>
                    {/section}
                    <div class="last-blog-paginate d-flex justify-content-center mt-5">
                        <nav aria-label="Page navigation">
                            <ul class='pagination'>
                                <li class="page-item">
                                    {$page_view}
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="list_filter">
                        <h3 class="txt_filter">{$core->get_Lang('Filter')}</h3>
                        <div id="selectedFilters" class="selected-filters"></div>
                        <button id="removeAllFilters" class="btn btn_removefilter">
                            <i class="fa-light fa-trash" style="color: #434b5c;"></i>{$core->get_Lang('Remove all filters')}
                        </button>
                    </div>
                    <div class="list_search_filter">
                        <form class="form_search form_box_search" id="countryForm" method="POST" action="">
                            <input type="hidden" name="action" value="search">
                            <div class="search-item d-none d-sm-flex mb-3">
                                <button class="search-item-icon" type="submit">
                                    <i class="fa-regular fa-magnifying-glass"></i>
                                </button>
                                <div class="search-item-txt">
                                    <input type="hidden" name="action" value="search">
                                    <input type="text" name="keyword" value="{$keyword}" autocomplete="off" class="border-0 input-search text-dark" maxlength="255" placeholder="{$core->get_Lang('Search')}">
                                    <input type="hidden" name="search_blog" value="search_blog">
                                </div>
                            </div>
                            <div class="filter-articles">
                                <h3 class="list_fiter_articles">{$core->get_Lang('Filter Articles')}</h3>
                                <div class="filter-radio">
                                    {section name=i loop=$listCountry}
                                    <div class="form-check">
                                        <input class="form-check-input custom-control-input typeSearch" type="radio" name="slug_country" id="country_id_{$listCountry[i].country_id}" value="{$listCountry[i].slug}" {if $slug_country==$listCountry[i].slug}checked{/if} />
                                        <label class="form-check-label custom-control-label" for="country_id_{$listCountry[i].country_id}">
                                            {$listCountry[i].title}
                                        </label>
                                    </div>
                                    {/section}
                                </div>
                                <div class="filter-checkbox">
                                    {section name=i loop=$lstBlogCat}
                                    <div class="form-check">
                                        <input class="form-check-input city typeSearch" type="checkbox" id="blogcat_id_{$lstBlogCat[i].blogcat_id}" name="blogcat_id[]" value="{$lstBlogCat[i].blogcat_id}" {if $clsISO->checkInArray($blogcat_id,$lstBlogCat[i].blogcat_id)}checked{/if}>
                                        <label class="form-check-label" for="blogcat_id_{$lstBlogCat[i].blogcat_id}">{$lstBlogCat[i].title}</label>
                                    </div>
                                    {/section}
                                    <a class="view-more" id="viewMore">{$core->get_Lang('View more')}</a>
                                </div>
                            </div>
                            <input type="hidden" name="filter" value="filter">
                        </form>
                        <div class="featured-blogs">
                            <h2 class="txt_featureblog">{$core->get_Lang('FEATURED BLOG')}</h2>
                            {section name=i loop=$lstFeatureBlog}
                            <div class="row featured-blog">
                                <div class="col-lg-5 overflow-hidden">
                                    <div class="bloglastest">
                                        <a href="{$clsBlog->getLink($lstFeatureBlog[i].blog_id)}">
                                            <div class="featuredblog-img overflow-hidden">
                                                <img class="img_featureblog" src="{$clsBlog->getImage($lstFeatureBlog[i].blog_id, 83, 83)}" alt="featured-blog" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <h3 class="col-lg-7 mt-log-0 txt_featuredblogs">
                                <a href="{$clsBlog->getLink($lstFeatureBlog[i].blog_id)}">{$lstFeatureBlog[i].title}</a>
                            </h3>
                        </div>
                        {/section}
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    {if $lstBlogRecent}
    <section class="recentlyview">
        <div class="container">
            <h2 class="title-recently-view">{$core->get_Lang('Recently viewed')}</h2>
            <div class="row blog-recently-view">
                {section name=i loop=$lstBlogRecent}
                <div class="col-sm-3">
                    <div class="blog-item-recently">
                        <div class="bloglastest">
                            <a href="{$clsBlog->getLink($lstBlogRecent[i].blog_id)}" class="text-decoration-none">
                                <div class="img-blogrecently">
                                    <img class="img-blog" src="{$clsBlog->getImage($lstBlogRecent[i].blog_id, 296, 193)}" alt="image-recent">
                            </a>
                        </div>
                    </div>
                    <h2 class="txt_recently">
                        <a href="{$clsBlog->getLink($lstBlogRecent[i].blog_id)}">{$lstBlogRecent[i].title}</a>
                    </h2>
                    <div class="recently-view-content">
                        <div class="txt_recentlyview">{$clsISO->limit_textIso($clsBlog->getIntro($lstBlogRecent[i].blog_id), 18)}</div>
                    </div>
                    <p class="date-time">
                        <i class="fa-regular fa-clock" style="color: #74C0FC;"></i> {$lstBlogRecent[i].publish_date|date_format:"%d %b, %Y"} | {$clsBlogCategory->getTitle($lstBlogRecent[i].cat_id)}
                    </p>
                </div>
            </div>
            {/section}
        </div>
        </div>
    </section>
    {/if}
    {$core->getBlock('customer_review')}
    {$core->getBlock('top_attraction')}
    {$core->getBlock('also_like')}
</section>
{literal}
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const selectedFiltersDiv = document.getElementById("selectedFilters");
        const countryRadios = document.querySelectorAll('input[name="slug_country"]');
        const cityCheckboxes = document.querySelectorAll('.city');
        const viewMoreLink = document.getElementById('viewMore');
        const removeAllFiltersButton = document.getElementById("removeAllFilters");
        const cityCheckboxContainer = document.querySelector('.filter-checkbox');
        const maxVisibleCheckboxes = 5;
        let isExpanded = false;
        // Ẩn các checkbox ban đầu
        cityCheckboxes.forEach((checkbox, index) => {
            if (index >= maxVisibleCheckboxes) {
                checkbox.parentElement.style.display = 'none';
            }
        });

        function updateViewMore() {
            const visibleCheckboxes = Array.from(cityCheckboxes).filter(checkbox => !checkbox.classList.contains('disabled-checkbox')); // Chỉ đếm những checkbox active
            if (visibleCheckboxes.length > maxVisibleCheckboxes) {
                viewMoreLink.style.display = 'block';
                viewMoreLink.textContent = isExpanded ? "View less" : "View more";
                viewMoreLink.classList.remove('disabled'); // Loại bỏ lớp disabled khi có nhiều hơn 5 checkbox
            } else {
                viewMoreLink.style.display = 'none';
                isExpanded = false;
            }
        }
        viewMoreLink.addEventListener("click", () => {
            isExpanded = !isExpanded;
            cityCheckboxes.forEach((checkbox, index) => {
                if (index >= maxVisibleCheckboxes) {
                    checkbox.parentElement.style.display = isExpanded ? 'block' : 'none';
                }
            });
            updateViewMore();
        });

        function updateSelectedFilters() {
            selectedFiltersDiv.innerHTML = "";
            countryRadios.forEach(radio => {
                if (radio.checked) {
                    addSelectedFilter(radio.parentElement.textContent.trim(), 'country');
                }
            });
            cityCheckboxes.forEach(checkbox => {
                if (checkbox.checked) {
                    addSelectedFilter(checkbox.parentElement.textContent.trim(), 'city');
                }
            });
            updateViewMore();
        }

        function addSelectedFilter(text, type) {
            const filterItem = document.createElement("div");
            filterItem.classList.add("selected-filter-item");
            filterItem.textContent = text;
            filterItem.dataset.type = type;
            const removeButton = document.createElement("span");
            removeButton.classList.add("remove-filter-button");
            removeButton.innerHTML = "&times;";
            removeButton.addEventListener("click", () => {
                removeFilter(filterItem);
            });
            filterItem.appendChild(removeButton);
            selectedFiltersDiv.appendChild(filterItem);
        }

        function removeFilter(filterItem) {
            const type = filterItem.dataset.type;
            const text = filterItem.textContent.slice(0, -1).trim();
            if (type === 'country') {
                countryRadios.forEach(radio => {
                    if (radio.parentElement.textContent.trim() === text) {
                        radio.checked = false;
                        radio.dispatchEvent(new Event('change'));
                    }
                });
            } else if (type === 'city') {
                cityCheckboxes.forEach(checkbox => {
                    if (checkbox.parentElement.textContent.trim() === text) {
                        checkbox.checked = false;
                        checkbox.dispatchEvent(new Event('change'));
                    }
                });
            }
            filterItem.remove();
            updateSelectedFilters();
        }
        removeAllFiltersButton.addEventListener('click', () => {
            countryRadios.forEach(radio => {
                radio.checked = false;
                radio.dispatchEvent(new Event('change'));
            });
            cityCheckboxes.forEach(checkbox => {
                checkbox.checked = false;
                checkbox.dispatchEvent(new Event('change'));
            });
            updateSelectedFilters();
        });
        updateViewMore();
        updateSelectedFilters();
        countryRadios.forEach(radio => {
            radio.addEventListener('change', updateSelectedFilters);
        });
        cityCheckboxes.forEach(checkbox => {
            checkbox.addEventListener('change', updateSelectedFilters);
        });
        $('#countryForm .typeSearch').change(function() {
            $(this).closest('form').submit();
        });
        const lastBlogs = document.querySelectorAll('.lastblog');
        if (lastBlogs.length > 0) {
            lastBlogs[lastBlogs.length - 1].style.borderBottom = 'none';
        }
    });
</script>
{/literal}