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
            <h1>{$core->get_Lang('Travel Style Config')}</h1>
            <p>{$core->get_Lang('Enter full fields in the required fields')}</p>
        </div>
    </div>
    <div class="container-fluid">
        <form id="form_destination_setting" method="post" class="filterForm" action="">
            <fieldset>
                <legend>{$core->get_Lang("List tour")}</legend>
                <div class="row-span">
                    <div class="fieldlabel">{$core->get_Lang('Title')}</div>
                    {assign var=TrvsTourTitle value=TrvsTourTitle}
                    <div class="fieldarea">
                        <textarea style="width:100%" class="textarea_intro_editor_simple" name="iso-{$TrvsTourTitle}" id="TrvsTourTitle" cols="255" rows="2">{$clsConfiguration->getValue($TrvsTourTitle)}</textarea>
                    </div>
                </div>
                <div class="row-span">
                    <div class="fieldlabel">{$core->get_Lang('Description')}</div>
                    {assign var=TrvsTourDescription value=TrvsTourDescription}
                    <div class="fieldarea">
                        <textarea style="width:100%" class="textarea_intro_editor_simple" name="iso-{$TrvsTourDescription}" id="TrvsTourDescription" cols="255" rows="2">{$clsConfiguration->getValue($TrvsTourDescription)}</textarea>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend>{$core->get_Lang("Why choose tour")}</legend>
                <div class="row-span">
                    <div class="fieldlabel">{$core->get_Lang('Title')}</div>
                    {assign var=TrvsWhyTitle value=TrvsWhyTitle}
                    <div class="fieldarea">
                        <textarea style="width:100%" class="textarea_intro_editor_simple" name="iso-{$TrvsWhyTitle}" id="TrvsWhyTitle" cols="255" rows="2">{$clsConfiguration->getValue($TrvsWhyTitle)}</textarea>
                    </div>
                </div>
                <!-- <div class="row-span">
                    <div class="fieldlabel">{$core->get_Lang('Description')}</div>
                    {assign var=TrvsWhyDescription value=TrvsWhyDescription}
                    <div class="fieldarea">
                        <textarea style="width:100%" class="textarea_intro_editor_simple" name="iso-{$TrvsWhyDescription}" id="TrvsWhyDescription" cols="255" rows="2">{$clsConfiguration->getValue($TrvsWhyDescription)}</textarea>
                    </div>
                </div> -->
            </fieldset>
            <fieldset>
                <legend>{$core->get_Lang("Travel style by country")}</legend>
                <div class="row-span">
                    <div class="fieldlabel">{$core->get_Lang('Title')}</div>
                    {assign var=TrvsTravelCountryTitle value=TrvsTravelCountryTitle}
                    <div class="fieldarea">
                        <textarea style="width:100%" class="textarea_intro_editor_simple" name="iso-{$TrvsTravelCountryTitle}" id="TrvsTravelCountryTitle" cols="255" rows="2">{$clsConfiguration->getValue($TrvsTravelCountryTitle)}</textarea>
                    </div>
                </div>
                <div class="row-span">
                    <div class="fieldlabel">{$core->get_Lang('Description')}</div>
                    {assign var=TrvsTravelCountryDescription value=TrvsTravelCountryDescription}
                    <div class="fieldarea">
                        <textarea style="width:100%" class="textarea_intro_editor_simple" name="iso-{$TrvsTravelCountryDescription}" id="TrvsTravelCountryDescription" cols="255" rows="2">{$clsConfiguration->getValue($TrvsTravelCountryDescription)}</textarea>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend>{$core->get_Lang("When to go")}</legend>
                <div class="row-span">
                    <div class="fieldlabel">{$core->get_Lang('Title')}</div>
                    {assign var=TrvsWhenToGoTitle value=TrvsWhenToGoTitle}
                    <div class="fieldarea">
                        <textarea style="width:100%" class="textarea_intro_editor_simple" name="iso-{$TrvsWhenToGoTitle}" id="TrvsWhenToGoTitle" cols="255" rows="2">{$clsConfiguration->getValue($TrvsWhenToGoTitle)}</textarea>
                    </div>
                </div>
                <div class="row-span">
                    <div class="fieldlabel">{$core->get_Lang('Description 1')}</div>
                    {assign var=TrvsWhenToGoDescription_1 value=TrvsWhenToGoDescription_1}
                    <div class="fieldarea">
                        <textarea style="width:100%" class="textarea_intro_editor_simple" name="iso-{$TrvsWhenToGoDescription_1}" id="TrvsWhenToGoDescription_1" cols="255" rows="2">{$clsConfiguration->getValue($TrvsWhenToGoDescription_1)}</textarea>
                    </div>
                </div>
                <div class="row-span">
                    <div class="fieldlabel">{$core->get_Lang('Description 2')}</div>
                    {assign var=TrvsWhenToGoDescription_2 value=TrvsWhenToGoDescription_2}
                    <div class="fieldarea">
                        <textarea style="width:100%" class="textarea_intro_editor_simple" name="iso-{$TrvsWhenToGoDescription_2}" id="TrvsWhenToGoDescription_2" cols="255" rows="2">{$clsConfiguration->getValue($TrvsWhenToGoDescription_2)}</textarea>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend>{$core->get_Lang("List blog")}</legend>
                <div class="row-span">
                    <div class="fieldlabel">{$core->get_Lang('Title')}</div>
                    {assign var=TrvsBlogTitle value=TrvsBlogTitle}
                    <div class="fieldarea">
                        <textarea style="width:100%" class="textarea_intro_editor_simple" name="iso-{$TrvsBlogTitle}" id="TrvsBlogTitle" cols="255" rows="2">{$clsConfiguration->getValue($TrvsBlogTitle)}</textarea>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend>{$core->get_Lang("List travel guide")}</legend>
                <div class="row-span">
                    <div class="fieldlabel">{$core->get_Lang('Title')}</div>
                    {assign var=TrvsTravelGuideTitle value=TrvsTravelGuideTitle}
                    <div class="fieldarea">
                        <textarea style="width:100%" class="textarea_intro_editor_simple" name="iso-{$TrvsTravelGuideTitle}" id="TrvsTravelGuideTitle" cols="255" rows="2">{$clsConfiguration->getValue($TrvsTravelGuideTitle)}</textarea>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend>{$core->get_Lang("List FAQ")}</legend>
                <div class="row-span">
                    <div class="fieldlabel">{$core->get_Lang('Title')}</div>
                    {assign var=TrvsFAQTitle value=TrvsFAQTitle}
                    <div class="fieldarea">
                        <textarea style="width:100%" class="textarea_intro_editor_simple" name="iso-{$TrvsFAQTitle}" id="TrvsFAQTitle" cols="255" rows="2">{$clsConfiguration->getValue($TrvsFAQTitle)}</textarea>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend>{$core->get_Lang("List other country")}</legend>
                <div class="row-span">
                    <div class="fieldlabel">{$core->get_Lang('Title')}</div>
                    {assign var=TrvsCountryTitle value=TrvsCountryTitle}
                    <div class="fieldarea">
                        <textarea style="width:100%" class="textarea_intro_editor_simple" name="iso-{$TrvsCountryTitle}" id="TrvsCountryTitle" cols="255" rows="2">{$clsConfiguration->getValue($TrvsCountryTitle)}</textarea>
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