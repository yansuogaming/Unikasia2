<div class="sticky-footer-wrapper">
    <div class="tailor_button">
        <a href="{$clsISO->getLink('tailor')}" title="{$core->get_Lang('TAILOR-MADE TRAVEL')}">
            <span class="icon">
            <img src="{$URL_IMAGES}/unika/logo.svg" width="36px" height="35px" />
            </span>
            {$core->get_Lang('TAILOR-MADE TRAVEL')}
        </a>
    </div>
</div>
{if 1==2}


{assign var=Copyright value=Copyright_|cat:$_LANG_ID}
{assign var=CompanyAddress value=CompanyAddress_|cat:$_LANG_ID}
{assign var=CompanyName value=CompanyName_|cat:$_LANG_ID}
{assign var=CompanyAddress1 value=CompanyAddress1_|cat:$_LANG_ID}
{assign var = DescriptionZoneFooter value = DescriptionZoneFooter_|cat:$_LANG_ID}
{if $mod ne 'cart'}
{if $act ne 'success'}
<footer id="footer" class="footer">
	{if $deviceType eq 'computer'}
	<div class="hidden1024">
	<div class="zone__footer hidden1024">
		<div class="container">
			<div class="zone__footer--main footer__main">
				<div class="row">
					<div class="col-lg-3">
						<h2 class="title_footer company_name">{$clsConfiguration->getValue($CompanyName)}</h2>
						<div class="company_info size15">
							<p class="footer_com mb20 address"><a target="_blank" class="" href="https://maps.google.it/maps?q={$clsConfiguration->getValue($CompanyAddress1)}" title="{$clsConfiguration->getValue($CompanyAddress)}">{$clsConfiguration->getValue($CompanyAddress)}</a></p>
							<p class="footer_com mb20 phone"><span class="label">{$core->get_Lang('Hotline')}</span><a href="tel:{$clsConfiguration->getValue('CompanyHotline')}" title="{$clsConfiguration->getValue('CompanyHotline')}" class="">{$clsConfiguration->getValue('CompanyHotline')}</a> {*/ <a href="tel:{$clsConfiguration->getValue('CompanyPhone')}" title="{$clsConfiguration->getValue('CompanyPhone')}" class="">{$clsConfiguration->getValue('CompanyPhone')}</a>*}
							</p>
							<p class="footer_com mb20 email"><span class="label">{$core->get_Lang('Email')}</span><a href="mailto:{$clsConfiguration->getValue('CompanyEmail')}" title="{$clsConfiguration->getValue('CompanyEmail')}" class="">{$clsConfiguration->getValue('CompanyEmail')}</a></p>
						</div>
					</div>
					<div class="col-lg-9">
						<div class="row box_col">
							<div class="col-lg-3 col-sm-6 col-xs-6 full_width_420 mb991_30">
								<h3 class="title_footer">{$core->get_Lang('About us')}</h3>
								<ul class="footer_Link list_style_none">
									{if $clsISO->getCheckActiveModulePackage($package_id,'page','about','default')}
									<li><a href="{$clsISO->getLink('about')}" title="{$core->get_Lang('About Us')}"> {$core->get_Lang('About Us')}</a></li>
									{/if}
									<li><a href="{$clsISO->getLink('contact')}" title="{$core->get_Lang('Contact')}"> {$core->get_Lang('Contact')}</a></li>
									 {if $clsISO->getCheckActiveModulePackage($package_id,'testimonial','default','default')}
									<li><a href="{$clsISO->getLink('testimonial')}" title="{$core->get_Lang('Testimonials')}"> {$core->get_Lang('Testimonials')}</a></li>
									{/if}
									{section name=i loop=$listAllpage}
									{assign var = title_page value = $listAllpage[i].title}
									<li><a href="{$clsPage->getLink($listAllpage[i].page_id,$listAllpage[i])}" title="{$title_page}"> {$title_page}</a></li>
									{/section}
									 {if $clsISO->getCheckActiveModulePackage($package_id,'faqs','default','default')}
									<li><a href="{$clsISO->getLink('faqs')}" title="{$core->get_Lang('Faqs')}"> {$core->get_Lang('Faqs')}</a></li>
									{/if}
									{if $clsISO->getCheckActiveModulePackage($package_id,'download','default','default')}
									<li><a href="{$clsISO->getLink('download')}" title="{$core->get_Lang('Trade Brochures')}"> {$core->get_Lang('Trade Brochures')}</a></li>
									{/if}
								</ul>
							</div> 
							<div class="col-lg-3 col-sm-6 col-xs-6 full_width_420 mb991_30 footer_info">
								<h3 class="title_footer ">{$core->get_Lang('Travel Styles')}</h3>
								<ul class="footer_Link list_style_none">
									{section name=i loop=$lstCatTour}
									{assign var = title_category value = $lstCatTour[i].title}
									<li><a href="{$clsTourCategory->getLink($lstCatTour[i].tourcat_id,$lstCatTour[i])}" title="{$title_category}"> {$title_category}</a></li>
									{/section}
								</ul>
								<span class="readmore mt10 size14 text-underline">{$core->get_Lang('See more')}</span>
							</div>
							<div class="col-lg-3 col-sm-6 col-xs-6 full_width_420 mb991_30 footer_info">
								<h3 class="title_footer ">{$core->get_Lang('Other')}</h3>
								<ul class="footer_Link list_style_none">
									<li><a href="{$clsISO->getLink('tailor')}" title="{$core->get_Lang('Tailor made tour')}"> {$core->get_Lang('Tailor made tour')}</a></li>
									{if $clsISO->getCheckActiveModulePackage($package_id,'news','default','default')}
									<li><a href="{$clsISO->getLink('news')}" title="{$core->get_Lang('News')}"> {$core->get_Lang('News')}</a></li>
									{/if}
                                    <li><a href="{$clsISO->getLink('service')}" title="{$core->get_Lang('Services')}"> {$core->get_Lang('Services')}</a></li>
									{if $clsISO->getCheckActiveModulePackage($package_id,'blog','default','default')}
									<li><a href="{$clsISO->getLink('blog')}" title="{$core->get_Lang('Blog')}"> {$core->get_Lang('Blogs')}</a></li>
									{/if}
								</ul>
							</div>
							<div class="col-lg-3 col-sm-6 col-xs-6 full_width_420 mb991_30 footer_info">
								<h3 class="title_footer ">{$core->get_Lang('Follow Us')}</h3>
								<ul class="list_social box_col list_style_none">
									{if $clsConfiguration->getValue('Facebook_Link')}
									<li>
										<a class="facebook" href="http://www.facebook.com/{$clsConfiguration->getValue('SiteFacebookLink')}" target="_blank" title="{$core->get_Lang('Facebook')}">
											<i class="fa fa-facebook" aria-hidden="true"></i>
										</a>
									</li>
									{/if}
									{if $clsConfiguration->getValue('Twitter_Link')}
									<li>
										<a class="twitter" href="http://www.twitter.com/{$clsConfiguration->getValue('SiteTwitterLink')}" target="_blank" title="{$core->get_Lang('Twitter')}">
											<i class="fa fa-twitter" aria-hidden="true"></i>
										</a>
									</li>
									{/if}
									{if $clsConfiguration->getValue('Youtube_Link')}
									<li>
										<a class="youtube" href="http://www.youtube.com/{$clsConfiguration->getValue('SiteYoutubeLink')}" target="_blank" title="{$core->get_Lang('Youtube')}">
											<i class="fa fa-youtube-play" aria-hidden="true"></i>
										</a>
									</li>
									{/if}
									{if $clsConfiguration->getValue('Google_Plus_Link')}
									<li>
										<a class="google" href="http://plus.google.com/{$clsConfiguration->getValue('SiteGoogleLink')}" target="_blank" title="{$core->get_Lang('Google +')}">
											<i class="fa fa-google-plus" aria-hidden="true"></i>
										</a>
									</li>
									{/if}
									{if $clsConfiguration->getValue('Instagram_Link')}
									<li>
										<a class="instagram" href="https://www.instagram.com/{$clsConfiguration->getValue('SiteInstagramLink')}" target="_blank" title="{$core->get_Lang('Instagram')}">
											<i class="fa fa-instagram" aria-hidden="true"></i>
										</a>
									</li>
									{/if}
									{if $clsConfiguration->getValue('Printest_Link')}
									<li>
										<a class="pinterest" href="http://pinterest.com/{$clsConfiguration->getValue('SitePrintestLink')}" target="_blank" title="{$core->get_Lang('Printest')}">
											<i class="fa fa-pinterest-p" aria-hidden="true"></i>
										</a>
									</li>
									{/if}
									{if $clsConfiguration->getValue('LinkedIn_Link')}
									<li>
										<a class="linkedin" href="https://www.linkedin.com/{$clsConfiguration->getValue('SiteLinkInLink')}" target="_blank" title="{$core->get_Lang('LinkedIn')}">
											<i class="fa fa-linkedin" aria-hidden="true"></i>
										</a>
									</li>
									{/if}
									{if $clsConfiguration->getValue('TripAdvisor_Link')}
									<li>
										<a class="tripadvisor" href="http://www.tripadvisor.com/{$clsConfiguration->getValue('SiteTripAdvisorLink')}" target="_blank" title="{$core->get_Lang('TripAdvisor')}">
											<i class="fa fa fa-tripadvisor" aria-hidden="true"></i>
										</a>
									</li>
									{/if}
								</ul>
								<h3 class="title_footer ">{$core->get_Lang('Payment Channel')}</h3>
								<p class="payment">
									<img src="{$clsConfiguration->getImage('default_image_pixel',1,1)}" data-src="{$URL_IMAGES}/icon/onepay_f.png" class="lazy" alt="onepay" width="50" height="35">
									<img src="{$clsConfiguration->getImage('default_image_pixel',1,1)}" data-src="{$URL_IMAGES}/icon/visa_f.png" class="lazy" alt="visa" width="50" height="35">
									<img src="{$clsConfiguration->getImage('default_image_pixel',1,1)}" data-src="{$URL_IMAGES}/icon/master_card_f.png" class="lazy" alt="MasterCard" width="50" height="35">
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="copy__right bg_main">
		<div class="container">
			<div class="copy__right--content">
				{$clsConfiguration->getCopyRight()}
				<a title="{$core->get_Lang('Travel website design')}" href="https://www.vietiso.com/thiet-ke-website-du-lich.html" class="">{$core->get_Lang('Travel website design')}</a>  {$core->get_Lang('by')} <a class="" href="https://www.vietiso.com" title="VIETISO">VIET<span class="color_f58220">ISO</span></a>
			</div>
		</div>
	</div>
	</div>
	{else}
	<div class="block1024 sss" style="display: none">
		{$core->getBlock('FooterMobile')}
	</div>
	{/if}	
	<a id="backTop" class="bg_main" role="link" href="javascript:void(0);">
		<i class="fa fa-arrow-up" aria-hidden="true"></i>
	</a>
	<div id="whatsapp-widget" class="ww-normal ww-right ww-standard">
        <a target="_blank" title="{$core->get_Lang('Chat with us')}" href="https://wa.me/{$clsConfiguration->getValue('CompanyWhatsapp')}" class="ww-text">{$core->get_Lang('Chat with us')}
            <div class="ww-arrow"></div>
        </a>
        <div class="ww-icon"><div>
            <a title="Whatsapp" class="ww-icon-link" target="_blank" href="https://wa.me/{$clsConfiguration->getValue('CompanyWhatsapp')}">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d=" M19.11 17.205c-.372 0-1.088 1.39-1.518 1.39a.63.63 0 0 1-.315-.1c-.802-.402-1.504-.817-2.163-1.447-.545-.516-1.146-1.29-1.46-1.963a.426.426 0 0 1-.073-.215c0-.33.99-.945.99-1.49 0-.143-.73-2.09-.832-2.335-.143-.372-.214-.487-.6-.487-.187 0-.36-.043-.53-.043-.302 0-.53.115-.746.315-.688.645-1.032 1.318-1.06 2.264v.114c-.015.99.472 1.977 1.017 2.78 1.23 1.82 2.506 3.41 4.554 4.34.616.287 2.035.888 2.722.888.817 0 2.15-.515 2.478-1.318.13-.33.244-.73.244-1.088 0-.058 0-.144-.03-.215-.1-.172-2.434-1.39-2.678-1.39zm-2.908 7.593c-1.747 0-3.48-.53-4.942-1.49L7.793 24.41l1.132-3.337a8.955 8.955 0 0 1-1.72-5.272c0-4.955 4.04-8.995 8.997-8.995S25.2 10.845 25.2 15.8c0 4.958-4.04 8.998-8.998 8.998zm0-19.798c-5.96 0-10.8 4.842-10.8 10.8 0 1.964.53 3.898 1.546 5.574L5 27.176l5.974-1.92a10.807 10.807 0 0 0 16.03-9.455c0-5.958-4.842-10.8-10.802-10.8z" fill-rule="evenodd"></path></svg>
            </a>
            </div>
        </div>
    </div>
</footer>
{/if}
{/if}
<script>
	var mod = '{$mod}';
	var act = '{$act}';
</script>
{literal}
<style>
.aml_dk-style-default.aml_dk-bottom-right{bottom: 100px !important;transform: unset !important; top: auto}
img{max-width: 100% !important}
</style>
<script>
$('.footer_info .footer_Link').each(function(){
    var $_this = $(this);
    if($_this.height()>140){
        $_this.css("height","140px");
        $_this.closest(".footer_info").find(".readmore").show();
    }else{
        $_this.closest(".footer_info").find(".readmore").hide();
    }
});
$(document).on("click",".footer_info .readmore",function(){
    var $_this = $(this);
    if(!$_this.hasClass("less")){
        $_this.addClass("less");
        $_this.closest(".footer_info").find(".footer_Link").css("height","auto");
        $_this.html('{/literal}{$core->get_Lang("Hide")}{literal}');
    }
    else{
        $_this.removeClass("less");
        $_this.closest(".footer_info").find(".footer_Link").css("height","140px");
        $_this.html('{/literal}{$core->get_Lang("See more")}{literal}');
    }
});
//moreLessSetHeightNew('.footer_info','.footer_Link','.readmore','less');

</script>
{/literal}
{/if}