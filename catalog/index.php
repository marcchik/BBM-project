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
                        "COMPONENT_TEMPLATE" => "catalog_slider",
                        "DETAIL_URL" => "",
                        "DISPLAY_BOTTOM_PAGER" => "Y",
                        "DISPLAY_DATE" => "Y",
                        "DISPLAY_NAME" => "Y",
                        "DISPLAY_PICTURE" => "Y",
                        "DISPLAY_PREVIEW_TEXT" => "Y",
                        "DISPLAY_TOP_PAGER" => "N",
                        "FIELD_CODE" => array(0 => "DETAIL_PICTURE", 1 => "",),
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
                        "PROPERTY_CODE" => array(0 => "SMALL_HEADER", 1 => "",),
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
                        "STRICT_SECTION_CHECK" => "N"
                    )
                ); ?>
            </div>
            <div class="more">
                <div class="custom-owl-prev1">
                </div>
                <div class="custom-owl-next1">
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
                                    <a href="#">Ноутбук</a><br>
                                    <br>
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
                <? $APPLICATION->IncludeComponent(
                    "bitrix:catalog",
                    "catalog",
                    array(
                        "ACTION_VARIABLE" => "action",
                        "ADD_ELEMENT_CHAIN" => "N",
                        "ADD_PICT_PROP" => "-",
                        "ADD_PROPERTIES_TO_BASKET" => "Y",
                        "ADD_SECTIONS_CHAIN" => "Y",
                        "AJAX_MODE" => "N",
                        "AJAX_OPTION_ADDITIONAL" => "",
                        "AJAX_OPTION_HISTORY" => "N",
                        "AJAX_OPTION_JUMP" => "N",
                        "AJAX_OPTION_STYLE" => "Y",
                        "BASKET_URL" => "/personal/basket.php",
                        "BIG_DATA_RCM_TYPE" => "personal",
                        "CACHE_FILTER" => "N",
                        "CACHE_GROUPS" => "Y",
                        "CACHE_TIME" => "36000000",
                        "CACHE_TYPE" => "A",
                        "COMMON_ADD_TO_BASKET_ACTION" => "ADD",
                        "COMMON_SHOW_CLOSE_POPUP" => "N",
                        "COMPATIBLE_MODE" => "Y",
                        "CONVERT_CURRENCY" => "N",
                        "DETAIL_ADD_DETAIL_TO_SLIDER" => "N",
                        "DETAIL_ADD_TO_BASKET_ACTION" => array(
                            0 => "BUY",
                        ),
                        "DETAIL_ADD_TO_BASKET_ACTION_PRIMARY" => array(
                            0 => "BUY",
                        ),
                        "DETAIL_BACKGROUND_IMAGE" => "-",
                        "DETAIL_BRAND_USE" => "N",
                        "DETAIL_BROWSER_TITLE" => "-",
                        "DETAIL_CHECK_SECTION_ID_VARIABLE" => "N",
                        "DETAIL_DETAIL_PICTURE_MODE" => array(
                            0 => "POPUP",
                            1 => "MAGNIFIER",
                        ),
                        "DETAIL_DISPLAY_NAME" => "Y",
                        "DETAIL_DISPLAY_PREVIEW_TEXT_MODE" => "E",
                        "DETAIL_IMAGE_RESOLUTION" => "16by9",
                        "DETAIL_META_DESCRIPTION" => "-",
                        "DETAIL_META_KEYWORDS" => "-",
                        "DETAIL_PRODUCT_INFO_BLOCK_ORDER" => "sku,props",
                        "DETAIL_PRODUCT_PAY_BLOCK_ORDER" => "rating,price,priceRanges,quantityLimit,quantity,buttons",
                        "DETAIL_SET_CANONICAL_URL" => "N",
                        "DETAIL_SET_VIEWED_IN_COMPONENT" => "N",
                        "DETAIL_SHOW_POPULAR" => "Y",
                        "DETAIL_SHOW_SLIDER" => "N",
                        "DETAIL_SHOW_VIEWED" => "Y",
                        "DETAIL_STRICT_SECTION_CHECK" => "N",
                        "DETAIL_USE_COMMENTS" => "N",
                        "DETAIL_USE_VOTE_RATING" => "N",
                        "DISABLE_INIT_JS_IN_COMPONENT" => "N",
                        "DISPLAY_BOTTOM_PAGER" => "Y",
                        "DISPLAY_TOP_PAGER" => "N",
                        "ELEMENT_SORT_FIELD" => "sort",
                        "ELEMENT_SORT_FIELD2" => "id",
                        "ELEMENT_SORT_ORDER" => "asc",
                        "ELEMENT_SORT_ORDER2" => "desc",
                        "FILTER_HIDE_ON_MOBILE" => "N",
                        "FILTER_VIEW_MODE" => "VERTICAL",
                        "GIFTS_DETAIL_BLOCK_TITLE" => "Выберите один из подарков",
                        "GIFTS_DETAIL_HIDE_BLOCK_TITLE" => "N",
                        "GIFTS_DETAIL_PAGE_ELEMENT_COUNT" => "4",
                        "GIFTS_DETAIL_TEXT_LABEL_GIFT" => "Подарок",
                        "GIFTS_MAIN_PRODUCT_DETAIL_BLOCK_TITLE" => "Выберите один из товаров, чтобы получить подарок",
                        "GIFTS_MAIN_PRODUCT_DETAIL_HIDE_BLOCK_TITLE" => "N",
                        "GIFTS_MAIN_PRODUCT_DETAIL_PAGE_ELEMENT_COUNT" => "4",
                        "GIFTS_MESS_BTN_BUY" => "Выбрать",
                        "GIFTS_SECTION_LIST_BLOCK_TITLE" => "Подарки к товарам этого раздела",
                        "GIFTS_SECTION_LIST_HIDE_BLOCK_TITLE" => "N",
                        "GIFTS_SECTION_LIST_PAGE_ELEMENT_COUNT" => "4",
                        "GIFTS_SECTION_LIST_TEXT_LABEL_GIFT" => "Подарок",
                        "GIFTS_SHOW_DISCOUNT_PERCENT" => "Y",
                        "GIFTS_SHOW_IMAGE" => "Y",
                        "GIFTS_SHOW_NAME" => "Y",
                        "GIFTS_SHOW_OLD_PRICE" => "Y",
                        "HIDE_NOT_AVAILABLE" => "N",
                        "HIDE_NOT_AVAILABLE_OFFERS" => "N",
                        "IBLOCK_ID" => "15",
                        "IBLOCK_TYPE" => "basic_data",
                        "INCLUDE_SUBSECTIONS" => "Y",
                        "INSTANT_RELOAD" => "N",
                        "LABEL_PROP" => array(),
                        "LAZY_LOAD" => "N",
                        "LINE_ELEMENT_COUNT" => "3",
                        "LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#",
                        "LINK_IBLOCK_ID" => "",
                        "LINK_IBLOCK_TYPE" => "",
                        "LINK_PROPERTY_SID" => "",
                        "LIST_BROWSER_TITLE" => "-",
                        "LIST_ENLARGE_PRODUCT" => "STRICT",
                        "LIST_META_DESCRIPTION" => "-",
                        "LIST_META_KEYWORDS" => "-",
                        "LIST_PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
                        "LIST_PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",
                        "LIST_SHOW_SLIDER" => "Y",
                        "LIST_SLIDER_INTERVAL" => "3000",
                        "LIST_SLIDER_PROGRESS" => "N",
                        "LOAD_ON_SCROLL" => "N",
                        "MESSAGE_404" => "",
                        "MESS_BTN_ADD_TO_BASKET" => "В корзину",
                        "MESS_BTN_BUY" => "Купить",
                        "MESS_BTN_COMPARE" => "Сравнение",
                        "MESS_BTN_DETAIL" => "Подробнее",
                        "MESS_BTN_LAZY_LOAD" => "Показать ещё",
                        "MESS_BTN_SUBSCRIBE" => "Подписаться",
                        "MESS_COMMENTS_TAB" => "Комментарии",
                        "MESS_DESCRIPTION_TAB" => "Описание",
                        "MESS_NOT_AVAILABLE" => "Нет в наличии",
                        "MESS_PRICE_RANGES_TITLE" => "Цены",
                        "MESS_PROPERTIES_TAB" => "Характеристики",
                        "PAGER_BASE_LINK_ENABLE" => "N",
                        "PAGER_DESC_NUMBERING" => "N",
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                        "PAGER_SHOW_ALL" => "N",
                        "PAGER_SHOW_ALWAYS" => "N",
                        "PAGER_TEMPLATE" => ".default",
                        "PAGER_TITLE" => "Товары",
                        "PAGE_ELEMENT_COUNT" => "30",
                        "PARTIAL_PRODUCT_PROPERTIES" => "N",
                        "PRICE_CODE" => array(),
                        "PRICE_VAT_INCLUDE" => "Y",
                        "PRICE_VAT_SHOW_VALUE" => "N",
                        "PRODUCT_ID_VARIABLE" => "id",
                        "PRODUCT_PROPS_VARIABLE" => "prop",
                        "PRODUCT_QUANTITY_VARIABLE" => "quantity",
                        "PRODUCT_SUBSCRIPTION" => "Y",
                        "SEARCH_CHECK_DATES" => "Y",
                        "SEARCH_NO_WORD_LOGIC" => "Y",
                        "SEARCH_PAGE_RESULT_COUNT" => "50",
                        "SEARCH_RESTART" => "N",
                        "SEARCH_USE_LANGUAGE_GUESS" => "Y",
                        "SEARCH_USE_SEARCH_RESULT_ORDER" => "N",
                        "SECTIONS_SHOW_PARENT_NAME" => "Y",
                        "SECTIONS_VIEW_MODE" => "LIST",
                        "SECTION_ADD_TO_BASKET_ACTION" => "ADD",
                        "SECTION_BACKGROUND_IMAGE" => "-",
                        "SECTION_COUNT_ELEMENTS" => "Y",
                        "SECTION_ID_VARIABLE" => "SECTION_ID",
                        "SECTION_TOP_DEPTH" => "2",
                        "SEF_MODE" => "N",
                        "SET_LAST_MODIFIED" => "N",
                        "SET_STATUS_404" => "N",
                        "SET_TITLE" => "N",
                        "SHOW_404" => "N",
                        "SHOW_DEACTIVATED" => "N",
                        "SHOW_DISCOUNT_PERCENT" => "N",
                        "SHOW_MAX_QUANTITY" => "N",
                        "SHOW_OLD_PRICE" => "N",
                        "SHOW_PRICE_COUNT" => "1",
                        "SHOW_SKU_DESCRIPTION" => "N",
                        "SHOW_TOP_ELEMENTS" => "Y",
                        "SIDEBAR_DETAIL_SHOW" => "N",
                        "SIDEBAR_PATH" => "",
                        "SIDEBAR_SECTION_SHOW" => "Y",
                        "TEMPLATE_THEME" => "blue",
                        "TOP_ADD_TO_BASKET_ACTION" => "ADD",
                        "TOP_ELEMENT_COUNT" => "9",
                        "TOP_ELEMENT_SORT_FIELD" => "sort",
                        "TOP_ELEMENT_SORT_FIELD2" => "id",
                        "TOP_ELEMENT_SORT_ORDER" => "asc",
                        "TOP_ELEMENT_SORT_ORDER2" => "desc",
                        "TOP_LINE_ELEMENT_COUNT" => "3",
                        "TOP_VIEW_MODE" => "SECTION",
                        "USER_CONSENT" => "N",
                        "USER_CONSENT_ID" => "0",
                        "USER_CONSENT_IS_CHECKED" => "Y",
                        "USER_CONSENT_IS_LOADED" => "N",
                        "USE_BIG_DATA" => "Y",
                        "USE_COMMON_SETTINGS_BASKET_POPUP" => "N",
                        "USE_COMPARE" => "N",
                        "USE_ELEMENT_COUNTER" => "Y",
                        "USE_ENHANCED_ECOMMERCE" => "N",
                        "USE_FILTER" => "N",
                        "USE_GIFTS_DETAIL" => "Y",
                        "USE_GIFTS_MAIN_PR_SECTION_LIST" => "Y",
                        "USE_GIFTS_SECTION" => "Y",
                        "USE_MAIN_ELEMENT_SECTION" => "N",
                        "USE_PRICE_COUNT" => "N",
                        "USE_PRODUCT_QUANTITY" => "N",
                        "USE_REVIEW" => "N",
                        "USE_SALE_BESTSELLERS" => "Y",
                        "USE_STORE" => "N",
                        "COMPONENT_TEMPLATE" => "catalog",
                        "TOP_PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
                        "TOP_PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",
                        "TOP_ENLARGE_PRODUCT" => "STRICT",
                        "TOP_SHOW_SLIDER" => "Y",
                        "TOP_SLIDER_INTERVAL" => "3000",
                        "TOP_SLIDER_PROGRESS" => "N",
                        "VARIABLE_ALIASES" => array(
                            "ELEMENT_ID" => "ELEMENT_ID",
                            "SECTION_ID" => "SECTION_ID",
                        )
                    ),
                    false
                ); ?>
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