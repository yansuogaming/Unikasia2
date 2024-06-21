<div class="box_title_trip_code">
	<div class="row d-flex full-height">
		<div class="col-md-9">
			<div class="fill_data_box">
				<h3 class="title_box mb0">{$core->get_Lang('Itinerary')}
				{assign var= itinerary_tour value='itinerary_tour'}
				{if $CHECKHELP eq 1}
				<button data-key="{$itinerary_tour}" data-label="{$core->get_Lang('Itinerary')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
				{/if}
				</h3>
				<p class="intro_box mb40">{$core->get_Lang('introitinerary')}</p>
				<div class="form_option_tour">
					{if $clsConfiguration->getValue('SiteHasItineraryTours')}
					<div class="inpt_tour">
						<div class="hastable">
							<div class="contingency_table" style="display: none;">
								<p class="title_contingency_table">{$core->get_Lang('Contingency table')}</p> <a style="vertical-align:middle" href="javascript:void(0);" id="clickToAddItinerary_contingency" class="iso-button-primary fl"><i class="icon-plus-sign"></i>&nbsp;&nbsp;{$core->get_Lang('Add Contingency')}</a>
								<table class="full-width tbl-grid" cellspacing="0">
									<thead>
										<tr>
											{if $clsClassTable->getOneField('duration_type',$pvalTable) eq 0}
											<th class="gridheader" style="width:100px"><strong>{$core->get_Lang('day')}</strong></th>
											{/if}
											<th class="gridheader name_responsive name_responsive2" style="text-align:left"><strong>{$core->get_Lang('Title')}</strong></th>
											<th class="gridheader hiden_responsive" style="text-align:left; width: 190px;"><strong>{$core->get_Lang('Meals')}</strong></th>
											<th class="gridheader hiden_responsive" style="width: 50px"></th>
										</tr>
									</thead>
									<tbody id="tblTourItinerary_contingency"></tbody>
								</table>
							</div>
							<table class="full-width tbl-grid table-striped table_responsive" cellspacing="0">
								<thead>
								<tr>
									{if $clsClassTable->getOneField('duration_type',$pvalTable) eq 0}
									<th class="gridheader" style="width:100px"><strong>{$core->get_Lang('day')}</strong></th>
									{/if}
									<th class="gridheader name_responsive name_responsive2" style="text-align:left"><strong>{$core->get_Lang('Title')}</strong></th>
									<th class="gridheader hiden_responsive" style="text-align:left; width: 190px;"><strong>{$core->get_Lang('Meals')}</strong></th>
									<th class="gridheader hiden_responsive" style="width: 50px"></th>
								</tr>
								</thead>
								<tbody id="tblTourItinerary"></tbody>
							</table>
						</div>
						{if $clsClassTable->checkTourItinerary($pvalTable)}

						{else}
						<a href="javascript:void(0);" id="clickToAddItinerary" class="btn_additinerary" title="{$core->get_Lang('additinerary')}">+ {$core->get_Lang('additinerary')}</a>
						{/if}
					</div>
					{/if}
					<div class="btn_save_titile_trip_code">
						<a tour_id="{$pvalTable}" cat_run="{$cat_run}" prev_step="{if $child_cat_menu_j_index_prev eq ''}{if $list_cat_menu_prev eq ''}{$child_cat_menu_j}{/if}{if $list_cat_menu_prev ne ''}{$list_cat_menu_prev}/{$child_cat_menu_prev[$count_child_cat_menu_prev]}{/if}{else}{$child_cat_menu_j_index_prev}{/if}" class="back_step">{$core->get_Lang('Back')}</a>
						<a id="btn-save-img-file"  tour_id="{$pvalTable}" cat_run="{$cat_run}" status="" present_step="{$child_cat_menu_j}" next_step="{if $child_cat_menu_j_index_next eq ''}{if $list_menu_tour_i_index_next.cat_menu eq ''}SaveAll{/if}{if $list_menu_tour_i_index_next.cat_menu ne ''}{$list_cat_menu_next}/{$child_cat_menu_next[0]}{/if}{else}{$child_cat_menu_j_index_next}{/if}" class="save_and_continue_tour">{$core->get_Lang('Save &amp; Continue')}</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="instruction_fill_data_box">
				<p class="title_box"><i class="fa fa-question-circle text-red " aria-hidden="true"></i> {$core->get_Lang('Instructions')}</p>
				<div class="content_box">
					<p class="mb0">{$clsConfiguration->getValue($itinerary_tour)|html_entity_decode}</p>
				</div>
			</div>
		</div>
	</div>
</div>
{literal}
<script>
	loadTourItinerary($tour_id);
	loadTourItineraryContingency(tour_id);
</script>
{/literal}