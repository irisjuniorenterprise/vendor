<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\finance\\LoginController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\finance\\LoginController::logout'], null, ['GET' => 0], null, false, false, null]],
        '/' => [[['_route' => 'app_main', '_controller' => 'App\\Controller\\finance\\MainController::index'], null, null, null, false, false, null]],
        '/product' => [[['_route' => 'app_product', '_controller' => 'App\\Controller\\finance\\ProductController::product'], null, null, null, false, false, null]],
        '/sponsor' => [[['_route' => 'app_sponsor', '_controller' => 'App\\Controller\\finance\\SponsorController::sponsor'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/images/([^/]++)(*:185)'
                .'|/admin/(?'
                    .'|product(?'
                        .'|/(?'
                            .'|delete/([^/]++)(*:232)'
                            .'|edit/([^/]++)(*:253)'
                        .')'
                        .'|Image/delete/([^/]++)(*:283)'
                    .')'
                    .'|sponsor/(?'
                        .'|delete/([^/]++)(*:318)'
                        .'|edit/([^/]++)(*:339)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        185 => [[['_route' => 'app_add_images', '_controller' => 'App\\Controller\\finance\\ProductController::addImages'], ['id'], null, null, false, true, null]],
        232 => [[['_route' => 'app_delete_product', '_controller' => 'App\\Controller\\finance\\ProductController::deleteProduct'], ['id'], null, null, false, true, null]],
        253 => [[['_route' => 'app_edit_product', '_controller' => 'App\\Controller\\finance\\ProductController::editProduct'], ['id'], null, null, false, true, null]],
        283 => [[['_route' => 'app_delete_product_image', '_controller' => 'App\\Controller\\finance\\ProductController::deleteImage'], ['id'], null, null, false, true, null]],
        318 => [[['_route' => 'app_delete_sponsor', '_controller' => 'App\\Controller\\finance\\SponsorController::deleteSponsor'], ['id'], null, null, false, true, null]],
        339 => [
            [['_route' => 'app_edit_sponsor', '_controller' => 'App\\Controller\\finance\\SponsorController::editSponsor'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
