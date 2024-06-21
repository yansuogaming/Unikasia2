<div class="breadcrumb">
	<strong>{$core->get_Lang('youarehere')} : </strong>
	<a href="{$PCMS_URL}" title="{$core->get_Lang('home')}">{$core->get_Lang('home')}</a>
    <a>&raquo;</a>
	<a href="{$PCMS_URL}/index.php?mod={$mod}">{$core->get_Lang('tour')}</a>
    <a>&raquo;</a>
    <a href="{$PCMS_URL}/index.php?mod={$mod}&act={$act}" title="{$mod}">{$core->get_Lang('settingtour')}</a>
</div>
<div class="clearfix"></div>
<div class="container-fluid">
    <div class="page-title">
        <h2>{$core->get_Lang('settingtour')}</h2>
        <p>{$core->get_Lang('systemmanagementsettingtour')}</p>
	</div>
	<div class="wrap mt10 mb20">
    	<fieldset>
			<legend>{$core->get_Lang('selectsetting')}</legend>
			<ul class="rsl-list-link">
				{assign var=lstTourType value=$clsTourStore->getListType()}
                {foreach from=$lstTourType key=k item=v}
                <li>
                	<a href="{$PCMS_URL}/?admin&mod=tour_exhautive&act=store&type={$core->encryptID($k)}">
                        <span class="text"><i class="fa fa-cog"></i> {$v}</span>
                    </a>
                </li>
                {/foreach}
				{if _IS_PROMOTION eq 1}
				<li>
                	<a href="{$PCMS_URL}/?mod=promotionpro&type=TOUR">
                        <span class="text"><i class="fa fa-cog"></i> {$core->get_Lang('Best Deals')}</span>
					</a>
				</li>
				{/if}
				<li>
                	<a href="{$PCMS_URL}/?mod=tour&act=property&type=TOUROPTION">
                        <span class="text"><i class="fa fa-cog"></i> {$core->get_Lang('Class')}</span>
					</a>
				</li>
				<li>
                	<a href="{$PCMS_URL}/?&mod=tour_exhautive&act=category">
                        <span class="text"><i class="fa fa-cog"></i> {$core->get_Lang('Travel Styles')}</span>
					</a>
				</li>
				<li>
                	<a href="{$PCMS_URL}/?&mod=tour_exhautive&act=category_country">
                        <span class="text"><i class="fa fa-cog"></i> {$core->get_Lang('Travel Styles by Countries')}</span>
					</a>
				</li>
				{if $clsConfiguration->getValue('SiteHasService_Tours')}
				<li>
					<a href="{$PCMS_URL}/?&mod=property&act=service">
                        <span class="text"><i class="fa fa-cog"></i> {$core->get_Lang('Addon Services')}</span>
					</a>
				</li>
				{/if}
				<li>
					<a href="{$PCMS_URL}/?mod=property&act=transport">
                        <span class="text"><i class="fa fa-cog"></i> {$core->get_Lang('Transportation')}</span>
					</a>
				</li>
				<li>
                	<a href="{$PCMS_URL}/?mod=tour&act=property&type=VISITORTYPE">
                        <span class="text"><i class="fa fa-cog"></i> {$core->get_Lang('Traveller')}</span>
					</a>
				</li>
				<li>
                	<a href="{$PCMS_URL}/?mod=tour&act=property&type=SIZEGROUP">
                        <span class="text"><i class="fa fa-cog"></i> {$core->get_Lang('Group size')}</span>
					</a>
				</li>
				<li>
                	<a href="{$PCMS_URL}/?mod=property&act=activities">
                        <span class="text"><i class="fa fa-cog"></i> {$core->get_Lang('Activities')}</span>
					</a>
				</li>
				<li>
                	<a href="{$PCMS_URL}/?mod=tour&act=price_range">
                        <span class="text"><i class="fa fa-cog"></i> {$core->get_Lang('Price range')}</span>
					</a>
				</li>
			</ul>
		</fieldset>
	</div>
    <div class="clearfix"></div>
    {*<div id="clienttabs">
		<ul>
			<li><a><i class="fa fa-cog"></i> {$core->get_Lang('intropage')}</a></li>
            <li><a><i class="fa fa-cog"></i> {$core->get_Lang('cover images')}</a></li>
		</ul>
	</div>
    <div id="tab_content">
		<form method="post" action="" enctype="multipart/form-data">
			<div class="tabbox">
				{assign var=site_tour_intro value=site_tour_intro_$_LANG_ID}
				<textarea id="textarea_intro_editor{$now}" class="textarea_intro_editor" name="iso-{$site_tour_intro}" style="width:100%">{$clsConfiguration->getValue($site_tour_intro)}</textarea>
			</div>
			<div class="tabbox" style="display:none">
				<span>Width x Height: 1600 x 400</span>
				<div class="cleafix mb10"></div>
				<div class="photobox span100">
					<img src="{$clsConfiguration->getValue('site_tour_banner')}" id="isoman_show_site_tour_banner" class="span100" height="156px" style="width:100%;" />
					<input type="hidden" id="isoman_hidden_site_tour_banner" name="isoman_url_site_tour_banner" value="{$clsConfiguration->getValue('site_tour_banner')}" />
					<a href="javascript:void()" class="photobox_edit ajOpenDialog" isoman_for_id="site_tour_banner" isoman_val="{$clsConfiguration->getValue('site_tour_banner')}" isoman_name="site_tour_banner" title="{$core->get_Lang('edit')}"><i class="iso-edit"></i></a>
				</div>
			</div>
			<div class="clearfix mt10"></div>
			<fieldset class="submit-buttons">
				{$saveBtn}
				<input value="UpdateConfiguration" name="submit" type="hidden">
			</fieldset>
		</form>
	</div>*}
</div>
{literal}
<script type="text/javascript">
	$(document).ready(function(){
		$(".datepicker").datepicker();
	});
</script>
{/literal}
<script type="text/javascript" src="{$URL_THEMES}/tour/jquery.tour.js"></script>