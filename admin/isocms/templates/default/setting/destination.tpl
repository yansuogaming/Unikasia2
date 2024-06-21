<div class="breadcrumb">
    <strong>Bạn đang ở:</strong>
    <a href="{$PCMS_URL}" title="Trang chủ">{$core->get_Lang('Home')}</a>
    <a>&raquo;</a>
    <a href="{$PCMS_URL}/index.php?mod={$mod}" title="Cài đặt">{$core->get_Lang('Installation')}</a>
    <a href="javascript:window.history.back();" class="back fr">{$core->get_Lang('Come back')}</a>
</div>
<div class="page-destination_setting">
    <div class="page-title  d-flex" onclick="location.href='{$PCMS_URL}/?&mod={$mod}&act={$act}'">
        <div class="title">
            <h1>{$core->get_Lang('Destination Config')}</h1>
            <p>{$core->get_Lang('Enter full fields in the required fields')}</p>
        </div>
    </div>
    <div class="container-fluid">
        <form id="form_destination_setting" method="post" class="filterForm" action="">
            <fieldset>
                <legend>{$core->get_Lang("List Travel Style")}</legend>
                <div class="row-span">
                    <div class="fieldlabel">{$core->get_Lang('Title')}</div>
                    {assign var=TravelStyleTitle value=TravelStyleTitle}
                    <div class="fieldarea">
                        <textarea style="width:100%" class="textarea_intro_editor_simple" name="iso-{$TravelStyleTitle}" id="TravelStyleTitle" cols="255" rows="2">{$clsConfiguration->getValue($TravelStyleTitle)}</textarea>
                    </div>
                </div>
                <div class="row-span">
                    <div class="fieldlabel">{$core->get_Lang('Description')}</div>
                    {assign var=TravelStyleDescription value=TravelStyleDescription}
                    <div class="fieldarea">
                        <textarea style="width:100%" class="textarea_intro_editor_simple" name="iso-{$TravelStyleDescription}" id="TravelStyleDescription" cols="255" rows="2">{$clsConfiguration->getValue($TravelStyleDescription)}</textarea>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend>{$core->get_Lang("List Hotel")}</legend>
                <div class="row-span">
                    <div class="fieldlabel">{$core->get_Lang('Title')}</div>
                    {assign var=HotelTitle value=HotelTitle}
                    <div class="fieldarea">
                        <textarea style="width:100%" class="textarea_intro_editor_simple" name="iso-{$HotelTitle}" id="HotelTitle" cols="255" rows="2">{$clsConfiguration->getValue($HotelTitle)}</textarea>
                    </div>
                </div>
                <div class="row-span">
                    <div class="fieldlabel">{$core->get_Lang('Description')}</div>
                    {assign var=HotelDescription value=HotelDescription}
                    <div class="fieldarea">
                        <textarea style="width:100%" class="textarea_intro_editor_simple" name="iso-{$HotelDescription}" id="HotelDescription" cols="255" rows="2">{$clsConfiguration->getValue($HotelDescription)}</textarea>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend>{$core->get_Lang("Our Team")}</legend>
                <div class="row-span">
                    <div class="fieldlabel">{$core->get_Lang('Title')}</div>
                    {assign var=OurTeamTitle value=OurTeamTitle}
                    <div class="fieldarea">
                        <textarea style="width:100%" class="textarea_intro_editor_simple" name="iso-{$OurTeamTitle}" id="OurTeamTitle" cols="255" rows="2">{$clsConfiguration->getValue($OurTeamTitle)}</textarea>
                    </div>
                </div>
                <div class="row-span">
                    <div class="fieldlabel">{$core->get_Lang('Description')}</div>
                    {assign var=OurTeamDescription value=OurTeamDescription}
                    <div class="fieldarea">
                        <textarea style="width:100%" class="textarea_intro_editor_simple" name="iso-{$OurTeamDescription}" id="OurTeamDescription" cols="255" rows="2">{$clsConfiguration->getValue($OurTeamDescription)}</textarea>
                    </div>
                </div>
                <div class="row-span">
                    <div class="fieldlabel">
                        {$core->get_Lang("Banner")}
                        <p>Kích thước chuẩn (1047x403)</p>
                    </div>

                    <div class="fieldarea">
                        {assign var = OurTeamBanner value = OurTeamBanner}
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <input class="text_32 border_aaa bold" type="text" id="{$OurTeamBanner}" name="iso-{$OurTeamBanner}" value="{$clsConfiguration->getValue($OurTeamBanner)}" style="float: right;width: 85%;" onClick="loadHelp(this)" readonly>
                                <a style="float:left" href="#" class="ajOpenDialog" isoman_for_id="{$OurTeamBanner}" isoman_name="{$OurTeamBanner}"><img src="{$URL_IMAGES}/general/folder-32.png" border="0" title="Open" alt="Open" /></a>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <img id="isoman_show_{$OurTeamBanner}" class="float-left mr-3" src="{$clsConfiguration->getValue($OurTeamBanner)}" width="480" height="192" />
                            </div>
                        </div>
                    </div>
                </div>
                {section name=i loop=4 start=1}
                {assign var = k value = $smarty.section.i.index}
                <fieldset class="our_team_{$k}">
                    <legend>{$core->get_Lang("Step $k")}</legend>
                    <div class="row-span">
                        <div class="fieldlabel">{$core->get_Lang("Icon")}</div>
                        <div class="fieldarea">
                            {assign var=OurTeamStepIcon value=OurTeamStepIcon_|cat:$k}
                            <img id="isoman_show_{$OurTeamStepIcon}" class="float-left mr-3" src="{$clsConfiguration->getValue($OurTeamStepIcon)}" width="40px" height="40px" />
                            <input class="text_32 border_aaa bold" type="text" id="{$OurTeamStepIcon}" name="iso-{$OurTeamStepIcon}" value="{$clsConfiguration->getValue($OurTeamStepIcon)}" style="width:100%; max-width:300px; float:left" onClick="loadHelp(this)" readonly><a style="float:left; margin-left:4px; margin-top:-4px;" href="#" class="ajOpenDialog" isoman_for_id="{$OurTeamStepIcon}" isoman_name="{$OurTeamStepIcon}"><img src="{$URL_IMAGES}/general/folder-32.png" border="0" title="Open" alt="Open" /></a>
                        </div>
                    </div>
                    <div class="row-span">
                        <div class="fieldlabel">{$core->get_Lang('Title')}</div>
                        {assign var = OurTeamStepTitle value = OurTeamStepTitle_|cat:$k}
                        <div class="fieldarea">
                            <input type="text" class="text_32 full-width border_aaa" value="{$clsConfiguration->getValue($OurTeamStepTitle)}" name="iso-{$OurTeamStepTitle}" />
                        </div>
                    </div>
                    <div class="row-span">
                        <div class="fieldlabel">{$core->get_Lang('Description')}</div>
                        <div class="fieldarea">
                            {assign var = OutTeamStepDescription value = OutTeamStepDescription_|cat:$k}
                            <textarea style="width:100%" class="textarea_intro_editor_simple" name="iso-{$OutTeamStepDescription}" id="{$OutTeamStepDescription}" cols="255" rows="2">{$clsConfiguration->getValue($OutTeamStepDescription)}</textarea>
                        </div>
                    </div>
                </fieldset>
                {/section}
            </fieldset>
            <fieldset>
                <legend>{$core->get_Lang("Gallery")}</legend>
                <div class="row-span">
                    <div class="fieldlabel">{$core->get_Lang('Title')}</div>
                    {assign var=GalleryTitle value=GalleryTitle}
                    <div class="fieldarea">
                        <textarea style="width:100%" class="textarea_intro_editor_simple" name="iso-{$GalleryTitle}" id="GalleryTitle" cols="255" rows="2">{$clsConfiguration->getValue($GalleryTitle)}</textarea>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend>{$core->get_Lang("Top Destination")}</legend>
                <div class="row-span">
                    <div class="fieldlabel">{$core->get_Lang('Title')}</div>
                    {assign var=TopDestinationTitle value=TopDestinationTitle}
                    <div class="fieldarea">
                        <textarea style="width:100%" class="textarea_intro_editor_simple" name="iso-{$TopDestinationTitle}" id="TopDestinationTitle" cols="255" rows="2">{$clsConfiguration->getValue($TopDestinationTitle)}</textarea>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend>{$core->get_Lang("FAQ")}</legend>
                <div class="row-span">
                    <div class="fieldlabel">{$core->get_Lang('Title')}</div>
                    {assign var=FAQTitle value=FAQTitle}
                    <div class="fieldarea">
                        <textarea style="width:100%" class="textarea_intro_editor_simple" name="iso-{$FAQTitle}" id="FAQTitle" cols="255" rows="2">{$clsConfiguration->getValue($FAQTitle)}</textarea>
                    </div>
                </div>
            </fieldset>



            <fieldset class="submit-buttons" style="position: fixed; bottom: 2%; left: 50%; margin: 0; padding: 0; z-index: 2">
                {$saveBtn}
                <input value="UpdateConfiguration" name="submit" type="hidden">
            </fieldset>
        </form>
    </div>
</div>