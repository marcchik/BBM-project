<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<? $i = 0; ?>
<? if (empty($arResult["ITEMS"])) return; ?>

<? foreach ($arResult["ITEMS"] as $arItem): ?>

    <? if ($arItem['PROPERTIES']['STOCK']['VALUE_XML_ID'] != 1) continue; ?>

    <?
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>

    <?php
    // echo date ("H:i:s", strtotime ($arItem['ACTIVE_TO']) - strtotime (date()));
    ?>

    <? if ($i % 2 == 0) : ?>
        <div>
    <? endif; ?>
    <div class="item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
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
            <!--проверка на существование картинки-->
            <? if (isset($arItem["PREVIEW_PICTURE"]['SRC'])): ?>
                <img src="/bitrix/templates/main/img/st1.png" alt="">
            <? endif ?>
        </div>
        <div class="links">
            <div class="category">
                <a href="#">Ноутбук</a>
            </div>

            <div class="product">
                <a href=""><?= $arItem['NAME'] ?></a>
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
                    <svg viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.9927 6.14636V10.11C17.9927 10.3676 17.982 10.6153 17.9501 10.8532C17.7056 13.5286 16.0148 14.8564 12.8991 14.8564H12.4738C12.2079 14.8564 11.9527 14.9753 11.7932 15.1735L10.5172 16.759C9.95359 17.4625 9.03908 17.4625 8.47549 16.759L7.19944 15.1735C7.0612 15.0051 6.75284 14.8564 6.5189 14.8564H6.09355C2.7014 14.8564 1 14.0736 1 10.11V6.14636C1 3.243 2.43556 1.66746 5.29603 1.43955C5.55124 1.40982 5.81708 1.3999 6.09355 1.3999H12.8991C16.2913 1.3999 17.9927 2.98536 17.9927 6.14636Z"
                              stroke="#C0C0C0" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                              stroke-linejoin="round"></path>
                        <path d="M13.2237 8.08411C12.9475 8.08411 12.7237 8.30796 12.7237 8.58411C12.7237 8.86025 12.9475 9.08411 13.2237 9.08411H13.2332C13.5094 9.08411 13.7332 8.86025 13.7332 8.58411C13.7332 8.30796 13.5094 8.08411 13.2332 8.08411H13.2237Z"
                              stroke="#C0C0C0" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M9.50199 8.08411C9.22585 8.08411 9.00199 8.30796 9.00199 8.58411C9.00199 8.86025 9.22585 9.08411 9.50199 9.08411H9.51156C9.7877 9.08411 10.0116 8.86025 10.0116 8.58411C10.0116 8.30796 9.7877 8.08411 9.51156 8.08411H9.50199Z"
                              stroke="#C0C0C0" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M5.78037 8.08411C5.50423 8.08411 5.28037 8.30796 5.28037 8.58411C5.28037 8.86025 5.50423 9.08411 5.78037 9.08411H5.78994C6.06608 9.08411 6.28994 8.86025 6.28994 8.58411C6.28994 8.30796 6.06608 8.08411 5.78994 8.08411H5.78037Z"
                              stroke="#C0C0C0" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <span>14</span>
                </a>
            </div>
        </div>
        <div class="priceBox">
            <div class="left">
                <div class="stockPrice">43 000 ₽</div>
                <div class="price"><?= $arItem['PROPERTIES']['PRICE']['VALUE'] ?> ₽</div>
            </div>
            <div>
                <a class="iconCart" href="#">
                    <svg viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.01786 7.30328C0.995773 7.2104 0.99415 7.11347 1.01311 7.01985C1.03208 6.92622 1.07113 6.83835 1.12731 6.76291C1.18349 6.68747 1.25531 6.62645 1.33734 6.58447C1.41936 6.54249 1.50942 6.52066 1.60069 6.52063H12.0796C12.1709 6.52066 12.2609 6.54249 12.343 6.58447C12.425 6.62645 12.4968 6.68747 12.553 6.76291C12.6092 6.83835 12.6482 6.92622 12.6672 7.01985C12.6861 7.11347 12.6845 7.2104 12.6624 7.30328L11.5743 11.8675C11.5093 12.1401 11.3593 12.3822 11.1481 12.5551C10.9369 12.7281 10.6766 12.8221 10.4086 12.8221H3.27167C3.00369 12.8221 2.74342 12.7281 2.53221 12.5551C2.32101 12.3822 2.17099 12.1401 2.10601 11.8675L1.01786 7.30328Z"
                              stroke="white" stroke-width="1.5" stroke-linejoin="round"></path>
                        <path d="M5.0376 9.04126V10.3015" stroke="white" stroke-width="1.5"
                              stroke-linecap="square"></path>
                        <path d="M8.64258 9.04126V10.3015" stroke="white" stroke-width="1.5"
                              stroke-linecap="square"></path>
                        <path d="M3.23486 5.78093L5.63831 2.00005" stroke="white" stroke-width="1.5"
                              stroke-linecap="square"></path>
                        <path d="M10.4453 5.78093L8.04199 2.00005" stroke="white" stroke-width="1.5"
                              stroke-linecap="square"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
    <? if ($i % 2 == 0) : ?>
        </div>
    <? endif; ?>
    <? $i++; ?>
<? endforeach; ?>
