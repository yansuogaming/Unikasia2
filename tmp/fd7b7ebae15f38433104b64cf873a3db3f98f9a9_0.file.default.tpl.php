<?php
/* Smarty version 3.1.38, created on 2024-05-06 11:55:46
  from '/home/unikasia/domains/unikasia.com/private_html/isocms/templates/default/news/default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_663862d2cab3e2_47168895',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd7b7ebae15f38433104b64cf873a3db3f98f9a9' => 
    array (
      0 => '/home/unikasia/domains/unikasia.com/private_html/isocms/templates/default/news/default.tpl',
      1 => 1714822362,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_663862d2cab3e2_47168895 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('title_new_cat', $_smarty_tpl->tpl_vars['clsNewsCategory']->value->getTitle($_smarty_tpl->tpl_vars['newscat_id']->value,$_smarty_tpl->tpl_vars['arrayCat']->value));
$_smarty_tpl->_assignInScope('title_news_top', $_smarty_tpl->tpl_vars['clsNews']->value->getTitle($_smarty_tpl->tpl_vars['lstNews']->value[0]['news_id'],$_smarty_tpl->tpl_vars['lstNews']->value[0]));
$_smarty_tpl->_assignInScope('link_news_top', $_smarty_tpl->tpl_vars['clsNews']->value->getLink($_smarty_tpl->tpl_vars['lstNews']->value[0]['news_id'],$_smarty_tpl->tpl_vars['lstNews']->value[0]));?>
<div class="page_container">
	<div class="breadcrumb-main bg_fff">
        <div class="container">
            <ol class="breadcrumb hidden-xs mt0 bg_fff" itemscope itemtype="https://schema.org/BreadcrumbList">
				<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
					<a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Home');?>
">
						<span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Home');?>
</span></a>
					<meta itemprop="position" content="1" />
				</li>
				<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
					<a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('news');?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('News');?>
">
						<span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('News');?>
</span></a>
					<meta itemprop="position" content="2" />
				</li>
				<?php if ($_smarty_tpl->tpl_vars['newscat_id']->value > '0') {?>
				<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"> 
					<a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['clsNewsCategory']->value->getLink($_smarty_tpl->tpl_vars['newscat_id']->value,$_smarty_tpl->tpl_vars['arrayCat']->value);?>
" title="<?php echo $_smarty_tpl->tpl_vars['title_new_cat']->value;?>
">
						<span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['title_new_cat']->value;?>
</span></a>
					<meta itemprop="position" content="3" />
				</li> 
				<?php }?>
            </ol>
        </div>
	</div>	
	<div class="newsPage pageNewsDefault bg_fff">
		<div class="container">
			<section class="box_news_view_top">
				<div class="row">
					<?php if ($_smarty_tpl->tpl_vars['lstNewsTopView']->value) {?>
                    <div class="col-lg-8">
                        <div class="box_image_top">
                            <a class="photo" href="<?php echo $_smarty_tpl->tpl_vars['clsNews']->value->getLink($_smarty_tpl->tpl_vars['lstNewsTopView']->value[0]['news_id'],$_smarty_tpl->tpl_vars['lstNewsTopView']->value[0]);?>
" title="<?php echo $_smarty_tpl->tpl_vars['lstNewsTopView']->value[0]['title'];?>
">
                                <img class="img-responsive img_scale full-width img100 lazy" src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/pixel.png"
                                     data-src="<?php echo $_smarty_tpl->tpl_vars['clsNews']->value->getImage($_smarty_tpl->tpl_vars['lstNewsTopView']->value[0]['news_id'],850,547,$_smarty_tpl->tpl_vars['lstNewsTopView']->value[0]);?>
"
                                     alt="<?php echo $_smarty_tpl->tpl_vars['lstNewsTopView']->value[0]['title'];?>
"/>
                                <div class="box_text_image">
                                    <div class="text_image_title">
                                        <?php echo $_smarty_tpl->tpl_vars['lstNewsTopView']->value[0]['title'];?>

                                    </div>
                                    <p class="date_public"><span class="name_cat"><?php echo $_smarty_tpl->tpl_vars['clsNewsCategory']->value->getTitle($_smarty_tpl->tpl_vars['lstNewsTopView']->value[0]['newscat_id']);?>
</span> &nbsp; &#8226; <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->converTimeToText($_smarty_tpl->tpl_vars['lstNewsTopView']->value[0]['reg_date']);?>
</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstNewsTopView']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_start = min(1, $__section_i_0_loop);
$__section_i_0_total = min(($__section_i_0_loop - $__section_i_0_start), $__section_i_0_loop);
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = $__section_i_0_start; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                        <?php $_smarty_tpl->_assignInScope('title_news', $_smarty_tpl->tpl_vars['clsNews']->value->getTitle($_smarty_tpl->tpl_vars['lstNewsTopView']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['news_id'],$_smarty_tpl->tpl_vars['lstNewsTopView']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]));?>
                        <?php $_smarty_tpl->_assignInScope('link_news', $_smarty_tpl->tpl_vars['clsNews']->value->getLink($_smarty_tpl->tpl_vars['lstNewsTopView']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['news_id'],$_smarty_tpl->tpl_vars['lstNewsTopView']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]));?>
                        <div class="box_image_top">
                            <a class="photo" href="<?php echo $_smarty_tpl->tpl_vars['link_news']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['title_news']->value;?>
">
                                <img class="img-responsive img_scale full-width img100 lazy" src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/pixel.png"
                                     data-src="<?php echo $_smarty_tpl->tpl_vars['clsNews']->value->getImage($_smarty_tpl->tpl_vars['lstNewsTopView']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['news_id'],419,269,$_smarty_tpl->tpl_vars['lstNewsTopView']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
"
                                     alt="<?php echo $_smarty_tpl->tpl_vars['title_news']->value;?>
"/>
                                <div class="box_text_image">
                                    <div class="title_img_small">
                                        <?php echo $_smarty_tpl->tpl_vars['title_news']->value;?>

                                    </div>
                                    <p class="date_public"><span class="name_cat"><?php echo $_smarty_tpl->tpl_vars['clsNewsCategory']->value->getTitle($_smarty_tpl->tpl_vars['lstNewsTopView']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['newscat_id']);?>
</span> &nbsp; &#8226; <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->converTimeToText($_smarty_tpl->tpl_vars['lstNewsTopView']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reg_date']);?>
</p>
                                </div>
                            </a>
                        </div>
                        <?php
}
}
?>
                    </div>
					<?php }?>
				</div>
			</section>
            <section class="box_news_list">
                <div class="row">
                    <div class="col-lg-9 leftNews">
                        <h1 class="Title_news"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Latest news');?>
</h1>
                        <div class="boxListItem mts">
                            <?php
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstNews']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total !== 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                            <?php $_smarty_tpl->_assignInScope('title_news', $_smarty_tpl->tpl_vars['clsNews']->value->getTitle($_smarty_tpl->tpl_vars['lstNews']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['news_id'],$_smarty_tpl->tpl_vars['lstNews']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]));?>
                            <?php $_smarty_tpl->_assignInScope('link_news', $_smarty_tpl->tpl_vars['clsNews']->value->getLink($_smarty_tpl->tpl_vars['lstNews']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['news_id'],$_smarty_tpl->tpl_vars['lstNews']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]));?>
                            <div class="Item">
                                <div class="itemNews">
                                    <a class="photo" href="<?php echo $_smarty_tpl->tpl_vars['link_news']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['title_news']->value;?>
">
                                        <img class="img-responsive img_scale full-width img100 lazy" src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/pixel.png" data-src="<?php echo $_smarty_tpl->tpl_vars['clsNews']->value->getImage($_smarty_tpl->tpl_vars['lstNews']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['news_id'],297,191,$_smarty_tpl->tpl_vars['lstNews']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['title_news']->value;?>
" />
                                    </a>
                                    <div class="body">
                                        <p class="date_public"><span class="name_cat"><?php echo $_smarty_tpl->tpl_vars['clsNewsCategory']->value->getTitle($_smarty_tpl->tpl_vars['lstNews']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['newscat_id']);?>
</span> &nbsp; &#8226; <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->converTimeToText($_smarty_tpl->tpl_vars['lstNews']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reg_date']);?>
</p>
                                        <h3 class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['link_news']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['title_news']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['title_news']->value;?>
</a></h3>
                                        <div class="intro limit_3line">
                                            <?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['clsNews']->value->getIntro($_smarty_tpl->tpl_vars['lstNews']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['news_id'],$_smarty_tpl->tpl_vars['lstNews']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]));?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
}
}
?>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['totalPage']->value > '1') {?>
                        <div class="clearfix"></div>
                        <div class="pagination pager">
                            <?php echo $_smarty_tpl->tpl_vars['page_view']->value;?>

                        </div>
                        <?php }?>	
                    </div>
                    <div class="col-lg-3 rightNews">
                        <div class="sticky_fix">
                            <?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('l_boxcolNews');?>

                        </div>
                    </div>
                </div>
            </section>
		</div>
	</div>

</div><?php }
}
