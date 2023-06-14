<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/*
1) Нужно наполнять фото с одинаковыми размерами.
2) Сделано.
3) Есть 2 фильтра по бренду - http://nevskayapalitra.kdm1.ru/katalog/paints/brand-is-sonet/apply/ с учётом категории ("Каталог") и http://nevskayapalitra.kdm1.ru/katalog/brand/369-is-/paged-is-1/apply/ без учёта категории ("Торговые марки").
4) Реализовано по присланной логике (в каждом товаре выводятся рекомендации из определённых категорий).
5) 						paging reload 					$('.col-4to12.q0').length
6) Стрелки вниз заменить на "Смотреть каталог"?!
*/
$flag = 0;
$card_styles = ['bg-image-red', 'bg-image-blue', 'bg-image-green', 'bg-image-orange', 'bg-image-violet'];
$btn_styles = ['bg-red', 'bg-blue', 'bg-green', 'bg-orange', 'bg-red'];
?>
<section class="page-section">
	<div class="container">
		<div class="section-inner">
			<div class="section-title">
				<h1 class="title-with-image"><? inc("colors_title", "text"); ?></h1>
			</div>
			<div class="index-catalog">
				<div class="row">
					<? 
						foreach($arResult['BRANDS'] as $BRAND_ID => $BRAND) {
							if($BRAND_ID == 1053)continue;
							if(count($BRAND['DOWNLOAD_PALETTE'])){
								?>
									<div class="col-6to12">
										<div class="card card-big card-color with-image-bg <?=$card_styles[$flag]?>">
											<div class="brand-logo">
												<img src="<?=CFile::GetPath($BRAND['PREVIEW_PICTURE'])?>" />
											</div>
											<h2 class="card-big-title"><?=$BRAND['NAME'];?></h2>
											<div class="card-big-body">
												<? 
													foreach ($BRAND["DOWNLOAD_PALETTE"] as $index => $file_id) {
														$fileInfo = CFile::GetFileArray($file_id);
														$data_size = sprintf('%s, %d Kb', $fileInfo["FILE_NAME"], sky_size_units($fileInfo["FILE_SIZE"]));
														if(isset($BRAND["DOWNLOAD_PALETTE_NAMES"]) && isset($BRAND["DOWNLOAD_PALETTE_NAMES"][$index])) {
															$data_size = $BRAND["DOWNLOAD_PALETTE_NAMES"][$index];
														}
														?>
															<div class="card-color-doc">
																<span class="doc-name"><?=$data_size;?></span>
																<a href="<?=$fileInfo['SRC']?>" class="btn btn-small <?=$btn_styles[$flag]?> badge-download"><svg width="20" height="35"><use xlink:href="/local/templates/cessel_webgate_theme/images/icons/sprite.svg#icon_arrow_down"></use></svg></a>
															</div>
															
														<?
													}
												?>
											</div>
										</div>
									</div>
								<?
								if($flag >= 4) {
									$flag = 0;
								} else {
									$flag++;
								}
							}
						}
					?>
					
				</div>
			</div>
		</div>
	</div>
</section>
<?
foreach ($arResult['BRANDS'] as $BRAND_ID => $BRAND ){
	if($BRAND_ID == 1053)continue;
	if(count($BRAND['DOWNLOAD_PALETTE'])){
?>
		
<?
	}
	$flag++;
}
?>
