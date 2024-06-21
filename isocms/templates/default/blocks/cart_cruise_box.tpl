{if $cartSessionCruise}
<label class="titleBoxContent">{$core->get_Lang('Cruise')}</label>
{foreach from=$cartSessionCruise key=k item=item name=item}
{assign var=title_cruise value=$clsCruiseItinerary->getTitleDay($k)}
{assign var=link_cruise value=$clsCruise->getLink($item.cruise_id)}
<div class="tour_item cruise_itinerary_item item_cart mb30">
	<div class="info_tour border_bottom_959595">
		<div class="body_hotel {$deviceType}">
			<div class="body_left">
				<span class="number_iteration">{$smarty.foreach.item.iteration}</span>
			</div>
			<div class="body_right">
				<h3 class="title mb10"><a href="{$link_cruise}" title="{$title_cruise}">{$title_cruise}</a></h3>
				{*<p class="duration">{$clsCruiseItinerary->getNumberDay($k)}</p>*}
				<div class="departure_in4">
					<div class="depart_at">
						<p class="mb0"><b>{$core->get_Lang('Depart')}</b> {$clsISO->converTimeToText5($item.departure_date)}</p> 
						<p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="info_price">
		{assign var=rowspan value=$item.cabin|@count}
		{if $_LANG_ID eq 'vn'}
		<table class="table_price">
			<tbody>
				<tr class="tr_label"><td class="td1" rowspan="{if $item.promotion >0}{$rowspan+2}{else}{$rowspan+1}{/if}">{$core->get_Lang('Cabin')}</td></tr>
				{foreach from=$item.cabin key=cruise_cabin_id item=value name=cabin}
				{math assign="price_cabin" equation="x/y" x=$value.totalprice y=$value.number_cabin}
				<tr>
					<td class="td2">{$value.number_cabin} {$clsCruiseCabin->getTitle($cruise_cabin_id)}</td>
					<td class="td3">{$clsISO->formatPrice($price_cabin)} {$clsISO->getShortRate()}</td>
					<td class="td4">{$clsISO->formatPrice($value.totalprice)} {$clsISO->getShortRate()}</td>
				</tr>
				{/foreach}
				{if $item.promotion >0}
					{if $item.discount_type eq '2'}
						<tr class="promotion">
							<td class="td2">{$core->get_Lang('Discount')}</td>
							<td class="td3 hidden_phone"><p class="color_1fb69a mb0">-{$clsISO->formatPrice($item.promotion)}%</p></td>
							<td class="td4">-{$clsISO->formatPrice($item.totalPricePromotionCruise)} {$clsISO->getShortRate()}</td>
						</tr>
					{else}
						<tr class="promotion">
							<td class="td2">{$core->get_Lang('Discount')}</td>
							<td class="td3 hidden_phone"><p class="color_1fb69a mb0">-{$clsISO->formatPrice($item.promotion)} {$clsISO->getShortRate()}</p></td>
							<td class="td4">-{$clsISO->formatPrice($item.totalPricePromotionCruise)} {$clsISO->getShortRate()}</td>
						</tr>
					{/if}
				{/if}
				<tr class="tr_total">
					<td class="td1">{$core->get_Lang('Total')}</td>
					<td class="td2 hidden_phone"></td>
					<td class="td3 hidden_phone"></td>
					<td class="td4 td_total_price">{$clsISO->formatPrice($item.totalpriceCabin)} {$clsISO->getShortRate()}</td>
				</tr>
			</tbody>
		</table>
		{else}
		<table class="table_price">
			<tbody>
				<tr class="tr_label"><td class="td1" rowspan="{if $item.promotion >0}{$rowspan+2}{else}{$rowspan+1}{/if}">{$core->get_Lang('Cabin')}</td></tr>
				{foreach from=$item.cabin key=cruise_cabin_id item=value name=cabin}
				{math assign="price_cabin" equation="x/y" x=$value.totalprice y=$value.number_cabin}
				<tr>
					<td class="td2">{$value.number_cabin} {$clsCruiseCabin->getTitle($cruise_cabin_id)}</td>
					<td class="td3">{$clsISO->getShortRate()}{$clsISO->formatPrice($price_cabin)}</td>
					<td class="td4">{$clsISO->getShortRate()}{$clsISO->formatPrice($value.totalprice)}</td>
				</tr>
				{/foreach}
				{if $item.promotion >0}
					{if $item.discount_type eq '2'}
						<tr class="promotion">
							<td class="td2">{$core->get_Lang('Discount')}</td>
							<td class="td3 hidden_phone">-{$clsISO->formatPrice($item.promotion)}%</td>
							<td class="td4">-{$clsISO->getShortRate()}{$clsISO->formatPrice($item.totalPricePromotionCruise)} </td>
						</tr>
					{else}
						<tr class="promotion">
							<td class="td2">{$core->get_Lang('Discount')}</td>
							<td class="td3 hidden_phone">-{$clsISO->getShortRate()}{$clsISO->formatPrice($item.promotion)}%</td>
							<td class="td4">-{$clsISO->getShortRate()}{$clsISO->formatPrice($item.totalPricePromotionCruise)} </td>
						</tr>
					{/if}
				{/if}
				<tr class="tr_total">
					<td class="td1">{$core->get_Lang('Total')}</td>
					<td class="td2 hidden_phone"></td>
					<td class="td3 hidden_phone"></td>
					<td class="td4 td_total_price">{$clsISO->getShortRate()}{$clsISO->formatPrice($item.totalpriceCabin)}</td>
				</tr>
			</tbody>
		</table>
		{/if}
		<div class="info_function">
			<div class="info_function_left">
				<a  class="edit" href="{$clsCruise->getLink($item.cruise_id)}" title="{$core->get_Lang('Edit')}">{$core->get_Lang('Edit')}</a>
				<a class="remove ajvCart"  data-tp="DEL_CRUISE" data-table_id="{$k}" href="javascript:void(0);" title="{$core->get_Lang('Delete')}">{$core->get_Lang('Delete')}</a>
			</div>
		</div>
	</div>
</div>
{/foreach}
{/if}
