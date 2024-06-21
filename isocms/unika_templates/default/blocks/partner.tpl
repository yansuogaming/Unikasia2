{assign var = TitlePartner value = TitlePartner_|cat:$_LANG_ID}
{assign var = TitlePartner value = TitlePartner_|cat:$_LANG_ID}

<div class="partner_box">
    <h3 class="title_box">{$clsConfiguration->getValue($TitlePartner)}</h3>
    {*<div class="intro_box">{$clsConfiguration->getValue($IntroPartner)|html_entity_decode}</div>*}
    <div class="list_partner_box">
        {section name=i loop=$lstPartner}
        <div class="partner_item">
            <a href="{$clsPartner->getLink($lstPartner[i].partner_id,$lstPartner[i])}" target="_blank">
                <img src="{$clsPartner->getUrlImage($lstPartner[i].partner_id,$lstPartner[i])}" alt="{$clsPartner->getTitle($lstPartner[i].partner_id,$lstPartner[i])}" width="139" height="66">
            </a>
        </div>
        {/section}
    </div>
</div>