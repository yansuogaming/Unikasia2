<?php
/* Smarty version 3.1.38, created on 2024-04-08 14:11:18
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/jssorimageSlide2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6613989694bf50_61793488',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '819e0f3633f586e9511d3412f318f1b85eb848f4' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/jssorimageSlide2.tpl',
      1 => 1710127392,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6613989694bf50_61793488 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/jssor/jssor.slider.min.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
jssor_slider1_init = function () {
    var _SlideshowTransitions = [
        {$Duration: 1200, x: 0.3, $During: { $Left: [0.3, 0.7] }, $Easing: { $Left: $Jease$.$InCubic, $Opacity: $Jease$.$Linear }, $Opacity: 2 }
        , { $Duration: 1200, x: -0.3, $SlideOut: true, $Easing: { $Left: $Jease$.$InCubic, $Opacity: $Jease$.$Linear }, $Opacity: 2 }
        , { $Duration: 1200, x: -0.3, $During: { $Left: [0.3, 0.7] }, $Easing: { $Left: $Jease$.$InCubic, $Opacity: $Jease$.$Linear }, $Opacity: 2 }
        , { $Duration: 1200, x: 0.3, $SlideOut: true, $Easing: { $Left: $Jease$.$InCubic, $Opacity: $Jease$.$Linear }, $Opacity: 2 }
        , { $Duration: 1200, y: 0.3, $During: { $Top: [0.3, 0.7] }, $Easing: { $Top: $Jease$.$InCubic, $Opacity: $Jease$.$Linear }, $Opacity: 2, $Outside: true }
        , { $Duration: 1200, y: -0.3, $SlideOut: true, $Easing: { $Top: $Jease$.$InCubic, $Opacity: $Jease$.$Linear }, $Opacity: 2, $Outside: true }
        , { $Duration: 1200, y: -0.3, $During: { $Top: [0.3, 0.7] }, $Easing: { $Top: $Jease$.$InCubic, $Opacity: $Jease$.$Linear }, $Opacity: 2 }
        , { $Duration: 1200, y: 0.3, $SlideOut: true, $Easing: { $Top: $Jease$.$InCubic, $Opacity: $Jease$.$Linear }, $Opacity: 2 }
        , { $Duration: 1200, x: 0.3, $Cols: 2, $During: { $Left: [0.3, 0.7] }, $ChessMode: { $Column: 3 }, $Easing: { $Left: $Jease$.$InCubic, $Opacity: $Jease$.$Linear }, $Opacity: 2, $Outside: true }
        , { $Duration: 1200, x: 0.3, $Cols: 2, $SlideOut: true, $ChessMode: { $Column: 3 }, $Easing: { $Left: $Jease$.$InCubic, $Opacity: $Jease$.$Linear }, $Opacity: 2, $Outside: true }
        , { $Duration: 1200, y: 0.3, $Rows: 2, $During: { $Top: [0.3, 0.7] }, $ChessMode: { $Row: 12 }, $Easing: { $Top: $Jease$.$InCubic, $Opacity: $Jease$.$Linear }, $Opacity: 2 }
        , { $Duration: 1200, y: 0.3, $Rows: 2, $SlideOut: true, $ChessMode: { $Row: 12 }, $Easing: { $Top: $Jease$.$InCubic, $Opacity: $Jease$.$Linear }, $Opacity: 2 }
        , { $Duration: 1200, y: 0.3, $Cols: 2, $During: { $Top: [0.3, 0.7] }, $ChessMode: { $Column: 12 }, $Easing: { $Top: $Jease$.$InCubic, $Opacity: $Jease$.$Linear }, $Opacity: 2, $Outside: true }
        , { $Duration: 1200, y: -0.3, $Cols: 2, $SlideOut: true, $ChessMode: { $Column: 12 }, $Easing: { $Top: $Jease$.$InCubic, $Opacity: $Jease$.$Linear }, $Opacity: 2 }
        , { $Duration: 1200, x: 0.3, $Rows: 2, $During: { $Left: [0.3, 0.7] }, $ChessMode: { $Row: 3 }, $Easing: { $Left: $Jease$.$InCubic, $Opacity: $Jease$.$Linear }, $Opacity: 2, $Outside: true }
        , { $Duration: 1200, x: -0.3, $Rows: 2, $SlideOut: true, $ChessMode: { $Row: 3 }, $Easing: { $Left: $Jease$.$InCubic, $Opacity: $Jease$.$Linear }, $Opacity: 2 }
        , { $Duration: 1200, x: 0.3, y: 0.3, $Cols: 2, $Rows: 2, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $ChessMode: { $Column: 3, $Row: 12 }, $Easing: { $Left: $Jease$.$InCubic, $Top: $Jease$.$InCubic, $Opacity: $Jease$.$Linear }, $Opacity: 2, $Outside: true }
        , { $Duration: 1200, x: 0.3, y: 0.3, $Cols: 2, $Rows: 2, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $SlideOut: true, $ChessMode: { $Column: 3, $Row: 12 }, $Easing: { $Left: $Jease$.$InCubic, $Top: $Jease$.$InCubic, $Opacity: $Jease$.$Linear }, $Opacity: 2, $Outside: true }
        , { $Duration: 1200, $Delay: 20, $Clip: 3, $Assembly: 260, $Easing: { $Clip: $Jease$.$InCubic, $Opacity: $Jease$.$Linear }, $Opacity: 2 }
        , { $Duration: 1200, $Delay: 20, $Clip: 3, $SlideOut: true, $Assembly: 260, $Easing: { $Clip: $Jease$.$OutCubic, $Opacity: $Jease$.$Linear }, $Opacity: 2 }
        , { $Duration: 1200, $Delay: 20, $Clip: 12, $Assembly: 260, $Easing: { $Clip: $Jease$.$InCubic, $Opacity: $Jease$.$Linear }, $Opacity: 2 }
        , { $Duration: 1200, $Delay: 20, $Clip: 12, $SlideOut: true, $Assembly: 260, $Easing: { $Clip: $Jease$.$OutCubic, $Opacity: $Jease$.$Linear }, $Opacity: 2 }
        ];

    var options = {
        $AutoPlay: 1, 
        $Idle: 1560,
        $PauseOnHover: 1,
        $DragOrientation: 3,
        $ArrowKeyNavigation: 1,
        $SlideDuration: 1000,
        $SlideshowOptions: {
            $Class: $JssorSlideshowRunner$,
            $Transitions: _SlideshowTransitions, 
            $TransitionsOrder: 1, 
            $ShowLink: true 
        },

        $ArrowNavigatorOptions: {
            $Class: $JssorArrowNavigator$, 
            $ChanceToShow: 1 
        },

        $ThumbnailNavigatorOptions: {  
            $Class: $JssorThumbnailNavigator$,
            $ChanceToShow: 2, 
            $ActionMode: 1, 
            $SpacingX: 8,
            $Cols: 7,  
            $Align: 370
        }
    };

    var jssor_slider1 = new $JssorSlider$('slider1_container', options);
    function ScaleSlider() {
        var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
        if (parentWidth)
            jssor_slider1.$ScaleWidth(Math.max(Math.min(parentWidth, 840), 300));
        else
            $Jssor$.$Delay(ScaleSlider, 30);
    }

    ScaleSlider();
    $Jssor$.$AddEvent(window, "load", ScaleSlider);

    $Jssor$.$AddEvent(window, "resize", ScaleSlider);
    $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
};
<?php echo '</script'; ?>
>

<?php if ($_smarty_tpl->tpl_vars['mod']->value == 'tour_new') {?>
<div id="slider1_container" style="position: relative; width: 840px;
	height: 565px; overflow: hidden;">
	<div data-u="loading" style="position:absolute;top:0px;left:0px; background-color: rgba(0, 0, 0, .7);"></div>
	<div data-u="slides" style="position: absolute; left: 0px; top: 0px; width: 840px; height: 480px;
		overflow: hidden;">
		<div>
			<img data-u="image" class="imageReponsive full-width height-auto"  src="<?php echo $_smarty_tpl->tpl_vars['clsTour']->value->getImage($_smarty_tpl->tpl_vars['tour_id']->value,840,480);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['clsTour']->value->getTitle($_smarty_tpl->tpl_vars['tour_id']->value);?>
">
			<img data-u="thumb" class="full-width height-auto" src="<?php echo $_smarty_tpl->tpl_vars['clsTour']->value->getImage($_smarty_tpl->tpl_vars['tour_id']->value,114,76);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['clsTour']->value->getTitle($_smarty_tpl->tpl_vars['tour_id']->value);?>
">
		</div>
		<?php
$__section_i_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstImage']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_3_total = $__section_i_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_3_total !== 0) {
for ($__section_i_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_3_iteration <= $__section_i_3_total; $__section_i_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['first'] = ($__section_i_3_iteration === 1);
?>
		<div>
			<img data-u="image" class="imageReponsive full-width height-auto"  src="<?php echo $_smarty_tpl->tpl_vars['clsTourImage']->value->getImage($_smarty_tpl->tpl_vars['lstImage']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_image_id'],840,480);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['clsTourImage']->value->getTitle($_smarty_tpl->tpl_vars['lstImage']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_image_id']);?>
"/>
			<img data-u="thumb" class="full-width height-auto" src="<?php echo $_smarty_tpl->tpl_vars['clsTourImage']->value->getImage($_smarty_tpl->tpl_vars['lstImage']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_image_id'],114,76);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['clsTourImage']->value->getTitle($_smarty_tpl->tpl_vars['lstImage']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_image_id']);?>
" />
		</div>
		<?php
}
}
?>		
	</div>
	<div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:225px;left:25px;" data-scale="0.75" data-scale-left="0.75">
		<svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
			<polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
		</svg>
	</div>
	<div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:225px;right:25px;" data-scale="0.75" data-scale-right="0.75">
		<svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
			<polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
		</svg>
	</div>
	<div data-u="thumbnavigator" class="jssort01" style="left: 0px; bottom: 0px;">
		<!-- Thumbnail Item Skin Begin -->
		<div data-u="slides" style="cursor: default; width:100%; left:0; right:0">
			<div data-u="prototype" class="p">
				<div class=w><div u="thumbnailtemplate" class="t"></div></div>
				<div class=c></div>
			</div>
		</div>
		<!-- Thumbnail Item Skin End -->
	</div>
</div>
<?php } else { ?>
<div id="slider1_container" style="position: relative; width: 840px;
	height: 565px; overflow: hidden;    background: rgb(25, 25, 25);">
	<?php if ($_smarty_tpl->tpl_vars['lstImage']->value[0]['tour_image_id'] != '') {?>
	<div class="tab-expand text-center hidden992"><?php
$__section_i_4_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstImage']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_4_total = $__section_i_4_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_4_total !== 0) {
for ($__section_i_4_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_4_iteration <= $__section_i_4_total; $__section_i_4_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['first'] = ($__section_i_4_iteration === 1);
?><a class="color_fff photo venobox" data-gall="myGallery" href="<?php echo $_smarty_tpl->tpl_vars['clsCruiseImage']->value->getImage($_smarty_tpl->tpl_vars['lstImage']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_image_id'],840,560);?>
" title="<?php echo $_smarty_tpl->tpl_vars['clsCruiseImage']->value->getTitle($_smarty_tpl->tpl_vars['lstImage']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_image_id']);?>
"><?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['first'] : null)) {?><span class="color_fff fa fa-expand z_18"></span><?php }?></a><?php
}
}
?></div>
	
	<?php echo '<script'; ?>
>
		$(function(){
			$('.venobox').venobox({
				framewidth: '840px',    
				border: '5px',       
				bgcolor: '#fff', 
				numeratio: true,       
				infinigall: true    
			});
		});
	<?php echo '</script'; ?>
>
	
	<?php }?>
	<div data-u="loading" style="position:absolute;top:0px;left:0px;background:url('../img/loading.gif') no-repeat 50% 50%; background-color: rgba(0, 0, 0, .7);"></div>
	<div u="slides" style="position: absolute; left: 0px; top: 0px; width: 840px; height: 480px;
		overflow: hidden;">
		<?php if ($_smarty_tpl->tpl_vars['lstVideoCruise']->value) {?>
		<div>
			<?php
$__section_i_5_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstVideoCruise']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_5_total = $__section_i_5_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_5_total !== 0) {
for ($__section_i_5_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_5_iteration <= $__section_i_5_total; $__section_i_5_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['first'] = ($__section_i_5_iteration === 1);
?>
			<a class="full-width venobox_video <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['first'] : null)) {?> owl-play<?php }?>" data-gall="gall-video" data-autoplay="false" data-vbtype="video" href="<?php echo $_smarty_tpl->tpl_vars['clsCruiseVideo']->value->getLinkVideo($_smarty_tpl->tpl_vars['lstVideoCruise']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_video_id']);?>
">
			</a>
			<?php
}
}
?>
			<img u="image"  src="<?php echo $_smarty_tpl->tpl_vars['clsCruise']->value->getImage($_smarty_tpl->tpl_vars['cruise_id']->value,840,565);?>
" alt="">
			<img u="thumb" src="<?php echo $_smarty_tpl->tpl_vars['clsCruise']->value->getImage($_smarty_tpl->tpl_vars['cruise_id']->value,90,60);?>
" alt="">
		</div>
		
		<?php echo '<script'; ?>
>
		$(function(){
			$('.venobox_video').venobox({    
			border: '5px',       
			bgcolor: '#fff', 
			numeratio: true,       
			infinigall: true    
			});
		});
		<?php echo '</script'; ?>
>
	
	<?php } else { ?>
	<div>
	<img u="image"  src="<?php echo $_smarty_tpl->tpl_vars['clsCruise']->value->getImage($_smarty_tpl->tpl_vars['cruise_id']->value,840,565);?>
" alt="">
	<img u="thumb" src="<?php echo $_smarty_tpl->tpl_vars['clsCruise']->value->getImage($_smarty_tpl->tpl_vars['cruise_id']->value,90,60);?>
" alt="">
	</div>
	<?php }?>
	<?php
$__section_i_6_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstImage']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_6_total = $__section_i_6_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_6_total !== 0) {
for ($__section_i_6_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_6_iteration <= $__section_i_6_total; $__section_i_6_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['first'] = ($__section_i_6_iteration === 1);
?>
	<div>
		<img u="image" src="<?php echo $_smarty_tpl->tpl_vars['clsCruiseImage']->value->getImage($_smarty_tpl->tpl_vars['lstImage']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_image_id'],840,565);?>
" />
		<img u="thumb" src="<?php echo $_smarty_tpl->tpl_vars['clsCruiseImage']->value->getImage($_smarty_tpl->tpl_vars['lstImage']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_image_id'],88,59);?>
" />
	</div>
	<?php
}
}
?>						
	</div>
	<div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:230px;left:25px;" data-scale="0.75" data-scale-left="0.75">
		<svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
			<polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
		</svg>
	</div>
	<div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:230px;right:25px;" data-scale="0.75" data-scale-right="0.75">
		<svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
			<polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
		</svg>
	</div>
	<div u="thumbnavigator" class="jssort01" style="left: 0px; bottom: 0px;">
		<!-- Thumbnail Item Skin Begin -->
		<div u="slides" style="cursor: default;">
			<div u="prototype" class="p">
				<div class=w><div u="thumbnailtemplate" class="t"></div></div>
				<div class=c></div>
			</div>
		</div>
		<!-- Thumbnail Item Skin End -->
	</div>
</div>
<?php }?>

<style type="text/css">
.jssora051 {display:block;position:absolute;cursor:pointer;}
.jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
.jssora051:hover {opacity:.8;}
.jssora051.jssora051dn {opacity:.5;}
.jssora051.jssora051ds {opacity:.3;pointer-events:none;}
.jssort01 {
position: absolute;
/* size of thumbnail navigator container */
width: 840px;
height: 75px;
background:#fff;
}
.jssort01 .p {
	position: absolute;
	top: 0;
	left: 0;
	width: 114px;
	height: 76px;
}


.jssort01 .t {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	border: none;
}

.jssort01 .w {
	position: absolute;
	top: 0px;
	left: 0px;
	width: 100%;
	height: 100%;
    opacity: 0.5;
}
.jssort01  .pav .w {
    opacity:1;
}
</style>
<?php echo '<script'; ?>
>
	jssor_slider1_init();
<?php echo '</script'; ?>
>
<?php }
}
