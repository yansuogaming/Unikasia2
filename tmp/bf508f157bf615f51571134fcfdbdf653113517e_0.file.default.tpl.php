<?php
/* Smarty version 3.1.38, created on 2024-04-09 01:19:30
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/download/default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_661435323b89c6_12104595',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf508f157bf615f51571134fcfdbdf653113517e' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/download/default.tpl',
      1 => 1672023454,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661435323b89c6_12104595 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="page_container">
	<nav class="breadcrumb-main bg_fff">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<ol class="breadcrumb hidden-xs mt0 bg_fff" itemscope itemtype="https://schema.org/BreadcrumbList">
						<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
							<a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Home');?>
">
								<span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Home');?>
</span></a>
							<meta itemprop="position" content="1" />
						</li>
						<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="current">
							<a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['curl']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Trade Brochures');?>
">
								<span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Trade Brochures');?>
</span></a>
							<meta itemprop="position" content="2" />
						</li>
					</ol>
				</div>
			</div>
		</div>
	</nav>
 	<section class="aboutPage whyPage">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="Aboutcontent">
						<h1 class="titlePage"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Trade Brochures');?>
</h1>
						<ul class="list-brochure" id="listHolderView">  
							<?php $_smarty_tpl->_assignInScope('totalDownload', count($_smarty_tpl->tpl_vars['listDownload']->value));?>    
							<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listDownload']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] <= $__section_i_0_total; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
							<?php $_smarty_tpl->_assignInScope('titleDownload', $_smarty_tpl->tpl_vars['clsDownload']->value->getTitle($_smarty_tpl->tpl_vars['listDownload']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['download_id'],$_smarty_tpl->tpl_vars['listDownload']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]));?>  
							<?php $_smarty_tpl->_assignInScope('introDownload', $_smarty_tpl->tpl_vars['clsDownload']->value->getIntro($_smarty_tpl->tpl_vars['listDownload']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['download_id'],$_smarty_tpl->tpl_vars['listDownload']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]));?>  
							<li class="box bg_fff mb20" <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] : null) > '4') {?>style="display:none"<?php }?>>
								<h3><a href="<?php echo $_smarty_tpl->tpl_vars['listDownload']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['attachment_file'];?>
" class="download" title="<?php echo $_smarty_tpl->tpl_vars['titleDownload']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['titleDownload']->value;?>
</a></h3>
								<?php if ($_smarty_tpl->tpl_vars['introDownload']->value != '') {?>
								<div class="formatTextIntro"><?php echo $_smarty_tpl->tpl_vars['introDownload']->value;?>
</div>
								<?php }?>
								<a href="<?php echo $_smarty_tpl->tpl_vars['listDownload']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['attachment_file'];?>
" class="download" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Download');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Download');?>
 <span class="filesize">(<?php echo $_smarty_tpl->tpl_vars['clsDownload']->value->getFileSize($_smarty_tpl->tpl_vars['listDownload']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['download_id'],"KB",$_smarty_tpl->tpl_vars['listDownload']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
, <?php echo $_smarty_tpl->tpl_vars['clsDownload']->value->getFileExtension($_smarty_tpl->tpl_vars['listDownload']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['download_id'],$_smarty_tpl->tpl_vars['listDownload']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
)</span></a>
							</li>
							<?php
}
}
?>
							<?php if ($_smarty_tpl->tpl_vars['totalDownload']->value > '4') {?>
							<div class="cleafix"></div>	
							<div id="load_more_collections" class="text_center">
								<a href="javascript:void(0);" rel="nofollow" page="1" class="btn_orance_border show-more" id="show-more"></a>
							</div>
							<?php }?> 
						</ul>   
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

<?php echo '<script'; ?>
>
$(function(){	
    var $number_per_page = 4;	
    var $page =1;	
    var timer = '';
    $('#show-more').click(function(){
        var $_this = $(this);	
        clearTimeout(timer);	
        $page = $page+1;	
        timer = setTimeout(function(){	
            var $start = ($page-1)*$number_per_page;	
            var $end = $start + $number_per_page;	
            for(var i = $start; i < $end; i++){	
                $('.box').eq(i).show();	
            }	
        },500);
        /* Hide load more */	
        setInterval(function(){	
            loadPageFix();	
        },100);	
    });	
}); 
<?php echo '</script'; ?>
>
<?php }
}
