<?

global $core, $smarty, $clsISO, $assign_list;

$assign_list["clsISO"]  =   $clsISO;

	$clsBlog = new Blog(); $assign_list['clsBlog']=$clsBlog;

if (!empty($_GET['slug_blog'])) {

    $id_blog     =   $clsBlog->getBySlug($_GET['slug_blog']);

    $smarty->assign('id_blog', $id_blog);

    $info_blog   =   $clsBlog->getOne($id_blog);

    $smarty->assign('info_blog', $info_blog);

    #

    $url_banner     =   $info_blog['blog_image'];

    $smarty->assign('url_banner', $url_banner);

}


