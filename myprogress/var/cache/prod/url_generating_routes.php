<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'account' => [[], ['_controller' => 'App\\Controller\\AccountController::index'], [], [['text', '/compte']], [], []],
    'account_password' => [[], ['_controller' => 'App\\Controller\\AccountPasswordController::index'], [], [['text', '/compte/modifier-mon-mot-de-passe']], [], []],
    'admin' => [[], ['_controller' => 'App\\Controller\\Admin\\DashboardController::index'], [], [['text', '/admin']], [], []],
    'exercices' => [[], ['_controller' => 'App\\Controller\\ExerciceController::index'], [], [['text', '/les-exercices']], [], []],
    'exercice' => [['id'], ['_controller' => 'App\\Controller\\ExerciceController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/mon-exercice']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], []],
    'exercice_performance' => [[], ['_controller' => 'App\\Controller\\MyPerformanceController::index'], [], [['text', '/compte/exercice-performances']], [], []],
    'performance' => [['id'], ['_controller' => 'App\\Controller\\MyPerformanceController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/compte/mes-performances']], [], []],
    'edit_performance' => [['id'], ['_controller' => 'App\\Controller\\MyPerformanceController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/compte/modifier-performance']], [], []],
    'delete_performance' => [['id'], ['_controller' => 'App\\Controller\\MyPerformanceController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/compte/suprimer-performance']], [], []],
    'register' => [[], ['_controller' => 'App\\Controller\\RegisterController::index'], [], [['text', '/inscription']], [], []],
    'reset_password' => [[], ['_controller' => 'App\\Controller\\ResetPasswordController::index'], [], [['text', '/mot-de-passe-oublie']], [], []],
    'update_password' => [['token'], ['_controller' => 'App\\Controller\\ResetPasswordController::update'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/modifier-mon-mot-de-passe']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/connexion']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/compte/deconnexion']], [], []],
];
