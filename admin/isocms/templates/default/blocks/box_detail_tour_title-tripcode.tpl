<div class="box_title_trip_code">
	<div class="row d-flex full-height">
		<div class="col-md-9">
			<div class="fill_data_box">
				<h3 class="title_box">{$core->get_Lang('Title and trip code')}</h3>
				<div class="form_title_and_trip_code">
					<div class="form-group inpt_tour">
						<label class="col-form-label" for="title">
						{$core->get_Lang('Title')} <span class="required_red">*</span>
						{assign var= title_tour value='title_tour'}
						{if $CHECKHELP eq 1}
						<button data-key="{$title_tour}" data-label="{$core->get_Lang('Title')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
						{/if}
						</label>
						<input class="form-control input-lg input_text_form required" tour_id="{$pvalTable}" type="text" id="title" {if $oneItem.yield_id}readonly{/if} name="title" value="{$clsTour->getTitle($pvalTable)}" placeholder="{$core->get_Lang('New title tour')}" onClick="loadHelp(this)">
						<div class="text_help" hidden="">{$clsConfiguration->getValue($title_tour)|html_entity_decode}</div>
					</div>
					<div class="form-group inpt_tour">
						<label class="col-form-label" for="trip_code">{$core->get_Lang('Trip code')} <span class="required_red">*</span>
						{assign var= titleTrip value='trip_code'}
						{if $CHECKHELP eq 1}
						<button data-key="{$titleTrip}" data-label="{$core->get_Lang('Trip code')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
						{/if}
						</label>
						<p class="not_text_tour">{$core->get_Lang('Add your trip code')}</p>
						<input class="form-control input_text_form w-400px required" tour_id="{$pvalTable}" type="text" id="trip_code" {if $oneItem.yield_id}readonly{/if} name="trip_code" value="{$clsTour->getTripCode($pvalTable)}" placeholder="{$core->get_Lang('Trip Code')}" onClick="loadHelp(this)">
						<div class="text_help" hidden="">{$clsConfiguration->getValue($titleTrip)|html_entity_decode}</div>
					</div>
					{assign var=tms_domain value=$clsConfiguration->getValue($tms_domain)}
{*					{if $tms_domain}*}
{*					<div class="form-group inpt_tour">*}
{*						<label class="col-form-label" for="trip_code">{$core->get_Lang('TravelMaster product code')}*}
{*						{assign var= tms_code value='tms_code'}*}
{*						{if $CHECKHELP eq 1}*}
{*						<button data-key="{$tms_code}" data-label="{$core->get_Lang('TMS code')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>*}
{*						{/if}*}
{*						</label>*}
{*						<p class="not_text_tour">{$core->get_Lang('Add your TMS code')}</p>*}
{*						<input class="form-control input_text_form w-400px" tour_id="{$pvalTable}" type="text" id="tms_code" {if $oneItem.yield_id}readonly{/if} name="tms_code" value="{$clsTour->getTMSCode($pvalTable)}" placeholder="{$core->get_Lang('Trip Code')}" onClick="loadHelp(this)">*}
{*						<div class="text_help" hidden="">{$clsConfiguration->getValue($tms_code)|html_entity_decode}</div>*}
{*					</div>{/if}*}
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
				<div class="content_box">{$clsConfiguration->getValue($title_tour)|html_entity_decode}</div>
			</div>
		</div>
	</div>
</div>