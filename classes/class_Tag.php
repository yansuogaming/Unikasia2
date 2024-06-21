<?php

class Tag extends dbBasic

{

    function __construct()

    {

        $this->pkey = "tag_id";

        $this->tbl = DB_PREFIX . "tag";

    }

    function getBySlug($slug)

    {

        $all = $this->getAll("slug='$slug' limit 0,1", $this->pkey);

        return $all[0][$this->pkey];

    }

    function getTitle($pval, $one = null)

    {

        if (!isset($one['title'])) {

            $one = $this->getOne($pval, 'title');

        }

        return $one['title'];

    }

    function getSlug($pval, $one = null)

    {

        if (!isset($one['slug'])) {

            $one = $this->getOne($pval, 'slug');

        }

        return $one['slug'];

    }

    function getLink($pval, $one = null)

    {

        global $extLang;

        $one = $this->getOne($pval);

        return $extLang . '/tag/' . $this->getSlug($pval, $one) . '/';

    }

    function getLinkTagBlog($pval, $one = null)

    {

        global $extLang;

        $one = $this->getOne($pval);

        return $extLang . '/blog/tag/' . $this->getSlug($pval, $one);

    }

    function getLinkTagGuide($pval, $one = null)

    {

        global $extLang, $_LANG_ID;

        $one = $this->getOne($pval);

        return '/' . $_LANG_ID . '/guides/tag/' . $this->getSlug($pval, $one);

    }

    function getLinkGuide($pval)

    {

        global $extLang;

        $one = $this->getOne($pval);

        return $extLang . '/cam-nang-du-lich/tag/' . $this->getSlug($pval);

    }

    function doDelete($tag_id)

    {

        // Delete Tags

        $this->deleteOne($tag_id);

        return 1;

    }

    function getTagsListText($classTable, $pvalTable)

    {

        global $clsISO;



        $clsClassTable  = new $classTable();

        $pfield = "list_tag_id";

        $tags_list = $clsClassTable->getOneField($pfield, $pvalTable);

        $tmp = !empty($tags_list) ? $clsISO->getArrayByTextSlash2($tags_list) : array();

        #

        $text = '';

        if (!empty($tmp)) {

            $tags_list_array = $this->getAll("tag_id in (" . implode(',', $tmp) . ")");

            if (!empty($tags_list_array)) {

                $ii = 0; // Init

                foreach ($tags_list_array as $tag) {

                    $text .= ($ii == 0 ? '' : ',') . $tag['title'];

                    ++$ii;

                }

            }

            unset($tags_list_array);

        }

        return $text;

    }

    function makeSelectboxOption($selected = '', $is_prefix = true)

    {

        global $core, $clsConfiguration, $clsISO;

        $sql = "is_trash=0";



        #
		if($is_prefix == "blog") $blog = "AND type='_BLOG'";

        $lstTag = $this->getAll($sql . " $blog order by tag_id ASC");

        $html = !$is_prefix ? '' : '<option value="0">-- ' . $core->get_Lang('selecttags') . ' --</option>';

        if (is_array($lstTag) && count($lstTag) > 0) {

            foreach ($lstTag as $k => $v) {

                $_array = $this->getArray($selected);

                $html .= '<option value="' . $v[$this->pkey] . '" ' . ($clsISO->checkItemInArray($v[$this->pkey], $_array) ? 'selected="selected"' : '') . '>' . $this->getTitle($v[$this->pkey]) . '</option>';

            }

            unset($lstTag);

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

}

