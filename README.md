# check_hooks
Validation of brackets for Bitrix
Usage:
&lt;?$APPLICATION->IncludeComponent(
	"my:hooks.check",
	"",
Array()
);?&gt;

Либо можно добавить компонент на страницу через Редактирование -> Добавить компонент -> Мои компоненты -> Проверка скобок.
Поддерживаются скобки вида (, {, [, ], }, ).
