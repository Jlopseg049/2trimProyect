<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'admin' => [[], ['_controller' => 'App\\Controller\\Admin\\DashboardController::index'], [], [['text', '/admin']], [], [], []],
    'precioCanal_show' => [['author'], ['_controller' => 'App\\Controller\\CanalController::findPrecioByAuthor'], [], [['variable', '/', '[^/]++', 'author', true], ['text', '/canal/precio']], [], [], []],
    'CanalAuthor_show' => [['author'], ['_controller' => 'App\\Controller\\CanalController::findCanalByAuthor'], [], [['variable', '/', '[^/]++', 'author', true], ['text', '/canal/find']], [], [], []],
    'prueba' => [[], ['_controller' => 'App\\Controller\\IndexController::index'], [], [['text', '/index']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_verify_email' => [[], ['_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], [], [['text', '/verify/email']], [], [], []],
    'index' => [[], ['_controller' => 'App\\Controller\\RootController::index'], [], [['text', '/']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
];
