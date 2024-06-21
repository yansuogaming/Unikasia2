$(function() {
    var url = window.location.href;
    if(act != 'default'){
        if(slug){
			//console.log(slug);
            openURL(url);
        }else{
            window.location.href = path_ajax_script+"/tour/insert/"+tour_id+"/basic/title-tripcode";
        }
        setTimeout(function(){  var w_h = $('body').height();$(".box_left_opt_set").css('min-height',w_h-94) }, 1000);
    }

});
function openURL(href){
    var link = href;
    $.ajax({
        url: link,
        type: 'GET',
        cache: false,
        dataType: "html",
        success: function (result) {
            $('.content_box_insert_tour').html(result);
            var arr = link.split('/');
            if(arr[6]){
                $(".box_left_opt_set a").removeAttr('style');
                if(arr[8]){
                    $("#"+arr[8]).css({'color':'#4094ff','font-weight':'bold'});
                }else{
                    $("#"+arr[6]).css({'color':'#4094ff','font-weight':'bold'});
                }
            }
            if(arr[7] == 'overview' || arr[5] == 'overview'){
                $('.go_overview').hide();
                $('.list_work_step_insert .panel-heading a').addClass('collapsed');
                $('.list_work_step_insert .panel-collapse').removeClass('in');
                $('.list_work_step_insert .panel-heading #basic_tg_a').removeClass('collapsed');
                $('.list_work_step_insert .panel-collapse#basic_tg').addClass('in');
            }else{
                $('.go_overview').show();
            }
             //console.log(href);
        }
    });

    window.history.pushState({href: href}, '', href);
    return false;
}

$(document).ready(function () {
    $(document).on('click', '.box_left_opt_set ul li a, .go_overview, .list_link li a, .link_open, .setting_menu_detail .btn-group ul li a', function () {
        $(".box_left_opt_set a").removeAttr('style');
        $(this).css({'color': '#4094ff', 'font-weight': 'bold'});
        openURL($(this).attr("href"));
        // console.log(prev_step);
        return false; //intercept the link
    });
});

