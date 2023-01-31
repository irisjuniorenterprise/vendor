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
        '/blame' => [
            [['_route' => 'app_blame', '_controller' => 'App\\Controller\\nest\\BlameController::index'], null, null, null, false, false, null],
            [['_route' => 'app_blames', '_controller' => 'App\\Controller\\nest\\UserController::blameList'], null, null, null, false, false, null],
        ],
        '/blame/new' => [[['_route' => 'app_blame_new', '_controller' => 'App\\Controller\\nest\\BlameController::new'], null, null, null, false, false, null]],
        '/workshop' => [[['_route' => 'app_workshop', '_controller' => 'App\\Controller\\nest\\BlameController::workshopIndex'], null, null, null, false, false, null]],
        '/training' => [[['_route' => 'app_training', '_controller' => 'App\\Controller\\nest\\BlameController::trainingIndex'], null, null, null, false, false, null]],
        '/announcement' => [[['_route' => 'app_announcement', '_controller' => 'App\\Controller\\nest\\BlameController::announcementIndex'], null, null, null, false, false, null]],
        '/meeting' => [[['_route' => 'app_meeting', '_controller' => 'App\\Controller\\nest\\BlameController::meetingIndex'], null, null, null, false, false, null]],
        '/poll' => [[['_route' => 'app_poll', '_controller' => 'App\\Controller\\nest\\BlameController::pollIndex'], null, null, null, false, false, null]],
        '/library' => [[['_route' => 'app_library', '_controller' => 'App\\Controller\\nest\\LibraryController::index'], null, null, null, false, false, null]],
        '/library/new' => [[['_route' => 'app_library_new', '_controller' => 'App\\Controller\\nest\\LibraryController::new'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\nest\\MainController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\nest\\MainController::logout'], null, ['GET' => 0], null, false, false, null]],
        '/main' => [[['_route' => 'app_main', '_controller' => 'App\\Controller\\nest\\MainController::main'], null, ['GET' => 0], null, false, false, null]],
        '/eagle' => [[['_route' => 'app_eagles', '_controller' => 'App\\Controller\\nest\\UserController::index'], null, null, null, false, false, null]],
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
                .'|/blame/(?'
                    .'|delete/([^/]++)(*:194)'
                    .'|update/(?'
                        .'|([^/]++)(*:220)'
                        .'|submit/([^/]++)(*:243)'
                    .')'
                .')'
                .'|/library/(?'
                    .'|delete/([^/]++)(*:280)'
                    .'|update/(?'
                        .'|submit/([^/]++)(*:313)'
                        .'|([^/]++)(*:329)'
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
        194 => [[['_route' => 'app_blame_delete', '_controller' => 'App\\Controller\\nest\\BlameController::delete'], ['id'], null, null, false, true, null]],
        220 => [[['_route' => 'app_blame_update', '_controller' => 'App\\Controller\\nest\\BlameController::edit'], ['id'], null, null, false, true, null]],
        243 => [[['_route' => 'app_blame_update_submit', '_controller' => 'App\\Controller\\nest\\BlameController::update'], ['id'], ['POST' => 0], null, false, true, null]],
        280 => [[['_route' => 'app_library_delete', '_controller' => 'App\\Controller\\nest\\LibraryController::delete'], ['id'], null, null, false, true, null]],
        313 => [[['_route' => 'app_library_update_submit', '_controller' => 'App\\Controller\\nest\\LibraryController::update'], ['id'], null, null, false, true, null]],
        329 => [
            [['_route' => 'app_library_update', '_controller' => 'App\\Controller\\nest\\LibraryController::edit'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
