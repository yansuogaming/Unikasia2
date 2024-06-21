<?php
class CruiseCat extends dbBasic
{
    function __construct()
    {
        $this->pkey = "cruise_cat_id";
        $this->tbl = DB_PREFIX . "cruise_cat";
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
    function getBySlug($slug)
    {
        $all = $this->getAll("is_trash=0 and slug='$slug' order by " . $this->pkey . " limit 0,1", $this->pkey);
        return $all[0][$this->pkey];
    }
    function getMetaDescription($pvalTable, $one = null)
    {
        global $_LANG_ID;
        if (!isset($one['intro'])) {
            $one = $this->getOne($pvalTable, 'intro');
        }
        $clsISO = new ISO();
        $ret = $clsISO->truncateWord(html_entity_decode($one['intro']), 160);
        $ret = str_replace('"', '', $ret);
        return strip_tags($ret);
    }
    function getIntro($pvalTable, $one = null)
    {
        if (!isset($one['intro'])) {
            $one = $this->getOne($pvalTable, 'intro');
        }
        return html_entity_decode($one['intro'], ENT_COMPAT, 'UTF-8');
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
                $html = '<div class="clicSeemore"><div class="c_seemore More">';
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
    function getLinkOld($pvalTable)
    {
        global $extLang;
        return $extLang . '/halongbaycruises/' . $this->getSlug($pvalTable);
    }
    function getLink($cat_id, $oneTable = null)
    {
        global $extLang, $_LANG_ID;
        if (!isset($oneTable['slug'])) {
            $oneTable = $this->getOne($cat_id, 'slug');
        }
        $slug = $oneTable['slug'];
        if ($_LANG_ID == 'vn')
            return $extLang . '/du-thuyen/' . $slug . '/';
        return $extLang . '/cruise/' . $slug . '/';
    }
    function getImage($pvalTable, $w, $h, $oneTable = null)
    {
        global $clsISO;
        if (!isset($oneTable['image'])) {
            $oneTable = $this->getOne($pvalTable, "image");
        }
        if ($oneTable['image'] != '') {
            $image = $oneTable['image'];
            return $clsISO->tripslashImage($image, $w, $h);
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
    function getImageBanner($pvalTable, $w, $h, $oneTable = null)
    {
        global $clsISO;
        #
        if (!isset($oneTable['image_banner'])) {
            $oneTable = $this->getOne($pvalTable, "image_banner");
        }
        if ($oneTable['image_banner'] != '') {
            $image = $oneTable['image_banner'];
            return $clsISO->tripslashImage($image, $w, $h);
        }
        $noimage = URL_IMAGES . '/noimage.png';
        return '/files/thumb/' . $w . '/' . $h . '/' . $clsISO->parseImageURL($noimage);
    }
    function makeOption($catid = 0, $selectedid = "", $level = 0, &$arrHtml)
    {
        global $dbconn, $_LANG_ID;
        $arrListCat = $dbconn->GetAll("SELECT * FROM " . $this->tbl . " WHERE parent_id='$catid' and is_trash=0 order by order_no desc");
        if (is_array($arrListCat)) {
            foreach ($arrListCat as $k => $v) {
                $selected = ($v["cruise_cat_id"] == $selectedid) ? "selected" : "";
                $value = $v["cruise_cat_id"];
                $option = str_repeat("|----", $level) . $this->getTitle($v[$this->pkey]);
                $arrHtml[$value] = $option;
                $this->makeOption($v["cruise_cat_id"], $selectedid, $level + 1, $arrHtml);
            }
            return "";
        } else {
            return "";
        }
    }
    function makeList($catid = 0, $level = 0, &$arrHtml)
    {
        global $dbconn;
        #
        $arrListCat = $dbconn->GetAll("SELECT * FROM " . $this->tbl . " WHERE parent_id='$catid' order by order_no asc");
        if (is_array($arrListCat)) {
            foreach ($arrListCat as $k => $v) {
                $value = $v[$this->pkey];
                $v['level'] = str_repeat("----", $level);
                $arrHtml[$value] = $v;
                $this->makeList($v[$this->pkey], $level + 1, $arrHtml);
            }
            return "";
        } else {
            return "";
        }
    }
    function __makeSelectboxOption($catid = 0, $selected = '')
    {
        return $this->getListOption($catid, $selected);
    }
    function getListOption($parent_id = 0, $selected = '0')
    {
        global $core;
        #
        if (intval($parent_id) == 0) {
            $html = '<option value="0">' . $core->get_Lang('selectcategory') . '</option>';
        } else {
            $html = '<option value="' . $parent_id . '"> ' . $this->getTitle($parent_id) . ' </option>';
        }
        #
        $arrOptionsCategory = array();
        $this->makeOption($parent_id, "", 0, $arrOptionsCategory);
        foreach ($arrOptionsCategory as $k => $v) {
            $oneItem = $this->getOne($k);
            $html .= '<option value="' . $k . '" ' . ($k == $selected ? 'selected="selected"' : '') . '>|----' . $v . '</option>';
        }
        return $html;
    }
    function checkMove($pval, $type)
    {
        $one = $this->getOne($pval, 'parent_id');
        $parent_id = $one['parent_id'];
        if ($type == '_UP') {
            if (!$this->checkIsFirst($pval, $parent_id)) {
                return 1;
            } else {
                return 0;
            }
        } else {
            if (!$this->checkIsLast($pval, $parent_id)) {
                return 1;
            } else {
                return 0;
            }
        }
    }
    function checkIsFirst($pval, $parent_id)
    {
        $allItem = $this->getAll("is_trash=0 and parent_id='$parent_id' order by order_no ASC");
        if (is_array($allItem) && count($allItem) > 0) {
            if ($allItem[0][$this->pkey] == $pval) {
                return 1;
            } else {
                return 0;
            }
        }
    }
    function checkIsLast($pval, $parent_id)
    {
        $allItem = $this->getAll("is_trash=0 and parent_id='$parent_id' order by order_no ASC");
        if (is_array($allItem) && count($allItem) > 0) {
            if ($allItem[count($allItem) - 1][$this->pkey] == $pval) {
                return 1;
            } else {
                return 0;
            }
        }
    }
    function getListParent($cat_id)
    {
        $listChild = array();
        $allChild = $this->getAll();
        if ($allChild[0][$this->pkey] != '') {
            for ($i = 0; $i < count($allChild); $i++) {
                if ($this->checkIsParent($cat_id, $allChild[$i]['cruise_cat_id'])) {
                    $listChild[] = $allChild[$i]['cruise_cat_id'];
                }
            }
        }
        #
        $cond = "|";
        if (is_array($listChild) && count($listChild) > 0) {
            for ($i = 0; $i < count($listChild); $i++) {
                $cond .= $listChild[$i] . "|";
            }
        }
        $cond .= $cat_id . "|";
        return $cond;
    }
    function checkIsParent($cat_id, $parent_id_check)
    {
        $one = $this->getOne($cat_id, 'parent_id');
        $parent_id = $one['parent_id'];
        if ($parent_id == $parent_id_check) {
            return 1;
        }
        if ($parent_id == 0) {
            return 0;
        }
        return $this->checkIsParent($parent_id, $parent_id_check);
    }
    function saveCruiseCat()
    {
        global $core;
        $user_id = $core->_USER['user_id'];
        $clsCountry = new Country();
        #
        $res = $clsCountry->getAll("is_trash=0 and is_online=1 and country_id NOT IN (SELECT country_id FROM " . DB_PREFIX . "cruise_cat) order by order_no asc");
        if (!empty($res)) {
            for ($i = 0; $i < count($res); $i++) {
                #
                $f = "cruise_cat_id,parent_id,country_id,title,slug,order_no,user_id,user_id_update,reg_date,upd_date";
                $v = "'" . $this->getMaxId() . "','0','" . $res[0][$clsCountry->pkey] . "','" . $res[0]['title'] . "'";
                $v .= ",'" . $core->replaceSpace($res[0]['title']) . "','" . $this->getMaxOrder() . "','$user_id','$user_id','" . time() . "','" . time() . "'";
                $this->insertOne($f, $v);
            }
        }
        #
        $res = $clsCountry->getAll("is_trash=0 and is_online=1 and country_id IN (SELECT country_id FROM " . DB_PREFIX . "cruise_cat) order by order_no asc");
        if (!empty($res)) {
            for ($i = 0; $i < count($res); $i++) {
                $country_id = $res[$i][$clsCountry->pkey];
                $lstCatCruise = $this->getAll("is_trash=0 and parent_id = '0' and country_id = '$country_id'");
                for ($j = 0; $j < count($lstCatCruise); $j++) {
                    $v = "title = '" . $res[$i]['title'] . "',slug = '" . $core->replaceSpace($res[$i]['title']) . "',upd_date = '" . time() . "'";
                    $this->updateOne($lstCatCruise[$j][$this->pkey], $v);
                }
            }
        }
    }
    function doDelete($cat_id)
    {
        $this->deleteOne($cat_id);
    }
    function getNAV($cruise_cat_id = '')
    {
        global $dbconn;
        $getNAV = $this->getOneField('getNAV', $cruise_cat_id);
        return $getNAV;
        if (empty($getNAV) || $getNAV == '' || $getNAV == '0') {
            $oneCat = $this->getOne($cruise_cat_id);
            #
            $i = 1;
            $j = 0;
            $res = array();
            $res[0] = $cruise_cat_id;
            #
            while ($i == 1) {
                $oneCurrent = $this->getOne($res[$j], 'parent_id');
                $oneParent = $oneCurrent["parent_id"];
                if ($oneParent != 0 and $i == 1) {
                    $j++;
                    $res[$j] = $oneParent;
                } else {
                    $j++;
                    $res[$j] = $oneParent;
                    $i = 0;
                }
            }
            $this->updateOne($cruise_cat_id, "getNAV='" . unserialize(array_reverse($res)) . "'");
            return array_reverse($res);
        } else {
            return unserialize($getNAV);
        }
    }
    function getListParentNew($cat_id)
    {
        $listChild = array();
        $allChild = $this->getAll();
        if ($allChild[0][$this->pkey] != '') {
            for ($i = 0; $i < count($allChild); $i++) {
                if ($this->checkIsParent($cat_id, $allChild[$i]['cruise_cat_id'])) {
                    $listChild[] = $allChild[$i]['cruise_cat_id'];
                }
            }
        }
        #
        $cond = ",";
        if (is_array($listChild) && count($listChild) > 0) {
            for ($i = 0; $i < count($listChild); $i++) {
                $cond .= $listChild[$i] . ",";
            }
        }
        $cond .= $cat_id . "";
        return $cond;
    }
    function makeSelectboxOptionValueName($selected = '')
    {
        global $core, $clsConfiguration, $clsISO;
        $sql = "is_trash=0 AND is_online = 1 AND parent_id = 0";
        #
        $lstCat = $this->getAll($sql . " order by order_no ASC");
        if (is_array($lstCat) && count($lstCat) > 0) {
            $html   =   '<option value="">-- Cruise Category --</option>';
            foreach ($lstCat as $k => $v) {
                $_array = $this->getArray($selected);
                $html .= '<option value="' . $v['cruise_cat_id'] . '" ' . ($clsISO->checkItemInArray($v[$this->pkey], $_array) ? 'selected="selected"' : '') . '>-- ' . $v['title'] . '</option>';
            }
            unset($lstCat);
        }
        return $html;
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
    function getAllChildArray($cruise_cat_id, $_array = array())
    {
        $sql = "is_trash=0 and is_online=1 and parent_id='$cruise_cat_id'";
        $lstCatChild = $this->getAll($sql . " order by order_no asc");
        if (!empty($lstCatChild)) {
            foreach ($lstCatChild as $item) {
                if (!empty($item[$this->pkey])) {
                    $lstChildSub = $this->getChildOnline($item[$this->pkey]);
                    array_push($_array, $item[$this->pkey]);
                    if (!empty($lstChildSub)) {
                        $_array = $this->getAllChildArray($item[$this->pkey], $_array);
                    }
                }
            }
        }
        return $_array;
    }
    function getChildOnline($cruisecat_id, $limit = 0, $trash = true)
    {
        $sql = "is_online=1 and parent_id='$cruisecat_id'";
        if ($trash) {
            $sql .= " and is_trash=0";
        }
        $sql .= " order by order_no ASC";
        if ($limit > 0) {
            $sql .= " LIMIT 0,$limit";
        }
        $res = $this->getAll($sql);
        return $res;
    }
    function makeSelectboxOptionChild($selected = '', $cruise_cat_id, $parent_id = 0, $level = '--', $hasDisable, $is_multiple)
    {
        global $core, $clsConfiguration, $clsISO;
        $sql = "is_trash=0 and is_online=1 and parent_id='$parent_id'";
        $lstCat = $this->getAll($sql . " order by order_no asc");
        $html = '';
        if ($hasDisable) {
            $_array = $this->getAllChildArray($cruise_cat_id);
        } else {
            $_array = '';
        }
        if (is_array($lstCat) && count($lstCat) > 0) {
            foreach ($lstCat as $k => $v) {
                $_child = $this->getChild($v[$this->pkey], 0, 0);
                if ($is_multiple) {
                    $_lstselect = $this->getArray($selected);
                    $html .= '<option value="' . $v[$this->pkey] . '"  ' . ($clsISO->checkItemInArray($v[$this->pkey], $_lstselect) ? 'selected="selected"' : '') . '  ' . ($cruise_cat_id == $v[$this->pkey] ? 'disabled' : '') . ' ' . ($clsISO->checkItemInArray($v[$this->pkey], $_array) ? 'disabled' : '') . '>' . $level . $this->getTitle($v[$this->pkey]) . '</option>';
                } else {
                    $html .= '<option value="' . $v[$this->pkey] . '"  ' . ($selected == $v[$this->pkey] ? 'selected="selected"' : '') . '  ' . ($cruise_cat_id == $v[$this->pkey] ? 'disabled' : '') . '>' . $level . $this->getTitle($v[$this->pkey]) . '</option>';
                    /*$html .= '<option value="'.$v[$this->pkey].'"  '.($selected==$v[$this->pkey]?'selected="selected"':'').'  '.($cruise_cat_id==$v[$this->pkey]?'disabled':'').' '.($clsISO->checkItemInArray($v[$this->pkey],$_array)?'disabled':'').'>'.$level.$this->getTitle($v[$this->pkey]).'</option>'; */
                }
                if (!empty($_child)) {
                    $lvChild = $level . '--';
                    $html .= $this->makeSelectboxOptionChild($selected, $cruise_cat_id, $v[$this->pkey], $lvChild, $hasDisable, $is_multiple);
                }
            }
            unset($lstCat);
        }
        return $html;
    }
    function makeSelectboxOption($selected = '', $cruise_cat_id, $parent_id = 0, $level = '--', $hasDisable = true, $is_multiple = false)
    {
        global $core, $clsConfiguration, $clsISO;
        $sql = "is_trash=0 and is_online=1 and parent_id='0'";
        $lstCat = $this->getAll($sql . " order by order_no asc");
        if ($hasDisable) {
            $_array = $this->getAllChildArray($cruise_cat_id);
        } else {
            $_array = '';
        }
        //print_r($_array);  
        $html = '<option value="">' . $core->get_Lang('Select Category') . '</option> ';
        if (is_array($lstCat) && count($lstCat) > 0) {
            $_child = $this->getChild($v[$this->pkey], 0, 0);
            foreach ($lstCat as $k => $v) {
                if ($is_multiple) {
                    $_lstselect = $this->getArray($selected);
                    $html .= '<option value="' . $v[$this->pkey] . '" ' . ($clsISO->checkItemInArray($v[$this->pkey], $_lstselect) ? 'selected="selected"' : '') . '  ' . ($cruise_cat_id == $v[$this->pkey] ? 'disabled' : '') . '>' . $level . $this->getTitle($v[$this->pkey]) . '</option>';
                } else {
                    $html .= '<option value="' . $v[$this->pkey] . '"  ' . ($selected == $v[$this->pkey] ? 'selected="selected"' : '') . '  ' . ($cruise_cat_id == $v[$this->pkey] ? 'disabled' : '') . '>' . $level . $this->getTitle($v[$this->pkey]) . '</option>';
                }
                if (!empty($_child)) {
                    $lvChild = $level . '--';
                    $html .= $this->makeSelectboxOptionChild($selected, $cruise_cat_id, $v[$this->pkey], $lvChild, $hasDisable, $is_multiple);
                }
            }
            unset($lstCat);
        }
        return $html;
    }
    function getMenuChild($cruisecat_id)
    {
        $sql = "parent_id='$cruisecat_id'";
        $sql .= " and is_trash=0 and is_online=1";
        $sql .= " order by order_no ASC";
        $res = $this->getAll($sql, $this->pkey . ',title');
        $html = '';
        if (!empty($res)) {
            $html .= '<ul class="sub_dropdown-menu submenu" role="menu">';
            foreach ($res as $item) {
                $link = $this->getLink($item['cruise_cat_id']);
                $html .= '<li><a href="' . $link . '" title="' . $item['title'] . '">' . $item['title'] . '' . ($this->getMenuChild($item['cruise_cat_id']) ? '<i class="fr fa fa-angle-right" aria-hidden="true"></i>' : '') . '</a>
					' . $this->getMenuChild($item['cruise_cat_id']) . '
					</li>';
            }
            $html .= '</ul>';
        }
        return $html;
    }
    function getChild($cruisecat_id, $limit = 0, $trash = true)
    {
        $sql = "parent_id='$cruisecat_id'";
        if ($trash) {
            $sql .= " and is_trash=0";
        }
        $sql .= " order by order_no ASC";
        if ($limit > 0) {
            $sql .= " LIMIT 0,$limit";
        }
        $res = $this->getAll($sql, $this->pkey);
        return $res;
    }
    function getLstChild($cruisecat_id, $level = '---')
    {
        global $core, $mod, $act;
        $sql = "parent_id='$cruisecat_id'";
        $sql .= " order by order_no ASC";
        $allItem = $this->getAll($sql, $this->pkey . ',title,is_trash');
        $html = '';
        for ($i = 0; $i < count($allItem); $i++) {
            $title = $this->getTitle($allItem[$i]['cruise_cat_id']);
            $cruiseCat_id = $allItem[$i]['cruise_cat_id'];
            $listChild = $this->getChild($cruiseCat_id, 0, 0);
            $html .= '<tr style="cursor:move" id="order_' . $cruiseCat_id . '" class="' . ($i % 2 == 0 ? "row1" : "row2") . '">
				<th class="index"><input name="p_key[]" class="chkitem" type="checkbox" value="' . $cruiseCat_id . '" /></th>
				<td class="index hiden767">' . $cruiseCat_id . '</td>
				<td class="name_service">
					<a style="text-decoration:none" title="' . $title . '"><strong style="font-size:14px;">' . $level . $title . '</strong></a>
					' . ($allItem[$i]['is_trash'] == '1' ? '<span class="fr" style="color:#CCC">' . $core->get_Lang("intrash") . '</span>' : "") . '
					<button type="button" class="toggle-row inline_block767" style="display:none"><i class="fa fa-caret fa-caret-down"></i></button>
				</td>
				<td class="block_responsive" data-title="' . $core->get_Lang('status') . '" style="text-align:center">
					<a href="javascript:void(0);" class="SiteClickPublic" clsTable="CruiseCat" pkey="cruise_cat_id" sourse_id="' . $cruiseCat_id . '" rel="' . $this->getOneField('is_online', $cruiseCat_id) . '" title="' . $core->get_Lang("Click to change status") . '">' .
                ($this->getOneField("is_online", $cruiseCat_id) == '1' ? '<i class="fa fa-check-circle green"></i>' : '<i class="fa fa-minus-circle red"></i>') . '
					</a>
				</td>
				<td class="block_responsive" data-title="' . $core->get_Lang('func') . '" align="center" style="vertical-align: middle; text-align:center; width: 40px; white-space: nowrap;">
					<div class="btn-group">
						<button class="btn btn_dropdown dropdown-toggle" type="button" data-toggle="dropdown">
							<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
						</button>
						<ul class="dropdown-menu" style="right:0px !important">
							' . ($allItem[$i]['is_trash'] == 0 ? '
							<li><a href="' . DOMAIN_NAME . $this->getLink($cruiseCat_id) . '" target="_blank" title="' . $core->get_Lang("view") . '"><i class="icon-eye-open"></i> <span>' . $core->get_Lang("view") . '</span></a></li>
							<li><a class="btnEditCruiseCategory" title="' . $core->get_Lang('edit') . '" data="' . $cruiseCat_id . '"><i class="icon-edit"></i> <span>' . $core->get_Lang('edit') . '</span></a></li>
							<li><a title="' . $core->get_Lang('trash') . '" href="' . PCMS_URL . '/?mod=' . $mod . '&act=' . $act . '&action=Trash&cruise_cat_id=' . $core->encryptID($cruiseCat_id) . '"><i class="icon-trash"></i> <span>' . $core->get_Lang('Trash') . '</span></a></li>'
                    :
                    '<li><a title="' . $core->get_Lang("restore") . '" href="' . PCMS_URL . '/?mod=' . $mod . '&act=' . $act . '&action=Restore&cruise_cat_id=' . $core->encryptID($cruiseCat_id) . '"><i class="icon-refresh"></i> <span>' . $core->get_Lang('restore') . '</span></a></li>
							<li><a title="' . $core->get_Lang('delete') . '" class="confirm_delete" href="' . PCMS_URL . '/?mod=' . $mod . '&act=' . $act . '&action=Delete&cruise_cat_id=' . $core->encryptID($cruiseCat_id) . '"><i class="icon-remove"></i> <span>' . $core->get_Lang("delete") . '</span></a></li> ') . '
						</ul>
					</div>
				</td>
			</tr>';
            if (!empty($listChild)) {
                $levelChild = $level . '---';
                $html .= $this->getLstChild($cruiseCat_id, $levelChild);
            }
        }
        return $html;
    }

    function getParent($cat_id)
    {
        $one = $this->getOne($cat_id, 'parent_id');

        return $one['parent_id'];
    }
    function getListParentLevel($cat_id)
    {
        $parent_id = $this->getParent($cat_id);

        $arr_parent = [];
        while ($parent_id > 0) {
            $arr_parent[] = $parent_id;
            $parent_id = $this->getParent($parent_id);
        }
        return array_reverse($arr_parent);
    }
}
