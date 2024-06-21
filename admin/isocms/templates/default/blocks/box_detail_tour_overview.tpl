<div class="box_title_trip_code">
    <div class="form_title_and_trip_code">
		<div class="overview_box congratulations">
			<h2>{$core->get_Lang('Congratulations')}!</h2>
			<p class="text">Bây giờ bạn có thể bắt đầu bán trải nghiệm của mình</p>
			<div class="toggle_opt btn_online action_tour">
                <div class="box_status_switch" >
					{if $oneItem.is_online ne 1}
						<span class="txt_status_switch private">{$core->get_Lang('Private')}</span>
					{else}
						<span class="txt_status_switch public">{$core->get_Lang('Public')}</span>
					{/if}
					<label class="switch_public switch" data-clstable="Tour" data-pkey="{$clsClassTable->pkey}" data-sourse_id="{$pvalTable}">
					  <input type="checkbox" name="is_online" value="1" {if $oneItem.is_online eq 1}checked{/if}>
					  <span class="slider round"></span>
					</label>
				</div>
			</div>
		</div>
		<div class="overview_box tour_info_re" id="tour_info_re">
			<h2>{$core->get_Lang('Tour infomation recommendations')}</h2>
			<p class="text">Đề xuất này là tùy chọn và có thể tăng chất lượng trải nghiệm của bạn.</p>
			<div class="box_content_overview link_caution_up in">
				<ul class="list_link"></ul>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="overview_box_2 tour_info_re" id="tour_info_re">
					<h2>{$core->get_Lang('Travel style')}</h2>
					<div class="body_show">
						<div class="box-item">
							<h3 class="box-title d-flex justify-content-between align-items-center">
								<span>{$core->get_Lang('Travel style')}</span>
								<a class="link_open" href="{$PCMS}/admin/tour/edit/{$pvalTable}/basic/option-tour">
									<i class="ico ico-view_link"></i>
								</a>
							</h3>
							{if $lst_travel_style_overview }
							<p class="text">
								{section name=i loop=$lst_travel_style_overview}
								{$clsTourCategory->getTitle($lst_travel_style_overview[i])}{if !$smarty.section.i.last};{/if}
								{/section}
							</p>
							{else}
							<p class="text">{$core->get_Lang('No Travel style selected')}</p>
							{/if}
						</div>
						{*<div class="box-item">
							<h3 class="box-title d-flex justify-content-between align-items-center">
								<span>{$core->get_Lang('Tag')}</span>
								<a class="link_open" href="{$PCMS}/admin/tour/edit/{$pvalTable}/basic/option-tour">
									<i class="ico ico-view_link"></i>
								</a>
							</h3>
							{if $lst_tag_overview }
							<p class="text">
								{section name=i loop=$lst_tag_overview}
								{$clsTag->getTitle($lst_tag_overview[i])}{if !$smarty.section.i.last};{/if}
								{/section}
							</p>
							{else}
							<p class="text">{$core->get_Lang('No Tag selected')}</p>
							{/if}
						</div>*}
						<div class="box-item">
							<h3 class="box-title d-flex justify-content-between align-items-center">
								<span>{$core->get_Lang('Departure point')}</span>
								<a class="link_open" href="{$PCMS}/admin/tour/edit/{$pvalTable}/basic/option-tour">
									<i class="ico ico-view_link"></i>
								</a>
							</h3>
							{if $lst_departure_point_overview }
							<p class="text">
								{section name=i loop=$lst_departure_point_overview}
								{$clsCity->getTitle($lst_departure_point_overview[i])}{if !$smarty.section.i.last};{/if}
								{/section}
							</p>
							{else}
							<p class="text">{$core->get_Lang('No Departure point selected')}</p>
							{/if}
						</div>
                        {if $clsISO->getCheckActiveModulePackage($package_id,'property','activities','default')}
						<div class="box-item">
							<h3 class="box-title d-flex justify-content-between align-items-center">
								<span>{$core->get_Lang('Activities tour')}</span>
								<a class="link_open" href="{$PCMS}/admin/tour/edit/{$pvalTable}/basic/activities-tour">
									<i class="ico ico-view_link"></i>
								</a>
							</h3>
							{if $lst_activities_overview }
							<p class="text">
								{section name=i loop=$lst_activities_overview}
								{$clsActivities->getTitle($lst_activities_overview[i])}{if !$smarty.section.i.last};{/if}
								{/section}
							</p>
							{else}
							<p class="text">{$core->get_Lang('No Activities tour selected')}</p>
							{/if}
						</div>
                        {/if}
						<div class="box-item">
							<h3 class="box-title d-flex justify-content-between align-items-center">
								<span>{$core->get_Lang('Duration')}</span>
								<a class="link_open" href="{$PCMS}/admin/tour/edit/{$pvalTable}/basic/duration-tour">
									<i class="ico ico-view_link"></i>
								</a>
							</h3>
							{if $oneItem.number_day>0 || $oneItem.number_night>0 || $oneItem.dra_hours>0 || $oneItem.dra_min>0}
								<p class="text">{$oneItem.number_day} {$core->get_Lang('days')} {$oneItem.number_night} {$core->get_Lang('nights')} {if $oneItem.dra_hours>0}{$oneItem.dra_hours} {$core->get_Lang('Hours')}{/if} {if $oneItem.dra_min>0}{$oneItem.dra_min} {$core->get_Lang('Minutes')}{/if}</p>
							{else}
								<p class="text">{$core->get_Lang('No Duration selected')}</p>
							{/if}
						</div>
						<div class="box-item">
							<h3 class="box-title d-flex justify-content-between align-items-center">
								<span>{$core->get_Lang('Tour related')}</span>
								<a class="link_open" href="{$PCMS}/admin/tour/edit/{$pvalTable}/configuration/related_tours">
									<i class="ico ico-view_link"></i>
								</a>
							</h3>
							{if $count_relate>0}
								<p class="text">{$count_relate} {$core->get_Lang('tour related for this tour')}</p>
							{else}
								<p class="text">{$core->get_Lang('No tour related selected')}</p>
							{/if}
						</div>
					</div>
				</div>
				<div class="overview_box_2 tour_itinerary" id="tour_itinerary">
					<h2 class="headeing d-flex justify-content-between align-items-center">
						<span>{$core->get_Lang('Intinerary')}</span>
						<a class="link_open" href="{$PCMS}/admin/tour/edit/{$pvalTable}/itinerary/itinerary">
							<i class="ico-black-view_link"></i>
						</a> 
					</h2>
					<div class="body_show">
                    {if $lstItemIti}
                        <table class="table_inti">
                            <thead><tr>
                                <th class="text_bold text_center" style="width:60px">{$core->get_Lang('Day')}</th>
                                <th class="text_left text_bold">{$core->get_Lang('Title')}</th>
                            </tr> </thead>
                            <tbody>
                            {section name=i loop=$lstItemIti}
                                <tr>
									<td class="text_center">{$clsTourItinerary->getTripDay($lstItemIti[i].tour_itinerary_id)}</td>
                                    <td class="text_left">{$clsTourItinerary->getTitle($lstItemIti[i].tour_itinerary_id)}</td>
                                </tr>
                            {/section}
                            </tbody>
                        </table>
                    {else}
                        <p class="text_caution_option text_bold m-0 t_red">{$core->get_Lang('No data')}</p>
                    {/if}
                	</div>
				</div>
				<div class="overview_box_2 tour_destination">
					<h2>{$core->get_Lang('Destination')}</h2>
					<div class="body_show">
						<ul class="list-group" id="lstDestination">
							<li>{$core->get_Lang('Loading')}...</li>
						</ul>
						<div class="box_map mt-half" style="height:205px;">
							{$core->getBlock('Lbox_map_tour_new')}
						</div>
                	</div>
				</div>
                {if $clsISO->getCheckActiveModulePackage($package_id,'property','service','default')}
				<div class="overview_box_2 tour_destination" id="tour_destination">
					<h2 class="headeing d-flex justify-content-between align-items-center">
						<span>{$core->get_Lang('Service')}</span>
						<a class="link_open" href="{$PCMS}/admin/tour/edit/{$pvalTable}/configuration/add-on-services">
							<i class="ico-black-view_link"></i>
						</a> 
					</h2>
					<div class="body_show">
						<p class="intro_content_overview">{$core->get_Lang('All service select in this tour')}</p>
						{if $lst_service_overview}
						<table class="table_inti">
							<thead><tr>
								<td class="text_bold" style="width: calc(100% - 70px);">{$core->get_Lang('Service name')}</td>
								<td class="text_center text_bold" style="width: 70px">{$core->get_Lang('price')}</td>
							</tr></thead>
							<tbody>
								{section name=i loop=$lst_service_overview}
								<tr>
									<td style="width:calc(100% - 70px);">{$clsAddOnService->getTitle($lst_service_overview[i])}</td>
									{if $_LANG_ID == 'en'}
									<td class="text_center" style="width:70px">{$clsISO->getShortRate()}{$clsAddOnService->getPrice($lst_service_overview[i])}</td>
									{elseif $_LANG_ID == 'vn' }
									<td class="text_center" style="width:70px">{$clsAddOnService->getPrice($lst_service_overview[i])}{$clsISO->getShortRate()}</td>
									{/if}
								</tr>
							{/section}
							</tbody>
						</table>
						{else}
							<p class="text_caution_option text_bold m-0 t_red">{$core->get_Lang('No service selected')}</p>
						{/if}
					</div>
				</div>
                {/if}
			</div>
			<div class="col-md-6">
				<div class="overview_box_2 media_info" id="media_info">
					<h2>{$core->get_Lang('Media')}</h2>
					<div class="body_show">
						<div class="box-item">
							<h3 class="box-title d-flex justify-content-between align-items-center">
								<span>{$core->get_Lang('Image')}</span>
								<a class="link_open" href="{$PCMS}/admin/tour/edit/{$pvalTable}/basic/image-file-tour">
									<i class="ico ico-view_link"></i>
								</a>
							</h3>
							{if $oneItem.image}
							<div class="photo">
								<img src="{$clsClassTable->getImage($oneItem.tour_id,253,168)}" alt="{$clsTour->getTitle($oneItem.tour_id)}" width="253" height="168">
							</div>
							{else}
							<p class="text">{$core->get_Lang('Cannot display images')}</p>
							{/if}
						</div>
						<div class="box-item">
							<h3 class="box-title d-flex justify-content-between align-items-center">
								<span>{$core->get_Lang('File download program')}</span>
								<a class="link_open" href="{$PCMS}/admin/tour/edit/{$pvalTable}/basic/image-file-tour">
									<i class="ico ico-view_link"></i>
								</a>
							</h3>
							{if $oneItem.file_programme}
								<p class="text"><a href="{$oneItem.file_programme}">{$oneItem.file_programme}</a></p>
							{else}
								<p class="text">{$core->get_Lang('No files selected')}</p>
							{/if}
						</div>
						<div class="box-item">
							<h3 class="box-title d-flex justify-content-between align-items-center">
								<span>{$core->get_Lang('Gallery')}</span>
								<a class="link_open" href="{$PCMS}/admin/tour/edit/{$pvalTable}/configuration/image-gallery">
									<i class="ico ico-view_link"></i>
								</a>
							</h3>
							{if $lstItemGalleryn}
								<div class="row">
									{section name=i loop=$lstItemGalleryn}
										<div class="col-sm-3" style=" /*padding-left: 10px;padding-right: 10px;*/padding-bottom: 15px">
											<img class="image_gallery" src="{$clsTourImage->getImage($lstItemGalleryn[i].tour_image_id,146,97)}" alt="{$lstItemGalleryn[i].title}" width="100%" height="97">
										</div>
									{/section}
								</div>
							{else}
								<p class="text">{$core->get_Lang('No files selected')}</p>
							{/if}
						</div>
					</div>
				</div>
				<div class="overview_box_2 description_tour" id="description_tour">
					<h2>{$core->get_Lang('Description Tour')}</h2>
					<div class="body_show">
						<div class="panel-group" id="description">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title d-flex justify-content-between align-items-center">
										<a {if $oneItem.overview ne ''}class="success"{/if} data-toggle="collapse" data-parent="#description" href="#overview">{$core->get_Lang('Highlight')}</a>
										<a class="link_open" href="{$PCMS}/admin/tour/edit/{$pvalTable}/basic/overview-tour"><i class="ico ico-view_link"></i></a>
									</h4>
								</div>
								<div class="panel-collapse collapse in" id="overview" aria-expanded="true">
									<div class="panel-body">
										{$oneItem.overview|html_entity_decode}
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title d-flex justify-content-between align-items-center">
										<a {if $oneItem.inclusion ne ''}class="success"{/if} data-toggle="collapse" data-parent="#description" href="#inclusion">{$core->get_Lang('Inclusions')}</a>
										<a class="link_open" href="{$PCMS}/admin/tour/edit/{$pvalTable}/basic/inclusion-tour"><i class="ico ico-view_link"></i></a>
									</h4>
								</div>
								<div class="panel-collapse collapse" id="inclusion" aria-expanded="false">
									<div class="panel-body">
										{$oneItem.inclusion|html_entity_decode}
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title d-flex justify-content-between align-items-center">
										<a {if $oneItem.exclusion ne ''}class="success"{/if} data-toggle="collapse" data-parent="#description" href="#exclusion">{$core->get_Lang('Exclusion')}</a>
										<a class="link_open" href="{$PCMS}/admin/tour/edit/{$pvalTable}/basic/exclusion-tour"><i class="ico ico-view_link"></i></a>
									</h4>
								</div>
								<div class="panel-collapse collapse" id="exclusion" aria-expanded="false">
									<div class="panel-body">
										{if $oneItem.exclusion}
											{$oneItem.exclusion|html_entity_decode}
										{else}
											<p class="text_caution_option text_bold m-0 t_red">{$core->get_Lang('No data')}</p>
										{/if}
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title d-flex justify-content-between align-items-center">
										<a {if $oneItem.exclusion ne ''}class="success"{/if} data-toggle="collapse" data-parent="#description" href="#thing_to_carry">{$core->get_Lang('What\'s to carry')}</a>
										<a class="link_open" href="{$PCMS}/admin/tour/edit/{$pvalTable}/basic/whatcarry-tour"><i class="ico ico-view_link"></i></a>
									</h4>
								</div>
								<div class="panel-collapse collapse" id="thing_to_carry" aria-expanded="false">
									<div class="panel-body">
										{if $oneItem.thing_to_carry}
											{$oneItem.thing_to_carry|html_entity_decode}
										{else}
											<p class="text_caution_option text_bold m-0 t_red">{$core->get_Lang('No data')}</p>
										{/if}
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title d-flex justify-content-between align-items-center">
										<a {if $oneItem.exclusion ne ''}class="success"{/if} data-toggle="collapse" data-parent="#description" href="#cancellation_policy">{$core->get_Lang('Cancellation policy')}</a>
										<a class="link_open" href="{$PCMS}/admin/tour/edit/{$pvalTable}/basic/cancellation_policy-tour"><i class="ico ico-view_link"></i></a>
									</h4>
								</div>
								<div class="panel-collapse collapse" id="cancellation_policy" aria-expanded="false">
									<div class="panel-body">
										{if $oneItem.cancellation_policy}
											{$oneItem.cancellation_policy|html_entity_decode}
										{else}
											<p class="text_caution_option text_bold m-0 t_red">{$core->get_Lang('No data')}</p>
										{/if}
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title d-flex justify-content-between align-items-center">
										<a {if $oneItem.exclusion ne ''}class="success"{/if} data-toggle="collapse" data-parent="#description" href="#refund_policy">{$core->get_Lang('Refund')}</a>
										<a class="link_open" href="{$PCMS}/admin/tour/edit/{$pvalTable}/basic/refund-tour"><i class="ico ico-view_link"></i></a>
									</h4>
								</div>
								<div class="panel-collapse collapse" id="refund_policy" aria-expanded="false">
									<div class="panel-body">
										{if $oneItem.refund_policy}
											{$oneItem.refund_policy|html_entity_decode}
										{else}
											<p class="text_caution_option text_bold m-0 t_red">{$core->get_Lang('No data')}</p>
										{/if}
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title d-flex justify-content-between align-items-center">
										<a {if $oneItem.exclusion ne ''}class="success"{/if} data-toggle="collapse" data-parent="#description" href="#confirmation_policy">{$core->get_Lang('Confirmation Policy')}</a>
										<a class="link_open" href="{$PCMS}/admin/tour/edit/{$pvalTable}/basic/confirmation-policy-tour"><i class="ico ico-view_link"></i></a>
									</h4>
								</div>
								<div class="panel-collapse collapse" id="confirmation_policy" aria-expanded="false">
									<div class="panel-body">
										{if $oneItem.confirmation_policy}
											{$oneItem.confirmation_policy|html_entity_decode}
										{else}
											<p class="text_caution_option text_bold m-0 t_red">{$core->get_Lang('No data')}</p>
										{/if}
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
</div>
<script type="text/javascript">
    var pcsm_ovv = '{$PCMS}';
	var pvalTable_ovv = {$pvalTable};
	var list_check_target = {$list_check_target};
