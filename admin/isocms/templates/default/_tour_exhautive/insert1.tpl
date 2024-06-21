<link rel="stylesheet" type="text/css" media="screen" href="{$URL_JS}/datepicker/bootstrap-combined.min.css?v={$upd_version}">
<link rel="stylesheet" type="text/css" media="screen" href="{$URL_JS}/datepicker/bootstrap-datetimepicker.min.css?v={$upd_version}">
<link rel="stylesheet" type="text/css" media="screen" href="{$URL_JS}/bootstrap/css/bootstrap.min.css?v={$upd_version}">
<link rel="stylesheet" type="text/css" media="screen" href="{$URL_JS}/bootstrap/css/bootstrap-theme.min.css?v={$upd_version}">
<link rel="stylesheet" href="{$URL_CSS}/chosen.css?v={$upd_version}" type="text/css" media="all">
<link rel="stylesheet" type="text/css" media="screen" href="{$URL_CSS}/tour_exhautive.css?v={$upd_version}">

{*begin*}
    <div class="box_form_insert_tour_new">
        <div class="container-fluid" style="padding-top: 0;padding-bottom: 0;">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 box_top_opt_set">
                    <div class="col-sm-6 menu_form_opt">
                        <a href="{$PCMS}/admin/?mod=tour_exhautive" class="back_list" title="{$core->get_Lang('tour_list')}"><i class="fa fa-angle-left"></i></a>
                        <img src="{$clsTour->getImage($pvalTable,60,40)}" alt="{$clsTour->getTitle($pvalTable)}" width="60" height="40">
                        <div class="box_link_title_view">
                            <div class="title_tour_view"><p class="tour_view_text">{$clsTour->getTitle($pvalTable)}</p><span class="trash_tour_text" style="{if $oneItem.is_trash eq 0}display: none;{else}display: block;{/if}"> <i class="fa fa-exclamation-triangle"> {$core->get_Lang('Trash')}</i></span></div>
                            <div class="clearfix"></div>
                            <p class="link_overview"><a class="go_overview" href="{$PCMS}/admin/tour/insert/{$pvalTable}/overview">{$core->get_Lang('Go to overview')}</a> {$core->get_Lang('Trip code:')} <strong>{$clsTour->getTripCode($pvalTable)}</strong></p>
                        </div>
                    </div>
                    <div class="col-sm-6 menu_form_opt">
                        <div class="action_tour" id="is_delete_tour" style="{if $oneItem.is_trash eq 0}display: none;{else}display: block;{/if}">
                            <a class="btn_preview_tour delete_tour_ex" type_btn="delete" href="javascript:void(0);" title="{$clsTour->getTitle($pvalTable)}">{$core->get_Lang('Delete')}</a>
                        </div>
                        <div class="action_tour p-r-10" id="is_restore_tour" style="{if $oneItem.is_trash eq 0}display: none;{else}display: block;{/if}">
                            <a class="btn_preview_tour restore_tour_ex" type_btn="restore" href="javascript:void(0);" title="{$clsTour->getTitle($pvalTable)}">{$core->get_Lang('Restore')}</a>
                        </div>
                        <div class="action_tour p-r-10" id="is_trash_tour" style="{if $oneItem.is_trash eq 0}display: block;{else}display: none;{/if}">
                            <a class="btn_preview_tour trash_tour_ex" type_btn="trash" href="javascript:void(0);" title="{$clsTour->getTitle($pvalTable)}">{$core->get_Lang('Trash')}</a>
                        </div>
                        <div class="action_tour p-r-10">
                            <a class="btn_preview_tour preview_tour_ex" {if $oneItem.is_trash eq 1}style="pointer-events: none;color: rgb(204, 204, 204);border-color: rgb(204, 204, 204);background-color: rgb(255, 255, 255);cursor: not-allowed;"{/if} href="{$clsTour->getLink($pvalTable)}" title="{$clsTour->getTitle($pvalTable)}">{$core->get_Lang('Preview')}</a>
                        </div>
                        <div class="toggle_opt">
                            <input type="radio" name="online_tour" value="0" id="online_tour_private" {if $oneItem.is_online eq 0}checked="checked"{/if}/>
                            <label for="online_tour_private">{$core->get_Lang('Private')}</label>
                            <input type="radio" name="online_tour" value="1" id="online_tour_public" {if $oneItem.is_online eq 1}checked="checked"{/if}/>
                            <label for="online_tour_public">{$core->get_Lang('Public')}</label>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2 col-md-2 col-lg-2 box_left_opt_set">
                    <div class="list_work_step_insert">
                        <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#basic_tg" id="basic_tg_a" {if $cat_run != 'basic'}{if $run_ajax != 'overview'} class="collapsed"{/if}{/if}>
                                        <h4 class="panel-title">{$core->get_Lang('Basic')} </h4>
                                    </a>
                                </div>
                                <div id="basic_tg" class="panel-collapse collapse {if $cat_run == 'basic' || $run_ajax == 'overview'}in{/if}">
                                    <div class="panel-body">
                                        <ul>
                                            <li><a href="{$PCMS}/admin/tour/insert/{$pvalTable}/basic/title-tripcode" id="title-tripcode">{$core->get_Lang('Title and trip code')}</a></li>
                                            <li><a href="{$PCMS}/admin/tour/insert/{$pvalTable}/basic/option-tour" id="option-tour">{$core->get_Lang('Travel style')}</a></li>
                                            <li><a href="{$PCMS}/admin/tour/insert/{$pvalTable}/basic/duration-tour" id="duration-tour">{$core->get_Lang('Duration')}</a></li>
                                            <li><a href="{$PCMS}/admin/tour/insert/{$pvalTable}/basic/image-file-tour" id="image-file-tour">{$core->get_Lang('Image, file tour')}</a></li>
                                            <li><a href="{$PCMS}/admin/tour/insert/{$pvalTable}/basic/overview-tour" id="overview-tour">{$core->get_Lang('Overview tour')}</a></li>
                                            <li><a href="{$PCMS}/admin/tour/insert/{$pvalTable}/basic/activities-tour" id="activities-tour">{$core->get_Lang('Activities tour')}</a></li>
                                            <li><a href="{$PCMS}/admin/tour/insert/{$pvalTable}/basic/inclusion-tour" id="inclusion-tour">{$core->get_Lang('Inclusion tour')}</a></li>
                                            <li><a href="{$PCMS}/admin/tour/insert/{$pvalTable}/basic/exclusion-tour" id="exclusion-tour">{$core->get_Lang('Exclusion tour')}</a></li>
                                            <li><a href="{$PCMS}/admin/tour/insert/{$pvalTable}/basic/whatcarry-tour" id="whatcarry-tour">{$core->get_Lang('What\'s to Carry')}</a></li>
                                            <li><a href="{$PCMS}/admin/tour/insert/{$pvalTable}/basic/cancellation_policy-tour" id="cancellation_policy-tour">{$core->get_Lang('Cancellation Policy')}</a></li>
                                            <li><a href="{$PCMS}/admin/tour/insert/{$pvalTable}/basic/refund-tour" id="refund-tour">{$core->get_Lang('Refund')}</a></li>
                                            <li><a href="{$PCMS}/admin/tour/insert/{$pvalTable}/basic/confirmation-policy-tour" id="confirmation-policy-tour">{$core->get_Lang('Confirmation Policy')}</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#itinerary_tg" id="itinerary_tg_a" {if $cat_run != 'itinerary'}class="collapsed"{/if}">
                                        <h4 class="panel-title">
                                            {$core->get_Lang('Itinerary')}
                                        </h4>
                                    </a>
                                </div>
                                <div id="itinerary_tg" class="panel-collapse collapse {if $cat_run == 'itinerary'}in{/if}">
                                    <div class="panel-body">
                                        <ul>
                                            <li><a href="{$PCMS}/admin/tour/insert/{$pvalTable}/itinerary/itinerary" id="itinerary">{$core->get_Lang('Itinerary')}</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a data-toggle="collapse" data-parent="#accordion" id="destination_tg_a" href="#destination_tg" {if $cat_run != 'destination'}class="collapsed"{/if}>
                                        <h4 class="panel-title">
                                            {$core->get_Lang('Destination')}
                                        </h4>
                                    </a>
                                </div>
                                <div id="destination_tg" class="panel-collapse collapse {if $cat_run == 'destination'}in{/if}">
                                    <div class="panel-body">
                                        <ul>
                                            <li><a href="{$PCMS}/admin/tour/insert/{$pvalTable}/destination/destination" id="destination">{$core->get_Lang('Destination')}</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#configuration_tg" id="configuration_tg_a" {if $cat_run != 'configuration'}class="collapsed"{/if}>
                                        <h4 class="panel-title">
                                            {$core->get_Lang('Configuration')}
                                        </h4>
                                    </a>
                                </div>
                                <div id="configuration_tg" class="panel-collapse collapse  {if $cat_run == 'configuration'}in{/if}">
                                    <div class="panel-body">
                                        <ul>
                                            {if $clsConfiguration->getValue('SiteHasService_Tours')}
                                                <li><a href="{$PCMS}/admin/tour/insert/{$pvalTable}/configuration/add-on-services" id="add-on-services">{$core->get_Lang('Add On Services')}</a></li>
                                            {/if}
                                            {if $clsConfiguration->getValue('SiteHasService_Tours')}
                                                <li><a href="{$PCMS}/admin/tour/insert/{$pvalTable}/configuration/related_tours" id="related_tours">{$core->get_Lang('Related tours')}</a></li>
                                            {/if}
                                            {if $clsConfiguration->getValue('SiteHasGalleryImagesTours')}
                                                <li><a href="{$PCMS}/admin/tour/insert/{$pvalTable}/configuration/gallery" id="gallery">{$core->get_Lang('Gallery')}</a></li>
                                            {/if}

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            {if _IS_DEPARTURE eq 1}
                                {if $clsTourStore->checkExist($pvalTable,DEPARTURE)}
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#pricetable_tg" id="pricetable_tg_a" {if $cat_run != 'pricetable'}class="collapsed"{/if}>
                                                <h4 class="panel-title">
                                                    {$core->get_Lang('Departure date')}
                                                </h4>
                                            </a>
                                        </div>
                                        <div id="pricetable_tg" class="panel-collapse collapse  {if $cat_run == 'pricetable'}in{/if}">
                                            <div class="panel-body">
                                                <ul>
                                                    <ul>
                                                        <li><a href="{$PCMS}/admin/tour/insert/{$pvalTable}/pricetable/price-table" id="price-table">{$core->get_Lang('Departure date')}</a></li>
                                                    </ul>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                {else}
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#pricetable_tg" id="pricetable_tg_a" {if $cat_run != 'pricetable'}class="collapsed"{/if}>
                                                <h4 class="panel-title">
                                                    {$core->get_Lang('Price table')}
                                                </h4>
                                            </a>
                                        </div>
                                        <div id="pricetable_tg" class="panel-collapse collapse  {if $cat_run == 'pricetable'}in{/if}">
                                            <div class="panel-body">
                                                <ul>
                                                    <ul>
                                                        <li><a href="{$PCMS}/admin/tour/insert/{$pvalTable}/pricetable/price-table" id="price-table">{$core->get_Lang('Price table')}</a></li>
                                                    </ul>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                {/if}
                            {else}
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#pricetable_tg" id="pricetable_tg_a" {if $cat_run != 'pricetable'}class="collapsed"{/if}>
                                            <h4 class="panel-title">
                                                {$core->get_Lang('Price table')}
                                            </h4>
                                        </a>
                                    </div>
                                    <div id="pricetable_tg" class="panel-collapse collapse  {if $cat_run == 'pricetable'}in{/if}">
                                        <div class="panel-body">
                                            <ul>
                                                <li><a href="{$PCMS}/admin/tour/insert/{$pvalTable}/pricetable/price-table" id="price-table">{$core->get_Lang('Price table')}</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            {/if}
                            {if _IS_PROMOTION eq 1}
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#promotion_tg" id="promotion_tg_a" {if $cat_run != 'promotion'}class="collapsed"{/if}>
                                            <h4 class="panel-title">
                                                {$core->get_Lang('Promotion')}
                                            </h4>
                                        </a>
                                    </div>
                                    <div id="promotion_tg" class="panel-collapse collapse  {if $cat_run == 'promotion'}in{/if}">
                                        <div class="panel-body">
                                            <ul>
                                                <li><a href="{$PCMS}/admin/tour/insert/{$pvalTable}/promotion/promotion" id="promotion">{$core->get_Lang('Promotion')}</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            {/if}
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#seotool_tg" id="seotool_tg_a" {if $cat_run != 'seotool'}class="collapsed"{/if}>
                                        <h4 class="panel-title">
                                            {$core->get_Lang('Seo tool')}
                                        </h4>
                                    </a>
                                </div>
                                <div id="seotool_tg" class="panel-collapse collapse  {if $cat_run == 'seotool'}in{/if}">
                                    <div class="panel-body">
                                        <ul>
                                            <li><a href="{$PCMS}/admin/tour/insert/{$pvalTable}/seotool/seotool" id="seotool">{$core->get_Lang('Seo tool')}</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
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

