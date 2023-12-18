<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 $routes->get('/login', 'LoginController::index');
 $routes->get('/', 'Home::index');
 $routes->get('/login', 'LoginController::index');
 $routes->get('/logout', 'LoginController::logout');
 $routes->post('/login_action', 'LoginController::login_action');

 $routes->get('/registrasi', 'Registrasi::index');

 $routes->get('/registrasiBPJS', 'RegistrasiBPJSController::index');
 $routes->post('/register_bpjs_action', 'RegistrasiBPJSController::register_bpjs_action');

 $routes->get('/registrasiNonBPJS', 'RegistrasiNonBPJSController::index');
 $routes->post('/register_non_bpjs_action', 'RegistrasiNonBPJSController::register_non_bpjs_action');

 $routes->get('/riwayatRegistrasi', 'RiwayatRegistrasiController::index');

 $routes->get('/requestObat', 'RequestObatController::index');
 $routes->post('/requestObat', 'RequestObatController::requestObat');

 $routes->get('/riwayatRequestObat', 'RiwayatRequestObatController::index');

 $routes->get('/logout', 'LoginController::logout');

 $routes->get('/about', 'AboutController::index');
