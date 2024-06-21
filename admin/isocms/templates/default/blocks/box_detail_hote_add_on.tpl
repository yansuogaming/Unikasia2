<div class="box_title_trip_code">
    <div class="row d-flex full-height">
        <div class="fill_data_box">
            <div class="form_option_tour">
                <div class="inpt_tour">
                    <div class="filterbox border_0">
                        <div class="wrap">
                            <div class="searchbox searchbox_new">
                                <input id="searchkey" placeholder="{$core->get_Lang('searchtour')}" type="text" class="text" style="width:300px" />
                                <div class="autosugget" id="autosugget">
                                    <ul class="HTML_sugget"></ul>
                                    <div class="clearfix"></div>
                                    <a class="close_Div">{$core->get_Lang('close')}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hastable" style="margin-bottom:10px">
                        <table class="tbl-grid full-width table-striped table_responsive" cellspacing="0">
                            <thead><tr>
                                <th class="gridheader boder_top_none" width="50px"><strong>{$core->get_Lang('index')}</strong></th>
                                <th class="gridheader name_responsive text-left boder_top_none"><strong>{$core->get_Lang('nameoftrips')}</strong></th>
                                <th class="gridheader text-left hiden_responsive boder_top_none"><strong>{$core->get_Lang('duration')}</strong></th>
                                {if $clsConfiguration->getValue('SiteHasCat_Tours')}
                                    <th class="gridheader text-left hiden_responsive boder_top_none" width="200px">
                                        <strong>{$core->get_Lang('travelstyles')}</strong></th>
                                {/if}
                                <th class="gridheader hiden_responsive boder_top_none" width="50px"></th>
                            </tr></thead>
                            <tbody id="tblTourExtension"></tbody>
                        </table>
                    </div>
                </div>
            </div>
<!--
            <div class="btn_save_titile_trip_code">
                <a data-id="{$pvalTable}" tour_id="{$pvalTable}" cat_run="{$cat_run}" prev_step="{if $child_cat_menu_j_index_prev eq ''}{if $list_cat_menu_prev eq ''}{$child_cat_menu_j}{/if}{if $list_cat_menu_prev ne ''}{$list_cat_menu_prev}/{$child_cat_menu_prev[$count_child_cat_menu_prev]}{/if}{else}{$child_cat_menu_j_index_prev}{/if}" class="back_step">{$core->get_Lang('Back')}</a>
                <a id="btn-save-img-file"  tour_id="{$pvalTable}" cat_run="{$cat_run}" status="" present_step="{$child_cat_menu_j}" next_step="{if $child_cat_menu_j_index_next eq ''}{if $list_menu_tour_i_index_next.cat_menu eq ''}SaveAll{/if}{if $list_menu_tour_i_index_next.cat_menu ne ''}{$list_cat_menu_next}/{$child_cat_menu_next[0]}{/if}{else}{$child_cat_menu_j_index_next}{/if}" class="save_and_continue_tour">{$core->get_Lang('Save &amp; Continue')}</a>
            </div>
-->
        </div>
    </div>
</div>
<script>
    var hotel_id = '{$pvalTable}'
</script>
{literal}
    <script type="text/javascript">
        $(function(){
            $("#searchkey").on('keyup', function(e) {
                e.preventDefault();
                var $_this = $(this),
                    $_val = $_this.val();
                if ($.trim($_val)){
                    clearTimeout(aj_search);
                    search_tour();
                } else {
                    $("#autosugget").stop(false, true).slideUp();
                }
            });
            loadTourExtension(hotel_id);

            function search_tour() {
                aj_search = setTimeout(function() {
                    $.ajax({
                        type: 'POST',
                        url: path_ajax_script + '/index.php?mod=hotel&act=ajGetSearch',
                        data: {
                            "keyword": $("#searchkey").val(),
                            "hotel_id": hotel_id
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
            function loadTourExtension(hotel_id) {
                $.ajax({
                    type: 'POST',
                    url: path_ajax_script + '/index.php?mod=hotel&act=ajLoadTourExtension',
                    data: {
                        "tour_1_id": hotel_id
                    },
                    dataType: 'html',
                    success: function(html) {
                        if (html.replace(' ', '') == '') {
                            $("#tab5Note").removeClass("iso-check").addClass("iso-check-disabled");
                            $('#tblTourExtension').html('');
                        } else {
                            $('#tblTourExtension').html(html);
                            $("#tab5Note").addClass("iso-check").removeClass("iso-check-disabled");
                        }
                        if($("#tblTourExtension").find('tr').length > 0){
                            $('#related_tours').closest('li').removeAttr('class').addClass('check_success');
                        }else{
                            $('#related_tours').closest('li').removeAttr('class').addClass('check_caution');
                        }
                    }
                });
            }

            $_document.on('click', '.clickChooiseTour', function(ev) {
                ev.preventDefault();
                var $_this = $(this),
                    tour_2_id = $_this.attr('data');
                vietiso_loading(1);
                $.post(path_ajax_script + '/index.php?mod=hotel&act=ajAddTourExtension', {
                    'tour_1_id': hotel_id,
                    'tour_2_id':tour_2_id
                }, function(html){
                    vietiso_loading(0);
                    if (html.indexOf('_SUCCESS') >= 0) {
                        $_this.remove();
                        loadTourExtension(hotel_id);
                    } else if (html.indexOf('_EXIST') >= 0) {
                        alertify.error(exist_error);
                    }
                });
                return false;
            });
            $_document.on('click', '.clickDeleteTourExtension', function(ev) {
                ev.preventDefault();
                var _this = $(this),
                    tour_extension_id = _this.attr('data');
                $Core.alert.confirm(__['Message'], confirm_delete, function(){
                    vietiso_loading(1);
                    $.post(path_ajax_script + '/index.php?mod=' + mod + '&act=ajDeleteTourExtension', {
                        'tour_id' : hotel_id,
                        "hotel_extension_id" : tour_extension_id
                    }, function(html){
                        vietiso_loading(0);
                        loadTourExtension(hotel_id);
                    })
                });
                return false;
            });
        });
    </script>
{/literal}