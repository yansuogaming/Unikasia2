<div class="breadcrumb">
    <a href="{$PCMS_URL}">{$core->get_Lang('Home')}</a>
    <a>&raquo;</a>
    <a href="{$PCMS_URL}/index.php?mod={$mod}&act=central" title="{$mod}">{$core->get_Lang('System Settings')}</a>
    <!-- Back-->
    <a href="javascript:window.history.back();" class="back fr">Quay lại</a>
</div>
<div class="container-fluid">
    <div class="page-title">
        <h2><i class="fa fa-wrench"></i> {$core->get_Lang('Settings')} &raquo; {$core->get_Lang('companyprofile')}</h2>
		<p>{$core->get_Lang('System setting')}</p>
    </div>
    <div class="clearfix"></div>
    <form method="post" action="" enctype="multipart/form-data" class="validate-form">
		<div class="bootstrap">
			<div class="row">
				<div class="col-sm-7 mb10_767">
                	<div class="hd">
						<span class="bold">{$core->get_Lang('General information')}</span>
					</div>
                    <div class="row-span">
						<div class="fieldlabel">
							{$core->get_Lang('Full Company Name')}
						</div>
						<div class="fieldarea" style="width:50%">
							<input class="inputFix" type="text" name="iso-CompanyName" value="{$clsConfiguration->getValue('CompanyName')}">
						</div>
					</div>
                    <div class="row-span">
						<div class="fieldlabel">
							{$core->get_Lang('Brief Company Name')}
						</div>
						<div class="fieldarea" style="width:50%">
							<input class="inputFix" type="text" name="iso-CompanyNameBrief" value="{$clsConfiguration->getValue('CompanyNameBrief')}">
						</div>
					</div>
                    <div class="row-span">
						<div class="fieldlabel">
							{$core->get_Lang('Official Website')}
						</div>
						<div class="fieldarea" style="width:50%">
							<input class="inputFix url"type="text" name="iso-CompanyWebsite" value="{$clsConfiguration->getValue('CompanyWebsite')}">
						</div>
					</div>
                    <div class="row-span">
						<div class="fieldlabel">
							{$core->get_Lang('Primary Email')}
						</div>
						<div class="fieldarea" style="width:50%">
							<input class="inputFix" type="text" name="iso-CompanyEmail" value="{$clsConfiguration->getValue('CompanyEmail')}">
						</div>
					</div>
                    <div class="row-span">
						<div class="fieldlabel">
							{$core->get_Lang('Company Phone')}
						</div>
						<div class="fieldarea" style="width:50%">
							<input class="inputFix" type="text" name="iso-CompanyPhone" value="{$clsConfiguration->getValue('CompanyPhone')}">
						</div>
					</div>
                    <div class="row-span" style="display:none">
						<div class="fieldlabel">
							{$core->get_Lang('Mobile Phone')}
						</div>
						<div class="fieldarea" style="width:50%">
							<input class="inputFix" type="text" name="iso-CompanyPhoneMobile" value="{$clsConfiguration->getValue('CompanyPhoneMobile')}">
						</div>
					</div>
                    <div class="row-span">
						<div class="fieldlabel">
							{$core->get_Lang('Company Hotline')}
						</div>
						<div class="fieldarea" style="width:50%">
							<input class="inputFix" type="text" name="iso-CompanyHotline" value="{$clsConfiguration->getValue('CompanyHotline')}">
						</div>
					</div>
                    <div class="row-span">
						<div class="fieldlabel">
							{$core->get_Lang('Company Fax')}
						</div>
						<div class="fieldarea" style="width:50%">
							<input class="inputFix" type="text" name="iso-CompanyFax" value="{$clsConfiguration->getValue('CompanyFax')}">
						</div>
					</div>
                    <div class="row-span">
						<div class="fieldlabel">
							{$core->get_Lang('Skype')}
						</div>
						<div class="fieldarea" style="width:50%">
							<input class="inputFix" type="text" name="iso-CompanySkype" value="{$clsConfiguration->getValue('CompanySkype')}">
						</div>
					</div>
                    <div class="row-span">
						<div class="fieldlabel">
							{$core->get_Lang('Opening hours')}
						</div>
						<div class="fieldarea" style="width:50%">
							<input class="inputFix" type="text" name="iso-CompanyOpeningHours" value="{$clsConfiguration->getValue('CompanyOpeningHours')}">
						</div>
					</div>
                    {if 1 eq 2}
                    <div class="row-span">
						<div class="fieldlabel">
							{$core->get_Lang('Youtube Video ID')}
						</div>
                         <div class="fieldarea inputGroup" style="width:50%">
                        	<span class="input-group-addon">https://www.youtube.com/watch?v=</span>
							<input type="text" name="iso-youtube_link" value="{$clsConfiguration->getValue('CompanyVideoYoutube')}">
						</div>
					</div>
                    {/if}
                    <div class="row-span">
						<div class="fieldlabel width100_767">
							{$core->get_Lang('Currency')}
						</div>
                         <div class="fieldarea inputGroup" style="width:40px !important">
						 	<select name="iso-Currency" style="width:200px;">
								{assign var=currency value=$clsConfiguration->getValue('Currency')}
								{section name=j loop=$allUnitProperty}
									<option value="{$allUnitProperty[j].property_id}" {if $currency eq $allUnitProperty[j].property_id}selected{/if}>
									{$allUnitProperty[j].property_code}	({$allUnitProperty[j].aliases})			
									</option>
								{/section}
							</select>	
						</div>
					</div>
					<div class="row-span">
						<div class="fieldlabel">
							{$core->get_Lang('API Google Maps')}<a href="//developers.google.com/maps/documentation/javascript/get-api-key" title="Instructions">(Instructions)</a>
						</div>
                         <div class="fieldarea inputGroup" style="width:50%">
							<input class="inputFix" type="text" name="iso-API_GOOGLE_MAPS" value="{$clsConfiguration->getValue('API_GOOGLE_MAPS')}" placeholder="AIzaSyDKi-pt4CB_T4QvI4KD2KdwCIqgtv8QaIQ" />
						</div>
					</div>
					<div class="row-span">
						<div class="fieldlabel">
							{$core->get_Lang('IP check')}
						</div>
                         <div class="fieldarea inputGroup" style="width:50%">
							<input class="inputFix" type="text" name="iso-IP_ONLINE" value="{$clsConfiguration->getValue('IP_ONLINE')}" placeholder="116.99.35.172,116.99.35.171" />
						</div>
					</div>
					{if $clsConfiguration->getValue('HaveAirTicketBook')}
					<div class="row-span">
						<div class="fieldlabel">
							{$core->get_Lang('IBE productKey')}
						</div>
                         <div class="fieldarea inputGroup" style="width:50%">
							<input class="inputFix" type="text" name="iso-IBEproductKey" value="{$clsConfiguration->getValue('IBEproductKey')}" placeholder="y62e9p4h0qvnaoi" />
						</div>
					</div>
					{/if}
                	<div class="hd">
						<span class="bold">{$core->get_Lang('logo')}</span>
					</div>
                    <div class="row-span">
						<div class="fieldlabel width100_767">{$core->get_Lang('Header Logo')}</div>
						<div class="fieldarea" style="width:50%">
                        	<span style="display:block">Width x Height: 200 x 50</span>
							<img class="isoman_img_pop" id="isoman_show_image_Fx" src="{$clsConfiguration->getValue('HeaderLogo')}" />
							<input type="hidden" id="isoman_hidden_image_Fx" value="{$clsConfiguration->getValue('HeaderLogo')}">
							<input type="hidden" style="width:70% !important;float:left;margin-left:4px;height:35px" id="isoman_url_image_Fx" name="iso-HeaderLogo" value="{$clsConfiguration->getValue('HeaderLogo')}"><a style="float:left; margin-left:4px; margin-top:4px;" href="#" class="ajOpenDialog" isoman_for_id="image_Fx" isoman_val="{$clsConfiguration->getValue('HeaderLogo')}" isoman_name="image"><img src="{$URL_IMAGES}/general/folder-32.png" border="0" title="Open" alt="Open"></a>
						</div>
					</div>
                    <div class="row-span">
						<div class="fieldlabel width100_767">{$core->get_Lang('Footer Logo')}</div>
						<div class="fieldarea" style="width:50%">
                        	<span style="display:block">Width x Height:200 x 50</span>
							<img class="isoman_img_pop" id="isoman_show_image_Fx2" src="{$clsConfiguration->getValue('FooterLogo')}" />
							<input type="hidden" id="isoman_hidden_image_Fx2" value="{$clsConfiguration->getValue('FooterLogo')}">
							<input type="hidden" style="width:70% !important;float:left;margin-left:4px; height:35px" id="isoman_url_image_Fx2" name="iso-FooterLogo" value="{$clsConfiguration->getValue('FooterLogo')}"><a style="float:left; margin-left:4px; margin-top:4px;" href="#" class="ajOpenDialog" isoman_for_id="image_Fx2" isoman_val="{$clsConfiguration->getValue('FooterLogo')}" isoman_name="image"><img src="{$URL_IMAGES}/general/folder-32.png" border="0" title="Open" alt="Open"></a>
						</div>
					</div>
                    <div class="row-span">
						<div class="fieldlabel width100_767">{$core->get_Lang('Popup Logo')}</div>
						<div class="fieldarea" style="width:50%">
                        	<span style="display:block">Width x Height:200 x 50</span>
							<img class="isoman_img_pop" id="isoman_show_image_fx3" src="{$clsConfiguration->getValue('PopupLogo')}" />
							<input type="hidden" id="isoman_hidden_image_fx3" value="{$clsConfiguration->getValue('PopupLogo')}">
							<input type="hidden" style="width:70% !important;float:left;margin-left:4px; height:35px" id="isoman_url_image_fx3" name="iso-PopupLogo" value="{$clsConfiguration->getValue('PopupLogo')}"><a style="float:left; margin-left:4px; margin-top:4px;" href="#" class="ajOpenDialog" isoman_for_id="image_fx3" isoman_val="{$clsConfiguration->getValue('PopupLogo')}" isoman_name="image"><img src="{$URL_IMAGES}/general/folder-32.png" border="0" title="Open" alt="Open"></a>
						</div>
					</div>
					<div class="hd">
						<span class="bold">{$core->get_Lang('Business Address')}</span>
					</div>
					<div class="row-span">
						<div class="fieldlabel">
							{$core->get_Lang('Address 1 [map]')}
						</div>
						{assign var=CompanyAddress1 value=CompanyAddress1_$_LANG_ID}
						<div class="fieldarea" style="width:50%">
							<input class="inputFix" type="text" id="search_location" name="iso-{$CompanyAddress1}" value="{$clsConfiguration->getValue($CompanyAddress1)}">
						</div>
					</div>
					<div class="row-span">
						<div class="fieldlabel">
							{$core->get_Lang('Address 2')}
						</div>
						{assign var=CompanyAddress value=CompanyAddress_$_LANG_ID}
						<div class="fieldarea" style="width:50%">
							<input class="inputFix" type="text" name="iso-{$CompanyAddress}" value="{$clsConfiguration->getValue($CompanyAddress)}"> 
						</div>
					</div>
                    <div class="row-span" style="display:none">
						<div class="fieldlabel">
							{$core->get_Lang('Postcode/ZIP')}
						</div>
						{assign var=CompanyPostCode value=CompanyPostCode_$_LANG_ID}
						<div class="fieldarea" style="width:50%">
							<input class="inputFix" type="text" name="iso-{$CompanyPostCode}" value="{$clsConfiguration->getValue($CompanyPostCode)}">
						</div>
					</div>
					<div class="row-span">
						<div class="fieldlabel">
							{$core->get_Lang('Copyright')}
						</div>
						{assign var=Copyright value=Copyright_$_LANG_ID}
						<div class="fieldarea" style="width:50%">
							<input class="inputFix" type="text" name="iso-{$Copyright}" value="{$clsConfiguration->getValue($Copyright)}">
						</div>
					</div>
                    <div class="hd">
						<span class="bold">{$core->get_Lang('Social media')}</span>
					</div>
					{if $clsConfiguration->getValue('Facebook_Link')}
                    <div class="row-span">
						<div class="fieldlabel width25_767">
							<a class="social-icon facebook ir" href="{$clsConfiguration->getValue('SiteTwitterLink')}" target="_blank"></a><span class="hiden767">{$core->get_Lang('Facebook Link')}</span>
						</div>
						<div class="fieldarea inputGroup" style="width:50%">
                        	<span class="input-group-addon">http://www.facebook.com/</span>
							<input type="text" name="iso-SiteFacebookLink" value="{$clsConfiguration->getValue('SiteFacebookLink')}">
						</div>
					</div>
					{/if}
					{if $clsConfiguration->getValue('Twitter_Link')}
                     <div class="row-span">
						<div class="fieldlabel width25_767">
							<a class="social-icon twitter ir" href="{$clsConfiguration->getValue('SiteTwitterLink')}" target="_blank"></a><span class="hiden767">{$core->get_Lang('Twitter Link')}</span>
						</div>
                        <div class="fieldarea inputGroup" style="width:50%">
                        	<span class="input-group-addon">http://www.twitter.com/</span>
							<input type="text" name="iso-SiteTwitterLink" value="{$clsConfiguration->getValue('SiteTwitterLink')}">
						</div>
					</div>
					{/if}
					{if $clsConfiguration->getValue('Youtube_Link')}
                    <div class="row-span">
						<div class="fieldlabel width25_767">
							<a class="social-icon youtube ir" href="{$clsConfiguration->getValue('SiteTwitterLink')}" target="_blank"></a><span class="hiden767">{$core->get_Lang('Youtube Link')}</span>
						</div>
                        <div class="fieldarea inputGroup" style="width:50%">
                        	<span class="input-group-addon">http://www.youtube.com/</span>
							<input type="text" name="iso-SiteYoutubeLink" value="{$clsConfiguration->getValue('SiteYoutubeLink')}">
						</div>
					</div>
					{/if}
					{if $clsConfiguration->getValue('Google_Plus_Link')}
                    <div class="row-span">
						<div class="fieldlabel width25_767">
							<a class="social-icon google-plus ir" href="{$clsConfiguration->getValue('SiteTwitterLink')}" target="_blank"></a><span class="hiden767">{$core->get_Lang('Google+')}</span>
						</div>
                         <div class="fieldarea inputGroup" style="width:50%">
                        	<span class="input-group-addon">http://plus.google.com/</span>
							<input type="text" name="iso-SiteGoogleLink" value="{$clsConfiguration->getValue('SiteGoogleLink')}">
						</div>
					</div>
					{/if}
					{if $clsConfiguration->getValue('Instagram_Link')}
                    <div class="row-span">
						<div class="fieldlabel width25_767">
							<a class="social-icon instagram ir" href="{$clsConfiguration->getValue('SiteTwitterLink')}" target="_blank"></a><span class="hiden767">{$core->get_Lang('Instagram')}</span>
						</div>
                        <div class="fieldarea inputGroup" style="width:50%">
                        	<span class="input-group-addon">https://www.instagram.com/</span>
							<input type="text" name="iso-SiteInstagramLink" value="{$clsConfiguration->getValue('SiteInstagramLink')}">
						</div>
					</div>
					{/if}
					{if $clsConfiguration->getValue('Printest_Link')}
                    <div class="row-span">
						<div class="fieldlabel width25_767">
							<a class="social-icon pinterest ir" href="{$clsConfiguration->getValue('SiteTwitterLink')}" target="_blank"></a><span class="hiden767">{$core->get_Lang('Printest Link')}</span>
						</div>
                         <div class="fieldarea inputGroup" style="width:50%">
                        	<span class="input-group-addon">http://pinterest.com/</span>
							<input type="text" name="iso-SitePrintestLink" value="{$clsConfiguration->getValue('SitePrintestLink')}">
						</div>
					</div>
					{/if}
					{if $clsConfiguration->getValue('LinkedIn_Link')}
					<div class="row-span">
						<div class="fieldlabel width25_767">
							<a class="social-icon ta-25 ir" href="{$clsConfiguration->getValue('LinkedIn')}" target="_blank"></a><span class="hiden767">{$core->get_Lang('LinkedIn')}</span>
						</div>
                        <div class="fieldarea inputGroup" style="width:50%">
                        	<span class="input-group-addon">https://www.linkedin.com/</span>
							<input type="text" name="iso-SiteLinkedInLink" value="{$clsConfiguration->getValue('SiteLinkedInLink')}">
						</div>
					</div>
					{/if}
					{if $clsConfiguration->getValue('TripAdvisor_Link')}
                    <div class="row-span">
						<div class="fieldlabel width25_767">
							<a class="social-icon ta-24 ir" href="{$clsConfiguration->getValue('SiteTwitterLink')}" target="_blank"></a><span class="hiden767">{$core->get_Lang('TripAdvisor')}</span>
						</div>
                        <div class="fieldarea inputGroup" style="width:50%">
                        	<span class="input-group-addon">http://www.tripadvisor.com/</span>
							<input type="text" name="iso-SiteTripAdvisorLink" value="{$clsConfiguration->getValue('SiteTripAdvisorLink')}">
						</div>
					</div>
					{/if}
					<div class="row-span">
						<a class="fr" href="{$PCMS_URL}/index.php?mod=setting&act=social" target="_blank"><i class="fa fa-cog"></i> {$core->get_Lang('Social Media Setting')}</a>
					</div>
				</div>
				<div class="col-sm-5">
					<div class="hd">
						<span class="bold">{$core->get_Lang('location')}</span>
					</div>                
                    
					<div style="width:100%; height:200px;" id="map_canvas"></div>
                    <input type="hidden" name="iso-CompanyMapLo" id="map_lo" value="{$clsConfiguration->getValue('CompanyMapLo')}" />
                    <input type="hidden" name="iso-CompanyMapLa" id="map_la" value="{$clsConfiguration->getValue('CompanyMapLa')}" />
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
		<fieldset class="submit-buttons">
			{$saveBtn}
			<input value="CompanyProfile" name="submit" type="hidden">
		</fieldset>
	</form> 
