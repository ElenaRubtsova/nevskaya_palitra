<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true){die();}

$items = array();
//echo('<pre>');print_r(array_keys($arResult["ITEMS"]));echo('</pre>');
foreach ($arResult['ITEMS'] as $item) {
    if ($items[$item['PROPERTIES']['TYPE']['VALUE']] === '') {
        $items[$item['PROPERTIES']['TYPE']['VALUE']] = array();
    }
    $items[$item['PROPERTIES']['TYPE']['VALUE']][$item['PROPERTIES']['IS_BASE']['VALUE']][] = $item;
};

$arResult['ITEMS'] = $items;
//echo('<pre>');print_r(array_keys($arResult["ITEMS"]));echo('</pre>');
//echo('<pre>');print_r(array_keys($arResult["ITEMS"]["MAIN SETS TYPES"]));echo('</pre>');

?>