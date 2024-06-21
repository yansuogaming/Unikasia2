<?php
/* Smarty version 3.1.38, created on 2024-04-09 13:12:42
  from '/home/isocms/domains/isocms.com/private_html/isocms/unika_templates/default/home/default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6614dc5a7be008_70932558',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd715b50f70bfad1fc7188ab0dc69d109908f8ed6' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/unika_templates/default/home/default.tpl',
      1 => 1711076883,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6614dc5a7be008_70932558 (Smarty_Internal_Template $_smarty_tpl) {
?><main id="main" class="page_container home_page_container">
    <?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('slider_home');?>

    <div class="main_page">
        <div class="home_search_box"></div>
        <section class="section_home section_about">
            <div class="container">
                <div class="about_max_width_box">
                    <div class="header_home_box">
                        <h2 class="title_home_box"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('AGENCE HYOUR LUXURY & CONFIDENCE LOCAL EXPERT FOR SOUTH EAST ASIA ANOI VOYAGES');?>
</h2>
                    </div>
                    <div class="content_home_box">
                        <div class="intro tinymce_Content">
                        In the boundless expanse of Asia lies a treasure trove of wonders waiting to be explored.  
    Amidst the sea of information inundating us, we often find ourselves lost in a whirlwind of options – See this, do that, don’t miss this. The abundance of choices can leave us feeling overwhelmed, with little regard for how we truly want to feel.  
    Enter us – the local experts, the offspring of Asia.  
    We are a company of passionate individuals celebrated for curating unforgettable travel adventures. With us, experience Asia authentically, guided by those who truly understand its essence. 
                        </div>
                        <div class="button_link"><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('LET’S GO. START PLANNING NOW!');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('LET’S GO. START PLANNING NOW!');?>
 <svg xmlns="http://www.w3.org/2000/svg" width="17" height="15" viewBox="0 0 17 15" fill="none">
  <path d="M15.75 7.72559L0.75 7.72559" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M9.7002 1.70124L15.7502 7.72524L9.7002 13.7502" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg></a></div>
                    </div> 
                </div>
            </div>
        </section>
        <?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('Lbox_cattourHomePage');?>

        <section class="section_home section_destination">
            <div class="container">
                <div class="header_home_box">
                    <h2 class="title_home_box"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('DESTINATIONS');?>
</h2>
                    <div class="intro_box">They are endearing, fascinating, secret, enchanting...between the 5 is your heart torn?  Follow us !</div>
                </div>
            </div>
        
        </section>
         <?php if ($_smarty_tpl->tpl_vars['listWhyHome']->value) {?>
        <section class="section_home section_why_with_us">
            <div class="container">
                <div class="header_home_box">
                    <h2 class="title_home_box mb40"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('The reasons you should book with us');?>
</h2>
                </div>
                <div class="content_home_box">
                    <div class="list_why">
                        <div class="row">
                            <?php
$__section_i_20_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listWhyHome']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_20_total = $__section_i_20_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_20_total !== 0) {
for ($__section_i_20_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_20_iteration <= $__section_i_20_total; $__section_i_20_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                            <?php $_smarty_tpl->_assignInScope('title', $_smarty_tpl->tpl_vars['clsWhy']->value->getTitle($_smarty_tpl->tpl_vars['listWhyHome']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['why_id'],$_smarty_tpl->tpl_vars['listWhyHome']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]));?>
                            <div class="col-lg-4">
                                <div class=" item_why box_col"> 
                                    <div class="icon_why">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['clsWhy']->value->getIcon($_smarty_tpl->tpl_vars['listWhyHome']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['why_id'],$_smarty_tpl->tpl_vars['listWhyHome']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" width="48" height="48" class="img100">
                                    </div>
                                    <div class="body_why">
                                        <h3 class="title"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3>
                                        <div class="intro limit_2line">
                                            <?php echo $_smarty_tpl->tpl_vars['clsWhy']->value->getIntro($_smarty_tpl->tpl_vars['listWhyHome']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['why_id'],$_smarty_tpl->tpl_vars['listWhyHome']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
}
}
?>
                        </div>
                    </div>
                </div>
                <?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('partner');?>

            </div>
        </section>
        <?php }?>
        <?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('testimonials');?>

            
        
        <section class="section_home section_trip">
            <div class="container">
                <div class="header_home_box">
                    <h2 class="title_home_box"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('EXPLORE OUR TRIPS');?>
</h2>

                </div>
            </div>
        
        </section>
        <section class="section_home section_how_it_work">
            <div class="container">
                <div class="header_home_box">
                    <h2 class="title_home_box"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('HOW IT WORKS');?>
</h2>

                </div>
            </div>
        
        </section>
        <section class="section_home section_news">
            <div class="container">
                <div class="header_home_box">
                    <h2 class="title_home_box"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('THE UPDATE NEWS');?>
</h2>

                </div>
            </div>
        </section>
        <section class="section_home section_contact">
            <div class="container">
                <div class="header_home_box">
                    <h2 class="title_home_box"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Your perfect trip begins with a conversation');?>
</h2>

                </div>
            </div>
        </section>
        <section class="section_home section_ready">
            <div class="container">
                <div class="header_home_box">
                    <h2 class="title_home_box"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('SO, READY TO START?');?>
</h2>
                    <div class="intro_box">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Arcu, bibendum purus scelerisque ipsum id. Fringilla ipsum elementum aliquam aliquam sed duis feugiat molestie nisl. Sed sit cursus vulputate dignissim.</div>
                </div>
            </div>
        
        </section>
    </div>
</main>
<?php }
}
