<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Главная");
?>
    <main class="main">
        <section class="baner-home">
            <div class="container">
                <div class="baner-home__inner">

                    <!--Слайдер с картинками-->
                    <? $APPLICATION->IncludeComponent("bitrix:news.list", "slider-img", array(
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
                            "COMPONENT_TEMPLATE" => "slider-img",
                            "DETAIL_URL" => "",
                            "DISPLAY_BOTTOM_PAGER" => "Y",
                            "DISPLAY_DATE" => "Y",
                            "DISPLAY_NAME" => "Y",
                            "DISPLAY_PICTURE" => "Y",
                            "DISPLAY_PREVIEW_TEXT" => "Y",
                            "DISPLAY_TOP_PAGER" => "N",
                            "FIELD_CODE" => array(
                                0 => "",
                                1 => "",
                            ),
                            "FILTER_NAME" => "",
                            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                            "IBLOCK_ID" => "12",
                            "IBLOCK_TYPE" => "slider_img",
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
                                0 => "",
                                1 => "",
                            ),
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
                        ),
                        false,
                        array(
                        "ACTIVE_COMPONENT" => "Y"
                        )
                    ); ?>

                    <div class="baner-home__subtitle mobile">
                        Компания БММ оказывает складские услуги более 20 лет
                    </div>

                    <!--Преимущества компании-->
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "advantages",
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
                            "COMPONENT_TEMPLATE" => "advantages",
                            "DETAIL_URL" => "",
                            "DISPLAY_BOTTOM_PAGER" => "Y",
                            "DISPLAY_DATE" => "Y",
                            "DISPLAY_NAME" => "Y",
                            "DISPLAY_PICTURE" => "Y",
                            "DISPLAY_PREVIEW_TEXT" => "Y",
                            "DISPLAY_TOP_PAGER" => "N",
                            "FIELD_CODE" => array(
                                0 => "",
                                1 => "",
                            ),
                            "FILTER_NAME" => "",
                            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                            "IBLOCK_ID" => "11",
                            "IBLOCK_TYPE" => "advantages",
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
                                0 => "DESCRIPTION",
                                1 => "",
                            ),
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
                        ),
                        false
                    ); ?>

                </div>

                <div class="baner-home-text">
                    Сдача в аренду коммерческих площадей
                </div>

            </div>

            <div class="baner-home__right">
                <div class="baner-home__right-messengers">
                    <a href="#" class="baner-home__right-messengers-telegram"><img alt="telegram"
                                                                                   src="/front-end/bitrix/templates/bbm/img/icons/telegram.svg"></a>
                    <a href="#" class="baner-home__right-messengers-whatsapp"><img alt="Whatsapp"
                                                                                   src="/front-end/bitrix/templates/bbm/img/icons/Whatsapp.svg"></a>
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
                    <img src="/front-end/bitrix/templates/bbm/img/icons/mouse2.svg" alt="">
                </div>
            </div>
        </section>

        <!--Наши основные услуги-->
        <? $APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "services",
            array(
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
                "COMPONENT_TEMPLATE" => "services",
                "DETAIL_URL" => "",
                "DISPLAY_BOTTOM_PAGER" => "Y",
                "DISPLAY_DATE" => "Y",
                "DISPLAY_NAME" => "Y",
                "DISPLAY_PICTURE" => "Y",
                "DISPLAY_PREVIEW_TEXT" => "Y",
                "DISPLAY_TOP_PAGER" => "Y",
                "FIELD_CODE" => array(
                    0 => "ID",
                    1 => "",
                ),
                "FILE_404" => "",
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
                "PROPERTY_CODE" => array(
                    0 => "DESCRIPTION",
                    1 => "",
                ),
                "SET_BROWSER_TITLE" => "N",
                "SET_LAST_MODIFIED" => "Y",
                "SET_META_DESCRIPTION" => "Y",
                "SET_META_KEYWORDS" => "Y",
                "SET_STATUS_404" => "Y",
                "SET_TITLE" => "N",
                "SHOW_404" => "Y",
                "SORT_BY1" => "ID",
                "SORT_BY2" => "SORT",
                "SORT_ORDER1" => "ASC",
                "SORT_ORDER2" => "ASC",
                "STRICT_SECTION_CHECK" => "N"
            ),
            false
        ); ?>

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

    <?

        if ($_REQUEST['success'] == 1) {
            echo "<script>
                    alert('Отправка произошла успешно');
                     location='/';
                    </script>";
        }

CModule::IncludeModule('iblock');

$users = array();

$rsUsers = CUser::GetList(($by="personal_country"), ($order="desc"), $filter); // выбираем пользователей
$is_filtered = $rsUsers->is_filtered; // отфильтрована ли выборка ?
while($rsUsers->NavNext(true, "f_")) :
    echo "[".$f_ID."] (".$f_LOGIN.") ".$f_NAME." ".$f_LAST_NAME."<br>";
    $users[$f_ID] = $rsUsers;
endwhile;

$a  = 1;

echo "<pre>";
print_r($users);
echo "</pre>";
echo 'aaa - $a';

$arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);




//        if ($_REQUEST['success'] == 0) {
//            echo "<script>
//                    alert('Отправка произошла успешно');
//                    location='/';
//                </script>";


    ?>

<script>
    var WIDTH = window.innerWidth;
    var HEIGHT = window.innerHeight;

    var renderer = new THREE.WebGLRenderer({antialias:true});
    renderer.setSize(WIDTH, HEIGHT);
    renderer.setClearColor(0xDDDDDD, 1);
    document.body.appendChild(renderer.domElement);

    var scene = new THREE.Scene();

    var camera = new THREE.PerspectiveCamera(70, WIDTH/HEIGHT);
    camera.position.z = 50;
    scene.add(camera);

    var boxGeometry = new THREE.BoxGeometry(10, 10, 10);
    var basicMaterial = new THREE.MeshBasicMaterial({color: 0x0095DD});
    var cube = new THREE.Mesh(boxGeometry, basicMaterial);
    scene.add(cube);
    cube.rotation.set(0.4, 0.2, 0);

    function render() {
        requestAnimationFrame(render);
        renderer.render(scene, camera);
    }
    render();
</script>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>