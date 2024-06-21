<?php
/* Smarty version 3.1.38, created on 2024-04-08 17:11:59
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/about/about.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6613c2ef4404b9_61681153',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '580569bd09877a237ac6e66b3d52907c206b9d37' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/about/about.tpl',
      1 => 1709954299,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6613c2ef4404b9_61681153 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['page_id']->value) {?>
<div class="page_container">
	<?php $_smarty_tpl->_assignInScope('itemPage', $_smarty_tpl->tpl_vars['clsPage']->value->getOne($_smarty_tpl->tpl_vars['page_id']->value,'title,intro'));?>
	<?php $_smarty_tpl->_assignInScope('titlePage', $_smarty_tpl->tpl_vars['clsPage']->value->getTitle($_smarty_tpl->tpl_vars['page_id']->value,$_smarty_tpl->tpl_vars['itemPage']->value));?>
	<?php $_smarty_tpl->_assignInScope('introPage', $_smarty_tpl->tpl_vars['clsPage']->value->getIntro($_smarty_tpl->tpl_vars['page_id']->value,$_smarty_tpl->tpl_vars['itemPage']->value));?>
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
						<li  itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="current">
							<a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['curl']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['titlePage']->value;?>
">
								<span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['titlePage']->value;?>
</span></a>
							<meta itemprop="position" content="2" />
						</li>
					</ol>
				</div>
			</div>
		</div>
	</nav>
 	<section class="aboutPage whyPage">
		<div class="container ">
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<div class="Aboutcontent">
						<h1 class="titlePage"><?php echo $_smarty_tpl->tpl_vars['titlePage']->value;?>
</h1>
						<div class="tinymce_Content"><?php echo $_smarty_tpl->tpl_vars['introPage']->value;?>
</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<?php } else { ?>
<div class="page_container bg_fff">
	<nav class="breadcrumb-main breadcrumb-cruise bg-default breadcrumb-more bg_fff">
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
				<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="active">
					<a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['curl']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('About us');?>
">
						<span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('About us');?>
</span></a>
					<meta itemprop="position" content="2" />
				</li>
			</ol>
		</div>
	</nav>
	<div class="main_about_us">
		<section class="sec_tab_content_about">
			<?php $_smarty_tpl->_assignInScope('SiteIntroBannerAbout', ('SiteIntroBannerAbout_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
			<div class="container">
				<h1 class="title_about_us"><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['SiteIntroBannerAbout']->value));?>
</h1>
				<div class="box_image_about_top">
					<img src="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getImage('site_about_page_banner',1280,600);?>
" class="img100" alt="image">
                    <?php $_smarty_tpl->_assignInScope('Link_Youtube_About_Us', ('Link_Youtube_About_Us_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
                    <?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['Link_Youtube_About_Us']->value)) {?>
					<div class="icon_on_img">
						
						<a href="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['Link_Youtube_About_Us']->value);?>
" title="video about" data-fancybox="gallery">
							<img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/icon/icon_play_video.png" width="100" height="100" alt="icon">
						</a>
					</div>
                    <?php }?>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['deviceType']->value == 'phone') {?>
					<div class="itineraty__box">
						<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listReasons']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
							<div class="itineraty_content">
								<h2 class="title"><?php echo $_smarty_tpl->tpl_vars['clsYearJourney']->value->getTitle($_smarty_tpl->tpl_vars['listReasons']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['year_journey_id'],$_smarty_tpl->tpl_vars['listReasons']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
</h2>
								<div class="detail tinymce_Content">
									<?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsYearJourney']->value->getIntro($_smarty_tpl->tpl_vars['listReasons']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['year_journey_id'],$_smarty_tpl->tpl_vars['listReasons']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]));?>

								</div>
							</div>
						<?php
}
}
?>
					</div>
				<?php } else { ?>
					<div class="itineraty__box d-flex flex-wap">
						<div class="box__left">
							<ul class="mt-nav-tabs nav-stacked list_style_none" role="tablist">
								<?php
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listReasons']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total !== 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
									<li role="presentation">
										<a href="javascript:void(0);" class="nav-link <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null) == 0) {?>active<?php }?>" id="tab<?php echo $_smarty_tpl->tpl_vars['listReasons']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['year_journey_id'];?>
" data-bs-toggle="tab" data-bs-target="#tab<?php echo $_smarty_tpl->tpl_vars['listReasons']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['year_journey_id'];?>
-pane" role="tab" aria-controls="tab<?php echo $_smarty_tpl->tpl_vars['listReasons']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['year_journey_id'];?>
-pane" aria-selected="true">
											<?php echo $_smarty_tpl->tpl_vars['clsYearJourney']->value->getTitle($_smarty_tpl->tpl_vars['listReasons']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['year_journey_id'],$_smarty_tpl->tpl_vars['listReasons']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>

										</a>
									</li>
								<?php
}
}
?>
							</ul>
						</div>
						<div class="box__right">
							<div class="tab-content"><!-- overview tab content -->
								<?php
$__section_i_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listReasons']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_2_total = $__section_i_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_2_total !== 0) {
for ($__section_i_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_2_iteration <= $__section_i_2_total; $__section_i_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
									<div class="tab-pane fade <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null) == 0) {?>active show<?php }?>" id="tab<?php echo $_smarty_tpl->tpl_vars['listReasons']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['year_journey_id'];?>
-pane" role="tabpanel" aria-labelledby="tab<?php echo $_smarty_tpl->tpl_vars['listReasons']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['year_journey_id'];?>
" tabindex="0">
										<div class="detail tinymce_Content">
											<?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsYearJourney']->value->getIntro($_smarty_tpl->tpl_vars['listReasons']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['year_journey_id'],$_smarty_tpl->tpl_vars['listReasons']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]));?>

										</div>
									</div>
								<?php
}
}
?>
							</div>
						</div>
					</div>
				<?php }?>

			</div>
		</section>

		<section class="achievement">
			<div class="container">
				<h2><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Achievements');?>
</h2>
				<div class="owl_achievement owl-carousel">
					<?php
$__section_i_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listYearJourney']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_3_total = $__section_i_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_3_total !== 0) {
for ($__section_i_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_3_iteration <= $__section_i_3_total; $__section_i_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
						<?php $_smarty_tpl->_assignInScope('year_journey_id', $_smarty_tpl->tpl_vars['listYearJourney']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['year_journey_id']);?>
						<?php $_smarty_tpl->_assignInScope('introYearJourney', $_smarty_tpl->tpl_vars['clsYearJourney']->value->getIntro($_smarty_tpl->tpl_vars['year_journey_id']->value,$_smarty_tpl->tpl_vars['listYearJourney']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]));?>
						<div class="achievement_item">
							<div class="icon">
								<img src="<?php echo $_smarty_tpl->tpl_vars['clsYearJourney']->value->getImage($_smarty_tpl->tpl_vars['year_journey_id']->value,65,65,$_smarty_tpl->tpl_vars['listYearJourney']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
" class="img100" width="65" height="65" alt="icon">
							</div>
							<p class="time"><?php echo $_smarty_tpl->tpl_vars['listYearJourney']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['business_year'];?>
</p>
							<h3><?php echo $_smarty_tpl->tpl_vars['clsYearJourney']->value->getTitle($_smarty_tpl->tpl_vars['year_journey_id']->value);?>
</h3>
							<div class="intro">
								<p><?php echo html_entity_decode($_smarty_tpl->tpl_vars['introYearJourney']->value);?>
</p>
							</div>
						</div>
					<?php
}
}
?>

				</div>
			</div>
		</section>
		<?php if ($_smarty_tpl->tpl_vars['listTeam']->value) {?>
			<section class="indispensable_employees">
				<div class="container">
					<h2><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Indispensable employees');?>
</h2>
					<div class="list_employee">
						<div class="row">
							<?php
$__section_i_4_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listTeam']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_4_total = $__section_i_4_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_4_total !== 0) {
for ($__section_i_4_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_4_iteration <= $__section_i_4_total; $__section_i_4_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
								<div class="col-lg-3">
									<div class="employee_item">
										<div class="employee_image">
											<img src="<?php echo $_smarty_tpl->tpl_vars['clsTeam']->value->getImage($_smarty_tpl->tpl_vars['listTeam']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['team_id'],298,298);?>
" class="img100 img_scale"
												 width="298" height=298" alt="image">
										</div>
										<div class="employee_item_body">
											<h3 class="employee_name"><?php echo $_smarty_tpl->tpl_vars['clsTeam']->value->getName($_smarty_tpl->tpl_vars['listTeam']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['team_id'],$_smarty_tpl->tpl_vars['listTeam']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
</h3>
											<p class="role"><?php echo $_smarty_tpl->tpl_vars['listTeam']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['position'];?>
</p>
											<div class="employee_item_text">
												<?php echo $_smarty_tpl->tpl_vars['clsTeam']->value->getAbout($_smarty_tpl->tpl_vars['listTeam']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['team_id'],$_smarty_tpl->tpl_vars['listTeam']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>

											</div>
											<div class="readmore mb0"><a class="venoboxinline vbox-item" data-gall="gall1" data-maxwidth="991px" data-title="inline content" data-vbtype="inline" href="#staff_<?php echo $_smarty_tpl->tpl_vars['listTeam']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['team_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('View More');?>
</a></div>
										</div>
									</div>
								</div>
							<?php
}
}
?>
						</div>
					</div>
					<?php
$__section_i_5_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listTeam']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_5_total = $__section_i_5_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_5_total !== 0) {
for ($__section_i_5_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_5_iteration <= $__section_i_5_total; $__section_i_5_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
						<div id="staff_<?php echo $_smarty_tpl->tpl_vars['listTeam']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['team_id'];?>
" class="employee_popup" style="display: none">
							<div class="vbox-close">x</div>
							<div class="employee_item employee_popup">
								<div class="employee_image">
									<img src="<?php echo $_smarty_tpl->tpl_vars['clsTeam']->value->getImage($_smarty_tpl->tpl_vars['listTeam']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['team_id'],298,298);?>
" class="img100" width="298" height="298" alt="<?php echo $_smarty_tpl->tpl_vars['clsTeam']->value->getName($_smarty_tpl->tpl_vars['listTeam']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['team_id'],$_smarty_tpl->tpl_vars['listTeam']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
"/>
								</div>
								<div class="employee_item_body">
									<h3 class="employee_name"><?php echo $_smarty_tpl->tpl_vars['clsTeam']->value->getName($_smarty_tpl->tpl_vars['listTeam']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['team_id'],$_smarty_tpl->tpl_vars['listTeam']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
</h3>
									<p class="role"><?php echo $_smarty_tpl->tpl_vars['listTeam']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['position'];?>
</p>
									<div class="employee_item_text">
										<?php echo $_smarty_tpl->tpl_vars['clsTeam']->value->getAbout($_smarty_tpl->tpl_vars['listTeam']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['team_id'],$_smarty_tpl->tpl_vars['listTeam']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>

									</div>
								</div>
							</div>
						</div>
					<?php
}
}
?>
				</div>
			</section>
		<?php }?>
	</div>
</div>


	<?php echo '<script'; ?>
>
		Fancybox.bind("[data-fancybox]", {});
		$('.owl_achievement').owlCarousel({
			loop:true,
			margin:30,
			nav:true,
			center: true,
			dots:false,
			autoplay:false,
			items:3,
			responsive:{
				0:{
					center: true,
					dots:false,
					margin: 20,
					items:1
				},
				767:{
					items:1.5
				},
				992:{
					items:2
				},
				1025:{
					items:3
				}
			}
		});

	<?php echo '</script'; ?>
>



	<?php echo '<script'; ?>
 type="text/javascript">
		$(function(){
			$('.employee_item_text').each(function(){
				var $_this = $(this);
				if($_this.height()>84){
					$_this.css("height","84px");
					$_this.closest(".employee_item_body").find(".readmore").show();
				}else{
					$_this.closest(".employee_item_body").find(".readmore").hide();
				}
			});
		});
	<?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
>
		$('.venoboxinline').venobox({
			numeratio: false,
			framewidth: '991px',
			frameheight: 'auto',
			border: '0px',
			bgcolor: '#fff',
			titleattr: '',
			infinigall: false,
			htmlNext : '',
			htmlPrev : '',
			htmlClose : '',
		})
	<?php echo '</script'; ?>
>

<?php }
}
}
