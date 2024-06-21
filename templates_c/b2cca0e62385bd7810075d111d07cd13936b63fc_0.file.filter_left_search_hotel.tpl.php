<?php
/* Smarty version 3.1.38, created on 2024-05-09 16:04:21
  from '/home/unikasia/domains/unikasia.com/private_html/isocms/templates/default/blocks/filter_left_search_hotel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_663c9195252024_15526780',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2cca0e62385bd7810075d111d07cd13936b63fc' => 
    array (
      0 => '/home/unikasia/domains/unikasia.com/private_html/isocms/templates/default/blocks/filter_left_search_hotel.tpl',
      1 => 1715141281,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_663c9195252024_15526780 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="filter_left_search">
        <form action="" method="post" id="search_hotel_left">
        <input type="hidden" name="search_hotel_left" value="search_hotel_left"/>
        <?php if ($_smarty_tpl->tpl_vars['act']->value == 'default') {?>
            
			<?php if ($_smarty_tpl->tpl_vars['lstCountryHotel']->value) {?>
				<div class="find_Box">
					<div class="box_body_filter_title">
						<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Country');?>

					</div>
					<div class="box_filter_body">
						<div class="filter_list_item">
							<?php
$__section_i_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstCountryHotel']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_2_total = $__section_i_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_2_total !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] <= $__section_i_2_total; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
								<?php $_smarty_tpl->_assignInScope('check', $_smarty_tpl->tpl_vars['clsISO']->value->checkInArray($_smarty_tpl->tpl_vars['country_id']->value,$_smarty_tpl->tpl_vars['lstCountryHotel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['country_id']));?>
								<div class="check_ipt">
                                    <input class="form-check-input checkCityDesTop" type="radio" name="country[]" id="country<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] : null);?>
" value="<?php echo $_smarty_tpl->tpl_vars['lstCountryHotel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['country_id'];?>
"<?php if ($_smarty_tpl->tpl_vars['check']->value) {?> checked <?php }?>>
                                    <label class="form-check-label labelCheck" for="country<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] : null);?>
"><a class="filter_link" href="<?php echo $_smarty_tpl->tpl_vars['clsCountryEx']->value->getLink($_smarty_tpl->tpl_vars['lstCountryHotel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['country_id'],'Hotel',$_smarty_tpl->tpl_vars['lstCountryHotel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
" title="<?php echo $_smarty_tpl->tpl_vars['lstCountryHotel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title'];?>
"><label><?php echo $_smarty_tpl->tpl_vars['lstCountryHotel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title'];?>
</label></a> </label>
                                </div>
							<?php
}
}
?>
						</div>
						<span class="readmore"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('More');?>
</span>
					</div>
				</div>
			<?php }?>
        <?php } else { ?>
            <?php if ($_smarty_tpl->tpl_vars['lstCountryHotel']->value) {?>
                <div class="find_Box">
                    <div class="box_body_filter_title">
                        <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Country');?>

                    </div>
                    <div class="box_filter_body">
                        <div class="filter_list_item">
                        <?php
$__section_i_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstCountryHotel']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_3_total = $__section_i_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_3_total !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] <= $__section_i_3_total; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                            <?php $_smarty_tpl->_assignInScope('check', $_smarty_tpl->tpl_vars['clsISO']->value->checkInArray($_smarty_tpl->tpl_vars['country_id']->value,$_smarty_tpl->tpl_vars['lstCountryHotel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['country_id']));?>
                            <div class="check_ipt">
                                <input class="form-check-input checkCityDesTop" type="radio" name="country[]" id="country<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] : null);?>
" value="<?php echo $_smarty_tpl->tpl_vars['lstCountryHotel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['country_id'];?>
"<?php if ($_smarty_tpl->tpl_vars['check']->value) {?> checked <?php }?>>
                                <label class="form-check-label labelCheck" for="country<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] : null);?>
"><a class="filter_link" href="<?php echo $_smarty_tpl->tpl_vars['clsCountryEx']->value->getLink($_smarty_tpl->tpl_vars['lstCountryHotel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['country_id'],'Hotel',$_smarty_tpl->tpl_vars['lstCountryHotel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
" title="<?php echo $_smarty_tpl->tpl_vars['lstCountryHotel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title'];?>
"><label><?php echo $_smarty_tpl->tpl_vars['lstCountryHotel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title'];?>
</label></a> </label>
                            </div>
                        <?php
}
}
?>
    
                        </div>
                        <span class="readmore"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('More');?>
</span>
                    </div>
                </div>
            <?php }?>

			<?php if ($_smarty_tpl->tpl_vars['lstCity']->value) {?>
				<div class="find_Box">
					<div class="box_body_filter_title">
						<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('City');?>

					</div>
					<div class="box_filter_body">
						<div class="filter_list_item">
							<?php
$__section_i_4_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstCity']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_4_total = $__section_i_4_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_4_total !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] <= $__section_i_4_total; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
								<?php $_smarty_tpl->_assignInScope('check', $_smarty_tpl->tpl_vars['clsISO']->value->checkInArray($_smarty_tpl->tpl_vars['city']->value,$_smarty_tpl->tpl_vars['lstCity']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['city_id']));?>
								<div class="check_ipt">
																	
                                <input type="checkbox" name="city[]" class="form-check-input typeSearch" value="<?php echo $_smarty_tpl->tpl_vars['lstCity']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['city_id'];?>
"<?php if ($_smarty_tpl->tpl_vars['check']->value) {?> checked <?php }?> id="city<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] : null);?>
">
                                <label class="form-check-label labelCheck" for="city<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] : null);?>
"> <?php echo $_smarty_tpl->tpl_vars['lstCity']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title'];?>
 </label>
                                
                                </div>
							<?php
}
}
?>

						</div>
						<span class="readmore"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('More');?>
</span>
					</div>
				</div>
			<?php }?>
        <?php }?>
        <div class="find_Box">
            <div class="box_body_filter_title">
                <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Price range');?>

            </div>
            <div class="box_filter_body">
                <div class="filter_list_item">
                    
                    
                    <?php $_smarty_tpl->_assignInScope('price_range_min', $_smarty_tpl->tpl_vars['lstPriceRange']->value[0]['hotel_price_range_id']);?>
                    <?php $_smarty_tpl->_assignInScope('price_range_max', $_smarty_tpl->tpl_vars['lstPriceRange']->value[count($_smarty_tpl->tpl_vars['lstPriceRange']->value)-1]['hotel_price_range_id']);?>
                    <div class="price-hotel-items">
                        <div class="price-hotel-itemMin" id="value_min"><?php echo $_smarty_tpl->tpl_vars['price_range_min']->value;?>
</div>
                        <div class="price-hotel-itemMax" id="value_max"><?php echo $_smarty_tpl->tpl_vars['price_range_max']->value;?>
</div>
                    </div>
                    <div slider id="slider-distance">
                    <div>
                      <div inverse-left style="width:70%;"></div>
                      <div inverse-right style="width:70%;"></div>
                      <div range style="left:30%;right:40%;"></div>
                      <span thumb style="left:30%;"></span>
                      <span thumb style="left:60%;"></span>

                    </div>
                    <input type="range" tabindex="0" value="30" max="<?php echo $_smarty_tpl->tpl_vars['price_range_min']->value;?>
" min="<?php echo $_smarty_tpl->tpl_vars['price_range_min']->value;?>
" step="1" oninput="
                    this.value=Math.min(this.value,this.parentNode.childNodes[5].value-1);
                    var value=(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.value)-(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.min);
                    var children = this.parentNode.childNodes[1].childNodes;
                    children[1].style.width=value+'%';
                    children[5].style.left=value+'%';
                    children[7].style.left=value+'%';children[11].style.left=value+'%';
                    children[11].childNodes[1].innerHTML=this.value;" />
                  
                    <input type="range" tabindex="0" value="60" max="100" min="0" step="1" oninput="
                    this.value=Math.max(this.value,this.parentNode.childNodes[3].value-(-1));
                    var value=(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.value)-(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.min);
                    var children = this.parentNode.childNodes[1].childNodes;
                    children[3].style.width=(100-value)+'%';
                    children[5].style.right=(100-value)+'%';
                    children[9].style.left=value+'%';children[13].style.left=value+'%';
                    children[13].childNodes[1].innerHTML=this.value;" />
                  </div>
                    
                </div>
                            </div>
        </div>
        <div class="find_Box">
            <div class="box_body_filter_title">
                <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Rank');?>

            </div>
            <div class="box_filter_body">
                <div class="filter_list_item">
                    <?php $_smarty_tpl->_assignInScope('stars', $_smarty_tpl->tpl_vars['clsISO']->value->listStar(6));?>
                    <?php
$__section_i_5_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['stars']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_5_total = $__section_i_5_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_5_total !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] <= $__section_i_5_total; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                        <?php $_smarty_tpl->_assignInScope('check', $_smarty_tpl->tpl_vars['clsISO']->value->checkInArray($_smarty_tpl->tpl_vars['star_id']->value,$_smarty_tpl->tpl_vars['stars']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['star_id']));?>
                        <div class="check_ipt">
                            <input type="checkbox" name="star_id[]" class="form-check-input input_item typeSearch" value="<?php echo $_smarty_tpl->tpl_vars['stars']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['star_id'];?>
"<?php if ($_smarty_tpl->tpl_vars['check']->value) {?> checked <?php }?> id="star<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] : null);?>
">
                            <?php if ($_smarty_tpl->tpl_vars['stars']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['star_id'] == 1) {?>
                                <label class="labelCheck" for="star<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] : null);?>
"><?php echo $_smarty_tpl->tpl_vars['stars']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title'];?>
</label>
                            <?php } else { ?>
                                <label class="labelCheck" for="star<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] : null);?>
"><?php echo $_smarty_tpl->tpl_vars['stars']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['star_id'];?>
 <img style="margin-left: 8px;" src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/hotel/star.svg" alt="error"></label>
                            <?php }?>
                        </div>
                    <?php
}
}
?>
                    
                </div>
                <span class="readmore"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('More');?>
</span>
            </div>
        </div>
        <div class="find_Box">
            <div class="box_body_filter_title">
                <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Type of accommodations');?>

            </div>
            <div class="box_filter_body">
                <div class="filter_list_item">
                    <?php
$__section_i_6_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listTypeHotel']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_6_total = $__section_i_6_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_6_total !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] <= $__section_i_6_total; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                        <?php $_smarty_tpl->_assignInScope('hotel_property_id', $_smarty_tpl->tpl_vars['listTypeHotel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['property_id']);?>
                        <?php $_smarty_tpl->_assignInScope('hotel_property_title', $_smarty_tpl->tpl_vars['listTypeHotel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title']);?>
                        <?php $_smarty_tpl->_assignInScope('check', $_smarty_tpl->tpl_vars['clsISO']->value->checkInArray($_smarty_tpl->tpl_vars['type_hotel']->value,$_smarty_tpl->tpl_vars['hotel_property_id']->value));?>
                        <div class="check_ipt">
                            <input type="checkbox" class="form-check-input input_item typeSearch" name="type_hotel[]" value="<?php echo $_smarty_tpl->tpl_vars['hotel_property_id']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['check']->value) {?> checked <?php }?> id="typeHotel<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] : null);?>
">
                            <label class="labelCheck" for="typeHotel<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] : null);?>
"><?php echo $_smarty_tpl->tpl_vars['hotel_property_title']->value;?>
</label>
                        </div>
                    <?php
}
}
?>

                </div>
                <span class="readmore"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('More');?>
</span>
            </div>
        </div>
    </form>
</div>

    <?php echo '<script'; ?>
>
        $(function(){
            var valueMin = document.getElementById('value_min').innerHTML;
    var valueMax = document.getElementById('value_max').innerHTML;
    document.querySelector('.price-hotel-itemMin').innerHTML = valueMin;
    document.querySelector('.price-hotel-itemMax').innerHTML = valueMax;
        

        
			$('.filter_list_item').each(function(index,elm){
				var $_this = $(elm);
				var number_list = $(elm).find(".check_ipt").length;
				if(number_list > 5){
					$(elm).addClass("short");
					$_this.closest(".find_Box").find(".readmore").show();
				}else{
					$_this.closest(".find_Box").find(".readmore").hide();
				}
			});
			$(document).on("click",".readmore",function(){
				var $_this = $(this);
				if(!$_this.hasClass("less")){
					$_this.addClass("less");
					$_this.closest(".find_Box").find(".filter_list_item").removeClass("short");
					$_this.html('<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Less");?>
');
				}
				else{
					$_this.removeClass("less");
					$_this.closest(".find_Box").find(".filter_list_item").addClass("short");
					$_this.html('<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("More");?>
');
				}
			});
        });

        $(function () {
            $('#search_hotel_left .typeSearch').change(function () {
                $(this).closest('form').submit();
            });
        });
    <?php echo '</script'; ?>
>

<?php }
}
