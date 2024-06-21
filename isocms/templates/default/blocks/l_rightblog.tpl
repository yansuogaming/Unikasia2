<div class="sticky_fix">
	<div class="sidebar">
		{if $show ne 'Region' && $clsISO->getCheckActiveModulePackage($package_id,'blog','category','default') && $lstCategory}
		<div class="linkDestination">
		 <div class="filter-articles">
			<h2 class="title_box">{$core->get_Lang('Filter Articles')}</h2>
			 <div class="filter-radio2">
			 {section name=i loop=$listCountry}
								<div class="form-check2">
									<a href="/blog/{$listCountry[i].slug}" title="{$listCountry[i].title}">
                    <label class="form-check-label custom-control-label {if $country_id eq $listCountry[i].country_id}active{/if}"  for="country_id_{$listCountry[i].country_id}">
									   {$listCountry[i].title}
									</label>
										</a>
								</div>
								{/section}
			 </div>
			 
			 <div class="filter-checkbox2">
							{section name=i loop=$lstBlogCat}
                                <div class="form-check2">
									<a href="/blog?blogcat_id={$lstBlogCat[i].blogcat_id}" title="{$lstBlogCat[i].title}">
                  			 <label class="form-check-label custom-control-label {if $cat_id eq $lstBlogCat[i].blogcat_id }active{/if}" for="blogcat_id_{$lstBlogCat[i].blogcat_id}">{$lstBlogCat[i].title}</label>
									</a>
                                </div>
								{/section}
			 </div>

                                <a class="view-more2" id="viewMore">View more</a>
                                <button id="hideCities" style="display:none;">Hide Cities</button>

                            </div>
<!--
			<ul>
				{section name=i loop=$lstCategory}
				{assign var = title value = $lstCategory[i].title}
				<li class="category-link {if $cat_id eq $lstCategory[i].blogcat_id}active{/if}"><a data-abc="{$country_id},{$city_id},{$lstCategory[i].blogcat_id}" href="{$clsBlogCategory->getLink($lstCategory[i].blogcat_id,$lstCategory[i])}" title="{$title}">{$title}</a></li>
				{/section}
			</ul>
-->
		</div>
		<div class="mb30"></div>
		{/if}
		
		{if $lstTourExtension && $clsISO->getCheckActiveModulePackage($package_id,'blog','blog_tour_related','customize')}
		<div class="tour_extension_box">
			<h2 class="title_box">{$core->get_Lang('Tour Related')}</h2>
			{section name=i loop=$lstTourExtension max=3}
			{assign var=tour_id value=$lstTourExtension[i].tour_id}
			{assign var=oneTour value=$clsTour->getOne($tour_id,'slug,title,image')}
			{$clsISO->getBlock('box_item_tour_mobile',["oneTour"=>$oneTour,"tour_id"=>$tour_id])}
			{/section}
		</div>
		<div class="clearfix mb30"></div>
		{/if}


		{if $lstHotelExtension && $clsISO->getCheckActiveModulePackage($package_id,'blog','blog_hotel_related','customize')}
		<div class="hotel_extension_box">
			<h2 class="title_box">{$core->get_Lang('Hotel Related')}</h2>
			{section name=i loop=$lstHotelExtension max=5}
			{assign var=hotel_id value=$lstHotelExtension[i].hotel_id}
			{assign var=itemHotel value=$clsHotel->getOne($hotel_id,'title,slug,star_id,image,price_avg')}
			{assign var=title value=$itemHotel.title}
			{assign var=link value=$clsHotel->getLink($lstHotelExtension[i].hotel_id,$itemHotel)}
			{assign var = getImageStar value = $clsHotel->getHotelStar($lstHotelExtension[i].hotel_id,$itemHotel)}
			<div class="item itemHotel2 cruise-relate" {if $smarty.section.i.iteration gt 3} style="display:none" {/if}>
				<div class="photo">
					<a href="{$link}" data-data="{$hotel_id}" class="cl-img clickviewedHotel"> 
						<img class="img-responsive img100" src="{$clsHotel->getImage($hotel_id,263,175,$itemHotel)}" alt="{$title}" />
					</a> 
				</div>
				<div class="body">
				<h3 class="title"><a href="{$link}" title="{$title}">{$title}</a> <img class="star" height="13" src="{$getImageStar}" alt="star" /></h3>
					<div class="price text-right">
						{$clsHotel->getPrice($hotel_id,'',false,$itemHotel)}
					</div>
				</div>
			</div>
			{/section}
			{if $smarty.section.i.total gt 3 && $smarty.section.i.last}
			<a href="javascript:void(0)" class="view-more-tour-relate">
				{$core->get_Lang('View more')} <i class="fa fa-angle-double-down" aria-hidden="true"></i>
			</a>
			{/if}
		</div>
		<div class="mb30"></div>
		{/if}
			
		{if $lstPopularBlog}
		<div class="blogPopular">
			<h2 class="title_box2">{$core->get_Lang('Popular Blogs')}</h2>
			{section name=i loop=$lstPopularBlog}
				{assign var=titleBlog value=$clsBlog->getTitle($lstPopularBlog[i].blog_id,$lstPopularBlog[i])}
			<div class="row featured-blog">
 				<div class="col-lg-5 overflow-hidden">
					<div class="bloglastest">
 						<a href="{$clsBlog->getLink($lstPopularBlog[i].blog_id)}">
									<div class="featuredblog-img overflow-hidden">
									<img class="img_featureblog" src="{$clsBlog->getImage($lstPopularBlog[i].blog_id, 83, 83)}"
                                                 alt="featured-blog"/></a>
									</div>
                            </div>
							</div>
                            <h3 class="col-lg-7 mt-log-0 txt_featuredblogs">
                                <a href="{$clsBlog->getLink($lstPopularBlog[i].blog_id)}">{$lstPopularBlog[i].title}</a></h3>

                        </div>
			{/section}
			
