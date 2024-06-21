<?php
/* Smarty version 3.1.38, created on 2024-04-08 15:43:17
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/voucher/default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6613ae2562d9f0_60600355',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd46067f989742c9706580ead9bdd13e256a25a69' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/voucher/default.tpl',
      1 => 1710725369,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6613ae2562d9f0_60600355 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="page_container page_voucher">
   <nav class="breadcrumb-main breadcrumb-<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
 bg_fff">
      <div class="container">
         <ol class="breadcrumb hidden-xs mt0 bg_fff" itemscope itemtype="https://schema.org/BreadcrumbList">
            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
               <a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
">
               <span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Trang chủ');?>
</span></a>
               <meta itemprop="position" content="1" />
            </li>
             <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
               <a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['curl']->value;?>
">
               <span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Voucher');?>
</span></a>
               <meta itemprop="position" content="2" />
            </li>
         </ol>
      </div>
   </nav>
   <main class="maincontent bg_fff">
      <section class="introPage">
         <div class="container">
            <div class="introbox mb40">
               <h1 class="title bold upcase"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('voucher');?>
</h1>
               <?php $_smarty_tpl->_assignInScope('site_voucher_intro', ('site_voucher_intro_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
               <div class="intro"><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['site_voucher_intro']->value));?>
</div>
            </div>
         </div>
      </section>
       <section class="tourTravelonPage">
           <div class="container">
               <div class="contentListTravel">
                   <div class="row">
                       <div class="col-lg-3">
                           <div class="sticky_fix">
                               <div class="block991" style="display:none">
                                   <div class="tag-search">
                                       <div class="btn_open_modal btn_quick_search" data-bs-toggle="modal"
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
                                                   <div class="totalTour mb20">
                                                       <p class="totalTourpage h3"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Find');?>
 <?php echo $_smarty_tpl->tpl_vars['totalVoucher']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['totalTour']->value > 1) {
echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Voucher');
} else {
echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Vouchers');
}?></p>
                                                   </div>
                                                   <?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('filter_left_trip_voucher');?>

                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-lg-9">
                           <div class="listTourItem">
                               <?php if ($_smarty_tpl->tpl_vars['lstVoucherCat']->value) {?>
                               <div class="voucher_cat_top">
                                   <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstVoucherCat']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                                       <?php $_smarty_tpl->_assignInScope('voucher_cat_title', $_smarty_tpl->tpl_vars['clsVoucherCategory']->value->getTitle($_smarty_tpl->tpl_vars['lstVoucherCat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['voucher_cat_id'],$_smarty_tpl->tpl_vars['lstVoucherCat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]));?>
                                       <div class="voucher_cat_item">
                                           <a href="<?php echo $_smarty_tpl->tpl_vars['clsVoucherCategory']->value->getLink($_smarty_tpl->tpl_vars['lstVoucherCat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['voucher_cat_id'],$_smarty_tpl->tpl_vars['lstVoucherCat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
" title="<?php echo $_smarty_tpl->tpl_vars['voucher_cat_title']->value;?>
">
                                               <?php echo $_smarty_tpl->tpl_vars['voucher_cat_title']->value;?>

                                           </a>
                                       </div>
                                   <?php
}
}
?>
                               </div>
                               <?php }?>
                               <div class="row">
                                   <?php
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstVoucher']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total !== 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                                      <?php $_smarty_tpl->_assignInScope('voucher_id', $_smarty_tpl->tpl_vars['lstVoucher']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['voucher_id']);?>
                                      <?php $_smarty_tpl->_assignInScope('arrVoucher', $_smarty_tpl->tpl_vars['lstVoucher']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
                                       <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col_item">
                                          <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getBlock('voucherbox',array("voucher_id"=>$_smarty_tpl->tpl_vars['voucher_id']->value,"arrVoucher"=>$_smarty_tpl->tpl_vars['arrVoucher']->value));?>

                                       </div>
                                   <?php
}
}
?>
                               </div>
                           </div>
                           <?php if ($_smarty_tpl->tpl_vars['totalPage']->value > '1') {?>
                               <div class="clearfix"></div>
                               <div class="pagination pager">
                                   <?php echo $_smarty_tpl->tpl_vars['page_view']->value;?>

                               </div>
                           <?php }?>
                       </div>
                   </div>
               </div>
           </div>
       </section>
   </main>
</div>
<?php echo '<script'; ?>
 >
   var min_duration_value = '<?php echo $_smarty_tpl->tpl_vars['min_duration']->value;?>
';
   var max_duration_value = '<?php echo $_smarty_tpl->tpl_vars['max_duration']->value;?>
';
   var country_id ='<?php echo $_smarty_tpl->tpl_vars['country_id']->value;?>
';
   var city_id ='<?php echo $_smarty_tpl->tpl_vars['city_id']->value;?>
';
   var totalpage ='<?php echo $_smarty_tpl->tpl_vars['totalPage']->value;?>
';
<?php echo '</script'; ?>
><?php }
}
