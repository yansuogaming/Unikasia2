<?php

class Category_Country extends dbBasic
{
	function __construct()
	{
		$this->pkey = "category_country_id";
		$this->tbl = DB_PREFIX . "category_country";
	}
	function getId($cat_id, $country_id)
	{
		$res = $this->getAll("1=1 and cat_id='$cat_id' and country_id='$country_id' limit 0,1");
		return $res[0]['category_country_id'];
	}
	function getMaxOrder()
	{
		$res = $this->getAll("1=1 order by order_no desc");
		return intval($res[0]['order_no']) + 1;
	}
	function getSlug($pvalTable)
	{
		$one = $this->getOne($pvalTable, 'slug');
		return $one['slug'];
	}
	function getBySlug($slug)
	{
		$all = $this->getAll("is_trash=0 and slug='$slug' limit 0,1");
		return $all[0][$this->pkey];
	}
	function checkExitsId($category_country_id)
	{
		$res = $this->getAll("category_country_id = '$category_country_id' LIMIT 0,1");
		return !empty($res) ? 1 : 0;
	}
	function getTitle($pvalTable)
	{
		$one = $this->getOne($pvalTable, 'title');
		return html_entity_decode($one['title']);
	}

	function getMetaDescription($pvalTable)
	{
		global $_LANG_ID;
		$one = $this->getOne($pvalTable, 'intro');
		return html_entity_decode($one['intro']);
	}

	function getIntro($pvalTable)
	{
		$one = $this->getOne($pvalTable, 'intro');
		return html_entity_decode($one['intro']);
	}
	function getIntroMore($pvalTable, $limit = 400, $truncate = true)
	{
		global $dbconn, $core;
		$one = $this->getOne($pvalTable, 'intro');
		$string = $one['intro'];

		if ($truncate == true) {
			if (strlen($string) < $limit) {
				return html_entity_decode($string);
			} else {
				$html = '<div class="clickSeemore"><div class="c_seemore More">';
				$html .= strip_tags(html_entity_decode($this->truncate($string, $limit)));
				$html .= '<a href="javascript:void(0);" class="semoreClick">' . $core->get_Lang('More') . '</a>';
				$html .= '</div>';
				$html .= '<div class="c_seemore Less" style="display:none">';
				$html .= html_entity_decode($string);
				$html .= '<a href="javascript:void(0);" class="LessClick">' . $core->get_Lang('Less') . '</a>';
				$html .= '</div></div>';
				return $html;
			}
		} else {
			return $string;
		}
	}
	function truncate($string, $width, $etc = ' ..')
	{
		$wrapped = explode('$trun$', wordwrap($string, $width, '$trun$', false), 2);
		return $wrapped[0] . (isset($wrapped[1]) ? $etc : '');
	}
	function getContent($pvalTable, $limit = 500, $truncate = true, $one = null)
	{
		global $dbconn, $core;
		if (!isset($one['content'])) {
			$one = $this->getOne($pvalTable, 'content');
		}
		$string = $one['content'];

		if ($truncate == true) {
			if (strlen($string) < $limit) {
				return html_entity_decode($string);
			} else {
				$html = '<div class="clickSeemore"><div class="c_seemore More">';
				$html .= strip_tags(html_entity_decode($this->truncate($string, $limit)));
				$html .= '<a href="javascript:void(0);" class="semoreClick">' . $core->get_Lang('More') . '</a>';
				$html .= '</div>';
				$html .= '<div class="c_seemore Less" style="display:none">';
				$html .= html_entity_decode($string);
				$html .= '<a href="javascript:void(0);" class="LessClick">' . $core->get_Lang('Less') . '</a>';
				$html .= '</div></div>';
				return $html;
			}
		} else {
			return $string;
		}
	}
	function getStripIntro($pvalTable)
	{
		$one = $this->getOne($pvalTable, 'content');
		return html_entity_decode($one['content']);
	}
	function getRegDate($pvalTable)
	{
		$clsISO = new ISO();
		$one = $this->getOne($pvalTable, 'reg_date');
		if (!empty($one['reg_date']))
			return date('D, d/m/Y', $one['reg_date']);
		return '';
	}

	function getImage($pvalTable, $w, $h)
	{
		global $clsISO;
		#
		$oneTable = $this->getOne($pvalTable, "image");
		if ($oneTable['image'] != '') {
			$image = $oneTable['image'];
			return $clsISO->tripslashImage($image, $w, $h);
			$noimage = URL_IMAGES . '/noimage.png';
			return '/files/thumb/' . $w . '/' . $h . '/' . $clsISO->parseImageURL($noimage);
		}
		$noimage = URL_IMAGES . '/noimage.png';
		return '/files/thumb/' . $w . '/' . $h . '/' . $clsISO->parseImageURL($noimage);
	}
	function getImageUrl($pvalTable)
	{
		global $clsISO;
		$oneTable = $this->getOne($pvalTable, "image");
		$url_image = $oneTable['image'];
		return $clsISO->tripslashUrl($url_image);
	}

