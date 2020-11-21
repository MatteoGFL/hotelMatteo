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
        '/connect/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\ConnecteController::logout'], null, null, null, false, false, null]],
        '/employe/home' => [[['_route' => 'employe', '_controller' => 'App\\Controller\\EmployeController::employe'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::home'], null, null, null, false, false, null]],
        '/manager/home' => [[['_route' => 'manager', '_controller' => 'App\\Controller\\ManagerController::manager'], null, null, null, false, false, null]],
        '/non-connecte/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\NonConnecteController::login'], null, null, null, false, false, null]],
        '/receptionniste/home' => [[['_route' => 'receptionniste', '_controller' => 'App\\Controller\\ReceptionnisteController::receptionniste'], null, null, null, false, false, null]],
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
                .'|/employe/terminer/([^/]++)(*:195)'
                .'|/manager/attribution/([^/]++)(?'
                    .'|(*:235)'
                    .'|/([^/]++)(*:252)'
                .')'
                .'|/receptionniste/(?'
                    .'|reserve/([^/]++)(*:296)'
                    .'|a_nettoyer/([^/]++)(*:323)'
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
        195 => [[['_route' => 'app_employe_managerupdate', '_controller' => 'App\\Controller\\EmployeController::managerUpdate'], ['numero'], null, null, false, true, null]],
        235 => [[['_route' => 'app_manager_managerattribution', '_controller' => 'App\\Controller\\ManagerController::managerAttribution'], ['numero'], null, null, false, true, null]],
        252 => [[['_route' => 'app_manager_managerupdate', '_controller' => 'App\\Controller\\ManagerController::managerUpdate'], ['numero', 'idEmploye'], null, null, false, true, null]],
        296 => [[['_route' => 'app_receptionniste_receptionnistereserve', '_controller' => 'App\\Controller\\ReceptionnisteController::receptionnisteReserve'], ['numero'], null, null, false, true, null]],
        323 => [
            [['_route' => 'app_receptionniste_receptionnisteanettoyer', '_controller' => 'App\\Controller\\ReceptionnisteController::receptionnisteAnettoyer'], ['numero'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
