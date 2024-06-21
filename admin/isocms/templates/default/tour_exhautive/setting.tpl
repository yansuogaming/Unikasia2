<div class="page-tour_setting">
	{$core->getBlock('header_title_tour_setting')}
	<div class="container-fluid container-fluid-2 d-flex">
		{$core->getBlock('menu_tour_exhautive_setting')}
		<div class="content_setting_box">
			<div class="page_detail-title">
				<h2>{$core->get_Lang('settingtour')}</h2>
        		<p>{$core->get_Lang('systemmanagementsettingtour')}</p>
			</div>
			<div class="wrap">
					<div id="clienttabs">
						<ul>
							<li><a><i class="fa fa-cog"></i> {$core->get_Lang('intropage')}</a></li>
							<li><a><i class="fa fa-cog"></i> {$core->get_Lang('cover images')}</a></li>
							<li><a><i class="fa fa-cog"></i> {$core->get_Lang('List Tour Config')}</a></li>
						</ul>
					</div>
					<div id="tab_content">
						<form method="post" action="" enctype="multipart/form-data">
							<div class="tabbox">
								{assign var=site_tour_intro value=site_tour_intro_|cat:$_LANG_ID}
								<textarea id="textarea_intro_editor{$now}" class="textarea_intro_editor" name="iso-{$site_tour_intro}" style="width:100%">{$clsConfiguration->getValue($site_tour_intro)}</textarea>
							</div>
							<div class="tabbox" style="display:none">
								<span>Width x Height: 1920 x 600</span>
								<div class="cleafix mb10"></div>
								<div class="span100">
									<a href="javascript:void()" class="ajOpenDialog" isoman_for_id="site_tour_banner" isoman_val="{$clsConfiguration->getValue('site_tour_banner')}" isoman_name="site_tour_banner" title="{$core->get_Lang('edit')}"><i class="iso-edit"></i></a>
									<img src="{$clsConfiguration->getValue('site_tour_banner')}" id="isoman_show_site_tour_banner" class="span100" height="600" style="width:100%;" />
									<input type="hidden" id="isoman_hidden_site_tour_banner" name="isoman_url_site_tour_banner" value="{$clsConfiguration->getValue('site_tour_banner')}" />
								</div>
							</div>
							<div class="tabbox" style="display:none">
								<div class="row-span">
									<div class="fieldlabel">{$core->get_Lang('Title')}</div>
									{assign var = TitleListTour value = TitleListTour_|cat:$_LANG_ID}
									<div class="fieldarea">
										<input type="text" class="text_32 full-width border_aaa" value="{$clsConfiguration->getValue($TitleListTour)}" name="iso-{$TitleListTour}"/>
									</div>
								</div>
								<div class="row-span">
									<div class="fieldlabel">{$core->get_Lang('Short text')}</div>
									<div class="fieldarea">
										{assign var = ShortTextListTour value = ShortTextListTour_|cat:$_LANG_ID}
										<textarea style="width:100%" class="textarea_intro_editor_simple" name="iso-{$ShortTextListTour}" id="ShortTextListTour" cols="255" rows="2">{$clsConfiguration->getValue($ShortTextListTour)}</textarea>
									</div>
								</div>
								<div class="row-span">
									<div class="fieldlabel">{$core->get_Lang('Ảnh chìm')}</div>
									<div class="fieldarea">
										<span>Width x Height: 1920 x 418</span>
										<a href="javascript:void()" class="ajOpenDialog" isoman_for_id="BannerListTour" isoman_val="{$clsConfiguration->getValue('BannerListTour')}" isoman_name="BannerListTour" title="{$core->get_Lang('edit')}"><i class="iso-edit"></i></a>
										<img src="{$clsConfiguration->getValue('BannerListTour')}" id="isoman_show_BannerListTour" class="span100" height="418" style="width:100%;" />
										<input type="hidden" id="isoman_hidden_BannerListTour" name="iso-BannerListTour" value="{$clsConfiguration->getValue('BannerListTour')}" />
									</div>
								</div>
							</div>
							<div class="clearfix mt10"></div>
							<fieldset class="submit-buttons">
								{$saveBtn}
								<input value="UpdateConfiguration" name="submit" type="hidden">
							</fieldset>
						</form>
					</div>
				</tr>
			</div>
		</div>
	</div>
</div>