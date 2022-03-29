<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Каталог");
?>
    <div class="pageContent">
    <section class="bestPrices bgGray bgCircle">
        <div class="bgText">
            dell
        </div>
        <div class="contentWrapper rowSlider">
            <div class="owl-carousel introCatalogSlider">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "catalog_slider",
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
                            0 => "DETAIL_PICTURE",
                            1 => "",
                        ),
                        "FILTER_NAME" => "",
                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                        "IBLOCK_ID" => "13",
                        "IBLOCK_TYPE" => "page_catalog",
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
                            0 => "SMALL_HEADER",
                            1 => "",
                        ),
                        "SET_BROWSER_TITLE" => "Y",
                        "SET_LAST_MODIFIED" => "N",
                        "SET_META_DESCRIPTION" => "Y",
                        "SET_META_KEYWORDS" => "Y",
                        "SET_STATUS_404" => "N",
                        "SET_TITLE" => "N",
                        "SHOW_404" => "N",
                        "SORT_BY1" => "ACTIVE_FROM",
                        "SORT_BY2" => "SORT",
                        "SORT_ORDER1" => "DESC",
                        "SORT_ORDER2" => "ASC",
                        "STRICT_SECTION_CHECK" => "N",
                        "COMPONENT_TEMPLATE" => "catalog_slider"
                    ),
                    false
                ); ?>
            </div>
            <div class="more">
                <div class="custom-owl-prev1">
                    <svg class="iconLongArrow" viewBox="0 0 106 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M94 1L104.5 11.5M104.5 11.5L94 22M104.5 11.5H0" stroke="none" stroke-width="1.5"/>
                    </svg>
                </div>
                <div class="custom-owl-next1">
                    <svg class="iconLongArrow" viewBox="0 0 106 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M94 1L104.5 11.5M104.5 11.5L94 22M104.5 11.5H0" stroke="none" stroke-width="1.5"/>
                    </svg>
                </div>
            </div>
        </div>
    </section>
    <section class="catalogShortWithStock">
        <div class="contentWrapper">
            <div class="stockCol">
                <div class="contentTitle2 less">
                    Акции
                </div>
                <div class="gotoLink">
                    <a href="">
                        Перейти к каталогу </a>
                </div>
                <div class="stockColSlider stockBox owl-carousel">
                    <div>
                        <div class="item">
                            <div class="stockTimer">
                                <div>
                                    Акция дня
                                </div>
                                <!-- класс для счетчика - js-counter; time_left_sec - оставшееся время в секундах -->
                                <div class="counter js-counter" time_left_sec="2135345">
                                </div>
                            </div>
                            <div class="imgWrap">
                                <div class="iconStock">
                                    <img src="/bitrix/templates/main/img/icons/stock.svg" alt="">
                                </div>
                                <img src="/bitrix/templates/main/img/st1.png" alt="">
                            </div>
                            <div class="links">
                                <div class="category">
                                    <a href="#">Ноутбук</a>
                                </div>
                                <div class="product">
                                    <a href="">Ноутбук Dell Inspiron 15</a>
                                </div>
                            </div>
                            <div class="ratingAndReviews">
                                <div class="rating">
                                    <img src="/bitrix/templates/main/img/icons/star.svg" alt=""> <img
                                            src="/bitrix/templates/main/img/icons/star.svg" alt=""> <img
                                            src="/bitrix/templates/main/img/icons/star.svg" alt=""> <img
                                            src="/bitrix/templates/main/img/icons/star.svg" alt=""> <img
                                            src="/bitrix/templates/main/img/icons/star.svg" alt="">
                                </div>
                                <div class="reviews">
                                    <div href="">
                                        14
                                    </div>
                                </div>
                            </div>
                            <div class="priceBox">
                                <div class="left">
                                    <div class="stockPrice">
                                        43 000 ₽
                                    </div>
                                    <div class="price">
                                        45 500 ₽
                                    </div>
                                </div>
                                <div>
                                    <a class="iconCart" href="#"> </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="stockTimer">
                                <div>
                                    Акция дня
                                </div>
                                <!-- класс для счетчика - js-counter; time_left_sec - оставшееся время в секундах -->
                                <div class="counter js-counter" time_left_sec="2135345">
                                </div>
                            </div>
                            <div class="imgWrap">
                                <div class="iconStock">
                                    <img src="/bitrix/templates/main/img/icons/stock.svg" alt="">
                                </div>
                                <img src="/bitrix/templates/main/img/st1.png" alt="">
                            </div>
                            <div class="links">
                                <div class="category">
                                    <a href="#">Ноутбук</a>
                                </div>
                                <div class="product">
                                    <a href="">Ноутбук Dell Inspiron 15</a>
                                </div>
                            </div>
                            <div class="ratingAndReviews">
                                <div class="rating">
                                    <img src="/bitrix/templates/main/img/icons/star.svg" alt=""> <img
                                            src="/bitrix/templates/main/img/icons/star.svg" alt=""> <img
                                            src="/bitrix/templates/main/img/icons/star.svg" alt=""> <img
                                            src="/bitrix/templates/main/img/icons/star.svg" alt=""> <img
                                            src="/bitrix/templates/main/img/icons/star.svg" alt="">
                                </div>
                                <div class="reviews">
                                    <a href="">
                                        14 </a>
                                </div>
                            </div>
                            <div class="priceBox">
                                <div class="left">
                                    <div class="stockPrice">
                                        43 000 ₽
                                    </div>
                                    <div class="price">
                                        45 500 ₽
                                    </div>
                                </div>
                                <div>
                                    <a class="iconCart" href="#"> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="item">
                            <div class="stockTimer">
                                <div>
                                    Акция дня
                                </div>
                                <!-- класс для счетчика - js-counter; time_left_sec - оставшееся время в секундах -->
                                <div class="counter js-counter" time_left_sec="2135345">
                                </div>
                            </div>
                            <div class="imgWrap">
                                <div class="iconStock">
                                    <img src="/bitrix/templates/main/img/icons/stock.svg" alt="">
                                </div>
                                <img src="/bitrix/templates/main/img/st1.png" alt="">
                            </div>
                            <div class="links">
                                <div class="category">
                                    <a href="#">Ноутбук</a>
                                </div>
                                <div class="product">
                                    <a href="">Ноутбук Dell Inspiron 15</a>
                                </div>
                            </div>
                            <div class="ratingAndReviews">
                                <div class="rating">
                                    <img src="/bitrix/templates/main/img/icons/star.svg" alt=""> <img
                                            src="/bitrix/templates/main/img/icons/star.svg" alt=""> <img
                                            src="/bitrix/templates/main/img/icons/star.svg" alt=""> <img
                                            src="/bitrix/templates/main/img/icons/star.svg" alt=""> <img
                                            src="/bitrix/templates/main/img/icons/star.svg" alt="">
                                </div>
                                <div class="reviews">
                                    <a href="">
                                        14 </a>
                                </div>
                            </div>
                            <div class="priceBox">
                                <div class="left">
                                    <div class="stockPrice">
                                        43 000 ₽
                                    </div>
                                    <div class="price">
                                        45 500 ₽
                                    </div>
                                </div>
                                <div>
                                    <a class="iconCart" href="#"> </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="stockTimer">
                                <div>
                                    Акция дня
                                </div>
                                <!-- класс для счетчика - js-counter; time_left_sec - оставшееся время в секундах -->
                                <div class="counter js-counter" time_left_sec="2135345">
                                </div>
                            </div>
                            <div class="imgWrap">
                                <div class="iconStock">
                                    <img src="/bitrix/templates/main/img/icons/stock.svg" alt="">
                                </div>
                                <img src="/bitrix/templates/main/img/st1.png" alt="">
                            </div>
                            <div class="links">
                                <div class="category">
                                    <a href="#">Ноутбук</a>
                                </div>
                                <div class="product">
                                    <a href="">Ноутбук Dell Inspiron 15</a>
                                </div>
                            </div>
                            <div class="ratingAndReviews">
                                <div class="rating">
                                    <img src="/bitrix/templates/main/img/icons/star.svg" alt=""> <img
                                            src="/bitrix/templates/main/img/icons/star.svg" alt=""> <img
                                            src="/bitrix/templates/main/img/icons/star.svg" alt=""> <img
                                            src="/bitrix/templates/main/img/icons/star.svg" alt=""> <img
                                            src="/bitrix/templates/main/img/icons/star.svg" alt="">
                                </div>
                                <div class="reviews">
                                    <a href="">
                                        14 </a>
                                </div>
                            </div>
                            <div class="priceBox">
                                <div class="left">
                                    <div class="stockPrice">
                                        43 000 ₽
                                    </div>
                                    <div class="price">
                                        45 500 ₽
                                    </div>
                                </div>
                                <div>
                                    <a class="iconCart" href="#"> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="item">
                            <div class="stockTimer">
                                <div>
                                    Акция дня
                                </div>
                                <!-- класс для счетчика - js-counter; time_left_sec - оставшееся время в секундах -->
                                <div class="counter js-counter" time_left_sec="2135345">
                                </div>
                            </div>
                            <div class="imgWrap">
                                <div class="iconStock">
                                    <img src="/bitrix/templates/main/img/icons/stock.svg" alt="">
                                </div>
                                <img src="/bitrix/templates/main/img/st1.png" alt="">
                            </div>
                            <div class="links">
                                <div class="category">
                                    <a href="#">Ноутбук</a>
                                </div>
                                <div class="product">
                                    <a href="">Ноутбук Dell Inspiron 15</a>
                                </div>
                            </div>
                            <div class="ratingAndReviews">
                                <div class="rating">
                                    <img src="/bitrix/templates/main/img/icons/star.svg" alt=""> <img
                                            src="/bitrix/templates/main/img/icons/star.svg" alt=""> <img
                                            src="/bitrix/templates/main/img/icons/star.svg" alt=""> <img
                                            src="/bitrix/templates/main/img/icons/star.svg" alt=""> <img
                                            src="/bitrix/templates/main/img/icons/star.svg" alt="">
                                </div>
                                <div class="reviews">
                                    <a href="">
                                        14 </a>
                                </div>
                            </div>
                            <div class="priceBox">
                                <div class="left">
                                    <div class="stockPrice">
                                        43 000 ₽
                                    </div>
                                    <div class="price">
                                        45 500 ₽
                                    </div>
                                </div>
                                <div>
                                    <a class="iconCart" href="#"> </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="stockTimer">
                                <div>
                                    Акция дня
                                </div>
                                <!-- класс для счетчика - js-counter; time_left_sec - оставшееся время в секундах -->
                                <div class="counter js-counter" time_left_sec="2135345">
                                </div>
                            </div>
                            <div class="imgWrap">
                                <div class="iconStock">
                                    <img src="/bitrix/templates/main/img/icons/stock.svg" alt="">
                                </div>
                                <img src="/bitrix/templates/main/img/st1.png" alt="">
                            </div>
                            <div class="links">
                                <div class="category">
                                    <a href="#">Ноутбук</a>
                                </div>
                                <div class="product">
                                    <a href="">Ноутбук Dell Inspiron 15</a>
                                </div>
                            </div>
                            <div class="ratingAndReviews">
                                <div class="rating">
                                    <img src="/bitrix/templates/main/img/icons/star.svg" alt=""> <img
                                            src="/bitrix/templates/main/img/icons/star.svg" alt=""> <img
                                            src="/bitrix/templates/main/img/icons/star.svg" alt=""> <img
                                            src="/bitrix/templates/main/img/icons/star.svg" alt=""> <img
                                            src="/bitrix/templates/main/img/icons/star.svg" alt="">
                                </div>
                                <div class="reviews">
                                    <a href="">
                                        14 </a>
                                </div>
                            </div>
                            <div>
                                <div class="left">
                                    <div class="stockPrice">
                                        43 000 ₽
                                    </div>
                                    <div class="price">
                                        45 500 ₽
                                    </div>
                                </div>
                                <div>
                                    <a class="iconCart" href="#"> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="item">
                            <div class="stockTimer">
                                <div>
                                    Акция дня
                                </div>
                                <!-- класс для счетчика - js-counter; time_left_sec - оставшееся время в секундах -->
                                <div class="counter js-counter" time_left_sec="2135345">
                                </div>
                            </div>
                            <div class="imgWrap">
                                <div class="iconStock">
                                    <img src="/bitrix/templates/main/img/icons/stock.svg" alt="">
                                </div>
                                <img src="/bitrix/templates/main/img/st1.png" alt="">
                            </div>
                            <div class="links">
                                <div class="category">
                                    <a href="#">Ноутбук</a>
                                </div>
                                <div class="product">
                                    <a href="">Ноутбук Dell Inspiron 15</a>
                                </div>
                            </div>
                            <div class="ratingAndReviews">
                                <div class="rating">
                                    <img src="/bitrix/templates/main/img/icons/star.svg" alt=""> <img
                                            src="/bitrix/templates/main/img/icons/star.svg" alt=""> <img
                                            src="/bitrix/templates/main/img/icons/star.svg" alt=""> <img
                                            src="/bitrix/templates/main/img/icons/star.svg" alt=""> <img
                                            src="/bitrix/templates/main/img/icons/star.svg" alt="">
                                </div>
                                <div class="reviews">
                                    <a href="">
                                        14 </a>
                                </div>
                            </div>
                            <div class="priceBox">
                                <div class="left">
                                    <div class="stockPrice">
                                        43 000 ₽
                                    </div>
                                    <div class="price">
                                        45 500 ₽
                                    </div>
                                </div>
                                <div>
                                    <a class="iconCart" href="#"> </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="stockTimer">
                                <div>
                                    Акция дня
                                </div>
                                <!-- класс для счетчика - js-counter; time_left_sec - оставшееся время в секундах -->
                                <div class="counter js-counter" time_left_sec="2135345">
                                </div>
                            </div>
                            <div class="imgWrap">
                                <div class="iconStock">
                                    <img src="/bitrix/templates/main/img/icons/stock.svg" alt="">
                                </div>
                                <img src="/bitrix/templates/main/img/st1.png" alt="">
                            </div>
                            <div class="links">
                                <div class="category">
                                    <a href="#">Ноутбук</a>
                                </div>
                                <div class="product">
                                    <a href="">Ноутбук Dell Inspiron 15</a>
                                </div>
                            </div>
                            <div class="ratingAndReviews">
                                <div class="rating">
                                    <img src="/bitrix/templates/main/img/icons/star.svg" alt=""> <img
                                            src="/bitrix/templates/main/img/icons/star.svg" alt=""> <img
                                            src="/bitrix/templates/main/img/icons/star.svg" alt=""> <img
                                            src="/bitrix/templates/main/img/icons/star.svg" alt=""> <img
                                            src="/bitrix/templates/main/img/icons/star.svg" alt="">
                                </div>
                                <div class="reviews">
                                    <a href="">
                                        14 </a>
                                </div>
                            </div>
                            <div class="priceBox">
                                <div class="left">
                                    <div class="stockPrice">
                                        43 000 ₽
                                    </div>
                                    <div class="price">
                                        45 500 ₽
                                    </div>
                                </div>
                                <div>
                                    <a class="iconCart" href="#"> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="item">
                            <div class="stockTimer">
                                <div>
                                    Акция дня
                                </div>
                                <!-- класс для счетчика - js-counter; time_left_sec - оставшееся время в секундах -->
                                <div class="counter js-counter" time_left_sec="2135345">
                                </div>
                            </div>
                            <div class="imgWrap">
                                <div class="iconStock">
                                    <img src="/bitrix/templates/main/img/icons/stock.svg" alt="">
                                </div>
                                <img src="/bitrix/templates/main/img/st1.png" alt="">
                            </div>
                            <div class="links">
                                <div class="category">
                                    <a href="#">Ноутбук</a>
                                </div>
                                <div class="product">
                                    <a href="">Ноутбук Dell Inspiron 15</a>
                                </div>
                            </div>
                            <div class="ratingAndReviews">
                                <div class="rating">
                                    <img src="/bitrix/templates/main/img/icons/star.svg" alt=""> <img
                                            src="/bitrix/templates/main/img/icons/star.svg" alt=""> <img
                                            src="/bitrix/templates/main/img/icons/star.svg" alt=""> <img
                                            src="/bitrix/templates/main/img/icons/star.svg" alt=""> <img
                                            src="/bitrix/templates/main/img/icons/star.svg" alt="">
                                </div>
                                <div class="reviews">
                                    <a href="">
                                        14 </a>
                                </div>
                            </div>
                            <div class="priceBox">
                                <div class="left">
                                    <div class="stockPrice">
                                        43 000 ₽
                                    </div>
                                    <div class="price">
                                        45 500 ₽
                                    </div>
                                </div>
                                <div>
                                    <a class="iconCart" href="#"> </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="stockTimer">
                                <div>
                                    Акция дня
                                </div>
                                <!-- класс для счетчика - js-counter; time_left_sec - оставшееся время в секундах -->
                                <div class="counter js-counter" time_left_sec="2135345">
                                </div>
                            </div>
                            <div class="imgWrap">
                                <div class="iconStock">
                                    <img src="/bitrix/templates/main/img/icons/stock.svg" alt="">
                                </div>
                                <img src="/bitrix/templates/main/img/st1.png" alt="">
                            </div>
                            <div class="links">
                                <div class="category">
                                    <a href="#">Ноутбук</a>
                                </div>
                                <div class="product">
                                    <a href="">Ноутбук Dell Inspiron 15</a>
                                </div>
                            </div>
                            <div class="ratingAndReviews">
                                <div class="rating">
                                    <img src="/bitrix/templates/main/img/icons/star.svg" alt=""> <img
                                            src="/bitrix/templates/main/img/icons/star.svg" alt=""> <img
                                            src="/bitrix/templates/main/img/icons/star.svg" alt=""> <img
                                            src="/bitrix/templates/main/img/icons/star.svg" alt=""> <img
                                            src="/bitrix/templates/main/img/icons/star.svg" alt="">
                                </div>
                                <div class="reviews">
                                    <a href="">
                                        14 </a>
                                </div>
                            </div>
                            <div class="priceBox">
                                <div class="left">
                                    <div class="stockPrice">
                                        43 000 ₽
                                    </div>
                                    <div class="price">
                                        45 500 ₽
                                    </div>
                                </div>
                                <div>
                                    <a class="iconCart" href="#"> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sliderNav">
                    <div class="custom-owl-prev">
                    </div>
                    <div class="custom-owl-next">
                    </div>
                </div>
            </div>
            <div class="content2col">
                <div class="contentTitle2 less">
                    Каталог <span class="mobShowText">товаров <br>
				 от </span>Dell
                </div>
                <div class="textGray mobHide">
                    Наша компания является зарегистрированным и официальным партнером Dell в России.
                </div>
                <div class="catalogShort col2">
                    <div class="item imgTopOverflow">
                        <div class="itemNum">
                            01
                        </div>
                        <div class="imgWrapper">
                            <img src="/bitrix/templates/main/img/cs1.png" alt="">
                        </div>
                        <div class="textGray">
                            105 товаров
                        </div>
                        <div class="category">
                            <a href="#">Ноутбуки</a>
                        </div>
                    </div>
                    <div class="item imgTopOverflow">
                        <div class="itemNum">
                            02
                        </div>
                        <div class="imgWrapper">
                            <img src="/bitrix/templates/main/img/cs2.png" alt="">
                        </div>
                        <div class="textGray">
                            65 товаров
                        </div>
                        <div class="category">
                            <a href="#">Персональные компьютеры</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="itemNum">
                            03
                        </div>
                        <div class="imgWrapper">
                            <img src="/bitrix/templates/main/img/cs3.png" alt="">
                        </div>
                        <div class="textGray">
                            13 товаров
                        </div>
                        <div class="category">
                            <a href="#">Cерверы</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="itemNum">
                            04
                        </div>
                        <div class="imgWrapper">
                            <img src="/bitrix/templates/main/img/cs4.png" alt="">
                        </div>
                        <div class="textGray">
                            2345 товаров
                        </div>
                        <div class="category">
                            <a href="#">Dell EMC</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="itemNum">
                            05
                        </div>
                        <div class="imgWrapper">
                            <img src="/bitrix/templates/main/img/cs5.png" alt="">
                        </div>
                        <div class="textGray">
                            195 товаров
                        </div>
                        <div class="category">
                            <a href="#">Запасные части к Dell EMC</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="itemNum">
                            05
                        </div>
                        <div class="imgWrapper">
                            <img src="/bitrix/templates/main/img/cs6.png" alt="">
                        </div>
                        <div class="textGray">
                            45 товаров
                        </div>
                        <div class="category">
                            <a href="#">Аксессуары</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="deliveryInfo">
        <div class="bgText smallText">
            delivery
        </div>
        <? $APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "delivery",
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
                "FIELD_CODE" => array(0 => "", 1 => "",),
                "FILTER_NAME" => "",
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "IBLOCK_ID" => "9",
                "IBLOCK_TYPE" => "often_used",
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
                "PROPERTY_CODE" => array(0 => "", 1 => "",),
                "SET_BROWSER_TITLE" => "N",
                "SET_LAST_MODIFIED" => "N",
                "SET_META_DESCRIPTION" => "Y",
                "SET_META_KEYWORDS" => "Y",
                "SET_STATUS_404" => "N",
                "SET_TITLE" => "N",
                "SHOW_404" => "N",
                "SORT_BY1" => "ACTIVE_FROM",
                "SORT_BY2" => "SORT",
                "SORT_ORDER1" => "DESC",
                "SORT_ORDER2" => "ASC",
                "STRICT_SECTION_CHECK" => "N"
            )
        ); ?> </section>
    </div>
    <br><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>