<script type="text/javascript" src="{$URL_THEMES}/tour_exhautive/jquery.tourexhautive.js?v={$upd_version}"></script>
<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/themes/smoothness/jquery-ui.css?v={$upd_version}" />
<script type="text/javascript" src="{$URL_JS}/bootstrap/js/bootstrap.min.js?v={$upd_version}"></script>
<script type="text/javascript" src="{$URL_JS}/chosen.jquery.js?v={$upd_version}"></script>
<script type="text/javascript">
    var path_ajax_datepicker = '{$URL_JS}/vietiso_datepicker/js?v={$upd_version}';
    var aj_search = 0;
    var tour_id = '{$pvalTable}';
    var $tour_id = '{$pvalTable}';
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
    var $SiteHasHotel_Tours = "{$clsConfiguration->getValue('SiteHasHotel_Tours')}";
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
                    var w_bx = $('.box_form_insert_tour_new').width();
                    sticky.css('width',w_bx+'px');
                    sticky.addClass('fixed');
                }
                else {
                    sticky.removeAttr('style');
                    sticky.removeClass('fixed');

                }
            });

            var sw =  $('#sidebar').outerWidth(false);
            if(sw> 50){
                $('#sidebar-collapse-click').trigger('click');
            }
        })
        $(".chosen-select").chosen({
            max_selected_options: 10,
            width: '100%'
        });
        var slug = '{/literal}{$run_ajax}{literal}';
        function content() {
            return tinyMCE.editors[$('.textarea_intro_editor_simple').attr('id')].getContent();
        }
        $('.toggle_opt input[name=online_tour]').on('change',function () {
            $.ajax({
                type: "POST",
                url: path_ajax_script + '/?mod=' + mod + '&act=ajCheckPublicTour',
                data: {'is_online':$(this).val(),'tour_id':tour_id},
                dataType: "json",
                success: function (json) {
                    if (json['result'] == '_SUCCESS') {
                        alertify.success(exist_success_tour_status);
                    }
                    if (json['result'] == '_ERR') {
                        alertify.error(exist_error);
                    }
                }
            });
        })
        $('.restore_tour_ex,.trash_tour_ex').on('click',function () {
            $.ajax({
                type: "POST",
                url: path_ajax_script + '/?mod=' + mod + '&act=ajCheckTrashTour',
                data: {'type_btn':$(this).attr('type_btn'),'tour_id':tour_id},
                dataType: "json",
                success: function (json) {
                    if (json['result'] == '_SUCCESS') {
                        if(json['type'] == 'trash'){
                            $('#is_delete_tour, #is_restore_tour, .trash_tour_text').show();
                            $('#is_trash_tour').hide();
                            $('.preview_tour_ex').css({'pointer-events':'none','color':'#ccc','border-color':'#ccc','background-color':'#ffffff','cursor': 'not-allowed'});
                            alertify.success(exist_success_tour_trash);
                        }
                        if(json['type'] == 'delete'){
                            console.log(json['link']);
                            alertify.success(exist_success_tour_delete);
                            setTimeout(function(){ window.location.href = json['link']; }, 3000);
                        }
                        if(json['type'] == 'restore'){
                            $('#is_delete_tour, #is_restore_tour, .trash_tour_text').hide();
                            $('#is_trash_tour').show();
                            $('.preview_tour_ex').removeAttr('style');
                            alertify.success(exist_success_tour_restore);
                        }
                    }
                    if (json['result'] == '_ERR') {
                        alertify.error(exist_error);
                    }
                }
            });
        })
        $('.delete_tour_ex').on('click',function () {
            if (confirm(confirm_delete)) {
            $.ajax({
                type: "POST",
                url: path_ajax_script + '/?mod=' + mod + '&act=ajCheckTrashTour',
                data: {'type_btn':$(this).attr('type_btn'),'tour_id':tour_id},
                dataType: "json",
                success: function (json) {
                    if (json['result'] == '_SUCCESS') {
                        if(json['type'] == 'trash'){
                            $('#is_delete_tour, #is_restore_tour, .trash_tour_text').show();
                            $('#is_trash_tour').hide();
                            $('.preview_tour_ex').css({'pointer-events':'none','color':'#ccc','border-color':'#ccc','background-color':'#ffffff','cursor': 'not-allowed'});
                            alertify.success(exist_success_tour_trash);
                        }
                        if(json['type'] == 'delete'){
                            console.log(json['link']);
                            alertify.success(exist_success_tour_delete);
                            setTimeout(function(){ window.location.href = json['link']; }, 3000);
                        }
                        if(json['type'] == 'restore'){
                            $('#is_delete_tour, #is_restore_tour, .trash_tour_text').hide();
                            $('#is_trash_tour').show();
                            $('.preview_tour_ex').removeAttr('style');
                            alertify.success(exist_success_tour_restore);
                        }
                    }
                    if (json['result'] == '_ERR') {
                        alertify.error(exist_error);
                    }
                }
            });
            }
        })
    </script>
    <style type="text/css">
        .avgRever .row-span{width:33.3%;float:left;clear:none}
        .dropdown-toggle .caret {
            margin-top: -4px;
        }
        #box_EditPhotosGallery{min-width:240px!important; }
        .tabbox .chosen-container-single .chosen-single {
            height: 32px !important;
            line-height: 32px !important;
            border-radius: 0 !important;
            margin-right: 5px !important;
        }
        .tabbox .btn-add {
            height: 32px !important;
            line-height: 32px !important;
        }

        #v-nav >ul >li {
            width: 100%;
        }
        #tab_content .col-right{width: calc(100% - 230px)}
        .row-span .fieldlabel{width: 180px;padding:0px 10px;float:left;height:32px;line-height:32px;text-align:left;font-size:13px;}
        .row-span .fieldarea{width: calc(100% - 180px);float:right;}
        .fixed {
            position: fixed;
            top: 0;
            right: 0;
            animation: smoothScroll 1s forwards;
            z-index: 9;
        }
        @keyframes smoothScroll {
            0% {
                transform: translateY(-40px);
            }
            100% {
                transform: translateY(0px);
            }
        }
    </style>
{/literal}
{*end*}
<script type="text/javascript" src="{$URL_JS}/datepicker/bootstrap.min.js?v={$upd_version}"> </script>
<script type="text/javascript" src="{$URL_JS}/datepicker/bootstrap-datetimepicker.min.js?v={$upd_version}"> </script>

