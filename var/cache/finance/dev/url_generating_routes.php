<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\finance\\LoginController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\finance\\LoginController::logout'], [], [['text', '/logout']], [], [], []],
    'app_main' => [[], ['_controller' => 'App\\Controller\\finance\\MainController::index'], [], [['text', '/']], [], [], []],
    'app_product' => [[], ['_controller' => 'App\\Controller\\finance\\ProductController::product'], [], [['text', '/product']], [], [], []],
    'app_add_images' => [['id'], ['_controller' => 'App\\Controller\\finance\\ProductController::addImages'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/images']], [], [], []],
    'app_delete_product' => [['id'], ['_controller' => 'App\\Controller\\finance\\ProductController::deleteProduct'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/product/delete']], [], [], []],
    'app_edit_product' => [['id'], ['_controller' => 'App\\Controller\\finance\\ProductController::editProduct'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/product/edit']], [], [], []],
    'app_delete_product_image' => [['id'], ['_controller' => 'App\\Controller\\finance\\ProductController::deleteImage'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/productImage/delete']], [], [], []],
    'app_sponsor' => [[], ['_controller' => 'App\\Controller\\finance\\SponsorController::sponsor'], [], [['text', '/sponsor']], [], [], []],
    'app_delete_sponsor' => [['id'], ['_controller' => 'App\\Controller\\finance\\SponsorController::deleteSponsor'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/sponsor/delete']], [], [], []],
    'app_edit_sponsor' => [['id'], ['_controller' => 'App\\Controller\\finance\\SponsorController::editSponsor'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/sponsor/edit']], [], [], []],
];
