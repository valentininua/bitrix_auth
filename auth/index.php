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
    "bitrix:system.auth.form",
    "",
    Array(
        "FORGOT_PASSWORD_URL" => "/auth/fpass.php",
        "PROFILE_URL" => "/auth/lk.php",
        "REGISTER_URL" => "/auth/reg.php",
        "SHOW_ERRORS" => "Y"
    )
);
?>
</body>
</html>
