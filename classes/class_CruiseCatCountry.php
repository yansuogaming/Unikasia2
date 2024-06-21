<?php
class CruiseCatCountry extends dbBasic
{
    function __construct()
    {
        $this->pkey = "cruise_cat_country_id";
        $this->tbl = DB_PREFIX . "cruise_category_country";
    }
    function getID($cat_id, $country_id)
    {
        $all = $this->getAll("is_trash = 0 AND is_online = 1 AND cat_id = '$cat_id' AND country_id = '$country_id' limit 0,1");
        return $all[0][$this->pkey];
    }
    function getBannerTitle($pvalTable, $one = null)
    {
        if (!isset($one['banner_title'])) {
            $one = $this->getOne($pvalTable, 'banner_title');
        }
        return $one['banner_title'];
    }
    function getBannerIntro($pvalTable, $one = null)
    {
        if (!isset($one['banner_intro'])) {
            $one = $this->getOne($pvalTable, 'banner_intro');
        }
        return html_entity_decode($one['banner_intro'], ENT_COMPAT, 'UTF-8');
    }
    function getBannerImageVertical($pvalTable, $w, $h, $oneTable = null)
    {
        global $clsISO;
        if (!isset($oneTable['banner_image_vertical'])) {
            $oneTable = $this->getOne($pvalTable, 'banner_image_vertical');
        }
        if ($oneTable['banner_image_vertical'] != '') {
            $image = $oneTable['banner_image_vertical'];
            return $clsISO->tripslashImage($image, $w, $h);
        }
        $noimage = URL_IMAGES . '/noimage.png';
        return '/files/thumb/' . $w . '/' . $h . '/' . $clsISO->parseImageURL($noimage);
    }
    function getBannerImageHorizontal($pvalTable, $w, $h, $oneTable = null)
    {
        global $clsISO;
        if (!isset($oneTable['banner_image_horizontal'])) {
            $oneTable = $this->getOne($pvalTable, 'banner_image_horizontal');
        }
        if ($oneTable['banner_image_horizontal'] != '') {
            $image = $oneTable['banner_image_horizontal'];
            return $clsISO->tripslashImage($image, $w, $h);
        }
        $noimage = URL_IMAGES . '/noimage.png';
        return '/files/thumb/' . $w . '/' . $h . '/' . $clsISO->parseImageURL($noimage);
    }
    function doDelete($cat_id)
    {
        $this->deleteOne($cat_id);
    }
    function getArray($string)
    {
        if ($string == '' || $string == '|') {
            return array();
        }
        $string = str_replace('||', '|', $string);
        $string = str_replace(',', '|', $string);
        $string = str_replace(':', '|', $string);
        $string = str_replace(';', '|', $string);
        $string = ltrim($string, '|');
        $string = rtrim($string, '|');
        return explode('|', $string);
    }
    function getLink($pvalTable, $oneTable = null)
    {
        global $extLang, $_LANG_ID;
        #
        $clsCountry     =   new Country();
        $clsCruiseCat   =   new CruiseCat();
        #
        $oneTable   =   $this->getOne($pvalTable);
        $link       =   '';
        if (!empty($oneTable)) {
            $country_slug   =   $clsCountry->getSlug($oneTable['country_id']);
            $guide_cat_slug =   $clsCruiseCat->getSlug($oneTable['cat_id']);
            #
            $link   .=  '/' . $_LANG_ID . '/cruise/' . $country_slug . '/' . $guide_cat_slug . '.html';
        }
        return $link;
    }
}