<!--
			<ul class="listBlog">
				<li><a href="{$clsBlog->getLink($lstPopularBlog[i].blog_id,$lstPopularBlog[i])}" title="{$titleBlog}">{$titleBlog}</a></li>
			</ul>
-->
		</div>
		<div class="mb30"></div>
		{/if}
			
		{if $mod eq 'blog' and $act eq 'detail' and $clsISO->getCheckActiveModulePackage($package_id,'blog','tag','customize')}
		{assign var=listTagBlog value=$clsBlog->getListTag($blog_id,$blogItem)}
		{if $listTagBlog ne ''}
		<div class="blogTag mb20">
			<h2 class="title_box">{$core->get_Lang('Tags')}</h2>
			<ul class="d2-blog-tags">
			{$listTagBlog}
			</ul>
		</div>
		<div class="mb30"></div>
		{/if}
		{/if}
		{if $show ne 'Default'}
		{if $mod eq 'blog' and $act eq 'default'}
		{if $listGuideCat or $listHotelPlace}
			{if $show eq 'Country'}
				{assign var=title value=$clsCountryEx->getTitle($country_id,$oneItemCountry)}
				{assign var=linkHotel value=$clsCountryEx->getLink($country_id,'Hotel',$oneItemCountry)}
				{assign var=linkDestination value=$clsCountryEx->getLink($country_id,'',$oneItemCountry)}
			{elseif $show eq 'City'}
				{assign var=title value=$clsCity->getTitle($city_id,$oneItemCity)}
				{assign var=linkHotel value=$clsCity->getLink($city_id,'Hotel',false,$oneItemCity)}
				{assign var=linkDestination value=$clsCity->getLink($city_id,'',false,$oneItemCity)}
			{else}
				{assign var=title value=$clsRegion->getTitle($region_id,$oneItemRegion)}
				{assign var=linkHotel value=$clsRegion->getLink($country_id,$region_id,'Hotel',false,$oneItemRegion)}
				{assign var=linkDestination value=$clsRegion->getLink($country_id,$region_id,false,$oneItemRegion)}
			{/if}
		<div class="blogLink">
			<h2 class="title_box">{$title}</h2>	
			<ul class="view-content">
				{if $listHotelPlace && $clsISO->getCheckActiveModulePackage($package_id,'hotel','default','default')}
					<li><a class="{if $mod eq 'hotel' && $act eq 'place'}active{/if}" href="{$linkHotel}" title="{$core->get_Lang('Hotels')}">{$core->get_Lang('Hotels')}</a></li>
				{/if}
				<li>
					<a class="{if $mod eq 'destination' && $act eq 'place'}active{/if}" href="{$linkDestination}" title="{$title} {$core->get_Lang('Destinations')}">{$title} {$core->get_Lang('Destinations')}</a>
				</li>
				
				{if $clsISO->getCheckActiveModulePackage($package_id,'guide','cat','default')}
				{if $show eq 'Region'}
					{section name=i loop=$listGuideCat}
					{if $clsGuide->countGuideByRegion($country_id, $region_id, $listGuideCat[i].guidecat_id) gt 0}
					<li {if $guidecat_id eq $listGuideCat[i].guidecat_id}class="active"{/if}><a href="{$clsGuideCat->getLinkRegion($country_id,$region_id,$listGuideCat[i].guidecat_id)}" title="{$clsGuideCat->getTitle($listGuideCat[i].guidecat_id)}">{$clsGuideCat->getTitle($listGuideCat[i].guidecat_id)}</a></li>
					{/if}
					{/section}
				{else}
					{section name=i loop=$listGuideCat}
					{if $clsGuide->countGuideGlobal($country_id, $city_id, $listGuideCat[i].guidecat_id) gt 0}
					<li class="views-row views-row-1 views-row-odd views-row-first mb08">
						<a href="{$clsGuideCat->getLink($country_id,$city_id,$listGuideCat[i].guidecat_id,$listGuideCat[i])}" title="{$clsGuideCat->getTitle($listGuideCat[i].guidecat_id,$listGuideCat[i])}">{$clsGuideCat->getTitle($listGuideCat[i].guidecat_id,$listGuideCat[i])}</a>
					</li>
					{/if}
					{/section}
				{/if}
				{/if}
			</ul>
			<div class="mb30"></div>
		</div>
		{/if}
		{/if}
		{/if}

		<div class="blogPopular" style="display:none">
			<h2 class="title_box">{$core->get_Lang('Popular Blogs')}</h2>
			<ul class="listBlog">
				{section name=i loop=$lstPopularBlog}
				{assign var=titlePopularBlog value=$clsBlog->getTitle($lstPopularBlog[i].blog_id,$lstPopularBlog[i])}
					<li><a href="{$clsBlog->getLink($lstPopularBlog[i].blog_id,$lstPopularBlog[i])}" title="{$titlePopularBlog}">{$titlePopularBlog}</a></li>
				{/section}
			</ul>
		</div>
	</div>
