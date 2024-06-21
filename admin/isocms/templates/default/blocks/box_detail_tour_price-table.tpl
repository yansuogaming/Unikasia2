<div class="box_title_trip_code">
	<div class="row d-flex full-height">
		<div class="col-md-9">
			<div class="fill_data_box">
			{if $oneItem.yield_id &&0}
				<h3 class="title_box">{$core->get_Lang('Price table')}
					<a href="javascript:void(0)" class="btn btn-success refreshYieldEstimate" tour_id="{$tour_id}" title="{$core->get_Lang('Sync price')}">{$clsISO->makeIcon('refresh')}</a>
				</h3>
				<div class="box-filter py-2">
					<select id="YieldEstimateTourOp_{$tour_id}" class="FilterYieldEstimate YieldEstimateTourOp" tour_id="{$tour_id}">
						<option value="0">{$core->get_Lang('TimeApply')}</option>
						{section name=i loop=$yieldOp}
						<option {if $smarty.section.i.first}selected="selected"{/if} value="{$yieldOp[i].yield_op_id}">{$clsISO->convertTimeToText($yieldOp[i].start_date)} {$core->get_Lang('to')} {$clsISO->convertTimeToText($yieldOp[i].due_date)}</option>
						{/section}
					</select>
					{assign var=lstCurrency value = $clsVietISOSDK->getProperty('_CRM_CURRENCY')}
					<strong>{$core->get_Lang('Currency')}</strong>:
					<select tour_id="{$tour_id}" class="FilterYieldEstimate yieldCurrency" id="Nett_CRM_CURRENCY_{$tour_id}">
						{foreach from=$lstCurrency item=item name=item}
						<option value="{$item.property_id}" {if $clsISO->getDefaultCurrency() eq $item.property_id}selected="selected"{/if}>{$item.title}</option>
						{/foreach}
					</select>
					{*<strong>{$core->get_Lang('ExchangeRate')}</strong>:*}
					<input type="text" style="width:120px; display: inline-block" value="1" class="form-control FilterYieldEstimate yieldRate" tour_id="{$tour_id}" id="Nett_CRM_Rate_{$tour_id}" readonly /> {$clsISO->getRate()}
				</div>
				<div id="holderTourEstimate_{$tour_id}" style="overflow-x: auto"></div>
				{literal}
				<script type="text/javascript">
					$().ready(function() {
						FilterYieldEstimate({/literal}{$tour_id}{literal});
					});
				</script>
				{/literal}
			{else}
				{if $clsISO->getCheckActiveModulePackage($package_id,'tour','store','default','REVQQVJUVVJFLVZpZXRJU08=')}
					<h3 class="title_box mb10">{$core->get_Lang('Price table')}
						{assign var= price_table_tour value='price_table_tour'}
						{if $CHECKHELP eq 1}
							<button data-key="{$price_table_tour}" data-label="{$core->get_Lang('Price table')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
						{/if}
					</h3>
					<p class="intro_box mb40">{$core->get_Lang('Price_Table_Notes')}</p>
					<div class="form_option_tour">
						<div class="inpt_tour p-b-30">
							<div class="form-group">
								<div id="TourPriceGroupNoDeparture">
									Loading...
								</div>
							</div>
							<div class="form-group row">
								<label class="col-md-2 col-form-label"><strong>{$core->get_Lang('Deposit')}</strong></label>
								<div class="col-xs-12 col-md-2">
									<div class="input-group">
										<input type="text" class="form-control fontLarge deposit_tour_group" tour_id="{$pvalTable}" value="{$oneItem.deposit}"/>
										<span class="input-group-addon">%</span>
									</div>
								</div>
							</div>
							{*<div class="form-group row">
								<label class="col-md-3 col-form-label"><strong>{$core->get_Lang('Deposit payment term')}</strong><br>({$core->get_Lang('Before using the service')})</label>
								<div class="col-xs-12 col-md-2">
									<div class="input-group">
										<select name="payments_term_deposit" id="" class="iso-selectbox">
											{section name=i start=1 loop=11 step=1}
												<option value="{$smarty.section.i.index}" {if $oneItem.payments_term_deposit eq $smarty.section.i.index}selected{/if}> {$smarty.section.i.index} {if $smarty.section.i.index eq 1}{$core->get_Lang('day')}{else}{$core->get_Lang('days')}{/if}</option>
											{/section}
										</select>
									</div>
								</div>
							</div>*}
						</div>
					</div>
					<div class="btn_save_titile_trip_code">
						<a tour_id="{$pvalTable}" cat_run="{$cat_run}" prev_step="{if $child_cat_menu_j_index_prev eq ''}{if $list_cat_menu_prev eq ''}{$child_cat_menu_j}{/if}{if $list_cat_menu_prev ne ''}{$list_cat_menu_prev}/{$child_cat_menu_prev[$count_child_cat_menu_prev]}{/if}{else}{$child_cat_menu_j_index_prev}{/if}" class="back_step">{$core->get_Lang('Back')}</a>
						<a id="btn-save-img-file"  tour_id="{$pvalTable}" cat_run="{$cat_run}" status="" present_step="{$child_cat_menu_j}" next_step="{if $child_cat_menu_j_index_next eq ''}{if $list_menu_tour_i_index_next.cat_menu eq ''}SaveAll{/if}{if $list_menu_tour_i_index_next.cat_menu ne ''}{$list_cat_menu_next}/{$child_cat_menu_next[0]}{/if}{else}{$child_cat_menu_j_index_next}{/if}" class="save_and_continue_tour">{$core->get_Lang('Save &amp; Continue')}</a>
					</div>
					{literal}
						<script type="text/javascript">
							$(document).ready(function(){
								loadTourPriceGroupNoDeparture();
							});
							$(document).on('change', '.deposit_tour_group', function(ev){
								var $_this = $(this);
								$.ajax({
									type: "POST",
									url: path_ajax_script+"/?mod="+mod+"&act=ajLoadTourPriceGroup&lang="+LANG_ID,
									data:{
										'tour_id':$_this.attr("tour_id"),
										"deposit":$_this.val(),
										'tp' : 'Save_Deposit'
									},
									dataType: "html",
									success: function(html){
										var htm = html.split('|||');
										$_this.val(htm[1]);
										vietiso_loading(2);
									}
								});
							});
						</script>
					{/literal}
				{else}
				<h3 class="title_box">{$core->get_Lang('Price table')}</h3>
				<div class="form_option_tour">
					<div class="inpt_tour p-b-30">
						<div id="TourPriceGroupNoDeparture"></div>
						<div class="row-span">
							<div class="fieldlabel" style="width:100px">{$core->get_Lang('Deposit')}</div>
							<div class="fieldarea" style="width:auto; float:left">
								<input type="text" class="text fontLarge deposit_tour_group" tour_id="{$pvalTable}" value="{$oneItem.deposit}"/>(%)
							</div>
						</div>
					</div>
				</div>
				<div class="btn_save_titile_trip_code">
					<a tour_id="{$pvalTable}" cat_run="{$cat_run}" prev_step="{if $child_cat_menu_j_index_prev eq ''}{if $list_cat_menu_prev eq ''}{$child_cat_menu_j}{/if}{if $list_cat_menu_prev ne ''}{$list_cat_menu_prev}/{$child_cat_menu_prev[$count_child_cat_menu_prev]}{/if}{else}{$child_cat_menu_j_index_prev}{/if}" class="back_step">{$core->get_Lang('Back')}</a>
					<a id="btn-save-img-file"  tour_id="{$pvalTable}" cat_run="{$cat_run}" status="" present_step="{$child_cat_menu_j}" next_step="{if $child_cat_menu_j_index_next eq ''}{if $list_menu_tour_i_index_next.cat_menu eq ''}SaveAll{/if}{if $list_menu_tour_i_index_next.cat_menu ne ''}{$list_cat_menu_next}/{$child_cat_menu_next[0]}{/if}{else}{$child_cat_menu_j_index_next}{/if}" class="save_and_continue_tour">{$core->get_Lang('Save &amp; Continue')}</a>
				</div>
				{literal}
					<script type="text/javascript">
						$(".chosen-select").chosen({
							max_selected_options: 10,
							width: '100%'
						});

						$(document).ready(function(){
							loadTourPriceGroupNoDeparture();
						});
						$(document).on('change', '.deposit_tour_group', function(ev){
							var $_this = $(this);
							$.ajax({
								type: "POST",
								url: path_ajax_script+"/?mod="+mod+"&act=ajLoadTourPriceGroup&lang="+LANG_ID,
								data:{
									'tour_id':$_this.attr("tour_id"),
									"deposit":$_this.val(),
									'tp' : 'Save_Deposit'
								},
								dataType: "html",
								success: function(html){
									var htm = html.split('|||');
									$_this.val(htm[1]);
									vietiso_loading(2);
								}
							});
						});
					</script>
				{/literal}
			{/if}
<script>
    var is_depart = {$clsISO->getCheckActiveModulePackage($package_id,'tour','store','default','REVQQVJUVVJFLVZpZXRJU08=')};
    var is_check_depart = {$clsTourStore->checkExist($pvalTable,DEPARTURE)};
</script>
{/if}
			</div>
		</div>
		<div class="col-md-3">
			<div class="instruction_fill_data_box">
				<p class="title_box"><i class="fa fa-question-circle text-red " aria-hidden="true"></i> {$core->get_Lang('Instructions')}</p>
				<div class="content_box">
					<p class="mb0">{$clsConfiguration->getValue($price_table_tour)|html_entity_decode}</p>
				</div>
			</div>
		</div>
	</div>
</div>