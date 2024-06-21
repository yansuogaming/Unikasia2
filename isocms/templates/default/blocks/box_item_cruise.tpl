{assign var=_link value = $clsCruise->getLink($cruise_item_id,'',$arrCruise)}
{assign var=_title value = $clsCruise->getTitle($cruise_item_id,$arrCruise)}
{assign var=start_from value = $clsCruise->getStartCityAround($cruise_item_id,0,0)}
{assign var=destination value = $clsCruise->getLCityAround2($cruise_item_id,0,0)}
<div class="item_cruise"> 
	<a class="photo" href="{$_link}" title="{$_title}">
		<img class="img100 {if $act eq 'cat' || $act eq 'default'}lazy{else}owl-lazy{/if}" alt="{$_title}" src="{$clsConfiguration->getImage('default_image_pixel',3,2)}" data-src="{$clsCruise->getImage($cruise_item_id,406,269,$arrCruise)}" width="406" height="269"/>	
	</a>
	<div class="cruise_body">
		<h3 class="title_item_cruise"><a href="{$_link}" title="{$_title}">{$_title}</a></h3>
		<p class="cruise_star">{$clsCruise->getStarNew($cruise_item_id,$arrCruise)}</p>
		{if $arrCruise.departure_port}<p class="item_info item_info_start"><label for="" class="lbl_item_info">{$core->get_Lang('Departure Port')}:</label> {$arrCruise.departure_port}</p>{/if}
		{if $destination}<p class="item_info item_info_end"><label for="" class="lbl_item_info">{$core->get_Lang('Destinations')}:</label> {$destination}</p>{/if}
		<div class="box_info_bottom">
			<div class="price__box">
				{$clsCruise->getLTripPrice1($cruise_item_id,$now_month,'list')}
			</div>
			<div class="btn_booknow">
				<a href="{$_link}" title="{$core->get_Lang('Detail')}">{$core->get_Lang('Detail')}<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
			</div>
		</div>
		
	</div>
</div>