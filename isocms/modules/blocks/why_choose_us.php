<?php

global $core, $smarty, $mod, $act, $clsISO, $package_id, $deviceType;

$clsWhy = new Why();
$clsPartner = new Partner();

switch ($mod) {
    case "homepackage":
    case "tour":
    case "guide":
        $type = "HOME";
        break;
    case "destination":
        $type = "DESTINATION";
        break;
    default:
        $type = "";
}

$listWhy = $clsWhy->getAll("is_trash = 0 and is_online = 1 and type = '$type' order by order_no ASC");
$smarty->assign('listWhy', $listWhy);

if ($clsISO->getCheckActiveModulePackage($package_id, 'partner', 'default', 'default')) {
    $clsPartner = new Partner();
    $smarty->assign('clsPartner', $clsPartner);
    $lstPartner = $clsPartner->getAll("is_trash=0 and is_online=1 and image<>'' and type='' order by order_no asc", $clsPartner->pkey . ",title,image,url");
    $totalProgram = $lstPartner ? count($lstPartner) : 0;
    $TotalListPartner = ceil($totalProgram / 6);
    if ($clsISO->getBrowser() == 'phone') {
        $TotalListPartner = ceil($totalProgram / 3);
    }
    $smarty->assign("TotalListPartner", $TotalListPartner);
    $smarty->assign("listPartner", $lstPartner);
}
