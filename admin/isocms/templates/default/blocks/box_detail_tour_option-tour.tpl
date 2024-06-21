<div class="box_title_trip_code">
	<div class="row d-flex full-height">
		<div class="col-md-9">
			<div class="fill_data_box">
				<h3 class="title_box">{$core->get_Lang('Option tour')}</h3>
				<div class="form_option_tour">
					{if 1==2}
					<div class="inpt_tour">
						<label for="title">{$core->get_Lang('Tour Type')}{$clsISO->makeIcon('compress','','ml-2')} <span class="required_red">*</span></label>
						{if $oneItem.yield_id}
							{if $oneItem.tour_option_id eq 1}S.I.C{/if}
							{if $oneItem.tour_option_id eq 3}F.I.T{/if}
						{else}
						<p class="not_text_tour">{$core->get_Lang('Chosse Tour Type')}</p>
						<div id="slb_ContainerTourCategory">
							<select name="tour_option_id" id="tour_option_id" class="text_32 border_aaa required" style="width:250px">
								<option value="">{$core->get_Lang('Select')}</option>
								<option value="1" {if $oneItem.tour_option_id eq 1}selected{/if}>S.I.C</option>
								<option value="3" {if $oneItem.tour_option_id eq 3}selected{/if}>F.I.T</option>
							</select>
						</div>
						{/if}
					</div>
					{/if}
					{if $clsISO->getCheckActiveModulePackage($package_id,$mod,'group','default') && $_LANG_ID eq 'vn'}
					<div class="form-group inpt_tour">
						<label class="col-form-label">{$core->get_Lang('tourgroup')}</label>
						<div class="fieldarea">
							<select name="tour_group_id" class="slb full" id="slb_TourGroup" tp="multiple" style="width:260px;">
								{$clsTourGroup->makeSelectboxOption($tour_group_id)}
							</select>
						</div>
					</div>
					{/if}
					<div class="form-group inpt_tour">
						<label class="col-form-label">{$core->get_Lang('Travel style')} <span class="required_red">*</span>
							{assign var= travel_style_tour value='travel_style_tour'}
							{if $CHECKHELP eq 1}
							<button data-key="{$travel_style_tour}" data-label="{$core->get_Lang('Travel style')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
							{/if}
						</label>
						<p class="help-block"></p>
						<div class="admin-toolbar-action">
							<a href="{$PCMS_URL}/?mod=tour_exhautive&act=category" target="_blank" style="text-decoration: underline">{$core->get_Lang('Change')}</a>
						</div>
						<div id="slb_ContainerTourCategory" onClick="loadHelp(this)">
							<select name="cat_id[]" id="cat_id" class="required full-width chosen-select" multiple="multiple">
								{assign var = selected value = $oneItem.list_cat_id}
								{$clsTourCategory->makeSelectboxOption($oneItem.list_cat_id, $selected, 1,0,0)}
								{$selected}
							</select>
							<div class="text_help" hidden="">{$clsConfiguration->getValue($travel_style_tour)|html_entity_decode}</div>
						</div>
					</div>
					<div class="clearfix"></div>
					{*<div class="form-group inpt_tour">
						<label class="col-form-label">{$core->get_Lang('Tag')} <span class="required_red">*</span>
							{assign var= tag_tour value='tag_tour'}
							{if $CHECKHELP eq 1}
							<button data-key="{$tag_tour}" data-label="{$core->get_Lang('Tag')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
							{/if}
						</label>
						<p class="help-block"></p>
						<div class="admin-toolbar-action">
							<a href="javascript:void(0)" class="btn btn-default mr-2 addTag" tour_id="{$pvalTable}" title="Thêm">{$clsISO->makeIcon('plus', $core->get_Lang('Add'))}</a>
						</div>
						<div id="slb_ContainerTourtag">
							<div id="slb_ContainerTourTag" onClick="loadHelp(this)">
								<select name="tag_id[]" id="tag_id" class="full-width chosen-select required" multiple="multiple">
									{assign var = selected value = $oneItem.list_tag_id}
									{$clsTag->makeSelectboxOption($selected,0)}
									{$selected}
								</select>
								<div class="text_help" hidden="">{$clsConfiguration->getValue($tag_tour)|html_entity_decode}</div>
							</div>
						</div>
					</div>*}
					{if $clsISO->getCheckActiveModulePackage($package_id,$mod,'tour_departure_point','customize')}
					<div class="form-group inpt_tour">
						<label class="col-form-label">{$core->get_Lang('Departure Point')} <span class="required_red">*</span>
						{assign var= departure_point_tour value='departure_point_tour'}
							{if $CHECKHELP eq 1}
							<button data-key="{$departure_point_tour}" data-label="{$core->get_Lang('Departure Point')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
							{/if}
						</label>
						<p class="help-block">{$core->get_Lang('ex')}: Ha Noi, Ho Chi Minh City, Da Nang</p>
						<div id="slb_ContainerDepartPoint" onClick="loadHelp(this)">
							<select name="departure_point_id[]" id="departure_point_id" class="full-width chosen-select required" multiple="multiple">
								{assign var = selected value = $oneItem.list_departure_point_id}
								{$clsCity->getSelectMultiDeparturePoint($tour_group_id,$selected,0)}
								{$selected}
							</select>
							<div class="text_help" hidden="">{$clsConfiguration->getValue($departure_point_tour)|html_entity_decode}</div>
						</div>
					</div>
					{/if}
					<div class="form-group inpt_tour">
						<label class="col-form-label">{$core->get_Lang('Departure time')} <span class="required_red">*</span></label>
						<div id="departureTime" onClick="loadHelp(this)">
							<select name="month_id[]" id="month_id" class="full-width chosen-select required" multiple="multiple">
								{assign var = selected value = $oneItem.list_month_id}
								{$clsMonth->getSelectMultiMonth($selected,0)}
							</select>
						</div>
					</div>
					<div class="form-group inpt_tour">
						<label class="col-form-label">{$core->get_Lang('Tour guide')} <span class="required_red">*</span></label>
						<p class="help-block"></p>
						<div id="slb_ContainerTourCategory">
							<span class="check_all_select fr" style="margin-bottom:10px;cursor: pointer">{$core->get_Lang('Select all')}</span>
							<select name="tour_guide_id[]" id="tour_guide_id" class="required full-width chosen-select" multiple="multiple">
								{assign var = selected value = $oneItem.list_tour_guide_id}
								{$clsTourProperty->makeSelectboxOption($selected, 1)}
							</select>
						</div>
					</div>
					<div class="form-group inpt_tour" id="box_input_room">
						<label class="col-form-label">{$core->get_Lang('Room')}</label>
						<p class="help-block"></p>
						<div id="slb_ContainerTourCategory">
							<span class="check_all_select fr" style="margin-bottom:10px;cursor: pointer">{$core->get_Lang('Select all')}</span>
							<select name="tour_room_id[]" id="tour_room_id" class="full-width chosen-select" multiple="multiple">
								{assign var = selected value = $oneItem.list_tour_room_id}
								{$clsTourProperty->makeSelectboxOption($selected, 1,'TOURROOM')}
							</select>
						</div>
					</div>
				</div>
				<div class="btn_save_titile_trip_code">
					<a tour_id="{$pvalTable}" cat_run="{$cat_run}" prev_step="{if $child_cat_menu_j_index_prev eq ''}{if $list_cat_menu_prev eq ''}{$child_cat_menu_j}{/if}{if $list_cat_menu_prev ne ''}{$list_cat_menu_prev}/{$child_cat_menu_prev[$count_child_cat_menu_prev]}{/if}{else}{$child_cat_menu_j_index_prev}{/if}" class="back_step">{$core->get_Lang('Back')}</a>
					<a id="btn-save-img-file"  tour_id="{$pvalTable}" cat_run="{$cat_run}" status="" present_step="{$child_cat_menu_j}" next_step="{if $child_cat_menu_j_index_next eq ''}{if $list_menu_tour_i_index_next.cat_menu eq ''}SaveAll{/if}{if $list_menu_tour_i_index_next.cat_menu ne ''}{$list_cat_menu_next}/{$child_cat_menu_next[0]}{/if}{else}{$child_cat_menu_j_index_next}{/if}" class="save_and_continue_tour">{$core->get_Lang('Save &amp; Continue')}</a>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="instruction_fill_data_box">
				<p class="title_box"><i class="fa fa-question-circle text-red " aria-hidden="true"></i> {$core->get_Lang('Instructions')}</p>
				<div class="content_box">{$clsConfiguration->getValue($travel_style_tour)|html_entity_decode}</div>
			</div>
		</div>
	</div>
</div>
{literal}
	<script>
		$_document.on('click','.check_all_select',function(ev){
			console.log('sss');
			$(this).closest(".form-group").find("select option:not([value='0'])").attr("selected","selected");
			$(this).closest(".form-group").find("select").trigger("chosen:updated");
		});
	</script>
{/literal}