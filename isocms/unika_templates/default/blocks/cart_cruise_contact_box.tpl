{if $cartSessionCruise}
{assign var=title_hotel value=$clsCruise->getTitle($cartSessionCruise.cruise_id)}
{assign var=link_hotel value=$clsCruise->getLink($cartSessionCruise.cruise_id)}
<div class="infor_tour bg_fff relative">
    <a href="javascript:void(0);" class="delete_service" data-type="Hotel" key="{$k}" title="{$core->get_Lang('Delete serivce')}"><i class="fa fa-times"></i></a>
    <h3 class="title text_bold mb15 size24 size20_mb">{$title_hotel} </h3>
    <p id="{$cartSessionCruise.cruise_itinerary_id}">{$core->get_Lang('Itinerary')}: <span class="text_bold">{$clsCruiseItinerary->getNumberDay($cartSessionCruise.cruise_itinerary_id)}</span></p>
    <div class="row">
        <div class="col-md-6 col-sm-6">
            <p class="departure_in4"><b>{$core->get_Lang('Departure date')}  </b></p>
            <p class="departure">{$clsISO->converTimeToText5($cartSessionCruise.departure_date)}</p>
        </div>
    </div>
    <table class="table_booking_price">
        <tbody>
            {foreach from=$cartSessionCruise.cabin key=cruise_cabin_id item=value name=room}
            <p class="text_bold">{$value.number_cabin} {$core->get_Lang('Cabins')}: {$clsCruiseCabin->getTitle($cruise_cabin_id)}</p>
            {/foreach}
        </tbody>
    </table>
</div>
{/if}