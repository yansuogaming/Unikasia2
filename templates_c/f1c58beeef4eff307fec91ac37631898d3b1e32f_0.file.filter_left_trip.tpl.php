<?php
/* Smarty version 3.1.38, created on 2024-05-09 16:02:50
  from '/home/unikasia/domains/unikasia.com/private_html/isocms/templates/default/blocks/filter_left_trip.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_663c913ad118e6_77355732',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f1c58beeef4eff307fec91ac37631898d3b1e32f' => 
    array (
      0 => '/home/unikasia/domains/unikasia.com/private_html/isocms/templates/default/blocks/filter_left_trip.tpl',
      1 => 1714822353,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_663c913ad118e6_77355732 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="" class="simple_form search" id="filters_form2" method="post">
    <input type="hidden" name="search_des" value="search_des" />
    <input type="hidden" name="min_duration" id="duration1" value="<?php echo $_smarty_tpl->tpl_vars['min_duration_search']->value;?>
">
    <input type="hidden" name="max_duration" id="duration2" value="<?php echo $_smarty_tpl->tpl_vars['max_duration_search']->value;?>
">
    <input type="hidden" name="min_price" id="price1" value="<?php echo $_smarty_tpl->tpl_vars['min_price_search']->value;?>
">
    <input type="hidden" name="max_price" id="price2" value="<?php echo $_smarty_tpl->tpl_vars['max_price_search']->value;?>
">
    <input type="hidden" name="country_id" id="country_id2" value="<?php echo $_smarty_tpl->tpl_vars['country_id']->value;?>
">
    <div class="findBox mt0 pdbt30">
        <h3 class="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Tour length');?>
</h3>
        <div id="duration_0" class="inline-block text-left"></div>
        <span> -</span>
        <div id="duration_1" class="inline-block text-right"></div>
        <div id="slider-range2" class="mb10"></div>
    </div>
    <div class="findBox">
        <h3 class="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Price');?>
</h3>
        <div id="price_0" class="inline-block text-left"></div>
        <span> -</span>
        <div id="price_1" class="inline-block text-right"></div>
        <div id="slider-price2" class="mb10"></div>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['lstCountryTourOutbound']->value && $_smarty_tpl->tpl_vars['act']->value != 'place_inbound') {?>
    <div class="findBox">
        <h3 class="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Choose country');?>
</h3>
        <ul class="filter tour_types common_wrapper_details checkBlock">
			<?php
$__section_i_4_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstCountryTourOutbound']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_4_total = $__section_i_4_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_4_total !== 0) {
for ($__section_i_4_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_4_iteration <= $__section_i_4_total; $__section_i_4_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
			<?php $_smarty_tpl->_assignInScope('country__id', $_smarty_tpl->tpl_vars['lstCountryTourOutbound']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['country_id']);?>
			<?php if ($_smarty_tpl->tpl_vars['country__id']->value != 4) {?>
			<li>
                <input id="c<?php echo $_smarty_tpl->tpl_vars['country__id']->value;?>
" class="typeSearch" name="country_filter_id[]" value="<?php echo $_smarty_tpl->tpl_vars['country__id']->value;?>
" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['clsISO']->value->checkInArray($_smarty_tpl->tpl_vars['country_filter_id']->value,$_smarty_tpl->tpl_vars['country__id']->value) || $_smarty_tpl->tpl_vars['clsISO']->value->checkInArray($_smarty_tpl->tpl_vars['country_id']->value,$_smarty_tpl->tpl_vars['country__id']->value)) {?>checked<?php }?>/>
                <label class="twoFilter" for="c<?php echo $_smarty_tpl->tpl_vars['country__id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['clsCountryEx']->value->getTitle($_smarty_tpl->tpl_vars['lstCountryTourOutbound']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['country_id'],$_smarty_tpl->tpl_vars['lstCountryTourOutbound']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
</label>
            </li>
			<?php }?>
			<?php
}
}
?>
        </ul>
        <span class="readmore"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('More');?>
</span> </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['lstRegionTourByCountry']->value) {?>
    <div class="findBoxCity">
        <h3 class="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('City');?>
</h3>
        <?php
$__section_i_5_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstRegionTourByCountry']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_5_total = $__section_i_5_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_5_total !== 0) {
for ($__section_i_5_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_5_iteration <= $__section_i_5_total; $__section_i_5_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
        <div class="findBox"> 
			<?php $_smarty_tpl->_assignInScope('TitleRegion', $_smarty_tpl->tpl_vars['clsRegion']->value->getTitle($_smarty_tpl->tpl_vars['lstRegionTourByCountry']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['region_id'],$_smarty_tpl->tpl_vars['lstRegionTourByCountry']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]));?>
            <?php $_smarty_tpl->_assignInScope('listCityTourByRegion', $_smarty_tpl->tpl_vars['lstRegionTourByCountry']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['listCityTourByRegion']);?>
			<?php if ($_smarty_tpl->tpl_vars['listCityTourByRegion']->value) {?>
			 <h4 class="title2"><?php echo $_smarty_tpl->tpl_vars['TitleRegion']->value;?>
</h4>
            <ul class="filter tour_types common_wrapper_details checkBlock">
                <?php
$__section_j_6_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listCityTourByRegion']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_j_6_total = $__section_j_6_loop;
$_smarty_tpl->tpl_vars['__smarty_section_j'] = new Smarty_Variable(array());
if ($__section_j_6_total !== 0) {
for ($__section_j_6_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] = 0; $__section_j_6_iteration <= $__section_j_6_total; $__section_j_6_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']++){
?>
                <li>
                    <input id="a<?php echo $_smarty_tpl->tpl_vars['listCityTourByRegion']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['city_id'];?>
" class="typeSearch" name="city_filter_id[]" value="<?php echo $_smarty_tpl->tpl_vars['listCityTourByRegion']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['city_id'];?>
" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['clsISO']->value->checkInArray($_smarty_tpl->tpl_vars['city_filter_id']->value,$_smarty_tpl->tpl_vars['listCityTourByRegion']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['city_id']) || $_smarty_tpl->tpl_vars['clsISO']->value->checkInArray($_smarty_tpl->tpl_vars['city_id']->value,$_smarty_tpl->tpl_vars['listCityTourByRegion']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['city_id'])) {?>checked<?php }?>/>
                    <label class="twoFilter" for="a<?php echo $_smarty_tpl->tpl_vars['listCityTourByRegion']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['city_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['clsCity']->value->getTitle($_smarty_tpl->tpl_vars['listCityTourByRegion']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['city_id'],$_smarty_tpl->tpl_vars['listCityTourByRegion']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]);?>
</label>
                </li>
                <?php
}
}
?>
            </ul>
            <span class="readmore"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('More');?>
</span> 
			<?php }?>
		</div>
        <?php
}
}
?>
	</div>
    <?php } elseif ($_smarty_tpl->tpl_vars['lstCityTour']->value) {?>
    <div class="findBox"> 
        <h3 class="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('City');?>
</h3>
        <ul class="filter tour_types common_wrapper_details checkBlock">
            <?php
$__section_j_7_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstCityTour']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_j_7_total = $__section_j_7_loop;
$_smarty_tpl->tpl_vars['__smarty_section_j'] = new Smarty_Variable(array());
if ($__section_j_7_total !== 0) {
for ($__section_j_7_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] = 0; $__section_j_7_iteration <= $__section_j_7_total; $__section_j_7_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']++){
?>
            <li>
                <input id="a<?php echo $_smarty_tpl->tpl_vars['lstCityTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['city_id'];?>
" class="typeSearch" name="city_filter_id[]" value="<?php echo $_smarty_tpl->tpl_vars['lstCityTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['city_id'];?>
" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['clsISO']->value->checkInArray($_smarty_tpl->tpl_vars['city_filter_id']->value,$_smarty_tpl->tpl_vars['lstCityTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['city_id'])) {?>checked<?php }?>/>
                <label class="twoFilter" for="a<?php echo $_smarty_tpl->tpl_vars['lstCityTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['city_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['clsCity']->value->getTitle($_smarty_tpl->tpl_vars['lstCityTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['city_id'],$_smarty_tpl->tpl_vars['lstCityTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]);?>
</label>
            </li>
            <?php
}
}
?>
        </ul>
        <span class="readmore"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('More');?>
</span> 
    </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['lstDeparturePoint']->value) {?>
    <div class="findBox border_0">
        <h3 class="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Departure');?>
</h3>
        <ul class="filter tour_types common_wrapper_details checkBlock">
            <?php
$__section_i_8_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstDeparturePoint']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_8_total = $__section_i_8_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_8_total !== 0) {
for ($__section_i_8_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_8_iteration <= $__section_i_8_total; $__section_i_8_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
            <li>
                <input id="d<?php echo $_smarty_tpl->tpl_vars['lstDeparturePoint']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['city_id'];?>
" class="typeSearch" name="departure_point_id[]" value="<?php echo $_smarty_tpl->tpl_vars['lstDeparturePoint']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['city_id'];?>
" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['clsISO']->value->checkInArray($_smarty_tpl->tpl_vars['departure_point_id']->value,$_smarty_tpl->tpl_vars['lstDeparturePoint']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['city_id'])) {?>checked<?php }?> />
                <label class="twoFilter" for="d<?php echo $_smarty_tpl->tpl_vars['lstDeparturePoint']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['city_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['clsCity']->value->getTitle($_smarty_tpl->tpl_vars['lstDeparturePoint']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['city_id'],$_smarty_tpl->tpl_vars['lstDeparturePoint']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
</label>
            </li>
            <?php
}
}
?>
        </ul>
        <span class="readmore"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('More');?>
</span> 
	</div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['lstCatTour']->value && $_smarty_tpl->tpl_vars['act']->value == 'searchtour') {?>
    <div class="findBox border_0">
        <h3 class="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Travel styles');?>
</h3>
        <ul class="filter tour_types common_wrapper_details checkBlock">
            <?php
$__section_i_9_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstCatTour']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_9_total = $__section_i_9_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_9_total !== 0) {
for ($__section_i_9_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_9_iteration <= $__section_i_9_total; $__section_i_9_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
            <?php if ($_smarty_tpl->tpl_vars['clsTour']->value->countByCat($_smarty_tpl->tpl_vars['lstCatTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tourcat_id'])) {?>
            <li>
                <input id="t<?php echo $_smarty_tpl->tpl_vars['lstCatTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tourcat_id'];?>
" class="typeSearch" name="tourcat_id[]" value="<?php echo $_smarty_tpl->tpl_vars['lstCatTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tourcat_id'];?>
" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['clsISO']->value->checkInArray($_smarty_tpl->tpl_vars['cat_id']->value,$_smarty_tpl->tpl_vars['lstCatTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tourcat_id'])) {?>checked<?php }?> />
                <label class="twoFilter" for="t<?php echo $_smarty_tpl->tpl_vars['lstCatTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tourcat_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['lstCatTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title'];?>
</label>
            </li>
            <?php }?>
            <?php
}
}
?>
        </ul>
        <span class="readmore"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('More');?>
</span> 
	</div>
    <?php }?>
     
    <?php echo '<script'; ?>
>
    $(function(){
        /*$('.common_wrapper_details').each(function(){
            var $_this = $(this);
            if($_this.height()>210){
                $_this.css("height","210px");
                $_this.closest(".findBox").find(".readmore").show();
            }else{
                $_this.closest(".findBox").find(".readmore").hide();
            }
        });*/
		$('.common_wrapper_details').each(function(index,elm){
			var $_this = $(this);
			var number_li = $(elm).find("li").length;
			if(number_li > 5){
				$(elm).addClass("short");
				$(elm).closest(".findBox").find(".readmore").show();
			}else{
				$(elm).closest(".findBox").find(".readmore").hide();
			}
        });
		$(document).on("click",".findBox .readmore",function(){
            var $_this = $(this);
            if(!$_this.hasClass("less")){
                $_this.addClass("less");
				$_this.closest(".findBox").find(".common_wrapper_details").removeClass("short");
				$_this.html('<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Less");?>
');
            }else{
                $_this.removeClass("less");
				$_this.closest(".findBox").find(".common_wrapper_details").addClass("short");
				$_this.html('<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("More");?>
');
            }
        });
        /*$(document).on("click",".findBox .readmore",function(){
            var $_this = $(this);
            if(!$_this.hasClass("less")){
                $_this.addClass("less");
                $_this.closest(".findBox").find(".common_wrapper_details").css("height","auto");	
                $_this.html('<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Less");?>
');
            }
            else{
                $_this.removeClass("less");
                $_this.closest(".findBox").find(".common_wrapper_details").css("height","210px");	
                $_this.html('<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("More");?>
');	
            }
        });*/	
    });
    <?php echo '</script'; ?>
