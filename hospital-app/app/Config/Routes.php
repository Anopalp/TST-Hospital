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
 $routes->get('/registrasiNonBPJS', 'RegistrasiNonBPJS::index');
 $routes->get('/riwayatRegistrasi', 'RiwayatRegistrasi::index');
 $routes->get('/penjualanObat', 'PenjualanObat::index');
 $routes->get('/riwayatPenjualanObat', 'RiwayatPenjualanObat::index');
