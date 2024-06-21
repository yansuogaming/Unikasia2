<div class="box_title_trip_code">
	<div class="row d-flex full-height">
		<div class="col-md-12">
			<div class="fill_data_box">
				<h3 class="title_box mb05">{$core->get_Lang('Departure Schedule')}</h3>
				<p class="help-block text-muted ">{$core->get_Lang('Departure_Schedule_Notes')}</p>
				<div class="admin-toolbar-action">
					<a href="javascript:void(0)" class="btn btn-warning mr-2" onClick="open_departure_date(this)" openFrom="general" tour_id="{$pvalTable}" date_id="0" title="{$core->get_Lang('Add Departure')}">{$clsISO->makeIcon('plus', $core->get_Lang('Add Departure'))}</a>
				</div>
				<div class="form_option_tour mt-40">
					<div class="calendar" id="calendar"></div>
				</div>
			</div>
		</div>
	</div>
</div>