$(document).ready(function () {


    if ($SiteHasDestinationTours == 1) {
        setSelectBoxDestination();

        $(document).on('change', '#slb_Chauluc', function (ev) {
            var $_this = $(this);
            if (parseInt($_this.val()) > 0) {
                loadCountry($_this.val());
            } else {
                $('select[name=country_id]').html('<option value="0">' + country + '/option>').hide();
                $('select[name=region_id]').html('<option value="0">' + regions + '</option>').hide();
                $('select[name=city_id]').html('<option value="0">' + cities + '</option>').hide();
                $('select[name=placetogo_id]').html('<option value="0">' + placetogo + '</option>').hide();
            }
        });

        $(document).on('change', '#slb_Country', function (ev) {
            var $_this = $(this);
            if (parseInt($_this.val()) > 0) {
                if ($SiteActive_region == '1') {
                    loadRegion($_this.val());
                    $('#slb_CityID').hide();
                    $('#slb_placetogoID').hide();
                } else {
                    loadCity($_this.val());
                }
            } else {
                $('#slb_RegionID').hide();
                $('#slb_CityID').hide();
                $('#slb_placetogoID').hide();

            }
        });

        $(document).on('change', '#slb_RegionID', function (ev) {
            var $_this = $(this);
            if ($SiteModActive_country == '1') {
                var $country_id = $('#slb_Country').val();
                if ($country_id == undefined) {
                    $country_id = $('#Hid_Country').val();
                }
                loadCity($country_id, $_this.val());
            } else {
                loadCity(0, $_this.val());
            }
        });

        $(document).on('change', '#slb_CityID', function (ev) {
            var $_this = $(this);
            if ($SiteModActive_country == '1') {
                var $country_id = $('#slb_Country').val();
                if ($country_id == undefined) {
                    $country_id = $('#Hid_Country').val();
                }
                loadPlaceTogo($country_id, $_this.val());
            } else {
                loadPlaceTogo(0, $_this.val());
            }
        });

        // Destination

        $(document).on('click', '.ajQuickAddDestination', function (ev) {
            var $_this = $(this);
            if ($SiteModActive_continent == '1') {
                var $chauluc_id = $('#slb_Chauluc').val();
            }
            if ($SiteModActive_country == '1') {
                var $country_id = $('#slb_Country').val();
                if ($country_id != undefined || $country_id == 0) {
                    var $countryID = $('#slb_Country');
                    setSelectOpen($countryID);
                } else {
                    $country_id = 1;
                }
            }
            if ($SiteActive_region == '1') {
                var $region_id = $('#slb_RegionID').val();
            }
            if ($SiteActive_city == '1') {
                var $city_id = $('#slb_CityID').val();
            }
            if ($SiteActive_city == '1') {
                var $placetogo_id = $('#slb_placetogoID').val();
            }

            /**/
            var adata = {};
            adata['chauluc_id'] = $chauluc_id;
            adata['country_id'] = $country_id;
            adata['region_id'] = $region_id;
            adata['city_id'] = $city_id;
            adata['placetogo_id'] = $placetogo_id;
            adata['tour_id'] = $tour_id;

            vietiso_loading(1);
            $.ajax({
                type: "POST",
                url: path_ajax_script + '/?mod=' + mod + '&act=ajaxAddMoreTourDestination',
                data: adata,
                dataType: "html",
                success: function (html) {
                    vietiso_loading(0);
                    if (html.indexOf('_SUCCESS') >= 0) {
                        loadListDestination($tour_id);
                    }
                    if (html.indexOf('_EXIST') >= 0) {
                        alertify.error(exist_error);
                    }
                }
            });
            return 0;
        });

        $(document).on('click', '.removeDestination', function (ev) {
            var $_this = $(this);
            if (confirm(confirm_delete)) {
                vietiso_loading(1);
                $.ajax({
                    type: "POST",
                    url: path_ajax_script + '/?mod=' + mod + '&act=ajaxDeleteTourDestination',
                    data: {
                        "tour_destination_id": $_this.attr('data')
                    },
                    dataType: "html",
                    success: function (html) {
                        vietiso_loading(0);
                        var $country_id = $('#slb_Country').val();
                        if ($country_id == undefined) {
                            $country_id = $('#Hid_Country').val();
                        }
                        if ($('#slb_CityID').is(':visible')) {
                            loadCity($country_id, $('#slb_RegionID').val());
                        }
                        loadListDestination($tour_id);
                    }
                });
                return false;
            }
        });

        $(document).on('click', '.ajRemoveAllDestinationInTour', function (ev) {
            var $_this = $(this);
            if (confirm(confirm_delete)) {
                vietiso_loading(1);
                $.ajax({
                    type: "POST",
                    url: path_ajax_script + '/?mod=' + mod + '&act=ajaxDeleteAllTourDestination',
                    data: {
                        "tour_id": tour_id
                    },
                    dataType: "html",
                    success: function (html) {
                        vietiso_loading(0);
                        var $country_id = $('#slb_Country').val();
                        if ($country_id == undefined) {
                            $country_id = $('#Hid_Country').val();
                        }
                        if ($('#slb_CityID').is(':visible')) {
                            loadCity($country_id, $('#slb_RegionID').val());
                        }
                        loadListDestination(tour_id);
                    }
                });
                return false;
            }
        });

    }

    if ($SiteHasItineraryTours == 1) {
        $(document).on('click', '#clickToAddItinerary', function(ev) {
            vietiso_loading(1);
            $.ajax({
                type: "POST",
                url: path_ajax_script + '/index.php?mod=' + mod + '&act=SiteFrmTourItinerary',
                data: {
                    'tour_id': tour_id,
                    'tp': 'F'
                },
                dataType: "html",
                success: function(html) {
                    makepopupnotresize('90%', 'auto', html, 'SiteFrmTourItinerary');
                    $('#SiteFrmTourItinerary').css('top', '20px');
                    var $editorID = $('.textarea_itinerary_content_editor').attr('id');
                    $('#' + $editorID).isoTextAreaFull();
                    vietiso_loading(0);
                }
            });
            return false;
        });

        $(document).on('click', '#clickToAddItinerary_contingency', function(ev) {
            vietiso_loading(1);
            $.ajax({
                type: "POST",
                url: path_ajax_script + '/index.php?mod=' + mod + '&act=SiteFrmTourItineraryContingency',
                data: {
                    'tour_id': tour_id,
                    'tp': 'F'
                },
                dataType: "html",
                success: function(html) {
                    makepopupnotresize('90%', 'auto', html, 'SiteFrmTourItinerary');
                    $('#SiteFrmTourItinerary').css('top', '20px');
                    var $editorID = $('.textarea_itinerary_content_editor').attr('id');
                    $('#' + $editorID).isoTextAreaFix();
                    vietiso_loading(0);
                }
            });
            return false;
        });

        $(document).on('click', '.clickEditItinerary', function(ev) {
            var $_this = $(this);
            vietiso_loading(1);
            $.ajax({
                type: "POST",
                url: path_ajax_script + '/index.php?mod=' + mod + '&act=SiteFrmTourItinerary',
                data: {
                    'tour_itinerary_id': $_this.attr('data'),
                    'tour_id': tour_id,
                    'tp': 'F'
                },
                dataType: "html",
                success: function(html) {
                    makepopupnotresize('90%', 'auto', html, 'SiteFrmTourItinerary');
                    $('#SiteFrmTourItinerary').css('top', '20px');
                    var $editorID = $('.textarea_itinerary_content_editor').attr('id');
                    $('#' + $editorID).isoTextAreaFull();
                    if ($SiteHasHotel_Tours == 1) {
                        loadListHotelItinerary(tour_id, $_this.attr('data'), '');
                    }
                    vietiso_loading(0);
                }
            });
            return false;
        });

        $(document).on('click', '.clickEditItineraryContingency', function(ev) {
            var $_this = $(this);
            vietiso_loading(1);
            $.ajax({
                type: "POST",
                url: path_ajax_script + '/index.php?mod=' + mod + '&act=SiteFrmTourItineraryContingency',
                data: {
                    'tour_itinerary_id': $_this.attr('data'),
                    'tour_id': tour_id,
                    'tp': 'F'
                },
                dataType: "html",
                success: function(html) {
                    makepopupnotresize('90%', 'auto', html, 'SiteFrmTourItinerary');
                    $('#SiteFrmTourItinerary').css('top', '20px');
                    var $editorID = $('.textarea_itinerary_content_editor').attr('id');
                    $('#' + $editorID).isoTextAreaFix();
                    if ($SiteHasHotel_Tours == 1) {
                        loadListHotelItinerary(tour_id, $_this.attr('data'), '');
                    }
                    vietiso_loading(0);
                }
            });
            return false;
        });

        $(document).on('click', '.btnSaveTourItinerary', function(ev) {
            var $_this = $(this);
            var $_form = $_this.closest('.frmPop');
            var $day = $_form.find('input[name=day]');
            var $day2 = $_form.find('input[name=day2]');

            var $meals = getCheckBoxValueByClass('chk_Meal');
            var $transport = getCheckBoxValueByClass('chk_Transport');
            var $editorID = $('.textarea_itinerary_content_editor').attr('id');
            var $content = tinyMCE.get($editorID).getContent();
            var $image = $_form.find('input[name=isoman_url_image]');
            var $tour_itinerary_id = $_this.attr('tour_itinerary_id');
            var $is_show_image = $('input[name=is_show_image]:checked').val();

            if ($day.val() == '') {
                $day.focus().addClass('error');
                alertify.error(field_is_required);
                return false;
            }
            /**/
            var adata = {};
            adata['day'] = $.trim($day.val());
            adata['day2'] = $.trim($day2.val());
            adata['meals'] = $meals;
            adata['transport'] = $transport;
            adata['content'] = $content;
            adata['image'] = $image.val();
            adata['tour_itinerary_id'] = $tour_itinerary_id;
            adata['is_show_image'] = $is_show_image;
            adata['tour_id'] = $tour_id;
            adata['tp'] = 'S';

            vietiso_loading(1);
            $('#frmItinerary').ajaxSubmit({
                type: "POST",
                url: path_ajax_script + '/index.php?mod=' + mod + '&act=SiteFrmTourItinerary',
                data: adata,
                dataType: "html",
                success: function(html) {
                    vietiso_loading(0);
                    if (html.indexOf('_INSERT_SUCCESS') >= 0) {
                        loadTourItinerary($tour_id);
                        loadTourItineraryContingency($tour_id);
                        $_this.closest('.frmPop').find('.close_pop').trigger('click');
                    }
                    if (html.indexOf('_UPDATE_SUCCESS') >= 0) {
                        loadTourItinerary($tour_id);
                        loadTourItineraryContingency($tour_id);
                        $_this.closest('.frmPop').find('.close_pop').trigger('click');
                    }
                    if (html.indexOf('_ERROR') >= 0) {
                        alertify.error(insert_error);
                    }
                    if (html.indexOf('_EXIST') >= 0) {
                        alertify.error(exist_error);
                    }
                    if (html.indexOf('day_invalid') >= 0) {
                        $day.focus();
                        alertify.error('Error !');
                    }
                    // window.location.reload(false);
                }
            });
            return false;
        });

        $(document).on('click', '.btnSaveTourItineraryContingency', function(ev) {
            var $_this = $(this);
            var $_form = $_this.closest('.frmPop');
            var $title_contingency = $_form.find('input[name=title_contingency]');

            var $meals = getCheckBoxValueByClass('chk_Meal');
            var $transport = getCheckBoxValueByClass('chk_Transport');
            var $editorID = $('.textarea_itinerary_content_editor').attr('id');
            var $content = tinyMCE.get($editorID).getContent();
            var $image = $_form.find('input[name=isoman_url_image]');
            var $tour_itinerary_id = $_this.attr('tour_itinerary_id');
            var $is_show_image = $('input[name=is_show_image]:checked').val();

            /**/
            var adata = {};

            adata['title_contingency'] = $title_contingency.val();
            adata['meals'] = $meals;
            adata['transport'] = $transport;
            adata['content'] = $content;
            adata['image'] = $image.val();
            adata['tour_itinerary_id'] = $tour_itinerary_id;
            adata['is_show_image'] = $is_show_image;
            adata['tour_id'] = $tour_id;
            adata['tp'] = 'S';

            vietiso_loading(1);
            $('#frmItinerary').ajaxSubmit({
                type: "POST",
                url: path_ajax_script + '/index.php?mod=' + mod + '&act=SiteFrmTourItineraryContingency',
                data: adata,
                dataType: "html",
                success: function(html) {
                    vietiso_loading(0);
                    if (html.indexOf('_INSERT_SUCCESS') >= 0) {
                        loadTourItinerary($tour_id);
                        loadTourItineraryContingency($tour_id);
                        $_this.closest('.frmPop').find('.close_pop').trigger('click');
                    }
                    if (html.indexOf('_UPDATE_SUCCESS') >= 0) {
                        loadTourItinerary($tour_id);
                        loadTourItineraryContingency($tour_id);
                        $_this.closest('.frmPop').find('.close_pop').trigger('click');
                    }
                    if (html.indexOf('_ERROR') >= 0) {
                        alertify.error(insert_error);
                    }
                    if (html.indexOf('_EXIST') >= 0) {
                        alertify.error(exist_error);
                    }
                    if (html.indexOf('day_invalid') >= 0) {
                        $day.focus();
                        alertify.error('Error !');
                    }
                }
            });
            return false;
        });

        $(document).on('click', '.moveTourItinerary', function(ev) {
            var _this = $(this);
            /**/
            var adata = {};
            adata['tour_itinerary_id'] = _this.attr('data');
            adata['tour_id'] = tour_id;
            adata['direct'] = _this.attr('direct');
            adata['tp'] = 'M';

            vietiso_loading(1);
            $.ajax({
                type: 'POST',
                url: path_ajax_script + '/index.php?mod=' + mod + '&act=SiteFrmTourItinerary',
                data: adata,
                dataType: 'html',
                success: function(html) {
                    loadTourItinerary(tour_id);
                    loadTourItineraryContingency(tour_id);
                    vietiso_loading(0);
                }
            });
        });

        $(document).on('click', '.clickDeleteItinerary', function(ev) {
            var _this = $(this);
            if (confirm(confirm_delete)) {
                vietiso_loading(1);
                $.ajax({
                    type: 'POST',
                    url: path_ajax_script + '/index.php?mod=' + mod + '&act=SiteFrmTourItinerary',
                    data: adata = {
                        'tour_id': tour_id,
                        'tour_itinerary_id': _this.attr('data'),
                        'tp': 'D'
                    },
                    dataType: 'html',
                    success: function(html) {
                        loadTourItinerary(tour_id);
                        loadTourItineraryContingency(tour_id);
                        alertify.success(delete_success);
                        vietiso_loading(0);
                        window.location.reload(true);
                    }
                });
            }
            return false;
        });

        $(document).on('click', '.clickDeleteItineraryContingency', function(ev) {
            var _this = $(this);
            if (confirm(confirm_delete)) {
                vietiso_loading(1);
                $.ajax({
                    type: 'POST',
                    url: path_ajax_script + '/index.php?mod=' + mod + '&act=SiteFrmTourItineraryContingency',
                    data: adata = {
                        'tour_id': tour_id,
                        'tour_itinerary_id': _this.attr('data'),
                        'tp': 'D'
                    },
                    dataType: 'html',
                    success: function(html) {
                        loadTourItinerary(tour_id);
                        loadTourItineraryContingency(tour_id);
                        alertify.success(delete_success);
                        vietiso_loading(0);
                    }
                });
            }
            return false;
        });
    }

    $(document).on('click', '.clickEditTourGroupStartDate', function(ev) {
        var $_this = $(this);
        vietiso_loading(1);
        $.ajax({
            type: "POST",
            url: path_ajax_script + '/index.php?mod=' + mod + '&act=ajLoadTourPriceGroup',
            data: {
                'tour_start_date_id': $_this.attr('tour_start_date_id'),
                'tour_id': $_this.attr('tour_id'),
                'departure': $_this.attr('departure'),
                'tp': 'F'
            },
            dataType: "html",
            success: function(html) {
                makepopupnotresize('90%', 'auto', html, 'SiteFrmTourPriceGroup');
                $('#SiteFrmTourPriceGroup').css('top', '20px');
                var $editorID = $('.textarea_itinerary_content_editor').attr('id');
                $('#' + $editorID).isoTextAreaFull();
                vietiso_loading(0);
            }
        });
        return false;
    });

    $(document).on('click', '.clickDeleteTourGroupStartDate', function(ev) {
        if (confirm(confirm_delete)) {
            vietiso_loading(1);
            var $_this = $(this);
            $.ajax({
                type: "POST",
                url: path_ajax_script + '/?mod=' + mod + '&act=ajDeleteTourGroupStartDate',
                data: {
                    'tour_start_date_id': $_this.attr("tour_start_date_id"),
                    'tour_id': tour_id,
                    'departure': $_this.attr("departure"),
                    'type':'GROUP',
                },
                dataType: "html",
                success: function(html) {
                    vietiso_loading(0);
                    loadListPriceTourGroupStartDate();
                }
            });
        }
        return false;
    });

    $(document).on('click', '.clickCopyTourGroupStartDate', function(ev) {
        var $_this = $(this);
        $.ajax({
            type: "POST",
            url: path_ajax_script + '/?mod=' + mod + '&act=ajCopyPriceStartDateGroup',
            data: {
                'tour_start_date_id': $_this.attr("tour_start_date_id"),
                'tour_id': tour_id,
                'departure': $_this.attr("departure"),
                'type':'GROUP',
                'tp':'COPY',
            },
            dataType: "html",
            success: function(html) {
                vietiso_loading(0);
                loadListPriceTourGroupStartDate();
            }
        });
        return false;
    });

    $(document).on('click', '.save_and_continue_tour', function (ev) {
        // var all_name = getInputSelectAttr('name');
        // var all_name_val = getInputSelectValAttr('value');
        var arr = getInputSelectAttr('name'),present_step =$(this).attr('present_step'),next_step=$(this).attr('next_step'),tour_id=$(this).attr('tour_id'),cat_run=$(this).attr('cat_run'),skip=$(this).attr('status') ;
        arr['tour_id'] =tour_id;
        if(skip){
            arr['skip'] =skip;
        }
        // console.log(arr);
        $.ajax({
            type: "POST",
            url: path_ajax_script + '/?mod=' + mod + '&act=ajSaveDataasdsad',
            cache: false,
            data: arr,
            dataType: "json",
            success: function (json) {
                if(json.result == 'success'){

                    if(present_step == 'title-tripcode'){
                        $('.tour_view_text').text(json.title);
                        $('.link_overview strong').text(json.trip_code);
                        $('.preview_tour_ex').attr('href',json.url);
                    }

                    if(present_step == 'image-file-tour'){
                        $('.image_nav_tour').attr('src',json.image);
                    }

                    if(json.caution == 'next'){
                        var p_step = present_step.split('/');
                        if(p_step[1]){
                            $('#'+p_step[1]).closest('li').removeAttr('class').addClass('check_success');
                        }else{
                            $('#'+p_step[0]).closest('li').removeAttr('class').addClass('check_success');
                        }
                        if(next_step !='SaveAll'){
                            var next_s = next_step.split('/');
                            var numm = next_s.length;
                            // console.log(numm);
                            if(numm == 2){
                                // alert(numm);
                                openURL(path_ajax_script+'/tour/insert/'+tour_id+'/'+next_s[0]+'/'+next_s[1]);
                                $(".box_left_opt_set a").removeAttr('class').addClass('collapsed');
                                $("#"+next_s[0]+"_tg_a").removeAttr('class');
                                $("#"+cat_run+"_tg").removeClass('in');
                                $("#"+next_s[0]+"_tg").addClass('in').removeAttr('style');
                                $("#"+next_s[1]).css({'color':'#4094ff','font-weight':'bold'});
                                // console.log(path_ajax_script+'/tour/insert/'+tour_id+'/'+next_s[0]+'/'+next_s[1]);
                            }else{
                                $("#"+next_step+"_tg_a").removeAttr('class').addClass('collapsed');
                                $("#"+cat_run+"_tg").removeClass('in');
                                $("#"+cat_run+"_tg").addClass('in').removeAttr('style');
                                $("#"+next_step).css({'color':'#4094ff','font-weight':'bold'});
                                openURL(path_ajax_script+'/tour/insert/'+tour_id+'/'+cat_run+'/'+next_step);
                                // console.log(path_ajax_script+'/tour/insert/'+tour_id+'/'+cat_run+'/'+next_s[1]);
                            }
                        }else{
                            window.location.href = path_ajax_script+"/?mod=" + mod + "&message=UpdateSuccess";
                        }
                    }
                    if(json.caution == 'skip'){
                        var p_step1 = present_step.split('/');
                        if(p_step1[1]){
                            $('#'+p_step1[1]).closest('li').addClass('check_caution');
                        }else{
                            $('#'+p_step1[0]).closest('li').addClass('check_caution');
                        }
                        var next_s = next_step.split('/');
                        var numm = next_s.length;
                        // console.log(numm);
                        if(numm == 2){
                            // alert(numm);
                            openURL(path_ajax_script+'/tour/insert/'+tour_id+'/'+next_s[0]+'/'+next_s[1]);
                            $(".box_left_opt_set a").removeAttr('class').addClass('collapsed');
                            $("#"+next_s[0]+"_tg_a").removeAttr('class');
                            $("#"+cat_run+"_tg").removeClass('in');
                            $("#"+next_s[0]+"_tg").addClass('in').removeAttr('style');
                            // $("#"+next_s[1]).css({'color':'#4094ff','font-weight':'bold'});
                            // console.log(path_ajax_script+'/tour/insert/'+tour_id+'/'+next_s[0]+'/'+next_s[1]);
                        }else{
                            $("#"+next_step+"_tg_a").removeAttr('class').addClass('collapsed');
                            $("#"+cat_run+"_tg").removeClass('in');
                            $("#"+cat_run+"_tg").addClass('in').removeAttr('style');
                            // $("#"+next_step).css({'color':'#4094ff','font-weight':'bold'});
                            openURL(path_ajax_script+'/tour/insert/'+tour_id+'/'+cat_run+'/'+next_step);
                            // console.log(path_ajax_script+'/tour/insert/'+tour_id+'/'+cat_run+'/'+next_s[1]);
                        }
                    }
                }
                // console.log(path_ajax_script+'/tour/insert/'+tour_id+'/'+cat_run+'/'+next_step);
            }
        });

    })

    $(document).on('click', '.back_step', function (ev) {
        // var all_name = getInputSelectAttr('name');
        // var all_name_val = getInputSelectValAttr('value');
        var prev_step =$(this).attr('prev_step'),tour_id=$(this).attr('tour_id'),cat_run=$(this).attr('cat_run');
        var prev_s = prev_step.split('/');
        var numm = prev_s.length;
        if(numm == 2){
            openURL(path_ajax_script+'/tour/insert/'+tour_id+'/'+prev_s[0]+'/'+prev_s[1]);
            $(".box_left_opt_set a").removeAttr('class').addClass('collapsed');
            $("#"+prev_s[0]+"_tg_a").removeAttr('class');
            $("#"+cat_run+"_tg").removeClass('in');
            $("#"+prev_s[0]+"_tg").addClass('in').removeAttr('style');
            $("#"+prev_s[1]).css({'color':'#4094ff','font-weight':'bold'});
        }else{
            $("#"+prev_step+"_tg_a").removeAttr('class').addClass('collapsed');
            $("#"+cat_run+"_tg").removeClass('in');
            $("#"+cat_run+"_tg").addClass('in').removeAttr('style');
            $("#"+prev_step).css({'color':'#4094ff','font-weight':'bold'});
            openURL(path_ajax_script+'/tour/insert/'+tour_id+'/'+cat_run+'/'+prev_step);
        }
    })

    $(document).on('click', '.up_grp_size', function (ev) {
        var all_select_grp = getInputSelectGrpSize('name');
        all_select_grp['tour_id'] =tour_id;
        $.ajax({
            type: "POST",
            url: path_ajax_script + '/?mod=' + mod + '&act=ajSaveGrpSize',
            cache: false,
            data: all_select_grp,
            dataType: "json",
            success: function (json) {
                if(json.result == 'success'){
                    if(is_depart == 1){
                        if(is_check_depart){
                            loadListPriceTourGroupStartDate();
                        }else{
                            loadTourPriceGroupNoDeparture();
                        }
                    }else{
                        loadTourPriceGroupNoDeparture();
                    }
                    // console.log('ok');
                    /*console.log(is_depart);
                    console.log(is_check_depart);*/
                }
                if(json.result == 'error'){
                    console.log('error');
                }
                // console.log(json);
            }
        });
    })
});



