<?php
/* Smarty version 3.1.38, created on 2024-04-24 07:16:37
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/city/main_step.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66284f65cf32a2_53016712',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a17aa319518926c3f53619849e4b9ca4fdb53cf3' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/city/main_step.tpl',
      1 => 1709883369,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66284f65cf32a2_53016712 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="post" accept-charset="UTF-8" enctype="multipart/form-data">
	<div class="box_main_step_content">
		<div class="row d-flex flex-wrap full-height">
			<div class="col-xs-12 col-sm-12 col-md-9">
				<div class="fill_data_box">
					<div class="form_title_and_table_code">
						<?php if ($_smarty_tpl->tpl_vars['currentstep']->value == 'image') {?>
						<?php $_smarty_tpl->_assignInScope('image_detail', 'image_city');?>
						<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('box_detail_image');?>

						<?php } elseif ($_smarty_tpl->tpl_vars['currentstep']->value == 'basic') {?>
						<h3 class="title_box"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Basic');?>
</h3>
						
						<div class="inpt_tour">
							<label for="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('City Name');?>
 <span class="required_red">*</span>
							<?php $_smarty_tpl->_assignInScope('city_name_city', 'city_name_city');?>
							<?php $_smarty_tpl->_assignInScope('help_first', $_smarty_tpl->tpl_vars['city_name_city']->value);?>
							<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
							<button data-key="<?php echo $_smarty_tpl->tpl_vars['city_name_city']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('City Name');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
							<?php }?>
							</label>
							<input class="input_text_form input-title required" data-table_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" name="title" value="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getTitle($_smarty_tpl->tpl_vars['pvalTable']->value);?>
" maxlength="255" type="text" onClick="loadHelp(this)" />
							<div class="text_help" hidden=""><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['city_name_city']->value));?>
</div>
						</div>
						<?php if ($_smarty_tpl->tpl_vars['lstContinent']->value) {?>
                        <div class="inpt_tour">
                            <label for="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Continent');?>
 <span class="required_red">*</span>
                            <?php $_smarty_tpl->_assignInScope('continent_city', 'continent_city');?>
                            <?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
                            <button data-key="<?php echo $_smarty_tpl->tpl_vars['continent_city']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Continent');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
                            <?php }?>
                            </label>
                            <div class="fieldarea">
                                <select class="glSlBox border_aaa required slb_Chauluc_Id" name="iso-continent_id" style="width:250px" onClick="loadHelp(this)">
                                    <option value="0">-- <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Select Continent');?>
 --</option>
                                    <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstContinent']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                                    <option <?php if ($_smarty_tpl->tpl_vars['lstContinent']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['continent_id'] == $_smarty_tpl->tpl_vars['lstContinent']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['continent_id']) {?>selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['lstContinent']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['continent_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['clsContinent']->value->getTitle($_smarty_tpl->tpl_vars['lstContinent']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['continent_id']);?>
</option>
                                    <?php
}
}
?>
                                </select>
                                <div class="text_help" hidden=""><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['oneItem']->value['continent_city']));?>
</div>
                            </div>
                        </div>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'country','default','default') && $_smarty_tpl->tpl_vars['core']->value->checkAccess('country')) {?>
							<div class="inpt_tour">
								<label for="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Country');?>
 <span class="required_red">*</span>
								<?php $_smarty_tpl->_assignInScope('country_city', 'country_city');?>
								<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
								<button data-key="<?php echo $_smarty_tpl->tpl_vars['country_city']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Country');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
								<?php }?>
								</label>
								<div class="fieldarea">
									<select class="slb_Country_Id glSlBox border_aaa required" id="country_id" name="iso-country_id" style="width:250px" onClick="loadHelp(this)">
										<?php echo $_smarty_tpl->tpl_vars['clsCountry']->value->makeSelectboxOption($_smarty_tpl->tpl_vars['oneItem']->value['country_id'],$_smarty_tpl->tpl_vars['oneItem']->value['continent_id']);?>

									</select>
									<div class="text_help" hidden=""><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['country_city']->value));?>
</div>
								</div>
							</div>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'region','default','default') && $_smarty_tpl->tpl_vars['core']->value->checkAccess('region')) {?>
							<div class="inpt_tour" id="boxVungMien" <?php if (!$_smarty_tpl->tpl_vars['clsRegion']->value->checkExits($_smarty_tpl->tpl_vars['oneItem']->value['country_id'])) {?>style="display:none"<?php }?>>
								<label for="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('regions');?>
 <span class="required_red">*</span>
								<?php $_smarty_tpl->_assignInScope('regions_city', 'regions_city');?>
								<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
								<button data-key="<?php echo $_smarty_tpl->tpl_vars['regions_city']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Country');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
								<?php }?>
								</label>
								<div class="fieldarea">
									<select class="slb_Region_Id glSlBox border_aaa required" id="slb_RegionID" name="iso-region_id" style="width:250px" onClick="loadHelp(this)">
										<?php echo $_smarty_tpl->tpl_vars['clsRegion']->value->makeSelectboxOption($_smarty_tpl->tpl_vars['oneItem']->value['country_id'],$_smarty_tpl->tpl_vars['oneItem']->value['region_id']);?>

									</select>
									<div class="text_help" hidden=""><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['regions_city']->value));?>
</div>
								</div>
							</div>
							
							<?php echo '<script'; ?>
 type="text/javascript">
								var $country_id = '<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['country_id'];?>
';
								var $continent_id = '<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['continent_id'];?>
';
								var $region_id = '<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['region_id'];?>
';
							<?php echo '</script'; ?>
>
							
							<?php echo '<script'; ?>
 type="text/javascript">
								$(function(){
									loadSelectRegion($country_id,$region_id);
									$("#country_id").change(function(){
										$_this = $(this);
										loadSelectRegion($_this.val(),$region_id);
									});
								});
								function loadSelectRegion($country_id,$region_id){
									vietiso_loading(1);
									$.ajax({
										type: "POST",
										url:path_ajax_script+'/index.php?mod=city&act=ajLoadRegion&lang='+LANG_ID,
										data: {'country_id' : $country_id,'region_id' : $region_id},
										dataType: "html",
										success: function(html){
											vietiso_loading(0);
											if(html.indexOf('_NOT_REGION') >= 0) {
												$('#boxVungMien').hide();
											} else {
												$('#boxVungMien').show();
												$('#slb_RegionID').html(html);
											}
										}
									});
								}
							<?php echo '</script'; ?>
>
							
						<?php } else { ?>
							<input type="hidden" name="iso-region_id" value="0" />
						<?php }?>
						<?php } elseif ($_smarty_tpl->tpl_vars['currentstep']->value == 'shortText') {?>
						<div class="inpt_tour">
							<h3 class="title_box"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Short text');?>
 
								<?php $_smarty_tpl->_assignInScope('shortText_city', 'shortText_city');?>
								<?php $_smarty_tpl->_assignInScope('help_first', $_smarty_tpl->tpl_vars['shortText_city']->value);?>
								<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
								<button data-key="<?php echo $_smarty_tpl->tpl_vars['shortText_city']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Short text');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
								<?php }?>
							</h3>
							<textarea style="width:100%" table_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" name="iso-intro" class="textarea_intro_editor " data-column="iso-intro" id="textarea_intro_editor_overview_<?php echo $_smarty_tpl->tpl_vars['now']->value;?>
" cols="255" rows="2"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['intro'];?>
</textarea>
							
							<?php echo '<script'; ?>
>
							$(".showdate").datepicker({dateFormat: "dd/mm/yy"});
							<?php echo '</script'; ?>
>
							
						</div>
						<?php } elseif ($_smarty_tpl->tpl_vars['currentstep']->value == 'longText') {?>
						<div class="inpt_tour">
							<h3 class="title_box"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Long text');?>
 
								<?php $_smarty_tpl->_assignInScope('longText_city', 'longText_city');?>
								<?php $_smarty_tpl->_assignInScope('help_first', $_smarty_tpl->tpl_vars['longText_city']->value);?>
								<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
								<button data-key="<?php echo $_smarty_tpl->tpl_vars['longText_city']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Long text');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
								<?php }?>
							</h3>
							<textarea style="width:100%" table_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" name="iso-content" class="textarea_intro_editor" data-column="iso-content" id="textarea_intro_editor_overview_<?php echo $_smarty_tpl->tpl_vars['now']->value;?>
" cols="255" rows="2"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['content'];?>
</textarea>
							
							<?php echo '<script'; ?>
>
							$(".showdate").datepicker({dateFormat: "dd/mm/yy"});
							<?php echo '</script'; ?>
>
							
						</div>							
						<?php } elseif ($_smarty_tpl->tpl_vars['currentstep']->value == 'gmap') {?>
							<div class="inpt_tour">
								<h3 class="title_box"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Gmap');?>

								<?php $_smarty_tpl->_assignInScope('gmap_city', 'gmap_city');?>
								<?php $_smarty_tpl->_assignInScope('help_first', $_smarty_tpl->tpl_vars['gmap_city']->value);?>
								<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
								<button data-key="<?php echo $_smarty_tpl->tpl_vars['gmap_city']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Gmap');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
								<?php }?>
								</h3>
								<div class="fieldlabel-full mb5">
									<i class="iso-pos"></i> <strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Location on map');?>
</strong>
								</div>
								<div class="form_option_tour">
									<div class="inpt_tour">
										<div id="HotelMap_Area">
											<div class="row">
												<div class="col-sm-9">
													<div class="map_embed">
														<div class="map_search_box">
															<input class="text full fl" id="map-search-input" type="text" placeholder="Search by name..." />
														</div>
														<div id="map_canvas" style="width:100%; height:300px; overflow:hidden"></div>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="format-setting-wrap mb10">
														<div class="format-setting-label">
															<label><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('latitude');?>
</label>
														</div>
														<div class="format-setting-content">
															<input class="text full" name="iso-map_la" id="map_la" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['map_la'];?>
" type="text" style="width:95% !important" />
														</div>
													</div>
													<div class="format-setting-wrap mb10">
														<div class="format-setting-label">
															<label><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('longitude');?>
</label>
														</div>
														<div class="format-setting-content">
															<input class="text full" name="iso-map_lo" id="map_lo" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['map_lo'];?>
" type="text" style="width:95% !important" />
														</div>
													</div>
													<div class="format-setting-wrap mb10">
														<div class="format-setting-label">
															<label><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('MapZoom');?>
</label>
														</div>
														<div class="format-setting-content">
															<input class="text full" name="iso-map_zoom" value="<?php if ($_smarty_tpl->tpl_vars['oneItem']->value['map_zoom']) {
echo $_smarty_tpl->tpl_vars['oneItem']->value['map_zoom'];?>
 <?php } else { ?>0<?php }?>" type="text" style="width:95% !important" />
														</div>
													</div>
													<div class="format-setting-wrap mb10">
														<div class="format-setting-label">
															<label><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('MapStyle');?>
</label>
														</div>
														<div class="format-setting-content">
															<input class="text full" name="iso-map_tyle" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['map_tyle'];?>
" type="text" style="width:95% !important" />
														</div>
													</div>
												</div>
											</div>
										</div>
										
										<?php echo '<script'; ?>
 type="text/javascript">
											$(document).on('click','.tabchildcol a[href="#map"]',function(){
												initialize();
											});
											$(function(){
												initialize();
											});
											var geocoder=new google.maps.Geocoder();
											var map; 
											var marker;
											function $getID(id){
												return document.getElementById(id);
											}
											function geocode(position) {
												geocoder.geocode({
													latLng: position
												},function(responses) {
													$getID('map-search-input').value = responses[0].formatted_address;
													$getID('map_la').value = marker.getPosition().lat(); 
													$getID('map_lo').value = marker.getPosition().lng();
													map.panTo(marker.getPosition());
												});
											}
											function initialize(){
												map_lo=map_lo!='' ? map_lo : '105.86727258378903'; 
												map_la=map_la!='' ? map_la : '20.988668210459167';
												if(map_zoom=='') map_zoom = 11;
												if(map_type=='') map_type = 'roadmap';
												var mapOptions = {
													center: new google.maps.LatLng(map_la,map_lo),
													zoom: parseInt(map_zoom),
													mapTypeId: map_type
												}; 
												map = new google.maps.Map(document.getElementById('map_canvas'),mapOptions); 
												var input = document.getElementById('map-search-input'); 
												var autocomplete = new google.maps.places.Autocomplete(input); 
												autocomplete.bindTo('bounds', map); 
												var location = new google.maps.LatLng (map_la,map_lo); 
												marker = new google.maps.Marker({ position:location}); 
												marker.setMap(map); 
												marker.setDraggable(true); 
												google.maps.event.addListener(marker, "dragend", function(event){ 
													var point = marker.getPosition(); 
													map.panTo(point); 
													geocode(point);
												}); 
												/**/ 
												google.maps.event.addListener(autocomplete, 'place_changed', function(){
													var place = autocomplete.getPlace();
													if(place.geometry.viewport){ 
														map.fitBounds(place.geometry.viewport); 
													}else{
														map.setCenter(place.geometry.location); map.setZoom(11); 
													}
													geocode(place.geometry.location);
													marker.setPosition(place.geometry.location); 
												});
												map.addListener('zoom_changed', function(){
													map_zoom = map.getZoom();
													$('input[name=iso-map_zoom]').val(map_zoom);
												});
												map.addListener('maptypeid_changed', function(e){
													map_tyle = map.getMapTypeId();
													$('input[name=iso-map_tyle]').val(map_tyle);
												});
											}
											function findLocation(address){
												geocoder = new google.maps.Geocoder(); 
												geocoder.geocode({'address': address},function(results,status){
													if (status == google.maps.GeocoderStatus.OK) {
														marker.setPosition(results[0].geometry.location);
														geocode(results[0].geometry.location);
													} else {
														alert("Sorry but Google Maps could not find this location.");
													}
												});
											};
											$(function(){
												$(document).on('keydown', '#map-search-input', function(ev){
													var _this = $(this);
													var _code = ev.keyCode;
													if (_code === 13 && $.trim(_this.val()) != '') {
														findLocation(_this.val()); 
														return false;
													}
												});
												$('input[name=iso-address]').click(function(){
													$('.tabchildcol a[href="#map"]').trigger('click');
												}).blur(function(){
													$('.tabchildcol.current').trigger('click');
													}).keydown(function(ev){
														var _this = $(this);
														var _code = ev.keyCode;
														if (_code === 13 && $.trim(_this.val()) != '') {
															findLocation(_this.val());
															return false;
														}
													});
													$(document).on('click','#map-search-input',function(){
														initialize();
													});
											});
										<?php echo '</script'; ?>
