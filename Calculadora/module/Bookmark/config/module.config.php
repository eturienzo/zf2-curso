<?php
return array(
    'router' => array(
        'routes' => array(
            'bookmark\login\login' => array(
                'type' => 'Literal',
                'options' => array(
                    'route'    => '/bookmark/login/',
                    'defaults' => array(
                        'controller' => 'Bookmark\Controller\Login',
                        'action'     => 'login',
                        'roles'      => ['guest'],
                    ),
                ),
            ),
            'bookmark\login\doLogin' => array(
                'type' => 'Literal',
                'options' => array(
                    'route'    => '/bookmark/do-login/',
                    'defaults' => array(
                        'controller' => 'Bookmark\Controller\Login',
                        'action'     => 'doLogin',
                        'roles'      => ['guest'],
                    ),
                ),
            ),
            'bookmark\login\logout' => array(
                'type' => 'Literal',
                'options' => array(
                    'route'    => '/bookmark/logout/',
                    'defaults' => array(
                        'controller' => 'Bookmark\Controller\Login',
                        'action'     => 'logout',
                        'roles'      => ['admin', 'user'],
                    ),
                ),
            ),
            'bookmark\account\index' => array(
                'type' => 'Literal',
                'options' => array(
                    'route'    => '/bookmark/',
                    'defaults' => array(
                        'controller' => 'Bookmark\Controller\Account',
                        'action'     => 'index',
                    ),
                ),
            ),
            'bookmark\account\view' => array(
                'type'              => 'Segment',
                'options'           => array(
                    'route'         => '/bookmark/view/id/[:id]/',
                    'constraints'   => array(
                        'id' => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Bookmark\Controller\Account',
                        'action'     => 'view',
                    ),
                ),
            ),
            'bookmark\account\create' => array(
                'type' => 'Literal',
                'options' => array(
                    'route'    => '/bookmark/create/',
                    'defaults' => array(
                        'controller' => 'Bookmark\Controller\Account',
                        'action'     => 'create',
                    ),
                ),
            ),
            'bookmark\account\doCreate' => array(
                'type' => 'Literal',
                'options' => array(
                    'route'    => '/bookmark/do-create/',
                    'defaults' => array(
                        'controller' => 'Bookmark\Controller\Account',
                        'action'     => 'doCreate',
                    ),
                ),
            ),
            'bookmark\account\delete' => array(
                'type' => 'Segment',
                'options' => array(
                    'route'    => '/bookmark/delete/id/[:id]/',
                    'constraints' => array(
                        'id' => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Bookmark\Controller\Account',
                        'action'     => 'delete',
                    ),
                ),
            ),
            'bookmark\account\update' => array(
                'type' => 'Segment',
                'options' => array(
                    'route'    => '/bookmark/update/id/[:id]/',
                    'constraints' => array(
                        'id' => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Bookmark\Controller\Account',
                        'action'     => 'update',
                    ),
                ),
            ),
            'bookmark\account\doUpdate' => array(
                'type' => 'Literal',
                'options' => array(
                    'route'    => '/bookmark/do-update/',
                    'defaults' => array(
                        'controller' => 'Bookmark\Controller\Account',
                        'action'     => 'doUpdate',
                    ),
                ),
            ),
        ),
    ),
    'service_manager' => array(
        'aliases' => array(
            'Zend\Authentication\AuthenticationService' => 'Bookmark\Service\Authentication', //needed for identity plugin
        ),
        'factories' => array(
            'Bookmark\Model\BookmarkDao'   => 'Bookmark\Model\Factory\BookmarkDaoFactory',
            'Bookmark\Model\BookmarkDaoTableGateway' => 'Bookmark\Model\Factory\BookmarkDaoTableGatewayFactory',
            'Bookmark\Service\AuthenticationStorage' => 'Bookmark\Service\Factory\AuthenticationStorageServiceFactory',
            'Bookmark\Service\Authentication' => 'Bookmark\Service\Factory\AuthenticationServiceFactory',
        ),
    ),
    'controllers' => array(
        'factories' => array(
    //        'Bookmark\Controller\Account' => 'Bookmark\Controller\Factory\AccountControllerFactory',
            'Bookmark\Controller\Account' => 'Bookmark\Controller\Factory\AccountControllerTableGatewayFactory',
        ),
    ),
    'view_manager' => array(
        'template_map'              => array(
            'bookmark/account/partial/form-update' => __DIR__ . '/../view/bookmark/account/partial/form-update.phtml',
            'bookmark/account/partial/form-create' => __DIR__ . '/../view/bookmark/account/partial/form-create.phtml',
        ),
        'template_path_stack'       => array(
            __DIR__ . '/../view',
        ),
    ),
);