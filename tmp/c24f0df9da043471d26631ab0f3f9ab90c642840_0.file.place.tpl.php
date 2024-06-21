<?php
/* Smarty version 3.1.38, created on 2024-04-08 14:19:14
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/destination/place.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66139a72a69c38_48830909',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c24f0df9da043471d26631ab0f3f9ab90c642840' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/destination/place.tpl',
      1 => 1705545169,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66139a72a69c38_48830909 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('title', $_smarty_tpl->tpl_vars['clsCountry']->value->getTitle($_smarty_tpl->tpl_vars['country_id']->value,$_smarty_tpl->tpl_vars['countryItem']->value));?>
<section class="page_container">
    <div class="bg_banner">
	<?php if ($_smarty_tpl->tpl_vars['city_id']->value) {?>
	<?php $_smarty_tpl->_assignInScope('titleCity', $_smarty_tpl->tpl_vars['clsCity']->value->getTitle($_smarty_tpl->tpl_vars['city_id']->value,$_smarty_tpl->tpl_vars['cityItem']->value));?>
	<?php if ($_smarty_tpl->tpl_vars['deviceType']->value == 'phone') {?>
	<img class="img100" src="<?php echo $_smarty_tpl->tpl_vars['clsCity']->value->getBanner($_smarty_tpl->tpl_vars['city_id']->value,480,320,$_smarty_tpl->tpl_vars['cityItem']->value);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['titleCity']->value;?>
">
	<?php } else { ?>
	<img class="img100" src="<?php echo $_smarty_tpl->tpl_vars['clsCity']->value->getBanner($_smarty_tpl->tpl_vars['city_id']->value,1920,400,$_smarty_tpl->tpl_vars['cityItem']->value);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['titleCity']->value;?>
">
	<?php }?>
	<?php } else { ?>
	<?php if ($_smarty_tpl->tpl_vars['deviceType']->value == 'phone') {?>
	<img class="img100" src="<?php echo $_smarty_tpl->tpl_vars['clsCountry']->value->getBanner($_smarty_tpl->tpl_vars['country_id']->value,480,320,$_smarty_tpl->tpl_vars['countryItem']->value);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
">
	<?php } else { ?>
	<img class="img100" src="<?php echo $_smarty_tpl->tpl_vars['clsCountry']->value->getBanner($_smarty_tpl->tpl_vars['country_id']->value,1920,400,$_smarty_tpl->tpl_vars['countryItem']->value);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
">
	<?php }?>
	<?php }?>
	</div>
    <nav class="breadcrumb-main breadcrumb-<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
 bg_fff">
        <div class="container">
            <ol class="breadcrumb hidden-xs mt0 bg_fff" itemscope itemtype="https://schema.org/BreadcrumbList">
                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"> 
					<a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
"> <span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Trang chủ');?>
</span></a>
                    <meta itemprop="position" content="1" />
                </li>
				<?php if ($_smarty_tpl->tpl_vars['_LANG_ID']->value == 'vn') {?>
                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"> <a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['curl']->value;?>
"> <span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Du lịch nước ngoài');?>
</span></a>
                    <meta itemprop="position" content="2" />
                </li>
                <?php if ($_smarty_tpl->tpl_vars['city_id']->value) {?>
                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"> <a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['curl']->value;?>
"> <span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Du lịch');?>
 <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</span></a>
                    <meta itemprop="position" content="3" />
                </li>
                <?php }?>
				<?php } else { ?>
				<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"> <a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['curl']->value;?>
"> <span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Destinations');?>
</span></a>
                    <meta itemprop="position" content="2" />
                </li>
                <?php if ($_smarty_tpl->tpl_vars['city_id']->value) {?>
                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"> <a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['curl']->value;?>
"> <span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</span></a>
                    <meta itemprop="position" content="3" />
                </li>
                <?php }?>
				<?php }?>
            </ol>
        </div>
    </nav>
    <main class="maincontent pd50_0">
        <section class="introPage">
            <div class="container">
                <div class="introbox"> 
					<?php if ($_smarty_tpl->tpl_vars['city_id']->value) {?>
                    <h1 class="title h2 text_center text_normal"><?php echo $_smarty_tpl->tpl_vars['titleCity']->value;?>
</h1>
                    <?php $_smarty_tpl->_assignInScope('introCity', $_smarty_tpl->tpl_vars['clsCity']->value->getIntro($_smarty_tpl->tpl_vars['city_id']->value,'',false,$_smarty_tpl->tpl_vars['cityItem']->value));?>
                    <?php if ($_smarty_tpl->tpl_vars['introCity']->value) {?>
                    <div class="intro text_center">
						<?php echo $_smarty_tpl->tpl_vars['introCity']->value;?>

						<div class="content"><?php echo $_smarty_tpl->tpl_vars['clsCity']->value->getContent($_smarty_tpl->tpl_vars['city_id']->value,$_smarty_tpl->tpl_vars['cityItem']->value);?>
</div>
					</div>
                    <a class="seemore seeclick text_center " href="javascript:void(0);" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Learn more');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Learn more');?>
</a> <a class="seeless seeclick text_center" href="javascript:void(0);" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Less');?>
" style="display: none"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Less');?>
</a> 
					<?php }?>
                    <?php } else { ?>
                    <h1 class="title h2 text_center text_normal"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
                    <?php $_smarty_tpl->_assignInScope('introCountry', $_smarty_tpl->tpl_vars['clsCountry']->value->getIntro($_smarty_tpl->tpl_vars['country_id']->value,'',false,$_smarty_tpl->tpl_vars['countryItem']->value));?>
                    <?php if ($_smarty_tpl->tpl_vars['introCountry']->value) {?>
                    <div class="intro text_center">
						<?php echo $_smarty_tpl->tpl_vars['introCountry']->value;?>

						<div class="content"><?php echo $_smarty_tpl->tpl_vars['clsCountry']->value->getContent($_smarty_tpl->tpl_vars['country_id']->value,$_smarty_tpl->tpl_vars['countryItem']->value);?>
</div>
					</div>
                    <a class="seemore seeclick text_center " href="javascript:void(0);" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Learn more');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Learn more');?>
</a> <a class="seeless seeclick text_center" href="javascript:void(0);" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Less');?>
" style="display: none"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Less');?>
</a> 
					<?php }?>
                    <?php }?>
                     
                    <?php echo '<script'; ?>
>
						$('.introbox .intro').each(function(){
							var $_this = $(this);
							if($_this.height()>69){
								$_this.css("height","69px");
								$_this.closest(".introbox").find(".seemore").show();
							}else{
								$_this.closest(".introbox").find(".seeless").hide();
							}
						});
				    <?php echo '</script'; ?>
> 
                     
				</div>
            </div>
        </section>
        <section class="tourTravelonPage">
            <div class="container">
                <h2 class="titlebox h3 bold text_upper"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Tours');?>
</h2>
                <div class="contentListTravel">
                    <div class="row">
                        <div class="col-lg-3">
							<div class="block991" style="display:none">
								<div class="tag-search">
									<div class="btn_open_modal btn_quick_search bg_main" data-bs-toggle="modal" data-bs-target="#filter_search" >
										<span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Filter Trip');?>
</span> <i class="fa fa-sliders" aria-hidden="true"></i>
									</div>
								</div>
							</div> 
							<div class="modal fade" id="filter_search" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="filter_left">
											<div class="modal-header">
												<button type="button" class="close" data-bs-dismiss="modal"><span aria-hidden="true">X</span><span class="sr-only"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Close');?>
</span></button> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Search');?>

											</div>
											<div class="modal-body">
												<div class="totalTour mb20">
												   <h2 class="totalTourpage bg_main h3"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Find');?>
 <?php echo $_smarty_tpl->tpl_vars['totalTour']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['totalTour']->value > 1) {
echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Tours');
} else {
echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Tour');
}?></h2>
												</div>
												<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('filter_left_trip');?>

											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
                        <div class="col-lg-9">
                            <div class="listTourItem">
                                <div class="row"> 
									<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstTour']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6"> 
										<?php $_smarty_tpl->_assignInScope('tour_id', $_smarty_tpl->tpl_vars['lstTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_id']);?>
										<?php $_smarty_tpl->_assignInScope('oneTour', $_smarty_tpl->tpl_vars['lstTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
                                        <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getBlock('box_item_tour_mobile',array("tour_id"=>$_smarty_tpl->tpl_vars['tour_id']->value,"oneTour"=>$_smarty_tpl->tpl_vars['oneTour']->value));?>
 
									</div>
                                    <?php
}
}
?> 
								</div>
                            </div>
                            <?php if ($_smarty_tpl->tpl_vars['totalPage']->value > '1') {?>
                            <div class="clearfix"></div>
                            <div class="pagination pager"> <?php echo $_smarty_tpl->tpl_vars['page_view']->value;?>
 </div>
                            <?php }?> 
						</div>
                    </div>
                </div>
            </div>
        </section>
        <section class="regionTravelonPage">
            <div class="container"> 
				<?php
$__section_a_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstRegion2']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_a_1_total = min(($__section_a_1_loop - 0), 1);
$_smarty_tpl->tpl_vars['__smarty_section_a'] = new Smarty_Variable(array());
if ($__section_a_1_total !== 0) {
for ($__section_a_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_a']->value['index'] = 0; $__section_a_1_iteration <= $__section_a_1_total; $__section_a_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_a']->value['index']++){
?>
                <?php $_smarty_tpl->_assignInScope('lstCityRegion2', $_smarty_tpl->tpl_vars['clsCity']->value->getListCityByRegion($_smarty_tpl->tpl_vars['lstRegion2']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_a']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_a']->value['index'] : null)]['region_id'],$_smarty_tpl->tpl_vars['city_id']->value));?>
                <?php if ($_smarty_tpl->tpl_vars['lstCityRegion2']->value) {?>
                <h2 class=" h3 bold text_upper text_center"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('A-Z TOURIST SPOTS IN');?>
 <?php echo $_smarty_tpl->tpl_vars['clsCountry']->value->getTitle($_smarty_tpl->tpl_vars['country_id']->value);?>
</h2>
                <div class="destinationAZ"> 
					<?php
$__section_i_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstRegion2']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_2_total = $__section_i_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_2_total !== 0) {
for ($__section_i_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_2_iteration <= $__section_i_2_total; $__section_i_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                    <?php $_smarty_tpl->_assignInScope('lstCityRegion', $_smarty_tpl->tpl_vars['clsCity']->value->getListCityByRegion($_smarty_tpl->tpl_vars['lstRegion2']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['region_id'],$_smarty_tpl->tpl_vars['city_id']->value));?>
                    <?php if ($_smarty_tpl->tpl_vars['lstCityRegion']->value > 0) {?>
                    <h3 class="titleRegion bg_main"> <?php echo $_smarty_tpl->tpl_vars['clsRegion']->value->getTitle($_smarty_tpl->tpl_vars['lstRegion2']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['region_id']);?>
 </h3>
                    <div class="listCity">
                        <div class="row"> 
							<?php
$__section_j_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstCityRegion']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_j_3_total = $__section_j_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_j'] = new Smarty_Variable(array());
if ($__section_j_3_total !== 0) {
for ($__section_j_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] = 0; $__section_j_3_iteration <= $__section_j_3_total; $__section_j_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']++){
?>
                            <?php $_smarty_tpl->_assignInScope('totalTourCity', $_smarty_tpl->tpl_vars['clsTour']->value->countTourByCity($_smarty_tpl->tpl_vars['country_id']->value,$_smarty_tpl->tpl_vars['lstCityRegion']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['city_id']));?>
                            <div class="col-md-2">
                                <p class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['clsCity']->value->getLinkOutbound($_smarty_tpl->tpl_vars['lstCityRegion']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['city_id']);?>
" title="<?php echo $_smarty_tpl->tpl_vars['clsCity']->value->getTitle($_smarty_tpl->tpl_vars['lstCityRegion']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['city_id']);?>
"><?php echo $_smarty_tpl->tpl_vars['clsCity']->value->getTitle($_smarty_tpl->tpl_vars['lstCityRegion']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['city_id']);?>
 <?php if ($_smarty_tpl->tpl_vars['totalTourCity']->value) {?><span>(<?php echo $_smarty_tpl->tpl_vars['totalTourCity']->value;?>
)</span> <?php }?></a></p>
                            </div>
                            <?php
}
}
?> 
						</div>
                    </div>
                    <?php }?>
                    <?php
}
}
?> 
				</div>
                <?php }?>
                <?php
}
}
?> 
			</div>
        </section>
    </main>
</section>
<?php echo '<script'; ?>
 >
   var country_id ='<?php echo $_smarty_tpl->tpl_vars['country_id']->value;?>
';
   var city_id ='<?php echo $_smarty_tpl->tpl_vars['city_id']->value;?>
'
<?php echo '</script'; ?>
> 
 
<?php echo '<script'; ?>
>
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
<?php echo '</script'; ?>
> 

 
<?php echo '<script'; ?>
>
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
<?php echo '</script'; ?>
> 

 
<?php echo '<script'; ?>
>
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
<?php echo '</script'; ?>
> 
<?php }
}
