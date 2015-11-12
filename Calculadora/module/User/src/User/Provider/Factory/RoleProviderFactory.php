<?php
/**
 * Created by PhpStorm.
 * User: elena
 * Date: 03/11/2015
 * Time: 10:07
 */

namespace User\Provider\Factory;


use User\Provider\RoleProvider;

class RoleProviderFactory
{
    public function __invoke($serviceLocator)
    {
        $authenticationService = $serviceLocator->get('User\Service\Authentication');

        return new RoleProvider($authenticationService);
    }
}