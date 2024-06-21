<?php
/* Smarty version 3.1.38, created on 2024-05-09 16:02:50
  from '/home/unikasia/domains/unikasia.com/private_html/isocms/templates/default/destination/place.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_663c913aca7f34_86258398',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9aeabf208a0d19acbff5dc3f5a130734e37a56d2' => 
    array (
      0 => '/home/unikasia/domains/unikasia.com/private_html/isocms/templates/default/destination/place.tpl',
      1 => 1715243264,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_663c913aca7f34_86258398 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="page_container">
    <nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">You are here</li>
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Destinations</a></li>
                <li class="breadcrumb-item active" aria-current="page">Vietnam</li>
            </ol>
        </div>
    </nav>
    <h1>fegẻg</h1>
    <div class="attractions">
        <?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('top_attraction');?>


    </div>

    <!-- <div class="bg_banner">
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
    </main> -->
</section>

<?php echo '<script'; ?>
>
    var country_id = "<?php echo $_smarty_tpl->tpl_vars['country_id']->value;?>
";
    var city_id = "<?php echo $_smarty_tpl->tpl_vars['city_id']->value;?>
";
<?php echo '</script'; ?>
>
 <?php }
}
