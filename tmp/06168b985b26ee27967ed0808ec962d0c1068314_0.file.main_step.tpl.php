<?php
/* Smarty version 3.1.38, created on 2024-04-24 09:01:48
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/guide/main_step.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6628680c6c50f5_29459117',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06168b985b26ee27967ed0808ec962d0c1068314' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/guide/main_step.tpl',
      1 => 1709883938,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6628680c6c50f5_29459117 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="post" accept-charset="UTF-8" enctype="multipart/form-data">
	<div class="box_main_step_content">
		<div class="row d-flex flex-wrap full-height">
			<div class="col-xs-12 col-sm-12 col-md-9">
				<div class="fill_data_box">
					<div class="form_title_and_table_code">
						<?php if ($_smarty_tpl->tpl_vars['currentstep']->value == 'image') {?>
						<?php $_smarty_tpl->_assignInScope('image_detail', 'image_guide');?>
						<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('box_detail_image');?>

						<?php } elseif ($_smarty_tpl->tpl_vars['currentstep']->value == 'basic') {?>
						<h3 class="title_box"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Basic');?>
</h3>
						
						<div class="inpt_tour">
							<label for="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Title');?>
 <span class="required_red">*</span>
							<?php $_smarty_tpl->_assignInScope('title_guide', 'title_guide');?>
							<?php $_smarty_tpl->_assignInScope('help_first', $_smarty_tpl->tpl_vars['title_guide']->value);?>
							<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
							<button data-key="<?php echo $_smarty_tpl->tpl_vars['title_guide']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Title');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
							<?php }?>
							</label>
							<input class="input_text_form input-title required" data-table_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" name="title" value="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getTitle($_smarty_tpl->tpl_vars['pvalTable']->value);?>
" maxlength="255" type="text" onClick="loadHelp(this)" />
							<div class="text_help" hidden=""><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['title_guide']->value));?>
</div>
						</div>
						<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'guide','cat','default')) {?>
                        <div class="inpt_tour">
								<label for="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('category');?>
 <span class="required_red">*</span>
								<?php $_smarty_tpl->_assignInScope('category_guide', 'category_guide');?>
								<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
								<button data-key="<?php echo $_smarty_tpl->tpl_vars['category_guide']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('category');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
								<?php }?>
								</label>
								<div class="fieldarea">
									<select class="glSlBox border_aaa required" name="cat_id" style="width:250px" onClick="loadHelp(this)">
										<?php echo $_smarty_tpl->tpl_vars['clsGuideCat']->value->makeSelectboxOption(0,$_smarty_tpl->tpl_vars['oneItem']->value['cat_id']);?>

									</select>
									<div class="text_help" hidden=""><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['category_guide']->value));?>
</div>
								</div>
						</div>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'city','default','default')) {?>
                        	<div class="inpt_tour">
								<label for="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Location');?>

								<?php $_smarty_tpl->_assignInScope('location_guide', 'location_guide');?>
								<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
								<button data-key="<?php echo $_smarty_tpl->tpl_vars['location_guide']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Location');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
								<?php }?>
								</label>
								<div class="fieldarea">
									<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'country','default','default')) {?>
										<select class="glSlBox border_aaa" id="slb_Country" name="iso-country_id" style="width:250px" onClick="loadHelp(this)">
											<?php echo $_smarty_tpl->tpl_vars['clsCountry']->value->makeSelectboxOption($_smarty_tpl->tpl_vars['oneItem']->value['country_id']);?>

										</select>
									<?php }?>
									<select class="glSlBox border_aaa" id="slb_City" name="iso-city_id" style="width:250px" onClick="loadHelp(this)">
										<?php echo $_smarty_tpl->tpl_vars['clsCity']->value->makeSelectboxOption($_smarty_tpl->tpl_vars['oneItem']->value['city_id'],$_smarty_tpl->tpl_vars['oneItem']->value['country_id']);?>

									</select>
									<div class="text_help" hidden=""><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['location_guide']->value));?>
</div>
								</div>
								
								<?php echo '<script'; ?>
 type="text/javascript">
									$().ready(function(){
										$('#slb_Country').change(function() {
											var $_this = $(this);
											$('#slb_City').html('<option value="">'+loading+'</option>');
											$.ajax({
												type: "POST",
												url: path_ajax_script+'/index.php?mod=guide&act=loadCity',
												data: {"country_id": $_this.val()},
												dataType: "html",
												success: function(html) {
													$('#slb_City').html(html).chosen({width:'250px'});
													$('#slb_City').trigger("chosen:updated");
												}
											});
										});
									});
								<?php echo '</script'; ?>
>
								
							</div>
						<?php }?>
						<div class="inpt_tour">
							<label for="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Publish date');?>

							<?php $_smarty_tpl->_assignInScope('publish_date_guide', 'publish_date_guide');?>
							<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
							<button data-key="<?php echo $_smarty_tpl->tpl_vars['publish_date_guide']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Publish date');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
							<?php }?>
							</label>
							<div class="fieldarea">
								<input class="text_32 border_aaa showdate" name="publish_date" value="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatTimeMonth($_smarty_tpl->tpl_vars['oneItem']->value['publish_date']);?>
" maxlength="255" type="text" onClick="loadHelp(this)" />
								<div class="text_help" hidden=""><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['publish_date_guide']->value));?>
</div>							
							</div>
							
								<?php echo '<script'; ?>
>
								$(".showdate").datepicker({dateFormat: "dd/mm/yy",changeMonth: true,changeYear: true});
								<?php echo '</script'; ?>
>
							
						</div>
						
						<?php } elseif ($_smarty_tpl->tpl_vars['currentstep']->value == 'shortText') {?>
						<div class="inpt_tour">
							<h3 class="title_box"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Short text');?>
 
								<?php $_smarty_tpl->_assignInScope('shortText_guide', 'shortText_guide');?>
								<?php $_smarty_tpl->_assignInScope('help_first', $_smarty_tpl->tpl_vars['shortText_guide']->value);?>
								<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
								<button data-key="<?php echo $_smarty_tpl->tpl_vars['shortText_guide']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Short text');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
								<?php }?>
							</h3>
							<textarea style="width:100%" table_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" name="iso-intro" class="textarea_intro_editor" data-column="iso-intro" id="textarea_intro_editor_overview_<?php echo $_smarty_tpl->tpl_vars['now']->value;?>
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
 
								<?php $_smarty_tpl->_assignInScope('longText_guide', 'longText_guide');?>
								<?php $_smarty_tpl->_assignInScope('help_first', $_smarty_tpl->tpl_vars['longText_guide']->value);?>
								<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
								<button data-key="<?php echo $_smarty_tpl->tpl_vars['longText_guide']->value;?>
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

								<?php $_smarty_tpl->_assignInScope('gmap_guide', 'gmap_guide');?>
								<?php $_smarty_tpl->_assignInScope('help_first', $_smarty_tpl->tpl_vars['gmap_guide']->value);?>
								<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
								<button data-key="<?php echo $_smarty_tpl->tpl_vars['gmap_guide']->value;?>
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
						
						<?php } elseif ($_smarty_tpl->tpl_vars['currentstep']->value == 'seo') {?>
							<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('box_detail_guide_seotool');?>
			
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
