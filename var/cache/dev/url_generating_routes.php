<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'logout' => [[], ['_controller' => 'App\\Controller\\ConnecteController::logout'], [], [['text', '/connect/logout']], [], []],
    'employe' => [[], ['_controller' => 'App\\Controller\\EmployeController::employe'], [], [['text', '/employe/home']], [], []],
    'app_employe_managerupdate' => [['numero'], ['_controller' => 'App\\Controller\\EmployeController::managerUpdate'], [], [['variable', '/', '[^/]++', 'numero', true], ['text', '/employe/terminer']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\HomeController::home'], [], [['text', '/']], [], []],
    'manager' => [[], ['_controller' => 'App\\Controller\\ManagerController::manager'], [], [['text', '/manager/home']], [], []],
    'app_manager_managerattribution' => [['numero'], ['_controller' => 'App\\Controller\\ManagerController::managerAttribution'], [], [['variable', '/', '[^/]++', 'numero', true], ['text', '/manager/attribution']], [], []],
    'app_manager_managerupdate' => [['numero', 'idEmploye'], ['_controller' => 'App\\Controller\\ManagerController::managerUpdate'], [], [['variable', '/', '[^/]++', 'idEmploye', true], ['variable', '/', '[^/]++', 'numero', true], ['text', '/manager/attribution']], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\NonConnecteController::login'], [], [['text', '/non-connecte/login']], [], []],
    'receptionniste' => [[], ['_controller' => 'App\\Controller\\ReceptionnisteController::receptionniste'], [], [['text', '/receptionniste/home']], [], []],
    'app_receptionniste_receptionnistereserve' => [['numero'], ['_controller' => 'App\\Controller\\ReceptionnisteController::receptionnisteReserve'], [], [['variable', '/', '[^/]++', 'numero', true], ['text', '/receptionniste/reserve']], [], []],
    'app_receptionniste_receptionnisteanettoyer' => [['numero'], ['_controller' => 'App\\Controller\\ReceptionnisteController::receptionnisteAnettoyer'], [], [['variable', '/', '[^/]++', 'numero', true], ['text', '/receptionniste/a_nettoyer']], [], []],
];
