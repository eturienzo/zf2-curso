<?php
/**
 * Created by PhpStorm.
 * User: elena
 * Date: 08/04/2015
 * Time: 18:24
 */


namespace MyString\Controller\Factory;

use MyString\Controller\MyStringController;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
class MyStringControllerFactory implements FactoryInterface
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
        $model = $sm->get('MyString\Model\MyString');
        return new MyStringController($model);
    }
}