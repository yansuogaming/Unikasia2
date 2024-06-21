<?php
/* Smarty version 3.1.38, created on 2024-05-06 17:32:57
  from '/home/unikasia/domains/unikasia.com/public_html/isocms/templates/default/_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6638b1d9720438_79187444',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4daea0642db1ad7046bb5694801d1e84099ba60b' => 
    array (
      0 => '/home/unikasia/domains/unikasia.com/public_html/isocms/templates/default/_header.tpl',
      1 => 1714980954,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6638b1d9720438_79187444 (Smarty_Internal_Template $_smarty_tpl) {
?><header class="header-home">
    <div class="bground_header">
        <nav class="txt_header1">
            <div class="container">
                <div class="row border-bottom">
                    <div class="col-md-6 d-flex align-items-center">
                        <p class="txt_pcust">Who knows Asia better than us? We are his children, we live there!</p>
                    </div>
                    <div class="col-md-6 d-flex align-items-center justify-content-end icon-txt-mail-span">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/home/Message.png" alt="ico_mail" class="img_icon">
                        <a href="mailto:info@hanoivoyage.com">
                            <span class="me-4">info@hanoivoyage.com</span>
                        </a>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/home/Call.png" alt="ico_phone" class="img_icon">
                        <a href="tel:0983033966">
                            <span>Whatsapp: 0983033966</span>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
        <div class="text-light mt-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-2 d-flex align-items-center">
                        <a href="home" title="Home">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/home/logo-hnvoyages.png" alt="Logo" width="143" height="53">
                        </a>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm1-12 d-flex align-items-center justify-content-center">
                        <div class="dropdown">
                            <button class="btn text-light dropdown-toggle txt_dropdown" type="button" data-toggle="dropdown">
                                Destinations
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Destination 1</a>
                                <a class="dropdown-item" href="#">Destination 2</a>
                                <a class="dropdown-item" href="#">Destination 3</a>
                            </div>
                        </div>
                        <div class="dropdown">
                            <button class="btn text-light dropdown-toggle txt_dropdown" type="button" data-toggle="dropdown">
                                Travel Styles
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">TS 1</a>
                                <a class="dropdown-item" href="#">TS 2</a>
                                <a class="dropdown-item" href="#">TS 3</a>
                            </div>
                        </div>
                        <div class="dropdown txt_dropdown">
                            <button class="btn text-light dropdown-toggle txt_dropdown" type="button" data-toggle="dropdown">
                                Stay
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Stay 1</a>
                                <a class="dropdown-item" href="#">Stay 2</a>
                                <a class="dropdown-item" href="#">Stay 3</a>
                            </div>
                        </div>
                        <div class="dropdown txt_dropdown">
                            <button class="btn text-light dropdown-toggle txt_dropdown" type="button" data-toggle="dropdown">
                                Cruises
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Cruise 1</a>
                                <a class="dropdown-item" href="#">Cruise 2</a>
                                <a class="dropdown-item" href="#">Cruise 3</a>
                            </div>
                        </div>
                        <div class="dropdown txt_dropdown">
                            <button class="btn text-light dropdown-toggle txt_dropdown" type="button" data-toggle="dropdown">
                                Blog
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Cruise 1</a>
                                <a class="dropdown-item" href="#">Cruise 2</a>
                                <a class="dropdown-item" href="#">Cruise 3</a>
                            </div>
                        </div>
                        <div class="button txt_dropdown">
                            <button class="btn text-light txt_dropdown">About Us</button>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 d-flex align-items-center justify-content-end">
                        <div class="drop_down ml-3">
                            <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="text-decoration: none;">
                                <i class="flag-icon flag-icon-us"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-vn"></i> Vietnamese</a>
                                <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-fr"></i> Français</a>
                                <!-- Add more languages here -->
                            </div>
                        </div>
                        <div class="drop_down2 ml-3">
                            <a href="#" title="User">
                                <i class="fa-solid fa-user"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['mod']->value == 'homepackage') {?>
            <div class="container">
                <h2 class="txt_h2">Leader in the concept of “ tailor-made “ travel</h2>
                <p class="text_pp">Who knows Asia better than us?<br>
                    We are his children, we live there!
                </p>
                <div class="btn_follows text-center">
                    <a href="#" class="btn btn-follows">Follow Us  <i class="fa-solid fa-right-long" style="color: #ffffff; margin-left: 8px;"></i></a>
                </div>
            </div>
        <?php }?>

    </div>
</header><?php }
}
