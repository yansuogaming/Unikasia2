<?php
/* Smarty version 3.1.38, created on 2024-05-06 10:29:39
  from '/home/unikasia/domains/unikasia.com/private_html/isocms/templates/default/blocks/find_trip_details.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66384ea3156c42_98793606',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50a82ce00ffe2b9b6171ecfd59c56ae1d1a03b83' => 
    array (
      0 => '/home/unikasia/domains/unikasia.com/private_html/isocms/templates/default/blocks/find_trip_details.tpl',
      1 => 1714822354,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66384ea3156c42_98793606 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
	<form class="find__trip--form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['extLang']->value;?>
/">
		<div class="input_key_word">
			<input class="form-control" name="key" value="" autocomplete="off" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Search tour');?>
....">
		</div>
		<div class="form_select form_select_destination">
			<select class="form-control slb" name="departure_point_id" id="departure_point_ID" aria-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Departure point');?>
">
				<option value="0"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Departure point');?>
</option>
				<?php
$__section_i_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstDeparturePoint']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_3_total = $__section_i_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_3_total !== 0) {
for ($__section_i_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_3_iteration <= $__section_i_3_total; $__section_i_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['lstDeparturePoint']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['city_id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['clsCity']->value->getTitle($_smarty_tpl->tpl_vars['lstDeparturePoint']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['city_id']);?>
"><?php echo $_smarty_tpl->tpl_vars['clsCity']->value->getTitle($_smarty_tpl->tpl_vars['lstDeparturePoint']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['city_id']);?>
</option>
				<?php
}
}
?>
			</select>
		</div>
		<div class="form_select form_select_duration">
			<select class="form-control" name="duration_id" id="duration_ID" aria-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Duration');?>
">
				<?php echo $_smarty_tpl->tpl_vars['DURATION_HTML']->value;?>

			</select>
		</div>
		<button type="submit" class="btn btn_find_trip btn_main" id="findtBtn"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Search');?>
</button>
		<input type="hidden" name="Hid_Search" value="Hid_Search" />
	</form>
</div>
<?php echo '<script'; ?>
>
	var cat_id= '<?php echo $_smarty_tpl->tpl_vars['cat_id']->value;?>
';
	var duration= '<?php echo $_smarty_tpl->tpl_vars['duration_1']->value;?>
';
	var mod = '<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
';
	var Loading = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Loading");?>
';
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
	$(function(){
		$('select[name=departure_point_ID]').change(function(){
			var $_this = $(this);
			var $departure_point_ID = $_this.val();
			makeSelectDestination($_this.val());
			makeSelectboxDuration($departure_point_ID,0,0,0);
		});
		$(document).on('change', 'select[name=destination_id]', function(ev){
			var $_this = $(this);
			var $destination_ID = $_this.val();
			makeSelectboxDuration(0,$destination_ID,0,0);
		});
		$(document).on('change', 'select[name=cat_ID]', function(ev){
			var $_this = $(this);
			var $departure_point_ID = $('select[name=departure_point_ID]').val();
			var $destination_ID = $('select[name=destination_ID]').val();
			var $cat_ID = $_this.val();
			makeSelectboxDuration($departure_point_ID,$destination_ID,$cat_ID,0);
		});
		if($('.findBox').length > 0){
			var _hh = $(window).height();
			var _hc = $('#sliderHomePage').outerHeight(false);
			var _hd = _hc-_hh;
			$('.findBox').css('bottom',_hd+10);
		}
	});
	function makeSelectDestination($departure_point_ID, $city_id){
		$('select[name=destination_ID]').html('<option value="">'+Loading+'...</option>');
		var $_adata = {
			'departure_point_ID' : $departure_point_ID,
			'city_id' : $city_id
		};
		$.ajax({
			type: 'POST',
			url: path_ajax_script+'/index.php?mod=ajax&act=ajLoadSelectDestination&lang='+LANG_ID,
			data :$_adata,
			dataType:'html',
			success: function(html){
				$('select[name=destination_ID]').html(html);
			}
		});
	}
	function makeSelectCategory($departure_point_ID, $city_id, $cat_id){
		$('select[name=cat_ID]').html('<option value="0">'+Loading+'...</option>');
		var $_adata = {
			'departure_point_ID': $departure_point_ID,
			'city_id': $city_id,
			'cat_id': $cat_id
		};
		$.ajax({
			type: 'POST',
			url: path_ajax_script+'/index.php?mod=ajax&act=ajLoadSelectCategory&lang='+LANG_ID,
			data :$_adata,
			dataType:'html',
			success: function(html){
				$('select[name=cat_ID]').html(html);
			}
		});
	}
	function makeSelectboxDuration($departure_point_ID,$city_ID,$cat_ID,$duration_ID){
		$('select[name=duration_id]').html('<option value="0">'+Loading+'...</option>');
		var adata = {
			'departure_point_id'    : $departure_point_ID,
			'city_id'    : $city_ID,
			'cat_id'    : $cat_ID,
			'duration_id'    : $duration_ID
		};
		$.ajax({
			type: 'POST',
			url: path_ajax_script+'/index.php?mod=ajax&act=ajLoadSelectDuration&lang='+LANG_ID,
			data :adata,
			dataType:'html',
			success: function(html){
				$('select[name=duration_id]').html(html);
			}
		});
	}
<?php echo '</script'; ?>
>
<?php }
}
