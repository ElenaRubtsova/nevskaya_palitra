<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
//if($USER->isAdmin()) {echo('<pre>');print_r($arResult["ITEMS"][0]);echo('</pre>');}
//print_r($arResult["ITEMS"][0]['NAME']);
//print_r($arResult["ITEMS"][0]['DETAIL_TEXT']);
//print_r($arResult["ITEMS"][0]['PREVIEW_PICTURE']);
//$file = CFile::ResizeImageGet($arResult["ITEMS"][0]['PREVIEW_PICTURE'],
//array('width' => 300, 'height' => 300), BX_RESIZE_IMAGE_EXACT, true);
/*echo ("<img src=".$file['src'].
    " width=".$file['width'].
    " height=".$file['height'].
    " alt=".$arResult["ITEMS"][0]['PREVIEW_PICTURE']['ALT'].">");*/
//echo CFile::ShowImage($arResult["ITEMS"][0]['PREVIEW_PICTURE']['SRC']);
//$arItem = $arResult["ITEMS"][0];
//$dopItems = array('0' => $arResult["ITEMS"][1], '1' => $arResult["ITEMS"][2]);
?>
<? foreach ($arResult["ITEMS"] as $category => $blocks) : ?>
    <div class="block">
        <!-- osnovnoy-block -->
        <? if ($blocks['Y'] !== ''): ?>
            <div style="padding-bottom: 40px"></div>
            <? foreach ($blocks['Y'] as $arItem) : ?>
                <? if ($arItem !== ''): ?>
                    <div class="card">
                        <!--<div class="col-6to12">-->
                        <? $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                           $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM'))); ?>
                        <div class="card-body">
                            <h2><?=$arItem['PROPERTIES']['TYPE']['VALUE'];?></h2>
                            <div class="image respond">
                                <?$file = CFile::ResizeImageGet(
                                    $arItem['PREVIEW_PICTURE'],
                                    array(
                                        'width' => //($arItem['PROPERTIES']['PICTURE_ANONCE_WIDTH']['VALUE'] !== false) ?
                                            //$arItem['PROPERTIES']['PICTURE_ANONCE_WIDTH']['VALUE'] :
                                            500,
                                        'height' => //($arItem['PROPERTIES']['PICTURE_ANONCE_HEIGHT']['VALUE'] !== false) ?
                                            //$arItem['PROPERTIES']['PICTURE_ANONCE_HEIGHT']['VALUE'] :
                                            500,
                                    ),
                                    BX_RESIZE_PROPORTIONAL,
                                    true
                                );?>
                                <?=CFile::ShowImage($file['src']);
                                //CFile::ShowImage($arItem['PREVIEW_PICTURE']['UNSAFE_SRC']);?>
                            </div>
                            <h3><?=$arItem['NAME'];?></h3>
                            <div class="desc"><?=$arItem['PREVIEW_TEXT'];?></div>

                            <div class="image">
                                <? foreach ($arItem['PROPERTIES']['FORMS']['VALUE'] as $photo) :
                                    $file = CFile::ResizeImageGet(
                                        $photo,
                                        array('width' => 400, 'height' => 150),
                                        BX_RESIZE_PROPORTIONAL,
                                        true
                                    );?>
                                    <?=CFile::ShowImage($file['src']);?>
                                <? endforeach; ?>
                            </div>

                            <div class="row">
                                <? if ($arItem['PROPERTIES']['VYKRASKA']['VALUE'] !== '') : ?>
                                    <div class="col-3to12">
                                        <div class="benefit">
                                            <div class="badge badge-hollow">
                                                <a href="<?=$arItem['PROPERTIES']['VYKRASKA']['VALUE'];?>"
                                                   class="btn btn-small bg-green badge-download">
                                                    <svg width="20" height="35">
                                                        <use xlink:href="/local/templates/cessel_webgate_theme/images/icons/sprite.svg#icon_arrow_down"></use>
                                                    </svg>
                                                </a>
                                                <h4 class="badge-title">Colour palette</h4>
                                            </div>
                                        </div>
                                    </div>
                                <? endif; ?>
                                <? if ($arItem['PROPERTIES']['INSTRUCTION']['VALUE'] !== '') : ?>
                                    <div class="col-3to12">
                                        <div class="benefit">
                                            <div class="badge badge-hollow">
                                                <a href="<?=$arItem['PROPERTIES']['INSTRUCTION']['VALUE'];?>"
                                                   class="btn btn-small bg-green badge-download">
                                                    <svg width="20" height="35">
                                                        <use xlink:href="/local/templates/cessel_webgate_theme/images/icons/sprite.svg#icon_arrow_down"></use>
                                                    </svg>
                                                </a>
                                                <h4 class="badge-title">Instruction</h4>
                                            </div>
                                        </div>
                                    </div><? endif; ?>
                                <? if ($arItem['PROPERTIES']['CATALOG_REF']['VALUE'] !== '') : ?>
                                <div class="col-3to12">
                                    <div class="benefit">
                                        <div class="badge badge-hollow">
                                            <a href="<?=$arItem['PROPERTIES']['CATALOG_REF']['VALUE'];?>"
                                               class="btn btn-small bg-green badge-download">
                                                <svg width="20" height="35">
                                                    <use xlink:href="/local/templates/cessel_webgate_theme/images/icons/sprite.svg#icon_arrow_down"></use>
                                                </svg>
                                            </a>
                                            <h4 class="badge-title">Catalog</h4>
                                        </div>
                                    </div>
                                </div>
                                <? endif; ?>
                            </div>
                        </div>
                        <!--</div>--><br>
                    </div>
                <? endif; ?>
            <? endforeach; ?>
        <? endif; ?>

        <!-- dop-sets -->
        <? if ($blocks['N'] !== ''): ?>
            <div style="padding-bottom: 30px"></div>
            <div class="row">
                <? foreach ($blocks['N'] as $arItem): ?>
                    <? if ($arItem !== ''): ?>
                        <div class="col-6to12">
                            <div class="card">
                                <? $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM'))); ?>
                                <div class="card-body">
                                    <? $file = CFile::ResizeImageGet(
                                        $arItem['PREVIEW_PICTURE'],
                                        array(
                                            'width' => //($arItem['PROPERTIES']['PICTURE_DOP_WIDTH']['VALUE'] !== false) ?
                                                //$arItem['PROPERTIES']['PICTURE_ANONCE_WIDTH']['VALUE'] :
                                                300,
                                            'height' => //($arItem['PROPERTIES']['PICTURE_DOP_HEIGHT']['VALUE'] !== false) ?
                                                //$arItem['PROPERTIES']['PICTURE_ANONCE_HEIGHT']['VALUE'] :
                                                300,
                                        ),
                                        BX_RESIZE_PROPORTIONAL,
                                        true
                                    );?>
                                    <div class="image respond"><?=CFile::ShowImage($file['src']);?></div>
                                    <? if($arItem['PROPERTIES']['CATALOG_REF']['VALUE'] !== '') : ?>
                                        <a href="<?=$arItem['PROPERTIES']['CATALOG_REF']['VALUE'];?>">
                                        <? $endatag = '</a>';
                                       endif; ?>
                                    <h3><?=$arItem['NAME'];?></h3><?=$endatag;?>
                                    <?=$arItem['PREVIEW_TEXT'];?>
                                </div>
                            </div>
                        </div>
                    <? endif; ?>
                <? endforeach; ?>
            </div>
        <? endif; ?>
    </div>
<? endforeach; ?>