$(document).on('click', '#clickToAddDay', function(ev) {
    var $_this = $(this);
    vietiso_loading(1);
    $.ajax({
        type: "POST",
        url: path_ajax_script + '/?mod=' + mod + '&act=ajAddHotPromotion',
        data: {
            'target_id': tour_id,
            'type': 'TOUR',
        },
        dataType: "html",
        success: function(html) {
            vietiso_loading(0);
            loadListHotTourPromotion();
        }
    });
    return false;
});

$(document).on('click', '.clickToAddNewTourGroupStartDate', function(ev) {
    var $_this = $(this);
    if ($("#multiDate").val() == '') {
        $("#multiDate").focus();
        return false;
    }
    vietiso_loading(1);
    $.ajax({
        type: "POST",
        url: path_ajax_script + '/?mod=' + mod + '&act=ajAddGroupStartDate',
        data: {
            'tour_id': tour_id,
            'type': 'GROUP',
            'start_date': $("#multiDate").val()
        },
        dataType: "html",
        success: function(html) {
            vietiso_loading(0);
            loadListPriceTourGroupStartDate();
            //loadTourPriceUnitStartDate();
            $_this.closest(".frmPop").find(".close_pop").click();
        }
    });
    return false;
});

$(document).on('click', '.clickDeleteTourStartDate', function(ev) {
    if (confirm(confirm_delete)) {
        vietiso_loading(1);
        var $_this = $(this);
        $.ajax({
            type: "POST",
            url: path_ajax_script + '/?mod=' + mod + '&act=ajDeleteTourStartDate',
            data: {
                'tour_start_date_id': $_this.attr("tour_start_date_id"),
                'tour_id': tour_id,
                'departure': $_this.attr("departure")
            },
            dataType: "html",
            success: function(html) {
                vietiso_loading(0);
                loadTourPriceUnitStartDate();
            }
        });
    }
    return false;
});

