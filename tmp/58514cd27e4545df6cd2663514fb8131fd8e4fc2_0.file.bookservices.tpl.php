<?php
/* Smarty version 3.1.38, created on 2024-04-09 10:04:22
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/cruise/bookservices.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6614b0361df500_76825083',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '58514cd27e4545df6cd2663514fb8131fd8e4fc2' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/cruise/bookservices.tpl',
      1 => 1712030540,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6614b0361df500_76825083 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/jquery.validate.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['URL_CSS']->value;?>
/bookingcruise.css?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
">
<?php $_smarty_tpl->_assignInScope('address', $_smarty_tpl->tpl_vars['clsCruiseItinerary']->value->getAllCityAround($_smarty_tpl->tpl_vars['ContactCruise']->value['cruise_itinerary_id']));
$_smarty_tpl->_assignInScope('oneCruiseCat', $_smarty_tpl->tpl_vars['clsCruiseCat']->value->getOne($_smarty_tpl->tpl_vars['oneCruise']->value['cruise_cat_id'],"title,slug"));?>
<div class="page_container page_book_services">
	<div class="breadcrumb-main">
		<div class="container">
			<ol class="breadcrumb mt0" itemscope itemtype="https://schema.org/BreadcrumbList"> 
				<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
					<a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;
echo $_smarty_tpl->tpl_vars['extLang']->value;?>
">
						<span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Home');?>
</span></a>
					<meta itemprop="position" content="1" />
				</li>
				<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
					<a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['clsCruiseCat']->value->getLink($_smarty_tpl->tpl_vars['oneCruise']->value['cruise_cat_id'],$_smarty_tpl->tpl_vars['oneCruiseCat']->value);?>
" title="<?php echo $_smarty_tpl->tpl_vars['oneCruiseCat']->value['title'];?>
">
						<span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['oneCruiseCat']->value['title'];?>
</span> </a>
					<meta itemprop="position" content="2" />
				</li>
				<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
					<a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['curl']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['oneCruise']->value['title'];?>
">
						<span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['oneCruise']->value['title'];?>
</span> </a>
					<meta itemprop="position" content="3" />
				</li>
			</ol>
		</div>
	</div>
	<div class="container">
		<form class="bk-form-info" id="frmCruiseServices" method="post" action="" novalidate>
			<div class="row">
				<div class="col-lg-8 mx-auto">
					<h1 class="title_page"><?php echo $_smarty_tpl->tpl_vars['oneCruise']->value['title'];?>
</h1>
					<div class="box_cabin_book box_info_cabin_book">
						<h2 class="title_book"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Summary');?>
</h2>
						<div class="item_book">
							<label for="" class="lbl_item_book"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Itinerary');?>
:</label>
							<p class="txt_item_book"><?php echo $_smarty_tpl->tpl_vars['clsCruiseItinerary']->value->getDuration($_smarty_tpl->tpl_vars['ContactCruise']->value['cruise_itinerary_id']);?>
</p>
						</div>
						<?php if ($_smarty_tpl->tpl_vars['address']->value) {?>
						<div class="item_book">
							<label for="" class="lbl_item_book"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Destination');?>
:</label>
							<p class="txt_item_book"><?php echo $_smarty_tpl->tpl_vars['address']->value;?>
</p>
						</div>
						<?php }?>						
						<div class="item_book">
							<label for="" class="lbl_item_book"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Departing');?>
:</label>
							<p class="txt_item_book"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->converTimeToText5($_smarty_tpl->tpl_vars['ContactCruise']->value['departure_date']);?>
</p>
						</div>		
						<?php if ($_smarty_tpl->tpl_vars['txt_number_people']->value) {?>
						<div class="item_book">
							<label for="" class="lbl_item_book"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Number people');?>
:</label>
							<p class="txt_item_book"><?php echo $_smarty_tpl->tpl_vars['txt_number_people']->value;?>
</p>
						</div>
						<?php }?>
						<div class="item_book">
							<label for="" class="lbl_item_book"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cabins');?>
:</label>
							<div class="txt_item_book">
                                <p><?php echo $_smarty_tpl->tpl_vars['clsCruiseCabin']->value->getTitle($_smarty_tpl->tpl_vars['ContactCruise']->value['cruise_cabin_id']);?>
</p>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['array_bed']->value, 'item', false, 'key', 'item', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_item']->value['iteration']++;
?>
                                <p>- <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cabin');?>
 <?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_item']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_item']->value['iteration'] : null);?>
: <?php echo $_smarty_tpl->tpl_vars['item']->value['bed_type'];?>
 <?php if ($_smarty_tpl->tpl_vars['item']->value['is_extra_bed'] == 1) {?> + <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Extra Bed');?>
 <?php }?></p>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </div>
						</div>
					</div>
                    <?php if ($_smarty_tpl->tpl_vars['lstService']->value) {?>
					<div class="box_cabin_book box_services_cabin_book">
						<h2 class="title_book"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Addon services');?>
</h2>
						<div class="list_services_cruise">
							<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstService']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                            <div class="item_services d-flex justify-content-between align-items-center">
                                <div class="box_left_services">
                                    <p class="title_services"><?php echo $_smarty_tpl->tpl_vars['lstService']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title'];?>
</p>
                                </div>
                                <div class="box_right_services">
                                    <?php if ($_smarty_tpl->tpl_vars['_LANG_ID']->value == 'vn') {?>
                                        <div class="box_price_services"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['lstService']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['price']);?>
 <span class="price_unit"> <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getRate();?>
</span></div>
                                    <?php } else { ?>
                                        <div class="box_price_services"><span class="price_unit"> <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getRate();?>
</span> <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['lstService']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['price']);?>
</div>
                                    <?php }?>
                                    <div class="right__inputTraveller">
                                        <a class="unNum text_main disabled" _type="number_adults" href="javascript:void(0);"></a> 
                                        <input min-number="0" type="number" class="ui-spinner-input input_number find_select"  name="number_service[<?php echo $_smarty_tpl->tpl_vars['lstService']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_service_id'];?>
]" data-cruise_service_id="<?php echo $_smarty_tpl->tpl_vars['lstService']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_service_id'];?>
" data-price_service="<?php echo $_smarty_tpl->tpl_vars['lstService']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['price'];?>
" value="0" readonly> 
                                        <a class="upNum text_main" _type="number_adults" href="javascript:void(0);"></a> 
                                    </div>
                                </div>
                            </div>
							<?php
}
}
?>
						</div>
					</div>
                    <?php }?>
					<div class="box_cabin_book box_servicer_total_price">
						<div class="item_total_price d-flex justify-content-between align-items-center">
							<label for="" class="lbl_total"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Price Cabin");?>
</label>
                            <?php if ($_smarty_tpl->tpl_vars['ContactCruise']->value['total_price_promotion']) {?>
							<div class="box_price_services">
								<?php if ($_smarty_tpl->tpl_vars['_LANG_ID']->value == 'vn') {?>
									<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPriceText($_smarty_tpl->tpl_vars['ContactCruise']->value['total_price_promotion']);?>
 <span class="price_unit"> <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getRate();?>
</span>
                                    <input type="hidden" name="total_price_cabin" value="<?php echo $_smarty_tpl->tpl_vars['ContactCruise']->value['total_price_promotion'];?>
">
								<?php } else { ?>
									<span class="price_unit"> <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getRate();?>
</span> <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice2($_smarty_tpl->tpl_vars['ContactCruise']->value['total_price_promotion'],2);?>

                                    <input type="hidden" name="total_price_cabin" value="<?php echo number_format($_smarty_tpl->tpl_vars['ContactCruise']->value['total_price_promotion'],2,".",'');?>
">
								<?php }?>								
								
							</div>
                            <?php } else { ?>
                            <div class="box_price_services">
								<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Contact');?>

                                <input type="hidden" name="total_price_cabin" value="0">
							</div>
                            <?php }?>
                            
                            <input name="total_number_service" value="0" id="total_number_service" type="hidden" />
                            
                            
						</div>
                        <?php if ($_smarty_tpl->tpl_vars['lstService']->value) {?>
						<div class="item_total_price d-flex justify-content-between align-items-center">
							<label for="" class="lbl_total"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Price Service");?>
</label>
							<div class="box_price_services">
								<?php if ($_smarty_tpl->tpl_vars['_LANG_ID']->value == 'vn') {?>
									<span id="total_price_service">0</span> <span class="price_unit"> <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getRate();?>
</span>
								<?php } else { ?>
									<span class="price_unit"> <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getRate();?>
</span> <span id="total_price_service">0</span> 
								<?php }?>
								<input type="hidden" name="total_price_service" value="0">
							</div>
                            
						</div>
						<div class="box_list_service_choose" id="box_list_service_choose">
							
						</div>
                        <?php }?>
						<div class="box_total_bill">
							<div class="item_total_price d-flex justify-content-between align-items-center">
								<label for="" class="lbl_total"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Price Total");?>
</label>
                                <?php if ($_smarty_tpl->tpl_vars['ContactCruise']->value['total_price_promotion']) {?>
								<div class="box_price_services">
									<?php if ($_smarty_tpl->tpl_vars['_LANG_ID']->value == 'vn') {?>
										<span id="total_price_bill"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPriceText($_smarty_tpl->tpl_vars['ContactCruise']->value['total_price_promotion']);?>
</span> <span class="price_unit"> <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getRate();?>
</span>
									<?php } else { ?>
										<span class="price_unit"> <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getRate();?>
</span> <span id="total_price_bill"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice2($_smarty_tpl->tpl_vars['ContactCruise']->value['total_price_promotion'],2);?>
</span> 
									<?php }?>
									<input type="hidden" name="total_price_bill" value="<?php echo $_smarty_tpl->tpl_vars['ContactCruise']->value['total_price_promotion'];?>
">
								</div>
                                <?php } else { ?>
                                <div class="box_price_services">
                                    <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Contact');?>
</span>
									<span id="total_price_bill" class="hidden"></span>
									<input type="hidden" name="total_price_bill" value="<?php echo $_smarty_tpl->tpl_vars['ContactCruise']->value['total_price_promotion'];?>
">
								</div>
                                <?php }?>
							</div>
						</div>						
					</div>
					<div class="box_submit">
						<button class="btn_submit" type="button"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Continue');?>
</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
<?php echo '<script'; ?>
>
	var price_rate = '<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getRate();?>
';
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
	$(document).on('click','.upNum:not(.disabled)',function() {
		var inputTraveller = $(this).closest(".right__inputTraveller").find("input.input_number");
		var number_person = parseInt(inputTraveller.val());
		var _type=$(this).attr('_type');
		number_person = number_person + 1;
		$(this).closest(".right__inputTraveller").find(".unNum").removeClass("disabled");
		inputTraveller.val(number_person);	
		loadService();
		return false;
	});
	$(document).on('click','.unNum:not(.disabled)',function() {
		var inputTraveller = $(this).closest(".right__inputTraveller").find("input.input_number");
		var number_person = parseInt(inputTraveller.val());
		var min_number = parseInt(inputTraveller.attr('min-number'));
		var _type=$(this).attr('_type');
		number_person = number_person - 1;
		if (number_person <= min_number) {
			$(this).addClass('disabled');
			number_person = min_number;
		}
		$(this).closest(".right__inputTraveller").find(".upNum").removeClass("disabled");
		inputTraveller.val(number_person);	
		loadService();
		return false;
	});
	$(document).on('click','.btn_submit',function(e) {
		e.preventDefault();
		$.ajax({
			type:'POST',
			url:path_ajax_script+'/index.php?mod='+mod+'&act=ajChooseCabinCruise&lang='+LANG_ID,
			data: $("#frmCruiseServices").serialize(),	
			dataType:'html',	
			success: function(link){
				if(link != ''){
					location.href = link;	
				}				
			}
		});
		return false;
	});
	function loadService(){
		$("#box_list_service_choose").html('');
		var data = new Array();
		var total_price_cabin = parseInt($("input[name='total_price_cabin']").val());
		var total_price_service = 0;
		var total_number_service = 0;
		$(".list_services_cruise").find("input.input_number").each(function(index,elm){
            
			if(parseInt($(elm).val()) > 0){
				var number = $(elm).val();
				var price_service = $(elm).data("price_service");
				var cruise_service_id = $(elm).data("cruise_service_id");
				var title = $(elm).closest(".item_services").find(".title_services").text();
				var price = parseInt(price_service)* parseInt(number);
				total_price_service += price;
				total_number_service += parseInt(number);
				if(LANG_ID == 'vn'){
					var html = `<div class="item_service_choose">
							<label for="" class="lbl_price_service">`+title+` `+number+` x `+format_price(price_service)+price_rate+`</label>
							<div class="box_price_services">`;
						html +=  format_price(price)+` <span class="price_unit"> `+price_rate+`</span>`;
						html +=`</div>
						</div>`;
				}else{
					var html = `<div class="item_service_choose">
							<label for="" class="lbl_price_service">`+title+` `+number+` x `+price_rate+format_price(price_service)+`</label>
							<div class="box_price_services">`;
						html +=  ` <span class="price_unit"> `+price_rate+`</span>`+format_price(price);
						html +=`</div>
						</div>`;
				}
				$("#box_list_service_choose").append(html);
			}
		});		
		$("#total_price_service").text(format_price(total_price_service));
		$("#total_number_service").val(parseInt(total_number_service));
		$("input[name='total_price_service']").val(total_price_service);
		console.log(total_price_cabin, total_price_service);
		$("#total_price_bill").text(format_price(total_price_cabin + total_price_service));
		$("input[name='total_price_bill']").val(total_price_cabin + total_price_service);
	}
	function formatNumber(number){
		console.log(LANG_ID);
		if(LANG_ID == 'vn'){
			if(number > 1000){
				var number_format = (number/1000).toString().split(".");
				number_format[0] = number_format[0].replace(/\B(?=(\d{3})+(?!\d))/g, ".");
				return number_format.join(".")+"k";
			}else{
				var number_format = number.toString().split(".");
				number_format[0] = number_format[0].replace(/\B(?=(\d{3})+(?!\d))/g, ".");
				return number_format.join(".");
			}
			
		}else{
			var number_format = number.toString().split(".");
			number_format[0] = number_format[0].replace(/\B(?=(\d{3})+(?!\d))/g, ".");
			return number_format.join(".");		
		}
		return number_format;		
	}
    
    if(LANG_ID=='vn'){
        function format_price(n) {
            return n.toFixed(0).replace(/./g, function(c, i, a) {
                return i > 0 && c !== "." && (a.length - i) % 3 === 0 ? "," + c : c;
            });
        }
    }else{
        function format_price(n) {
            return n.toFixed(2).replace(/./g, function(c, i, a) {
                return i > 0 && c !== "." && (a.length - i) % 3 === 0 ? "," + c : c;
            });
        }
    }
    
<?php echo '</script'; ?>
>
<?php }
}
