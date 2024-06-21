{assign var=title value=$clsCountry->getTitle($country_id,$countryItem)}
<section class="page_container">
    <div class="bg_banner">
	{if $city_id}
	{assign var=titleCity value=$clsCity->getTitle($city_id,$cityItem)}
	{if $deviceType eq 'phone'}
	<img class="img100" src="{$clsCity->getBanner($city_id,480,320,$cityItem)}" alt="{$titleCity}">
	{else}
	<img class="img100" src="{$clsCity->getBanner($city_id,1920,400,$cityItem)}" alt="{$titleCity}">
	{/if}
	{else}
	{if $deviceType eq 'phone'}
	<img class="img100" src="{$clsCountry->getBanner($country_id,480,320,$countryItem)}" alt="{$title}">
	{else}
	<img class="img100" src="{$clsCountry->getBanner($country_id,1920,400,$countryItem)}" alt="{$title}">
	{/if}
	{/if}
	</div>
    <nav class="breadcrumb-main breadcrumb-{$mod} bg_fff">
        <div class="container">
            <ol class="breadcrumb hidden-xs mt0 bg_fff" itemscope itemtype="https://schema.org/BreadcrumbList">
                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"> 
					<a itemprop="item" href="{$PCMS_URL}"> <span itemprop="name" class="reb">{$core->get_Lang('Trang chủ')}</span></a>
                    <meta itemprop="position" content="1" />
                </li>
				{if $_LANG_ID eq 'vn'}
                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"> <a itemprop="item" href="{$curl}"> <span itemprop="name" class="reb">{$core->get_Lang('Du lịch nước ngoài')}</span></a>
                    <meta itemprop="position" content="2" />
                </li>
                {if $city_id}
                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"> <a itemprop="item" href="{$curl}"> <span itemprop="name" class="reb">{$core->get_Lang('Du lịch')} {$title}</span></a>
                    <meta itemprop="position" content="3" />
                </li>
                {/if}
				{else}
				<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"> <a itemprop="item" href="{$curl}"> <span itemprop="name" class="reb">{$core->get_Lang('Destinations')}</span></a>
                    <meta itemprop="position" content="2" />
                </li>
                {if $city_id}
                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"> <a itemprop="item" href="{$curl}"> <span itemprop="name" class="reb">{$title}</span></a>
                    <meta itemprop="position" content="3" />
                </li>
                {/if}
				{/if}
            </ol>
        </div>
    </nav>
    <main class="maincontent pd50_0">
        <section class="introPage">
            <div class="container">
                <div class="introbox"> 
					{if $city_id}
                    <h1 class="title h2 text_center text_normal">{$titleCity}</h1>
                    {assign var=introCity value=$clsCity->getIntro($city_id,'',false,$cityItem)}
                    {if $introCity}
                    <div class="intro text_center">
						{$introCity}
						<div class="content">{$clsCity->getContent($city_id,$cityItem)}</div>
					</div>
                    <a class="seemore seeclick text_center " href="javascript:void(0);" title="{$core->get_Lang('Learn more')}">{$core->get_Lang('Learn more')}</a> <a class="seeless seeclick text_center" href="javascript:void(0);" title="{$core->get_Lang('Less')}" style="display: none">{$core->get_Lang('Less')}</a> 
					{/if}
                    {else}
                    <h1 class="title h2 text_center text_normal">{$title}</h1>
                    {assign var=introCountry value=$clsCountry->getIntro($country_id,'',false,$countryItem)}
                    {if $introCountry}
                    <div class="intro text_center">
						{$introCountry}
						<div class="content">{$clsCountry->getContent($country_id,$countryItem)}</div>
					</div>
                    <a class="seemore seeclick text_center " href="javascript:void(0);" title="{$core->get_Lang('Learn more')}">{$core->get_Lang('Learn more')}</a> <a class="seeless seeclick text_center" href="javascript:void(0);" title="{$core->get_Lang('Less')}" style="display: none">{$core->get_Lang('Less')}</a> 
					{/if}
                    {/if}
                    {literal} 
                    <script>
						$('.introbox .intro').each(function(){
							var $_this = $(this);
							if($_this.height()>69){
								$_this.css("height","69px");
								$_this.closest(".introbox").find(".seemore").show();
							}else{
								$_this.closest(".introbox").find(".seeless").hide();
							}
						});
				    </script> 
                    {/literal} 
				</div>
            </div>
        </section>
        <section class="tourTravelonPage">
            <div class="container">
                <h2 class="titlebox h3 bold text_upper">{$title} {$core->get_Lang('Tours')}</h2>
                <div class="contentListTravel">
                    <div class="row">
                        <div class="col-lg-3">
							<div class="block991" style="display:none">
								<div class="tag-search">
									<div class="btn_open_modal btn_quick_search bg_main" data-bs-toggle="modal" data-bs-target="#filter_search" >
										<span>{$core->get_Lang('Filter Trip')}</span> <i class="fa fa-sliders" aria-hidden="true"></i>
									</div>
								</div>
							</div> 
							<div class="modal fade" id="filter_search" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="filter_left">
											<div class="modal-header">
												<button type="button" class="close" data-bs-dismiss="modal"><span aria-hidden="true">X</span><span class="sr-only">{$core->get_Lang('Close')}</span></button> {$core->get_Lang('Search')}
											</div>
											<div class="modal-body">
												<div class="totalTour mb20">
												   <h2 class="totalTourpage bg_main h3">{$core->get_Lang('Find')} {$totalTour} {if $totalTour gt 1}{$core->get_Lang('Tours')}{else}{$core->get_Lang('Tour')}{/if}</h2>
												</div>
												{$core->getBlock('filter_left_trip')}
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
                        <div class="col-lg-9">
                            <div class="listTourItem">
                                <div class="row"> 
									{section name=i loop=$lstTour}
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6"> 
										{assign var=tour_id value=$lstTour[i].tour_id}
										{assign var=oneTour value=$lstTour[i]}
                                        {$clsISO->getBlock('box_item_tour_mobile',["tour_id"=>$tour_id,"oneTour"=>$oneTour])} 
									</div>
                                    {/section} 
								</div>
                            </div>
                            {if $totalPage gt '1'}
                            <div class="clearfix"></div>
                            <div class="pagination pager"> {$page_view} </div>
                            {/if} 
						</div>
                    </div>
                </div>
            </div>
        </section>
        <section class="regionTravelonPage">
            <div class="container"> 
				{section name=a loop=$lstRegion2 max=1}
                {assign var =lstCityRegion2 value =$clsCity->getListCityByRegion($lstRegion2[a].region_id,$city_id)}
                {if $lstCityRegion2}
                <h2 class=" h3 bold text_upper text_center">{$core->get_Lang('A-Z TOURIST SPOTS IN')} {$clsCountry->getTitle($country_id)}</h2>
                <div class="destinationAZ"> 
					{section name=i loop=$lstRegion2}
                    {assign var =lstCityRegion value =$clsCity->getListCityByRegion($lstRegion2[i].region_id,$city_id)}
                    {if $lstCityRegion gt 0}
                    <h3 class="titleRegion bg_main"> {$clsRegion->getTitle($lstRegion2[i].region_id)} </h3>
                    <div class="listCity">
                        <div class="row"> 
							{section name=j loop=$lstCityRegion}
                            {assign var=totalTourCity value= $clsTour->countTourByCity($country_id,$lstCityRegion[j].city_id)}
                            <div class="col-md-2">
                                <p class="title"><a href="{$clsCity->getLinkOutbound($lstCityRegion[j].city_id)}" title="{$clsCity->getTitle($lstCityRegion[j].city_id)}">{$clsCity->getTitle($lstCityRegion[j].city_id)} {if $totalTourCity}<span>({$totalTourCity})</span> {/if}</a></p>
                            </div>
                            {/section} 
						</div>
                    </div>
                    {/if}
                    {/section} 
				</div>
                {/if}
                {/section} 
			</div>
        </section>
    </main>
