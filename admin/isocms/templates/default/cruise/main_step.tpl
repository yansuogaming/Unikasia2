<form method="post" accept-charset="UTF-8" enctype="multipart/form-data">
	<div class="box_main_step_content">
		<div class="row d-flex flex-wrap full-height">
			<div class="col-xs-12 col-sm-12 {if $currentstep eq ''}col-md-12{else}col-md-9{/if}">
				<div class="fill_data_box">
					<div class="form_title_and_table_code" {$currentstep}>
						{if $currentstep=='image'}
						{assign var= image_detail value='image_cruise'}
						{$clsISO->getBlock('box_detail_image',["image_detail"=>$image_detail])}
						<div class="form-group">
							<label class="col-form-label" for="title">{$core->get_Lang('File download program cruise')}
								{assign var= file_tour value='file_tour'}
								{if $CHECKHELP eq 1}
								<button data-key="{$file_tour}" data-label="{$core->get_Lang('Image represent tour')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
								{/if}
							</label>
							<p class="help-block">{$core->get_Lang('Chosse File in the warehouse data')}</p>
							<img class="isoman_img_pop" id="isoman_show_file_programmes" src="{$URL_IMAGES}/icon_pdf.png" width="30px" height="30px" />
							<input type="hidden" id="isoman_hidden_file_programme" name="isoman_url_file_programme" value="{$oneItem.file_programme}">
							<input class="text_32 border_aaa bold" type="text" id="isoman_url_file_programme" name="file_programme" value="{$oneItem.file_programme}" style="width:100%; max-width:300px; float:left" onClick="loadHelp(this)"><a style="float:left; margin-left:4px; margin-top:-4px;" href="#" class="ajOpenDialog" isoman_for_id="file_programme" isoman_val="{$oneItem.file_programme}" isoman_name="file_programme"><img src="{$URL_IMAGES}/general/folder-32.png" border="0" title="Open" alt="Open" /></a>
							<em style="padding-left:10px; padding-top:3px; display:inline-block">File chương trình tour</em>
							<div class="text_help" hidden="">{$clsConfiguration->getValue($file_tour)|html_entity_decode}</div>
						</div>
						{elseif $currentstep=='basic'}
						<h3 class="title_box">{$core->get_Lang('Basic')}</h3>
						<div class="inpt_tour">
							<label for="title">{$core->get_Lang('Cruise Type')}</label>
							<div class="box_cruise_type">
								{if $oneItem.cruise_type eq 1}
								<div class="boxCheckbox boxCheckboxCruise">
									<input type="radio" class="" name="cruise_type" value="1" checked>
									<label class="checkmark">{$core->get_Lang("Cabin")}</label>
								</div>
								{else}
								<div class="boxCheckbox boxCheckboxCruise">
									<input type="radio" class="" name="cruise_type" value="0" checked>
									<label class="checkmark">{$core->get_Lang("CruisePrivate")}</label>
								</div>
								{/if}
							</div>
						</div>
						<div class="inpt_tour">
							<label for="title">{$core->get_Lang('Name Of Cruise')} <span class="required_red">*</span>
								{assign var= name_cruise value='name_cruise'}
								{assign var= help_first value=$name_cruise}
								{if $CHECKHELP eq 1}
								<button data-key="{$name_cruise}" data-label="{$core->get_Lang('Name')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
								{/if}
							</label>
							<input class="input_text_form input-title required" data-table_id="{$pvalTable}" name="title" value="{$clsClassTable->getTitle($pvalTable)}" maxlength="255" type="text" onClick="loadHelp(this)" />
							<div class="text_help" hidden="">{$clsConfiguration->getValue($name_cruise)|html_entity_decode}</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="inpt_tour">
									<label for="title">{$core->get_Lang('Cruise code')} <span class="required_red">*</span>
										{assign var= code_cruise value='code_cruise'}
										{if $CHECKHELP eq 1}
										<button data-key="{$code_cruise}" data-label="{$core->get_Lang('Cruise Code')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
										{/if}
									</label>
									<div class="fieldarea">
										<input class="input_text_form required" data-table_id="{$pvalTable}" name="cruise_code" value="{$clsClassTable->getOneField('cruise_code',$pvalTable)}" maxlength="255" type="text" onClick="loadHelp(this)" />
										<div class="text_help" hidden="">{$clsConfiguration->getValue($code_cruise)|html_entity_decode}</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="inpt_tour">
									{if $clsISO->getCheckActiveModulePackage($package_id,$mod,'cat','default')}
									<label for="title">{$core->get_Lang('Cruise Class')} <span class="required_red">*</span>
										{assign var= class_cruise value='class_cruise'}
										{if $CHECKHELP eq 1}
										<button data-key="{$class_cruise}" data-label="{$core->get_Lang('Cruise Class')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
										{/if}
									</label>
									<div class="fieldarea">
										<select class="required" name="cruise_cat_id" style="width:100%" onClick="loadHelp(this)">
											{$clsCruiseCat->makeSelectboxOption($oneItem.cruise_cat_id,0,0,'--',0,0)}
										</select>
										<div class="text_help" hidden="">{$clsConfiguration->getValue($class_cruise)|html_entity_decode}</div>
									</div>
									{/if}
								</div>
							</div>
						</div>
						<div class="inpt_tour pdb30" style="border-bottom:1px dashed #0000004d">
							<label for="title">{$core->get_Lang('Rank cruise')} <span class="required_red">*</span>
								{assign var= star_cruise value='star_cruise'}
								{if $CHECKHELP eq 1}
								<button data-key="{$star_cruise}" data-label="{$core->get_Lang('Star')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
								{/if}
							</label>
							<div class="fieldarea" onClick="loadHelp(this)">
								<div class="boxCheckbox">
									<input type="radio" class="check_box_itinerary" name="star_number" value="0" {if $oneItem.star_number eq 0}checked="checked" {/if}>
									<p class="text-itinerary checkmark">{$core->get_Lang('Un Rated')}</p>
								</div>
								{section name=star start=1 loop=7 step=1}
								<div class="boxCheckbox">
									<input type="radio" class="check_box_itinerary" name="star_number" value="{$smarty.section.star.index}" {if $oneItem.star_number eq $smarty.section.star.index}checked="checked" {/if}>
									<p class="text-itinerary checkmark">{$smarty.section.star.index} {$core->get_Lang('star')}</p>
								</div>
								{/section}
								<div class="text_help" hidden="">{$clsConfiguration->getValue($star_cruise)|html_entity_decode}</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="inpt_tour">
									<label for="title">{$core->get_Lang('Cruise Material')}
										{assign var= material_cruise value='material_cruise'}
										{if $CHECKHELP eq 1}
										<button data-key="{$material_cruise}" data-label="{$core->get_Lang('Material')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
										{/if}
									</label>
									<div class="fieldarea">
										<select class="" name="iso-material" id="material" style="width:100%" onClick="loadHelp(this)">
											<option value="">{$core->get_Lang('select')}</option>
											{$clsCruiseProperty->getSelectByProperty('CruiseMaterial',$oneItem.material,0,'')}
										</select>
										<div class="text_help" hidden="">{$clsConfiguration->getValue($material_cruise)|html_entity_decode}</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="inpt_tour">
									<label for="title">{$core->get_Lang('Build')}
										{assign var= build_cruise value='build_cruise'}
										{if $CHECKHELP eq 1}
										<button data-key="{$build_cruise}" data-label="{$core->get_Lang('Build')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
										{/if}
									</label>
									<div class="fieldarea">
										<input class="text_32 span100" id="build" name="iso-build" value="{$clsClassTable->getOneField('build',$pvalTable)}" placeholder="{$core->get_Lang('Ex: 2017')}" maxlength="255" type="number" onClick="loadHelp(this)" />
										<div class="text_help" hidden="">{$clsConfiguration->getValue($build_cruise)|html_entity_decode}</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="inpt_tour">
									<label for="title">{$core->get_Lang('No. of Cabins')}
										{assign var= no_of_cabins_cruise value='no_of_cabins_cruise'}
										{if $CHECKHELP eq 1}
										<button data-key="{$no_of_cabins_cruise}" data-label="{$core->get_Lang('No. of Cabins')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
										{/if}
									</label>
									<div class="fieldarea">
										<input class="text_32 span100" id="total_cabin" name="total_cabin" value="{$clsClassTable->getOneField('total_cabin',$pvalTable)}" maxlength="255" type="number" min="0" placeholder="{$core->get_Lang('Ex: 10')}" onClick="loadHelp(this)" />
										<div class="text_help" hidden="">{$clsConfiguration->getValue($no_of_cabins_cruise)|html_entity_decode}</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6">
								<div class="inpt_tour">
									<label for="title">{$core->get_Lang('Departure Port')}
										{assign var= departure_port_cruise value='departure_port_cruise'}
										{if $CHECKHELP eq 1}
										<button data-key="{$departure_port_cruise}" data-label="{$core->get_Lang('Departure Port')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
										{/if}
									</label>
									<div class="fieldarea">
										<input class="text_32 span100" id="departure_port" name="iso-departure_port" value="{$clsClassTable->getOneField('departure_port',$pvalTable)}" placeholder="{$core->get_Lang('Block 25, Tuan Chau Island, Halong, Vietnam')}" type="text" onClick="loadHelp(this)" />
										<div class="text_help" hidden="">{$clsConfiguration->getValue($departure_port_cruise)|html_entity_decode}</div>
									</div>
								</div>
							</div>
						</div>
						<div class="inpt_tour pdt30" style="border-top:1px dashed #0000004d">
							<label for="title">{$core->get_Lang('reviewcruise')}
								{assign var= review_cruise value='review_cruise'}
								{if $CHECKHELP eq 1}
								<button data-key="{$review_cruise}" data-label="{$core->get_Lang('reviewcruise')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
								{/if}
							</label>
							<div class="row">
								<div class="col-md-4">
									<div class="row-span">
										<div class="span100 mb10">{$core->get_Lang('Cruise quality')}</div>
										<div class="fieldarea span100 relative"><input class="text full fontLarge price-In" name="cruise_quality" value="{$clsISO->formatNumberToEasyRead($clsReviewsCruise->getValueByField($pvalTable,'cruise_quality'))}" maxlength="255" type="text" /><span class="percent">%</span></div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="row-span">
										<div class="span100 mb10">{$core->get_Lang('Food/Drink')}</div>
										<div class="fieldarea span100 relative"><input class="text full fontLarge price-In" name="food_drink" value="{$clsISO->formatNumberToEasyRead($clsReviewsCruise->getValueByField($pvalTable,'food_drink'))}" maxlength="255" type="text" /><span class="percent">%</span></div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="row-span">
										<div class="span100 mb10">{$core->get_Lang('Cabin quality')}</div>
										<div class="fieldarea span100 relative"><input class="text full fontLarge price-In" name="cabin_quality" value="{$clsISO->formatNumberToEasyRead($clsReviewsCruise->getValueByField($pvalTable,'cabin_quality'))}" maxlength="255" type="text" /><span class="percent">%</span></div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="row-span">
										<div class="span100 mb10">{$core->get_Lang('Staff quality')}</div>
										<div class="fieldarea span100 relative"><input class="text full fontLarge price-In" name="staff_quality" value="{$clsISO->formatNumberToEasyRead($clsReviewsCruise->getValueByField($pvalTable,'staff_quality'))}" maxlength="255" type="text" /><span class="percent">%</span></div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="row-span">
										<div class="span100 mb10">{$core->get_Lang('Entertainment')}</div>
										<div class="fieldarea span100 relative"><input class="text full fontLarge price-In" name="entertainment" value="{$clsISO->formatNumberToEasyRead($clsReviewsCruise->getValueByField($pvalTable,'entertainment'))}" maxlength="255" type="text" /><span class="percent">%</span></div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="row-span">
										<div class="span100 mb10">{$core->get_Lang('Worthy')}</div>
										<div class="fieldarea span100 relative"><input class="text full fontLarge price-In" name="worth_the_money" value="{$clsISO->formatNumberToEasyRead($clsReviewsCruise->getValueByField($pvalTable,'worth_the_money'))}" maxlength="255" type="text" /><span class="percent">%</span></div>
									</div>
								</div>
							</div>
						</div>
						{elseif $currentstep=='cabin'}
						<div class="box_list_cabin">
							<h3 class="title_box mb10">{$core->get_Lang('Cabin')}
								{assign var= cabin_cruise value='cabin_cruise'}
								{assign var= help_first value=$cabin_cruise}
								{if $CHECKHELP eq 1}
								<button data-key="{$cabin_cruise}" data-label="{$core->get_Lang('Cabin')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
								{/if}
							</h3>
							<p class="intro_box mb40">{$core->get_Lang('Introduce the cabin services you will provide to customers')}</p>
							<div class="form_option_tour">
								<div class="inpt_tour">
									<div class="hastable">
										<table class="table tbl-grid table-striped table_responsive" cellspacing="0" width="100%">
											<thead>
												<tr>
													<th class="gridheader name_responsive name_responsive4" colspan="2" style="text-align:left"><strong>{$core->get_Lang('Cabin')}</strong></th>
													<th class="gridheader hiden_responsive" style="text-align:center; width:100px"><strong>{$core->get_Lang('status')}</strong></th>
													<th class="gridheader hiden_responsive" style="text-align:center; width:100px"></th>
												</tr>
											</thead>
											<tbody id="SortAble">
												{section name=i loop=$listCabin}
												{assign var=title_cabin value=$clsCruiseCabin->getTitle($listCabin[i].cruise_cabin_id)}
												<tr style="cursor:move" class="{cycle values=" row1,row2"}" id="order_cabin-{$listCabin[i].cruise_cabin_id}">
													<td class="text-left" style="width:70px;"><img src="{$clsCruiseCabin->getImage($listCabin[i].cruise_cabin_id,68,52)}" alt="{$clsCruiseCabin->getTitle($listCabin[i].cruise_cabin_id)}" width="," height="52" /></td>
													<td class="text-left name_service">
														<div class="box_name_services">
															<p class="txt_name_services">
																<a href="javascript:void()" class="edit_cabin" data-cabin_id="{$listCabin[i].cruise_cabin_id}" data-cruise_id="{$pvalTable}" title="{$title_cabin}">{$title_cabin}</a>
															</p>
															<p class="txt_info">
																{assign var=check_first value=1}
																{if $listCabin[i].cabin_size gt 0}
																{assign var=check_first value=0}
																<span>{$listCabin[i].cabin_size}m<sup>2</sup></span>
																{/if}
																{if $listCabin[i].bed_size ne ""}
																{if $check_first eq 0}| {/if}
																<span>{$listCabin[i].bed_size}</span>
																{assign var=check_first value=0}
																{/if}
																{if $listCabin[i].extra_bed eq 1}
																{if $check_first eq 0}| {/if}
																<span>{$core->get_Lang('Extra bed available')}</span>
																{/if}
															</p>
														</div>
														<button type="button" class="toggle-row inline_block767 top12" style="display:none"><i class="fa fa-caret fa-caret-down"></i></button>
													</td>
													<td class="block_responsive" data-title="{$core->get_Lang('status')}" style="text-align:center">
														<a href="javascript:void(0);" class="SiteClickPublic" clsTable="CruiseCabin" pkey="cruise_cabin_id" sourse_id="{$listCabin[i].cruise_cabin_id}" rel="{$clsCruiseCabin->getOneField('is_online',$listCabin[i].cruise_cabin_id)}" title="{$core->get_Lang('Click to change status')}">
															{if $clsCruiseCabin->getOneField('is_online',$listCabin[i].cruise_cabin_id) eq '1'}
															<i class="fa fa-check-circle green"></i>
															{else}
															<i class="fa fa-minus-circle red"></i>
															{/if}
														</a>
													</td>
													<td class="block_responsive" data-title="{$core->get_Lang('func')}" align="center" style="vertical-align: middle; text-align:center; width: 40px; white-space: nowrap;">
														<div class="btn-group-ico">
															{*<a title="{$core->get_Lang('edit')}" href="{$PCMS_URL}/?mod=cruise&act=edit_cabin&cruise_cabin_id={$core->encryptID($listCabin[i].cruise_cabin_id)}&cruise_id={$pvalTable}"><i class="ico ico-edit"></i></a>*}
															<a title="{$core->get_Lang('edit')}" href="javascript:void()" class="edit_cabin" data-cabin_id="{$listCabin[i].cruise_cabin_id}" data-cruise_id="{$pvalTable}"><i class="ico ico-edit"></i></a>
															<a title="{$core->get_Lang('delete')}" class="confirm_delete" href="{$PCMS_URL}/?mod=cruise&act=delete_cruise_cabin&cruise_cabin_id={$core->encryptID($listCabin[i].cruise_cabin_id)}&cruise_id={$pvalTable}"><i class="ico ico-remove"></i></a>
														</div>
													</td>
												</tr>
												{/section}
											</tbody>
										</table>
									</div>
									{*<a href="{$PCMS_URL}/?mod=cruise&act=edit_cabin&cruise_id={$pvalTable}" class="btn_additinerary" title="{$core->get_Lang('add new')}">+ {$core->get_Lang('add new')}</a>*}
									<a class="btn_additinerary addCabin" data-cruise_id="{$pvalTable}" title="{$core->get_Lang('add new')}">+ {$core->get_Lang('add new')}</a>
									{literal}
									<script type="text/javascript">
										$("#SortAble").sortable({
											opacity: 0.8,
											cursor: 'move',
											start: function() {
												vietiso_loading(1);
											},
											stop: function() {
												vietiso_loading(0);
											},
											update: function() {
												var recordPerPage = 1000;
												var currentPage = 1;
												var order = $(this).sortable("serialize") + '&update=update' + '&recordPerPage=' + recordPerPage + '&currentPage=' + currentPage;
												$.post(path_ajax_script + "/index.php?mod=cruise&act=ajUpdPosSortCruiseCabin", order,
													function(html) {
														vietiso_loading(0);
														loadMainFormStep(table_id, "cabin");
													});
											}
										});
									</script>
									{/literal}
								</div>
							</div>
						</div>

						{elseif $currentstep=='itinerary'}
						<h3 class="title_box mb10">{$core->get_Lang('itinerary')}
							{assign var= itinerary_cruise value='itinerary_cruise'}
							{assign var= help_first value=$itinerary_cruise}
							{if $CHECKHELP eq 1}
							<button data-key="{$itinerary_cruise}" data-label="{$core->get_Lang('itinerary')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
							{/if}
						</h3>
						<p class="intro_box mb40">{$core->get_Lang('infoaddcruiseitinerary')}</p>
						<div class="form_option_tour">
							<div class="inpt_tour">
								<div class="hastable">
									<table class="tbl-grid table-striped table_responsive" cellspacing="0" width="100%">
										<thead>
											<tr>
												<th class="gridheader name_responsive name_responsive1" style="text-align:left"><strong>{$core->get_Lang('Days')}</strong></th>
												<th class="gridheader hiden_responsive" style="text-align:center; width:160px"><strong>{$core->get_Lang('Meals')}</strong></th>
												<th class="gridheader hiden_responsive" style="text-align:center; width:100px"><strong>{$core->get_Lang('Price (USD)')}</strong></th>
												<th class="gridheader hiden_responsive" style="text-align:center; width:60px"><strong>{$core->get_Lang('status')}</strong></th>
												<th class="gridheader hiden_responsive" style="text-align:center; width:70px">{$core->get_Lang('func')}</th>
											</tr>
										</thead>
										<tbody id="SortAble">
											{section name=i loop=$listCruiseItinerary}
											<tr style="cursor:move" class="{cycle values=" row1,row2"}" id="order_{$listCruiseItinerary[i].cruise_itinerary_id}">
												<td class="text-left name_service">
													<div class="box_name_services">
														<p class="txt_name_services">
															<a title="{$core->get_Lang('edit')}" href="javascript:void()" class="edit_itinerary" data-cruise_itinerary_id="{$listCruiseItinerary[i].cruise_itinerary_id}" data-cruise_id="{$pvalTable}"><strong style="font-size:15px;">{$clsCruiseItinerary->getDuration($listCruiseItinerary[i].cruise_itinerary_id)}</strong></a>
														</p>
														<p class="txt_info">
															{$clsCruiseItinerary->getAllCityAround($listCruiseItinerary[i].cruise_itinerary_id,0,", ")}
														</p>
													</div>
													<button type="button" class="toggle-row inline_block767 top12" style="display:none"><i class="fa fa-caret fa-caret-down"></i></button>
												</td>
												<td class="block_responsive" data-title="{$core->get_Lang('Meals')}" style="text-align:center">
													{$clsCruiseItinerary->getListMealItineraryDay($listCruiseItinerary[i].cruise_itinerary_id)}
												</td>
												<td class="block_responsive" data-title="{$core->get_Lang('Price')}" style="text-align:center">
													{$clsCruiseItinerary->getPriceItinerary($listCruiseItinerary[i].cruise_itinerary_id)}
												</td>
												<td class="block_responsive" data-title="{$core->get_Lang('status')}" style="text-align:center">
													<a href="javascript:void(0);" class="SiteClickPublic" clsTable="CruiseItinerary" pkey="cruise_itinerary_id" sourse_id="{$listCruiseItinerary[i].cruise_itinerary_id}" rel="{$clsCruiseItinerary->getOneField('is_online',$listCruiseItinerary[i].cruise_itinerary_id)}" title="{$core->get_Lang('Click to change status')}">
														{if $clsCruiseItinerary->getOneField('is_online',$listCruiseItinerary[i].cruise_itinerary_id) eq '1'}
														<i class="fa fa-check-circle green"></i>
														{else}
														<i class="fa fa-minus-circle red"></i>
														{/if}
													</a>
												</td>
												<td class="block_responsive" align="center" data-title="{$core->get_Lang('func')}" style="vertical-align: middle; text-align:center; width: 40px; white-space: nowrap;">
													<div class="btn-group-ico">
														{*<a title="{$core->get_Lang('edit')}" href="{$PCMS_URL}/?mod=cruise&act=edit_itinerary&cruise_itinerary_id={$core->encryptID($listCruiseItinerary[i].cruise_itinerary_id)}&cruise_id={$pvalTable}"><i class="ico ico-edit"></i></a>*}
														<a title="{$core->get_Lang('edit')}" href="javascript:void()" class="edit_itinerary" data-cruise_itinerary_id="{$listCruiseItinerary[i].cruise_itinerary_id}" data-cruise_id="{$pvalTable}"><i class="ico ico-edit"></i></a>
														<a title="{$core->get_Lang('delete')}" class="confirm_delete" href="{$PCMS_URL}/?mod=cruise&act=delete_cruise_itinerary&cruise_itinerary_id={$core->encryptID($listCruiseItinerary[i].cruise_itinerary_id)}&cruise_id={$pvalTable}"><i class="ico ico-remove"></i></a>
													</div>
												</td>
											</tr>
											{/section}
										</tbody>
									</table>
								</div>
								{*<a href="{$PCMS_URL}/index.php?mod=cruise&act=edit_itinerary&cruise_id={$pvalTable}" class="btn_additinerary" title="{$core->get_Lang('add new')}">+ {$core->get_Lang('add new')}</a>*}
								<a class="btn_additinerary addItinerary" data-cruise_id="{$pvalTable}" title="{$core->get_Lang('add new')}">+ {$core->get_Lang('add new')}</a>
								{literal}
								<script type="text/javascript">
									$("#SortAble").sortable({
										opacity: 0.8,
										cursor: 'move',
										start: function() {
											vietiso_loading(1);
										},
										stop: function() {
											vietiso_loading(0);
										},
										update: function() {
											var recordPerPage = 1000;
											var currentPage = 1;
											var order = $(this).sortable("serialize") + '&update=update' + '&recordPerPage=' + recordPerPage + '&currentPage=' + currentPage;
											$.post(path_ajax_script + "/index.php?mod=cruise&act=ajUpdPosSortItineraryCruise", order,

												function(html) {
													vietiso_loading(0);
													loadMainFormStep(table_id, "itinerary");
												});
										}
									});
								</script>
								{/literal}
							</div>
						</div>
						{elseif $currentstep=='faservice'}
						{if $clsISO->getCheckActiveModulePackage($package_id,'cruise','property','default','CruiseFacilities')}
						<div class="service_left" style="margin-top:0px">
							<h3 class="title_box mb10">{$core->get_Lang('Cruise Facilities')}
								{assign var= facilities_cruise value='facilities_cruise'}
								{assign var= help_first value=$facilities_cruise}
								{if $CHECKHELP eq 1}
								<button data-key="{$facilities_cruise}" data-label="{$core->get_Lang('Cruise Facilities')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
								{/if}
							</h3>
						</div>
						<div class="service_right ml10">
							{if $lstCruiseFa}
							<div class="checkall" style="margin-bottom:10px">
								{$core->get_Lang('Check/Uncheck All')} <input type="checkbox" rel="fa_ge" id="all_check" style="height:16px">
							</div>
							<ul class="list_style_none margin_0" id="list-general" onClick="loadHelp(this)">
								{section name=i loop=$lstCruiseFa}
								<li><label><input class="fa_ge" type="checkbox" {if $clsISO->checkInArray($oneItem.listCruiseFacilities,$lstCruiseFa[i].cruise_property_id)}checked="checked"{/if} name="listCruiseFacilities[]" value="{$lstCruiseFa[i].cruise_property_id}" style="height:16px"> {$clsCruiseProperty->getTitle($lstCruiseFa[i].cruise_property_id)}</label></li>
								{/section}
								<li><a class="color_f00" href="{$PCMS_URL}/?mod=cruise&act=property&type=CruiseFacilities" title="{$core->get_Lang('Add New')}"><i class="fa fa-plus-circle" aria-hidden="true"></i> <label>{$core->get_Lang('Add New')}</label></a></li>
							</ul>
							{/if}
							<div class="text_help" hidden="">{$clsConfiguration->getValue($facilities_cruise)|html_entity_decode}</div>
						</div>
						<div class="clearfix mb20"></div>
						{/if}

						{*{if $clsISO->getCheckActiveModulePackage($package_id,'cruise','property','default','CruiseServices')}
						<div class="service_left">
							<h3 class="title_box mb10">{$core->get_Lang('Cruise Services')}
								{assign var= services_cruise value='services_cruise'}
								{if $CHECKHELP eq 1}
								<button data-key="{$services_cruise}" data-label="{$core->get_Lang('Cruise Services')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
								{/if}
							</h3>
						</div>
						<div class="service_right ml10">
							{if $lstCruiseService}
							<div class="checkall" style="margin-bottom:10px">
								{$core->get_Lang('Check/Uncheck All')} <input type="checkbox" rel="fa_cs" id="all_check" style="height:16px">
							</div>
							<ul class="list_style_none margin_0" id="list-general" onClick="loadHelp(this)">
								{section name=i loop=$lstCruiseService}
								<li><label><input class="fa_cs" type="checkbox" {if $clsISO->checkInArray($oneItem.listCruiseServices,$lstCruiseService[i].cruise_property_id)}checked="checked"{/if} name="listCruiseServices[]" value="{$lstCruiseService[i].cruise_property_id}" style="height:16px"> {$clsCruiseProperty->getTitle($lstCruiseService[i].cruise_property_id)}</label></li>
								{/section}
								<li><a class="color_f00" href="{$PCMS_URL}/?mod=cruise&act=property&type=CruiseServices" title="{$core->get_Lang('Add New')}"><i class="fa fa-plus-circle" aria-hidden="true"></i> <label>{$core->get_Lang('Add New')}</label></a></li>
							</ul>
							{/if}
							<div class="text_help" hidden="">{$clsConfiguration->getValue($services_cruise)|html_entity_decode}</div>
						</div>
						<div class="clearfix mb20"></div>
						{/if}
						{if $clsISO->getCheckActiveModulePackage($package_id,'cruise','property','default','CruiseFaActivities')}
						<div class="service_left">
							<h3 class="title_box mb10">{$core->get_Lang('Activities on Board')}
								{assign var= activities_on_board_cruise value='activities_on_board_cruise'}
								{if $CHECKHELP eq 1}
								<button data-key="{$activities_on_board_cruise}" data-label="{$core->get_Lang('Activities on Board')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
								{/if}
							</h3>
						</div>
						<div class="service_right ml10">
							{if $lstCruiseFaActivities}
							<div class="checkall" style="margin-bottom:10px">
								{$core->get_Lang('Check/Uncheck All')} <input type="checkbox" rel="fa_ac" id="all_check" style="height:16px">
							</div>

							<ul class="list_style_none margin_0" id="list-general" onClick="loadHelp(this)">
								{section name=i loop=$lstCruiseFaActivities}
								<li><label><input class="fa_ac" type="checkbox" {if $clsISO->checkInArray($oneItem.listCruiseFaActivities,$lstCruiseFaActivities[i].cruise_property_id)}checked="checked"{/if} name="listCruiseFaActivities[]" value="{$lstCruiseFaActivities[i].cruise_property_id}" style="height:16px"> {$clsCruiseProperty->getTitle($lstCruiseFaActivities[i].cruise_property_id)}</label></li>
								{/section}
								<li><a class="color_f00" href="{$PCMS_URL}/?mod=cruise&act=property&type=CruiseFaActivities" title="{$core->get_Lang('Add New')}"><i class="fa fa-plus-circle" aria-hidden="true"></i> <label>{$core->get_Lang('Add New')}</label></a></li>
							</ul>
							{/if}
							<div class="text_help" hidden="">{$clsConfiguration->getValue($activities_on_board_cruise)|html_entity_decode}</div>
						</div>
						{/if}*}

						{elseif $currentstep=='libraryimage'}
						{if $clsISO->getCheckActiveModulePackage($package_id,$mod,'cruise_photo_gallery','customize')}
						{$core->getBlock('box_detail_cruise_image-gallery')}
						{/if}

						{elseif $currentstep=='pre_post_cruise'}
						<div class="box_title_trip_code">
							<div class="row d-flex full-height">
								<div class="form_option_tour">
									<div class="inpt_tour">
										<label for="title">Tour type <span class="required_red">*</span> </label>
										<div class="fieldarea">
											<select name="type" id="cruise_tour_type" style="width: 300px;">
												<option value="">-- Select tour type --</option>
												{foreach from=$arr_type_tour key=key item=item}
												<option value="{$key}">{$item}</option>
												{/foreach}
											</select>
										</div>
									</div>
									<div class="inpt_tour">
										<div class="filterbox border_0">
											<div class="wrap">
												<div class="searchbox searchbox_new">
													<input id="searchkey" placeholder="{$core->get_Lang('searchtour')}" type="text" class="text" style="width:300px" />
													<div class="autosugget" id="autosugget">
														<ul class="HTML_sugget"></ul>
														<div class="clearfix"></div>
														<a class="close_Div">{$core->get_Lang('close')}</a>
													</div>
												</div>
											</div>
										</div>
										<div class="hastable" style="margin-bottom:10px">
											<table class="tbl-grid full-width table-striped table_responsive" cellspacing="0">
												<thead>
													<tr>
														<th class="gridheader boder_top_none" width="50px"><strong>{$core->get_Lang('index')}</strong></th>
														<th class="gridheader boder_top_none" width="110px"><strong>{$core->get_Lang('Type')}</strong></th>
														<th class="gridheader name_responsive text-left boder_top_none"><strong>{$core->get_Lang('nameoftrips')}</strong></th>
														<th class="gridheader text-left hiden_responsive boder_top_none"><strong>{$core->get_Lang('duration')}</strong></th>
														{if $clsConfiguration->getValue('SiteHasCat_Tours')}
														<th class="gridheader text-left hiden_responsive boder_top_none" width="200px">
															<strong>{$core->get_Lang('travelstyles')}</strong>
														</th>
														{/if}
														<th class="gridheader hiden_responsive boder_top_none" width="50px">{$core->get_Lang('func')}</th>
													</tr>
												</thead>
												<tbody id="tblCruiseExtension"></tbody>
											</table>
										</div>
									</div>
								</div>
								<!-- <div class="btn_save_titile_trip_code">
									<a tour_id="{$pvalTable}" cat_run="{$cat_run}" prev_step="{if $child_cat_menu_j_index_prev eq ''}{if $list_cat_menu_prev eq ''}{$child_cat_menu_j}{/if}{if $list_cat_menu_prev ne ''}{$list_cat_menu_prev}/{$child_cat_menu_prev[$count_child_cat_menu_prev]}{/if}{else}{$child_cat_menu_j_index_prev}{/if}" class="back_step">{$core->get_Lang('Back')}</a>
									<a id="btn-save-img-file" tour_id="{$pvalTable}" cat_run="{$cat_run}" status="" present_step="{$child_cat_menu_j}" next_step="{if $child_cat_menu_j_index_next eq ''}{if $list_menu_tour_i_index_next.cat_menu eq ''}SaveAll{/if}{if $list_menu_tour_i_index_next.cat_menu ne ''}{$list_cat_menu_next}/{$child_cat_menu_next[0]}{/if}{else}{$child_cat_menu_j_index_next}{/if}" class="save_and_continue_tour">{$core->get_Lang('Save &amp; Continue')}</a>
								</div> -->
							</div>
						</div>


						{elseif $currentstep=='video'}
						<h3 class="title_box mb0">{$core->get_Lang('Video')}
							{assign var= video_cruise value='video_cruise'}
							{assign var= help_first value=$video_cruise}
							{if $CHECKHELP eq 1}
							<button data-key="{$video_cruise}" data-label="{$core->get_Lang('Video')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
							{/if}
						</h3>
						<p class="intro_box mb40"></p>
						<div class="form_option_tour">
							<div class="inpt_tour">
								<div class="hastable">
									{if !$listCruiseVideo}
									<div class="contingency_table" style="display: none;">
										<p class="title_contingency_table">Contingency table</p>
										<a style="vertical-align:middle" href="{$PCMS_URL}/index.php?mod=cruise&act=edit_cruise_video&cruise_id={$pvalTable}" id="clickToAddItinerary_contingency" class="iso-button-primary fl">+ {$core->get_Lang('add new')}</a>
										<table class="tbl-grid table-striped table_responsive" cellspacing="0" width="100%">
											<thead>
												<tr>
													<th class="gridheader" style="width:60px;text-align:center; "><strong>{$core->get_Lang('ID')}</strong></th>
													<th class="gridheader name_responsive name_responsive1" style="text-align:left"><strong>{$core->get_Lang('title')}</strong></th>
													<th class="gridheader hiden_responsive" style="text-align:center; width:70px"></th>
												</tr>
											</thead>
											<tbody id="tblTourItinerary_contingency" class="ui-sortable" style="">
												<tr class="ui-sortable-handle" style="">
													<td colspan="12">
														<div class="message" style="text-align:center">Không tìm thấy thông tin nào, vui lòng <a href="{$PCMS_URL}/index.php?mod=cruise&act=edit_itinerary&cruise_id={$pvalTable}" class="btn_additinerary" title="{$core->get_Lang('add new')}">+ {$core->get_Lang('add new')}</a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
									{else}
									<table class="full-width tbl-grid table_responsive" cellspacing="0">
										<thead>
											<tr>
												<th class="gridheader hiden767" style="width:60px;text-align:center; "><strong>{$core->get_Lang('ID')}</strong></th>
												<th class="gridheader name_responsive name_responsive1" style="text-align:left"><strong>{$core->get_Lang('title')}</strong></th>
												<th class="gridheader hiden_responsive" style="text-align:center; width:70px"></th>
											</tr>
										</thead>
										<tbody id="SortAble">
											{section name=i loop=$listCruiseVideo}
											<tr style="cursor:move" class="{if $smarty.section.i.index%2 eq 0}row1{else}row2{/if}" id="order-{$listCruiseVideo[i].cruise_video_id}">
												<td class="index hiden767">{$listCruiseVideo[i].cruise_video_id}</td>
												<td class="text-left name_service name_itineerary">
													<a title="{$core->get_Lang('edit')}" href="{$PCMS_URL}/?mod=cruise&act=edit_cruise_video&cruise_video_id={$listCruiseVideo[i].cruise_video_id}&cruise_id={$pvalTable}">
														<strong style="font-size:16px;">{$clsCruiseVideo->getTitle($listCruiseVideo[i].cruise_video_id)}</strong>
													</a>
													{if $listCruiseVideo[i].is_trash eq '1'}<span style="color:#ccc;">[In Trash]</span>{/if}
													<button type="button" class="toggle-row inline_block767 top12" style="display:none"><i class="fa fa-caret fa-caret-down"></i></button>
												</td>
												<td class="block_responsive" data-title="{$core->get_Lang('func')}" style="vertical-align: middle; width: 40px; text-align: right; white-space: nowrap;">
													<div class="btn-group-ico">
														<a title="{$core->get_Lang('edit')}" href="{$PCMS_URL}/?mod=cruise&act=edit_cruise_video&cruise_video_id={$core->encryptID($listCruiseVideo[i].cruise_video_id)}&cruise_id={$pvalTable}"><i class="ico ico-edit"></i></a>
														<a title="{$core->get_Lang('delete')}" class="confirm_delete" href="{$PCMS_URL}/?mod=cruise&act=delete_cruise_video&cruise_video_id={$core->encryptID($listCruiseVideo[i].cruise_video_id)}&cruise_id={$pvalTable}"><i class="ico ico-remove"></i></a>
													</div>
												</td>
											</tr>
											{/section}
										</tbody>
									</table>
									{/if}
									<a href="{$PCMS_URL}/index.php?mod=cruise&act=edit_cruise_video&cruise_id={$pvalTable}" class="btn_additinerary" title="{$core->get_Lang('add new')}">+ {$core->get_Lang('add new')}</a>
								</div>
							</div>
						</div>
						{elseif $currentstep=='pricechild'}
						<div class="box_list_cabin">
							<h3 class="title_box mb10">{$core->get_Lang('Price children')}
								{assign var= cabin_cruise value='cabin_cruise'}
								{assign var= help_first value=$cabin_cruise}
								{if $CHECKHELP eq 1}
								<button data-key="{$cabin_cruise}" data-label="{$core->get_Lang('Cabin')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
								{/if}
							</h3>
							<p class="intro_box mb40">{$core->get_Lang('Child prices apply based on adult prices')}</p>
							<div class="form_option_tour">
								<div class="inpt_tour">
									<div class="hastable">
										<table class="table tbl-grid table-striped table_responsive" cellspacing="0" width="100%">
											<thead>
												<tr>
													<th class="gridheader name_responsive name_responsive4" style="text-align:left"><strong>{$core->get_Lang('Child group')}</strong></th>
													<th class="gridheader hiden_responsive" style="text-align:left; width:200px"><strong>{$core->get_Lang('Price children')}</strong></th>
													<th class="gridheader hiden_responsive" style="text-align:center; width:100px"></th>
												</tr>
											</thead>
											<tbody id="ListCruisePriceChildren">

											</tbody>
										</table>
									</div>
									<a class="btn_additinerary addPriceChild" data-cruise_price_child_id="0" data-cruise_id="{$pvalTable}" title="{$core->get_Lang('add new')}">+ {$core->get_Lang('add')} {$core->get_Lang('price children')}</a>
								</div>
							</div>
						</div>

						{elseif $currentstep=='seo'}
						{$core->getBlock('box_detail_cruise_seotool')}
						{elseif $currentstep=='about'}
						<div class="service_left" style="margin-top:0px">
							<h3 class="title_box mb10">{$core->get_Lang('About')}
								{assign var= about_cruise value='about_cruise'}
								{assign var= help_first value=$about_cruise}
								{if $CHECKHELP eq 1}
								<button data-key="{$about_cruise}" data-label="{$core->get_Lang('About')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
								{/if}
							</h3>
						</div>
						<div class="inpt_tour">
							<textarea style="width:100%" table_id="{$pvalTable}" name="iso-about" class="textarea_intro_editor" data-column="iso-{$currentstep}" id="textarea_intro_editor_overview_{$now}" cols="255" rows="2">{$oneItem.about}</textarea>
						</div>
						{elseif $currentstep=='thingAbout'}
						<div class="service_left" style="margin-top:0px">
							<h3 class="title_box mb10">{$core->get_Lang('Things about')}
								{assign var= thing_about_cruise value='thing_about_cruise'}
								{assign var= help_first value=$thing_about_cruise}
								{if $CHECKHELP eq 1}
								<button data-key="{$thing_about_cruise}" data-label="{$core->get_Lang('Things about')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
								{/if}
							</h3>
						</div>
						<div class="inpt_tour">
							{section name=i loop=$lstThingAbout}
							<label class="col-sm-6 col-md-6 inline mb5" style="font-size:0.9em;display:inline-block"><input type="checkbox" {if $clsISO->checkInArray($clsISO->makeArrayBySlash($oneItem.listThingAbout),$lstThingAbout[i].cruise_property_id)}checked="checked"{/if} name="listThingAbout[]" value="{$lstThingAbout[i].cruise_property_id}" style="height:16px"> &nbsp;{$clsCruiseProperty->getTitle($lstThingAbout[i].cruise_property_id)}</label>
							{/section}
						</div>
						{elseif $currentstep=='importantNotes'}
						<div class="service_left" style="margin-top:0px">
							<h3 class="title_box mb10">{$core->get_Lang('Important Notes')}
								{assign var= important_notes_cruise value='important_notes_cruise'}
								{assign var= help_first value=$important_notes_cruise}
								{if $CHECKHELP eq 1}
								<button data-key="{$important_notes_cruise}" data-label="{$core->get_Lang('Important Notes')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
								{/if}
							</h3>
						</div>
						<div class="inpt_tour">
							<textarea style="width:100%" table_id="{$pvalTable}" name="iso-important_notes" class="textarea_intro_editor" data-column="iso-important_notes" id="textarea_intro_editor_overview_{$now}" cols="255" rows="2">{$oneItem.important_notes}</textarea>
						</div>
						{elseif $currentstep=='inclusions'}
						<div class="service_left" style="margin-top:0px">
							<h3 class="title_box mb10">{$core->get_Lang('Inclusions')}
								{assign var= inclusions_cruise value='inclusions_cruise'}
								{assign var= help_first value=$inclusions_cruise}
								{if $CHECKHELP eq 1}
								<button data-key="{$inclusions_cruise}" data-label="{$core->get_Lang('Inclusions')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
								{/if}
							</h3>
						</div>
						<div class="inpt_tour">
							<textarea style="width:100%" table_id="{$pvalTable}" name="iso-inclusion" class="textarea_intro_editor" data-column="iso-inclusion" id="textarea_intro_editor_overview_{$now}" cols="255" rows="2">{$oneItem.inclusion}</textarea>
						</div>
						{elseif $currentstep=='exclusions'}
						<div class="service_left" style="margin-top:0px">
							<h3 class="title_box mb10">{$core->get_Lang('Exclusions')}
								{assign var= exclusions_cruise value='exclusions_cruise'}
								{assign var= help_first value=$exclusions_cruise}
								{if $CHECKHELP eq 1}
								<button data-key="{$exclusions_cruise}" data-label="{$core->get_Lang('Exclusions')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
								{/if}
							</h3>
						</div>
						<div class="inpt_tour">
							<textarea style="width:100%" table_id="{$pvalTable}" name="iso-exclusion" class="textarea_intro_editor" data-column="iso-exclusion" id="textarea_intro_editor_overview_{$now}" cols="255" rows="2">{$oneItem.exclusion}</textarea>
						</div>
						{elseif $currentstep=='cruisePolicy'}
						<div class="service_left" style="margin-top:0px">
							<h3 class="title_box mb10">{$core->get_Lang('Cruise Policy')}
								{assign var= cruise_policy_cruise value='cruise_policy_cruise'}
								{assign var= help_first value=$cruise_policy_cruise}
								{if $CHECKHELP eq 1}
								<button data-key="{$cruise_policy_cruise}" data-label="{$core->get_Lang('Cruise Policy')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
								{/if}
							</h3>
						</div>
						<div class="inpt_tour">
							<textarea style="width:100%" table_id="{$pvalTable}" name="iso-cruise_policy" class="textarea_intro_editor" data-column="iso-cruise_policy" id="textarea_intro_editor_overview_{$now}" cols="255" rows="2">{$oneItem.cruise_policy}</textarea>
						</div>
						{elseif $currentstep=='bookingPolicy'}
						<div class="service_left" style="margin-top:0px">
							<h3 class="title_box mb10">{$core->get_Lang('Booking Policy')}
								{assign var= booking_policy_cruise value='booking_policy_cruise'}
								{assign var= help_first value=$booking_policy_cruise}
								{if $CHECKHELP eq 1}
								<button data-key="{$booking_policy_cruise}" data-label="{$core->get_Lang('Booking Policy')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
								{/if}
							</h3>
						</div>
						<div class="inpt_tour">
							<textarea style="width:100%" table_id="{$pvalTable}" name="iso-booking_policy" class="textarea_intro_editor" data-column="iso-booking_policy" id="textarea_intro_editor_overview_{$now}" cols="255" rows="2">{$oneItem.booking_policy}</textarea>
						</div>
						{elseif $currentstep=='childPolicy'}
						<div class="service_left" style="margin-top:0px">
							<h3 class="title_box mb10">{$core->get_Lang('Child Policy')}
								{assign var= child_policy_cruise value='child_policy_cruise'}
								{assign var= help_first value=$child_policy_cruise}
								{if $CHECKHELP eq 1}
								<button data-key="{$child_policy_cruise}" data-label="{$core->get_Lang('Child Policy')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
								{/if}
							</h3>
						</div>
						<div class="inpt_tour">
							<textarea style="width:100%" table_id="{$pvalTable}" name="iso-child_policy" class="textarea_intro_editor" data-column="iso-child_policy" id="textarea_intro_editor_overview_{$now}" cols="255" rows="2">{$oneItem.child_policy}</textarea>
						</div>
						{elseif $currentstep=='destination'}
						<div class="inpt_tour">
							<label>
								{$core->get_Lang('destination')}
								<span class="required_red">*</span>
							</label>
							<div class="form-inline select_location_map d-flex">
								<div class="form-group">
									<select class="required form-control slb_Country_Id" name="cruise_country_id" style="width: 300px;height: 100%;margin-right: 5px;">
										{$clsCountry->makeSelectboxOption()}
									</select>
								</div>
								<div class="form-group">
									<button class="btn btn-50 btn-main ajQuickAddDestination" type="button">
										{$core->get_Lang('adddestination')}
									</button>
								</div>
							</div>
							<hr class="clearfix" />
							<div class="mt-half">
								<ul class="list-group" id="lstDestination">
									<li>{$core->get_Lang('Loading')}...</li>
								</ul>
								<div class="clearfix mt-half"></div>
								<span class="help-block text-blue">(<span class="requiredMask">*</span>) {$core->get_Lang('infoless1destination')}</span>
							</div>
						</div>

						{elseif $currentstep eq 'itineraryday-'|cat:$step_id}
						<div class="service_left" style="margin-top:0px">
							<h3 class="title_box mb10">{$core->get_Lang('Config Price')}: {$clsCruiseItinerary->getDuration($step_id)}
								{assign var= config_price_cruise value='config_price_cruise'}
								{assign var= help_first value=$config_price_cruise}
								{if $CHECKHELP eq 1}
								<button data-key="{$config_price_cruise}" data-label="{$core->get_Lang('Booking Policy')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
								{/if}
							</h3>
							<p class="intro_box mb40">{$core->get_Lang('Set the price for your cruise')}</p>
						</div>
						<div class="inpt_tour" id="tblCruisePrice">
						</div>
						{else}
						{$core->getBlock('box_detail_cruise_overview')}
						{/if}
						{if $currentstep != ''}
						<div class="btn_save_titile_table_code mt30">
							<a data-table_id="{$pvalTable}" data-panel="{$arrStep[$step].panel}" data-currentstep="{$arrStep[$step].key}" data-prevstep="{$prevstep}" data-step_id="{$prevstep_id}" class="back_step js_save_back">{$core->get_Lang('Back')}</a>

							<a data-table_id="{$pvalTable}" data-panel="{$arrStep[$step].panel}" data-currentstep="{$currentstep}" data-next_step="{$nextstep}" data-step_id="{$nextstep_id}" class="js_save_continue">{$core->get_Lang('Save &amp; Continue')}</a>
						</div>
						{/if}
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-3 col_instruction" {if $currentstep eq '' }style="display:none" {/if}>
				<div class="instruction_fill_data_box">
					<p class="title_box"><i class="fa fa-question-circle text-red " aria-hidden="true"></i> {$core->get_Lang('Instructions')}</p>
					<div class="content_box">{$clsConfiguration->getValue($help_first)|html_entity_decode}</div>
				</div>
			</div>
		</div>
	</div>
