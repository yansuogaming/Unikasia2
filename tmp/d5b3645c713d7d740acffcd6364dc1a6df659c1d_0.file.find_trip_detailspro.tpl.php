<?php
/* Smarty version 3.1.38, created on 2024-05-04 19:01:32
  from '/home/unikasia/domains/unikasia.com/private_html/isocms/templates/default/blocks/find_trip_detailspro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6636239c8b7641_00528285',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5b3645c713d7d740acffcd6364dc1a6df659c1d' => 
    array (
      0 => '/home/unikasia/domains/unikasia.com/private_html/isocms/templates/default/blocks/find_trip_detailspro.tpl',
      1 => 1714822354,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6636239c8b7641_00528285 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
	<form class="find__trip--form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['extLang']->value;?>
/">
		<div class="input_key_word">
			<input class="form-control" name="key" value="" autocomplete="off" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Search by destination, tour');?>
,....">
		</div>
		<div class="form_select form_select_destination">
			<select class="form-control slb" name="departure_point_id" id="departure_point_ID">
				<option value="0"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Departure point');?>
</option>
				<?php
$__section_i_14_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstDeparturePoint']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_14_total = $__section_i_14_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_14_total !== 0) {
for ($__section_i_14_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_14_iteration <= $__section_i_14_total; $__section_i_14_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                <?php $_smarty_tpl->_assignInScope('title_departure_point', $_smarty_tpl->tpl_vars['lstDeparturePoint']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title']);?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['lstDeparturePoint']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['city_id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['title_departure_point']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['title_departure_point']->value;?>
</option>
				<?php
}
}
?>
			</select>
		</div>
		<div class="form_select form_select_duration">
			<select class="form-control" name="duration_id" id="duration_ID">
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