</div>
<script type="text/javascript">
	var $map_la = '{$clsConfiguration->getValue("CompanyMapLa")}';
	var $map_lo = '{$clsConfiguration->getValue("CompanyMapLo")}';
</script>
{literal}
<style>
	.searchmap .text{ height:28px; line-height:28px;}
	.searchmap .btn{ width:14%;}
	.row-span .fieldlabel{ min-width:28% !important;}
	.row-span .fieldarea{ min-width:70% !important;}
	input, textarea, select{ min-height:26px;}
	.isoman_img_pop{ width:100px; height:35px; border:1px solid #ccc; padding:1px;}
</style>
<script type="text/javascript">
	var geocoder = new google.maps.Geocoder();
	var map;
	var marker;
	function $getID(id) {
		return document.getElementById(id);
	}
	function geocode(position) {
		geocoder.geocode({
			latLng: position
		}, function(responses) {
			$getID('search_location').value = responses[0].formatted_address;
			$getID('map_la').value = marker.getPosition().lat();
			$getID('map_lo').value = marker.getPosition().lng();
			map.panTo(marker.getPosition());
		});
	}
	function initialize() {
		$map_la = ($map_la != '') ? $map_la : '20.988668210459167';
		$map_lo = ($map_lo != '') ? $map_lo : '105.86727258378903';
		var mapOptions = {
			center: new google.maps.LatLng($map_la, $map_lo),
			zoom: 17,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		};
		map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);
		var input = document.getElementById('search_location');
		var autocomplete = new google.maps.places.Autocomplete(input);
		autocomplete.bindTo('bounds', map);
		var location = new google.maps.LatLng($map_la, $map_lo);
		marker = new google.maps.Marker({position: location});
		marker.setMap(map);
		marker.setDraggable(true);
		google.maps.event.addListener(marker, "dragend", function(event) {
			var point = marker.getPosition();
			map.panTo(point);
			geocode(point);
		});
		/**/
		google.maps.event.addListener(autocomplete, 'place_changed', function() {
			var place = autocomplete.getPlace();
			if (place.geometry.viewport) {
				map.fitBounds(place.geometry.viewport);
			} else {
				map.setCenter(place.geometry.location);
				map.setZoom(17);
			}
			geocode(place.geometry.location);
			marker.setPosition(place.geometry.location);
		});
	}
	function showAddress(address) {
		geocoder = new google.maps.Geocoder();
		geocoder.geocode({'address': address}, function(results, status) {
			if (status == google.maps.GeocoderStatus.OK) {
				marker.setPosition(results[0].geometry.location);
				geocode(results[0].geometry.location);
			} else {
				alert("Sorry but Google Maps could not find this location.");
			}
		});
	}
	$(document).ready(function() {
		google.maps.event.addDomListener(window, 'load', initialize);
		$('#searchMap').click(function() {
			var address = $('#search_location').val();
			showAddress(address);
			return false;
		});
	});
</script>
{/literal}
