<?php
/**
 * (c) Ismael Trascastro <i.trascastro@gmail.com>
 *
 * @link        https://github.com/itrascastro/TrascastroACL
 * @copyright   Copyright (c) Ismael Trascastro. (http://www.ismaeltrascastro.com)
 * @license     MIT License - http://en.wikipedia.org/wiki/MIT_License
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [
    'TrascastroACL' => [
        'roles' => [
            'guest',
            'user',
            'admin',
            'moderator'
        ],
        'forbidden' => [
            'controller'    => 'User\Controller\Users',
            'action'        => 'delete',
        ],
        'role_provider' => 'User\Provider\RoleProvider',
    ],
];
