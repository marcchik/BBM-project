<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Главная");
?>
    <main class="main">


    <section class="baner-home">
        <div class="container">
            <div class="baner-home__inner">
                <div class="baner-home__slider">
                    <a href="#" class="baner-home__btn btn-link open__modal">Оставить заявку</a>

                        <div class="swiper-container baner-home-swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="baner-home__slider-wrap ">
                                        <div class="baner-home__slider-wrap-img">
                                            <img src="/bitrix/templates/bbm/img/baner-home-slid3.jpg" alt="">
                                        </div>
                                        <div class="baner-home__slider-wrap-text">
                                            Аренда складских помещений
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="baner-home__slider-wrap">
                                        <div class="baner-home__slider-wrap-img">
                                            <img src="/bitrix/templates/bbm/img/baner-home-slid1.jpg" alt="">
                                        </div>
                                        <div class="baner-home__slider-wrap-text">
                                            Стоянка для&nbsp;больше-груза
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="baner-home__slider-wrap">
                                        <div class="baner-home__slider-wrap-img">
                                            <img src="/bitrix/templates/bbm/img/baner-home-slid2.jpg" alt="">
                                        </div>
                                        <div class="baner-home__slider-wrap-text">
                                            Аренда рефрижера-торов
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="baner-home__subtitle mobile">
                    Компания БММ оказывает складские услуги более 20 лет
                </div>

                <!--Преимущества компании-->
                <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"advantages", 
	array(
		"COMPONENT_TEMPLATE" => "advantages",
		"IBLOCK_TYPE" => "advantages",
		"IBLOCK_ID" => "11",
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
			0 => "DESCRIPTION",
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
);?>

            </div>
            <div class="baner-home-text">
                Сдача в аренду коммерческих площадей
            </div>
        </div>
        <div class="baner-home__right">
            <div class="baner-home__right-messengers">
                <a href="#" class="baner-home__right-messengers-telegram"><img alt="telegram"
                                                                               src="/bitrix/templates/bbm/img/icons/telegram.svg"></a>
                <a href="#" class="baner-home__right-messengers-whatsapp"><img alt="Whatsapp"
                                                                               src="/bitrix/templates/bbm/img/icons/Whatsapp.svg"></a>
            </div>
        </div>
        <div class="swiper-pagination baner-home-pagination">
            <span class="current">01</span>/ <span class="total"></span>
        </div>
        <div class="swiper-button-next baner-home-btn-next">
            Next
        </div>
        <div class="baner-home-line">
        </div>
        <div class="baner-home__nav scroll-down">
            <div class="baner-home__nav-text scroll-down-text">
                Scrolldown
            </div>
            <div class="baner-home__nav-img scroll-down-img">
                <img src="/bitrix/templates/bbm/img/icons/mouse2.svg" alt="">
            </div>
        </div>
    </section>
    <!--Наши основные услуги--> <? $APPLICATION->IncludeComponent(
        "bitrix:news.list",
        "services",
        Array(
            "ACTIVE_DATE_FORMAT" => "d.m.Y",
            "ADD_SECTIONS_CHAIN" => "Y",
            "AJAX_MODE" => "Y",
            "AJAX_OPTION_ADDITIONAL" => "",
            "AJAX_OPTION_HISTORY" => "N",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "Y",
            "CACHE_FILTER" => "Y",
            "CACHE_GROUPS" => "Y",
            "CACHE_TIME" => "3600",
            "CACHE_TYPE" => "A",
            "CHECK_DATES" => "Y",
            "DETAIL_URL" => "",
            "DISPLAY_BOTTOM_PAGER" => "Y",
            "DISPLAY_DATE" => "Y",
            "DISPLAY_NAME" => "Y",
            "DISPLAY_PICTURE" => "Y",
            "DISPLAY_PREVIEW_TEXT" => "Y",
            "DISPLAY_TOP_PAGER" => "Y",
            "FIELD_CODE" => Array("ID"),
            "FILTER_NAME" => "",
            "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
            "IBLOCK_ID" => "10",
            "IBLOCK_TYPE" => "news",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
            "INCLUDE_SUBSECTIONS" => "Y",
            "MESSAGE_404" => "",
            "NEWS_COUNT" => "20",
            "PAGER_BASE_LINK" => "",
            "PAGER_BASE_LINK_ENABLE" => "Y",
            "PAGER_DESC_NUMBERING" => "Y",
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
            "PAGER_PARAMS_NAME" => "arrPager",
            "PAGER_SHOW_ALL" => "Y",
            "PAGER_SHOW_ALWAYS" => "Y",
            "PAGER_TEMPLATE" => "",
            "PAGER_TITLE" => "Новости",
            "PARENT_SECTION" => "",
            "PARENT_SECTION_CODE" => "",
            "PREVIEW_TRUNCATE_LEN" => "",
            "PROPERTY_CODE" => Array("DESCRIPTION"),
            "SET_BROWSER_TITLE" => "Y",
            "SET_LAST_MODIFIED" => "Y",
            "SET_META_DESCRIPTION" => "Y",
            "SET_META_KEYWORDS" => "Y",
            "SET_STATUS_404" => "Y",
            "SET_TITLE" => "Y",
            "SHOW_404" => "Y",
            "SORT_BY1" => "ACTIVE_FROM",
            "SORT_BY2" => "SORT",
            "SORT_ORDER1" => "DESC",
            "SORT_ORDER2" => "ASC"
        )
    ); ?>
    <section class="feedback">
        <div class="feedback__right">
            <div class="feedback__right-title">
                Обратная связь
            </div>
            <div class="feedback__right-text">
                Заполните форму обратной связи и наши специалисты свяжутся с вами в течении часа
            </div>
            <form action="#" class="feedback__right-form">
                <label class="feedback__right-form-label"> <input type="text" class="feedback__right-form-input"
                                                                  placeholder="ФИО"> </label> <label
                    class="feedback__right-form-label"> <input type="tel" class="feedback__right-form-input"
                                                               placeholder="Телефон"> </label> <label
                    class="feedback__right-form-label"> <input type="email" class="feedback__right-form-input"
                                                               placeholder="E-mail"> </label> <label
                    class="feedback__right-form-label"> <textarea name="text" class="feedback__right-form-textarea"
                                                                  placeholder="Комментарий"></textarea> </label>
                <button class="feedback__right-form-btn btn-link open__modal-btn">Оставить заявку</button>
            </form>
            <div class="feedback__right-img">
                <img src="/bitrix/templates/bbm/img/feedback.jpg" alt="" class="desc"> <img
                    src="/bitrix/templates/bbm/img/feedback1.jpg" alt="" class="mobile">
            </div>
        </div>
        <div class="container">
            <div class="feedback__inner">
                <div class="feedback__text">
                    <div class="feedback__text-title">
                        Обратная связь
                    </div>
                    <div class="feedback__text-txt">
                        Заполните форму обратной связи и наши специалисты свяжутся с вами в течении часа
                    </div>
                </div>
                <div class="feedback__contacts">
                    <div class="feedback__contacts-title">
                        Контакты
                    </div>
                    <div class="feedback__contacts-group">
                        <div class="feedback__contacts-group-subtitle feedback__contacts-group-subtitle1">
                            Адрес:
                        </div>
                        <div class="feedback__contacts-group-name">
                            г. Москва, ул. Никольская, 12
                        </div>
                    </div>
                    <div class="feedback__contacts-group">
                        <div class="feedback__contacts-group-subtitle">
                            Телефон:
                        </div>
                        <a href="tel:88004442233" class="feedback__contacts-group-name">8 800 444 22 33</a>
                    </div>
                    <div class="feedback__contacts-group">
                        <div class="feedback__contacts-group-subtitle">
                            Почта:
                        </div>
                        <div class="feedback__contacts-group-name">
                            <a href="mailto:bmm@inbox.ru">bmm@inbox.ru</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> </main><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>