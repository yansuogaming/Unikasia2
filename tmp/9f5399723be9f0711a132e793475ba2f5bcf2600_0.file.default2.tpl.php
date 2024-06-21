<?php
/* Smarty version 3.1.38, created on 2024-04-08 13:09:38
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/home/default2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66138a22d4b3f7_48831002',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f5399723be9f0711a132e793475ba2f5bcf2600' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/home/default2.tpl',
      1 => 1704419124,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66138a22d4b3f7_48831002 (Smarty_Internal_Template $_smarty_tpl) {
?><main id="main" class="page_container bg_fff">
    <?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('slider_home');?>

    <?php if ($_smarty_tpl->tpl_vars['listWhyHome']->value) {?>
    <section class="section_box why <?php if ($_smarty_tpl->tpl_vars['deviceType']->value == 'phone') {?>mt50<?php }?> bg_fff">
        <div class="container">
		   <div class="owl-carousel slideWhy" id="whyWithUs">
				<?php
$__section_i_20_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listWhyHome']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_20_total = $__section_i_20_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_20_total !== 0) {
for ($__section_i_20_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_20_iteration <= $__section_i_20_total; $__section_i_20_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
				<?php $_smarty_tpl->_assignInScope('title', $_smarty_tpl->tpl_vars['clsWhy']->value->getTitle($_smarty_tpl->tpl_vars['listWhyHome']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['why_id'],$_smarty_tpl->tpl_vars['listWhyHome']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]));?>
				<div class=" item__why box_col"> 
					<div class="item__why--icon">
						<img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/pixel.png" data-src="<?php echo $_smarty_tpl->tpl_vars['clsWhy']->value->getIcon($_smarty_tpl->tpl_vars['listWhyHome']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['why_id'],$_smarty_tpl->tpl_vars['listWhyHome']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" width="80" height="80" class="owl-lazy img100">
					</div>
					<div class="item__why--artice">
						<h2 class="title size20 mb10"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h2>
						<div class="intro limit_2line">
							<?php echo $_smarty_tpl->tpl_vars['clsWhy']->value->getIntro($_smarty_tpl->tpl_vars['listWhyHome']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['why_id'],$_smarty_tpl->tpl_vars['listWhyHome']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>

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
    <?php if ($_smarty_tpl->tpl_vars['listAdsHome']->value) {?>
	<section class="qc__box home_box">
		<div class="container">
			<div class="qc__box--slider owl_carousel_1_item owl-carousel">
				<?php
$__section_i_21_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listAdsHome']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_21_total = $__section_i_21_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_21_total !== 0) {
for ($__section_i_21_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_21_iteration <= $__section_i_21_total; $__section_i_21_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                <?php $_smarty_tpl->_assignInScope('title', $_smarty_tpl->tpl_vars['clsAds']->value->getTitle($_smarty_tpl->tpl_vars['listAdsHome']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['ads_id']));?>
                <?php $_smarty_tpl->_assignInScope('link_ads', $_smarty_tpl->tpl_vars['clsAds']->value->getLink($_smarty_tpl->tpl_vars['listAdsHome']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['ads_id']));?>
                <?php if ($_smarty_tpl->tpl_vars['deviceType']->value == 'phone') {?>
                    <?php $_smarty_tpl->_assignInScope('image_ads', $_smarty_tpl->tpl_vars['clsAds']->value->getImage($_smarty_tpl->tpl_vars['listAdsHome']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['ads_id'],480,320));?>
                    <?php } else { ?>
                    <?php $_smarty_tpl->_assignInScope('image_ads', $_smarty_tpl->tpl_vars['clsAds']->value->getImage($_smarty_tpl->tpl_vars['listAdsHome']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['ads_id'],1280,292));?>
                <?php }?>
                <div class="qc__box--item">
                    <a <?php if ($_smarty_tpl->tpl_vars['link_ads']->value) {?> href="<?php echo $_smarty_tpl->tpl_vars['link_ads']->value;?>
" <?php } else { ?>role="link"<?php }?> title="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
">
						<?php if ($_smarty_tpl->tpl_vars['deviceType']->value == 'phone') {?>
							<img data-src="<?php echo $_smarty_tpl->tpl_vars['image_ads']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" width="480" height="320" class="owl-lazy img100">
						<?php } else { ?>
							<img data-src="<?php echo $_smarty_tpl->tpl_vars['image_ads']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" width="1280" height="292" class="owl-lazy img100">
						<?php }?>
                    </a>
                </div>
				<?php
}
}
?>
			</div>
		</div>
	</section>
	<?php }?>
	<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('Lbox_toptourHomePage');?>

	<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('Lbox_cattourHomePage');?>

    <?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('Lbox_countrydestination');?>

    
    <?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('testimonialsHome');?>

    <?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('Lbox_blogHomePage');?>

    <section class="section_box tour_for_ask">
        <div class="container-fuild bgc-F5F5F5">
		   <div class="container">
				<div class="row">
				<div class="col-xl-12">
					<div class="box_tour">
						<div class="box-left">
							<h3 class="title_tour_for_ask"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Self-sufficient travel');?>
, <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Book');?>
 <?php echo $_smarty_tpl->tpl_vars['PAGE_NAME']->value;?>
</h3>
							<p class="text_tour_for_ask"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Millions of people have chosen isoCMS to travel in their own way. How about you');?>
?</p>
							<a href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('tailor');?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Tailor made tour');?>
" class="link_tour_for_ask"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Tailor made tour');?>
</a>
						</div>
						<div class="box-right">
							<img width="653" height="335" src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/img_isocms/banner_tour_for_ask.png" alt="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Self-sufficient travel');?>
, <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Book');?>
 <?php echo $_smarty_tpl->tpl_vars['PAGE_NAME']->value;?>
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
