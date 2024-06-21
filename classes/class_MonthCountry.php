<?php
class MonthCountry extends dbBasic
{
    function __construct()
    {
        $this->pkey = "month_country_id";
        $this->tbl = DB_PREFIX . "month_country";
    }
    function getIntro($month_country_id, $one = null)
    {
        global $_LANG_ID;
        if (!isset($one['intro'])) {
            $one = $this->getOne($month_country_id, 'intro');
        }
        return html_entity_decode($one['intro']);
    }
    function getSelectMultiMonth($selected = '', $is_prefix = true)
    {
        global $core, $clsISO;
        $lstMonth = $this->getAll("is_trash=0 and is_online=1");
        $html = !$is_prefix ? '' : '<option value="0" disabled>-- ' . $core->get_Lang('Select Month') . ' --</option>';
        if (is_array($lstMonth) && count($lstMonth) > 0) {
            foreach ($lstMonth as $item) {
                $_array = $this->getArray($selected);
                $html .= '<option value="' . $item['month_id'] . '" ' . ($clsISO->checkItemInArray($item['month_id'], $_array) ? 'selected="selected"' : '') . '>' . $this->getTitle($item['month_id']) . '</option>';
            }
            unset($lstMonth);
        }
        return $html;
    }
    // Convert chuỗi |a|b|c| thành mảng
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
}