>
											
									</div>
								</div>						
							</div>						
						<?php } elseif ($_smarty_tpl->tpl_vars['currentstep']->value == 'banner') {?>
							<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('box_detail_city_banner');?>
						
						<?php } elseif ($_smarty_tpl->tpl_vars['currentstep']->value == 'information') {?>
							<h3 class="title_box mb0"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('information');?>
</h3>
							<p class="intro_box mb40"></p>
							<div class="form_option_tour">
								<div class="inpt_tour">
									<label for="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('introhotel');?>
 <?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getTitle($_smarty_tpl->tpl_vars['pvalTable']->value);?>
<span class="required_red">*</span>
										<?php $_smarty_tpl->_assignInScope('hotelintro_city', 'hotelintro_city');?>
										<?php $_smarty_tpl->_assignInScope('help_first', $_smarty_tpl->tpl_vars['hotelintro_city']->value);?>
										<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
										<button data-key="<?php echo $_smarty_tpl->tpl_vars['hotelintro_city']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('introhotel');?>
 <?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getTitle($_smarty_tpl->tpl_vars['pvalTable']->value);?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
										<?php }?>
									</label>
									<textarea style="width:100%" table_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" name="iso-intro_hotel" class="textarea_intro_editor" data-column="iso-intro_hotel" id="textarea_intro_editor_overview_<?php echo $_smarty_tpl->tpl_vars['now']->value;?>
