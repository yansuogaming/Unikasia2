<?php
class Team extends dbBasic{
    function __construct(){
        $this->pkey = "team_id";
        $this->tbl = DB_PREFIX."team";
    }
    function getImage($pvalTable, $w, $h){
        global $clsISO;
        $oneTable = $this->getOne($pvalTable, "image");
        if($oneTable['image']!=''){
            $image = $oneTable['image'];
            return $clsISO->tripslashImage($image,$w,$h);
        }
        $noimage = URL_IMAGES.'/noimage.png';
        return '/files/thumb/'.$w.'/'.$h.'/'.$clsISO->parseImageURL($noimage);
    }
    function getUrlImage($pvalTable){
        global $clsISO;
        $oneTable = $this->getOne($pvalTable, "image");
        $url_image = $oneTable['image'];
        return $clsISO->tripslashUrl($url_image);
    }
    function getName($pvalTable){
        $one = $this->getOne($pvalTable,'name');
        return $one['name'];
    }
    function getAbout($pvalTable){
        $one=$this->getOne($pvalTable,'content');
        return html_entity_decode($one['content']);
    }
    function doDelete($pvalTable){
        $clsISO = new ISO();
        #
        $this->deleteOne($pvalTable);
        return 1;
    }

}
?>