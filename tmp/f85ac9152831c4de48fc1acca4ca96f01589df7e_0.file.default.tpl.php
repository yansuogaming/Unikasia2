<?php
/* Smarty version 3.1.38, created on 2024-04-08 17:08:47
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/faqs/default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6613c22f3d9f03_77583207',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f85ac9152831c4de48fc1acca4ca96f01589df7e' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/faqs/default.tpl',
      1 => 1705626096,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6613c22f3d9f03_77583207 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/isocms/domains/isocms.com/public_html/inc/smarty3138/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

	<?php echo '<script'; ?>
 type="application/ld+json">
		{
		  "@context": "https://schema.org",
		  "@type": "QAPage",
		  "mainEntity": [
			  
			  <?php if ($_smarty_tpl->tpl_vars['lstFAQCat']->value && $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SiteHasCat_FAQ')) {?>
				  <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstFAQCat']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
						<?php $_smarty_tpl->_assignInScope('faqcat_id', $_smarty_tpl->tpl_vars['lstFAQCat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['faqcat_id']);?>
						<?php $_smarty_tpl->_assignInScope('lstFAQ', $_smarty_tpl->tpl_vars['clsFAQ']->value->getListFAQs($_smarty_tpl->tpl_vars['faqcat_id']->value));?>
						<?php if ($_smarty_tpl->tpl_vars['lstFAQ']->value[0]['faq_id'] != '') {?>
						<?php
$__section_k_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstFAQ']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_k_1_total = $__section_k_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_k'] = new Smarty_Variable(array());
if ($__section_k_1_total !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_k']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_k']->value['iteration'] <= $__section_k_1_total; $_smarty_tpl->tpl_vars['__smarty_section_k']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_k']->value['last'] = ($_smarty_tpl->tpl_vars['__smarty_section_k']->value['iteration'] === $__section_k_1_total);
?>
						  {
							"@type": "Question",
							"name": "<?php echo $_smarty_tpl->tpl_vars['clsFAQ']->value->getTitle($_smarty_tpl->tpl_vars['lstFAQ']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['faq_id'],$_smarty_tpl->tpl_vars['lstFAQ']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
",
							"acceptedAnswer": {
							  "@type": "Answer",
							  "text": "<?php echo smarty_modifier_replace(preg_replace('!<[^>]*?>!', ' ', preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['clsFAQ']->value->getContent($_smarty_tpl->tpl_vars['lstFAQ']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['faq_id'],$_smarty_tpl->tpl_vars['lstFAQ']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]))),'"','\'');?>
"
							}
						  }<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['last'] : null)) {?>,<?php }?>
				  <?php
}
}
}
}
}
?>
			  <?php } else { ?>
				  <?php
$__section_k_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listFAQs']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_k_2_total = $__section_k_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_k'] = new Smarty_Variable(array());
if ($__section_k_2_total !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_k']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_k']->value['iteration'] <= $__section_k_2_total; $_smarty_tpl->tpl_vars['__smarty_section_k']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_k']->value['last'] = ($_smarty_tpl->tpl_vars['__smarty_section_k']->value['iteration'] === $__section_k_2_total);
?>
					  
						{
							"@type": "Question",
							"name": "<?php echo $_smarty_tpl->tpl_vars['clsFAQ']->value->getTitle($_smarty_tpl->tpl_vars['listFAQs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['faq_id'],$_smarty_tpl->tpl_vars['listFAQs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]);?>
",
							"acceptedAnswer": {
							  "@type": "Answer",
							  "text": "<?php echo smarty_modifier_replace(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['clsFAQ']->value->getContent($_smarty_tpl->tpl_vars['listFAQs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['faq_id'],$_smarty_tpl->tpl_vars['listFAQs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)])),'"','\'');?>
"
							}
						  }<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['last'] : null)) {?>,<?php }?>
				  <?php
}
}
?>
			  <?php }?>
		  ]
		}
    <?php echo '</script'; ?>
>

<div class="page_container">
	<div id="contentPage" class="faqsPage">
		<section class="section_box section_faq_top text-center">
			<div class="container">
				<h1 class="titlePage"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('FAQs');?>
</h1>
				<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getModIntro('faqs')) {?>
				<div class="formatTextStandard size20"><h2 class="size20"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getModIntro('faqs');?>
</h2></div>
				<?php }?>
			</div>
		</section>
		<section class="section_faq_page mb60">
			<div class="container">
				<div class="col-lg-8 offset-lg-2">
					<?php if ($_smarty_tpl->tpl_vars['lstFAQCat']->value && $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SiteHasCat_FAQ')) {?>
					<div class="faqs-box-typ1 mvl terms-list" id="faq-box-cat">
						<div class="lnk-bdl">
							<ol class="term-points">
								<?php
$__section_i_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstFAQCat']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_3_total = $__section_i_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_3_total !== 0) {
for ($__section_i_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_3_iteration <= $__section_i_3_total; $__section_i_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
								<li class="col-st-6"><a class="gotoFAQ" href="javascript:void(0);" rel="<?php echo $_smarty_tpl->tpl_vars['lstFAQCat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['faqcat_id'];?>
"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)+1;?>
.&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['clsFAQCategory']->value->getTitle($_smarty_tpl->tpl_vars['lstFAQCat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['faqcat_id'],$_smarty_tpl->tpl_vars['lstFAQCat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
</a></li>
								<?php
}
}
?>
							</ol>
						</div>
					</div>
					<div class="wrap box-list-faq"> 
						<?php
$__section_i_4_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstFAQCat']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_4_total = $__section_i_4_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_4_total !== 0) {
for ($__section_i_4_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_4_iteration <= $__section_i_4_total; $__section_i_4_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
						<?php $_smarty_tpl->_assignInScope('faqcat_id', $_smarty_tpl->tpl_vars['lstFAQCat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['faqcat_id']);?>
						<?php $_smarty_tpl->_assignInScope('lstFAQ', $_smarty_tpl->tpl_vars['clsFAQ']->value->getListFAQs($_smarty_tpl->tpl_vars['faqcat_id']->value));?>
						<?php if ($_smarty_tpl->tpl_vars['lstFAQ']->value[0]['faq_id'] != '') {?>
						<div class="group mb30" id="FAQ-BOX-<?php echo $_smarty_tpl->tpl_vars['faqcat_id']->value;?>
">
							<h3 class="new-hd-typ3 mb10"><?php echo $_smarty_tpl->tpl_vars['clsFAQCategory']->value->getTitle($_smarty_tpl->tpl_vars['faqcat_id']->value,$_smarty_tpl->tpl_vars['lstFAQCat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
</h3>
							<div class="accordion" id="accordionFAQs">
								<?php
$__section_k_5_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstFAQ']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_k_5_total = $__section_k_5_loop;
$_smarty_tpl->tpl_vars['__smarty_section_k'] = new Smarty_Variable(array());
if ($__section_k_5_total !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_k']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_k']->value['iteration'] <= $__section_k_5_total; $_smarty_tpl->tpl_vars['__smarty_section_k']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_k']->value['last'] = ($_smarty_tpl->tpl_vars['__smarty_section_k']->value['iteration'] === $__section_k_5_total);
?>
								<div class="card">
									<div class="card-header" id="faqs_<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['iteration'] : null);?>
">
										<h3 class="title">
											<a class="collapsed" data-toggle="collapse" data-bs-target="#collapsefaqs_<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['iteration'] : null);?>
" aria-expanded="false" aria-controls="collapsefaqs_<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['iteration'] : null);?>
">
											<?php echo $_smarty_tpl->tpl_vars['clsFAQ']->value->getTitle($_smarty_tpl->tpl_vars['lstFAQ']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['faq_id'],$_smarty_tpl->tpl_vars['lstFAQ']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]);?>

											<i class="fa fa-angle-up pull-right"></i>
											</a>
										</h3>
									</div>
									<div id="collapsefaqs_<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['iteration'] : null);?>
" class="collapse" aria-labelledby="faqs_<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['iteration'] : null);?>
">
										<div class="card-body">
											<div class="detail tinymce_Content">
												<?php echo $_smarty_tpl->tpl_vars['clsFAQ']->value->getContent($_smarty_tpl->tpl_vars['lstFAQ']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['faq_id'],$_smarty_tpl->tpl_vars['lstFAQ']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]);?>

											</div>
										</div>
									</div>
								</div>
								<?php
}
}
?>
							</div>
						</div>
						<?php }?>
						<?php
}
}
?> 
					</div>
					<?php } else { ?>
					<div class="accordion" id="accordionFAQs">
						<?php
$__section_k_6_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listFAQs']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_k_6_total = $__section_k_6_loop;
$_smarty_tpl->tpl_vars['__smarty_section_k'] = new Smarty_Variable(array());
if ($__section_k_6_total !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_k']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_k']->value['iteration'] <= $__section_k_6_total; $_smarty_tpl->tpl_vars['__smarty_section_k']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_k']->value['last'] = ($_smarty_tpl->tpl_vars['__smarty_section_k']->value['iteration'] === $__section_k_6_total);
?>
						<div class="card">
							<div class="card-header" id="faqs_<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['iteration'] : null);?>
">
								<h3 class="title">
									<a class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapsefaqs_<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['iteration'] : null);?>
" aria-expanded="false" aria-controls="collapsefaqs_<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['iteration'] : null);?>
">
									<?php echo $_smarty_tpl->tpl_vars['clsFAQ']->value->getTitle($_smarty_tpl->tpl_vars['listFAQs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['faq_id'],$_smarty_tpl->tpl_vars['listFAQs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]);?>

									<i class="fa fa-angle-up pull-right"></i>
									</a>
								</h3>
							</div>
							<div id="collapsefaqs_<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['iteration'] : null);?>
" class="collapse" aria-labelledby="faqs_<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['iteration'] : null);?>
">
								<div class="card-body">
									<div class="detail tinymce_Content">
										<?php echo $_smarty_tpl->tpl_vars['clsFAQ']->value->getContent($_smarty_tpl->tpl_vars['listFAQs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['faq_id'],$_smarty_tpl->tpl_vars['listFAQs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]);?>

									</div>
								</div>
							</div>
						</div>
						<?php
}
}
?>
					</div>
					<?php }?>
				</div>
			</div>
		</section>
	</div>
</div><?php }
}
