<?php
/* Smarty version 3.1.38, created on 2024-04-08 15:43:17
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/filter_left_trip_voucher.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6613ae2568c804_46910680',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be7d200d7189181a509497a4558fc88969b9e14a' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/filter_left_trip_voucher.tpl',
      1 => 1710562703,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6613ae2568c804_46910680 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="" class="simple_form search" id="filters_form2" method="post">
	<input type="hidden" name="search_des" value="search_des" />
	<input type="hidden" name="min_price" id="price1" value="<?php echo $_smarty_tpl->tpl_vars['min_price_search']->value;?>
">
	<input type="hidden" name="max_price" id="price2" value="<?php echo $_smarty_tpl->tpl_vars['max_price_search']->value;?>
">
	<input type="hidden" name="country_id" id="country_id2" value="<?php echo $_smarty_tpl->tpl_vars['country_id']->value;?>
">
	<div class="findBox">
		<h3 class="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Price level');?>
</h3>
		<div id="price_0" class="inline-block text-left"></div><span> -</span>
		<div id="price_1" class="inline-block text-right"></div>
		<div id="slider-price2" class="mb10"></div>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['lstVoucherCat']->value) {?>
    <div class="findBox">
        <h3 class="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Category');?>
</h3>
        <ul class="filter tour_types common_wrapper_details checkBlock">
            <?php
$__section_i_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstVoucherCat']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_2_total = $__section_i_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_2_total !== 0) {
for ($__section_i_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_2_iteration <= $__section_i_2_total; $__section_i_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                <li>
                    <input id="a<?php echo $_smarty_tpl->tpl_vars['lstVoucherCat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['voucher_cat_id'];?>
" class="typeSearch" name="voucher_cat_id[]" value="<?php echo $_smarty_tpl->tpl_vars['lstVoucherCat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['voucher_cat_id'];?>
" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['clsISO']->value->checkInArray($_smarty_tpl->tpl_vars['voucher_cat_id']->value,$_smarty_tpl->tpl_vars['lstVoucherCat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['voucher_cat_id'])) {?>checked="checked"<?php }?> />
                    <label class="twoFilter" for="a<?php echo $_smarty_tpl->tpl_vars['lstVoucherCat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['voucher_cat_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['clsVoucherCategory']->value->getTitle($_smarty_tpl->tpl_vars['lstVoucherCat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['voucher_cat_id'],$_smarty_tpl->tpl_vars['lstVoucherCat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
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
	<?php if ($_smarty_tpl->tpl_vars['lstCity']->value) {?>
    <div class="findBox">
        <h3 class="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Lọc theo điểm đến');?>
</h3>
        <ul class="filter tour_types common_wrapper_details checkBlock">
            <?php
$__section_i_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstCity']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_3_total = $__section_i_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_3_total !== 0) {
for ($__section_i_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_3_iteration <= $__section_i_3_total; $__section_i_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                <li>
                    <input id="a<?php echo $_smarty_tpl->tpl_vars['lstCity']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['city_id'];?>
" class="typeSearch" name="city_id[]" value="<?php echo $_smarty_tpl->tpl_vars['lstCity']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['city_id'];?>
" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['clsISO']->value->checkInArray($_smarty_tpl->tpl_vars['city_id']->value,$_smarty_tpl->tpl_vars['lstCity']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['city_id'])) {?>checked="checked"<?php }?> />
                    <label class="twoFilter" for="a<?php echo $_smarty_tpl->tpl_vars['lstCity']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['city_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['clsCity']->value->getTitle($_smarty_tpl->tpl_vars['lstCity']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['city_id'],$_smarty_tpl->tpl_vars['lstCity']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
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
</form>
<?php echo '<script'; ?>
 >
	var curency='<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
';
	var day='<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("ngày");?>
';
	var đ='<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("đ");?>
';
	var voucher_cat_id='<?php echo $_smarty_tpl->tpl_vars['voucher_cat_id']->value;?>
';
	var city_id= '<?php echo $_smarty_tpl->tpl_vars['city_id']->value;?>
';
	var max_price_value = '<?php echo $_smarty_tpl->tpl_vars['max_price_value']->value;?>
';
	var min_price_value = '<?php echo $_smarty_tpl->tpl_vars['min_price_value']->value;?>
';
	var min_price_search = '<?php echo $_smarty_tpl->tpl_vars['min_price_search']->value;?>
';
	var max_price_search = '<?php echo $_smarty_tpl->tpl_vars['max_price_search']->value;?>
';
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 >
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
function format_price(n) {
    return n.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.') + curency
}
<?php echo '</script'; ?>
>


<style>
    .readMoreClass{position:relative}
    .readMoreClass .section_expander{position:absolute; width:50px; bottom:0; right:0; color:#f16f30}
    .common_wrapper_details{overflow:hidden}
</style>


<?php echo '<script'; ?>
>
    $('#filters_form2 .typeSearch').change(function(){
        $(this).closest('form').submit();
    });
<?php echo '</script'; ?>
>


<?php echo '<script'; ?>
>
$(function(){
    $('.common_wrapper_details').each(function(){
        var $_this = $(this);
        if($_this.height()>205){
            $_this.css("height","205px");
            $_this.closest(".findBox").find(".readmore").show();
        }else{
            $_this.closest(".findBox").find(".readmore").hide();
        }
    });
    $(document).on("click",".findBox .readmore",function(){
        var $_this = $(this);
        if(!$_this.hasClass("less")){
            $_this.addClass("less");
            $_this.closest(".findBox").find(".common_wrapper_details").css("height","auto");
            $_this.html('<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Less");?>
');
        }
        else{
            $_this.removeClass("less");
            $_this.closest(".findBox").find(".common_wrapper_details").css("height","205px");
            $_this.html('<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("More");?>
');
        }
    });
});
<?php echo '</script'; ?>
>



<?php }
}
