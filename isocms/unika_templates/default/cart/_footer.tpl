<div class="booking_footer_box main_footer {$deviceType}">
	<div class="container">
	   <div class="footer_top">
           <div class="row">
               <div class="col-lg-8 col-xs-12">
                   <ul class="quick-links  {$deviceType}">
                        <li><a href="{$clsISO->getLink('term_condition')}" title="{$core->get_Lang('Terms &amp; Policies')}">{$core->get_Lang('Terms &amp; Policies')}</a></li>
                        <li><a href="{$clsISO->getLink('payment_method')}" title="{$core->get_Lang('Payment policy')}">{$core->get_Lang('Payment policy')}</a></li>
                        <li><a href="{$clsISO->getLink('faqs')}" title="{$core->get_Lang('FAQs')}">{$core->get_Lang('FAQs')}</a></li>
                    </ul>
               </div>
               <div class="col-lg-4 col-xs-12">
                   <div class="social {$deviceType}">
                        <p>{$core->get_Lang('Follow us on')}</p>
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
                    </div>
               </div>
           </div>
			
			
		</div>
	</div>
	{assign var=CompanyAddress value=CompanyAddress_|cat:$_LANG_ID}
	<div class="copy_right_cart text-center">
		<p class="copyRight mb0 size13">{$clsConfiguration->getCopyRight()} <span class="designWeb mb0 size13"><a title="{$core->get_Lang('Travel website design')}" href="https://www.vietiso.com/thiet-ke-website-du-lich.html" class="">{$core->get_Lang('Travel website design')}</a>  {$core->get_Lang('by')} <a class="color_1c1c1c" href="https://www.vietiso.com" title="VIETISO">VIET<span class="color_f58220">ISO</span></a></span></p>
	</div>
</div>