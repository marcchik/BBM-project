
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?=$APPLICATION->ShowTitle() ?></title>
    <?$APPLICATION->ShowHead();?>

    <!--    подключение стилей-->
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/style.css");?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/animate-slider.css");?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/animate.min.css");?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/js/jq-ui-1.13.0/jquery-ui.css");?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/js/plugins/OwlCarousel2-2.3.4/dist/assets/owl.carousel.css");?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/js/plugins/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css");?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/js/plugins/swiper/swiper.min.css");?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/js/plugins/tingle-master/src/tingle.css");?>

    <!--    подключение скриптов    -->
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/jq/jquery.js");?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/jq-ui-1.13.0/jquery-ui.min.js");?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/plugins/OwlCarousel2-2.3.4/dist/owl.carousel.min.js");?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/plugins/swiper/swiper.min.js");?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/plugins/tingle-master/src/tingle.js");?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/index.js");?>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

</head>
<body>
<div id="panel"><?= $APPLICATION->ShowPanel() ?></div>

<div class="container">
    <header>
        <div class="contentWrapper">
            <div class="left">
                <div class="logoMain">
                    <a href="/"><img src="<?=SITE_TEMPLATE_PATH?>/img/icons/logo.svg" alt=""></a>
                </div>
                <input id="toggleMenu" type="checkbox">
                <!--верхнее меню-->
                <?$APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "horizontal_multilevel",
                    Array(
                        "ALLOW_MULTI_SELECT" => "N",
                        "CHILD_MENU_TYPE" => "left",
                        "DELAY" => "N",
                        "MAX_LEVEL" => "1",
                        "MENU_CACHE_GET_VARS" => array(""),
                        "MENU_CACHE_TIME" => "3600",
                        "MENU_CACHE_TYPE" => "N",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "ROOT_MENU_TYPE" => "top",
                        "USE_EXT" => "N"
                    )
                );?>
            </div>
            <div class="right">
                <div class="userActions">
                    <ul>
                        <li class="mobShow posRelative">
                            <span class="iconSearch js-openSearch"></span>
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
                        <li>
                            <a href="">
                                <svg class="iconProfile pathStroke" viewBox="0 0 21 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20.2232 21.8578V19.6184C20.2232 18.4306 19.7338 17.2914 18.8628 16.4515C17.9918 15.6115 16.8104 15.1396 15.5785 15.1396H6.2892C5.05736 15.1396 3.87597 15.6115 3.00492 16.4515C2.13388 17.2914 1.64453 18.4306 1.64453 19.6184V21.8578" stroke="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M10.9337 10.6607C13.4989 10.6607 15.5784 8.65548 15.5784 6.18191C15.5784 3.70835 13.4989 1.70312 10.9337 1.70312C8.36855 1.70312 6.28906 3.70835 6.28906 6.18191C6.28906 8.65548 8.36855 10.6607 10.9337 10.6607Z" stroke="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </li>
                        <li class="mobHide">
                            <a href="">
                                <svg class="iconStats pathStroke pathFill rectStroke" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.94939 6.94939C10.4932 6.40553 11.2309 6.1 12 6.1C12.7691 6.1 13.5068 6.40553 14.0506 6.94939C14.5945 7.49325 14.9 8.23087 14.9 9V21C14.9 21.7691 14.5945 22.5068 14.0506 23.0506C13.5068 23.5945 12.7691 23.9 12 23.9C11.2309 23.9 10.4932 23.5945 9.94939 23.0506C9.40553 22.5068 9.1 21.7691 9.1 21V9C9.1 8.23087 9.40553 7.49325 9.94939 6.94939ZM12.7778 21.7778C12.9841 21.5715 13.1 21.2917 13.1 21V9C13.1 8.70826 12.9841 8.42847 12.7778 8.22218C12.5715 8.01589 12.2917 7.9 12 7.9C11.7083 7.9 11.4285 8.01589 11.2222 8.22218C11.0159 8.42847 10.9 8.70826 10.9 9V21C10.9 21.2917 11.0159 21.5715 11.2222 21.7778C11.4285 21.9841 11.7083 22.1 12 22.1C12.2917 22.1 12.5715 21.9841 12.7778 21.7778Z" fill="none" stroke="#292D32" stroke-width="0.2"/>
                                    <path d="M18.9494 0.94939C19.4932 0.405535 20.2309 0.1 21 0.1C21.7691 0.1 22.5068 0.405535 23.0506 0.94939C23.5945 1.49325 23.9 2.23087 23.9 3V21C23.9 21.7691 23.5945 22.5068 23.0506 23.0506C22.5068 23.5945 21.7691 23.9 21 23.9C20.2309 23.9 19.4932 23.5945 18.9494 23.0506C18.4055 22.5068 18.1 21.7691 18.1 21V3C18.1 2.23087 18.4055 1.49325 18.9494 0.94939ZM21.7778 21.7778C21.9841 21.5715 22.1 21.2917 22.1 21V3C22.1 2.70826 21.9841 2.42847 21.7778 2.22218C21.5715 2.01589 21.2917 1.9 21 1.9C20.7083 1.9 20.4285 2.01589 20.2222 2.22218C20.0159 2.42847 19.9 2.70826 19.9 3V21C19.9 21.2917 20.0159 21.5715 20.2222 21.7778C20.4285 21.9841 20.7083 22.1 21 22.1C21.2917 22.1 21.5715 21.9841 21.7778 21.7778Z" fill="none" stroke="#292D32" stroke-width="0.2"/>
                                    <rect x="0.75" y="12.75" width="4.5" height="10.5" rx="2.25" stroke="none" stroke-width="1.5"/>
                                </svg>
                            </a>
                        </li>
                        <li class="mobHide">
                            <a href="">
                                <svg class="iconFavorite pathFill" width="24" height="23" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.5 0.916992C16.3739 0.934507 15.2724 1.24885 14.3067 1.82826C13.341 2.40768 12.5453 3.23166 12 4.21699C11.4546 3.23166 10.6589 2.40768 9.6932 1.82826C8.7275 1.24885 7.62601 0.934507 6.49996 0.916992C4.7049 0.994983 3.01366 1.78025 1.79574 3.10122C0.577818 4.4222 -0.0677922 6.17152 -4.17093e-05 7.96699C-4.17093e-05 12.514 4.78596 17.48 8.79996 20.847C9.69618 21.6001 10.8293 22.013 12 22.013C13.1706 22.013 14.3037 21.6001 15.2 20.847C19.214 17.48 24 12.514 24 7.96699C24.0677 6.17152 23.4221 4.4222 22.2042 3.10122C20.9863 1.78025 19.295 0.994983 17.5 0.916992ZM13.915 19.317C13.3789 19.7684 12.7007 20.0159 12 20.0159C11.2992 20.0159 10.621 19.7684 10.085 19.317C4.94696 15.006 1.99996 10.87 1.99996 7.96699C1.9316 6.70171 2.36632 5.46072 3.20932 4.51469C4.05232 3.56866 5.23519 2.99434 6.49996 2.91699C7.76472 2.99434 8.9476 3.56866 9.7906 4.51469C10.6336 5.46072 11.0683 6.70171 11 7.96699C11 8.23221 11.1053 8.48656 11.2929 8.6741C11.4804 8.86164 11.7347 8.96699 12 8.96699C12.2652 8.96699 12.5195 8.86164 12.7071 8.6741C12.8946 8.48656 13 8.23221 13 7.96699C12.9316 6.70171 13.3663 5.46072 14.2093 4.51469C15.0523 3.56866 16.2352 2.99434 17.5 2.91699C18.7647 2.99434 19.9476 3.56866 20.7906 4.51469C21.6336 5.46072 22.0683 6.70171 22 7.96699C22 10.87 19.053 15.006 13.915 19.313V19.317Z" fill="none" stroke="none" stroke-width="0.6"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <div class="activeNotification">3</div>
                                <svg class="iconBag pathFill" width="22" height="24" viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.1157 7.69568V5.55802C16.1157 4.8919 15.9845 4.2323 15.7296 3.61689C15.4747 3.00147 15.101 2.44229 14.63 1.97127C14.159 1.50026 13.5998 1.12662 12.9844 0.871711C12.369 0.616798 11.7094 0.485596 11.0433 0.485596C10.3772 0.485596 9.71756 0.616798 9.10215 0.871711C8.48674 1.12662 7.92756 1.50026 7.45654 1.97127C6.98552 2.44229 6.61189 3.00147 6.35698 3.61689C6.10206 4.2323 5.97086 4.8919 5.97086 5.55802V10.6304C5.97086 10.8226 6.0472 11.0069 6.1831 11.1428C6.31899 11.2787 6.50331 11.3551 6.69549 11.3551C6.88768 11.3551 7.07199 11.2787 7.20788 11.1428C7.34378 11.0069 7.42012 10.8226 7.42012 10.6304V9.14494H13.2172V7.69568H7.42012V5.55802C7.42012 4.5971 7.80185 3.67553 8.48132 2.99606C9.1608 2.31658 10.0824 1.93486 11.0433 1.93486C12.0042 1.93486 12.9258 2.31658 13.6052 2.99606C14.2847 3.67553 14.6664 4.5971 14.6664 5.55802V10.5942C14.6664 10.7864 14.7428 10.9707 14.8787 11.1066C15.0146 11.2425 15.1989 11.3188 15.3911 11.3188C15.5833 11.3188 15.7676 11.2425 15.9035 11.1066C16.0394 10.9707 16.1157 10.7864 16.1157 10.5942V9.14494H19.7389V22.1883H2.3477V9.14494H4.5216V7.69568H0.898438V22.2535C0.898438 22.6206 1.04426 22.9726 1.30382 23.2322C1.56337 23.4918 1.91541 23.6376 2.28248 23.6376H19.8041C20.1712 23.6376 20.5232 23.4918 20.7827 23.2322C21.0423 22.9726 21.1881 22.6206 21.1881 22.2535V7.69568H16.1157Z" fill="none"/>
                                </svg>

                            </a>
                        </li>
                        <li class="mobMenu mobShow">
                            <img class="iconMenu" src="<?=SITE_TEMPLATE_PATH?>/img/icons/menu.svg" alt="">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
