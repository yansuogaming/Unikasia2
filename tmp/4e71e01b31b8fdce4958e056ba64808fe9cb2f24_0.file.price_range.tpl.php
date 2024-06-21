<?php
/* Smarty version 3.1.38, created on 2024-04-08 14:41:31
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/hotel/price_range.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66139fab4dac29_10865929',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e71e01b31b8fdce4958e056ba64808fe9cb2f24' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/hotel/price_range.tpl',
      1 => 1684733620,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66139fab4dac29_10865929 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="page_container page-tour_setting">
	<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('header_title_module_setting');?>

	<div class="container-fluid container-fluid-2 d-flex">
		<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('menu_hotel_setting');?>

		<div class="content_setting_box">
			<div class="page_detail-title d-flex">
				<div class="title">
					<h2><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('pricerange');?>
</h2>
				</div>
				<div class="button_right">
					<a class="btn btn-main btn-addnew btnCreatePriceRange" href="javascript:void(0);" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Add');?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('pricerange');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Add');?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('pricerange');?>
</a>
				</div>
			</div>
			<div class="fl fiterbox" style=" width:100%">
				<div class="wrap">
					<div class="filter_box">
						<form id="forums" method="post" class="filterForm" action="" onsubmit="return false">
							<div class="form-group form-keyword">
								<input class="form-control" type="text" name="keyword" value="<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('search');?>
" />
							</div>
							<div class="form-group form-button">
								<button type="submit" class="btn btn-main findPriceRange" id="findtBtn">Tìm kiếm</button>
								<input type="hidden" name="filter" value="filter" />
							</div>
						</form>	
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="hastable">
				<table class="tbl-grid table-striped" cellpadding="0" width="100%">
					<thead>
						<tr>
							<th class="gridheader hiden767" style=" width:4%"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('index');?>
</th>
							<th class="gridheader" style="text-align:left"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('title');?>
</strong></th>
							<th class="gridheader" style="text-align:right"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('minrate');?>
</strong></th>
							<th class="gridheader" style="text-align:right"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('maxrate');?>
</strong></th>
							<th class="gridheader" style="width:3%" colspan="4"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('move');?>
</strong></th>
							<th class="gridheader" style="text-align:center;"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('func');?>
</strong></th>
						</tr>
					</thead>
					<tbody id="tblHolderPriceRange">
					</tbody>
				</table>
			</div>
		</div>		
	</div>
</div>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_THEMES']->value;?>
/hotel/jquery.hotel.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
><?php }
}
