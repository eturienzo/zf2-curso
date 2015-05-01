<?php
/**
 * Created by PhpStorm.
 * User: elena
 * Date: 19/04/2015
 * Time: 18:17
 */

namespace MyString\View\Helper;


use Zend\View\Helper\AbstractHelper;

class FormHelper extends AbstractHelper
{
    /**
     * @var string
     */
    private $action;

    /**
     * @var string
     */
    private $submit;

    public function __invoke($action, $submit)
    {
        $this->action = $action;
        $this->submit = $submit;

        return $this->render();
    }

    private function render()
    {
        return '
             <form id="cadenaForm" action="' . $this->action . '" method="post">
                <input type="string" name="str1"><br>
                <input type="string" name="str2"><br>
                <input type="submit" value="' . $this->submit . '">
            </form>
        ';
    }
}