</section>
<script >
   var country_id ='{$country_id}';
   var city_id ='{$city_id}'
</script> 
{literal} 
<script>
   var owl = $('.owl-carousel').owlCarousel({
   nav:true,
   dots:false,
   loop:false,
   animateOut: 'slideOutDown',
   animateIn: 'flipInX',
   smartSpeed:450,
   margin:10,
   responsiveClass:true,
   responsive: {
   	0: {
   		items: 1,
   		nav:false,
   	},
   	600: {
   		items: 1
   	},
   	1000: {
   		items: 3,
   	}
   }
   })
    owl.on('change.owl.carousel', function(el){
	   console.log(el);
	   var number = el.item.index;
	   $('.owl-item').removeClass('firstActiveItem');
	   $('.owl-item').eq(number+1).addClass('firstActiveItem');
	    var guide_id= $(".owl-item.firstActiveItem .Item").attr('guidecat_id');
	   	loadlistGuideByCat(guide_id);
   });
	
    var total = $('.owl-carousel .owl-stage .owl-item.active').length;
	$('.owl-carousel .owl-stage .owl-item.active').each(function(index){ // nested class from activator class
		if (index === 0) {
			// this is the first one
			$(this).addClass('firstActiveItem'); // add class in first item
		}
	});
	//Hover Item //
	$(".owl-item").mouseenter(function(){
		var id= $(this).attr('data-index');
	    $(".owl-item").removeClass('firstActiveItem');
        $(this).addClass('firstActiveItem');
	    var guide_id= $(".owl-item.firstActiveItem .Item").attr('guidecat_id');
	   	loadlistGuideByCat(guide_id);
	}); 
