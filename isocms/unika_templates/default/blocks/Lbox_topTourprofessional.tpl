{if $listTopTour}
<section class="section_box attractive_tour box_professional_attractive_tour">
	<div class="container-fluid">
		<div class="attractive_tour--header header__content">
			{assign var = TitleAttractiveTour value = TitleAttractiveTour_|cat:$_LANG_ID}
			{assign var = IntroAttractiveTour value = IntroAttractiveTour_|cat:$_LANG_ID}
			<h2 class="section_box-title">{$clsConfiguration->getValue($TitleAttractiveTour)|html_entity_decode}</h2>
			<div class="section_box-intro">
				{$clsConfiguration->getValue($IntroAttractiveTour)|html_entity_decode}
			</div>
		</div>
		<div class="attractive_tour--content">
			<div class="row list_tours">
				{section name=i loop=$listTopTour}
					{assign var=tour_id value=$listTopTour[i].tour_id}
                    {assign var=oneTopTour value=$clsTour->getOne($tour_id,'title,slug,duration_type,duration_custom,number_day,number_night,list_departure_point_id,image')}
					{$clsISO->getBlock('box_item_tourprofessional',["oneTopTour"=>$oneTopTour,"tour_id"=>$tour_id])}
				{/section}
			</div>
			{if $totalRecord gt $recordPerPage}
				<div class="view_more">
					<a href="javascript:void(0);" page="1" rel="nofollow" _type="TopTrip" class="show-loader btn_view_more" id="show-more-tour-professional" title="{$core->get_Lang('View more')}" role=link aria-disabled=true >{$core->get_Lang('View more')}</a>
				</div>
			{/if}
		</div>
	</div>
	<script>
		var totalRecord='{$totalRecord}';
		var $pageLastest = 1;
		var $_LANG_ID = '{$_LANG_ID}';
		var width = $(window).width();
	</script>
</section>
{/if}