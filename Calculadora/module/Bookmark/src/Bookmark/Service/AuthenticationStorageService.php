<?php
/**
 * Created by PhpStorm.
 * User: elena
 * Date: 29/06/2015
 * Time: 22:22
 */
namespace Bookmark\Service;


use Zend\Authentication\Storage\Session;

class AuthenticationStorageService extends Session
{
    public function setRememberMe($rememberMe = 0, $time = 2592000)
    {
        if ($rememberMe == 1) {
            $this->session->getManager()->rememberMe($time);
        }
    }

    public function forgetMe()
    {
        $this->session->getManager()->forgetMe();
    }
}