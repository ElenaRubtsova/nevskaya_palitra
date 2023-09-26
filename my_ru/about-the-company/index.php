<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Информация о заводе художественных красок «Невская палитра»");
$APPLICATION->SetPageProperty("keywords", "Decola, Белые ночи, Сонет, Ладога, Мастер-класс");
$APPLICATION->SetPageProperty("description", "Здесь вы можете подробнее узнать о вековой  истории завода, наших  достижениях, ценностях и мисси.");
$APPLICATION->SetTitle("О компании");
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
 </section> <section class="page-section">
<!---div class="container">
	<div class="section-inner">
		<div class="row">
			<div class="col-3to12">
				<div class="card-wrapper">
					<div class="card card-headless" title="" style="background-image: url(/local/templates/cessel_webgate_theme/images/cards/card_splash_red.png);">
						<span class="bxhtmled-surrogate-inner">
							<span class="bxhtmled-right-side-item-icon"></span>
							<span class="bxhtmled-comp-lable" unselectable="on" spellcheck="false"></span>
						</span>
						<h3>50 000 000 000</h3>
						<p>
							50 000 000 000
						</p>
					</div>
				</div>
			</div>
			<div class="col-3to12">
				<div class="card-wrapper">
					<div class="card card-headless" title="" style="background-image: url(/local/templates/cessel_webgate_theme/images/cards/card_splash_blue.png);">
						<span class="bxhtmled-surrogate-inner">
							<span class="bxhtmled-right-side-item-icon"></span>
							<span class="bxhtmled-comp-lable" unselectable="on" spellcheck="false"></span>
						</span>
						<h3>76</h3>
						<p>
							Стран присутствия
						</p>
					</div>
				</div>
			</div>
			<div class="col-3to12">
				<div class="card-wrapper">
					<div class="card card-headless" title="" style="background-image: url(/local/templates/cessel_webgate_theme/images/cards/card_splash_green.png);">
						<span class="bxhtmled-surrogate-inner">
							<span class="bxhtmled-right-side-item-icon"></span>
							<span class="bxhtmled-comp-lable" unselectable="on" spellcheck="false"></span>
						</span>
						<h3>30 000</h3>
						<p>
							Литров краски в час
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div--->
 </section> <section class="page-section">
<div class="container">
	<div class="section-inner">
		<div class="about-slider-wrapper">
 <button class="btn btn-small slider-btn bg-red with-arrow-left" data-dir="Prev"></button>
			<div class="about-slider">
				 <?
			global $sliderFilter;
			$sliderFilter = ['ID'=>8672];
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
		"IBLOCK_ID" => "68",
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
		  <div class="about-slider-item"><img data-lazy="<?=SITE_TEMPLATE_PATH;?>/images/about/about_111-min.jpg" alt=""></div>
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
			<h2>Так рождается цвет</h2>
		</div>
		<?//SITE_TEMPLATE_PATH;?>
		<div class="index-catalog">
			<div class="row">
				<div class="col-6to12">
					<div class="card-wrapper">
					 <a href="/info/vironment-and-safety/" style="text-decoration: none;">
						<div class="card card-headless card-headless-color" style="background-image: url(/local/templates/cessel_webgate_theme/images/cards/environment.jpg); color: white;">
						 <span class="bxhtmled-surrogate-inner"> <span class="bxhtmled-right-side-item-icon"></span> <span class="bxhtmled-comp-lable" unselectable="on" spellcheck="false"></span> </span>
							<h3>Окружающая среда и безопасность</h3>
							<p>
