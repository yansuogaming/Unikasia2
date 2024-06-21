<?php
class CruiseProperty extends dbBasic
{
    function __construct()
    {
        $this->pkey = "cruise_property_id";
        $this->tbl = DB_PREFIX . "cruise_property";
    }
    function getTitle($pval)
    {
        return $this->getOneField('title', $pval);
    }
    function getOrder($pval)
    {
        return $this->getOneField('order_no', $pval);
    }
    function getContent($pval)
    {
        return $this->getOneField('content', $pval);
    }
    function getIntro($pval)
    {
        return $this->getOneField('intro', $pval);
    }
    function getClassIcon($pval)
    {
        return $this->getOneField('class_icon', $pval);
    }
    function getNumberAdult($pval)
    {
        return $this->getOneField('number_adult', $pval);
    }
    function getNumberChild($pval)
    {
        return $this->getOneField('number_child', $pval);
    }
    function getBySlug($slug, $type)
    {
        $res = $this->getAll("is_trash=0 and type='$type' and slug='$slug'");
        return $res[0]['cruise_property_id'];
    }
    function getSymbol($tour_property_id)
    {
        $one = $this->getOne($tour_property_id, 'symbol');
        return $one['symbol'];
    }
    function getListType()
    {
        global $core, $clsISO;
        $listType = array();
        // $listType['CruiseFaActivities'] = $core->get_Lang('Activities on Board');
        // $listType['RestFacilities'] = $core->get_Lang('restfacilities');
        $listType['CruiseFacilities'] = $core->get_Lang('cruisefacilities');
        // $listType['CabinFacilities'] = $core->get_Lang('cabinfacilities');
        // $listType['CruiseServices'] = $core->get_Lang('Cruise Services');
        // $listType['TravelAs'] = $core->get_Lang('Great for groups');
        // $listType['ThingAbout'] = $core->get_Lang('Things about');
        // $listType['GroupSize'] = $core->get_Lang('Group size');
        // $listType['HighLow'] = $core->get_Lang('High/Low season');
        // $listType['Conditions'] = $core->get_Lang('Conditions');
        $listType['CruiseMaterial'] = $core->get_Lang('Cruise Material');
        $listType['MEAL'] = $core->get_Lang('Meal');
        return $listType;
    }
    function getTextByType($selected = '')
    {
        $lstType = $this->getListType();
        return $lstType[$selected];
    }
    function getSelectByType($selected = '')
    {
        global $core;
        #
        $lstType = $this->getListType();
        $html = '<option value="">-- ' . $core->get_Lang('select') . ' --</option>';
        foreach ($lstType as $key => $val) {
            $selected_index = ($selected == $key) ? 'selected="selected"' : '';
            $html .= '<option value="' . $key . '" ' . $selected_index . '>' . $val . '</option>';
        }
        return $html;
    }
    function getImage($pval)
    {
        global $_LANG_ID;
        $one = $this->getOne($pval, 'image');
        if ($one['image'] != '')
            return $one['image'];
    }
    function getSelectByProperty($type, $selected = '', $is_multi = 0)
    {
        global $core, $clsISO;
        #
        $all = $this->getAll("is_trash=0 and type='$type' order by order_no asc");

        if (!empty($all)) {
            $i = 0;
            foreach ($all as $item) {
                if (!empty($is_multi)) {
                    $selected_index = ($clsISO->checkContainer($selected, $item[$this->pkey])) ? 'selected="selected"' : '';
                } else {
                    $selected_index = ($selected == $item[$this->pkey]) ? 'selected="selected"' : '';
                }
                $html .= '<option value="' . $item[$this->pkey] . '" ' . $selected_index . '>' . $this->getTitle($item[$this->pkey]) . '</option>';
                ++$i;
            }
        }
        return $html;
    }
    function getSelectByProperty2($type, $selected = '', $is_multi = 0, $cruise_type = '')
    {
        global $core, $clsISO;
        #
        if ($cruise_type == 0) {
            $all = $this->getAll("is_trash=0 and type='$type' and is_private=1 order by order_no asc");
        } elseif ($cruise_type == 1) {
            $all = $this->getAll("is_trash=0 and type='$type' and is_private=0 order by order_no asc");
        }

        if (!empty($all)) {
            $i = 0;
            foreach ($all as $item) {
                if (!empty($is_multi)) {
                    $selected_index = ($clsISO->checkContainer($selected, $item[$this->pkey])) ? 'selected="selected"' : '';
                } else {
                    $selected_index = ($selected == $item[$this->pkey]) ? 'selected="selected"' : '';
                }
                $html .= '<option value="' . $item[$this->pkey] . '" ' . $selected_index . '>' . $this->getTitle($item[$this->pkey]) . '</option>';
                ++$i;
            }
        }
        return $html;
    }
	
