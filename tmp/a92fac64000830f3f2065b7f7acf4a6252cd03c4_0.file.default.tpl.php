<?php
/* Smarty version 3.1.38, created on 2024-04-11 10:47:44
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/homepackage/default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66175d605d9eb0_59972756',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a92fac64000830f3f2065b7f7acf4a6252cd03c4' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/homepackage/default.tpl',
      1 => 1712807196,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66175d605d9eb0_59972756 (Smarty_Internal_Template $_smarty_tpl) {
?><main id="main" class="page_container">
    <?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('slider_homepro');?>

    <?php if ($_smarty_tpl->tpl_vars['listWhyHome']->value) {?>
    <section class="section_box why">
        <div class="container">
           <div class="owl-carousel slideWhy" id="whyWithUs">
                <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listWhyHome']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                <?php $_smarty_tpl->_assignInScope('title', $_smarty_tpl->tpl_vars['listWhyHome']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title']);?>
                <div class=" item__why box_col"> 
                    <div class="item__why--icon">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/pixel.png" data-src="<?php echo $_smarty_tpl->tpl_vars['clsWhy']->value->getIcon($_smarty_tpl->tpl_vars['listWhyHome']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['why_id'],$_smarty_tpl->tpl_vars['listWhyHome']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
" width="55" height="55" alt="<?php echo $_smarty_tpl->tpl_vars['listWhyHome']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title'];?>
" class="owl-lazy img100">
                    </div>
                    <div class="item__why--artice">
                        <p class="title size20 mb10"><?php echo $_smarty_tpl->tpl_vars['listWhyHome']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title'];?>
</p>
                        <div class="intro limit_2line">
                            <?php echo preg_replace('!<[^>]*?>!', ' ', html_entity_decode($_smarty_tpl->tpl_vars['listWhyHome']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['intro']));?>

                        </div>
                    </div>
                </div>
                <?php
}
}
?>
            </div>
        </div>
    </section>
    <?php }?>
	<?php if ($_smarty_tpl->tpl_vars['package_id']->value == 1) {?>
	<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('Lbox_topTourpro');?>

	<?php } else { ?>
 	<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('Lbox_topTourprofessional');?>

    <?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('Lbox_TopDestination');?>

    <?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('Lbox_Tour_Inbound');?>

    <?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('Lbox_Tour_Outbound');?>

    <?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('box_services_other');?>

	<?php }?>
    <?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('testimonialsHomepro');?>

    <?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('Lbox_blogHomePagepro');?>

    <section class="section_box tour_for_ask">
        <?php $_smarty_tpl->_assignInScope('TitleSufficient', ('TitleSufficient_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
		<?php $_smarty_tpl->_assignInScope('IntroSufficient', ('IntroSufficient_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
        
        <div class="container-fuild bgc-F5F5F5">
		   <div class="container">
				<div class="row">
				<div class="col-xl-12">
					<div class="box_tour">
						<div class="box-left">
							<h3 class="title_tour_for_ask"><?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['TitleSufficient']->value);?>
</h3>
							<p class="text_tour_for_ask"><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['IntroSufficient']->value));?>
</p>
							<a href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('tailor');?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Tailor made tour');?>
" class="link_tour_for_ask"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Tailor made tour');?>
</a>
						</div>
						<div class="box-right">
							<img width="653" height="335" src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/img_isocms/banner_tour_for_ask.png" alt="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['TitleSufficient']->value);?>
" class="img_banner_tour img100">
						</div>
					</div>
				</div>
			   </div>
		   </div>
        </div>
    </section>
    

    <?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('partnerpro');?>

    <?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('Press_news');?>

     <?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('subscribeHomepro');?>

   </main>
<?php }
}
