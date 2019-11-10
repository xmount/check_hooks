<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

use Bitrix\Main\Localization\Loc;

$arComponentDescription = [
    "NAME" => Loc::getMessage("CK_NAME"),
    "DESCRIPTION" => Loc::getMessage("CK_DESCRIPTION"),
    "COMPLEX" => "N",
    "PATH" => [
        "ID" => Loc::getMessage("CK_PATH_ID"),
        "NAME" => Loc::getMessage("CK_PATH_NAME"),
    ],
];
?>
