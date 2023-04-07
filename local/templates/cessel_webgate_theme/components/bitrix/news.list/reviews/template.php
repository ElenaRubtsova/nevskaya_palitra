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
//$this->setFrameMode(true);
?>

<div class="">
	<!--<section id="reviews-section-title" class="page-section club-intro">
	    <div class="container">
	        <div class="section-inner">
	            <div class="section-title">
	                <h1 class="title-with-image"><?=GetMessage("REVIEWS"); ?></h1>
	            </div>
	        </div>
	    </div>
	</section>-->
	<div class="">
	    <div class="container">
	        <div class="section-inner">
	            <div id="reviews-list" class="reviews-list filter-result" data-available-count="<?=$arParams['COUNT_IN_LIST'];?>" data-max-count="<?=count($arResult["ITEMS"])?>">
                    <div class="row">
                        <? $k = $arParams['COUNT_IN_LIST']; $num = count($arResult["ITEMS"]);
                           if ($k < $num) { $n = $k; $showButtonMore = true; }
                           else $n = $num;?>
                        <? for ($i = 0; $i < $n; $i++) {
                            $arItem = $arResult["ITEMS"][$i];
                            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM'))); ?>
                            <div id="review-<?=($this->GetEditAreaId($arItem['ID']).$i);?>" class="the-review col-6to12">
                                <div class="reviews-slider-item reviews-item w-100">
                                    <?
                                    //pp(CFile::GetPath($arItem["PREVIEW_PICTURE"]));
                                    if ($arItem["PREVIEW_PICTURE"] != 0)
                                        $SRC = CFile::GetPath($arItem["PREVIEW_PICTURE"]);
                                    else
                                        $SRC = "/local/templates/cessel_webgate_theme/images/intro_logo.svg";
                                    $ALT = $arItem["NAME"];
                                    ?>
                                    <div class="slider-item-image">
                                        <img class="olazy"
                                             data-src="<?=$SRC; ?>"
                                             alt="<?=$ALT; ?>"/>
                                    </div>
                                    <div class="slider-item-body">
                                        <? if ($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]) : ?>
                                            <p><?=$arItem["PREVIEW_TEXT"]; ?></p>
                                        <? endif ?>
                                        <h3>
                                            <? if ((!$arParams["HIDE_LINK_WHEN_NO_DETAIL"]) || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])) { ?>
                                                <a href="javascript:void(0);" onclick="show_popup($(this))"
                                                   data-name="<?=$arItem["NAME"];?>"
                                                   data-image="<?=$SRC;?>"
                                                   data-detail-text="<?=htmlspecialchars($arItem["DETAIL_TEXT"]);?>"
                                                ><?=$arItem["NAME"]?></a>
                                            <? } else { ?>
                                                <?=$arItem["NAME"]?>
                                            <? } ?>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        <? } //показать кнопку ещё ?>
                        <? if ($showButtonMore) :
                        $rewCount = '<span class="rew-count">'. $n . '</span>';
                        $maxCount = '<span class="max-count">'. $num . '</span>';?>
                        <div class="section-bottom-reviews load_more_wrapper">
                        <span class="news-count"><?=sprintf(
                                '%s %s %s %s %s',
                                GetMessage('YOU_LOOKED'),
                                $rewCount,
                                GetMessage('FROM'),
                                $maxCount,
                                GetMessage('REVIEWS_LC')
                            ); ?></span>
                            <button id="show_more_reviews" onclick="window.location.href='/reviews/'"
                                    class="btn btn-wide bg-red centered">
                                <span><?=GetMessage('SHOW_MORE'); ?></span>
                            </button>
                        </div>
                        <?endif;?>
                    </div>

                    <!--review-popup-->
                    <div class="overlay" id="review">
                        <div class="flex-popup">
                            <div class="popup">
                                <span class="close_popup" onclick="close_popup()">X</span>
                                <img class="photo"/>
                                <h2 class="title"></h2>
                                <p class="description"></p>
                            </div>
                        </div>
                    </div>

	            </div>
	        </div>
	    </div>
	</div>
</div>