$(document).on('click', '.clickCopyTourGroupStartDate', function(ev) {
    var $_this = $(this);
    $.ajax({
        type: "POST",
        url: path_ajax_script + '/?mod=' + mod + '&act=ajCopyPriceStartDateGroup',
        data: {
            'tour_start_date_id': $_this.attr("tour_start_date_id"),
            'tour_id': tour_id,
            'departure': $_this.attr("departure"),
            'type':'GROUP',
            'tp':'COPY',
        },
        dataType: "html",
        success: function(html) {
            vietiso_loading(0);
            loadListPriceTourGroupStartDate();
        }
    });
    return false;
});

$(document).on('click', '.clickPasteTourGroupStartDate', function(ev) {
    var $_this = $(this);
    $.ajax({
        type: "POST",
        url: path_ajax_script + '/?mod=' + mod + '&act=ajCopyPriceStartDateGroup',
        data: {
            'tour_start_date_id': $_this.attr("tour_start_date_id"),
            'tour_id': tour_id,
            'departure': $_this.attr("departure"),
            'type':'GROUP',
            'tp':'PASTE',
        },
        dataType: "html",
        success: function(html) {
            vietiso_loading(0);
            loadListPriceTourGroupStartDate();
        }
    });
    return false;
});

$(document).on('click', '.clickDeleteTourGroupStartDate', function(ev) {
    if (confirm(confirm_delete)) {
        vietiso_loading(1);
        var $_this = $(this);
        $.ajax({
            type: "POST",
            url: path_ajax_script + '/?mod=' + mod + '&act=ajDeleteTourGroupStartDate',
            data: {
                'tour_start_date_id': $_this.attr("tour_start_date_id"),
                'tour_id': tour_id,
                'departure': $_this.attr("departure"),
                'type':'GROUP',
            },
            dataType: "html",
            success: function(html) {
                vietiso_loading(0);
                loadListPriceTourGroupStartDate();
            }
        });
    }
    return false;
});

function setSelectBoxDestination() {
    if ($SiteHasGroup_Tours == 1) {
        if ($tourgroup_ID == 1) {
            if ($SiteModActive_continent == '1') {
                $('#slb_Country').hide();
                $('#slb_RegionID').hide();
                $('#slb_CityID').hide();
                $('#slb_placetogoID').hide();
            } else {
                if ($SiteModActive_country == '1') {
                    loadCountry();
                    $('#slb_RegionID').hide();
                    $('#slb_CityID').hide();
                    $('#slb_placetogoID').hide();
                } else {
                    if ($SiteActive_region == '1') {
                        loadRegion();
                        $('#slb_CityID').hide();
                        $('#slb_placetogoID').hide();
                    } else if ($SiteActive_city == '1') {
                        loadCity();
                    } else {
                        $('#slb_CityID').hide();
                    }
                }
            }
        } else {
            $('#slb_Chauluc').hide();
            $('#slb_Country').hide();

            var $country_id = $('#Hid_Country').val();
            if ($SiteActive_region == '1') {
                loadRegion($country_id);
                $('#slb_CityID').hide();
                $('#slb_placetogoID').hide();
            } else if ($SiteActive_city == '1') {
                loadCity($country_id);
            } else {
                $('#slb_CityID').hide();
                $('#slb_placetogoID').hide();
            }
        }
    } else {
        if ($SiteModActive_continent == '1') {
            $('#slb_Country').hide();
            $('#slb_RegionID').hide();
            $('#slb_CityID').hide();
            $('#slb_placetogoID').hide();
        } else {
            if ($SiteModActive_country == '1') {
                loadCountry();
                $('#slb_RegionID').hide();
                $('#slb_CityID').hide();
                $('#slb_placetogoID').hide();
            } else {
                if ($SiteActive_region == '1') {
                    loadRegion();
                    $('#slb_CityID').hide();
                    $('#slb_placetogoID').hide();
                } else if ($SiteActive_city == '1') {
                    loadCity();
                } else {
                    $('#slb_CityID').hide();
                    $('#slb_placetogoID').hide();
                }
            }
        }
    }

    if ($SiteHasExtensionTours == '1') {
        // Tour Extension

        $(document).on('click', '.clickChooiseTour', function(ev) {
            var $_this = $(this);
            vietiso_loading(1);
            $.ajax({
                type: 'POST',
                url: path_ajax_script + '/index.php?mod=' + mod + '&act=ajAddTourExtension',
                data: {
                    'tour_1_id': tour_id,
                    'tour_2_id': $_this.attr('data')
                },
                dataType: 'html',
                success: function(html) {
                    vietiso_loading(0);
                    if (html.indexOf('_SUCCESS') >= 0) {
                        $_this.remove();
                        loadTourExtension(tour_id);
                    }
                    if (html.indexOf('_EXIST') >= 0) {
                        alertify.error(exist_error);
                    }
                }
            });
        });
        $(document).on('click', '.moveTourExtension', function(ev) {
            var _this = $(this);
            vietiso_loading(1);
            var adata = {
                'tour_extension_id': _this.attr('data'),
                'tour_1_id': tour_id,
                'direct': _this.attr('direct')
            };
            $.ajax({
                type: 'POST',
                url: path_ajax_script + '/index.php?mod=' + mod + '&act=ajMoveTourExtension',
                data: adata,
                dataType: 'html',
                success: function(html) {
                    vietiso_loading(0);
                    loadTourExtension(tour_id);
                }
            });
        });
        $(document).on('click', '.clickDeleteTourExtension', function(ev) {
            if (confirm(confirm_delete)) {
                var _this = $(this);
                vietiso_loading(1);
                $.ajax({
                    type: 'POST',
                    url: path_ajax_script + '/index.php?mod=' + mod + '&act=ajDeleteTourExtension',
                    data: {
                        "tour_extension_id": _this.attr('data')
                    },
                    dataType: 'html',
                    success: function(html) {
                        vietiso_loading(0);
                        loadTourExtension(tour_id);
                    }
                });
                return false;
            }
        });
    }
}

