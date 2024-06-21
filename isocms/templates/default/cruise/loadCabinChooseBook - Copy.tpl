<div class="info_cabin_box">
	<h3 class="cruise_name">{$clsCruiseItinerary->getTitleDay($cruise_itinerary_id)}</h3>
	<p class="departure_date mb20"><span class="text_left">{$core->get_Lang('Itinerary')}</span><span class="text_right">{$clsCruiseItinerary->getNumberDay($cruise_itinerary_id)}</span></p>
	<p class="departure_date"><span class="text_left">{$core->get_Lang('Departure')}</span><span class="text_right">{$clsISO->converTimeToText5($str_departure_date)}</span></p>
	{if $listCabin}
	<div class="list_cabin">
		<p class="title_box">{$core->get_Lang('Cabin Information')}</p>
		{foreach from=$listCabin item=item name=item}
		{assign var=cruise_cabin_id value=$item.cruise_cabin_id}
		<div class="cabin_choose_item">
			<div class="col_name">
				<h4><a title="{$core->get_Lang('Delete')}" href="javascript:void(0);" class="delete_cabin" data-cruise_id="{$cruise_id}" data-cruise_itinerary_id="{$cruise_itinerary_id}" data-cruise_cabin_id="{$cruise_cabin_id}"><i class="icon_info_cabin icon_del"></i></a>{$clsCruiseCabin->getTitle($cruise_cabin_id)}</h4>
				<p class="size12 mb0">{$item.number_cabin} {$core->get_Lang('cabin')} {$item.number_adult} {$core->get_Lang('Adults')} {$item.number_child} {$core->get_Lang('Child')}</p>
			</div>
			<div class="col_price">{$clsISO->priceFormat($item.totalprice)} {$clsISO->getShortRate()}</div>
		</div>
		{/foreach}
		{if $promotion}
		<div class="cabin_choose_item promotion">
			<div class="col_name">
				<h4>Giảm giá</h4>
			</div>
			<div class="col_price">-{$clsISO->priceFormat($totalprice_promotion)} {$clsISO->getShortRate()}</div>
		</div>
		{/if}
	</div>
	<div class="total_price_cabin">
		<div class="col_label">{$core->get_Lang('Total')}:</div>
		<div class="col_price">
			<p class="price">{$clsISO->priceFormat($totalprice_new)} {$clsISO->getShortRate()}</p>
			<p class="text">{$core->get_Lang('Giá trên đã bao gồm VAT')}</p>
		</div>
	</div>
	{/if}
</div>
{if $listCabin}
<div class="btn_book">
	<a class="btn_main" data-cruise_id="{$cruise_id}" data-cruise_itinerary_id="{$cruise_itinerary_id}" id="book_now_cabin" title="{$core->get_Lang('Book now')}">{$core->get_Lang('Book now')}</a>
</div>
{/if}