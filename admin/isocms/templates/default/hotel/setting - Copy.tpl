<div class="page-tour_setting">
	{$core->getBlock('header_title_module_setting')}
	<div class="container-fluid container-fluid-2 d-flex">
		{$core->getBlock('menu_hotel_setting')}
		<div class="content_setting_box">
			<div class="wrap">
				<div id="clienttabs">
					<ul>
						<li><a><i class="fa fa-cog"></i> {$core->get_Lang('intropage')}</a></li>
						<li><a><i class="fa fa-cog"></i> {$core->get_Lang('bannercover')}</a></li>
					</ul>
				</div>
				<div id="tab_content">
					<form method="post" action="" enctype="multipart/form-data">
						<div class="tabbox">
							{assign var=site_hotel_intro value=site_hotel_intro_$_LANG_ID}
							<textarea id="textarea_intro_editor{$now}" class="textarea_intro_editor" name="iso-{$site_hotel_intro}" style="width:100%">{$clsConfiguration->getValue($site_hotel_intro)}</textarea>
						</div>
						<div class="tabbox" style="display:none">
							<div class="photobox span98">
								<img src="{$clsConfiguration->getValue('site_hotel_banner')}" id="isoman_show_site_hotel_banner" class="span100" height="156px" style="width:100%;" />
								<input type="hidden" id="isoman_hidden_site_hotel_banner" name="isoman_url_site_hotel_banner" value="{$clsConfiguration->getValue('site_hotel_banner')}" />
								<a href="javascript:void()" class="photobox_edit ajOpenDialog" isoman_for_id="site_hotel_banner" isoman_val="{$clsConfiguration->getValue('site_hotel_banner')}" isoman_name="site_hotel_banner" title="{$core->get_Lang('edit')}"><i class="iso-edit"></i></a>
							</div>
						</div>
						<div class="clearfix mt10"></div>
						<fieldset class="submit-buttons">
							{$saveBtn}
							<input value="UpdateConfiguration" name="submit" type="hidden">
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>