function loadListHotelItinerary($tour_id, $tour_itinerary_id, $keyword) {
    var adata = {
        'tour_id': $tour_id,
        'tour_itinerary_id': $tour_itinerary_id,
        'keyword': $keyword
    };
    $.ajax({
        type: "POST",
        url: path_ajax_script + '/index.php?mod=' + mod + '&act=ajaxLoadHotelItinerary',
        data: adata,
        dataType: "html",
        success: function(html) {
            $('#lstHotel').html(html);
            vietiso_loading(0);
        }
    });
}

function loadTourItinerary($tour_id) {
    $.ajax({
        type: "POST",
        url: path_ajax_script + '/index.php?mod=' + mod + '&act=SiteFrmTourItinerary',
        data: {
            'tour_id': $tour_id,
            'tp': 'L'
        },
        dataType: "html",
        success: function(html) {
            if (html.replace(" ", "") == "") {
                $("#holderCopyItinerary").hide();
                $("#tab3Note").addClass("iso-check-disabled").removeClass("iso-check");
            } else {
                $("#holderCopyItinerary").show();
                $("#tab3Note").removeClass("iso-check-disabled").addClass("iso-check");
            }
            $('#tblTourItinerary').html(html);
        }
    });
}

function loadTourItineraryContingency($tour_id) {
    $.ajax({
        type: "POST",
        url: path_ajax_script + '/index.php?mod=' + mod + '&act=SiteFrmTourItineraryContingency',
        data: {
            'tour_id': $tour_id,
            'tp': 'L'
        },
        dataType: "html",
        success: function(html) {
            if (html.replace(" ", "") == "") {
                $("#holderCopyItinerary").hide();
                $("#tab3Note").addClass("iso-check-disabled").removeClass("iso-check");
            } else {
                $("#holderCopyItinerary").show();
                $("#tab3Note").removeClass("iso-check-disabled").addClass("iso-check");
            }
            $('#tblTourItinerary_contingency').html(html);
        }
    });
}

function loadCountry($chauluc_id, $khuvuc_id, $country_id) {
    $('#slb_Country').html('<option value="0">' + loading + '</option>')
    vietiso_loading(1);
    $.ajax({
        type: "POST",
        url: path_ajax_script + "/?mod=" + mod + "&act=ajLoadCountry",
        data: {
            "chauluc_id": $chauluc_id,
            "khuvuc_id": $khuvuc_id,
            "country_id": $country_id
        },
        dataType: "html",
        success: function(html) {
            vietiso_loading(0);
            if (html.indexOf('EMPTY') >= 0) {
                $('#slb_Country').hide();
            } else {
                $('#slb_Country').html(html).show();
            }
            /**/
            $('#slb_RegionID').hide();
            $('#slb_CityID').hide();
            $('#slb_placetogoID').hide();
        }
    });
}

function loadRegion($country_id, $region_id) {
    $('#slb_RegionID').html('<option value="0">' + loading + '</option>')
    vietiso_loading(1);
    $.ajax({
        type: "POST",
        url: path_ajax_script + "/?mod=" + mod + "&act=ajLoadRegion",
        data: {
            "country_id": $country_id
        },
        dataType: "html",
        success: function(html) {
            vietiso_loading(0);
            if (html.indexOf('EMPTY') >= 0) {
                $('#slb_RegionID').hide();
                loadCity($country_id);
            } else {
                $('#slb_RegionID').html(html).show();
            }
        }
    });
}

function loadCity($country_id, $region_id, $city_id, $tour_id) {
    $('#slb_CityID').html('<option value="0">' + loading + '</option>');
    vietiso_loading(1);
    $.ajax({
        type: "POST",
        url: path_ajax_script + "/?mod=" + mod + "&act=ajmakeSelectCityGlobal",
        data: {
            "country_id": $country_id,
            "region_id": $region_id,
            'city_id': $city_id,
            'tour_id': $tour_id
        },
        dataType: "html",
        success: function(html) {
            vietiso_loading(0);
            if (html.indexOf('EMPTY') >= 0) {
                $('#slb_CityID').hide();
            } else {

                $('#slb_CityID').html(html).chosen({width:'125px'});
                $("#slb_CityID").next().css({'float':'left','margin-bottom':'5px'});
                $('#slb_CityID').trigger("chosen:updated");

            }
        }
    });
}

function loadPlaceTogo($country_id, $city_id) {
    $('#slb_placetogoID').html('<option value="0">' + loading + '</option>');
    vietiso_loading(1);
    $.ajax({
        type: "POST",
        url: path_ajax_script + "/?mod=" + mod + "&act=ajmakeSelectPlaceToGoGlobal",
        data: {
            "country_id": $country_id,
            'city_id': $city_id
        },
        dataType: "html",
        success: function(html) {
            vietiso_loading(0);
            if (html.indexOf('EMPTY') >= 0) {
                $('#slb_placetogoID').hide();
            } else {
                $('#slb_placetogoID').html(html).show();
            }
        }
    });
}

function loadListDestination($tour_id) {
    vietiso_loading(1);
    $.ajax({
        type: "POST",
        url: path_ajax_script + '/?mod=' + mod + '&act=ajaxLoadTourDestination',
        data: {
            "tour_id": $tour_id
        },
        dataType: "html",
        success: function(html) {
            vietiso_loading(0);
            $('#lstDestination').html(html);
            loadMaps($tour_id);
        }
    });
}

function loadMaps(tour_id) {
    $.ajax({
        type: "POST",
        url: path_ajax_script + '/?mod=' + mod + '&act=map',
        data: {
            'tour_id': tour_id,
        },
        dataType: "html",
        success: function(html) {
            var $htm = html.split('$$$');
            $('#map_canvas').html($htm[0]);
            initialize('map_canvas');
        }
    });
}

function search_tour() {
    aj_search = setTimeout(function() {
        $.ajax({
            type: 'POST',
            url: path_ajax_script + '/index.php?mod=' + mod + '&act=ajGetSearch',
            data: {
                "keyword": $("#searchkey").val(),
                "tour_id": tour_id
            },
            dataType: 'html',
            success: function(html) {
                if (html.indexOf('_EMPTY') >= 0) {
                    $('#autosugget').hide();
                } else {
                    $('#autosugget').stop(false, true).slideDown();
                    $('#autosugget').find('.HTML_sugget').html(html);
                }
            }
        });
    }, 500);
}

