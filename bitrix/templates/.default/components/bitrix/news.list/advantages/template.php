<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
if(empty($arResult["ITEMS"])) return;
?>

<div class="baner-home__items">
    <div class="swiper-container mobile-slider">
        <div class="swiper-wrapper mobile-wrapper">

            <? foreach($arResult["ITEMS"] as $arItem): ?>
                <div class="swiper-slide swiper-slide-desc">
                    <div class="baner-home__item">
                        <!-- проверка на существование картинки-->
                        <? if(isset($arItem["PREVIEW_PICTURE"])): ?>
                            <div class="baner-home__item-img">
                                <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>">
                            </div>
                        <? endif ?>

                        <div class="baner-home__item-title">
                            <?=$arItem["NAME"]?>
                        </div>


                        <!-- проверка на существование описания-->
                        <? if(isset($arItem["PROPERTIES"]["DESCRIPTION"]["VALUE"])): ?>
                            <div class="baner-home__item-text">
                               <?=$arItem["PROPERTIES"]["DESCRIPTION"]["VALUE"]?>
                            </div>
                        <? endif ?>
                    </div>
                </div>
            <?endforeach;?>

            <div class="swiper-slide swiper-slide-desc desc">
                <div class="baner-home__item baner-home__item-tx">
                    <div class="baner-home__item-text">
                        Компания БММ оказывает складские услуги более 20 лет
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>






