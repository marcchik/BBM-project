<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("О компании");
?>
    <main class="main">
    <section class="baner-about">
        <div class="container">
            <div class="baner-about__inner">
                <div class="baner-about__info">
                    <div class="baner-about__info-title">
                        О компании
                    </div>
                    <p class="baner-about__info-text">
                        Мы занимаемся развитием оптово-розничной&nbsp;торговли в московском регионе.
                    </p>

                    <p class="baner-about__info-txt">
                        В настоящее время Группа компаний «БММ» активно развивает отрасль оптово-розничной продажи и&nbsp;поставок
                        продуктов питания.
                    </p>
                </div>
                <div class="baner-about__img">
                    <img alt="О компании" src="/bitrix/templates/bbm/img/baner-about.jpg">
                </div>
                <div class="baner-about__year">
                    <div class="baner-about__year-nums">
                        <div class="baner-about__year-nums-num">
                            с1993
                        </div>
                        <div class="baner-about__year-nums-text">
                            на рынке продовольственной продукции Москвы
                        </div>
                    </div>
                    <div class="baner-about__year-nums">
                        <div class="baner-about__year-nums-num">
                            с2018
                        </div>
                        <div class="baner-about__year-nums-text">
                            на рынке Московской области
                        </div>
                    </div>
                </div>
                <a href="#" class="baner-about__btn btn-link open__modal">Оставить заявку</a>
            </div>
        </div>
    </section>
    <? $APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"structure", 
	array(
		"COMPONENT_TEMPLATE" => "structure",
		"IBLOCK_TYPE" => "structure",
		"IBLOCK_ID" => "13",
		"NEWS_COUNT" => "20",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "Y",
		"SET_BROWSER_TITLE" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_META_DESCRIPTION" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "Y",
		"STRICT_SECTION_CHECK" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => ""
	),
	false
); ?>


    <section class="leader">
        <div class="container">
            <div class="leader__inner">
                <div class="leader__info">
                    <div class="leader__info-title">
                        Контакты
                    </div>
                    <div class="leader__info-contacts">
                        <div class="leader__info-contacts-group">
                            <div class="leader__info-contacts-group-subtitle">
                                E-mail:
                            </div>
                            <div class="leader__info-contacts-group-data">
                                <a href="mailto:aaaaaaaa@gmail.com">aaaaaaaa@gmail.com</a>
                            </div>
                        </div>
                        <div class="leader__info-contacts-group">
                            <div class="leader__info-contacts-group-subtitle">
                                Телефон:
                            </div>
                            <a href="tel:8498657-79-05" class="leader__info-contacts-group-data">8(498)657-79-05</a>
                        </div>
                    </div>
                    <div class="leader__info-men">
                        <div class="leader__info-men-post">
                            Заместитель генерального директора
                        </div>
                        <div class="leader__info-men-name">
                            Багян Эдгар Михайлович
                        </div>
                        <div class="leader__info-men-groups">
                            <div class="leader__info-men-groups-group">
                                <div class="leader__info-men-groups-group-subtitle">
                                    E-mail:
                                </div>
                                <div class="leader__info-men-groups-group-data">
                                    <a href="mailto:aaaaaaaa@gmail.com">aaaaaaaa@gmail.com</a>
                                </div>
                            </div>
                            <div class="leader__info-men-groups-group">
                                <div class="leader__info-men-groups-group-subtitle">
                                    Телефон:
                                </div>
                                <a href="tel:8985773-95-65"
                                   class="leader__info-men-groups-group-data">8(985)773-95-65</a>
                            </div>
                        </div>
                    </div>
                    <div class="leader__info-men">
                        <div class="leader__info-men-post">
                            Заместитель генерального директора
                        </div>
                        <div class="leader__info-men-name">
                            Багян Артур Михайлович
                        </div>
                        <div class="leader__info-men-groups">
                            <div class="leader__info-men-groups-group">
                                <div class="leader__info-men-groups-group-subtitle">
                                    E-mail:
                                </div>
                                <div class="leader__info-men-groups-group-data">
                                    <a href="mailto:aaaaaaaa@gmail.com">aaaaaaaa@gmail.com</a>
                                </div>
                            </div>
                            <div class="leader__info-men-groups-group">
                                <div class="leader__info-men-groups-group-subtitle">
                                    Телефон:
                                </div>
                                <a href="tel:8985991-45-54"
                                   class="leader__info-men-groups-group-data">8(985)991-45-54</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="leader__maps">
                    <div class="leader__maps-subtitle">
                        Московская область, Проектируемый проезд № 5541
                    </div>
                    <div class="leader__maps-map">
                        <div id="contloc">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Обратная связь-->
    <? $APPLICATION->IncludeComponent(
        "bitrix:main.include",
        ".default",
        array(
            "COMPONENT_TEMPLATE" => ".default",
            "AREA_FILE_SHOW" => "file",
            "PATH" => "/include/included areas/feedback.php",
            "EDIT_TEMPLATE" => ""
        ),
        false
    ); ?>

    </main>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>