" cols="255" rows="2"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['intro_hotel'];?>
</textarea>
								</div>
							</div>
							<div class="form-group inpt_tour">
								<label class="col-form-label" for="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Hotel Banner');?>
 <?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getTitle($_smarty_tpl->tpl_vars['pvalTable']->value);?>
<span class="required_red">*</span>
									<?php $_smarty_tpl->_assignInScope('image_hotel_city', 'image_hotel_city');?>
									<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
									<button data-key="<?php echo $_smarty_tpl->tpl_vars['image_hotel_city']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Hotel Banner');?>
 <?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getTitle($_smarty_tpl->tpl_vars['pvalTable']->value);?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
									<?php }?>
								</label>
								<div class="row">
									<div class="col-xs-12 col-md-6">
										<div class="drop_gallery" onClick="loadHelp(this)">
											<div class="filedrop full" onClick="file_explorer(this,event);" ondrop="file_drop(this,event)" toid="selectFile" toel="isoman_show_banner" data-options='{"openFrom":"image_hotel","clsTable":"City", "table_id":"<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
","toId":"isoman_show_image_hotel" }' ondragover="return false">
												<h3><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Drop files to upload');?>
</h3>
												<p>Các loại tệp được hỗ trợ là: .png,.jpg,.jpeg</p>
												<button type="button" class="btn btn-upload"><?php if ($_smarty_tpl->tpl_vars['oneItem']->value['image_hotel']) {?>Thay ảnh<?php } else { ?>Tải ảnh lên<?php }?></button>
											</div>
											<input class="hidden" id="selectFile" type="file" data-options='{"openFrom":"image_hotel","clsTable":"City", "table_id":"<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
