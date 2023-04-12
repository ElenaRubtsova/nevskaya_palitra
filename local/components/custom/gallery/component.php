<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

if ($arParams["PICTURE_IDS"] != '') {
    $arResult["ITEMS"] = [];
    foreach ($arParams["PICTURE_IDS"] as $id) {
        $arResult["ITEMS"][] = CFile::ResizeImageGet(
            $id,
            array("width"=> 1500, "height"=> 800),
            BX_RESIZE_IMAGE_PROPORTIONAL_ALT,
            false
        );
        //if($USER->isAdmin()) {echo('<pre>');print_r($arResult["ITEMS"][$id]);echo('</pre>');}
    }
}

$this->IncludeComponentTemplate();