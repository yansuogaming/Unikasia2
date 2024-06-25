<?php
class Country extends dbBasic
{
    function __construct()
    {
        $this->pkey = "country_id";
        $this->tbl = DB_PREFIX . "country";
    }
    function getMaxOrder()
    {
        $res = $this->getAll("1=1 order by order_no desc", $this->pkey . ",order_no");
        return intval($res[0]['order_no']) + 1;
    }
    function getId($country_id)
    {
        $one = $this->getOne($country_id, 'country_id');
        return $one['country_id'];
    }
    function getTitle($country_id, $oDataTable = null)
    {
        if (!isset($oDataTable['title'])) {
            $oDataTable = $this->getOne($country_id, 'title');
        }
        return $oDataTable['title'];
    }
    function getSlug($country_id, $one = null)
    {
        if (!isset($one['slug'])) {
            $one = $this->getOne($country_id, 'slug');
        }
        return $one['slug'];
    }
    function getBySlug($slug)
    {
        $res = $this->getAll("is_trash=0 and slug = '" . $slug . "'", $this->pkey);
        return $res[0]['country_id'];
    }
    function checkSlug($slug)
    {
        $res = $this->getAll("slug = '%" . $slug . "%'", $this->pkey);
        if (is_array($res) && count($res) > 0)
            return 0;
        return 1;
    }
    function checkExitsId($country_id)
    {
        $res = $this->getAll("country_id = '$country_id' LIMIT 0,1");
        return !empty($res) ? 1 : 0;
    }
    function getListCity($country_id)
    {
        global $_LANG_ID;
        $clsCity = new City();
        $res = $clsCity->getAll("is_trash=0 and is_online=1 and country_id = '$country_id' order by order_no asc", $clsCity->pkey);
        return $res;
    }
    function getMetaDescription($pvalTable, $one = null)
    {
        global $_LANG_ID;
        if (!isset($one['intro'])) {
            $one = $this->getOne($pvalTable, 'intro');
        }
        return html_entity_decode($one['intro']);
    }
    function getIntro($country_id, $type = '', $is_sort = false, $one = null)
    {
        global $extLang, $_LANG_ID;
        switch ($type) {
            case 'Hotel':
                if (!isset($one['intro_hotel'])) {
                    $one = $this->getOne($country_id, 'intro_hotel');
                }
                return html_entity_decode($one['intro_hotel']);
                break;
            case 'Guide':
                if (!isset($one['intro_guide'])) {
                    $one = $this->getOne($country_id, 'intro_guide');
                }
                return html_entity_decode($one['intro_guide']);
                break;
            case 'Banner':
                if (!isset($one['intro_banner'])) {
                    $one = $this->getOne($country_id, 'intro_banner');
                }
                return html_entity_decode($one['intro_banner']);
                break;
            default:
                if (!isset($one['intro'])) {
                    $one = $this->getOne($country_id, 'intro');
                }
                return html_entity_decode($one['intro']);
        }
    }
    function getContent($country_id, $one = null)
    {
        if (!isset($one['content'])) {
            $one = $this->getOne($country_id, 'content');
        }
        return html_entity_decode($one['content']);
    }
    function getOverviewTitle($country_id, $one = null)
    {
        if (!isset($one['overview_title'])) {
            $one = $this->getOne($country_id, 'overview_title');
        }
        return html_entity_decode($one['overview_title']);
    }
    function getOverviewDescription($country_id, $one = null)
    {
        if (!isset($one['overview_description'])) {
            $one = $this->getOne($country_id, 'overview_description');
        }
        return html_entity_decode($one['overview_description']);
    }
    function getTourTitle($country_id, $one = null)
    {
        if (!isset($one['tour_title'])) {
            $one = $this->getOne($country_id, 'tour_title');
        }
        return html_entity_decode($one['tour_title']);
    }
    function getTourDescription($country_id, $one = null)
    {
        if (!isset($one['tour_description'])) {
            $one = $this->getOne($country_id, 'tour_description');
        }
        return html_entity_decode($one['tour_description']);
    }
    function getImageTour($pvalTable, $w, $h)
    {
        global $clsISO;
        $oneTable = $this->getOne($pvalTable, 'tour_image');
        if ($oneTable['tour_image'] != '') {
            $image = $oneTable['tour_image'];
            return $clsISO->tripslashImage($image, $w, $h);
            $noimage = URL_IMAGES . '/noimage.png';
            return '/files/thumb/' . $w . '/' . $h . '/' . $clsISO->parseImageURL($noimage);
        }
        $noimage = URL_IMAGES . '/noimage.png';
        return '/files/thumb/' . $w . '/' . $h . '/' . $clsISO->parseImageURL($noimage);
    }
    function getImageWhy($pvalTable, $w, $h)
    {
        global $clsISO;
        $oneTable = $this->getOne($pvalTable, 'why_image');
        if ($oneTable['why_image'] != '') {
            $image = $oneTable['why_image'];
            return $clsISO->tripslashImage($image, $w, $h);
            $noimage = URL_IMAGES . '/noimage.png';
            return '/files/thumb/' . $w . '/' . $h . '/' . $clsISO->parseImageURL($noimage);
        }
        $noimage = URL_IMAGES . '/noimage.png';
        return '/files/thumb/' . $w . '/' . $h . '/' . $clsISO->parseImageURL($noimage);
    }
    function getCruiseBannerImage($pvalTable, $w, $h)
    {
        global $clsISO;
        $oneTable = $this->getOne($pvalTable, 'cruise_banner_image');
        if ($oneTable['cruise_banner_image'] != '') {
            $image = $oneTable['cruise_banner_image'];
            return $clsISO->tripslashImage($image, $w, $h);
            $noimage = URL_IMAGES . '/noimage.png';
            return '/files/thumb/' . $w . '/' . $h . '/' . $clsISO->parseImageURL($noimage);
        }
        $noimage = URL_IMAGES . '/noimage.png';
        return '/files/thumb/' . $w . '/' . $h . '/' . $clsISO->parseImageURL($noimage);
    }
    function getCruiseBannerTitle($country_id, $oDataTable = null)
    {
        if (!isset($oDataTable['cruise_banner_title'])) {
            $oDataTable = $this->getOne($country_id, 'cruise_banner_title');
        }
        return $oDataTable['cruise_banner_title'];
    }
    function getCruiseBannerDescription($country_id, $one = null)
    {
        if (!isset($one['cruise_banner_description'])) {
            $one = $this->getOne($country_id, 'cruise_banner_description');
        }
        return html_entity_decode($one['cruise_banner_description']);
    }

