<link rel="stylesheet" type="text/css" href="{$URL_JS}/fullcalendar/fullcalendar.min.css?v={$upd_version}" media="all" />
<script type="text/javascript" src="{$URL_JS}/fullcalendar/moment.js?v={$upd_version}"></script>
<script type="text/javascript" src="{$URL_JS}/fullcalendar/fullcalendar.min.js?v={$upd_version}"></script>
<div class="box_form_insert_tour_new">
	<div class="box_info_tour_top box_top_opt_set">
		<div class="info_tour">
			<a href="{$PCMS}/admin/?mod=tour_exhautive" class="back_list" title="{$core->get_Lang('tour_list')}"><i class="fa fa-angle-left"></i></a>
			 <img class="image_nav_tour isoman_show_image" src="{$clsTour->getImage($pvalTable,80,59)}" alt="{$clsTour->getTitle($pvalTable)}" width="80" height="59">
			<div class="body_tour">
				<h3 class="tour-title" tour_id="{$pvalTable}">{$clsTour->getTitle($pvalTable)}</h3>
				<p class="p_tripcode">
					<a class="go_overview" href="{$PCMS}/admin/tour/edit/{$pvalTable}/overview">{$core->get_Lang('Go to overview')}</a> <span>{$core->get_Lang('Trip code')}: <span class="trip_code" tour_id="{$pvalTable}">{$clsTour->getTripCode($pvalTable)}</span></span> 
				</p>
			</div>
		</div>
		<div class="info_button">
			<div class="toggle_opt btn_online action_tour">
				{if $oneItem.is_online eq 0}
				<a class="online_tour private_tour" data-val="1">{$core->get_Lang('Private')}</a>
				{else}
				<a class="online_tour" data-val="0">{$core->get_Lang('Public')}</a>
				{/if}
			</div>
			<div class="action_tour btn_preview">
				<a class="btn_preview_tour preview_tour_ex" {if $oneItem.is_trash eq 1}style="pointer-events: none;color: rgb(204, 204, 204);border-color: rgb(204, 204, 204);background-color: rgb(255, 255, 255);cursor: not-allowed;"{/if} href="{$clsTour->getLink($pvalTable)}" target="_blank" title="{$clsTour->getTitle($pvalTable)}">{$core->get_Lang('Preview')}</a>
			</div>
			<div class="action_tour btn_delete" id="is_delete_tour">
				<a class="btn_preview_tour delete_tour_ex" type_btn="delete" href="javascript:void(0);" title="{$clsTour->getTitle($pvalTable)}">{$core->get_Lang('Delete')}</a>
			</div>
		</div>
	</div>
	<div class="container-fluid bg_fff" style="padding-top: 0;padding-bottom: 0;">
		<div class="box_content_page">
			<div class="row flex-row">
				<div class="col-sm-2 col-md-2 col-lg-2 box_left_opt_set">
					<div class="list_work_step_insert">
						<div class="panel-group" id="accordion">
							{section name=i loop=$list_menu_tour}
								{assign var = icon value = $list_menu_tour[i].icon }
								{assign var = cat_menu value = $list_menu_tour[i].cat_menu }
								{assign var = child_cat_menu value = $list_menu_tour[i].child }
								{if $cat_menu eq 'promotion'}
									{if _IS_PROMOTION eq 1}
									<div class="panel panel-default panel-sidebar">
										<div class="panel-heading">
											<a data-toggle="collapse" data-parent="#accordion" href="#{$cat_menu}_tg" id="{$cat_menu}_tg_a" {if $cat_run != $cat_menu}{if $run_ajax != 'overview'} class="collapsed"{/if}{/if}>
												<h4 class="panel-title"><i class="ico ico-{$icon}"></i> {$core->get_Lang($cat_menu)} </h4>
											</a>
										</div>
										<div id="{$cat_menu}_tg" class="panel-collapse collapse {if $cat_run == $cat_menu || $run_ajax == 'overview'}in{/if}">
											<div class="panel-body">
												<ul class="stepbar-list">
													{section name=j loop=$child_cat_menu}
													<li><a class="load-block" href="{$PCMS}/admin/tour/edit/{$pvalTable}/{$cat_menu}/{$child_cat_menu[j]}" id="{$child_cat_menu[j]}">{$core->get_Lang($child_cat_menu[j])}</a></li>
													{/section}
												</ul>
											</div>
										</div>
									</div>
									{/if}
								{else}
									<div class="panel panel-default panel-sidebar">
										<div class="panel-heading">
											<a data-toggle="collapse" data-parent="#accordion" href="#{$cat_menu}_tg" id="{$cat_menu}_tg_a" {if $cat_run != $cat_menu}class="collapsed" {/if} >
												<h4 class="panel-title"><i class="ico ico-{$icon}"></i>
												{$core->get_Lang($cat_menu)}
												</h4>
											</a>
										</div>
										<div id="{$cat_menu}_tg" class="panel-collapse collapse {if $cat_run == $cat_menu}in{/if}">
											<div class="panel-body">
												<ul class="stepbar-list">
												{section name=j loop=$child_cat_menu}
													<li><a class="load-block" href="{$PCMS}/admin/tour/edit/{$pvalTable}/{$cat_menu}/{$child_cat_menu[j]}" id="{$child_cat_menu[j]}">{$core->get_Lang($child_cat_menu[j])}
													{if in_array($child_cat_menu[j],$list_sync) && $oneItem.yield_id}
														{$clsISO->makeIcon('compress')}
													{/if}
													</a></li>
												{/section}
												</ul>
											</div>
										</div>
									</div>
								{/if}
							{/section}
						</div>
					</div>
				</div>
				<div class="col-sm-10 col-md-10 col-lg-10">
					<div class="content_box_insert_tour">

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<link rel="stylesheet" type="text/css" href="{$URL_JS}/cropper/cropper.min.css?v={$upd_version}" media="all" />
<link rel="stylesheet" type="text/css" href="{$URL_JS}/fullcalendar/fullcalendar.min.css?v={$upd_version}" media="all" />
<script src="{$URL_JS}/cropper/jquery.cropper.js?v={$upd_version}"></script>
<script type="text/javascript" src="{$URL_JS}/html2canvas.js?v={$upd_version}"></script>
<script type="text/javascript" src="{$URL_JS}/cropper/cropper.min.js?v={$upd_version}"></script>
<script type="text/javascript" src="{$URL_JS}/fullcalendar/fullcalendar.min.js?v={$upd_version}"></script>
<!-- Map -->
<link href="{$URL_JS}/mapbox/mapbox.css?v={$upd_version}" rel="stylesheet" />
<script src="{$URL_JS}/mapbox/mapbox.js?v={$upd_version}"></script>
<script src="{$URL_JS}/mapbox/leaflet-heat.js?v={$upd_version}"></script>
<link rel="stylesheet" href="{$URL_JS}/mapbox/leaflet.css?v={$upd_version}" />
<script type="text/javascript" src='{$URL_JS}/mapbox/leaflet-image.js?v={$upd_version}'></script>
<script type="text/javascript">
    var path_ajax_datepicker = '{$URL_JS}/vietiso_datepicker/js?v={$upd_version}';
    var aj_search = 0;
    var tour_id = '{$pvalTable}';
    var $tour_id = '{$pvalTable}';
    var tour_group_id = '{$tour_group_id}';
    var $tour_type_id = '{$tour_type_id}';
    var $listcatID = '{$oneItem.list_cat_id}';
    var $tourgroup_ID = '{$oneItem.tour_group_id}';
    var country = "{$core->get_Lang('country')}";
    var regions = "{$core->get_Lang('regions')}";
    var cities = "{$core->get_Lang('cities')}";
    var area = "{$core->get_Lang('Area')}";
    var attractions = "{$core->get_Lang('attractions')}";
    var continents = "{$core->get_Lang('continents')}";
    var required_country = "{$core->get_Lang('required_country')}";
    var identicaltour = "{$core->get_Lang('Error. Please enter a different name and try again tour')}";
    var existedtour = "{$core->get_Lang('This Tour has existed. Please enter a different name and try again tour')}";
    var required_client = "{$core->get_Lang('This tour is not a client type and age choose to participate. Please choose in the table above')}";
    var $SiteModActive_country = "{$clsConfiguration->getValue('SiteModActive_country')}";
    var $SiteModActive_continent = "{$clsConfiguration->getValue('SiteModActive_continent')}";
    var $SiteActive_region = "{$clsConfiguration->getValue('SiteActive_region')}";
    var $SiteActive_city = "{$clsConfiguration->getValue('SiteActive_city')}";
    var $SiteHasPriceTableTours = "{$clsConfiguration->getValue('SiteHasPriceTableTours')}";
    var $SitePriceTableType_Tours = '{$clsConfiguration->getValue("SitePriceTableType_Tours")}';
    var $SiteHasStartDate_Tours = "{$clsConfiguration->getValue('SiteHasStartDate_Tours')}";
    var $SiteHasExtensionTours = "{$clsConfiguration->getValue('SiteHasExtensionTours')}";
    var $SiteHasGalleryImagesTours = "{$clsConfiguration->getValue('SiteHasGalleryImagesTours')}";
    var $SiteHasDestinationTours = "{$clsConfiguration->getValue('SiteHasDestinationTours')}";
    var $SiteHasItineraryTours = "{$clsConfiguration->getValue('SiteHasItineraryTours')}";
    var $SiteHasHotel_Tours = "{$clsISO->getCheckActiveModulePackage($package_id,'tour','hotel','customize')}";
    var $SiteHasStore_Tours = "{$clsConfiguration->getValue('SiteHasStore_Tours')}";
    var $SiteHasGroup_Tours = '{$clsConfiguration->getValue("SiteHasGroup_Tours")}';
    var $SiteHasCategoryGroup_Tours = '{$clsConfiguration->getValue("SiteHasCategoryGroup_Tours")}';
    var $SiteHasCustomContentField_Tours = '{$clsConfiguration->getValue("SiteHasCustomContentField_Tours")}';
    var $check_mod_continent = "{$core->checkAccess('continent')}";
    var $check_mod_country = "{$core->checkAccess('country')}";
    var slug = "{$run_ajax}";
    var exist_success_tour_status = "{$core->get_Lang('exist_success_tour_status')}";
    var exist_success_tour_trash = "{$core->get_Lang('exist_success_tour_trash')}";
    var exist_success_tour_delete = "{$core->get_Lang('exist_success_tour_delete')}";
    var exist_success_tour_restore = "{$core->get_Lang('exist_success_tour_restore')}";

</script>
{literal}
<script>
	$(function () {
		$(window).scroll(function() {
			var sticky = $('.box_top_opt_set'),
				scroll = $(window).scrollTop();
			if (scroll >= 40) {
				sticky.addClass('fixed');
			}else {
				sticky.removeClass('fixed');
			}
		});
	});
	var slug = '{/literal}{$run_ajax}{literal}';
	function content() {
		return tinyMCE.editors[$('.textarea_intro_editor_simple').attr('id')].getContent();
	}
	
</script>
{/literal}