	function getBannerImage($pvalTable, $w, $h)
	{
		global $clsISO;
		$oneTable = $this->getOne($pvalTable, "image_banner");
		if ($oneTable['image_banner'] != '') {
			$image_banner = $oneTable['image_banner'];
			return $clsISO->tripslashImage($image, $w, $h);
			$noimage = URL_IMAGES . '/noimage.png';
			return '/files/thumb/' . $w . '/' . $h . '/' . $clsISO->parseImageURL($noimage);
		}
		$noimage = URL_IMAGES . '/noimage.png';
		return '/files/thumb/' . $w . '/' . $h . '/' . $clsISO->parseImageURL($noimage);
	}
	function getBannerLink($pval)
	{
		$oneTable = $this->getOne($pval, "link_banner");
		return $oneTable['link_banner'];
	}

	function getBannerUrl($pval)
	{
		$oneTable = $this->getOne($pval, "image_banner");
		$url_image = $oneTable['image_banner'];
		return $clsISO->tripslashUrl($url_image);
	}
	function getIntroBanner($pvalTable)
	{
		$one = $this->getOne($pvalTable, 'intro_banner');
		return html_entity_decode($one['intro_banner']);
	}
	function getLink($pvalTable)
	{
		global $extLang, $_LANG_ID;
		#
		$clsCountry = new Country();
		$clsCity = new City();
		$clsGuideCat = new GuideCat();

		$oneTable = $this->getOne($pvalTable, 'country_id,city_id');
		$country_id = $oneTable['country_id'];
		$city_id = $oneTable['city_id'];
		$info_type = 'TEXT';

		if ($info_type == 'TEXT') {
			//$link = '/'.$clsCountry->getSlug($country_id).'-travel-guide';
			//$link = '/travel-guide';
			$link = '/destinations';
			$link .= '/' . $this->getSlug($pvalTable) . '.html';
			return $link;
		} else {
			switch ($internal_link) {
				case 'HOTEL_LIST':
					return $clsCountry->getLinkHotel($country_id);
					break;
				case 'TOUR_LIST':
					return $clsCountry->getLinkTour($country_id);
					break;
				case 'USEFUL_INFO':
					if ($type == 'country')
						return $clsCountry->getLinkDestinationTravel($country_id);
					return '/';
					break;
				case 'PLACES_VISIT':
					return $clsCountry->getLinkPointTravel($country_id);
					break;
				case 'CITY_TOP':
					return $clsCountry->getLinkDestinationCity($country_id);
					break;
				default:
					return '/';
					break;
			}
		}
	}
	function getLink2($pvalTable)
	{
		global $_LANG_ID, $clsISO;
		#
		$clsCountry			= 	new Country();
		$clsTourCategory 	= 	new TourCategory();
		#
		$oneTable 		= 	$this->getOne($pvalTable, 'country_id,cat_id');
		#
		$country_id 	= 	$oneTable['country_id'];
		$country_slug	=	$clsCountry->getSlug($country_id);
		#
		$cat_id 		= 	$oneTable['cat_id'];
		$cat_slug		=	$clsTourCategory->getSlug($cat_id);
		#
		if (!empty($country_slug) && !empty($cat_slug)) {
			return PCMS_URL . $_LANG_ID . '/tours/' . $cat_slug . '-c' . $cat_id . '/' . $country_slug;
		}
		return PCMS_URL;
	}
	function getNAV($category_country_id = 0)
	{
		return '';
	}

