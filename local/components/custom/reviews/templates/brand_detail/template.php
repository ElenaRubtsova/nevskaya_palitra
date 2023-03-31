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
if($USER->isAdmin()) {echo('<pre>');print_r($arResult["ITEMS"]);echo('</pre>');}
?>

<div class="page-main">
	<section id="reviews-section-title" class="page-section club-intro">
	    <div class="container">
	        <div class="section-inner">
	            <div class="section-title">
	                <h1 class="title-with-image"><?=GetMessage("REVIEWS"); ?></h1>
	            </div>
	        </div>
	    </div>
	</section>
	<div class="page-section">
	    <div class="container">
	        <div class="section-inner">
	            <div id="reviews-list" class="reviews-list filter-result">
	                <div class="row">
						<? foreach($arResult["ITEMS"] as $arItem ) : ?>
							<? $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
							$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM'))); ?>
							<div id="review-<?=$this->GetEditAreaId($arItem['ID']);?>" class="the-review col-6to12">
		                        <div class="reviews-slider-item reviews-item w-100">
									<? 
									$SRC = "/local/templates/cessel_webgate_theme/images/intro_logo.svg";
									$ALT = "review thubmnail";
									if ($arParams["DISPLAY_PICTURE"] != "N" && is_array($arItem["PREVIEW_PICTURE"])) {
										$SRC = $arItem["PREVIEW_PICTURE"]["SRC"];
										$ALT = $arItem["PREVIEW_PICTURE"]["ALT"];
									} ?>

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
	                                		<?=sprintf(
	                                			"%s %s %s",
	                                			(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"]) || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"]) ? '<a href="' . sky_localized_url($arItem["DETAIL_PAGE_URL"]) . '">' : '',
	                                			$arItem["NAME"],
	                                			(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"]) || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"]) ? '</a>' : ''
	                                		);?>
                                		</h3>
		                            </div>
		                        </div>
		                    </div>
						<?endforeach;?>
                    </div>
	                <? $rewCount = '<span class="rew-count">'. count($arResult["ITEMS"]) . '</span>';
                    $maxNumber = intval($arResult["NAV_RESULT"]->NavRecordCount);
                    $maxCount = '<span class="max-count">'. $maxNumber . '</span>';

					if ($arResult["ITEMS"] && count($arResult["ITEMS"])) : ?>
		                <div class="section-bottom load_more_wrapper">
		                    <span class="news-count"><?=sprintf(
		                    	'%s %s %s %s %s',
		                    	GetMessage('YOU_LOOKED'),
                                $rewCount,
		                    	GetMessage('FROM'),
                                $maxCount,
		                    	GetMessage('REVIEWS_LC')
	                    	); ?></span>
		                    <button id="load_more_reviews" 
		                    		class="btn btn-wide bg-red centered">
		                    	<span><?=GetMessage('LOAD_MORE'); ?></span>
		                    </button>
		                </div>
	                <? endif; ?>
	            </div>
	        </div>
	    </div>
	</div>
</div>
