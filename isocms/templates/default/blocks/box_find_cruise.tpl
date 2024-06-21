<div class="box_filter_cruise">
	<label for="" class="lbl_filter">{$core->get_Lang('Filter')}:</label>
	<form action="" method="post" id="form_filter_cruise">
		<input type="hidden" value="filter_cruise" name="filter_cruise">
		<div class="box_form">
			<div class="form_input">
				<select class="slb" name="place">
					<option value="">{$core->get_Lang('Start from')}</option>
					{$clsCruiseItinerary->getSelectTripAround($place)}
				</select>
				<i class="fa fa-angle-down" aria-hidden="true"></i>
			</div>
			<div class="form_input">
				<select class="slb" name="star_number">
					<option value="">{$core->get_Lang('Star rating')}</option>
					{$clsISO->makeSelectNumberStart(5,$star_number)}
				</select>
				<i class="fa fa-angle-down" aria-hidden="true"></i>
			</div> 
			<div class="form_input">
				<select class="find_select" name="price_range_ID" id="price_range_ID"> 
					<option value="">{$core->get_Lang('Price')}</option>
					{$clsCruisePriceRange->getSelectPriceRange($price_range_ID)}
				</select>
				<i class="fa fa-angle-down" aria-hidden="true"></i>
			</div>
			{if $act eq 'default'}
				<div class="form_input">
					<select class="find_select" name="cat_ID" id="cat_ID"> 
						<option value="">{$core->get_Lang('Category Cruise')}</option>
						{section name=i loop=$lstCruiseCatSearch}
							<option value="{$lstCruiseCatSearch[i].cruise_cat_id}" {if $cat_ID eq $lstCruiseCatSearch[i].cruise_cat_id}selected{/if}>{$lstCruiseCatSearch[i].title}</option>
						{/section}
					</select>
					<i class="fa fa-angle-down" aria-hidden="true"></i>
				</div>
			{/if}
		</div>
	</form>
</div>