	function getChild($category_country_id)
	{
		$ret = $this->getAll("is_trash=0 and parent_id='$category_country_id' order by order_no asc");
		return $ret;
	}
	function countChild($category_country_id)
	{
		global $_LANG_ID;
		$one = $this->getAll("is_trash=0 and parent_id='$category_country_id'");
		if ($one[0]['category_country_id'] != '')
			return count($one);
		return 0;
	}
	function getListCatCountry($country_id)
	{
		$listCatCountry = $this->getAll("is_trash=0 and is_online=1 and country_id='$country_id' order by order_no ASC", $this->pkey . ",cat_id");
		return $listCatCountry;
	}
	function makeOption($cat_id = 0, $country_id = 0, $city_id = 0, $level = 0, $type = '', $arrHtml = array())
	{
		global $dbconn, $_LANG_ID;
		if (!$arrHtml) {
			$arrHtml = array();
		}
		$where = "is_trash=0 and country_id='$country_id' and parent_id='$cat_id'";
		if (intval($city_id) > 0) {
			$where .= " and city_id='$city_id'";
		}
		if (!empty($type)) {
			$where .= " and type='$type'";
		}
		$where .= " order by order_no desc";
		$arrListCat = $dbconn->GetAll("SELECT " . $this->pkey . " FROM " . $this->tbl . " WHERE " . $where);
		if (is_array($arrListCat) && count($arrListCat) > 0) {
			foreach ($arrListCat as $k => $v) {
				$value = $v[$this->pkey];
				$option = str_repeat("|__", $level) . $this->getTitle($v[$this->pkey]);
				$arrHtml[$value] = $option;
				$arrHtml = $this->makeOption($v[$this->pkey], $country_id, $city_id, $level + 1, $type, $arrHtml);
			}
		}
		unset($arrListCat);
		return $arrHtml;
	}
	function getListOption($parent_id = 0, $country_id = 0, $city_id = 0, $selected = '0', $type = '')
	{
		$clsCountry = new Country();
		$clsCity = new City();

		$html = '<option value="0">-- Danh mục gốc </option>';
		if (intval($country_id) > 0) {
			$html = '<option value="' . $parent_id . '">-- ' . $clsCountry->getTitle($country_id) . ' </option>';
		}
		if (intval($city_id) > 0) {
			$html = '<option value="' . $parent_id . '">-- ' . $clsCity->getTitle($city_id) . ' </option>';
		}
		#
		$arrOptionsCategory = array();
		$arrOptionsCategory = $this->makeOption($parent_id, $country_id, $city_id, 0, $type);
		if (is_array($arrOptionsCategory) && count($arrOptionsCategory) > 0) {
			foreach ($arrOptionsCategory as $k => $v) {
				$html .= '<option value="' . $k . '" ' . ($k == $selected ? 'selected="selected"' : '') . '>|__' . $v . '</option>';
			}
		}
		unset($arrOptionsCategory);
		return $html;
	}
	function getRootId($category_country_id)
	{
		$one = $this->getOne($category_country_id, "parent_id");
		$parent_id = $one['parent_id'];
		if ($parent_id == 0) {
			return $category_country_id;
		} else {
			return $this->getRootId($parent_id);
		}
	}
	function getNavChild($category_country_id, $country_id, $city_id = 0, $type = 'country', $m)
	{
		global $core;
		$temp = $this->getNAV($category_country_id);
		$link = '<a>&raquo;</a><a href="' . PCMS_URL . '/?admin&mod=' . $m . '&country_id=' . $country_id . ($city_id > 0 ? '&city_id=' . $city_id : '') . '&type=' . $core->encryptID($type) . '&parent_id=0">Thông tin điểm đến</a>';
		for ($i = 0; $i < count($temp); $i++) {
			$tmp = $this->getTitle($temp[$i]);
			$link .= ($i == count($temp)) ? '' : '<a>&raquo;</a>';
			$link .= ' <a href="' . PCMS_URL . '/?mod=' . $m . '&country_id=' . $country_id . ($city_id > 0 ? '&city_id=' . $city_id : '') . '&type=' . $core->encryptID($type) . '&parent_id=' . $temp[$i] . '">' . $tmp . ' </a>';
		}
		if ($category_country_id == 0)
			return '<a>&raquo;</a><a href="' . PCMS_URL . '/?admin&mod=' . $m . '&country_id=' . $country_id . ($city_id > 0 ? '&city_id=' . $city_id : '') . '&type=' . $core->encryptID($type) . '&parent_id=0">Thông tin điểm đến</a>';
		return $link;
	}
	function getListItem($parent_id, $country_id, $limit = '')
	{
		$limit = !empty($limit) ? 'limit ' . $limit : '';
		$res = $this->getAll("is_trash=0 and parent_id = '$parent_id' and country_id = '$country_id' order by order_no desc " . $limit, $this->pkey);
		return !empty($res) ? $res : '';
	}
	function countGuideGlobal($parent_id = 0, $city_id = 0, $country_id = 0)
	{
		$where = "is_trash=0 and is_online=1";
		if (intval($parent_id) != 0) {
			$where .= " and (parent_id = '" . $parent_id . "' or list_parent_id like '%|" . $parent_id . "|%')";
		}
		if (intval($city_id) != 0) {
			$where .= " and (city_id = '" . $city_id . "' or list_city_id like '%|" . $city_id . "|%')";
		}
		if (intval($country_id) != 0) {
			$where .= " and country_id='$country_id'";
		}
		return $this->getAll($where) ? count($this->getAll($where)) : 0;
	}
	function doDelete($category_country_id)
	{
		$clsISO = new ISO();
		#
		$image = $this->getOneField("image", $category_country_id);
		if (trim($image) != '') {
			if ($clsISO->checkContainer($image, DOMAIN_NAME)) {
				$image = $_SERVER['DOCUMENT_ROOT'] . $clsISO->parseImageURL($image, false);
				$clsISO->deleteFile($image);
				$image = $_SERVER['DOCUMENT_ROOT'] . $clsISO->parseImageURL($image, false);
				$clsISO->deleteFile($image);
			}
		}
		#
		$this->deleteOne($category_country_id);
		return 1;
	}
	function getBannerTitle($pvalTable)
	{
		$one = $this->getOne($pvalTable, 'banner_title');
		return html_entity_decode($one['banner_title']);
	}
	function getBannerImage2($pvalTable, $w, $h)
	{
		global $clsISO;
		#
		$oneTable = $this->getOne($pvalTable, "banner_image");
		if ($oneTable['banner_image'] != '') {
			$banner_image = $oneTable['banner_image'];
			return $clsISO->tripslashImage($banner_image, $w, $h);
			$noimage = URL_IMAGES . '/noimage.png';
			return '/files/thumb/' . $w . '/' . $h . '/' . $clsISO->parseImageURL($noimage);
		}
		$noimage = URL_IMAGES . '/noimage.png';
		return '/files/thumb/' . $w . '/' . $h . '/' . $clsISO->parseImageURL($noimage);
	}
	function getBannerLink2($pvalTable)
	{
		$one = $this->getOne($pvalTable, 'banner_link');
		return html_entity_decode($one['banner_link']);
	}
	function getBannerDescription($pvalTable)
	{
		$one = $this->getOne($pvalTable, 'banner_description');
		return html_entity_decode($one['banner_description']);
	}
	function getImageVertical($pvalTable, $w, $h)
	{
		global $clsISO;
		#
		$oneTable = $this->getOne($pvalTable, 'image_vertical');
		if ($oneTable['image_vertical'] != '') {
			$image = $oneTable['image_vertical'];
			return $clsISO->tripslashImage($image, $w, $h);
			$noimage = URL_IMAGES . '/noimage.png';
			return '/files/thumb/' . $w . '/' . $h . '/' . $clsISO->parseImageURL($noimage);
		}
		$noimage = URL_IMAGES . '/noimage.png';
		return '/files/thumb/' . $w . '/' . $h . '/' . $clsISO->parseImageURL($noimage);
	}
	function getImageHorizontal($pvalTable, $w, $h)
	{
		global $clsISO;
		#
		$oneTable = $this->getOne($pvalTable, 'image_horizontal');
		if ($oneTable['image_horizontal'] != '') {
			$image = $oneTable['image_horizontal'];
			return $clsISO->tripslashImage($image, $w, $h);
			$noimage = URL_IMAGES . '/noimage.png';
			return '/files/thumb/' . $w . '/' . $h . '/' . $clsISO->parseImageURL($noimage);
		}
		$noimage = URL_IMAGES . '/noimage.png';
		return '/files/thumb/' . $w . '/' . $h . '/' . $clsISO->parseImageURL($noimage);
	}
	function getIntroTitle($pvalTable)
	{
		$one = $this->getOne($pvalTable, 'intro_title');
		return html_entity_decode($one['intro_title']);
	}
	function getIntroDescription($pvalTable)
	{
		$one = $this->getOne($pvalTable, 'intro_description');
		return html_entity_decode($one['intro_description']);
	}
	function makeSelectboxOption($cat = 0, $country_id = 0)
	{
		global $core, $dbconn, $clsISO;
		#
		// $clsISO->dump($cat);
		// // $clsISO->dump($country_id);
		// die;

		$clsTourCategory	=	new TourCategory;
		$cond	= 	"is_trash = 0 AND is_online = 1";
		#
		$html	=	'';
		if (intval($country_id) != 0) {
			$cond .= " AND country_id = " . $country_id;
			#
			$cond	.= 	" ORDER BY order_no ASC";
			#
			$res	= 	$this->getAll($cond, "{$this->pkey}, country_id, cat_id");
			#
			$new_arr	=	[];
			foreach ($res as $v1) {
				$new_arr[]	=	$v1['cat_id'];
			}
			$new_str	=	implode(", ", $new_arr);
			$res2 		= 	$clsTourCategory->getAll("is_trash=0 and is_online=1 AND tourcat_id IN ($new_str) ORDER BY order_no ASC", "tourcat_id, title");
			#
			if (!empty($res2)) {
				$html	.= 	'<option value="0">-- ' . $core->get_Lang('Travel style') . ' --</option>';
				foreach ($res2 as $item) {
					$selected	= 	($cat == $item['tourcat_id']) ? ' selected="selected"' : '';
					$html	.=	'<option value="' . $item['tourcat_id'] . '"' . $selected . '>' . $item['title'] . '</option>';
				}
			}
			return $html;
		} else {
			return $html;
		}
	}
}
