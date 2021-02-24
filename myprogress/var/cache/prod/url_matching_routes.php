<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/compte' => [[['_route' => 'account', '_controller' => 'App\\Controller\\AccountController::index'], null, null, null, false, false, null]],
        '/compte/modifier-mon-mot-de-passe' => [[['_route' => 'account_password', '_controller' => 'App\\Controller\\AccountPasswordController::index'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/les-exercices' => [[['_route' => 'exercices', '_controller' => 'App\\Controller\\ExerciceController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/compte/exercice-performances' => [[['_route' => 'exercice_performance', '_controller' => 'App\\Controller\\MyPerformanceController::index'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'register', '_controller' => 'App\\Controller\\RegisterController::index'], null, null, null, false, false, null]],
        '/mot-de-passe-oublie' => [[['_route' => 'reset_password', '_controller' => 'App\\Controller\\ResetPasswordController::index'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/compte/deconnexion' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/mo(?'
                    .'|n\\-exercice/([^/]++)(*:33)'
                    .'|difier\\-mon\\-mot\\-de\\-passe/([^/]++)(*:76)'
                .')'
                .'|/compte/(?'
                    .'|m(?'
                        .'|es\\-performances/([^/]++)(*:124)'
                        .'|odifier\\-performance/([^/]++)(*:161)'
                    .')'
                    .'|suprimer\\-performance/([^/]++)(*:200)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        33 => [[['_route' => 'exercice', '_controller' => 'App\\Controller\\ExerciceController::show'], ['id'], null, null, false, true, null]],
        76 => [[['_route' => 'update_password', '_controller' => 'App\\Controller\\ResetPasswordController::update'], ['token'], null, null, false, true, null]],
        124 => [[['_route' => 'performance', '_controller' => 'App\\Controller\\MyPerformanceController::show'], ['id'], null, null, false, true, null]],
        161 => [[['_route' => 'edit_performance', '_controller' => 'App\\Controller\\MyPerformanceController::edit'], ['id'], null, null, false, true, null]],
        200 => [
            [['_route' => 'delete_performance', '_controller' => 'App\\Controller\\MyPerformanceController::delete'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
