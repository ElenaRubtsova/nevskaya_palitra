<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Information about the Nevskaya Palitra Artistic Paint Plant");
$APPLICATION->SetPageProperty("keywords", "Decola, White Nights, Sonnet, Ladoga, Master Class");
$APPLICATION->SetPageProperty("description", "Here you can learn more about the 80-year history of the plant, its achievements, as well as the principles we use.");
$APPLICATION->SetTitle("About company");
?><section class="page-section">
<div class="container">
	<div class="section-inner">
		<div class="section-title about-title">
			<h1><?  inc("about_title", "text"); ?></h1>
		</div>
		<div class="about-text">
			<p>
 <span class="image-holder"><?  inc("about_foto", "html"); ?></span>
				<?  inc("about_text", "html"); ?>
			</p>
		</div>
	</div>
</div>
 </section> <section class="page-section">
<div class="container">
	<div class="section-inner">
		<div class="timeline-wrapper">
            <h2><? inc("about_history_title", "text"); ?></h2>
			<div class="timeline">
				<div class="timeline-item">
					<div class="timeline-item-text">
						 <? inc("about_history_1", "html"); ?>
					</div>
					<div class="timeline-item-icon" style="background: url(<?=(SITE_TEMPLATE_PATH . '/images/icons/content_icons/1899-min.jpg');?>); background-size: 100%;">
					</div>
				</div>
				<div class="timeline-item">
					<div class="timeline-item-text">
						 <? inc("about_history_2", "html"); ?>
					</div>
                    <div class="timeline-item-icon" style="background: url(<?=(SITE_TEMPLATE_PATH . '/images/icons/content_icons/1930-min.jpg');?>); background-size: 100%;">
                    </div>
				</div>
				<div class="timeline-item">
					<div class="timeline-item-text">
						 <? inc("about_history_3", "html"); ?>
					</div>
                    <div class="timeline-item-icon" style="background: url(<?=(SITE_TEMPLATE_PATH . '/images/icons/content_icons/1960-min.jpg');?>); background-size: 100%;">
                    </div>
				</div>
				<div class="timeline-item">
					<div class="timeline-item-text">
						 <? inc("about_history_4", "html"); ?>
					</div>
                    <div class="timeline-item-icon" style="background: url(<?=(SITE_TEMPLATE_PATH . '/images/icons/content_icons/2000-min.jpg');?>); background-size: 100%;">
                    </div>
				</div>
				<div class="timeline-item">
					<div class="timeline-item-text">
						 <? inc("about_history_5", "html"); ?>
					</div>
                    <div class="timeline-item-icon" style="background: url(<?=(SITE_TEMPLATE_PATH . '/images/icons/content_icons/infinit-min.jpg');?>); background-size: 100%;">
                    </div>
				</div>
			</div>
		</div>
	</div>
</div>
 </section> <!--<section class="page-section">
<div class="container">
	<div class="section-inner">
		<div class="row">

            <div class="col-3to12">
				<div class="card-wrapper">
					<div class="card card-headless" title="<?=SITE_TEMPLATE_PATH;?>" style="background-image: url(/local/templates/cessel_webgate_theme/images/cards/card_splash_red.png);">
						 <span class="bxhtmled-surrogate-inner">
                             <span class="bxhtmled-right-side-item-icon"></span>
                             <span class="bxhtmled-comp-lable" unselectable="on" spellcheck="false"></span>
                         </span>
						<h3>50, 000, 000, 000</h3>
						<p>
							 Tubes of paint sold
						</p>
					</div>
				</div>
			</div>

            <div class="col-3to12">
				<div class="card-wrapper">
					<div class="card card-headless" title="<?=SITE_TEMPLATE_PATH;?>" style="background-image: url(/local/templates/cessel_webgate_theme/images/cards/card_splash_blue.png);">
                        <span class="bxhtmled-surrogate-inner">
                            <span class="bxhtmled-right-side-item-icon"></span>
                            <span class="bxhtmled-comp-lable" unselectable="on" spellcheck="false"></span>
                        </span>
						<h3>76</h3>
						<p>
							 Countries of operation
						</p>
					</div>
				</div>
			</div>
			<div class="col-3to12">
				<div class="card-wrapper">
					<div class="card card-headless" title="<?=SITE_TEMPLATE_PATH;?>" style="background-image: url(/local/templates/cessel_webgate_theme/images/cards/card_splash_green.png);">
                        <span class="bxhtmled-surrogate-inner">
                            <span class="bxhtmled-right-side-item-icon"></span>
                            <span class="bxhtmled-comp-lable" unselectable="on" spellcheck="false"></span>
                        </span>
						<h3>30, 000</h3>
						<p>
							 Liters of paint per hour
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
 </section>--> <section class="page-section">