function loadTourExtension(tour_id) {
    $.ajax({
        type: 'POST',
        url: path_ajax_script + '/index.php?mod=' + mod + '&act=ajLoadTourExtension',
        data: {
            "tour_1_id": tour_id
        },
        dataType: 'html',
        success: function(html) {
            if (html.replace(' ', '') == '') {
                $("#tab5Note").removeClass("iso-check").addClass("iso-check-disabled");
            } else {
                $('#tblTourExtension').html(html);
                $("#tab5Note").addClass("iso-check").removeClass("iso-check-disabled");
            }
        }
    });
}

function initSysGalleryTour() {
    $.ajax({
        type: "POST",
        url: path_ajax_script + '/index.php?mod=' + mod + '&act=ajInitTSysTourGallery',
        data: {
            'table_id': tour_id
        },
        dataType: "html",
        success: function(html) {
            $('#TourGalleryHolder').html(html);
            loadTableGallery(tour_id, '', 1, 10);
        }
    });
}

function loadTableGallery(table_id, keyword, $page, $number_per_page) {
    $.ajax({
        type: "POST",
        url: path_ajax_script + '/index.php?mod=' + mod + '&act=ajOpenTourGallery',
        data: {
            'table_id': table_id,
            'keyword': keyword,
            'page': $page,
            'number_per_page': $number_per_page,
            'tp': 'L'
        },
        dataType: "html",
        success: function(html) {
            //console.log(html);
            var $htm = html.split('$$$');
            $('#preview').html($htm[0]);
            $('#gallery_paginate').html($htm[1]);
        }
    });
}

function loadTourPriceGroupNoDeparture() {
    vietiso_loading(1);
    var $_this = $(this);
    $.ajax({
        type: "POST",
        url: path_ajax_script + '/?mod=' + mod + '&act=ajLoadTourPriceGroup',
        data: {
            'tour_id' : $tour_id,
            'tp'       : 'L'
        },
        dataType: "html",
        success: function(html) {
            vietiso_loading(0);
            $("#TourPriceGroupNoDeparture").html(html);
        }
    });
}

function loadListPriceTourGroupStartDate() {
    vietiso_loading(1);
    var $_this = $(this);
    $.ajax({
        type: "POST",
        url: path_ajax_script + '/?mod=' + mod + '&act=ajLoadListPriceTourGroupStartDate',
        data: {
            'tour_id': tour_id
        },
        dataType: "html",
        success: function(html) {
            vietiso_loading(0);
            $("#GroupStartDateHolder").html(html);
        }
    });
}

function getInputTextAttr(attr) {
    var result =
        $(".box_title_trip_code input").get();
    var columns = $.map(result, function(element) {
        return $(element).attr(attr);
    });

    return columns.join(",");
}

function getInputSelectAttr(attr) {
    $arr = {}
    var result_select =
        $(".box_title_trip_code select").get();
    var result_input_text =
        $(".box_title_trip_code input:text").get();
    var result_input_hidden =
        $(".box_title_trip_code input:hidden").get();
    var result_input_radio =
        $(".box_title_trip_code input:radio:checked").get();
    var result_input_checkbox =
        $(".box_title_trip_code input:checkbox:checked").get();
    var result_input_area =
        $(".box_title_trip_code textarea").get();

    $.map(result_select, function(element) {
        var key = $(element).attr(attr);
        if(key && key != 'undefined'){
            if($(element).val() !=''){
                $arr[key] = $(element).val();
            }
        }
    });
    $.map(result_input_text, function(element) {
        var key = $(element).attr(attr);
        if(key && key != 'undefined'){
            if($(element).val() !=''){
                $arr[key] = $(element).val();
            }
        }
    });
    $.map(result_input_hidden, function(element) {
        var key = $(element).attr(attr);
        if(key && key != 'undefined'){
            if($(element).val() !=''){
                $arr[key] = $(element).val();
            }
        }
    });
    $.map(result_input_radio, function(element) {
        var key = $(element).attr(attr);
        if(key && key != 'undefined'){
            if($(element).val() !=''){
                $arr[key] = $(element).val();
            }
        }
    });
    var columns = $.map(result_input_checkbox, function(element) {
        return $(element).attr("value");
    });
    $.map(result_input_checkbox, function(element) {
        var key = $(element).attr(attr);
        if(key && key != 'undefined'){
            $arr[key] = columns.join(",");
        }
    });
    $.map(result_input_area, function(element) {
        var key = $(element).attr(attr);
        var clas = $(element).attr('class');
        if(key && key != 'undefined'){
            if(clas == 'textarea_intro_editor_simple'){
                if(content() != ''){
                    $arr[key] = content();
                }
            }else{
                if($(element).val() != ''){
                    $arr[key]=$(element).val();
                }
            }

        }
    });

    return $arr;
}

function getInputSelectGrpSize(attr) {
    $arr = {}
    var result_select_grp =
        $(".box_title_trip_code select").get();
    $.map(result_select_grp, function(element) {
        var key = $(element).attr(attr);
        if(key && key != 'undefined'){
            $arr[key] = $(element).val();
        }
    });

    return $arr;
}


$(document).on('click', '.save_edit_img_gallery', function () {
    var _this = $(this);
    var img_val =  _this.closest('.form_edit_img').find('input[name=isoman_url_image]').val();
    var img_title =  _this.closest('.form_edit_img').find('input[name=title]').val();
    var img_id =  _this.attr('pvalTable');
    $.ajax({
        type: "POST",
        url: path_ajax_script + '/index.php?mod=' + mod + '&act=ajChangeEditImg',
        data: {'url_img':img_val,'title_img':img_title,'id': img_id},
        dataType: "json",
        success: function(json) {
            if(json['result'] == 'error'){
                alertify.success(json['mes']);
            }
            if(json['result'] == 'success'){
                _this.closest('.form_edit_img').find('.modal-title').text(img_title);
                $('#image_galry_'+img_id).attr('title',img_title);
                $('#image_galry_'+img_id+' img').attr('src',img_val);
                alertify.success(json['mes']);
                $('#edit_tour_image_'+img_id).modal("hide");
            }
            // $('#files').append(html);
            return false;
        }
    });
    return false; //intercept the link
});

