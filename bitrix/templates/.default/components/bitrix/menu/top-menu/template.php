<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<? if (!empty($arResult)): ?>
    <nav class="headerMenu">
        <div class="mobileHeader mobShow">
            <span>Меню</span>
            <img class="iconCross" src="<?=SITE_TEMPLATE_PATH?>/img/icons/crossMobile.svg" alt="">
        </div>
        <div class="noAuth">
            <div class="text">Привет, гость!</div>
            <div class="authActions">
                <a class="buttonBlue" href="#">Войти</a>
                <a class="buttonBlue" href="#">Регистрация</a>
            </div>
        </div>
        <ul>
        <? foreach($arResult as $arItem): ?>
            <li><a href="<?=$arItem['LINK']?>"><?=$arItem['TEXT']?></a></li>
        <? endforeach; ?>
            <li class="mobHide posRelative">
                <a href="#" class="iconSearch js-openSearch"></a>
                <div class="searchBox">
                    <div class="searchActive">
                        <input type="text" name="">
                        <span class="iconBlueButton">→</span>
                    </div>
                    <div class="autocomplitItems">
                        <div class="item">
                            <div class="imgWrap">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/cs1.png" alt="">
                            </div>
                            <div class="itemName">Ноутбук Macbook PRO 13 2021</div>
                        </div>
                        <div class="item">
                            <div class="imgWrap">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/cs1.png" alt="">
                            </div>
                            <div class="itemName">Ноутбук Macbook PRO 13 2021</div>
                        </div>
                        <div class="item">
                            <div class="imgWrap">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/cs1.png" alt="">
                            </div>
                            <div class="itemName">Ноутбук Macbook PRO 13 2021</div>
                        </div>
                        <div class="item empty">
                            <div class="imgWrap"></div>
                            <div class="itemName">Ничего не найдено</div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </nav>
<? endif ?>

