<?php
/* Smarty version 3.1.38, created on 2024-04-08 18:27:11
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/hotel/place.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6613d48f1a0ac8_97170141',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb7d077f3d11e72749f2c8d0cc8f725fd1f12f4c' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/hotel/place.tpl',
      1 => 1710728505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6613d48f1a0ac8_97170141 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="page_container">
    <div class="banner">
    	<?php if ($_smarty_tpl->tpl_vars['show']->value == 'City') {?>
			<img src="<?php echo $_smarty_tpl->tpl_vars['clsCity']->value->getImageBannerHotel($_smarty_tpl->tpl_vars['city_id']->value,1600,500,$_smarty_tpl->tpl_vars['oneItem']->value);?>
" class="img100" alt="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Hotels in');?>
 <?php echo $_smarty_tpl->tpl_vars['TD']->value;?>
" />
		<?php } else { ?>
			<img src="<?php echo $_smarty_tpl->tpl_vars['clsCountryEx']->value->getImageBannerHotel($_smarty_tpl->tpl_vars['country_id']->value,1600,500,$_smarty_tpl->tpl_vars['oneItem']->value);?>
" class="img100" alt="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Hotels in');?>
 <?php echo $_smarty_tpl->tpl_vars['TD']->value;?>
" />
		<?php }?>
		<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('box_form_search_hotel');?>

    </div>
    <nav class="breadcrumb-main breadcrumb-cruise bg-default breadcrumb-more bg_fff">
        <div class="container">
            <ol class="breadcrumb hidden-xs mt0 bg_fff" itemscope itemtype="https://schema.org/BreadcrumbList">
               <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
				   <a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Home');?>
">
					   <span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Home');?>
</span></a>
					<meta itemprop="position" content="1" />
				</li>
               <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
				   <a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('hotel');?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Hotels');?>
">
					   <span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Hotels');?>
</span></a>
					<meta itemprop="position" content="2" />
				</li>
                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="active">
					<a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['curl']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['TD']->value;?>
">
						<span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['TD']->value;?>
</span></a>
					<meta itemprop="position" content="3" />
				</li>
            </ol>
        </div>
    </nav>
    <div id="contentPage" class="hotelPlacePage pdt40">
        <div class="container">
			<h1><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Hotels in');?>
 <?php echo $_smarty_tpl->tpl_vars['TD']->value;?>
</h1>
			<div class="intro_top short_content" data-height="150">
				<?php echo $_smarty_tpl->tpl_vars['HOTEL_INTRO']->value;?>

			</div>
        	<div class="row">
				<h2 class="result_search"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Find');?>
 <?php echo $_smarty_tpl->tpl_vars['totalRecord']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('accommodations');?>
</h2>
				<div class="col-lg-3">
                    <div class="block991" style="display:none">
                        <div class="tag-search">
                            <div class="btn_open_modal btn_quick_search bg_main" data-bs-toggle="modal"
                                 data-bs-target="#filter_search">
                                <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Filter Trip');?>
</span> <i class="fa fa-sliders" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="filter_search" tabindex="-1" role="dialog"
                         aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="filter_left">
                                    <div class="modal-header">
                                        <h2>
                                            <button type="button" class="close" data-bs-dismiss="modal">
                                                <span aria-hidden="true">X</span>
                                                <span class="sr-only"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Close');?>
</span>
                                            </button> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Search');?>

                                        </h2>
                                    </div>
                                    <div class="modal-body">
                                        <?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('filter_left_search_hotel');?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

				</div>
				<div class="col-lg-9">
					<?php $_smarty_tpl->_assignInScope('totalHotel', count($_smarty_tpl->tpl_vars['listHotelPlace']->value));?>
					<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listHotelPlace']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
					<?php $_smarty_tpl->_assignInScope('hotel_id', $_smarty_tpl->tpl_vars['listHotelPlace']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['hotel_id']);?>
					<?php $_smarty_tpl->_assignInScope('arrHotel', $_smarty_tpl->tpl_vars['listHotelPlace']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
						<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getBlock('box_hotel_item',array("hotel_id"=>$_smarty_tpl->tpl_vars['hotel_id']->value,"arrHotel"=>$_smarty_tpl->tpl_vars['arrHotel']->value));?>

					<?php
}
}
?>
					<?php if ($_smarty_tpl->tpl_vars['totalPage']->value > '1') {?>
						<div class="pagination pager">
							<?php echo $_smarty_tpl->tpl_vars['page_view']->value;?>

						</div>
					<?php }?>
				</div>
            </div>
        </div>
    </div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
	var $_View_more = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("View more");?>
';
	var $_Less_more = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Less more");?>
';
	var $Loading = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Loading");?>
';
	var selectmonth='<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("select month");?>
';
	var $_Expand_all = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Expand all");?>
';
	var $_Collapse_all = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Collapse all");?>
';
	var $_LANG_ID = '<?php echo $_smarty_tpl->tpl_vars['_LANG_ID']->value;?>
';
<?php echo '</script'; ?>
>


	<?php echo '<script'; ?>
>
		function toggleShorted(_this, e){
			e.preventDefault();
			if(!$(_this).hasClass('clicked')){
				$(_this).parent('.short_content')
						.css('height','auto')
						.removeClass('shorted')
						.addClass('lessmore');
				$(_this).addClass('clicked').text($_Less_more);
			} else {
				var max_height = $(_this).attr('max_height');
				$(_this).parent('.short_content')
						.css('height',max_height)
						.addClass('shorted')
						.removeClass('lessmore');
				$(_this).removeClass('clicked').text($_View_more);
			}
			return false;
		}
		$(function(){
			if($('.short_content').length){
				$('.short_content').each((_i, _elem) => {
					var _max_height = $(_elem).data('height'),
							_origin_height = $(_elem).outerHeight(false);
					if(parseInt(_max_height) < _origin_height){
						$(_elem)
								.height(_max_height)
								.addClass('shorted')
								.append('<a class="more" max_height="'+_max_height+'" onClick="toggleShorted(this,event)">'+$_View_more+'</a>');
					}
				});
			}
		});
	<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/jquery.countdown.min.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/jquery-confirm.min.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
<?php }
}
