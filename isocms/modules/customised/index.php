<?php

global $core;

$sub = isset($stdio) ? $stdio->GET("sub", "default") : "default";

$act = isset($stdio) ? $stdio->GET("act", "default") : "default";

$tmp = explode('/', __FILE__);

$clsModule = new Module($tmp[count($tmp) - 2]);



$clsModule->run($sub, $act);

$assign_list["sub"] = $sub;

$assign_list["act"] = $act;



if (!$core->checkActiveModule('customised')) {

    header('Location:/');

    exit();

}



$clsISO = new ISO();

if (!$clsISO->getCheckActiveModulePackage($package_id, $mod, 'default', 'default')) {

    header('Location:/');

    exit();

}

?>