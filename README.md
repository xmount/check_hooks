# check_hooks
Validation of brackets for Bitrix
Usage:
<?$APPLICATION->IncludeComponent(
	"my:hooks.check",
	"",
Array()
);?>

Либо можно добавить компонент на страницу через Редактирование -> Добавить компонент -> Мои компоненты -> Проверка скобок.
Поддерживаются скобки вида (, {, [, ], }, ).
