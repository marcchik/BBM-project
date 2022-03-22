<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="another website">
    <!-- <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" /> -->
    <?
        // для css-файлов
        $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/swiper-bundle.min.css");
        $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/style.csss");
        $APPLICATION->ShowHead();
    ?>
    <link rel="stylesheet" href="/front-end/bitrix/templates/bbm/css/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="/front-end/bitrix/templates/bbm/css/style.css">

    <title><?= $APPLICATION->ShowTitle() ?></title>
</head>
<body>
   <div id="panel"><? $APPLICATION->ShowPanel() ?></div>
   <?$APPLICATION->IncludeComponent("bitrix:menu", "top-menu", Array(
       "COMPONENT_TEMPLATE" => "horizontal_multilevel",
       "ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
       "MENU_CACHE_TYPE" => "N",	// Тип кеширования
       "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
       "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
       "MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
       "MAX_LEVEL" => "1",	// Уровень вложенности меню
       "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
       "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
       "DELAY" => "N",	// Откладывать выполнение шаблона меню
       "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
   ),
       false
   );?>

