<div class="breadcrumb">
	<strong>Bạn đang ở:</strong>
	<a href="{$PCMS_URL}" title="Trang chủ">{$core->get_Lang('Home')}</a>
    <a>&raquo;</a>
    <a href="{$PCMS_URL}/index.php?mod={$mod}" title="Cài đặt">{$core->get_Lang('Installation')}</a>
    <a href="javascript:window.history.back();" class="back fr">{$core->get_Lang('Come back')}</a>
</div>
<div class="container-fluid">
    <div class="page-title">
        <h2>{$core->get_Lang('About Us Config')}</h2>
        <p>{$core->get_Lang('Enter full fields in the required fields')}</p>
    </div>
	<div class="clearfix"></div>
	<form id="forums" method="post" class="filterForm" action="">
		{*<fieldset style="border:1px solid #a21417;">
			<legend style="background:#a21417;color:#fff;border:1px solid #a21417;padding:10px 15px;font-size:16px;">{$core->get_Lang('Home Config')}</legend>
			<div class="row-span">
				<div class="fieldlabel">{$core->get_Lang('Logo')} (WxH:202x96)</div>
				<div class="fieldarea">
					<div class="photobox" style="width:202px; height:100px">
						<img src="{$clsConfiguration->getValue('site_about_logo_home')}" id="isoman_show_site_about_logo_home" width="202px" height="96px"/>
						<input type="hidden" id="isoman_hidden_site_about_logo_home" name="isoman_url_site_about_logo_home" value="{$clsConfiguration->getValue('site_about_logo_home')}" />
						<a href="javascript:void()" class="photobox_edit ajOpenDialog" isoman_for_id="site_about_logo_home" isoman_val="{$clsConfiguration->getValue('site_about_logo_home')}" isoman_name="site_about_logo_home" title="{$core->get_Lang('edit')}"><i class="iso-edit"></i></a>
					</div>
				</div>
			</div>
			<div class="row-span">
				<div class="fieldlabel">{$core->get_Lang('Description')}</div>
				<div class="fieldarea">
                	{assign var = SiteIntroAboutHome value = SiteIntroAboutHome_$_LANG_ID}
					<textarea style="width:100%" class="textarea_intro_editor_simple" name="iso-{$SiteIntroAboutHome}" id="SiteIntroAboutHome" cols="255" rows="2">{$clsConfiguration->getValue($SiteIntroAboutHome)}</textarea>
				</div>
			</div>
		</fieldset>*}
		<fieldset>
			<legend>{$core->get_Lang('Banner')}</legend>
			<div class="row-span">
				<div class="fieldlabel">{$core->get_Lang('image')} (WxH:1600x568)</div>
				<div class="fieldarea">
					<div class="photobox span100">
						<img src="{$clsConfiguration->getValue('site_about_page_banner')}" id="isoman_show_site_about_page_banner" class="span100" height="156px"/>
						<input type="hidden" id="isoman_hidden_site_about_page_banner" name="isoman_url_site_about_page_banner" value="{$clsConfiguration->getValue('site_about_page_banner')}" />
						<a href="javascript:void()" class="photobox_edit ajOpenDialog" isoman_for_id="site_about_page_banner" isoman_val="{$clsConfiguration->getValue('site_about_page_banner')}" isoman_name="site_about_page_banner" title="{$core->get_Lang('edit')}"><i class="iso-edit"></i></a>
					</div>
				</div>
			</div>
			<div class="row-span">
				<div class="fieldlabel">{$core->get_Lang('Intro banner')}</div>
				<div class="fieldarea">
                	{assign var = SiteIntroBannerAbout value = SiteIntroBannerAbout_$_LANG_ID}
					<textarea style="width:100%" class="textarea_intro_editor_simple" name="iso-{$SiteIntroBannerAbout}" id="SiteIntroBannerAbout" cols="255" rows="2">{$clsConfiguration->getValue($SiteIntroBannerAbout)}</textarea>
				</div>
			</div>
		</fieldset>
		<fieldset style="display: none">
			<legend>{$core->get_Lang('Logo')}</legend>
			<div class="row-span">
				<div class="fieldlabel">{$core->get_Lang('Image')}</div>
				<div class="fieldarea">
					<div class="photobox span30">
						<img src="{$clsConfiguration->getValue('site_about_page_logo')}" id="isoman_show_site_about_page_logo" class="span100" height="156px"/>
						<input type="hidden" id="isoman_hidden_site_about_page_logo" name="isoman_url_site_about_page_logo" value="{$clsConfiguration->getValue('site_about_page_logo')}" />
						<a href="javascript:void()" class="photobox_edit ajOpenDialog" isoman_for_id="site_about_page_logo" isoman_val="{$clsConfiguration->getValue('site_about_page_logo')}" isoman_name="site_about_page_logo" title="{$core->get_Lang('edit')}"><i class="iso-edit"></i></a>
					</div>
				</div>
			</div>
		</fieldset>
		<fieldset>
			<legend>{$core->get_Lang('Our Mission')}</legend>
			<div class="row-span">
				<div class="fieldlabel">{$core->get_Lang('Title')}</div>
				<div class="fieldarea">
                	{assign var = Site_Title_Our_Mission value = Site_Title_Our_Mission_$_LANG_ID}
					<input type="text" name="iso-{$Site_Title_Our_Mission}" value="{$clsConfiguration->getValue($Site_Title_Our_Mission)}" class="text full" />
				</div>
			</div>
			<div class="row-span">
				<div class="fieldlabel">{$core->get_Lang('Short description')}</div>
				<div class="fieldarea">
                	{assign var = Site_Intro_Our_Mission value = Site_Intro_Our_Mission_$_LANG_ID}
					<textarea style="width:100%" class="textarea_intro_editor_simple" name="iso-{$Site_Intro_Our_Mission}" id="Site_Intro_Our_Mission" cols="255" rows="2">{$clsConfiguration->getValue($Site_Intro_Our_Mission)}</textarea>
				</div>
			</div>
		</fieldset>
		<fieldset>
			<legend>{$core->get_Lang('Our Vission')}</legend>
			<div class="row-span">
				<div class="fieldlabel">{$core->get_Lang('Title')}</div>
				<div class="fieldarea">
                	{assign var = Site_Title_Our_Vission value = Site_Title_Our_Vission_$_LANG_ID}
					<input type="text" name="iso-{$Site_Title_Our_Vission}" value="{$clsConfiguration->getValue($Site_Title_Our_Vission)}" class="text full" />
				</div>
			</div>
			<div class="row-span">
				<div class="fieldlabel">{$core->get_Lang('Short description')}</div>
				<div class="fieldarea">
                	{assign var = Site_Intro_Our_Vission value = Site_Intro_Our_Vission_$_LANG_ID}
					<textarea style="width:100%" class="textarea_intro_editor_simple" name="iso-{$Site_Intro_Our_Vission}" id="Site_Intro_Our_Vission" cols="255" rows="2">{$clsConfiguration->getValue($Site_Intro_Our_Vission)}</textarea>
				</div>
			</div>
		</fieldset>
		<fieldset  id="REASON">
			<legend> {$core->get_Lang('Top 3 Reasons to Choose Us')}</legend>
			<fieldset style="border: none; margin: 0; padding:0; background:none !important">
				{section name=i loop=$listReasons}
				<div style="border:1px dashed #F90; padding:10px; background:#FFC; margin-bottom:10px;" id="box_{$listReasons[i].year_journey_id}">
					<div style="background:#DDD; padding:6px;">{$core->get_Lang('Reasons')} {$smarty.section.i.iteration}</div>
					<dl>
						<dt><label for="title">{$core->get_Lang('Title')}</label></dt>
						<dd>
							<input type="text" value="{$listReasons[i].title}" name="title_{$listReasons[i].year_journey_id}" class="full text required">
						</dd>
					</dl>
					<dl>
						<dt><label for="image">{$core->get_Lang('Image')}(WxH:334x220)</label></dt>
						<dd>
							<img id="isoman_show_image_{$listReasons[i].year_journey_id}" src="{$listReasons[i].image}" style="display:block; width:26px; height:26px; float:left;"  />
							<input type="hidden" id="isoman_hidden_image_{$listReasons[i].year_journey_id}" value="{$listReasons[i].image}">
							<input style="width:70% !important;float:left;margin-left:4px;" type="text" id="isoman_url_image_{$listReasons[i].year_journey_id}" class="text full" name="image_{$listReasons[i].year_journey_id}" value="{$listReasons[i].image}">
							<a style="float:left; margin-left:4px; margin-top:-4px;" href="#" class="ajOpenDialog" isoman_for_id="image_{$listReasons[i].year_journey_id}" isoman_val="{$listReasons[i].image}" isoman_name="image_{$listReasons[i].year_journey_id}"><img src="{$URL_IMAGES}/general/folder-32.png" border="0" title="Open" alt="Open"></a>
						</dd>
					</dl>
					<dl>
						<dt><label for="image_icon">{$core->get_Lang('Image Icon')} (Max-width=Max-height:35px)</label></dt>
						<dd>
							<img id="isoman_show_image_icon_{$listReasons[i].year_journey_id}" src="{$listReasons[i].icon}" style="display:block; width:26px; height:26px; float:left;"  />
							<input type="hidden" id="isoman_hidden_image_icon_{$listReasons[i].year_journey_id}" value="{$listReasons[i].icon}">
							<input style="width:70% !important;float:left;margin-left:4px;" type="text" id="isoman_url_image_icon_{$listReasons[i].year_journey_id}" class="text full" name="image_icon_{$listReasons[i].year_journey_id}" value="{$listReasons[i].icon}">
							<a style="float:left; margin-left:4px; margin-top:-4px;" href="#" class="ajOpenDialog" isoman_for_id="image_icon_{$listReasons[i].year_journey_id}" isoman_val="{$listReasons[i].icon}" isoman_name="image_icon_{$listReasons[i].year_journey_id}"><img src="{$URL_IMAGES}/general/folder-32.png" border="0" title="Open" alt="Open"></a>
						</dd>
					</dl>
					<dl>
						<dt><label for="title">{$core->get_Lang('Short description')}</label></dt>
						<dd>
							<textarea class="textarea_intro_editor_simple" id="textarea_intro_editor_simple_r_{$smarty.section.i.index}" cols="255" rows="3" name="intro_{$listReasons[i].year_journey_id}">{$listReasons[i].intro}</textarea>
						</dd>
					</dl>
					<div class="wrap mt5">
						<a class="color_r font11px confirm_delete" href="{$PCMS_URL}/index.php?mod={$mod}&act={$act}&action=delete&post_type=REASON&year_journey_id={$listReasons[i].year_journey_id}"><img align="absmiddle" src="{$URL_IMAGES}/v2/icon_delete.gif" /> Xóa box liên kết này</a>
					</div>
				</div>
				{/section}
				<div class="clearfix"></div>
				{if $listReasons|@count lt 3}
				<a href="{$PCMS_URL}/index.php?mod={$mod}&act={$act}&post_type=REASON&action=new" class="btn btn-danger"><i class="icon-white icon-plus-sign"></i> Thêm mới một liên kết</a>
				{/if}
			</fieldset>
		</fieldset>
		<fieldset id="YEARJOURNEY">
			<legend> {$core->get_Lang('Block Year Journey')}</legend>
			<fieldset style="border: none; margin: 0; padding:0; background:none !important">
				{section name=i loop=$listYearJourney}
				<div style="border:1px dashed #F90; padding:10px; background:#FFC; margin-bottom:10px;"  id="box_{$listYearJourney[i].year_journey_id}">
					<div style="background:#DDD; padding:6px;">{$core->get_Lang('Box')} {$smarty.section.i.iteration}</div>
					<dl>
						<dt><label for="title">{$core->get_Lang('Year')}</label></dt>
						<dd>
							<input type="text" value="{$listYearJourney[i].title}" name="title_{$listYearJourney[i].year_journey_id}" class="full text required">
						</dd>
					</dl>
					<dl>
						<dt><label for="image">{$core->get_Lang('Image Icon')}(Max-width=Max-height:75px)</label></dt>
						<dd>
							<img id="isoman_show_image_{$listYearJourney[i].year_journey_id}" src="{$listYearJourney[i].image}" style="display:block; width:26px; height:26px; float:left;"  />
							<input type="hidden" id="isoman_hidden_image_{$listYearJourney[i].year_journey_id}" value="{$listYearJourney[i].image}">
							<input style="width:70% !important;float:left;margin-left:4px;" type="text" id="isoman_url_image_{$listYearJourney[i].year_journey_id}" class="text full" name="image_{$listYearJourney[i].year_journey_id}" value="{$listYearJourney[i].image}">
							<a style="float:left; margin-left:4px; margin-top:-4px;" href="#" class="ajOpenDialog" isoman_for_id="image_{$listYearJourney[i].year_journey_id}" isoman_val="{$listYearJourney[i].image}" isoman_name="image_{$listYearJourney[i].year_journey_id}"><img src="{$URL_IMAGES}/general/folder-32.png" border="0" title="Open" alt="Open"></a>
						</dd>
					</dl>
					<dl>
						<dt><label for="title">{$core->get_Lang('Short description')}</label></dt>
						<dd>
							<textarea class="textarea_intro_editor_simple" id="textarea_intro_editor_simple_{$smarty.section.i.index}" cols="255" rows="3" name="intro_{$listYearJourney[i].year_journey_id}">{$listYearJourney[i].intro}</textarea>
						</dd>
					</dl>
					<div class="wrap mt5">
						<a class="color_r font11px confirm_delete" href="{$PCMS_URL}/index.php?mod={$mod}&act={$act}&action=delete&post_type=YEARJOURNEY&year_journey_id={$listYearJourney[i].year_journey_id}"><img align="absmiddle" src="{$URL_IMAGES}/v2/icon_delete.gif" /> Xóa box liên kết này</a>
					</div>
				</div>
				{/section}
				<div class="clearfix"></div>
				{if $listYearJourney|@count lt 9}
				<a href="{$PCMS_URL}/index.php?mod={$mod}&act={$act}&post_type=YEARJOURNEY&action=new" class="btn btn-danger"><i class="icon-white icon-plus-sign"></i> Thêm mới một liên kết</a>
				{/if}
			</fieldset>
		</fieldset>
		<fieldset>
			<legend>{$core->get_Lang('WE BRING YOU THE BEST SERVICE!')}</legend>
			<div class="row-span">
				<div class="fieldlabel">{$core->get_Lang('Background Image')} (WxH:1600x495)</div>
				<div class="fieldarea">
					<div class="photobox span100">
						<img src="{$clsConfiguration->getValue('site_about_page_bg_download')}" id="isoman_show_site_about_page_bg_download" class="span100" height="156px"/>
						<input type="hidden" id="isoman_hidden_site_about_page_bg_download" name="isoman_url_site_about_page_bg_download" value="{$clsConfiguration->getValue('site_about_page_bg_download')}" />
						<a href="javascript:void()" class="photobox_edit ajOpenDialog" isoman_for_id="site_about_page_bg_download" isoman_val="{$clsConfiguration->getValue('site_about_page_bg_download')}" isoman_name="site_about_page_bg_download" title="{$core->get_Lang('edit')}"><i class="iso-edit"></i></a>
					</div>
				</div>
			</div>
			<div class="row-span" style="display: none">
				<div class="fieldlabel">{$core->get_Lang('File')}</div>
				{assign var = about_page_file_download value = about_page_file_download_$_LANG_ID}
				<div class="fieldarea">
					<img src="{$URL_IMAGES}/icon_pdf.png" style="display:block; width:26px; height:26px; float:left;"  />
					<input type="hidden" id="isoman_hidden_{$about_page_file_download}" value="{$clsConfiguration->getValue($about_page_file_download)}">
					<input style="width:70% !important;float:left;margin-left:4px;" type="text" id="isoman_url_{$about_page_file_download}" class="text full" name="isoman_url_{$about_page_file_download}" value="{$clsConfiguration->getValue($about_page_file_download)}">
					<a style="float:left; margin-left:4px; margin-top:-4px;" href="#" class="ajOpenDialog" isoman_for_id="{$about_page_file_download}" isoman_val="{$clsConfiguration->getValue($about_page_file_download)}" isoman_name="{$about_page_file_download}"><img src="{$URL_IMAGES}/general/folder-32.png" border="0" title="Open" alt="Open"></a>
				</div>
			</div>
		</fieldset>
		<fieldset class="submit-buttons" style="position: fixed;left: 0;right: 0; bottom: 10px;">
			{$saveBtn}
			<input value="Update" name="submit" type="hidden">
		</fieldset>
	</form>
</div>
<script type="text/javascript">
	var $type = 'WhyUsHomePage';
	var $target_id = '0';
</script>
{literal}
<script type="text/javascript">
	$(function(){
		if($('.textarea_intro_editor_simple').length > 0){
			$('.textarea_intro_editor_simple').each(function(){
				var $_this = $(this);
				var $editorID = $_this.attr('id');
				$('#'+$editorID).isoTextAreaFix();
			});
		}
	});
</script>
{/literal}