<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
//print_r($arParams["PICTURE_IDS"]);
if ($arParams["PICTURE_IDS"] != '') {
    $arResult["ITEMS"] = [];
    foreach ($arParams["PICTURE_IDS"] as $id) {
        $arResult["ITEMS"][] = CFile::ResizeImageGet(
            $id,
            array("width"=> $arParams['PICTURE_WIDTH'], "height"=> $arParams['PICTURE_HEIGHT']),
            BX_RESIZE_IMAGE_PROPORTIONAL_ALT,
            false
        );
    }
}
//print_r($arResult["ITEMS"]);
$this->IncludeComponentTemplate();