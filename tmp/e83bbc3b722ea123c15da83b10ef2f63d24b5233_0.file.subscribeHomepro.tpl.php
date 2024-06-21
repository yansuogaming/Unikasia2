<?php
/* Smarty version 3.1.38, created on 2024-05-04 19:01:32
  from '/home/unikasia/domains/unikasia.com/private_html/isocms/templates/default/blocks/subscribeHomepro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6636239ce890f5_74220279',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e83bbc3b722ea123c15da83b10ef2f63d24b5233' => 
    array (
      0 => '/home/unikasia/domains/unikasia.com/private_html/isocms/templates/default/blocks/subscribeHomepro.tpl',
      1 => 1714822356,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6636239ce890f5_74220279 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'subscription','default','default')) {?>
<section class="subscribe_Home section_box bgc-F5F5F5">
	<div class="container box_subscribe d-flex">
		<div class="box-left_subscribe">
			
			<div class="box_text_subscribe">
				<h2 class="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Sign up for notifications');?>
 & <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('offers');?>
</h2>
				<p class="text_subscribe"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Choosing to register means that you agree to our Privacy Policy');?>
.</p>
			</div>			
		</div>
		
		<div class="box-right_subscribe regiter_email">
			<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['extLang']->value;?>
" class="subscribe__form">
				<input type="text" id="email_subscribe" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Your email');?>
" class="isoTxt txt required" >
				<input type="text" id="subscribe_check" class="subscribe_check" value="">
				<input class="btn_Subscribe btn_main" id="submitSubscribeHome" type="button" name="btnSubmit" value="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Register');?>
">
				<input type="hidden" value="Sign me up" name="Submit">
			</form>
			<div id="subcribe_msg" class="subcribe_msg"></div>
		</div>
	</div>
	<?php echo '<script'; ?>
>
		var path_ajax_script = '<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
';
		var msg_email_required = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Your email should not be empty');?>
!";
		var msg_email_not_valid = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Your email is not valid');?>
!";
		var msg_success = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Sign up for email success');?>
!";
		var msg_exits = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Email address already exists');?>
!";
	<?php echo '</script'; ?>
>
	
	<?php echo '<script'; ?>
>
		$(function(){
			$("#submitSubscribeHome").click(function(){
				var $subscribe_email = $("#email_subscribe").val();
				var $subscribe_check = $("#subscribe_check").val();

				if($("#email_subscribe").val()==''){
					$('#subcribe_msg').html(msg_email_required).fadeIn().delay(3000).fadeOut();
					$("#email_subscribe").focus();
					return false;
				}
				if(checkValidEmail($subscribe_email)==false){
					$('#subcribe_msg').html(msg_email_not_valid).fadeIn().delay(3000).fadeOut();
					$("#email_subscribe").focus();
					return false;
				}

				var adata = {
					'email' : $subscribe_email,
					'subscribe_check' : $subscribe_check
				};
				$.ajax({
					type:'POST',
					url:path_ajax_script+'/index.php?mod=home&act=ajSubmitSubscribe&lang='+LANG_ID,
					data : adata,
					dataType:'html',
					success:function(html){
						if(html.indexOf("_SUCCESS") >= 0) {
							$('#subcribe_msg').html(msg_success).fadeIn().delay(3000).fadeOut();
						} else {
							$('#subcribe_msg').html(msg_exits).fadeIn().delay(3000).fadeOut();
						}
					}
				});
				return false;
			});
		});
		function checkValidEmail(e) {
			var a = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
			return a.test(e)
		}
	<?php echo '</script'; ?>
>
	
</section>
<?php }
}
}