<div class="container">
	<div class="section-inner">
		<div class="about-slider-wrapper">
 <button class="btn btn-small slider-btn bg-red with-arrow-left" data-dir="Prev"></button>
			<div class="about-slider">
				 <?
                    global $sliderFilter;
                    $sliderFilter = ['ID'=>17832];
                    ?> <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"images_from_prop",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "Y",
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
		"FIELD_CODE" => array("",""),
		"FILTER_NAME" => "sliderFilter",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "67",
		"IBLOCK_TYPE" => "news",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array("PICS","",""),
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
		"STRICT_SECTION_CHECK" => "N"
	)
);?> <?/*
          <div class="about-slider-item"><img data-lazy="<?=SITE_TEMPLATE_PATH;?>/images/about/about_1.jpg" alt=""></div>
          <div class="about-slider-item"><img data-lazy="<?=SITE_TEMPLATE_PATH;?>/images/about/about_2.jpg" alt=""></div>
          <div class="about-slider-item"><img data-lazy="<?=SITE_TEMPLATE_PATH;?>/images/about/about_3.jpg" alt=""></div>
          <div class="about-slider-item"><img data-lazy="<?=SITE_TEMPLATE_PATH;?>/images/about/about_4.jpg" alt=""></div>
          <div class="about-slider-item"><img data-lazy="<?=SITE_TEMPLATE_PATH;?>/images/about/about_5.jpg" alt=""></div>
          <div class="about-slider-item"><img data-lazy="<?=SITE_TEMPLATE_PATH;?>/images/about/about_6.jpg" alt=""></div>
          <div class="about-slider-item"><img data-lazy="<?=SITE_TEMPLATE_PATH;?>/images/about/about_7.jpg" alt=""></div>
          <div class="about-slider-item"><img data-lazy="<?=SITE_TEMPLATE_PATH;?>/images/about/about_8.jpg" alt=""></div>
          <div class="about-slider-item"><img data-lazy="<?=SITE_TEMPLATE_PATH;?>/images/about/about_9.jpg" alt=""></div>
          <div class="about-slider-item"><img data-lazy="<?=SITE_TEMPLATE_PATH;?>/images/about/about_10.jpg" alt=""></div>
          <div class="about-slider-item"><img data-lazy="<?=SITE_TEMPLATE_PATH;?>/images/about/about_11.jpg" alt=""></div>
          <div class="about-slider-item"><img data-lazy="<?=SITE_TEMPLATE_PATH;?>/images/about/about_12.jpg" alt=""></div>
          <div class="about-slider-item"><img data-lazy="<?=SITE_TEMPLATE_PATH;?>/images/about/about_13.jpg" alt=""></div>
          <div class="about-slider-item"><img data-lazy="<?=SITE_TEMPLATE_PATH;?>/images/about/about_14.jpg" alt=""></div>
		  */?>
			</div>
 <button class="btn btn-small slider-btn bg-red with-arrow-right" data-dir="Next"></button>
		</div>
	</div>
</div>
 </section> <section class="page-section">
<div class="container">
	<div class="section-inner">
		<div class="section-title about-title">
			<h2>That’s how color is born</h2>
		</div>
		<div class="index-catalog">
			<div class="row">
				<div class="col-6to12">
					<div class="card-wrapper">
                    <a href="/info/vironment-and-safety/" style="text-decoration: none;">
						<div class="card card-headless card-headless-color"
                             style="background-image: url(/local/templates/cessel_webgate_theme/images/cards/about_card_green.png);">
							 <span class="bxhtmled-surrogate-inner">
                                 <span class="bxhtmled-right-side-item-icon"></span>
                                 <span class="bxhtmled-comp-lable" unselectable="on" spellcheck="false"></span>
                             </span>
							<h3>Environment and safety</h3>
							<p>
								 Geologists are on the hunt for new, natural inorganic pigments contained in rocks and minerals. The part of <br>
								 synthetic inorganic pigments (cadmium, and cobalt) that is especially valuable for painting is produced in <br>
								 our own pigment workshop.
							</p>
						</div>
                    </a>
					</div>
				</div>
				<div class="col-6to12">
					<div class="card-wrapper">
                        <a href="/info/color-index-pigments/" style="text-decoration: none;">
                        <div class="card card-headless card-headless-color"
                             style="background-image: url(/local/templates/cessel_webgate_theme/images/cards/about_card_orange.png);">
							 <span class="bxhtmled-surrogate-inner">
                                 <span class="bxhtmled-right-side-item-icon"></span>
                                 <span class="bxhtmled-comp-lable" unselectable="on" spellcheck="false"></span>
                             </span>
                            <h3>Colour pigments</h3>
							<p>
								 Pigments are delivered to the chemical laboratory of the plant to develop test and process samples <br>
								 before starting the mass production. Here we precisely determine, the proportions of pigments, binders and additives<br>
								 to obtain a particular color.
							</p>
						</div>
                        </a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
 </section>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"about_the_company", 
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
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "76",
		"IBLOCK_TYPE" => "partner",
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
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
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
		"COMPONENT_TEMPLATE" => "about_the_company"
	),
	false
);?> 
<?/*
<section id="socactivities" class="page-section">
<div class="container">
	<div class="section-inner">
		<div class="section-title">
			<h2><? inc("artists_club_social_title", "text"); ?></h2>
			<p>
				 <? inc("artists_club_social_description", "text"); ?>
			</p>
		</div>
		 <?$APPLICATION->IncludeComponent(
	"cessel:news",
	"index_news",
	Array(
		"COMPONENT_TEMPLATE" => "index_news",
		"COUNT_ELEMENTS" => "N",
		"FILTER_NAME" => "sectionsFilter",
		"IBLOCK_ID" => "28",
		"IBLOCK_TYPE" => "news",
		"IS_CAT" => "N",
		"NUMBER_ELEMENTS" => "10"
	)
);?>
	</div>
</div>
 </section>
*/?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>