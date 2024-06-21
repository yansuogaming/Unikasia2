<?php
/* Smarty version 3.1.38, created on 2024-04-08 15:16:22
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/cruise/cat.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6613a7d61f4bd2_27061748',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b647e417637d89f594fe09489e0d66cb34c5da1' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/cruise/cat.tpl',
      1 => 1706839160,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6613a7d61f4bd2_27061748 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/isocms/domains/isocms.com/public_html/inc/smarty3138/plugins/function.math.php','function'=>'smarty_function_math',),));
?>
<div class="page_container wapper_content page_cruise_cat">
	<div class="cruise-banner"> 
		<?php if ($_smarty_tpl->tpl_vars['deviceType']->value == 'computer') {?>
			<img class="img100" src="<?php echo $_smarty_tpl->tpl_vars['clsCruiseCat']->value->getImageBanner($_smarty_tpl->tpl_vars['cat_id']->value,1920,400,$_smarty_tpl->tpl_vars['oneCat']->value);?>
" width="1920" height="400" alt="<?php echo $_smarty_tpl->tpl_vars['title_cat']->value;?>
" />
		<?php } else { ?>
			<img class="img100" src="<?php echo $_smarty_tpl->tpl_vars['clsCruiseCat']->value->getImageBanner($_smarty_tpl->tpl_vars['cat_id']->value,480,320,$_smarty_tpl->tpl_vars['oneCat']->value);?>
" width="480" height="320" alt="<?php echo $_smarty_tpl->tpl_vars['title_cat']->value;?>
" />
		<?php }?>
	</div>
	<nav class="breadcrumb-main cruise hidden-xs">
        <div class="container">
            <ol class="breadcrumb mt0" itemscope itemtype="https://schema.org/BreadcrumbList">
                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
					<a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;
echo $_smarty_tpl->tpl_vars['extLang']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Home');?>
">
						<span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Home');?>
</span></a>
					<meta itemprop="position" content="1" />
				</li>
               	<?php $_smarty_tpl->_assignInScope('position', 2);?>
				<?php $_smarty_tpl->_assignInScope('arr_parent', $_smarty_tpl->tpl_vars['clsCruiseCat']->value->getListParentLevel($_smarty_tpl->tpl_vars['cat_id']->value));?>
				<?php if ($_smarty_tpl->tpl_vars['arr_parent']->value) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr_parent']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                    <?php $_smarty_tpl->_assignInScope('oneCatParent', $_smarty_tpl->tpl_vars['clsCruiseCat']->value->getOne($_smarty_tpl->tpl_vars['item']->value,'title,slug'));?>
                    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['clsCruiseCat']->value->getLink($_smarty_tpl->tpl_vars['item']->value,$_smarty_tpl->tpl_vars['oneCatParent']->value);?>
" title="<?php echo $_smarty_tpl->tpl_vars['oneCatParent']->value['title'];?>
">
                            <span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['oneCatParent']->value['title'];?>
</span></a>
                        <meta itemprop="position" content="<?php echo $_smarty_tpl->tpl_vars['position']->value;?>
" />
                    </li>
                    <?php echo smarty_function_math(array('equation'=>"x+1",'x'=>$_smarty_tpl->tpl_vars['position']->value,'assign'=>"position"),$_smarty_tpl);?>

                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php }?>
				<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="active">
					<a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['link_cat']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['title_cat']->value;?>
">
						<span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['title_cat']->value;?>
</span>  
					</a>
					<meta itemprop="position" content="<?php echo $_smarty_tpl->tpl_vars['position']->value;?>
"/>
				</li>
            </ol> 
        </div>
    </nav><!--end breadcrumb-main --> 
	<div class="box_cruise_header_page">
		<div class="container">
			<div class="box_top_cruise_cat text-center">
				<h1 class="title_page_cruise"><?php echo $_smarty_tpl->tpl_vars['title_cat']->value;?>
</h1>
				<?php if ($_smarty_tpl->tpl_vars['intro_More']->value) {?>
				<div class="intro_cruise_short">
					<?php echo $_smarty_tpl->tpl_vars['intro_More']->value;?>

				</div>          
				<?php }?>
			</div>			
			<?php if ($_smarty_tpl->tpl_vars['checkFilter']->value) {?>
			<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('box_find_cruise');?>

			<?php }?>
		</div>
	</div><!--end box_cruise_header_page-->
	<section class="section_list_cruise">
		<div class="container">
			<div class="list_cruise">
				
			</div>
		</div>
	</section>
	<?php if ($_smarty_tpl->tpl_vars['listCruise']->value) {?>
	<section class="box_recommend_cruises">
		<div class="container">
			<div class="entry_cruise_recomend">
				<div class="row">
					<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listCruise']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
					<?php $_smarty_tpl->_assignInScope('cruise_item_id', $_smarty_tpl->tpl_vars['listCruise']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_id']);?>
					<?php $_smarty_tpl->_assignInScope('arrCruise', $_smarty_tpl->tpl_vars['listCruise']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
					<div class="col-lg-4 col-md-6 col-sm-6 mt30">
						<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getBlock('box_item_cruise',array("cruise_item_id"=>$_smarty_tpl->tpl_vars['cruise_item_id']->value,"arrCruise"=>$_smarty_tpl->tpl_vars['arrCruise']->value));?>

					</div>	
					<?php
}
}
?>
				</div>
			</div>
			<div class="clearfix"></div>
			<?php if ($_smarty_tpl->tpl_vars['TotalPageCruisePromotion']->value > $_smarty_tpl->tpl_vars['currentPagePromo']->value) {?>
			<div class="text-center box_btn_click_more mt30">
				<a href="javascript:void(0);" data-page="<?php echo $_smarty_tpl->tpl_vars['currentPagePromo']->value+1;?>
" data-cruise_store="RECOMMED" data-cruise_cat_id="<?php echo $_smarty_tpl->tpl_vars['cat_id']->value;?>
" data-totalpage="<?php echo $_smarty_tpl->tpl_vars['TotalPageCruisePromotion']->value;?>
" class="load_more_cruise_promo">	
					<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Load More');?>
 
				</a>
			</div>
			<div class="text-center pre_loader">
				<div class="preloader-item">
					<div class="preloader">
						<div class="preloader__line_5"></div>
					</div>
				</div> 
			</div>
			<?php }?>
		</div>
	</section><!--end box_recommend_cruises-->
	<?php }?>
	<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('testimonialsNew');?>

</div>

<?php echo '<script'; ?>
 type="application/ld+json">
{
  "@context": "http://schema.org/",
  "@type": "Product",
  "name": "<?php echo $_smarty_tpl->tpl_vars['title_cat']->value;?>
",
  "url": "<?php echo $_smarty_tpl->tpl_vars['link_cat']->value;?>
",
  "description": "<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['global_description_page']->value);?>
",
 "image": "<?php echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;
echo $_smarty_tpl->tpl_vars['clsCruiseCat']->value->getImage($_smarty_tpl->tpl_vars['cat_id']->value,225,150,$_smarty_tpl->tpl_vars['oneCat']->value);?>
",
  "aggregateRating": {
    "@type": "AggregateRating",
	"ratingValue": "<?php if ($_smarty_tpl->tpl_vars['clsReviews']->value->getRateAvg($_smarty_tpl->tpl_vars['cat_id']->value,$_smarty_tpl->tpl_vars['mod']->value) > 0) {
echo $_smarty_tpl->tpl_vars['clsReviews']->value->getRateAvg($_smarty_tpl->tpl_vars['cat_id']->value,$_smarty_tpl->tpl_vars['mod']->value);
} else { ?>5<?php }?>",
    "bestRating": "<?php if ($_smarty_tpl->tpl_vars['clsReviews']->value->getBestRate($_smarty_tpl->tpl_vars['cat_id']->value,$_smarty_tpl->tpl_vars['mod']->value) > 0) {
echo $_smarty_tpl->tpl_vars['clsReviews']->value->getBestRate($_smarty_tpl->tpl_vars['cat_id']->value,$_smarty_tpl->tpl_vars['mod']->value);
} else { ?>5<?php }?>",
    "ratingCount": "<?php if ($_smarty_tpl->tpl_vars['clsReviews']->value->getToTalReview($_smarty_tpl->tpl_vars['cat_id']->value,$_smarty_tpl->tpl_vars['mod']->value) > 0) {
echo $_smarty_tpl->tpl_vars['clsReviews']->value->getToTalReview($_smarty_tpl->tpl_vars['cat_id']->value,$_smarty_tpl->tpl_vars['mod']->value);
} else { ?>1<?php }?>"
  }
}
<?php echo '</script'; ?>
>

 
<?php echo '<script'; ?>
>
$(document).on('click', '.more_intro_c,.less_intro_c',function(ev){
	$_this = $(this);
	$_parent = $_this.closest('.home_header');
	$_type = 'more';
	if($_this.hasClass('less_intro_c')){
		$_type = 'less';
	}
	if($_type == 'more'){
		$_parent.find('.intro_cruise_short').hide();
		$_parent.find('.intro_cruise_full').show();
	}else{
		$_parent.find('.intro_cruise_full').hide();  
		$_parent.find('.intro_cruise_short').show();
	}
	ev.stopImmediatePropagation();
	return false;
});
<?php echo '</script'; ?>
> 
 
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/jquerycruise.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
><?php }
}
