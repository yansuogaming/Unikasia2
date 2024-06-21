<?php
/* Smarty version 3.1.38, created on 2024-04-09 13:12:42
  from '/home/isocms/domains/isocms.com/private_html/isocms/unika_templates/default/blocks/box_google_analytics.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6614dc5a469cc4_20789081',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9abac9528ff96327f519752026e093c1b0f4a3d9' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/unika_templates/default/blocks/box_google_analytics.tpl',
      1 => 1710928006,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6614dc5a469cc4_20789081 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Sao chép và dán mã này làm mục đầu tiên trong <head> của mỗi trang web mà bạn muốn đo lường. -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<?php $_smarty_tpl->_assignInScope('SiteGoogleAnalyticsCode', $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SiteGoogleAnalyticsCode'));
if ($_smarty_tpl->tpl_vars['SiteGoogleAnalyticsCode']->value) {
echo '<script'; ?>
 async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $_smarty_tpl->tpl_vars['SiteGoogleAnalyticsCode']->value;?>
"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());
gtag('config', '<?php echo $_smarty_tpl->tpl_vars['SiteGoogleAnalyticsCode']->value;?>
');
<?php echo '</script'; ?>
>

<?php }?>

<?php }
}