> 
     
</form>
<?php echo '<script'; ?>
 >
    var curency='<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
';
	var đ='<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("đ");?>
';
	var tourcat_id='<?php echo $_smarty_tpl->tpl_vars['tourcat_id']->value;?>
';
	var city_id= '<?php echo $_smarty_tpl->tpl_vars['city_id']->value;?>
';
	var country_id= '<?php echo $_smarty_tpl->tpl_vars['country_id']->value;?>
';
	var min_duration_value = '<?php echo $_smarty_tpl->tpl_vars['min_duration_value']->value;?>
';
	var max_duration_value = '<?php echo $_smarty_tpl->tpl_vars['max_duration_value']->value;?>
';
	var min_duration_search = '<?php echo $_smarty_tpl->tpl_vars['min_duration_search']->value;?>
';
	var max_duration_search = '<?php echo $_smarty_tpl->tpl_vars['max_duration_search']->value;?>
';
	var max_price_value = '<?php echo $_smarty_tpl->tpl_vars['max_price_value']->value;?>
';
	var min_price_value = '<?php echo $_smarty_tpl->tpl_vars['min_price_value']->value;?>
';
	var min_price_search = '<?php echo $_smarty_tpl->tpl_vars['min_price_search']->value;?>
';
	var max_price_search = '<?php echo $_smarty_tpl->tpl_vars['max_price_search']->value;?>