Геологи ищут новые природные неорганические пигменты, содержащиеся в горных породах и минералах. Та часть синтетических неорганических пигментов (кадмий и кобальт), которая особенно ценна для живописи, производится в нашей собственной пигментной мастерской.
							</p>
						</div>
					 </a>
					</div>
				</div>
				<div class="col-6to12">
					<div class="card-wrapper">
						 <a href="/info/color-index-pigments/" style="text-decoration: none;">
								<div class="card card-headless card-headless-color" style="background-image: url(/local/templates/cessel_webgate_theme/images/cards/pigments.jpg); color: white;">
									<span class="bxhtmled-surrogate-inner"> <span class="bxhtmled-right-side-item-icon"></span> <span class="bxhtmled-comp-lable" unselectable="on" spellcheck="false"></span> </span>
									<h3>Цветные пигменты</h3>
									<p>
										Пигменты доставляются в химическую лабораторию завода для разработки тестовых образцов и их обработки перед началом массового производства. Здесь мы точно определяем пропорции пигментов, связующих веществ и добавок для получения определенного цвета.
									</p>
							</div>
						 </a>
					</div>
				</div>
			</div>
		</div>
		<!--div class="index-catalog">
			<div class="row">
				<div class="col-6to12">
					<div class="card-wrapper">
						<div class="card card-headless card-headless-color" title="" style="background-image: url(/local/templates/cessel_webgate_theme/images/cards/about_card_green.png);">
							<span class="bxhtmled-surrogate-inner"><span class="bxhtmled-right-side-item-icon"></span>
								<span class="bxhtmled-comp-lable" unselectable="on" spellcheck="false"></span>
							</span>
							<h3>Ищем и&nbsp;производим пигменты</h3>
							<p>
								 Поиском новых природных неорганических пигментов среди горных пород и<br>
								 минералов занимаются геологи. Часть особо ценных для живописи<br>
								 синтетических неорганических пигментов (кадмиевые, кобальтовые)<br>
								 выпускаются в&nbsp;собственном цехе пигментов.
							</p>
						</div>
					</div>
				</div>
				<div class="col-6to12">
					<div class="card-wrapper">
						<div class="card card-headless card-headless-color" title="" style="background-image: url(/local/templates/cessel_webgate_theme/images/cards/about_card_orange.png);">
							<span class="bxhtmled-surrogate-inner"><span class="bxhtmled-right-side-item-icon"></span>
								<span class="bxhtmled-comp-lable" unselectable="on" spellcheck="false"></span>
							</span>
							<h3>Создаем рецептуры</h3>
							<p>
								 Пигменты отправляются в&nbsp;химическую лабораторию завода для разработки<br>
								 тестовых образцов и&nbsp;технологических проб перед началом серийного<br>
								 производства. Здесь точно определяют пропорции пигментов, связующих<br>
								 и добавок для получения того или иного цвета.
							</p>
						</div>
					</div>
				</div>
				<div class="col-6to12">
					<div class="card-wrapper">
						<div class="card card-headless card-headless-color" title="" style="background-image: url(/local/templates/cessel_webgate_theme/images/cards/about_card_red.png);">
							<span class="bxhtmled-surrogate-inner"><span class="bxhtmled-right-side-item-icon"></span>
								<span class="bxhtmled-comp-lable" unselectable="on" spellcheck="false"></span>
							</span>
							<h3>Изготавливаем краску</h3>
							<p>
								 Чтобы все компоненты акварельных и&nbsp;масляных красок соединились, их&nbsp;перетирают на&nbsp;специальных <br>
								 краскотерочных машинах. В&nbsp;зависимости от&nbsp;особенностей пигментов некоторые краски <br>
								 пропускаются через валы до&nbsp;40&nbsp;раз. Акриловые краски производятся <br>
								 по&nbsp;другой технологии&nbsp;— с&nbsp;помощью диссольверов.
							</p>
						</div>
					</div>
				</div>
				<div class="col-6to12">
					<div class="card-wrapper">
						<div class="card card-headless card-headless-color" title="" style="background-image: url(/local/templates/cessel_webgate_theme/images/cards/about_card_blue.png);">
							<span class="bxhtmled-surrogate-inner"><span class="bxhtmled-right-side-item-icon"></span>
								<span class="bxhtmled-comp-lable" unselectable="on" spellcheck="false"></span>
							</span>
							<h3>Контролируем качество</h3>
							<p>
								 Готовый продукт проверяется на&nbsp;соответствие различным <br>
								 показателям: светостойкость, разносимость, вязкость <br>
								 и&nbsp;укрывистость. Краски должны сохранять яркость и&nbsp;чистоту тона. <br>
								 Если образец из&nbsp;цеха точно соответствуют эталону цвета, то&nbsp;технологи <br>
								 запускают новинку в&nbsp;промышленное производство.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div--->
	</div>
