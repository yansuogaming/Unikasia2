<?php 
	global $smarty, $mod, $act, $country_id, $city_id, $cat_id,$dbconn,$_LANG_ID,$lang_sql,$blog_id,$blogItem;

	
	$clsBlogCategory = new BlogCategory(); 
	$smarty->assign('clsBlogCategory',$clsBlogCategory);
	$clsBlogDestination = new BlogDestination(); 
	$smarty->assign('clsBlogDestination',$clsBlogDestination);
	$clsBlogExtension = new BlogExtension(); 
	$smarty->assign('clsBlogExtension',$clsBlogExtension);
	$clsCity = new City(); $smarty->assign('clsCity',$clsCity);
	$clsBlog = new Blog(); $smarty->assign('clsBlog',$clsBlog);
	$clsTag = new Tag(); $smarty->assign('clsTag',$clsTag);
	$clsTour = new Tour(); $smarty->assign('clsTour',$clsTour);
	$clsHotel = new Hotel(); $smarty->assign('clsHotel',$clsHotel);
	$clsTagModule = new TagModule(); $smarty->assign('clsTagModule',$clsTagModule);
	$clsPromotion = new Promotion();$smarty->assign('clsPromotion',$clsPromotion); 
	
	$lstCategory = $clsBlogCategory->getAll("is_trash=0 and is_online=1 order by order_no asc", $clsBlogCategory->pkey .", title,slug");

	$smarty->assign('lstCategory',$lstCategory);
	
	/*$lstLatestBlog = $clsBlog->getAll("is_trash=0 and is_approve=1 and is_online=1 order by order_no desc limit 0,20");
	$smarty->assign('lstLatestBlog',$lstLatestBlog);*/
	
	$lstPopularBlog = $clsBlog->getAll("is_trash=0 and is_approve=1 and is_online=1 and num_view > 0 order by num_view desc limit 0,5",$clsBlog->pkey.',slug,title');
	$smarty->assign('lstPopularBlog',$lstPopularBlog);
	
	// Tags
	$listTag = $clsTag->getAll("tag_id IN (SELECT tag_id FROM ".DB_PREFIX."tag_module WHERE 1=1 and type='BLOG')",$clsTag->pkey);
	if(is_array($listTag) && count($listTag) > 0){
		$lstTag = array();
		foreach($listTag as $k => $v){
			$lstTag[] = array(
				'tag_id'	=> $v['tag_id'],
				'number'	=> $clsTagModule->countItem("type='BLOG' and tag_id='".$v['tag_id']."'"),
				'class'		=>	random_tags()
			);
		}
	}
	$smarty->assign('lstTag',$lstTag);
	
	#lst Country
	$SQL01 = "SELECT country_id FROM ".DB_PREFIX."blog_destination WHERE blog_id IN (SELECT blog_id FROM ".DB_PREFIX."blog WHERE 1=1 and lang_id = '$lang_sql') group by country_id";
	
	
	$lstDestinationsBlog=$dbconn->GetAll($SQL01);
	$smarty->assign('lstDestinationsBlog',$lstDestinationsBlog);
	
	$lstTourExtension = $clsBlogExtension->getAll("blog_id = '$blog_id' and table_name='tour' and tour_id IN (SELECT tour_id FROM ".DB_PREFIX."tour WHERE is_trash=0 and is_online=1) order by order_no ASC",$clsBlogExtension->pkey.',tour_id');
	$smarty->assign('lstTourExtension',$lstTourExtension->pkey);
	//$lstCruiseExtension = $clsBlogExtension->getAll("blog_id = '$blog_id' and table_name='cruise' and cruise_id IN (SELECT cruise_id FROM ".DB_PREFIX."cruise WHERE is_trash=0 and is_online=1) order by order_no desc",'cruise_id');
	//$assign_list['lstCruiseExtension']=$lstCruiseExtension; unset($lstCruiseExtension);
	$lstHotelExtension = $clsBlogExtension->getAll("blog_id = '$blog_id' and table_name='hotel' and hotel_id IN (SELECT hotel_id FROM ".DB_PREFIX."hotel WHERE is_trash=0 and is_online=1) order by order_no ASC",'hotel_id');
	$smarty->assign('lstHotelExtension',$lstHotelExtension);
	
	#
	function random_tags(){
		$_array = array('tag_11','tag_12','tag_13','tag_14','tag_16','tag_20','tag_21','tag_24');
		return $_array[array_rand($_array)];
	}
?>