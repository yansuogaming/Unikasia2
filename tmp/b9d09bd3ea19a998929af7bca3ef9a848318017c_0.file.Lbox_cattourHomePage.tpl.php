<?php
/* Smarty version 3.1.38, created on 2024-04-08 13:09:39
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/Lbox_cattourHomePage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66138a2318ee92_57722453',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9d09bd3ea19a998929af7bca3ef9a848318017c' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/Lbox_cattourHomePage.tpl',
      1 => 1701921364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66138a2318ee92_57722453 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['lstCatTour']->value) {?>
<section class="home_box box_travel_style">
	<?php $_smarty_tpl->_assignInScope('TitleCatTour', ('TitleCatTour_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
	<?php $_smarty_tpl->_assignInScope('IntroCatTour', ('IntroCatTour_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
	<div class="container">
		<div class="title text_center mb30">
			<h2 class="section_box-title"><?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['TitleCatTour']->value);?>
</h2>
			<div class="intro_box"><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['IntroCatTour']->value));?>
</div>
		</div>
	</div>
	<div class="transitions-enabled" id="listTravelStyle" style="position: relative">
		<div class="row">
			<?php
$__section_i_25_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstCatTour']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_25_total = min(($__section_i_25_loop - 0), 3);
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_25_total !== 0) {
for ($__section_i_25_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_25_iteration <= $__section_i_25_total; $__section_i_25_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
			<?php $_smarty_tpl->_assignInScope('getTitle', $_smarty_tpl->tpl_vars['lstCatTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title']);?>
			<?php $_smarty_tpl->_assignInScope('getLink', $_smarty_tpl->tpl_vars['clsTourCategory']->value->getLink($_smarty_tpl->tpl_vars['lstCatTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tourcat_id'],$_smarty_tpl->tpl_vars['lstCatTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]));?>
			<div class="col-md-4 col-sm-4 box">
				<div class="catItem">
					<a href="<?php echo $_smarty_tpl->tpl_vars['getLink']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['getTitle']->value;?>
"><img alt="<?php echo $_smarty_tpl->tpl_vars['getTitle']->value;?>
" class="lazy img100" src="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getImage('default_image_pixel',501,277);?>
" data-src="<?php echo $_smarty_tpl->tpl_vars['clsTourCategory']->value->getImage($_smarty_tpl->tpl_vars['lstCatTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tourcat_id'],501,277,$_smarty_tpl->tpl_vars['lstCatTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
"/></a>
					<div class="spotlight">
					<h3><a href="<?php echo $_smarty_tpl->tpl_vars['getLink']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['getTitle']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['getTitle']->value;?>
</a></h3>
					<?php $_smarty_tpl->_assignInScope('number_tour_by_cat', $_smarty_tpl->tpl_vars['clsTourCategory']->value->countItemInCat($_smarty_tpl->tpl_vars['lstCatTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tourcat_id']));?>
					<?php if ($_smarty_tpl->tpl_vars['number_tour_by_cat']->value) {?>
					<p class="mb0"><?php echo $_smarty_tpl->tpl_vars['number_tour_by_cat']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('tours found');?>
</p>
					<?php }?>
					</div>
				</div>
			</div>
			<?php
}
}
?>
		</div>
		<div class="row">
			<?php
$__section_i_26_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstCatTour']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_26_start = min(3, $__section_i_26_loop);
$__section_i_26_total = min(($__section_i_26_loop - $__section_i_26_start), 2);
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_26_total !== 0) {
for ($__section_i_26_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = $__section_i_26_start; $__section_i_26_iteration <= $__section_i_26_total; $__section_i_26_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
			<?php $_smarty_tpl->_assignInScope('getTitle', $_smarty_tpl->tpl_vars['lstCatTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title']);?>
			<?php $_smarty_tpl->_assignInScope('getLink', $_smarty_tpl->tpl_vars['clsTourCategory']->value->getLink($_smarty_tpl->tpl_vars['lstCatTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tourcat_id'],$_smarty_tpl->tpl_vars['lstCatTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]));?>
			<div class="col-md-6 col-sm-6 box">
				<div class="catItem">
					<a href="<?php echo $_smarty_tpl->tpl_vars['getLink']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['getTitle']->value;?>
"><img alt="<?php echo $_smarty_tpl->tpl_vars['getTitle']->value;?>
" class="lazy img100" src="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getImage('default_image_pixel',767,425);?>
" data-src="<?php echo $_smarty_tpl->tpl_vars['clsTourCategory']->value->getImage($_smarty_tpl->tpl_vars['lstCatTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tourcat_id'],767,425,$_smarty_tpl->tpl_vars['lstCatTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
"/></a>
					<div class="spotlight">
					<h3 class=" mb10"><a href="<?php echo $_smarty_tpl->tpl_vars['getLink']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['getTitle']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['getTitle']->value;?>
</a></h3>
					<?php $_smarty_tpl->_assignInScope('number_tour_by_cat', $_smarty_tpl->tpl_vars['clsTourCategory']->value->countItemInCat($_smarty_tpl->tpl_vars['lstCatTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tourcat_id']));?>
					<?php if ($_smarty_tpl->tpl_vars['number_tour_by_cat']->value) {?>
					<p class="mb05"><?php echo $_smarty_tpl->tpl_vars['number_tour_by_cat']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('tours found');?>
</p>
					<?php }?>
					</div>
				</div>
			</div>
			<?php
}
}
?>
		</div>
	</div>
	<?php if (count($_smarty_tpl->tpl_vars['lstCatTour']->value) > 5) {?>
	<div class="view_more">
		<a href="javascript:void(0);" page="1" rel="nofollow" role="link" class="show-loader btn_view_more btn_main" id="show-more-cat" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('View more');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('View more');?>
</a>
	</div>
	<?php echo '<script'; ?>
>
	var totalCatTour='<?php echo count($_smarty_tpl->tpl_vars['lstCatTour']->value);?>
';
	var $pageLastestcat =1;
	<?php echo '</script'; ?>
>
	
	<?php echo '<script'; ?>
>
	
	$(document).on('click', ".box_travel_style #show-more-cat", function(ev) {
		var $_this = $(this);
		_Action = 'ajLoadMoreTourCategory';
		$_this.find('.ajax-loader').show();
		$pageLastestcat++;
		$.ajax({
			type:'POST',
			url:path_ajax_script+'/index.php?mod=home&act='+_Action+'&lang='+LANG_ID,
			data:{
				"page":$pageLastestcat,
			},
			dataType:'html',
			success:function(html){
				$_this.find('.ajax-loader').hide();
				$('#listTravelStyle').append( html );
				$('.lazy').lazy({
					effect: "fadeIn",
					effectTime: 20,
					threshold: 0
				});
			}
		});
		setInterval(function(){
			loadPageShowMoreCat();
		},100);
	});
	function loadPageShowMoreCat(){
		var $number_show_cat = $('#listTravelStyle .box:visible').size();
		if($number_show_cat >= totalCatTour){
			$('.box_travel_style .view_more').remove();
		}
	}
	<?php echo '</script'; ?>
>
	
	<?php }?>
</section>

<?php }
}
}