</div>
 </section> <section class="page-section">
<div class="container">
	<div class="section-inner">
		<div class="section-title about-title">
			<h2>Наши партнеры</h2>
		</div>
		<div class="index-catalog">
			<div class="row">
				<div class="col-2to12">
					<div class="benefit benefit-partners">
						<div class="benefit-icon bg-red">
 <img src="<?php echo SITE_TEMPLATE_PATH . '/images/icons/content_icons/brush.svg'?>" alt="">
						</div>
						<h3>Фонд художника Михаила Шемякина</h3>
					</div>
				</div>
				<div class="col-2to12">
					<div class="benefit benefit-partners">
						<div class="benefit-icon bg-red">
 <img src="<?php echo SITE_TEMPLATE_PATH . '/images/icons/content_icons/brush.svg'?>" alt="">
						</div>
						<h3>«Санкт-Петербургский Союз художников»</h3>
					</div>
				</div>
				<div class="col-2to12">
					<div class="benefit benefit-partners">
						<div class="benefit-icon bg-red">
 <img src="<?php echo SITE_TEMPLATE_PATH . '/images/icons/content_icons/brush.svg'?>" alt="">
						</div>
						<h3>Санкт-Петербургское «Общество акварелистов»</h3>
					</div>
				</div>
				<div class="col-2to12">
					<div class="benefit benefit-partners">
						<div class="benefit-icon bg-blue">
 <img src="<?php echo SITE_TEMPLATE_PATH . '/images/icons/content_icons/canvas.svg'?>" alt="">
						</div>
						<h3>Галерея «Мольберт»</h3>
					</div>
				</div>
				<div class="col-2to12">
					<div class="benefit benefit-partners">
						<div class="benefit-icon bg-green">
 <img src="<?php echo SITE_TEMPLATE_PATH . '/images/icons/content_icons/building.svg'?>" alt="">
						</div>
						<h3>Государственный Русский музей</h3>
					</div>
				</div>
				<div class="col-2to12">
					<div class="benefit benefit-partners">
						<div class="benefit-icon bg-green">
 <img src="<?php echo SITE_TEMPLATE_PATH . '/images/icons/content_icons/building.svg'?>" alt="">
						</div>
						<h3>Государственный Эрмитаж</h3>
					</div>
				</div>
			</div>
		</div>
		<div class="section-bottom">
			 <!-- <span href="/partners/" class="btn btn-wide bg-red centered"><span>See more</span></a> -->
		</div>
	</div>
</div>
 </section> <section id="socactivities" class="page-section">
<div class="container">
	<div class="section-inner">
		<div class="section-title">
			<h2><? inc("artists_club_social_title", "text"); ?></h2>
			<p>
				 <? inc("artists_club_social_description", "text"); ?>
			</p>
		</div>

                        <?
                        global $myNewsMain;
			$myNewsMain = [
				"ACTIVE" => "Y", 
				"PROPERTY_TVOR_PAGE" => 1
			];
			?>


		 <?$APPLICATION->IncludeComponent(
	"cessel:news",
	"index_news",
	Array(
		"COMPONENT_TEMPLATE" => "index_news",
		"COUNT_ELEMENTS" => "N",
		"FILTER_NAME" => "myNewsMain",
		"IBLOCK_ID" => "28",
		"IBLOCK_TYPE" => "news",
		"IS_CAT" => "N",
		"NUMBER_ELEMENTS" => "10"
	)
);?>
	</div>
</div>
 </section><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>