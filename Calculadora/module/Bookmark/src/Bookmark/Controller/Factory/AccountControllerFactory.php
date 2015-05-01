<?php
/**
 * Created by PhpStorm.
 * User: elena
 * Date: 29/04/2015
 * Time: 22:24
 */

namespace Bookmark\Controller\Factory;


use User\Controller\AccountController;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class AccountControllerFactory implements FactoryInterface
{

    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     *
     * @return AccountController
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $sm = $serviceLocator->getServiceLocator();
        $userDao = $sm->get('Bookmark\Model\BookmarkDao');

        return new AccountController($bookmarkDao);
    }
}