<?php
/* Smarty version 3.1.38, created on 2024-04-09 13:12:42
  from '/home/isocms/domains/isocms.com/private_html/isocms/unika_templates/default/_footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6614dc5a99e685_53771398',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3924dc769b765a8e0ccde9e551505af582a2b617' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/unika_templates/default/_footer.tpl',
      1 => 1711015059,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6614dc5a99e685_53771398 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="sticky-footer-wrapper">
    <div class="tailor_button">
        <a href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('tailor');?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('TAILOR-MADE TRAVEL');?>
">
            <span class="icon">
            <img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/unika/logo.svg" width="36px" height="35px" />
            </span>
            <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('TAILOR-MADE TRAVEL');?>

        </a>
    </div>
</div>
<?php if (1 == 2) {?>


<?php $_smarty_tpl->_assignInScope('Copyright', ('Copyright_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));
$_smarty_tpl->_assignInScope('CompanyAddress', ('CompanyAddress_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));
$_smarty_tpl->_assignInScope('CompanyName', ('CompanyName_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));
$_smarty_tpl->_assignInScope('CompanyAddress1', ('CompanyAddress1_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));
$_smarty_tpl->_assignInScope('DescriptionZoneFooter', ('DescriptionZoneFooter_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));
if ($_smarty_tpl->tpl_vars['mod']->value != 'cart') {
if ($_smarty_tpl->tpl_vars['act']->value != 'success') {?>
<footer id="footer" class="footer">
	<?php if ($_smarty_tpl->tpl_vars['deviceType']->value == 'computer') {?>
	<div class="hidden1024">
	<div class="zone__footer hidden1024">
		<div class="container">
			<div class="zone__footer--main footer__main">
				<div class="row">
					<div class="col-lg-3">
						<h2 class="title_footer company_name"><?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['CompanyName']->value);?>
</h2>
						<div class="company_info size15">
							<p class="footer_com mb20 address"><a target="_blank" class="" href="https://maps.google.it/maps?q=<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['CompanyAddress1']->value);?>
" title="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['CompanyAddress']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['CompanyAddress']->value);?>
</a></p>
							<p class="footer_com mb20 phone"><span class="label"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Hotline');?>
</span><a href="tel:<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('CompanyHotline');?>
" title="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('CompanyHotline');?>
" class=""><?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('CompanyHotline');?>
</a> 							</p>
							<p class="footer_com mb20 email"><span class="label"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Email');?>
</span><a href="mailto:<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('CompanyEmail');?>
" title="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('CompanyEmail');?>
" class=""><?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('CompanyEmail');?>
</a></p>
						</div>
					</div>
					<div class="col-lg-9">
						<div class="row box_col">
							<div class="col-lg-3 col-sm-6 col-xs-6 full_width_420 mb991_30">
								<h3 class="title_footer"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('About us');?>
</h3>
								<ul class="footer_Link list_style_none">
									<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'page','about','default')) {?>
									<li><a href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('about');?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('About Us');?>
"> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('About Us');?>
</a></li>
									<?php }?>
									<li><a href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('contact');?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Contact');?>
"> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Contact');?>
</a></li>
									 <?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'testimonial','default','default')) {?>
									<li><a href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('testimonial');?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Testimonials');?>
"> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Testimonials');?>
</a></li>
									<?php }?>
									<?php
$__section_i_25_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listAllpage']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_25_total = $__section_i_25_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_25_total !== 0) {
for ($__section_i_25_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_25_iteration <= $__section_i_25_total; $__section_i_25_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
									<?php $_smarty_tpl->_assignInScope('title_page', $_smarty_tpl->tpl_vars['listAllpage']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title']);?>
									<li><a href="<?php echo $_smarty_tpl->tpl_vars['clsPage']->value->getLink($_smarty_tpl->tpl_vars['listAllpage']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['page_id'],$_smarty_tpl->tpl_vars['listAllpage']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
" title="<?php echo $_smarty_tpl->tpl_vars['title_page']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['title_page']->value;?>
</a></li>
									<?php
}
}
?>
									 <?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'faqs','default','default')) {?>
									<li><a href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('faqs');?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Faqs');?>
"> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Faqs');?>
</a></li>
									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'download','default','default')) {?>
									<li><a href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('download');?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Trade Brochures');?>
"> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Trade Brochures');?>
</a></li>
									<?php }?>
								</ul>
							</div> 
							<div class="col-lg-3 col-sm-6 col-xs-6 full_width_420 mb991_30 footer_info">
								<h3 class="title_footer "><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Travel Styles');?>
</h3>
								<ul class="footer_Link list_style_none">
									<?php
$__section_i_26_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstCatTour']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_26_total = $__section_i_26_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_26_total !== 0) {
for ($__section_i_26_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_26_iteration <= $__section_i_26_total; $__section_i_26_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
									<?php $_smarty_tpl->_assignInScope('title_category', $_smarty_tpl->tpl_vars['lstCatTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title']);?>
									<li><a href="<?php echo $_smarty_tpl->tpl_vars['clsTourCategory']->value->getLink($_smarty_tpl->tpl_vars['lstCatTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tourcat_id'],$_smarty_tpl->tpl_vars['lstCatTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
" title="<?php echo $_smarty_tpl->tpl_vars['title_category']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['title_category']->value;?>
</a></li>
									<?php
}
}
?>
								</ul>
								<span class="readmore mt10 size14 text-underline"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('See more');?>
</span>
							</div>
							<div class="col-lg-3 col-sm-6 col-xs-6 full_width_420 mb991_30 footer_info">
								<h3 class="title_footer "><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Other');?>
</h3>
								<ul class="footer_Link list_style_none">
									<li><a href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('tailor');?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Tailor made tour');?>
"> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Tailor made tour');?>
</a></li>
									<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'news','default','default')) {?>
									<li><a href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('news');?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('News');?>
"> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('News');?>
</a></li>
									<?php }?>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('service');?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Services');?>
"> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Services');?>
</a></li>
									<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'blog','default','default')) {?>
									<li><a href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('blog');?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Blog');?>
"> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Blogs');?>
</a></li>
									<?php }?>
								</ul>
							</div>
							<div class="col-lg-3 col-sm-6 col-xs-6 full_width_420 mb991_30 footer_info">
								<h3 class="title_footer "><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Follow Us');?>
</h3>
								<ul class="list_social box_col list_style_none">
									<?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('Facebook_Link')) {?>
									<li>
										<a class="facebook" href="http://www.facebook.com/<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SiteFacebookLink');?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Facebook');?>
">
											<i class="fa fa-facebook" aria-hidden="true"></i>
										</a>
									</li>
									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('Twitter_Link')) {?>
									<li>
										<a class="twitter" href="http://www.twitter.com/<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SiteTwitterLink');?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Twitter');?>
">
											<i class="fa fa-twitter" aria-hidden="true"></i>
										</a>
									</li>
									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('Youtube_Link')) {?>
									<li>
										<a class="youtube" href="http://www.youtube.com/<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SiteYoutubeLink');?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Youtube');?>
">
											<i class="fa fa-youtube-play" aria-hidden="true"></i>
										</a>
									</li>
									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('Google_Plus_Link')) {?>
									<li>
										<a class="google" href="http://plus.google.com/<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SiteGoogleLink');?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Google +');?>
">
											<i class="fa fa-google-plus" aria-hidden="true"></i>
										</a>
									</li>
									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('Instagram_Link')) {?>
									<li>
										<a class="instagram" href="https://www.instagram.com/<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SiteInstagramLink');?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Instagram');?>
">
											<i class="fa fa-instagram" aria-hidden="true"></i>
										</a>
									</li>
									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('Printest_Link')) {?>
									<li>
										<a class="pinterest" href="http://pinterest.com/<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SitePrintestLink');?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Printest');?>
">
											<i class="fa fa-pinterest-p" aria-hidden="true"></i>
										</a>
									</li>
									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('LinkedIn_Link')) {?>
									<li>
										<a class="linkedin" href="https://www.linkedin.com/<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SiteLinkInLink');?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('LinkedIn');?>
">
											<i class="fa fa-linkedin" aria-hidden="true"></i>
										</a>
									</li>
									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('TripAdvisor_Link')) {?>
									<li>
										<a class="tripadvisor" href="http://www.tripadvisor.com/<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SiteTripAdvisorLink');?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('TripAdvisor');?>
">
											<i class="fa fa fa-tripadvisor" aria-hidden="true"></i>
										</a>
									</li>
									<?php }?>
								</ul>
								<h3 class="title_footer "><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Payment Channel');?>
</h3>
								<p class="payment">
									<img src="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getImage('default_image_pixel',1,1);?>
" data-src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/icon/onepay_f.png" class="lazy" alt="onepay" width="50" height="35">
									<img src="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getImage('default_image_pixel',1,1);?>
" data-src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/icon/visa_f.png" class="lazy" alt="visa" width="50" height="35">
									<img src="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getImage('default_image_pixel',1,1);?>
" data-src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/icon/master_card_f.png" class="lazy" alt="MasterCard" width="50" height="35">
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
				<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getCopyRight();?>

				<a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Travel website design');?>
" href="https://www.vietiso.com/thiet-ke-website-du-lich.html" class=""><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Travel website design');?>
</a>  <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('by');?>
 <a class="" href="https://www.vietiso.com" title="VIETISO">VIET<span class="color_f58220">ISO</span></a>
			</div>
		</div>
	</div>
	</div>
	<?php } else { ?>
	<div class="block1024 sss" style="display: none">
		<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('FooterMobile');?>

	</div>
	<?php }?>	
	<a id="backTop" class="bg_main" role="link" href="javascript:void(0);">
		<i class="fa fa-arrow-up" aria-hidden="true"></i>
	</a>
	<div id="whatsapp-widget" class="ww-normal ww-right ww-standard">
        <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Chat with us');?>
" href="https://wa.me/<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('CompanyWhatsapp');?>
" class="ww-text"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Chat with us');?>

            <div class="ww-arrow"></div>
        </a>
        <div class="ww-icon"><div>
            <a title="Whatsapp" class="ww-icon-link" target="_blank" href="https://wa.me/<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('CompanyWhatsapp');?>
">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d=" M19.11 17.205c-.372 0-1.088 1.39-1.518 1.39a.63.63 0 0 1-.315-.1c-.802-.402-1.504-.817-2.163-1.447-.545-.516-1.146-1.29-1.46-1.963a.426.426 0 0 1-.073-.215c0-.33.99-.945.99-1.49 0-.143-.73-2.09-.832-2.335-.143-.372-.214-.487-.6-.487-.187 0-.36-.043-.53-.043-.302 0-.53.115-.746.315-.688.645-1.032 1.318-1.06 2.264v.114c-.015.99.472 1.977 1.017 2.78 1.23 1.82 2.506 3.41 4.554 4.34.616.287 2.035.888 2.722.888.817 0 2.15-.515 2.478-1.318.13-.33.244-.73.244-1.088 0-.058 0-.144-.03-.215-.1-.172-2.434-1.39-2.678-1.39zm-2.908 7.593c-1.747 0-3.48-.53-4.942-1.49L7.793 24.41l1.132-3.337a8.955 8.955 0 0 1-1.72-5.272c0-4.955 4.04-8.995 8.997-8.995S25.2 10.845 25.2 15.8c0 4.958-4.04 8.998-8.998 8.998zm0-19.798c-5.96 0-10.8 4.842-10.8 10.8 0 1.964.53 3.898 1.546 5.574L5 27.176l5.974-1.92a10.807 10.807 0 0 0 16.03-9.455c0-5.958-4.842-10.8-10.802-10.8z" fill-rule="evenodd"></path></svg>
            </a>
            </div>
        </div>
    </div>
</footer>
<?php }
}
echo '<script'; ?>
>
	var mod = '<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
';
	var act = '<?php echo $_smarty_tpl->tpl_vars['act']->value;?>
';
<?php echo '</script'; ?>
>

<style>
.aml_dk-style-default.aml_dk-bottom-right{bottom: 100px !important;transform: unset !important; top: auto}
img{max-width: 100% !important}
</style>
<?php echo '<script'; ?>
>
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
        $_this.html('<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Hide");?>
');
    }
    else{
        $_this.removeClass("less");
        $_this.closest(".footer_info").find(".footer_Link").css("height","140px");
        $_this.html('<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("See more");?>
');
    }
});
//moreLessSetHeightNew('.footer_info','.footer_Link','.readmore','less');

<?php echo '</script'; ?>
>

<?php }
}
}
