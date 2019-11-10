<?use Bitrix\Main\Localization\Loc;?>

<?if ($arResult["SOME_VAR"]){
	echo Loc::getMessage('RESULT')." <b>".$arResult["SOME_VAR"]."</b> ";
	echo ($arResult['RESULT'])?Loc::getMessage('CORRECT'):Loc::getMessage('ERROR');
}?>

<form id="check_hooks" method="POST" action="<?=$arResult["FORM_ACTION"]?>">
	<input type="text" name="check_string" placeholder="<?=Loc::getMessage('PLACE')?>" value="<?=$arResult["SOME_VAR"]?>">
	<br>
	<button id="check_result">Check</button>
</form>