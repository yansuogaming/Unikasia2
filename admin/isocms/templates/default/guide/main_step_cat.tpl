<form method="post" accept-charset="UTF-8" enctype="multipart/form-data">
	<div class="box_main_step_content">
		<div class="row d-flex flex-wrap full-height">
			<div class="col-xs-12 col-sm-12 col-md-9">
				<div class="fill_data_box">
					<div class="form_title_and_table_code">
						{if $currentstep=='image'}
						{assign var= image_detail value='image_guideCat'}
						{$core->getBlock('box_detail_image')}

						{elseif $currentstep=='basic'}
						<h3 class="title_box">{$core->get_Lang('Basic')}</h3>

						{if $type eq 'cat'}
						<div class="inpt_tour">
							<label for="title">{$core->get_Lang('Name')} <span class="required_red">*</span>
								{assign var= title_guideCat value='title_guideCat'}
								{assign var= help_first value=$title_guideCat}
								{if $CHECKHELP eq 1}
								<button data-key="{$title_guideCat}" data-label="{$core->get_Lang('Name')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
								{/if}
							</label>
							<input class="input_text_form input-title required" data-table_id="{$pvalTable}" name="title" value="{$clsClassTable->getTitle($pvalTable)}" maxlength="255" type="text" onClick="loadHelp(this)" />
							<div class="text_help" hidden="">{$clsConfiguration->getValue($title_guideCat)|html_entity_decode}</div>
						</div>
						{elseif $type eq 'trvg_country'}
						<div class="inpt_tour">
							<label for="country_id">{$core->get_Lang('Country')} <span class="required_red">*</span>
							</label>
							<div class="fieldarea">
								<select class="slb full glSlBox required" name="iso-country_id" id="">
									{$clsCountry->makeSelectboxOption($oneItem.country_id)}
								</select>
							</div>
						</div>
						<div class="inpt_tour">
							<label for="guidecat_id">{$core->get_Lang('Category')} <span class="required_red">*</span>
							</label>
							<div class="fieldarea">
								<select class="slb full glSlBox required" name="iso-guidecat_id" id="">
									{$clsGuideCat->makeSelectboxOption(0, $oneItem.guidecat_id)}
								</select>
							</div>
						</div>
						<div class="inpt_tour">
							<label for="content">{$core->get_Lang('Description')}
							</label>
							<textarea style="width:100%" table_id="{$pvalTable}" name="iso-content" class="textarea_intro_editor" data-column="iso-content" id="textarea_intro_editor_overview_{$now}" cols="255" rows="2">{$oneItem.content}</textarea>
							{literal}
							<script>
								$(".showdate").datepicker({
									dateFormat: "dd/mm/yy"
								});
							</script>
							{/literal}
						</div>
						<div class="box_title_trip_code">
							<div class="row d-flex full-height">
								<div class="col-md-12">
									<div class="">
										<div class="form-group inpt_tour">
											<label class="col-form-label" for="title">
												{$core->get_Lang('Banner Size')}
											</label>
											<div class="row">
												<div class="col-xs-12 col-md-5">
													<div class="drop_gallery" onClick="loadHelp(this)">
														<div class="filedrop full" onClick="file_explorer(this,event);" ondrop="file_drop(this,event)" toid="selectFile" toel="isoman_show_image" data-options='{ldelim}"openFrom":"image","clsTable":"GuideCatStore", "table_id":"{$pvalTable}","toId":"isoman_show_image" {rdelim}' ondragover="return false">
															<h3>{$core->get_Lang('Drop files to upload')}</h3>
															<p>Kích thước (WxH=1920x600)<br />
																Các loại tệp được hỗ trợ là: .png,.jpg,.jpeg</p>
															<button type="button" class="btn btn-upload">{if $oneItem.image}Thay ảnh{else}Tải ảnh lên{/if}</button>
														</div>
														<input class="hidden" id="selectFile" type="file" data-options='{ldelim}"openFrom":"image","clsTable":"GuideCatStore", "table_id":"{$pvalTable}","toId":"isoman_show_image"{rdelim}' name="image">

														<input type="hidden" value="{$oneItem.image}" name="image" id="image" />
														<a table_id="{$pvalTable}" isoman_multiple="0" isoman_callback='isoman_callback({ldelim}"openFrom":"image", "clsTable":"GuideCatStore", "pvalTable":"{$pvalTable}","toField":"image","toId":"isoman_show_image"{rdelim})' class="btn-upload-2 ajOpenDialog" isoman_for_id="image" isoman_name="image">{$clsISO->makeIcon('folder-o', $core->get_Lang('From library'))}</a>
														<div class="text_help" hidden="">{$clsConfiguration->getValue($banner_guideCat)|html_entity_decode}</div>
													</div>
												</div>
												<div class="col-xs-12 col-md-12">
													<img class="img-responsive radius-3" id="isoman_show_image" src="{$clsClassTable->getImage($pvalTable,1920,480)}" onerror="this.src='{$URL_IMAGES}/none_image.png'" alt="{$core->get_Lang('image')}" style="width:100%; height:334px" />
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						{/if}

						{elseif $currentstep=='intro'}
						<div class="inpt_tour">
							<h3 class="title_box">{$core->get_Lang('Description')}
								{assign var= shortText_guide value='shortText_guide'}
								{assign var= help_first value=$shortText_guide}
								{if $CHECKHELP eq 1}
								<button data-key="{$shortText_guide}" data-label="{$core->get_Lang('Description')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
								{/if}
							</h3>
							<textarea style="width:100%" table_id="{$pvalTable}" name="iso-intro" class="textarea_intro_editor" data-column="iso-intro" id="textarea_intro_editor_overview_{$now}" cols="255" rows="2">{$oneItem.intro}</textarea>
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
								{assign var= longText_guide value='longText_guide'}
								{assign var= help_first value=$longText_guide}
								{if $CHECKHELP eq 1}
								<button data-key="{$longText_guide}" data-label="{$core->get_Lang('Long text')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
								{/if}
							</h3>
							<textarea style="width:100%" table_id="{$pvalTable}" name="iso-content" class="textarea_intro_editor" data-column="iso-content" id="textarea_intro_editor_overview_{$now}" cols="255" rows="2">{$oneItem.content}</textarea>
							{literal}
							<script>
								$(".showdate").datepicker({
									dateFormat: "dd/mm/yy"
								});
							</script>
							{/literal}
						</div>
						{elseif $currentstep=='banner'}
						{$core->getBlock('box_detail_guideCat_banner')}
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
</script>
{/literal}