$(document).on('click', '.close_image', function () {
    var _this = $(this);
    var pval = $(this).attr('pvalTable');
    $('#edit_tour_image_'+pval).modal("hide");
    return false; //intercept the link
});
$(document).on('click', '.del_gal_img', function () {
    var _this = $(this);
    var img_id = _this.attr('img_id');
    $.ajax({
        type: "POST",
        url: path_ajax_script + '/index.php?mod=' + mod + '&act=ajDeleteGalImg',
        data: {'img_id':img_id},
        dataType: "json",
        success: function(json) {
            if(json['result'] == 'error'){

                alertify.success(json['mes']);
            }
            if(json['result'] == 'success'){
                _this.closest('li').remove();
                alertify.success(json['mes']);
            }
            // $('#files').append(html);
            return false;
        }
    });
    return false; //intercept the link
});
$(".checkall_checkbox").live("click", function() {
    var $_this = $(this);
    var group = $_this.attr("group");
    if ($_this.is(":checked")) {
        $(".checkitem_checkbox[group='" + group + "']").attr("checked", "checked");
    } else {
        $(".checkitem_checkbox[group='" + group + "']").removeAttr("checked");
    }
});
// Tour Hotels
if ($SiteHasHotel_Tours == '1') {
    $(document).on('click', '.ajaxOpenChoiceHotel', function(ev) {
        var $_this = $(this);
        var adata = {};
        adata['tour_id'] = $_this.attr('tour_id');
        adata['tour_itinerary_id'] = $_this.attr('tour_itinerary_id');
        adata['tour_hotel_id'] = $_this.attr('tour_hotel_id');
        adata['tour_type_id'] = $tour_type_id;

        vietiso_loading(1);
        $.ajax({
            type: "POST",
            url: path_ajax_script + '/index.php?mod=' + mod + '&act=ajaxGetBoxHotelRecommend',
            dataType: "html",
            data: adata,
            success: function(html) {
                makepopup('80%', 'auto', html, 'pop_HotelRecommend');
                $('#pop_HotelRecommend').css('top', '30px');
                if ($tour_type_id == '1') {
                    loadCityHotelList();
                    setInterval(function() {
                        /*	$('select[name=countryhotel_id]').attr('disabled','disabled');*/
                    }, 100);
                }
                vietiso_loading(0);
            }
        });
        return false;
    });
    $(document).on('change', '#pop_HotelRecommend select[name=continenthotel_id]', function(ev) {
        var $_this = $(this);
        var $continent_id = $_this.val();

        vietiso_loading(1);
        $('#pop_HotelRecommend select[name=countryhotel_id]').html('<option>' + loading + '</option>');
        $.ajax({
            type: 'POST',
            url: path_ajax_script + "/index.php?mod=tour&act=ajaxSelectHotelCountry",
            data: {
                'continent_id': $continent_id
            },
            dataType: 'html',
            success: function(html) {
                $('#pop_HotelRecommend select[name=countryhotel_id]').html(html);
                vietiso_loading(0);
            }
        });
        var $keyword = $('#pop_HotelRecommend input[name=keypop]').val();
        var $number_per_page = $('#pop_HotelRecommend .paginate_length').val();
        var $star = $('#pop_HotelRecommend select[name=star]').val();
        var $tour_id = $('#pop_HotelRecommend #hid_tour_id').val();
        var $itinerary_id = $('#pop_HotelRecommend #hid_itinerary_id').val();
        reloadListHotel($continent_id, 0, 0, $star, $keyword, $tour_id, $itinerary_id, 1, $number_per_page);
    });
    $(document).on('change', '#pop_HotelRecommend select[name=countryhotel_id]', function(ev) {
        var $_this = $(this);
        var $country_id = $_this.val();
        var $city_id = 0;
        var $continent_id = $('#pop_HotelRecommend select[name=continent_id]').val();
        var $star = $('#pop_HotelRecommend select[name=star]').val();
        var $keyword = $('#pop_HotelRecommend input[name=keypop]').val();
        var $number_per_page = $('#pop_HotelRecommend .paginate_length').val();
        var $tour_id = $('#pop_HotelRecommend #hid_tour_id').val();
        var $tour_itinerary_id = $('#pop_HotelRecommend #hid_itinerary_id').val();

        if (parseInt($country_id) == 0) {
            $('#pop_HotelRecommend select[name=cityhotel_id]').html('<option>-- ' + Select + ' --</option>');
            $('#pop_HotelRecommend select[name=star]').html('<option>-- ' + Select + ' --</option>');
            return false;
        }
        /* Make combobox city */
        $.ajax({
            type: "POST",
            url: path_ajax_script + '/?mod=' + mod + '&act=ajmakeSelectCityHotelGlobal',
            data: {
                "country_id": $country_id
            },
            dataType: "html",
            success: function(html) {
                $('#pop_HotelRecommend select[name=cityhotel_id]').html(html);
            }
        });
        reloadListHotel($continent_id, $country_id, $city_id, $star, $keyword, $tour_id, $tour_itinerary_id, 1, $number_per_page);
    });
    $(document).on('change', '#pop_HotelRecommend select[name=cityhotel_id]', function(ev) {
        var $_this = $(this);
        var $continent_id = $('#pop_HotelRecommend select[name=continent_id]').val();
        var $country_id = $('#pop_HotelRecommend select[name=country_id]').val();
        var $keyword = $('#pop_HotelRecommend input[name=keypop]').val();
        var $number_per_page = $('#pop_HotelRecommend .paginate_length').val();
        var $star = $('#pop_HotelRecommend select[name=star]').val();
        var $tour_id = $('#pop_HotelRecommend #hid_tour_id').val();
        var $tour_itinerary_id = $('#pop_HotelRecommend #hid_itinerary_id').val();

        reloadListHotel($continent_id, $country_id, $_this.val(), $star, $keyword, $tour_id, $tour_itinerary_id, 1, $number_per_page);
    });
    $(document).on('click', '#pop_HotelRecommend .searchpop', function(ev) {
        var $continent_id = $('#pop_HotelRecommend select[name=continent_id]').val();
        var $country_id = $('#pop_HotelRecommend select[name=country_id]').val();
        var $city_id = $('#pop_HotelRecommend select[name=city_id]').val();
        var $keyword = $('#pop_HotelRecommend input[name=keypop]').val();
        var $star = $('#pop_HotelRecommend select[name=star]').val();
        var $number_per_page = $('#pop_HotelRecommend .paginate_length').val();
        var $tour_id = $('#pop_HotelRecommend #hid_tour_id').val();
        var $tour_itinerary_id = $('#pop_HotelRecommend #hid_itinerary_id').val();
        reloadListHotel($continent_id, $country_id, $city_id, $star, $keyword, $tour_id, $tour_itinerary_id, 1, $number_per_page);
    });
    $(document).on('click', '#pop_HotelRecommend .paginate_button', function(ev) {
        var $_this = $(this);
        var $continent_id = $('#pop_HotelRecommend select[name=continent_id]').val();
        var $country_id = $('#pop_HotelRecommend select[name=country_id]').val();
        var $city_id = $('#pop_HotelRecommend select[name=city_id]').val();
        var $star = $('#pop_HotelRecommend select[name=star]').val();
        var $keyword = $('#pop_HotelRecommend input[name=keypop]').val();
        var $tour_id = $('#pop_HotelRecommend #hid_tour_id').val();
        var $tour_itinerary_id = $('#pop_HotelRecommend #hid_itinerary_id').val();
        var $number_per_page = $('#pop_HotelRecommend .paginate_length').val();
        reloadListHotel($continent_id, $country_id, $city_id, $star, $keyword, $tour_id, $tour_itinerary_id, $_this.attr('page'), $number_per_page);
        return false;
    });
    $(document).on('click', '.btnChooiseHotel', function(ev) {
        var $_this = $(this);
        var $tour_id = $_this.attr('tour_id');
        var $tour_itinerary_id = $_this.attr('tour_itinerary_id');
        var $list_id = $('#list_selected_chkitem').val();

        var adata = {};
        adata['tour_id'] = $tour_id;
        adata['tour_itinerary_id'] = $tour_itinerary_id;
        adata['list_id'] = $list_id;

        vietiso_loading(1);
        $.ajax({
            type: 'POST',
            url: path_ajax_script + '/index.php?mod=' + mod + '&act=ajaxSaveTourHotel',
            data: adata,
            dataType: 'html',
            success: function(html) {
                if (html.indexOf('_EMPTY') >= 0) {
                    alertify.error('You must choose hotel !');
                }
                if (html.indexOf('_SUCCESS') >= 0) {
                    loadListHotelItinerary(tour_id, $tour_itinerary_id, '');
                    $_this.closest('.frmPop').find('.close_pop').trigger('click');
                }
            }
        });
        return false;
    });
    $(document).on('click', '.btn_delete_hotel_itinerary', function(ev) {
        var $_this = $(this);
        if (confirm(confirm_delete)) {
            var $tour_id = $_this.attr('_tour_id');
            var $tour_itinerary_id = $_this.attr('_tour_itinerary_id');

            vietiso_loading(1);
            $.ajax({
                type: "POST",
                url: path_ajax_script + '/index.php?mod=' + mod + '&act=ajaxDeleteHotelItinerary',
                data: {
                    'tour_hotel_id': $_this.attr('data')
                },
                dataType: "html",
                success: function(html) {
                    vietiso_loading(0);
                    loadListHotelItinerary(tour_id, $tour_itinerary_id, '');
                }
            });
        }
        return false;
    });
    $('#slb_MonthYear').live('change', function() {
        var $_this = $(this);
        $.ajax({
            type: "POST",
            url: path_ajax_script + "/?mod=" + mod + "&act=ajLoadListPriceTourGroupStartDate",
            data: {
                'tour_id': tour_id,
                "start_date": $_this.attr("start_date"),
                "departure": $_this.val(),
            },
            dataType: "html",
            success: function(html) {
                vietiso_loading(0);
                $("#GroupStartDateHolder").html(html);
            }
        });
    });
    $(document).on('change', '.h_tour_price_group', function(ev){
		var $_this = $(this);
		$.ajax({
			type: "POST",
			url: path_ajax_script+"/?mod="+mod+"&act=ajLoadTourPriceGroup",
			data:{
				'tour_id':$_this.attr("tour_id"),
				'tour_class_id':$_this.attr("tour_class_id"),
				'departure':$_this.attr("departure"),
				'tour_number_group_id':$_this.attr("tour_number_group_id"),
				'tour_visitor_type_id':$_this.attr("tour_visitor_type_id"),
				'tour_start_date_id':$_this.attr("tour_start_date_id"),
				"price":$_this.val(),
				'tp' : 'S'
			},
			dataType: "html",
			success: function(html){
				var htm = html.split('|||');
				$_this.val(htm[1]);
				if($_this.attr("departure")==''){
					loadTourPriceGroupNoDeparture();
				}
				loadTourPriceGroup($tour_id,$_this.attr("departure"),$_this.attr("tour_start_date_id"));
			}
		}); 
	});
	$(document).on('change', '.h_price_single_supply', function(ev){
		var $_this = $(this);
		$.ajax({
			type: "POST",
			url: path_ajax_script+"/?mod="+mod+"&act=ajLoadTourPriceGroup",
			data:{
				'tour_id':$_this.attr("tour_id"),
				'departure_date':$_this.attr("departure"),
				'tour_class_id':$_this.attr("tour_class_id"),
				'tour_start_date_id':$_this.attr("tour_start_date_id"),
				"price_single":$_this.val(),
				'tp' : 'SINGLE'
			},
			dataType: "html",
			success: function(html){
				loadTourPriceGroup($tour_id,$_this.attr("departure"),$_this.attr("tour_start_date_id"));
			}
		}); 
	});
	$(document).on('change', '#available', function(ev){
		var $_this = $(this);
		$.ajax({
			type: "POST",
			url: path_ajax_script+"/?mod="+mod+"&act=ajAddGroupStartDate",
			data:{
				'tour_id':$_this.attr("tour_id"),
				'tour_start_date_id':$_this.attr("tour_start_date_id"),
				'start_date':$_this.attr("start_date"),
				"available":$_this.val(),
				"type":'GROUP',
				'tp' : 'SaveAvailable'
			},
			dataType: "html",
			success: function(html){
				loadTourPriceGroup($tour_id,$_this.attr("start_date"),$_this.attr("tour_start_date_id"));
			}
		}); 
	});
	
	$(document).on('change', '#promotion', function(ev){
		var $_this = $(this);
		$.ajax({
			type: "POST",
			url: path_ajax_script+"/?mod="+mod+"&act=ajAddGroupStartDate",
			data:{
				'tour_id':$_this.attr("tour_id"),
				'tour_start_date_id':$_this.attr("tour_start_date_id"),
				'start_date':$_this.attr("start_date"),
				"promotion":$_this.val(),
				"type":'GROUP',
				'tp' : 'SavePromotion'
			},
			dataType: "html",
			success: function(html){
				loadTourPriceGroup($tour_id,$_this.attr("start_date"),$_this.attr("tour_start_date_id"));
			}
		}); 
	});
	$(document).on('change', '#price_ads', function(ev){
		var $_this = $(this);
		$.ajax({
			type: "POST",
			url: path_ajax_script+"/?mod="+mod+"&act=ajAddGroupStartDate",
			data:{
				'tour_id':$_this.attr("tour_id"),
				'tour_start_date_id':$_this.attr("tour_start_date_id"),
				'start_date':$_this.attr("start_date"),
				"price_ads":$_this.val(),
				"type":'GROUP',
				'tp' : 'SavePriceAds'
			},
			dataType: "html",
			success: function(html){
				loadTourPriceGroup($tour_id,$_this.attr("start_date"),$_this.attr("tour_start_date_id"));
			}
		}); 
	});
	$(document).on('change', '#deposit_departure', function(ev){
		var $_this = $(this);
		$.ajax({
			type: "POST",
			url: path_ajax_script+"/?mod="+mod+"&act=ajAddGroupStartDate",
			data:{
				'tour_id':$_this.attr("tour_id"),
				'tour_start_date_id':$_this.attr("tour_start_date_id"),
				'start_date':$_this.attr("start_date"),
				"deposit_departure":$_this.val(),
				"type":'GROUP',
				'tp' : 'SaveDeposit'
			},
			dataType: "html",
			success: function(html){
				loadTourPriceGroup($tour_id,$_this.attr("start_date"),$_this.attr("tour_start_date_id"));
			}
		}); 
	});
	$(document).on('change', '#close_sell_date', function(ev){
		var $_this = $(this);
		$.ajax({
			type: "POST",
			url: path_ajax_script+"/?mod="+mod+"&act=ajAddGroupStartDate",
			data:{
				'tour_id':$_this.attr("tour_id"),
				'tour_start_date_id':$_this.attr("tour_start_date_id"),
				'start_date':$_this.attr("start_date"),
				"close_sell_date":$_this.val(),
				"type":'GROUP',
				'tp' : 'SaveCloseSellDate'
			},
			dataType: "html",
			success: function(html){
				if (html.indexOf('_ERROR_CLOSE') >= 0) {
					alertify.error(Closing_date_must_sell_before_departure_of_tour);
				}
				if (html.indexOf('_ERROR_CLOSE2') >= 0) {
					alertify.error(The_date_of_sale_must_be_after_the_opening_date);
				}
				loadTourPriceGroup($tour_id,$_this.attr("start_date"),$_this.attr("tour_start_date_id"));
			}
		}); 
	});
	$(document).on('change', '#open_sell_date', function(ev){
		var $_this = $(this);
		$.ajax({
			type: "POST",
			url: path_ajax_script+"/?mod="+mod+"&act=ajAddGroupStartDate",
			data:{
				'tour_id':$_this.attr("tour_id"),
				'tour_start_date_id':$_this.attr("tour_start_date_id"),
				'start_date':$_this.attr("start_date"),
				"open_sell_date":$_this.val(),
				"type":'GROUP',
				'tp' : 'SaveOpenSellDate'
			},
			dataType: "html",
			success: function(html){
				if (html.indexOf('_ERROR_OPEN') >= 0) {
					alertify.error(The_opening_date_must_be_before_the_departure_of_the_tour);
				}
				loadTourPriceGroup($tour_id,$_this.attr("start_date"),$_this.attr("tour_start_date_id"));
			}
		}); 
	});
	$('input[class=ajvClkStartDate]').live('change',function(){
		var $_this = $(this);
		var adata = {
			'tp' : $_this.attr('tp'),
			'tp_order' : $_this.attr('tp_order'),
			'start_date':$_this.attr("start_date"),
			'tour_start_date_id': $_this.attr('data'),
			'tour_id':$_this.attr("tour_id"),
			'val' : $_this.is(':checked')?1:0
		};
		$.ajax({
			type: 'POST',
			url: path_ajax_script+'/index.php?mod=' + mod + '&act=ajAddGroupStartDate',
			data:adata,
			dataType:'html',
			success: function(html){
				loadTourPriceGroup($tour_id,$_this.attr("start_date"),$_this.attr('data'));
			}
		});
	});
    $(document).on('click', '.SiteClickNoPublic', function(ev){
        alert('Please enter a price in the price table');
    });
    $(document).on('click', '.clickEditTourGroupStartDate', function(ev) {
        var $_this = $(this);
        vietiso_loading(1);
        $.ajax({
            type: "POST",
            url: path_ajax_script + '/index.php?mod=' + mod + '&act=ajLoadTourPriceGroup',
            data: {
                'tour_start_date_id': $_this.attr('tour_start_date_id'),
                'tour_id': $_this.attr('tour_id'),
                'departure': $_this.attr('departure'),
                'tp': 'F'
            },
            dataType: "html",
            success: function(html) {
                makepopupnotresize('90%', 'auto', html, 'SiteFrmTourPriceGroup');
                $('#SiteFrmTourPriceGroup').css('top', '20px');
                var $editorID = $('.textarea_itinerary_content_editor').attr('id');
                $('#' + $editorID).isoTextAreaFull();
                vietiso_loading(0);
            }
        });
        return false;
    });
}

function loadTourPriceGroup($tour_id,$departure,$tour_start_date_id){
	var adata = {
		'tour_id' : $tour_id,
		'departure' : $departure,
		'tour_start_date_id' : $tour_start_date_id,
		'tp' : 'L'
	};
	vietiso_loading(1);
	$.ajax({
		type: "POST",
		url: path_ajax_script+"/?mod="+mod+"&act=ajLoadTourPriceGroup",
		data: adata,
		dataType: "html",
		success: function(html){
			vietiso_loading(2);
			$('#tblTourPriceGroup').html(html);
		}
	});
}
