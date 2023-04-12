<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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

//if($USER->isAdmin()) {echo('<pre>');print_r('true');echo('</pre>');}//$arResult["ITEMS"]
//if($USER->isAdmin()) {echo('<pre>');print_r($arResult["ITEMS"]);echo('</pre>');}//$arResult["ITEMS"]
?><? //=$arResult["ITEMS"][0]['src'];?>

<div class="container">
    <div class="section-inner">
        <div class="about-slider-wrapper">
            <button class="btn btn-small slider-btn bg-red with-arrow-left" data-dir="Prev"
                    onclick="plusSlides(-1)"></button>
            <? $i = 0; ?>
            <? foreach ($arResult["ITEMS"] as $item) { ?>
                <div class="slider-item">
                    <img src="<?=$item['src']?>" alt="" class="slick-loading"></div>
                <? $i++;
            } ?>
            <button class="btn btn-small slider-btn bg-red with-arrow-right" data-dir="Next"
                    onclick="plusSlides(1)"></button>
        </div>
    </div>
</div>

<!--<div class="container">
    <div class="section-inner">
        <div class="about-slider-wrapper">
            <button class="btn btn-small slider-btn bg-red with-arrow-left" data-dir="Prev"></button>
            <div class="">
                <img src="<?=$arResult["ITEMS"][0]['src']?>"/>
                <div class="about-slider-item"><img data-lazy="<?=$arResult["ITEMS"][0]['src']?>" alt=""></div>
            </div>
            <button class="btn btn-small slider-btn bg-red with-arrow-right" data-dir="Next"></button>
        </div>
    </div>
</div>-->

<div class="container">
    <div class="section-inner">
        <div class="about-slider-wrapper">
            <button class="btn btn-small slider-btn bg-red with-arrow-left" data-dir="Prev" onclick="plusSlides(-1)"></button>
            <div class="about-slider slick-initialized slick-slider">

                <div class="slick-list draggable">
                    <div class="slick-track"
                         style="opacity: 1; width: 21080px; transform: translate3d(-1240px, 0px, 0px);">
                        <?$i = 0;?>
                        <? foreach ($arResult["ITEMS"] as $item) { ?>
                        <div class="about-slider-item slick-slide slick-cloned" data-slick-index="<?=$i?>" aria-hidden="true" style="width: 1240px;" tabindex="-1">
                            <img data-lazy="<?=$item['src']?>" alt="" class="slick-loading"></div>
                        <? $i++; } ?>

                    </div>
                </div>

            </div>
            <button class="btn btn-small slider-btn bg-red with-arrow-right" data-dir="Next" onclick="plusSlides(1)"></button>
        </div>
    </div>
</div>
