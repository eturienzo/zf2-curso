<?php
/**
 * Created by PhpStorm.
 * User: elena
 * Date: 22/03/2015
 * Time: 23:13
 */

namespace Calculadora\Controller\Factory;

use Calculadora\Controller\CalculadoraController;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
class CalculadoraControllerFactory implements FactoryInterface
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
        $model = $sm->get('Calculadora\Model\Calculadora');
        return new CalculadoraController($model);
    }
}