","toId":"isoman_show_image_hotel"}' name="image_hotel">

											<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image_hotel'];?>
" name="image_hotel" id="image_hotel" />
											<a table_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" isoman_multiple="0" isoman_callback='isoman_callback({"openFrom":"image_hotel", "clsTable":"City", "pvalTable":"<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
","toField":"image_hotel","toId":"isoman_show_image_hotel"})' class="btn-upload-2 ajOpenDialog" isoman_for_id="image_hotel" isoman_name="image_hotel"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->makeIcon('folder-o',$_smarty_tpl->tpl_vars['core']->value->get_Lang('From library'));?>
</a>
											<div class="text_help" hidden=""><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['image_hotel_City']->value));?>
</div>
										</div>
									</div>
									<div class="col-xs-12 col-md-6">
										<img class="img-responsive radius-3" id="isoman_show_image_hotel" src="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getImageBannerHotel($_smarty_tpl->tpl_vars['pvalTable']->value,400,100);?>
" onerror="this.src='<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/none_image.png'" alt="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('image_hotel');?>
" style="width:100%; height:auto"  />
									</div>
								</div>
							</div>	
						<?php } elseif ($_smarty_tpl->tpl_vars['currentstep']->value == 'seo') {?>
						<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('box_detail_city_seotool');?>
	
						<?php }?>
						<div class="btn_save_titile_table_code mt30">
							<a data-table_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" data-panel="<?php echo $_smarty_tpl->tpl_vars['arrStep']->value[$_smarty_tpl->tpl_vars['step']->value]['panel'];?>
