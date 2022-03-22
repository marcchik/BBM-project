<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
CModule::IncludeModule('iblock');
?>

<?
$el = new CIBlockElement;

$PROP = array();
$PROP[39] = $_REQUEST['tel'];  // Телефон
$PROP[40] = $_REQUEST['email'];        // Почта

$arLoadProductArray = Array(
    "MODIFIED_BY"    => $USER->GetID(), // элемент изменен текущим пользователем
    "IBLOCK_ID"      => 14,
    "PROPERTY_VALUES"=> $PROP,
    "NAME"           => $_REQUEST['name'], //Иимя
    "ACTIVE"         => "Y",            // активен
    "PREVIEW_TEXT"   => $_REQUEST['text'] //комментарий
);

if($PRODUCT_ID = $el->Add($arLoadProductArray))
    header("Location: /?success=1");
else
    header("Location: /?success=0");
?>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>