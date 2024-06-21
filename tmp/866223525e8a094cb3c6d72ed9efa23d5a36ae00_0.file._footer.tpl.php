<?php
/* Smarty version 3.1.38, created on 2024-04-09 01:13:08
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/cart/_footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_661433b4d901c8_13853549',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '866223525e8a094cb3c6d72ed9efa23d5a36ae00' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/cart/_footer.tpl',
      1 => 1709948401,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661433b4d901c8_13853549 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="booking_footer_box main_footer <?php echo $_smarty_tpl->tpl_vars['deviceType']->value;?>
">
	<div class="container">
	   <div class="footer_top">
           <div class="row">
               <div class="col-lg-8 col-xs-12">
                   <ul class="quick-links  <?php echo $_smarty_tpl->tpl_vars['deviceType']->value;?>
">
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('term_condition');?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Terms &amp; Policies');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Terms &amp; Policies');?>
</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('payment_method');?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Payment policy');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Payment policy');?>
</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('faqs');?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('FAQs');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('FAQs');?>
</a></li>
                    </ul>
               </div>
               <div class="col-lg-4 col-xs-12">
                   <div class="social <?php echo $_smarty_tpl->tpl_vars['deviceType']->value;?>
">
                        <p><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Follow us on');?>
</p>
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
                    </div>
               </div>
           </div>
			
			
		</div>
	</div>
	<?php $_smarty_tpl->_assignInScope('CompanyAddress', ('CompanyAddress_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
	<div class="copy_right_cart text-center">
		<p class="copyRight mb0 size13"><?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getCopyRight();?>
 <span class="designWeb mb0 size13"><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Travel website design');?>
" href="https://www.vietiso.com/thiet-ke-website-du-lich.html" class=""><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Travel website design');?>
</a>  <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('by');?>
 <a class="color_1c1c1c" href="https://www.vietiso.com" title="VIETISO">VIET<span class="color_f58220">ISO</span></a></span></p>
	</div>
</div><?php }
}