</div>
{literal}
    <script>
		
		document.addEventListener('DOMContentLoaded', () => {
	  const viewMoreLink = document.getElementById('viewMore');
	  const cityCheckboxes = document.querySelectorAll('.filter-checkbox2 > .form-check2');

	  const maxVisibleCheckboxes = 5;
	  let isExpanded = false;

  function updateViewMore() {
    const visibleCheckboxes = cityCheckboxes.length;

    if (visibleCheckboxes > maxVisibleCheckboxes) { // Kiểm tra xem có nhiều hơn 5 checkbox
      viewMoreLink.style.display = 'block';         // Hiển thị nút nếu có nhiều hơn 5
      viewMoreLink.textContent = isExpanded ? "View less" : "View more";
      viewMoreLink.classList.remove('disabled');
    } else {
      viewMoreLink.style.display = 'none';          // Ẩn nút nếu có 5 hoặc ít hơn
      isExpanded = false;                           // Đặt lại trạng thái isExpanded 
      cityCheckboxes.forEach(checkbox => {         // Đảm bảo tất cả checkbox được hiển thị
        checkbox.style.display = 'block';
      });
    }
  }
			cityCheckboxes.forEach((checkbox, index) => {
      if (index >= maxVisibleCheckboxes) {
        checkbox.style.display = isExpanded ? 'block' : 'none';
      } else {
        checkbox.style.display = 'block'; // Hiển thị 5 checkbox đầu tiên
      }
    });
  

	  viewMoreLink.addEventListener("click", () => {
		isExpanded = !isExpanded;
		cityCheckboxes.forEach((checkbox, index) => {
		  if (index >= maxVisibleCheckboxes) {
			checkbox.style.display = isExpanded ? 'block' : 'none';
		  }
		});
		updateViewMore();
	  });
			
			cityCheckboxes.forEach((checkbox, index) => {
    if (index >= maxVisibleCheckboxes) {
      checkbox.style.display = 'none'; // Ẩn các checkbox vượt quá giới hạn ban đầu
    }
  });

	  updateViewMore(); // Gọi hàm khi trang tải xong để cập nhật trạng thái ban đầu
	});
		
		


    </script>
{/literal}