    function getTopAttBannerImage($pvalTable, $w, $h)
    {
        global $clsISO;
        $oneTable = $this->getOne($pvalTable, 'topatt_banner_image');
        if ($oneTable['topatt_banner_image'] != '') {
            $image = $oneTable['topatt_banner_image'];
            return $clsISO->tripslashImage($image, $w, $h);
            $noimage = URL_IMAGES . '/noimage.png';
            return '/files/thumb/' . $w . '/' . $h . '/' . $clsISO->parseImageURL($noimage);
        }
        $noimage = URL_IMAGES . '/noimage.png';
        return '/files/thumb/' . $w . '/' . $h . '/' . $clsISO->parseImageURL($noimage);
    }
    function getTopAttBannerTitle($country_id, $oDataTable = null)
    {
        if (!isset($oDataTable['topatt_banner_title'])) {
            $oDataTable = $this->getOne($country_id, 'topatt_banner_title');
        }
        return $oDataTable['topatt_banner_title'];
    }
    function getTopAttBannerDescription($country_id, $one = null)
    {
        if (!isset($one['topatt_banner_description'])) {
            $one = $this->getOne($country_id, 'topatt_banner_description');
        }
        return html_entity_decode($one['topatt_banner_description']);
    }
    function getImageBannerCommon($pvalTable, $w, $h)
    {
        global $clsISO;
        $oneTable = $this->getOne($pvalTable, 'common_banner');
        if ($oneTable['common_banner'] != '') {
            $image = $oneTable['common_banner'];
            return $clsISO->tripslashImage($image, $w, $h);
            $noimage = URL_IMAGES . '/noimage.png';
            return '/files/thumb/' . $w . '/' . $h . '/' . $clsISO->parseImageURL($noimage);
        }
        $noimage = URL_IMAGES . '/noimage.png';
        return '/files/thumb/' . $w . '/' . $h . '/' . $clsISO->parseImageURL($noimage);
    }
    function getIntroBannerCommon($country_id, $one = null)
    {
        if (!isset($one['common_intro'])) {
            $one = $this->getOne($country_id, 'common_intro');
        }
        return html_entity_decode($one['common_intro']);
    }
    function getHeaderDescription($country_id, $one = null)
    {
        if (!isset($one['header_description'])) {
            $one = $this->getOne($country_id, 'header_description');
        }
        return html_entity_decode($one['header_description']);
    }
    function getStripIntro($country_id, $one = null)
    {
        if (!isset($one['intro']) && !isset($one['content'])) {
            $one = $this->getOne($country_id, 'intro,content');
        }
        if (!empty($one['intro']))
            return strip_tags(html_entity_decode($one['intro']));
        return strip_tags(html_entity_decode($one['content']));
    }
    function getBlogTitle($country_id, $oDataTable = null)
    {
        if (!isset($oDataTable['blog_title'])) {
            $oDataTable = $this->getOne($country_id, 'blog_title');
        }
        return $oDataTable['blog_title'];
    }
    function getBlogDescription($country_id, $oDataTable = null)
    {
        if (!isset($oDataTable['blog_description'])) {
            $oDataTable = $this->getOne($country_id, 'blog_description');
        }
        return $oDataTable['blog_description'];
    }
    function getBlogImage($pvalTable, $w, $h)
    {
        global $clsISO;
        $oneTable = $this->getOne($pvalTable, "blog_image");
        if ($oneTable['blog_image'] != '') {
            $image = $oneTable['blog_image'];
            return $clsISO->tripslashImage($image, $w, $h);
            $noimage = URL_IMAGES . '/noimage.png';
            return '/files/thumb/' . $w . '/' . $h . '/' . $clsISO->parseImageURL($noimage);
        }
        $noimage = URL_IMAGES . '/noimage.png';
        return '/files/thumb/' . $w . '/' . $h . '/' . $clsISO->parseImageURL($noimage);
    }
    function getImage($pvalTable, $w, $h)
    {
        global $clsISO;
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
    function getImageSub($pvalTable, $w, $h)
    {
        global $clsISO;
        $oneTable = $this->getOne($pvalTable, 'image_sub');
        if ($oneTable['image_sub'] != '') {
            $image = $oneTable['image_sub'];
            return $clsISO->tripslashImage($image, $w, $h);
            $noimage = URL_IMAGES . '/noimage.png';
            return '/files/thumb/' . $w . '/' . $h . '/' . $clsISO->parseImageURL($noimage);
        }
        $noimage = URL_IMAGES . '/noimage.png';
        return '/files/thumb/' . $w . '/' . $h . '/' . $clsISO->parseImageURL($noimage);
    }
    function getUrlImage($pvalTable)
    {
        global $clsISO;
        $oneTable = $this->getOne($pvalTable, "image");
        $url_image = $oneTable['image'];
        return $clsISO->tripslashUrl($url_image);
    }
    function getImageBannerHotel($pvalTable, $w, $h, $oneTable = null)
    {
        global $clsISO;
        #
        if (!isset($oneTable['image_hotel'])) {
            $oneTable = $this->getOne($pvalTable, 'image_hotel');
        }
        if ($oneTable['image_hotel'] != '') {
            $image = $oneTable['image_hotel'];
            return $clsISO->tripslashImage($image, $w, $h);
        }
        $noimage = URL_IMAGES . '/noimage.png';
        return '/files/thumb/' . $w . '/' . $h . '/' . $clsISO->parseImageURL($noimage);
    }
    function getBannerDescription($pvalTable, $w, $h)
    {
        global $clsISO;
        $oneTable = $this->getOne($pvalTable, 'header_background');
        if ($oneTable['header_background'] != '') {
            $image = $oneTable['header_background'];
            return $clsISO->tripslashImage($image, $w, $h);
        }
        $noimage = URL_IMAGES . '/noimage.png';
        return '/files/thumb/' . $w . '/' . $h . '/' . $clsISO->parseImageURL($noimage);
    }
    function getImageHome($pvalTable, $w, $h)
    {
        global $clsISO;
        $oneTable = $this->getOne($pvalTable, 'imagehome');
        if ($oneTable['imagehome'] != '') {
            $image = $oneTable['imagehome'];
            return $clsISO->tripslashImage($image, $w, $h);
        }
        $noimage = URL_IMAGES . '/noimage.png';
        return '/files/thumb/' . $w . '/' . $h . '/' . $clsISO->parseImageURL($noimage);
    }
    function getImageUrl($pval)
    {
        global $clsISO;
        $oneTable = $this->getOne($pval, 'image');
        $url_image = $oneTable['image'];
        return $clsISO->tripslashUrl($url_image);
    }
    function getBannerUrl($pval)
    {
        global $clsISO;
        $oneTable = $this->getOne($pval, 'link_banner');
        $url_image = $oneTable['link_banner'];
        return $clsISO->tripslashUrl($url_image);
    }
    function getBanner($pvalTable, $w, $h, $oneTable = null)
    {
        global $clsISO;
        if (!isset($oneTable['banner'])) {
            $oneTable = $this->getOne($pvalTable, 'banner');
        }
        if ($oneTable['banner'] != '') {
            $image = $oneTable['banner'];
            return $clsISO->tripslashImage($image, $w, $h);
        }
        $noimage = URL_IMAGES . '/noimage.png';
        return '/files/thumb/' . $w . '/' . $h . '/' . $clsISO->parseImageURL($noimage);
    }
    function getBannerImage($pvalTable, $w, $h)
    {
        global $clsISO;
        $oneTable = $this->getOne($pvalTable, 'banner');
        if ($oneTable['banner'] != '') {
            $banner = $oneTable['banner'];
            return $clsISO->tripslashImage($image, $w, $h);
        }
        $noimage = URL_IMAGES . '/noimage.png';
        return '/files/thumb/' . $w . '/' . $h . '/' . $clsISO->parseImageURL($noimage);
    }
    function getLinkVideoTeaser($pval)
    {
        $oneTable = $this->getOne($pval, 'video_teaser');
        return $oneTable['video_teaser'];
    }
    // Get Link Site
    function getLink($country_id, $type = '', $oneTable = null)
    {
        global $extLang, $_LANG_ID, $clsISO;
        if (!isset($oneTable['slug'])) {
            $oneTable = $this->getOne($country_id, 'slug');
        }
        $slug = $oneTable['slug'];
        $type = trim($type);
        switch ($type) {
            case 'Attraction':
                return $extLang . '/' . $slug . '-attractions';
                break;
            case 'Travel':
                return $extLang . '/' . $slug . '-travel-tips';
                break;
            case 'Hotel':
                if ($_LANG_ID == 'vn')
                    return $extLang . '/khach-san/' . $slug;
                return $extLang . '/stay/' . $slug;
                break;
            case 'Blog':
                return $extLang . '/blog/' . $slug;
                break;
            case 'Map':
                return $extLang . '/' . $slug . '-maps';
                break;
            case 'tour':
                return $extLang . '/tour/' . $slug;
                break;
            case 'City':
                return $extLang . '/' . $slug . '-destinations/cities';
                break;
            case 'Guide':
                return $extLang . '/' . $slug . '-travel-guide';
                break;
            case 'Cruise':
                return '/' . $_LANG_ID . '/cruise/' . $slug . '/';
                break;
            default:
                if ($_LANG_ID == 'vn')
                    return $this->getLinkOutbound($country_id, $oneTable);
                return PCMS_URL . $_LANG_ID . '/destinations/' . $slug;
        }
    }
    function getLinkOutbound($pvalTable, $oneTable = null)
    {
        global $core, $_LANG_ID, $extLang;
        if (!isset($oneTable['slug'])) {
            $oneTable = $this->getOne($pvalTable, 'slug');
        }
        $slug = $oneTable['slug'];
        if ($pvalTable != 4) {
            if ($_LANG_ID == 'vn')
                return $extLang . '/du-lich-nuoc-ngoai/du-lich-' . $slug;
            return $extLang . '/destinations/' . $slug;
        }
    }
    function countNumberCity($country_id)
    {
        $clsCity = new City();
        $res = $clsCity->getAll("is_trash='0' and country_id='$country_id'", $clsCity->pkey);
        return $res ? count($res) : 0;
    }
    function countNumberRegion($country_id)
    {
        $clsRegion = new Region();
        $res = $clsRegion->getAll("is_trash='0' and is_online=1 and country_id='$country_id'", $clsRegion->pkey);
        return $res ? count($res) : 0;
    }
    function countNumberTour($country_id)
    {
        $clsTour = new Tour();
        $lstItem = $clsTour->getAll("is_trash=0 and is_online=1 and tour_id IN (SELECT tour_id FROM default_tour_destination WHERE country_id = '" . $country_id . "')", $clsTour->pkey);
        return $lstItem ? count($lstItem) : 0;
    }
    function getCountryHaveTour($arrCountryId, $isCountry = false)
    {
        global $dbconn, $_LANG_ID;
        $clsTour = new Tour();
        $strCountryId = implode(',', $arrCountryId);
        if (!$isCountry) {
            $cond = " NOT IN (" . $strCountryId . ")";
        } else {
            $cond = " IN (" . $strCountryId . ")";
        }
        $sql = "SELECT tbl_country.country_id,tbl_country.title,tbl_country.slug
			FROM " . DB_PREFIX . "tour as tbl_tour
			RIGHT JOIN " . DB_PREFIX . "tour_destination as tbl_tour_des ON tbl_tour.tour_id = tbl_tour_des.tour_id
			RIGHT JOIN " . DB_PREFIX . "country as tbl_country ON tbl_tour_des.country_id = tbl_country.country_id
			WHERE tbl_tour.lang_id='" . $_LANG_ID . "' and tbl_tour.is_trash=0 and tbl_tour.is_online=1 and tbl_country.is_trash=0 and tbl_country.is_online=1 and tbl_tour_des.country_id " . $cond . "
			GROUP BY tbl_tour_des.country_id
			ORDER BY tbl_country.order_no ASC";
        $lstItem = $dbconn->getAll($sql);
        return $lstItem;
    }
    function countNumberHotel($country_id)
    {
        global $clsISO, $package_id;
        if ($clsISO->getCheckActiveModulePackage($package_id, 'hotel', 'default', 'default')) {
            $clsHotel = new Hotel();
            $lstItem = $clsHotel->getAll("is_trash=0 and is_online=1 and country_id = '" . $country_id . "'", $clsHotel->pkey);
            return $lstItem ? count($lstItem) : 0;
        }
        return 0;
    }
    function countNumberPlaceToGo($country_id)
    {
        global $_LANG_ID;
        if ($_LANG_ID == 'en') {
            $place_to_go_id = 15;
        } elseif ($_LANG_ID == 'fr') {
            $place_to_go_id = 5;
        } elseif ($_LANG_ID == 'es') {
            $place_to_go_id = 20;
        } else {
            $place_to_go_id = 3;
        }
        $clsGuide = new Guide();
        $lstItem = $clsGuide->getAll("is_trash=0 and is_online=1 and country_id='$country_id' and cat_id='$place_to_go_id'", $clsGuide->pkey);
        return $lstItem ? count($lstItem) : 0;
    }
    function countNumberArea($country_id)
    {
        $clsGuideArea2 = new GuideArea2();
        $lstGuideArea2 = $clsGuideArea2->getAll("country_id = '$country_id' order by order_no desc", $clsGuideArea2->pkey . ',area_id');
        $tmp = array();
        foreach ($lstGuideArea2 as $key => $value) {
            if ($value['area_id'])
                $tmp[] = $value['area_id'];
        }
        return count(array_unique($tmp));
    }
    function countNumberDraftTour($country_id)
    {
        $clsDraftTour = new DraftTour();
        $lstItem = $clsDraftTour->getAll("list_country_id like '%|" . $country_id . "|%'", $clsDraftTour->pkey);
        return $lstItem ? count($lstItem) : 0;
    }
    function countNumberTour2($cat_id, $country_id)
    {
        $clsTour = new Tour();
        $lstItem = $clsTour->getAll("is_trash=0 and list_cat_id like '%" . $cat_id . "%' and tour_id in (SELECT tour_id from default_tour_destination where country_id = '" . $country_id . "')", $clsTour->pkey);
        return $lstItem ? count($lstItem) : 0;
    }
    function countTopByTour($country_id)
    {
        $clsCity = new City();
        $all = $clsCity->getAll("is_trash=0 and country_id = '$country_id' and is_top=1", $clsCity->pkey);
        return $all ? count($all) : 0;
    }
    function getCity($country_id)
    {
        $clsCity = new City();
        $res = $clsCity->getAll("is_trash=0 and country_id='$country_id'", $clsCity->pkey);
        return $res;
    }
    function makeSelectboxOption($country_id = 0, $continent_id = 0)
    {
        global $core, $dbconn, $clsISO;
        #
        $cond = "is_trash=0 and is_online=1";
        if (intval($continent_id) != 0) {
            $cond .= " AND continent_id=" . $continent_id;
        }
        $cond .= " ORDER BY order_no ASC";
        #
        $res = $this->getAll($cond, "{$this->pkey},title");
        $html = '<option value="0">-- ' . $core->get_Lang('Country') . ' --</option>';
        if (!empty($res)) {
            foreach ($res as $item) {
                $title = $this->getTitle($item[$this->pkey], $item);
                $selected = ($country_id == $item[$this->pkey]) ? ' selected="selected"' : '';
                $html .= '<option title="' . $title . '" value="' . $item[$this->pkey] . '"' . $selected . '>' . $title . '</option>';
            }
        }
        return $html;
    }
    function makeSelectHotelOption($country_id = 0, $continent_id = 0)
    {
        global $core, $dbconn;
        $clsHotel = new Hotel();
        $cond = "{$this->tbl}.is_trash=0 and {$this->tbl}.is_online=1 and {$clsHotel->tbl}.is_trash=0 and {$clsHotel->tbl}.is_online=1";
        if ((int)$continent_id > 0) {
            $cond .= " AND {$this->tbl}.continent_id='{$continent_id}'";
        }
        $res = $this->getAllOptimize("{$cond} order by {$this->tbl}.order_no ASC", "{$clsHotel->tbl} ON {$clsHotel->tbl}.country_id={$this->tbl}.country_id", "DISTINCT({$this->tbl}.country_id),{$this->tbl}.title");
        $html = '<option value="0">-- ' . $core->get_Lang('Country') . ' --</option>';
        if (!empty($res)) {
            foreach ($res as $item) {
                $title = $this->getTitle($item[$this->pkey], $item);
                $selected = ($country_id == $item[$this->pkey]) ? ' selected="selected"' : '';
                $html .= '<option title="' . $title . '" value="' . $item[$this->pkey] . '"' . $selected . '>' . $title . '</option>';
            }
        }
        return $html;
    }
    function getSelectByCountry($selected = '', $is_prefix = true)
    {
        global $core;
        #
        $res = $this->getAll("is_trash=0 and is_online=1 order by order_no asc", $this->pkey . ',title');
        $html = !$is_prefix ? '' : '<option value="">-- ' . $core->get_Lang('Select destination') . ' --</option>';
        if (is_array($res) && count($res) > 0) {
            foreach ($res as $k => $v) {
                $selected_index = ($selected == $v[$this->pkey]) ? 'selected="selected"' : '';
                $html .= '<option value="' . $v[$this->pkey] . '" ' . $selected_index . '>' . $this->getTitle($v[$this->pkey], $v) . '</option>';
            }
        }
        unset($res);
        return $html;
    }
    function getLinkDetail($country_id, $type = '', $oneTable = null)
    {
        global $extLang, $_LANG_ID, $clsISO;
        if (!isset($oneTable['slug'])) {
            $oneTable = $this->getOne($country_id, 'slug');
        }
        $slug = $oneTable['slug'];
        switch ($type) {
            case 'hotel':
                return $extLang . '/stay/' . $slug;
                break;
            case 'khach-san':
                return $extLang . '/khach-san/' . $slug;
                break;
            case 'city':
                return $extLang . '/' . $slug . '/cities';
                break;
            case 'guide':
                return $extLang . '/' . $slug . '/guides';
                break;
            case 'faq':
                return $extLang . '/' . $slug . '/faqs';
                break;
            default:
                return $extLang . '/' . $slug . '/overview';
        }
    }
    function getMapHTML2($country_id)
    {
        $clsISO = new ISO();
        $one = $this->getOne($country_id);
        $html .= '<div class="infomap">';
        $html .= '<h2 class="title_map">
					<a href=' . $this->getLinkDestination($country_id) . ' title=' . $this->getTitle($country_id) . '>' . $this->getTitle($country_id) . '</a>
				</h2>';
        $html .= '</div>';
        return $html;
    }
    function getMapLa($country_id)
    {
        global $_LANG_ID;
        $one = $this->getOne($country_id, 'map_la');
        return $one['map_la'];
    }
    function getMapLo($country_id)
    {
        global $_LANG_ID;
        $one = $this->getOne($country_id, 'map_lo');
        return $one['map_lo'];
    }
    function getLocationMap($country_id)
    {
        $clsCountry = new Country();
        $clsCity = new City();
        #
        $listCity = $clsCity->getAll("is_trash=0 and map_lo<>'' and map_la<>'' and country_id='$country_id' order by order_no ASC");
        $location = '';
        if (!empty($listCity)) {
            for ($i = 0; $i < count($listCity); $i++) {
                $location .= '["' . $clsCity->getMapHTML($listCity[$i][$clsCity->pkey]) . '",' . $listCity[$i]['map_la'] . ',' . $listCity[$i]['map_lo'] . ',' . $listCity[$i][$clsCity->pkey] . ']';
                $location .= ($i == count($listCity) - 1) ? '' : ',';
            }
        }
        $script_js = '<script type="text/javascript">
			var locations=[' . $location . '];
		</script>';
        return $script_js;
    }
    function getCountryFlag($country_id)
    {
        return '';
    }
    function getListDestCatTours($country_id)
    {
        $clsCategory = new Category();
        $res = $clsCategory->getAll("is_trash=0 and _type = 'TOUR' and cat_id in (select cat_id from default_tour WHERE (tour_id in (SELECT tour_id from default_tour_destination where country_id='" . $country_id . "' )))", $clsCategory->pkey);
        return !empty($res) ? $res : '';
    }
    function getHotelByCountry($country_id, $limit = 0)
    {
        $clsHotel = new Hotel();
        $res = $clsHotel->getAll("is_trash=0 and country_id='$country_id' order by order_no DESC limit 0,$limit", $clsHotel->pkey);
        return $res;
    }
    function getHotCityByCountry($country_id, $limit)
    {
        $clsCity = new City();
        $sql = "is_trash=0 and country_id='$country_id' and city_id IN (SELECT target_id FROM " . DB_PREFIX . "hoteltop WHERE fromid = 'CITY') order by order_no DESC LIMIT 0,$limit";
        return $clsCity->getAll($sql);
    }
    function getCityTourByCountry($country_id)
    {
        $clsCity = new City();
        $sql = "is_trash=0 and country_id='$country_id' and city_id IN (SELECT city_id FROM " . DB_PREFIX . "tour_destination WHERE is_trash=0) order by order_no DESC";
        return $clsCity->getAll($sql, $clsCity->pkey);
    }
    #- Count Number In Country
    function countNumberCityStore($country_id = 0, $type = '')
    {
        $clsCityStore = new CityStore();
        return $clsCityStore->countItem("is_trash='0' and country_id='$country_id' and type='$type'");
    }
    function countChildGuide($guide_id)
    {
        global $_LANG_ID;
        $clsGuide = new Guide();
        $one = $clsGuide->getAll("is_trash=0 and parent_id='$guide_id'");
        if ($one[0]['guide_id'] != '')
            return count($one);
        return 0;
    }
    function getLinkDestination($is_sort = false)
    {
        global $extLang, $_LANG_ID;
        if ($is_sort)
            return $extLang . '/destinations';
        return $extLang . '/destinations/';
    }
    function getLinkTourSort($cat_id = '', $is_sort = false)
    {
        global $extLang;
        if ($is_sort)
            return $extLang . '/destinations/c' . $cat_id;
        return $extLang . '/destinations/c' . $cat_id . '/';
    }
    function checkExits($continent_id = 0, $country_id = 0)
    {
        $cond = "is_trash=0";
        if (intval($continent_id) != 0) {
            $cond .= " and continent_id = '$continent_id'";
        }
        if (intval($country_id) != 0) {
            $cond .= " and country_id = '$country_id'";
        }
        $res = $this->getAll($cond . " limit 0,1");
        return !empty($res) ? 1 : 0;
    }
    function doDelete($country_id)
    {
        $clsISO = new ISO();
        // Delete City
        $clsCity = new City();
        $lstCity = $clsCity->getAll("country_id='$country_id'", $clsCity->pkey);
        if (is_array($lstCity) && count($lstCity) > 0) {
            for ($i = 0; $i < count($lstCity); $i++) {
                $clsCity->updateOne($lstCity[$i]['city_id'], "country_id=0");
            }
        }
        $clsHotel = new Hotel();
        $lstHotel = $clsHotel->getAll("country_id='$country_id'");
        if (is_array($lstHotel) && count($lstHotel) > 0) {
            for ($i = 0; $i < count($lstHotel); $i++) {
                $clsHotel->updateOne($lstHotel[$i][$clsHotel->pkey], "country_id=0,city_id=0,region_id=0");
            }
        }
        // Delete
        $clsCityStore = new CityStore();
        $clsCityStore->deleteByCond("country_id='$country_id'");
        // Delete
        $clsTourDestination = new TourDestination();
        $clsTourDestination->deleteByCond("country_id='$country_id'");
        // Delete
        $this->deleteOne($country_id);
        return 1;
    }
    function getSelectCountryCitySearch($selected = '')
    {
        global $core, $core;
        $clsTour = new Tour();
        $clsCity = new City();
        $where = "is_trash=0 and is_online=1";
        $limit = " order by order_no ASC";
        $html = '';
        $lstCountry = $this->getAll($where . $limit, $this->pkey . ",title,slug");

        if (is_array($lstCountry) && count($lstCountry) > 0) {
            $i = 0;
            foreach ($lstCountry as $k => $v) {
                $total_tour_country = $clsTour->countTourGolobal($v[$this->pkey]);
                if ($total_tour_country > 0) {
                    $selected_index = ($selected == $v[$this->pkey]) ? 'selected="selected"' : '';
                    $html .= '<option data-label="Country" data-number_tour="' . $total_tour_country . '" data-slug="' . strtolower($v['slug']) . '" data-strtolower_title="' . strtolower($v['title']) . '" value="' . $v[$this->pkey] . '">' . $v['title'] . '</option>';
                }
                ++$i;
            }
        }
        $lstCity = $clsCity->getAll($where . $limit, $clsCity->pkey . ",title,slug,country_id");
        if (is_array($lstCity) && count($lstCity) > 0) {
            $j = 0;
            foreach ($lstCity as $k => $v) {
                $total_tour_city = $clsTour->countTourGolobal($v['country_id'], $v[$clsCity->pkey]);
                if ($total_tour_city > 0) {
                    $selected_index = ($selected == $v[$clsCity->pkey]) ? 'selected="selected"' : '';
                    $html .= '<option data-label="City" data-number_tour="' . $total_tour_city . '" data-slug="' . strtolower($v['slug']) . '" data-strtolower_title="' . strtolower($v['title']) . '" value="country-' . $v['country_id'] . '-city-' . $v[$clsCity->pkey] . '" data-country="' . $this->getTitle($v['country_id']) . '" >' . $v['title'] . '</option>';
                }
                ++$j;
            }
        }
        if (empty($lstCountry) && empty($lstCity)) {
            $html .= '_EMPTY';
        }
        return $html;
    }
    function checkIsOnline($country_id)
    {
        $one = $this->getOne($country_id, 'is_online');
        return $one['is_online'];
    }
}
