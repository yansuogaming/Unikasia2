<form method="post" accept-charset="UTF-8" enctype="multipart/form-data">
	<div class="box_main_step_content">
		<div class="row d-flex flex-wrap full-height">
			<div class="col-xs-12 col-sm-12 col-md-9">
				<div class="fill_data_box">
					<div class="form_title_and_table_code">
						{if $currentstep=='image'}
						{* {assign var= image_detail value='image_country'} *}
						{* {$core->getBlock('box_detail_image')} *}

						<div class="inpt_tour">
							<label class="col-form-label" for="title">
								{$core->get_Lang('Main Image')} ({$core->get_Lang('Standard image size')}: 1200x800)
							</label>
							<div class="fieldarea">
								<div class="row">
									<div class="col-md-6 col-sm-12">
										<input class="text_32 border_aaa bold" type="text" id="image" name="iso-image" value="{$oneItem.image}" style="float: right;width: 85%;" onClick="loadHelp(this)" readonly>
										<a style="float:left" href="#" class="ajOpenDialog" isoman_for_id="image" isoman_name="image"><img src="{$URL_IMAGES}/general/folder-32.png" border="0" title="Open" alt="Open" /></a>
									</div>
									<div class="col-sm-12 col-md-6">
										<img id="isoman_show_image" class="float-left mr-3" src="{$oneItem.image}" width="480" height="360" />
									</div>
								</div>
							</div>
						</div>
						<div class="inpt_tour">
							<label class="col-form-label" for="title">
								{$core->get_Lang('Sub Image')} ({$core->get_Lang('Standard image size')}: 480x698)
							</label>
							<div class="fieldarea">
								<div class="row">
									<div class="col-md-6 col-sm-12">
										<input class="text_32 border_aaa bold" type="text" id="image_sub" name="iso-image_sub" value="{$oneItem.image_sub}" style="float: right;width: 85%;" onClick="loadHelp(this)" readonly>
										<a style="float:left" href="#" class="ajOpenDialog" isoman_for_id="image_sub" isoman_name="image_sub"><img src="{$URL_IMAGES}/general/folder-32.png" border="0" title="Open" alt="Open" /></a>
									</div>
									<div class="col-sm-12 col-md-6">
										<img id="isoman_show_image_sub" class="float-left mr-3" src="{$oneItem.image_sub}" width="480" height="698" />
									</div>
								</div>
							</div>
						</div>
						<div class="inpt_tour">
							<label class="col-form-label" for="why_image">
								{$core->get_Lang('Why Image')} ({$core->get_Lang('Standard image size')}: 456x447)
							</label>
							<div class="fieldarea">
								<div class="row">
									<div class="col-md-6 col-sm-12">
										<input class="text_32 border_aaa bold" type="text" id="why_image" name="iso-why_image" value="{$oneItem.why_image}" style="float: right;width: 85%;" onClick="loadHelp(this)" readonly>
										<a style="float:left" href="#" class="ajOpenDialog" isoman_for_id="why_image" isoman_name="why_image"><img src="{$URL_IMAGES}/general/folder-32.png" border="0" title="Open" alt="Open" /></a>
									</div>
									<div class="col-sm-12 col-md-6">
										<img id="isoman_show_why_image" class="float-left mr-3" src="{$oneItem.why_image}" width="480" height="360" />
									</div>
								</div>
							</div>
						</div>
						{elseif $currentstep=='basic'}
						<div class="inpt_tour">
							<h3 class="title_box">{$core->get_Lang('Basic')}</h3>
							<label for="title">{$core->get_Lang('Title')} <span class="required_red">*</span>
								{assign var= title_country value='title_country'}
								{assign var= help_first value=$title_country}
								{if $CHECKHELP eq 1}
								<button data-key="{$title_country}" data-label="{$core->get_Lang('Title')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
								{/if}
							</label>
							<input class="input_text_form input-title required" data-table_id="{$pvalTable}" name="title" value="{$clsClassTable->getTitle($pvalTable)}" maxlength="255" type="text" onClick="loadHelp(this)" />
							<div class="text_help" hidden="">{$clsConfiguration->getValue($title_country)|html_entity_decode}</div>
						</div>
						{elseif $currentstep=='des_header'}
						<div class="inpt_tour">
							<label for="header_title">
								{$core->get_Lang('Header title')}
							</label>
							<input class="input_text_form" data-table_id="{$pvalTable}" name="header_title" value="{$oneItem.header_title}" maxlength="255" type="text" />
						</div>
						<div class="inpt_tour">
							<label for="header_title">
								{$core->get_Lang('Header description')}
							</label>
							<textarea style="width:100%" table_id="{$pvalTable}" name="header_description" id="header_description_{time()}" data-column="iso-header_description" class="textarea_intro_editor_simple" cols="255" rows="2">
								{$oneItem.header_description}
							</textarea>
						</div>
						<div class="inpt_tour">
							<label class="col-form-label" for="title">
								{$core->get_Lang('Header banner')} (Kích thước chuẩn: 1920x600)
							</label>
							<div class="fieldarea">
								<div class="row">
									<div class="col-md-6 col-sm-12">
										<input class="text_32 border_aaa bold" type="text" id="header_background" name="iso-header_background" value="{$oneItem.header_background}" style="float: right;width: 85%;" onClick="loadHelp(this)" readonly>
										<a style="float:left" href="#" class="ajOpenDialog" isoman_for_id="header_background" isoman_name="header_background"><img src="{$URL_IMAGES}/general/folder-32.png" border="0" title="Open" alt="Open" /></a>
									</div>
									<div class="col-sm-12 col-md-6">
										<img id="isoman_show_header_background" class="float-left mr-3" src="{$oneItem.header_background}" width="480" height="150" />
									</div>
								</div>
							</div>
						</div>
						{elseif $currentstep=='des_overview'}
						<div class="inpt_tour">
							<label for="overview_title">
								{$core->get_Lang('Overview title')}
							</label>
							<textarea style="width:100%" table_id="{$pvalTable}" name="overview_title" id="overview_title_{time()}" class="textarea_intro_editor_simple" data-column="iso-overview_title" cols="255" rows="2">
								{$oneItem.overview_title}
							</textarea>
						</div>
						<div class="inpt_tour">
							<label for="overview_description">
								{$core->get_Lang('Overview description')}
							</label>
							<textarea style="width:100%" table_id="{$pvalTable}" name="overview_description" id="overview_description_{time()}" class="textarea_intro_editor_simple" data-column="iso-overview_description" cols="255" rows="2">
								{$oneItem.overview_description}
							</textarea>
						</div>
						{elseif $currentstep=='des_tour'}
						<div class="inpt_tour">
							<label for="tour_title">
								{$core->get_Lang('Tour title')}
							</label>
							<textarea style="width:100%" table_id="{$pvalTable}" name="tour_title" id="tour_title_{time()}" class="textarea_intro_editor_simple" data-column="iso-tour_title" cols="255" rows="2">
								{$oneItem.tour_title}
							</textarea>
						</div>
						<div class="inpt_tour">
							<label for="tour_description">
								{$core->get_Lang('Tour description')}
							</label>
							<textarea style="width:100%" table_id="{$pvalTable}" name="tour_description" id="tour_description_{time()}" class="textarea_intro_editor_simple" data-column="iso-tour_description" cols="255" rows="2">
								{$oneItem.tour_description}
							</textarea>
						</div>
						<div class="inpt_tour">
							<label for="tour_video">
								{$core->get_Lang('Link Youtube')}
							</label>
							<input class="input_text_form input-title" data-table_id="{$pvalTable}" name="tour_video" value="{$oneItem.tour_video}" maxlength="255" type="text" />
						</div>
						<div class="inpt_tour">
							<label class="col-form-label" for="title">
								{$core->get_Lang('Thumnail video')} (Kích thước chuẩn: 1280x552)
							</label>
							<div class="fieldarea">
								<div class="row">
									<div class="col-md-6 col-sm-12">
										<input class="text_32 border_aaa bold" type="text" id="tour_image" name="iso-tour_image" value="{$clsConfiguration->getValue($OurTeamStepIcon)}" style="float: right;width: 85%;" onClick="loadHelp(this)" readonly>
										<a style="float:left" href="#" class="ajOpenDialog" isoman_for_id="tour_image" isoman_name="tour_image"><img src="{$URL_IMAGES}/general/folder-32.png" border="0" title="Open" alt="Open" /></a>
									</div>
									<div class="col-sm-12 col-md-6">
										<img id="isoman_show_tour_image" class="float-left mr-3" src="{$oneItem.tour_image}" width="480" height="208" />
									</div>
								</div>
							</div>
						</div>
						{elseif $currentstep=='des_gallery'}
						<div class="box_title_trip_code">
							<div class="row d-flex full-height">
								<div class="">
									<h3 class="title_box">{$core->get_Lang('Photo Gallery')}
										{assign var= photo_gallery_tour value='photo_gallery_tour'}
										{if $CHECKHELP eq 1}
										<button data-key="{$photo_gallery_tour}" data-label="{$core->get_Lang('Photo Gallery')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
										{/if}
									</h3>
									<div class="form_option_tour">
										<div class="inpt_tour">
											<div class="row">
												<div class="col-md-5 col-sm-12">
													<div class="filedrop-picker" style="min-width: 230px">
														<div class="filedrop" onclick="file_explorer(this,event);" ondrop="file_drop(this,event)" toId="selectFile" data-options='{ldelim}"openFrom":"gallery","table_id":"{$pvalTable}","clsTableGal":"CountryImage"{rdelim}' ondragover="return false">
															<h3>Kéo ảnh vào đây để tải lên</h3>
															<p>Kích thước (WxH=480x403px)<br>
																Các loại tệp được hỗ trợ là: .png,.jpg,.jpeg</p>
															<!-- <button type="button" class="btn btn-upload">{$core->get_Lang('From computer')}</button> -->
														</div>
														<input class="hidden" id="selectFile" type="file" data-options='{ldelim}"openFrom":"gallery","clsTableGal":"CountryImage","table_id":"{$pvalTable}"{rdelim}' name="image">
														<input style="display:none" type="file" multiple name="image[]" id="ajAttachFile">
														<div class="clearfix mt-half"></div>
														<a table_id="{$pvalTable}" isoman_multiple="1" isoman_callback='isoman_gallery_callback({ldelim}"openFrom":"gallery","clsTableGal":"CountryImage","table_id":"{$pvalTable}"{rdelim})' class="btn btn-upload-choice ajOpenDialog" isoman_for_id="image_val" isoman_name="image">{$clsISO->makeIcon('folder-o', $core->get_Lang('From library'))}</a>
													</div>
												</div>
												<div class="col-md-7 col-sm-12">
													<div id="holder_gallery" class="list-unstyled gallery"></div>
												</div>
											</div>
										</div>
										<div class="media-body mb-1 hidden">
											<p class="mb-2">
												<strong>%%filename%%</strong> - Status: <span class="text-muted">Waiting</span>
											</p>
											<div class="progress mb-2">
												<div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<script type="text/javascript">
							var table_id = '{$pvalTable}';
							var clsTableGal = 'CountryImage';
						</script>
						{literal}
						<script type="text/javascript">
							var options_gallery = {
								"openFrom": 'gallery',
								"clsTableGal": clsTableGal,
								"table_id": table_id
							};
							$(function() {
								loadGallery(table_id, {
									"clsTable": clsTableGal
								});
							});

							function loadGallery($table_id, options) {
								var $_adata = options || {};
								$_adata['tp'] = 'L';
								$_adata['table_id'] = table_id;
								$.post(path_ajax_script + '/index.php?mod=home&act=ajOpenGallery', $_adata, function(html) {
									$('#holder_gallery').html(html);
									if ($("#holder_gallery").find(".gallery-item").length > 0) {
										$('#image-gallery').closest('li').removeAttr('class').addClass('check_success');
									} else {
										$('#image-gallery').closest('li').removeAttr('class').addClass('check_caution');
									}
								});
							}

							function isoman_gallery_callback(options) {
								var $_adata = options || {},
									$list_images = isoman_selected_files();
								$_adata['tp'] = '_insert';
								$_adata['list_images'] = $list_images;
								$.post(path_ajax_script + '/?mod=cropper&act=upload_gallery', $_adata, function(res) {
									loadGallery(options.table_id, {
										"clsTable": clsTableGal
									});
								});
							}

							function delete_gallery(_this) {
								var table_id = $(_this).attr('table_id'),
									table_image_id = $(_this).attr('table_image_id');
								$Core.alert.confirm(__['Confirm'], __['Are you sure you want to delete this?'], function() {
									var $_adata = {
										'table_id': table_id,
										'clsTable': clsTableGal,
										'image_id': table_image_id
									};
									$Core.util.toggleIndicatior(1);
									$.post(path_ajax_script + '/index.php?mod=home&act=ajDeleteGallery', $_adata, function(respJson) {
										$Core.util.toggleIndicatior(0);
										if (respJson.result.indexOf('success') >= 0) {
											loadGallery(table_id, {
												"clsTable": clsTableGal
											});
										}
									}, 'json');
								});
							}
						</script>
						{/literal}
						{elseif $currentstep=='des_header_blog'}
						<div class="inpt_tour">
							<label for="header_title">
								{$core->get_Lang('Header blog title')}
							</label>
							<input class="input_text_form" data-table_id="{$pvalTable}" name="iso-blog_title" value="{$oneItem.blog_title}" maxlength="255" type="text" />
						</div>
						<div class="inpt_tour">
							<label for="header_blog_title">
								{$core->get_Lang('Header blog description')}
							</label>
							<textarea style="width:100%" table_id="{$pvalTable}" name="blog_description" id="blog_description_{time()}" class="textarea_intro_editor_simple" data-column="iso-blog_description" cols="255" rows="2">
								{$oneItem.blog_description}
							</textarea>
						</div>
						<div class="inpt_tour">
							<label class="col-form-label" for="title">
								{$core->get_Lang('Header banner')} (Kích thước chuẩn: 1920x600)
							</label>
							<div class="fieldarea">
								<div class="row">
									<div class="col-md-6 col-sm-12">
										<input class="text_32 border_aaa bold" type="text" id="blog_image" name="iso-blog_image" value="{$oneItem.blog_image}" style="float: right;width: 85%;" onClick="loadHelp(this)" readonly>
										<a style="float:left" href="#" class="ajOpenDialog" isoman_for_id="blog_image" isoman_name="iso-blog_image"><img src="{$URL_IMAGES}/general/folder-32.png" border="0" title="Open" alt="Open" /></a>
									</div>
									<div class="col-sm-12 col-md-6">
										<img id="isoman_show_blog_image" class="float-left mr-3" src="{$oneItem.blog_image}" width="480" height="150" />
									</div>
								</div>
							</div>
						</div>
						{elseif $currentstep=='header_stay'}
						<div class="inpt_tour">
							<label for="header_title">
								{$core->get_Lang('Header stay title')}
							</label>
							<input class="input_text_form" data-table_id="{$pvalTable}" name="iso-title_hotel" value="{$oneItem.title_hotel}" maxlength="255" type="text" />
						</div>
						<div class="inpt_tour">
							<label for="header_blog_title">
								{$core->get_Lang('Header stay description')}
							</label>
							<textarea style="width:100%" table_id="{$pvalTable}" name="intro_hotel" id="intro_hotel_{time()}" class="textarea_intro_editor_simple" data-column="iso-intro_hotel" cols="255" rows="2">
								{$oneItem.intro_hotel}
							</textarea>
						</div>
						<div class="inpt_tour">
							<label class="col-form-label" for="title">
								{$core->get_Lang('Stay banner')} ({$core->get_Lang('Size')}: 1920x600)
							</label>
							<div class="fieldarea">
								<div class="row">
									<div class="col-md-6 col-sm-12">
										<input class="text_32 border_aaa bold" type="text" id="image_hotel" name="iso-image_hotel" value="{$oneItem.image_hotel}" style="float: right;width: 85%;" onClick="loadHelp(this)" readonly>
										<a style="float:left" href="#" class="ajOpenDialog" isoman_for_id="image_hotel" isoman_name="iso-image_hotel"><img src="{$URL_IMAGES}/general/folder-32.png" border="0" title="Open" alt="Open" /></a>
									</div>
									<div class="col-sm-12 col-md-6">
										<img id="isoman_show_image_hotel" class="float-left mr-3" src="{$oneItem.image_hotel}" width="480" height="150" />
									</div>
								</div>
							</div>
						</div>
						<div class="inpt_tour">
							<label class="col-form-label" for="title">
								{$core->get_Lang('Stay image vertical')} ({$core->get_Lang('Size')}: 166x261)
							</label>
							<div class="fieldarea">
								<div class="row">
									<div class="col-xs-12 col-md-4">
										<div class="drop_gallery" onClick="loadHelp(this)">
											<div class="filedrop full" onClick="file_explorer(this,event);" ondrop="file_drop(this,event)" toid="selectFile" toel="isoman_show_image_hotel_sub" data-options='{ldelim}"openFrom":"image_hotel_sub","clsTable":"Country", "table_id":"{$pvalTable}","toId":"isoman_show_image_hotel_sub" {rdelim}' ondragover="return false">
												<h3>{$core->get_Lang('Drop files to upload')}</h3>
												<p>{$core->get_Lang('Size')} (WxH=1920x791)<br />
													{$core->get_Lang('File formats supported')}: .png,.jpg,.jpeg</p>
												<button type="button" class="btn btn-upload">{if $oneItem.image}Thay ảnh{else}Tải ảnh lên{/if}</button>
											</div>
											<input class="hidden" id="selectFile" type="file" data-options='{ldelim}"openFrom":"image_hotel_sub","clsTable":"Country", "table_id":"{$pvalTable}","toId":"isoman_show_image_hotel_sub"{rdelim}' name="image_hotel_sub">

											<input type="hidden" value="{$oneItem.image_hotel_sub}" name="image_hotel_sub" id="image_hotel_sub" />
											<a table_id="{$pvalTable}" isoman_multiple="0" isoman_callback='isoman_callback({ldelim}"openFrom":"image_hotel_sub", "clsTable":"Country", "pvalTable":"{$pvalTable}","toField":"image_hotel_sub","toId":"isoman_show_image_hotel_sub"{rdelim})' class="btn-upload-2 ajOpenDialog" isoman_for_id="image_hotel_sub" isoman_name="image_hotel_sub">{$clsISO->makeIcon('folder-o', $core->get_Lang('From library'))}</a>
											<div class="text_help" hidden="">{$clsConfiguration->getValue($banner_slide)|html_entity_decode}</div>
										</div>
									</div>
									<div class="col-xs-12 col-md-8">
										<img class="img-responsive radius-3" id="isoman_show_image_hotel_sub" src="{$oneItem.image_hotel_sub}" onerror="this.src='{$URL_IMAGES}/none_image.png'" alt="{$core->get_Lang('image_hotel_sub')}" style="width:100%; height:250px;object-fit: contain" />
									</div>
								</div>
							</div>
						</div>
						{elseif $currentstep=='month_country'}
						{if $arr_month_country}
						{foreach from=$arr_month_country key=key item=item}
						{assign var="month_country_id" value=$item.month_country_id}
						{assign var="title" value=$item.title}
						<div class="inpt_tour">
							<label for="month_country_{$key}">
								{$core->get_Lang($title)}
							</label>
							<textarea style="width:100%" table_id="{$pvalTable}" name="intro[]" id="month_country_{$key}_{time()}" data-column="iso-month_country_{$key}" class="textarea_intro_editor_simple" cols="255" rows="2">
								{$clsMonthCountry->getIntro($month_country_id)} 
							</textarea>
						</div>
						{/foreach}
						{/if}
						{elseif $currentstep=='common_banner'}
						<div class="inpt_tour">
							<label class="col-form-label" for="common_banner_image">
								{$core->get_Lang('Common banner image')} ({$core->get_Lang('Size')}: 1920x600)
							</label>
							<div class="fieldarea">
								<div class="row">
									<div class="col-md-6 col-sm-12">
										<input class="text_32 border_aaa bold" type="text" id="common_banner" name="iso-common_banner" value="{$oneItem.common_banner}" style="float: right;width: 85%;" onClick="loadHelp(this)" readonly>
										<a style="float:left" href="#" class="ajOpenDialog" isoman_for_id="common_banner" isoman_name="iso-common_banner"><img src="{$URL_IMAGES}/general/folder-32.png" border="0" title="Open" alt="Open" /></a>
									</div>
									<div class="col-sm-12 col-md-6">
										<img id="isoman_show_common_banner" class="float-left mr-3" src="{$oneItem.common_banner}" width="480" height="150" />
									</div>
								</div>
							</div>
						</div>
						<div class="inpt_tour">
							<label for="common_banner_intro">
								{$core->get_Lang('Common banner intro')}
							</label>
							<textarea style="width:100%" table_id="{$pvalTable}" name="common_intro" id="common_intro_{time()}" class="textarea_intro_editor_simple" data-column="iso-common_intro" cols="255" rows="2">
								{$oneItem.common_intro}
							</textarea>
						</div>
						{if $lstContinent}
						<div class="inpt_tour">
							<label for="title">{$core->get_Lang('Continent')} <span class="required_red">*</span>
								{assign var= continent_country value='continent_country'}
								{if $CHECKHELP eq 1}
								<button data-key="{$continent_country}" data-label="{$core->get_Lang('Continent')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
								{/if}
							</label>
							<div class="fieldarea">
								<select class="glSlBox border_aaa required" name="iso-continent_id" style="width:250px" onClick="loadHelp(this)">
									<option value="">-- {$core->get_Lang('Select Continent')} --</option>
									{section name=i loop=$lstContinent}
									<option {if $oneItem.continent_id eq $lstContinent[i].continent_id}selected="selected" {/if} value="{$lstContinent[i].continent_id}">{$clsContinent->getTitle($lstContinent[i].continent_id)}</option>
									{/section}
								</select>
								<div class="text_help" hidden="">{$clsConfiguration->getValue($continent_country)|html_entity_decode}</div>
							</div>
						</div>
						{/if}
						{elseif $currentstep=='shortText'}
						<div class="inpt_tour">
							<h3 class="title_box">{$core->get_Lang('Short text')}
								{assign var= shortText_country value='shortText_country'}
								{assign var= help_first value=$shortText_country}
								{if $CHECKHELP eq 1}
								<button data-key="{$shortText_country}" data-label="{$core->get_Lang('Short text')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
								{/if}
							</h3>
							<textarea style="width:100%" table_id="{$pvalTable}" name="iso-intro" class="textarea_intro_editor" data-column="iso-intro" id="textarea_intro_editor_intro_{$now}" cols="255" rows="2">{$oneItem.intro}</textarea>
							{literal}
							<script>
								$(".showdate").datepicker({
									dateFormat: "dd/mm/yy"
								});
							</script>
							{/literal}
						</div>
						{elseif $currentstep=='longText'}
						<div class="inpt_tour">
							<h3 class="title_box">{$core->get_Lang('Long text')}
								{assign var= longText_country value='longText_country'}
								{assign var= help_first value=$longText_country}
								{if $CHECKHELP eq 1}
								<button data-key="{$longText_country}" data-label="{$core->get_Lang('Long text')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
								{/if}
							</h3>
							<textarea style="width:100%" table_id="{$pvalTable}" name="iso-content" class="textarea_intro_editor_full" data-column="iso-content" id="textarea_intro_editor_overview_{$now}" cols="255" rows="2">{$oneItem.content}</textarea>
							{literal}
							<script>
								$(".showdate").datepicker({
									dateFormat: "dd/mm/yy"
								});
							</script>
							{/literal}
						</div>
						{elseif $currentstep=='gmap'}
						<div class="inpt_tour">
							<h3 class="title_box">{$core->get_Lang('Gmap')}
								{assign var= gmap_country value='gmap_country'}
								{assign var= help_first value=$gmap_country}
								{if $CHECKHELP eq 1}
								<button data-key="{$gmap_country}" data-label="{$core->get_Lang('Gmap')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
								{/if}
							</h3>
							<div class="fieldlabel-full mb5">
								<i class="iso-pos"></i> <strong>{$core->get_Lang('Location on map')}</strong>
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
														<label>{$core->get_Lang('latitude')}</label>
													</div>
													<div class="format-setting-content">
														<input class="text full" name="iso-map_la" id="map_la" value="{$oneItem.map_la}" type="text" style="width:95% !important" />
													</div>
												</div>
												<div class="format-setting-wrap mb10">
													<div class="format-setting-label">
														<label>{$core->get_Lang('longitude')}</label>
													</div>
													<div class="format-setting-content">
														<input class="text full" name="iso-map_lo" id="map_lo" value="{$oneItem.map_lo}" type="text" style="width:95% !important" />
													</div>
												</div>
												<div class="format-setting-wrap mb10">
													<div class="format-setting-label">
														<label>{$core->get_Lang('MapZoom')}</label>
													</div>
													<div class="format-setting-content">
														<input class="text full" name="iso-map_zoom" value="{if $oneItem.map_zoom}{$oneItem.map_zoom} {else}0{/if}" type="text" style="width:95% !important" />
													</div>
												</div>
												<div class="format-setting-wrap mb10">
													<div class="format-setting-label">
														<label>{$core->get_Lang('MapStyle')}</label>
													</div>
													<div class="format-setting-content">
														<input class="text full" name="iso-map_tyle" value="{$oneItem.map_tyle}" type="text" style="width:95% !important" />
													</div>
												</div>
											</div>
										</div>
									</div>
									{literal}
									<script type="text/javascript">
										$(document).on('click', '.tabchildcol a[href="#map"]', function() {
											initialize();
										});
										$(function() {
											initialize();
										});
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
												$getID('map-search-input').value = responses[0].formatted_address;
												$getID('map_la').value = marker.getPosition().lat();
												$getID('map_lo').value = marker.getPosition().lng();
												map.panTo(marker.getPosition());
											});
										}

										function initialize() {
											map_lo = map_lo != '' ? map_lo : '105.86727258378903';
											map_la = map_la != '' ? map_la : '20.988668210459167';
											if (map_zoom == '') map_zoom = 11;
											if (map_type == '') map_type = 'roadmap';
											var mapOptions = {
												center: new google.maps.LatLng(map_la, map_lo),
												zoom: parseInt(map_zoom),
												mapTypeId: map_type
											};
											map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);
											var input = document.getElementById('map-search-input');
											var autocomplete = new google.maps.places.Autocomplete(input);
											autocomplete.bindTo('bounds', map);
											var location = new google.maps.LatLng(map_la, map_lo);
											marker = new google.maps.Marker({
												position: location
											});
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
													map.setZoom(11);
												}
												geocode(place.geometry.location);
												marker.setPosition(place.geometry.location);
											});
											map.addListener('zoom_changed', function() {
												map_zoom = map.getZoom();
												$('input[name=iso-map_zoom]').val(map_zoom);
											});
											map.addListener('maptypeid_changed', function(e) {
												map_tyle = map.getMapTypeId();
												$('input[name=iso-map_tyle]').val(map_tyle);
											});
										}

										function findLocation(address) {
											geocoder = new google.maps.Geocoder();
											geocoder.geocode({
												'address': address
											}, function(results, status) {
												if (status == google.maps.GeocoderStatus.OK) {
													marker.setPosition(results[0].geometry.location);
													geocode(results[0].geometry.location);
												} else {
													alert("Sorry but Google Maps could not find this location.");
												}
											});
										};
										$(function() {
											$(document).on('keydown', '#map-search-input', function(ev) {
												var _this = $(this);
												var _code = ev.keyCode;
												if (_code === 13 && $.trim(_this.val()) != '') {
													findLocation(_this.val());
													return false;
												}
											});
											$('input[name=iso-address]').click(function() {
												$('.tabchildcol a[href="#map"]').trigger('click');
											}).blur(function() {
												$('.tabchildcol.current').trigger('click');
											}).keydown(function(ev) {
												var _this = $(this);
												var _code = ev.keyCode;
												if (_code === 13 && $.trim(_this.val()) != '') {
													findLocation(_this.val());
													return false;
												}
											});
											$(document).on('click', '#map-search-input', function() {
												initialize();
											});
										});
									</script>
									{/literal}
								</div>
							</div>
						</div>
						{elseif $currentstep=='banner'}
						{$core->getBlock('box_detail_country_banner_video')}
						{elseif $currentstep=='information'}
						<h3 class="title_box mb0">{$core->get_Lang('information')}</h3>
						<p class="intro_box mb40"></p>
						<div class="form_option_tour">
							<div class="inpt_tour">
								<label for="title">{$core->get_Lang('hotelinformation')} {$clsClassTable->getTitle($pvalTable)}<span class="required_red">*</span>
									{assign var= hotelintro_country value='hotelintro_country'}
									{assign var= help_first value=$hotelintro_country}
									{if $CHECKHELP eq 1}
									<button data-key="{$hotelintro_country}" data-label="{$core->get_Lang('hotelinformation')} {$clsClassTable->getTitle($pvalTable)}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
									{/if}
								</label>
								<textarea style="width:100%" table_id="{$pvalTable}" name="iso-intro_hotel" class="textarea_intro_editor" data-column="iso-intro_hotel" id="textarea_intro_editor_intro_hotel_{$now}" cols="255" rows="2">{$oneItem.intro_hotel}</textarea>
							</div>
						</div>
						<div class="form-group inpt_tour">
							<label class="col-form-label" for="title">{$core->get_Lang('Hotel Banner')} {$clsClassTable->getTitle($pvalTable)}<span class="required_red">*</span>
								{assign var= image_hotel_Country value='image_hotel_Country'}
								{if $CHECKHELP eq 1}
								<button data-key="{$image_hotel_Country}" data-label="{$core->get_Lang('Hotel Banner')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
								{/if}
							</label>
							<div class="row">
								<div class="col-xs-12 col-md-6">
									<div class="drop_gallery" onClick="loadHelp(this)">
										<div class="filedrop full" onClick="file_explorer(this,event);" ondrop="file_drop(this,event)" toid="selectFile" toel="isoman_show_banner" data-options='{ldelim}"openFrom":"image_hotel","clsTable":"Country", "table_id":"{$pvalTable}","toField":"image_hotel","toId":"isoman_show_image_hotel"{rdelim}' ondragover="return false">
											<h3>{$core->get_Lang('Drop files to upload')}</h3>
											<p>Image size (WxH=1920x400px)<br>
												Các loại tệp được hỗ trợ là: .png,.jpg,.jpeg</p>
											<button type="button" class="btn btn-upload">{if $oneItem.image_hotel}Thay ảnh{else}Tải ảnh lên{/if}</button>
										</div>
										<input class="hidden" id="selectFile" type="file" data-options='{ldelim}"openFrom":"image_hotel","clsTable":"Country", "table_id":"{$pvalTable}","toField":"image_hotel","toId":"isoman_show_image_hotel"{rdelim}' name="image_hotel">

										<input type="hidden" value="{$oneItem.image_hotel}" name="image_hotel" id="image_hotel" />
										<a table_id="{$pvalTable}" isoman_multiple="0" isoman_callback='isoman_callback({ldelim}"openFrom":"image_hotel", "clsTable":"Country", "pvalTable":"{$pvalTable}","toField":"image_hotel","toId":"isoman_show_image_hotel"{rdelim})' class="btn-upload-2 ajOpenDialog" isoman_for_id="image_hotel" isoman_name="image_hotel">{$clsISO->makeIcon('folder-o', $core->get_Lang('From library'))}</a>
										<div class="text_help" hidden="">{$clsConfiguration->getValue($image_hotel_Country)|html_entity_decode}</div>
									</div>
								</div>
								<div class="col-xs-12 col-md-6">
									<img class="img-responsive radius-3" id="isoman_show_image_hotel" src="{$oneItem.image_hotel}" onerror="this.src='{$URL_IMAGES}/none_image.png'" alt="{$core->get_Lang('image_hotel')}" style="width:100%; height:auto" />
								</div>
							</div>
						</div>
						{elseif $currentstep=='seo'}
						{$core->getBlock('box_detail_country_seotool')}
						{/if}

						<div class="btn_save_titile_table_code mt30">
							<a data-table_id="{$pvalTable}" data-panel="{$arrStep[$step].panel}" data-currentstep="{$arrStep[$step].key}" data-prevstep="{$prevstep}" class="back_step js_save_back">{$core->get_Lang('Back')}</a>

							<a data-table_id="{$pvalTable}" data-panel="{$arrStep[$step].panel}" data-currentstep="{$currentstep}" data-next_step="{$nextstep}" class="js_save_continue">{$core->get_Lang('Save &amp; Continue')}</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-3 col_instruction">
				<div class="instruction_fill_data_box">
					<p class="title_box"><i class="fa fa-question-circle text-red " aria-hidden="true"></i> {$core->get_Lang('Instructions')}</p>
					<div class="content_box">{$clsConfiguration->getValue($help_first)|html_entity_decode}</div>
				</div>
			</div>
		</div>
	</div>
</form>
<!-- <script type="text/javascript">
	var list_check_target = {
		$list_check_target
	};
</script> -->
{literal}
<!-- <script>
	$('.toggle-row').click(function() {
		$(this).closest('tr').toggleClass('open_tr');
	});
	$.each(list_check_target, function(i, val) {
		if (val.status == 1) {
			$('#step_' + val.key).closest('li').removeAttr('class').addClass("check_success");
		} else {
			$('#step_' + val.key).closest('li').removeAttr('class').addClass("check_caution");
		}
	});
</script> -->
{/literal}

{literal}
<script type="text/javascript">
	// $(function() {
	// 	if ($('.textarea_intro_editor_simple').length > 0) {
	// 		$('.textarea_intro_editor_simple').each(function() {
	// 			var $_this = $(this);
	// 			var $editorID = $_this.attr('id');
	// 			$('#' + $editorID).isoTextAreaFix();
	// 		});
	// 	}
	// });
</script>
{/literal}