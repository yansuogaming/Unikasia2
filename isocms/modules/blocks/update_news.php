<?php

global $core, $smarty, $mod, $act;

$clsBlog = new Blog(); $smarty->assign("clsBlog", $clsBlog);
$clsBlogCat = new BlogCategory();  $smarty->assign("clsBlogCat", $clsBlogCat);
$lstBlog = $clsBlog->getAll("1=1 and is_approve=1 order by order_no asc limit 6");

$smarty->assign("lstBlog", $lstBlog);