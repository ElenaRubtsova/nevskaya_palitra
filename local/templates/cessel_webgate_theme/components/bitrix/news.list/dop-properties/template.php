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
        <?//print_r($blocks['Y']);?>
        <? if ($blocks['Y'] !== ''): ?>
            <div style="padding-bottom: 20px"></div><?//print_r($blocks['Y']);?>
            <? foreach ($blocks['Y'] as $arItem) : ?>
                <? if ($arItem !== ''): ?><?/*='<pre>';print_r($arItem);echo('</pre>');*/?>
                    <? $this->AddEditAction(
                        $arItem['ID'],
                        $arItem['EDIT_LINK'],
                        CIBlock::GetArrayByID(
                            $arItem["IBLOCK_ID"],
                            "ELEMENT_EDIT"
                        )
                    );
                    $this->AddDeleteAction(
                        $arItem['ID'],
                        $arItem['DELETE_LINK'],
                        CIBlock::GetArrayByID(
                            $arItem["IBLOCK_ID"],
                            "ELEMENT_DELETE"),
                        array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM'))
                    );?>
                    <div class="card" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6to12">
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
                                        <!--<img height="500" src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>">-->
                                        <?=CFile::ShowImage($file['src']);
                                        //CFile::ShowImage($arItem['PREVIEW_PICTURE']['UNSAFE_SRC']);?>

                                    </div>
                                </div>
                                <div class="col-6to12">
                                    <h3 class="big"><?=$arItem['NAME'];?></h3>
                                    <div class="desc"><?=$arItem['PREVIEW_TEXT'];?></div>
                                    <div class="image">
                                        <? foreach ($arItem['PROPERTIES']['FORMS']['VALUE'] as $photo) :
                                            $file = CFile::ResizeImageGet(
                                                $photo,
                                                array('width' => 1700, 'height' => 250),
                                                BX_RESIZE_PROPORTIONAL,
                                                true
                                            );?>
                                            <?//=CFile::ShowImage($file['src']);?>
                                        <img width="340" src="<?=$file['src']?>">
                                        <? endforeach; ?>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <? if ($arItem['PROPERTIES']['VYKRASKA']['VALUE'] !== '') : ?>
                                    <div class="kad col-3to12">
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
                                    <div class="kad col-3to12">
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
                                    <div class="kad col-3to12">
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
                    </div><br>
                <? endif; ?>
            <? endforeach; ?>
        <? endif; ?>

        <!-- dop-sets -->
        <?//print_r($blocks['N']);?>
        <? if ($blocks['N'] !== ''): ?>
            <div style="padding-bottom: 30px"></div>
            <div class="row">
                <? foreach ($blocks['N'] as $arItem): ?><?/*echo('<pre>');print_r($arItem['ID']);echo('</pre>');*/?>
                    <? if ($arItem !== '' /*&& $arItem['FORMS']['ACTIVE'] === 'Y'*/): ?>
                    <? $cl = 'col-3to12'; if ($arItem['PROPERTIES']['WIDTH']['VALUE'] != '') $cl = $arItem['PROPERTIES']['WIDTH']['VALUE'];?>
                        <div class="pad <?=$cl;?>">
                            <? $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM'))); ?>

                            <div class="card" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                                <div class="card-body">
                                    <?
                                    $width = 300;
                                    if ($arItem['PROPERTIES']['PICTURE_ANONCE_WIDTH']['VALUE'] != '')
                                        $width = (int)$arItem['PROPERTIES']['PICTURE_ANONCE_WIDTH']['VALUE'];

                                    $height = 300;
                                    if ($arItem['PROPERTIES']['PICTURE_ANONCE_HEIGHT']['VALUE'] != '')
                                        $height = (int)$arItem['PROPERTIES']['PICTURE_ANONCE_HEIGHT']['VALUE'];

                                    $file = CFile::ResizeImageGet(
                                        $arItem['PREVIEW_PICTURE'],
                                        array('width' => $width, 'height' => $height),
                                        BX_RESIZE_PROPORTIONAL,
                                        true
                                    );?>
                                    <div class="image respond"><?=CFile::ShowImage($file['src']);?></div>
                                    <?if ($arItem['PROPERTIES']['FORMS'] != '') {?>
                                        <?
                                        foreach ($arItem['PROPERTIES']['FORMS']['VALUE'] as $photo) :
                                            $file = CFile::ResizeImageGet(
                                                $photo,
                                                array('width' => $width, 'height' => $width),
                                                BX_RESIZE_PROPORTIONAL,
                                                true
                                            );?>
                                            <?//=CFile::ShowImage($file['src']);?>
                                        <div class="image respond">
                                            <img src="<?=$file['src']?>"></div>
                                        <? endforeach; ?>
                                    <?}?>
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