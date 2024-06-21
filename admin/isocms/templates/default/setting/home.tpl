<div class="breadcrumb">
	<strong>Bạn đang ở:</strong>
	<a href="{$PCMS_URL}" title="Trang chủ">{$core->get_Lang('Home')}</a>
    <a>&raquo;</a>
    <a href="{$PCMS_URL}/index.php?mod={$mod}" title="Cài đặt">{$core->get_Lang('Installation')}</a>
    <a href="javascript:window.history.back();" class="back fr">{$core->get_Lang('Come back')}</a>
</div>
<div class="page-tour_setting">
	<div class="page-title  d-flex" onclick="location.href='{$PCMS_URL}/?&mod={$mod}&act={$act}'">
		<div class="title">
			<h1>{$core->get_Lang('Home Config')}</h1>
			<p>{$core->get_Lang('Enter full fields in the required fields')}</p>
		</div>
	</div>
	<div class="container-fluid">
		<form id="forums" method="post" class="filterForm" action="">
			<fieldset>
				<legend>{$core->get_Lang("Agence Hyour")}</legend>
				<div class="row-span">
					<div class="fieldlabel">{$core->get_Lang('Title')}</div>
					{assign var = TitleAgenceHyour value = TitleAgenceHyour_|cat:$_LANG_ID}
					<div class="fieldarea">
						<textarea style="width:100%" class="textarea_intro_editor_simple" name="iso-{$TitleAgenceHyour}" id="TitleAgenceHyour" cols="255" rows="2">{$clsConfiguration->getValue($TitleAgenceHyour)}</textarea>
					</div>
				</div>
				<div class="row-span">
					<div class="fieldlabel">{$core->get_Lang('Short description')}</div>
					<div class="fieldarea">
						{assign var = IntroAgenceHyour value = IntroAgenceHyour_|cat:$_LANG_ID}
						<textarea style="width:100%" class="textarea_intro_editor_simple" name="iso-{$IntroAgenceHyour}" id="IntroAgenceHyour" cols="255" rows="2">{$clsConfiguration->getValue($IntroAgenceHyour)}</textarea>
					</div>
				</div>
			</fieldset>
			<fieldset>
				<legend>{$core->get_Lang("EXPLORE OUR TRAVEL STYLES")}</legend>
				<div class="row-span">
					<div class="fieldlabel">{$core->get_Lang('Title')}</div>
					{assign var = TitleCatTour value = TitleCatTour_|cat:$_LANG_ID}
					<div class="fieldarea">
						<textarea style="width:100%" class="textarea_intro_editor_simple" name="iso-{$TitleCatTour}" id="TitleCatTour" cols="155" rows="2">{$clsConfiguration->getValue($TitleCatTour)}</textarea>
					</div>
				</div>
				<div class="row-span">
					<div class="fieldlabel">{$core->get_Lang('Short description')}</div>
					<div class="fieldarea">
						{assign var = IntroCatTour value = IntroCatTour_|cat:$_LANG_ID}
						<textarea style="width:100%" class="textarea_intro_editor_simple" name="iso-{$IntroCatTour}" id="IntroCatTour" cols="255" rows="2">{$clsConfiguration->getValue($IntroCatTour)}</textarea>
					</div>
				</div>
			</fieldset>
			<fieldset>
				<legend>{$core->get_Lang("Favorite destination")}</legend>
				<div class="row-span">
					<div class="fieldlabel">{$core->get_Lang('Title')}</div>
					{assign var = TitleFavoriteDestination value = TitleFavoriteDestination_|cat:$_LANG_ID}
					<div class="fieldarea">
						<textarea style="width:100%" class="textarea_intro_editor_simple" name="iso-{$TitleFavoriteDestination}" id="TitleFavoriteDestination" cols="255" rows="2">{$clsConfiguration->getValue($TitleFavoriteDestination)}</textarea>
					</div>
				</div>
				<div class="row-span">
					<div class="fieldlabel">{$core->get_Lang('Short description')}</div>
					<div class="fieldarea">
						{assign var = IntroFavoriteDestination value = IntroFavoriteDestination_|cat:$_LANG_ID}
						<textarea style="width:100%" class="textarea_intro_editor_simple" name="iso-{$IntroFavoriteDestination}" id="IntroFavoriteDestination" cols="255" rows="2">{$clsConfiguration->getValue($IntroFavoriteDestination)}</textarea>
					</div>
				</div>
			</fieldset>
			<fieldset>
				<legend>{$core->get_Lang("What Our Customers Say")}</legend>
				<div class="row-span">
					<div class="fieldlabel">{$core->get_Lang('Title')}</div>
					{assign var = TitleTestimonialsHome value = TitleTestimonialsHome_|cat:$_LANG_ID}
					<div class="fieldarea">
						<textarea style="width:100%" class="textarea_intro_editor_simple" name="iso-{$TitleTestimonialsHome}" id="TitleTestimonialsHome" cols="255" rows="2">{$clsConfiguration->getValue($TitleTestimonialsHome)}</textarea>
					</div>
				</div>
				<div class="row-span">
					<div class="fieldlabel">{$core->get_Lang('Short description')}</div>
					<div class="fieldarea">
						{assign var = IntroTestimonialsHome value = IntroTestimonialsHome_|cat:$_LANG_ID}
						<textarea style="width:100%" class="textarea_intro_editor_simple" name="iso-{$IntroTestimonialsHome}" id="IntroTestimonialsHome" cols="255" rows="2">{$clsConfiguration->getValue($IntroTestimonialsHome)}</textarea>
					</div>
				</div>
			</fieldset>
			<fieldset>
				<legend>{$core->get_Lang("Explore our trips")}</legend>
				<div class="row-span">
					<div class="fieldlabel">{$core->get_Lang('Title')}</div>
					{assign var = TitleExploreTrips value = TitleExploreTrips_|cat:$_LANG_ID}
					<div class="fieldarea">
						<textarea style="width:100%" class="textarea_intro_editor_simple" name="iso-{$TitleExploreTrips}" id="TitleExploreTrips" cols="255" rows="2">{$clsConfiguration->getValue($TitleExploreTrips)}</textarea>
					</div>
				</div>
				<div class="row-span">
					<div class="fieldlabel">{$core->get_Lang('Short description')}</div>
					<div class="fieldarea">
						{assign var = IntroExploreTrips value = IntroExploreTrips_|cat:$_LANG_ID}
						<textarea style="width:100%" class="textarea_intro_editor_simple" name="iso-{$IntroExploreTrips}" id="IntroExploreTrips" cols="255" rows="2">{$clsConfiguration->getValue($IntroExploreTrips)}</textarea>
					</div>
				</div>
			</fieldset>
			<fieldset>
				<legend>{$core->get_Lang("How it works")}</legend>
				<div class="row-span">
					<div class="fieldlabel">{$core->get_Lang('Title')}</div>
					{assign var = TitleHowItWork value = TitleHowItWork_|cat:$_LANG_ID}
					<div class="fieldarea">
						<textarea style="width:100%" class="textarea_intro_editor_simple" name="iso-{$TitleHowItWork}" id="TitleHowItWork" cols="255" rows="2">{$clsConfiguration->getValue($TitleHowItWork)}</textarea>
					</div>
				</div>
				{section name=i loop=5 start=1}
					{assign var = k value = $smarty.section.i.index}
					<fieldset class="how_it_work_{$k}">
						<legend>{$core->get_Lang("Step $k")}</legend>
						<div class="row-span">
							<div class="fieldlabel">{$core->get_Lang('Title')}</div>
							{assign var = TitleHowItWorkStep value = TitleHowItWorkStep|cat:$k|cat:_|cat:$_LANG_ID}
							<div class="fieldarea">
								<input type="text" class="text_32 full-width border_aaa"
									   value="{$clsConfiguration->getValue($TitleHowItWorkStep)}"
									   name="iso-{$TitleHowItWorkStep}"/>
							</div>
						</div>
						<div class="row-span">
							<div class="fieldlabel">{$core->get_Lang("Icon")}</div>
							<div class="fieldarea">
								{assign var = IconHowItWorkStep value = IconHowItWorkStep|cat:$k|cat:_|cat:$_LANG_ID}
								<img id="isoman_show_file_programme_{$k}" class="float-left mr-3" src="{$clsConfiguration->getValue($IconHowItWorkStep)}" width="40px" height="40px" />
								<input class="text_32 border_aaa bold" type="text" id="isoman_hidden_file_programme_{$k}" name="iso-{$IconHowItWorkStep}" value="{$clsConfiguration->getValue($IconHowItWorkStep)}" style="width:100%; max-width:300px; float:left" onClick="loadHelp(this)" readonly><a style="float:left; margin-left:4px; margin-top:-4px;" href="#" class="ajOpenDialog" isoman_for_id="file_programme_{$k}" isoman_name="file_programme_{$k}"><img src="{$URL_IMAGES}/general/folder-32.png" border="0" title="Open" alt="Open" /></a>
							</div>
						</div>
						<div class="row-span">
							<div class="fieldlabel">{$core->get_Lang('Short description')}</div>
							<div class="fieldarea">
								{assign var = IntroHowItWorkStep value = IntroHowItWorkStep|cat:$k|cat:_|cat:$_LANG_ID}
								<textarea style="width:100%" class="textarea_intro_editor_simple"
										  name="iso-{$IntroHowItWorkStep}" id="{$IntroHowItWorkStep}" cols="255"
										  rows="2">{$clsConfiguration->getValue($IntroHowItWorkStep)}</textarea>
							</div>
						</div>
					</fieldset>
				{/section}
			</fieldset>
			<fieldset>
				<legend>{$core->get_Lang("The update news")}</legend>
				<div class="row-span">
					<div class="fieldlabel">{$core->get_Lang('Title')}</div>
					{assign var = TitleUpdateNew value = TitleUpdateNew_|cat:$_LANG_ID}
					<div class="fieldarea">
						<textarea style="width:100%" class="textarea_intro_editor_simple" name="iso-{$TitleUpdateNew}" id="TitleUpdateNew" cols="255" rows="2">{$clsConfiguration->getValue($TitleUpdateNew)}</textarea>
					</div>
				</div>
			</fieldset>
			<fieldset>
				<legend>{$core->get_Lang("Your perfect trip begins with a conversation")}</legend>
				<div class="row-span">
					<div class="fieldlabel">{$core->get_Lang('Title')}</div>
					{assign var = TitlePerfectTrip value = TitlePerfectTrip_|cat:$_LANG_ID}
					<div class="fieldarea">
						<textarea style="width:100%" class="textarea_intro_editor_simple" name="iso-{$TitlePerfectTrip}" id="TitlePerfectTrip" cols="255" rows="2">{$clsConfiguration->getValue($TitlePerfectTrip)}</textarea>
					</div>
				</div>
				<div class="row-span">
					<div class="fieldlabel">{$core->get_Lang('Short description')}</div>
					<div class="fieldarea">
						{assign var = IntroPerfectTrip value = IntroPerfectTrip_|cat:$_LANG_ID}
						<textarea style="width:100%" class="textarea_intro_editor_simple" name="iso-{$IntroPerfectTrip}" id="IntroPerfectTrip" cols="255" rows="2">{$clsConfiguration->getValue($IntroPerfectTrip)}</textarea>
					</div>
				</div>
				{section name=i loop=4 start=1}
					{assign var = k value = $smarty.section.i.index}
					<fieldset>
						<legend>{$core->get_Lang("Photo $k")}</legend>
						<div class="row-span">
							<div class="fieldlabel">{$core->get_Lang("Choose pic")}
								<p style="margin-top: -1.5rem;">{$core->get_Lang("Size")} (WxH=1600x460)</p>
							</div>
							<div class="fieldarea">
								{assign var = TripPhoto value = TripPhoto|cat:$k|cat:_|cat:$_LANG_ID}
								<img id="isoman_show_{$TripPhoto}" class="float-left mr-3" src="{$clsConfiguration->getValue($TripPhoto)}"
									 width="40px" height="40px"/>
								<input class="text_32 border_aaa bold" type="text" id="{$TripPhoto}"
									   name="iso-{$TripPhoto}"
									   value="{$clsConfiguration->getValue($TripPhoto)}"
									   style="width:100%; max-width:300px; float:left" onClick="loadHelp(this)"
									   readonly ><a style="float:left; margin-left:4px; margin-top:-4px;" href="#"
												   class="ajOpenDialog" isoman_for_id="{$TripPhoto}"
												   isoman_name="{$TripPhoto}"><img
											src="{$URL_IMAGES}/general/folder-32.png" border="0" title="Open"
											alt="Open"/></a>
							</div>
						</div>
						<div class="row-span">
							<div class="fieldlabel">{$core->get_Lang("Photo name $k")}</div>
							{assign var = TripPhotoName value = TripPhotoName|cat:$k|cat:_|cat:$_LANG_ID}
							<div class="fieldarea">
								<input type="text" class="text_32 full-width border_aaa"
									   value="{$clsConfiguration->getValue($TripPhotoName)}"
									   name="iso-{$TripPhotoName}"/>
							</div>
						</div>
					</fieldset>
				{/section}
			</fieldset>
			<fieldset>
				<legend>{$core->get_Lang("SO, READY TO START?")}</legend>
				<div class="row-span">
					<div class="fieldlabel">{$core->get_Lang('Title')}</div>
					{assign var = TitleVideoPerfect value = TitleVideoPerfect_|cat:$_LANG_ID}
					<div class="fieldarea">
						<textarea style="width:100%" class="textarea_intro_editor_simple" name="iso-{$TitleVideoPerfect}" id="TitleVideoPerfect" cols="255" rows="2">{$clsConfiguration->getValue($TitleVideoPerfect)}</textarea>
					</div>
				</div>
				<div class="row-span">
					<div class="fieldlabel">{$core->get_Lang('Short description')}</div>
					<div class="fieldarea">
						{assign var = IntroVideoPerfect value = IntroVideoPerfect_|cat:$_LANG_ID}
						<textarea style="width:100%" class="textarea_intro_editor_simple" name="iso-{$IntroVideoPerfect}" id="IntroVideoPerfect" cols="255" rows="2">{$clsConfiguration->getValue($IntroVideoPerfect)}</textarea>
					</div>
				</div>
				<div class="row-span">
					<div class="fieldlabel">{$core->get_Lang('Link Youtube')}</div>
					{assign var = LinkVideoPerfect value = LinkVideoPerfect_|cat:$_LANG_ID}
					<div class="fieldarea">
						<input type="text" class="text_32 full-width border_aaa" value="{$clsConfiguration->getValue($LinkVideoPerfect)}" name="iso-{$LinkVideoPerfect}"/>
					</div>
				</div>
				<div class="row-span">
					<div class="fieldlabel">{$core->get_Lang("Thumbnail")}</div>
					<div class="fieldarea">
						{assign var = ThumbnailYoutube value = ThumbnailYoutube_|cat:$_LANG_ID}
						<img id="isoman_show_file_programme_ThumbnailYoutube" class="float-left mr-3" src="{$clsConfiguration->getValue($ThumbnailYoutube)}" width="40px" height="40px" />
						<input class="text_32 border_aaa bold" type="text" id="isoman_hidden_file_programme_ThumbnailYoutube" name="iso-{$ThumbnailYoutube}" value="{$clsConfiguration->getValue($ThumbnailYoutube)}" style="width:100%; max-width:300px; float:left" onClick="loadHelp(this)" readonly><a style="float:left; margin-left:4px; margin-top:-4px;" href="#" class="ajOpenDialog" isoman_for_id="file_programme_ThumbnailYoutube" isoman_name="file_programme_ThumbnailYoutube"><img src="{$URL_IMAGES}/general/folder-32.png" border="0" title="Open" alt="Open" /></a>
					</div>
				</div>
			</fieldset>
			<fieldset class="submit-buttons fixed" >
				{$saveBtn}
				<input value="UpdateConfiguration" name="submit" type="hidden">
			</fieldset>
		</form>
	</div>
</div>
<script type="text/javascript">
	var $type = 'WhyUsHomePage';
	var $target_id = '0';
</script>