';
	var txtday = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("day");?>
';
	var txtdays = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("days");?>
';
<?php echo '</script'; ?>
> 
 
<?php echo '<script'; ?>
 >
$(function() {
    $( "#slider-range2" ).slider({
		range: true,
		min: parseInt(min_duration_value),
		max: parseInt(max_duration_value),
		values: [min_duration_search, max_duration_search],
		slide: function( event, ui ) {
			
			if(ui.values[0] > 1){
				$( "#duration_0" ).html(ui.values[0] +' '+ txtdays);
			}else{
				$( "#duration_0" ).html(ui.values[0] +' '+ txtday);
			}
			if(ui.values[1] > 1){
				$( "#duration_1" ).html(ui.values[1] +' '+ txtdays);
			}else{
				$( "#duration_1" ).html(ui.values[1] +' '+ txtday);
			}			
			$( "#duration1" ).val(ui.values[0]);
			$( "#duration2" ).val(ui.values[1]);
			$('#filters_form2').submit();
		}
    });
	var arr_value = $("#slider-range2").slider("values");
	if(arr_value[0] > 1){
		$("#duration_0").html(arr_value[0] +' '+ txtdays);
	}else{
		$("#duration_0").html(arr_value[0] +' '+ txtday);
	}
	if(arr_value[1] > 1){
		$("#duration_1").html(arr_value[1] +' '+ txtdays);
	}else{
		$("#duration_1").html(arr_value[1] +' '+ txtday);
	}
	
});
$(function(){
	$( "#slider-price2" ).slider({
		range: true,
		min: parseInt(min_price_value),
		max: parseInt(max_price_value),
		values: [min_price_search, max_price_search],
		slide: function( event, ui ) {
			$( "#price_0" ).html(ui.values[0] +' '+ curency);
			$( "#price_1" ).html(ui.values[1] +' '+ curency);
			$( "#price1" ).val(ui.values[0]);
			$( "#price2" ).val(ui.values[1]);
			$('#filters_form2').submit();
		}
    });
	document.getElementById("price_0").innerHTML = format_price(min_price_search);
	document.getElementById("price_1").innerHTML = format_price(max_price_search);
})
function format_price(n){
	return n.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.') + curency
}
<?php echo '</script'; ?>
> 


<style>
.readMoreClass{position:relative}
.readMoreClass .section_expander{position:absolute; width:50px; bottom:0; right:0; color:#f16f30}
.common_wrapper_details{overflow:hidden}
@media (max-width: 991px){
.modal_quick_center{top: 0;width: 100%;text-align: left}
.findTripDestination.display_des{max-height: 100%;overflow-y: hidden}
#filter_search.modal, #modalQuickSearch.modal{padding-right: 0}
.findTripDestination ul li a {
font-size: 22px;
color: #1c1c1c;
font-weight: 500;
margin-bottom: 20px;
display: block;
}
.findTripDestination ul li {
list-style: none;
margin-bottom: 30px;
}
ul#radio li label{font-weight: 400}
.modal-content{border-radius: 0;border: 0}
}
</style>

 
<?php echo '<script'; ?>
>
	$('#filters_form2 .typeSearch').change(function(){
	$(this).closest('form').submit();
});
<?php echo '</script'; ?>
> 
 <?php }
}
