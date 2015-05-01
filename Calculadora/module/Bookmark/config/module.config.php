<?php
return array(
    'router' => array(
        'routes' => array(
            'bookmark\account\index' => array(
                'type' => 'Literal',
                'options' => array(
                    'route'    => '/account/',
                    'defaults' => array(
                        'controller' => 'Bookmark\Controller\Account',
                        'action'     => 'index',
                    ),
                ),
            ),
            'bookmark\account\view' => array(
                'type'              => 'Segment',
                'options'           => array(
                    'route'         => '/account/view/id/[:id]/',
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
                    'route'    => '/account/create/',
                    'defaults' => array(
                        'controller' => 'Bookmark\Controller\Account',
                        'action'     => 'create',
                    ),
                ),
            ),
            'bookmark\account\doCreate' => array(
                'type' => 'Literal',
                'options' => array(
                    'route'    => '/account/do-create/',
                    'defaults' => array(
                        'controller' => 'Bookmark\Controller\Account',
                        'action'     => 'doCreate',
                    ),
                ),
            ),
            'bookmark\account\delete' => array(
                'type' => 'Segment',
                'options' => array(
                    'route'    => '/account/delete/id/[:id]/',
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
                    'route'    => '/account/update/id/[:id]/',
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
                    'route'    => '/account/do-update/',
                    'defaults' => array(
                        'controller' => 'Bookmark\Controller\Account',
                        'action'     => 'doUpdate',
                    ),
                ),
            ),
        ),
    ),
    'service_manager' => array(
        'factories' => array(
            'Bookmark\Model\BookmarkDao'   => 'Bookmark\Model\Factory\BookmarkDaoFactory',
        ),
    ),
    'controllers' => array(
        'factories' => array(
            'Bookmark\Controller\Account' => 'Bookmark\Controller\Factory\AccountControllerFactory',
        ),
    ),
    'view_manager' => array(
        'template_map'              => array(
            'bookmark/account/partial/form' => __DIR__ . '/../view/bookmark/account/partial/form.phtml',
        ),
        'template_path_stack'       => array(
            __DIR__ . '/../view',
        ),
    ),
);