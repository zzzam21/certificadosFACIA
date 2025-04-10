<?php
// Archivo para definir las rutas

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// (Objeto clase routeColeection) => routes
// Estructura: $routes->('/url', 'controlador'::'funcion',[opciones])
// ----- OTRO TIPO -----
// get = metodo de petición http
// /(:num) Parametro de la ruta
// controlador: controlador que manejara la solicitud
// /$1 = Parametro para el metodo $1 tomar el primer parametro
// $routes->get('/url/(:num)', 'controlador'::'funcion/$1',[opciones])

// Ruta Home
$routes->get('/', 'GenCertificados::certificated');

// Ruta de la pagina certificados de palmas
$routes->get('/certificated', 'GenCertificados::certificated');

// Ruta de la pagina certificados de Mujeres

$routes->get('/certificatedMujeres','GenCertificados::certificatedMujeres');

// Ruta del generador de certificados
$routes->get('/generarcertificado', 'certificados::gencertificado');




