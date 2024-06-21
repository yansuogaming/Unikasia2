<?php
/* Smarty version 3.1.38, created on 2024-04-08 14:42:42
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/blocks/box_detail_hotel_room.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66139ff2785236_91943101',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9833cc8f46a51a783b74b5633f2dd051c940dba' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/blocks/box_detail_hotel_room.tpl',
      1 => 1642157138,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66139ff2785236_91943101 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="clearfix mt20"></div>
<table class="tbl-grid table_data" cellpadding="0" width="100%">
	<thead>
		<tr>
			<th class="gridheader text_left" style="width: 120px;"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('RoomType');?>
</strong></th>
			<th class="gridheader text_left"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('RoomName');?>
</strong></th>
			<th class="gridheader text_center" style="width: 90px"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Numberroom');?>
</strong></th>
			<th class="gridheader text_center" style="width:100px"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Max');?>
</strong></th>
			<th class="gridheader text_right" style="width:100px"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Price');?>
</strong></th>
			<th class="gridheader text_center" style="width: 10px;"></th>
			<th class="gridheader text_center"></th>
		</tr>
	</thead>
	<tbody id="hotelRoomTable"></tbody>
</table>
<div class="pagination_box"></div>
<a class="btn_addroom" id="clickToAddHotelRoom" href="javascript:void(0);">+ <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('AddRoom');?>
</a>
<?php }
}
