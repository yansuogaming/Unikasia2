<?php
class Guide extends dbBasic
{
    function __construct()
    {
        $this->pkey = "guide_id";
        $this->tbl = DB_PREFIX . "guide";
    }
    function checkOnlineBySlug($guide_id, $slug)
    {
        $item = $this->getAll("is_trash=0 and is_online=1 and guide_id='$guide_id' and slug='$slug'");
        if (empty($item))
            return 0;
        return 1;
    }
    function getMaxOrder()
    {
        $res = $this->getAll("1=1 order by order_no desc");
        return intval($res[0]['order_no']) + 1;
    }
    function getTitle($pvalTable, $one = null)
    {
        if (!isset($one['title'])) {
            $one = $this->getOne($pvalTable, 'title');
        }
        return $one['title'];
    }
    function getSlug($pvalTable, $one = null)
    {
        if (!isset($one['slug'])) {
            $one = $this->getOne($pvalTable, 'slug');
        }
        return $one['slug'];
    }
    function getMapLa($pvalTable)
    {
        global $_LANG_ID;
        $one = $this->getOne($pvalTable, 'map_la');
        return $one['map_la'];
    }
    function getMapLo($pvalTable)
    {
        global $_LANG_ID;
        $one = $this->getOne($pvalTable, 'map_lo');
        return $one['map_lo'];
    }
    function getBySlug($slug)
    {
        $all = $this->getAll("is_trash=0 and is_online=1 and slug = '$slug' limit 0,1");
        return $all[0][$this->pkey];
    }
    function checkExitsId($guide_id)
    {
        $res = $this->getAll("guide_id = '$guide_id' LIMIT 0,1");
        return !empty($res) ? 1 : 0;
    }
    function getMetaDescription($pvalTable)
    {
        global $_LANG_ID;
        $one = $this->getOne($pvalTable, 'intro');
        return html_entity_decode($one['intro']);
    }
    function getIntro($pvalTable, $one = null)
    {
        if (!isset($one['intro'])) {
            $one = $this->getOne($pvalTable);
        }
        $intro = html_entity_decode($one['intro'], ENT_COMPAT, 'UTF-8');
        $intro = preg_replace('/\&nbsp;/', ' ', $intro);
        return $intro;
    }
    function getContent($pvalTable)
    {
        $one = $this->getOne($pvalTable, 'content');
        return html_entity_decode($one['content']);
    }
    function getStripIntro($pvalTable)
    {
        $one = $this->getOne($pvalTable, 'intro');
        if (!empty($one['intro']))
            return html_entity_decode($one['intro']);
        return html_entity_decode($one['content']);
    }
    function getRegDate($pvalTable)
    {
        $one = $this->getOne($pvalTable, 'reg_date');
        if (!empty($one['reg_date']))
            return date('d/m/Y', $one['reg_date']);
        return '';
    }
    function getUpdDate($pvalTable)
    {
        $one = $this->getOne($pvalTable, 'upd_date');
        if (!empty($one['upd_date']))
            return date('d/m/Y', $one['upd_date']);
        return '';
    }
    function getPublishDate($pvalTable, $one = null)
    {
        $clsISO = new ISO();
        if (!isset($one['publish_date'])) {
            $one = $this->getOne($pvalTable, 'publish_date');
        }
        if (!empty($one['publish_date']))
            return date('d/m/Y', $one['publish_date']);
        return '';
    }
    function getLink($pvalTable, $one = null)
    {
        global $extLang, $_LANG_ID, $clsISO;
        return $extLang . '/g' . $pvalTable . '-' . $this->getSlug($pvalTable, $one) . '.html';
    }
    function getLink2($pvalTable, $one = null)
    {
        global $extLang, $_LANG_ID, $clsISO;
        return DOMAIN_NAME . '/' . $_LANG_ID . '/g' . $pvalTable . '-' . $this->getSlug($pvalTable, $one) . '.html';
    }
    function getNAV($guide_id = 0)
    {
        global $dbconn;
        $oneTable = $this->getOne($guide_id, "getNAV");
        if ($oneTable['getNAV'] == '') {
            $i = 1;
            $j = 0;
            $res = array();
            $res[0] = $guide_id;
            #
            while ($i == 1) {
                $oneCurrent = $this->getOne($res[$j], "parent_id");
                $oneParent = $oneCurrent["parent_id"];
                if ($oneParent != 0 and $i == 1) {
                    $j++;
                    $res[$j] = $oneParent;
                } else {
                    $i = 0;
                }
            }
            $this->updateOne($guide_id, "getNAV='" . serialize(array_reverse($res)) . "'");
            return array_reverse($res);
        } else {
            return unserialize($oneTable['getNAV']);
        }
    }
    function getImage($pvalTable, $w, $h)
    {
        global $clsISO;
        $oneTable = $this->getOne($pvalTable, "image");
        if ($oneTable['image'] != '') {
            $image = $oneTable['image'];
            return $clsISO->tripslashImage($image, $w, $h);
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
    function getChild($guide_id)
    {
        $ret = $this->getAll("is_trash=0 and parent_id='$guide_id' order by order_no asc");
        return $ret;
    }
    function countChild($guide_id)
    {
        global $_LANG_ID;
        $one = $this->getAll("is_trash=0 and parent_id='$guide_id'");
        if ($one[0]['guide_id'] != '')
            return count($one);
        return 0;
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
    function getRootId($guide_id)
    {
        $one = $this->getOne($guide_id, "parent_id");
        $parent_id = $one['parent_id'];
        if ($parent_id == 0) {
            return $guide_id;
        } else {
            return $this->getRootId($parent_id);
        }
    }
    function getNavChild($guide_id, $country_id, $city_id = 0, $type = 'country', $m)
    {
        global $core;
        $temp = $this->getNAV($guide_id);
        $link = '<a>&raquo;</a><a href="' . PCMS_URL . '/?admin&mod=' . $m . '&country_id=' . $country_id . ($city_id > 0 ? '&city_id=' . $city_id : '') . '&type=' . $core->encryptID($type) . '&parent_id=0">Thông tin điểm đến</a>';
        for ($i = 0; $i < count($temp); $i++) {
            $tmp = $this->getTitle($temp[$i]);
            $link .= ($i == count($temp)) ? '' : '<a>&raquo;</a>';
            $link .= ' <a href="' . PCMS_URL . '/?mod=' . $m . '&country_id=' . $country_id . ($city_id > 0 ? '&city_id=' . $city_id : '') . '&type=' . $core->encryptID($type) . '&parent_id=' . $temp[$i] . '">' . $tmp . ' </a>';
        }
        if ($guide_id == 0)
            return '<a>&raquo;</a><a href="' . PCMS_URL . '/?admin&mod=' . $m . '&country_id=' . $country_id . ($city_id > 0 ? '&city_id=' . $city_id : '') . '&type=' . $core->encryptID($type) . '&parent_id=0">Thông tin điểm đến</a>';
        return $link;
    }
    function getListItem($parent_id, $country_id, $limit = '')
    {
        $limit = !empty($limit) ? 'limit ' . $limit : '';
        $res = $this->getAll("is_trash=0 and parent_id = '$parent_id' and country_id = '$country_id' order by order_no desc " . $limit, $this->pkey);
        return !empty($res) ? $res : '';
    }
    function getListGuidePlace($place_id, $cat_id, $Type = 'Country')
    {
        if ($Type == 'City') {
            $res = $this->getAll("is_trash=0 and is_online=1 and (cat_id='$cat_id' or list_cat_id like '%|$cat_id|%') and city_id = '$place_id' order by order_no ASC ", $this->pkey);
        } elseif ($Type == 'Region') {
            $res = $this->getAll("is_trash=0 and is_online=1 and (cat_id='$cat_id' or list_cat_id like '%|$cat_id|%') and city_id IN (select city_id FROM " . DB_PREFIX . "city WHERE region_id='$place_id') order by order_no ASC " . $limit, $this->pkey);
        } else {
            $res = $this->getAll("is_trash=0 and is_online=1 and (cat_id='$cat_id' or list_cat_id like '%|$cat_id|%') and country_id = '$place_id' order by order_no ASC ", $this->pkey);
        }
        return $res ? $res : '';
    }
    function getListGuideCity($place_id, $cat_id)
    {
        $res = $this->getAll("is_trash=0 and is_online=1 and (cat_id='$cat_id' or list_cat_id like '%|$cat_id|%') and city_id = '$place_id' order by order_no ASC ", $this->pkey);
        return $res ? $res : '';
    }
    function countGuideByRegion($country_id = 0, $region_id = 0, $guidecat_id)
    {
        $where = "is_trash=0 and is_online=1 and (cat_id='$guidecat_id' or list_cat_id like '%|$guidecat_id|%')";
        $where .= " and country_id='$country_id' and city_id IN (SELECT city_id FROM " . DB_PREFIX . "city WHERE country_id='$country_id' and region_id='$region_id')";
        $res = $this->getAll($where, $this->pkey);
        return $res ? count($res) : 0;
    }
    function getListGuide($cat_id, $country_id, $city_id)
    {
        $ret = $this->getAll("is_trash=0 and is_online=1 and cat_id='$cat_id' and country_id='$country_id' and city_id='$city_id' order by order_no asc");
        return $ret;
    }
    function countGuideGlobal($country_id = 0, $city_id = 0, $cat_id = 0)
    {
        $where = "is_trash=0 and is_online=1";
        if (intval($country_id) != 0) {
            $where .= " and country_id='$country_id'";
        }
        if (intval($city_id) != 0) {
            $where .= " and city_id = '" . $city_id . "'";
        }
        if (intval($cat_id) > 0) {
            $where .= " and cat_id = '" . $cat_id . "'";
        }
        $listGuide = $this->getAll($where, $this->pkey);
        return $listGuide ? count($listGuide) : 0;
    }
    function doDelete($pvalTable)
    {
        $clsISO = new ISO();
        #
        $image = $this->getOneField("image", $pvalTable);
        if (trim($image) != '') {
            if ($clsISO->checkContainer($image, DOMAIN_NAME)) {
                $image = $_SERVER['DOCUMENT_ROOT'] . $clsISO->parseImageURL($image, false);
                $clsISO->deleteFile($image);
                $image = $_SERVER['DOCUMENT_ROOT'] . $clsISO->parseImageURL($image, false);
                $clsISO->deleteFile($image);
            }
        }
        #
        $this->deleteOne($pvalTable);
        return 1;
    }
    function getLinkGuideCat($country_slug = '', $category_slug = '', $category_id = 0)
    {
        global $extLang, $_LANG_ID, $clsISO;
        #
        $link   =   DOMAIN_NAME . '/' . $_LANG_ID . '/guides/';
        #
        if (!empty($country_slug)) {
            if (!empty($category_slug) && $category_id !== 0) {
                $link .= $country_slug . '/' . $category_slug . '-c' . $category_id;
            } else {
                $link .= $country_slug;
            }
        }
        return  $link;
    }
    function getPlaceGuide($pvalTable)
    {
        global $extLang, $_LANG_ID, $clsISO;
        #
        $clsCountry =   new Country();
        $clsCity    =   new City();
        #
        $html   =   '';
        $city_id    =   $this->getOneField("city_id", $pvalTable);
        if (!empty($city_id)) {
            $html   .=   $clsCity->getTitle($city_id) . ', ';
        }
        #
        $country_id =   $this->getOneField("country_id", $pvalTable);
        if (!empty($country_id)) {
            $html   .=   $clsCountry->getTitle($country_id);
        }
        return $html;
    }
    function getListTag($blog_id, $one = null)
    {
        global $_LANG_ID;
        #
        $clsTag = new Tag;
        #
        if (!isset($one['list_tag_id'])) {
            $list_tag_id = $this->getOneField('list_tag_id', $blog_id);
        } else {
            $list_tag_id = $one['list_tag_id'];
        }
        if ($list_tag_id != '') {
            $list_tag_id = ltrim($list_tag_id, '|');
            $list_tag_id = rtrim($list_tag_id, '|');
            $list_tag_id = explode('|', $list_tag_id);
            #
            $html = '';
            if (count($list_tag_id) > 0) {
                for ($i = 0; $i < count($list_tag_id); $i++) {
                    $itemTag = $clsTag->getOne($list_tag_id[$i], 'title,slug');
                    if (!empty($list_tag_id[$i])) {
                        $html .= ($i == 1 ? '' : '  ') . '<li class="tag-link"><a target="_parent" href="' . $clsTag->getLinkTagGuide($list_tag_id[$i], $itemTag) . '" title="' . $clsTag->getTitle($list_tag_id[$i], $itemTag) . '">#' . $clsTag->getTitle($list_tag_id[$i], $itemTag) . '</a></li>';
                    }
                }
                return $html;
            }
        }
    }
}
