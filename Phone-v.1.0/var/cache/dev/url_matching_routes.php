<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/clients' => [[['_route' => 'app_user_controller_php', '_controller' => 'App\\Controller\\UserControllerPhpController::index'], null, null, null, false, false, null]],
        '/api/client' => [[['_route' => 'app_usercontrollerphp_createclient', '_controller' => 'App\\Controller\\UserControllerPhpController::CreateClient'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/api/(?'
                    .'|phone/([^/]++)(*:64)'
                    .'|client/([^/]++)(*:86)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        64 => [[['_route' => 'app_phone_controller_php', '_controller' => 'App\\Controller\\PhoneControllerPhpController::index'], ['id'], null, null, false, true, null]],
        86 => [
            [['_route' => 'app_usercontrollerphp_getclientbyid', '_controller' => 'App\\Controller\\UserControllerPhpController::getClientById'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
