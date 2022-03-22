<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); ?>

<? if (!empty($arResult)): ?>

<header class="header">
    <div class="container">
        <div class="header-inner">
            <div class="header-body">
                <div class="header__wrap-logo">
                    <a href="#" class="header__logo"><img src="<?=SITE_TEMPLATE_PATH ?>/img/logo.png" alt="БММ"
                                                          class="header__logo-img">БММ</a>
                </div>
                <div class="header-content">
                    <div class="header__menu">
                        <ul class="header__list">
                            <? foreach($arResult as $arItem): ?>
                                <li>
                                    <a href="<?=$arItem["LINK"]?>" class="header__link"><?=$arItem["TEXT"]?></a>
                                </li>
                            <? endforeach ?>

                            <a href="tel:88004442233" class="header__phone mobile">8 800 444 22 33</a>

                            <div class="header__mail mobile">bmm@inbox.ru</div>
                            <div class="header__mess mobile">
                                <a href="#" class="header__mess-whatsaap"><img
                                        src="<?=SITE_TEMPLATE_PATH ?>/img/icons/Whatsapp.svg" alt="whatsapp"></a>
                                <a href="#" class="header__mess-telegram"><img
                                        src="<?=SITE_TEMPLATE_PATH ?>/img/icons/telegram.svg" alt="telegram"></a>
                            </div>

                        </ul>

                    </div>
                </div>
                <div class="header__messangers mobile">
                    <a href="#" class="header__messangers-telegram"><img
                            src="<?=SITE_TEMPLATE_PATH ?>/img/icons/telegram.svg" alt="telegram"></a>
                    <a href="#" class="header__messangers-whatsapp"><img
                            src="<?=SITE_TEMPLATE_PATH ?>/img/icons/Whatsapp.svg" alt="whatsapp"></a>
                </div>
                <div class="header__burger">
                    <span></span>
                </div>
            </div>
        </div>
    </div>
</header>
<? endif ?>

