<?php
/* Smarty version 3.1.38, created on 2024-05-06 17:32:57
  from '/home/unikasia/domains/unikasia.com/public_html/isocms/templates/default/blocks/box_share_social.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6638b1d9705fc9_76569823',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fefa589ec171a702177440ab10eaa526d14a387c' => 
    array (
      0 => '/home/unikasia/domains/unikasia.com/public_html/isocms/templates/default/blocks/box_share_social.tpl',
      1 => 1714822352,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6638b1d9705fc9_76569823 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/unikasia/domains/unikasia.com/public_html/inc/smarty3138/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
if ($_smarty_tpl->tpl_vars['mod']->value == 'home') {?>
<meta property="og:type" content="website" />
<?php } else { ?>
<meta property="og:type" content="article" />
<?php }?>
<meta property="og:title" content="<?php echo preg_replace('!<[^>]*?>!', ' ', html_entity_decode($_smarty_tpl->tpl_vars['global_title_page']->value));?>
" />
<meta property="og:description" content="<?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['global_description_page']->value),300);?>
" />
<meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;
echo $_smarty_tpl->tpl_vars['global_image_page']->value;?>
" />
<meta property="og:url" content="<?php echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;
echo $_smarty_tpl->tpl_vars['REQUEST_URI']->value;?>
" />
<meta property="og:image:alt" content="<?php echo preg_replace('!<[^>]*?>!', ' ', html_entity_decode($_smarty_tpl->tpl_vars['global_title_page']->value));?>
" />
<meta property="og:image:type" content="image/jpeg" />
<meta property="og:image:width" content="500">
<meta property="og:image:height" content="261">
<meta data-react-helmet="true" name="twitter:card" content="summary"/>
<meta data-react-helmet="true" name="twitter:title" content="<?php echo preg_replace('!<[^>]*?>!', ' ', html_entity_decode($_smarty_tpl->tpl_vars['global_title_page']->value));?>
"/>
<meta data-react-helmet="true" name="twitter:description" content="<?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['global_description_page']->value),300);?>
"/>
<meta data-react-helmet="true" name="twitter:image:url" content="<?php echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;
echo $_smarty_tpl->tpl_vars['global_image_page']->value;?>
"/>
<meta data-react-helmet="true" name="twitter:site" content="@<?php echo $_smarty_tpl->tpl_vars['twitter_site']->value;?>
"/>
<meta data-react-helmet="true" name="twitter:creator" content="@<?php echo $_smarty_tpl->tpl_vars['twitter_site']->value;?>
"><?php }
}
