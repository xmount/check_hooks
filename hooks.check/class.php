<?

use \Bitrix\Main\Application;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

class CheckHooks extends CBitrixComponent
{

    public function result($str)
    {
        return $this->control($str) ? true : false;
    }

    private function control($str)
    {
        $openBkt = ['(' => ')', '{' => '}', '[' => ']'];
        $closeBkt = array_flip($openBkt);
        $stack = [];
        $lastChar = null;
        $chars = str_split($str);

        foreach ($chars as $char) {
            if (isset($openBkt[$char])) {
                $lastChar = $char;
                $stack[] = $char;
            } elseif (isset($closeBkt[$char])) {
                if ($lastChar && $char == $openBkt[$lastChar]) {
                    array_pop($stack);
                    $lastChar = end($stack);
                } else {
                    return false;
                }
            }
        }
        return sizeof($stack) === 0;

    }

    public function executeComponent()
    {
        $this->_request = Application::getInstance()->getContext()->getRequest();
        $this->arResult['RESULT'] = $this->result($this->_request->getPost("check_string"));
        $this->arResult['SOME_VAR'] = $this->_request["check_string"];
        $this->arResult['FORM_ACTION'] = Application::getInstance()->getContext()->getRequest()->getRequestedPage();
        $this->includeComponentTemplate();
    }
}