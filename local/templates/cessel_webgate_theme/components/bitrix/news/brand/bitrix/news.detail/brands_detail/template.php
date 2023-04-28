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
$themeClass = isset($arParams['TEMPLATE_THEME']) ? ' bx-'.$arParams['TEMPLATE_THEME'] : '';
CUtil::InitJSCore(['fx', 'ui.fonts.opensans']);
?>
<?//ar_print($arResult);
$banner = CFile::GetPath($arResult["PROPERTIES"]["CATALOG_BANNER"]["VALUE"]);
//echo $banner;
$icons_color[] = 'bg-red';
$icons_color[] = 'bg-blue';
$icons_color[] = 'bg-green';
?>
<div>
	<div class="page-section" id="<?echo $this->GetEditAreaId($arResult['ID'])?>">

		<?if($arParams["DISPLAY_PICTURE"]!="N"):?>
			<?if ($arResult["VIDEO"]) {?>
				<div class="mb-5 news-detail-youtube embed-responsive embed-responsive-16by9" style="display: block;">
					<iframe src="<?
					echo $arResult["VIDEO"] ?>" frameborder="0" allowfullscreen=""></iframe>
				</div>
				<?} else if ($arResult["SOUND_CLOUD"]) {?>
				<div class="mb-5 news-detail-audio">
					<iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=<?
					echo urlencode($arResult["SOUND_CLOUD"]) ?>&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
				</div>
				<?} else if ($arResult["SLIDER"] && count($arResult["SLIDER"]) > 1) {?>
				<div class="mb-5 news-detail-slider">
					<div class="news-detail-slider-container" style="width: <? echo count($arResult["SLIDER"]) * 100 ?>%;left: 0%;">
						<? foreach ($arResult["SLIDER"] as $file):?>
							<div style="width: <? echo 100 / count($arResult["SLIDER"]) ?>%;" class="news-detail-slider-slide">
								<img src="<?= $file["SRC"] ?>" alt="<?= $file["DESCRIPTION"] ?>">
							</div>
						<? endforeach ?>
						<div style="clear: both;"></div>
					</div>
					<div class="news-detail-slider-arrow-container-left">
						<div class="news-detail-slider-arrow"><i class="fa fa-angle-left"></i></div>
					</div>
					<div class="news-detail-slider-arrow-container-right">
						<div class="news-detail-slider-arrow"><i class="fa fa-angle-right"></i></div>
					</div>
					<ul class="news-detail-slider-control">
						<? foreach ($arResult["SLIDER"] as $i => $file):?>
							<li rel="<?= ($i + 1) ?>" <? if (!$i)
								echo 'class="current"' ?>><span></span></li>
						<? endforeach ?>
					</ul>
				</div>
				<?} else if ($arResult["SLIDER"]) {?>
				<div class="mb-5 news-detail-img">
					<img
						class="card-img-top"
						src="<?= $banner ?>"
						alt="<?= $arResult["SLIDER"][0]["ALT"] ?>"
						title="<?= $arResult["SLIDER"][0]["TITLE"] ?>"
					/>
				</div>
				<?} else if (is_array($arResult["DETAIL_PICTURE"])) {?>
				<div class="mb-5 news-detail-img">
					<img
						class="card-img-top"
						src="<?=$banner?>"
						alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>"
						title="<?=$arResult["DETAIL_PICTURE"]["TITLE"]?>"
						/>
				</div>
				<?}?>
		<?endif?>

		<div class="container">

			<?if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>
				<h3 class="news-detail-title"><?=$arResult["NAME"]?></h3>
			<?endif;?>

			<div class="section-inner">
				<div class="txt_anons">
					<?echo $arResult["PREVIEW_TEXT"];?>
				</div>
				<?if (is_array($arResult["PROPERTIES"]["features_image"])){?>
					<div class="index-catalog observables fade-down">
						<div class="row">
							<?//print_r($arResult["PROPERTIES"]["FEATURES"]['VALUE']); ?>
							<?$i = 0;?>
							<?foreach($arResult["PROPERTIES"]["features_image"]['VALUE'] as $featur){?>
							<div class="col-3to12">
								<div class="card-wrapper">
									<div class="card card-brand">
										<?$path_feat = CFile::GetPath($featur);?>
										<div class="card-image">
											<img class="loaded" src="<?=$path_feat;?>">
										</div>
										<div class="card-body">
											<h3><?echo $arResult["PROPERTIES"]["FEATURES"]["VALUE"][$i];?></h3>
										</div>
									</div>
								</div>
							</div>
							<?$i++;
							}
							//unset $i;	
							?>
						</div>
					</div>
				<?}?>

				<div class="txt_detail">
					<?echo $arResult["DETAIL_TEXT"];?>
				</div>
				
				<div class="section-benefits observables">
					<h2><?=$arResult['PROPERTIES']['TITLE_DESC']['VALUE'];?></h2>
                    <div class="row">
                        <?//print_r($arResult['PROPERTIES']['TITLE_DESC']);
                        $i = 0;
                        foreach ($arResult['PROPERTIES']['pluses_image']['VALUE'] as $index => $plus) {
                            $icon_image = '';
							$icon_image = CFile::GetPath($plus);?>
                            <div class="col-3to12">
                                <div class="benefit">
                                    <div class="benefit-icon <?=$icons_color[$i]; ?>">
                                        <? if (!empty($icon_image)) { ?>
                                            <img src="<?=$icon_image; ?>" />
						
                                        <? } ?>
                                    </div>
                                    <h3><?=$arResult["PROPERTIES"]["pluses"]["VALUE"][$index];?></h3>
                                </div>
                            </div>
                            <? $i++;
                        } ?>
                    </div>
                </div>
				
				<div class="section-palettes">
					<?if( $arResult['PROPERTIES']['DOWNLOAD_PALETTE']){?>
					<h2 style="margin-bottom: 50px; text-align: center; font-size: 36px;"><?=GetMessage("PALETTE_TITLE")?></h2>
					<?}?>
					
					<div class="row">
						<?
                        //print_r($arResult['PROPERTIES']['DOWNLOAD_PALETTE']['VALUE']);
                        //print_r($arResult['PROPERTIES']['DOWNLOAD_PALETTE_NAMES']['VALUE']);
							$files_id = $arResult['PROPERTIES']['DOWNLOAD_PALETTE']['VALUE'];
							$files_names = $arResult['PROPERTIES']['DOWNLOAD_PALETTE']['DESCRIPTION'];
							foreach($files_id as $index=>$file_id) {
								$file_link = CFile::GetPath($file_id);
								if (!empty($file_id)) {
									?>
										<div class="col-6to12">
											<div class="badge badge-hollow">
												<a href="<?=$file_link?>" class="btn btn-small bg-green badge-download">
													<svg width="20" height="35">
														<use xlink:href="/local/templates/cessel_webgate_theme/images/icons/sprite.svg#icon_arrow_down"></use>
													</svg>
												</a>
												<h3 class="badge-title"><?=$arResult['PROPERTIES']['DOWNLOAD_PALETTE_NAMES']['VALUE'][$index];?></h3>
											</div>
										</div> 
									<?
								}
							}                        
						?>
					</div>
                </div>

				<?if( $arResult['PROPERTIES']['INSTRUCTIONS']) { ?>
					<div class="section-palettes">
						<h2 style="margin-bottom: 50px; text-align: center; font-size: 36px;"><?=GetMessage("INSTRUCTIONS_TITLE")?></h2>
						<div class="row">
							<? 
								//$files_id = $item['INSTRUCTIONS']['VALUE'];
								//$files_names = $item['INSTRUCTIONS']['DESCRIPTION'];
								foreach($arResult['PROPERTIES']['INSTRUCTIONS']['VALUE'] as $index=>$val) {
									$file_link = CFile::GetPath($val);
									$file_name = 'File '.($index+1);//$arResult['PROPERTIES']['INSTRUCTIONS']['DESCRIPTION'][$index];
									if (!empty($file_link)) {
										?>
											<div class="col-6to12">
												<div class="badge badge-hollow">
													<a href="<?php echo $file_link?>" class="btn btn-small bg-green badge-download">
														<svg width="20" height="35">
															<use xlink:href="/local/templates/cessel_webgate_theme/images/icons/sprite.svg#icon_arrow_down"></use>
														</svg>
													</a>
													<h3 class="badge-title"><?= $file_name ?></h3>
												</div>
											</div> 
										<?
									}
								}                        
							?>
						</div>
					</div>
				<?}?>

			</div>

            <!-- reviews -->
            <div class="container">
                <div class="section-inner">
                    <div id="reviews-list" class="reviews-list filter-result" data-available-count="<?=$arParams['COUNT_IN_LIST'];?>" data-max-count="<?=count($arResult["ITEMS"])?>">
                        <div class="section-palettes">
                            <h2 style="margin-bottom: 50px; text-align: center; font-size: 36px;"><?=GetMessage("REVIEWS_TITLE")?></h2>
                        </div>
                        <div class="row">
                            <? $k = 6; $num = count($arResult["REVIEWS"]);
                            if ($k < $num) { $n = $k; $showButtonMore = true; }
                            else $n = $num;?>
                            <? for ($i = 0; $i < $n; $i++) {
                                $arItem = $arResult["REVIEWS"][$i];
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
                        <!-- review-popup -->
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
                        <!-- /review-popup -->
                    </div>
                </div>
            </div>
            <!-- /reviews -->

			<div class="section-bottom justify-center flexed">
			<?//ar_print($arResult);?>
				<a href="<?=sky_localized_url('/katalog/brand/brand-is-' . $arResult["CODE"].'/apply/'); ?>" class="btn btn-wide bg-green">
					<span><?=GetMessage("BRAND_SEE_CATALOG")?></span>
				</a>
			</div>

            <!-- gallery -->
            <div class="about-slider-wrapper">
                    <button class="btn btn-small slider-btn bg-red with-arrow-left" data-dir="Prev"
                            onclick="plusSlides(-1)"></button>
                    <? $i = 0; ?>
                    <? foreach ($arResult["PICTURES"] as $item) { ?>
                        <div class="slider-item fade">
                            <img src="<?=$item['src']?>" alt=""></div>
                        <? $i++;
                    } ?>
                    <button class="btn btn-small slider-btn bg-red with-arrow-right" data-dir="Next"
                            onclick="plusSlides(1)"></button>
                <div class="dots">
                <? for($i = 1; $i <= count($arResult["PICTURES"]); $i++) {?>
                    <span class="dot" onclick="currentSlide(<?=$i?>)"></span>
                <? } ?>
                </div>
            </div>
            <!-- /gallery -->

            <!-- dop-properties -->
            <? global $arrFilter;
            $arrFilter = array(
                'PROPERTY_BRAND' => '358',
                'ACTIVE' => 'Y',
            ); ?>
            <? $APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "dop-properties",
                array(
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "ADD_SECTIONS_CHAIN" => "Y",
                    "AJAX_MODE" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "CACHE_FILTER" => "N",
                    "CACHE_GROUPS" => "Y",
                    "CACHE_TIME" => "36000000",
                    "CACHE_TYPE" => "A",
                    "CHECK_DATES" => "Y",
                    "COMPOSITE_FRAME_MODE" => "A",
                    "COMPOSITE_FRAME_TYPE" => "AUTO",
                    "DETAIL_URL" => "",
                    "DISPLAY_BOTTOM_PAGER" => "Y",
                    "DISPLAY_DATE" => "Y",
                    "DISPLAY_NAME" => "Y",
                    "DISPLAY_PICTURE" => "Y",
                    "DISPLAY_PREVIEW_TEXT" => "Y",
                    "DISPLAY_TOP_PAGER" => "N",
                    "FIELD_CODE" => array("", ""),
                    "FILTER_NAME" => "arrFilter",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                    "IBLOCK_ID" => "75",
                    "IBLOCK_TYPE" => "-",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                    "INCLUDE_SUBSECTIONS" => "Y",
                    "MESSAGE_404" => "",
                    "NEWS_COUNT" => "20",
                    "PAGER_BASE_LINK_ENABLE" => "N",
                    "PAGER_DESC_NUMBERING" => "N",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                    "PAGER_SHOW_ALL" => "N",
                    "PAGER_SHOW_ALWAYS" => "N",
                    "PAGER_TEMPLATE" => ".default",
                    "PAGER_TITLE" => "",
                    "PARENT_SECTION" => "",
                    "PARENT_SECTION_CODE" => "",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "PROPERTY_CODE" => array("INSTRUCTION", "VYKRASKA", ""),
                    "SET_BROWSER_TITLE" => "Y",
                    "SET_LAST_MODIFIED" => "N",
                    "SET_META_DESCRIPTION" => "Y",
                    "SET_META_KEYWORDS" => "Y",
                    "SET_STATUS_404" => "N",
                    "SET_TITLE" => "Y",
                    "SHOW_404" => "N",
                    "SORT_BY1" => "ACTIVE_FROM",
                    "SORT_BY2" => "SORT",
                    "SORT_ORDER1" => "DESC",
                    "SORT_ORDER2" => "ASC",
                    "STRICT_SECTION_CHECK" => "N",
                )
            ); ?>
            <!-- /dop-properties -->
        </div>

		<?if(($arParams["USE_RATING"]=="Y") && ($arParams["USE_SHARE"] == "Y")) {?> <div class="d-flex justify-content-between"> <? } ?>

			<?if($arParams["USE_RATING"]=="Y"):?>
				<div>
					<?$APPLICATION->IncludeComponent(
						"bitrix:iblock.vote",
						"bootstrap_v4",
						Array(
							"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
							"IBLOCK_ID" => $arParams["IBLOCK_ID"],
							"ELEMENT_ID" => $arResult["ID"],
							"MAX_VOTE" => $arParams["MAX_VOTE"],
							"VOTE_NAMES" => $arParams["VOTE_NAMES"],
							"CACHE_TYPE" => $arParams["CACHE_TYPE"],
							"CACHE_TIME" => $arParams["CACHE_TIME"],
							"DISPLAY_AS_RATING" => $arParams["DISPLAY_AS_RATING"],
							"SHOW_RATING" => "Y",
						),
						$component
					);?>
				</div>
			<?endif?>

			<?if ($arParams["USE_SHARE"] == "Y"):?>
				<div>
					<noindex>
						<?
						$APPLICATION->IncludeComponent(
							"bitrix:main.share",
							$arParams["SHARE_TEMPLATE"],
							array(
								"HANDLERS" => $arParams["SHARE_HANDLERS"],
								"PAGE_URL" => $arResult["~DETAIL_PAGE_URL"],
								"PAGE_TITLE" => $arResult["~NAME"],
								"SHORTEN_URL_LOGIN" => $arParams["SHARE_SHORTEN_URL_LOGIN"],
								"SHORTEN_URL_KEY" => $arParams["SHARE_SHORTEN_URL_KEY"],
								"HIDE" => $arParams["SHARE_HIDE"],
							),
							$component,
							array("HIDE_ICONS" => "Y")
						);
						?>
					</noindex>
				</div>
			<?endif?>

		<?if(($arParams["USE_RATING"]=="Y") && ($arParams["USE_SHARE"] == "Y")) {?> </div> <? } ?>

	<?foreach($arResult["FIELDS"] as $code=>$value):?>
		<?if($code == "SHOW_COUNTER"):?>
			<div class="news-detail-view"><?=GetMessage("IBLOCK_FIELD_".$code)?>: <?=intval($value);?></div>
		<?elseif($code == "SHOW_COUNTER_START" && $value):?>
			<? $value = CIBlockFormatProperties::DateFormat($arParams["ACTIVE_DATE_FORMAT"], MakeTimeStamp($value, CSite::GetDateFormat())); ?>
			<div class="news-detail-date"><?=GetMessage("IBLOCK_FIELD_".$code)?>: <?=$value;?> </div>
		<?elseif($code == "TAGS" && $value):?>
			<div class="news-detail-tags"><?=GetMessage("IBLOCK_FIELD_".$code)?>: <?=$value;?> </div>
		<?elseif($code == "CREATED_USER_NAME"):?>
			<div class="news-detail-author"><?=GetMessage("IBLOCK_FIELD_".$code)?>: <?=$value;?> </div>
		<?elseif ($value != ""):?>
			<div class="news-detail-other"><?=GetMessage("IBLOCK_FIELD_".$code)?>: <?=$value;?></div>
		<?endif;?>
	<?endforeach;?>

	<?/*foreach($arResult["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
		<?
		if(is_array($arProperty["DISPLAY_VALUE"]))
			$value = implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);
		else
			$value = $arProperty["DISPLAY_VALUE"];
		?>
		<?if($arProperty["CODE"] == "FORUM_MESSAGE_CNT"):?>
			<div class="news-detail-comments"><?=$arProperty["NAME"]?>: <?=$value;?> </div>
		<?elseif ($value != ""):?>
			<div class="news-detail-other"><?=$arProperty["NAME"]?>: <?=$value;?> </div>
		<?endif;?>
	<?endforeach;*/?>

	<?if($arParams["DISPLAY_DATE"]!="N" && $arResult["DISPLAY_ACTIVE_FROM"]):?>
		<div class="news-detail-date"><?echo $arResult["DISPLAY_ACTIVE_FROM"]?></div>
	<?endif?>
	</div>
</div>
<script type="text/javascript">
	BX.ready(function() {
		var slider = new JCNewsSlider('<?=CUtil::JSEscape($this->GetEditAreaId($arResult['ID']));?>', {
			imagesContainerClassName: 'news-detail-slider-container',
			leftArrowClassName: 'news-detail-slider-arrow-container-left',
			rightArrowClassName: 'news-detail-slider-arrow-container-right',
			controlContainerClassName: 'news-detail-slider-control'
		});
	});
</script>