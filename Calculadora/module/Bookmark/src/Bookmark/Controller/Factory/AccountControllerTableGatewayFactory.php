<?php
/**
 * Created by PhpStorm.
 * User: elena
 * Date: 13/05/2015
 * Time: 22:00
 */
namespace Bookmark\Controller\Factory;


use Bookmark\Controller\AccountController;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class AccountControllerTableGatewayFactory implements FactoryInterface
{

    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     *
     * @return mixed
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $sm = $serviceLocator->getServiceLocator();
        $model = $sm->get('Bookmark\Model\BookmarkDaoTableGateway');

        return new AccountController($model);
    }
}