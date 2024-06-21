<?php
/* Smarty version 3.1.38, created on 2024-04-08 15:03:04
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/guide/detail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6613a4b80b6aa1_22686134',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c97f0416c318b2204049a4ecd8e4fa423baddfd3' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/guide/detail.tpl',
      1 => 1701663673,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6613a4b80b6aa1_22686134 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('title_guide', $_smarty_tpl->tpl_vars['clsGuideCat']->value->getTitle($_smarty_tpl->tpl_vars['guidecat_id']->value));?>
<div class="page_container">
    <nav class="breadcrumb-main  breadcrumb-cruise bg-default breadcrumb-more bg_fff">
        <div class="container">
            <ol class="breadcrumb hidden-xs mt0 bg_fff" itemscope itemtype="https://schema.org/BreadcrumbList">
               <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
				   <a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
">
					   <span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Home');?>
</span></a>
					<meta itemprop="position" content="1" />
				</li>
               <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
				   <a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['curl']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Destinations');?>
">
					   <span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Destinations');?>
</span></a>
					<meta itemprop="position" content="2" />
				</li>
               <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
				   <a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['clsGuideCat']->value->getLink($_smarty_tpl->tpl_vars['country_id']->value,$_smarty_tpl->tpl_vars['city_id']->value,$_smarty_tpl->tpl_vars['guidecat_id']->value);?>
" title="<?php echo $_smarty_tpl->tpl_vars['title_guide']->value;?>
">
					   <span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['title_guide']->value;?>
</span></a>
					<meta itemprop="position" content="3" />
				</li>
               <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="active">
                  <a itemprop="item" title="<?php echo $_smarty_tpl->tpl_vars['title_guide']->value;?>
">
                    <span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['clsGuide']->value->getTitle($_smarty_tpl->tpl_vars['guide_id']->value);?>
</span>
                  </a>
				   <meta itemprop="position" content="4" />
               </li>
            </ol>
        </div>
    </nav>
    <div class="container pdt40">
        <div class="row">
            <div class="col-lg-9 mb991_30">
                <article class="guideDetail bg_fff">
					<h1 class="pane-title text-left mb10"><?php echo $_smarty_tpl->tpl_vars['clsGuide']->value->getTitle($_smarty_tpl->tpl_vars['guide_id']->value);?>
</h1>
					<div class="post_meta mb10">
							<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Post on');?>
 : <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->converTimeToText($_smarty_tpl->tpl_vars['clsGuide']->value->getOneField('publish_date',$_smarty_tpl->tpl_vars['guide_id']->value));?>

							<div class="sharethis-buttons mt0">
						<div class="sharethis-wrapper">
							<div class="addthis_toolbox addthis_default_style" addthis:media="<?php echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;
echo $_smarty_tpl->tpl_vars['clsGuide']->value->getImage($_smarty_tpl->tpl_vars['guide_id']->value,400,300);?>
" addthis:url="<?php echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;
echo $_smarty_tpl->tpl_vars['clsGuide']->value->getLink($_smarty_tpl->tpl_vars['guide_id']->value);?>
" addthis:title="<?php echo $_smarty_tpl->tpl_vars['clsGuide']->value->getTitle($_smarty_tpl->tpl_vars['guide_id']->value);?>
">
								<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
								<a class="addthis_button_tweet"></a>
								<a class="addthis_button_pinterest_pinit"></a>
								<a class="addthis_counter addthis_pill_style"></a>
							</div>
							<?php echo '<script'; ?>
  src="//s7.addthis.com/js/300/addthis_widget.js#pubid=thiembv"><?php echo '</script'; ?>
>
						</div>
					</div>
					</div>
					<div class="intro14_2 mb50">
							<div class="intro15_2 mb10"><?php echo $_smarty_tpl->tpl_vars['clsGuide']->value->getIntro($_smarty_tpl->tpl_vars['guide_id']->value);?>
</div>
							<?php echo $_smarty_tpl->tpl_vars['clsGuide']->value->getContent($_smarty_tpl->tpl_vars['guide_id']->value);?>

					</div>
					<div class="comment_box mtm">
							<div class="fb-comments" data-href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;
echo $_smarty_tpl->tpl_vars['clsGuide']->value->getLink($_smarty_tpl->tpl_vars['guide_id']->value);?>
" data-width="100%" data-numposts="5" data-colorscheme="light"></div>
					</div>
                </article>			
            </div>
            <aside class="col-lg-3">
                <?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('right_guide');?>

            </aside>
        </div>
        <section class="Relateds-guide mt30 mb30">
            <?php if ($_smarty_tpl->tpl_vars['lstRelated']->value[0]['guide_id']) {?>
            <h2 class="pane-title text-left mb10"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('See more');?>
</h2>                 
            <div class="jcarousel-box owl-carousel" id="jcarousel-guide-Relateds"> 
                    <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstRelated']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                    <?php $_smarty_tpl->_assignInScope('link', $_smarty_tpl->tpl_vars['clsGuide']->value->getLink($_smarty_tpl->tpl_vars['lstRelated']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['guide_id']));?> 
                    <?php $_smarty_tpl->_assignInScope('title', $_smarty_tpl->tpl_vars['clsGuide']->value->getTitle($_smarty_tpl->tpl_vars['lstRelated']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['guide_id']));?>
                    <div class="h_traveltip_item_fisrt">
                        <a class="h_image" href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
">
                            <img class="full-width height-auto" src="<?php echo $_smarty_tpl->tpl_vars['clsGuide']->value->getImage($_smarty_tpl->tpl_vars['lstRelated']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['guide_id'],462,308);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" />
                        </a>
                        <div class="desc pd10">
                          <div class="name"><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a></div>
                        </div>
                    </div>
                 <?php
}
}
?>   
            </div>                
            <?php }?>
		</section>
    </div>
</div>

<?php echo '<script'; ?>
 >
$(function(){
    if($('#jcarousel-guide-Relateds').length > 0){
        var $owl = $('#jcarousel-guide-Relateds');
        $owl.owlCarousel({
            loop:true,
            margin:25,
            responsiveClass:true,
            autoplay:true,
            responsive:{
                0:{
                items:1,
                nav:false
                },
                500:{
                items:2,
                nav:false
                },
                900:{
                items:3,
                nav:false
                },
                1200:{
                items:4,
                nav:false
                }
            }
            });
            $('#next_1').click(function(){
            $('#jcarousel-tours-slides .owl-next').trigger('click');
            });
            $('#prev_1').click(function(){
            $('#jcarousel-tours-slides .owl-prev').trigger('click');
        });
    }
});
<?php echo '</script'; ?>
>



<?php }
}
