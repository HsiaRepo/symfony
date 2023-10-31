<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/([^/]++)?(*:52)'
                .'|/messages/(\\d+)(*:74)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        52 => [[['_route' => 'app_index', 'limit' => '3', '_controller' => 'App\\Controller\\HelloController::index'], ['limit'], null, null, false, true, null]],
        74 => [
            [['_route' => 'app_show_one', '_controller' => 'App\\Controller\\HelloController::showOne'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