</form>

{literal}
<style>
	.searchbox_new:before {
		content: "";
		position: absolute;
		width: 15px;
		height: 15px;
		left: 15px;
		top: 12px;
	}
</style>
{/literal}

<!-- <script type="text/javascript">
	var list_check_target = {
		$list_check_target
	};
	var pvalTable_ovv = {
		$pvalTable
	};
</script> -->

{literal}
<script>
	if ($('.textarea_intro_editor').length > 0) {
		$('.textarea_intro_editor').each(function() {
			var $_this = $(this);
			var $editorID = $_this.attr('id');
			$('#' + $editorID).isoTextArea();
		});
	}
	$('.toggle-row').click(function() {
		$(this).closest('tr').toggleClass('open_tr');
	});
	// $.each(list_check_target, function(i, val) {
	// 	if (val.status == 1) {
	// 		$('#step_' + val.key).closest('li').removeAttr('class').addClass("check_success");
	// 	} else {
	// 		$('#step_' + val.key).closest('li').removeAttr('class').addClass("check_caution");
	// 	}
	// });

	$(function() {
		$("#searchkey").on('keyup', function(e) {
			e.preventDefault();
			var $_this = $(this),
				$_val = $_this.val();
			console.log($_val);
			console.log(table_id);


			if ($.trim($_val)) {
				clearTimeout(aj_search);
				search_tour();
			} else {
				$("#autosugget").stop(false, true).slideUp();
			}
		});
		loadCruiseExtension(table_id);

		loadListCruiseCountry(table_id);

	});
</script>
{/literal}