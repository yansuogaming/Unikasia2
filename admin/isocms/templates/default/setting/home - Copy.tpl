<div class="breadcrumb">
	<strong>Bạn đang ở:</strong>
	<a href="{$PCMS_URL}" title="Trang chủ">{$core->get_Lang('Home')}</a>
    <a>&raquo;</a>
    <a href="{$PCMS_URL}/index.php?mod={$mod}" title="Cài đặt">{$core->get_Lang('Installation')}</a>
    <a href="javascript:window.history.back();" class="back fr">{$core->get_Lang('Come back')}</a>
</div>
<div class="container-fluid">
    <div class="page-title">
        <h2>{$core->get_Lang('Home Config')}</h2>
        <p>{$core->get_Lang('Enter full fields in the required fields')}</p>
    </div>
	<div class="clearfix"></div>
	<form id="forums" method="post" class="filterForm" action="">
		
		<fieldset>
			<legend>{$core->get_Lang("Attractive tour")}</legend>
			<div class="row-span">
				<div class="fieldlabel">{$core->get_Lang('Title')}</div>
				{assign var = TitleAttractiveTour value = TitleAttractiveTour_$_LANG_ID}
				<div class="fieldarea">
					<input type="text" class="text_32 full-width border_aaa" value="{$clsConfiguration->getValue($TitleAttractiveTour)}" name="iso-{$TitleAttractiveTour}"/>
				</div>
			</div>
			<div class="row-span">
				<div class="fieldlabel">{$core->get_Lang('Short description')}</div>
				<div class="fieldarea">
					{assign var = IntroAttractiveTour value = IntroAttractiveTour_$_LANG_ID}
					<textarea style="width:100%" class="textarea_intro_editor_simple" name="iso-{$IntroAttractiveTour}" id="IntroAttractiveTour" cols="255" rows="2">{$clsConfiguration->getValue($IntroAttractiveTour)}</textarea>
				</div>
			</div>
		</fieldset>
		{if $_LANG_ID ne 'vn'}
		<fieldset>
			<legend>{$core->get_Lang("Outstanding Travel Styles")}</legend>
			<div class="row-span">
				<div class="fieldlabel">{$core->get_Lang('Title')}</div>
				{assign var = TitleCatTour value = TitleCatTour_$_LANG_ID}
				<div class="fieldarea">
					<input type="text" class="text_32 full-width border_aaa" value="{$clsConfiguration->getValue($TitleCatTour)}" name="iso-{$TitleCatTour}"/>
				</div>
			</div>
			<div class="row-span">
				<div class="fieldlabel">{$core->get_Lang('Short description')}</div>
				<div class="fieldarea">
					{assign var = IntroCatTour value = IntroCatTour_$_LANG_ID}
					<textarea style="width:100%" class="textarea_intro_editor_simple" name="iso-{$IntroCatTour}" id="IntroCatTour" cols="255" rows="2">{$clsConfiguration->getValue($IntroCatTour)}</textarea>
				</div>
			</div>
		</fieldset>
		{/if}
		<fieldset>
			<legend>{$core->get_Lang("Favorite destination")}</legend>
			<div class="row-span">
				<div class="fieldlabel">{$core->get_Lang('Title')}</div>
				{assign var = TitleFavoriteDestination value = TitleFavoriteDestination_$_LANG_ID}
				<div class="fieldarea">
					<input type="text" class="text_32 full-width border_aaa" value="{$clsConfiguration->getValue($TitleFavoriteDestination)}" name="iso-{$TitleFavoriteDestination}"/>
				</div>
			</div>
			<div class="row-span">
				<div class="fieldlabel">{$core->get_Lang('Short description')}</div>
				<div class="fieldarea">
					{assign var = IntroFavoriteDestination value = IntroFavoriteDestination_$_LANG_ID}
					<textarea style="width:100%" class="textarea_intro_editor_simple" name="iso-{$IntroFavoriteDestination}" id="IntroFavoriteDestination" cols="255" rows="2">{$clsConfiguration->getValue($IntroFavoriteDestination)}</textarea>
				</div>
			</div>
		</fieldset>
		{if $_LANG_ID eq 'vn'}
		<fieldset>
			<legend>{$core->get_Lang("Tour Inbound")}</legend>
			<div class="row-span">
				<div class="fieldlabel">{$core->get_Lang('Title')}</div>
				{assign var = TitleTourInbound value = TitleTourInbound_$_LANG_ID}
				<div class="fieldarea">
					<input type="text" class="text_32 full-width border_aaa" value="{$clsConfiguration->getValue($TitleTourInbound)}" name="iso-{$TitleTourInbound}"/>
				</div>
			</div>
			<div class="row-span">
				<div class="fieldlabel">{$core->get_Lang('Short description')}</div>
				<div class="fieldarea">
					{assign var = IntroTourInbound value = IntroTourInbound_$_LANG_ID}
					<textarea style="width:100%" class="textarea_intro_editor_simple" name="iso-{$IntroTourInbound}" id="IntroTourInbound" cols="255" rows="2">{$clsConfiguration->getValue($IntroTourInbound)}</textarea>
				</div>
			</div>
		</fieldset>
		<fieldset>
			<legend>{$core->get_Lang("Tour Outbound")}</legend>
			<div class="row-span">
				<div class="fieldlabel">{$core->get_Lang('Title')}</div>
				{assign var = TitleTourOutbound value = TitleTourOutbound_$_LANG_ID}
				<div class="fieldarea">
					<input type="text" class="text_32 full-width border_aaa" value="{$clsConfiguration->getValue($TitleTourOutbound)}" name="iso-{$TitleTourOutbound}"/>
				</div>
			</div>
			<div class="row-span">
				<div class="fieldlabel">{$core->get_Lang('Short description')}</div>
				<div class="fieldarea">
					{assign var = IntroTourOutbound value = IntroTourOutbound_$_LANG_ID}
					<textarea style="width:100%" class="textarea_intro_editor_simple" name="iso-{$IntroTourOutbound}" id="IntroTourOutbound" cols="255" rows="2">{$clsConfiguration->getValue($IntroTourOutbound)}</textarea>
				</div>
			</div>
		</fieldset>
		{/if}
		<fieldset>
			<legend>{$core->get_Lang("Testimonials Box")}</legend>
			<div class="row-span">
				<div class="fieldlabel">{$core->get_Lang('Title')}</div>
				{assign var = TitleTestimonialsHome value = TitleTestimonialsHome_$_LANG_ID}
				<div class="fieldarea">
					<input type="text" class="text_32 full-width border_aaa" value="{$clsConfiguration->getValue($TitleTestimonialsHome)}" name="iso-{$TitleTestimonialsHome}"/>
				</div>
			</div>
			<div class="row-span">
				<div class="fieldlabel">{$core->get_Lang('Short description')}</div>
				<div class="fieldarea">
					{assign var = IntroTestimonialsHome value = IntroTestimonialsHome_$_LANG_ID}
					<textarea style="width:100%" class="textarea_intro_editor_simple" name="iso-{$IntroTestimonialsHome}" id="IntroTestimonialsHome" cols="255" rows="2">{$clsConfiguration->getValue($IntroTestimonialsHome)}</textarea>
				</div>
			</div>
		</fieldset>
		<fieldset>
			<legend>{$core->get_Lang("Travel inspiration")}</legend>
			<div class="row-span">
				<div class="fieldlabel">{$core->get_Lang('Title')}</div>
				{assign var = TitleTravelInspiration value = TitleTravelInspiration_$_LANG_ID}
				<div class="fieldarea">
					<input type="text" class="text_32 full-width border_aaa" value="{$clsConfiguration->getValue($TitleTravelInspiration)}" name="iso-{$TitleTravelInspiration}"/>
				</div>
			</div>
			<div class="row-span">
				<div class="fieldlabel">{$core->get_Lang('Short description')}</div>
				<div class="fieldarea">
					{assign var = IntroTravelInspiration value = IntroTravelInspiration_$_LANG_ID}
					<textarea style="width:100%" class="textarea_intro_editor_simple" name="iso-{$IntroTravelInspiration}" id="IntroTravelInspiration" cols="255" rows="2">{$clsConfiguration->getValue($IntroTravelInspiration)}</textarea>
				</div>
			</div>
		</fieldset>
		<fieldset>
			<legend>{$core->get_Lang("Partner")}</legend>
			<div class="row-span">
				<div class="fieldlabel">{$core->get_Lang('Title')}</div>
				{assign var = TitlePartner value = TitlePartner_$_LANG_ID}
				<div class="fieldarea">
					<input type="text" class="text_32 full-width border_aaa" value="{$clsConfiguration->getValue($TitlePartner)}" name="iso-{$TitlePartner}"/>
				</div>
			</div>
			<div class="row-span">
				<div class="fieldlabel">{$core->get_Lang('Short description')}</div>
				<div class="fieldarea">
					{assign var = IntroPartner value = IntroPartner_$_LANG_ID}
					<textarea style="width:100%" class="textarea_intro_editor_simple" name="iso-{$IntroPartner}" id="IntroPartner" cols="255" rows="2">{$clsConfiguration->getValue($IntroPartner)}</textarea>
				</div>
			</div>
		</fieldset>
		<fieldset>
			<legend>{$core->get_Lang("Press news")}</legend>
			<div class="row-span">
				<div class="fieldlabel">{$core->get_Lang('Title')}</div>
				{assign var = TitlePressNews value = TitlePressNews_$_LANG_ID}
				<div class="fieldarea">
					<input type="text" class="text_32 full-width border_aaa" value="{$clsConfiguration->getValue($TitlePressNews)}" name="iso-{$TitlePressNews}"/>
				</div>
			</div>
			<div class="row-span">
				<div class="fieldlabel">{$core->get_Lang('Short description')}</div>
				<div class="fieldarea">
					{assign var = IntroPressNews value = IntroPressNews_$_LANG_ID}
					<textarea style="width:100%" class="textarea_intro_editor_simple" name="iso-{$IntroPressNews}" id="IntroPressNews" cols="255" rows="2">{$clsConfiguration->getValue($IntroPressNews)}</textarea>
				</div>
			</div>
		</fieldset>
		<fieldset>
			<legend>{$core->get_Lang("Description Zone Footer")}</legend>
			<div class="row-span">
				<div class="fieldlabel">{$core->get_Lang('Short description')}</div>
				<div class="fieldarea">
					{assign var = DescriptionZoneFooter value = DescriptionZoneFooter_$_LANG_ID}
					<textarea style="width:100%" class="textarea_intro_editor_simple" name="iso-{$DescriptionZoneFooter}" id="DescriptionZoneFooter" cols="255" rows="2">{$clsConfiguration->getValue($DescriptionZoneFooter)}</textarea>
				</div>
			</div>
		</fieldset>
		<fieldset class="submit-buttons">
			{$saveBtn}
			<input value="UpdateConfiguration" name="submit" type="hidden">
		</fieldset>
	</form>
</div>
<script type="text/javascript">
	var $type = 'WhyUsHomePage';
	var $target_id = '0';
</script>