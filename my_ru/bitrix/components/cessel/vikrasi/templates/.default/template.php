<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); ?>
<? foreach ( $arResult['BRANDS'] as $BRAND ) { ?>
<div class="index-catalog">
    <div class="row">
        <? foreach ( $BRAND['GOODS'] as $item ) {

	        $img_url = ($item['PICTURE_SRC'])? $item['PICTURE_SRC'] : SITE_TEMPLATE_PATH.'/images/intro_logo.svg';
	        $add_class = ($item['PICTURE_SRC']) ? '' :' with-placeholder';

            ?>

            <div class="col-4to12">
                <a href="<?=$item["DETAIL_PAGE_URL"]; ?>" class="jumbo jumbo-square scalabel-hover">
                    <div class="jumbo-image">
                        <img
                                class="olazy<?=$add_class; ?>"
                                data-src="<?=$img_url; ?>"
                                alt="<?=$item['NAME']; ?>"
                        />
                    </div>
                    <h5><?=$item['NAME']; ?></h5>
                </a>
            </div>

            <?
        }; ?>
    </div>
</div>
<? } ?>