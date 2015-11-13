<?php
namespace User\Provider;


/**
 * Created by PhpStorm.
 * User: elena
 * Date: 03/11/2015
 * Time: 10:06
 */
use TrascastroACL\Provider\RoleProviderInterface;
use Zend\Authentication\AuthenticationServiceInterface;
use Zend\Authentication\AuthenticationService;
class RoleProvider implements RoleProviderInterface
{
    /**
     * @var AuthenticationService
     */
    private $authenticationService;

    /**
     * @param AuthenticationServiceInterface $authenticationService
     */
    public function __construct(AuthenticationServiceInterface $authenticationService)
    {
        $this->authenticationService = $authenticationService;
    }

    /**
     * @return String
     */
    public function getUserRole()
    {
        return ($identity = $this->authenticationService->getIdentity()) ? $identity->role : 'guest';
    }
}