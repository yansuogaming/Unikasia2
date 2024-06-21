<?php
/* Smarty version 3.1.38, created on 2024-04-08 13:09:38
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/script_application_ld_json.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66138a22cbfc62_26415677',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88f772e991f655ba9d8c857d0a0b1f1468ad5d89' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/script_application_ld_json.tpl',
      1 => 1675397772,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66138a22cbfc62_26415677 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="application/ld+json">
{
"@context": "https://schema.org",
"@type": "WebSite",
"url": "<?php echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;?>
",
"name": "<?php echo $_smarty_tpl->tpl_vars['PAGE_NAME']->value;?>
",
"alternateName": "<?php echo $_smarty_tpl->tpl_vars['PAGE_NAME']->value;?>
"
}
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="application/ld+json">
{
"@context": "https://schema.org",
"@type": "Organization",
"url": "<?php echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;?>
",
"logo": "<?php echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;
echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('HeaderLogo');?>
",
"image":"<?php echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;
echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('ImageShareSocial');?>
",
"founder":"<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('Founder');?>
",
"address":"<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('CompanyAddress_vn');?>
",
"description":"<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SiteMetaDescription');?>
",
"contactPoint": [{
"@type": "ContactPoint",
"telephone": "<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('CompanyPhone');?>
",
"email": "<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('CompanyEmail');?>
",
"contactType": "sales",
"productSupported":"Du lịch"
}],
"sameAs": [
"https://www.facebook.com/<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SiteFacebookLink');?>
",
"https://www.youtube.com/<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SiteYoutubeLink');?>
",
"https://twitter.com/<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SiteTwitterLink');?>
"
]
}
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="application/ld+json">
{
"@context": "https://schema.org",
"@type": "Place",
"geo": {
"@type": "GeoCoordinates",
"latitude": "<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('CompanyMapLa');?>
",
"longitude": "<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('CompanyMapLo');?>
"
},
"name": "<?php echo $_smarty_tpl->tpl_vars['PAGE_NAME']->value;?>
"
}
<?php echo '</script'; ?>
>
<?php }
}
