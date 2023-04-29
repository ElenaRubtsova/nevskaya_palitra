<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) { die(); }
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
?>

<div class="about-slider-wrapper">
    <button class="btn btn-small slider-btn bg-red with-arrow-left" data-dir="Prev"
            onclick="plusSlides(-1)"></button>
        <? $i = 0; ?>
        <? foreach ($arResult["ITEMS"] as $file) { ?>
            <div class="slider-item fade">
                <?=CFile::ShowImage($file['src'], $arParams['PICTURE_WIDTH'], $arParams['PICTURE_HEIGHT']);?></div>
            <? $i++;
        } ?>
    <button class="btn btn-small slider-btn bg-red with-arrow-right" data-dir="Next"
            onclick="plusSlides(1)"></button>
</div>
