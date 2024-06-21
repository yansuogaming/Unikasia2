<?php

global $assign_list,$mod, $act, $core, $oneConfiguration, $smarty;
$clsSlide=new Slide();
$listSlide = $clsSlide->getAll("is_trash=0 and is_online=1 order by order_no asc", $clsSlide->pkey.',title,text,image,link, btn_slide');
$smarty->assign('listSlide',$listSlide);
$smarty->assign('clsSlide',$clsSlide);
?>