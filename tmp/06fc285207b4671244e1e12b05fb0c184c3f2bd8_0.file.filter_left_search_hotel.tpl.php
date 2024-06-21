<?php
/* Smarty version 3.1.38, created on 2024-04-08 18:27:11
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/filter_left_search_hotel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6613d48f2f37f3_54743949',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06fc285207b4671244e1e12b05fb0c184c3f2bd8' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/filter_left_search_hotel.tpl',
      1 => 1709626383,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6613d48f2f37f3_54743949 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="filter_left_search">
    <div class="filter_left_title">
        <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Filter');?>

    </div>
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
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstCountryHotel']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] <= $__section_i_1_total; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
								<?php $_smarty_tpl->_assignInScope('check', $_smarty_tpl->tpl_vars['clsISO']->value->checkInArray($_smarty_tpl->tpl_vars['country_id']->value,$_smarty_tpl->tpl_vars['lstCountryHotel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['country_id']));?>
								<div class="check_ipt">
									<a class="filter_link" href="<?php echo $_smarty_tpl->tpl_vars['clsCountryEx']->value->getLink($_smarty_tpl->tpl_vars['lstCountryHotel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['country_id'],'Hotel',$_smarty_tpl->tpl_vars['lstCountryHotel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
" title="<?php echo $_smarty_tpl->tpl_vars['lstCountryHotel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title'];?>
"><label><?php echo $_smarty_tpl->tpl_vars['lstCountryHotel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title'];?>
</label></a>
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
			<?php if ($_smarty_tpl->tpl_vars['lstCity']->value) {?>
				<div class="find_Box">
					<div class="box_body_filter_title">
						<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('City');?>

					</div>
					<div class="box_filter_body">
						<div class="filter_list_item">
							<?php
$__section_i_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstCity']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_2_total = $__section_i_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_2_total !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] <= $__section_i_2_total; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
								<?php $_smarty_tpl->_assignInScope('check', $_smarty_tpl->tpl_vars['clsISO']->value->checkInArray($_smarty_tpl->tpl_vars['city']->value,$_smarty_tpl->tpl_vars['lstCity']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['city_id']));?>
								<div class="check_ipt">
									<input type="checkbox" name="city[]" class="input_item typeSearch" value="<?php echo $_smarty_tpl->tpl_vars['lstCity']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['city_id'];?>
"<?php if ($_smarty_tpl->tpl_vars['check']->value) {?> checked <?php }?> id="city<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] : null);?>
">
									<label for="city<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] : null);?>
"><?php echo $_smarty_tpl->tpl_vars['lstCity']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title'];?>
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
                    <?php
$__section_i_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstPriceRange']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_3_total = $__section_i_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_3_total !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] <= $__section_i_3_total; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                        <?php $_smarty_tpl->_assignInScope('check', $_smarty_tpl->tpl_vars['clsISO']->value->checkInArray($_smarty_tpl->tpl_vars['price_range']->value,$_smarty_tpl->tpl_vars['lstPriceRange']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['hotel_price_range_id']));?>
                        <div class="check_ipt">
                            <input type="checkbox" name="price_range[]" class="input_item typeSearch" value="<?php echo $_smarty_tpl->tpl_vars['lstPriceRange']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['hotel_price_range_id'];?>
"<?php if ($_smarty_tpl->tpl_vars['check']->value) {?> checked <?php }?> id="priceRange<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] : null);?>
">
                            <label for="priceRange<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] : null);?>
"><?php echo $_smarty_tpl->tpl_vars['lstPriceRange']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title'];?>
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
        <div class="find_Box">
            <div class="box_body_filter_title">
                <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Rank');?>

            </div>
            <div class="box_filter_body">
                <div class="filter_list_item">
                    <?php $_smarty_tpl->_assignInScope('stars', $_smarty_tpl->tpl_vars['clsISO']->value->listStar(6));?>
                    <?php
$__section_i_4_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['stars']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_4_total = $__section_i_4_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_4_total !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] <= $__section_i_4_total; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                        <?php $_smarty_tpl->_assignInScope('check', $_smarty_tpl->tpl_vars['clsISO']->value->checkInArray($_smarty_tpl->tpl_vars['star_id']->value,$_smarty_tpl->tpl_vars['stars']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['star_id']));?>
                        <div class="check_ipt">
                            <input type="checkbox" name="star_id[]" class="input_item typeSearch" value="<?php echo $_smarty_tpl->tpl_vars['stars']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['star_id'];?>
"<?php if ($_smarty_tpl->tpl_vars['check']->value) {?> checked <?php }?> id="star<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] : null);?>
">
                            <label for="star<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] : null);?>
"><?php echo $_smarty_tpl->tpl_vars['stars']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title'];?>
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
        <div class="find_Box">
            <div class="box_body_filter_title">
                <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Type of accommodations');?>

            </div>
            <div class="box_filter_body">
                <div class="filter_list_item">
                    <?php
$__section_i_5_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listTypeHotel']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_5_total = $__section_i_5_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_5_total !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] <= $__section_i_5_total; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                        <?php $_smarty_tpl->_assignInScope('hotel_property_id', $_smarty_tpl->tpl_vars['listTypeHotel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['property_id']);?>
                        <?php $_smarty_tpl->_assignInScope('hotel_property_title', $_smarty_tpl->tpl_vars['listTypeHotel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title']);?>
                        <?php $_smarty_tpl->_assignInScope('check', $_smarty_tpl->tpl_vars['clsISO']->value->checkInArray($_smarty_tpl->tpl_vars['type_hotel']->value,$_smarty_tpl->tpl_vars['hotel_property_id']->value));?>
                        <div class="check_ipt">
                            <input type="checkbox" class="input_item typeSearch" name="type_hotel[]" value="<?php echo $_smarty_tpl->tpl_vars['hotel_property_id']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['check']->value) {?> checked <?php }?> id="typeHotel<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] : null);?>
">
                            <label for="typeHotel<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] : null);?>
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