//	  .on('changed.owl.carousel', function(el){
//   var number = el.item.index,
//   	guidecat_id = $('.owl-item').eq(number).find('.Item').attr('guidecat_id');
//   	$('.owl-item.ActiveContent').removeClass('ActiveContent');
//   	$('.owl-item').eq(number).addClass('ActiveContent');
//   	loadlistGuideByCat(guidecat_id);
//   });
   function loadlistGuideByCat(guide_id){
   $('.ListGuide').html('');
   $.ajax({  
   	type:'POST',
   	url:path_ajax_script+'/index.php?mod=tour&act=listGuide&lang='+LANG_ID, 
   	data:{
   		"cat_id":guide_id,
   		"country_id":country_id,
   		"city_id":city_id,
   	},
   	dataType:'html',
   	success:function(html){
   		$('.ListGuide').append( html );
   	}
   });
   }
   $('.play').on('click',function(){
   owl.trigger('play.owl.autoplay',[2000])
   })
   $('.stop').on('click',function(){
   owl.trigger('stop.owl.autoplay')
   })
</script> 
{/literal}
{literal} 
<script>
$('.seemore').on('click',function () {
   var $this= $(this);
   $this.closest('.introbox').find('.intro').css('height','100%');
   $this.closest('.introbox').find('.seeless').show();
   $this.closest('.ListGuide').find('.row').css('height','100%');
   $this.closest('.ListGuide').find('.seeless').show();
   $this.hide();
});
$('.seeless').on('click',function () {
   var $this= $(this);
   $this.closest('.introbox').find('.intro').css('height','69px');
   $this.closest('.introbox').find('.seemore').show();
   $this.closest('.ListGuide').find('.row').removeAttr('style');
   $this.closest('.ListGuide').find('.seemore').show();
   $this.hide();
});
</script> 
{/literal}
{literal} 
<script>
   $('.seemore').on('click',function () {
   	$(this).closest('.ListGuide').find('.row').css('height','100%');
   	$(this).closest('.ListGuide').find('.seeless').show();
   	$(this).hide();
   });
   $('.seeless').on('click',function () {
   	$(this).closest('.ListGuide').find('.row').removeAttr('style');
   	$(this).closest('.ListGuide').find('.seemore').show();
   	$(this).hide();
   });
</script> 
{/literal}