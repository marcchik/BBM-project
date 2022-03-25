<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Наш АСЦ");
?>
    <div class="pageContent services">
    <section class="bestPrices bgGray">
        <div class="bpContentWrapper">
            <div class="left">
                <div class="owl-carousel servicesSlider">
                    <? $APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"services_slider", 
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
		"IBLOCK_ID" => "10",
		"IBLOCK_TYPE" => "page_services",
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
			0 => "SECOND_PARAGRAPH",
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
		"COMPONENT_TEMPLATE" => "services_slider"
	),
	false
); ?>
                </div>
                <div class="sliderNav">
                    <div class="custom-owl-prev">
                    </div>
                    <div class="custom-owl-next">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="aboutUs">
        <? $APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"interesting_about_us", 
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
		"IBLOCK_ID" => "11",
		"IBLOCK_TYPE" => "page_services",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "1",
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
			0 => "FIRST_PARAGRAPH",
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
		"COMPONENT_TEMPLATE" => "interesting_about_us"
	),
	false
); ?>
    </section>
    <section class="ourContacts2">
        <div class="contentWrapper">
            <div class="info">
                <div class="contentTitle2">
                    Наши контакты
                </div>
                <div class="textGray">
                    Вы&nbsp;можете связаться с&nbsp;нашим<br class="mobShow">
                    онлайн-консультантом
                </div>
                <ul class="contactsList">
                    <li>
                        <div class="title">
                            <span class="icon"><img src="/bitrix/templates/main/img/icons/location.svg" alt=""></span>Адрес
                        </div>
                        <p>
                            Москва, ул. 3-я Хорошевская, дом 2, строение 1
                        </p>
                    </li>
                    <li>
                        <div class="title">
                            <span class="icon"><img src="/bitrix/templates/main/img/icons/call-calling.svg"
                                                    alt=""></span>Телефон
                        </div>
                        <p>
                            +7 495 737-06-01<br>
                            +7 495 737-06-01
                        </p>
                    </li>
                    <li>
                        <div class="title">
                            <span class="icon"><img src="/bitrix/templates/main/img/icons/www.svg" alt=""></span>Сайт
                        </div>
                        <p>
                            <a href="www.dell-dell.ru">dell-dell.ru</a><br>
                            <a href="www.dell-russia-dell.ru">dell-russia-dell.ru</a>
                        </p>
                    </li>
                    <li>
                        <div class="title">
                            <span class="icon"><img src="/bitrix/templates/main/img/icons/sms.svg" alt=""></span>E-mail
                        </div>
                        <p>
                            <a href="mailto:dell_ru@gmail.com">dell_ru@gmail.com</a>
                        </p>
                    </li>
                </ul>
                <div class="bgC2">
                    <img src="/bitrix/templates/main/img/contacts2.png" alt="">
                </div>
                <div class="bgLineOc">
                </div>
            </div>
        </div>
    </section>
    <section class="yaMap">
        <div class="yaMapTitle">
            Основной Офис: г. Москва, Солнечногорский проезд, д. 11 Телефон: 8 800 555-31-52
        </div>
        <div id="yaMap">
        </div>
    </section>
    </div>
    <br><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>