<div class="breadcrumb">
	<strong>{$core->get_Lang('youarehere')} : </strong>
	<a href="{$PCMS_URL}" title="{$core->get_Lang('home')}">{$core->get_Lang('home')}</a>
    <a>&raquo;</a>
	<a href="{$PCMS_URL}/index.php?mod={$mod}">{$core->get_Lang('cruise')}</a>
    <a>&raquo;</a>
    <a href="{$PCMS_URL}/index.php?mod={$mod}&act={$act}" title="{$mod}">{$core->get_Lang('settingcruise')}</a>
    <!--// -->
    <a href="javascript:window.history.back();" class="back fr">{$core->get_Lang('back')}</a>
</div>
<div class="clearfix"></div>
<div class="container-fluid">
    <div class="page-title">
        <h2>{$core->get_Lang('settingcruise')}</h2>
        <p>{$core->get_Lang('systemmanagementsettingcruise')}</p>
    </div>
	<div class="wrap mt10 mb20">
		{$core->getBlock('cruise_setting')}
		<div class="clearfix"></div>
		<div id="clienttabs">
			<ul>
				{if $clsISO->getCheckActiveModulePackage($package_id,'cruise','booking_include','customize')}
				<li><a><i class="fa fa-cog"></i> {$core->get_Lang('Booking Includes')}</a></li>
				{/if}
				{*<li><a><i class="fa fa-cog"></i> {$core->get_Lang('cover images')}</a></li>*}
			</ul>
		</div>
		<div id="tab_content"> 
			<form method="post" action="" enctype="multipart/form-data">
				{if $clsISO->getCheckActiveModulePackage($package_id,'cruise','booking_include','customize')}
				<div class="tabbox">
					{assign var=site_cruise_include value=site_cruise_include_$_LANG_ID}
					<textarea id="textarea_include_cruise_editor{$now}" class="textarea_intro_editor" name="iso-{$site_cruise_include}" style="width:100%">{$clsConfiguration->getValue($site_cruise_include)}</textarea>
				</div>
				{/if}
				{*<div class="tabbox" style="display:none">
					<span>Width x Height: 1600 x 400</span>
					<div class="cleafix mb10"></div>
					<div class="photobox span100">
						<img src="{$clsConfiguration->getValue('site_tour_banner')}" id="isoman_show_site_tour_banner" class="span100" height="156px" style="width:100%;" />
						<input type="hidden" id="isoman_hidden_site_tour_banner" name="isoman_url_site_tour_banner" value="{$clsConfiguration->getValue('site_tour_banner')}" />
						<a href="javascript:void()" class="photobox_edit ajOpenDialog" isoman_for_id="site_tour_banner" isoman_val="{$clsConfiguration->getValue('site_tour_banner')}" isoman_name="site_tour_banner" title="{$core->get_Lang('edit')}"><i class="iso-edit"></i></a>
					</div>
				</div>
				<div class="clearfix mt10"></div>*}
				<fieldset class="submit-buttons">
					{$saveBtn}
					<input value="UpdateConfiguration" name="submit" type="hidden">
				</fieldset>
			</form>
		</div>
	</div>
</div>
{literal}
<script type="text/javascript">
	$(document).ready(function(){
		$(".datepicker").datepicker();
	});
</script>
{/literal}
<script type="text/javascript" src="{$URL_THEMES}/cruise/jquery.cruise.js"></script>