<?php
/* Smarty version 3.1.38, created on 2024-04-08 13:11:54
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/tour/searchtour.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66138aaa826332_95845601',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc9abb86a1a489055c0156721e9d838ccdb17537' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/tour/searchtour.tpl',
      1 => 1698312449,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66138aaa826332_95845601 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="tourTravelonPage page_container">
<div class="container pd50_0">
	<h1 class="titlebox h3 text_normal upcase"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("tour du lịch");?>
 <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
	<div class="contentListTravel">
	   <div class="row">
		  <div class="col-lg-3">
			<div class="block991" style="display:none">
				<div class="tag-search">
					<div class="btn_open_modal btn_quick_search bg_main" data-bs-toggle="modal" data-bs-target="#filter_search" >
						<span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Filter Trip');?>
</span> <i class="fa fa-sliders" aria-hidden="true"></i>
					</div>
				</div>
			</div> 
			<div class="modal fade" id="filter_search" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="filter_left">
							<div class="modal-header">
								<button type="button" class="close" data-bs-dismiss="modal"><span aria-hidden="true">X</span><span class="sr-only"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Close');?>
</span></button> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Search');?>

							</div>
							<div class="modal-body">
								<div class="totalTour mb20">
								   <h2 class="totalTourpage bg_main h3"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Find');?>
 <?php echo $_smarty_tpl->tpl_vars['totalTour']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['totalTour']->value > 1) {
echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Tours');
} else {
echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Tour');
}?></h2>
								</div>
								<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('filter_left_trip');?>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-9">
			<div class="listTourItem">
				<div class="row">
				   <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstTourResult']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
				   <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
					  <?php $_smarty_tpl->_assignInScope('tour_id', $_smarty_tpl->tpl_vars['lstTourResult']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_id']);?>
					  <?php $_smarty_tpl->_assignInScope('oneTour', $_smarty_tpl->tpl_vars['lstTourResult']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
						<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getBlock('box_item_tour_mobile',array("tour_id"=>$_smarty_tpl->tpl_vars['tour_id']->value,"oneTour"=>$_smarty_tpl->tpl_vars['oneTour']->value));?>

				   </div>
				   <?php
}
}
?>
				</div>
			 </div>
			 <?php if ($_smarty_tpl->tpl_vars['totalPage']->value > '1') {?>
				<div class="clearfix"></div>
				<div class="pagination">
					<?php echo $_smarty_tpl->tpl_vars['page_view']->value;?>

				</div>
			<?php }?>
		  </div>
	   </div>
	</div>
</div>
</section><?php }
}