" data-currentstep="<?php echo $_smarty_tpl->tpl_vars['arrStep']->value[$_smarty_tpl->tpl_vars['step']->value]['key'];?>
" data-prevstep="<?php echo $_smarty_tpl->tpl_vars['prevstep']->value;?>
" class="back_step js_save_back"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Back');?>
</a>

							<a data-table_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" data-panel="<?php echo $_smarty_tpl->tpl_vars['arrStep']->value[$_smarty_tpl->tpl_vars['step']->value]['panel'];?>
" data-currentstep="<?php echo $_smarty_tpl->tpl_vars['currentstep']->value;?>
" data-next_step="<?php echo $_smarty_tpl->tpl_vars['nextstep']->value;?>
" class="js_save_continue"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Save &amp; Continue');?>
</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-3 col_instruction">
				<div class="instruction_fill_data_box">
					<p class="title_box"><i class="fa fa-question-circle text-red " aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Instructions');?>
</p>
					<div class="content_box"><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['help_first']->value));?>
</div>
				</div>
			</div>
		</div>
	</div>
</form>
<?php echo '<script'; ?>
 type="text/javascript">
	var list_check_target = <?php echo $_smarty_tpl->tpl_vars['list_check_target']->value;?>
;
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
if($('.textarea_intro_editor').length > 0){
	$('.textarea_intro_editor').each(function(){
		var $_this = $(this);
		var $editorID = $_this.attr('id');
		$('#'+$editorID).isoTextArea();
	});
}
	$('.toggle-row').click(function(){
		$(this).closest('tr').toggleClass('open_tr');
	});
	$.each( list_check_target, function( i, val ) {
		if(val.status == 1){
			$('#step_'+val.key).closest('li').removeAttr('class').addClass("check_success");
		}else{
			$('#step_'+val.key).closest('li').removeAttr('class').addClass("check_caution");
		}
	});
<?php echo '</script'; ?>
>
<?php }
}
