<?php
class Month extends dbBasic
{
    function __construct()
    {
        $this->pkey = "month_id";
        $this->tbl = DB_PREFIX . "month";
    }
    function getTitle($month_id)
    {
        $one = $this->getOne($month_id, 'title');
        return (!empty($one['title'])) ? $one['title'] : "";
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
