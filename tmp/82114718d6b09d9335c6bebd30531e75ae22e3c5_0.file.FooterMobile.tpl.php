<?php
/* Smarty version 3.1.38, created on 2024-05-06 14:50:51
  from '/home/unikasia/domains/unikasia.com/private_html/isocms/templates/default/blocks/FooterMobile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66388bdbc95df7_43832639',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '82114718d6b09d9335c6bebd30531e75ae22e3c5' => 
    array (
      0 => '/home/unikasia/domains/unikasia.com/private_html/isocms/templates/default/blocks/FooterMobile.tpl',
      1 => 1714822354,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66388bdbc95df7_43832639 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('Copyright', ('Copyright_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));
$_smarty_tpl->_assignInScope('CompanyAddress', ('CompanyAddress_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));
$_smarty_tpl->_assignInScope('CompanyName', ('CompanyName_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));
$_smarty_tpl->_assignInScope('CompanyAddress1', ('CompanyAddress1_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));
$_smarty_tpl->_assignInScope('DescriptionZoneFooter', ('DescriptionZoneFooter_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
<div id="footerMobile">
   <div class="container">
<!--
     <div class="logo__footer">
		<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['PAGE_NAME']->value;?>
"><img class="img100" src="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getImageValue('FooterLogo');?>
" alt="<?php echo $_smarty_tpl->tpl_vars['PAGE_NAME']->value;?>
" /></a>
	</div>
-->
      <div class="InfoCompany">
		  <h2 class="title_footer"><?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['CompanyName']->value);?>
</h2>
         <p class="footer_com mb20 address">
			 <a target="_blank" class="" href="https://maps.google.it/maps?q=<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['CompanyAddress1']->value);?>
" title="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['CompanyAddress']->value);?>
">
				 <?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['CompanyAddress']->value);?>

			 </a>
		 </p>
         <p class="footer_com mb20 phone"><span class="label"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Hotline');?>
</span><a href="tel:<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('CompanyHotline');?>
" title="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('CompanyHotline');?>
" class=""><?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('CompanyHotline');?>
</a>          </p>
         <p class="footer_com mb20 email"><span class="label"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Email');?>
</span><a href="mailto:<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('CompanyEmail');?>
" title="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('CompanyEmail');?>
" class=""><?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('CompanyEmail');?>
</a></p>
      </div>
	   <div class="panel-group" id="accordion_F">
      <div class="panel panel-default">
         <div class="panel-heading ">
            <h3 class="title_footer">
               <a class="panel-title collapsed" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#tab_ft_1" aria-controls="tab_ft_1" role=link aria-disabled=true >
               <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('About us');?>
 </span>
               <i class="fa fa-chevron-up pull-right"></i>
               </a>
            </h3>
         </div>
         <div id="tab_ft_1" class="panel-collapse collapse" aria-labelledby="tab_ft" data-bs-parent="accordion_F">
            <div class="panel-body color_666">
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
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listAllpage']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                  <?php $_smarty_tpl->_assignInScope('title_page', $_smarty_tpl->tpl_vars['listAllpage']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title']);?>
                  <li><a href="<?php echo $_smarty_tpl->tpl_vars['clsPage']->value->getLink($_smarty_tpl->tpl_vars['listAllpage']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['page_id']);?>
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
         </div>
		 </div>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="title_footer">
					<a class="panel-title collapsed" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#tab_ft_4" aria-controls="tab_ft_4" role=link aria-disabled=true >
						<span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Travel Styles');?>
 </span>
						<i class="fa fa-chevron-up pull-right"></i>
					</a>
				</h3>
			</div>
			<div id="tab_ft_4" class="panel-collapse collapse" data-bs-parent="accordion_F">
				<div class="panel-body color_666">
					<ul class="footer_Link list_style_none">
                        <?php
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstCatTour']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total !== 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
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
				</div>
			</div>
		</div>
    	<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="title_footer">
					<a class="panel-title collapsed" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#tab_ft_5" aria-controls="tab_ft_5" role=link aria-disabled=true >
						<span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Other');?>
 </span>
						<i class="fa fa-chevron-up pull-right"></i>
					</a>
				</h3>
			</div>
			<div id="tab_ft_5" class="panel-collapse collapse" data-bs-parent="accordion_F">
				<div class="panel-body color_666">
					<ul class="footer_Link list_style_none">
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('tailor');?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Tailor made tour');?>
"> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Tailor made tour');?>
</a></li>
						<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'news','default','default')) {?>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('news');?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Experience');?>
"> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Experience');?>
</a></li>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'blog','default','default')) {?>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('blog');?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Blog');?>
"> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Blogs');?>
</a></li>
						<?php }?>
					</ul>
				</div>
			</div>
		</div>
     	<div class="panel panel-default box-follow">
			<div class="panel-heading">
				<h3 class="title_footer">
					<a class="panel-title collapsed" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#tab_ft_6" aria-controls="tab_ft_6" role=link aria-disabled=true >
						<span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Follow Us');?>
 </span>
					</a>
				</h3>
			</div>
			<div id="" class="panel-collapse " data-bs-parent="accordion_F">
				<div class="panel-body color_666">
					<ul class="footer_Link list_style_none list_follow">
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
				</div>
			</div>
		</div>
		 <div class="panel panel-default box_pay">
				<div class="panel-heading">
					<h3 class="title_footer">
						<a class="panel-title collapsed" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#tab_ft_7" aria-controls="tab_ft_7" role=link aria-disabled=true >
							<span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Payment Channel');?>
 </span>
						</a>
					</h3>
				</div>
				<div id="" class="panel-collapse" data-bs-parent="accordion_F">
					<div class="panel-body color_666">
						<div class="footer_Link list_style_none list_follow">
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
</div><?php }
}
