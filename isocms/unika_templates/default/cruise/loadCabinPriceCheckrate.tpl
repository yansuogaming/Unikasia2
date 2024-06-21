{if $lstCruiseCabinID}
	{foreach from=$lstCruiseCabinID item=item name=item}
		{assign var=cruise_cabin_id value=$item.cruise_cabin_id}
		{assign var=title_cabin value=$clsCruiseCabin->getTitle($cruise_cabin_id)}
		{assign var=max_adult value=$clsCruiseCabin->getMaxAdult($cruise_cabin_id)}
		{assign var=cabinSize value=$clsCruiseCabin->getCabinSize($cruise_cabin_id)}
		{assign var=bed_size value=$clsCruiseCabin->getBedOption($cruise_cabin_id)}
		{assign var=arr_price_cabin value = $clsCruiseCabin->getArrayPriceCabinCruise($cruise_cabin_id,$arraycheckrateCabin,$promotion_date,$cruise_id)}
		{assign var=intro_cabin value = $clsCruiseCabin->getIntro($cruise_cabin_id)}
		{assign var=facilities_cabin value = $clsCruiseCabin->getCabinFaci($cruise_cabin_id,$item)}
		<div class="box_item_cabin d-flex flex-wrap">
			<div class="box_right_item_cabin">
				<img src="{$clsCruiseCabin->getImage($cruise_cabin_id,355,236)}" alt="" width="355" height="236">
			</div>
			<div class="box_left_item_cabin d-flex flex-wrap">
				<div class="box_info_cabin">
					<h3 class="title_cabin">{$title_cabin}</h3>
					<div class="cabin_itinerary">
						{if $max_adult}<p class="item_info_cabin icon_cruise_before number_person">{$max_adult} {$core->get_Lang('pax')}</p>{/if}
						{if $cabinSize}<p class="item_info_cabin icon_cruise_before area_cabin">{$cabinSize} m2</p>{/if}
						{if $bed_size}<p class="item_info_cabin icon_cruise_before bed_cabin">{$bed_size}</p>{/if}
					</div>
					{if $facilities_cabin}<p class="item_info_cabin icon_cruise_before meals_cabin">{$facilities_cabin}</p>{/if}
					<p class="item_info_cabin icon_cruise_before promotion_cabin">{$core->get_Lang('Prices include VAT')}</p>						
					<a class="btn_textCabinDetail collapsed" href="javascript:void(0)" role="button" data-bs-toggle="modal" data-bs-target="#roomModal">{$core->get_Lang('Cabin detail')} <i class="fa fa-angle-down" aria-hidden="true"></i></a>
				</div>
				<div class="box_price_cruise">
					<div class="box_item_room_cabin">
						<h4 class="name_room_cabin">{$core->get_Lang('Cabin')} 1: Double</h4>
						<p class="group_size_room_cabin">{$core->get_Lang('Adult')} 2 x $350</p>
						<p class="group_size_room_cabin">{$core->get_Lang('Children')} 1 x $0</p>
					</div>
					<div class="box_item_room_cabin">
						<h4 class="name_room_cabin">{$core->get_Lang('Cabin')} 1: Double</h4>
						<p class="group_size_room_cabin">{$core->get_Lang('Adult')} 2 x $350</p>
						<p class="group_size_room_cabin">{$core->get_Lang('Children')} 1 x $0</p>
					</div>
				</div>
				<div class="box_book_cabin">	
					<p class="txt_total_price">{$core->get_Lang("Total price")}</p>		
					<p class="total_price">815k<span class="price_unit">đ</span></p>
					<p class="text_vat">Giá đã bao gồm thuế và phí</p>								
					<button class="btn_book_cabin">{$core->get_Lang('Book now')}</button>
					<p class="txt_contact">{$core->get_Lang('Do you need advice?')} <button class="btn_contact_cabin">{$core->get_Lang('Contact')}</button></p>
				</div>
			</div>
		</div>
	{/foreach}
{/if}
<script>
var itinerary_cruise_id='{$cruise_itinerary_id}';
var departure_date='{$departure_date}';
var cruise_id='{$cruise_id}';
</script>
{literal}
<script type="text/javascript">
loadChooseCabinCruise(itinerary_cruise_id,departure_date); 
function loadChooseCabinCruise($cruise_itinerary_id,$departure_date){
	var adata = {
		'cruise_itinerary_id': $cruise_itinerary_id,
		'departure_date' : $departure_date,
		'cruise_id' : cruise_id,
	};
	$.ajax({
		type:'POST',
		url:path_ajax_script+'/index.php?mod='+mod+'&act=ajChooseCabinCruise',
		data: adata,	
		dataType:'html',	
		success:function(html){
			$('.info_cabin_book').html(html);
		}
	});
}
</script>
{/literal}