	function getSelectAirportTour($tour_id=0,$selected='') 
	{
        global $core;
        #
		$clsCountry = new Country();
		$cond = '';
		if($tour_id > 0){			
			$cond = " AND country_id IN (SELECT country_id FROM default_tour_destination WHERE is_trash=0 and tour_id='$tour_id' group by country_id)";
		}
        $all = $this->getAll("is_trash=0 and type='AIRPORT' ".$cond." order by order_no desc",$this->pkey.',title,country_id');
		$listCountry = [];
		foreach($all as $k => $v){
			if(!in_array($v['country_id'],$listCountry)){
				$listCountry[] = $v['country_id'];
			}			
		}
		$lstCountry = $clsCountry->getAll('is_trash=0 and country_id IN ('.implode(',',$listCountry).')',$clsCountry->pkey.',title');
        if (!empty($all) && !empty($lstCountry)) {
            $i = 0;
			foreach($lstCountry as $key => $value){
				$html .= '<optgroup label="'.$value['title'].'">';				
				foreach ($all as $item) {
					if($item['country_id'] == $value['country_id']){
						$selected_index = ($selected == $item[$this->pkey]) ? 'selected="selected"' : '';
						$html.='<option value="' . $item[$this->pkey] . '" ' . $selected_index . '>' . $item['title'] . '</option>';
					}
				}
				$html .= '</optgroup>';				
			}
        }else{
			$html.='<option value="" disabled>' . $core->get_Lang('Arrival airport list is empty') . '</option>';
		}
        return $html;
    }
	
    function makeOption($cat_id = 0, $type = '', $selectedid = "", $level = 0, &$arrHtml)
    {
        global $dbconn;
        $cond = "is_trash=0 and parent_id='" . $cat_id . "'";
        if ($type != '') {
            $cond .= " and type='$type'";
        }
        $arrListCat = $this->getAll($cond);
        if (is_array($arrListCat)) {
            foreach ($arrListCat as $k => $v) {
                $selected = ($v[$this->pkey] == $selectedid) ? "selected" : "";
                $value = $v[$this->pkey];
                $option = str_repeat("|---- ", $level) . $this->getTitle($v[$this->pkey]);
                $arrHtml[$value] = $option;
                $this->makeOption($v[$this->pkey], $type, $selectedid, $level + 1, $arrHtml);
            }
            return "";
        } else {
            return "";
        }
    }
    function getListOption($selected = '')
    {
        global $core;
        #
        $arrOptionsCategory = array();
        $this->makeOption(0, "", "", 0, $arrOptionsCategory);
        $html = '<option value=""> << ' . $core->get_Lang('select') . ' >> </option>';
        foreach ($arrOptionsCategory as $k => $v) {
            $selected_index = ($k == $selected) ? 'selected="selected"' : '';
            $oneItem = $this->getOne($k);
            $html .= '<option value="' . $k . '" ' . $selected_index . '>' . $v . '</option>';
        }
        return $html;
    }
    function checkContain($haystack, $needle)
    {
        $pos = strpos($haystack, $needle);

        if ($pos === false) {
            return 0;
        } else {
            return 1;
        }
    }
    function doDelete($pvalTable)
    {
        $clsISO = new ISO();
        $type = $this->getOneField('type', $pvalTable);
        if ($type == 'GroupSize') {
            $clsCruiseSeasonPrice = new CruiseSeasonPrice();
            $clsCruiseSeasonPrice->deleteByCond("group_size_id='$pvalTable'");
        }

        #
        $this->deleteOne($pvalTable);
        return 1;
    }
}
