<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$APPLICATION->IncludeComponent(
    "bitrix:system.auth.registration",
    "flat",
    Array(
        "AUTH" => "Y",
        "COMPONENT_TEMPLATE" => "flat",
        "REQUIRED_FIELDS" => array(0 => "EMAIL",),
        "SET_TITLE" => "Y",
        "SHOW_FIELDS" => array(0 => "EMAIL",),
        "SUCCESS_PAGE" => "/auth/lk.php",
        "USER_PROPERTY" => "",
        "USER_PROPERTY_NAME" => "",
        "USE_BACKURL" => "Y"
    )
);
?>
</body>
</html>