</script>
{literal}
<script type="text/javascript">
    $(function () {
		loadListDestination({/literal}{$pvalTable}{literal},"overview");
        $("#tour_info_re").hide();
        jQuery.each( list_check_target, function( i, val ) {
            if(val['result'] == 'check_success'){}
			else if(val['result'] == 'check_caution'){
			console.log(val);
				if(val['target'] == 'promotion'){
					$(".link_caution_up .list_link").append('<li><a href="'+pcsm_ovv+'/admin/?mod=discount" data-type="promotion">'+val['name']+' <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>');
				}else{
					$(".link_caution_up .list_link").append('<li><a href="'+pcsm_ovv+'/admin/tour/edit/'+pvalTable_ovv+'/'+val['cat']+'/'+val['target']+'">'+val['name']+' <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>');
				}

                $("#tour_info_re").show();
            }else{
                $("#tour_info_re").hide();
            }
        });
        $(document).on('click', '.extend', function (ev) {
            var _this = $(this);
            _this.addClass('unextend').removeClass('extend').find('.fa-plus').addClass('fa-minus').removeClass('fa-plus');
            _this.closest('.box_notice').find('.box_title_action').addClass('open');
            _this.closest('.box_notice').find('.box_content_overview').addClass('in');
        });
        $(document).on('click', '.unextend', function (ev) {
            var _this = $(this);
            _this.addClass('extend').removeClass('unextend').find('.fa-minus').addClass('fa-plus').removeClass('fa-minus');
            _this.closest('.box_notice').find('.box_title_action').removeClass('open');
            _this.closest('.box_notice').find('.box_content_overview').removeClass('in');
        })
    })

</script>
{/literal}