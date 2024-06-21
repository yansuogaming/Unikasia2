<?php
/* Smarty version 3.1.38, created on 2024-04-08 17:08:43
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/tour_new/contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6613c22ba5df49_23641147',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7972ba6822e44e516918d10c50dbda260fb2e796' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/tour_new/contact.tpl',
      1 => 1706144187,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6613c22ba5df49_23641147 (Smarty_Internal_Template $_smarty_tpl) {
?><main class="main_contact page_container">
    <section class="section_box section__top text-center">
        <div class="container">
            <h1 class="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Contact');?>
</h1>
            <h2 class="intro_contact size20 mt10">
                <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('If you have any questions and need support, leave your information and we will get back to you');?>

            </h2>
        </div>
    </section>
    <section class="section_box bg_fff">
        <div class="container">
            <div class="supplier__contact">
                <div class="row">
                    <div class="col-sm-4 mb30_mb">
                        <div class="item d-flex">
                            <div class="item_img">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/contact_address.jpg"  alt="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Address');?>
">
                            </div>
                            <div class="item_content">
                                <h3 class="title size18 text_bold mb15"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Address');?>
</h3>
                                <div class="color_666 size14_mb">
                                    <?php $_smarty_tpl->_assignInScope('CompanyAddress1', ('CompanyAddress1_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
                                    <?php $_smarty_tpl->_assignInScope('CompanyAddress', ('CompanyAddress_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
                                    <a target="_blank" class="color_666" href="https://maps.google.it/maps?q=<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['CompanyAddress1']->value);?>
" title="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['CompanyAddress']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['CompanyAddress']->value);?>
</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mb30_mb">
                        <div class="item d-flex pdl_20">
                            <div class="item_img">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/contact_phone.jpg"  alt="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Hotline');?>
">
                            </div>
                            <div class="item_content">
                                <h3 class="title size18 text_bold mb15"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Hotline');?>
</h3>
                                <div class="color_666">
                                    <a class="color_666" title="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('CompanyHotline');?>
" href="tel:<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('CompanyHotline');?>
"><?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('CompanyHotline');?>
</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="item d-flex">
                            <div class="item_img">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/contact_mail.jpg"  alt="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Email');?>
">
                            </div>
                            <div class="item_content">
                                <h3 class="title size18 text_bold mb15"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Email');?>
</h3>
                                <div class="color_666">
                                    <a class="color_666" title="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('CompanyEmail');?>
" href="mailto:<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('CompanyEmail');?>
"><?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('CompanyEmail');?>
</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact_main">
        <div class="container">
            <form action="" method="post" id="EnquiryForm" class="enquiry_form">
                <?php if ($_smarty_tpl->tpl_vars['cartSessionTour']->value) {?>
                <?php $_smarty_tpl->_assignInScope('tour_id', $_smarty_tpl->tpl_vars['cartSessionTour']->value['tour_id_z']);?>
                <?php $_smarty_tpl->_assignInScope('title_tour', $_smarty_tpl->tpl_vars['clsTour']->value->getTitle($_smarty_tpl->tpl_vars['tour_id']->value));?>
                <?php $_smarty_tpl->_assignInScope('departure_date', $_smarty_tpl->tpl_vars['clsISO']->value->getStrToTime($_smarty_tpl->tpl_vars['cartSessionTour']->value['check_in_book_z']));?>
                <?php $_smarty_tpl->_assignInScope('end_date', $_smarty_tpl->tpl_vars['clsTour']->value->getEndDate($_smarty_tpl->tpl_vars['departure_date']->value,$_smarty_tpl->tpl_vars['tour_id']->value));?>
                <?php $_smarty_tpl->_assignInScope('number_adult', $_smarty_tpl->tpl_vars['cartSessionTour']->value['number_adults_z']);?>
                <?php $_smarty_tpl->_assignInScope('number_child', $_smarty_tpl->tpl_vars['cartSessionTour']->value['number_child_z']);?>
                <?php $_smarty_tpl->_assignInScope('number_infant', $_smarty_tpl->tpl_vars['cartSessionTour']->value['number_infants_z']);?>
                <?php $_smarty_tpl->_assignInScope('tour__class', $_smarty_tpl->tpl_vars['cartSessionTour']->value['tour__class']);?>
                <div class="infor_tour bg_fff relative">
                    <a href="javascript:void(0);" data-type="Tour" class="delete_service" key="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Delete serivce');?>
"><i class="fa fa-times"></i></a>
                    <h3 class="title text_bold mb15 size24 size20_mb"><a
                                href="<?php echo $_smarty_tpl->tpl_vars['clsTour']->value->getLink($_smarty_tpl->tpl_vars['tour_id']->value);?>
" title="<?php echo $_smarty_tpl->tpl_vars['title_tour']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['title_tour']->value;?>
</a>
                    </h3>
                    <div class="row d-flex">
                        <div class="col-md-5 col-sm-5">
                            <p class="mb05"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Departing');?>
  </strong></p>
                            <p class="departure mb0"><?php echo $_smarty_tpl->tpl_vars['clsTour']->value->getListDeparturePoint($_smarty_tpl->tpl_vars['tour_id']->value);?>
</p>
                            <p class="departure_date mb0"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->converTimeToText5($_smarty_tpl->tpl_vars['departure_date']->value);?>
</p>
                        </div>
                        <div class="col-md-1 col-sm-1 icon_arrow">

                        </div>
                        <div class="col-md-6 col-sm-6">
                            <p class="mb05"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('End');?>
 </strong></p>
                            <p class="departure mb0"><?php echo $_smarty_tpl->tpl_vars['clsTour']->value->getEndCityAround($_smarty_tpl->tpl_vars['tour_id']->value,1);?>
</p>
                            <p class="departure_date mb0"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->converTimeToText5($_smarty_tpl->tpl_vars['end_date']->value);?>
</p>
                        </div>
                    </div>
                    <div class="more_infor">
                        <p>
                            <strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Traveler');?>
</strong>: <?php echo $_smarty_tpl->tpl_vars['number_adult']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Adult(s)');?>
 <?php if ($_smarty_tpl->tpl_vars['number_child']->value) {?>,<?php echo $_smarty_tpl->tpl_vars['number_child']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Child');
}?> <?php if ($_smarty_tpl->tpl_vars['number_infant']->value) {?>,<?php echo $_smarty_tpl->tpl_vars['number_infant']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Infant');
}?>
                        </p>
                        <?php if ($_smarty_tpl->tpl_vars['tour__class']->value) {?> <p>
                            <strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Travel Style');?>
</strong>
                            : <?php echo $_smarty_tpl->tpl_vars['clsTourOption']->value->getTitle($_smarty_tpl->tpl_vars['tour__class']->value);?>
</p><?php }?>
                    </div>
                    <input type="hidden" name="tour_id" value="<?php echo $_smarty_tpl->tpl_vars['tour_id']->value;?>
"/>
                    <input type="hidden" name="departure_date" value="<?php echo $_smarty_tpl->tpl_vars['departure_date']->value;?>
"/>
                    <input type="hidden" name="end_date" value="<?php echo $_smarty_tpl->tpl_vars['end_date']->value;?>
"/>
                    <input type="hidden" name="number_adult" value="<?php echo $_smarty_tpl->tpl_vars['number_adult']->value;?>
"/>
                    <input type="hidden" name="number_child" value="<?php echo $_smarty_tpl->tpl_vars['number_child']->value;?>
"/>
                    <input type="hidden" name="number_infant" value="<?php echo $_smarty_tpl->tpl_vars['number_infant']->value;?>
"/>
                    <input type="hidden" name="tour__class" value="<?php echo $_smarty_tpl->tpl_vars['tour__class']->value;?>
"/>
                </div>
                <?php }?>
               <?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('cart_hotel_contact_box');?>

               <?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('cart_cruise_contact_box');?>

                
                <?php if ($_smarty_tpl->tpl_vars['cartSessionVoucher']->value) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cartSessionVoucher']->value, 'item', false, NULL, 'item', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                        <?php $_smarty_tpl->_assignInScope('voucher_id', $_smarty_tpl->tpl_vars['item']->value['voucher_id_z']);?>
                        <?php $_smarty_tpl->_assignInScope('title_voucher', $_smarty_tpl->tpl_vars['clsVoucher']->value->getTitle($_smarty_tpl->tpl_vars['voucher_id']->value));?>
                        <div class="infor_tour bg_fff relative">
                            <h3 class="title text_bold mb15 size24 size20_mb"><a href="<?php echo $_smarty_tpl->tpl_vars['clsVoucher']->value->getLink($_smarty_tpl->tpl_vars['voucher_id']->value);?>
" title="<?php echo $_smarty_tpl->tpl_vars['title_voucher']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['title_voucher']->value;?>
</a></h3>
                            <input type="hidden" name="voucher_id" value="<?php echo $_smarty_tpl->tpl_vars['voucher_id']->value;?>
" />
                        </div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>
                <p class="note size16 mb0"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Please do not ignore the information');?>
*</p>
                <div class="fill_form bg_fff">
                    <h3 class="text_bold mb15 size24 size20_mb"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Please enter contact information');?>
</h3>
                    <div class="group_1 box_col">
                        <div class="form-group">
                            <label for="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Title');?>
:<span style="color:red"> *</span>
                            </label>
                            <select id="title" name="title" class="required form-booking_input find_select">
                                <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->makeSelectTitle($_smarty_tpl->tpl_vars['title']->value);?>

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="fullname"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Full name');?>
:<span style="color:red"> *</span>
                            </label>
                            <input id="fullname" name="fullname" type="text" class="form-booking_input required" value="" autofocus>
                            <div class="clearfix"></div>
                            <div id="error_fullname" class="error text-left"></div>
                        </div>
                    </div>
                    <div class="group_2 box_col">
                        <div class="form-group">
                            <label for="birthday_contact"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Date of Birth');?>
:<span style="color:red"> *</span>
                            </label>
                            <input type="hidden" name="birthday_contact" id="birthday_contact" class="form-booking_input required">
                            <div class="clearfix"></div>
                            <div id="error_birthday_contact" class="error text-left"></div>
                            
                                <?php echo '<script'; ?>
>
                                    $(function(){
                                        $("#birthday_contact").dateDropdowns({
                                            submitFieldName: 'birthday',
                                            minAge: 18,
                                            defaultDate: '1980-01-01'
                                        });
                                    });
                                <?php echo '</script'; ?>
>
                            
                        </div>
                        <div class="form-group">
                            <label for="country_id"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Country');?>
:<span style="color:red"> *</span>
                            </label>
                            <select name="country_id" id="country_id" class="form-booking_input find_select required">
                                <option value="0"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Selected');?>
</option>
								<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstCountryRegion']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['lstCountryRegion']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['country_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['lstCountryRegion']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title'];?>
</option>
								<?php
}
}
?>
                            </select>
                            <div class="clearfix"></div>
                            <div id="error_country_id" class="error text-left"></div>
                        </div>
                        <div class="form-group">
                            <label for="email"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Email');?>
:<span style="color:red"> *</span>
                            </label>
                            <input id="email" name="email" type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('CompanyEmail');?>
" value="" class="form-booking_input required">
                            <div class="clearfix"></div>
                            <div id="error_email" class="error text-left"></div>
                        </div>
                        <div class="form-group">
                            <label for="phone"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Telephone');?>
:<span id="TelephoneAsterisk" style="color:red"> *</span>
                            </label>
                            <input id="phone" name="phone" type="text" value="" class="form-booking_input required">
                            <div class="clearfix"></div>
                            <div id="error_phone" class="error"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  for="Comments">
                            <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Messager');?>

                        </label>
                        <textarea class="text_box form-control" id="Comments" name="Comments" rows="2" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Enter what you want, ask for');?>
...."></textarea>
                    </div>
                </div>
                <div class="row box_col">
                    <div class="col-sm-6 col-xs-12">
                        <div class="g-recaptcha" data-sitekey="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getVar('reCAPTCHA_KEY');?>
"></div>
                        <?php if ($_smarty_tpl->tpl_vars['errMsg']->value != '') {?>
                            <div id="error_recaptcha" class="error text_left"><?php echo $_smarty_tpl->tpl_vars['errMsg']->value;?>
</div>
                        <?php } else { ?>
                            <div id="error_recaptcha" class="error text_left"></div>
                        <?php }?>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <input type="hidden" name="plantrip" value="plantrip" />
                        <input type="hidden" name="hidden_field" value="" />
                        <button type="submit" class="form-control send_contact btn_main" id="SubmitEnquiry">
                            <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Send');?>

                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <section class="faqs bg_fff">
        <div class="container">
            <div class="faqs_panel">
                <h2 class="size24 text_bold text-center mb20"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('FAQs');?>
</h2>
                <div class="accordion" id="accordionFAQs">
                    <?php
$__section_k_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstFaqs']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_k_1_total = $__section_k_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_k'] = new Smarty_Variable(array());
if ($__section_k_1_total !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_k']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_k']->value['iteration'] <= $__section_k_1_total; $_smarty_tpl->tpl_vars['__smarty_section_k']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']++){
?>
					<div class="card">
						<div class="card-header" id="faqs_<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['iteration'] : null);?>
">
							<h3 class="title">
								<a class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapsefaqs_<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['iteration'] : null);?>
" aria-expanded="false" aria-controls="collapsefaqs_<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['iteration'] : null);?>
">
								<?php echo $_smarty_tpl->tpl_vars['clsFAQ']->value->getTitle($_smarty_tpl->tpl_vars['lstFaqs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['faq_id'],$_smarty_tpl->tpl_vars['lstFaqs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]);?>

								<i class="fa fa-angle-up pull-right"></i>
								</a>
							</h3>
						</div>
						<div id="collapsefaqs_<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['iteration'] : null);?>
" class="collapse" aria-labelledby="faqs_<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['iteration'] : null);?>
" data-bs-parent="#accordionFAQs">
							<div class="card-body">
								<div class="detail tinymce_Content">
									<?php echo $_smarty_tpl->tpl_vars['clsFAQ']->value->getContent($_smarty_tpl->tpl_vars['lstFaqs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['faq_id'],$_smarty_tpl->tpl_vars['lstFaqs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]);?>

								</div>
							</div>
						</div>
					</div>
                    <?php
}
}
?>
                </div>
                <a href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('faqs');?>
" class="more_faqs mt20 d-block text-center color_5f93e7" target="_blank"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('View more');?>
</a>
            </div>
        </div>
    </section>
</main>


<?php echo '<script'; ?>
>
    var msg_fullname_required = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Your first name should not be empty');?>
!";
    var msg_phone_required = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Your telephone should not be empty');?>
!";
    var msg_email_required = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Your email should not be empty');?>
!";
    var msg_email_not_valid = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Please enter a valid email address');?>
!";
    var msg_country_id_not_valid = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Please select country');?>
!";
    var msg_confirmemail_not_valid = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Email addresses do not match');?>
!";
    var showInfo = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Show more information');?>
";
    var hideInfo = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('information hidden');?>
";
    var Day = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("Day");?>
';
    var Month = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("Month");?>
';
    var Year = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("Year");?>
';
    var January = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("January");?>
'
    var February = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("February");?>
';
    var March = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("March");?>
';
    var April = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("April");?>
';
    var May = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("May");?>
';
    var June = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("June");?>
';
    var July = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("July");?>
';
    var August = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("August");?>
';
    var September = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("September");?>
';
    var October = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("October");?>
';
    var November = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("November");?>
';
    var December = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("December");?>
';
    var Jan = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("Jan");?>
'
    var Feb = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("Feb");?>
';
    var Mar = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("Mar");?>
';
    var Apr = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("Apr");?>
';
    var May = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("May");?>
';
    var Jun = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("Jun");?>
';
    var Jul = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("Jul");?>
';
    var Aug = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("Aug");?>
';
    var Sep = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("Sep");?>
';
    var Oct = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("Oct");?>
';
    var Nov = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("Nov");?>
';
    var Dec = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("Dec");?>
';
    var For = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("For");?>
';
    var st = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("st");?>
';
    var nd = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("nd");?>
';
    var rd = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("rd");?>
';
    var th = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("th");?>
';
    var Cancel = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("Cancel");?>
';
    var Confirm = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("Confirm");?>
';
    var delete_text = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("Are you sure you want to delete?");?>
';
    var remove_text = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("Are you sure you want to remove?");?>
';
    var loading = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("loading");?>
';
    var DateofBirth = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_lang("Birthday");?>
';
    var msg_recapcha = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('You must check Recaptcha');?>
";
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/datepicker/jquery.date-dropdowns.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/jquery.validate.js?ver=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/jquery-confirm.min.js?ver=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
>
        $(function(){
            $('#EnquiryForm').validate();
            $("#SubmitEnquiry").click(function(ev){
                var $fullname = $("#fullname").val();
                var $country_id = $("#country_id").val();
                var $email = $("#email").val();
                var $phone = $("#phone").val();
                if($("#fullname").val()==''){
                    $('#error_fullname').html(msg_fullname_required).fadeIn().delay(3000).fadeOut();
                    $("#fullname").focus();
                    return false;
                }
                if($country_id == 0){
                    $('#error_country_id').html(msg_country_id_not_valid).fadeIn().delay(3000).fadeOut();
                    $("#country_id").focus();
                    return false;
                }
                if($("#email").val()==''){
                    $('#error_email').html(msg_email_required).fadeIn().delay(3000).fadeOut();
                    $("#email").focus();
                    return false;
                }
                if(checkValidEmail($email)==false){
                    $('#error_email').html(msg_email_not_valid).fadeIn().delay(3000).fadeOut();
                    $("#email").focus();
                    return false;
                }
                if($("#phone").val()==''){
                    $('#error_phone').html(msg_phone_required).fadeIn().delay(3000).fadeOut();
                    $("#phone").focus();
                    return false;
                }
                
                if(grecaptcha.getResponse() == "") {
                    ev.preventDefault();
                    $('#error_recaptcha').html(msg_recapcha).fadeIn().delay(3000).fadeOut();
                    return false;
                } else {
                    $('#EnquiryForm').submit();
                }
            });
            $('.delete_service').click(function (){
                 var type =$(this).data('type');
                $.confirm({
                    title: Confirm,
                    content: remove_text,
                    minHeight: 100,
                    maxHeight: 200,
                    buttons: {
                        Confirm: {
                            text: Confirm,
                            action: function(){
                                $.ajax({
                                    type:'POST',
                                    url: path_ajax_script+'/index.php?mod='+mod+'&act=deleteService&lang='+LANG_ID,
                                    data:{type:type},
                                    dataType:'json',
                                    success: function (res){
                                        if(res.msg == 'ok'){
                                            window.location.reload();
                                        }
                                    }
                                });
                            }
                        },
                        Cancel: {
                            text: Cancel
                        }
                    }
                });

            });
        });
        function checkValidEmail(email){
            var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            return regex.test(email);
        }
    <?php echo '</script'; ?>
>
<?php }
}
