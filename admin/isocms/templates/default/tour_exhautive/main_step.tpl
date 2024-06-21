<form method="post" accept-charset="UTF-8" enctype="multipart/form-data">
    <div class="box_main_step_content">
        <div class="row d-flex flex-wrap full-height">
            <div class="col-xs-12 col-sm-12 col-md-9">
                <div class="fill_data_box">
                    <div class="form_title_and_table_code">
                        {if $currentstep=='image'}
                        {assign var= image_detail value='image_category_country'}
                        {$clsISO->getBlock('box_detail_image',["image_detail"=>"image_category_country"])}

                        {elseif $currentstep=='generalinformation'}
                        <h3 class="title_box">{$core->get_Lang('generalinformation')}</h3>
                        <div class="inpt_tour">
                            <label for="title">{$core->get_Lang('Country')} <span class="required_red">*</span>
                                {assign var= destination_category_country value='destination_category_country'}
                                {assign var= help_first value=$destination_category_country}
                                {if $CHECKHELP eq 1}
                                <button data-key="{$destination_category_country}" data-label="{$core->get_Lang('Travel Styles')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
                                {/if}
                            </label>
                            <div class="fieldarea">
                                <select class="slb full glSlBox required" name="iso-country_id" id="slb_Country">
                                    {$clsCountry->makeSelectboxOption($oneItem.country_id)}
                                </select>
                                <div class="text_help" hidden="">{$clsConfiguration->getValue($destination_category_country)|html_entity_decode}</div>
                            </div>
                        </div>
                        {if $clsConfiguration->getValue('SiteHasCat_Tours') eq 1}
                        <div class="inpt_tour">
                            <label for="title">{$core->get_Lang('Travel Styles')} <span class="required_red">*</span>
                                {assign var= travel_styles_category_country value='travel_styles_category_country'}
                                {assign var= help_first value=$travel_styles_category_country}
                                {if $CHECKHELP eq 1}
                                <button data-key="{$travel_styles_category_country}" data-label="{$core->get_Lang('Travel Styles')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
                                {/if}
                            </label>
                            <div class="fieldarea">
                                <select name="cat_id" class="glSlBox required">
                                    {$clsTourCategory->makeSelectboxOptionCountry($country_id,$oneItem.cat_id)}
                                </select>
                                <div class="text_help" hidden="">{$clsConfiguration->getValue($travel_styles_category_country)|html_entity_decode}</div>
                            </div>
                        </div>
                        {/if}
                        <div class="inpt_tour">
                            <label for="title_content">{$core->get_Lang('Description')} <span class="required_red">*</span>
                            </label>
                            <textarea style="width:100%" table_id="{$pvalTable}" name="iso-content" class="textarea_intro_editor" data-column="iso-content" id="textarea_intro_editor_overview_{$now}" cols="255" rows="2">{$oneItem.content}</textarea>
                            {literal}
                            <script>
                                $(".showdate").datepicker({
                                    dateFormat: "dd/mm/yy"
                                });
                            </script>
                            {/literal}
                        </div>
                        <div class="inpt_tour">
                            <label class="col-form-label" for="title">
                                {$core->get_Lang('Sub Image')} ({$core->get_Lang('Standard image size')}: 294x462)
                            </label>
                            <div class="fieldarea">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <input class="text_32 border_aaa bold" type="text" id="image_vertical" name="iso-image_vertical" value="{$oneItem.image_vertical}" style="float: right;width: 85%;" onClick="loadHelp(this)" readonly>
                                        <a style="float:left" href="#" class="ajOpenDialog" isoman_for_id="image_vertical" isoman_name="image_vertical"><img src="{$URL_IMAGES}/general/folder-32.png" border="0" title="Open" alt="Open" /></a>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <img id="isoman_show_image_vertical" class="float-left mr-3" src="{$oneItem.image_vertical}" width="480" height="360" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        {elseif $currentstep=='banner'}
                        {* {$core->getBlock('box_detail_category_country_banner')} *}
                        <div class="inpt_tour">
                            <label for="banner_title">
                                {$core->get_Lang('Banner title')}
                            </label>
                            <textarea style="width:100%" table_id="{$pvalTable}" name="iso-banner_title" class="textarea_intro_editor" data-column="iso-banner_title" id="textarea_intro_editor_banner_title{$now}" cols="255" rows="2">{$oneItem.banner_title}</textarea>
                        </div>
                        <div class="inpt_tour">
                            <label for="banner_description">
                                {$core->get_Lang('Banner description')}
                            </label>
                            <textarea style="width:100%" table_id="{$pvalTable}" name="iso-banner_description" class="textarea_intro_editor" data-column="iso-banner_description" id="textarea_intro_editor_banner_description{$now}" cols="255" rows="2">{$oneItem.banner_description}</textarea>
                        </div>
                        <!-- <div class="inpt_tour">
                            <label for="banner_link">
                                {$core->get_Lang('Banner link')}
                            </label>
                            <input class="input_text_form" data-table_id="{$pvalTable}" name="banner_link" value="{$oneItem.banner_link}" maxlength="255" type="text" />
                        </div> -->
                        <div class="inpt_tour">
                            <label class="col-form-label" for="banner_image">
                                {$core->get_Lang('Banner Image')} ({$core->get_Lang('Standard image size')}: 1924x792)
                            </label>
                            <div class="fieldarea">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <input class="text_32 border_aaa bold" type="text" id="banner_image" name="iso-banner_image" value="{$oneItem.banner_image}" style="float: right;width: 85%;" onClick="loadHelp(this)" readonly>
                                        <a style="float:left" href="#" class="ajOpenDialog" isoman_for_id="banner_image" isoman_name="banner_image"><img src="{$URL_IMAGES}/general/folder-32.png" border="0" title="Open" alt="Open" /></a>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <img id="isoman_show_banner_image" class="float-left mr-3" src="{$oneItem.banner_image}" width="480" height="150" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        {elseif $currentstep=='intro'}
                        <div class="inpt_tour">
                            <label for="intro_title">{$core->get_Lang('Intro title')}</label>
                            <textarea style="width:100%" table_id="{$pvalTable}" name="iso-intro_title" class="textarea_intro_editor" data-column="iso-intro_title" id="textarea_intro_title{$now}" cols="255" rows="2">{$oneItem.intro_title}</textarea>
                        </div>
                        <div class="inpt_tour">
                            <label for="intro_description">{$core->get_Lang('Intro Description')}</label>
                            <textarea style="width:100%" table_id="{$pvalTable}" name="iso-intro_description" class="textarea_intro_editor" data-column="iso-intro_description" id="textarea_intro_description{$now}" cols="255" rows="2">{$oneItem.intro_description}</textarea>
                        </div>
                        <div class="inpt_tour">
                            <label for="intro_youtube">
                                {$core->get_Lang('Link youtube')}
                            </label>
                            <input class="input_text_form" data-table_id="{$pvalTable}" name="intro_youtube" value="{$oneItem.intro_youtube}" maxlength="255" type="text" />
                        </div>
                        <div class="inpt_tour">
                            <label class="col-form-label" for="image_horizontal">
                                {$core->get_Lang('Thumnail video')} ({$core->get_Lang('Standard image size')}: 1280x552)
                            </label>
                            <div class="fieldarea">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <input class="text_32 border_aaa bold" type="text" id="image_horizontal" name="iso-image_horizontal" value="{$oneItem.image_horizontal}" style="float: right;width: 85%;" onClick="loadHelp(this)" readonly>
                                        <a style="float:left" href="#" class="ajOpenDialog" isoman_for_id="image_horizontal" isoman_name="image_horizontal"><img src="{$URL_IMAGES}/general/folder-32.png" border="0" title="Open" alt="Open" /></a>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <img id="isoman_show_image_horizontal" class="float-left mr-3" src="{$oneItem.image_horizontal}" width="480" height="208" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        {elseif $currentstep=='config'}
                        <div class="inpt_tour">
                            <label for="trvs_why_description">{$core->get_Lang('Travel style why description')}</label>
                            <textarea style="width:100%" table_id="{$pvalTable}" name="iso-trvs_why_description" class="textarea_intro_editor" data-column="iso-trvs_why_description" id="textarea_trvs_why_description{$now}" cols="255" rows="2">{$oneItem.trvs_why_description}</textarea>
                        </div>
                        {elseif $currentstep=='why'}
                        <div class="inpt_tour">
                            <label for="intro_title">{$core->get_Lang('Country')} <span class="required_red">*</span></label>
                            <select onchange="_reload()" id="country_id" name="country_id" class="form-control required" style="width: 300px;">
                                {$clsCountry->makeSelectboxOption($oneItem.country_id)}
                            </select>
                        </div>
                        <div class="inpt_tour">
                            <label for="intro_title">{$core->get_Lang('Travel style')} <span class="required_red">*</span></label>
                            <select onchange="_reload()" id="travelstyle_id" name="travelstyle_id" class="form-control required" style="width: 300px;">
                                {$clsCategory_Country->makeSelectboxOption($oneItem.travelstyle_id, $oneItem.country_id)}
                            </select>
                        </div>
                        {literal}
                        <script>
                            $(document).ready(function() {
                                $('#country_id').change(function(e) {
                                    e.preventDefault();
                                    var selectedCountry_id = $(this).val();
                                    $.ajax({
                                        type: "POST",
                                        url: path_ajax_script +
                                            "/index.php?mod=" +
                                            mod +
                                            "&act=ajActionGetTravelStyleByCountry",
                                        data: {
                                            country_id: selectedCountry_id
                                        },
                                        success: function(data) {
                                            $('#travelstyle_id').html(data);
                                        },
                                    });
                                });
                            });
                        </script>
                        {/literal}
                        <div class="inpt_tour">
                            <label for="title">
                                {$core->get_Lang('Title')} <span class="required_red">*</span>
                            </label>
                            <input class="input_text_form required" data-table_id="{$pvalTable}" name="title" value="{$oneItem.title}" maxlength="255" type="text" />
                        </div>
                        <!-- <div class="inpt_tour">
                            <label for="intro">{$core->get_Lang('Intro')}</label>
                            <textarea style="width:100%" table_id="{$pvalTable}" name="iso-intro" class="textarea_intro_editor" data-column="iso-intro" id="textarea_intro{$now}" cols="255" rows="2">{$oneItem.intro}</textarea>
                        </div> -->
                        <div class="inpt_tour">
                            <label for="content">{$core->get_Lang('Content')} <span class="required_red">*</span></label>
                            <textarea style="width:100%" table_id="{$pvalTable}" name="iso-content" class="textarea_intro_editor required" data-column="iso-content" id="textarea_content{$now}" cols="255" rows="2">{$oneItem.content}</textarea>
                        </div>
                        <div class="inpt_tour">
                            <label class="col-form-label" for="image">
                                {$core->get_Lang('Image')} <span class="required_red">*</span><br>
                                ({$core->get_Lang('Standard image size')}: 406x333)
                            </label>
                            <div class="fieldarea">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <input class="text_32 border_aaa bold required" type="text" id="image" name="iso-image" value="{$oneItem.image}" style="float: right;width: 85%;" onClick="loadHelp(this)" readonly>
                                        <a style="float:left" href="#" class="ajOpenDialog" isoman_for_id="image" isoman_name="image"><img src="{$URL_IMAGES}/general/folder-32.png" border="0" title="Open" alt="Open" /></a>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <img id="isoman_show_image" class="float-left mr-3" src="{$oneItem.image}" width="480" height="208" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        {elseif $currentstep=='longText'}
                        <div class="inpt_tour">
                            <h3 class="title_box">{$core->get_Lang('Long text')}
                                {assign var= longText_category_country value='longText_category_country'}
                                {assign var= help_first value=$longText_category_country}
                                {if $CHECKHELP eq 1}
                                <button data-key="{$longText_category_country}" data-label="{$core->get_Lang('Long text')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
                                {/if}
                            </h3>
                            <textarea style="width:100%" table_id="{$pvalTable}" name="iso-content" class="textarea_intro_editor" data-column="iso-content" id="textarea_intro_editor_overview_{$now}" cols="255" rows="2">{$oneItem.content}</textarea>
                            {literal}
                            <script>
                                $(".showdate").datepicker({
                                    dateFormat: "dd/mm/yy"
                                });
                            </script>
                            {/literal}
                        </div>
                        {/if}
                        <div class="btn_save_titile_table_code mt30">
                            {if $obj eq 'why'}
                            <a data-table_id="{$pvalTable}" data-panel="{$arrStep[$step].panel}" data-currentstep="{$currentstep}" data-next_step="{$nextstep}" class="js_save_continue_main_step">{$core->get_Lang('Save')}</a>
                            {else}
                            <a data-table_id="{$pvalTable}" data-panel="{$arrStep[$step].panel}" data-currentstep="{$arrStep[$step].key}" data-prevstep="{$prevstep}" class="back_step js_save_back_main_step">{$core->get_Lang('Back')}</a>

                            <a data-table_id="{$pvalTable}" data-panel="{$arrStep[$step].panel}" data-currentstep="{$currentstep}" data-next_step="{$nextstep}" class="js_save_continue_main_step">{$core->get_Lang('Save &amp; Continue')}</a>
                            {/if}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3 col_instruction">
                <div class="instruction_fill_data_box">
                    <p class="title_box"><i class="fa fa-question-circle text-red " aria-hidden="true"></i> {$core->get_Lang('Instructions')}</p>
                    <div class="content_box">{$clsConfiguration->getValue($help_first)|html_entity_decode}</div>
                </div>
            </div>
        </div>
    </div>
</form>

<script>
    var obj = '{$obj}';
</script>

{literal}
<script>
    if ($('.textarea_intro_editor').length > 0) {
        $('.textarea_intro_editor').each(function() {
            var $_this = $(this);
            var $editorID = $_this.attr('id');
            $('#' + $editorID).isoTextArea();
        });
    }
    $('.toggle-row').click(function() {
        $(this).closest('tr').toggleClass('open_tr');
    });
</script>
{/literal}