<?php
/* Smarty version 3.1.38, created on 2023-10-27 14:24:27
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/_footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_653b65ab468c53_43742034',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f707f3db7ba546d5ec7d517ea4c5ae5a6b5afeb' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/_footer.tpl',
      1 => 1698314915,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 20,
),true)) {
function content_653b65ab468c53_43742034 (Smarty_Internal_Template $_smarty_tpl) {
?></div> </div> </div> <div class="clearfix"></div> <div class="page-footer">
        Powered by ISOCMS &copy; 2006-2023 <a href="http://www.vietiso.com/">VietISO</a><br />
        Developed by VietISO Technical Team. Email: <a href="mailto:support@vietiso.com">support@vietiso.com</a>.
	</div> </div> <div id="ajax_loading"></div> <div class="ticket-now"> <div class="in-ticket-now" data-total="1"></div> </div> <div class="pop-ticket-now"> <div class="d-flex" style="align-items: center; justify-content: space-between"> <img src="https://isocms.com/admin/isocms/templates/default/skin/images/ticket/viso-logo.png" alt="" > <span class="close-pop-ticket-now"><i class="material-icons-outlined " >minimize</i></span> </div> <p class="bold font-18 mt-20">Liên hệ với đội ngũ VietISO</p> <p class="font-14 mb-5">Đội ngũ hỗ trợ VietISO luôn sẵn sàng đồng hành cùng bạn. Vui lòng liên hệ với chúng tôi khi bạn cần hỗ trợ</p> <a class="btn btn-warning color-fff w-100" href="/admin/my_ticket/" target="_blank">Gửi Ticket</a> <p class="mt-20 text-center underline"><a href="/admin/ticket/" target="_blank">Truy cập tài liệu hướng dẫn</a></p> </div> <script type="text/javascript">
	$(".toggle-row").click(function() {
		var $_this = $(this);
		if($_this.parents("tr").hasClass("open_tr")){
			$_this.closest("tr").removeClass("open_tr");
			$_this.closest("tr").find(".fa-caret").removeClass("fa-caret-up");
		}else{
			$_this.parents("tr").addClass("open_tr");
			$_this.closest("tr").find(".fa-caret").addClass("fa-caret-up");
		}
	});

</script>
<?php }
}
